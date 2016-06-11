<?php
session_start();
include_once('dbConfig.php');
if(isset($_POST['bulk_delete_submit'])){
    $idArr = $_POST['checked_id'];
    foreach($idArr as $id){
        mysqli_query($conn,"DELETE FROM users WHERE id=".$id);
    }
    $_SESSION['success_msg'] = 'Delete Successful';
    header("Location:index.php");
}
?>