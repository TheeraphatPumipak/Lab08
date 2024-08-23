@extends ('layouts.app_movie')
@section('content')

<ol>
    @foreach($movie as $movies)
    <li>{{$movies}}</li>
    @endforeach
</ol>

@endsection