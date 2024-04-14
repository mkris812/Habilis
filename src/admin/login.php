<?php
session_start();
include('../includes/db.php');  
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"];
    $password = $_POST["password"];


    // Perform query to check if user exists in the database
    $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con, $query);

    // Check if query executed successfully
    if ($result) {
        // Check if user exists
        if (mysqli_num_rows($result) == 1) {
            // Fetch user data
            $user = mysqli_fetch_assoc($result);

            // Check if the user is an admin
            if ($user['type'] == 'admin') {
                // User is an admin, set session variables
                $_SESSION["email"] = $email;
                // Redirect admin to the dashboard
                header("Location: ./index.php");
                exit();
            } else {
                // Redirect other users to the index page
                $_SESSION["email"] = $email;
                header("Location: ../index.php");
                exit();
            }
        } else {
            // User does not exist or credentials are incorrect
            echo "<script>alert('Invalid email or password')</script>";
        }
    } else {
        // Error in executing query
        echo "Error: " . mysqli_error($con);
    }

    // Close database connection
    mysqli_close($con);
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="">

    <div class="max-w-md mt-40 mx-auto bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-2xl font-bold mb-4 text-blue-600">Login</h2>
        <form action="#" method="post">
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-600 focus:ring focus:ring-blue-200 px-3 py-2">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-semibold">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-600 focus:ring focus:ring-blue-200 px-3 py-2">
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500">Login</button>
            </div>
        </form>
    </div>
    
    
    
</body>
</html>