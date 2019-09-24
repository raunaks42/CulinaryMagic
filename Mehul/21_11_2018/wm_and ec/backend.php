<?php

    if(isset($_POST['meal']))
    {
        $meal = $_POST['meal'];
        //echo "yes1<br>";
    }
    if(isset($_POST['type']))
    {
        $type = $_POST['type'];
        //echo "yes2<br>";
    }
    if(isset($_POST['cuisine']))
    {
        $cuisine = $_POST['cuisine'];
        $category='weekend';
    }
    else
        $category = 'everyday';

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webtech";

    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn)
    {
        die("connection failed".mysqli_connect_error());
    }

    if($category=='everyday')
    {
        //echo "everyday<br>";
        $sql = "SELECT * FROM recipes WHERE category='Everyday Cooking' AND meal='$meal' AND veg='$type'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                echo "Recipe No. ".$row['rnum']." Recipe Name: ".$row['rname']." Cooktime: ".$row['cooktime']." mins. <br>Ingredients: " ;
                $ingr_list = explode(",",$row["ingredients"]);
                for($i=0; $i<count($ingr_list); $i++)
                {
                    $num = (int)$ingr_list[$i];
                    $query = "SELECT * FROM ingredients WHERE inum='$num'";
                    $result1 = mysqli_query($conn,$query);
                    if(mysqli_num_rows($result1)==1)
                    {
                        $row1 = mysqli_fetch_assoc($result1);
                        echo "<ul>";
                        echo "<li>".$row1['iname']."</li>";
                        echo "</ul>";
                    }
                    else
                        echo "Invalid";
                }
            }
        }
        else
        {
            echo "0 results";
        }
        mysqli_close($conn);
    }
        
    else if($category=='weekend')
    {
        //echo "weekend<br>";
        $sql = "SELECT * FROM recipes WHERE category='Weekend Mania' AND meal='$meal' AND cuisine='$cuisine' AND veg='$type'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                echo "Recipe No.: ".$row['rnum']." Recipe Name: ".$row['rname']." Cooktime: ".$row['cooktime']." mins. <br>Ingredients: " ;
                $ingr_list = explode(",",$row["ingredients"]);
                for($i=0; $i<count($ingr_list); $i++)
                {
                    $num = (int)$ingr_list[$i];
                    $query = "SELECT * FROM ingredients WHERE inum='$num'";
                    $result1 = mysqli_query($conn,$query);
                    if(mysqli_num_rows($result1)==1)
                    {
                        $row1 = mysqli_fetch_assoc($result1);
                        echo "<ul>";
                        echo "<li>".$row1['iname']."</li>";
                        echo "</ul>";
                    }
                    else
                        echo "Invalid";
                }
            }
        }
        else
        {
            echo "0 results";
        }
        mysqli_close($conn);
    }
        
?>

