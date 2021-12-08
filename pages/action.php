<?php

require_once '../vendor/autoload.php';

use App\classes\ToDoList;



if (isset($_POST['btn']))
{
    $todo = new ToDoList($_POST);
    $message=$todo->add();
    include  'add_todo_list.php';

}
// } 
else if (isset($_GET['status']))
{
    if ($_GET['status']== 'list')
    {
        $todo = new ToDoList();
        $allData =$todo->getAllTasks();
        include 'list.php';
    }

 }
else if(isset($_GET['delete']))
{
     $todo = new ToDoList();
    $todo->delete($_GET['delete']);
}