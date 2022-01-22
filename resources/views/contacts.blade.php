<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Laravel Primi Passi</title>
</head>
<body>

    <div class="container">
        <ul class="nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/chi-siamo">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contatti">CONTATTI</a>
            </li>
          </ul>
    </div>

    <h1>CONTATTI</h1>

    @if ($print)
        <ul>
            @foreach ($contacts as $contact)
            <li>{{ $contact }}</li>            
            @endforeach
        </ul>
    @else
        <p>Non ci sono contatti :(</p>
    @endif
    
</body>
</html>