<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Product Example</title>
</head>
<body>
    <h1>Product List</h1>

    <!-- Filter Form -->
    <form action="{{ url('/index') }}" method="GET">
        <label for="name">Filter by Name:</label>
        <input type="text" name="name" id="name" value="{{ request('name') }}">
        <button type="submit">Filter</button>
    </form>

    <!-- Product Table -->
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
