<ul class="navbar-nav sidebar sidebar-light accordion border" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-1">
            <img class="d-flex mx-lg-auto img-fluid" src="company/img/<?= $getRowQueryCompany['comp_logo2']; ?>">
            <!-- <img src="assets/img/brand/adm_lt1.png" class="d-flex mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy"> -->
        </div>
    </a>

    <hr class="sidebar-divider my-0">


    <li class="nav-item">
        <a class="nav-link" href="index.php" data-toggle="tooltip" data-placement="right" title="Dashboard">
            <i class="fa fa-home"></i>
            <span class="side-text">Dashboard</span></a>
    </li>

    <hr class="sidebar-divider">

    
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#sidebarCollapse" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa fa-building"></i>
            <span class="side-text">Company Profile</span>
        </a>
        <div id="sidebarCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-dark text-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="index.php?company=read">Info</a>
                <a class="collapse-item" href="index.php?company=about">About Us</a>
            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="index.php?client=read" data-toggle="tooltip" data-placement="right" title="Client">
            <i class="fa fa-user-tie"></i>
            <span class="side-text">Client</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="index.php?produk=read" data-toggle="tooltip" data-placement="right" title="Produk">
            <i class="fa fa-box"></i>
            <span class="side-text">Produk</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="index.php?portofolio=read" data-toggle="tooltip" data-placement="right" title="Portfolio">
            <i class="fa fa-copy"></i>
            <span class="side-text">Portofolio</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.php?team=read" data-toggle="tooltip" data-placement="right" title="Team">
            <i class="fa fa-users"></i>
            <span class="side-text">Team</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Admin Menu
    </div>

    <li class="nav-item">
        <a class="nav-link" href="index.php?admin=read" data-toggle="tooltip" data-placement="right" title="Admin">
            <i class="fa fa-user-shield"></i>
            <span class="side-text">Admin List</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>