<?php
require_once "model/modelbook";

$action = '';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}

switch ($action) {
case 'edit'
        if(isset($_POST['SubmitBook'])){
            $id = $_POST['id'];
            $title = $_POST['title'];
            $author = $_POST['author'];
            $published_date = $_POST['published_date'];
            $publisher = $_POST['publisher'];
            $description = $_POST['description'];
            $result = Bookedit($id,$title,$author,$published_date,$publisher,$description);
            $data = BookgetAll();
            require 'view/viewbook';
        }
        break;
    }
    ?>        
