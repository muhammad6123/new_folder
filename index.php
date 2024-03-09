<?php
$dbcon = mysqli_connect("localhost", "root", "", "crud");


?>



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
        <div class="form-wrapper">
            <form action="code.php" method="post" enctype="multipart/form-data">
                <div class="form-item">
                    <label for="fullname">Student Image:</label>
                
                    <input type="file" name="student_image" accept="image/*" id="studentimage" required>
                    <p>(less than 5 Mb)</p>
                </div>
                <div class="form-item">
                    <label for="fullname">Student Name:</label>
                    <input type="text" name="student_name" id="fullname" placeholder="Full Name" required>
                </div>
                <div class="form-item">
                    <label for="username">Father's Name:</label>
                    <input type="text" name="father_name" id="fathersname" placeholder="Father's Full Name" required>
                </div>
                <div class="form-item">
                    <label for="username">Mother's Name:</label>
                    <input type="text" name="mother_name" id="mothersname" placeholder="Mother's Full Name" required>
                </div>

                <div class="form-item">
                    <label for="gender">Gender:</label>
                    <div class="genders">
                        <p>Male</p> <input type="radio" name="gender" id="gender" value="male" required>
                        <p>Female</p> <input type="radio" name="gender" id="gender" value="female">
                        <p>Other</p> <input type="radio" name="gender" id="gender" value="other">
                    </div>
                </div>
                <div class="form-item">
                    <label for="email">Date of Birth</label>
                    <input type="date" name="date_of_birth" id="DOB" required>
                </div>
                <div class="form-item">
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email" placeholder="email@xyz.com" required>
                </div>
                <div class="form-item">
                    <label for="level">Level:</label>
                    <select name="level" id="level">
                        <option value="highschool">High School</option>
                        <option value="highschool">Bachelors </option>
                        <option value="highschool">Masters</option>
                        <option value="highschool">Phd</option>
                    </select>
                </div>
                <div class="form-item">
                    <label for="department">Department:</label>
                    <select name="department" id="department">
                        <option value="electrical">Electrical Engineering</option>
                        <option value="electrical">Computer Engineering</option>
                        <option value="electrical">Software Engineering</option>
                        <option value="electrical">Civil Engineering</option>
                    </select>
                </div>

                <div class="form-item">
                    <label for="phonenumber">Tel/Mobile:</label>
                    <input type="tel" name="tel_mobile" id="phonenumber" placeholder="XXX XXX XXXX" required>
                </div>
                <button name="submit" class="register" type="submit">Register</button>
            </form>
        </div>

    </div>

    <button><a href="create.php">table</a></button>

</body>

</html>