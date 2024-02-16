<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sstyles.css">
    <title>Admin Dashboard</title>
</head>
<body>
    <div class="dashboard-container">
        <h1>Admin Dashboard</h1>

        <!-- Therapists Section -->
        <div class="section">
            <h2>Therapists</h2>
            <button onclick="viewTherapists()">View Therapists</button>
            <!-- Add more buttons or links as needed -->
        </div>

        <!-- Victims Section -->
        <div class="section">
            <h2>Victims</h2>
            <button onclick="viewVictims()">View Victims</button>
            <!-- Add more buttons or links as needed -->
        </div>

        <!-- Work Plans Section -->
        <div class="section">
            <h2>Work Plans</h2>
            <button onclick="viewWorkPlans()">View Work Plans</button>
            <!-- Add more buttons or links as needed -->
        </div>

        <!-- Progress Section -->
        <div class="section">
            <h2>Progress</h2>
            <button onclick="viewProgress()">View Progress</button>
            <!-- Add more buttons or links as needed -->
        </div>

        <!-- Broadcasting Section -->
        <div class="section">
            <h2>Broadcasting</h2>
            <button onclick="viewBroadcasts()">View Broadcasts</button>
            <!-- Add more buttons or links as needed -->
        </div>

        <!-- Appointments Section -->
        <div class="section">
            <h2>Appointments</h2>
            <button onclick="viewAppointments()">View Appointments</button>
            <!-- Add more buttons or links as needed -->
        </div>
    </div>

    <script src="sscript.js"></script>
</body>
</html>
