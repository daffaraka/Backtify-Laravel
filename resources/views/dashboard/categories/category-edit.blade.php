@extends('layout')
@section('page-title', 'Edit Category')
@section('content')

    <form action="{{route('category.update',$category->id)}}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Category Name</label>
            <input type="text" name="name" class="form-control" value="{{$category->name}}">
        </div>

        <button type="submit" class="btn btn-primary"> Submit</button>
    </form>
@endsection
