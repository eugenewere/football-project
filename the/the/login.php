
<!DOCTYPE html>
<html>
<head>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--Animation-->
<script src="js/wow.min.js"></script>
<link href="css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
<script src="js/simpleCart.min.js"> </script>	
</head>
<body>
    <!-- header-section-starts -->
	<div class="header">
		<div class="container">
			<div class="top-header">
				<div class="logo">
					<a href="index.html" style="font-size:40px; font-family:;text-decoration:none; ">BONJOUR HOTEL</a>
				</div>
			
				<div class="header-right">
						<div class="cart box_1">
							<a href="checkout.html">
								<h3> <span class="simpleCart_total"> Kshs0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span> items)<img src="images/bag.png" alt=""></h3>
							</a>	
							<p><a href="javascript:;" class="simpleCart_empty">Empty card</a></p>
							<div class="clearfix"> </div>
						</div>
					</div>
				<div class="clearfix"></div>
			</div>
		</div>
			<div class="menu-bar">
			<div class="container">
				<div class="top-menu">
					<ul>
						<li><a href="index.html">Home</a></li>|
					    <li><a href="menu.html">Menu</a></li>|
						<li><a href="checkout.html">Checkout</a></li>|
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="login-section">
					<ul>
						<li><a href="login.html">Login | Register</a></li>
						
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="content">
	<div class="container">
		<div class="login-page">
			    <div class="dreamcrub">
			   	 
                <ul class="previous">
                	<li><a href="index.html">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
			   <div class="account_grid">
			   <div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
			  	 <h3>NEW CUSTOMERS</h3>
				 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				 <a class="acount-btn" href="register.html">Create an Account</a>
			   </div>
			   <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
			  	<h3>REGISTERED CUSTOMERS</h3>
				<p>If you have an account with us, please log in.</p>
				<form>
				  <div>
					<span><label>username</label></span>
					<input type="text" name="username"> 
				  </div>
				  <div>
					<span><label>password</label></span>
					<input type="password" name="password"> 
				  </div>

				 <div class="input-group">
  		         <button type="submit" class="btn" name="login_user">Login</button>
             	</div>
  	             <p>
  	            	Not yet a member? <a href="register.php">Sign up</a>
              	</p>
			    </form>

			   </div>	
			   <div class="clearfix"> </div>
			 </div>
		   </div>
</div>



	  <script type="text/javascript">
						$(document).ready(function() {
							
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>