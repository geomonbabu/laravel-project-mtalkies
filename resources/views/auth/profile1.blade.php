<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3">
    <title>mtalkies | My profile</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://e7.pngegg.com/pngimages/658/391/png-clipart-blue-m-logo-marvel-logo-icons-logos-emojis-tech-companies-thumbnail.png" type="image/gif" sizes="16x16">
    <style>
        body {
            text-align: center;
            width: 100%;
            margin: 0;
            padding-top: 0px;
            font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
            background: linear-gradient(white, #D3D8E8);
        }

        #header_wrapper {
            width: 100%;
            min-width: 980px;
            background-color: darkslategrey;
        }

        #header {
            width: 980px;
            margin: 0px auto;
            padding: 0px;
            height: 85px;
        }

        #header li {
            list-style-type: none;
            float: left;
            text-align: left;
            color: white;
        }

        #header #sitename {
            margin-top: 25px;
        }

        #header #sitename a {
            color: white;
            text-decoration: none;
            font-size: 30px;
            font-weight: 900;
        }

        #header form {
            margin-top: 15px;
            float: right;
        }

        #header form li {
            font-size: 13px;
            margin-left: 15px;
        }

        #header form li a {
            color: #A9BCF5;
            text-decoration: none;
        }

        #header form input[type="text"] {
            margin-top: 3px;
            margin-bottom: 3px;
            width: 150px;
            border: 1px solid #08298A;
            height: 25px;
            padding-left: 3px;
        }

        #header form input[type="password"] {
            margin-top: 3px;
            margin-bottom: 3px;
            width: 150px;
            border: 1px solid #08298A;
            height: 25px;
            padding-left: 3px;
        }

        #header form input[type="submit"] {
            height: 25px;
            margin-top: 20px;
            background-color: #084B8A;
            color: white;
            border: 1px solid #08298A;
        }

        #wrapper {
            margin: 0 auto;
            padding: 0px;
            text-align: center;
            width: 980px;
        }

        #wrapper div {
            float: left;
            font-family: helvetica, arial, sans-serif;
        }

        #wrapper #div1 {
            margin-top: 30px;
            width: 590px;
            text-align: left;
        }

        #wrapper #div1 p {
            font-size: 20px;
            font-family: arial;
            font-weight: bold;
            margin: 0px;
            color: #0e385f;
        }

        #wrapper #div2 {
            margin-top: 10px;
            width: 390px;
            text-align: left;
        }

        #wrapper #div2 h1 {
            margin: 0px;
            font-size: 37px;
            color: #2E2E2E;
        }

        #wrapper #div2 p {
            font-size: 18px;
            color: #2E2E2E;
        }

        #wrapper #div2 li {
            list-style-type: none;
            margin-top: 10px;
        }

        #wrapper #div2 li #firstname {
            width: 49%;
        }

        #wrapper #div2 li #surname {
            margin-left: 2%;
            width: 49%;
        }

        #wrapper #div2 li input[type="text"] {
            width: 100%;
            height: 40px;
            border-radius: 5px;
            padding-left: 10px;
            font-size: 18px;
            border: 1px solid #BDBDBD;
        }

        #wrapper #div2 li input[type="password"] {
            width: 100%;
            height: 40px;
            border-radius: 5px;
            padding-left: 10px;
            font-size: 18px;
            border: 1px solid #BDBDBD;
        }

        #wrapper #div2 li select {
            padding: 4px;
            float: left;
        }

        #wrapper #div2 li a {
            margin-left: 10px;
            width: 150px;
            color: #045FB4;
            text-decoration: none;
            font-size: 11px;
            display: inline-block;
            vertical-align: middle;
            line-height: 15px;
        }

        #wrapper #div2 li a:hover {
            text-decoration: underline;
        }

        #wrapper #div2 li {
            color: #2E2E2E;
            font-size: 18px;
        }

        #wrapper #div2 #terms {
            color: #424242;
            font-size: 11px;
        }

        #wrapper #div2 #terms a {
            display: inline;
            margin: 0px;
        }

        #wrapper #div2 li input[type="submit"] {
            width: 205px;
            height: 45px;
            text-align: center;
            font-size: 19px;
            margin-top: 10px;
            margin-bottom: 10px;
            font-family: 'Freight Sans Bold', helvetica, arial, sans-serif !important;
            font-weight: bold !important;
            background: linear-gradient(#67ae55, #0e385f);
            background: color #0e385f;
            box-shadow: inset 0 1px 1px #0e385f;
            border-color: #0e385f #2c5115;
            border: 1px solid;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            position: relative;
            text-shadow: 0 1px 2px rgba(0, 0, 0, .5);
        }

        #wrapper #div2 #create_page {
            color: #424242;
            font-size: 13px;
            font-weight: bold;
        }

        #wrapper #div2 #create_page a {
            display: inline;
            margin: 0px;
            font-size: 13px;
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

        .dropdown {
            float: right;
            overflow: hidden;
            padding-top: 20px;
        }

        .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .row {
            display: flex;
        }

        /* Create three equal columns that sits next to each other */
        .column {
            flex: 33.33%;
            padding: 5px;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: black;
        }

        * {
            box-sizing: border-box;
        }

        /* Add padding to containers */
        .container {
            padding: 16px;
            background-color: white;
            width: 100%;
        }

        .box {
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            width: 50%;
            opacity: 0.9;
            align-content: center;
        }

        /* Full-width input fields */
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for the submit button */
        .registerbtn {
            background-color: #04AA6D;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 50%;
            opacity: 0.9;
            align-content: center;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        .div1 {
            margin-left: 200px;
            margin-top: 100px;
            float: right;
            text-align-last: right;
            color: #2c5115;
            padding-right: 10px;
        }
    </style>
    <nav class=”navbar fixed-top navbar-expand-md navbar-light bg-light”>
        <div class=”container-fluid”>
            <div id="header_wrapper" class="col-sm">
                <div id="header">
                    <li id="sitename"><a href="/dashboard">mtalkies</a></li>
                    <div class="dropdown"><button class="dropbtn">More<i class="fa fa-caret-down"></i></button>
                        <div class="dropdown-content"><a href="/dashboard">Home</a><a href="logout">Logout</a></div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</head>

<body>

    <div class="container-fuild">
        <div class="div1">
            <h3> "Search is about figuring out what <br>&nbsp;&nbsp;people are looking for when <br>they enter keywords into their<br> favorite search engine.<br> Social media is what people are actually <br>saying to each other;<br> they’re telling us what they’re looking for.."</h3>
        </div>
        <form enctype="multipart/form-data" action="{{ route('user-file') }}" method="post" class="box">
            @if (Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
            @if (Session::has('fail'))
            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
            @endif
            @csrf
            <h1>Upload your Story</h1>

            <hr>
            <label for="email"><b>Enter description</b></label>
            <input type="text" class="form-control" placeholder="Description" name="description"><span class="text-danger">@error('description'){{ $message }} @enderror</span>
            <label for="psw"><b>Upload your post</b></label>
            <input type="file" name="photo" id="photo"> <span class="text-danger">@error('photo'){{ $message }} @enderror</span>
            <hr>
            <button type="submit" class="registerbtn">Upload</button>


        </form>
    </div>
    <section>
        <div class="container-fluid bg-white p-5">
            <h1 class="text-center text-danger">My Uploads</h1>
            <hr>
            <div class="row">
                @foreach ($user_posts as $item)
                <div class="column">
                    <p class="card-text">
                        {{ $item->description }}
                    </p>
                    <img id="{{$item->id}}" class="img" src="uploads/{{$item->photo}}" alt="Snow" style="width:50%" height="250px">
                    {{$item->id}}
                    <form class="card-text"><label>Click here to delete the post!!</label>
                        <div class="container-login100-form-btn">
                            <button type="submit" class="btn btn-block btn-primary"><a href="delete/{{$item->id}}">Delete</a></button>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</body>
<div id="footer2" class="container-fuild">
    <a href="">Sign Up</a><a href="">Log In</a><a href="">Messenger</a><a href="">mtalkies</a><a href="">Mobile</a><a href="">Find Friends</a><a href="">Badges</a><a href="">People</a><a href="">Pages</a><a href="">Places</a><a href="">Games</a><a href="">Locations</a><a href="">Celebrities</a><a href="">Groups</a><a href="">Moments</a><a href="">About</a><a href="">Create Advert</a><a href="">Create Page</a><a href="">Developers</a><a href="">Careers</a><a href="">Privacy</a><a href="">Cookies</a><a href="">Ads</a><a href="">Terms</a><a href="">Help</a>
    <p>Design By gbsolutions.com</a>
</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>