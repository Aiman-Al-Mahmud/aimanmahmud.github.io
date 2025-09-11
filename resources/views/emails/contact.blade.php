<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .content {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 0 0 10px 10px;
        }
        .field {
            margin-bottom: 15px;
            padding: 10px;
            background: white;
            border-radius: 5px;
            border-left: 4px solid #667eea;
        }
        .field strong {
            color: #667eea;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>New Contact Form Submission</h1>
        <p>You have received a new message from your portfolio website</p>
    </div>
    
    <div class="content">
        <div class="field">
            <strong>Name:</strong> {{ $name }}
        </div>
        
        <div class="field">
            <strong>Email:</strong> {{ $email }}
        </div>
        
        <div class="field">
            <strong>Message:</strong><br>
            {{ $contactMessage }}
        </div>
        
        <div class="field">
            <strong>Submitted At:</strong> {{ now()->format('F j, Y \a\t g:i A') }}
        </div>
    </div>
</body>
</html>
