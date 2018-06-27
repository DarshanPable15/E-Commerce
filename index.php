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

			<div id="sidebar">This is side bar!</div>

			<div id="content_area">This is content area!</div>

		</div>

		<div id="footer">This is the footer!</div>
	</div>
</body>
</html>