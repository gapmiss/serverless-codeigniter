<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>serverless CodeIgniter PHP Framework - Demo</title>
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
                Demo
            </p>
        </div>
    </section>
</div>

<section>
	<div class="container is-max-desktop box" id="content">
	<div>
			
			<h2 class="subtitle is-4" style="color:#DD4930">PlanetScale</h2>
			<h3 class="subtitle is-5" style="color:#459329">MySQL Query</h3>
			<div style="background-color:#eee" class="p-5 my-3 is-family-monospace">
				<span style="color:#444;">SELECT <span style="color:#614BBB;">id, title, description, price, discountPercentage, rating, stock, brand, category, thumbnail	 <span style="color:#444;">FROM <span style="color:#614BBB;">demo <span style="color:#444;">WHERE <span style="color:#614BBB;">category</span><span style="color:#444;">='<span style="color:green;">sunglasses</span>'</span>
			</div>
			<?php
			$db = \Config\Database::connect();
			$query   = $db->query("SELECT id, title, description, price, discountPercentage, rating, stock, brand, category, thumbnail FROM demo WHERE category='sunglasses'");
			$results = $query->getResult();
			// echo 1;exit;
			// print_r($results);
			?>
			<h3 class="subtitle is-5 mt-5" style="color:#459329">HTML Response</h3>
			<div class="table-container">
				<table class="table is-striped is-hoverable is-fullwidth is-size-7">
					<tr>
						<th class="is-size-7">id</th>
						<th>title</th>
						<th>description</th>
						<th>price</th>
						<th>discountP...</th>
						<th>rating</th>
						<th>stock</th>
						<th>brand</th>
						<th>category</th>
						<th>thumbnail</th>
					</tr>
					<?php foreach ($results as $row): ?>
					<tr>	
						<td>
							<?php
								echo $row->id
							?>
						</td>
						<td><?=$row->title ?></td>
						<td><?=character_limiter($row->description, 50) ?></td>
						<td><?=$row->price ?></td>
						<td><?=$row->discountPercentage ?></td>
						<td><?=$row->rating ?></td>
						<td><?=$row->stock ?></td>
						<td><?=$row->brand ?></td>
						<td><?=$row->category ?></td>
						<td><?=ellipsize($row->thumbnail, 20, 1, "&hellip;") ?></td>
					</tr>
					<?php endforeach ?>
					<tr>
						<td colspan="15">
							Total Results: <?php echo count($results); ?>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="pt-5">
			<h3 class="subtitle is-5" style="color:#459329">JSON Response</h3>
			<p>‣ <a href="/db" target="_blank">JSON Example</a></p>
		</div>
		<?php
			if (ENVIRONMENT == 'production')
			{
		?>
		<div class="pt-5">
			<h2 class="subtitle is-4" style="color:#DD4930">Vercel</h2>
			<h3 class="subtitle is-5" style="color:#459329">ENV variables</h3>
			<div class="columns">
				<div class="column is-one-third m-2" style="border-bottom:2px solid #eee;">
					<p class="subtitle is-family-code is-size-6" style="color:#614BBB !important;">VERCEL</p>
					<p class= "subtitle is-family-code is-size-7"><?= getenv('VERCEL')?></p>
				</div>
				<div class="column m-2" style="border-bottom:2px solid #eee;">
					<p class="subtitle is-family-code is-size-6" style="color:#614BBB !important;">VERCEL_ENV</p>
					<p class= "subtitle is-family-code is-size-7"><?= getenv('VERCEL_ENV')?></p>
				</div>
				<div class="column m-2" style="border-bottom:2px solid #eee;">
					<p class="subtitle is-family-code is-size-6" style="color:#614BBB !important;">VERCEL_URL</p>
					<p class= "subtitle is-family-code is-size-7"><?= getenv('VERCEL_URL')?></p>
				</div>
			</div>
			<div class="columns">
				<div class="column is-one-third m-2" style="border-bottom:2px solid #eee;">
					<p class="subtitle is-family-code is-size-6" style="color:#614BBB !important;">VERCEL_REGION</p>
					<p class= "subtitle is-family-code is-size-7"><?= getenv('VERCEL_REGION')?></p>
				</div>
				<div class="column m-2" style="border-bottom:2px solid #eee;">
					<p class="subtitle is-family-code is-size-6" style="color:#614BBB !important;">VERCEL_GIT_PROVIDER</p>
					<p class= "subtitle is-family-code is-size-7"><?= getenv('VERCEL_GIT_PROVIDER')?></p>
				</div>
				<div class="column m-2" style="border-bottom:2px solid #eee;">
					<p class="subtitle is-family-code is-size-6" style="color:#614BBB !important;">VERCEL_GIT_REPO_SLUG</p>
					<p class= "subtitle is-family-code is-size-7"><?= getenv('VERCEL_GIT_REPO_SLUG')?></p>
				</div>
			</div>
			<div class="columns">
				<div class="column is-one-third m-2" style="border-bottom:2px solid #eee;">
					<p class="subtitle is-family-code is-size-6" style="color:#614BBB !important;">VERCEL_GIT_REPO_OWNER</p>
					<p class= "subtitle is-family-code is-size-7"><?= getenv('VERCEL_GIT_REPO_OWNER')?></p>
				</div>
				<div class="column m-2" style="border-bottom:2px solid #eee;">
					<p class="subtitle is-family-code is-size-6" style="color:#614BBB !important;">VERCEL_GIT_REPO_ID</p>
					<p class= "subtitle is-family-code is-size-7"><?= getenv('VERCEL_GIT_REPO_ID')?></p>
				</div>
				<div class="column m-2" style="border-bottom:2px solid #eee;">
					<p class="subtitle is-family-code is-size-6" style="color:#614BBB !important;">VERCEL_GIT_COMMIT_REF</p>
					<p class= "subtitle is-family-code is-size-7"><?= getenv('VERCEL_GIT_COMMIT_REF')?></p>
				</div>
			</div>
			<div class="columns">
				<div class="column is-one-third m-2" style="border-bottom:2px solid #eee;">
					<p class="subtitle is-family-code is-size-6" style="color:#614BBB !important;">VERCEL_GIT_COMMIT_SHA</p>
					<p class= "subtitle is-family-code is-size-7"><?= getenv('VERCEL_GIT_COMMIT_SHA')?></p>
				</div>
				<div class="column m-2" style="border-bottom:2px solid #eee;">
					<p class="subtitle is-family-code is-size-6" style="color:#614BBB !important;">VERCEL_GIT_COMMIT_MESSAGE</p>
					<p class= "subtitle is-family-code is-size-7"><?= getenv('VERCEL_GIT_COMMIT_MESSAGE')?></p>
				</div>
				<div class="column m-2" style="border-bottom:2px solid #eee;">
					<p class="subtitle is-family-code is-size-6" style="color:#614BBB !important;">VERCEL_GIT_COMMIT_AUTHOR_NAME</p>
					<p class= "subtitle is-family-code is-size-7"><?= getenv('VERCEL_GIT_COMMIT_AUTHOR_NAME')?></p>
				</div>
			</div>
			<h3 class="subtitle is-5" style="color:#459329">$_SERVER variables</h3>
			<div class="columns">
				<div class="column is-one-third m-2" style="border-bottom:2px solid #eee;">
					<p class="subtitle is-family-code is-size-6" style="color:#614BBB !important;">HTTP_X_VERCEL_IP_LATITUDE</p>
					<p class= "subtitle is-family-code is-size-7"><?= $_SERVER['HTTP_X_VERCEL_IP_LATITUDE']?></p>
				</div>
				<div class="column m-2" style="border-bottom:2px solid #eee;">
					<p class="subtitle is-family-code is-size-6" style="color:#614BBB !important;">HTTP_X_VERCEL_IP_LONGITUDE</p>
					<p class= "subtitle is-family-code is-size-7"><?= $_SERVER['HTTP_X_VERCEL_IP_LONGITUDE']?></p>
				</div>
				<div class="column m-2" style="border-bottom:2px solid #eee;">
					<p class="subtitle is-family-code is-size-6" style="color:#614BBB !important;">HTTP_X_VERCEL_IP_COUNTRY</p>
					<p class= "subtitle is-family-code is-size-7"><?= $_SERVER['HTTP_X_VERCEL_IP_COUNTRY']?></p>
				</div>
			</div>
			<div class="columns">
				<div class="column is-one-third m-2" style="border-bottom:2px solid #eee;">
					<p class="subtitle is-family-code is-size-6" style="color:#614BBB !important;">HTTP_X_VERCEL_IP_COUNTRY_REGION</p>
					<p class= "subtitle is-family-code is-size-7"><?= $_SERVER['HTTP_X_VERCEL_IP_COUNTRY_REGION']?></p>
				</div>
				<div class="column m-2" style="border-bottom:2px solid #eee;">
					<p class="subtitle is-family-code is-size-6" style="color:#614BBB !important;">HTTP_X_VERCEL_IP_CITY</p>
					<p class= "subtitle is-family-code is-size-7"><?= $_SERVER['HTTP_X_VERCEL_IP_CITY']?></p>
				</div>
				<div class="column m-2" style="border-bottom:2px solid #eee;">
					<p class="subtitle is-family-code is-size-6" style="color:#614BBB !important;">HTTP_X_VERCEL_IP_TIMEZONE</p>
					<p class= "subtitle is-family-code is-size-7"><?= $_SERVER['HTTP_X_VERCEL_IP_TIMEZONE']?></p>
				</div>
			</div>
			<div class="columns">
				<div class="column is-one-third m-2" style="border-bottom:2px solid #eee;">
					<p class="subtitle is-family-code is-size-6" style="color:#614BBB !important;">HTTP_X_VERCEL_ID</p>
					<p class= "subtitle is-family-code is-size-7"><?= $_SERVER['HTTP_X_VERCEL_ID']?></p>
				</div>
				<div class="column m-2" style="border-bottom:2px solid #eee;">
					<p class="subtitle is-family-code is-size-6" style="color:#614BBB !important;">HTTP_X_VERCEL_DEPLOYMENT_URL</p>
					<p class= "subtitle is-family-code is-size-7"><?= $_SERVER['HTTP_X_VERCEL_DEPLOYMENT_URL']?></p>
				</div>
				<div class="column m-2" style="border-bottom:2px solid #eee;">
					<p class="subtitle is-family-code is-size-6" style="color:#614BBB !important;">HTTP_X_VERCEL_PROXY_SIGNATURE</p>
					<p class= "subtitle is-family-code is-size-7"><?= $_SERVER['HTTP_X_VERCEL_PROXY_SIGNATURE']?></p>
				</div>
			</div>
			<div class="columns">
				<div class="column is-one-third m-2" style="border-bottom:2px solid #eee;">
					<p class="subtitle is-family-code is-size-6" style="color:#614BBB !important;">HTTP_X_VERCEL_PROXIED_FOR</p>
					<p class= "subtitle is-family-code is-size-7"><?= $_SERVER['HTTP_X_VERCEL_PROXIED_FOR']?></p>
				</div>
			</div>
		</div>
		<?php
		}
		?>
		<div class="pt-5">
			<h2 class="subtitle is-4" style="color:#DD4930">CodeIgniter</h2>
			<h3 class="subtitle is-5" style="color:#459329">Global Constants</h3>
			<div class="columns">
				<div class="column is-one-third m-2" style="border-bottom:2px solid #eee;">
					<p class="subtitle is-family-code is-size-6" style="color:#614BBB !important;">ENVIRONMENT</p>
					<p class= "subtitle is-family-code is-size-7"><?= ENVIRONMENT ?></p>
				</div>
				<div class="column m-2" style="border-bottom:2px solid #eee;">
					<p class="subtitle is-family-code is-size-6" style="color:#614BBB !important;">APPPATH</p>
					<p class= "subtitle is-family-code is-size-7"><?= APPPATH ?></p>
				</div>
				<div class="column m-2" style="border-bottom:2px solid #eee;">
					<p class="subtitle is-family-code is-size-6" style="color:#614BBB !important;">ROOTPATH</p>
					<p class= "subtitle is-family-code is-size-7"><?= ROOTPATH ?></p>
				</div>
			</div>
			<div class="columns">
				<div class="column is-one-third m-2" style="border-bottom:2px solid #eee;">
					<p class="subtitle is-family-code is-size-6" style="color:#614BBB !important;">SYSTEMPATH</p>
					<p class= "subtitle is-family-code is-size-7"><?= SYSTEMPATH ?></p>
				</div>
				<div class="column m-2" style="border-bottom:2px solid #eee;">
					<p class="subtitle is-family-code is-size-6" style="color:#614BBB !important;">FCPATH</p>
					<p class= "subtitle is-family-code is-size-7"><?= FCPATH ?></p>
				</div>
				<div class="column m-2" style="border-bottom:2px solid #eee;">
					<p class="subtitle is-family-code is-size-6" style="color:#614BBB !important;">WRITEPATH</p>
					<p class= "subtitle is-family-code is-size-7"><?= WRITEPATH ?></p>
				</div>
			</div>
			<div class="columns">
				<div class="column is-one-third m-2" style="border-bottom:2px solid #eee;">
					<p class="subtitle is-family-code is-size-6" style="color:#614BBB !important;">APP_NAMESPACE</p>
					<p class= "subtitle is-family-code is-size-7"><?= APP_NAMESPACE ?></p>
				</div>
				<div class="column m-2" style="border-bottom:2px solid #eee;">
					<p class="subtitle is-family-code is-size-6" style="color:#614BBB !important;">CI_DEBUG</p>
					<p class= "subtitle is-family-code is-size-7"><?= CI_DEBUG ? 1 : 0 ?></p>
				</div>
			</div>
		</div>
	</div>
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
