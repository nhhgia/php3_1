<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản lý danh mục</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
    
}

/* HEADER */
.header {
    height: 50px;
    background: #2c3e50;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
}

/* LAYOUT */
.container {
    display: flex;
    font-size:10px;
}

/* SIDEBAR */
.sidebar {
    width: 150px;
    background: #34495e;
    min-height: calc(100vh - 60px);
}

.sidebar ul {
    list-style: none;
}

.sidebar li {
    border-bottom: 1px solid #2c3e50;
}

.sidebar a {
    display: block;
    padding: 15px;
    color: white;
    text-decoration: none;
}

.sidebar li.active,
.sidebar a:hover {
    background: #1abc9c;
}

/* MAIN */
.main {
    flex: 1;
    padding: 20px;
    background: #ecf0f1;
}

.main h1 {
    margin-bottom: 20px;
}

/* FORM */
.form-box {
    background: white;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 5px;
}

.form-box input {
    padding: 10px;
    width: 250px;
    margin-right: 10px;
}

.form-box button {
    padding: 10px 15px;
    background: #27ae60;
    color: white;
    border: none;
    cursor: pointer;
}

.form-box button:hover {
    background: #219150;
}

/* TABLE */
.table-box {
    background: white;
    padding: 20px;
    border-radius: 5px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

th, td {
    padding: 12px;
    border-bottom: 1px solid #ddd;
    text-align: center;
}

th {
    background: #3498db;
    color: white;
}

/* BUTTONS */
.btn {
    padding: 5px 10px;
    text-decoration: none;
    color: white;
    border-radius: 3px;
}

.btn.edit {
    background: #f39c12;
}

.btn.delete {
    background: #e74c3c;
}
    </style>
</head>
<body>

<!-- HEADER -->
<header class="header">
    <div class="logo">Admin Panel</div>
    <div class="user">Xin chào, Admin</div>
</header>
<div class="container">

    <!-- SIDEBAR -->
    <aside class="sidebar">
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Products</a></li>
            <li class="active"><a href="{{route('admin.categories.index')}}">Categories</a></li>
        </ul>
    </aside>
  @yield('content')