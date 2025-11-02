<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Franchise Owner Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #003366, #0055aa);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-family: 'Poppins', sans-serif;
        }

        .login-container {
            display: flex;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            max-width: 900px;
            width: 100%;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .login-left {
            background: rgba(0, 60, 150, 0.8);
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .login-left h2 {
            font-size: 1.6rem;
            font-weight: 600;
            text-align: left;
            line-height: 1.5;
        }

        .login-right {
            flex: 1;
            background: #fff;
            color: #333;
            padding: 3rem;
        }

        .login-right .logo {
            border: 1px solid #ccc;
            border-radius: 5px;
            display: inline-block;
            padding: 8px 30px;
            margin-bottom: 1rem;
            font-weight: 600;
            color: #333;
        }

        .btn-login {
            background-color: #00a651;
            border: none;
            color: white;
            font-weight: 600;
        }

        .btn-login:hover {
            background-color: #009245;
        }

        .btn-home {
            background-color: #007bff;
            color: white;
            font-weight: 600;
            border: none;
        }

        .btn-home:hover {
            background-color: #0069d9;
        }

        .form-control {
            border-radius: 10px;
            padding: 10px 15px;
        }

        .forgot-pass {
            text-align: right;
            display: block;
            font-size: 0.9rem;
            margin-top: -10px;
            margin-bottom: 10px;
        }

        @media (max-width: 768px) {
            .login-container {
                flex-direction: column;
            }

            .login-left {
                padding: 3rem 2rem;
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <div class="login-container">
        <!-- Left side -->
        <div class="login-left">
            <h2>ACCESS YOUR FRANCHISE DASHBOARD<br>TO MANAGE YOUR VEHICLES, DRIVERS,<br>AND PAYMENTS.</h2>
        </div>

        <!-- Right side -->
        <div class="login-right">
            <div class="text-center">
                <div class="logo">LOGO</div>
                <h4 class="fw-bold text-primary mb-4">FRANCHISE OWNER LOGIN</h4>
            </div>

            <form>
                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" class="form-control" placeholder="Email address" required>
                </div>

                <div class="mb-2">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="Password" required>
                    <br>
                    <a href="#" class="forgot-pass text-primary">Forgot Password?</a>
                </div>

                <button type="submit" class="btn btn-login w-100 py-2 mb-3">LOG IN</button>
                <button type="button" class="btn btn-home w-100 py-2 mb-3">RETURN HOME</button>

                <p class="text-center text-muted mt-3" style="font-size: 0.9rem;">
                    If you don’t have an account yet, click
                    <a href="#" class="text-primary text-decoration-none">Register</a>
                    to create one and get started.
                </p>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>