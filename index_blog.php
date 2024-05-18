<?php
// Database connection details
$host = "localhost";
$username = "root";
$password = "";
$db = "portofolio";

$conn = new mysqli($host, $username, $password, $db);

if ($conn->connect_error) {
  die("Koneksi Gagal: " . $conn->connect_error);
}


$sql = "SELECT id, judul, gambar, konten1 FROM artikel_lengkap";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Homepage</title>
    <link rel="stylesheet" href="index_blog.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        box-sizing: border-box;
        text-decoration: none;
        border: none;
        outline: none;
        scroll-behavior: smooth;
    }

    :root {
        --bg-color: #081b29;
        --second-bg-color: #112e42;
        --text-color: #ededed;
        --main-color: #00abf0;
    }


    html {
        font-size: 63.5%;
        overflow-x: hidden;
    }

    body {
        background: var(--bg-color);
        color: var(--text-color);

    }

    .header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        padding: 2rem 9%;
        background: transparent;
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 100;
        transition: .3s;
    }

    .logo {
        font-size: 2.5rem;
        color: var(--text-color);
        font-weight: 600;
    }

    .navbar a {
        font-size: 1.4rem;
        color: var(--text-color);
        font-weight: 500;
        margin-left: 1.6rem;
        transition: .3s;
    }

    .navbar a:hover,
    .navbar a.active {
        color: var(--main-color);
    }


    section {
        min-height: 100vh;
        padding: 10rem 9% 2rem;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 2rem;
        background: var(--second-bg-color);
        padding-bottom: 6rem;
    }

    .blog {
        background: var(--bg-color);
    }

    .blog .heading {
        font-size: 5rem;
        margin-bottom: 3rem;
        text-align: center;
    }

    span {
        color: var(--main-color);
    }

    .articleimg {
        padding: 4px;
        background-color: var(--second-bg-color);
        border: 1px solid black;
        width: 38%;
        margin: 10px 5px 10px 5px;
        box-shadow: 0px 4px 10px black;
    }

    .articleimg:hover {
        border: 1px solid black;
        box-shadow: 0px 4px 10px black;
    }

    .articleimg img {
        margin-top: 20px;
        border-radius: 5px;
        width: 100%;
    }

    .articletxt {
        border: 1px solid black;
        width: 58%;
        background-color: var(--second-bg-color);
        min-width: 350px;
        margin: 10px 5px 10px 5px;
        padding: 20px;
        box-shadow: 0px 4px 10px black;
    }

    .articletxt:hover {
        border: 1px solid black;
        box-shadow: 0px 4px 10px black;
    }

    .articletxt p {
        padding: 5px 12px 0px 12px;
        text-align: justify;
    }

    .articlefooter {
        padding: 8px 4px 8px 4px;
        text-align: center;
        font-size: 12px;
    }

    article {
        display: flex;
        justify-content: space-between;
    }
    </style>
</head>

<body>
    <!--navbar-->
    <?php include 'navbar.php';?>

    <section class="blog">
        <h2 class="heading">Kumpulan <span>Blog</span></h2>
        <?php
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {

        echo "<article>";
        echo "<div class='articleimg'>";
        echo "<img src='" . $row['gambar'] . "' alt='" . $row['judul'] . "'/>";
        echo "</div>";
        echo "<div class='articletxt'>";
        echo "<h2>" . $row['judul'] . "</h2>";
        echo "<p>" . $row['konten1'] . "</p>";
        echo "<a href='blog_detail.php?id=" . $row["id"] . "'>Read More...</a><br>";
        echo "</div>";
        echo "</article>";
      }
      } else {
        echo "Tidak ada artikel";
      }
    $conn->close();
    ?>
        <script src="blog.js"></script>
    </section>
</body>

</html>