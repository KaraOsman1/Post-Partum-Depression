<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Victim Profile</title>
    <link rel="stylesheet" href="assets/css/add_profile.css">
</head>
<body>
    <!-- Navigation -->
    <?php include '../navigation.php'; ?>

    <!-- Sidebar -->
    <?php include 'partials/sidebar.php'; ?>
    

    <!-- Main Content -->
    <div class="content">
        <div class="container">
            <h1>Add Victim Profile</h1>
            <form action="submit_victims_profile.php" method="POST">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="number" id="age" name="age" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="phone">
                </div>
                <div class="form-group">
                    <label for="chief_complain">Chief Complain:</label>
                    <input type="text" id="chief_complain" name="chief_complain">
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
