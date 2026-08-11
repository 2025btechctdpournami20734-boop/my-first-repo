<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pournami S Panickar - Contact</title>
    <link rel="stylesheet" href="style.css">
    
    <style>
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .error {
            color: red;
            font-size: 12px;
            margin-top: 5px;
            display: block;
        }
        .success-box {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .contact-info {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            text-align: left;
        }
    </style>
    
    <script src="script.js"></script>
</head>
<body onload="showWelcomeAlert()">

    <nav style="background-color: #2c3e50; padding: 15px 0; position: sticky; top: 0; z-index: 100;">
        <div style="max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center; padding: 0 20px;">
            <a href="index.html" style="color: white; font-size: 24px; font-weight: bold; text-decoration: none;">Pournami</a>
            <div>
                <a href="index.html" style="color: white; margin: 0 15px; text-decoration: none;">Home</a>
                <a href="about.html" style="color: white; margin: 0 15px; text-decoration: none;">About</a>
                <a href="contact.php" style="color: white; margin: 0 15px; text-decoration: none;">Contact</a>
            </div>
        </div>
    </nav>

    <main>
        <div class="container">
            <h1>Contact <span class="highlight">Me</span></h1>
            <p>Have a project in mind? Let's work together!</p>
            
            <?php
            // PHP $_POST to display submitted data (Unit 4)
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);
                $message = htmlspecialchars($_POST['message']);
                
                echo '<div class="success-box">';
                echo '<h3>✅ Message Sent Successfully!</h3>';
                echo '<p><strong>Name:</strong> ' . $name . '</p>';
                echo '<p><strong>Email:</strong> ' . $email . '</p>';
                echo '<p><strong>Message:</strong> ' . $message . '</p>';
                echo '</div>';
            }
            ?>
            
            <form method="POST" action="" onsubmit="return validateContactForm()">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" id="name" placeholder="Enter your name">
                    <span class="error" id="nameError"></span>
                </div>
                
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email">
                    <span class="error" id="emailError"></span>
                </div>
                
                <div class="form-group">
                    <label>Message:</label>
                    <textarea name="message" id="message" rows="5" placeholder="Enter your message"></textarea>
                    <span class="error" id="msgError"></span>
                </div>
                
                <button type="submit" class="btn">Send Message</button>
                <button type="reset" class="btn" style="background-color: #6c757d;">Reset</button>
            </form>
            
            <div class="contact-info">
                <h3>Other ways to reach me:</h3>
                <p>📧 Email: 2025btechctdpournami20734@poornima.edu.in</p>
                <p>📍 Location: Jaipur, India</p>
                <p>🎓 Poornima University</p>
            </div>
        </div>
        
        <div style="text-align: center; margin: 30px;">
            <button class="btn" onclick="showClickMessage()">Click Me!</button>
        </div>
    </main>

    <footer>
        <p>&copy; 2025 Pournami S Panickar | Poornima University | All Rights Reserved</p>
    </footer>

</body>
</html>