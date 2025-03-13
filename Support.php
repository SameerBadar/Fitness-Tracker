<?php
// Configuration
$appName = "Active Pulse";
$supportContact = [
    "email" => "support@activepulse.com",
    "phone" => "+92 305 1234567",
    "hours" => "Monday to Friday, 9:00 AM to 6:00 PM (PKT)"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support - <?php echo $appName; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }
        header {
            background: #007bff;
            color: white;
            padding: 10px 20px;
            text-align: center;
        }
        main {
            padding: 20px;
            max-width: 800px;
            margin: 20px auto;
            background: #ffffff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        h1, h2 {
            color: #007bff;
        }
        .support-info {
            margin-bottom: 20px;
        }
        .support-info p {
            font-size: 1.1em;
            color: #555;
        }
        .support-info a {
            color: #007bff;
            text-decoration: none;
        }
        .support-info a:hover {
            text-decoration: underline;
        }
        footer {
            text-align: center;
            margin: 20px 0;
            font-size: 0.9em;
            color: #555;
        }

        /* Responsive Styling */
        @media (max-width: 768px) {
            main {
                padding: 15px;
                margin: 10px;
            }
            .support-info p {
                font-size: 1em;
            }
        }
        @media (max-width: 480px) {
            header h1 {
                font-size: 1.5em;
            }
            .support-info p {
                font-size: 0.9em;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Support</h1>
    </header>
    <main>
        <h2>Need Help?</h2>
        <p>If you're facing any issues with <?php echo $appName; ?> or have any queries, feel free to reach out to us. We're here to assist you!</p>

        <div class="support-info">
            <h3>Contact Our Support Team</h3>
            <p><strong>Email:</strong> <a href="mailto:<?php echo $supportContact['email']; ?>"><?php echo $supportContact['email']; ?></a></p>
            <p><strong>Phone:</strong> <?php echo $supportContact['phone']; ?></p>
            <p><strong>Support Hours:</strong> <?php echo $supportContact['hours']; ?></p>
        </div>

        <div class="support-info">
            <h3>Frequently Asked Questions (FAQs)</h3>
            <p>Check our <a href="#">FAQ page</a> for common issues and troubleshooting tips.</p>
        </div>
    </main>
    <footer>
        &copy; <?php echo date("Y"); ?> <?php echo $appName; ?>. All rights reserved.
    </footer>
</body>
</html>
