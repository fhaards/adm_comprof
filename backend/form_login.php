<div class="row justify-content-center">
    <div class="col-lg-7">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">

                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <div style="color: red;margin-bottom: 15px;">
                                    <?php
                                    if (isset($_COOKIE["message"])) {
                                        echo $_COOKIE["message"];
                                    }
                                    ?>
                                </div>
                                <h1 class="h4 text-gray-900 mb-4">S e l a m a t D a t a n g</h1>
                            </div>
                            <form action="login.php" method="post" class="user">
                                <div class="form-group">
                                    <input type="text" id="userid" name="userid" class="form-control form-control-user" placeholder="User Id...">
                                </div>
                                <div class="form-group">
                                    <input type="password" id="password" name="password" class="form-control form-control-user" placeholder="Password">
                                </div>
                                <button type="submit" name="login" class="btn btn-primary btn-user btn-block">
                                    Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>