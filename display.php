<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body {
        background-image: url("IMG5.jpeg");
        font-family: Cursive, brush script MT;
        font-size:30px;
    }

    form {
        background-color: rgba(255, 255, 255, 0.4);
        width: 40%;
        margin: 0 30%;
        border-radius: 5px;
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

        <?php
    $connection=mysqli_connect("localhost", "root", "", "assign");
    if($connection==false){
        die("Connection failed. Reason: ".mysqli_connect_error());
    }

    $sql="SELECT description, year, name ,code, department, semester, grade, instructor FROM courses";
    $result=mysqli_query($connection,$sql);

    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
        {
            echo "<tr>
            <td>$row[0]</td>
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
            <td>$row[4]</td>
            <td>$row[5]</td>
            <td>$row[6]</td>
            <td>$row[7]</td>";
            echo "<hr> <br>";
        }
        echo "<br>";
    }
    else{
        echo "No records filled!!";
    }
    mysqli_close($connection);
    ?>

    </div>
</style>