<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Low Stock Management</title>
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
</head>
<body>
    <div class="h-screen p-6 ">
        <div class="mb-6 text-center">
            <img src="{{ asset('images/logo.png') }}" class="mx-auto w-32 h-auto">
        </div>

        <!-- Sidebar and Main Content -->
        <div class="flex">
            <!-- Sidebar -->
            <div class="w-64 bg-gray-800 text-white flex flex-col">
                <div class="p-4 text-center font-bold text-xl border-b border-gray-700">
                    Low Stock Management
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
                <div class="text-center mb-10">
                    <h1 class="text-4xl font-bold">Low Stock Management</h1>
                    <p class="text-gray-400 mt-2">Monitor and manage products with low stock levels.</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Low Stock Products</h2>
                    <table class="min-w-full bg-white border border-gray-200">
                        <thead class="table-header">
                            <tr>
                                <th class="px-4 py-2 border-b text-left font-bold">ID</th>
                                <th class="px-4 py-2 border-b text-left font-bold">Name</th>
                                <th class="px-4 py-2 border-b text-left font-bold">Stock</th>
                                <th class="px-4 py-2 border-b text-left font-bold">Supplier</th>
                                <th class="px-4 py-2 border-b text-left font-bold">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-4 py-2 border-b text-gray-700">1</td>
                                <td class="px-4 py-2 border-b text-gray-700">Intel Core i5</td>
                                <td class="px-4 py-2 border-b text-gray-700">5</td>
                                <td class="px-4 py-2 border-b text-gray-700">Supplier A</td>
                                <td class="px-4 py-2 border-b">
                                    <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Restock</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border-b text-gray-700">2</td>
                                <td class="px-4 py-2 border-b text-gray-700">Samsung 970 EVO</td>
                                <td class="px-4 py-2 border-b text-gray-700">2</td>
                                <td class="px-4 py-2 border-b text-gray-700">Supplier B</td>
                                <td class="px-4 py-2 border-b">
                                    <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Restock</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
