@extends('../layouts/app')

@section('content')
<div class="container">
    <h2> Product details</h2><br><br>
    <div class="jumbotron">
        <p style="font-size: 25px; font-weight:bold;">{{ $prod->title }}</p>
        <p>{{ number_format($prod->price,2,',',' ') }} Fcfa</p>
        <p>{{ $prod->description }}</p>
        <p><img src="{{ asset('storage'). '/' . $prod->image }}" style="height:100px; width:100px"></p>
    </div>


</div>

@endsection

