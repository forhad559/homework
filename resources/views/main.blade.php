<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Laravel - Component practise</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
		<link href="{{ url('css/styles.css') }}" rel="stylesheet">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <div id="navigation-section">
			<x-navbar :type="$type" :action="$action"></x-navbar>
		</div>
        <!-- Masthead-->
		<div id="header-section">
			<x-headers :type="$type" :action="$action"></x-headers>
		</div>
        
        <!-- Portfolio Section-->
		<div id="portfolio-section">
			<x-portfolio :type="$type" :action="$action"></x-portfolio>
		</div>
        
        <!-- About Section-->
		<div id="about-section">
			<x-about :type="$type" :action="$action"></x-about>
		</div>
        
        <!-- Contact Section-->
		<div id="contact-section">
			<x-contact :type="$type" :action="$action"></x-contact>
			<div class="container">
			<h2 class="page-section-heading text-center text-uppercase text-secondary">Sample table with data</h2>
			<x-Table classes="table table-striped" :tableHeads="$tableHeads" :tableBody="$tableBody"></x-Table>
			</div>
		</div>
        
        <!-- Footer-->
		<div id="footer-section">
			<x-footer :type="$type" :action="$action"></x-footer>
		</div>
		
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
		<script src="{{ url('js/scripts.js') }}"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
