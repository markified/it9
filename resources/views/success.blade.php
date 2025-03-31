<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2>Registration Successful</h2>

    @if ($userData)
        <div class="alert alert-success">
            <p><strong>Name:</strong> {{ $userData['name'] }}</p>
            <p><strong>Email:</strong> {{ $userData['email'] }}</p>
        </div>
    @else
        <p>No data available.</p>
    @endif

    <a href="{{ route('register.form') }}" class="btn btn-primary">Register Again</a>
</body>
</html>
