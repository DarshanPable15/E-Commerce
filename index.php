	<!DOCTYPE html>
<html>
<head>
	<title>My Online Shop</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css" media="all">
</head>
<body>	
	<div class="main_wrapper">

		<div class="header_wrapper">

			<img id="logo" src="" alt="LOGO HERE">
			<img id="banner" src="BANNER HERE">

		</div>

		<div class="menubar">
			<ul id="menu">
				<li><a href="#">Home</a></li>
				<li><a href="#">My Account</a></li>
				<li><a href="#">All Products</a></li>
				<li><a href="#">Sign Up</a></li>
				<li><a href="#">Shopping Cart</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>

			<div id="form">
				<form method="get" action="results.php" enctype="mutlipart/form-data">
					<input type="text" name="user_query" placeholder="Search a product">
					<input type="submit" name="search" value="Search">
				</form>
			</div>
			
		</div>

		<div class="content_wrapper">

			<div id="sidebar">
				<div id="sidebar_title">Categories</div>

					<ul id="cats">
						<li><a href="#">Laptop</a></li>	
						<li><a href="#">Desktop</a></li>	
						<li><a href="#">Mobile</a></li>	
						<li><a href="#">Camera</a></li>	
						<li><a href="#">Tablet</a></li>	
						<li><a href="#">Smart Watch</a></li>	
					</ul>

				<div id="sidebar_title">Brands</div>

					<ul id="cats">
						<li><a href="#">Apple</a></li>	
						<li><a href="#">Samsung</a></li>	
						<li><a href="#">Lenovo</a></li>	
						<li><a href="#">HP</a></li>	
						<li><a href="#">Dell</a></li>	
						<li><a href="#">SONY</a></li>	
					</ul>

				</div>
			</div>

			<div id="content_area">This is content area!</div>

		</div>

		<div id="footer">This is the footer!</div>
	</div>
</body>
</html>