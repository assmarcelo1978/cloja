@extends('layouts.main')
@extends('layouts.nav')
@section('title', 'Cloja - Sistema de Control de Lojas')

@section('content')

@if ($id != null)
<p>Exibindo produto: </p> {{$id}}    
@endif


@endsection
@section('title')
@endsection