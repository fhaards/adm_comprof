
    <div class="row flex-lg-row-reverse align-items-center flex-justify-center p-lg-5 shadow-sm rounded dashboard mx-1 mb-4">
        <div class="col-10 col-sm-8 col-lg-5 my-5">
            <img src="company/img/<?= $getRowQueryCompany['comp_logo2']; ?>" class="d-block mx-lg-auto img-fluid"  loading="lazy">
        </div>
        <div class="col-lg-6 py-lg-5">
            <h1 class="display-5 fw-bold my-0">
                Welcome Back To <br>
            </h1>
            <p class="lead mb-5">
                Content Management System
            </p>
        </div>
    </div>


<div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card border-left-primary h-100 py-2 mx-1">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Team</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?= countTeam(); ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card border-left-success  h-100 py-2 mx-1">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Total Produk</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?= countProduk(); ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-box fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card border-left-info h-100 py-2 mx-1">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            Total Portfolio
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?= countPortfolio(); ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-copy fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card border-left-warning  h-100 py-2 mx-1">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Total Client</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?= countClients();?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>