<!doctype html>
<html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="icon" href="img/favicon.png" type="image/png">
      <title>Furnituristic</title>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">

      <link rel="stylesheet" href="vendors/flaticon/flaticon.css">
      <!-- main css -->
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="stylesheet" href="css/cartHover.css">

      <!-- //for ajax-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body>
        <!--================Header Menu Area =================-->
        <header class="header_area">
          <div class="top_menu">
            <div class="container">
              <div class="top_inner">
                <div class="float-left">
                  <ul class="list header_socila">
                    <?php
                    if(isset( $_SESSION['LoginUser'])=="")
                    {

                    }
                    else
                     {
                       ?>
                       <li><a href="my_account.php"><i class="fa fa-user"></i> | Hi <?php echo $_SESSION['LoginUser'];?></a></li>
                      <?php
                    }
                    ?>

                  </ul>
                </div>
                <div class="float-right">
                  <a style="color:white" href="logout.php"><i class="fa fa-sign-out">Logout || </i></a>
                    <a style="color:white" href="loginform/log_in.php"><i class="fa fa-sign-in">Log-in</i></a>
                </div>
              </div>
            </div>
          </div>
            <div class="main_menu" id="mainNav">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="home.php"><b>Furnituristic</b></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="home.php">Home</a></li>
                	<li class="nav-item active"><a class="nav-link" href="product.php">Products</a></li>
               <li class="nav-item active"><a class="nav-link" href="book_a_carpenter.php">Book a Carpenter</a></li>
               	<li class="nav-item active"><a class="nav-link" href="design.php">Design</a></li>

								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Post ads</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="post_ads.php">Post an ad</a></li>
										<li class="nav-item"><a class="nav-link" href="my_posted_ads.php">My Posted ads</a></li>
			              <li class="nav-item"><a class="nav-link" href="view_posted_ads.php">View Posted ads</a></li>
                  </ul>
								</li>
								<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>


</ul>
</div>
  </div>
</nav>
</div>
</header>
