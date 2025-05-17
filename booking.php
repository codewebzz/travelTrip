<?php include("./header.php") ?>
<main id="content" class="site-main">
   <!-- Inner Banner html start-->
   <section class="inner-banner-wrap">
      <div class="inner-baner-container" style="background-image: url(assets/images/inner-banner.jpg);">
         <div class="container">
            <div class="inner-banner-content">
               <h1 class="inner-title">Booking</h1>
            </div>
         </div>
      </div>
      <div class="inner-shape"></div>
   </section>
   <!-- Inner Banner html end-->
   <div class="step-section booking-section">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 right-sidebar">
               <!-- step one form html start -->
               <div class="booking-form-wrap">
                  <div class="booking-content">
                     <div class="form-title">
                        <span>1</span>
                        <h3>Your Details</h3>
                     </div>
                     <div class="row">
                        <div class="col-sm-6">
                           <div class="form-group">
                              <label>First name*</label>
                              <input type="text" class="form-control" name="firstname_booking" required>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <label>Last name*</label>
                              <input type="text" class="form-control" name="lastname_booking" required>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <label>Email*</label>
                              <input type="email" class="form-control" name="email_booking" required>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <label>Confirm Email*</label>
                              <input type="email" class="form-control" name="confirm_email_booking" required>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <label>Phone*</label>
                              <input type="text" class="form-control" name="phone_booking" required>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <label>Number of Travelers*</label>
                              <input type="number" class="form-control" name="num_travelers" min="1" required>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <label>Preferred Travel Date*</label>
                              <input type="date" class="form-control" name="travel_date" required>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <label>Destination / Package Name*</label>
                              <input type="text" class="form-control" name="package_name" required>
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="form-group">
                              <label>Additional Notes (optional)</label>
                              <textarea class="form-control" name="additional_notes" rows="4" placeholder="Mention any special requests, health concerns, or questions..."></textarea>
                           </div>
                        </div>
                     </div>
                  </div>



                  <div class="form-policy">
                     <h3>Cancellation policy</h3>
                     <div class="form-group">
                        <label class="checkbox-list">
                           <input type="checkbox" name="s">
                           <span class="custom-checkbox"></span>
                           I accept terms and conditions and general policy.
                        </label>
                     </div>
                     <a href="#" class="button-primary">Book Now</a>
                  </div>
               </div>
               <!-- step one form html end -->
            </div>
            <div class="col-lg-4">
               <aside class="sidebar">
                  <div class="widget-bg widget-table-summary">
                     <h4 class="bg-title">Payment Method</h4>
                     <img src="./assets/images/qr.png" alt="">
                  </div>
                  <div class="widget-bg widget-support-wrap">
                     <div class="icon">
                        <i class="fas fa-phone-volume"></i>
                     </div>
                     <div class="support-content">
                        <h5>HELP AND SUPPORT</h5>
                        <a href="telto:12345678" class="phone">+91-7827372844</a>
                        <small>Wednesday to Monday 9.00am - 8.00pm</small>
                     </div>
                  </div>
               </aside>
            </div>
         </div>
      </div>
   </div>
</main>
<?php include("./footer.php") ?>