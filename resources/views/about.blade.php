<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <title>About Us</title>
</head>
<body class="debug">

    <nav>

        <div class="nav_left">
            
            <a href="{{route('home')}}">
                <img src="https://img.freepik.com/free-vector/lotus-flower-logo-icon-linear-style_126523-708.jpg" alt="logo">
            </a>
            
        </div>

        <div class="nav_right">

            <ul>
                @foreach ($links as $link) 
                    <li><a href="{{route($link)}}">{{ $link }}</a></li>
                @endforeach
            </ul>

        </div>
        
    </nav>

    <h1>{{$title}}</h1>
    
</body>
</html>