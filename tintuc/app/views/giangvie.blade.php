<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
THÔNG TIN GIẢNG VIÊN<br>
<!--@if($magv==88)
{{'Giang vien thuoc khoa Giao duc chinh tri phap luat'}}

@else
{{'Giang vien thuoc khoa tai chinh ngan hang'}}
@endif
<img src="{{asset('public/img/t.jpg')}}"/>
 -->
 Chào mừng
<div class="idgiang">
	@yield('idgiang')
</div>


<!-- tên trùng class hoặc id của div -->
</body>
</html>