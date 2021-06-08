@extends('layouts.main')

@section('content')
<div class="container">
    @foreach ($comics as $card)
    <div class="card">
        <img src="{{ $card['image'] }}" alt="">
        <p>{{ $card['title'] }}</p>
    </div>
    @endforeach
</div>
@endsection

           
        
