<?php    session_start();

    require "inlcudes/dbh.inc.php";
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="theme-color" content="#b39f6be6">

    <title>Product catalog</title>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css">
  
    <!-- Google Fonts + style-->
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP:400,700&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" >

    <script src="https://cdn.jsdelivr.net/npm/@linways/table-to-excel@1.0.4/dist/tableToExcel.min.js"></script>
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
    <script defer type="text/javascript" src="DataTables/datatables.min.js"></script>


    <!-- slick slide-->
      <!-- Add the slick-theme.css if you want default styling -->
      <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
      <!-- Add the slick-theme.css if you want default styling -->
      <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>


<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
				
  </head>

<body itemscope="itemscope" itemtype="http://schema.org/WebPage" ontouchstart="">

  <a href="javascript:" id="return-to-top" data-scroll=""><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
  <div id="header-top">
   <div class="container">
    <div class="row">
      <div class="col-md-12">

        <?php
        if(isset($_SESSION['username'])){
          echo ' <h1>Welcome '.$_SESSION['username'].'</h1>
          <form style="float: right;" action="inlcudes\logout.inc.php" method="POST">
          <input type="submit" class="btn btn-lg btn-danger" value="Logout" name="logout-submit">
          </form>';
          if ($_SESSION['username']=='Admin') {
            echo '<a style="float: right;" class="btn btn-lg btn-success mx-2" href="create.php">Add new product</a>
            <a href="users.php" class="btn btn-lg btn-info" style="float: right;">Account manager</a>
            ';
          }
      }else{
        echo'
        <button id="openButton" style="float: right;"  class="btn btnHover" class="open-button" onclick="openForm()">Open Login Form</button>  
        <div class="form-popup" id="myForm">
          <form autocomplete="off" style="float: right;" action="inlcudes\login.inc.php" method="POST">
            <label for="">Username</label>
            <input class="form-control" type="text" name="username" placeholder="Username">
            <br>
            <label for="">Password</label>
            <input class="form-control" type="password" name="password" placeholder="Password">
            <br>
            <input type="submit" class="btn btn-lg btn-success" value="Login" name="login-submit">
            <button style="float: right;" type="button" class="btn btn-lg btn-danger cancel" onclick="closeForm()">Close</button>

            
        </form>
      </div>';
      }
        ?>
      <a href="index.php"><img src="images/logoKaijin.png" alt="" class="img-fluid img-block-sm " id="logo"></a>
     </div><!-- col -->
     <div class="col-md-12 d-md-block d-sm-none d-none">
      <div class="phone-area mb-3">
       <p class="mb-0 text-small" style="height:24px;"><!--5,000円(税抜)以上のお買い上げで送料無料--></p>
       <p class="h2 mb-0">TEL:03-6264-7716</p>
       <p class="mb-0 text-small">From Monday to Friday 9:00-17:00</p>
      </div>

     </div><!-- col -->
    </div><!-- row -->
   </div>
  </div>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white static-top">
   <div class="container">
     <a class="navbar-brand d-md-none d-sm-block d-block" href="#"></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarResponsive">
       <ul class="navbar-nav mx-auto">
         <?php
         if(isset($_SESSION['username'])){
           if ($_SESSION['username']=='Admin') {
            echo '
            <li class="nav-item">
              <a class="nav-link" href="supplier.php">Suppliers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="client.php">Clients</a>
            </li>';           }
           
         }
         ?>

         <li class="nav-item">
           <a class="nav-link" href="index.php">TOP</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="products.php">Product List</a>
         </li>
         <li class="nav-item">
          <a class="nav-link" href="categories.php">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="factory.php">Tuna processing</a>
        </li>

       <!--  <li class="nav-item">
           <a class="nav-link" href="#">Most popular</a>
         </li><-->
         <li class="nav-item">
           <a class="nav-link" href="order.php">How to make an order</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="shopping_cart.php">Basket<i class="fas fa-shopping-cart"></i></a>
         </li>
         <li class="nav-item">
          <a class="nav-link" href="mailto: teamexport@kaijin.co.jp">Email Us</a>
        </li>
       </ul>
     </div>
   </div>
  </nav>

  <!-- Page Content -->
  <main role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/mainContentOfPage">

    <section id="main-visual">
    <div class="container">
      <div class="row">
        <div class=" col-lg-24 mx-auto ">
          <div class="homepage">
            <div>
                <img class="img-fluid d-block m-auto" src="images/logo-poseidon.png" alt="ochugen">
            </div>
          </div>      
          <h1 class="sr-only">Kaijin's product catalog page</h1>
        </div>
      </div>
    </div>
    </section>

    <script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
  document.getElementById("openButton").style.display = "none";

}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
  document.getElementById("openButton").style.display = "inline-block";

}
</script>
