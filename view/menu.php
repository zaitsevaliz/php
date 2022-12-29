<a href="/">Главная</a>
<a href="/?controller=security">Авторизация</a>
<?php if ($username !== null): ?>
<a href="/?controller=tasks">Задачи</a> <br>
<p>Приветствуем, <?= $username ?>. <a href="?action=logout">Выход</a></p>
<?php endif;?>    
