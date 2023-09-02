
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Battambang&family=Chenla&family=Hanuman:wght@300;400&family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">

    <title>Log In Page</title>


    @include('partials.inc_log_top')
    <style>
        body{
            font-family: 'Battambang', cursive;
            font-family: 'Chenla', cursive;
            font-family: 'Hanuman', serif;
            /* font-family: 'Kdam Thmor Pro', sans-serif; */
        }
      </style>

  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    @yield('log_in')
    <!-- page-wrapper end-->
   @include('partials.inc_log_bottom')
  </body>
</html>
