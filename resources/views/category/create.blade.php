@extends('layout.master') @section('content')
<h1>เพิ่มหมวดหมู่</h1>
<form action="/category/add" method="post">
  @csrf
  <div class="form-group">
    <label>ชื่อ</label>
    <input
      type="text"
      name="name"
      placeholder="กรอกชื่อหมวดหมู่"
      required="true"
      min="3"
    />
  </div>
  <button type="submit">บันทึก</button>
</form>
@endsection
