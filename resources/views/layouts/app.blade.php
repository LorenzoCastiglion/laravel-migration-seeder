<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
     @foreach ($trains as $train)

     <div class="card mb-3">
        <div class="card-header">{{ $train->stazione_di_arrivo }}</div>
        <div class="card-body">
            <div>
                <p>Partenza:{{ $train->ora_di_arrivo }}</p>
                <p> <small> Arrivo:{{ $train->ora_di_arrivo }}</small></p>


                
            </div>
            
        </div>
    </div>
         
     @endforeach
    </main>

</body>

</html>
