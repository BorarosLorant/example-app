<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit product</h1>
    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <il>{{$error}}</il>
                @endforeach
            </ul>
        @endif
    </div>
    <form  method="post" action="{{route('product.update',['product'=>$product])}}">
        @csrf
        @method('put')
        <div>
            <label for="">Name</label>
                <input type="text" name="name" placeholder="name" value="{{$product->name}}">
        </div>
        <div>
            <label for="">Quantity</label>
            <input type="text" name="quantity" placeholder="quantity" value="{{$product->quantity}}">
        </div>
        <div>
            <label for="">Price</label>
            <input type="text" name="price" placeholder="price" value="{{$product->price}}">
        </div>
        <div>
            <label for="">Description</label>
            <input type="text" name="description" placeholder="description" value="{{$product->description}}">
        </div>
        <div>
            <input type="submit" value="Update Product">
        </div>
    </form>

</body>
</html>
