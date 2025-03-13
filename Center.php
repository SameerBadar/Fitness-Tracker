<?php
// Configuration
$appName = "Active Pulse";
$privacyInfo = [
    "title" => "Privacy Policy",
    "intro" => "At Active Pulse, your privacy is our top priority. This Privacy Policy outlines the types of personal information we collect, how we use it, and the steps we take to safeguard your data.",
    "sections" => [
        [
            "heading" => "1. Information We Collect",
            "content" => "We collect information that you provide directly to us, such as your name, email address, phone number, and other personal information when you register or use our services."
        ],
        [
            "heading" => "2. How We Use Your Information",
            "content" => "Your information is used to personalize your experience, improve our services, communicate with you, and process transactions. We may also use your data for analytics and to send promotional content with your consent."
        ],
        [
            "heading" => "3. Data Security",
            "content" => "We take reasonable steps to protect your personal information from unauthorized access, alteration, or destruction. However, no method of transmission over the Internet is 100% secure, so we cannot guarantee absolute security."
        ],
        [
            "heading" => "4. Sharing Your Information",
            "content" => "We do not sell, rent, or trade your personal information to third parties. We may share information with trusted partners to improve our services, but only under strict confidentiality agreements."
        ],
        [
            "heading" => "5. Your Rights",
            "content" => "You have the right to access, correct, or delete your personal information. You can contact us to exercise these rights or to withdraw your consent at any time."
        ],
        [
            "heading" => "6. Changes to This Privacy Policy",
            "content" => "We may update this Privacy Policy from time to time. When we do, we will post the updated policy on this page with the effective date."
        ],
        [
            "heading" => "7. Contact Us",
            "content" => "If you have any questions or concerns about this Privacy Policy or how we handle your personal data, please contact us at support@activepulse.com."
        ]
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy - <?php echo $appName; ?></title>
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
        .privacy-section {
            margin-bottom: 20px;
        }
        .privacy-section h3 {
            font-size: 1.2em;
            color: #333;
        }
        .privacy-section p {
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
            .privacy-section p {
                font-size: 1em;
            }
        }
        @media (max-width: 480px) {
            header h1 {
                font-size: 1.5em;
            }
            .privacy-section p {
                font-size: 0.9em;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1><?php echo $appName; ?></h1>
        <h2>Privacy Policy</h2>
    </header>
    <main>
        <p><?php echo $privacyInfo['intro']; ?></p>

        <?php foreach ($privacyInfo['sections'] as $section): ?>
            <div class="privacy-section">
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
