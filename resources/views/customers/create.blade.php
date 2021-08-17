<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Thêm Lớp</h1>
	<form action="{{route('customers.store')}}" method="post">
		@csrf
		Tên: <input type="text" name="name"><br>
        Giới tính: <input type="radio" name="gender" value="1">Nam
                    <input type="radio" name="gender" value="0">Nữ <br>
		Địa chỉ: <input type="text" name="address"><br>
        Số điện thoại: <input type="text" name="phone"><br>
        Email: <input type="text" name="email"><br>
		<button>Thêm</button>
	</form>
</body>
</html>