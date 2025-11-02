<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Franchise Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background: url('https://images.unsplash.com/photo-1521791136064-7986c2920216?auto=format&fit=crop&w=1950&q=80') center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: "Segoe UI", sans-serif;
        }

        .overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 37, 97, 0.75);
            z-index: 0;
        }

        .main-container {
            position: relative;
            z-index: 1;
            display: flex;
            flex-wrap: wrap;
            align-items: stretch;
            justify-content: center;
            background: rgba(255, 255, 255, 0.08);
            border-radius: 16px;
            overflow: hidden;
            max-width: 1100px;
            width: 100%;
            box-shadow: 0 0 40px rgba(0, 0, 0, 0.3);
        }

        .left-panel {
            flex: 1;
            min-width: 300px;
            background: transparent;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 3rem 2rem;
            text-align: center;
        }

        .left-panel h3 {
            font-weight: 700;
            line-height: 1.4;
        }

        .right-panel {
            flex: 1;
            min-width: 350px;
            background: #fff;
            color: #003366;
            padding: 2rem 2.5rem;
        }

        .brand-logo {
            background: #e9f1ff;
            color: #003e95;
            font-weight: 700;
            text-align: center;
            padding: 0.5rem;
            border-radius: 8px;
            width: 100px;
            margin: 0 auto 0.5rem;
        }

        .header-band {
            background: #003e95;
            color: white;
            text-align: center;
            padding: 0.5rem;
            border-radius: 6px;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        .input-icon {
            position: relative;
        }

        .input-icon i {
            position: absolute;
            top: 50%;
            left: 0.9rem;
            transform: translateY(-50%);
            color: #6c757d;
        }

        .input-icon .form-control,
        .input-icon .form-select {
            padding-left: 2.4rem;
        }

        .step-indicator {
            font-size: 0.85rem;
            color: #6c757d;
        }

        .btn-primary {
            background: #003e95;
            border: none;
        }

        .btn-primary:hover {
            background: #0a56c2;
        }

        @media (max-width: 991px) {
            .main-container {
                flex-direction: column;
            }

            .left-panel {
                padding: 2rem 1.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="overlay"></div>

    <div class="main-container">
        <!-- LEFT PANEL -->
        <div class="left-panel">
            <h3>PLEASE FILL OUT THE FORM TO REGISTER AS A DRIVER UNDER ERP SYSTEM FOR CAR BOUNDARY SERVICES - PHILIPPINES. YOUR FRANCHISE WILL VERIFY YOUR ACCOUNT.</h3>
            <a href="/" class="btn btn-outline-light mt-3">RETURN HOME</a>
        </div>

        <!-- RIGHT PANEL -->
        <div class="right-panel">
            <div class="text-center">
                <div class="brand-logo">LOGO</div>
                <div class="header-band">DRIVER REGISTRATION</div>
            </div>

            <h6 class="fw-bold mb-3 text-primary">BASIC INFORMATION</h6>
            <form>
                <div class="mb-3 input-icon">
                    <i class="bi bi-person"></i>
                    <input type="text" class="form-control" placeholder="Full Name">
                </div>

                <div class="mb-3 input-icon">
                    <i class="bi bi-person"></i>
                    <select class="form-select">
                        <option selected>Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>

                <div class="mb-3 input-icon">
                    <i class="bi bi-phone"></i>
                    <input type="text" class="form-control" placeholder="Contact Number">
                </div>

                <div class="mb-3 input-icon">
                    <i class="bi bi-envelope"></i>
                    <input type="email" class="form-control" placeholder="Email Address">
                </div>

                <div class="mb-3 input-icon">
                    <i class="bi bi-house"></i>
                    <input type="text" class="form-control" placeholder="Home Address">
                </div>

                <div class="d-flex justify-content-between align-items-center mt-4">
                    <div class="step-indicator">1 / 5</div>
                    <a href="driver_register2.php" class="btn btn-primary">
                        Next
                    </a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>