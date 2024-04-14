<?php
include('../includes/db.php');  
session_start();



if(isset($_SESSION["email"])){


        // Select email from admin table and match with admin
        $query = "SELECT email FROM user WHERE email = '{$_SESSION["email"]}' AND type = 'admin'";

        $result = mysqli_query($con, $query);

        if ($result) {
            // Check if the email exists in the admin table
            if (mysqli_num_rows($result) == 0) {
                // Email exists in the admin table, redirect to admin page
                header("Location: ./login.php");
                
                exit();
            }
        } else {
            // Error in executing the query
            echo "Error: " . mysqli_error($con);
        }



}else{
    header("location: ./login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <header>
        <nav class="bg-black  flex text-white fixed top-0 left-0 right-0 h-16">
            <div class="relative my-auto ml-auto ">
                
                <a href="../logout_process.php" class=" p-5"> logout</a>

            </div>

        </nav>
        <nav class="bg-black text-white fixed top-0 bottom-0 left-0 w-64  h-full flex flex-col">
            <div class="flex flex-col  h-full">
                <h1 class="text-xl font-bold p-4">Admin</h1>
                <ul class="flex-1 px-5">
                    <li class="p-4 hover:bg-gray-800">
                        <a href="index.php?page=dashboard.php">Dashboard</a>
                    </li>
                    <li class="p-4 hover:bg-gray-800 relative" id="hospitalDropdown">
                        <a href="javascript:void(0);" onclick="toggleHospitalDropdown()">Mange Hospital</a>
                        <ul class="relative bg-gray-800 text-white rounded-md py-2 mt-2 hidden" id="hospitalDropdownMenu">
                            <li class="px-4 py-2 hover:bg-black"><a href="index.php?page=hospital.php">View Hospitals</a></li>
                            <li class="px-4 py-2 hover:bg-black"><a href="index.php?page=hospital_add.php">Add Hospital</a></li>
                            <!-- Add more dropdown items here if needed -->
                        </ul>
                    </li>
                    <li class="p-4 hover:bg-gray-800 relative" id="manageDoctorDropdown">
                        <a href="javascript:void(0);" onclick="toggleManageDoctorDropdown()">Manage Doctor</a>
                        <ul class="relative bg-gray-800 text-white rounded-md py-2 mt-2 hidden" id="manageDoctorDropdownMenu">
                            <li class="px-4 py-2 hover:bg-black"><a href="index.php?page=doctor.php">View Doctor</a></li>
                            <li class="px-4 py-2 hover:bg-black"><a href="index.php?page=doctor_add.php">Add Doctor</a></li>
                            <!-- Add more dropdown items here if needed -->
                        </ul>
                    </li>
                    <li class="p-4 hover:bg-gray-800 relative" id="bloodDropdown">
                        <a href="javascript:void(0);" onclick="toggleBloodDropdown()">Blood</a>
                        <ul class="relative bg-gray-800 text-white rounded-md py-2 mt-2 hidden" id="bloodDropdownMenu">
                            <li class="px-4 py-2 hover:bg-black"><a href="index.php?page=blood.php">View Blood</a></li>
                        </ul>
                    </li>
                    
                    
                    
                    
                    <li class="p-4 hover:bg-gray-800">
                        <a href="index.php?page=hospital_detail.php" class="nav-link">Hospital Details</a>
                    </li>
                    <li class="p-4 hover:bg-gray-800">
                        <a href="index.php?page=patient.php" class="nav-link">Patient</a>
                    </li>


                </ul>
                
                
            </div>
        </nav>
        
        
    </header>

    <main class="ml-80 mt-24 h-full w-full">
        <?php
        // Check if the 'page' query parameter is set
        if(isset($_GET['page'])) {
            // Sanitize the input to prevent directory traversal
            $page = basename($_GET['page']);
            // Include the content based on the 'page' query parameter
            include $page;
        } else {
            // Include default content here if no 'page' parameter is provided
        }
        ?>
    </main>

<script src="../js/main.js"></script>


</body>
</html>