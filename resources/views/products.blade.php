<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Parts</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom, #0f2027, #203a43, #2c5364);
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
    <div class="h-screen p-6">
        <div class="mb-6 text-center">
            <img src="{{ asset('images/logo.png') }}" class="mx-auto w-32 h-auto">
        </div>

        <!-- Sidebar and Main Content -->
        <div class="flex">
            <!-- Sidebar -->
            <div class="w-64 bg-gray-800 text-white flex flex-col">
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
                    <div class="text-center mb-10">
                        <h1 class="text-4xl font-bold text-white-800">Computer Products</h1>
                    </div>
                    <div class="mb-6">
                        <ul class="flex space-x-4">
                            <li><a href="#" class="text-white hover:underline" onclick="toggleCategory('processors')">Processors</a></li>
                            <li><a href="#" class="text-white hover:underline" onclick="toggleCategory('graphics-cards')">Graphics Cards</a></li>
                            <li><a href="#" class="text-white hover:underline" onclick="toggleCategory('storage')">Storage</a></li>
                            <li><a href="#" class="text-white hover:underline" onclick="toggleCategory('motherboard')">Motherboard</a></li>
                            <li><a href="#" class="text-white hover:underline" onclick="toggleCategory('ram')">RAM</a></li>
                            <li><a href="#" class="text-white hover:underline" onclick="toggleCategory('power-supply')">Power Supply</a></li>
                            <li><a href="#" class="text-white hover:underline" onclick="toggleCategory('fans')">Fans</a></li>
                            <li><a href="#" class="text-white hover:underline" onclick="toggleCategory('monitors')">Monitors</a></li>
                            <li><a href="#" class="text-white hover:underline" onclick="toggleCategory('case')">Case</a></li>
                            <li><a href="#" class="text-white hover:underline" onclick="toggleCategory('mouse-keyboards')">Mouse and Keyboards</a></li>
                            <li><a href="#" class="text-white hover:underline" onclick="toggleCategory('others')">Others</a></li>
                        </ul>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-6">
                        <div id="processors" class="category">
                            <h2 class="text-2xl font-bold text-gray-800 mb-4">Processors</h2>
                            <table class="min-w-full bg-white border border-gray-200">
                                <thead class="table-header">
                                    <tr>
                                        <th class="px-4 py-2 border-b text-left font-bold">ID</th>
                                        <th class="px-4 py-2 border-b text-left font-bold">Name</th>
                                        <th class="px-4 py-2 border-b text-left font-bold">Description</th>
                                        <th class="px-4 py-2 border-b text-left font-bold">Price</th>
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
                            <h2 class="text-2xl font-bold text-gray-800 mb-4">Graphics Cards</h2>
                            <table class="min-w-full bg-white border border-gray-200">
                                <thead class="table-header">
                                    <tr>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">ID</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Name</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Description</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Price</th>
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
                            <h2 class="text-2xl font-bold text-gray-800 mb-4">Storage</h2>
                            <table class="min-w-full bg-white border border-gray-200">
                                <thead class="table-header">
                                    <tr>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">ID</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Name</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Description</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Price</th>
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
                            <h2 class="text-2xl font-bold text-gray-800 mb-4">Motherboard</h2>
                            <table class="min-w-full bg-white border border-gray-200">
                                <thead class="table-header">
                                    <tr>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">ID</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Name</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Description</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Price</th>
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
                            <h2 class="text-2xl font-bold text-gray-800 mb-4">RAM</h2>
                            <table class="min-w-full bg-white border border-gray-200">
                                <thead class="table-header">
                                    <tr>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">ID</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Name</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Description</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Price</th>
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
                            <h2 class="text-2xl font-bold text-gray-800 mb-4">Power Supply</h2>
                            <table class="min-w-full bg-white border border-gray-200">
                                <thead class="table-header">
                                    <tr>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">ID</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Name</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Description</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Price</th>
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
                            <h2 class="text-2xl font-bold text-gray-800 mb-4">Fans</h2>
                            <table class="min-w-full bg-white border border-gray-200">
                                <thead class="table-header">
                                    <tr>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">ID</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Name</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Description</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Price</th>
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
                            <h2 class="text-2xl font-bold text-gray-800 mb-4">Monitors</h2>
                            <table class="min-w-full bg-white border border-gray-200">
                                <thead class="table-header">
                                    <tr>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">ID</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Name</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Description</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Price</th>
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
                            <h2 class="text-2xl font-bold text-gray-800 mb-4">Case</h2>
                            <table class="min-w-full bg-white border border-gray-200">
                                <thead class="table-header">
                                    <tr>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">ID</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Name</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Description</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Price</th>
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
                            <h2 class="text-2xl font-bold text-gray-800 mb-4">Mouse and Keyboards</h2>
                            <table class="min-w-full bg-white border border-gray-200">
                                <thead class="table-header">
                                    <tr>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">ID</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Name</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Description</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Price</th>
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
                            <h2 class="text-2xl font-bold text-gray-800 mb-4">Others</h2>
                            <table class="min-w-full bg-white border border-gray-200">
                                <thead class="table-header">
                                    <tr>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">ID</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Name</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Description</th>
                                        <th class="px-4 py-2 border-b text-left text-white font-bold">Price</th>
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
                                        <td class="px-4 py-2 border-b text-gray-700">Supplier K</td>
                                        <td class="px-4 py-2 border-b">
                                            <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Edit</button>
                                            <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
