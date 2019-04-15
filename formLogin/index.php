<!doctype html>
<html lang="en">
<head>
    <title> MY </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet">
    <style>
        .login-form{
            background-color: rgba(0,0,0,0.5);
            margin: 20px;
            padding: 20px;
            border-radius: 20px;
        }
        .login-form{
            color: white;
        }
        html{
            position: relative;
            min-height: 100%;
            background: url(http://globaltake.com/wp-content/uploads/2017/11/c-16.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .wrapper{
            min-height: 100%;
            background: url(http://globaltake.com/wp-content/uploads/2017/11/c-16.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        body {
            height: 100%;
            margin-bottom: 60px;
        }
        .navbar {
            background-color: #362F2F;
            font-size: 20px;
            color: white;
        }
        .navbar a{
            color: White;
        }
        .navbar-toggler-icon{
            background-image: url("http://www.worldcurling.org/_images/menu-icon.png");
            border: 5px pink;
        }
        .navbar-toggler{
            border: 2px solid white;
        }
        .footer{
            background-color: #362F2F;
            position: absolute;
            padding-top: 3px;
            bottom: 0px;
            width: 100%;
            height: 60px;
            line-height: 20px;
            text-align: center;
        }
        .other{
            text-align: center;
            font-family: arial;
            font-weight: bolder;
            color: white;
        }
        .text-center{
            color: aliceblue;
        }
        .text-center-footer{
            color: aliceblue;
        }

        @media (max-width: 299px) {
            .company_name a{
                font-size: 15px;
            }
            .other{
                font-size: 6px;
            }
            .text-center-footer{
                font-size: 6px;
            }
        }
        @media (min-width: 300px) {
            .company_name a{
                font-size: 15px;
            }
            .other{
                font-size: 7px;
            }
            .text-center-footer{
                font-size: 8px;
            }
        }
        /*Small devices (landscape phones, 576px and up)*/
        @media (min-width: 576px) {
            .company_name a{
                font-size: 20px;
            }
            .other{
                font-size: 14px;
            }
            .text-center-footer{
                font-size: 14px;
            }
        }
        /*Medium devices (tablets, 768px and up)*/
        @media (min-width: 768px) {
            .company_name a{

            }
            .other{
                font-size: 14px;
            }

            .text-center-footer{
                font-size: 14px;
            }
        }
        /* Large devices (desktops, 992px and up)*/
        @media (min-width: 992px) {
            .company_name a{

            }

            .other{
                font-size: 18px;
            }

            .text-center-footer{
                font-size: 18px;
            }
        }
        /* Extra large devices (large desktops, 1200px and up)*/
        @media (min-width: 1200px) {
            .company_name a{

            }
            .other{
            }
            .text-center-footer{
            }
        }
    </style>
</head>
<body>
<div class="wrapper">
    <nav class="navbar navbar-expand-md company_name">
        <a class="navbar-brand" href="#">
            Morteza Home Page |
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#"> ممد <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> نقی </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Begin page content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" style="height: 40px">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-6">
                <div class="col-md-8 offset-md-2 text-center">
                    <form class="login-form" method="post">
                        <label><h2>Username  :</h2></label><br>
                        <input type="text" placeholder="Username" required><br>
                        <label><h2>Password :</h2></label><br>
                        <input type="password" placeholder="Password" required><br><br>
                        <input type="submit" class="btn-primary" value="Login">

                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container-fluid">
            <span class="other"><h7>ADDRESS    |   Phone Number</h7></span>
            <p class="text-center-footer">&copy; copyright 2017</p>
        </div>
    </footer>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
