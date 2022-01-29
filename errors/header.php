<?php include '../init.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../<?php echo $css . 'main.css'; ?>">
    <link rel="stylesheet" href="../../<?php echo $css . 'users-style.css'; ?>">

    <title>Dashboard</title>
  </head>
  <body>

    <?php
          if(isset($_GET['id'])){
            $id = $_GET['id'];
        }?>

    <header class="row">

      <nav class="navbar float-start navbar-expand-lg navbar-light col-md-10 ">
        <div class="container-fluid col-md-2 col-sm-2">
          <a class="navbar-brand" href="../../index.php">Dashboard</a>
        </div>
        <div class="center col-md-8 col-sm-8">
          <h3 class=" float-start mr-2"><?php 
            if(isset($_GET['do'])){
              echo 'Welcome To ' . $_GET['do'] . ' Page';
            }?></h3>
          <button class="btn float-end bg-c-yellow mt-1" style="background-color: #f7cd6e !important" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
            Others
          </button>
        </div>
      </nav>
      <div class=" col-md-2 col-sm-2 mt-4">
        <div class="dropdown">
            <button class="btn dropdown-toggle bg-c-yellow mt-2" style="background-color: #f7cd6e !important" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="far fa-user-circle mr-1"></i>Profile
            </button>
            <ul class="dropdown-menu mt-4 bg-c-dash" aria-labelledby="dropdownMenuButton1">
              <!--<li class="nav-link w-100"><a class="dropdown-item w-100" href="profile.php"><i class="far fa-user-circle mr-1"></i>Profile</a></li>-->
              <li class="nav-link w-100"><a class="dropdown-item w-100" href="settings.php?id=<?php echo $id;?>"><i class="fas fa-cog mr-1"></i>Settings</a></li>
              <li class="nav-link w-100"><a class="dropdown-item w-100" href="../../logout.php"><i class="fas fa-sign-out-alt mr-1 flip" 
                style="-webkit-transform: scaleX(-1) !important;transform: scaleX(-1) !important;"></i>Logout</a></li>
            </ul>
          </div>
        </div>

    </header>

    
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Others</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body bg-c-dash">
            <div>
              others pzeodkzpeod,pzekdf,ozk,dlk,dakz
            </div>

            
            <div class="dropdown  dropend mt-2">
              <button class="btn dropdown-toggle dropdown-toggle-split" style="background-color: #f7cd6e !important" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="far fa-user-circle mr-1"></i>Pages 
              </button>
              <ul class="dropdown-menu mt-4 bg-c-dash" aria-labelledby="dropdownMenuButton2">
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="page.php?do=show"><i class="far fa-user-circle mr-1"></i>Show</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="page.php?do=pay"><i class="fas fa-cog mr-1"></i>Pay</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="page.php?do=reserve"><i class="fas fa-sign-out-alt mr-1 flip"></i>Reserve</a></li>
              </ul>
            </div>


            <div class="dropdown  dropend mt-2">
              <button class="btn dropdown-toggle dropdown-toggle-split" style="background-color: #f7cd6e !important" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="far fa-user-circle mr-1"></i>Ministries
              </button>
              <ul class="dropdown-menu mt-4 bg-c-dash" aria-labelledby="dropdownMenuButton1">
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="far fa-user-circle mr-1"></i>Profile</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="fas fa-cog mr-1"></i>Settings</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="logout.php"><i class="fas fa-sign-out-alt mr-1 flip" 
                  style="-webkit-transform: scaleX(-1) !important;transform: scaleX(-1) !important;"></i>Logout</a></li>
              </ul>
            </div>

          <div class="dropdown  dropend mt-2">
              <button class="btn dropdown-toggle dropdown-toggle-split" style="background-color: #f7cd6e !important" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="far fa-user-circle mr-1"></i>Embassies 
              </button>
              <ul class="dropdown-menu mt-4 bg-c-dash" aria-labelledby="dropdownMenuButton2">
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="far fa-user-circle mr-1"></i>Profile</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="fas fa-cog mr-1"></i>Settings</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="logout.php"><i class="fas fa-sign-out-alt mr-1 flip" 
                  style="-webkit-transform: scaleX(-1) !important;transform: scaleX(-1) !important;"></i>Logout</a></li>
              </ul>
            </div>

          <div class="dropdown  dropend mt-2">
              <button class="btn dropdown-toggle dropdown-toggle-split" style="background-color: #f7cd6e !important" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="far fa-user-circle mr-1"></i>transport
              </button>
              <ul class="dropdown-menu mt-4 bg-c-dash" aria-labelledby="dropdownMenuButton3">
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="far fa-user-circle mr-1"></i>Profile</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="fas fa-cog mr-1"></i>Settings</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="logout.php"><i class="fas fa-sign-out-alt mr-1 flip" 
                  style="-webkit-transform: scaleX(-1) !important;transform: scaleX(-1) !important;"></i>Logout</a></li>
              </ul>
            </div>

            <div class="dropdown  dropend mt-2">
              <button class="btn dropdown-toggle dropdown-toggle-split" style="background-color: #f7cd6e !important" type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="far fa-user-circle mr-1"></i>works & courses
              </button>
              <ul class="dropdown-menu mt-4 bg-c-dash" aria-labelledby="dropdownMenuButton4">
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="far fa-user-circle mr-1"></i>Profile</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="fas fa-cog mr-1"></i>Settings</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="logout.php"><i class="fas fa-sign-out-alt mr-1 flip" 
                  style="-webkit-transform: scaleX(-1) !important;transform: scaleX(-1) !important;"></i>Logout</a></li>
              </ul>
            </div>

            <div class="dropdown  dropend mt-2">
              <button class="btn dropdown-toggle dropdown-toggle-split" style="background-color: #f7cd6e !important" type="button" id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="far fa-user-circle mr-1"></i>Pay Online
              </button>
              <ul class="dropdown-menu mt-4 bg-c-dash" aria-labelledby="dropdownMenuButton5">
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="far fa-user-circle mr-1"></i>Profile</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="fas fa-cog mr-1"></i>Settings</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="logout.php"><i class="fas fa-sign-out-alt mr-1 flip" 
                  style="-webkit-transform: scaleX(-1) !important;transform: scaleX(-1) !important;"></i>Logout</a></li>
              </ul>
            </div>

            <div class="dropdown  dropend mt-2">
              <button class="btn dropdown-toggle dropdown-toggle-split" style="background-color: #f7cd6e !important" type="button" id="dropdownMenuButton6" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="far fa-user-circle mr-1"></i>Hotels Online
              </button>
              <ul class="dropdown-menu mt-4 bg-c-dash" aria-labelledby="dropdownMenuButton6">
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="far fa-user-circle mr-1"></i>Profile</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="fas fa-cog mr-1"></i>Settings</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="logout.php"><i class="fas fa-sign-out-alt mr-1 flip" 
                  style="-webkit-transform: scaleX(-1) !important;transform: scaleX(-1) !important;"></i>Logout</a></li>
              </ul>
            </div>

            <div class="dropdown  dropend mt-2">
              <button class="btn dropdown-toggle dropdown-toggle-split" style="background-color: #f7cd6e !important" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="far fa-user-circle mr-1"></i>E-Commerce
              </button>
              <ul class="dropdown-menu mt-4 bg-c-dash" aria-labelledby="dropdownMenuButton7">
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="far fa-user-circle mr-1"></i>Profile</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="fas fa-cog mr-1"></i>Settings</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="logout.php"><i class="fas fa-sign-out-alt mr-1 flip" 
                  style="-webkit-transform: scaleX(-1) !important;transform: scaleX(-1) !important;"></i>Logout</a></li>
              </ul>
            </div>

            <div class="dropdown  dropend mt-2">
              <button class="btn dropdown-toggle dropdown-toggle-split" style="background-color: #f7cd6e !important" type="button" id="dropdownMenuButton8" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="far fa-user-circle mr-1"></i>Hotels Online
              </button>
              <ul class="dropdown-menu mt-4 bg-c-dash" aria-labelledby="dropdownMenuButton8">
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="far fa-user-circle mr-1"></i>Profile</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="fas fa-cog mr-1"></i>Settings</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="logout.php"><i class="fas fa-sign-out-alt mr-1 flip" 
                  style="-webkit-transform: scaleX(-1) !important;transform: scaleX(-1) !important;"></i>Logout</a></li>
              </ul>
            </div>

            <div class="dropdown  dropend mt-2">
              <button class="btn dropdown-toggle dropdown-toggle-split" style="background-color: #f7cd6e !important" type="button" id="dropdownMenuButton9" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="far fa-user-circle mr-1"></i>Registre Online
              </button>
              <ul class="dropdown-menu mt-4 bg-c-dash" aria-labelledby="dropdownMenuButton9">
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="far fa-user-circle mr-1"></i>Profile</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="fas fa-cog mr-1"></i>Settings</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="logout.php"><i class="fas fa-sign-out-alt mr-1 flip" 
                  style="-webkit-transform: scaleX(-1) !important;transform: scaleX(-1) !important;"></i>Logout</a></li>
              </ul>
            </div>

            <div class="dropdown  dropend mt-2">
              <button class="btn dropdown-toggle dropdown-toggle-split" style="background-color: #f7cd6e !important" type="button" id="dropdownMenuButton9" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="far fa-user-circle mr-1"></i>Studies
              </button>
              <ul class="dropdown-menu mt-4 bg-c-dash" aria-labelledby="dropdownMenuButton9">
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="far fa-user-circle mr-1"></i>Profile</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="#"><i class="fas fa-cog mr-1"></i>Settings</a></li>
                <li class="nav-link w-100"><a class="dropdown-item w-100" href="logout.php"><i class="fas fa-sign-out-alt mr-1 flip" 
                  style="-webkit-transform: scaleX(-1) !important;transform: scaleX(-1) !important;"></i>Logout</a></li>
              </ul>
            </div>




          </div>
      </div>
