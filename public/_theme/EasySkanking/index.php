<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>bigtran's notes</title>
    <link rel="stylesheet" href="<?=_themeUrl()?>css/main.css" />
    <script src="<?=_themeUrl()?>js/uikit.js"></script>
</head>

<body>

<div data-uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent; top: 200">
  <?php require("inc/header.php");?>
</div>

<div class="uk-section">
	<div class="uk-container uk-container-xsmall">
		<h1 class="uk-article-title uk-text-center">Blog</h1>


		<?php 
            foreach ($articles as $key => $article_meta) {
                # code...
        ?>



		<div class="uk-card uk-card-default uk-box-shadow-small uk-box-shadow-hover-medium card-post uk-inline border-radius-medium border-xlight uk-width-1-1 uk-margin">
			<a class="uk-position-cover" href="article/<?=str_replace('.md', '', $key)?>"></a>
			<div class="uk-card-header">
				<div class="uk-grid-small uk-flex-middle" data-uk-grid>
					<div class="uk-width-auto uk-first-column">
						<img class="uk-border-circle avatar" src="https://via.placeholder.com/80" alt="Alex Koch">
					</div>
					<div class="uk-width-expand">
						<h3 class="uk-card-title uk-margin-remove-bottom"><?=$article_meta['title']?></h3>
						<p class="uk-text-meta uk-margin-remove-top"><time datetime="2017-05-25T00:00:00+00:00"><?=$article_meta['date']?></time></p>
					</div>
				</div>
			</div>
			<div class="uk-card-body">
				<p><?=$article_meta['excerpt']?></p>
			</div>
			<div class="uk-card-footer">
				<span class="uk-button uk-button-text">Read more →</span>
			</div>
		</div>

        <?php
            }
        ?>

		<ul class="uk-pagination uk-margin-medium-top">
			<li><a class="hvr-back" href="#">← Previous</a></li>
			<li class="uk-margin-auto-left"><a class="hvr-forward" href="#">Next →</a></li>
		</ul>
	</div>
</div>

<div id="offcanvas-docs" data-uk-offcanvas="overlay: true">
  <div class="uk-offcanvas-bar">
    <button class="uk-offcanvas-close" type="button" data-uk-close></button>
    <h5 class="uk-margin-top">Getting Started</h5>
    <ul class="uk-nav uk-nav-default doc-nav">
      <li class="uk-active"><a href="doc.html">Template setup</a></li>
      <li><a href="doc.html">Basic theme setup</a></li>
      <li><a href="doc.html">Navigation bar</a></li>
      <li><a href="doc.html">Footer options</a></li>
      <li><a href="doc.html">Creating your first post</a></li>
      <li><a href="doc.html">Creating docs posts</a></li>
      <li><a href="doc.html">Enabling comments</a></li>
      <li><a href="doc.html">Google Analytics</a></li>
    </ul>
    <h5 class="uk-margin-top">Product Features</h5>
    <ul class="uk-nav uk-nav-default doc-nav">
      <li><a href="doc.html">Hero page header</a></li>
      <li><a href="doc.html">Category boxes section</a></li>
      <li><a href="doc.html">Fearured docs section</a></li>
      <li><a href="doc.html">Video lightbox boxes section</a></li>
      <li><a href="doc.html">Frequently asked questions section</a></li>
      <li><a href="doc.html">Team members section</a></li>
      <li><a href="doc.html">Call to action section</a></li>
      <li><a href="doc.html">Creating a changelog</a></li>
      <li><a href="doc.html">Contact form</a></li>
      <li><a href="doc.html">Adding media to post and doc content</a></li>
      <li><a href="doc.html">Adding table of contents to docs</a></li>
      <li><a href="doc.html">Adding alerts to content</a></li>
    </ul>
    <h5 class="uk-margin-top">Customization</h5>
    <ul class="uk-nav uk-nav-default doc-nav">
      <li><a href="doc.html">Translation</a></li>
      <li><a href="doc.html">Customization</a></li>
      <li><a href="doc.html">Development</a></li>
      <li><a href="doc.html">Sources and credits</a></li>
    </ul>
    <h5 class="uk-margin-top">Help</h5>
    <ul class="uk-nav uk-nav-default doc-nav">
      <li><a href="doc.html">Contacting support</a></li>
    </ul>
  </div>
</div>

<div id="offcanvas" data-uk-offcanvas="flip: true; overlay: true">
  <div class="uk-offcanvas-bar">
    <a class="uk-logo" href="index.html">Docs</a>
    <button class="uk-offcanvas-close" type="button" data-uk-close></button>
    <ul class="uk-nav uk-nav-primary uk-nav-offcanvas uk-margin-top">
      <li ><a href="index.html">Home</a></li>
      <li ><a href="doc.html">Docs</a></li>
      <li class="uk-active"><a href="blog.html">Blog</a></li>
      <li ><a href="contact.html">Contact</a></li>
      <li>
        <div class="uk-navbar-item"><a class="uk-button uk-button-success" href="contact.html">Contact</a></div>
      </li>
    </ul>
    <div class="uk-margin-top uk-text-center">
      <div data-uk-grid class="uk-child-width-auto uk-grid-small uk-flex-center">
        <div>
          <a href="https://twitter.com/" data-uk-icon="icon: twitter" class="uk-icon-link" target="_blank"></a>
        </div>
        <div>
          <a href="https://www.facebook.com/" data-uk-icon="icon: facebook" class="uk-icon-link" target="_blank"></a>
        </div>
        <div>
          <a href="https://www.instagram.com/" data-uk-icon="icon: instagram" class="uk-icon-link" target="_blank"></a>
        </div>
        <div>
          <a href="https://vimeo.com/" data-uk-icon="icon: vimeo" class="uk-icon-link" target="_blank"></a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require("inc/footer.php");?>

<script src="<?=_themeUrl()?>js/awesomplete.js"></script>
<script src="<?=_themeUrl()?>js/custom.js"></script>


</body>

</html>