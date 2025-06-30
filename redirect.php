<?php
// Get URL from query parameter
$url = isset($_GET['url']) ? $_GET['url'] : 'https://example.com';

// Basic URL sanitization
$url = filter_var($url, FILTER_SANITIZE_URL);

// Optional: Block empty or unsafe redirects
if (empty($url) || !filter_var($url, FILTER_VALIDATE_URL)) {
    die("Invalid URL");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="referrer" content="no-referrer">
  <meta http-equiv="refresh" content="0;url=<?php echo htmlspecialchars($url); ?>">
  <title>Redirecting...</title>
</head>
<body>
  <p>Redirecting... If not redirected, <a href="<?php echo htmlspecialchars($url); ?>">click here</a>.</p>
</body>
</html>
