<!DOCTYPE HTML>  
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <title>Blood Donar Information</title>
<body>  

<div class="container">
<a class="btn btn-secondary" href="index.php">Return</a>

<h2 class="bg-success text-center mt-5" style="color:white">Show Information</h2>

<?php 

$conn = mysqli_connect("localhost", "root", "", "donar_info") or die("Query failed: ".mysqli_connect_error());
$sql = "SELECT * FROM donar ORDER BY id DESC ";
        $result = mysqli_query($conn, $sql) or die("Query failed");

    if(mysqli_num_rows( $result)>0){

        ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Semester</th>
                        <th>ID</th>
                        <th>Blood Group</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Have you ever donate blood?</th>
                        <th>Blood Donation Date</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                    while($row = mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class='id'><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['department']; ?></td>
                        <td><?php echo $row['semester']; ?></td>
                        <td><?php echo $row['id_no']; ?></td>
                        <td><?php echo $row['blood_group']; ?></td>
                        <td><?php echo $row['age']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['ever_donate_blood']; ?></td>
                        <td><?php echo $row['last_donation']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } ?>
</div>
</body>
</html>