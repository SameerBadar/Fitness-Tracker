<?php
// Configuration
$appName = "Active Pulse";
$termsInfo = [
    "title" => "Terms of Use",
    "intro" => "By using Active Pulse, you agree to the following terms and conditions. Please read them carefully before using our services.",
    "sections" => [
        [
            "heading" => "1. Acceptance of Terms",
            "content" => "By accessing or using Active Pulse, you agree to comply with and be bound by these Terms of Use and our Privacy Policy. If you do not agree to these terms, please do not use our services."
        ],
        [
            "heading" => "2. Changes to the Terms",
            "content" => "We may modify these Terms of Use at any time. Any changes will be posted on this page, and the effective date will be updated. We encourage you to review these terms periodically."
        ],
        [
            "heading" => "3. User Responsibilities",
            "content" => "You are responsible for maintaining the confidentiality of your account information and for all activities that occur under your account. You agree not to use the service for any unlawful or prohibited purpose."
        ],
        [
            "heading" => "4. Account Termination",
            "content" => "We reserve the right to suspend or terminate your account at any time without notice if you violate these terms. You may also terminate your account by contacting us directly."
        ],
        [
            "heading" => "5. Disclaimer of Warranties",
            "content" => "Active Pulse is provided 'as is.' We make no warranties, express or implied, regarding the functionality of the app or its suitability for your specific needs."
        ],
        [
            "heading" => "6. Limitation of Liability",
            "content" => "We are not liable for any damages arising out of the use of or inability to use Active Pulse, including but not limited to indirect, incidental, or consequential damages."
        ],
        [
            "heading" => "7. Governing Law",
            "content" => "These terms are governed by the laws of Pakistan. Any disputes arising from these terms will be subject to the exclusive jurisdiction of the courts in Pakistan."
        ],
        [
            "heading" => "8. Contact Us",
            "content" => "If you have any questions or concerns about these Terms of Use, please contact us at support@activepulse.com."
        ]
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms of Use - <?php echo $appName; ?></title>
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
        .terms-section {
            margin-bottom: 20px;
        }
        .terms-section h3 {
            font-size: 1.2em;
            color: #333;
        }
        .terms-section p {
            font-size: 1.1em;
            color: #555;
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
            .terms-section p {
                font-size: 1em;
            }
        }
        @media (max-width: 480px) {
            header h1 {
                font-size: 1.5em;
            }
            .terms-section p {
                font-size: 0.9em;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1><?php echo $appName; ?></h1>
        <h2>Terms of Use</h2>
    </header>
    <main>
        <p><?php echo $termsInfo['intro']; ?></p>

        <?php foreach ($termsInfo['sections'] as $section): ?>
            <div class="terms-section">
                <h3><?php echo $section['heading']; ?></h3>
                <p><?php echo $section['content']; ?></p>
            </div>
        <?php endforeach; ?>
    </main>
    <footer>
        &copy; <?php echo date("Y"); ?> <?php echo $appName; ?>. All rights reserved.
    </footer>
</body>
</html>
