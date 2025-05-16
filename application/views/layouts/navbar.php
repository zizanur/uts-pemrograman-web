<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="<?= base_url('beranda')?>">Furni<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item active">
							<a class="nav-link" href="<?= base_url('beranda')?>">Home</a>
						</li>
						<li><a class="nav-link" href="<?= base_url('shop')?>">Shop</a></li>
						<li><a class="nav-link" href="<?= base_url('about')?>">About us</a></li>
						<li><a class="nav-link" href="<?= base_url('services')?>">Services</a></li>
						<li><a class="nav-link" href="<?= base_url('blog')?>">Blog</a></li>
						<li><a class="nav-link" href="<?= base_url('contact')?>">Contact us</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="#"><img src="<?= base_url('assets/images/user.svg')?>"></a></li>
						<li><a class="nav-link" href="<?= base_url('shop/cart')?>"><img src="<?= base_url('assets/images/cart.svg')?>"></a></li>
					</ul>
				</div>
			</div>
				
		</nav>
