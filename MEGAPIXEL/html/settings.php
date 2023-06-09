<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Settings</title>
  <link rel="stylesheet" type="text/css" href="../css/settings.css">
  <link rel="icon" href="../assets/logos/logo_with_bg.png" type="image/png">
</head>
<body>
   <div class="container">
    <header>
      <nav>
           <ul>
          <a href="profile.php">Profile</a>
          <a href="news_feed.php">News Feed</a>
          <a href="messages.php">Messages</a>
          <a href="friend_requests.php">Friend Requests</a>
          <a href="user_search.php">Search</a>
          <a href="notifications.php">Notifications</a>
          <a href="settings.php">Settings</a>
          <a href="logout.php">Logout</a>
        </ul>
      </nav>
    </header>
  <div class="container">
    <h1>Settings</h1>
    
    <form action="update_settings.php" method="POST">
      <h2>Personal Information</h2>
      
      <label for="first-name">First Name:</label>
      <input type="text" id="first-name" name="first-name" required>

      <label for="last-name">Last Name:</label>
      <input type="text" id="last-name" name="last-name" required>

      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
      
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      
      <label for="bio">Bio:</label>
      <textarea id="bio" name="bio" rows="4"></textarea>

      <button type="submit">Update Personal Information</button>
    </form>

    <form action="update_email.php" method="POST">
      <h2>Email Update</h2>

      <label for="current-email">Current Email:</label>
      <input type="email" id="current-email" name="current-email" required>

      <label for="new-email">New Email:</label>
      <input type="email" id="new-email" name="new-email" required>

      <label for="confirm-email">Confirm New Email:</label>
      <input type="email" id="confirm-email" name="confirm-email" required>

      <button type="submit">Update Email</button>
    </form>

    <form action="update_password.php" method="POST">
      <h2>Password Update</h2>

      <label for="current-password">Current Password:</label>
      <input type="password" id="current-password" name="current-password" required>

      <label for="new-password">New Password:</label>
      <input type="password" id="new-password" name="new-password" required>

      <label for="confirm-password">Confirm New Password:</label>
      <input type="password" id="confirm-password" name="confirm-password" required>

      <button type="submit">Update Password</button>
    </form>
  </div>
</body>
</html>
