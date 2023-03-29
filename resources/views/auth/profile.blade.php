<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>mtalkies|Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="https://i.pinimg.com/474x/09/1f/b4/091fb4ee9864242230c2315a4bc5adfb.jpg" type="image/gif" sizes="16x16" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>
<style>
    .navbar {
        overflow: hidden;
        background-color: white;
        font-style: italic;
    }

    /* Links inside the navbar */
    .navbar a {
        float: right;
        font-size: 20px;
        color: darkslategrey;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    /* The dropdown container */
    .dropdown {
        float: right;
        overflow: hidden;
    }

    /* Dropdown button */
    .dropdown .dropbtn {
        font-size: 16px;
        border: none;
        outline: none;
        color: white;
        padding: 14px 16px;
        background-color: inherit;
        font-family: inherit;
        /* Important for vertical align on mobile phones */
        margin: 0;
        /* Important for vertical align on mobile phones */
    }

    /* Add a red background color to navbar links on hover */
    .navbar a:hover,
    .dropdown:hover .dropbtn {
        background-color: white;
    }

    /* Dropdown content (hidden by default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        float: right;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    /* Add a grey background color to dropdown links on hover */
    .dropdown-content a:hover {
        background-color: #ddd;
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        display: block;
    }

    .card {
        align-items: center;
        align-content: center;
    }
</style>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light navstyle sticky-top text-blue">
            <div>
                <a class="navbar-brand" href="/dashboard"><img src="https://i.pinimg.com/474x/09/1f/b4/091fb4ee9864242230c2315a4bc5adfb.jpg" height="80px" width="150px;"></a>
            </div>
            <h2 style="color:darkslategrey; font-style:italic;">mtalkies</h2>
            <div class="navbar bg-light">
                <a href="/dashboard">Home</a>
                <a href="/logout">Logout</a>
            </div>
            </div>
    </header>
    <section class="p-5">
        <div class="container bg-light">
            <form enctype="multipart/form-data" action="{{ route('user-file') }}" method="post" class="box">
                @if (Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
                @if (Session::has('fail'))
                <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                @endif
                @csrf
                <div class="card text-center">
                    <h1 class="text-center text-darkslategrey">Upload a post here..</h1>
                    <label for="email"><b>Enter description</b></label>
                    <input type="text" class="form-control" placeholder="Description" name="description"><span class="text-danger">@error('description'){{ $message }} @enderror</span>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label for="psw"><b>Upload your Image</b></label>
                    <input type="file" name="photo" id="photo"> <span class="text-danger">@error('photo'){{ $message }} @enderror</span>
                    <hr>
                    <button type="submit" class="btn btn-info">Upload</button>
                </div>
            </form>
        </div>
    </section>
    <section>
        <div class="container bg-white p-5">
            <h1 class="text-center text-darkslategrey">My Uploads!!</h1>
            <hr>
            <div class="row">
                @foreach ($user_posts as $item)
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <p class="card-text">{{ $item->description }}</p>
                            <img src="uploads/{{$item->photo}}" class="card-img-top" alt="..." style="max-width: 18rem; max-height: 10rem;">
                            <input hidden name="id" value="{{$item->id}}">
                            <button type="submit"><a class="btn btn-danger" href="delete/{{$item->id}}">Delete</a></button>
                            <a href="{{ route('details', $item->id) }}" class="btn btn-info">View details</a>
                        </div>
                    </div>
                </div>@endforeach
            </div>
        </div>

        </div>
    </section>
    <section>
        <footer>
            <div class="fotcontains bg-secondary">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <p><a href="privacy-policy.php" class="text-white">Privacy Policy</a></p>
                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <div class="col-md-4 col-12">
                        <p class="text-center text-white">Copyright 2021 | mtalkies. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
        </script>
    </section>
</body>

</html>