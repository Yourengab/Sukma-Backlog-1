<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Renify | {{$title}}</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        /* Add your custom styles here */
        body {
            background: linear-gradient(to right, #4b6cb7, #182848);
            color: #ffffff;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #343a40; /* Dark background color for the navbar */
        }

        .jumbotron {
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    @include('component/navbar')
    <!-- Content -->
    <div class="container mt-5">
      @yield('container')
    </div>

    <!-- Bootstrap JS and dependencies (jQuery, Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
