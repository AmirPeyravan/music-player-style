<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مدیا پلیر من | ورود</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Vazirmatn:wght@100;200;300;400;500;600;700;800;900&display=swap');

        /* Color Scheme */
        :root {
            --primary: #7c3aed; /* Vibrant purple */
            --primary-light: #a78bfa;
            --primary-dark: #6d28d9;
            --secondary: #ec4899; /* Bright pink */
            --accent: #22d3ee; /* Cyan accent */
            --light: #f8fafc; /* Softer light background */
            --gray-light: #e5e7eb;
            --dark: #1e293b; /* Deeper dark */
            --text: #374151;
            --success: #10b981;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Vazirmatn', sans-serif;
        }

        body {
            background: linear-gradient(135deg, var(--light) 0%, var(--gray-light) 100%);
            color: var(--text);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow-x: hidden;
        }

        .auth-container {
            background: white;
            border-radius: 16px;
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.3); /* Updated shadow: larger blur, more opacity */
            padding: 40px;
            width: 100%;
            max-width: 400px;
            text-align: center;
            animation: fadeInUp 0.8s ease forwards;
        }

        .auth-header {
            margin-bottom: 32px;
        }

        .auth-header h1 {
            font-size: 2rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 12px;
        }

        .auth-header p {
            font-size: 1.1rem;
            color: var(--text);
        }

        .auth-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-group {
            text-align: right;
        }

        .form-group label {
            font-size: 1rem;
            font-weight: 500;
            color: var(--dark);
            margin-bottom: 8px;
            display: block;
        }

        .form-group input {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid var(--gray-light);
            border-radius: 8px;
            font-size: 1rem;
            color: var(--text);
            transition: all 0.3s ease;
        }

        .form-group input:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 8px rgba(124, 58, 237, 0.2);
        }

        .form-group input::placeholder {
            color: var(--text);
            opacity: 0.6;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 8px;
            justify-content: flex-end;
        }

        .checkbox-group input {
            width: auto;
            cursor: pointer;
        }

        .checkbox-group label {
            font-size: 0.9rem;
            color: var(--text);
            cursor: pointer;
        }

        .btn {
            padding: 12px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            font-size: 1.1rem;
            border: none;
        }

        .btn-primary {
            background: linear-gradient(90deg, var(--primary) 0%, var(--accent) 100%);
            color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            background: linear-gradient(90deg, var(--primary-dark) 0%, #06b6d4 100%);
        }

        .auth-link {
            margin-top: 24px;
            font-size: 1rem;
            color: var(--text);
        }

        .auth-link a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .auth-link a:hover {
            color: var(--accent);
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(24px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .auth-container {
                padding: 24px;
                max-width: 90%;
            }

            .auth-header h1 {
                font-size: 1.8rem;
            }

            .auth-header p {
                font-size: 1rem;
            }

            .btn {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
<!-- Login Page -->
<div class="auth-container">
    <div class="auth-header">
        <h1>ثبت نام</h1>
    </div>
    <form class="auth-form">

        <div class="form-group">
            <label for="email">نام</label>
            <input type="email" id="firstName" placeholder="ایمیل خود را وارد کنید" required>
        </div>

        <div class="form-group">
            <label for="email">نام خانوادگی</label>
            <input type="email" id="lastName" placeholder="ایمیل خود را وارد کنید" required>
        </div>

        <div class="form-group">
            <label for="email">ایمیل</label>
            <input type="email" id="email" placeholder="ایمیل خود را وارد کنید" required>
        </div>

        <div class="form-group">
            <label for="password">رمز عبور</label>
            <input type="password" id="password" placeholder="رمز عبور خود را وارد کنید" required>
        </div>

        <button type="submit" class="btn btn-primary">ثبت نام</button>
    </form>
    <div class="auth-link">
        حساب کاربری دارید؟ <a href="/login">وارد شوید</a>
    </div>
</div>
</body>
</html>
