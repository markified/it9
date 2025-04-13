<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Parts</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to left, #0f2027, #203a43, #2c5364);
            color: #ffffff;
        }
        .card {
            background-color: #1e293b;
            color: #ffffff; 
        }
        .table-header {
            background-color: #0f2027;
            color: #ffffff;  
        }
    </style>
    <script>
        function toggleCategory(category) {
            document.querySelectorAll('.category').forEach(el => el.classList.add('hidden'));
            document.getElementById(category).classList.remove('hidden');
        }
    </script>
</head>
<body>
    <div class="h-screen ">

        <!-- Sidebar and Main Content -->
        <div class="flex">
            <!-- Sidebar -->
            <div class="w-64 bg-gray-800 text-white flex flex-col h-screen">
                <div class="p-4 text-center font-bold text-xl border-b border-gray-700">
                    Products
                </div>
                <nav class="flex-1 p-4">
                    <ul>
                        <li class="mb-4">
                            <a href="{{ url('/') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Dashboard</a>
                        </li>
                        <li class="mb-4">
                            <a href="{{ url('/products') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Products</a>
                        </li>
                        <li class="mb-4">
                            <a href="{{ url('/suppliers') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Suppliers</a>
                        </li>
                        <li class="mb-4">
                            <a href="{{ url('/low-stock') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Low Stock</a>
                        </li>
                        <li class="mb-4">
                            <a href="{{ url('/purchase-orders') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Purchase Orders</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Main Content -->
            <div class="flex-1 p-6">
                <div class="container mx-auto py-10">
                    <div class="flex justify-between items-end mb-10">
                        <h1 class="text-4xl font-bold text-white-800">Computer Products</h1>
                        <img src="{{ asset('images/logo.png') }}" class="w-32 h-auto">
                    </div>
                    <div class="mb-6">
                        <select onchange="toggleCategory(this.value)" class="bg-gray-800 text-white px-4 py-2 rounded">
                            <option value="" disabled selected>Select a Category</option>
                            <option value="processors">Processors</option>
                            <option value="graphics-cards">Graphics Cards</option>
                            <option value="storage">Storage</option>
                            <option value="motherboard">Motherboard</option>
                            <option value="ram">RAM</option>
                            <option value="power-supply">Power Supply</option>
                            <option value="fans">Fans</option>
                            <option value="monitors">Monitors</option>
                            <option value="case">Case</option>
                            <option value="mouse-keyboards">Mouse and Keyboards</option>
                            <option value="others">Accessories</option>
                        </select>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-6">
                        <div id="processors" class="category">
                            <div class="flex justify-between items-center mb-4">
                                <h2 class="text-2xl font-bold text-gray-800">Processors</h2>
                                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add</button>
                            </div>
                            <table class="min-w-full bg-white border border-gray-200">
                                <thead class="table-header">
                                    <tr>
                                        <th class="px-4 py-2 border-b text-left font-bold">ID</th>
                                        <th class="px-4 py-2 border-b text-left font-bold">Name</th>
                                        <th class="px-4 py-2 border-b text-left font-bold">Description</th>
                                        <th class="px-4 py-2 border-b text-left font-bold">Price</th>
                                        <th class="px-4 py-2 border-b text-left font-bold">Quantity</th>
                                        <th class="px-4 py-2 border-b text-left font-bold">Supplier</th>
                                        <th class="px-4 py-2 border-b text-left font-bold">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="px-4 py-2 border-b text-gray-700">1</td>
                                        <td class="px-4 py-2 border-b text-gray-700">Intel Core i9</td>
                                        <td class="px-4 py-2 border-b text-gray-700">12 Cores, 24 Threads</td>
                                        <td class="px-4 py-2 border-b text-gray-700">$499.99</td>
                                        <td class="px-4 py-2 border-b text-gray-700">50</td>
                                        <td class="px-4 py-2 border-b text-gray-700">Supplier A</td>
                                        <td class="px-4 py-2 border-b">
                                            <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Edit</button>
                                            <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="graphics-cards" class="category hidden">
                            <div class="flex justify-between items-center mb-4">
                                <h2 class="text-2xl font-bold text-gray-800">Graphics Cards</h2>
                                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add</button>
                            </div>
                            <table class="min-w-full bg-white border border-gray-200">
                                <thead class="table-header">
                                    <tr>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">ID</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Name</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Description</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Price</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Quantity</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Supplier</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="px-4 py-2 border-b text-gray-700">1</td>
                                        <td class="px-4 py-2 border-b text-gray-700">NVIDIA RTX 4090</td>
                                        <td class="px-4 py-2 border-b text-gray-700">24GB GDDR6X</td>
                                        <td class="px-4 py-2 border-b text-gray-700">$1599.99</td>
                                        <td class="px-4 py-2 border-b text-gray-700">20</td>
                                        <td class="px-4 py-2 border-b text-gray-700">Supplier B</td>
                                        <td class="px-4 py-2 border-b">
                                            <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Edit</button>
                                            <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="storage" class="category hidden">
                            <div class="flex justify-between items-center mb-4">
                                <h2 class="text-2xl font-bold text-gray-800">Storage</h2>
                                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add</button>
                            </div>
                            <table class="min-w-full bg-white border border-gray-200">
                                <thead class="table-header">
                                    <tr>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">ID</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Name</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Description</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Price</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Quantity</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Supplier</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="px-4 py-2 border-b text-gray-700">1</td>
                                        <td class="px-4 py-2 border-b text-gray-700">Samsung 980 Pro</td>
                                        <td class="px-4 py-2 border-b text-gray-700">2TB NVMe SSD</td>
                                        <td class="px-4 py-2 border-b text-gray-700">$249.99</td>
                                        <td class="px-4 py-2 border-b text-gray-700">30</td>
                                        <td class="px-4 py-2 border-b text-gray-700">Supplier C</td>
                                        <td class="px-4 py-2 border-b">
                                            <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Edit</button>
                                            <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="motherboard" class="category hidden">
                            <div class="flex justify-between items-center mb-4">
                                <h2 class="text-2xl font-bold text-gray-800">Motherboard</h2>
                                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add</button>
                            </div>
                            <table class="min-w-full bg-white border border-gray-200">
                                <thead class="table-header">
                                    <tr>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">ID</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Name</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Description</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Price</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Quantity</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Supplier</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="px-4 py-2 border-b text-gray-700">1</td>
                                        <td class="px-4 py-2 border-b text-gray-700">ASUS ROG Maximus XIII</td>
                                        <td class="px-4 py-2 border-b text-gray-700">Intel Z590 Chipset</td>
                                        <td class="px-4 py-2 border-b text-gray-700">$399.99</td>
                                        <td class="px-4 py-2 border-b text-gray-700">15</td>
                                        <td class="px-4 py-2 border-b text-gray-700">Supplier D</td>
                                        <td class="px-4 py-2 border-b">
                                            <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Edit</button>
                                            <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="ram" class="category hidden">
                            <div class="flex justify-between items-center mb-4">
                                <h2 class="text-2xl font-bold text-gray-800">RAM</h2>
                                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add</button>
                            </div>
                            <table class="min-w-full bg-white border border-gray-200">
                                <thead class="table-header">
                                    <tr>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">ID</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Name</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Description</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Price</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Quantity</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Supplier</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="px-4 py-2 border-b text-gray-700">1</td>
                                        <td class="px-4 py-2 border-b text-gray-700">Corsair Vengeance LPX</td>
                                        <td class="px-4 py-2 border-b text-gray-700">16GB DDR4 3200MHz</td>
                                        <td class="px-4 py-2 border-b text-gray-700">$89.99</td>
                                        <td class="px-4 py-2 border-b text-gray-700">40</td>
                                        <td class="px-4 py-2 border-b text-gray-700">Supplier E</td>
                                        <td class="px-4 py-2 border-b">
                                            <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Edit</button>
                                            <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="power-supply" class="category hidden">
                            <div class="flex justify-between items-center mb-4">
                                <h2 class="text-2xl font-bold text-gray-800">Power Supply</h2>
                                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add</button>
                            </div>
                            <table class="min-w-full bg-white border border-gray-200">
                                <thead class="table-header">
                                    <tr>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">ID</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Name</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Description</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Price</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Quantity</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Supplier</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="px-4 py-2 border-b text-gray-700">1</td>
                                        <td class="px-4 py-2 border-b text-gray-700">EVGA SuperNOVA 850 G5</td>
                                        <td class="px-4 py-2 border-b text-gray-700">850W Fully Modular</td>
                                        <td class="px-4 py-2 border-b text-gray-700">$139.99</td>
                                        <td class="px-4 py-2 border-b text-gray-700">25</td>
                                        <td class="px-4 py-2 border-b text-gray-700">Supplier F</td>
                                        <td class="px-4 py-2 border-b">
                                            <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Edit</button>
                                            <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="fans" class="category hidden">
                            <div class="flex justify-between items-center mb-4">
                                <h2 class="text-2xl font-bold text-gray-800">Fans</h2>
                                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add</button>
                            </div>
                            <table class="min-w-full bg-white border border-gray-200">
                                <thead class="table-header">
                                    <tr>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">ID</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Name</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Description</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Price</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Quantity</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Supplier</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="px-4 py-2 border-b text-gray-700">1</td>
                                        <td class="px-4 py-2 border-b text-gray-700">Noctua NF-A12x25</td>
                                        <td class="px-4 py-2 border-b text-gray-700">120mm Premium Fan</td>
                                        <td class="px-4 py-2 border-b text-gray-700">$29.99</td>
                                        <td class="px-4 py-2 border-b text-gray-700">60</td>
                                        <td class="px-4 py-2 border-b text-gray-700">Supplier G</td>
                                        <td class="px-4 py-2 border-b">
                                            <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Edit</button>
                                            <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="monitors" class="category hidden">
                            <div class="flex justify-between items-center mb-4">
                                <h2 class="text-2xl font-bold text-gray-800">Monitors</h2>
                                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add</button>
                            </div>
                            <table class="min-w-full bg-white border border-gray-200">
                                <thead class="table-header">
                                    <tr>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">ID</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Name</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Description</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Price</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Quantity</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Supplier</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="px-4 py-2 border-b text-gray-700">1</td>
                                        <td class="px-4 py-2 border-b text-gray-700">Dell UltraSharp U2723QE</td>
                                        <td class="px-4 py-2 border-b text-gray-700">27" 4K UHD Monitor</td>
                                        <td class="px-4 py-2 border-b text-gray-700">$699.99</td>
                                        <td class="px-4 py-2 border-b text-gray-700">10</td>
                                        <td class="px-4 py-2 border-b text-gray-700">Supplier H</td>
                                        <td class="px-4 py-2 border-b">
                                            <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Edit</button>
                                            <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="case" class="category hidden">
                            <div class="flex justify-between items-center mb-4">
                                <h2 class="text-2xl font-bold text-gray-800">Case</h2>
                                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add</button>
                            </div>
                            <table class="min-w-full bg-white border border-gray-200">
                                <thead class="table-header">
                                    <tr>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">ID</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Name</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Description</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Price</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Quantity</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Supplier</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="px-4 py-2 border-b text-gray-700">1</td>
                                        <td class="px-4 py-2 border-b text-gray-700">NZXT H510</td>
                                        <td class="px-4 py-2 border-b text-gray-700">Mid-Tower ATX Case</td>
                                        <td class="px-4 py-2 border-b text-gray-700">$79.99</td>
                                        <td class="px-4 py-2 border-b text-gray-700">35</td>
                                        <td class="px-4 py-2 border-b text-gray-700">Supplier I</td>
                                        <td class="px-4 py-2 border-b">
                                            <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Edit</button>
                                            <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="mouse-keyboards" class="category hidden">
                            <div class="flex justify-between items-center mb-4">
                                <h2 class="text-2xl font-bold text-gray-800">Mouse and Keyboards</h2>
                                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add</button>
                            </div>
                            <table class="min-w-full bg-white border border-gray-200">
                                <thead class="table-header">
                                    <tr>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">ID</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Name</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Description</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Price</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Quantity</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Supplier</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="px-4 py-2 border-b text-gray-700">1</td>
                                        <td class="px-4 py-2 border-b text-gray-700">Logitech MX Master 3</td>
                                        <td class="px-4 py-2 border-b text-gray-700">Wireless Mouse</td>
                                        <td class="px-4 py-2 border-b text-gray-700">$99.99</td>
                                        <td class="px-4 py-2 border-b text-gray-700">45</td>
                                        <td class="px-4 py-2 border-b text-gray-700">Supplier J</td>
                                        <td class="px-4 py-2 border-b">
                                            <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Edit</button>
                                            <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="others" class="category hidden">
                            <div class="flex justify-between items-center mb-4">
                                <h2 class="text-2xl font-bold text-gray-800">Accessories</h2>
                                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add</button>
                            </div>
                            <table class="min-w-full bg-white border border-gray-200">
                                <thead class="table-header">
                                    <tr>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">ID</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Name</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Description</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Price</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Quantity</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Supplier</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="px-4 py-2 border-b text-gray-700">1</td>
                                        <td class="px-4 py-2 border-b text-gray-700">Elgato Stream Deck</td>
                                        <td class="px-4 py-2 border-b text-gray-700">15 Customizable Keys</td>
                                        <td class="px-4 py-2 border-b text-gray-700">$149.99</td>
                                        <td class="px-4 py-2 border-b text-gray-700">5</td>
                                        <td class="px-4 py-2 border-b text-gray-700">Supplier K</td>
                                        <td class="px-4 py-2 border-b">
                                            <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Edit</button>
                                            <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
