@extends('layouts.app')

@section('content')
<h1>This is the Services Page</h1>


{!! Form::open(['url' => 'foo/bar']) !!}
    //
{!! Form::close() !!}

@endsection
