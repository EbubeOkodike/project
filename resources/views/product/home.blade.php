<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ URL::asset( 'css/style.css' ); }}">
</head>
<body>
    <h1>Home</h1>
    <div class="table-container" >
        <table>
            <th>Product Id</th>
            <th>Product Name</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Prices</th>
            <th>Created At</th>
            <th>Action</th>

            @foreach($rice as $ric)
            <tr>
                <td> {{ $ric->id }} </td>
                <td> {{ $ric->product_name }} </td>
                <td> {{ $ric->description }} </td>
                <td> {{ $ric->quantity }} </td>
                <td> {{ $ric->price }} </td>
                <td> {{ $ric->created_at }} </td>
                <td> <a href='{{ url('edit', $ric->id) }}'><button class="crud-button">Edit</button></a> <a href='{{ url('delete', $ric->id) }}'><button class="crud-button">Delete</button></a> </td> 
            </tr>
            @endforeach

        </table>
        <a href='create'><button class="view-button">Create</button></a>
    </div>
</body>
</html>