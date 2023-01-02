<?php   
$pdo = new PDO('sqlite:database.db');

// $query = 'CREATE TABLE `students` (
//     id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,

//     name VARCHAR(100) NOT NULL
//  )';
// $studentName = "Иванов Иван";
// $statement = $pdo->prepare("INSERT INTO `students` (`name`) VALUES (:name)");
// $statement->execute([
//     'name' => $studentName
// ]);
// $id = 1;
// $statement = $pdo->prepare('SELECT * FROM `students` WHERE `id` = :id');
// $statement->execute([
//     'id' => $id
// ]);
// print_r($statement->fetch());
$statement = $pdo->prepare('SELECT * FROM `students`');
$statement->execute();
// while ($statement && $studentData = $statement->fetch()) {
//     echo $studentData['name']."\n";
// }
//  print_r($statement->fetchAll());
$studentData = $statement->fetchAll(PDO::FETCH_ASSOC); // Устанавливаем режим
print_r($studentData);
