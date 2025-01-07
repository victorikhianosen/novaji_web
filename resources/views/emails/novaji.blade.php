<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333333;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            background-color: #FF3A00;
            padding: 20px;
            border-radius: 8px 8px 0 0;
        }
        .header h1 {
            color: #ffffff;
            margin: 0;
            font-size: 24px;
        }
        .content {
            padding: 20px;
            font-size: 16px;
            line-height: 1.6;
        }
        .button {
            display: inline-block;
            padding: 12px 24px;
            margin-top: 20px;
            color: #ffffff;
            background-color: #FF3A00;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .footer {
            text-align: center;
            padding: 20px;
            font-size: 14px;
            color: #777777;
        }
        .footer a {
            color: #FF3A00;
            text-decoration: none;
        }
        @media (max-width: 600px) {
            .container {
                width: 100%;
                padding: 10px;
            }
            .header h1 {
                font-size: 20px;
            }
            .content {
                padding: 10px;
                font-size: 14px;
            }
            .button {
                padding: 10px 20px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Welcome to Novaji Introserve!</h1>
        </div>
        <div class="content">
            <p>Dear Customer,</p>
            <p>Thank you for reaching out. We will get back to you as soon as possible via email. If you need immediate assistance, please feel free to contact us.</p>
            <a href="https://novajii.com/ords/f?p=bulksms:register" class="button">Get Started</a>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Novaji Introserve. All Rights Reserved.</p>
            <p><a href="mailto:info@novajii.com">Contact Us</a></p>
        </div>
    </div>
</body>
</html>
