<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>Mega Pixel</title>
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
          <a href="user_search.php">Notifications </a>
          <a href="logout.php">Logout</a>
        </ul>
      </nav>
    </header>

    <div class="column">
      <div class="profile-container">
        <h2>User Profile</h2>
        <div class="profile-info">
          <div class="profile-picture">
            <!-- Display user's profile picture -->
            <img src="profile_picture.jpg" alt="Profile Picture">
          </div>
          <div class="profile-details">
            <!-- Display user's details -->
            <h3>Username</h3>
            <p>Email: </p>
            <p>Bio: </p>
          </div>
          <div class="edit-profile">
            <!-- Edit Profile button -->
            <a href="edit_profile.html">Edit Profile</a>
          </div>
        </div>
      </div>

      <div class="news-feed-container">
        <h2>News Feed</h2>
        <div class="post-container">
          <!-- Display latest posts from followed users -->
          <div class="post">
            <div class="post-header">
              <div class="post-author">
                <!-- Display post author's profile picture -->
                <img src="post_author_picture.jpg" alt="Author Picture">
                <!-- Display post author's name -->
                <p></p>
              </div>
              <div class="post-time">
                <!-- Display post timestamp -->
                <p></p>
              </div>
            </div>
            <div class="post-content">
              <!-- Display post content -->
              <p></p>
            </div>
            <div class="post-actions">
              <!-- Like and Comment buttons -->
              <button class="like-button">Like</button>
              <button class="comment-button">Comment</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="friend-requests-container">
        <h2>Friend Requests</h2>
        <div class="request-container">
          <!-- Display pending friend requests -->
          <div class="friend-request">
            <div class="requester">
              <!-- Display requester's profile picture -->
              <img src="requester_picture.jpg" alt="Requester Picture">
              <!-- Display requester's name -->
              <p></p>
            </div>
            <div class="request-actions">
              <!-- Accept and Decline buttons -->
              <button class="accept-button">Accept</button>
              <button class="decline-button">Decline</button>
            </div>
          </div>
        </div>
      </div>

      <div class="user-search-container">
        <h2>User Search</h2>
        <form action="search.php" method="GET">
          <input type="text" name="query" placeholder="Search users...">
          <button type="submit">Search</button>
        </form>
        <div class="search-results">
          <!-- Display search results -->
          <div class="search-result">
            <div class="result-profile">
              <!-- Display user's profile picture -->
              <img src="result_picture.jpg" alt="Result Picture">
              <!-- Display user's name -->
              <p></p>
            </div>
            <div class="result-actions">
              <!-- Add Friend button -->
              <button class="add-friend-button">Add Friend</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="scripts.js"></script>
</body>
</html>
