<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
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
            flex: 1; /* Allow #main-container to take remaining space */
        }

        form {
            max-width: 400px;
            margin: auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input {
            color: black;
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color:Blue;
            color: Black;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%; /* Make button full-width */
            display: block; /* Ensure the button is displayed as a block */
            margin-top: 10px; /* Add some margin to separate from the inputs */
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        @include("admin.sidebar")
        <div id="main-container">
            <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="title">Title</label>
                <input type="text" name="title" value="{{$data->title}}" required>

                <label for="price">Price</label>
                <input type="number" name="price" value="{{$data->price}}" required>

                <label for="description">Description</label>
                <input type="text" name="description" value="{{$data->description}}" required>

                <label for="image">Old Image</label>
                <img height="75" width="75" src="/foodimage/{{$data->image}}" alt="">

                <label for="image">New Image</label>
                <input type="file" name="image" required>

                <button type="submit" value="Save">Save</button>
            </form>
        </div>
    </div>

    @include("admin.adminscript")
</body>

</html>
