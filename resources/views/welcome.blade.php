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
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($movies as $index => $movie)
                <div class="col-md-6 col-lg-3 g-5">
                    <div class="card h-100">
                        <div class="card-body border border-black rounded ">
                            <img class="card-img-top" src="https://picsum.photos/180/180?random{{ $index + 1 }}" alt="">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text">{{ $movie->original_title }}</p>
                            <p class="card-text">Nationality: {{ $movie->nationality }}</p>
                            <p class="card-text">Date: {{ $movie->date }}</p>
                            <p class="card-text">Vote: {{ $movie->vote }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>

</html>