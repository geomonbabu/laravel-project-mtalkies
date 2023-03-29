<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=”stylesheet” href=”css/bootstrap.css”>
    <link rel=”stylesheet” href=”css/bootstrap-responsive.css”>
    <title>mtalkies | Home page</title>
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

        .text1 {
            text-align: center;
            color: #2c5115;
        }

        .text2 {
            color: #365899;
        }

        .card-text {
            color: forestgreen;


        }

        .card {
            background-color: white;
            padding: 20px;
            margin-top: 20px;
        }

        .fakeimg {
            background-color: white;
            width: 50%;
            padding-top: 20px;
        }

        .leftcolumn {
            float: left;
            width: 75%;
        }
    </style>
    <nav class=”navbar fixed-top navbar-expand-md navbar-light bg-light”>
        <div id="header_wrapper" class="col-sm-0 col-sm-offset-0">
            <div id="header">
                <li id="sitename"><a href="/dashboard">mtalkies</a></li>
                <div class="dropdown"><button class="dropbtn">More<i class="fa fa-caret-down"></i></button>
                    <div class="dropdown-content"><a href="/profile">My Profile</a><a href="logout">Logout</a></div>
                </div>
            </div>
        </div>
    </nav>
</head>

<body>
    <div id="wrapper"></div>
    <div id="footer_wrapper">
        <section class="p-5">
            <div class="container-fluid bg-light">
                @foreach ($user_name as $item)
                <h2 class="text2">Welcome {{ $item->name}}</h2>
                @endforeach
                <h1 class="text1">NEWS FEED..!!</h1>
                @foreach ($post_data as $item)
                <div class="row">
                    <div class="leftcolumn">
                        <div class="card">
                            <h3 class="text2">{{$item->name}} shared a post</h3>
                            <textarea name="txtaddress" cols="37" rows="5" style="font-size: 14pt" class="card-text">{{$item->description}}</textarea>
                            <div class="fakeimg" style="height:200px;"><img class="img" src="uploads/{{$item->photo}}" alt="Snow" style="width:100%" height="200px"></div>
                        </div>
                        <hr>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>
</body>
<div id="footer2">
    <a href="">Sign Up</a><a href="">Log In</a><a href="">Messenger</a><a href="">mtalkies</a><a href="">Mobile</a><a href="">Find Friends</a><a href="">Badges</a><a href="">People</a><a href="">Pages</a><a href="">Places</a><a href="">Games</a><a href="">Locations</a><a href="">Celebrities</a><a href="">Groups</a><a href="">Moments</a><a href="">About</a><a href="">Create Advert</a><a href="">Create Page</a><a href="">Developers</a><a href="">Careers</a><a href="">Privacy</a><a href="">Cookies</a><a href="">Ads</a><a href="">Terms</a><a href="">Help</a>
    <p>Design By gbsolutions.com</a>
</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>