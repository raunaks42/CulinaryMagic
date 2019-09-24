<?php
    session_start();
    if(isset($_REQUEST['submit_btn']))
    {
        
        if(isset($_POST['usrname']))
        {
            $usrname = $_POST['usrname'];
            //echo $usrname."<br>";
        }

        if(isset($_POST['psw']))
        {
            $psw = $_POST['psw'];
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

        $sql = "INSERT INTO forum_users(uemail,upw) VALUES('$usrname','$psw')";
        if(mysqli_query($conn,$sql))
        {
            echo "Registered sucessfully<br>";
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "webtech";

            $conn1  = mysqli_connect($servername,$username,$password,$dbname);
            if(!$conn1)
            {
                die("connection failed".mysqli_connect_error());
            }
            $sql1 = "SELECT * FROM form_users WHERE uemail='".$usrname."'";
            $result1 = mysqli_query($conn1,$sql1);
                $row = mysqli_fetch_assoc($result1);
                $_SESSION["unum"] = $row['unum']; 
                $_SESSION["uemail"] = $uemail; 
                mysqli_close($conn1);
                header("Location: forum_database.php");
                exit();
            
        }
        else
        {
            echo "failed: ".mysqli_error($conn);
        }
        mysqli_close($conn);
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>register form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        /* Style all input fields */
        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
        }

        /* Style the submit button */
        input[type=submit] {
            background-color: #4CAF50;
            color: white;
        }

        /* Style the container for inputs */
        .container {
            background-color: #f1f1f1;
            padding: 20px;
        }

        /* The message box is shown when the user clicks on the password field */
        #message {
            display:none;
            background: #f1f1f1;
            color: #000;
            position: relative;
            padding: 20px;
            margin-top: 10px;
        }

        #message p {
            padding: 10px 35px;
            font-size: 18px;
        }

        /* Add a green text color and a checkmark when the requirements are right */
        .valid {
            color: green;
        }

        .valid:before {
            position: relative;
            left: -35px;
            content: "✔";
        }

        /* Add a red text color and an "x" when the requirements are wrong */
        .invalid {
            color: red;
        }

        .invalid:before {
            position: relative;
            left: -35px;
            content: "✖";
        }
    </style>
    <script src="main.js"></script>
</head>
<body>
    <h1>Form for registering</h1>

    <div class="container">
  <form action="" method="POST">
    <label for="usrname">Useremail</label>
    <input type="text" id="usrname" name="usrname" required>

    <label for="psw">Password</label>
    <input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
    
    <br>
    <label>Confirm password
    <input type="password" name="confirm_password" id="confirm_password"  onkeyup='check();' /> 
    <span id='message_confirm'></span>
    </label>

    <input type="checkbox" onclick="myFunction()">Show Password

    <input type="submit" value="Submit" name="submit_btn">
  </form>
</div>

<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
				
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

function myFunction() {
    var x = document.getElementById("psw");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

var check = function() {
  if (document.getElementById('psw').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message_confirm').style.color = 'green';
    document.getElementById('message_confirm').innerHTML = 'matching';
  } else {
    document.getElementById('message_confirm').style.color = 'red';
    document.getElementById('message_confirm').innerHTML = 'not matching';
  }
}

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>    
</body>
</html>