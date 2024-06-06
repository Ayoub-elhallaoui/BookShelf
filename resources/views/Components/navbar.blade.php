<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>BookShelf</title>
    <style>
        .navbar {
            background-color: #fdf6e4; /* Light beige color */
        }
        .navbar-brand img {
            width: 40px; /* Adjust logo size */
            margin-right: 10px;
        }
        .navbar-nav .nav-link {
            color: #5a4d41; /* Custom link color */
        }
        .navbar-nav .nav-link:hover {
            color: #3a3029; /* Hover color */
        }
        .form-inline {
            flex-grow: 1;
            justify-content: center;
        }
        .form-inline input {
            width: 200px; /* Adjust search bar width */
        }
        .nav-item i {
            font-size: 1.5rem; /* Adjust icon size */
            margin-right: 10px;
        }
        .nav-item span {
            font-size: 1.2rem; /* Adjust currency size */
            color: #e67e22; /* Custom currency color */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('path/to/logo.png') }}" alt="Logo">
            BookShelf
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Акции</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Каталог</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Доставка</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">О магазине</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Блог</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Поиск" aria-label="Search">
            </form>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-heart"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
                </li>
                <li class="nav-item">
                    <span>2 228 грн.</span>
                </li>
            </ul>
        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
