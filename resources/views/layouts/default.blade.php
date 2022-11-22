<!doctype html>
<html>
<head>
   @include('includes.head')
</head>
<body>
<div class="container">
    <header class="row">
       @include('includes.header')
       </header>
       <tr>
        <td>
            @include('includes.menu')
        </td>
        <td>
             @yield('content') 
        </td>
       </tr>
   <footer class="row">
       @include('includes.footer')
   </footer>
</div>
</body>
</html>