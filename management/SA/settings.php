<!doctype html>
<html lang="en">
<?php include('../../includes/header.php'); ?>

<body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">

    <div class="app-wrapper">
        <?php include('../../includes/navbar.php'); ?>
        <?php include('../../includes/sidebar.php'); ?>

        <main class="app-main" style="background-color: #f0f8ff;">
            <div class="app-content-header">
                <div class="container-fluid">
                    <h3 class="mb-0"><i class="bi bi-gear-fill me-2 text-primary"></i>Settings</h3>
                    <p class="text-muted">Manage your profile, preferences, and system configurations.</p>
                </div>
            </div>

            <div class="app-content">
                <div class="container-fluid">

                    <!-- Profile Settings -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-primary text-white">
                            <i class="bi bi-person-circle me-2"></i><strong>Profile Settings</strong>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="fullname" class="form-label">Full Name</label>
                                        <input type="text" id="fullname" class="form-control" value="Admin User">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" id="email" class="form-control" value="admin@ecartaxi.com">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="contact" class="form-label">Contact Number</label>
                                        <input type="text" id="contact" class="form-control" value="+63 912 345 6789">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="role" class="form-label">Role</label>
                                        <input type="text" id="role" class="form-control" value="System Administrator" disabled>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary"><i class="bi bi-save"></i> Save Changes</button>
                            </form>
                        </div>
                    </div>

                    <!-- System Preferences -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-success text-white">
                            <i class="bi bi-sliders me-2"></i><strong>System Preferences</strong>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="timezone" class="form-label">Timezone</label>
                                        <select id="timezone" class="form-select">
                                            <option selected>Asia/Manila (GMT+8)</option>
                                            <option>Asia/Singapore (GMT+8)</option>
                                            <option>UTC (GMT+0)</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="language" class="form-label">Language</label>
                                        <select id="language" class="form-select">
                                            <option selected>English</option>
                                            <option>Filipino</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-check form-switch mb-3">
                                    <input class="form-check-input" type="checkbox" id="darkMode">
                                    <label class="form-check-label" for="darkMode">Enable Dark Mode</label>
                                </div>

                                <button type="button" class="btn btn-success"><i class="bi bi-check2-circle"></i> Save Preferences</button>
                            </form>
                        </div>
                    </div>

                    <!-- Notification Settings -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-warning text-dark">
                            <i class="bi bi-bell-fill me-2"></i><strong>Notification Settings</strong>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="rideUpdates" checked>
                                    <label class="form-check-label" for="rideUpdates">Ride Status Updates</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="systemAlerts" checked>
                                    <label class="form-check-label" for="systemAlerts">System Alerts (Battery, Maintenance)</label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="emailNotif">
                                    <label class="form-check-label" for="emailNotif">Send Notifications via Email</label>
                                </div>
                                <button type="button" class="btn btn-warning text-dark"><i class="bi bi-save2"></i> Save Notifications</button>
                            </form>
                        </div>
                    </div>

                    <!-- Security Settings -->
                    <div class="card shadow-sm">
                        <div class="card-header bg-danger text-white">
                            <i class="bi bi-shield-lock me-2"></i><strong>Security Settings</strong>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="oldPassword" class="form-label">Current Password</label>
                                        <input type="password" id="oldPassword" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="newPassword" class="form-label">New Password</label>
                                        <input type="password" id="newPassword" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="confirmPassword" class="form-label">Confirm New Password</label>
                                        <input type="password" id="confirmPassword" class="form-control">
                                    </div>
                                </div>
                                <button type="button" class="btn btn-danger"><i class="bi bi-key"></i> Update Password</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </main>



        <?php include('../../includes/footer.php'); ?>

    </div>

    <?php include('../../includes/js.php'); ?>

</body>

</html>