<?php

// Check if the request is coming from a browser
if (isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])) {
    // Redirect to /
    header("Location: /");
    exit;
} else {
    // Redirect to /
    header("Location: /");
    exit;
}

?>
