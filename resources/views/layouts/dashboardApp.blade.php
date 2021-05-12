<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('dashboard/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <title>Document</title>
</head>
<body>
    <nav class="menu" tabindex="0">
        <div class="smartphone-menu-trigger"></div>
      <header class="avatar">
            <img src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg" />
        <h2>John D.</h2>
      </header>
        <ul>
        <li tabindex="0"><a href="#"><i class="fas fa-home"></i> home</a></li>        
        <li tabindex="0"><a href="#"><i class="fas fa-plus"></i> add new</a></li>
        <li tabindex="0"><a href="#"><i class="fas fa-table"></i> projects</a></li>
        </ul>
    </nav>
    
    <main>
      <div class="helper">
     @yield('content')
    </div>
</main>
</body>
</html>