<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppliers</title>
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
</head>
<body>
    <div class="h-screen p-6">
        <!-- Sidebar and Main Content -->
        <div class="flex">
            <!-- Sidebar -->
            <div class="w-64 bg-gray-800 text-white flex flex-col">
                <div class="p-4 text-center font-bold text-xl border-b border-gray-700">
                    Suppliers
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
                            <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">Suppliers</a>
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
                        <h1 class="text-4xl font-bold text-white-800">Suppliers</h1>
                        <img src="{{ asset('images/logo.png') }}" class=" w-32 h-auto">
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-2xl font-bold text-gray-800">Supplier List</h2>
                            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add</button>
                        </div>
                        <table class="min-w-full bg-white border border-gray-200">
                            <thead class="table-header">
                                <tr>
                                    <th class="px-4 py-2 border-b text-left text-white font-bold">ID</th>
                                    <th class="px-4 py-2 border-b text-left text-white font-bold">Name</th>
                                    <th class="px-4 py-2 border-b text-left text-white font-bold">Contact</th>
                                    <th class="px-4 py-2 border-b text-left text-white font-bold">Email</th>
                                    <th class="px-4 py-2 border-b text-left text-white font-bold">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="px-4 py-2 border-b text-gray-700">1</td>
                                    <td class="px-4 py-2 border-b text-gray-700">Supplier A</td>
                                    <td class="px-4 py-2 border-b text-gray-700">+1 234 567 890</td>
                                    <td class="px-4 py-2 border-b text-gray-700">supplierA@example.com</td>
                                    <td class="px-4 py-2 border-b">
                                        <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Edit</button>
                                        <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border-b text-gray-700">2</td>
                                    <td class="px-4 py-2 border-b text-gray-700">Supplier B</td>
                                    <td class="px-4 py-2 border-b text-gray-700">+1 987 654 321</td>
                                    <td class="px-4 py-2 border-b text-gray-700">supplierB@example.com</td>
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
</body>
</html>
