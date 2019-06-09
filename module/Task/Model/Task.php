<?php

namespace Task\Model;

use Application\Model\TaskEntity;
use Core\Upload;

class Task extends TaskEntity
{
    /**
     * Get all tasks
     */
    public function getAll()
    {
        $query = $this->db->prepare('SELECT * FROM task');
        $query->execute();
        
        return $query->fetchAll();
    }

    /**
     * Get amount tasks
     */
    public function getAmountTasks()
    {
        $query = $this->db->prepare('SELECT COUNT(id) AS amount_of_tasks FROM task');
        $query->execute();

        return $query->fetch()->amount_of_tasks;
    }

    /**
     * Get a task from database
     * @param integer $taskId
     * @return object $db
     */
    public function getTask($taskId)
    {
        $query = $this->db->prepare('SELECT * FROM task WHERE id = :id LIMIT 1');
        $query->execute(array(':id' => $taskId));
        
        return ($query->rowcount() ? $query->fetch() : false);
    }

    /**
     * Add a task to database
     * @param array $data Data for add task
     */
    public function addTask(array $data)
    {
        extract($data);
        $sql = 'INSERT INTO task (username, email, comments) VALUES (:userName, :email, :comments)';
        $query = $this->db->prepare($sql);

        $query->execute(array(
            ':userName' => $userName,
            ':email'    => $email,
            ':comments' => $comments
        ));


    }

    /**
     * Update a task in database
     * @param array $data Data for update task
     */
    public function updateTask(array $data)
    {
        extract($data);
        $query = $this->db->prepare('UPDATE task SET comments = :comments, status = :status WHERE id = :id');

        $query->execute(array (
            ':comments' => $comments,
            ':status'   => $status,
            ':id'       => $taskId
        ));
    }
}