<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>

<?php include "menu.php" ?>
<?php


?>
<h2>Ваши задачи</h2>
<form action="/?controller=tasks&action=add" method="post" >
        <input type="text" name="task" placeholder="Добавьте задачу">
        <input type="submit" name="" value="Добавить">
</form> <br>

    <?php if (!empty($tasks)): ?>
        <?php foreach ($tasks as $key => $task): ?>
            <div>
            - <?=$task->getDescription()?>
            <a href="/?controller=tasks&action=done&key=<?=$key?>">X</a><br>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        Нет задач
    <?php endif; ?>

</body>