@extends('layout.master') @section('content')
<h1>แก้ไขหมวดหมู่</h1>
<form action="/category/update/{{$category->id}}" method="post">
  @csrf
  <div class="form-group">
    <label>ชื่อ</label>
    <input
      type="text"
      name="name"
      value="{{$category->name}}"
      placeholder="กรอกชื่อหมวดหมู่"
      required="true"
      min="3"
    />
  </div>
  <button type="submit">บันทึก</button>
</form>
@endsection
