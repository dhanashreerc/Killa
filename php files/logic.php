<?php

    // Don't display server errors 
    ini_set("display_errors", "on");

    // Initialize a database connection 127.0.0.1
    //$conn = mysqli_connect("localhost", "homestead", "secret", "packetcode-test");
	$conn=mysqli_connect('127.0.0.1','root','','blogdb');

    // Destroy if not possible to create a connection
    if(!$conn){
        echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
    }
    else{
        echo "Connected successfully";
    }

    // Get data to display on index page
    $sql = "SELECT * FROM data";
    $query = mysqli_query($conn, $sql);

    // Create a new post
    if(isset($_REQUEST['new_post'])){
		
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];
		$user = $_REQUEST['user'];
		
        $sql = "INSERT INTO data(user,title, content) VALUES('$user','$title', '$content')";
        mysqli_query($conn, $sql);

        echo $sql;

        header("Location: blog.php?info=added");
        exit();
    }

    // Get post data based on id
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM data WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }

    // Delete a post
    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM data WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: blog.php");
        exit();
    }

    // Update a post
    if(isset($_REQUEST['update'])){
        $id = $_REQUEST['id'];
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];

        $sql = "UPDATE data SET title = '$title', content = '$content' WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: blog.php");
        exit();
    }

?>