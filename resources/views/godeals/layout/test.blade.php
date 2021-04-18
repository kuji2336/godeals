<!DOCTYPE html>
<html>
   <head>
      @include('godeals.layout.head')
      @stack('css')
   </head>
   <body id="body">
      <div class="blackscreen"></div>
      <div class="blackscreen2"></div>
        @include('godeals.components.innerProductSlider')
        @include('godeals.components.innerProductList')
        @include('godeals.includes.footer')
        <script src="{{url('js/developer.js')}}"></script>
        <script>AOS.init()</script>
        @stack('js')
   </body>
</html>