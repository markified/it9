<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white flex flex-col">
            <div class="p-4 text-center font-bold text-xl border-b border-gray-700">
                Dashboard
            </div>
            <nav class="flex-1 p-4">
                <ul>
                    <li class="mb-4">
                        <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">Home</a>
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
                <h1 class="text-4xl font-bold text-gray-800">Welcome to the Dashboard</h1>
                <p class="text-gray-600 mt-2">Manage your products, suppliers, and categories</p>
            </div>
            <!-- Products Section -->
            <div class="mb-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Products</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Product Card -->
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="/public/jas.jpg" alt="Product Image" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h2 class="text-lg font-bold text-gray-800">Product Name</h2>
                            <p class="text-gray-600 mt-2">This is a short description of the product.</p>
                            <div class="mt-4 flex justify-between items-center">
                                <span class="text-xl font-bold text-gray-800">$99.99</span>
                                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Edit</button>
                            </div>
                        </div>
                    </div>
                    <!-- Repeat Product Card -->
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="https://via.placeholder.com/300" alt="Product Image" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h2 class="text-lg font-bold text-gray-800">Product Name</h2>
                            <p class="text-gray-600 mt-2">This is a short description of the product.</p>
                            <div class="mt-4 flex justify-between items-center">
                                <span class="text-xl font-bold text-gray-800">$79.99</span>
                                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Edit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Categories Section -->
            <div class="mb-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Categories</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Category Card -->
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <div class="p-4">
                            <h2 class="text-lg font-bold text-gray-800">Category Name</h2>
                            <p class="text-gray-600 mt-2">This is a short description of the category.</p>
                            <div class="mt-4 flex justify-between items-center">
                                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Edit</button>
                            </div>
                        </div>
                    </div>
                    <!-- Repeat Category Card -->
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <div class="p-4">
                            <h2 class="text-lg font-bold text-gray-800">Category Name</h2>
                            <p class="text-gray-600 mt-2">This is a short description of the category.</p>
                            <div class="mt-4 flex justify-between items-center">
                                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Edit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>