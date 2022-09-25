<?php
    session_start();
    session_start(); 
    if(isset($_POST['edit'])){ 
        include ('../db.php');
        $id = $_SESSION['movies']['id'];
        $name = $_POST['name']; 
        $genre = $_POST['genre']; 
        $release = $_POST['release']; 
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];
?>