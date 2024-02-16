// Function to fetch and display therapists
function viewTherapists() {
    fetchUsers('therapists', 'therapistList');
}

// Function to fetch and display victims
function viewVictims() {
    fetchUsers('victims', 'victimList');
}

// Function to fetch and display work plans
function viewWorkPlans() {
    fetchUsers('work_plans', 'workPlanList');
}

// Function to fetch and display progress
function viewProgress() {
    fetchUsers('progress', 'progressList');
}

// Function to fetch and display broadcasts
function viewBroadcasts() {
    fetchUsers('broadcasts', 'broadcastList');
}

// Function to fetch and display appointments
function viewAppointments() {
    fetchUsers('appointments', 'appointmentList');
}

// Function to fetch users from the database
function fetchUsers(tableName, targetElementId) {
    // You need to implement the PHP script to fetch data from the database based on the table name
    // Use AJAX or fetch API to make a request to the PHP script

    // Placeholder example without actual AJAX request
    const usersData = [
        { name: 'User 1', email: 'user1@example.com' },
        { name: 'User 2', email: 'user2@example.com' },
        { name: 'User 3', email: 'user3@example.com' }
        // Add more user data as needed
    ];

    const targetElement = document.getElementById(targetElementId);
    targetElement.innerHTML = ''; // Clear the content before adding new data

    usersData.forEach(user => {
        const userElement = document.createElement('div');
        userElement.innerHTML = `<strong>${user.name}</strong> - ${user.email}`;
        targetElement.appendChild(userElement);
    });
}


// function viewTherapists() {
//     // Add logic to show therapists information or navigate to therapists page
//     console.log("View Therapists");
// }

// function viewVictims() {
//     // Add logic to show victims information or navigate to victims page
//     console.log("View Victims");
// }

// function viewWorkPlans() {
//     // Add logic to show work plans information or navigate to work plans page
//     console.log("View Work Plans");
// }

// function viewProgress() {
//     // Add logic to show progress information or navigate to progress page
//     console.log("View Progress");
// }

// function viewBroadcasts() {
//     // Add logic to show broadcasts information or navigate to broadcasts page
//     console.log("View Broadcasts");
// }

// function viewAppointments() {
//     // Add logic to show appointments information or navigate to appointments page
//     console.log("View Appointments");
// }
