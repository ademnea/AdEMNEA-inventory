
@include('securitycheck')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>checkout</title>
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


<button type="button" class="text-white bg-orange-700 hover:bg-orange-800 focus:outline-none focus:ring-4 focus:ring-orange-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">
<a href="/borrows">Back</a>
</button>
</center>
<br>
<hr>
<br>
<div style="
margin-left:10%;
margin-right:10%;
">

<h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl light:text-white">
                  Register New User
              </h1>
              <form class="space-y-4 md:space-y-6" action="registeruser" method="post" id="form"  enctype="multipart/form-data">

               @csrf
                
                {{-- capturing the session cart items in hidden forms. or unpacking them direct from contoller to the 3 db tables. --}}
               <input type="hidden" name="admin" value="{{ Session('id') }} "> 

                  <div>
                      <label for="item name" class="block mb-2 text-sm font-medium text-gray-900 light:text-white">Expected Return Date</label>
                      <input type="date" name="returndate" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 light:bg-gray-700 light:border-gray-600 light:placeholder-gray-400 light:text-white light:focus:ring-green-500 light:focus:border-green-500" placeholder="return date..." required="true">
                  </div>

                 <div>
                    <label for="desc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Reason</label>
                    <textarea name="reason"  rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Reason for borrowing..."></textarea>
                  </div>

                  <div>
                      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 light:text-white">Agreement Document Image</label>
                      <input type="file" name="email" id="email" placeholder="select image" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 light:bg-gray-700 light:border-gray-600 light:placeholder-gray-400 light:text-white light:focus:ring-green-500 light:focus:border-green-500">
                  </div>

            <button class="bg-green-500 text-white font-bold py-2 px-4 rounded-full w-full">
                              Checkout
                  </button>
                  <p class="text-sm font-light text-gray-500 light:text-gray-400">
                   Back to <a href="#top" class="font-medium text-primary-600 hover:underline light:text-primary-500">Top</a>
                  </p>
              </form>
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
