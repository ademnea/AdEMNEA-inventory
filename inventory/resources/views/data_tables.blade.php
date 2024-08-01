<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.1.4/dist/tailwind.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('styles/home.css') }}">
        <script src="https://cdn.tailwindcss.com"></script>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./output.css" rel="stylesheet">
    <title>Components</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 2rem 0;
        }
        .header {
            background: linear-gradient(135deg, #16a34a, #1de9b6);
            color: #ffffff;
            padding: 1.5rem;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 2.5rem;
        }
        .info-box {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 1rem;
            margin: 1rem 0;
            text-align: center;
        }
        .info-box h2 {
            margin: 0.5rem 0;
            color: #16a34a;
        }
        .table-container {
            margin: 2rem 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #16a34a;
            color: #ffffff;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
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

<div class="container">
    <div class="header">
        <h1>Categories</h1>
    </div>

    <div class="info-box">
        <h2>Total Quantity: {{ $totalQuantity }}</h2>
    </div>

    <div class="info-box">
        <h2>Most Available Item: {{ $mostAvailableCategory->name }} (Quantity: {{ $mostAvailableCategory->quantity }})</h2>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                @foreach($firstThreeCategories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->Type }}</td>
                        <td>{{ $category->Quantity }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
