
@include('securitycheck')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>orders</title>
     <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" >
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.1.4/dist/tailwind.min.css">

    </head>
    <body>
   
   @include('navbar')
   @include('sidebar')

<div class="p-4 sm:ml-64">
   <div class="p-4 border-2 border-gray-200 border rounded-lg dark:border-gray-700">
   {{-- side items  --}}

     <center>
   {{-- displaying an alert after registering an item --}}
         @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <b> {{ session('success') }}</b>
            </div>

        @elseif (session('updated')) 
             <div class="p-4 mb-4 text-sm text-orange-800 rounded-lg bg-orange-50 dark:bg-gray-800 dark:text-orange-400" role="alert">
            <b> {{ session('updated') }}</b>
              </div> 
        @endif

</center>
<br>
<hr>
<br>
<div style="
margin-left:10%;
margin-right:10%;
">

<h5><b>Open Orders</b></h5>
<br>
<div class="relative overflow-x-auto">

   <table id="myTable" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>

               <th scope="col" class="searchable">
                    ID
                </th>

                <th scope="col" class="searchable">
                    Borrow Date
                </th>

                <th scope="col" class="searchable">
                    Expected Return
                </th>
                
                <th scope="col" class="searchable">
                    Reason
                </th>

                <th  scope="col" class="px-6 py-3">
                    status
                </th>

                <th  scope="col" class="px-6 py-3">
                    Items Returned
                </th>

                <th scope="col" class="px-6 py-3">
                    image url
                </th>
                
            </tr>
        </thead>
        <tbody>

        @foreach ($orders as $order )

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  {{ $order->id }}
                </th>
          
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  {{ $order->borrowDate }}
                </td>
     
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  {{ $order->ExpectedReturnDate }}
                </td>

                 <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  {{ $order->reason }}
                </td>
                
                 <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  {{ $order->status }}
                  </td>

                {{-- actions on users begin here --}}

                    {{-- action to complete order --}}
              <form method="post" action="returnOrder">
                   @csrf

              <input type="hidden" name="order" value="{{ $order->id }}">
                
                   <td scope="row" class="px-6 py-4 font-medium text-green-900 whitespace-nowrap">
                   <button type="submit">
                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                            </svg>
                   </button>
                    </td>
              </form>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  {{ $order->borrow_image_url }}
                </td>
             </tr>
        @endforeach
        </tbody>
    </table>
</div>

   </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script  type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
<script>
 // let table = new DataTable('#myTable');
   $(document).ready(function(){
    $('#myTable').DataTable();
   });
</script>
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>

<script>
//this script prompts with a confirmation dialog box before deleting a 

function prompt_user_delete(){

    let result = window.confirm("Are you sure you want to complete this order?");

  if (result) {
  // user clicked "OK"
  alert("order completed successfully!");
  
  //piece of code missing here for sending user id for deletion.


   } else {

  // user clicked "Cancel"
    alert("Operation Canceled.");
   }

}

</script>
 </body>
</html>