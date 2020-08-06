@extends ('layout.main')

<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a class="logo" href="index.html">Industrious</a>
				<nav>
					<a href="menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="elements.html">Elements</a></li>
					<li><a href="generic.html">Generic</a></li>
				</ul>
			</nav>

		<!-- Heading -->
			<div id="heading" >
				<h1>Free Test Service</h1>
			</div>

			

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">
						<header>
							<h2>Sign Up For Free</h2>
						</header>
			
									<form method="post" action="#">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
											<h3> Name</h3>
												<input type="text" name="name" id="name" value="" placeholder="Name" />
											</div>
											<div class="col-6 col-12-xsmall">
											<h3> Email</h3>
												<input type="email" name="email" id="email" value="" placeholder="Email" />
											</div>

											
											<div class="col-6 col-12-xsmall">
												<h3> MAC Address</h3>
												<input type="text" name="name" id="name" value="" placeholder="MAC Address" />
											</div>
											<div class="col-6 col-12-xsmall">
												<h3> IP Address</h3>
												<input type="email" name="email" id="email" value="" placeholder="IP Address" />
											</div>
											

											<!-- Break -->
											<div class="col-12">
											<h3>choose Your Package</h3>
												<select name="category" id="category">
													<option value="">- Select -</option>
													<option value="alpha">Package one</option>
													<option value="beta">Package two</option>
													<option value="gamma">Package three</option>
													
												</select>
</div>
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" value="Submit Form" class="primary" /></li>
													<li><input type="reset" value="Reset" /></li>
												</ul>
											</div>
										</div>
									</form>
					</div>
				</div>
			</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>