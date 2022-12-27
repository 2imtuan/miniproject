<?php
require_once "model/Book.php";

$action = '';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}

switch ($action) {

case 'delete'
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $result = Bookdelete($id);
            $data = BookgetAll();
            require 'viewbookview_book.php';
        }
        break;
    }
?>    
