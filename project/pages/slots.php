<?php 
// Проверка авторизации.
if (!isLoggedIn()):
    ?>
    <div>
        Для доступа к играм необходимо <a href = 'index.php?page=register'> зарегистрироваться </a>.
    </div>
<?php 
else:?>
    <div>
        Можете играть!
    </div>
<?php endif ?>
<a href='index.php?page=games'> назад </a>