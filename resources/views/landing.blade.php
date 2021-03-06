<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <!-- Always shows a header, even in smaller screens. -->
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
	  <header class="mdl-layout__header">
	    <div class="mdl-layout__header-row">
	      <!-- Title -->
	      <span class="mdl-layout-title">Title</span>
	      <!-- Add spacer, to align navigation to the right -->
	      <div class="mdl-layout-spacer"></div>
	      <!-- Navigation. We hide it in small screens. -->
	      <nav class="mdl-navigation mdl-layout--large-screen-only">
		<a class="mdl-navigation__link" href="">Link</a>
		<a class="mdl-navigation__link" href="">Link</a>
		<a class="mdl-navigation__link" href="">Link</a>
		<a class="mdl-navigation__link" href="">Link</a>
	      </nav>
	    </div>
	  </header>
	  <div class="mdl-layout__drawer">
	    <span class="mdl-layout-title">Title</span>
	    <nav class="mdl-navigation">
	      <a class="mdl-navigation__link" href="">Link</a>
	      <a class="mdl-navigation__link" href="">Link</a>
	      <a class="mdl-navigation__link" href="">Link</a>
	      <a class="mdl-navigation__link" href="">Link</a>
	    </nav>
	  </div>
	  <main class="mdl-layout__content">
		HELLO MDL!
	  </main>
	  <footer class="mdl-mega-footer">
	  <div class="mdl-mega-footer__middle-section">

	    <div class="mdl-mega-footer__drop-down-section">
	      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
	      <h1 class="mdl-mega-footer__heading">Features</h1>
	      <ul class="mdl-mega-footer__link-list">
		<li><a href="#">About</a></li>
		<li><a href="#">Terms</a></li>
		<li><a href="#">Partners</a></li>
		<li><a href="#">Updates</a></li>
	      </ul>
	    </div>

	    <div class="mdl-mega-footer__drop-down-section">
	      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
	      <h1 class="mdl-mega-footer__heading">Details</h1>
	      <ul class="mdl-mega-footer__link-list">
		<li><a href="#">Specs</a></li>
		<li><a href="#">Tools</a></li>
		<li><a href="#">Resources</a></li>
	      </ul>
	    </div>

	    <div class="mdl-mega-footer__drop-down-section">
	      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
	      <h1 class="mdl-mega-footer__heading">Technology</h1>
	      <ul class="mdl-mega-footer__link-list">
		<li><a href="#">How it works</a></li>
		<li><a href="#">Patterns</a></li>
		<li><a href="#">Usage</a></li>
		<li><a href="#">Products</a></li>
		<li><a href="#">Contracts</a></li>
	      </ul>
	    </div>

	    <div class="mdl-mega-footer__drop-down-section">
	      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
	      <h1 class="mdl-mega-footer__heading">FAQ</h1>
	      <ul class="mdl-mega-footer__link-list">
		<li><a href="#">Questions</a></li>
		<li><a href="#">Answers</a></li>
		<li><a href="#">Contact us</a></li>
	      </ul>
	    </div>

	  </div>

	  <div class="mdl-mega-footer__bottom-section">
	    <div class="mdl-logo">Title</div>
	    <ul class="mdl-mega-footer__link-list">
	      <li><a href="#">Help</a></li>
	      <li><a href="#">Privacy & Terms</a></li>
	    </ul>
	  </div>
	</footer>
	</div>
    </body>
</html>
