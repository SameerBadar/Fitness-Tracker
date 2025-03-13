<?php
// Configuration
$appName = "Active Pulse";
$teamContacts = [
    [
        "name" => "Ahmad Hassan",
        "role" => "Lead Developer & Architect",
        "email" => "ahmad.hassan@activepulse.com",
        "phone" => "+92 301 1234567"
    ],
    [
        "name" => "Affaq Ahmad",
        "role" => "Backend Specialist",
        "email" => "affaq.ahmad@activepulse.com",
        "phone" => "+92 302 1234567"
    ],
    [
        "name" => "Faseeh Farooq",
        "role" => "Frontend Developer & UI/UX Designer",
        "email" => "faseeh.farooq@activepulse.com",
        "phone" => "+92 303 1234567"
    ],
    [
        "name" => "Sameer Badar",
        "role" => "Data Analyst & Quality Assurance",
        "email" => "sameer.badar@activepulse.com",
        "phone" => "+92 304 1234567"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Our Team - <?php echo $appName; ?></title>
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
        .team-list {
            list-style: none;
            padding: 0;
        }
        .team-member {
            margin-bottom: 20px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background: #f9f9f9;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .team-member h3 {
            margin: 0;
            color: #333;
        }
        .team-member p {
            margin: 5px 0;
            color: #555;
        }
        .team-member a {
            color: #007bff;
            text-decoration: none;
        }
        .team-member a:hover {
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
            .team-list {
                padding: 0;
            }
            .team-member {
                padding: 10px;
                font-size: 0.9em;
            }
            .team-member h3 {
                font-size: 1.2em;
            }
            .team-member p {
                font-size: 0.9em;
            }
        }
        @media (max-width: 480px) {
            header h1 {
                font-size: 1.5em;
            }
            .team-member h3 {
                font-size: 1em;
            }
            .team-member p {
                font-size: 0.8em;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Contact Our Team</h1>
    </header>
    <main>
        <h2>Get in Touch with the <?php echo $appName; ?> Team</h2>
        <p>If you want to contact any member of our development team directly, their details are listed below:</p>

        <ul class="team-list">
            <?php foreach ($teamContacts as $member): ?>
                <li class="team-member">
                    <h3><?php echo $member['name']; ?></h3>
                    <p><strong>Role:</strong> <?php echo $member['role']; ?></p>
                    <p><strong>Email:</strong> <a href="mailto:<?php echo $member['email']; ?>"><?php echo $member['email']; ?></a></p>
                    <p><strong>Phone:</strong> <?php echo $member['phone']; ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>
    <footer>
        &copy; <?php echo date("Y"); ?> <?php echo $appName; ?>. All rights reserved.
    </footer>
</body>
</html>
