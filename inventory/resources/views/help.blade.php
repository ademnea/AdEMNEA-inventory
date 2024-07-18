<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Center - ADemnea</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.1.4/dist/tailwind.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</head>
    <style>
        .accordion .card {
            border: none;
            border-radius: 0.5rem;
            overflow: hidden;
            margin-bottom: 1rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .accordion .card-header {
            background-color: #047857; /* Green theme color */
            color: #fff;
            cursor: pointer;
        }
        .accordion .card-body {
            background-color: #f9fafb;
        }
        .icon {
            width: 1.5rem;
            height: 1.5rem;
            margin-right: 0.5rem;
        }
    </style>
</head>
<body class="bg-gray-100">
<header>
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-1.5 light:bg-gray-800">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <span class="self-center text-lg lg:text-xl font-semibold whitespace-nowrap light:text-white">AdEMNEA-INVENTORY</span>
        
            <div class="flex items-center lg:order-2">
                <a href="/inventory/login" class="text-gray-800 light:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 mr-2 light:hover:bg-gray-700 focus:outline-none light:focus:ring-gray-800">Login</a>
                <a href="#" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 mr-2 light:bg-green-600 light:hover:bg-green-700 focus:outline-none light:focus:ring-green-800">Get started</a>
                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 light:text-gray-400 light:hover:bg-gray-700 light:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>

            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-2 font-medium lg:flex-row lg:space-x-6 lg:mt-0">
                    <li>
                        <a href="/inventory/" class="block py-1.5 px-3 text-gray-700 rounded bg-green-700 lg:bg-transparent lg:text-green-700 lg:p-0 light:text-white">Home</a>
                    </li>
                     <li>
                        <a href="/inventory/components" class="block py-1.5 px-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-700 lg:p-0 light:text-gray-400 lg:light:hover:text-white light:hover:bg-gray-700 light:hover:text-white lg:light:hover:bg-transparent light:border-gray-700">Components</a>
                    </li>
                    <li>
                        <a href="/inventory/help" class="block py-1.5 px-3 text-gray-700 rounded bg-green-700 lg:bg-transparent lg:text-green-700 lg:p-0 light:text-white">Help</a>
                    </li>
                    <li>
                        <a href="/inventory/about" class="block py-1.5 px-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-700 lg:p-0 light:text-gray-400 lg:light:hover:text-white light:hover:bg-gray-700 light:hover:text-white lg:light:hover:bg-transparent light:border-gray-700">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>


    <div class="container mx-auto p-8">
        <h1 class="text-4xl font-bold mb-6 text-center text-green-600">Help Center</h1>
        <p class="text-center text-lg mb-6">Hi, how can we help you?</p>
        <div class="relative mt-4 mb-6">
            <input id="searchInput" type="text" class="w-full p-3 pl-11 bg-white border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-600" placeholder="     Search...">
            <div id="searchIcon" class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m2.02-5.97A7.97 7.97 0 1116.8 4.78a7.97 7.97 0 012.02 5.97z"></path>
            </svg>
        </div>
        </div>
        <h1 id="faq" class="text-3xl font-bold text-center mb-8">Frequently Asked Questions Categories </h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <a href="#headingUsers" >
            <div class="card bg-green-900 text-black hover:bg-green-600 hover:shadow-lg transition-transform duration-300 ease-in-out" onclick="toggleCollapse('collapseUsers')">
                <div class="card-header p-4 text-center">
                    <h2 class="text-xl font-semibold">
                        Users
                    </h2>
                </div>
            </div>
        </a>
        <a href="#headingConsignments">
            <div class="card bg-green-900 text-black hover:bg-green-600 hover:shadow-lg transition-transform duration-300 ease-in-out" onclick="toggleCollapse('collapseConsignments')">
                <div class="card-header p-4 text-center">
                    <h2 class="text-xl font-semibold">Consignments</h2>
                </div>
            </div>
        </a>

        <a href="#headingCompartments">
            <div class="card bg-green-900 text-black hover:bg-green-600 hover:shadow-lg transition-transform duration-300 ease-in-out" onclick="toggleCollapse('collapseCompartments')">
                <div class="card-header p-4 text-center">
                    <h2 class="text-xl font-semibold">Compartments</h2>
                </div>
            </div>
        </a>

        <a href="#headingCategories">
            <div class="card bg-green-900 text-black hover:bg-green-600 hover:shadow-lg transition-transform duration-300 ease-in-out" onclick="toggleCollapse('collapseCategories')">
                <div class="card-header p-4 text-center">
                    <h2 class="text-xl font-semibold">Categories</h2>
                </div>
            </div>
        </a>

        <a href="#headingLabItems">
            <div class="card bg-green-900 text-black hover:bg-green-600 hover:shadow-lg transition-transform duration-300 ease-in-out" onclick="toggleCollapse('collapseLabItems')">
                <div class="card-header p-4 text-center">
                    <h2 class="text-xl font-semibold">Lab Items</h2>
                </div>
            </div>
        </a>

        <a href="#headingBorrowing">
            <div class="card bg-green-900 text-black hover:bg-green-600 hover:shadow-lg transition-transform duration-300 ease-in-out" onclick="toggleCollapse('collapseBorrowing')">
                <div class="card-header p-4 text-center">
                    <h2 class="text-xl font-semibold">Borrowing</h2>
                </div>
            </div>
        </a>

        <a href="#headingOrders">
            <div class="card bg-green-900 text-black hover:bg-green-600 hover:shadow-lg transition-transform duration-300 ease-in-out" onclick="toggleCollapse('collapseOrders')">
                <div class="card-header p-4 text-center">
                    <h2 class="text-xl font-semibold">Orders</h2>
                </div>
            </div>
        </a>

        <a href="#headingReports">
            <div class="card bg-green-900 text-black hover:bg-green-600 hover:shadow-lg transition-transform duration-300 ease-in-out" onclick="toggleCollapse('collapseReports')">
                <div class="card-header p-4 text-center">
                    <h2 class="text-xl font-semibold">Reports</h2>
                </div>
            </div>
        </a>

        <a href="#headingVendors">
            <div class="card bg-green-900 text-black hover:bg-green-600 hover:shadow-lg transition-transform duration-300 ease-in-out" onclick="toggleCollapse('collapseVendors')">
                <div class="card-header p-4 text-center">
                    <h2 class="text-xl font-semibold">Vendors</h2>
                </div>
            </div>
        </a>

        </div>
        <h1 id="faqHeading" class="text-3xl font-bold text-center mb-8">Frequently Asked Questions </h1>

        <div class="accordion" id="helpAccordion">
        <div class="card">
            <div class="card-header p-4" id="headingUsers" data-toggle="collapse" data-target="#collapseUsers" >
                <h2 class="mb-0 text-xl font-semibold text-center">
                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 white-500 transition duration-75 dark:white-400 group-hover:black-900 dark:group-hover:text-dark" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                Users
                </h2>
            </div>
            <div id="collapseUsers" class="collapse" aria-labelledby="headingUsers" data-parent="#helpAccordion">
                <div class="card-body p-6">
                    <h5 class="font-bold text-lg">How do I manage user accounts?</h5>
                    <p class="mb-4 text-gray-700">To manage user accounts, go to the 'Users' section in the navigation menu. Here, you can add, edit, or delete user accounts, and assign roles and permissions.</p>
                    <h5 class="font-bold text-lg">How do I reset a user's password?</h5>
                    <p class="mb-4 text-gray-700">To reset a user's password, select the user account and click on 'Reset Password'. An email with a password reset link will be sent to the user.</p>
                </div>
            </div>
        </div>
            <div class="card">
                <div class="card-header p-4" id="headingConsignments" data-toggle="collapse" data-target="#collapseConsignments">
                    <h2 class="text-xl font-semibold text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                    </svg>Consignments
                    </h2>
                </div>
                <div id="collapseConsignments" class="collapse" aria-labelledby="headingConsignments" data-parent="#helpAccordion">
                    <div class="card-body p-6">
                        <h5 class="font-bold text-lg">What are consignments?</h5>
                        <p class="mb-4 text-gray-700">Consignments refer to batches of inventory items received from vendors. Each consignment is assigned a unique identifier for tracking and management purposes.</p>
                        <h5 class="font-bold text-lg">How do I add a new consignment?</h5>
                        <p class="mb-4 text-gray-700">To add a new consignment, go to the 'Consignments' section and click on 'Add New Consignment'. Fill in the required details such as vendor information, items received, and quantities.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header p-4" id="headingCompartments" data-toggle="collapse" data-target="#collapseCompartments">
                    <h2 class="text-xl font-semibold text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m8.25 3v6.75m0 0l-3-3m3 3l3-3M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                    </svg>Compartments
                    </h2>
                </div>
                <div id="collapseCompartments" class="collapse" aria-labelledby="headingCompartments" data-parent="#helpAccordion">
                    <div class="card-body p-6">
                        <h5 class="font-bold text-lg">What are compartments?</h5>
                        <p class="mb-4 text-gray-700">Compartments are designated storage locations within the inventory system. Each compartment can hold multiple items, and they help in organizing and managing inventory efficiently.</p>
                        <h5 class="font-bold text-lg">How do I assign items to compartments?</h5>
                        <p class="mb-4 text-gray-700">To assign items to compartments, go to the 'Compartments' section, select the desired compartment, and add items by selecting them from the list of available inventory.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header p-4" id="headingCategories" data-toggle="collapse" data-target="#collapseCategories">
                    <h2 class="text-xl font-semibold text-center">
                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 white-500 transition duration-75 dark:white-400 group-hover:black-900 dark:group-hover:text-dark" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path></svg>
                    Categories
                    </h2>
                </div>
                <div id="collapseCategories" class="collapse" aria-labelledby="headingCategories" data-parent="#helpAccordion">
                    <div class="card-body p-6">
                        <h5 class="font-bold text-lg">How do I create and manage categories?</h5>
                        <p class="mb-4 text-gray-700">To create and manage categories, navigate to the 'Categories' section. Here, you can add new categories, edit existing ones, and delete categories that are no longer needed. Categories help in organizing your inventory items.</p>
                        <h5 class="font-bold text-lg">Can I assign multiple items to a category?</h5>
                        <p class="mb-4 text-gray-700">Yes, you can assign multiple items to a single category. This helps in grouping similar items together for easier management and tracking.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header p-4" id="headingLabItems" data-toggle="collapse" data-target="#collapseLabItems">
                    <h2 class="text-xl font-semibold text-center">
                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 white-500 transition duration-75 dark:white-400 group-hover:black-900 dark:group-hover:text-dark" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                    Lab Items
                    </h2>
                </div>
                <div id="collapseLabItems" class="collapse" aria-labelledby="headingLabItems" data-parent="#helpAccordion">
                    <div class="card-body p-6">
                        <h5 class="font-bold text-lg">What are lab items?</h5>
                        <p class="mb-4 text-gray-700">Lab items are specialized inventory items used in laboratory settings. These may include scientific instruments, chemicals, and other lab equipment.</p>
                        <h5 class="font-bold text-lg">How do I track lab items?</h5>
                        <p class="mb-4 text-gray-700">To track lab items, go to the 'Lab Items' section. Here, you can view the list of all lab items, their current status, and location. You can also update their status and assign them to different compartments.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header p-4" id="headingBorrowing" data-toggle="collapse" data-target="#collapseBorrowing">
                    <h2 class="text-xl font-semibold text-center">
                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 white-500 transition duration-75 dark:white-400 group-hover:black-900 dark:group-hover:text-dark" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path></svg>
                    Borrowing
                    </h2>
                </div>
                <div id="collapseBorrowing" class="collapse" aria-labelledby="headingBorrowing" data-parent="#helpAccordion">
                    <div class="card-body p-6">
                        <h5 class="font-bold text-lg">How do I borrow items from the inventory?</h5>
                        <p class="mb-4 text-gray-700">To borrow items, navigate to the 'Borrowing' section. Select the items you wish to borrow, specify the borrowing duration, and submit the request. An admin will review and approve the borrowing request.</p>
                        <h5 class="font-bold text-lg">How do I return borrowed items?</h5>
                        <p class="mb-4 text-gray-700">To return borrowed items, go to the 'Borrowing' section, find the item in the 'Open Borrowings' list, and click on 'Return'. The item will be marked as returned, and its status will be updated in the inventory.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header p-4" id="headingOrders" data-toggle="collapse" data-target="#collapseOrders">
                    <h2 class="text-xl font-semibold text-center">
                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 white-500 transition duration-75 dark:white-400 group-hover:black-900 dark:group-hover:text-dark" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path></svg>
                    Orders
                    </h2>
                </div>
                <div id="collapseOrders" class="collapse" aria-labelledby="headingOrders" data-parent="#helpAccordion">
                    <div class="card-body p-6">
                        <h5 class="font-bold text-lg">How do I place an order for new inventory items?</h5>
                        <p class="mb-4 text-gray-700">To place an order for new inventory items, go to the 'Orders' section and click on 'New Order'. Select the items you need, specify quantities, and submit the order. The order will be reviewed and processed by an admin.</p>
                        <h5 class="font-bold text-lg">How do I track the status of my orders?</h5>
                        <p class="mb-4 text-gray-700">To track the status of your orders, go to the 'Orders' section. You can view the list of all your orders and their current status, such as pending, approved, or delivered.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header p-4" id="headingReports" data-toggle="collapse" data-target="#collapseReports">
                    <h2 class="text-xl font-semibold text-center">
                    <svg aria-hidden="true" class="w-6 h-6 white-500 transition duration-75 dark:white-400 group-hover:black-900 dark:group-hover:text-dark" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                    Reports
                    </h2>
                </div>
                <div id="collapseReports" class="collapse" aria-labelledby="headingReports" data-parent="#helpAccordion">
                    <div class="card-body p-6">
                        <h5 class="font-bold text-lg">What types of reports can I generate?</h5>
                        <p class="mb-4 text-gray-700">You can generate various types of reports such as inventory status, borrowing history, order history, and vendor performance. These reports help in analyzing and managing your inventory effectively.</p>
                        <h5 class="font-bold text-lg">How do I customize report formats?</h5>
                        <p class="mb-4 text-gray-700">To customize report formats, go to the 'Reports' section, select the report you want to customize, and use the available tools to adjust the layout, data fields, and filters according to your needs.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header p-4" id="headingVendors" data-toggle="collapse" data-target="#collapseVendors">
                    <h2 class="text-xl font-semibold text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z" />
                    </svg>
                    Vendors
                    </h2>
                </div>
                <div id="collapseVendors" class="collapse" aria-labelledby="headingVendors" data-parent="#helpAccordion">
                    <div class="card-body p-6">
                        <h5 class="font-bold text-lg">How do I add new vendors?</h5>
                        <p class="mb-4 text-gray-700">To add new vendors, go to the 'Vendors' section and click on 'Add New Vendor'. Fill in the vendor's details such as name, contact information, and products supplied.</p>
                        <h5 class="font-bold text-lg">How do I manage existing vendors?</h5>
                        <p class="mb-4 text-gray-700">To manage existing vendors, go to the 'Vendors' section. Here, you can edit vendor details, view their performance, and manage their associated consignments and orders.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header p-4" id="headingMoreDetails" data-toggle="collapse" data-target="#collapseMoreDetails">
                    <h2 class="text-xl font-semibold text-center">
                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 white-500 transition duration-75 dark:white-400 group-hover:black-900 dark:group-hover:text-dark" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path></svg>
                    More Details
                    </h2>
                </div>
                <div id="collapseMoreDetails" class="collapse" aria-labelledby="headingMoreDetails" data-parent="#helpAccordion">
                    <div class="card-body p-6">
                        <h5 class="font-bold text-lg">Where can I find more details about ADemnea?</h5>
                        <p class="mb-4 text-gray-700">For more details about ADemnea, visit the 'Info & Manual' section. This section contains comprehensive information about the system's features, usage guidelines, and best practices.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function toggleCollapse(collapseId) {
            var element = document.getElementById(collapseId);
            if (element.classList.contains('collapse')) {
                element.classList.remove('collapse');
            } else {
                element.classList.add('collapse');
            }
        }
        document.getElementById('searchInput').addEventListener('input', function() {
            var searchIcon = document.getElementById('searchIcon');
            var filter = this.value.toLowerCase();
            var cards = document.querySelectorAll('.card');
            const faqHeading = document.getElementById('faqHeading');
            const faqCategoriesHeading = document.getElementById('faq');

            // Show or hide the search icon
            if (this.value.length > 0) {
                searchIcon.classList.add('hidden');
                faqHeading.style.display = 'none';
                faq.style.display = 'none';

            } else {
                searchIcon.classList.remove('hidden');
                faqHeading.style.display = 'block';
                faq.style.display = 'block';

            }

            var keywords = filter.split(' ').filter(word => word.length > 2); // Split the input into keywords
    
    cards.forEach(function(card) {
        var cardTitle = card.querySelector('h2').textContent.toLowerCase();
        var showCard = false;

        // Check if any keyword matches the card title
        keywords.forEach(function(keyword) {
            if (cardTitle.includes(keyword)) {
                showCard = true;
            }
        });

        // Display or hide the card based on the keyword match
        if (showCard) {
            card.style.display = '';
        } else {
            card.style.display = 'none';
        }
    });
    if (filter === '') {
        cards.forEach(function(card) {
            card.style.display = ''; // Display all cards when input is cleared
        });
    }

    
});
    </script>
    </body>
