<?php

// Check if the file is being accessed through a browser
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
