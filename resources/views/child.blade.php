@extends('layout')

@section('title' , 'page child')


@section('sidebar')
@parent
This is page child sidebar
@endsection

@section('content')
 <h2> this is page child</h2>
@endsection
