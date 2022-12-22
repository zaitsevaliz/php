<?php
class Task{
    private string $description;
    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private DateTime $dateDone;
    private int $priority;
    private bool $isDone = false;
    private User $user;
    public array $comments = [];
    public function __construct(string $description, user $user)
    {
        $this->description = $description;
        $this->dateCreated = new DateTime();
    }
    public function markAsDone(): bool
    {
        $this->isDone = true;
        $this->dateUpdated = new DateTime();
        $this->dateDone = new DateTime();
    }

    public function setComments(array $comment)
    {
        $this->comments[] = $comment;
    }

    public function getDescription(): string 
    {
        return $this->description;
    }

    public function setDescription($description) 
    {
        $this->description = $description;
        $this->dateUpdated = new DateTime();
    }

    public function getDateCreated(): DateTime 
    {
        return $this->dateCreated;
    }

    public function getdateUpdated(): DateTime 
    {
        return $this->dateUpdated;
    }

    public function getDateDone(): DateTime 
    {
        return $this->dateDone;
    }

    public function getPriority(): int 
    {
        return $this->priority;
    }

    public function setPriority($priority): int 
    {
        $this->priority = $priority;
    }

    public function getIsDone(): bool 
    {
        return $this->isDone;
    }
    
    public function getComment(): string 
    {
        return $this->comment;
    }
   
}

class User {
    public string $username;
    public string $email;
    public ?string $sex;
    public ?int $age;
    public bool $isActive = true;
 
    function __construct(string $username, string $email)
    {
        $this->username = $username;
        $this->email = $email;
    }
 
 
    function getUsername(): string
    {
        return $this->username ?? 'unknown';
    }
 }
 
 class Comment{
    public User $author;
    public Task $task;
    public string $text;
    function __construct(User $user, Task $task, string $text)
    {
        $this->author = $user;
        $this->task = $task;
        $this->text = $text;
    }

 }
 class TaskService{
    static function addComment(User $user, Task $task ,string $text)
    {
        $comment = new Comment($user,$task,$text);
        $task->setComments((array)$comment);
    }
 }