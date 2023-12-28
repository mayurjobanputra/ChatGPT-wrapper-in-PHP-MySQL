<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the MySQL login information from the form
    $server = $_POST["server"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $database = $_POST["database"];

    // Attempt to connect to MySQL server
    $conn = mysqli_connect($server, $username, $password);

    // Check if the connection was successful
    if ($conn) {
        // Select the database
        mysqli_select_db($conn, $database);

        // Check if the database is empty
        $tables = mysqli_query($conn, "SHOW TABLES");
        if (mysqli_num_rows($tables) == 0) {
            // Read the SQL queries from the install.sql file
            $sqlQueries = file_get_contents('install.sql');

            // Execute the SQL queries
            mysqli_multi_query($conn, $sqlQueries);
        }

        // Close the database connection
        mysqli_close($conn);

        // Redirect to the next step of the installation wizard
        header("Location: " . $_SERVER["PHP_SELF"] . "?step=2");
        exit;
    } else {
        // Display an error message if the connection failed
        $error = "Failed to connect to MySQL server. Please check your login information.";
    }
}

// Check if the step parameter is set to 2
if (isset($_GET["step"]) && $_GET["step"] == 2) {
    // Display the results on step 2
    echo "Installation completed successfully!";
    // You can add more content or redirect to another page here
} else {
    // Display the installation form on step 1
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
            <label for="database">Database:</label>
            <input type="text" name="database" id="database" required><br><br>
            <input type="submit" value="Connect">
        </form>
    </body>
    </html>
    <?php
}
?>