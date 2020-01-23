@extends('layouts.master')

@section('header')
Homepage
@endsection

@section('content')
<h2>Producten</h2>

<ol>
@foreach($producten as $product)
    @if ($product == 'Autoradio')
        <li><strong>{{ $product }}</strong></li>
    @else
        <li>{{ $product }}</li>
    @endif
@endforeach
</ol>

@for($i=1;$i<=10;$i++)
    {{ $i }}<br />
@endfor

<h2>Companies</h2>

<ol>
@foreach($companies as $company)
        <li><strong>{{ $company->name}}, {{ $company->address}}</strong></li>
@endforeach
@endsection