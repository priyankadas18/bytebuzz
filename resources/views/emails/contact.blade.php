<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Submission - Bytebuzz</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #09090b;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            color: #e4e4e7;
        }
        .container {
            max-width: 600px;
            margin: 40px auto;
            background-color: #18181b;
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid #27272a;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.3);
        }
        .header {
            padding: 40px 40px 0;
            text-align: center;
        }
        .logo-text {
            font-size: 28px;
            font-weight: 800;
            letter-spacing: -0.5px;
            color: #fff;
            margin: 0;
        }
        .badge {
            display: inline-block;
            padding: 6px 12px;
            background-color: rgba(37, 99, 235, 0.1);
            color: #3b82f6;
            border-radius: 9999px;
            font-size: 12px;
            font-weight: 600;
            margin-top: 16px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .content {
            padding: 40px;
        }
        .section-title {
            font-size: 12px;
            font-weight: 600;
            color: #71717a;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 24px;
            border-bottom: 1px solid #27272a;
            padding-bottom: 8px;
        }
        .info-row {
            margin-bottom: 24px;
        }
        .label {
            font-size: 14px;
            color: #71717a;
            margin-bottom: 6px;
        }
        .value {
            font-size: 16px;
            color: #fff;
            font-weight: 500;
        }
        .message-box {
            background-color: #27272a;
            padding: 24px;
            border-radius: 12px;
            color: #a1a1aa;
            font-size: 15px;
            line-height: 1.6;
            font-style: italic;
        }
        .footer {
            padding: 30px 40px;
            background-color: #09090b;
            text-align: center;
            border-top: 1px solid #27272a;
        }
        .footer-text {
            font-size: 13px;
            color: #52525b;
            margin: 0;
        }
        .accent-line {
            height: 4px;
            background: linear-gradient(90deg, #2563eb, #7c3aed);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="accent-line"></div>
        <div class="header">
            <h1 class="logo-text">Bytebuzz</h1>
            <div class="badge">New Project Inquiry</div>
        </div>
        
        <div class="content">
            <div class="section-title">Submission Details</div>
            
            <div class="info-row">
                <div class="label">Full Name</div>
                <div class="value">{{ $data['name'] }}</div>
            </div>
            
            <div class="info-row">
                <div class="label">Email Address</div>
                <div class="value">
                    <a href="mailto:{{ $data['email'] }}" style="color: #3b82f6; text-decoration: none;">{{ $data['email'] }}</a>
                </div>
            </div>
            
            <div class="section-title" style="margin-top: 40px;">Client Message</div>
            
            <div class="message-box">
                "{{ $data['message'] }}"
            </div>
        </div>
        
        <div class="footer">
            <p class="footer-text">This inquiry was sent via the Bytebuzz Portfolio Contact Form.</p>
            <p class="footer-text" style="margin-top: 8px;">© 2026 Bytebuzz. Simple. Scalable. Smart.</p>
        </div>
    </div>
</body>
</html>
