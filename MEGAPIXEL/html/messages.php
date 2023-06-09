<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>Messages</title>
  <link rel="stylesheet" type="text/css" href="../css/messages.css">
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
      <div class="messages-container">
        <h2>Messages</h2>
        <div class="conversation-list">
          <!-- Sample conversation -->
          <div class="conversation">
            <div class="conversation-header">
              <div class="conversation-participant">
                <img src="participant1_picture.jpg" alt="Participant 1 Picture">
                <p>John Doe</p>
              </div>
              <div class="last-message-time">
                <p>2 hours ago</p>
              </div>
            </div>
            <div class="conversation-preview">
              <p>Hey, how are you doing?</p>
            </div>
          </div>

          <!-- Sample conversation -->
          <div class="conversation">
            <div class="conversation-header">
              <div class="conversation-participant">
                <img src="participant2_picture.jpg" alt="Participant 2 Picture">
                <p>Jane Smith</p>
              </div>
              <div class="last-message-time">
                <p>5 hours ago</p>
              </div>
            </div>
            <div class="conversation-preview">
              <p>Can you help me with the project?</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="message-content">
        <!-- Selected conversation and message history -->
        <div class="conversation-header">
          <div class="conversation-participant">
            <img src="participant1_picture.jpg" alt="Participant 1 Picture">
            <p>John Doe</p>
          </div>
        </div>
        <div class="message-history">
          <!-- Sample message -->
          <div class="message">
            <div class="message-sender">
              <img src="participant1_picture.jpg" alt="Participant 1 Picture">
            </div>
            <div class="message-content">
              <p>Hey, how are you doing?</p>
              <span class="message-time">2 hours ago</span>
            </div>
          </div>

          <!-- Sample message -->
          <div class="message">
            <div class="message-sender">
              <img src="participant2_picture.jpg" alt="Participant 2 Picture">
            </div>
            <div class="message-content">
              <p>I'm doing great! Thanks for asking.</p>
              <span class="message-time">1 hour ago</span>
            </div>
          </div>
        </div>
        <div class="message-input">
          <!-- Message input field and send button -->
          <textarea placeholder="Type your message..."></textarea>
          <button class="send-button">Send</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="scripts.js"></script>
</body>
</html>
