<!DOCTYPE html>
<html lang="en">
@yield('styles')
<head>
@include('users.includes._header')
<body id="page-top">

  <div id="wrapper">
   
    <div id="content-wrapper" class="d-flex flex-column">

      <div id="content">

        @include('users.includes._topbar')
        @include('users.includes._message')
		@yield('content')
		@include('users.includes._footer')

		@yield('scripts')
  
</body>

</html>