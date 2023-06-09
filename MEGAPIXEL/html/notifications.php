<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Notifications</title>
  <link rel="stylesheet" type="text/css" href="../css/notifications.css">
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
    <h1>Notifications</h1>

    <ul class="notification-list">
      <li class="notification">
        <div class="notification-content">
          <div class="notification-info">
            <img src="notification_image1.jpg" alt="Notification Image">
            <p class="notification-text">Notification 1</p>
          </div>
          <p class="notification-time">1 hour ago</p>
        </div>
      </li>
      <li class="notification">
        <div class="notification-content">
          <div class="notification-info">
            <img src="notification_image2.jpg" alt="Notification Image">
            <p class="notification-text">Notification 2</p>
          </div>
          <p class="notification-time">3 hours ago</p>
        </div>
      </li>
      <!-- Add more notifications here -->
    </ul>
  </div>
</body>
</html>
