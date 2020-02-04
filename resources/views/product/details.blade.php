@extends('layouts.app')

@section('header')
<h2>{{ $product->title }}</h2>
@endsection

@section('content')
    <img src="{{ asset('storage/' . $product->image ) }}"/>
@endsection
