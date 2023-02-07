<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top {{$calucateProperty()}}" id="mainNav">
	<div class="container">
		<a class="navbar-brand" href="#page-top">Portfolio</a>
		<button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		Menu
			<i class="fas fa-bars"></i>
		</button>
		
		<div class="taskbar">
		
			<a href="{{route('component')}}?type=font&action=brush" title="Change Font" class="btn btn-header"><i class="fa fa-font"></i></a>
			<a href="{{route('component')}}?type=mode&action=dark" title="Dark Mode" class="btn btn-header"><i class="fa fa-adjust"></i></a>
			<a href="{{route('component')}}?type=bgcolor&action=burlywood" title="Background Color" class="btn btn-header"><i class="fa fa-circle" style="color:burlywood;"></i></a>
			<a href="{{route('component')}}?type=bgcolor&action=purple" title="Background Color" class="btn btn-header"><i class="fa fa-circle" style="color:purple;"></i></a>
			<a href="{{route('component')}}?type=bgcolor&action=brown" title="Background Color" class="btn btn-header"><i class="fa fa-circle" style="color:brown;"></i></a>
			
			<a href="{{route('component')}}?type=align&action=justify" title="Text Align" class="btn btn-header"><i class="fa fa-align-justify"></i></a>
			<a href="{{route('component')}}?type=align&action=left" title="Text Align" class="btn btn-header"><i class="fa fa-align-left"></i></a>
			<a href="{{route('component')}}?type=align&action=right" title="Text Align" class="btn btn-header"><i class="fa fa-align-right"></i></a>
			
			
			<a href="{{route('component')}}?type=spacing&action=plus" title="More Font space" class="btn btn-header"><i class="fa fa-plus"></i></a>
			<a href="{{route('component')}}?type=spacing&action=minus" title="Less Font space" class="btn btn-header"><i class="fa fa-minus"></i></a>
			
			<a href="{{route('component')}}?type=text-size&action=plus" title="Large Font" class="btn btn-header"><i class="fa fa-search-plus"></i></a>
			<a href="{{route('component')}}?type=text-size&action=minus" title="Smaller Font" class="btn btn-header"><i class="fa fa-search-minus"></i></a>
			
			
			<a href="{{route('component')}}" title="Reset" class="btn btn-header"><i class="fa fa-refresh"></i></a>
		</div>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ms-auto">
				<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Portfolio</a></li>
				<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
				<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contact</a></li>
			</ul>
		</div>
	</div>
	</nav>