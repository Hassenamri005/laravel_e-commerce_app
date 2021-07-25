<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <style>
        *{
            font-family: 'Rubik', sans-serif;
        }
        .nav-link{
            color: #869ab8;
        }
        .container-fluid .navbar-brand{
            color: #0d6efd;
            font-size: 25px;
            font-weight: 600
        }
        .container-fluid .navbar-brand:hover{
            color: #0d6efd;
        }
        .collapse {
            margin-top: 7px;
        }
        .collapse .navbar-nav .nav-item .nav-link{
            font-size: 18px;
            padding-top: 20px 16px;
        }
        .search-input{
            width: 180px;
            margin-left: 10px
        }
        .search-input:focus{
            width: 450px;
            -webkit-animation: animateThis 0.3s ease-in;
            -webkit-animation-fill-mode: forwards;
        }

        @-webkit-keyframes animateThis {
            0% {
                width: 180px;
            }
            100% {
                width: 450px;
                
            }
        }
        
        .btn-outline-primary, .btn-primary{
            margin-right: 5px;
        }
      /* --------------------  #869ab8; #0d6efd;  --------------------    */
        @media screen and (max-width 600px){
            
        }
        
    </style>
</head>
<body>
    {{ View::make('header') }}
    <div class="">
        @yield('content')
    </div>
    
    {{ View::make('footer') }}
</body>
</html>