<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];

$game = $_GET['game'] ?? 'Unknown Game';
$price = $_GET['price'] ?? 0;
$method = $_GET['method'] ?? 'Tidak Dipilih';?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Payment Success</title>

<style>
body {
    margin:0;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    font-family:Arial;
    color:white;

    background: linear-gradient(-45deg, #0f172a, #1e3a8a, #0f172a, #020617);
    background-size: 400% 400%;
    animation: bg 10s ease infinite;
}
.check-circle {
    width:80px;
    height:80px;
    margin:0 auto 15px;
    border-radius:50%;

    display:flex;
    justify-content:center;
    align-items:center;

    background:#39FF14;
    color:black;
    font-size:40px;
    font-weight:bold;

    box-shadow:
        0 0 10px #4CBB17,
        0 0 20px #4CBB17,
        0 0 40px #4CBB17;

    animation: pop 0.6s ease;
}

/* animasi muncul */
@keyframes pop {
    0% {
        transform: scale(0);
        opacity:0;
    }
    80% {
        transform: scale(1.2);
    }
    100% {
        transform: scale(1);
        opacity:1;
    }
}
.box {
    text-align:center;
    padding:30px;
    border-radius:15px;

    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(10px);

    box-shadow:0 0 20px #ffffff;
}

h1 {
    color:#ffffff;
    text-shadow:0 0 10px #ffffff;
}

.btn {
    display:inline-block;
    margin-top:20px;
    padding:10px 20px;
    background:#ffffff;
    color:black;
    border-radius:10px;
    text-decoration:none;
}
</style>

</head>

<body>

<div class="box">

    <h1>Pembayaran Berhasil!</h1>
<div class="check-circle">&#10003;</div>
    <p>User: <b><?php echo htmlspecialchars($username); ?></b></p>
    <p>Game: <b><?php echo htmlspecialchars($game); ?></b></p>
    <p>Metode: <b><?php echo htmlspecialchars($method); ?></b></p>
    <p>Total: <b>Rp <?php echo number_format($price); ?></b></p>

    <a href="home.php" class="btn">Kembali ke Store</a>

</div>

</body>
</html>