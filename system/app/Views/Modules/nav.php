<!--header-->
<header id="site-header" class="fixed-top">
	<div class="container-fluid">
		<nav class="navbar navbar-expand-lg stroke">
			<h1>
				<a class="navbar-brand d-flex align-items-center" href="index.html">
					<i class="fas fa-tools mr-1" aria-hidden="true"></i><?= $data['page_titulo']?></a>
			</h1>
			<!-- if logo is image enable this   
			<a class="navbar-brand" href="#index.html">
				<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
			</a> -->
			<button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
				data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
				<span class="navbar-toggler-icon fa icon-close fa-times"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
				<ul class="navbar-nav ml-lg-auto">
					<li class="nav-item active">
						<a class="nav-link" href="<?= base_url()?>">Inicio <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url()?>pages/about">Nosotros</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url()?>pages/services">Servicios</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url()?>pages/contact">Contactenos</a>
					</li>
					<!-- search button -->
					<!-- <div class="search-right ml-lg-3">
						<form action="#search" method="GET" class="search-box position-relative">
							<div class="input-search">
								<input type="search" placeholder="Enter Keyword" name="search" required="required"
									autofocus="" class="search-popup">
							</div>
							<button type="submit" class="btn search-btn"><i class="fa fa-search"
									aria-hidden="true"></i></button>
						</form>
					</div>
					//search button -->
				</ul>
			</div>
			<!-- toggle switch for light and dark theme -->
			<div class="cont-ser-position">
				<nav class="navigation">
					<div class="theme-switch-wrapper">
						<label class="theme-switch" for="checkbox">
							<input type="checkbox" id="checkbox">
							<div class="mode-container">
								<i class="gg-sun"></i>
								<i class="gg-moon"></i>
							</div>
						</label>
					</div>
				</nav>
			</div>
			<!-- //toggle switch for light and dark theme -->
		</nav>
	</div>
</header>
<!--//header-->