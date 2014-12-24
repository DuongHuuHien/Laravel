<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>DANH SÁCH SINH VIÊN</h1>
THÔNG TIN SINH VIÊN
<?php echo $ten;?>
<?php foreach ($info as $item_info) {
	echo $item_info."<br/>";

	# code...
} ?>
<br/>
 Xin chao {{$ten}}
 @foreach($info as $item_info)
 	{{$item_info}}
 @endforeach

</body>
</html>