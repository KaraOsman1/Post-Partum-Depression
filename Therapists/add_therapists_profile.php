<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Therapist Profile</title>
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
            <h1>Add Therapist Profile</h1>
            <form action="submit_therapists_profile.php" method="POST">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
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
                    <label for="level_of_education">Level of Education:</label>
                    <input type="text" id="level_of_education" name="level_of_education">
                </div>
                <div class="form-group">
                    <label for="years_of_experience">Years of Experience:</label>
                    <input type="number" id="years_of_experience" name="years_of_experience">
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
