<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
	<style>
		body {
			font-family: sans-serif;
		}
		#container {
			max-width: 700px;
			margin: 50px auto;
			border: 2px solid #ccc;
		}
		#site-header{
			padding: 30px;
			text-align: center;
			border-bottom: 2px solid #ccc;
		}
		#site-header h1{
			margin: 0;
		}
		#primary-navigation {
			text-align: center;
			padding: 10px;
			border-bottom: 2px solid #ccc;
		}
		#primary-navigation ul {
			list-style: none;
			margin: 0;
			padding: 0;
		}
		#primary-navigation ul li {
			display: inline-block;
		}
		#primary-navigation ul li a{
			display: block;
			padding: 10px 20px;
			background: #000;
			color: #fff;
			text-decoration: none;
		}
		#primary-navigation ul li a:hover{
			background: #555;
		}
		#site-content {
			padding: 30px;
			border-bottom: 2px solid #ccc;
		}
		.pagination {
			padding: 10px;
			border-bottom: 2px solid #ccc;
			text-align: center;
		}
		.pagination .prev,
		.pagination .next {
			display: inline-block;
			padding: 10px 20px;
			color: #000;
			border: 1px solid #ccc;
			text-decoration: none;
		}
		#site-footer {
			padding: 30px;
			text-align: center;
		}
	</style>
</head>

<body>
<div id="container">
	<header id="site-header">
		<h1>Nama Website</h1>
	</header>
	<nav id="primary-navigation">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href="#">About Us</a></li>
		</ul>
	</nav>

	<main id="site-content">
		<article>
			<h2>Judul Halaman 1</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a tortor quam. Vestibulum aliquet, diam eget dignissim vehicula, sapien sapien tempor velit, a ultrices tellus turpis nec nunc. Duis porta dapibus ligula vel semper.</p>
		</article>
		<article>
			<h2>Judul Halaman 2</h2>
			<p>Quisque gravida, nunc nec consectetur tempus, massa augue facilisis quam, a ultrices felis orci lacinia justo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse a ultrices felis. Sed mollis pharetra tortor condimentum congue.</p>
		</article>
		<article>
			<h2>Judul Halaman 3</h2>
			<p>Lorem ipsum dolor sit amet suspendisse a ultrices felis. Sed mollis pharetra tortor condimentum congue.</p>
		</article>
	</main>
	<nav class="pagination">
		<a class="prev" href="#">Previous</a>
		<a class="next" href="#">Next</a>
	</nav>
	<footer id="site-footer">
		Copyright &copy; 2020
	</footer>
</div>
</body>
</html>
