<?php
namespace  App\classes;

class ToDoList 
{
    private $task;
    private $link;
    private $sql;
    private $queryResult;
    private $data;
    private $i;
    private $row;

    public function __construct($data=null)
    {
        if($data)
        {
            $this->task = $data['task'];
        }
       
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
    public  function getAllTasks()
    {
        {
            $this->link = mysqli_connect('localhost','root','','todo_list');
            if ($this->link)
            {
                $this->sql ="SELECT * FROM tasks";
                if (mysqli_query($this->link ,$this->sql))
                {
                    $this->queryResult = mysqli_query($this->link ,$this->sql);
                    $this->i = 0;
                    while ($this->row=mysqli_fetch_assoc($this->queryResult ))
                    {
                        $this->data[$this->i]['id']= $this->row ['id'];
                        $this->data[$this->i]['task']= $this->row ['task'];
                        $this->i++;
                    }
    
    
                    return $this->data;
                }
                else
                {
                    die('Query problem'.mysqli_error($this->link));
                }
            }
        }
    }
    public  function  delete($id)
    {
        $this->link = mysqli_connect('localhost','root','','todo_list');
        $this->sql ="DELETE FROM tasks  WHERE  id= '$id'";
        mysqli_query($this->link ,$this->sql);
       header('Location: action.php?status=list');

    }
}