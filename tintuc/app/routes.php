<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

//Basic Routing: goi ra cau thong bao chào
Route::get('hello',function(){
	return 'Học Laravel Framework ';
});
// goi p khung nhìn hien thi noi dung can được thông báo
Route::get('chuyennganh',function(){
	return View::make('modaularavel');

});
//Prameter Route :khi ta gọi monhoc/mamon/ten mon ->ket qua mot dang bien doi hoan chinh
Route::get('monhoc/{mamon}/{tenmon}',function($mamon,$tenmon){
	return 'Môn học có mã môn '.$mamon.' và tên môn '.$tenmon;

});
//Regular Expresstion Route
Route::get('nganh/{manganh}',function($manganh){
	return 'Chuyên nganh có ma nganh: '.$manganh;
})->where('manganh','[0-9]+');//tạo thong bao chi su dung so có giá trị từ 0->9
//Route Filter
//Router Group
Route::get('sinhvien',function(){
	$info=array('idsinhvien'=>'1','masv'=>'12CTHA0017');
	return View::make('temp',array('ten'=>'Tuan','info'=>$info));
	//chuyen mot tham so cho trang ta tao mang de load (hien thi ta <?php echo $ten;>?)
	//dung foreach de duyet tung mang
});
Route::get('giangvien',function(){
	return View::make('giangvie',array('magv'=>'88'));
});
Route::get('extends',function(){
	return View::make('kethua');
});
Route::get('chao',function(){
	echo "Có thể làm như thế này";
});
//GHI CHÚ
Route::get('trangchu',function(){
	return View::make('index');
});
Route::get('home',function(){
	return View::make('trangchu');
});
Route::get('add_dulieu',function(){
	DB::table('tbl_dulieu')->insert(array(
		array('title'=>'Trang chủ','intro'=>'Trang chủ','full'=>'Gioi thieu','images'=>'Nội dung'),
		array('title'=>'Gioi thiệu','intro'=>'Gioi thiệu','full'=>'Gioi thieu','images'=>'Nội dung'),
		array('title'=>'Cao Đẳng','intro'=>'Cao Đẳng','full'=>'Gioi thieu','images'=>'Nội dung'),
		array('title'=>'Trung Cấp','intro'=>'Trung Cấp','full'=>'Gioi thieu','images'=>'Nội dung'),
		array('title'=>'Vừa làm vừa học','intro'=>'Vừa học vừa làm','full'=>'Gioi thieu','images'=>'Nội dung'),
		array('title'=>'Liên hệ','intro'=>'Liên hệ','full'=>'Gioi thieu','images'=>'Nội dung')
		));
});
Route::get('chitietkhoa',function(){
	return View::make('chitietkhoa');
});
Route::get('bootstraps',function(){
    return View::make('home');  // trỏ về file view home.bale.php
});
//THÊM DỮ LIỆU VÀO CÁC BẢNG CỦA CSDL


Route::get('add_khoa',function(){
	DB::table('tbl_khoa')->insert(array(
		array('makhoa'=>'CNTT','tenkhoa'=>'Tin Học Quản Lý'),
		array('makhoa'=>'TCNH','tenkhoa'=>'Tài Chính Ngân Hàng'),
		array('makhoa'=>'QTKD','tenkhoa'=>'Quản Trị Kinh Doanh'),
		array('makhoa'=>'KT','tenkhoa'=>'Kế Toán'),
		array('makhoa'=>'KTTS','tenkhoa'=>'Kinh Tế Thủy Sản'),
		array('makhoa'=>'KTNN','tenkhoa'=>'Kinh Tế Nông Nghiệp'),
		array('makhoa'=>'KHCB','tenkhoa'=>'Khoa Học Cơ Quản'),
		array('makhoa'=>'GDPL','tenkhoa'=>'Giao Dục Chính Trị Pháp Luật')
		));
});