<!DOCTYPE HTML>  
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <title>Student Information</title>
<body>  
<div class="container">
    <div class="card">
        <div class="card-body">
          <h2 class="bg-secondary text-center mt-5" style="color:white">Registration Form</h2>
            <form  action="addata.php" method="POST">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" required name="name">
                <br>
                <label for="">Department</label>
                <input type="text" class="form-control" placeholder="Enter your department" required name="department">
                <br>
                <label for="">Semester</label>
                <input type="text" class="form-control" placeholder="Enter your enrolled semester " required name="semester">
                <br>
                <label for="">ID No.</label>
                <input type="text" class="form-control" placeholder="Enter your student id" required name="id">
                <br>
                <label>Blood Group</label>
                <input type="text" class="form-control" placeholder="Enter your blood group" required name="blood_group">
                <br>
                <label for="">Age</label>
                <input type="number" class="form-control" placeholder="Enter your age " required name="age">
                <br> 
                <label for="">Gender</label>
                <br>
                <input type="radio" name="gender" required <?php if (isset($gender) && $gender=="female") echo "checked";?>  value="female">Female
                <br>
                <input type="radio" name="gender" required <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
                <br>
                <input type="radio" name="gender" required <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other 
                <br> 
                <br><br>          
                <label for="">Phone No.</label>
                <input type="number" class="form-control" placeholder="Enter your phone no. " required name="phone">
                <br>
                <label for="">Email</label>
                <input type="email" class="form-control" placeholder="Enter your email " required name="email">
                <br>
                <label for="">Have you ever donate blood?</label>
                <br>
                <input type="radio" name="ever_donate_blood" required <?php if (isset($ever_donate_blood) && $ever_donate_blood=="Yes") echo "checked";?>  value="Yes">Yes
                <br>
                <input type="radio" name="ever_donate_blood" required <?php if (isset($ever_donate_blood) && $ever_donate_blood=="No") echo "checked";?> value="No">No
                <br> <br>
                <label for="">Last Donation</label>
                <input type="date" class="form-control" placeholder="Enter your last blood donation date. "  name="last_donation">
                <br>
                <label for="">Address</label>
                <textarea name="address" requied class="form-control" rows="5" cols="40"></textarea>
                <br>
                <button type="submit" name="submit" value="Submit">Submit</button>  
            </form>
        </div>
    </div>
    <a class="btn" style="background-color:black;color:white" href="index.php">back</a>
</div>
</body>
</html>