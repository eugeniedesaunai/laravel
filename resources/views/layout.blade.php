@include('elements.header' )
    @yield('header')

@include('elements.body' )
  
   <div id = "main" class = "row" >
           @yield('content')
   </div>
   
@include('elements.footer' )