@extends('layouts.adminheader')


@section('content')
    <!-- MAIN CONTENT -->
    <main class="main">
        <h1>Quản lý danh mục</h1>

        <!-- FORM -->
        <div class="form-box">
            <h2>Thêm danh mục</h2>
            <form>
                <input type="text" placeholder="Tên danh mục">
                <a href="{{route('admin.categories.create')}}">Thêm</a>
            </form>
        </div>

        <!-- TABLE -->
        <div class="table-box">
            <h2>Danh sách danh mục</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Slug</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($category as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->slug}}</td>
                        
                        <td>
                            <a href="#" class="btn edit">Sửa</a>
                            <a href="#" class="btn delete">Xoá</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </main>
</div>

@endsection