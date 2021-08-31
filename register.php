<?php include"db.php"; ?>


<?php
    
 if($_SERVER["REQUEST_METHOD"] == "POST"){
   
  $fname = test_input($_POST["fname"]);
  $mname = test_input($_POST["mname"]);
  $lname = test_input($_POST["lname"]);
  $uname = test_input($_POST["uname"]);
  $email = test_input($_POST["email"]);
  $password = test_input($_POST["password"]);
  $phone = test_input($_POST["phone"]);
  $insta = test_input($_POST["insta"]);
  $twitter = test_input($_POST["twitter"]);
  $facebook = test_input($_POST["facebook"]);

//   $hash = "$2a$10$";
//   $string = "iamacomputersciencestudent";
//   $hashString = $hash . $string;
//   $password = crypt($password , $hashString);

    $password = md5($password);

    $query = "INSERT INTO users (username, email, first_name, middle_name, surname, password, phone, twitter_username, instagram_username, facebook_username)  VALUES ('$uname' , '$email' , '$fname' , '$mname', '$lname', '$password', '$phone', '$twitter', '$insta', '$facebook')"; 


    $insertingData = mysqli_query($connection , $query);

    if(!$insertingData){
        echo "Inserting data to the Db failed" . mysqli_error($connection);
    } else{
        echo '<script type="text/javascript">alert("Registration Successful!");</script>'; 
        header("Location:login.php");
    }

 }

 function test_input($data){
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;

     //Preventing mysql injection

    $data = mysqli_real_escape_string($connection, $data);

   return $data;

 }

?>




<!DOCTYPE html>
<html>

<head>
    <title></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        <script type="text/javascript">
        function display(){


        }
    </style>
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
</head>

<body>

    <div class="pill-nav">
        <a href="index.php">Home</a>
        <a href="aboutme.php">About</a>
        <a href="register.php">Register</a>
        <a href="courses.php">courses</a>
        <a href="Manyatta.pdf">CV</a>
        <a href="Contact.php">Contacts</a><br /><br /><br /><br />

    </div>

</body>

</html>



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

    <center>
        <form onsubmit="return(display())"name="myform" class="form" action="register.php" method="POST">

            <h2 style="text-align: center;">REGISTRATION FORM</h2>

            <p>First name: &nbsp&nbsp&nbsp&nbsp<br />
                <input type="text" name="fname" size="30" style="border-radius: 10px;" required>
            </p>


            <p>Middle name: &nbsp<br />
                <input type="text" name="mname" size="30" style="border-radius: 10px;" required>
            </p>

            <p>Surname: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br />
                <input type="text" name="lname" size="30" style="border-radius: 10px;" required>
            </p>


            <p>Username: &nbsp&nbsp&nbsp&nbsp<br />
                <input type="text" name="uname" size="30" style="border-radius: 10px;" required>
            </p>

            <p>Password: &nbsp<br />
                <input type="password" name="password" size="30" style="border-radius: 10px;" required>
            </p>

            <p>CV: &nbsp<br />
                <input type="file" name="file" size="30" style="border-radius: 10px;" required>
            </p>

            <p>Contacts</p>

            <p>Email address: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br />
                <input type="Email" name="email" size="30" style="border-radius: 10px;">
            </p>

            <p>Mobile: &nbsp&nbsp&nbsp&nbsp<br />
                <input type="text" name="phone" size="30" style="border-radius: 10px;" required>
            </p>

            <p>Facebook Username: &nbsp&nbsp&nbsp&nbsp<br />
                <input type="text" name="facebook" size="30" style="border-radius: 10px;" required>
            </p>

            <p>Twitter Username: &nbsp&nbsp&nbsp&nbsp<br />
                <input type="text" name="twitter" size="30" style="border-radius: 10px;" required>
            </p>

            <p>Instagram Username: &nbsp&nbsp&nbsp&nbsp<br />
                <input type="text" name="insta" size="30" style="border-radius: 10px;" required>
            </p>

            Submit: <input type="submit"><br><br>
            Reset: <input type="reset"><br><br>
        </form>
    </center>
    <script>
function validateform(){
var firstname=document.myform.fname.value; 
var middlename=document.myform.mname.value;
var surname=document.myform.lname.value;
var username=document.myform.uname.value;
var email=document.myform.email.value;
var password=document.myform.password.value;
var pnumber=document.myform.phone.value;

if (!isNaN(fname) || fname==""){
  alert("Invalid  First Name! ");
  return false;
} if (!isNaN(mname) || mname==""){
  alert("Invalid Middle Name! ");
  return false;
}
if (!isNaN(surname) || lname==""){
  alert("Invalid Surname! ");
  return false;
}
 if (!isNaN(username) || uname==""){
  alert(" Invalid Username!");
  return false;
}
 if (email==""){
  alert("Invalid Email!");
  return false;
}
 if(password=="" || password.length<10){
  alert("Password should be 10 characters long!");
  return false;
  }
  re = /[0-9]/;
  if(!re.test(password)) {
      alert("Password must contain at least one number (0-9)!");

      return false;
    }
    re = /[a-z]/;
    if(!re.test(password)) {
      alert("Password must contain at least one lowercase letter (a-z)!");

      return false;
    }
   re = /[!@#$%^&*]/;
   if(!re.test(password)) {
      alert("Pssword must contain special characters!");

      return false;
    }
   if (isNaN(pnumber)|| phone==""){
    alert("Invalid phone number!");
    return false;
  }
}
</script>


</body>

</html>