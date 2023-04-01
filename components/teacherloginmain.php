<?php
    include('./teacherloginhead.php');
?>

<div class="container-fluid login-image">
    <div class="row">
        <div class="offset-md-3 col-md-6 mt-5 mb-5">
            <div class="login-container pt-5 pb-5 bg-dark text-light">
                <h3 class="text-center">Faculty Login</h3>
                <form action="#" autocomplete="off" method="post">
                    <div class="mb-3 ps-2 pe-2">
                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="username">
                    </div>
                    <div class="mb-5 ps-2 pe-2">
                        <label for="exampleFormControlInput2" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleFormControlInput2" placeholder = "password">
                    </div>
                    <div class="text-center">
                        <button type="submit" class = "btn btn-success">Submit</button>
                        <button type="reset" class = "btn btn-danger">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    include('./footer.php');
?>