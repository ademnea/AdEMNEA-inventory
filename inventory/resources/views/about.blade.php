<!DOCTYPE html>
<html lang="en">
<head>
    <title>About Us - AdEMNEA Inventory</title>

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.1.4/dist/tailwind.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/home.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./output.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
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
            position: relative;
            overflow: hidden;
        }
        .header h1 {
            font-size: 3rem;
            font-weight: 700;
            margin: 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            z-index: 1;
        }
        .header .contact-us {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }
        .header .contact-us span {
            cursor: pointer;
        }
        .header .contact-us:hover .dropdown {
            display: block;
        }
        .dropdown {
            display: none;
            position: absolute;
            right: 0;
            top: 100%;
            background: #ffffff;
            color: #333333;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: left;
        }
        .dropdown p {
            margin: 0;
            font-size: 0.9rem;
            line-height: 1.4;
        }
        .logo {
            height: 60px;
            margin-right: 1rem;
        }
        .section {
            background-color: #ffffff;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s, transform 0.3s;
            position: relative;
            overflow: hidden;
        }
        .section:hover {
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            transform: scale(1.02);
        }
        .section h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #16a34a;
            margin-bottom: 1rem;
        }
        .section p {
            font-size: 1.1rem;
            color: #333333;
            line-height: 1.6;
            margin-bottom: 1rem;
        }
        .section ul {
            list-style: disc;
            padding-left: 2rem;
        }
        .section li {
            font-size: 1rem;
            color: #555555;
            margin-bottom: 0.5rem;
            transition: color 0.3s;
        }
        .section li:hover {
            color: #16a34a;
        }
        .card-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
            margin: auto;
        }
        .card {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 200px;
            height: 200px;
            text-align: center;
            background: linear-gradient(135deg, #0f6c41, #148e6d); /* Darker gradient */
            color: #ffffff;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Darker shadow */
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative;
            padding: 10px;
            margin: 20px;
        }
        .card:hover {
            background: linear-gradient(135deg, #16a34a, #1de9b6);
            color: black;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5); /* Darker shadow on hover */
            z-index: 1000; /* Bring the hovered card to the front */
        }
        .icon {
            font-size: 24px;
            margin-bottom: 10px;
            transition: transform 0.3s;
        }
        .card:hover .icon {
            transform: rotate(360deg);
        }
        h3 {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 5px;
        }
        p {
            font-size: 14px;
            font-weight: 400;
        }
        .tooltip {
            display: none;
            position: absolute;
            bottom: -30px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #000;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 0.8rem;
            white-space: nowrap;
        }
        .card:hover .tooltip {
            display: block;
        }
        .footer {
            background: linear-gradient(135deg, #16a34a, #1de9b6);
            color: #ffffff;
            text-align: center;
            padding: 1rem;
            border-radius: 0 0 15px 15px;
            box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.2);
            position: relative;
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
<body class="bg-gray-100 text-gray-800">
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

    <div class="container mx-auto p-4">
    

        <div class="section my-8 p-6 rounded shadow-lg bg-white">
            <h2>About AdEMNEA</h2>
            <p>The Adaptive Environmental Monitoring Networks for East Africa (AdEMNEA) Project...</p>
            <p>AdEMNEA is a collaboration between:</p>
            <ul>
                <li>Norwegian University of Science and Technology (NTNU)</li>
                <li>Makerere University</li>
                <li>University of Juba</li>
                <li>Dar-es-salaam Institute of Technology</li>
                <li>University of Bergen</li>
            </ul>
            <p>The project is funded by NORAD under the NORHED II programme. It generates 
                a demand for various items needed for different purposes. This site facilitates the tracking 
                of borrowed items and overall inventory management.</p>
        </div>

        <div class="card-container">
            <div class="card card-1">
                <div class="icon">📊</div>
                <h3>Data Gathering</h3>
                <p>Collecting and analyzing meteorological data</p>
                <div class="tooltip">Collecting various types of environmental data to support research and analysis.</div>
            </div>
            <div class="card card-2">
                <div class="icon">🌐</div>
                <h3>Network Development</h3>
                <p>Creating a robust data network</p>
                <div class="tooltip">Developing and maintaining a reliable network for data collection and transmission.</div>
            </div>
            <div class="card card-3">
                <div class="icon">📡</div>
                <h3>Monitoring Stations</h3>
                <p>Deploying state-of-the-art monitoring stations</p>
                <div class="tooltip">Installing and managing advanced monitoring stations across various locations.</div>
            </div>
            <div class="card card-4">
                <div class="icon">📈</div>
                <h3>Research Support</h3>
                <p>Supporting climate change research</p>
                <div class="tooltip">Providing essential data and resources for climate change and environmental research.</div>
            </div>
            <div class="card card-5">
                <div class="icon">🔍</div>
                <h3>Data Analysis</h3>
                <p>Advanced data analysis techniques</p>
                <div class="tooltip">Utilizing cutting-edge techniques for detailed data analysis and interpretation.</div>
            </div>
            <div class="card card-6">
                <div class="icon">💡</div>
                <h3>Innovative Solutions</h3>
                <p>Developing innovative environmental solutions</p>
                <div class="tooltip">Creating innovative solutions to address environmental challenges.</div>
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
