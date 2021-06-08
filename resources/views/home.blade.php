<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        {{--main styles--}}
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    </head>
    <body>
        @include('partials.header')
        <main>
           <div class="container">
            @foreach ($comics as $card)
            <div class="card">
                <img src="{{ $card['image'] }}" alt="">
                <p>{{ $card['title'] }}</p>
            </div>
            @endforeach
           </div>
        </main>
        @include('partials.footer')
        {{--js--}}
        <script src="{{ asset('js/app.js')}}"></script>
    </body>
</html>
