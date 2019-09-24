<?php    
  
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webtech";

    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn)
    {
        die("connection failed".mysqli_connect_error());
    }

    /*$sql = "INSERT INTO blog_articles(artname,popularity,content) VALUES('The Fetish for Indian Dessert',0,'<br><br>I just can’t get over my love for desserts! <br><br>
    Being a true bong at heart ‘Mishti’ is an integral part of my foodie journey … And Indian sweets and the variety which it offers across the Indian geography is something to swear by. With Malpua’s, Halwa’s, Ladoos, Barfi’s, Rosogolla’s, Sandesh, Puran Poli, Kheer, Payasam, Sheera, …the list goes endless.<br><br> 
    To my surprise, and little sadness which creeps in everytime I checkout the dessert menu these days at any restaurant ! Its just chocolate, chocolate and chocolate…though great, I fail to understand why it is so overrated at every eating joint …From sizzling brownies to chocolate mousse to chocolate icecream, these just seem to be everywhere. <br><br>
    Personally, I would love to have Shahi toast with rabdi or a hot jalebi after a super scrumptious Indian meal. End with a Meetha Pan ! and voila …you are all set after a super satisfied weekend dinner. Rearing to get into the weekday sagaa...   ')";
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
            //echo "Article No:".$row['artnum']." ".$row['artname']." ". date('g:i A, l - d M Y', strtotime($row['artdate']))." popularity:".$row['popularity']."<br>".$row['content'];
            echo "<a href='blog_articles.php?id=".$row['artnum']."'>".$row['artname']."</a> ". date('g:i A, l - d M Y', strtotime($row['artdate']))." views:".$row['popularity']."<br>";
        }
    }
    else
        echo "no results found<br>";
    mysqli_close($conn);

?>

