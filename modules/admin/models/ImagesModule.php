<?php

namespace app\modules\admin\models;

/**
 * Модуль картинок под разные устройства
 * @package app\modules\admin\models
 */
class ImagesModule
{
    public $images;
    public $dir = 'uploads_for_posts/';

    /** todo
     * Возвращает массив с разрешенными расширениями изображений
     * (проверка отключена до запуска админки т.к. непонятно, какие именно файлы можно загружать)
     * @return string[]
     */
    private static function rules(): array
    {
        return [
            'image/png',
            'image/jpeg',
            'image/pjpeg',
            'image/gif',
            'image/webp',
            'image/svg+xml',
            'image/tiff',
            'image/vnd.microsoft.icon',
            'image/vnd.wap.wbmp',
        ];
    }

    /**
     * Проверка допустимости загружаемого расширения
     *
     * @param $image
     *
     * @return int
     */
    private static function imageExtHaveError($image): int
    {
        $ext_array       = self::rules();
        $error           = 1;

        foreach ($ext_array as $ext) {
            if ($image["filetype"] == $ext) {
                $error = 0;
            }
        }

        return $error;
    }

    /**
     * Принимаем данные
     *
     * @param $files
     * @param $post
     *
     * @return bool
     */
    public function getData($files, $post): bool
    {
        // номера рандомных ключей
        $keys = [];

        // находим все ключи
        foreach ($_FILES['images'] as $type_info => $images_data) {
            foreach ($images_data as $key => $data) {
                $keys[$key] = $key;
            }
        }

        // перебираем всю информацию, используя полученные ключи и сохраняем в $this->images
        foreach ($keys as $key) {
            $this->images[$key] = [
                'img1' => [
                    'filename'          => $files["images"]['name'][$key]['comp'],
                    'filesize'          => $files["images"]['size'][$key]['comp'],
                    'filetype'          => $files["images"]['type'][$key]['comp'],
                    'url_before_upload' => $files["images"]['tmp_name'][$key]['comp'],
                    'description'       => $post["images"][$key]['comp_img_description'],
                    'alt'               => $post["images"][$key]['comp_img_alt'],
                    'title'             => $post["images"][$key]['comp_img_title'],
                    'old_patch'         => $post["images"][$key]['img1']['old_patch'],
                ],
                'img2' => [
                    'filename'          => $files["images"]['name'][$key]['pad'],
                    'filesize'          => $files["images"]['size'][$key]['pad'],
                    'filetype'          => $files["images"]['type'][$key]['pad'],
                    'url_before_upload' => $files["images"]['tmp_name'][$key]['pad'],
                    'description'       => $post["images"][$key]['pad_img_description'],
                    'alt'               => $post["images"][$key]['pad_img_alt'],
                    'title'             => $post["images"][$key]['pad_img_title'],
                    'old_patch'         => $post["images"][$key]['img2']['old_patch'],
                ],
                'img3' => [
                    'filename'          => $files["images"]['name'][$key]['mobile'],
                    'filesize'          => $files["images"]['size'][$key]['mobile'],
                    'filetype'          => $files["images"]['type'][$key]['mobile'],
                    'url_before_upload' => $files["images"]['tmp_name'][$key]['mobile'],
                    'description'       => $post["images"][$key]['mobile_img_description'],
                    'alt'               => $post["images"][$key]['mobile_img_alt'],
                    'title'             => $post["images"][$key]['mobile_img_title'],
                    'old_patch'         => $post["images"][$key]['img3']['old_patch'],
                ],

                'status' => ['message' => 'Изображения получены и ждут обработки'],
            ];
        }

        return true;
    }

    /**
     * Загрузка картинок и добавление информации о них в массив
     * Возвращает итоговый массив с данными по картинкам и статусам
     *
     * @return array
     */
    public function uploadImage(): array
    {
        $error = 0;

        if (!empty($this->images) && is_array($this->images)) {
            foreach ($this->images as $module_random_num => $images) {
                foreach ($images as $img_num => $image) {
                    if ($img_num != 'status') {
                        // находим расширение файла
                        $cr_ext = end(explode('.', $image['filename']));

                        // если не пуст временный адрес загружаемой картинки
                        // (т.е. пользователь загружает картинку)
                        if (!empty($image['url_before_upload'])) {
                            $rand      = rand(100000, 999999);
                            $new_name  = md5($rand) . ".{$cr_ext}";
                            $full_path = $this->dir . $new_name;

                            // если не пуст $image["url_before_upload"] и получилось загрузить из этого пути
                            if (!empty($image["url_before_upload"]) &&
                                move_uploaded_file($image["url_before_upload"], $full_path)) {
                                $this->images[$module_random_num][$img_num]['final_patch'] = $full_path;
                                $this->images[$module_random_num][$img_num]['rand_id'] = $module_random_num;
                                // imageResizer (?)
                                $this->images[$module_random_num]['status'][$img_num] = 'Картинка загружена';
                            } else {
                                $this->images[$module_random_num]['status'][$img_num] = 'Ошибка загрузки';
                                $error                                                = 1;
                            }
                        } else {
                            $this->images[$module_random_num][$img_num]['final_patch'] =
                                $this->images[$img_num]['old_patch'];
                        }
                    }
                }
            }

            if ($error == 0) {
                $this->images['status']['message'] = 'Все изображения загружены';
            } else {
                $this->images['status']['message'] = 'Какие-то изображения не были загружены / заполнены';
            }

            echo '<pre>';
            var_dump($this->images);

            return $this->images;
        }

        return ['status' => 'Первоначальный массив с данными пуст =('];
    }
}