@include('securitycheck')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Analysis</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.1.4/dist/tailwind.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/home.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

   <header>
        <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 light:bg-gray-800">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="#">
                    {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" /> --}}
                    <span class="self-center text-xl font-semibold whitespace-nowrap light:text-white">AdEMNEA-INVENTORY</span>
                </a>
                <div class="flex items-center lg:order-2">

                {{-- gotta unset the session here. --}}
                    <a href="/inventory/login" class="text-gray-800 light:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 light:hover:bg-gray-700 focus:outline-none light:focus:ring-gray-800">Login</a>
                    {{-- extra button for any extra action. --}}
                    <a href="#" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 light:bg-green-600 light:hover:bg-green-700 focus:outline-none light:focus:ring-green-800">Get started</a>
                    <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 light:text-gray-400 light:hover:bg-gray-700 light:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="/inventory/" class="block py-2 pr-4 pl-3 text-white rounded bg-green-700 lg:bg-transparent lg:text-green-700 lg:p-0 light:text-white" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="/inventory/components" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-700 lg:p-0 light:text-gray-400 lg:light:hover:text-white light:hover:bg-gray-700 light:hover:text-white lg:light:hover:bg-transparent light:border-gray-700">Components</a>
                        </li>
                        <li>
                            <a href="/inventory/help" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-700 lg:p-0 light:text-gray-400 lg:light:hover:text-white light:hover:bg-gray-700 light:hover:text-white lg:light:hover:bg-transparent light:border-gray-700">Help</a>
                        </li>
                        <li>
                            <a href="/inventory/about" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-700 lg:p-0 light:text-gray-400 lg:light:hover:text-white light:hover:bg-gray-700 light:hover:text-white lg:light:hover:bg-transparent light:border-gray-700">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="flex justify-center">
        <div class="p-4 sm:ml-64 w-full max-w-6xl ">
            {{-- Overview section --}}
            <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <h2 class="text-2xl font-extrabold text-gray-900 dark:text-white">Report Analysis</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">
                    {{-- Chart for Closed Borrowings --}}
                    <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-4">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Borrowings Overview</h3>
                        <canvas id="borrowingsChart"></canvas>
                    </div>
                    {{-- Chart for Item Categories --}}
                    <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-4">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Item Categories</h3>
                        <canvas id="categoriesChart"></canvas>
                    </div>
                    <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-4">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">This shows a summarised analysis of the items in the
                             inventory</h3>
                        <canvas id="trackable_itemsChart"></canvas>
                    </div>
                </div>
            </div>

            {{-- Details section --}}
            <div class="p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <h2 class="text-2xl font-extrabold text-gray-900 dark:text-white">Detailed Analysis</h2>
                <ul class="space-y-4 mt-4 text-gray-500 dark:text-gray-400">
                    <li class="flex space-x-2">
                        <svg class="w-4 h-4 text-green-600 dark:text-green-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9"></path></svg><span class="leading-tight">The most recent borrowing is by {{ $username }} and is due in {{ $days_due }} days.</span>
            </li>
            <li class="flex space-x-2">
                <svg class="w-4 h-4 text-green-600 dark:text-green-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                <span class="leading-tight">Current inventory has some items categorized under "No Items".</span>
            </li>
            <li class="flex space-x-2">
                <svg class="w-4 h-4 text-green-600 dark:text-green-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                <span class="leading-tight">Faulty items reported recently are as follows.</span>
            </li>
        </ul>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx1 = document.getElementById('borrowingsChart').getContext('2d');
    new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ['Closed', 'Open', 'Total'],
            datasets: [{
                label: 'Borrowings',
                data: [{{ $closed_orders }}, {{ $incomplete_orders }}, {{ $total_orders }}],
                backgroundColor: 'rgba(16, 185, 129, 0.5)',
                borderColor: 'rgba(16, 185, 129, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    const ctx2 = document.getElementById('categoriesChart').getContext('2d');
    new Chart(ctx2, {
        type: 'pie',
        data: {
            labels: ['Trackable Items', 'General Items', 'Categories', 'Consignments', 'Faulty Items'],
            datasets: [{
                label: 'Items Distribution',
                data: [{{ $trackableitems }}, {{ $generalitems }}, {{ $categories }}, {{ $consignments }}, {{ $faultyitems }}],
                backgroundColor: ['#10B981', '#34D399', '#A3E635', '#FBBF24', '#F87171'],
                borderColor: ['#10B981', '#34D399', '#A3E635', '#FBBF24', '#F87171'],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true
        }
    });

</script>

</body>
</html>
