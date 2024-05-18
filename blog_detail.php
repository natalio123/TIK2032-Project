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

// Get the article ID from URL or form (replace with your logic)
$article_id = (isset($_GET['id'])) ? $_GET['id'] : 1; // Assuming default ID is 1

// Limit the query to fetch only the specific article
$sql = "SELECT id, judul, gambar, konten1, konten2 FROM artikel_lengkap WHERE id = " . $article_id . " LIMIT 1";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Homepage</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    img {
        width: 200px;
        position: relative;
        left: 90vh;
    }

    p {
        justify-items: center;
    }

    p main {
        padding: 20px;
    }

    article {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    footer {
        text-align: center;
        padding: 10px;
        background-color: #333;
        color: #fff;
        position: fixed;
        width: 100%;
        bottom: 0;
    }
    </style>
</head>

<body>
    <?php include 'navbar_blog.php';?>
    <main>
        <article>
            <h2>Welcome My Blog</h2>
            <p>Posted on <span id="post-date"></span> by <strong>Admin</strong></p>
            <?php
            if($result->num_rows >0) {
                while($row = $result->fetch_assoc()){
                    echo "<h3>".$row['judul']."</h3>";
                    echo "<img src='" . $row['gambar'] . "' alt='" . $row['judul'] . "'/>";
                    echo "<p>".$row['konten1']."</p>";
                    echo "<p>".$row['konten2']."</p";
                }
            }
            ?>

        </article>
    </main>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var postDate = document.getElementById("post-date");
        var today = new Date();
        var options = {
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        };
        postDate.textContent = today.toLocaleDateString(undefined, options);
    });
    </script>
</body>

</html>