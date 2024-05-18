<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Homepage</title>
    <style>
    header {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 1em 0;
    }

    .navbar {
        position: relative;
        left: 430px;
    }

    .navbar a {
        font-size: 15px;
        color: var(--text-color);
        font-weight: 500;
        margin-left: 1.6rem;
        transition: .3s;
        text-decoration: none;
    }

    .navbar a:hover,
    .navbar a.active {
        color: blue
    }

    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        background-color: #444;
    }

    nav ul li {
        display: inline;
        margin-right: 10px;
    }

    nav ul li a {
        text-decoration: none;
        color: #fff;
        padding: 10px;
    }

    nav ul li a:hover {
        background-color: #555;
    }
    </style>
</head>

<body>
    <header>
        <nav class="navbar">
            <a href="index.html">Home</a>
            <a href="about.html">About Me</a>
            <a href="skills.html">Skill</a>
            <a href="gallery.html">Portofolio Gallery</a>
            <a href="index blog.php">Blog</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>
</body>

</html>