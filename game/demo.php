<?php
session_start();
$message = "";

// Set random number
if (!isset($_SESSION['random_number'])) {
    $_SESSION['random_number'] = rand(1, 100);
    $_SESSION['attempts'] = 0;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $guess = intval($_POST['guess']); // Input user
    $_SESSION['attempts']++;

    if ($guess < $_SESSION['random_number']) {
        $message = "Terlalu rendah! Coba lagi.";
    } elseif ($guess > $_SESSION['random_number']) {
        $message = "Terlalu tinggi! Coba lagi.";
    } else {
        $message = "Selamat! Anda berhasil menebak angkanya dalam " . $_SESSION['attempts'] . " percobaan.";
        unset($_SESSION['random_number']); // Reset permainan
        unset($_SESSION['attempts']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess Number</title>
</head>
<body>
    <h1>Number Guessing Game</h1>
    <p>I have chosen a number between 1 to 100. Can you guess them?</p>
    <?php if ($message): ?>
        <p><strong><?php echo $message; ?></strong></p>
    <?php endif; ?>

    <?php if (!isset($_SESSION['random_number'])): ?>
        <a href="game.php">Try again!</a>
    <?php else: ?>
        <form method="post" action="demo.php">
            <label for="guess">Your guess:</label>
            <input type="number" name="guess" id="guess" required min="1" max="100">
            <button type="submit">Guess Number</button>
        </form>
    <?php endif; ?>
</body>
</html>
