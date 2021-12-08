<?php
namespace  App\classes;

class ToDoList 
{
    private $task;
    private $link;
    private $sql;

    public function __construct($data)
    {
        $this->task=$data['task'];
    }
    public function add()
    {
        $this->link = mysqli_connect('localhost','root','','todo_list');
        if ($this->link)
        {

            $this->sql ="INSERT INTO tasks (task) VALUES (' $this->task')";
            if (mysqli_query($this->link ,$this->sql))
            {
                return 'Tasks Added';
            }
            else
            {
                die('Query problem'.mysqli_error($this->link));
            }
        }
    }
}