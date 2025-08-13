<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HPC Cluster Portal</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            font-family: 'Segoe UI', Tahoma, sans-serif;
            background: url('AshokaImage.png') no-repeat center center fixed;
            background-size: cover;
            color: #333;
#            position: relative;
        }

        /* Optional overlay for readability */
        body::before {
            content: "";
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(255, 255, 255, 0.7); /* Light overlay */
            z-index: -1;
        }

        header {
            background: #003366;
            color: #fff;
            padding: 20px;
            text-align: center;
            font-size: 1.8em;
            font-weight: bold;
        }

        nav {
            background: #0059b3;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: 500;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            flex: 0 0 auto; /* Prevent stretching */
            max-width: 1100px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0,0,0,0.1);
        }

        footer {
            position: absolute;
            background: #003366;
            color: white;
            text-align: center;
            padding: 15px;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <header>
        🚀 High Performance Computing Cluster Portal
    </header>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About HPC</a>
        <a href="linux_basics.php">Linux Basics</a>
        <a href="contact.php">Contact</a>
    </nav>
    <main>
        <h2>Welcome to Our HPC Cluster</h2>
        <p>This portal provides documentation, guidelines, and tools for accessing and using our High Performance Computing resources efficiently.</p>
        <p>Use the menu above to navigate through various sections, including <b>HPC usage policies, node details, job scheduling, and Linux basics</b> for beginners.</p>
    </main>
    <footer>
        &copy; <?php echo date("Y"); ?> HPC Team
    </footer>
</body>
</html>
