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
		.p-r-2 { padding-right: 2em; }
		.p-b-2 { padding-bottom: 2em; }
		.p-b-4 { padding-bottom: 4em; }
		.p-b-6 { padding-bottom: 6em; }

		.border { border: 1px solid #ccc; }

		.border-b { border-bottom: 1px solid #ccc; }
		  
		.grey { background: #eaedee; }
	  
	  	.bold { font-weight: 500; }

	  	.blue-text { color: #1e78d7; }

	  	.white-text { color: #fff; }

  		.lg-text {
    		font-size: 1.25em;
    		line-height: 1.5em;
    		font-weight: 300;
    	}
  
  		
  		/*Element Styles*/

		a { cursor: pointer; }
  
		img { max-width: 100%; }
  

	</style>
  
<div class="p-t-4 p-b-4 border-b" style="background: url(<?= cloudbridge_prefix("/images/redesign/resources/go/faqs-hero.jpg")?>);">
	<div class="container">
		<h1 class="center white-text">Marketing Resources</h1>
	</div>
</div>
<div class="p-t-6 p-b-6 border-b">
	<div class="container">
		<div class="row v-center-children">
	  	<div class="col-xs-12 col-md-6">
	  		<h1 class="m-b-1">Empower your business</h1>
	  		<p class="lg-text">Spend less time on communications and more time treating your patients. We provide the resources you need to become familiar with our products, and the assets to extend your clinical reach to engage patients and grow your business. </p>
	  	</div>
	  	<div class="col-xs-12 col-md-6 hidden-xs hidden-sm center">
	  		<img id="go-faqs-quotes" src="<?= cloudbridge_prefix("/images/redesign/resources/resources-chart.png")?>" class="w-50">
	  	</div>
	 </div>
	</div>
</div>
<div class="p-t-6 p-b-4 border-b">
	<div class="container">
  	<div class="row">
	  	<div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3 center">
	  		<img id="go-faqs-quotes" src="<?= cloudbridge_prefix("/images/redesign/resources/go-tablet-straight-sm.png")?>" class="w-50 m-b-2">
	  		<h4>Patient Mobile App</h4>
	  		<p><a href="training">Clinician Training</a></p>
	  		<p><a href="training">Marketing Assets</a></p>
	  		<p><a href="training">Patient FAQ</a></p>
	  	</div>
	</div>
</div>
</div>
<div class="p-t-6 p-b-6 border-b grey">
  	<div class="container center">
	  	<h1 class="m-b-1"><span class="bold">Questions?</span> We can help.</h1>
	  	<p>
			<i class="material-icons">phone</i>
	  		<span class="m-r-2">206.216.5003</span>
	  		<i class="material-icons">language</i>
	  		<span>support@medbridgeed.com</span>
	  	</p>
	</div>
</div>