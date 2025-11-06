<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/style.css" />
    <link rel="shortcut icon" href="src/assets/nav logo.png" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <style type="text/tailwindcss">
        *{
            scroll-behavior: smooth;
        }
        @theme {
        --font-sans: Arial, ui-sans-serif, system-ui, sans-serif;

        --color-brand-red: #CD2E3A;
        --color-brand-blue: #0047A0;
        --color-brand-white: #F0F8FF;
        --color-brand-green: #33CC66;

        --shadow-brand-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        --shadow-blue: rgba(0, 71, 160, 0.35) 0px 5px 15px;
        }
        
    </style>
</head>

<body>

    <!-- Top Banner -->
    <div id="home" class="flex flex-wrap xl:gap-3 lg:gap-2 gap-3 items-center lg:justify-between justify-center text-center py-3 xl:px-8 lg:px-4 md:px-5 px-3 w-full max-w-[1320px] mx-auto">
        <div class="hidden md:block">
            <p class="text-brand-blue md:text-lg text-md">
                The Future of Boundary Services Starts Here. Manage, Drive, and Ride. All in One System.
            </p>
        </div>

        <div class="flex gap-3 md:w-auto w-full">
            <button class="flex-1 py-2 xl:px-7 lg:px-5 px-7 bg-brand-blue text-white rounded-md whitespace-nowrap">
                Download App
            </button>
            <button class="flex-1 py-2 xl:px-7 lg:px-5 px-7 bg-brand-green text-white rounded-md whitespace-nowrap">
                Login
            </button>
        </div>
    </div>

    <!-- Header Navigation -->
    <header
        id="mainHeader"
        class="flex items-center justify-between text-brand-blue xl:text-[16px] text-[11px] px-4 py-2 fixed left-1/2 transform -translate-x-1/2 bg-white w-[calc(100%-40px)] max-w-[1320px] shadow-brand-shadow rounded-md transition-all duration-300 z-50 lg:top-22 md:top-32 top-22">
        <!-- Logo -->
        <div><button class="border-2 border-brand-blue px-4">Logo</button></div>

        <!-- Burger Button (Mobile Only) -->
        <button id="burgerBtn" class="lg:hidden p-2 border border-brand-blue rounded text-brand-blue focus:outline-none">
            <svg id="menuIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg id="closeIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <!-- Navigation -->
        <nav
            id="navMenu"
            class="flex flex-col lg:flex-row gap-2 lg:gap-3 absolute lg:static left-0 top-full lg:top-auto w-full lg:w-auto bg-white lg:bg-transparent shadow-md lg:shadow-none rounded-b-md transition-all duration-300 overflow-hidden max-h-0 opacity-0 lg:opacity-100 lg:max-h-none">
            <a href="#home" data-section="home" class="nav-link py-1 px-2 rounded-md transition-colors duration-300 hover:bg-brand-blue hover:text-white">
                Home
            </a>
            <a href="#about" data-section="about" class="nav-link py-1 px-2 rounded-md transition-colors duration-300 hover:bg-brand-blue hover:text-white">About Us</a>
            <a href="#works" data-section="works" class="nav-link py-1 px-2 rounded-md transition-colors duration-300 hover:bg-brand-blue hover:text-white">How it Works?</a>
            <a href="#franchise" data-section="franchise" class="nav-link py-1 px-2 rounded-md transition-colors duration-300 hover:bg-brand-blue hover:text-white">Franchise</a>
            <a href="#driver" data-section="driver" class="nav-link py-1 px-2 rounded-md transition-colors duration-300 hover:bg-brand-blue hover:text-white">Driver</a>
            <a href="#technician" data-section="technician" class="nav-link py-1 px-2 rounded-md transition-colors duration-300 hover:bg-brand-blue hover:text-white">Technician</a>
            <a href="#passenger" data-section="passenger" class="nav-link py-1 px-2 rounded-md transition-colors duration-300 hover:bg-brand-blue hover:text-white">Passenger</a>
            <a href="#testi" data-section="testi" class="nav-link py-1 px-2 rounded-md transition-colors duration-300 hover:bg-brand-blue hover:text-white">Testimonials</a>
            <a href="#faq" data-section="faq" class="nav-link py-1 px-2 rounded-md transition-colors duration-300 hover:bg-brand-blue hover:text-white">FAQs</a>
            <a href="#Terms" data-section="Terms" class="nav-link py-1 px-2 rounded-md transition-colors duration-300 hover:bg-brand-blue hover:text-white">Terms & Privacy</a>
            <a href="#contact" data-section="contact" class="nav-link py-1 px-2 rounded-md transition-colors duration-300 hover:bg-brand-blue hover:text-white">Contact Us</a>
        </nav>
    </header>

    <div class="bg-[url('assets/bg1.jpg')] bg-no-repeat bg-cover bg-center px-5">


        <div class="text-center text-white pt-[120px] pb-18 w-full max-w-[1200px] mx-auto">
            <h1 class="font-bold xl:text-6xl lg:text-5xl sm:text-4xl text-3xl">ERP System for Car Boundary Service</h1>

            <div class="flex gap-3 items-center mt-2 w-full xl:max-w-[1000px] max-w-[870px] mx-auto">
                <div class="h-2 w-full bg-white"></div>
                <div>
                    <h1 class="font-bold xl:text-6xl lg:text-5xl sm:text-4xl text-3xl">PHILIPPINES</h1>
                </div>
                <div class="h-2 w-full bg-white"></div>
            </div>

            <p class="pt-5 pb-7 text-xl/[28px]"><strong>ERP System for Car Boundary Service – Philippines</strong> brings the power of smart <br class="hidden lg:inline"> technology to every trip.
                Whether you’re a <strong>franchise owner,
                    driver, or passenger</strong>, we make <br class="hidden lg:inline"> transportation seamless, transparent, and eco-friendly.</p>

            <div class="md:flex grid justify-center xl:gap-7 gap-5 pt-7">
                <button class="py-2 xl:px-12 px-7 bg-white text-brand-blue sm:text-2xl text-xl gap-4 rounded-md flex items-center">
                    <img src="assets/book.png" class="h-8" alt="">
                    Book a Ride
                </button>

                <button class="py-2 xl:px-12 px-7 bg-white text-brand-blue sm:text-2xl text-xl gap-4 rounded-md flex items-center">
                    <img src="assets/join.png" class="h-8" alt="">
                    Join as a Franchised
                </button>

                <button class="py-2 xl:px-12 px-7 bg-white text-brand-blue sm:text-2xl text-xl gap-4 rounded-md flex items-center">
                    <img src="assets/become.png" class="h-8" alt="">
                    Become a Driver
                </button>
            </div>
        </div>
    </div>

    <div class="text-center py-3 px-5 bg-white">
        <p class="text-brand-blue text-md font-bold">Empowering Every Ride. Connecting Driver, Franchisees, and Passengers Through Smart Mobility.</p>
    </div>

    <div id="about" class="bg-brand-blue text-center py-3 px-5 scroll-mt-15">
        <p class="text-white text-2xl font-bold">ABOUT US</p>
    </div>

    <div class="py-10 px-5">
        <div class="text-center">
            <p class="text-2xl/[28px] font-bold">OUR MISSION TO <span class="text-brand-blue">MODERNIZE THE BOUNDARY <br>SYSTEM - ONE RIDE AT A TIME</span></p>
        </div>
    </div>

    <div class="w-full max-w-[1320px] mx-auto pb-10 px-5">
        <div class="grid grid-cols-12 md:gap-3 gap-5 pb-2">
            <div class="md:col-span-8 col-span-12 bg-[url('assets/about1.png')] bg-no-repeat bg-cover bg-center sm:p-9 p-5 rounded-2xl">
                <h1 class="font-bold text-2xl text-white">Our Vision</h1>
                <p class="text-md pt-3 text-white">To be the leading smart mobility ERP in the Philippines. empowering transport operators through technology.</p>

                <h1 class="font-bold text-2xl pt-5 text-white">Our Mission</h1>

                <div class="grid grid-cols-12 gap-3 pt-3">
                    <div class="sm:col-span-6 col-span-12 p-3 bg-white text-brand-blue rounded-md">
                        Digitize and simplify boundary <br> operations
                    </div>

                    <div class="sm:col-span-6 col-span-12 p-3 bg-white text-brand-blue rounded-md">
                        Support electric vehicle adoption and sustainability
                    </div>

                    <div class="sm:col-span-6 col-span-12 p-3 bg-white text-brand-blue rounded-md">
                        Empower drivers and franchise owners with transparent data
                    </div>

                    <div class="sm:col-span-6 col-span-12 p-3 bg-white text-brand-blue rounded-md">
                        Provide safe. efficient, and eco-friendly transport for passenger
                    </div>
                </div>
            </div>

            <div class="md:col-span-4 col-span-12 shadow-blue sm:p-8 p-6 rounded-2xl bg-white">
                <h1 class="font-bold text-3xl text-brand-blue">Core Values</h1>

                <div class="flex items-center gap-3 mt-5">
                    <img src="assets/c1.png" class="h-8" alt="">
                    <p class="font-semibold text-xl text-brand-blue">Innovation</p>
                </div>

                <div class="flex items-center gap-3 mt-4">
                    <img src="assets/c2.png" class="h-8" alt="">
                    <p class="font-semibold text-xl text-brand-blue">Innovation</p>
                </div>

                <div class="flex items-center gap-3 mt-4">
                    <img src="assets/c3.png" class="h-8" alt="">
                    <p class="font-semibold text-xl text-brand-blue">Innovation</p>
                </div>

                <div class="flex items-center gap-3 mt-4">
                    <img src="assets/c4.png" class="h-8" alt="">
                    <p class="font-semibold text-xl text-brand-blue">Service to the Filipino Commuter</p>
                </div>

            </div>

        </div>
    </div>

    <div id="works" class="bg-[url('assets/about1.png')] bg-no-repeat bg-cover bg-center py-10 scroll-mt-13 px-5">
        <div class="w-full max-w-[1320px] mx-auto">
            <div class="flex items-center sm:gap-5 gap-2">
                <h1 class="whitespace-nowrap text-white font-bold text-3xl">HOW IT WORKS?</h1>
                <div class="h-1 w-full bg-white"></div>
            </div>

            <div class="grid grid-cols-12 mt-10 gap-5 pb-3">

                <div class="lg:col-span-4 sm:col-span-6 col-span-12 bg-white sm:p-6 p-5 rounded-xl">
                    <p class="font-bold">STEP 1</p>
                    <p class="pt-3 font-bold text-brand-blue text-2xl">CHOOSE YOUR ROLE</p>
                    <p>Select whether you're a <strong>Franchise, Driver, Technician, or Passenger.</strong></p>
                </div>

                <div class="lg:col-span-4 sm:col-span-6 col-span-12 bg-white sm:p-6 p-5 rounded-xl">
                    <p class="font-bold">STEP 2</p>
                    <p class="pt-3 font-bold text-brand-blue text-2xl">REGISTER & VERIFY</p>
                    <p>Submit your details, upload the necessary documents, and wait for verification</p>
                </div>

                <div class="lg:col-span-4 sm:col-span-6 col-span-12 bg-white sm:p-6 p-5 rounded-xl">
                    <p class="font-bold">STEP 3</p>
                    <p class="pt-3 font-bold text-brand-blue text-2xl">ACCESS YOUR DASHBOARD</p>
                    <p>Once approved, you can log in to your dashboard to manage your vehicles, trips, and payments</p>
                </div>

                <div class="lg:col-span-4 sm:col-span-6 col-span-12 bg-white sm:p-6 p-5 rounded-xl">
                    <p class="font-bold">STEP 4</p>
                    <p class="pt-3 font-bold text-brand-blue text-2xl">DOWNLOAD APP</p>
                    <p>Log in using your account.</p>
                </div>

                <div class="lg:col-span-4 sm:col-span-6 col-span-12 bg-white sm:p-6 p-5 rounded-xl">
                    <p class="font-bold">STEP 5</p>
                    <p class="pt-3 font-bold text-brand-blue text-2xl">START OPERATING</p>
                    <p>Everything happens in real-time, GPS tracking, maintenance alerts, trip earning, and boundary payments.</p>
                </div>

                <div class="lg:col-span-4 sm:col-span-6 col-span-12 border-3 border-white p-6 rounded-xl grid place-items-center">
                    <p class="pt-3 font-bold text-white text-2xl">LEARN MORE</p>
                </div>

            </div>
        </div>
    </div>

    <div id="franchise" class="py-12 scroll-mt-14 px-5">
        <div class="w-full max-w-[1320px] mx-auto">
            <div class="grid grid-cols-12 items-center gap-5">
                <div class="md:col-span-6 col-span-12">
                    <h1 class="text-brand-blue text-4xl font-bold">FRANCHISED NOW!</h1>
                    <h1 class="text-4xl font-bold pt-4">OWN A <span class="text-brand-blue">SMART E-TAXI FLEET.</span> MANAGE WITH EASE.</h1>
                    <p class="pt-4 text-xl">As a Franchised Partner, you can oversee your vehicles, drivers, and boundary payments effortlessly.</p>
                    <p class="pt-4 text-xl">With our ERP System, you get real-time monitoring, financial transparency, and reliable reports.</p>
                </div>

                <div class="md:col-span-6 col-span-12 relative">
                    <button class="px-7 py-2 text-white absolute end-5 top-5 bg-brand-green rounded-xl">Franchise Location</button>
                    <iframe
                        src="https://www.google.com/maps?q=15.126148463995765,120.59506977415994&z=17&output=embed"
                        class="w-full max-w-3xl h-[340px] border-4 border-brand-blue rounded-2xl shadow-md"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
        </div>
    </div>

    <div class="bg-[url('assets/f1.jpg')] bg-no-repeat bg-cover bg-center py-10 px-5">
        <div class="w-full max-w-[1320px] mx-auto">
            <div class="grid grid-cols-12 items-center">
                <div class="lg:col-span-7 col-span-12">

                    <div class="grid grid-cols-12 sm:gap-3 gap-5">
                        <div class="sm:col-span-6 col-span-12 text-white">
                            <h1 class="font-bold text-2xl">BENEFITS:</h1>
                            <p class="pt-3 text-lg">View all fleet data in one dashboard</p>
                            <p class="pt-3 text-lg">Automate boundary collection</p>
                            <p class="pt-3 text-lg">Track driver performance and vehicle health</p>
                            <p class="pt-3 text-lg">Access real-time GPS tracking</p>
                            <p class="pt-3 text-lg">Simplify financial management</p>
                        </div>

                        <div class="sm:col-span-6 col-span-12 text-white">
                            <h1 class="font-bold text-2xl">REQUIREMENTS:</h1>
                            <p class="pt-3 text-lg">Valid Business Permit</p>
                            <p class="pt-3 text-lg">DTI/SEC Registration</p>
                            <p class="pt-3 text-lg">Bank Account for Payments</p>
                            <p class="pt-3 text-lg">Franchise Agreement (digital or physical)</p>
                        </div>
                    </div>

                    <div class="md:text-start text-center">
                        <button class="py-2 sm:px-12 px-5 bg-white text-brand-blue mt-6 rounded-xl sm:text-3xl text-xl">Apply as A Franchised Partner</button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="driver" class="bg-white py-10 scroll-mt-14">
        <div class="text-center bg-brand-blue py-2 text-3xl text-white font-bold">APPLY AS A DRIVER NOW AND START EARNING!</div>
    </div>

    <div class="bg-[url('assets/d1.jpg')] bg-no-repeat bg-cover bg-center py-10 px-5">
        <div class="w-full max-w-[1320px] mx-auto py-8">
            <div class="grid grid-cols-12 items-center">
                <div class="md:col-span-6 col-span-12"></div>
                <div class="md:col-span-6 col-span-12">
                    <div class="text-white">
                        <h1 class="font-bold text-3xl">DRIVE SMART. EARN FASTER.</h1>
                        <p class="pt-3 text-lg">Join our growing community of electric taxi drivers.</p>
                        <p class="pt-3 text-lg">Our system helps you monitor your daily income, boundary dues, and trip history, all through your mobile app.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="bg-white py-14 px-5">
        <div class="w-full max-w-[1320px] mx-auto">
            <div class="grid xl:grid-cols-10 md:grid-cols-9 grid-cols-8 xl:gap-3 gap-5">
                <div class="xl:col-span-2 md:col-span-3 sm:col-span-4 col-span-8 text-center border-2 border-brand-blue rounded-xl py-10 bg-gradient-to-b from-transparent via-brand-blue/20 to-brand-blue/20">
                    <img src="assets/df1.png" class="h-[150px] mx-auto" alt="">
                    <p class="font-bold text-lg/[20px] text-brand-blue pt-6">VIEW ASSIGNED <br> VEHICLE DETAILS</p>
                </div>

                <div class="xl:col-span-2 md:col-span-3 sm:col-span-4 col-span-8 text-center border-2 border-brand-blue rounded-xl py-10 bg-gradient-to-b from-transparent via-brand-blue/20 to-brand-blue/20">
                    <img src="assets/df2.png" class="h-[150px] mx-auto" alt="">
                    <p class="font-bold text-lg/[20px] text-brand-blue pt-6">TRACK DAILY AND <br> WEEKLY EARNINGS</p>
                </div>

                <div class="xl:col-span-2 md:col-span-3 sm:col-span-4 col-span-8 text-center border-2 border-brand-blue rounded-xl py-10 bg-gradient-to-b from-transparent via-brand-blue/20 to-brand-blue/20">
                    <img src="assets/df3.png" class="h-[150px] mx-auto" alt="">
                    <p class="font-bold text-lg/[20px] text-brand-blue pt-6">RECEIVE <br> MAINTENANCE <br> ALERTS</p>
                </div>

                <div class="xl:col-span-2 md:col-span-3 sm:col-span-4 col-span-8 text-center border-2 border-brand-blue rounded-xl py-10 bg-gradient-to-b from-transparent via-brand-blue/20 to-brand-blue/20">
                    <img src="assets/df4.png" class="h-[150px] mx-auto" alt="">
                    <p class="font-bold text-lg/[20px] text-brand-blue pt-6">ACCESS DRIVER <br> TRAINING AND <br> CERTIFICATION</p>
                </div>

                <div class="xl:col-span-2 md:col-span-3 sm:col-span-4 col-span-8 text-center border-2 border-brand-blue rounded-xl py-10 bg-gradient-to-b from-transparent via-brand-blue/20 to-brand-blue/20">
                    <img src="assets/df5.png" class="h-[150px] mx-auto" alt="">
                    <p class="font-bold text-lg/[20px] text-brand-blue pt-6">FILE SUPPORT <br> TICKETS INSTANTLY</p>
                </div>
            </div>

            <div class="text-center sm:pt-10 pt-7">
                <button class="py-2 sm:px-12 px-5 bg-brand-blue text-white mt-6 rounded-xl sm:text-3xl text-xl">Register as a Driver</button>
            </div>
        </div>
    </div>

    <div id="technician" class="bg-[url('assets/t12.jpg')] bg-no-repeat bg-cover bg-center py-10 text-white text-center px-5 scroll-mt-12">
        <h1 class="font-bold text-4xl">WANT TO BE A TECHNICIAN?</h1>
        <p class="font-bold text-xl pt-3">Keeping Every Ride Running Smoothly</p>
    </div>

    <div class="py-12 w-full max-w-[1320px] mx-auto px-5">
        <p class="text-center text-brand-blue text-xl">Technicians play a vital role in ensuring all vehicles are safe and operational.</p>
        <p class="text-center text-brand-blue text-xl/[23px] pt-3">Through our platform, you can receive maintenance requests, update job status, and record parts <br> used, anytime, anywhere.</p>
        <p class="text-center text-brand-blue text-3xl pt-5 font-bold">BENEFITS:</p>

        <div class="grid grid-cols-12 gap-5 pt-7">
            <div class="lg:col-span-6 col-span-12">
                <div class="bg-[#EFF8FF] border-[2px] border-[#AFC5CA] py-3 pe-3 ps-8 rounded-xl relative w-full">
                    <div
                        class="xl:block hide h-[35px] w-[35px] bg-brand-green absolute top-1/2 start-[-15px] -translate-y-1/2 rounded-full grid place-items-center border-3 border-white shadow">
                        <div class="pt-[3px]">
                            <i class="fa-solid fa-check text-white"></i>
                        </div>
                    </div>

                    <p class="text-brand-blue text-xl font-bold">
                        VIEW ASSIGNED SERVICE TICKETS
                    </p>

                </div>
            </div>

            <div class="lg:col-span-6 col-span-12">
                <div class="bg-[#EFF8FF] border-[2px] border-[#AFC5CA] py-3 pe-3 ps-8 rounded-xl relative w-full">
                    <div
                        class="xl:block hide h-[35px] w-[35px] bg-brand-green absolute top-1/2 start-[-15px] -translate-y-1/2 rounded-full grid place-items-center border-3 border-white shadow">
                        <div class="pt-[3px]">
                            <i class="fa-solid fa-check text-white"></i>
                        </div>
                    </div>

                    <p class="text-brand-blue text-xl font-bold">
                        UPDATED JOB PROGRESS IN REAL TIME
                    </p>

                </div>
            </div>

            <div class="lg:col-span-6 col-span-12">
                <div class="bg-[#EFF8FF] border-[2px] border-[#AFC5CA] py-3 pe-3 ps-8 rounded-xl relative w-full">
                    <div
                        class="xl:block hide h-[35px] w-[35px] bg-brand-green absolute top-1/2 start-[-15px] -translate-y-1/2 rounded-full grid place-items-center border-3 border-white shadow">
                        <div class="pt-[3px]">
                            <i class="fa-solid fa-check text-white"></i>
                        </div>
                    </div>

                    <p class="text-brand-blue text-xl font-bold">
                        LOG SPARE PARTS AND EXPENSES
                    </p>

                </div>
            </div>

            <div class="lg:col-span-6 col-span-12">
                <div class="bg-[#EFF8FF] border-[2px] border-[#AFC5CA] py-3 pe-3 ps-8 rounded-xl relative w-full">
                    <div
                        class="xl:block hide h-[35px] w-[35px] bg-brand-green absolute top-1/2 start-[-15px] -translate-y-1/2 rounded-full grid place-items-center border-3 border-white shadow">
                        <div class="pt-[3px]">
                            <i class="fa-solid fa-check text-white"></i>
                        </div>
                    </div>

                    <p class="text-brand-blue text-xl font-bold">
                        COMMUNICATE WITH FLEET MANAGERS EASILY
                    </p>

                </div>
            </div>
        </div>

        <div class="text-center sm:pt-10 pt-7">
            <button class="py-2 sm:px-12 px-5 bg-brand-blue text-white mt-6 rounded-xl sm:text-3xl text-xl">Join as a Technician</button>
        </div>
    </div>

    <div id="passenger" class="bg-[url('assets/p1.jpg')] bg-no-repeat bg-cover bg-center py-12 px-5 scroll-mt-12">
        <div class="w-full max-w-[1320px] mx-auto">
            <div class="grid grid-cols-12 items-center">
                <div class="xl:col-span-6 col-span-12">
                    <div class="text-white">
                        <h1 class="font-bold text-4xl">FOR OUR DAILY COMMUTER!</h1>
                        <h1 class="text-2xl pt-3">Ride Safe. Ride Smart.</h1>
                        <p class="pt-3 text-lg">Experience modern e-taxi commuting, fast, secure, and environment-friendly.</p>
                        <p class="pt-3 text-lg">Track your driver in real time, pay cashless, and rate every trip for better service.</p>
                    </div>

                    <div class="p-2 mt-5 bg-gradient-to-l from-transparent via-brand-green/50 to-brand-green text-white text-2xl">
                        <p>Instant ride booking</p>
                    </div>

                    <div class="p-2 mt-4 bg-gradient-to-l from-transparent via-brand-green/50 to-brand-green text-white text-2xl">
                        <p>Real-time tracking and fare estimate</p>
                    </div>

                    <div class="p-2 mt-4 bg-gradient-to-l from-transparent via-brand-green/50 to-brand-green text-white text-2xl">
                        <p>e-Receipts and trip history</p>
                    </div>

                    <div class="p-2 mt-4 bg-gradient-to-l from-transparent via-brand-green/50 to-brand-green text-white text-2xl">
                        <p>Support center and feedback tools</p>
                    </div>

                    <div class="xl:text-start text-center sm:pt-10 pt-7">
                        <button class="py-2 sm:px-12 px-5 bg-white text-brand-blue mt-6 rounded-xl sm:text-3xl text-xl">Book a Ride Now</button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="testi" class="py-10 px-5 scroll-mt-12">

        <div class="w-full max-w-[1320px] mx-auto">
            <div class="flex items-center gap-5">
                <h1 class="whitespace-nowrap text-brand-blue font-bold text-3xl">TESTIMONIALS</h1>
                <div class="h-1 w-full bg-brand-blue"></div>
            </div>

            <div class="grid grid-cols-12 pt-14 lg:gap-0 gap-5 items-center">

                <div class="lg:col-span-5 col-span-12">
                    <h1 class="text-brand-blue font-bold text-3xl">REAL STORIES FROM OUR <br> DRIVERS, FRANCHISEES, <br> AND PASSENGERS</h1>

                    <p class="pt-6 text-lg/[22px]">Hear how ERP System for Car Boundary <br>Service - Philippines is transforming the way <br> Filipinos drive, manage, and ride every day.</p>
                    <p class="pt-6 text-lg/[22px]">From franchise owner to daily commuters, <br> our system empowers everyone in the <br> boundary ecosystem.</p>

                    <div class="pt-10">
                        <button class="md:text-3xl text-2xl bg-brand-green text-white px-12 rounded-xl py-3">FEEDBACK</button>
                    </div>
                </div>

                <div class="lg:col-span-7 col-span-12">
                    <div class="relative">

                        <div
                            class="absolute top-1/2 start-[-20px] -translate-y-1/2 z-10">
                            <button
                                class="bg-brand-blue text-white bg-left-half123 rounded-[50%] h-[40px] w-[40px] border-2 border-white">
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                        </div>

                        <div class="absolute top-1/2 end-[-20px] -translate-y-1/2 z-10">
                            <button
                                class="bg-brand-blue text-white bg-right-half rounded-[50%] h-[40px] w-[40px] border-2 border-white">
                                <i class="fa-solid fa-chevron-right"></i>
                            </button>
                        </div>

                        <div class="owl-carousel owl-1">
                            <div class="border-4 border-brand-blue rounded-xl p-5">
                                <div class="sm:flex grid items-center sm:justify-start justify-center gap-5">
                                    <div class="flex sm:justify-start justify-center">
                                        <div class="border-4 border-brand-blue h-[120px] w-[120px] overflow-hidden rounded-full">
                                            <img src="assets/tes11.png" alt="" class="w-full h-full object-cover">
                                        </div>
                                    </div>

                                    <div class="sm:text-start text-center">
                                        <h1 class="font-bold text-brand-blue text-xl">MARIA SANTOS</h1>
                                        <p>Passenger (Pasig City)</p>
                                        <div class="flex gap-2 pt-4">
                                            <div><i class="fa-solid fa-star text-yellow-400 text-2xl"></i></div>
                                            <div><i class="fa-solid fa-star text-yellow-400 text-2xl"></i></div>
                                            <div><i class="fa-solid fa-star text-yellow-400 text-2xl"></i></div>
                                            <div><i class="fa-solid fa-star text-yellow-400 text-2xl"></i></div>
                                            <div><i class="fa-solid fa-star text-yellow-400 text-2xl"></i></div>
                                            <div>5.0</div>
                                        </div>
                                    </div>
                                </div>
                                <p class="pt-4 text-lg/[22px]">Safe at maayos yung biyahe ko gamit ang e-taxi nila. Real-time ko nakikita kung nasaan yung driver at magkano ang pamasahe
                                    bago pa ako sumakay. Madali rin magbayad gamit and GCash! Sobrang convenient lalo na pag rush hour.
                                </p>
                            </div>

                            <div class="border-4 border-brand-blue rounded-xl p-5">
                                <div class="sm:flex grid items-center sm:justify-start justify-center gap-5">
                                    <div class="flex sm:justify-start justify-center">
                                        <div class="border-4 border-brand-blue h-[120px] w-[120px] overflow-hidden rounded-full">
                                            <img src="assets/tes11.png" alt="" class="w-full h-full object-cover">
                                        </div>
                                    </div>

                                    <div class="sm:text-start text-center">
                                        <h1 class="font-bold text-brand-blue text-xl">MARIA SANTOS</h1>
                                        <p>Passenger (Pasig City)</p>
                                        <div class="flex gap-2 pt-4">
                                            <div><i class="fa-solid fa-star text-yellow-400 text-2xl"></i></div>
                                            <div><i class="fa-solid fa-star text-yellow-400 text-2xl"></i></div>
                                            <div><i class="fa-solid fa-star text-yellow-400 text-2xl"></i></div>
                                            <div><i class="fa-solid fa-star text-yellow-400 text-2xl"></i></div>
                                            <div><i class="fa-solid fa-star text-yellow-400 text-2xl"></i></div>
                                            <div>5.0</div>
                                        </div>
                                    </div>
                                </div>
                                <p class="pt-4 text-lg/[22px]">Safe at maayos yung biyahe ko gamit ang e-taxi nila. Real-time ko nakikita kung nasaan yung driver at magkano ang pamasahe
                                    bago pa ako sumakay. Madali rin magbayad gamit and GCash! Sobrang convenient lalo na pag rush hour.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
    <div class="py-2 bg-brand-blue w-full"></div>


    <div class="py-12 w-full max-w-[1000px] mx-auto px-5">
        <h1 class="text-center font-bold text-brand-blue text-3xl">JOIN THE FUTURE OF SMART BOUNDARY SERVICE</h1>

        <p class="text-center pt-4">Whether you're a <strong>driver, passenger,</strong> or <strong>franchise owner,</strong> you can experience the <br>
            convenience and reliability of our digital platform.
        </p>

        <h1 class="text-center font-bold text-brand-blue text-3xl pt-4">BE PART OF OUR GROWING COMMUNITY TODAY!</h1>

        <div class="px-7">
            <div class="md:flex grid md:justify-between md:gap-0 gap-4 justify-center items-center pt-7">
                <div>
                    <h1 class="text-center font-bold text-brand-blue text-2xl pt-4">DRIVER AND PASSENGER APP:</h1>
                </div>

                <div class="flex flex-wrap justify-center items-center gap-4">
                    <img src="assets/play store.png" class="h-[50px] sm:h-[60px] w-auto" alt="Play Store">
                    <img src="assets/app store.png" class="h-[50px] sm:h-[60px] w-auto" alt="App Store">
                </div>

            </div>

            <div class="md:flex grid md:justify-between md:gap-0 gap-4 justify-center items-center pt-5">
                <div>
                    <h1 class="text-center font-bold text-brand-blue text-2xl pt-4">ADMIN AND FRANCHISE APP:</h1>
                </div>

                <div class="flex flex-wrap justify-center items-center gap-4">
                    <img src="assets/play store.png" class="h-[50px] sm:h-[60px] w-auto" alt="Play Store">
                    <img src="assets/app store.png" class="h-[50px] sm:h-[60px] w-auto" alt="App Store">
                </div>
            </div>
        </div>

    </div>

    <div id="faq" class="bg-[#e3f0fa] scroll-mt-12 px-5">
        <div class="py-10 w-full max-w-[1320px] mx-auto">
            <h1 class="text-center font-bold text-brand-blue text-3xl">FREQUENTLY ASKED QUESTIONS (FAQs)</h1>

            <div class="border-l-6 border-t-0 mt-7 border-r-0 border-b-0 border-brand-blue p-4 bg-white">
                <div class="flex justify-between items-center">
                    <h1 class="font-bold text-xl">
                        <span class="text-brand-blue">Q1:</span> What is ERP System for Car Boundary Service - Philippines?
                    </h1>
                    <button
                        @click="toggle(0)"
                        class="hidden md:block text-white py-2 px-5 bg-brand-green rounded-md transition-all duration-300 whitespace-nowrap">
                        {{ open[0] ? 'Read Less' : 'Read More' }}
                    </button>
                </div>
                <transition name="slide-fade">
                    <p v-if="open[0]" class="ps-10 mt-2 text-gray-800">
                        It’s a digital platform that manages franchise, driver, and passenger data in one ERP system, designed for electric taxi and boundary operations.
                    </p>
                </transition>

                <p class="block md:hidden mt-2 text-gray-800">
                    It’s a digital platform that manages franchise, driver, and passenger data in one ERP system, designed for electric taxi and boundary operations.
                </p>
            </div>

            <div class="border-l-6 border-t-0 mt-4 border-r-0 border-b-0 border-brand-blue p-4 bg-white">
                <div class="flex justify-between items-center">
                    <h1 class="font-bold text-xl">
                        <span class="text-brand-blue">Q2:</span> How can I apply as a driver?
                    </h1>
                    <button
                        @click="toggle(1)"
                        class="hidden md:block text-white py-2 px-5 bg-brand-green rounded-md transition-all duration-300">
                        {{ open[1] ? 'Read Less' : 'Read More' }}
                    </button>
                </div>
                <transition name="slide-fade">
                    <p v-if="open[1]" class="ps-10 mt-2 text-gray-800">
                        Visit the Driver page, fill out the registration form, and submit your driver’s license and ID. Once verified, you’ll get your login details via email.
                    </p>
                </transition>
                <p class="block md:hidden mt-2 text-gray-800">
                    Visit the Driver page, fill out the registration form, and submit your driver’s license and ID. Once verified, you’ll get your login details via email.
                </p>
            </div>

            <div class="border-l-6 border-t-0 mt-4 border-r-0 border-b-0 border-brand-blue p-4 bg-white">
                <div class="flex justify-between items-center">
                    <h1 class="font-bold text-xl">
                        <span class="text-brand-blue">Q3:</span> Do you support electric vehicles only?
                    </h1>
                    <button
                        @click="toggle(2)"
                        class="hidden md:block text-white py-2 px-5 bg-brand-green rounded-md transition-all duration-300">
                        {{ open[2] ? 'Read Less' : 'Read More' }}
                    </button>
                </div>
                <transition name="slide-fade">
                    <p v-if="open[2]" class="ps-10 mt-2 text-gray-800">
                        Yes, our system is optimized for e-vehicles only.
                    </p>
                </transition>
                <p class="block md:hidden mt-2 text-gray-800">
                    Yes, our system is optimized for e-vehicles only.
                </p>
            </div>

            <div class="border-l-6 border-t-0 mt-4 border-r-0 border-b-0 border-brand-blue p-4 bg-white">
                <div class="flex justify-between items-center">
                    <h1 class="font-bold text-xl">
                        <span class="text-brand-blue">Q4:</span> Can passengers book rides directly?
                    </h1>
                    <button
                        @click="toggle(3)"
                        class="hidden md:block text-white py-2 px-5 bg-brand-green rounded-md transition-all duration-300">
                        {{ open[3] ? 'Read Less' : 'Read More' }}
                    </button>
                </div>
                <transition name="slide-fade">
                    <p v-if="open[3]" class="ps-10 mt-2 text-gray-800">
                        Yes, passengers can book rides using the mobile app or the booking form on our website.
                    </p>
                </transition>
                <p class="block md:hidden mt-2 text-gray-800">
                    Yes, passengers can book rides using the mobile app or the booking form on our website.
                </p>
            </div>

            <div class="border-l-6 border-t-0 mt-4 border-r-0 border-b-0 border-brand-blue p-4 bg-white">
                <div class="flex justify-between items-center">
                    <h1 class="font-bold text-xl">
                        <span class="text-brand-blue">Q5:</span> Is my data secure?
                    </h1>
                    <button
                        @click="toggle(4)"
                        class="hidden md:block text-white py-2 px-5 bg-brand-green rounded-md transition-all duration-300">
                        {{ open[4] ? 'Read Less' : 'Read More' }}
                    </button>
                </div>
                <transition name="slide-fade">
                    <p v-if="open[4]" class="ps-10 mt-2 text-gray-800">
                        Absolutely. We comply with the Philippine Data Privacy Act and all your information is encrypted.
                    </p>
                </transition>
                <p class="block md:hidden mt-2 text-gray-800">
                    Absolutely. We comply with the Philippine Data Privacy Act and all your information is encrypted.
                </p>
            </div>

            <div id="Terms" class="scroll-mt-10">
                <h1 class="text-center font-bold text-brand-blue text-3xl pt-12">TERMS & PRIVACY</h1>

                <div class="bg-white py-6 text-center mt-7 px-3">
                    <p><strong>ERP System for Car Boundary Service - Philippines</strong> collects only the information necessary to provide transportation and account services</p>

                    <p class="pt-4">We adhere to the <strong>Data Privacy Act of 2012 (RA 10173)</strong> and do not share your data with third parties without consent.</p>
                </div>

                <div class="border-l-6 border-t-0 mt-4 border-r-0 border-b-0 border-brand-blue p-4 bg-white">
                    <h1 class="font-bold text-xl">Users must verify their identity before full account access.</h1>
                </div>

                <div class="border-l-6 border-t-0 mt-4 border-r-0 border-b-0 border-brand-blue p-4 bg-white">
                    <h1 class="font-bold text-xl">All payments are processed securely through authorized gateways (e.g., GCash, PayMaya).</h1>
                </div>

                <div class="border-l-6 border-t-0 mt-4 border-r-0 border-b-0 border-brand-blue p-4 bg-white">
                    <h1 class="font-bold text-xl">By registering, users agree to abide by platform rules and community guidelines.</h1>
                </div>

                <div class="border-l-6 border-t-0 mt-4 border-r-0 border-b-0 border-brand-blue p-4 bg-white">
                    <h1 class="font-bold text-xl">You may request deletion of your data anytime by emailing privacy@carboundary.ph.</h1>
                </div>
            </div>

        </div>
    </div>


    <div id="contact" class="bg-[url('assets/con12.jpg')] bg-no-repeat bg-cover bg-center py-10 text-white text-center scroll-mt-12">
        <h1 class="font-bold text-4xl">CONTACT US</h1>
        <p class="text-2xl pt-3">We're Here to Help You.</p>
        <p class="text-xl pt-1">Have questions, suggestions, or partnership inquiries? <br>Reach out to us anytime.</p>
    </div>


    <div class="py-10 w-full max-w-[1320px] mx-auto px-5">
        <div class="bg-brand-blue rounded-md sm:p-8 p-4 shadow-md w-full">
            <form class="">

                <div class="grid grid-cols-12 md:gap-5 gap-4">
                    <div class="md:col-span-6 col-span-12">

                        <label for="" class="text-white">Full Name</label>
                        <input
                            type="text"
                            placeholder="Name"
                            class="border border-gray-300 rounded-md px-3 py-2 w-full mb-3 focus:outline-none bg-gray-100 focus:ring-2 focus:ring-blue-400" />

                        <label for="" class="text-white">Email</label>
                        <input
                            type="email"
                            placeholder="Email"
                            class="border border-gray-300 rounded-md px-3 py-2 w-full mb-3 focus:outline-none bg-gray-100 focus:ring-2 focus:ring-blue-400" />


                        <label for="" class="text-white">Subject</label>
                        <input
                            type="text"
                            placeholder="Subject"
                            class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none bg-gray-100 focus:ring-2 focus:ring-blue-400" />
                    </div>

                    <div class="md:col-span-6 col-span-12">
                        <label for="" class="text-white">Message</label>
                        <textarea
                            placeholder="Message.."
                            rows="5"
                            class="border border-gray-300 rounded-md px-3 py-2 w-full focus:outline-none bg-gray-100 focus:ring-2 focus:ring-blue-400"></textarea>

                        <div class="text-end pt-4">
                            <button
                                type="submit"
                                class="bg-white text-brand-blue font-bold px-6 py-2 rounded-md">
                                Send Message
                            </button>
                        </div>
                    </div>
                </div>

            </form>
        </div>


        <div class="grid grid-cols-12 gap-5 pt-8">
            <div class="md:col-span-6 col-span-12 bg-brand-blue sm:p-8 p-5 rounded-xl">
                <div class="flex sm:gap-7 gap-4">
                    <div>
                        <div class="h-[40px] w-[40px] rounded-full bg-white grid place-items-center">
                            <i class="fa-solid fa-phone-volume text-xl text-brand-blue"></i>
                        </div>
                    </div>

                    <div class="text-white font-bold">
                        <h1 class="text-xl">MOBILE NUMBER</h1>
                        <h1 class="text-2xl">(+63) 999-999-9999</h1>
                    </div>
                </div>
            </div>

            <div class="md:col-span-6 col-span-12 bg-brand-blue sm:p-8 p-5 rounded-xl">
                <div class="flex sm:gap-7 gap-4">
                    <div>
                        <div class="h-[40px] w-[40px] rounded-full bg-white grid place-items-center">
                            <i class="fa-solid fa-clock text-brand-blue text-2xl"></i>
                        </div>
                    </div>

                    <div class="text-white">
                        <h1 class="text-xl font-bold">SUPPORT HOURS</h1>
                        <h1 class="text-lg">Monday - Saturday, 8:00 AM - 6:00 PM</h1>
                    </div>
                </div>
            </div>

            <div class="md:col-span-6 col-span-12 bg-brand-blue sm:p-8 p-5 rounded-xl">
                <div class="flex sm:gap-7 gap-4">
                    <div>
                        <div class="h-[40px] w-[40px] rounded-full bg-white grid place-items-center">
                            <i class="fa-solid fa-envelope text-brand-blue text-2xl"></i>
                        </div>
                    </div>

                    <div class="text-white">
                        <h1 class="text-xl font-bold">EMAIL</h1>
                        <h1 class="text-lg">support@carboundary.ph</h1>
                    </div>
                </div>
            </div>

            <div class="md:col-span-6 col-span-12 bg-brand-blue sm:p-8 p-5 rounded-xl">
                <div class="flex sm:gap-7 gap-4">
                    <div>
                        <div class="h-[40px] w-[40px] rounded-full bg-white grid place-items-center">
                            <i class="fa-solid fa-location-dot text-brand-blue text-2xl"></i>
                        </div>
                    </div>

                    <div class="text-white">
                        <h1 class="text-xl font-bold">ADDRESS</h1>
                        <h1 class="text-lg">Unit 202, GreenTech Building, Quezon City, Philippines</h1>
                    </div>
                </div>
            </div>

        </div>

    </div>


    <!-- Start Footer -->
    <div class="bg-brand-blue py-8">
        <div class="w-full max-w-[1320px] sm:px-5 px-3 mx-auto">
            <div class="grid grid-cols-12 gap-7">
                <div class="lg:col-span-6 col-span-12 sm:pe-0 pe-8">
                    <div class="sm:flex grid gap-5 items-center">
                        <div class="text-brand-blue h-[70px] w-[150px] grid place-items-center bg-white text-2xl border-1 border-black">LOGO</div>
                        <div>
                            <h1 class="text-white font-bold text-2xl">ERP SYSTEM FOR CAR BOUNDARY SERVICE - PHILIPPINES</h1>
                        </div>
                    </div>
                    <p class="text-xl text-white pt-3">
                        Empowering Every Ride. Connecting Drivers, Franchisees, and Passengers Through Smart Mobility.
                    </p>

                    <div class="pt-4">
                        <div class="flex dm:gap-4 gap-3">
                            <img src="assets/fb.png" class="h-[48px] border-2 border-white rounded-full" alt="" />
                            <img src="assets/yt.png" class="h-[48px] border-2 border-white rounded-full" alt="" />
                            <img src="assets/instagram.png" class="h-[48px] border-2 border-white rounded-full" alt="" />
                            <img
                                src="assets/x.png"
                                class="h-[48px] border-2 border-white rounded-full"
                                alt="" />
                            <img src="assets/tiktok.png" class="h-[48px] border-2 border-white rounded-full" alt="" />
                        </div>
                    </div>

                </div>

                <div class="lg:col-span-6 col-span-12 lg:px-10">
                    <h3 class="font-bold text-white text-xl">Quick Links</h3>
                    <div class="grid grid-cols-12 pt-3 gap-4">
                        <div class="sm:col-span-4 col-span-6">
                            <a
                                href="#"
                                class="relative text-lg text-white hover:text-brand-yellow transition duration-300 ease-in-out after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[2px] after:bg-brand-yellow after:transition-all after:duration-300 hover:after:w-full">
                                Home
                            </a>

                            <br />
                            <a
                                href="#about"
                                class="relative text-lg text-white hover:text-brand-yellow transition duration-300 ease-in-out after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[2px] after:bg-brand-yellow after:transition-all after:duration-300 hover:after:w-full">
                                About Us</a>
                            <br />
                            <a
                                href="#works"
                                class="relative text-lg text-white hover:text-brand-yellow transition duration-300 ease-in-out after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[2px] after:bg-brand-yellow after:transition-all after:duration-300 hover:after:w-full">
                                How It Works</a>

                            <br />
                            <a
                                href="#franchise"
                                class="relative text-lg text-white hover:text-brand-yellow transition duration-300 ease-in-out after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[2px] after:bg-brand-yellow after:transition-all after:duration-300 hover:after:w-full">
                                Franchise</a>

                        </div>

                        <div class="sm:col-span-4 col-span-6">
                            <a
                                href="#driver"
                                class="relative text-lg text-white hover:text-brand-yellow transition duration-300 ease-in-out after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[2px] after:bg-brand-yellow after:transition-all after:duration-300 hover:after:w-full">
                                Driver</a>
                            <br />

                            <a
                                href="#technician"
                                class="relative text-lg text-white hover:text-brand-yellow transition duration-300 ease-in-out after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[2px] after:bg-brand-yellow after:transition-all after:duration-300 hover:after:w-full">
                                Technician</a>
                            <br />

                            <a
                                href="#passenger"
                                class="relative text-lg text-white hover:text-brand-yellow transition duration-300 ease-in-out after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[2px] after:bg-brand-yellow after:transition-all after:duration-300 hover:after:w-full">
                                Passenger</a>
                            <br />

                            <a
                                href="#testi"
                                class="relative text-lg text-white hover:text-brand-yellow transition duration-300 ease-in-out after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[2px] after:bg-brand-yellow after:transition-all after:duration-300 hover:after:w-full">
                                Testimonials</a>
                        </div>

                        <div class="sm:col-span-4 col-span-12">
                            <a
                                href="#faq"
                                class="relative text-lg text-white hover:text-brand-yellow transition duration-300 ease-in-out after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[2px] after:bg-brand-yellow after:transition-all after:duration-300 hover:after:w-full">
                                FAQs</a>
                            <br />
                            <a
                                href="#Terms"
                                class="relative text-lg text-white hover:text-brand-yellow transition duration-300 ease-in-out after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[2px] after:bg-brand-yellow after:transition-all after:duration-300 hover:after:w-full">
                                Terms & Privacy</a>
                            <br />
                            <a
                                href="#contact"
                                class="relative text-lg text-white hover:text-brand-yellow transition duration-300 ease-in-out after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[2px] after:bg-brand-yellow after:transition-all after:duration-300 hover:after:w-full">
                                Contact Us</a>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Start Footer -->

    <!-- Start All Rights Reserved -->
    <div class="bg-white py-3 text-brand-blue text-center px-5 text-lg/[25px]">
        <p>© 2025 ERP System for Car Boundary Service - Philippines <br> "Smart Mobility for Every Filipino."</p>
    </div>
    <!-- End All Rights Reserved -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="javascript/script.js"></script>

    <script>
        // --- CONFIGURATION ---
        const header = document.getElementById('mainHeader');
        const burgerBtn = document.getElementById('burgerBtn');
        const menuIcon = document.getElementById('menuIcon');
        const closeIcon = document.getElementById('closeIcon');
        const navMenu = document.getElementById('navMenu');
        const navLinks = document.querySelectorAll('.nav-link');
        const sectionIds = ['about', 'works', 'franchise', 'driver', 'technician', 'passenger', 'testi', 'faq', 'Terms', 'contact'];

        let isMenuOpen = false;
        let activeSection = 'home';

        // --- MENU TOGGLE ---
        burgerBtn.addEventListener('click', () => {
            isMenuOpen = !isMenuOpen;
            navMenu.classList.toggle('max-h-[600px]', isMenuOpen);
            navMenu.classList.toggle('opacity-100', isMenuOpen);
            navMenu.classList.toggle('py-3', isMenuOpen);
            navMenu.classList.toggle('px-4', isMenuOpen);
            menuIcon.classList.toggle('hidden', isMenuOpen);
            closeIcon.classList.toggle('hidden', !isMenuOpen);
        });

        // --- ACTIVE SECTION HIGHLIGHT ---
        const updateActiveLink = (id) => {
            navLinks.forEach(link => {
                const section = link.getAttribute('data-section');
                if (section === id) {
                    link.classList.add('bg-brand-blue', 'text-white');
                } else {
                    link.classList.remove('bg-brand-blue', 'text-white');
                }
            });
        };

        // --- INTERSECTION OBSERVER SETUP ---
        let currentSection = '';
        const getScrollMargin = (el) => {
            const style = window.getComputedStyle(el);
            const scrollMarginTop = parseInt(style.scrollMarginTop || '0', 10);
            return isNaN(scrollMarginTop) ? 0 : scrollMarginTop;
        };

        const handleIntersection = (entries) => {
            entries.forEach(entry => {
                const id = entry.target.id;
                if (entry.isIntersecting && entry.intersectionRatio > 0) {
                    currentSection = id;
                    activeSection = id;
                    updateActiveLink(id);
                }
                if (!entry.isIntersecting && entry.boundingClientRect.top > 0 && currentSection === id) {
                    const currentIndex = sectionIds.indexOf(id);
                    if (currentIndex > 0) updateActiveLink(sectionIds[currentIndex - 1]);
                    else updateActiveLink('home');
                }
            });

            const firstSection = document.getElementById(sectionIds[0]);
            if (firstSection && window.scrollY < firstSection.offsetTop - 100) {
                updateActiveLink('home');
            }
        };

        const observers = [];
        sectionIds.forEach(id => {
            const target = document.getElementById(id);
            if (!target) return;
            const marginTop = getScrollMargin(target);
            const rootMargin = `-${marginTop}px 0px -${window.innerHeight - marginTop - 10}px 0px`;
            const observer = new IntersectionObserver(handleIntersection, {
                root: null,
                rootMargin,
                threshold: [0, 0.25, 0.5, 0.75, 1],
            });
            observer.observe(target);
            observers.push(observer);
        });

        // --- SCROLL HEADER ANIMATION ---
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('top-4');
                header.classList.remove('lg:top-22', 'md:top-32', 'top-22');
            } else {
                header.classList.remove('top-4');
                header.classList.add('lg:top-22', 'md:top-32', 'top-22');
            }
        });

        // --- CLICK LINK CLOSE MENU ---
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                isMenuOpen = false;
                navMenu.classList.remove('max-h-[600px]', 'opacity-100', 'py-3', 'px-4');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            });
        });
    </script>

    <script>
        // Start Carousel -----------------------------------------------------------
        $(document).ready(function() {
            // First Owl Carousel (owl-2)
            if ($(".owl-1").length > 0) {
                var owl1 = $(".owl-1").owlCarousel({
                    center: false,
                    items: 1,
                    loop: true,
                    stagePadding: 0,
                    margin: 20,
                    smartSpeed: 1000,
                    autoplay: false,
                    nav: false, // Ensure navigation is disabled
                    dots: false,
                    pauseOnHover: false,
                    responsive: {
                        850: {
                            margin: 20,
                            nav: false,
                            items: 1,
                        }, // Ensure navigation is disabled for responsive
                        1000: {
                            margin: 20,
                            stagePadding: 0,
                            nav: false,
                            items: 1,
                        },
                        1280: {
                            margin: 20,
                            stagePadding: 0,
                            nav: false,
                            items: 2,
                        },
                    },
                });

                // Custom navigation buttons for owl-2
                $(".bg-left-half123").click(function() {
                    owl1.trigger("prev.owl.carousel", [1000]);
                });

                $(".bg-right-half").click(function() {
                    owl1.trigger("next.owl.carousel", [1000]);
                });
            }
        });
        // End Carousel -----------------------------------------------------------
    </script>

    <script src="https://unpkg.com/vue@3"></script>
    <script>
        const {
            createApp,
            ref
        } = Vue;

        createApp({
            setup() {
                // array of open states for each FAQ
                const open = ref([false, false, false, false, false]);

                const toggle = (index) => {
                    open.value[index] = !open.value[index];
                };

                return {
                    open,
                    toggle
                };
            },
        }).mount("#faq");
    </script>

    <style>
        /* Optional animation for slide-fade */
        .slide-fade-enter-active,
        .slide-fade-leave-active {
            transition: all 0.3s ease;
        }

        .slide-fade-enter-from,
        .slide-fade-leave-to {
            opacity: 0;
            transform: translateY(-5px);
        }
    </style>

</body>

</html>