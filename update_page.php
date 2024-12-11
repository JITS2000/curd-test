<?php 
    include('header.php'); 
    include('dbconn.php');  
?>
<!-- /Users/avalgatesoftwarellp/php-curd-application/new -->
<?php
    $student_id = $_GET['id'];
    // echo($student_id);
    $query = "SELECT * FROM `student` WHERE `id` = $student_id";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_row($result);
    // print_r($row[1]);
?>
<div class="container">
    <h3>Student Update page</h3>
    <div class="form-group">
        <label for="name">Student Name</label>
        <input type="text" name="student_name" class="form-control" placeholder="Enter student name">
    </div>
    <div class="form-group">
        <label for="email_id">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Enter email id">
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" name="address" class="form-control" placeholder="Enter student address">
    </div>
    <div class="update-btn">
        <input type="submit" class="btn btn-success" name="add_student" value="UPDATE">
    </div>
</div>

<?php include('footer.php') ?>