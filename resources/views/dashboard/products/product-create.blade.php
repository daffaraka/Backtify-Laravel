@extends('layout')
@section('page-title', 'Add Product')
@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger pb-0">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Product Name</label>
            <input type="text" name="name" class="form-control">

            @if ($errors->has('name'))
                <div class="alert text-danger">{{ $errors->get('name') }}</div>
            @endif

        </div>
        <div class="mb-3">
            <label>Category</label>
            <select name="id_category" class="form-control">
                <option>Select Category</option>
                @foreach ($category as $data)
                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Price</label>
            <input type="number" name="price" class="form-control">
        </div>
        <div class="mb-3">
            <label>Stock</label>
            <input type="number" name="stock" class="form-control">
        </div>
        <div class="mb-3">
            <label>Description</label>
            <input type="text" name="description" class="form-control">
        </div>
        <div class="mb-3">
            <label>Picture</label>
            <input type="file" name="image" accept="image/*" class="form-control">
        </div>


        <button type="submit" class="btn btn-primary"> Submit</button>
    </form>
@endsection
