<!DOCTYPE html>
<html lang="en">
<head>
    <title>MCQ BOX APP</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="quiz1/endor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="quiz1/vendor/animate/animate.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="quiz1/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="quiz1/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="quiz1/vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vvendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    {!! Html::style('quiz1/css/main.css') !!}
      {!! Html::style('quiz1/css/util.css') !!}
<!--===============================================================================================-->
</head>
<body>

  @yield('content')
             </div>
    </div>



<!--===============================================================================================-->
    <script src="quiz1/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="quiz1/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="quiz1/vendor/bootstrap/js/popper.js"></script>
    <script src="quiz1/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="quiz1/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="quiz1/vendor/daterangepicker/moment.min.js"></script>
    <script src="quiz1/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="quiz1/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="quiz1/js/main.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-23581568-13');
    </script>
</body>
</html>


       <!-- <div id="content">
       


            <div id="wrapper">
                <div id="steps">
                    <form id="formElem" name="formElem" method="POST" action="{!! route('course') !!}">
                    {!! csrf_field() !!}
                     <fieldset class="step">
                         <div class="form-group{{ $errors->has('course') ? ' has-error' : '' }}">
                            <label for="course" class="col-md-4 control-label">add course</label>

                            <div class="col-md-6">
                                <input id="course" type="text" class="form-control" name="course" value="{{ old('course') }}" required autofocus>

                                @if ($errors->has('course'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('course') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    submit 
                                </button>
                            </div>
                        </div>

                   
                </fieldset>
                      
                 </form>
                -->