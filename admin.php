<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script src="jquery-3.6.4.min.js"></script>
    <style>
        nav {
            background-color: #ece6da;
            justify-content: center;
            margin-top: 50px;
        }

        nav .navbar-brand {
            color: #526289;
        }

        footer {
            color: #526289;
            background-color: #ece6da;
            padding: 10px;
            text-align:center;
        }

        @keyframes animation1 {
            0% {
                left: 100px;
            }

            50% {
                left: 1200px;
            }

            100% {
                left: 100px;
            }
        }

        @keyframes animation2 {
            0% {
                left: 1200px;
            }

            50% {
                left: 100px;
            }

            100% {
                left: 1200px;
            }
        }

        .animated1 {
            color: #526289;
            position: relative;
            animation: animation1 20s infinite;
        }

        .animated2 {
            color: #526289;
            position: relative;
            animation: animation2 20s infinite;
        }

        .mybg {
            background-image: url('bg.jpg');
            background-repeat: no-repeat;
            background-size:contain;
            text-align: justify;

        }
    </style>
    <title>Admin - Tour Guide</title>
    <div class="animated1">
        <p><b>WELCOME TO TOUR GUIDE</b></p>
    </div>
    <h1 style="color:#526289;text-align:center;font-size:50px; padding-top: 20px;">TOUR GUIDE</h1>
    <img src="bg1.png" alt="GUIDE" style="display: block;margin-left: auto;margin-right: auto;">
    <div class="animated2">
        <p><b>RESERVE NOW !!</b></p>
    </div>
    <div class="container">
        <nav class="navbar navbar-expand-sm">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a class="navbar-brand" href="anews.php">Newsletters</a></li>
                    <li><a class="navbar-brand" href="areserve.php">Cities</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <br>
</head>

<body>
    
</body>
<footer>
        <h3>ADMIN END</h3>
</footer>

</html>