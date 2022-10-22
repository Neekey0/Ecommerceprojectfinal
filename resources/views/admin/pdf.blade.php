<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Order Details :</h3>
    Customer Name: <h4> {{$order->name}}</h4>
    Customer Email:  <h4> {{$order->email}}</h4>
    Customer Address:  <h4> {{$order->address}}</h4>
    Customer Phone: <h4> {{$order->phone}}</h4>
    Customer Id:  <h4> {{$order->user_id}}</h4>

    Product Name: <h4> {{$order->product_title}}</h4>
    Product Id:  <h4> {{$order->product_id}}</h4>
    Product Price:  <h4> {{$order->price}}</h4>
    Product Quantity:  <h4> {{$order->quantity}}</h4>
    Payment Status: <h4> {{$order->payment_status}}</h4>
    <p>Product Image:</p>
    <img height="250" width="250" src="product/{{$order->image}}">

</body>
</html>
