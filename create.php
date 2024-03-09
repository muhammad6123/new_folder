<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="card-body">
    <?php 
    $connection = mysqli_connect("localhost", "root", "", "crud");

    $query = "SELECT * FROM school";
    $query_run= mysqli_query($connection,$query);
    ?>
    <table class="table table-bordered">
      <thead>
      <tr>

        <th scope="col">Student name</th>
        <th scope="col">Father's  name</th>
        <th scope="col">Mother's  name</th>
        <th scope="col">Gender</th>
        <th scope="col">Date of Birth</th>
        <th scope="col">E-mail</th>
        <th scope="col">Level</th>
        <th scope="col">Department</th>
        <th scope="col">Mobile</th>
        <th scope="col">student_image</th>
      </tr>
      </thead>
      <tbody>
        <?php
        
        while($row = mysqli_fetch_assoc($query_run)){?>


          <tr>
          <th><?php echo $row['student_name']?></th>
          <th><?php echo $row['father_name']?></th>
          <th><?php echo $row['student_name']?></th>
          <th><?php echo $row['mother_name']?></th>
          <th><?php echo $row['gender']?></th>
          <th><?php echo $row['email']?></th>
          <th><?php echo $row['department']?></th>
          <th><?php echo $row['tel_mobile']?></th>
          <th><?php echo $row['level']?></th>
          <th> <img src="<?php echo "upload/".$row['student_image'];?>" width="100px"  alt="Image"></th>
          <th><a href="edit.php?id=<?php echo $row['id'];?>" class="btn btn-info"> edit </th>
          <th><a href="delete.php?id=<?php echo $row['id'];?>"  class="btn btn-info"> delete </th>
        </tr>



       <?php }?>
    
      </tbody>
    </table>

    <button><a href="index.php">go</a></button>

  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>