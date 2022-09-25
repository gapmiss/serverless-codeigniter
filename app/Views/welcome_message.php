<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>serverless CodeIgniter PHP Framework - powered by Vercel & PlanetScale</title>
    <meta name="description" content="The small framework with powerful features" />
	<?php echo (ENVIRONMENT == 'production') ? '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">'.PHP_EOL : '<link rel="stylesheet" href="/css/bulma.min.css">'.PHP_EOL; ?>
	<link rel="stylesheet" href="/css/demo.css">
	<link rel="shortcut icon" type="image/png" href="/images/favicon.ico">
</head>

<body>

<header>
	<nav class="navbar mb-0" style="background-color: rgba(247, 248, 249, 1);border-bottom:1px solid #eee;">
		<div class="container">
			<div class="navbar-brand">
                <a href="/"><img src="/images/codeigniter-logo.svg" alt="" class="logo"></a>
				<span class="navbar-burger" data-target="navbarMenuHeroA">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</div>
			<div id="navbarMenuHeroA" class="navbar-menu">
				<div class="navbar-end">
					<a class="navbar-item" href="<?=base_url()?>">
						Home
					</a>
					<a class="navbar-item" href="<?=base_url('demo')?>">
						Demo
					</a>
					<a class="navbar-item" href="<?=base_url('docs')?>">
						Documentation
					</a>
					<span class="navbar-item">
						<a class="button" href="https://github.com/gapmiss/serverless-codeigniter" target="_blank" style="padding-right:.33em">
							<span class="icon">
								<img height="32" width="32" src="https://cdn.jsdelivr.net/npm/simple-icons@v7/icons/github.svg" />
							</span>
							<span>Github</span>
						</a>
					</span>
				</div>
			</div>
		</div>
	</nav>
</header>

<div style="background-color: rgba(247, 248, 249, 1);">
    <section class="hero is-small p-4">
        <div class="hero-body">
            <p class="title is-2">
                Welcome to <em>serverless</em> CodeIgniter
            </p>
            <p class="subtitle mt-2">
                The small framework with powerful features
            </p>
        </div>
    </section>
</div>

<section>
	<article class="container is-max-desktop box">
		<div>
        	<h2 class="subtitle is-4" style="color:#DD4930">Powered by</h2>
			<div class="level powered">
				<!-- <p class="level-item has-text-centered"><a href="https://codeigniter.com"><img src="/images/codeigniter.svg" alt=""></a></p> -->
				<p class="level-item has-text-centered">
					<a class="button" href="https://codeigniter.com" target="_blank" style="padding-right:.33em;border:0;">
						<span class="icon">
							<img height="32" width="32" src="https://cdn.jsdelivr.net/npm/simple-icons@v7/icons/codeigniter.svg" />
						</span>
						<span class="ml-2 is-size-4">CodeIgniter</span>
					</a>
				</p>
				<p class="level-item has-text-centered">
					<a class="button" href="https://vercel.com" target="_blank" style="padding-right:.33em;border:0;">
						<span class="icon">
							<img height="32" width="32" src="https://cdn.jsdelivr.net/npm/simple-icons@v7/icons/vercel.svg" />
						</span>
						<span class="ml-2 is-size-4">Vercel</span>
					</a>
				</p>
				<p class="level-item has-text-centered">
					<a class="button" href="https://planetscale.com" target="_blank" style="padding-right:.33em;border:0;">
						<span class="icon">
							<img height="32" width="32" src="https://cdn.jsdelivr.net/npm/simple-icons@v7/icons/planetscale.svg" />
						</span>
						<span class="ml-2 is-size-4">PlanetScale</span>
					</a>
				</p>
			</div>
			<h2 class="mt-6 subtitle is-5" style="color:#459329">
				About this page
			</h2>
			<p class="py-3">
				The page you are looking at is being generated dynamically by CodeIgniter.
			</p>
			<p class="py-3">
				If you would like to edit this page you will find it located at:
			</p>
			<pre class="my-3">app/Views/welcome_message.php</pre>
			<p class="py-3">
				The corresponding controller for this page can be found at:
			</p>
			<pre class="my-3">app/Controllers/Home.php</pre>
		</div>
	</article>
</section>

<footer>
    <div class="environment">
        <p>Page rendered in {elapsed_time} seconds</p>
    </div>
    <div class="copyrights">
        <p>&copy; <?= date('Y') ?> CodeIgniter Foundation. CodeIgniter is open source project released under the MIT open source licence.</p>
    </div>
</footer>

<script src="/js/demo.js"></script>

</body>
</html>