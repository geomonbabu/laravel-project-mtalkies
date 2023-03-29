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
        padding: 10px 12px;
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

    .text1 {
        text-align: center;
        color: #2c5115;
    }

    .text2 {
        color: #365899;
    }

    .card {
        align-items: center;
        align-content: center;
    }

    #footer_wrapper {
        width: 100%;
        clear: both;
        float: left;
        margin-top: 30px;
        min-width: 995px;
        background-color: white;
        text-align: left;
    }

    #footer1 {
        width: 980px;
        margin: 0px auto;
        padding: 0px;
        border-bottom: 1px solid #E6E6E6;
        height: 30px;
        line-height: 30px;
        font-size: 12px;
        color: #848484;
    }

    #footer1 a {
        color: #365899;
        display: inline;
        margin-left: 10px;
        text-decoration: none;
    }

    #footer1 a:hover {
        text-decoration: underline;
    }

    #footer2 {
        width: 980px;
        margin: 0px auto;
        padding: 0px;
        font-size: 12px;
        color: #848484;
    }

    #footer2 a {
        color: #365899;
        display: inline-block;
        margin: 5px;
        margin-left: 0px;
        min-width: 80px;
        text-decoration: none;
    }

    #footer2 a:hover {
        text-decoration: underline;
    }
</style>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light navstyle sticky-top text-blue">
            <div>
                <a class="navbar-brand" href="#"><img src="https://i.pinimg.com/474x/09/1f/b4/091fb4ee9864242230c2315a4bc5adfb.jpg" height="80px" width="150px;"></a>
            </div>
            <h2 style="color:darkslategrey; font-style:italic;">mtalkies</h2>
            <div class="navbar bg-light">
                <a href="/profile">My profile</a>
                <a href="logout">Logout</a>
            </div>
            </div>
    </header>
    <section class="p-5">
        @foreach ($user_name as $item)
        <h2 class="text2">Welcome {{ $item->name }}</h2>
        @endforeach
        <div class="container bg-light">
            <h1 class="text-center text-muted">News feeds...!!</h1>
            <div class="row text-center">
                @foreach ($post_data as $item)
                <div class="col-md-5">
                    <div class="card text-center" style="max-width: 35rem; max-height: 35rem;">
                        <h5 class="card-title">{{ $item->name }} shared a post</h5>
                        <label>Uploaded on {{ $item->updated_at }}</label>
                        <img src="uploads/{{ $item->photo }}" class="card-img-top" alt="..." style="max-width: 35rem; max-height: 20rem;">
                        <div class="card-body">
                            <p class="card-text">{{ $item->description }}</p>
                            <a href="{{ route('details', $item->id) }}" class="btn btn-info">View details</a>
                        </div>
                    </div>
                    <hr>
                </div>
                @endforeach
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
</body>

</html>