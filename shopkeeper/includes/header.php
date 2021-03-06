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
if(isset( $_SESSION['shopkeeperUser'])=="")
{

}
else
 {
   ?>
   <li><a href="my_account.php"><i class="fa fa-user"></i> | Hi <?php echo $_SESSION['shopkeeperUser'];?></a></li>
  <?php
}
?>
                  </ul>
                </div>
                <div class="float-right">
                  <a style="color:white" href="logout.php"><i class="fa fa-sign-out">Logout || </i></a>
                  <?php
                  if(isset( $_SESSION['shopkeeperUser'])=="")
                  {

                  }
                  else
                   {
                     ?>
                      <a style="color:white" href="../UserPanel/loginform/log_in.php"><i class="fa fa-sign-in">Log-in</i></a>
                    <?php
                  }
                  ?>

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
                	<li class="nav-item active"><a class="nav-link" href="add_product.php">Add Product</a></li>
               <li class="nav-item active"><a class="nav-link" href="my_product.php">My Product</a></li>


								<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
</ul>
</div>
  </div>
</nav>
</div>
</header>
        <!--================Header Menu Area =================-->

                <!--================Home Banner Area =================-->

               <section class="home_banner_area">
                    <div class="banner_inner">
        				<div class="container">
        					<div class="row">
        						<div class="col-lg-8">
        							<div class="banner_content">
        								<h2>Precise concept design <br />for stylish living</h2>
        								<p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.</p>

        							</div>
        						</div>
        						<div class="col-lg-4">
        							<div class="home_right_box">
        								<div class="home_item">
        									<i class="flaticon-sofa"></i>
        								</div>
        								<div class="home_item">
        									<i class="flaticon-bed"></i>
        								</div>
        								<div class="home_item">
        									<i class="flaticon-computer"></i>
        								</div>
        								<div class="home_item">
        									<i class="flaticon-mirror"></i>
        								</div>
        								<div class="home_item">
        									<i class="flaticon-closet"></i>
        								</div>
        								<div class="home_item">
        									<i class="flaticon-kitchen"></i>
        								</div>
        							</div>
        						</div>
        					</div>
        				</div>
                    </div>
                </section>


</body>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

                <script>
                $(document).ready(function(){
    $("#cart").click(function(){
      $(".shopping-cart").fadeToggle();
    });
  });
                </script>

                <!--================End Home Banner Area =================-->
