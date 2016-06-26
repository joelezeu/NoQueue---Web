<!DOCTYPE html>
@include('includes.doctype')
<head>
    <!-- Meta -->
    @include('includes.meta')
            <!-- Title -->
    <title>Sign In to NoQueue</title>
    <!-- Templates core CSS -->
    @include('includes.head')
    <link href="src/stylesheets/application.css" rel="stylesheet">
</head>
<body class="sign-in-up" id="to-top">
<!-- Sign In/Sign Up section -->
<section class="sign-in-up-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Logo -->
                {{--<figure class="text-center">
                    <a href="./index.html">
                        <img class="img-logo" src="images/logo.png" alt="">
                    </a>
                </figure>--}} <!-- /.text-center -->
            </div> <!-- /.col-md-12 -->
        </div> <!-- /.row -->
        <section class="sign-in-up-content">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center">Reset Password</h4>
                    @include('includes.errors')
                    <form class="sign-in-up-form" action="{{ url('/password/email') }}" method="POST" role="form">
                        {!! csrf_field() !!}
                                <!-- Input 1 -->
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <input class="form-control" name="email" type="email" placeholder="Enter email address">
                        </div> <!-- /.form-group -->
                        <!-- Button -->
                        <button class="btn btn-success btn-block" type="submit">Send Me Reset Link</button>
                        <input type="hidden" name="_token" value="{{Session::token()}}">
                    </form> <!-- /.sign-in-up-form -->
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
        </section> <!-- /.sign-in-up-content -->
        <div class="row">
            <div class="col-md-12">
                <section class="footer-copyright text-center">
                    <p>Made with <i class="fa fa-heart"></i> <a href="https//www.facebook.com">Joel Eze</a></p>
                </section> <!-- /.footer-section -->
            </div> <!-- /.col-md-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /.sign-in-up-section -->
<!-- Placed at the end of the document so the pages load faster -->
@include('includes.script')
</body>
</html>