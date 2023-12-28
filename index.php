<?php
/**
 * File: index.php
 * Version: 0.1.2
 * Description: Main entry point of the application.
 */




// Function to redirect to error.php with a unique error number
function redirectToError($errorCode) {
    $errorNumber = $errorCode; // Generate a unique 4-digit error number
    header("Location: error.php?error=$errorNumber");
    exit;
}

// Include the core.php file
$errorCode = 1000;
if (file_exists('core.php')) {
    require_once 'core.php';
} else {
    redirectToError($errorCode++);
}

// Include the header.php file
if (file_exists('header.php')) {
    require_once 'header.php';
} else {
    $errorCode = 1001;
    redirectToError($errorCode++);
}

// Include the page.php file
if (file_exists('page.php')) {
    require_once 'page.php';
} else {
    $errorCode = 1002;
    redirectToError($errorCode++);
}

// Include the footer.php file
if (file_exists('footer.php')) {
    require_once 'footer.php';
} else {
    $errorCode = 1003;
    redirectToError($errorCode++);
}

// Rest of your code for header, page, and footer
// ...
?>
