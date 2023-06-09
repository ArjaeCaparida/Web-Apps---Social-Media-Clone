<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Logout</title>
  <link rel="stylesheet" type="text/css" href="../css/logout.css">
</head>
<body>
  <button id="logout-btn">Logout</button>

  <div id="modal" class="modal">
    <div class="modal-content">
      <h2>Confirm Logout</h2>
      <p>Are you sure you want to log out?</p>
      <div class="modal-buttons">
        <button id="cancel-btn">Cancel</button>
        <button id="confirm-btn">Logout</button>
      </div>
    </div>
  </div>

  <script>
const logoutBtn = document.getElementById('logout-btn');
const modal = document.getElementById('modal');
const cancelBtn = document.getElementById('cancel-btn');
const confirmBtn = document.getElementById('confirm-btn');

logoutBtn.addEventListener('click', function() {
  modal.style.display = 'block';
});

cancelBtn.addEventListener('click', function() {
  modal.style.display = 'none';
});

confirmBtn.addEventListener('click', function() {
  // Perform logout action
  // You can redirect the user to the logout page or handle the logout logic here

  // For example, redirecting to a logout page:
  window.location.href = 'logout.php';
});

  </script>
</body>
</html>
