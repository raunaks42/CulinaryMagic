<?php

    if(isset($_GET['id']))
    {
        $dnum = $_GET['id'];
        
        session_start();

        $unum = $_SESSION['unum'];
            //echo $usrname."<br>";
        

        $uemail = $_SESSION['uemail'];
            //echo $usrname."<br>";
        

        if(isset($_REQUEST['submit_btn_reply']))
        {
            if(isset($_POST['reply']))
            {
                $reply = $_POST['reply'];
                //echo $usrname."<br>";
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

            $sql = "INSERT INTO forum_discussion_replies(dnum,unum,reply) VALUES('$dnum','$unum','$reply')";
            
            if(mysqli_query($conn,$sql))
            {
                echo "Reply Insertion sucessful<br>";
            }
            else
            {
                echo "failed: ".mysqli_error($conn);
            }
            mysqli_close($conn);

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

        $sql = "UPDATE forum_discussion_topics SET popularity=popularity+1 WHERE dnum='$dnum'";
        if(mysqli_query($conn,$sql))
        {
            //echo "Increment sucessful<br>";
        
        $sql = "SELECT * FROM forum_discussion_topics WHERE dnum='$dnum'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
            //echo "Available articles: <br>";
            $row = mysqli_fetch_assoc($result);
            
            //echo "Article No:".$row['artnum']." ".$row['artname']." ". date('g:i A, l - d M Y', strtotime($row['artdate']))." popularity:".$row['popularity']."<br>".$row['content'];
            echo "<b>".$row['dsub']."</b><br>\t\t ". date('g:i A, l - d M Y', strtotime($row['ddate']))." views:".$row['popularity']."<br><br>".$row['ddesc'];
            
            $sql1 = "SELECT * FROM forum_discussion_replies WHERE dnum='$dnum' ORDER BY rdate DESC";
            echo "<br><br>Replies:<br>";
            $result1 = mysqli_query($conn,$sql1);
            if(mysqli_num_rows($result1)>0)
            {
                
                while($row1 = mysqli_fetch_assoc($result1))
                {
                    echo "<br>".$uemail." replied ". date('g:i A, l - d M Y', strtotime($row1['rdate']))."<br><br>".$row1['reply']."<br>";
                }
                
                
                

            }
            else
                echo "no results found<br>";

            echo "<br><form action='' method='POST' id='replyform'>";
            echo "<textarea rows='4' cols='50' name='reply' form='replyform'>
            </textarea><br>";
            echo "<input type='submit' value='Submit Reply' name='submit_btn_reply'>";
            echo "</form>";
            

        }
        else
            echo "no results found<br>";
        }
        else
        {
            echo "failed: ".mysqli_error($conn);
        } 
        mysqli_close($conn);
    }
?>