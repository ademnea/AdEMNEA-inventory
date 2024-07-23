<!DOCTYPE html>
<html lang="en">
<head>
    <title>Components - AdEMNEA Inventory</title>
    <title>welcome</title>
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.1.4/dist/tailwind.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('styles/home.css') }}">
        <script src="https://cdn.tailwindcss.com"></script>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./output.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script>
   
    </script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
        .header {
            background: linear-gradient(135deg, #16a34a, #1de9b6);
            color: #ffffff;
            padding: 2rem 1rem;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header h1 {
            font-size: 3rem;
            font-weight: 700;
            margin: 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
        .header .logo {
            height: 60px;
            margin-right: 1rem;
        }
        .nav {
            display: flex;
            gap: 1rem;
        }
        .nav a {
            color: #ffffff;
            text-decoration: none;
            font-size: 1.2rem;
            transition: color 0.3s;
        }
        .nav a:hover {
            color: #1de9b6;
        }
        .components-container {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            justify-content: center;
            margin: 2rem 0;
        }
        .component-card {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            width: 300px;
            text-align: center;
        }
        .component-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .component-card h3 {
            font-size: 1.5rem;
            color: #16a34a;
            margin: 1rem 0;
        }
        .component-card p {
            padding: 0 1rem 1rem;
            color: #555555;
        }
        .component-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .animated-button {
            background: linear-gradient(135deg, #16a34a, #1de9b6);
            border: none;
            border-radius: 50px;
            color: #ffffff;
            cursor: pointer;
            font-size: 1.2rem;
            margin: 1rem auto;
            padding: 0.75rem 2rem;
            text-align: center;
            transition: background 0.3s, transform 0.3s;
            display: inline-block;
        }
        .animated-button:hover {
            background: linear-gradient(135deg, #1de9b6, #16a34a);
            transform: scale(1.05);
        }
        .animated-button:active {
            transform: scale(0.95);
        }
        .animated-button svg {
            margin-left: 8px;
            transition: transform 0.3s;
        }
        .animated-button:hover svg {
            transform: translateX(5px);
        }
        .footer {
            background: linear-gradient(135deg, #16a34a, #1de9b6);
            color: #ffffff;
            text-align: center;
            padding: 1rem;
            border-radius: 0 0 15px 15px;
            box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.2);
        }
        .footer p {
            margin: 0;
            font-size: 1rem;
        }
        .footer .social-icons {
            margin-top: 0.5rem;
        }
        .footer .social-icons a {
            color: #ffffff;
            margin: 0 0.5rem;
            font-size: 1.5rem;
            transition: color 0.3s;
        }
        .footer .social-icons a:hover {
            color: #1de9b6;
        }
        .back-to-top {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            background: #16a34a;
            color: #ffffff;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: background 0.3s, box-shadow 0.3s;
        }
        .back-to-top:hover {
            background: #1de9b6;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }
        .back-to-top::before {
            content: '⬆️';
            display: inline-block;
            margin-right: 0.5rem;
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
                            <a href="/about" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-700 lg:p-0 light:text-gray-400 lg:light:hover:text-white light:hover:bg-gray-700 light:hover:text-white lg:light:hover:bg-transparent light:border-gray-700">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mx-auto p-4">

        <div class="components-container">
            <div class="component-card">
                <img src="{{ asset('storage/chart.png') }}" alt="chart" class="chart" height="300px">
                <h3>Interactive Reports</h3>
                <p>Analysis and visualization of different categories we have in the lab that describe our items.</p>
                <form method="post" action="report_analysis">
                    @csrf                 
                <button class="animated-button" >Explore <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h12.793l-4.147-4.146a.5.5 0 0 1 .708-.708l5 5a.5.5 0 0 1 0 .708l-5 5a.5.5 0 0 1-.708-.708L14.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                </svg></button>
                </form>
            </div>

            <div class="component-card">
                <img src="{{ asset('storage/tables.jpeg') }}" alt="table" class="table">
                <h3>Data Tables</h3>
                <p>Shows a summary of the different items in the Inventory</p>
                <form method="post" action="table_facts">
                    @csrf                 
                <button class="animated-button" >Discover <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h12.793l-4.147-4.146a.5.5 0 0 1 .708-.708l5 5a.5.5 0 0 1 0 .708l-5 5a.5.5 0 0 1-.708-.708L14.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                </svg></button>
                </form>
            </div>
        </div>

        <div class="footer">
            <p>&copy; 2024 AdEMNEA Project. All rights reserved.</p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>

        <div class="back-to-top" onclick="window.scrollTo({ top: 0, behavior: 'smooth' });">Back to Top</div>
    </div>

</body>
</html>
