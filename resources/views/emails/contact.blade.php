<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <style>
    body {
      font-family: 'Segoe UI', Arial, sans-serif;
      background-color: #f8fafc;
      padding: 20px;
      color: #333;
    }
    .container {
      background: #fff;
      border-radius: 10px;
      padding: 25px;
      max-width: 600px;
      margin: 0 auto;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    .header {
      text-align: center;
      border-bottom: 2px solid #2563eb;
      padding-bottom: 10px;
      margin-bottom: 20px;
    }
    .header h2 {
      color: #1e3a8a;
      margin: 0;
    }
    .info p {
      margin: 8px 0;
      font-size: 15px;
    }
    .message-box {
      background: #f0f9ff;
      padding: 15px;
      border-left: 4px solid #3b82f6;
      border-radius: 5px;
      margin-top: 15px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h2>📩 New Contact Inquiry</h2>
    </div>

    <div class="info">
      <p><strong>Name:</strong> {{ $name }}</p>
      <p><strong>Email:</strong> {{ $email }}</p>
      <div class="message-box">
        <strong>Message:</strong>
        <p>{{ $message }}</p>
      </div>
    </div>

    <p style="margin-top:25px; font-size:13px; color:#6b7280;">
      This message was sent via the Globecon Construction website contact form.
    </p>
  </div>
</body>
</html>
