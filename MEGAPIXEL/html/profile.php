<!DOCTYPE html>
<html>
<head>
  <title>My Profile</title>
  <link rel="stylesheet" type="text/css" href="../css/profile.css">
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
  <div class="profile">
    <div class="profile-picture">
      <!-- Profile picture image here -->
      <button class="edit-button">Edit</button>
    </div>
    <div class="details">
      <!-- First Name Last Name here -->
    </div>
  </div>

  <div class="cover-photos">
    <!-- Cover photos image here -->
    <button class="edit-button">Edit</button>
  </div>

  <div class="status">
    <textarea placeholder="Write your status..."></textarea>
    <div class="status-buttons">
      <button>Add Photos</button>
      <button>Post</button>
    </div>
  </div>
</body>
</html>
