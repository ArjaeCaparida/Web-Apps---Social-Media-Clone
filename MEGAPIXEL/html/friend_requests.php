<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Friend Requests</title>
  <link rel="stylesheet" type="text/css" href="../css/friend_requests.css">
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
    <h2>Friend Requests</h2>
    <div class="request-list">
      <div class="request">
        <div class="requester-info">
          <img src="requester_profile_picture.jpg" alt="Requester Profile Picture">
          <div class="requester-details">
            <h3>Requester Name</h3>
            <p>Requester Bio</p>
          </div>
        </div>
        <div class="request-actions">
          <button class="accept-button">Accept</button>
          <button class="decline-button">Decline</button>
        </div>
      </div>
      <div class="request">
        <div class="requester-info">
          <img src="requester_profile_picture.jpg" alt="Requester Profile Picture">
          <div class="requester-details">
            <h3>Requester Name</h3>
            <p>Requester Bio</p>
          </div>
        </div>
        <div class="request-actions">
          <button class="accept-button">Accept</button>
          <button class="decline-button">Decline</button>
        </div>
      </div>
      <!-- Add more friend requests as needed -->
    </div>
  </div>
</body>
</html>
