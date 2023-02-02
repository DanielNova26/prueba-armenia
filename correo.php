<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $title = $_GET['title'];
  $author = $_GET['author'];
  $days = $_GET['days'];
  $to = "library@example.com";
  $subject = "Reservation Request: $title";
  $message = "Dear Library,\n\nI would like to reserve the following book:\n\nTitle: $title\nAuthor: $author\nDays: $days\n\nThank you.";
  $headers = "From: user@example.com";
  mail($to, $subject, $message, $headers);
  echo "Your reservation request has been sent. Thank you!";
}
?>