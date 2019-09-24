<?php

    if(isset($_GET['id']))
    {
        $artnum = $_GET['id'];
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webtech";

    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn)
    {
        die("connection failed".mysqli_connect_error());
    }

    $sql = "UPDATE blog_articles SET popularity=popularity+1 WHERE artnum='$artnum'";
    if(mysqli_query($conn,$sql))
    {
        //echo "Increment sucessful<br>";
    }
    else
    {
        echo "failed: ".mysqli_error($conn);
    } 
    $sql = "SELECT * FROM blog_articles WHERE artnum='$artnum'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        //echo "Available articles: <br>";
        $row = mysqli_fetch_assoc($result);
        
        //echo "Article No:".$row['artnum']." ".$row['artname']." ". date('g:i A, l - d M Y', strtotime($row['artdate']))." popularity:".$row['popularity']."<br>".$row['content'];
        echo "<b>".$row['artname']."</b><br>\t\t ". date('g:i A, l - d M Y', strtotime($row['artdate']))." views:".$row['popularity']."<br><br>".$row['content'];
        
    }
    else
        echo "no results found<br>";
    mysqli_close($conn);
?>