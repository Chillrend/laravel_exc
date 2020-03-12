@extends("page/template")

@section("main")
    <h2>Siswa</h2>
    <hr />
    <ol>
        @foreach($siswa as $sis)
            <li>{{$sis}}</li>
        @endforeach
    </ol>
@stop

@section("footer")
    <footer>
        &copy; 2020 laravel.dev.apps
    </footer>
@stop
