<?php include '../../init.php';?>
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
        </div>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Pages
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li class="w-100"><a class="dropdown-item" href="page.php?do=transaction&id=<?php echo $id;?>">Transaction</a></li>
            <li class="w-100"><a class="dropdown-item" href="dashboard.php?id=<?php echo $id;?>">Dashboard Page</a></li>
            <li class="w-100"><a class="dropdown-item" href="settings.php?id=<?php echo $id;?>">Settings</a></li>
          </ul>
        </div>
      </nav>

    </header>