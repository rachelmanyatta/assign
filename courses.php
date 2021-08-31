
<?php include"db.php"; 
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    die();
}

?>


<?php
    
 if($_SERVER["REQUEST_METHOD"] == "POST"){
   
  $cname = test_input($_POST["cname"]);
  $ccode = test_input($_POST["ccode"]);
  $cdep = test_input($_POST["cdep"]);
  $cdesc = test_input($_POST["cdesc"]);
  $year = test_input($_POST["year"]);
  $semester = test_input($_POST["semester"]);
  $grade = test_input($_POST["grade"]);
  $cinst = test_input($_POST["cinst"]);

  $query = "INSERT INTO courses (description, year, name ,code, department, semester, grade, instructor)  VALUES ('$cdesc' , '$year' , '$cname' , '$ccode', '$cdep', '$semester', '$grade', '$cinst')"; 


  $insertingData = mysqli_query($connection , $query);

  if(!$insertingData){
      echo "Inserting data to the Db failed" . mysqli_error($connection);
  } else{
    echo '<script type="text/javascript">alert("Registration Successful!");</script>'; 
    header("Location:display.php");
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
            <form class="form" method="POST" action="courses.php">

                <h2 style="text-align: center;">COURSES FORM</h2>

                <p><strong>Course Name</strong><br />

                    <select name="cname">
                        <section><b>Course Name</b><br>
                            
                        </section>
                        <option >                      </option>
                        <option >Business Communication</option>
                        <option >C programming</option>
                        <option >Communication Skills</option>
                        <option >Computer Architecture</option>
                        <option >Computer Hardware</option>
                        <option >Development Studies I</option>
                        <option >Development Studies II</option>
                        <option >Discrete</option>
                        <option >Information System</option>
                        <option >Java</option>
                        <option >Mathematical Analysis</option>
                        <option >Networking</option>
                        <option >Web Development</option>
                    </select>
                    </select>
                </p>

                <p><strong>Course Code</strong><br />

                    <select name="ccode">
                        <section><b>Course Code</b>
                            <br>
                        </section>
                        <option >     </option>
                        <option >CS173</option>
                        <option >CS174</option>
                        <option >CS175</option>
                        <option >CL111</option>
                        <option >DS112</option>
                        <option >DS113</option>
                        <option >IS143</option>
                        <option >IS151</option>
                        <option >IS158</option>
                        <option >IS162</option>
                        <option >IS171</option>
                        <option >IS181</option>
                        <option >MT100</option>
                    </select>
                    </select>
                </p>
                </p>

                <p><strong>Course Description &nbsp&nbsp&nbsp&nbsp</strong><br />
                    <input type="text" name="cdesc" size="30" style="border-radius: 10px;" required>
                </p>


                <p><strong>Course Department &nbsp</strong><br />
                    <input type="text" name="cdep" size="30" style="border-radius: 10px;" required>
                </p>

                <p><strong>Semester</strong><br />

                    <select name="semester">
                        <section><b>Semester</b>
                            <br>
                        </section>

                        <option > </option>
                        <option >I</option>
                        <option >II</option>

                    </select>
                    </select>
                </p>

                <p><strong>Academic Year</strong><br />

                    <select name="year">
                        <section><b>Academic Year</b>
                            <br>
                        </section>
                        <option > </option>
                        <option >I</option>
                        <option >II</option>
                        <option >III</option>
                        <option >IV</option>


                    </select>
                    </select>
                </p>


                <p><strong>Instructor's Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</strong><br />
                    <input type="text" name="cinst" size="30" style="border-radius: 10px;" required>
                </p>

                <p><strong>Grade</strong><br />

                    <select name="grade">
                        <section><b>Results</b>
                            <br>
                        </section>
                        
                        <option > </option>
                        <option >A</option>
                        <option >B</option>
                        <option >C</option>
                        <option >D</option>
                        <option >E</option>
                        <option >F</option>
                        <option >SUP</option>
                        <option >ABSCS</option>


                    </select>
                    </select>
                </p>

                Submit: <input type="submit"><br><br>
                Reset: <input type="reset"><br><br>

                <a href="display.php"> Cick here to view previous registered courses</a>
            </form>
           
        </center>

    </body>

</html>