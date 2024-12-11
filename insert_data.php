<?php 
    include('dbconn.php');
    if(isset($_POST['add_student'])){
        $student_name = $_POST['student_name'];
        $email = $_POST['email'];
        $address = $_POST['address'];

        // echo $student_name."email-".$email."add".$address;die;
        if(!empty($email)){
            $insert_data = "INSERT INTO `student` (s_email, s_name, s_address) VALUES('$email', '$student_name', '$address')";
            // echo $insert_data;die;
            $result = mysqli_query($connection, $insert_data);
            if($result){
                header('location:index.php');
            }else{
                echo "error";
            }
        }else{
            echo "please insert data";
        }
        
    }

?>