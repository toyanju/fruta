<?php
	session_start();
	$conn=mysqli_connect("localhost","root","","food-order");
?>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<title>Restaurante-Shop</title>
		<!-- Font awesome CDN -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
		<!--favicon-->
		<link rel="icon" href="logo.png" type="image/icon">
		<link rel="stylesheet" href="styleshop.css" type="text/css">
	</head>
	<body>
		<header>
				<div class="container">
					<nav class="nav">
						<div class="menu">
							<i class="fas fa-bars"></i>
							<i class="fas fa-times"></i>
						</div>
						<a href="home.html" class="logo"> <img class="logoimg" src="logo.png" alt="gurung"> </a>
						<ul class="lists">
							<li class="nav-list">
								<a href="home.html" class="nav-link">Home</a>
							</li>
							<li class="nav-list">
								<a href="ementa.html" class="nav-link">Ementa</a>
							</li>
							<li class="nav-list">
								<a href="reserva.html" class="nav-link">Reserva</a>
							</li>
							<li class="nav-list">
								<a href="#" class="nav-link">Shop</a>
							</li>
							<li class="nav-list">
								<a href="ex1.html" class="nav-link">Contatos</a>
							</li>
						</ul>
					</nav>
				</div>
		</header>
		<section class="midd">
			<div class="container">
				<h1><span class="f-letter">S</span>hop</h1><br>
					<div class="food-search">
						<form action="">
							<input type="search" name="search" placeholder="Search for food..">
							<button type="submit" style="background-color:white; border:0"><i class="fa fa-search fa-2x"></i></button>
						<br><br>
						</form>
					</div>
			</div>
			<br><br>
			<?php
			
				$query="SELECT * FROM tbl_food ";
				$result=mysqli_query($conn,$query);
				if (mysqli_num_rows($result)>0)
				{
					while($row=mysqli_fetch_array($result))
					{
			?>
			<div>
				<form action="" method="POST">
					<div style="border:1px solid black;">
						<img src="<?php echo $row['Image'];?>"class="img-res"><br>
						<h4><?php echo $row['name'];?></h4>
						<h4><?php echo $row['price'];?></h4>
						<input type="number" name="quantity" value="1">
						<input type="hidden" name="hidden-name" value="<?php echo $row['name']; ?> ">
						<input type="hidden" name="hidden-price" value="<?php echo $row['price']; ?> ">
						<br><br>
						<input type="submit" name="add_to_cart" value="Add to cart ">
					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
		</section>
		
	<footer>
		<div class="container">
			<div class="totop">
				<a href="#"><i class="fas fa-chevron-up"></i>
			</div><br>
			<div class="title">
					<h4><span class="f-letter">A</span>bout us</h4>
			</div>
			<div class="icoico">
					<i class="fas fa-pepper-hot" style="color:red"></i>
			</div>
			<p>asvchjfc hsfa dhsf asdhgf saljdhfgas lhkdfgba sdhkfK,HSD</p>
			<br><br>
			<div class="network">
				<h4>Segue</h4><br>
				<div class="nets">
					<ul>
						<li>
							<a href="#"<i class="fab fa-facebook"></i></a>
						</li>
						<li>
							<a href="#"<i class="fab fa-instagram"></i></a>
						</li>
						<li>
							<a href="#"<i class="fab fa-pinterest"></i></a>
						</li>
						<li>
							<a href="#"<i class="fa fa-map-marker"></i></a>
						</li>
						<li>
							<a href="#"<i class="fab fa-whatsapp"></i></a>
						</li>
					</ul>
				</div>
				
			</div><br>
			<div class="letter">
			<form>
				<input type="text" placeholder="A sua e-mail...">
				<button type="submit" class="newsbtn">
					<i class="fas fa-envelope"></i>
				</button>
			</form>
		</div>
	</footer>
	<script src="main.js"></script>
	</body>
</html>