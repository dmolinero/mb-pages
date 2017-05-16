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

    	.inline-block {
      		display: inline-block;
      	}

      	.list-style-none {
      		list-style: none;
      	}
  
  		
  		/*Element Styles*/

		a { cursor: pointer; }
  
		img { max-width: 100%; }

	</style>

<body class="go-faqs go-resources" id="go-faqs-page">
  
  	<div class="p-t-4 p-b-4 border-b" style="background: url(<?= cloudbridge_prefix("/images/redesign/resources/go/faqs-hero.jpg")?>);">
	  	<div class="container">
	  		<h1 class="center white-text">MedBridge GO FAQs</h1>
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
  
  <div id="go-faqs-header" class="p-t-6 p-b-6 border-b">
  	<div class="container">
  		<div class="row v-center-children">
		  	<div class="col-xs-12 col-md-6">
		  		<h1 class="m-b-1">Frequently Asked Questions</h1>
		  		<p class="lg-text">Provided here are responses to the questions we've heard from patients using the mobile app. Please contact us with any additional feedback you'd like to share.</p>
		  	</div>

		  	<div class="col-xs-12 col-md-6 hidden-xs hidden-sm center">
		  		<img id="go-faqs-quotes" src="<?= cloudbridge_prefix("/images/redesign/resources/go/quotes.png")?>" class="w-50">
		  	</div>
		 </div>
  	</div>
  </div>

  <div id="go-faqs" class="p-t-6 p-b-4">
  	<div class="container">
	  	<div class="row">
		  	<div class="col-xs-12 col-md-6">
		  		<div class="m-b-3">
			  		<h4 class="m-b-1 bold">What is MedBridge GO?</h4>
			  		<p class="m-bot-2 lg-text">MedBridge GO is a mobile app for you to access the Home Exercise Program and/or Patient Education your provider assigned. Easily follow along with the exercise videos, track your progress, set reminders, and get back to doing what you love, faster!</p>
			  	</div>
			  	<div class="m-b-3">
			  		<h4 class="m-b-1 bold">How do I access my Home Exercise Program (HEP) with MedBridge GO?</h4>
			  		<p class="m-bot-2 lg-text">In order to view your HEP on the MedBridge GO app and complete your exercises, open the app and add your 8-digit access code given to you by your provider. An Access Code is a unique code that allows the MedBridge GO app to identify your HEP.</p>
			  	</div>
			  	<div class="m-b-3">
			  		<h4 class="m-b-1 bold">Where can I find my access code?</h4>
			  		<p class="m-bot-2 lg-text" lg-text>Your access code can be found at the top of your printed exercise handout or in the email/SMS sent from your provider. If you never received your access code or don't remember it, please contact your provider for assistance.</p>
			  	</div>
			  	<div class="m-b-3">
			  		<h4 class="m-b-1 bold">My Clinician updated my Home Exercise Program, but the MedBridge GO app does not show the changes that they made - what should I do?</h4>
			  		<p class="m-b-1 lg-text"><span class="bold">Method 1:</span> Double-tap on your Apple device's home button and swipe 'up' on MedBridge GO in order to close the app. Then, return to your device's home screen and open the MedBridge GO app by tapping on the app icon.</p>
			  		<p class="m-bot-2 lg-text"><span class="bold">Method 2:</span> Turn your device off then back on. Ensure you are connected to the internet, and then open MedBridge GO by tapping on the app icon on your home screen.</p>
			  	</div>
			  	<div class="m-b-2">
			  		<h4 class="m-b-1 bold">How do I set/reset my password (Patient Version clients)?</h4>
			  		<p class="m-b-2 lg-text">To reset a MedBridge patient account password, tap the "Reset password" link on the MedBridge GO sign-in screen and follow the step-by-step instructions.</p>
			  	</div>
		  	</div>

		  	<div class="col-xs-12 col-md-6">
		  		<div class="m-b-3">
			  		<h4 class="m-b-1 bold">How does MedBridge GO convert my HEP into daily dosage?</h4>
			  		<p class="lg-text m-b-1">Dosage is defined by a therapists in the MedBridge HEP Builder. The dosage from the HEP Builder is bundled into a daily exercise program designed to improve patient adherence. When the patient opens the MedBridge GO app, this exercise program is presented on the main screen along with the total number of minutes that the program will take to complete.</p>
			  		<p class="m-bot-2 lg-text">Therapists can instruct their patients to follow the program exactly, skip certain exercises, or perform a different number of reps than appears on screen - the MedBridge GO mobile app is not designed to supplant the clinician-patient relationship. Patients can mark the entire program as 'Done' or can fast-forward through individual exercises in the exercise playlist throughout playback.</p>
			  	</div>
			  	<div class="m-b-3">
			  		<h4 class="m-b-1 bold">How does MedBridge use my information?</h4>
			  		<p class="lg-text m-b-1">MedBridge uses your information to help improve your care and better serve both patients and providers. This includes information about how you use the MedBridge GO app. If you would like to limit the data collected by MedBridge, you can opt out of analytics collection by opening MedBridge GO, navigating to Settings, and scrolling down to the "About" section.</p>
			  		<p class="m-bot-2 lg-text"><span class="bold">To read the provacy policy, click here:</span>
			  		<a href="https://www.medbridgego.com/patientPrivacyPolicyIos" alt="privacy policy">https://www.medbridgego.com/patientPrivacyPolicyIos.</a> You can also read the Terms of Use and Privacy Policy by opening MedBridge GO, navigating to Settings, and scrolling down to the "About" section (see “Terms of Use & Privacy Policy”).</p>
			  	</div>
			  	<div class="m-b-3">
			  		<h4 class="m-b-1 bold">Where can I find the Terms of Use for MedBridge GO?</h4>
			  		
			  		<p class="m-b-2 lg-text"><span class="bold">To read the Terms of Use, click here:</span>
			  		<a href="https://www.medbridgego.com/patientTermsOfUseIos" alt="privacy policy">https://www.medbridgego.com/patientTermsOfUseIos.</a> You can also read the Terms of Use and Privacy Policy by opening MedBridge GO, navigating to Settings, and scrolling down to the "About" section (see “Terms of Use & Privacy Policy”).</p>
			  	</div>
		  	</div>
		</div>
	</div>
  </div>

  <div class="p-t-6 p-b-6 border-b grey" id="questions">
	  	<div class="container center">
		  	<h1 class="m-b-1 xl-text"><span class="bold">Questions?</span> We can help.</h1>
		  	<p>
				<i class="material-icons">phone</i>
		  		<span class="m-r-2">206.216.5003</span>
		  		<i class="material-icons">language</i>
		  		<span>support@medbridgeed.com</span>
		  	</p>
		</div>
  	</div>