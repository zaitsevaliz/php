<?php

class TaskProvider
{
    // private array $tasks;
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        // $this->tasks = $_SESSION['tasks'] ?? [];
        $this->pdo = $pdo;
    }

    public function getUndoneList(): array
    {
        // $tasks = [];
        $statement = $this->pdo->prepare('SELECT * FROM `tasks` WHERE `userid` = :userId');
        $statement->execute([
            'userId' => $_SESSION['user_id'], //$userId
        ]);

        // $tasks = $statement->fetchAll();
        $tasks = $statement->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Task::class);  

        return $tasks;
    }
    public function addTask(Task $task): bool 
    {
        //insert в бд эту таск
        $statement = $this->pdo->prepare(
            'INSERT INTO tasks (userId, description, isDone) VALUES (:userId, :description, :isDone)' 
        );
 
        return $statement->execute([
            'userId' => $_SESSION['user_id'],
            'description' => $task->getDescription(),
            'isDone' => 0
        ]);
        // $_SESSION['tasks'][] = $task;
        // $this->tasks[] = $task;
    } 
    public function deleteTask(int $id): void 
    {
        //deletetask(айди в бд)
        //и во вью task выводим не ключ а айди
        $statement = $this->pdo->prepare(
            'DELETE FROM `tasks` WHERE `id` = :id'
        );
        $statement->execute([
            'id' => $id,
        ]);

        // unset($_SESSION['tasks'][$key]);
        // unset($this->tasks[$key]);
    }
}
