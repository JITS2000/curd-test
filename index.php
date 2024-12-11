<?php 
include('header.php'); 
include('dbconn.php');  
?>
    <h1 style="text-align: center;"> CURD APPLICATION </h1>
    <div class="container">
        <div class="box-1">
            <h4>All Student List</h4>
            <button type="button" class="btn btn-success addStudebtButton" data-toggle="modal" data-target="#add_student_modal">Add Student</button>
        </div>
        <table class="table table-hover table-bordered table-striped">
            <thead>
                <tr style="text-align: center;">
                    <th>Id</th>
                    <th>Student Name</th>
                    <th>Email Id</th>
                    <th>Address</th>
                    <th>UPDATE</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "select * from `student`";
                $result = mysqli_query($connection, $query); 
                // echo "<pre>";print_r($result);die;
                // foreach($result as $value){
                //     echo "<pre>";print_r($value);
                // }
                ?>
                <?php foreach($result as $value){ ?>
                <tr>
                    <th><?php echo $value['id']; ?></th>
                    <th><?php echo $value['s_name']; ?></th>
                    <th><?php echo $value['s_email']; ?></th>
                    <th><?php echo $value['s_address']; ?></th>
                    <th><a href="update_page.php?id=<?php echo $value['id']; ?>" class="btn btn-primary">UPDATE</a></th>
                    <th><a class="btn btn-danger">DELETE</a></th>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- Modal -->
    <form action="insert_data.php" method="POST">
        <div class="modal fade" id="add_student_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ADD STUDENT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-success" name="add_student" value="ADD">
                </div>
                </div>
            </div>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () { 
            $('.addStudebtButton').on('click', function() {
                $('#add_student_modal').modal('show');
            });        
        });
        
    </script>
    
<?php include('footer.php') ?>
