<?php
$events = [
  [
    "title" => "Beach Destination Bus Ride",
    "datetime" => "Feb 12, 2026 — 9:30 AM",
    "location" => "Fox Statue Circle (Meet-up Spot)",
    "description" => "Hop on the bus and ride to new smirna beach."
  ],
  [
    "title" => "Campus Clue Hunt: Find the Fox",
    "datetime" => "Feb 12, 2026 — 11:00 AM",
    "location" => "In front of the quad flagpost",
    "description" => "FOllow the clues the fox left across campus for a fun reward!"
  ],
  [
    "title" => "Fox Day Picnic",
    "datetime" => "Feb 12, 2026 — 12:30 PM",
    "location" => "Lake Virginia Lawn",
    "description" => "Come for sandwiches, fruit, and lemonade."
  ],
  [
    "title" => "Fox day cookout",
    "datetime" => "Feb 12, 2026 — 5:00 PM",
    "location" => "The Commons Patio",
    "description" => "wind down from foxday with bbq and hotdogs fresh off the grill."
  ],
];
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fox Day Campus Events - Events</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <header class="site-header">
    <h1>Fox Day Campus Events</h1>
    <nav class="nav">
      <a href="index.html">Home</a>
      <a href="events.php" class="active">View Events</a>
      <a href="register.html">Register</a>
    </nav>
  </header>

  <main class="container">
    <h2 class="page-title">Event List</h2>

    <div class="grid">
      <?php foreach ($events as $event): ?>
        <article class="event-card">
          <h3><?php echo htmlspecialchars($event["title"]); ?></h3>
          <p><strong>Date/Time:</strong> <?php echo htmlspecialchars($event["datetime"]); ?></p>
          <p><strong>Location:</strong> <?php echo htmlspecialchars($event["location"]); ?></p>
          <p><?php echo htmlspecialchars($event["description"]); ?></p>
        </article>
      <?php endforeach; ?>
    </div>

    <div class="button-row">
      <a class="btn" href="register.html">Register for an Event</a>
    </div>
  </main>

  <footer class="site-footer">
    <p> Tip: Fox Day events are best enjoyed with friends.</p>
  </footer>
</body>
</html>
