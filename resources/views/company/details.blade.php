@extends('layouts.master')

@section('header')
<h2>{{ $bedrijf->name }}</h2>
@endsection

@section('content')


   {{ $bedrijf->name }} <br />
   {{ $bedrijf->address }} <br />
   {{ $bedrijf->zipcode }} <br />
   {{ $bedrijf->city }} <br />
   {{ $bedrijf->country }} <br />


<p>
  {{ $bedrijf->description }}
</p>
<hr>
<a href="{{ route('company.list') }}">Terug naar alle bedrijven</a>
@endsection
