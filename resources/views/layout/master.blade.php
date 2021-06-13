

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <title>Todo List</title>
</head>

<body>
    <div class="container">
    <h1><i class="fa fa-list"></i> Todo List ::</h1>
    @if(auth()->check()) สวัสดี, {{auth()->user()->name}} |
    <a href="/category">จัดการหมวดหมู่</a> | <a href="/logout">ออกจากระบบ</a> @else
    สวัสดี, บุคคลทั่วไป โปรด <a href="/login">เข้าสู่ระบบ</a> @endif

       @yield('content')
        <hr>
        <p>&copy; 2017 Bundit Nuntates</p>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</body>

</html>
