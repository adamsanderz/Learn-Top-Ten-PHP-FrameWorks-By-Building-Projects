<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PhotoGallery | Welcome</title>
    <link rel="stylesheet" href="/css/foundation.min.css">
        <link rel="stylesheet" href="/css/app.css">

  </head>
  <body>
    
    <div class="off-canvas-wrapper">
      <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

        <div class="off-canvas position-left reveal-for-large" id="my-info" data-off-canvas data-position="left">
          <div class="row column">
            <br>
            <h5>Main Menu</h5>
            <ul class="side-nav">
            	 
            	 <li>
            	 	<a href="/">Home</a> </li>
             <?php if(!Auth::check()) :?>
            	 	<li><a href="/login">Login</a></li>
            	 	<li><a href="/register">Register</a></li>
               <?php endif; ?>
                <?php if(Auth::check()) :?>
            	 	<li><a href="/gallery/create">CreateGallery</a>

               <li><a href="/logout">Logout</a>
           <?php endif; ?>
            	 </li>

            </ul>
          </div>
        </div>

        <div class="off-canvas-content" data-off-canvas-content>
          <div class="title-bar hide-for-large">
            <div class="title-bar-left">
              <button class="menu-icon" type="button" data-open="my-info"></button>
              <span class="title-bar-title">Mike Mikerson</span>
            </div>
          </div>
          @if(Session::has('message'))

          <div class="alert alert-info">

            {{Session::get('message')}}
          </div>

          @endif
          @yield('content')


          <hr>

      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="/js/foundation.js"></script>
        <script src="/js/app.js"></script>

    <script>
      $(document).foundation();
    </script>
  </body>
</html>


