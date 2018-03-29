<!DOCTYPE html>
<html>
     <head>
      
        @include('layouts._head')
        @yield('extra_styles')
     </head>
     <body class="no-skin">
     @include('layouts._sidebar')
       <div class="main-content">
            <div class="main-content-inner">  
               @yield('content')
            </div>
       </div>  
        @include('layouts._scripts')
        @yield('extra_scripts')
    </body>
</html>
