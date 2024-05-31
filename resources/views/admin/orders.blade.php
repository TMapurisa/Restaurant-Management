<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        
        @include("admin.admincss")
        <style>
            body {
                font-family: 'Arial', sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }

            .container-scroller {
                display: flex;
            }

            #main-container {
                margin-top: 60px;
                padding: 20px;
                background-color: #fff;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                flex: 1;
            }

            table {
                color: black;
                width: 100%;
                margin-top: 20px;
                border-collapse: collapse;
                font-size: 16px;
            }

            th, td {
                padding: 15px;
                border: 2px solid #ddd;
                text-align: left;
            }

            th {
                background-color: grey;
                color: white;
            }
        </style>
    </head>

    <body>
   
    <div class="container-scroller">
        @include("admin.sidebar")

        <div id="main-container">
            <form action="url{{'/search'}}" method = "get">
                @csrf
                <input type="text"name="search" style= "color: blue;">
                <input type="submit" value ="Search" class= "btn btn-success">
            </form>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Foodname</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                </tr>
                @foreach($data as $data)
                <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->address}}</td>
                    <td>{{$data->foodname}}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->quantity}}</td>
                    <td>{{$data->price * $data->quantity}}</td>
                </tr>
                @endforeach
            </table>
        </div>

        @include("admin.adminscript")
    </div>
    </body>

    </html>
</x-app-layout>
