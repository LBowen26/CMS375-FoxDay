<?php
// Read inputs (avoid undefined index warnings with ?? "")
$name  = trim($_POST["student_name"] ?? "");
$email = trim($_POST["email"] ?? "");
$event = trim($_POST["event"] ?? "");
$year  = trim($_POST["year"] ?? "");
$message = trim($_POST["message"] ?? "");
$secretPromise = ($_POST["secret_promise"] ?? "") === "yes";

// Basic validation: required fields (name, email, event at minimum)
$errors = [];

if ($name === "") {
  $errors[] = "Please enter your name.";
}
if ($email === "") {
  $errors[] = "Please enter your email.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errors[] = "That email address doesn’t look valid. Please try again.";
}
if ($event === "") {
  $errors[] = "Please select an event.";
}

// Optional fun: conditional message per event
$eventExtra = "";
if ($event === "Beach Destination Bus Ride") {
  $eventExtra = "Make sure to bring sunscreen!";
} elseif ($event === "Campus Clue Hunt: Find the Fox") {
  $eventExtra = "Team up or go solo, either way, trust your instincts.";
} elseif ($event === "Fox Day Picnic") {
  $eventExtra = "Pro tip: picnic photos look great by Lake Virginia.";
} elseif ($event === "Fox day cookout") {
  $eventExtra = "Arrive early, food runs out fast!";
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fox Day Campus Events - Confirmation</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <header class="site-header">
    <h1>Fox Day Campus Events</h1>
    <nav class="nav">
      <a href="index.html">Home</a>
      <a href="events.php">View Events</a>
      <a href="register.html">Register</a>
    </nav>
  </header>

  <main class="container">
    <?php if (count($errors) > 0): ?>
      <section class="card error-card">
        <h2>Oops — something’s missing </h2>
        <p>Please fix the following:</p>
        <ul>
          <?php foreach ($errors as $e): ?>
            <li><?php echo htmlspecialchars($e); ?></li>
          <?php endforeach; ?>
        </ul>
        <a class="btn" href="register.html">Back to Registration</a>
      </section>
    <?php else: ?>
      <section class="card">
        <h2>Welcome to Fox Day! Registration complete.</h2>

        <div class="confirm-grid">
          <div><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></div>
          <div><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></div>
          <div><strong>Event:</strong> <?php echo htmlspecialchars($event); ?></div>
          <div><strong>Year:</strong> <?php echo htmlspecialchars($year !== "" ? $year : "Not selected"); ?></div>
        </div>

        <div class="card subtle">
          <h3>Your message</h3>
          <p><?php echo htmlspecialchars($message !== "" ? $message : "No message provided."); ?></p>
        </div>

        <p class="fox-extra">
          <?php echo htmlspecialchars($eventExtra); ?>
        </p>

    

        <div class="button-row">
          <a class="btn" href="events.php">View Events</a>
          <a class="btn btn-secondary" href="register.html">Register Another</a>
        </div>
      </section>
    <?php endif; ?>
  </main>

  <footer class="site-footer">
    <p> Seriously dont ruin the foxday suprise.</p>
  </footer>
</body>
</html>
