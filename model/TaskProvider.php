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

    public function getUndoneList($userId): array
    {
        // $tasks = [];
        $statement = $this->pdo->prepare('SELECT * FROM `tasks` WHERE `userid` = :userId');
        $statement->execute([
            'userId' => $userId, //$userId
        ]);

        $tasks = $statement->fetchAll(); 
      
        return $tasks;
    }
    public function addTask(Task $task, int $userId): void 
    {
        //insert в бд эту таск
        $statement = $this->pdo->prepare(
            'INSERT INTO tasks (userId, description, isDone) VALUES (:userId, :description, :isDone)' 
        );
 
        $statement->execute([
            'userId' => $userId,
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
