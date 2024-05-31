<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern and Professional Page</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        /* Add custom styles here */
        body {
            padding: 20px;
        }
        .table-container {
            width: 50%;
            margin: 20px auto; /* Center the container */
        }
        table {
            width: 100%;
        }
        th, td {
            text-align: center;
            padding: 10px;
        }
        th {
            background-color: #343a40;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <x-app-layout>
        <!-- Your authentication and other content here -->
    </x-app-layout>

    <section>
        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 table-container">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Food Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            <form action="{{url('orderconfirm')}}" method = "POST">
                                @csrf
                                @foreach($data as $item)
                                <tr>
                                    <td>
                                        <input type="text" name ="foodname[]" value=" {{$item->title}}" hidden ="">
                                        {{$item->title}}
                                    </td>
                                    <td>
                                        <input type="text" name ="quantity[]" value=" {{$item->quantity}}" hidden ="">
                                        {{$item->quantity}}
                                    </td>
                                    <td>
                                        <input type="text" name ="price[]" value=" {{$item->price}}" hidden ="">
                                        {{$item->price}}
                                    </td>
                                    <td><a href="{{ url('/removeCartItem', ['foodid' => $item->foodid]) }}">Remove</a></td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                        <div align = "center" style = "padding: 10px">
                            <button
                                id = "order"
                                type ="button"
                                class="btn btn-primary"
                            >
                                Order Now
                            </button>
                            

                        </div>
                        <div id ="appear" align = "center" style = "padding: 10px ;display: none; " >
                            <div style = "padding: 10px">
                                <label style = "display: block">Name</label>
                                <input type="text" name ="name" placeholder = "name">
                            </div>
                            <div style = "padding: 10px">
                                <label style = "display: block">Phone Number</label>
                                <input type="number" name ="phone" placeholder = "Phone Number">
                            </div>
                            <div style = "padding: 10px">
                                <label style = "display: block">Address</label>
                                <input type="text" name ="address" placeholder = "Address">
                            </div>
                            <div style = "padding: 10px">
                               
                                <input class =" btn btn-success" type="submit" value = "Order Confirm" style ="background-color:green "; >
                                <button
                                    id = "close"
                                    type ="button"
                                    class="btn btn-danger"
                                >
                                    Close
                                </button>
                                
                            </div>
                            

                        </div>

                    </form>         
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Include Bootstrap JS if needed -->
    <script type = "text/javascript">
        $("#order").click(
            function(){
                $("#appear").show();
            }
        );
        $("#close").click(
            function(){
                $("#appear").hide();
            }
        );
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
