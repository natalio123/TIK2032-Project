<?php 
$host = "localhost";
$username = "root";
$password = "";
$db = "portofolio";

$conn = new mysqli($host, $username, $password, $db);

if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['nama']);
    $email = $conn->real_escape_string($_POST['email']);
    $nomor = $conn->real_escape_string($_POST['nomor-telepon']);
    $subject = $conn->real_escape_string($_POST['email-subject']);
    $message = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO contact (nama, email, nomor_telepon, email_subject, message) VALUES ('$name', '$email', '$nomor', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        $message = "Data berhasil ditambahkan!";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }
    
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Homepage</title>
    <link rel="stylesheet" href="contact.css">
</head>

<body>
    <header class="header">
        <a href="#" class="logo">Natalio</a>

        <nav class="navbar">
            <a href="index.html">Home</a>
            <a href="about.html">About Me</a>
            <a href="skills.html">Skill</a>
            <a href="gallery.html">Portofolio Gallery</a>
            <a href="index_blog.php">Blog</a>
            <a href="#">Contact</a>
        </nav>
    </header>

    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me!</span></h2>

        <form action="" method="post">
            <div class="box">
                <div class="field">
                    <input type="text" id="nama" name="nama" placeholder="Full Name" required>
                    <span class="focus"></span>
                </div>
                <div class="field">
                    <input type="text" id="email" name="email" placeholder="Email Address" required>
                    <span class="focus"></span>
                </div>
            </div>


            <div class="box">
                <div class="field">
                    <input type="text" id="nomor-telepon" name="nomor-telepon" placeholder="Mobile Number" required>
                    <span class="focus"></span>
                </div>
                <div class="field">
                    <input type="text" id="email-subject" name="email-subject" placeholder="Email Subject" required>
                    <span class="focus"></span>
                </div>
            </div>



            <div class="textarea-field">
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message"
                    required></textarea>
                <span class="focus"></span>
            </div>

            <div class="button-submit">
                <button type="submit" class="button">Submit</button>
            </div>
        </form>
    </section>
    <script src="script.js"></script>
</body>

</html>