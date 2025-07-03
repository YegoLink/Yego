<?php
session_start();

// Only allow admin user 'fiston'
if (!isset($_SESSION['user']) || $_SESSION['user'] !== 'fiston') {
    header('Location: course-login.html');
    exit;
}

// Database connection file (reuse your real DB connection)
include 'db_feedback.php'; // This file should define $conn

// Fetch all messages from the 'message' table
$sql = "SELECT id, name, email, message, submitted_at FROM messages ORDER BY submitted_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin - View Messages - YegoLink</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      padding: 20px;
      background-color: #121921;
      color: #f0f4f8;
      font-family: Arial, sans-serif;
    }
    h1 {
      margin-bottom: 30px;
      color: #f39c12;
    }
    table {
      background-color: #2c3e50;
      border-radius: 8px;
      overflow: hidden;
    }
    thead tr {
      background-color: #34495e;
    }
    thead th, tbody td {
      padding: 12px 15px;
      border-bottom: 1px solid #1a2733;
    }
    tbody tr:hover {
      background-color: #3d566e;
    }
    .container {
      max-width: 960px;
      margin: auto;
    }
    .logout-link {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
<div class="container">
  <h1>User Messages</h1>

  <p class="logout-link">
    Logged in as <strong>fiston</strong> |
    <a href="logout.php" style="color:#e74c3c;">Logout</a>
  </p>

  <?php if ($result && $result->num_rows > 0): ?>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Message</th>
          <th>Submitted At</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = $result->fetch_assoc()): ?>
          <tr>
            <td><?php echo htmlspecialchars($row['id']); ?></td>
            <td><?php echo htmlspecialchars($row['name']); ?></td>
            <td><?php echo htmlspecialchars($row['email']); ?></td>
            <td><?php echo nl2br(htmlspecialchars($row['message'])); ?></td>
            <td><?php echo htmlspecialchars($row['submitted_at']); ?></td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  <?php else: ?>
    <p>No messages found.</p>
  <?php endif; ?>
</div>
</body>
</html>

<?php
$conn->close();
?>
