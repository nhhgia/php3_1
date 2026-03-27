@extends('layouts.adminheader')

@section('content')
<div class="container">
    <form action="{{ route('admin.categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Tên danh mục:</label>
            <input type="text" name="name" class="form-control">
            <label>Slug:</label>
            <input type="text" name="slug" class="form-control">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-success">Lưu</button>
    </form>
</div>
@endsection