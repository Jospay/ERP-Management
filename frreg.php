<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Franchise Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --primary: #0b63b6;
            --accent: #0f7bd6;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(180deg, #042a59 0%, #033b7a 100%);
            font-family: system-ui, -apple-system, Segoe UI, Roboto, "Helvetica Neue", Arial;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .main-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: stretch;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 35px rgba(0, 0, 0, 0.3);
            max-width: 1100px;
            width: 100%;
        }

        .left-panel {
            flex: 1;
            background: rgba(0, 60, 150, 0.5);
            padding: 3rem 2rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .left-panel h2 {
            font-weight: 700;
            line-height: 1.2;
            font-size: 1.8rem;
        }

        .left-panel p {
            opacity: .9;
            margin-top: 1rem;
            font-size: 1rem;
        }

        .card-frm {
            flex: 1;
            max-width: 460px;
            background: #fff;
            color: #10375a;
            border-radius: 0;
            padding: 2rem 2rem 2.5rem;
        }

        .brand-logo {
            width: 90px;
            height: 40px;
            background: #eef5ff;
            border-radius: 8px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: var(--primary);
            margin: 0 auto 0.5rem;
        }

        .title-band {
            background: var(--primary);
            color: #fff;
            padding: .6rem 1rem;
            font-weight: 700;
            text-align: center;
            border-radius: 6px;
            margin-bottom: 1.5rem;
        }

        .input-icon {
            position: relative;
        }

        .input-icon .form-control {
            padding-left: 2.6rem;
        }

        .input-icon .bi {
            position: absolute;
            left: .85rem;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
        }

        .payment-btns .btn {
            min-width: 110px;
        }

        .step-ind {
            font-size: .85rem;
            color: #6c757d;
        }

        .btn-outline-primary {
            border-color: var(--primary);
            color: var(--primary);
        }

        @media (max-width: 992px) {
            .main-container {
                flex-direction: column;
                text-align: center;
            }

            .left-panel {
                padding: 2rem 1.5rem;
            }

            .card-frm {
                border-radius: 0 0 12px 12px;
            }
        }
    </style>
</head>

<body>
    <div class="main-container">
        <!-- Left Text -->
        <div class="left-panel text-white">
            <h2>START YOUR JOURNEY<br>AS AN ERP SYSTEM<br>FRANCHISE PARTNER.</h2>
            <p>Complete the form below and attach your required documents to get started. Our team will review your
                application and contact you for the next steps.</p>
        </div>

        <!-- Right Form -->
        <div class="card-frm">
            <div class="text-center">
                <div class="brand-logo">LOGO</div>
                <div class="title-band">FRANCHISE REGISTRATION</div>
            </div>

            <h6 class="mb-3 fw-bold text-primary">FRANCHISE DETAILS</h6>
            <form>
                <div class="mb-3 input-icon">
                    <i class="bi bi-building"></i>
                    <input type="text" class="form-control" placeholder="Business / Franchise Name">
                </div>

                <div class="row g-2 mb-3">
                    <div class="col-6 input-icon">
                        <i class="bi bi-geo-alt"></i>
                        <select class="form-select">
                            <option selected>City</option>
                            <option>Sample City</option>
                        </select>
                    </div>
                    <div class="col-6 input-icon">
                        <i class="bi bi-flag"></i>
                        <select class="form-select">
                            <option selected>Province</option>
                            <option>Sample Province</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3 input-icon">
                    <i class="bi bi-geo"></i>
                    <input type="text" class="form-control" placeholder="Business Address">
                </div>

                <div class="mb-3 input-icon">
                    <i class="bi bi-calendar"></i>
                    <input type="text" class="form-control" placeholder="Year Established">
                </div>

                <div class="mb-3">
                    <label class="form-label">Preferred Payment Method</label>
                    <div class="d-flex flex-wrap gap-2 payment-btns">
                        <button type="button" class="btn btn-danger">Cash</button>
                        <button type="button" class="btn btn-warning">Bank</button>
                        <button type="button" class="btn btn-outline-primary d-flex align-items-center">
                            <i class="bi bi-wallet2 me-2"></i> GCash
                        </button>
                        <button type="button" class="btn btn-outline-success d-flex align-items-center">
                            <i class="bi bi-phone me-2"></i> Maya
                        </button>
                    </div>
                </div>

                <div class="mb-3 input-icon">
                    <i class="bi bi-credit-card-2-front"></i>
                    <input type="text" class="form-control" placeholder="Bank Account Details (optional)">
                </div>

                <div class="d-flex justify-content-between align-items-center mt-3">
                    <div class="step-ind">1 / 4</div>
                    <div>
                        <button type="button" class="btn btn-outline-primary me-2">Back</button>
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>