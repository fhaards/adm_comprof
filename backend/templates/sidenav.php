<?php
$up_t_cc = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `company`"));
?>
<ul class="navbar-nav sidebar sidebar-light accordion border" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-1">
            <img class="d-flex mx-lg-auto img-fluid" src="company/img/<?= $up_t_cc['comp_logo2']; ?>" >
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
        <a class="nav-link" href="index.php?company=read" data-toggle="tooltip" data-placement="right" title="Company Profile">
            <i class="fa fa-building"></i>
            <span class="side-text">Company Profile</span>
        </a>
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