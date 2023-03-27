
@include('securitycheck')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>compartments</title>
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.1.4/dist/tailwind.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('styles/home.css') }}">
        <script src="https://cdn.tailwindcss.com"></script>

        <link href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
       <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    </head>
    <body>
   
   @include('navbar')
   @include('sidebar')




<div class="p-4 sm:ml-64">
   <div class="p-4 border-2 border-gray-200 border rounded-lg light:border-gray-700">

<center>
      {{-- displaying an alert after registering a category --}}
         @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <b> {{ session('success') }}</b>
            </div> 

        @elseif (session('updated')) 
             <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <b> {{ session('updated') }}</b>
              </div>
            @endif
{{-- start of the page content --}}


<div class="grid grid-cols-2 gap-4">
    <div>
  {{-- first column --}}
<button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
<a href="/register_compartment">Add New Compartment</a>
</button>
    </div>
    {{-- second column --}}
    <div>
    
<form>   
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </div>
        <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Search Categories, descriptions..." required>
        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Search</button>
    </div>
</form>

    </div> {{-- closes second column --}} 
</div>  {{-- closes entire column wrap div --}}
</center>
<br>
<hr>
<br>
<div style="
margin-left:10%;
margin-right:10%;
">

<h5><b>AVAILABLE COMPARTMENTS</b></h5>
<br>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">

    <table id="myTable" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>

             <th scope="col" class="px-6 py-3">
                    ID
                </th>

                <th scope="col" class="px-6 py-3">
                    Compartment number
                </th>
               
                <th scope="col" class="px-6 py-3">
                    Description
                </th>

                <th scope="col" class="px-6 py-3">
                    Action
                </th>
                
            </tr>
        </thead>
        <tbody>

        @foreach ($compartments as $compartment )

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   {{ $compartment->id }}
                </td>
          

          
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   {{ $compartment->number }}
                </td>
     

     
                <td scope="row" class="px-6 py-4">
                   {{ $compartment->description}}
                </td>
           
                  {{-- actions begin here --}}
                 
                  <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">

                       <a href="/edit_compartment_form? id={{ $compartment->id}}&name={{ $compartment->number }}&description={{ $compartment->description}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                         Edit
                       </a>
                </td>
           </tr>
        @endforeach
        </tbody>
    </table>
</div>

   </div> 
</div>

<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
       $(document).ready( function () {
       $('.myTable').DataTable();
        } );
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    </body>
</html>
