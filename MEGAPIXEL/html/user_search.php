<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>User Search</title>
  <link rel="stylesheet" type="text/css" href="../css/user_search.css">
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
    <header>
      <h1>User Search</h1>
    </header>

    <form class="search-form" action="search.php" method="GET">
      <input type="text" name="query" placeholder="Search users...">
      <button type="submit">Search</button>
    </form>

    <div class="search-results">
      <h2>Search Results</h2>

      <div class="result">
        <div class="result-profile">
          <img src="result_picture.jpg" alt="Result Picture">
          <h3>Username</h3>
          <p>Email: </p>
        </div>
        <div class="result-actions">
          <button class="add-friend-button">Add Friend</button>
        </div>
      </div>

      <!-- Add more result items as needed -->

    </div>
  </div>
</body>
</html>
