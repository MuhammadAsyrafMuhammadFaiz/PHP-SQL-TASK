<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to external CSS -->
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="header-container">
            <h1>Welcome to Our Feedback Form</h1>
            <p>Your feedback is important to us. Help us improve!</p>
        </div>
    </header>
    
    <!-- Main Content Section -->
    <div class="container">
        <h2>Thanks for submitting your data! It helps a lot for our survey!</h2>
        
        <!-- Feedback Form -->
        <form action="submit_form.php" method="POST">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="feedback">Your Feedback:</label>
            <textarea id="feedback" name="feedback" required></textarea>
            
            <button type="submit" class="btn">Submit Feedback</button>
        </form>
    </div>
    
    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Feedback Survey. All Rights Reserved.</p>
    </footer>
</body>
</html>
