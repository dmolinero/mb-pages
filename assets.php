
<style>

	/*Helper Classes*/

		/* Verticlaly center child elements with flexbox, degrades gracefully */
    .v-center-children { display: block; }

    @media (min-width: 768px) { 
        .v-center-children {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }
    }
	  
	.w-50 {
	    width: 50%;
	    margin: 0 auto;
	}

	.w-70 {
	    width: 70%;
	    margin: 0 auto;
	}
	 
	.m-0 {margin: 0;}
	.m-b-0 { margin-bottom: 0; }
	.m-b-1 { margin-bottom: 1em; }
	.m-b-2 { margin-bottom: 2em; }
	.m-b-3 { margin-bottom: 3em; }
	.m-b-4 { margin-bottom: 4em; }
	.m-t-2 { margin-top: 2em; }
	.m-r-2 { margin-right: 2em; }

	.p-0 { padding: 0; }
	.p-1 { padding: 1em; }
	.p-2 { padding: 2em; }
	.p-t-2 { padding-top: 2em; }
	.p-t-4 { padding-top: 4em; }
	.p-t-6 { padding-top: 6em; }
	.p-b-2 { padding-bottom: 2em; }
	.p-b-4 { padding-bottom: 4em; }
	.p-b-6 { padding-bottom: 6em; }

	.border { border: 1px solid #ccc; }

	.border-b { border-bottom: 1px solid #ccc; }
	  
	.grey { background: #eaedee; }
  
  	.bold { font-weight: 500; }

  	.blue-text { color: #1e78d7; }

  	.white-text { color: #fff; }

	.sample-text {
		background: #eaedee;
		padding: 1em 1.5em;
		border: 1px solid #ccc;
	}

	.sample-text p {
  		font-size: 1em;
  		line-height: 1.6em;
  		color: #777;
  		font-weight: 300; }
	
	@media (min-width: 768px) {
  		.sample-text p { font-size: 1.5em; }
  	}

		.lg-text {
		font-size: 1.25em;
		line-height: 1.5em;
		font-weight: 300;
	}

	.xl-text { font-size: 2em; }

	.inline-block {
  		display: inline-block;
  	}

  	.list-style-none {
  		list-style: none;
  	}

	@media (min-width: 768px) {
		.xl-text { font-size: 3em; }
	}

	.preview-img-sm {
		height: 180px; }
		
		
		/*Element Styles*/

	a { cursor: pointer; }

	img { max-width: 100%; }

	xmp {
		white-space: pre-wrap;
		word-wrap: break-word;
	}


</style>
</head>

<div class="p-t-4 p-b-4 border-b" style="background: url(<?= cloudbridge_prefix("/images/redesign/resources/go/faqs-hero.jpg")?>);">
  	<div class="container">
  		<h1 class="center white-text">MedBridge GO Assets</h1>
  	</div>
	</div>
<div class="p-t-2 p-b-2 grey border-b">
  	<div class="container">
		<ul class="p-0 m-0">
			<li class="list-style-none inline-block m-r-2"><a href="go-assets.html" alt="Marketing Assets">Marketing Assets</a></li>
			<li class="list-style-none inline-block m-r-2"><a href="go-clinician-training.html" alt="Clinical Training">Clinical Training</a></li>
			<li class="list-style-none inline-block m-r-2">FAQ</li>
		</ul>
  	</div>
	</div>
<div class="p-t-6 p-b-6 border-b" id="go-assets-header">
  	<div class="container">
  		<div class="row v-center-children">
		  	<div class="col-md-6 col-xs-12">
		  		<h1 class="m-b-1">Marketing Assets</h1>
		  		<p class="lg-text m-b-1">We love building the tools to help you improve the lives of your patients. We also understand that engaging your patients as active participants in their recovery plan is a challenge that requires effective communication.</p>
		  		<p class="lg-text m-b-1">We've got you covered.</p>
		  		<p class="lg-text">Below are all the assets you'll need to get your patients activated and using the MedBridge GO app, including: flyers, posters, videos, and other shareable content for your website, emails, and social media.</p>
		  	</div>
		  	<div class="col-md-6 col-xs-12 hidden-xs hidden-sm center">
		  		<img class="w-70" src="<?= cloudbridge_prefix("/images/redesign/resources/go/go-home-tablet-sm.gif")?>">
		  	</div>
		</div>
  	</div>
	</div>
	<div class="p-t-6 p-b-6 border-b grey" id="go-assets-share">
		<div class="container center">
			<h2 class="no-margin"><span class="bold">Print, send,</span> or <span class="bold">share</span> these patient marketing assets</h2>
		</div>
	</div>
	<div class="p-t-6 p-b-2 border-b" id="go-assets-instructions">
		<div class="container">
			<h2 class="center m-b-2">Print Materials</h2>
			<div class="row">
  			<div class="col-sm-4 center m-b-4">
  				<img src="<?= cloudbridge_prefix("/images/redesign/resources/go/go-whitelabel-handout.png")?>" class="m-b-1 border w-50">
  				<p class="no-margin class">Easy Print Instructions</p>
  				<a href="https://s3-us-west-1.amazonaws.com/medbridgeassets/hep-go/go-whitelabel-handout.pdf" download>Download</a>
  			</div>
  			<div class="col-sm-4 center m-b-4">
  				<img src="<?= cloudbridge_prefix("/images/redesign/resources/go/go-patient-flyer.png")?>" class="m-b-1 border w-50">
  				<p class="no-margin class">Hi-Res Flyer</p>
  				<a href="https://s3-us-west-1.amazonaws.com/medbridgeassets/hep-go/go-patient-flyer.pdf" download>Download</a>
  			</div>
  			<div class="col-sm-4 center m-b-4">
  				<img src="<?= cloudbridge_prefix("/images/redesign/resources/go/go-patient-flyer.png")?>" class="m-b-1 border w-50">
  				<p class="no-margin class">Hi-Res Flyer</p>
  				<a href="https://s3-us-west-1.amazonaws.com/medbridgeassets/hep-go/go-sales-flyer.pdf" download>Download</a>
  			</div>
  		</div>
		</div>
	</div>
	<div class="p-t-6 p-b-6 border-b" id="go-assets-sample-text" class="no-rows">
		<div class="container">
  		<h2 class="center m-b-2">Sample Text</h2>
  		<div class="sample-text">
  			<p class="no-margin">At <span class="bold">*Name of Clinic*</span>, we want to get you on the path to a healthy recovery as quickly as we can, so we are excited to tell you about <span class="bold">*White Label/MedBridge GO*</span>, our new mobile app that allows you to watch videos of the home exercises we prescribe during your visit. The mobile app is completely free to download, and also includes education videos to help you learn more about your specific condition. Keep track of your progress every day and together we will get you back to the life you enjoy!</p>
  		</div>
		</div>
	</div>
	<div class="p-t-6 p-b-2 border-b" id="go-assets-social">
  	<div class="container">
  		<h2 class="center m-b-2">Social Media</h2>
  		<div class="row center">
  			<div class="col-xs-12 col-sm-6 m-b-4">
  				<img src="<?= cloudbridge_prefix("/images/redesign/resources/go/go-social-sm.gif")?>" class="m-b-1"><br />
  				<a href="https://s3-us-west-1.amazonaws.com/medbridgeassets/hep-go/go-social-lg.gif" download>Download GIF</a> (1200 x 628)
  			</div>
  			<div class="col-xs-12 col-sm-6 m-b-4">
  				<img src="<?= cloudbridge_prefix("/images/redesign/resources/go/go-social-sm.png")?>" class="m-b-1"><br />
  				<a href="https://s3-us-west-1.amazonaws.com/medbridgeassets/hep-go/go-social-lg.png" download>Download PNG</a> (1200 x 628)
  			</div>
  		</div>
  	</div>
	</div>
	<div class="p-t-6 p-b-2 border-b" id="go-assets-video">
  	<div class="container">
  	<h2 class="center m-b-2">Sample Videos</h2>
  	<div class="row center">
  		<div class="col-xs-6 col-md-3 m-b-4">
  			<a href="https://www.youtube.com/watch?v=B7kTkXDIMuE&feature=youtu.be">
  			<img src="<?= cloudbridge_prefix("/images/redesign/resources/go/supine-bridge.png")?>" class="hover-opacity m-b-1 border">
  			<p>Supine Bridge</p>
  			</a>
  			<p class="m-t-2">Code for embedding video.</p>
  			<div class="embedd-video">
  				<xmp class="code-sample grey border p-1"><iframe width="560" height="315" src="https://www.youtube.com/embed/B7kTkXDIMuE?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></xmp>
  			</div>
  		</div>
  		<div class="col-xs-6 col-md-3 m-b-4">
  			<a href="https://www.youtube.com/watch?v=lWw1jD8Wcx0&feature=youtu.be">
  			<img src="<?= cloudbridge_prefix("/images/redesign/resources/go/hip-flexion.png")?>" class="hover-opacity m-b-1 border">
  			<p>Hip Flexion</p>
  			</a>
  			<p class="m-t-2">Code for embedding video.</p>
  			<div class="embedd-video">
  				<xmp class="code-sample grey border p-1"><iframe width="560" height="315" src="https://www.youtube.com/embed/lWw1jD8Wcx0?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></xmp>
  			</div>
  		</div>
  		<div class="col-xs-6 col-md-3 m-b-4">
  			<a href="https://www.youtube.com/watch?v=bhLd4yqANgg&feature=youtu.be">
  			<img src="<?= cloudbridge_prefix("/images/redesign/resources/go/tennis-elbow.png")?>" class="hover-opacity m-b-1 border">
  			<p>Tennis Elbow</p>
  			</a>
  			<p class="m-t-2">Code for embedding video.</p>
  			<div class="embedd-video">
  				<xmp class="code-sample grey border p-1"><iframe width="560" height="315" src="https://www.youtube.com/embed/bhLd4yqANgg?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></xmp>
  			</div>
  		</div>
  		<div class="col-xs-6 col-md-3 m-b-4">
  			<a href="https://www.youtube.com/watch?v=4yZmyhZdCXQ&feature=youtu.be">
  			<img src="<?= cloudbridge_prefix("/images/redesign/resources/go/osteoplast.png")?>" class="hover-opacity m-b-1 border">
  			<p>Osteoporosis</p>
  			</a>
  			<p class="m-t-2">Code for embedding video.</p>
  			<div class="embedd-video">
  				<xmp class="code-sample grey border p-1"><iframe width="560" height="315" src="https://www.youtube.com/embed/4yZmyhZdCXQ?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></xmp>
  			</div>
  		</div>
  	</div>
	</div>
</div>
<div class="p-t-6 p-b-2 border-b" id="go-assets-images">
  	<div class="container">
  		<h2 class="center m-b-2">Images & Graphics</h2>
  		<div class="row center">
  			<div class="img-preview col-xs-6 col-md-3 m-b-4">
  				<img src="<?= cloudbridge_prefix("/images/redesign/resources/go/go-tablet-straight-sm.png")?>" class="m-b-1 preview-img-sm">
  				<p class="no-margin">Download Image</p><a href="https://s3-us-west-1.amazonaws.com/medbridgeassets/hep-go/go-tablet-straight-sm.png" download>Small</a> | 
  				<a href="https://s3-us-west-1.amazonaws.com/medbridgeassets/hep-go/go-tablet-straight-lg.png" download>Large</a>
  			</div>
  			<div class="img-preview col-xs-6 col-md-3 m-b-4">
  				<img src="<?= cloudbridge_prefix("/images/redesign/resources/go/go-home-straight-sm.png")?>.png" class="m-b-1 preview-img-sm">
  				<p class="no-margin">Download Image</p><a href="https://s3-us-west-1.amazonaws.com/medbridgeassets/hep-go/go-home-straight-sm.png" download>Small</a> | 
  				<a href="https://s3-us-west-1.amazonaws.com/medbridgeassets/hep-go/go-home-straight-lg.png" download>Large</a>
  			</div>
  			<div class="img-preview col-xs-6 col-md-3 m-b-4">
  				<img src="<?= cloudbridge_prefix("/images/redesign/resources/go/go-exercise-straight-sm.png")?>" class="m-b-1 preview-img-sm">
  				<p class="no-margin">Download Image</p><a href="https://s3-us-west-1.amazonaws.com/medbridgeassets/hep-go/go-exercise-straight-sm.png" download>Small</a> | 
  				<a href="https://s3-us-west-1.amazonaws.com/medbridgeassets/hep-go/go-exercise-straight-lg.png" download>Large</a>
  			</div>
  			<div class="img-preview col-xs-6 col-md-3 m-b-4">
  				<img src="<?= cloudbridge_prefix("/images/redesign/resources/go/go-home-angle-sm.png")?>" class="m-b-1 preview-img-sm">
  				<p class="no-margin">Download Image</p><a href="https://s3-us-west-1.amazonaws.com/medbridgeassets/hep-go/go-home-angle-sm.png" download>Small</a> | 
  				<a href="https://s3-us-west-1.amazonaws.com/medbridgeassets/hep-go/go-home-angle-lg.png" download>Large</a>
  			</div>
  		</div>
  		
  		<div id="go-gifs" class="row center">
  			<div class="img-preview col-xs-6 col-md-3 m-b-4">
  				<img src="<?= cloudbridge_prefix("/images/redesign/resources/go/go-home-tablet-sm.gif")?>" class="m-b-1 preview-img-sm">
  				<p class="no-margin">Download Image</p><a href="https://s3-us-west-1.amazonaws.com/medbridgeassets/hep-go/go-home-tablet-sm.gif" download>Small</a> | 
  				<a href="https://s3-us-west-1.amazonaws.com/medbridgeassets/hep-go/go-home-tablet-lg.gif" download>Large</a>
  			</div>
  			<div class="img-preview col-xs-6 col-md-3 m-b-4">
  				<img src="<?= cloudbridge_prefix("/images/redesign/resources/go/go-exercise-tablet-sm.gif")?>" class="m-b-1 preview-img-sm">
  				<p class="no-margin">Download Image</p><a href="https://s3-us-west-1.amazonaws.com/medbridgeassets/hep-go/go-exercise-tablet-sm.gif" download>Small</a> | 
  				<a href="https://s3-us-west-1.amazonaws.com/medbridgeassets/hep-go/go-exercise-tablet-lg.gif" download>Large</a>
  			</div>
  			<div class="img-preview col-xs-6 col-md-3 m-b-4">
  				<img src="<?= cloudbridge_prefix("/images/redesign/resources/go/go-straight-sm.gif")?>" class="m-b-1 preview-img-sm">
  				<p class="no-margin">Download Image</p><a href="https://s3-us-west-1.amazonaws.com/medbridgeassets/hep-go/go-straight-sm.gif" download>Small</a> | 
  				<a href="https://s3-us-west-1.amazonaws.com/medbridgeassets/hep-go/go-straight-lg.gif" download>Large</a>
  			</div>
  			<div class="img-preview col-xs-6 col-md-3 m-b-4">
  				<img src="<?= cloudbridge_prefix("/images/redesign/resources/go/go-angle-sm.gif")?>" class="m-b-1 preview-img-sm">
  				<p class="no-margin">Download Image</p><a href="https://s3-us-west-1.amazonaws.com/medbridgeassets/hep-go/go-angle-sm.gif" download>Small</a> | 
  				<a href="https://s3-us-west-1.amazonaws.com/medbridgeassets/hep-go/go-angle-lg.gif" download>Large</a>
  			</div>
  		</div>
  	</div>
</div>
<div class="p-t-6 p-b-2 border-b" id="go-assets-logo">
  	<div class="container">
	  	<div class="row center v-center-children">
	  		<div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-0 m-b-4">
	  			<img src="<?= cloudbridge_prefix("/images/redesign/resources/go/go-logo.png")?>" class="m-b-1 w-50">
	  			<p class="no-margin">Download Image</p>
	  			<a href="https://s3-us-west-1.amazonaws.com/medbridgeassets/hep-go/go-logo.png" download>Download</a>
	  		</div>
	  		<div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-0 m-b-4">
	  			<img src="<?= cloudbridge_prefix("/images/redesign/resources/go/app-store-badge.png")?>" class="m-b-1 w-50">">
	  			<p class="no-margin">Download Image</p>
	  			<a href="https://s3-us-west-1.amazonaws.com/medbridgeassets/hep-go/app-store-badge.png" download>Download</a>
	  		</div>
	  		<div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-0 m-b-4">
	  			<img src="<?= cloudbridge_prefix("/images/redesign/resources/go/google-play-badge.png")?>" class="m-b-1 w-50">
	  			<p class="no-margin">Download Image</p>
	  			<a href="https://s3-us-west-1.amazonaws.com/medbridgeassets/hep-go/google-play-badge.png" download>Download</a>
	  		</div>
	  	</div>
	</div>
</div>
<div class="p-t-6 p-b-6 border-b grey" id="questions">
  	<div class="container center">
	  	<h2 class="m-b-1 xl-text"><span class="bold">Questions?</span> We can help.</h2>
	  	<p>
			<i class="material-icons">phone</i>
	  		<span class="m-r-2">206.216.5003</span>
	  		<i class="material-icons">language</i>
	  		<span>support@medbridgeed.com</span>
	  	</p>
	</div>
</div>