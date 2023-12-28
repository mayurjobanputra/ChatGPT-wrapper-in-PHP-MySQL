<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the MySQL login information from the form
    $server = $_POST["server"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Attempt to connect to MySQL server
    $conn = mysqli_connect($server, $username, $password);

    // Check if the connection was successful
    if ($conn) {
        // Create the database if it doesn't exist
        $randomNumber = rand(10000, 99999);
        $randomLetters = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 5);
        $database = "ChatGPT_" . $randomNumber . "_" . $randomLetters;
        $createDatabaseQuery = "CREATE DATABASE IF NOT EXISTS $database";
        mysqli_query($conn, $createDatabaseQuery);

        // Check if the database already exists
        $existingDatabaseQuery = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME LIKE 'ChatGPT_%'";
        $existingDatabaseResult = mysqli_query($conn, $existingDatabaseQuery);
        $existingDatabases = mysqli_fetch_all($existingDatabaseResult, MYSQLI_ASSOC);
        $existingDatabaseNames = array_column($existingDatabases, 'SCHEMA_NAME');
        if (in_array($database, $existingDatabaseNames)) {
            // Close the database connection
            mysqli_close($conn);

            // Display an error message if the database already exists
            $error = "Installation failed. An existing database starting with 'ChatGPT_' already exists.";
        } else {
            // Select the database
            mysqli_select_db($conn, $database);

            // Read the SQL queries from the install.sql file
            $sqlQueries = file_get_contents('install.sql');

            // Execute the SQL queries
            mysqli_multi_query($conn, $sqlQueries);

            // Close the database connection
            mysqli_close($conn);

            // Redirect to the next step of the installation wizard
            header("Location: next_step.php");
            exit;
        }
    } else {
        // Display an error message if the connection failed
        $error = "Failed to connect to MySQL server. Please check your login information.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Installation Wizard - Step 1</title>
</head>
<body>
    <h1>Installation Wizard - Step 1</h1>
    <?php if (isset($error)) { ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php } ?>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="server">MySQL Server:</label>
        <input type="text" name="server" id="server" required><br><br>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>
        <input type="submit" value="Connect">
    </form>
</body>
</html>
