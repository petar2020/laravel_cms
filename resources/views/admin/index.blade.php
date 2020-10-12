@extends('layouts.admin')

@section('content')


    <h1>Hello {{Auth::user()->name}}, How are you?</h1>



    @stop