<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <link rel="stylesheet" href="assets/css/home.css">
</head>
<body>
    <!-- Navigation -->
    <?php include '../navigation.php'; ?>

    <!-- Sidebar -->
    <?php include 'partials/sidebar.php'; ?>

    <!-- Main Content -->
    <div class="content">
        <div class="frame">
            <h2>Therapists</h2>
            <!-- Display 5 newest therapists data here -->
            <?php
                // Assuming you have already established a database connection
                include 'db_connection.php'; // Include your database connection script

                // Fetch 5 newest therapists data
                $sql = "SELECT * FROM THERAPIST ORDER BY Id DESC LIMIT 5";
                $result = mysqli_query($conn, $sql);

                // Check if there are any results
                if (mysqli_num_rows($result) > 0) {
                    // Output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='therapist'>" . $row["Username"] . "</div>";
                        // You can display other relevant data fields here as needed
                    }
                } else {
                    echo "0 results";
                }

                // Close the database connection
                mysqli_close($conn);
            ?>

        </div>
        <div class="frame">
            <h2>Victims</h2>
            <!-- Display 5 newest victims data here -->
            <?php
                // Assuming you have already established a database connection
                include 'config/db_connection.php'; // Include your database connection script

                // Fetch 5 newest therapists data
                $sql = "SELECT * FROM Victims ORDER BY Id DESC LIMIT 5";
                $result = mysqli_query($conn, $sql);

                // Check if there are any results
                if (mysqli_num_rows($result) > 0) {
                    // Output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='victims'>" . $row["Username"] . "</div>";
                        // You can display other relevant data fields here as needed
                    }
                } else {
                    echo "0 results";
                }

                // Close the database connection
                mysqli_close($conn);
            ?>
        </div>
        <div class="frame">
            <h2>Work Plan</h2>
            <!-- Display 5 newest work plan data here -->
            <?php
                // Assuming you have already established a database connection
                include 'config/db_connection.php'; // Include your database connection script

                // Fetch 5 newest therapists data
                $sql = "SELECT * FROM work_plan ORDER BY Victims_Id DESC LIMIT 5";
                $result = mysqli_query($conn, $sql);

                // Check if there are any results
                if (mysqli_num_rows($result) > 0) {
                    // Output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='therapist'>" . $row["Username"] . "</div>";
                        // You can display other relevant data fields here as needed
                    }
                } else {
                    echo "0 results";
                }

                // Close the database connection
                mysqli_close($conn);
            ?>
        </div>
        <div class="frame">
            <h2>Progress</h2>
            <!-- Display 5 newest progress data here -->
            <?php
                // Assuming you have already established a database connection
                include 'config/db_connection.php'; // Include your database connection script

                // Fetch 5 newest therapists data
                $sql = "SELECT * FROM progress ORDER BY Victims_Id DESC LIMIT 5";
                $result = mysqli_query($conn, $sql);

                // Check if there are any results
                if (mysqli_num_rows($result) > 0) {
                    // Output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='therapist'>" . $row["Username"] . "</div>";
                        // You can display other relevant data fields here as needed
                    }
                } else {
                    echo "0 results";
                }

                // Close the database connection
                mysqli_close($conn);
            ?>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
