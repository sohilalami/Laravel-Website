@extends('layouts.master')

@section('header')
<h2>Bedrijven:</h2>
@endsection

@section('content')
<table class="table table-bordered">
    @foreach($bedrijven as $bedrijf)
    <tr>
     <td><a href="{{ route('company.details', ['id' => $bedrijf->id]) }}">{{  $bedrijf->name  }}</a> <br /></td>
     <td>{{ $bedrijf->address }} <br /></td>
     <td>{{ $bedrijf->zipcode }} <br /></td>
     <td>{{ $bedrijf->city }} <br /></td>
     <td>{{ $bedrijf->country }} <br /></td>

   </tr>
    @endforeach
  </table>
@endsection
