<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job-Sisaket │ หางานจังหวัดศรีสะเกษ</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy|Mitr&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Itim&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Srisakdi&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: lavender;
        }
        h1,
        a {
            font-family: 'Luckiest Guy', cursive;
            font-family: 'Mitr', sans-serif;
        }
        h4,
        i {
            font-family: 'Itim', cursive;
        }
        p {
            font-family: 'Srisakdi', cursive;
        }
        .fakeimg {
            height: 150px;
            margin-top: 30px;
        }
    </style>

</head>

<body>

    <!--navbar -->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark ">
        <a class="navbar-brand" href="">Job-Sisaket</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">

            <ul class="navbar-nav ml-auto">
                <!--ถ้าเข้าสู่ระบบแล้ว-->
                <?php if (isset($_SESSION['id'])) { ?>
                    <img src="uploads/<?php echo $_SESSION['picture']; ?>" class="rounded-circle" onclick="displayDate()" alt="Cinque Terre" width="50" height="40">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $_SESSION['first_name']; ?> <?php echo $_SESSION['last_name']; ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php">ออกจากระบบ</a>
                        </div>
                    </li>
                    <!--ถ้ายังไม่ได้เข้าสู่ระบบ-->
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="btn btn-info " href="login.php">เข้าสู่ระบบ</a>
                        <a class="btn btn-warning" href="register.php">สมัครสมาชิก</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </nav>

    <!--กล่องใหญ่ครอบหมด ห่าง navbar 100px mt-บน mb-ล่าง -->
    <div class="container p-3 border border-dark">
        <div class="container col-11" style="margin-top:30px">
            <h1>งานศรีสะเกษ</h1>
        </div>
        <div class="row" style="margin-top:30px">
            <!--กล่อง col-8 -->
            <div class="container col-sm-8 col-md-8 col-lg-8 bg-success border border-dark" style="margin-top:0">
                <div class="media border p-4 col-md col-sm-10 mb-3 border border-dark" style="margin-top:30px">
                    <img src="img_avatar3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:100px;">
                    <div class="media-body">
                        <h4>John Doe <small><i>Posted on February 19, 2016</i></small></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="#">submit</a>
                    </div>
                </div>
            </div>

            <!--กล่อง col-3 -->
            <div class="container col-sm-3 col-md-3 col-lg-2 bg-info border border-dark">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link bg-warning" href="#" style="margin-top:30px">test</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bg-warning" href="#" style="margin-top:10px">test</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bg-warning" href="#" style="margin-top:10px">test</a>
                    </li>
                    <li class="nav-item mb-3">
                        <a class="nav-link bg-warning" href="#" style="margin-top:10px">test</a>
                    </li>
                </ul>
            </div>
        </div>
        <!--footer-->
        <div class="container ">
            <div class="fakeimg bg-dark">
                <p class="text-center">Footer</p>
            </div>
        </div>
    </div>



    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>