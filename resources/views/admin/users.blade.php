<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
<x-app-layout>
    
</x-app-layout>
    
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
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

        table {
            color: black;
            width: 70%;
            margin-top: 20px;
            border-collapse: collapse;
            font-size: 16px; /* Adjust font size */
        }

        th, td {
            padding: 15px; /* Adjust padding */
            border: 2px solid #ddd;
            text-align: left;
        }

        th {
            background-color: grey;
            color: white;
        }

        a {
            text-decoration: none;
            color: #333;
            font-weight: bold; /* Add bold style */
        }

        a:hover {
            color: #4CAF50;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        @include("admin.sidebar")

        <div id="main-container">
            <table align="center">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                @foreach($data as $user)
                    <tr align="center">
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        @if($user->usertype=="0")
                            <td><a href="{{url('/deleteuser',$user->id)}}">Delete</a></td>
                        @else
                            <td><span style="color: red; font-weight: bold;">Not Allowed</span></td>
                        @endif
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

    @include("admin.adminscript")
</body>

</html>

    
</body>
</html>