


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Free Online Student Registration Form</title>
    
</head>

<body>
    <div class="container">
        <h1>XYZ College/School</h1>
        <h2>Student Registration From</h2>
            <?php 
            $dbcon = new mysqli("localhost", "root", "", "crud");
            $id = $_GET['id'];
            $query = "SELECT * FROM school WHERE id='$id'";
            $query_run= mysqli_query($dbcon,$query);
            while($row = mysqli_fetch_assoc($query_run)){

                ?>

<form action="code.php" method="post" enctype="multipart/form-data">
                <div class="form-item">
                    <label for="fullname">Student Image:</label>
                    <img src="<?php echo "upload/".$row['student_image']?>" width="100px" alt="">
                    <input type="file" name="student_image" accept="image/*" id="studentimage" required>
                    <input type="hidden" name="student_image" value="<?php echo $row['student_image'] ?>">
                    <p>(less than 5 Mb)</p>
                </div>
                <div class="form-item">
                    <label for="fullname">Student Name:</label>
                    <input type="text" name="student_name" id="fullname" value="<?php echo $row['student_name'] ?>">
                </div>
                <div class="form-item">
                    <label for="username">Father's Name:</label>
                    <input type="text" name="father_name" id="fathersname" value="<?php echo $row['father_name'] ?>">
                </div>
                <div class="form-item">
                    <label for="username">Mother's Name:</label>
                    <input type="text" name="mother_name" id="mothersname" value="<?php echo $row['mother_name'] ?>">
                </div>

                <div class="form-item">
                    <label for="gender">Gender:</label>
                    <div class="genders">
                        <p>Male</p> <input type="radio" name="gender" id="gender" value="<?php echo $row['gender'] ?>">
                        <p>Female</p> <input type="radio" name="gender" id="gender" value="<?php echo $row['gender'] ?>">
                        <p>Other</p> <input type="radio" name="gender" id="gender" value="<?php echo $row['gender'] ?>">
                    </div>
                </div>
                <div class="form-item">
                    <label for="email">Date of Birth</label>
                    <input type="date" name="date_of_birth" id="DOB" value="<?php echo $row['date_of_birth'] ?>">
                </div>
                <div class="form-item">
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email" value="<?php echo $row['email'] ?>">
                </div>
                <div class="form-item">
                    <label for="level">Level:</label>
                    <select name="level" id="level" value="<?php echo $row['level'] ?>">
                        <option value="highschool">High School</option>
                        <option value="highschool">Bachelors </option>
                        <option value="highschool">Masters</option>
                        <option value="highschool">Phd</option>
                    </select>
                </div>
                <div class="form-item">
                    <label for="department">Department:</label>
                    <select name="department" id="department" value="<?php echo $row['department'] ?>">
                        <option value="electrical">Electrical Engineering</option>
                        <option value="electrical">Computer Engineering</option>
                        <option value="electrical">Software Engineering</option>
                        <option value="electrical">Civil Engineering</option>
                    </select>
                </div>

                <div class="form-item">
                    <label for="phonenumber">Tel/Mobile:</label>
                    <input type="tel" name="tel_mobile" id="phonenumber" value="<?php echo $row['tel_mobile'] ?>">
                </div>
                <button name="submit" class="register" type="submit">Register</button>
            </form>


<?php






            }
            
            
            ?>



        <div class="form-wrapper">
           
        </div>

    </div>

</body>

</html>