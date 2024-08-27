<script>
    if (localStorage.getItem('adm_access') != '123'){
        pass = prompt('Введите пароль');

        if (pass != '123') {
            alert('Извините, пароль не верен'), top.location.href="/error-access"
        } else {
            localStorage.setItem('adm_access', '123');
        }
    }
</script>