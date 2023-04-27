<?php
    include('./studloginhead.php');
?>

<div class="container-fluid login-image">
    <div class="row">
        <div class="offset-md-3 col-md-6 mt-5 mb-5">
            <div class="rounded-3 pt-5 pb-5 ps-5 pe-5 bg-dark text-light">
                <!-- PHP Code -->
                <?php
                    if(isset($_POST['login'])){
                        include('../connection.php');
                        $prn_no = mysqli_real_escape_string($conn,$_POST['prn_no']);
                        $date1 = mysqli_real_escape_string($conn,$_POST['date1']);
                        
                        $sql = "SELECT prn_no FROM student WHERE prn_no = '{$prn_no}' AND dob = '{$date1}'";
                        $result = mysqli_query($conn,$sql);

                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                                header('location:http://localhost/Grievence-System/components/studentmainpagehead.php');
                            }
                        }
                        else{
                            echo "<div class = 'alert alert-danger'>Username and Password did not match.</div>";
                        }
                    } 
                ?>
                <!-- End -->
                <h3 class="text-center">Student Login</h3>
                <form action="<?php $_SERVER['PHP_SELF']; ?>" autocomplete = "off" method = "post">
                    <div class="mb-3 ps-2 pe-2">
                        <label for="exampleFormControlInput1" class="form-label">PRN Number</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="prn_number" name = "prn_no">
                    </div>
                    <div class="mb-5 ps-2 pe-2">
                        <label for="exampleFormControlInput2" class="form-label">Date Of Birth</label>
                        <input type="date" class="form-control" id="exampleFormControlInput2" name = "date1">
                    </div>
                    <div class="text-center">
                        <input class="btn btn-success me-2" type = "submit" value="Login" name = "login"/>
                        <input class="btn btn-danger me-2" type = "reset" value="Reset"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    include('./footer.php');
?>