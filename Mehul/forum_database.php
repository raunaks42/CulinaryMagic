<?php

if(isset($_POST['SubmitButton'])){
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webtech";

    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn)
    {
        die("connection failed".mysqli_connect_error());
    }

    /*$sql = "INSERT INTO forum_users(unum,uemail,upw) VALUES(1,'xyz@gmail.com','xyz')";
    //$sql = "DELETE FROM blog_articles WHERE artnum=1";
    if(mysqli_query($conn,$sql))
    {
        echo "Insertion sucessful<br>";
    }
    else
    {
        echo "failed: ".mysqli_error($conn);
    }*/



}
?>