<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to left, #0f2027, #203a43, #2c5364); /* Horizontal gradient */
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

        <!-- Header -->
        <div class="mb-6 flex justify-between items-center">
            <h1 class="text-3xl font-bold">Welcome</h1>
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-32 h-auto">
        </div>

        <!-- Statistics Cards -->
        <div class="grid grid-cols-4 gap-4 mb-6">
            <div class="card p-4 rounded-lg text-center shadow">
                <p class="text-lg font-bold">Total Users</p>
            </div>
            <a href="{{ route('products.index') }}" class="card p-4 rounded-lg text-center shadow block">
                <p class="text-lg font-bold">Products</p>
            </a>
            <a href="{{ route('suppliers.index') }}" class="card p-4 rounded-lg text-center shadow block">
                <p class="text-lg font-bold">Active Suppliers</p>
            </a>
            <a href="{{ route('low-stock.index') }}" class="card p-4 rounded-lg text-center shadow block">
                <p class="text-lg font-bold">Low Stock Items</p>
            </a>
        </div>

        <!-- Today's Sales -->
        <div class="card p-4 rounded-lg text-center shadow mb-6">
            <p class="text-lg font-bold">Today's Sales</p>
        </div>

        <!-- Recent Activities and Low Stock Alert -->
        <div class="grid grid-cols-2 gap-4">
            <!-- Recent Activities -->
            <div class="card p-4 rounded-lg shadow">
                <h2 class="text-xl font-bold mb-4">Recent Activities</h2>
                <table class="w-full text-left">
                    <thead class="table-header">
                        <tr>
                            <th class="py-2">Date/Time</th>
                            <th class="py-2">Type</th>
                            <th class="py-2">User</th>
                            <th class="py-2">Product</th>
                            <th class="py-2">Quantity</th>
                        </tr>
                    </thead>
                    
                </table>
            </div>

            <!-- Low Stock Alert -->
            <div class="card p-4 rounded-lg shadow">
                <h2 class="text-xl font-bold mb-4">Low Stock Alert</h2>
                <table class="w-full text-left">
                    <thead class="table-header">
                        <tr>
                            <th class="py-2">Product</th>
                            <th class="py-2">Current Stock</th>
                            <th class="py-2">Status</th>
                        </tr>
                    </thead>
                   
                </table>
            </div>
        </div>
    </div>
</body>
</html>