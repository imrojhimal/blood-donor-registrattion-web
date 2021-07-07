<?php

$conn = mysqli_connect("localhost", "root", "", "donar_info") or die("Query failed: ".mysqli_connect_error());

if(isset($_POST['submit'])){ 

    $name =  $_POST["name"];
    $department = $_POST["department"];
    $semester = $_POST["semester"];
    $id = $_POST["id"];
    $blood_group = $_POST["blood_group"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $phone= $_POST["phone"];
    $email = $_POST["email"];
    $ever_donate_blood =$_POST["ever_donate_blood"];
    $last_donation = $_POST["last_donation"];
    $address = $_POST["address"];


       $sql = "INSERT INTO donar( name, department, semester, id_no, blood_group, age, gender, phone, email, ever_donate_blood, last_donation, address)
        VALUES ('$name','$department','$semester','$id','$blood_group','$age','$gender','$phone','$email','$ever_donate_blood','$last_donation','$address')";
       $result = mysqli_query($conn, $sql) or die("Query failed");
        if($result){
           //header("Location: http://localhost/project/index.php");
            echo "<p style='color:green'><center><h1>Data inserted!..</h1></center></p>";
            echo '<a href="showdata.php" > <br> <input type="submit" class="registerbtn" value=" Show information "style="background: darkgreen; color: white;padding: 16px 20px; border: none; cursor: pointer;
            width: 100%;
            opacity: 0.9;"> </a>' ;
            echo'<br>';

            echo '<a href="index.php" > <br> <input type="submit" class="registerbtn" value="Home"style="background: darkgreen; color: white;padding: 16px 20px; border: none; cursor: pointer;
            width: 100%;
            opacity: 0.9;"> </a>' ;
        }else{
            echo "<p style='color:red'> Data not inserted!..</p>";
        }
    }  

?>