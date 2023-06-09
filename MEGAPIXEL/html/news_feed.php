<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>News Feed</title>
  <link rel="stylesheet" type="text/css" href="../css/homepage.css">
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

    <div class="column">
      <div class="news-feed-container">
        <h2>News Feed</h2>
        <div class="post-container">
          <!-- Sample post -->
          <div class="post">
            <div class="post-header">
              <div class="post-author">
                <img src="post_author_picture.jpg" alt="Author Picture">
                <p>John Doe</p>
              </div>
              <div class="post-time">
                <p>2 hours ago</p>
              </div>
            </div>
            <div class="post-content">
              <p>This is a sample post.</p>
            </div>
            <div class="post-actions">
              <button class="like-button">Like</button>
              <button class="comment-button">Comment</button>
            </div>
          </div>

          <!-- Sample post -->
          <div class="post">
            <div class="post-header">
              <div class="post-author">
                <img src="post_author_picture.jpg" alt="Author Picture">
                <p>Jane Smith</p>
              </div>
              <div class="post-time">
                <p>5 hours ago</p>
              </div>
            </div>
            <div class="post-content">
              <p>This is another sample post.</p>
            </div>
            <div class="post-actions">
              <button class="like-button">Like</button>
              <button class="comment-button">Comment</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="column">
      <!-- Sidebar or additional content -->
    </div>
  </div>

  <!-- Scripts -->
  <script src="scripts.js"></script>
</body>
</html>
