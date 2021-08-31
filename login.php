<?php
session_start();
include"db.php"; ?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $login_email = test_input($_POST["uname"]);
    $login_pass = test_input($_POST["password"]);

  
    // $hash = "$2a$10$";
    // $string = "iamacomputersciencestudent";
    // $hashString = $hash . $string;
    // $login_pass = crypt($login_pass , $hashString);

  
    // $query = "SELECT email , uname FROM users WHERE uname='$login_email' ";
    // $email_results = mysqli_query($connection , $query);
    // $email_row = mysqli_fetch_assoc($email_results);
    $login_pass = md5($login_pass);

    $query = "SELECT id, email, username FROM users WHERE username='$login_email' AND password='$login_pass'";
    $pass_results = mysqli_query($connection , $query);
    $pass_row = mysqli_fetch_assoc($pass_results);

    // if($email_row){

    //     $username = $email_row['uname'];
    //     $query = "SELECT password,id FROM users WHERE password='$login_pass'";
    //     $pass_results = mysqli_query($connection , $query);
    //     $pass_row = mysqli_fetch_assoc($pass_results);

    if ($pass_row) {
        echo "Login Successful";
        $_SESSION["id"] = $pass_row["id"];
        $_SESSION["username"] = $login_email;
    
        header("Location: http://localhost/assign/courses.php");
    } else {
        echo "User does not exist";
    }
   
    // }else{
    //     echo "User does not exist";
    // }
 

}


function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    
   $data = mysqli_real_escape_string( $connection,$data);
  return $data;

}
?>


<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Cursive, brush script MT;
        }

        .pill-nav {}

        .pill-nav a {
            display: inline-block;
            color: #481314;
            text-align: center;
            padding: 14px;
            text-decoration: none;
            font-size: 17px;
            border-radius: 5px;



        }

        .pill-nav a:hover {
            background-color: black;
            color: #481314;
        }

        .pill-nav a.active {
            background-color: black;
            color: #481314;

        }
    </style>

    <style>
    body {
        background-image: url("IMG5.jpeg");
        font-family: Cursive, brush script MT;
    }

    form {
        background-color: rgba(255, 255, 255, 0.4);
        width: 40%;
        margin: 0 30%;
        border-radius: 5px;
    }
    </style>

</head>

<body>

<div class="pill-nav">
    <a href="index.php">Home</a>
    <a href="aboutme.php">About</a>
    <a href="register.php">Register</a>
    <a href="courses.php">courses</a>
    <a href="Manyatta.pdf">CV</a>
    <a href="Contact.php">Contacts</a><br/><br /><br /><br/>

  </div>
  
    <center>
        <form class="form" action="login.php" method="POST">

            <h2 style="text-align: center;">Log in</h2>

            <p>Username: &nbsp&nbsp&nbsp&nbsp<br />
                <input type="text" name="uname" size="30" style="border-radius: 10px;" required>
            </p>

            <p>Password: &nbsp<br />
                <input type="password" name="password" size="30" style="border-radius: 10px;" required>
            </p>

            Submit: <input type="submit"><br><br>
            Reset: <input type="reset"><br><br>
        </form>
    </center>
</body>

</html>