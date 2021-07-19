<div class="wrapper d-flex justify-content-end login-page">
    <div class="col-sm-3 m-0">
        <div class="bg-light form-login vh-100 p-5">
            <div class="mb-4">
                <img src="../assets/img/brand/adm_lt1.png" class="d-block mx-lg-auto img-fluid mb-5" alt="Bootstrap Themes" loading="lazy">
                <h1 class="text-gray-900 lead">Welcome Back</h1>
                <p><strong>Content Management System</strong></p>
            </div>
            <form action="login.php" method="post" class="">

                <div class="form-group">
                    <input type="text" id="userid" name="userid" class="form-control form-control-user" placeholder="User Id...">
                </div>
                <div class="form-group">
                    <input type="password" id="password" name="password" class="form-control form-control-user" placeholder="Password">
                </div>
                <button type="submit" name="login" class="btn btn-danger btn-special">
                    Login
                    <i class="fa fa-sign-in-alt"></i>
                </button>
            </form>
            <div class="mt-5 text-danger">
                <?php
                if (isset($_COOKIE["message"])) {
                    echo $_COOKIE["message"];
                } else {
                    echo "";
                }
                ?>
            </div>
        </div>
    </div>
</div>