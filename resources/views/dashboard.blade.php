
@include('securitycheck')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>dashboard</title>
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.1.4/dist/tailwind.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('styles/home.css') }}">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
   
   @include('navbar')
   @include('sidebar')

<div class="p-4 sm:ml-64">
   <div class="p-4 border-2 border-gray-200 border rounded-lg dark:border-gray-700">
     <center> 
     reports will appear here.
     </center>
   </div>
</div>

<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    </body>
</html>
