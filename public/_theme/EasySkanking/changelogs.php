<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=_siteInfo("title");?></title>
    <link rel="stylesheet" href="<?=_themeUrl()?>css/main.css" />
    <script src="<?=_themeUrl()?>js/uikit.js"></script>
</head>

<body>

<div data-uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent; top: 200">
  <?php require("inc/header.php");?>
</div>

<div class="uk-section">
  <div class="uk-container uk-container-small">
    <article class="uk-article">
      <h1 class="uk-article-title">Changelog timeline</h1>
      <div class="article-content link-primary">
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
          aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
        </p>
        <div class="tm-timeline uk-margin-large-top">
          <div class="tm-timeline-entry">
            <div class="tm-timeline-time">
              <h5>Oct 21, 2017</h5>
            </div>
            <div class="tm-timeline-body">
              <h3 class="uk-flex uk-flex-middle">Version 1.0.0<span class="uk-label uk-margin-small-left">STABLE</span>
              </h3>
              <ul class="uk-list">
                <li>Added Slideshow component</li>
                <li>Added style support for radio and minusbox in Firefox</li>
                <li>Removed class from Section component</li>
                <li>Allow fullscreen mode for videos in Lightbox</li>
                <li>Fixed responsive images in modal for IE11</li>
                <li>Fix Grid and Margin component for cells with no height</li>
                <li>Larger horizontal padding for form input and textarea</li>
              </ul>
            </div>
          </div>
          <div class="tm-timeline-entry">
            <div class="tm-timeline-time">
              <h5>Sep 01, 2017</h5>
            </div>
            <div class="tm-timeline-body">
              <h3 class="uk-flex uk-flex-middle">Version 1.0.0<span class="uk-label uk-margin-small-left">BETA 1</span>
              </h3>
              <ul class="uk-list">
                <li>Allow fullscreen mode for YouTube videos in Lightbox</li>
                <li>Fix icons not displaying if connected in rapid succession</li>
                <li>Fix scrollbar jumping in Switcher</li>
              </ul>
            </div>
          </div>
          <div class="tm-timeline-entry">
            <div class="tm-timeline-time">
              <h5>Aug 15, 2017</h5>
            </div>
            <div class="tm-timeline-body">
              <h3 class="uk-flex uk-flex-middle">Version 0.6.0</h3>
              <ul class="uk-list">
                <li>Added style support for radio and checkbox in Firefox</li>
                <li>Removed class from Section component</li>
                <li>Add workaround to mitigate the duplicating icons issue</li>
                <li>Fixed responsive images in modal for IE11</li>
              </ul>
            </div>
          </div>
          <div class="tm-timeline-entry">
            <div class="tm-timeline-time">
              <h5>Oct 21, 2017</h5>
            </div>
            <div class="tm-timeline-body">
              <h3 class="uk-flex uk-flex-middle">Version 0.5.0</h3>
              <ul class="uk-list">
                <li>Media options now support any valid media query syntax</li>
                <li>Added style support for radio and checkbox in Firefox</li>
                <li>Fix whitespace trimming in dist</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </article>
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
      <li ><a href="blog.html">Blog</a></li>
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