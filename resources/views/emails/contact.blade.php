<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #FAF7F2; margin: 0; padding: 0; }
        .wrap { max-width: 560px; margin: 2rem auto; background: white; border-radius: 20px; overflow: hidden; box-shadow: 0 4px 30px rgba(0,0,0,0.08); }
        .header { background: linear-gradient(135deg, #8B3A52, #4A1A28); padding: 2rem; text-align: center; }
        .header h1 { color: white; font-size: 1.4rem; margin: 0; }
        .header p { color: rgba(255,255,255,0.6); font-size: 0.85rem; margin: 0.3rem 0 0; }
        .body { padding: 2rem; }
        .label { font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.1em; color: #D4899A; font-weight: 600; margin-bottom: 0.3rem; }
        .value { font-size: 0.95rem; color: #2C1A22; line-height: 1.7; margin-bottom: 1.2rem; }
        .message-box { background: #FAF7F2; border-radius: 12px; padding: 1rem 1.2rem; border-left: 3px solid #8B3A52; }
        .footer { text-align: center; padding: 1.5rem; border-top: 1px solid #F2C4CE; font-size: 0.8rem; color: #D4899A; }
    </style>
</head>
<body>
    <div class="wrap">
        <div class="header">
            <h1>✦ New Message</h1>
            <p>Someone reached out through your portfolio</p>
        </div>
        <div class="body">
            <div class="label">From</div>
            <div class="value">{{ $senderName }}</div>
            <div class="label">Email</div>
            <div class="value">{{ $senderEmail }}</div>
            <div class="label">Message</div>
            <div class="value message-box">{{ $senderMessage }}</div>
        </div>
        <div class="footer">Naomi Nosa · Portfolio Contact Form</div>
    </div>
</body>
</html>