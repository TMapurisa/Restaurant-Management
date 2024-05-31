<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    @include("admin.admincss")
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container-scroller {
            display: flex;
        }

        #main-container {
            margin-top: 60px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            flex: 1; /* Allow #main-container to take remaining space */
        }

        form {
            max-width: 400px;
            margin: auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #495057;
            font-size: 16px;
        }

        input {
            color: #495057;
            width: 100%;
            padding: 12px;
            margin-bottom: 16px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
        }

        button {
            background-color: #28a745;
            color: black;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%; /* Make button full-width */
            display: block; /* Ensure the button is displayed as a block */
            margin-top: 10px; /* Add some margin to separate from the inputs */
            font-size: 16px;
            font-weight: bold;
        }

        button:hover {
            background-color: #218838;
        }

        table {
            color: black;
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        th, td {
            padding: 15px;
            border: 1px solid #dee2e6;
            text-align: left;
            font-size: 16px;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        img {
            max-width: 50px;
            max-height: 50px;
        }

        a {
            text-decoration: none;
            color: #007bff;
            font-size: 16px;
        }

        a:hover {
            color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        @include("admin.sidebar")
        <div id="main-container">
            <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="title">Title</label>
                    <input type="text" name="title" placeholder="Enter the title" required>
                </div>
                <div>
                    <label for="price">Price</label>
                    <input type="number" name="price" placeholder="Enter the price" required>
                </div>
                <div>
                    <label for="image">Image</label>
                    <input type="file" name="image" required>
                </div>
                <div>
                    <label for="description">Description</label>
                    <input type="text" name="description" placeholder="Enter the description" required>
                </div>
                <button type="submit" value="Save">Save</button>
            </form>
            <div>
                <table>
                    <tr>
                        <th>Food Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                        <th>Action2</th>
                    </tr>
                    @foreach($data as $item)
                        <tr align="center">
                            <td>{{$item->title}}</td>
                            <td>{{$item->price}}</td>
                            <td>{{$item->description}}</td>
                            <td><img src="/foodimage/{{$item->image}}" alt=""></td>
                            <td><a href="{{url('/deletemenu',$item->id)}}">Delete</a></td>
                            <td><a href="{{url('/updateview',$item->id)}}">Update</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    @include("admin.adminscript")
</body>

</html>
