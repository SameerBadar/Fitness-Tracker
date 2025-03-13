<?php
// Configuration
$appName = "Active Pulse";
$developers = [
    [
        "name" => "Ahmad Hassan",
        "role" => "Lead Developer & Architect",
        "bio" => "Ahmad specializes in system architecture and project management. He leads the team with his expertise in creating scalable and efficient solutions."
    ],
    [
        "name" => "Affaq Ahmad",
        "role" => "Backend Specialist",
        "bio" => "Affaq is an expert in backend systems, ensuring seamless data flow and server management. He focuses on database optimization and API development."
    ],
    [
        "name" => "Faseeh Farooq",
        "role" => "Frontend Developer & UI/UX Designer",
        "bio" => "Faseeh designs intuitive user interfaces and brings creativity to the front end. He ensures a visually appealing and user-friendly experience."
    ],
    [
        "name" => "Sameer Badar",
        "role" => "Data Analyst & Quality Assurance",
        "bio" => "Sameer handles data analysis and quality assurance, ensuring the platform runs smoothly with zero errors."
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meet the Developers - <?php echo $appName; ?></title>
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
        .developer-list {
            list-style: none;
            padding: 0;
        }
        .developer {
            margin-bottom: 20px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background: #f9f9f9;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .developer h3 {
            margin: 0;
            color: #333;
        }
        .developer p {
            margin: 5px 0;
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
            .developer-list {
                padding: 0;
            }
            .developer {
                padding: 10px;
                font-size: 0.9em;
            }
            .developer h3 {
                font-size: 1.2em;
            }
            .developer p {
                font-size: 0.9em;
            }
        }
        @media (max-width: 480px) {
            header h1 {
                font-size: 1.5em;
            }
            .developer h3 {
                font-size: 1em;
            }
            .developer p {
                font-size: 0.8em;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Meet the Developers</h1>
    </header>
    <main>
        <h2>Our Talented Team</h2>
        <p>Meet the brilliant minds behind <?php echo $appName; ?>:</p>

        <ul class="developer-list">
            <?php foreach ($developers as $developer): ?>
                <li class="developer">
                    <h3><?php echo $developer['name']; ?></h3>
                    <p><strong>Role:</strong> <?php echo $developer['role']; ?></p>
                    <p><?php echo $developer['bio']; ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>
    <footer>
        &copy; <?php echo date("Y"); ?> <?php echo $appName; ?>. All rights reserved.
    </footer>
</body>
</html>
