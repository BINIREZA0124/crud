@extends('layout')
@section('content')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Products</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Products</li>
                        </ol>
                        <li class="breadcrumb-item">
                            <a href="" class="btn btn-info">
                                Create Product
                            </a>
                        </li>

                        </ol>
                        <div class="card">
<table>
                            <tr>
                                <tr>
                                    <tr>
                                        <td>ID</td>
                                        <td>NAME</td>
                                        <td>DESCRIPTION</td>
                                        <td>ACTION</td>
                                    </tr>
                            </tr>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->price}}</td>
                                    <tr></td>
                                <td>
                                    <a href="{{ route('products.show' , $product->id) }}">View</a>
                                    <a href="{{ route('products.edit' , $product->)id }}">Edit</a>
                                    <form action="{{ route('products.destroy' , $product->) }}"method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button action="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    <tbody>
                </table>
@endsection
