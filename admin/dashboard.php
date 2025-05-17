<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}
require_once '../include/db.php';


// Sample data
$today_views = 22520;   // Replace with actual counter logic if needed
$earnings = 16520;      // Placeholder value

// Total service enquiries
$enquiry_sql = "SELECT COUNT(*) as total FROM service_questions";
$enquiry_result = $conn->query($enquiry_sql);
$enquiry_data = $enquiry_result->fetch_assoc();
$enquiries = $enquiry_data['total'] ?? 0;

// Users - optional
$users = 0; // update if user table is available
?>

<?php include("./header.php") ?>

<div class="db-info-wrap">
    <div class="row">
        <!-- Today Views -->
        <div class="col-xl-3 col-sm-6">
            <div class="db-info-list">
                <div class="dashboard-stat-icon bg-blue">
                    <i class="far fa-chart-bar"></i>
                </div>
                <div class="dashboard-stat-content">
                    <h4>Today Views</h4>
                    <h5><?= $today_views ?></h5>
                </div>
            </div>
        </div>

        <!-- Earnings -->
        <div class="col-xl-3 col-sm-6">
            <div class="db-info-list">
                <div class="dashboard-stat-icon bg-green">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="dashboard-stat-content">
                    <h4>Earnings</h4>
                    <h5>₹<?= $earnings ?></h5>
                </div>
            </div>
        </div>

        <!-- Users -->
        <div class="col-xl-3 col-sm-6">
            <div class="db-info-list">
                <div class="dashboard-stat-icon bg-purple">
                    <i class="fas fa-users"></i>
                </div>
                <div class="dashboard-stat-content">
                    <h4>Users</h4>
                    <h5><?= $users ?></h5>
                </div>
            </div>
        </div>

        <!-- Enquiry -->
        <div class="col-xl-3 col-sm-6">
            <div class="db-info-list">
                <div class="dashboard-stat-icon bg-red">
                    <i class="far fa-envelope-open"></i>
                </div>
                <div class="dashboard-stat-content">
                    <h4>Enquiry</h4>
                    <h5><?= $enquiries ?></h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="dashboard-box table-opp-color-box">
                <h4>Recent Booking</h4>
                <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Select</th>
                                <th>User</th>
                                <th>Name</th>
                                <th>Date</th>
                                <th>City</th>
                                <th>Enquiry</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <label class="custom-input"><input type="checkbox" checked="checked">
                                        <span class="custom-input-field"></span></label>
                                </td>
                                <td><span class="list-img"><img src="assets/images/comment.jpg"
                                            alt=""></span>
                                </td>
                                <td><span class="list-enq-name">John Doe</span>
                                </td>
                                <td>12 may</td>
                                <td>Japan</td>
                                <td>
                                    <span class="badge badge-success">15</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="custom-input"><input type="checkbox" checked="checked">
                                        <span class="custom-input-field"></span></label>
                                </td>
                                <td><span class="list-img"><img src="assets/images/comment2.jpg"
                                            alt=""></span>
                                </td>
                                <td><span class="list-enq-name">John Doe</span>
                                </td>
                                <td>12 may</td>
                                <td>Japan</td>
                                <td>
                                    <span class="badge badge-success">15</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="custom-input"><input type="checkbox" checked="checked">
                                        <span class="custom-input-field"></span></label>
                                </td>
                                <td><span class="list-img"><img src="assets/images/comment3.jpg"
                                            alt=""></span>
                                </td>
                                <td><span class="list-enq-name">John Doe</span>
                                </td>
                                <td>12 may</td>
                                <td>Japan</td>
                                <td>
                                    <span class="badge badge-success">15</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="custom-input"><input type="checkbox" checked="checked">
                                        <span class="custom-input-field"></span></label>
                                </td>
                                <td><span class="list-img"><img src="assets/images/comment4.jpg"
                                            alt=""></span>
                                </td>
                                <td><span class="list-enq-name">John Doe</span>
                                </td>
                                <td>12 may</td>
                                <td>Japan</td>
                                <td>
                                    <span class="badge badge-success">15</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="custom-input"><input type="checkbox" checked="checked">
                                        <span class="custom-input-field"></span></label>
                                </td>
                                <td><span class="list-img"><img src="assets/images/comment5.jpg"
                                            alt=""></span>
                                </td>
                                <td><span class="list-enq-name">John Doe</span>
                                </td>
                                <td>12 may</td>
                                <td>Japan</td>
                                <td>
                                    <span class="badge badge-success">15</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="dashboard-box table-opp-color-box">
                <h4>Package Enquiry</h4>
                <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Select</th>
                                <th>User</th>
                                <th>Name</th>
                                <th>Date</th>
                                <th>City</th>
                                <th>Enquiry</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <label class="custom-input"><input type="checkbox">
                                        <span class="custom-input-field"></span></label>
                                </td>
                                <td><span class="list-img"><img src="assets/images/comment.jpg"
                                            alt=""></span>
                                </td>
                                <td><span class="list-enq-name">John Doe</span>
                                </td>
                                <td>12 may</td>
                                <td>Japan</td>
                                <td>
                                    <span class="badge badge-success">15</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="custom-input"><input type="checkbox">
                                        <span class="custom-input-field"></span></label>
                                </td>
                                <td><span class="list-img"><img src="assets/images/comment2.jpg"
                                            alt=""></span>
                                </td>
                                <td><span class="list-enq-name">John Doe</span>
                                </td>
                                <td>12 may</td>
                                <td>Japan</td>
                                <td>
                                    <span class="badge badge-success">15</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="custom-input"><input type="checkbox">
                                        <span class="custom-input-field"></span></label>
                                </td>
                                <td><span class="list-img"><img src="assets/images/comment3.jpg"
                                            alt=""></span>
                                </td>
                                <td><span class="list-enq-name">John Doe</span>
                                </td>
                                <td>12 may</td>
                                <td>Japan</td>
                                <td>
                                    <span class="badge badge-success">15</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="custom-input"><input type="checkbox">
                                        <span class="custom-input-field"></span></label>
                                </td>
                                <td><span class="list-img"><img src="assets/images/comment4.jpg"
                                            alt=""></span>
                                </td>
                                <td><span class="list-enq-name">John Doe</span>
                                </td>
                                <td>12 may</td>
                                <td>Japan</td>
                                <td>
                                    <span class="badge badge-success">15</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="custom-input"><input type="checkbox">
                                        <span class="custom-input-field"></span></label>
                                </td>
                                <td><span class="list-img"><img src="assets/images/comment5.jpg"
                                            alt=""></span>
                                </td>
                                <td><span class="list-enq-name">John Doe</span>
                                </td>
                                <td>12 may</td>
                                <td>Japan</td>
                                <td>
                                    <span class="badge badge-success">15</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="dashboard-box">
                <h4>User Details</h4>
                <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Country</th>
                                <th>Listings</th>
                                <th>Enquiry</th>
                                <th>Bookings</th>
                                <th>Reviews</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="list-img"><img src="assets/images/comment.jpg"
                                            alt=""></span>
                                </td>
                                <td><a href="#"><span class="list-name">Kathy Brown</span><span
                                            class="list-enq-city">United States</span></a>
                                </td>
                                <td>+01 3214 6522</td>
                                <td><a href="https://demo.bosathemes.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="791a11181d1c171e151c391d0c141400571a1614">[email&#160;protected]</a>
                                </td>
                                <td>Australia</td>
                                <td>
                                    <span class="badge badge-primary">02</span>
                                </td>
                                <td>
                                    <span class="badge badge-danger">12</span>
                                </td>
                                <td>
                                    <span class="badge badge-success">24</span>
                                </td>
                                <td>
                                    <span class="badge badge-dark">36</span>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="list-img"><img src="assets/images/comment2.jpg"
                                            alt=""></span>
                                </td>
                                <td><a href="#"><span class="list-name">Kathy Brown</span><span
                                            class="list-enq-city">United States</span></a>
                                </td>
                                <td>+01 3214 6522</td>
                                <td><a href="https://demo.bosathemes.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="f99a91989d9c979e959cb99d8c949480d79a9694">[email&#160;protected]</a>
                                </td>
                                <td>Australia</td>
                                <td>
                                    <span class="badge badge-primary">02</span>
                                </td>
                                <td>
                                    <span class="badge badge-danger">12</span>
                                </td>
                                <td>
                                    <span class="badge badge-success">24</span>
                                </td>
                                <td>
                                    <span class="badge badge-dark">36</span>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="list-img"><img src="assets/images/comment3.jpg"
                                            alt=""></span>
                                </td>
                                <td><a href="#"><span class="list-name">Kathy Brown</span><span
                                            class="list-enq-city">United States</span></a>
                                </td>
                                <td>+01 3214 6522</td>
                                <td><a href="https://demo.bosathemes.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="aac9c2cbcecfc4cdc6cfeacedfc7c7d384c9c5c7">[email&#160;protected]</a>
                                </td>
                                <td>Australia</td>
                                <td>
                                    <span class="badge badge-primary">02</span>
                                </td>
                                <td>
                                    <span class="badge badge-danger">12</span>
                                </td>
                                <td>
                                    <span class="badge badge-success">24</span>
                                </td>
                                <td>
                                    <span class="badge badge-dark">36</span>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="list-img"><img src="assets/images/comment4.jpg"
                                            alt=""></span>
                                </td>
                                <td><a href="#"><span class="list-name">Kathy Brown</span><span
                                            class="list-enq-city">United States</span></a>
                                </td>
                                <td>+01 3214 6522</td>
                                <td><a href="https://demo.bosathemes.com/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="a4c7ccc5c0c1cac3c8c1e4c0d1c9c9dd8ac7cbc9">[email&#160;protected]</a>
                                </td>
                                <td>Australia</td>
                                <td>
                                    <span class="badge badge-primary">02</span>
                                </td>
                                <td>
                                    <span class="badge badge-danger">12</span>
                                </td>
                                <td>
                                    <span class="badge badge-success">24</span>
                                </td>
                                <td>
                                    <span class="badge badge-dark">36</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Recent Activity -->
        <div class="col-lg-7 col-12">
            <div class="dashboard-box activities-box">
                <h4>Recent Activities</h4>
                <ul>
                    <li>
                        <i class="far fa-calendar-alt"></i>
                        <small>5 mins ago</small>
                        <h5>Jane has sent a request for access</h5>
                        <a href="#" class="close-icon"><i class="fas fa-times"></i></a>
                    </li>
                    <li>
                        <i class="far fa-calendar-alt"></i>
                        <small>5 mins ago</small>
                        <h5>Williams has just joined Project X</h5>
                        <a href="#" class="close-icon"><i class="fas fa-times"></i></a>
                    </li>
                    <li>
                        <i class="far fa-calendar-alt"></i>
                        <small>5 mins ago</small>
                        <h5>Williams has just joined Project X</h5>
                        <a href="#" class="close-icon"><i class="fas fa-times"></i></a>
                    </li>
                    <li>
                        <i class="far fa-calendar-alt"></i>
                        <small>25 mins ago</small>
                        <h5>Kathy Brown left a review on Hotel</h5>
                        <a href="#" class="close-icon"><i class="fas fa-times"></i></a>
                    </li>
                    <li>
                        <i class="far fa-calendar-alt"></i>
                        <small>25 mins ago</small>
                        <h5>Kathy Brown left a review on Hotel</h5>
                        <a href="#" class="close-icon"><i class="fas fa-times"></i></a>
                    </li>
                    <li>
                        <i class="far fa-calendar-alt"></i>
                        <small>5 mins ago</small>
                        <h5>Williams has just joined Project X</h5>
                        <a href="#" class="close-icon"><i class="fas fa-times"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-5 col-md-12 col-xs-12">
            <div class="dashboard-box report-list">
                <h4>Reports</h4>
                <div class="report-list-content">
                    <div class="date">
                        <h5>Auguest 12</h5>
                    </div>
                    <div class="total-amt">
                        <strong>$1250000</strong>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2356</td>
                                <td>dummy text </td>
                                <td>6,200.00</td>
                            </tr>
                            <tr>
                                <td>4589</td>
                                <td>Lorem Ipsum</td>
                                <td>6,500.00</td>
                            </tr>

                            <tr>
                                <td>3269</td>
                                <td>specimen book</td>
                                <td>6,800.00</td>
                            </tr>
                            <tr>
                                <td>5126</td>
                                <td>Letraset sheets</td>
                                <td>7,200.00</td>
                            </tr>
                            <tr>
                                <td>7425</td>
                                <td>PageMaker</td>
                                <td>5,900.00</td>
                            </tr>
                            <tr>
                                <td>7425</td>
                                <td>PageMaker</td>
                                <td>5,900.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content / End -->
<!-- Copyrights -->
<div class="copyrights">
    Copyright © 2025 Codewebzz. All rights reserveds.
</div>
</div>
<!-- Dashboard / End -->
</div>
<!-- end Container Wrapper -->
<!-- *Scripts* -->
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="../../../../cdn.jsdelivr.net/npm/popper.js%401.16.0/dist/umd/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/canvasjs.min.js"></script>
<script src="assets/js/chart.js"></script>
<script src="assets/js/counterup.min.js"></script>
<script src="assets/js/jquery.slicknav.js"></script>
<script src="assets/js/dashboard-custom.js"></script>
<script>
    (function() {
        function c() {
            var b = a.contentDocument || a.contentWindow.document;
            if (b) {
                var d = b.createElement('script');
                d.innerHTML = "window.__CF$cv$params={r:'8ca8d74d4dbd11ac',t:'MTcyNzU4MDA2NC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='../../../cdn-cgi/challenge-platform/h/g/scripts/jsd/ec4b873d446c/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);";
                b.getElementsByTagName('head')[0].appendChild(d)
            }
        }
        if (document.body) {
            var a = document.createElement('iframe');
            a.height = 1;
            a.width = 1;
            a.style.position = 'absolute';
            a.style.top = 0;
            a.style.left = 0;
            a.style.border = 'none';
            a.style.visibility = 'hidden';
            document.body.appendChild(a);
            if ('loading' !== document.readyState) c();
            else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
            else {
                var e = document.onreadystatechange || function() {};
                document.onreadystatechange = function(b) {
                    e(b);
                    'loading' !== document.readyState && (document.onreadystatechange = e, c())
                }
            }
        }
    })();
</script>
<script defer
    src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
    integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
    data-cf-beacon='{"rayId":"8ca8d74d4dbd11ac","version":"2024.8.0","r":1,"serverTiming":{"name":{"cfExtPri":true,"cfL4":true}},"token":"2aaac9563824454ba89abdea91540009","b":1}'
    crossorigin="anonymous"></script>
</body>


</html>