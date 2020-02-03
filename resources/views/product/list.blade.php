@extends('layouts.master')

@section('header')
<h2>Alle producten</h2>
@endsection

@section('content')
<table class="table table-bordered">
    @foreach($products as $product)
    <tr>
     <td><a href="=">{{ $product->title }}</a></td>
     <td>{{ $product->description }} </td>
     <td>{{ $product->price }} </td>
     <td>{{ $product->pub_date }} </td>

   </tr>
    @endforeach
  </table>

  <p>{{ $products->previousPageUrl() }}</p>

  {{ $products->links() }}

@endsection
