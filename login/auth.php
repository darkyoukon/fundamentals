<?php
session_start(); // remember data on the server - logged in users
$db_label = mysqli_connect('localhost', 'root', 'toorroot', 'login');
if (mysqli_connect_errno()) {
    // If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if (!isset($_POST['username'], $_POST['password']) ) {
    // Could not get the data that should have been sent.
    exit('Please fill both the username and password fields!');
}
// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
    if ($allval = $db_label->prepare('SELECT id, password FROM accounts WHERE username = ?')) { //ret obj
    // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
    $allval->bind_param('s', $_POST['username']);
    $allval->execute();
    // Store the result so we can check if the account exists in the database.
    $allval->store_result(); //ret to client results
    if ($allval->num_rows > 0) {
        $allval->bind_result($id, $password); //binding vars to method
        $allval->fetch(); //binding results with expr
        // Account exists, now we verify the password.
        // Note: remember to use password_hash in your registration file to store the hashed passwords.
        if ($_POST['password'] === $password) {
            // Verification success! User has loggedin!
            // Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            echo 'Welcome ' . $_SESSION['name'] . '!';
            echo "<a href='../site?cookie=...'><br>Going back to site</a>";
        } else {
            echo 'Incorrect password!';
        }
    } else {
        echo 'Incorrect username!';
    }

    $allval->close();
}
