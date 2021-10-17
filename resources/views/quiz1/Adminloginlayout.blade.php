<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <title>mcq box app</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
         <meta name="csrf-token" content="{!! csrf_token() !!}">
        <meta name="description" content="Fancy Sliding Form with jQuery" />
        <meta name="keywords" content="jquery, form, sliding, usability, css3, validation, javascript"/>
      
            {!! Html::style('quiz1/css/formstyle.min.css') !!}
              <!-- {!! Html::style('quiz1/css/bootstrap.css') !!}
            {!! Html::style('quiz1/css/bootstrap-theme.css' )!!}
            {!! Html::style('quiz1/css/bootstrap.min.css') !!}  -->  
           {!! Html::style('quiz1/https://fonts.googleapis.com/css?family=Hind+Madurai:300,400') !!}
           {!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js') !!}
         
         
        
    </head>
   
    <body>
   
       

        @yield('content')
           

     <script>
      
    </script>
    {!! Html::script('quiz1/js/sliding.form.js') !!}
    </body>
</html>