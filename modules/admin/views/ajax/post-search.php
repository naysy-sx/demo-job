<table>
    <tr>
        <td class="text-center">Картинка</td>
        <td>Название статьи</td>
    </tr>
<?php
foreach ($posts as $post) {
    echo "<tr class='select-post' data-id='{$post['id']}'>";
    echo "<td class='text-center'><img src='{$post['image']}' style='width: 100px;'></td>";
    echo "<td>{$post['title']}</td>";
    echo "</tr>";
}
?>
</table>