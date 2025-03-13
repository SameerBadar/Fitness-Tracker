<?php
// Configuration
$appName = "Active Pulse";
$cookiesInfo = [
    "title" => "Cookies Policy",
    "intro" => "This Cookies Policy explains how Active Pulse uses cookies and similar technologies to enhance your experience while using our services. By using Active Pulse, you consent to the use of cookies as described in this policy.",
    "sections" => [
        [
            "heading" => "1. What Are Cookies?",
            "content" => "Cookies are small files that are stored on your device when you visit a website or use an online service. They allow websites to remember your preferences and improve your user experience."
        ],
        [
            "heading" => "2. How We Use Cookies",
            "content" => "We use cookies to enhance your experience, personalize content and ads, provide social media features, and analyze traffic. We may also share information about your use of our site with our trusted social media, advertising, and analytics partners."
        ],
        [
            "heading" => "3. Types of Cookies We Use",
            "content" => "We use both session cookies (temporary cookies that expire once you close your browser) and persistent cookies (cookies that remain on your device for a set period or until you delete them)."
        ],
        [
            "heading" => "4. Third-Party Cookies",
            "content" => "We may allow third-party service providers to place cookies on our site for advertising, analytics, and social media purposes. These cookies are subject to the privacy policies of those third parties."
        ],
        [
            "heading" => "5. Your Cookie Choices",
            "content" => "You can control and manage your cookie preferences through your browser settings. You may block or delete cookies, but doing so may affect the functionality of the website and your user experience."
        ],
        [
            "heading" => "6. Changes to This Cookies Policy",
            "content" => "We may update this Cookies Policy from time to time. When we do, we will post the updated policy on this page, and the effective date will be updated."
        ],
        [
            "heading" => "7. Contact Us",
            "content" => "If you have any questions or concerns about our use of cookies, please contact us at support@activepulse.com."
        ]
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies Policy - <?php echo $appName; ?></title>
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
        .cookies-section {
            margin-bottom: 20px;
        }
        .cookies-section h3 {
            font-size: 1.2em;
            color: #333;
        }
        .cookies-section p {
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
            .cookies-section p {
                font-size: 1em;
            }
        }
        @media (max-width: 480px) {
            header h1 {
                font-size: 1.5em;
            }
            .cookies-section p {
                font-size: 0.9em;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1><?php echo $appName; ?></h1>
        <h2>Cookies Policy</h2>
    </header>
    <main>
        <p><?php echo $cookiesInfo['intro']; ?></p>

        <?php foreach ($cookiesInfo['sections'] as $section): ?>
            <div class="cookies-section">
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
