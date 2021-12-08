<?php

require_once '../vendor/autoload.php';

use App\classes\ToDoList;


if (isset($_POST['btn']))
{
    $todo = new ToDoList($_POST);
    $message=$todo->add();
    include  'todo_list.php';

}
// } else if (isset($_GET['status']))
// {
//     if ($_GET['status']== 'manage')
//     {
//         $student = new Student();
//         $students=$student->getAllStudentInfo();
//         include 'manage.php';
//     }

// }
// else if(isset($_GET['delete']))
// {
//     $student = new Student();
//     $student->delete($_GET['delete']);
// }