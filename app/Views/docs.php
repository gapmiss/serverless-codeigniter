<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>serverless CodeIgniter PHP Framework - Docs</title>
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
                Documentation
            </p>
        </div>
    </section>
</div>

<section>
	<article class="container is-max-desktop box">
		<div>
        	<h2 class="subtitle is-4" style="color:#DD4930">User Guide</h2>
			<h3 class="subtitle is-5" style="color:#459329">Requirements</h3>
			<ol class="pl-6">
				<li><a href="https://github.com" target="_blank">GitHub</a>, <a href="https://gitlab.com" target="_blank">GitLab</a>, or <a href="https://bitbucket.com" target="_blank">Bitbucket</a> account</li>
				<li><a href="https://vercel.com" target="_blank">Vercel</a> account</li>
				<li><a href="https://planetscale.com" target="_blank">PlanetScale</a> account (optional)</li>
			</ol>
			<p class="mt-4 is-size-7">Both Vercel & PlanetScale accounts can be connected via single sign-on (SSO)</p>
			<h3 class="subtitle is-5 mt-5" style="color:#459329">
				Deploy to Vercel
			</h3>
			<a href="https://vercel.com/new/clone?repository-url=https%3A%2F%2Fgithub.com%2Fgapmiss%2Fserverless-codeigniter" target="_blank"><img src="https://vercel.com/button" alt="Deploy with Vercel"/></a>
			<h3 class="subtitle is-5 mt-5" style="color:#459329">
				Vercel Setup
			</h3>
			<p>
				After first deploy, navigate to <strong><em>Settings</em></strong> → <strong><em>Environment Variables</em></strong> and set the following variables.
			</p>

			<pre class="my-4">Name: CI_ENVIRONMENT
Value: production

Name: app_baseURL
Value: your-custom.vercel.app</pre>

			<p class="mt-5">If using PlanetScale or other MySQL DB, set your custom connection credentials.</p>

			<pre class="my-4">Name: DB_HOST
Value: us-east.connect.psdb.cloud

Name: DB_NAME
Value: db-name

Name: DB_USER
Value: username

Name: DB_PASS
Value: password</pre>
			
			<p class="mt-4">
				‣ <a href="https://vercel.com/docs/concepts/projects/environment-variables" target="_blank">Environment Variables</a> in Vercel's Docs
			</p>
			<h3 class="subtitle is-5 mt-5" style="color:#459329">
				PlanetScale Setup
			</h3>
			<ol class="pl-6">
				<li>Create new database</li>
				<li><strong>Take special care to copy the generated password, as it is only shown once.</strong></li>
				<li>Navigate to <strong><em>database</em></strong> → <strong><em>Branches</em></strong> → <strong><em>main</em></strong> → <strong><em>console</em></strong></li>
				<li>Import sample schema/data from: <span class="is-family-code is-size-6" style="color:#614BBB;">public/resources/demo.sql</span> <span class="is-size-7">(optional for demo page)</span></li>
			</ol>
			<p class="mt-4">
				‣ PlanetScale's<a href="https://planetscale.com/docs/tutorials/planetscale-quick-start-guide" target="_blank"> quickstart guide</a>
			</p>
			<h3 class="subtitle is-5 mt-5" style="color:#459329">
				CodeIgnter Setup
			</h3>
			<p class="mt-4">
				Copy sample <span class="is-family-code is-size-6" style="color:#614BBB;">env</span> file.
			</p>
			<pre class="my-3">cp env .env</pre>
			<p class="mt-4">
				Setup database connectivity for your <span class="is-family-code is-size-6" style="color:#614BBB;">development</span> environment, set the following variables in the <span class="is-family-code is-size-6" style="color:#614BBB;">.env</span> file.
			</p>
			<pre class="my-4">CI_ENVIRONMENT = development

# DB SETTINGS
database.default.hostname = us-east.connect.psdb.cloud
database.default.database = db-name
database.default.username = username
database.default.password = password</pre>
			<p class="mt-4">Start the PHP <span class="is-family-code is-size-6" style="color:#614BBB;">development</span> Server.</p>
			<pre class="my-4">php spark start</pre>
			<p>‣ PHP Version 7.4.13  by <a href="https://github.com/vercel-community/php" target="_blank">Vercel Community PHP</a>.</p>
			<p>‣ View <a href="/info" target="_blank">PHP Info</a></p>
			<p>‣ See <a href="https://codeigniter.com/user_guide/intro/requirements.html" target="_blank">CodeIgniter's PHP requirements</a>.</p>
			<p>‣ <a href="https://codeigniter.com/user_guide/general/environments.html" target="_blank">Handling Multiple Environments</a> in the CodeIgniter User Guide</p>
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