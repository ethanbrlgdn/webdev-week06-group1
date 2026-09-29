<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Group 1 Laravel Site')</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            color: #333;
        }

        header {
            background-color: #343a40;
            color: white;
            padding: 30px;
            text-align: center;
        }

        header h1 {
            margin: 0 0 8px;
        }

        nav {
            background-color: #212529;
            padding: 15px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            max-width: 900px;
            margin: 40px auto;
            padding: 30px;
            background-color: white;
            border-radius: 10px;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #343a40;
            color: white;
            margin-top: 40px;
        }

        .alert {
            padding: 15px;
            background-color: #e7f3ff;
            border-left: 5px solid #007bff;
            margin: 20px 0;
        }
    </style>
</head>

<body>

    <header>
        <h1>Group 1 Laravel Website</h1>
        <p>Web Development Week 06</p>
    </header>

    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 Group 1. All Rights Reserved.</p>
    </footer>

</body>
</html>