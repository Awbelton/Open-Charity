<header class="main-header">
		<div class="container clearfix">
				<img src="http://masterstouchhair.com/open-charity/sites/all/themes/opencharity/images/OpenCharity.png" />
				<ul class="nav">
					<li><a href="#">ABOUT OPEN CHARITY</a></li>
					<li><a href="#">THE BLOG</a></li>
					<li><a href="#" class="boxed-link">JOIN US</a></li>
				</ul>
		</div>
	</header>
	<banner class="banner-bg">
			<div class="container-ban">
				<?php print render($page['banner']); ?>
			</div>
	</banner>
	<div class="below-ban">
		<div class="container">
			<div class="below-left">
				<?php print render($page['under_ban']); ?>
			</div>
			<div class="below-right clearfix">
				<a href="#" class="reg-btn">Register</a>
			</div>
		</div>
	</div>
	<content>
		<div class="container">
			<?php print render($page['involved']); ?>
		</div>
		<div class="mission">
			<div class="container">
				<?php print render($page['mission_members']); ?>
			</div>
			<br/>
		</div>
		<div class="blog-bg">
			<div class="container blog">
				<h1 class="content-heading">Blog</h1>
				<div class="a-left"><a href="#/">&#60;</a></div>
				<div class="a-right"><a href="#/">&#62;</a></div>
				<div class="fblog">
				<?php print render($page['content']); ?>
				</div>
			</div>
		</div>
	</content>
	<footer>
		<div class="footer">
			<div class="container">
				<div class="footer-top align-footer">
					<div class="social">
						<a href="#"><img src="http://masterstouchhair.com/open-charity/sites/all/themes/opencharity/images/fb.png" /></a><a href="#"><img src="http://masterstouchhair.com/open-charity/sites/all/themes/opencharity/images/tw.png" /></a><a href="#"><img src="http://masterstouchhair.com/open-charity/sites/all/themes/opencharity/images/gp.png" /></a>
					</div>
				</div>
				<div class="footer-bottom align-footer">
					<p>This site was built as a collaboration between <a href="#">Manifesto Digital</a> and <a href="#">Compucorp</a></p>
				</div>
			</div>
		</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="http://masterstouchhair.com/open-charity/sites/all/themes/opencharity/js/app.js"></script>