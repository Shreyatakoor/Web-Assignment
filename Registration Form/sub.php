<?php
// Enable error reporting during development
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : 'Not provided';
  $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : 'Not provided';
  $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : 'Not provided';
  $course = isset($_POST['course']) ? htmlspecialchars($_POST['course']) : 'Not provided';
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Form Submission Result</title>
    <link rel="stylesheet" href="ss.css">
  </head>
  <body>
    <header>
      <h1>Registration Successful!</h1>
    </header>
    <section>
      <h2>Your Submitted Information</h2>
      <p><strong>Name:</strong> <?php echo $name; ?></p>
      <p><strong>Email:</strong> <?php echo $email; ?></p>
      <p><strong>Phone:</strong> <?php echo $phone; ?></p>
      <p><strong>Course:</strong> <?php echo $course; ?></p>
    </section>
  </body>
  </html>
<?php
} else {
  echo "Invalid request method.";
}
?>