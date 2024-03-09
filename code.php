<?php 
   $dbcon = mysqli_connect("localhost", "root", "", "crud");

if(isset($_POST['submit'])){
    $student_name = $_POST['student_name'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $gender = $_POST['gender'];
    $date_of_birth = $_POST['date_of_birth'];
    $email = $_POST['email'];
    $level = $_POST['level'];
    $department = $_POST['department'];
    $tel_mobile = $_POST['tel_mobile'];
    $student_image = $_FILES['student_image']['name'];

    if(file_exists("upload/".$_FILES['student_image']['name'])){
            $filename = $_FILES['student_image']['name'];
            header('location:index.php');
    }
        else{

        

    $query = "INSERT INTO school (student_name, father_name, mother_name, gender, date_of_birth, level, email, department, tel_mobile, student_image) 
              VALUES ('$student_name', '$father_name', '$mother_name', '$gender', '$date_of_birth', '$level', '$email', '$department', '$tel_mobile', '$student_image')";

    $query_run = mysqli_query($dbcon, $query);
    if($query_run){
        move_uploaded_file($_FILES["student_image"]["tmp_name"], "upload/" . $_FILES["student_image"]["name"]);
        header('location:index.php');
    }
    else{
        header('location:index.php');
    }
}
}




if(isset($_POST['submit'])){
    $student_name = $_POST['student_name'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $gender = $_POST['gender'];
    $date_of_birth = $_POST['date_of_birth'];
    $email = $_POST['email'];
    $level = $_POST['level'];
    $department = $_POST['department'];
    $tel_mobile = $_POST['department'];
    $student_image = $_FILES['student_image']['name'];
    $old_image = $_FILES['student_image'];

    if($new_imge != ''){
        $update_filename = $_POST['student_image']['name'];

    }
    else{
        $update_filename =  $old_image ;

    }

    if($_FILES['student_image']['name'] != ''){


      if(file_exists("upload/".$_FILES['student_image']['name'])){
        $filename = $_FILES['student_image']['name'];
        header('location:create.php');
            }
            }
    else{

        $query = "UPDATE school SET student_name='$student_name', father_name='$father_name', mother_name='$mother_name', gender='$gender', date_of_birth='$date_of_birth', email='$email', level='$level', department='$department', department='$department', student_image='$update_filename' WHERE id='$id'";
        $query_run = mysqli_query($dbcon, $query);

        if ($query_run){
            if($_FILES['student_image'] != ''){
                move_uploaded_file($_FILES["student_image"]["tmp_name"], "upload/" . $_FILES["student_image"]["name"]);
                unlink("upload/".$old_image);

            }
            header('location:create.php');
        }else{
            header('location:create.php');
        }

    }



}



?>
