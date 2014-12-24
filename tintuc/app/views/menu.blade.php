
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('public/js/ddsmoothmenu.js')}}">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "smoothmenu1", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

ddsmoothmenu.init({
	mainmenuid: "smoothmenu2", //Menu DIV id
	orientation: 'v', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu-v', //class added to menu's outer DIV
	method: 'toggle', // set to 'hover' (default) or 'toggle'
	arrowswap: true, // enable rollover effect on menu arrow images?
	//customtheme: ["#804000", "#482400"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>
<div id="smoothmenu1" class="ddsmoothmenu">
<ul>
<?php $titlename=DB::table('tbl_dulieu')->select('title','id')->where('intro','=','Trang')->get();?>
@foreach($titlename as $itemname)
<li><a href="#">{{$itemname->title}}</a>
@endforeach
  <ul>
  
  <li><a href="#">a</a></li>
 
  </ul>
</li>  

</ul>
<!-- <br style="clear: left" />
 -->

<!-- <br style="clear: left" /> -->
</div>
<!-- <ul>

<li><a href="http://www.dynamicdrive.com">Trang chủ</a></li>
<li><a href="http://www.dynamicdrive.com">Giới thiệu</a>

  <ul>
  <li><a href="http://www.dynamicdrive.com">Sub Item 1.1</a></li>
  <li><a href="http://www.dynamicdrive.com">Sub Item 1.2</a></li>
  <li><a href="http://www.dynamicdrive.com">Sub Item 1.3</a></li>
  <li><a href="http://www.dynamicdrive.com">Sub Item 1.4</a></li>
  <li><a href="http://www.dynamicdrive.com">Sub Item 1.2</a></li>
  <li><a href="http://www.dynamicdrive.com">Sub Item 1.3</a></li>
  <li><a href="http://www.dynamicdrive.com">Sub Item 1.4</a></li>
  </ul>
</li>
<li><a href="http://www.dynamicdrive.com">Chuyên ngành</a>
  <ul>
  <li><a href="http://www.dynamicdrive.com">Sub Item 1.1</a></li>
  <li><a href="http://www.dynamicdrive.com">Sub Item 1.2</a></li>
  <li><a href="http://www.dynamicdrive.com">Sub Item 1.3</a></li>
  <li><a href="http://www.dynamicdrive.com">Sub Item 1.4</a></li>
  <li><a href="http://www.dynamicdrive.com">Sub Item 1.2</a></li>
  <li><a href="http://www.dynamicdrive.com">Sub Item 1.3</a></li>
  <li><a href="http://www.dynamicdrive.com">Sub Item 1.4</a></li>
  </ul>
</li>
<li><a href="http://www.dynamicdrive.com">Item 3</a></li>
<li><a href="http://www.dynamicdrive.com">Liên hệ</a>
  <ul>
  <li><a href="http://www.dynamicdrive.com">Đoàn Ctec</a></li>
  <li><a href="http://www.dynamicdrive.com">Nhà trường</a>
    <ul>
    <li><a href="http://www.dynamicdrive.com">Sub Item 2.1.1</a></li>
    <li><a href="http://www.dynamicdrive.com">Sub Item 2.1.2</a></li>
    <li><a href="http://www.dynamicdrive.com">Folder 3.1.1</a>
		<ul>
    		<li><a href="http://www.dynamicdrive.com">Sub Item 3.1.1.1</a></li>
    		<li><a href="http://www.dynamicdrive.com">Sub Item 3.1.1.2</a></li>
    		<li><a href="http://www.dynamicdrive.com">Sub Item 3.1.1.3</a></li>
    		<li><a href="http://www.dynamicdrive.com">Sub Item 3.1.1.4</a></li>
    		<li><a href="http://www.dynamicdrive.com">Sub Item 3.1.1.5</a></li>
		</ul>
    </li>
    <li><a href="http://www.dynamicdrive.com">Sub Item 2.1.4</a></li>
    </ul>
  </li>
  </ul>
</li>
<li><a href="http://www.dynamicdrive.com/style/">Item 4</a></li>
</ul> -->