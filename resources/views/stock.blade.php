
@include('securitycheck')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>category</title>
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.1.4/dist/tailwind.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('styles/home.css') }}">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
   
   @include('navbar')
   {{-- @include('sidebar') --}}
   we may not need a sidebar on this page which shows all items and entire stock 

<center>
<div class="grid grid-cols-2 gap-4">
    <div>first</div>
    <div>second</div>
</div>
</center>
<div class="p-4 sm:ml-64">
   <div class="p-4 border-2 border-gray-200 border rounded-lg dark:border-gray-700">
     <center> 
     categories and their register form to appear here.
     </center>
   </div>
</div>

<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    </body>
</html>