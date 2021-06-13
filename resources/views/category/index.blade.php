@extends('layout.master') @section('content')
<h1>หมวดหมู่</h1>
<a class="btn btn-primary" href="/category/create">+ เพิ่มหมวดหมู่</a>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>#</th>
      <th>ชื่อ</th>
      <th>จัดการ</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $category)
    <tr>
      <td>{{$category->id}}</td>
      <td>{{$category->name}}</td>
      <td>
        <a class="btn btn-warning" href="/category/edit/{{$category->id}}"
          >แก้ไข</a
        >
        <a class="btn btn-danger" href="/category/delete/{{$category->id}}"
          >ลบ</a
        >
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
