<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Project Flyer</title>

        <link href="/css/app.css" rel="stylesheet" type="text/css">
        <link href="/css/libs.css" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.css" rel="stylesheet" type="text/css">
    </head>
    <body>
 
 

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">ProjectFlyer</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="/dynfield">Dynamic Fields</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	<div class="container">

			@yield('content')
        </div>
			
			
	<script src="/js/libs.js"></script>
		@yield('scripts.footer')
		@include('flash');
    </body>
</html>
