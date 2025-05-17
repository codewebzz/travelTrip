<?php include("./header.php") ?>
<div class="db-info-wrap">
    <div class="row">
        <div class="col-lg-12">
            <div class="dashboard-box user-form-wrap">
                <h4>User Edit Details</h4>
                <form class="form-horizontal" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>First name</label>
                                <input name="firstname" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Last name</label>
                                <input name="lastname" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" class="form-control" type="email">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label>Date of Birth</label>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <select>
                                            <option value="1">Day</option>
                                            <option value="0">Sunday</option>
                                            <option value="0">Monday</option>
                                            <option value="0">Tuesday</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <select>
                                            <option value="1">Month</option>
                                            <option value="0">January</option>
                                            <option value="0">February</option>
                                            <option value="0">March</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <select>
                                            <option value="1">Years</option>
                                            <option value="0">1990</option>
                                            <option value="0">1992</option>
                                            <option value="0">1993</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Country Code</label>
                                <select>
                                    <option value="1">+97701</option>
                                    <option value="0">1990</option>
                                    <option value="0">1992</option>
                                    <option value="0">1993</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input name="phone" id="input-phone" class="form-control" value=""
                                    placeholder="" type="text">
                            </div>
                        </div>
                        <div class="col-12">
                            <h4>Contact Details</h4>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Country</label>
                                <select>
                                    <option value="0">Italy</option>
                                    <option value="1">Japan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>State</label>
                                <select>
                                    <option value="0">New York</option>
                                    <option value="1">Mexico</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>City</label>
                                <select>
                                    <option value="0">Tokyo</option>
                                    <option value="1">Paris</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Address</label>
                                <input name="address" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-12">
                            <h4>Upload Profile Photo</h4>
                        </div>
                        <div class="col-sm-6">
                            <div class="upload-input">
                                <div class="form-group">
                                    <span class="upload-btn">Upload a image</span>
                                    <input type="file" name="myfile">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <h4>Describe Yourself</h4>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Please Tell Us About You</label>
                                <textarea class="form-control" id="message" name="message" placeholder=""
                                    required=""></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="button-primary">Upload Setting</button>
                </form>
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
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="../../../../cdn.jsdelivr.net/npm/popper.js%401.16.0/dist/umd/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/canvasjs.min.js"></script>
<script src="assets/js/counterup.min.js"></script>
<script src="assets/js/jquery.slicknav.js"></script>
<script src="assets/js/dashboard-custom.js"></script>
<script>
    (function() {
        function c() {
            var b = a.contentDocument || a.contentWindow.document;
            if (b) {
                var d = b.createElement('script');
                d.innerHTML = "window.__CF$cv$params={r:'8ca8d7512abe11ac',t:'MTcyNzU4MDA2NS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='../../../cdn-cgi/challenge-platform/h/g/scripts/jsd/ec4b873d446c/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);";
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
    data-cf-beacon='{"rayId":"8ca8d7512abe11ac","version":"2024.8.0","r":1,"serverTiming":{"name":{"cfExtPri":true,"cfL4":true}},"token":"2aaac9563824454ba89abdea91540009","b":1}'
    crossorigin="anonymous"></script>
</body>


</html>