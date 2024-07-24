@extends('layout')
@section('content')
    <h1>Create Product</h1>
    <form action="{{ route('products.store')}}" method="POST">
        @CSRF
        <div>
                            <h1>Name:</label>
                            <input type="text"name="name">
                        </div>
                        <div>
                            <label>Description:</label>
                            <textarea name="description"></textarea>
                        </div>
                        <div>
                            <label>Price:</label>
                            <input type="text"name="price">
                        </div>
                        <button type="submit">Create</button>
                    </form>
@endsection
