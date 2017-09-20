<!DOCTYPE html>

<html lang="en">
  <head>
  		<title>Test</title>

  		{!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') !!}
  		{!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css') !!}

</head>

  <body>
  
    <div class="wrapper"><!--main content start-->

        <div class="main-content">
            @yield('content')           
        </div>

    </div><!--main content end-->


   		{!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js') !!}
    	{!! Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') !!}

  </body>

</html>
