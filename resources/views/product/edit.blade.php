<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="{{ URL::asset( 'css/style.css' ); }}">
</head>
<body>
    <h1>Update {{ $product->id }} </h2>

    @if ($errors->any())
        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>
    @endif

    <div class="form-container">
        <form method="POST" autocomplete="on" autocapitalize="on" action="{{ url('update', $product->id); }}">

            @csrf
            <label class="form-label" for='product_name'>Product Name:</label><br> <!--Email Field-->
            <input class="form-input" type="text" name="product_name" id="product_name" placeholder="product name" value="{{$product->product_name}}"><br><br>

            <label class="form-label" for="description">Description:</label><br> <!--Password Field-->
            <input class="form-input" type="text" name="description" id="description" placeholder="description" value="{{$product->description}}"><br><br>

            <label class="form-label" for="quantity">Quantity:</label><br> <!--Password Field-->
            <input class="form-input" type="number" name="quantity" id="quantity" placeholder="quantity" value="{{$product->quantity}}"><br><br>

            <label class="form-label" for="price">Price:</label><br> <!--Password Field-->
            <input class="form-input" type="float" name="price" id="price" placeholder="costs how much" value="{{$product->price}}"><br><br>

            <input class="view-button div-button" id="Submit" type="submit" value="Update" > <!--"Update" Button-->
    
        </form>
    </div>

</body>
</html>