<?php
    
    if(isset($_REQUEST['submit_btn_disc']))
    {
        session_start();
        
        $unum = $_SESSION["unum"];
            //echo $unum."<br>";
        

        
        $uemail = $_SESSION['uemail'];
            //echo $uemail."<br>";
        

        if(isset($_POST['dsub']))
        {
            $dsub = $_POST['dsub'];
            //echo $psw."<br>";
        }

        if(isset($_POST['ddesc']))
        {
            $ddesc = $_POST['ddesc'];
            //echo $psw."<br>";
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

        $sql = "INSERT INTO forum_discussion_topics(unum,dsub,popularity,ddesc) VALUES('$unum','$dsub',0,'$ddesc')";
        //$sql = "DELETE FROM blog_articles WHERE artnum=1";
        /*if(mysqli_query($conn,$sql))
        {
            echo "Insertion sucessful<br>";
        }
        else
        {
            echo "failed: ".mysqli_error($conn);
        }*/
        mysqli_close($conn);
    }
    else
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "webtech";

        $conn = mysqli_connect($servername,$username,$password,$dbname);
        if(!$conn)
        {
            die("connection failed".mysqli_connect_error());
        }

        $sql = "SELECT * FROM forum_discussion_topics ORDER BY popularity DESC,ddate DESC";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
            echo "Available discussions: <br><br>";
            while($row = mysqli_fetch_assoc($result))
            {
                //echo "Article No:".$row['artnum']." ".$row['artname']." ". date('g:i A, l - d M Y', strtotime($row['artdate']))." popularity:".$row['popularity']."<br>".$row['content'];
                echo "<a href='forum_discussions.php?id=".$row['dnum']."'>".$row['dsub']."</a> ". date('g:i A, l - d M Y', strtotime($row['ddate']))." views:".$row['popularity']."<br><br>";
            }
        }
        else
            echo "no results found<br>";
        mysqli_close($conn);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>starting discussion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="" method="POST" id="fform">
        <br>
        <!--<label>Unum <input type="number" name="unum" id="usernum"><br></label-->
        <label>Subject  <input type="text" name="dsub" id="subject"><br></label>
        <label>Description <textarea rows="4" cols="50" name="ddesc" form="fform"></textarea><br></label>
        <input type="submit" value="Submit" name="submit_btn_disc">

    </form>
</body>
</html>