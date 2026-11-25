<?php
// addpeople.php
// You can add your PHP logic here (e.g., checking available slots from database)

// Mockup data for demonstration based on your image
$available_slots = 4;
$total_slots = 5;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add People</title>
    <link rel="stylesheet" href="addpeople.css">
    <!-- Google Fonts for clean typography -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Dark background overlay to simulate the modal environment -->
    <div class="modal-overlay">
        
        <!-- Main Modal Container -->
        <div class="modal-container">
            
            <!-- Top Left Decorative Icon (as seen in image) -->
            <div class="top-left-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#d97736" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
            </div>

            <!-- Close Button (Top Right) -->
           <!-- Close Button (Top Right) - Ekhon clickable -->
<a href="teamorder.php" class="close-btn" aria-label="Close">
    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#a0a0a0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <line x1="18" y1="6" x2="6" y2="18"></line>
        <line x1="6" y1="6" x2="18" y2="18"></line>
    </svg>
</a>

            <!-- Header Section -->
            <div class="modal-header">
                <h2>Add People</h2>
                <p>Invite a student to join this team order</p>
                <div class="slots-available"><?php echo $available_slots; ?> of <?php echo $total_slots; ?> slots available</div>
            </div>

            <!-- Form Section -->
            <form action="" method="POST" class="add-people-form">
                
                <div class="input-group">
                    <label for="person_name">Person name</label>
                    <input type="text" id="person_name" name="person_name" placeholder="Enter full name" required>
                </div>

                <div class="input-group">
                    <label for="student_id">Student ID</label>
                    <input type="text" id="student_id" name="student_id" placeholder="Example: STU-2026-1042" required>
                </div>

                <div class="qr-invite">
                    <a href="#">Or invite with QR code &rarr;</a>
                </div>

                <!-- Spacer to push button to bottom -->
                <div class="form-spacer"></div>

                <!-- Submit Button -->
                <button type="submit" class="submit-btn" disabled>Add</button>
            </form>

        </div>
    </div>

</body>
</html>
