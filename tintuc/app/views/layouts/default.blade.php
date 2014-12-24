<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Framgia VietNam</title>
    <link href="{{asset('public/css/bootstrap.css')}}" rel="stylesheet">      
  </head>
  <body>
     @include('layouts.navigation') // include file menu top
      <div class="row">
        @yield('content') // Nội dung thay đổi
      </div>     
      <footer class="footer"><div class="container"><p>&copy; Framgia 2014</p></div></footer>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      {{ HTML::script('public/js/bootstrap.js')}} // link file js
  </body>
</html>
<!-- {{ HTML::style('default/cs/bootstrap.css')}} //css 
{{ HTML::script('default/js/bootstrap.min.js')}} //js
 hoặc chúng ta có thể link trực tiếp đến file bằng hàm sau:
<link href="{{asset('default/css/bootstrap.min.css')}}" rel="stylesheet"> -->
<!-- Để link đến file css, js -->