<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>mtalkies|post details</title>
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

    .container {
        max-width: 640px;
        margin: 30px auto;
        background: #fff;
        border-radius: 8px;
        padding: 20px;
    }

    .comment {
        display: block;
        transition: all 1s;
    }

    .commentClicked {
        min-height: 0px;
        border: 1px solid #eee;
        border-radius: 5px;
        padding: 5px 10px
    }

    .container textarea {
        width: 100%;
        border: none;
        background: #E8E8E8;
        padding: 5px 10px;
        height: 50%;
        border-radius: 5px 5px 0px 0px;
        border-bottom: 2px solid #016BA8;
        transition: all 0.5s;
        margin-top: 15px;
    }

    button.primaryContained {
        background: #016ba8;
        color: #fff;
        padding: 10px 10px;
        border: none;
        margin-top: 0px;
        cursor: pointer;
        text-transform: uppercase;
        letter-spacing: 4px;
        box-shadow: 0px 2px 6px 0px rgba(0, 0, 0, 0.25);
        transition: 1s all;
        font-size: 10px;
        border-radius: 5px;
    }

    button.primaryContained:hover {
        background: #9201A8;
    }

    .box {
        margin: auto;
        width: 50%;
        border: 3px solid green;
        padding: 10px;
    }
</style>

<body>
    <!-- Vue JS -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js'></script>
    <!-- jQuery -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                cache: true
            });
            $.getScript('https://connect.facebook.net/en_US/sdk.js', function() {
                FB.init({
                    appId: '{your-app-id}',
                    version: 'v2.7' // or v2.1, v2.2, v2.3, ...
                });
                $('#loginbutton,#feedbutton').removeAttr('disabled');
                FB.getLoginStatus(updateStatusCallback);
            });
        });
    </script>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light navstyle sticky-top text-blue">
                <div>
                    <a class="navbar-brand" href="#"><img src="https://i.pinimg.com/474x/09/1f/b4/091fb4ee9864242230c2315a4bc5adfb.jpg" height="80px" width="150px;"></a>
                </div>
                <h2 style="color:darkslategrey; font-style:italic;">mtalkies</h2>
                <div class="navbar bg-light">
                    <a href="/dashboard">Home</a>
                </div>
                </div>
        </header>

        <section id="app" class="p-5">
            {{-- @foreach ($post_detail as $item) --}}
            <div>
                <h4 style="color:darkcyan;">You can comment here..</h4>
                <div class="col-md-8 align:center">
                    <div class="card text-center">
                        <img src="/uploads/{{ $post_detail->photo }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p>Posted by : {{ $post_detail->user->name }}</p>
                            <p class="card-text">Description : {{ $post_detail->description }}</p>
                        </div>
                        {{-- @endforeach --}}
                        <form action="{{ route('addcomment-user') }}" method="post">
                            @csrf
                            <div id="fb-root">
                                <input hidden name="post_id" value="{{ $post_detail->id }}">
                                <div style="margin-bottom: 2rem;">
                                    <h5 class="text-left text-info">Add comment</h5>
                                </div>
                                <textarea class="form-control" name="comment"></textarea>


                                <span style="color: red;" class="text-danger">
                                    @error('comment'){{ $message }} @enderror
                                </span>
                                <div style="margin-top: 5rem">
                                    <button type="submit" class="btn btn-info">Add</button>
                                </div>
                                <div>
                                    @if (Session::has('success'))
                                    <div style="color: green; margin-top: 1rem" class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                    @endif
                                    @if (Session::has('fail'))
                                    <div style="color: red; margin-top: 1rem;" class="alert alert-danger">
                                        {{ Session::get('fail') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <hr>
                            <div style="margin-top: 1rem;">
                                <h5 class="text-center text-muted">Comments</h5>
                                @foreach ($user_comments as $item)
                                @if (Session::get('loginId') == $item->user->id)
                                <div style="margin: 1rem auto; font-weight: bold;">
                                    You
                                </div>
                                @else
                                <div style="margin: 1rem auto; font-weight: bold;">
                                    {{ $item->user->name }}
                                </div>
                                @endif
                                <div style="margin-left: 1rem;">{{ $item->values }}</div>
                                @endforeach
                            </div>
                            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v12.0&appId=618138546129222&autoLogAppEvents=1" nonce="qO0rRNnc"></script>
                        </form>
                        <!--End Container -->
                    </div>
                </div>
            </div>
        </section><!-- end App -->
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

    </body>

</html>