<a href="/">Главная</a>
<a href="/?controller=security">Авторизация</a>
<a href="/?controller=tasks">Задачи</a> <br>

<?php if ($username !== null): ?>
    <p>Приветствуем, <?= $username ?>. <a href="?action=logout">Выход</a></p>
<?php endif;?>    
