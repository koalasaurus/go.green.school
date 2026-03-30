<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <style>
        body { font-family: 'Segoe UI', Arial, sans-serif; background: #f0fdf4; margin: 0; padding: 0; }
        .container { max-width: 600px; margin: 30px auto; background: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 24px rgba(6, 78, 59, 0.08); }
        .header { background: linear-gradient(135deg, #064e3b, #10b981); padding: 32px; text-align: center; }
        .header h1 { color: #ffffff; font-size: 22px; margin: 0; font-weight: 700; }
        .header p { color: rgba(255,255,255,0.8); font-size: 13px; margin-top: 6px; }
        .body { padding: 32px; }
        .field { margin-bottom: 20px; }
        .field-label { font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #10b981; margin-bottom: 6px; }
        .field-value { font-size: 15px; color: #064e3b; line-height: 1.6; }
        .message-box { background: #f0fdf4; border-left: 4px solid #10b981; padding: 16px 20px; border-radius: 0 8px 8px 0; margin-top: 8px; }
        .message-box p { margin: 0; color: #064e3b; font-size: 15px; line-height: 1.7; white-space: pre-wrap; }
        .footer { background: #f8faf9; padding: 20px 32px; text-align: center; border-top: 1px solid #e5e7eb; }
        .footer p { color: #9ca3af; font-size: 12px; margin: 0; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🌿 Go Green School</h1>
            <p>New Contact Form Message</p>
        </div>
        <div class="body">
            <div class="field">
                <div class="field-label">From</div>
                <div class="field-value">{{ $name }}</div>
            </div>
            <div class="field">
                <div class="field-label">Email</div>
                <div class="field-value">{{ $email }}</div>
            </div>
            <div class="field">
                <div class="field-label">Subject</div>
                <div class="field-value">{{ $subject }}</div>
            </div>
            <div class="field">
                <div class="field-label">Message</div>
                <div class="message-box">
                    <p>{{ $messageBody }}</p>
                </div>
            </div>
        </div>
        <div class="footer">
            <p>This email was sent from the Go Green School contact form.</p>
        </div>
    </div>
</body>
</html>
