<?php    
if(isset($_POST['SubmitButton'])){ //check if form was submitted
  
    

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webtech";

    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn)
    {
        die("connection failed".mysqli_connect_error());
    }

    /*$sql = "INSERT INTO blog_articles(artnum,artname,artdate,popularity) VALUES(2,'your webtech project','2018-11-09',0)";
    //$sql = "DELETE FROM blog_articles WHERE artnum=1";
    if(mysqli_query($conn,$sql))
    {
        echo "Insertion sucessful<br>";
    }
    else
    {
        echo "failed: ".mysqli_error($conn);
    }*/

    $sql = "SELECT * FROM blog_articles ORDER BY popularity DESC,artdate DESC";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        echo "Available articles: <br>";
        while($row = mysqli_fetch_assoc($result))
        {
            echo "Article No:".$row['artnum']." ".$row['artname']." ".$row['artdate']." popularity:".$row['popularity']."<br>";
        }
    }
    else
        echo "no results found<br>";
    mysqli_close($conn);
}
?>

