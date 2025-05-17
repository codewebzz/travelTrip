<?php include("./header.php");
include('include/db.php');  // if you're already in the main folder

?>
<main id="content" class="site-main">
   <!-- Home banner html start -->
   <section class="home-banner-section">
      <div class="home-banner-items">
         <div class="banner-inner-wrap" style="background-image: url(assets/images/slider-banner-2.jpg);"></div>
         <div class="banner-content-wrap">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-8">
                     <div class="banner-content section-heading section-heading-white">
                        <h5>Welcome to Ghoomo Saste Me </h5>
                        <h2 class="banner-title">Jahaan Dil Chahe, Ghoomo Saste Me! </h2>
                        <div class="title-icon-divider"><i class="fas fa-suitcase-rolling"></i></div>
                        <p>We are not just a travel agency, we are your travel partners, adventure guides and moreover
                           budget friendly explorers. We understand that the best memories are made on the
                           spontaneous journeys. Whether it’s a quick weekend getaway, a soul-searching solo trip, or
                           a fun packed family vacation, we ensure that every trip is light on your wallet but heavy on
                           experiences. </p>
                        <div class="slider-button">
                           <a href="./service.php" class="button-primary">READ MORE</a>
                           <a href="./tour-packages.php" class="button-secondary" style="color: #FFDE5B;">SEE ALL OFFER</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <!-- Home search field html start -->
                     <div class="trip-search-section">
                        <div class="container">
                           <div class="trip-search-inner secondary-bg-backdrop">
                              <form action="include/front_form_submit.php" method="post">
                                 <div class="input-group width-col-1">
                                    <label> Search Destination* </label>
                                    <input type="text" name="destination" placeholder="Enter Destination" required>
                                 </div>
                                 <div class="input-group width-col-1">
                                    <label> Pax Number* </label>
                                    <input type="number" name="pax" placeholder="No. of People" required>
                                 </div>
                                 <div class="input-group width-col-1">
                                    <label> Checkin Date* </label>
                                    <i class="far fa-calendar"></i>
                                    <input class="input-date-picker" type="text" name="checkin" placeholder="MM / DD / YY" autocomplete="off" readonly required>
                                 </div>
                                 <div class="input-group width-col-1">
                                    <label> Checkout Date* </label>
                                    <i class="far fa-calendar"></i>
                                    <input class="input-date-picker" type="text" name="checkout" placeholder="MM / DD / YY" autocomplete="off" readonly required>
                                 </div>
                                 <div class="input-group width-col-1">
                                    <label> Mobile* </label>
                                    <i class="far fa-phone"></i>
                                    <input type="tel" name="mobile" placeholder="Mobile" pattern="[6-9]{1}[0-9]{9}" maxlength="10" required title="Enter a valid 10-digit mobile number" required>
                                 </div>
                                 <div class="input-group width-col-1">
                                    <label class="screen-reader-text"> Search </label>
                                    <input type="submit" name="travel_search" value="INQUIRE NOW">
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <!-- Home search field html end -->
                  </div>

               </div>
            </div>
         </div>
         <div class="overlay"></div>
      </div>
   </section>
   <!-- banner html start -->
   <section class="destination-section">
      <div class="container">
         <div class="section-heading text-center">
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <h5>POPULAR DESTINATION</h5>
                  <h2 class="headingshadow"><img src="./assets/images/owl.png" width="50px" />TOP NOTCH DESTINATION <img src="./assets/images/owl.png" width="50px" /></h2>
                  <div class="title-icon-divider"><i class="fas fa-suitcase-rolling text-dark"></i></div>
               </div>
            </div>
         </div>
         <div class="destination-inner destination-four-column">
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <div class="desti-item text-center">
                     <figure class="desti-image">
                        <img src="assets/images/img50.jpg" alt="">
                        <div class="rating-start" title="Rated 5 out of 4">
                           <span style="width: 53%"></span>
                        </div>
                     </figure>
                     <div class="destiu-content">
                        <h3>
                           <a href="#">Kasol</a>
                        </h3>
                        <div class="meta-cat">
                           <a class="" href="#">Himachal Pradesh</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <div class="desti-item text-center">
                     <figure class="desti-image">
                        <img src="assets/images/img11.jpg" alt="">
                        <div class="rating-start" title="Rated 5 out of 4">
                           <span style="width: 53%"></span>
                        </div>
                     </figure>
                     <div class="desti-content">
                        <h3>
                           <a href="#">Rishikesh</a>
                        </h3>
                        <div class="meta-cat">
                           <a href="#">Uttarakhand</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <div class="desti-item text-center">
                     <figure class="desti-image">
                        <img src="assets/images/img10.jpg" alt="">
                        <div class="rating-start" title="Rated 5 out of 4">
                           <span style="width: 53%"></span>
                        </div>
                     </figure>
                     <div class="desti-content">
                        <h3>
                           <a href="#">Manali</a>
                        </h3>
                        <div class="meta-cat">
                           <a href="#">Himachal Pradesh</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <div class="desti-item text-center">
                     <figure class="desti-image">
                        <img src="assets/images/img51.jpg" alt="">
                        <div class="rating-start" title="Rated 5 out of 4">
                           <span style="width: 53%"></span>
                        </div>
                     </figure>
                     <div class="desti-content">
                        <h3>
                           <a href="#">Kedarnath</a>
                        </h3>
                        <div class="meta-cat">
                           <a href="#">Uttarakhand</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="btn-wrap text-center">
               <a href="#" class="button-primary">MORE DESTINATION</a>
            </div>
         </div>
      </div>
   </section>
   <section class="home-about-section">
      <div class="container">
         <div class="row">
            <div class="col-lg-7">
               <div class="about-img-wrap">
                  <div class="about-img-left">
                     <div class="about-content secondary-bg d-flex flex-wrap">
                        <h3 class="text-secondary">Something you want to know about us !!</h3>
                        <a href="#" class="button-primary">LEARN MORE</a>
                     </div>
                     <div class="about-img">
                        <img src="assets/images/img9.jpg" alt="">
                     </div>
                  </div>
                  <div class="about-img-right">
                     <div class="about-img">
                        <img src="assets/images/img12.jpg" alt="">
                     </div>
                     <div class="about-img">
                        <img src="assets/images/img34.jpg" alt="">
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-5">
               <div class="banner-content section-heading">
                  <h5>INTRODUCTION ABOUT US</h5>
                  <h2 class="banner-title">Host ka Mantra</h2>
                  <div class="title-icon-divider"><i class="fas fa-suitcase-rolling"></i></div>
                  <p>Ghoomo Saste Me mein hum sirf tours nahi, yaadein banate hain. Guide Man host ke saath har trip hota hai fun-filled, pocket-friendly, aur hassle-free. Chahe ho pahaad, jungle, ya samundar – adventure yahin se shuru hota hai!</p>
               </div>

               <div class="about-service-container">
                  <div class="about-service">
                     <div class="about-service-icon">
                        <img src="assets/images/icon15.png" alt="">
                     </div>
                     <div class="about-service-content">
                        <h4>BEST PRICE GUARANTEED</h4>
                        <p>Hamare plans budget-friendly hain, bina kisi hidden charges ke. Saste mein best milega – yeh hai hamara promise!</p>
                     </div>
                  </div>
                  <div class="about-service">
                     <div class="about-service-icon">
                        <img src="assets/images/icon16.png" alt="">
                     </div>
                     <div class="about-service-content">
                        <h4>AMAZING DESTINATIONS</h4>
                        <p>India ke hidden gems ho ya famous tourist spots – hum le jaate hain wahan jahan real adventure hoti hai.</p>
                     </div>
                  </div>
                  <div class="about-service">
                     <div class="about-service-icon">
                        <img src="assets/images/icon17.png" alt="">
                     </div>
                     <div class="about-service-content">
                        <h4>PERSONAL SERVICES</h4>
                        <p>Har traveler special hai. Isliye har trip milta hai personal touch, expert guidance aur full support ke saath.</p>
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </section>
   <!-- client section html start -->
   <div class="client-section">
      <div class="container">
         <div class="client-wrap client-slider">
            <div class="client-item">
               <figure>
                  <img src="assets/images/logo10.png" alt="">
               </figure>
            </div>
            <div class="client-item">
               <figure>
                  <img src="assets/images/logo8.png" alt="">
               </figure>
            </div>
            <div class="client-item">
               <figure>
                  <img src="assets/images/logo9.png" alt="">
               </figure>
            </div>
            <div class="client-item">
               <figure>
                  <img src="assets/images/logo10.png" alt="">
               </figure>
            </div>
            <div class="client-item">
               <figure>
                  <img src="assets/images/logo11.png" alt="">
               </figure>
            </div>
            <div class="client-item">
               <figure>
                  <img src="assets/images/logo8.png" alt="">
               </figure>
            </div>
         </div>
      </div>
   </div>
   <!-- client html end -->
   <!-- Home packages section html start -->
   <section class="package-section bg-light-grey">
      <div class="container">
         <div class="section-heading text-center">
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <h5>EXPLORE GREAT PLACES</h5>
                  <h2 class="headingshadow"><img src="./assets/images/owl.png" width="50px" />POPULAR PACKAGES<img src="./assets/images/owl.png" width="50px" /></h2>
                  <div class="title-icon-divider"><i class="fas fa-suitcase-rolling"></i></div>
               </div>
            </div>
         </div>
         <div class="package-inner package-inner-list">
            <div class="row">
               <!-- Manali Escape -->
               <div class="col-lg-6">
                  <div class="package-wrap package-wrap-list">
                     <figure class="feature-image">
                        <a href="#"><img src="assets/images/manali.png" alt="Manali Escape"></a>
                        <div class="package-price">
                           <h6><span>₹5,000</span> / per person</h6>
                        </div>
                        <div class="package-meta text-center">
                           <ul>
                              <li><i class="far fa-clock"></i> 5D/4N</li>
                              <li><i class="fas fa-user-friends"></i> Group/Individual</li>
                              <li><i class="fas fa-map-marker-alt"></i> Manali</li>
                           </ul>
                        </div>
                     </figure>
                     <div class="package-content">
                        <h3><a href="#">Manali Escape</a></h3>
                        <div class="review-area">
                           <span class="review-text">(32 reviews)</span>
                           <div class="rating-start" title="Rated 5 out of 5">
                              <span style="width: 90%"></span>
                           </div>
                        </div>
                        <p class="read-more-text">
                           Nestled in the heart of Himachal Pradesh, Manali is a beautiful hill station known for its
                           snow-capped mountains, lush valleys, and adventure activities. A perfect getaway for
                           nature lovers, honeymooners, and thrill-seekers, Manali offers everything from serene
                           temples and hot springs to trekking, paragliding, and river rafting. Whether you’re craving
                           peaceful mountain views or adrenaline-pumping adventures, Manali has it all.
                        </p>
                        <a href="javascript:void(0);" class="read-more-toggle">Read More</a>
                        <div class="btn-wrap">
                           <a href="#" class="button-text width-6">Book Now<i class="fas fa-arrow-right"></i></a>
                           <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- Kedarnath Adventure -->
               <div class="col-lg-6">
                  <div class="package-wrap package-wrap-list">
                     <figure class="feature-image">
                        <a href="#"><img src="assets/images/img51.jpg" alt="Kedarnath Adventure"></a>
                        <div class="package-price">
                           <h6><span>₹5,000</span> / per person</h6>
                        </div>
                        <div class="package-meta text-center">
                           <ul>
                              <li><i class="far fa-clock"></i> 3D/2N</li>
                              <li><i class="fas fa-user-friends"></i> Group Tour</li>
                              <li><i class="fas fa-map-marker-alt"></i> Kedarnath</li>
                           </ul>
                        </div>
                     </figure>
                     <div class="package-content">
                        <h3><a href="#">Kedarnath Adventure</a></h3>
                        <div class="review-area">
                           <span class="review-text">(45 reviews)</span>
                           <div class="rating-start" title="Rated 5 out of 5">
                              <span style="width: 95%"></span>
                           </div>
                        </div>
                        <p class="read-more-text">
                           Kedarnath is a beautiful town tucked away in the Garhwal Himalayas of Uttarakhand.
                           Known for its famous Kedarnath Temple and stunning mountain views, it’s a perfect spot
                           for both spiritual seekers and adventure lovers. Whether you’re here for blessings or
                           breathtaking scenery, Kedarnath never disappoints.
                        </p>
                        <a href="javascript:void(0);" class="read-more-toggle">Read More</a>
                        <div class="btn-wrap">
                           <a href="#" class="button-text width-6">Book Now<i class="fas fa-arrow-right"></i></a>
                           <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- Kasol Trip -->
               <div class="col-lg-6">
                  <div class="package-wrap package-wrap-list">
                     <figure class="feature-image">
                        <a href="#"><img src="assets/images/img10.jpg" alt="Kasol Tour"></a>
                        <div class="package-price">
                           <h6><span>₹4,000</span> / per person</h6>
                        </div>
                        <div class="package-meta text-center">
                           <ul>
                              <li><i class="far fa-clock"></i> 3D/2N</li>
                              <li><i class="fas fa-user-friends"></i> Backpackers</li>
                              <li><i class="fas fa-map-marker-alt"></i> Kasol</li>
                           </ul>
                        </div>
                     </figure>
                     <div class="package-content">
                        <h3><a href="#">Kasol Himachal Backpacking</a></h3>
                        <div class="review-area">
                           <span class="review-text">(28 reviews)</span>
                           <div class="rating-start" title="Rated 4.5 out of 5">
                              <span style="width: 85%"></span>
                           </div>
                        </div>
                        <p class="read-more-text">
                           Enjoy the scenic beauty of Parvati Valley. Perfect for solo travelers and friends. Camp, trek & chill in cafés.
                        </p>
                        <a href="javascript:void(0);" class="read-more-toggle">Read More</a>
                        <div class="btn-wrap">
                           <a href="#" class="button-text width-6">Book Now<i class="fas fa-arrow-right"></i></a>
                           <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- Rishikesh Package -->
               <div class="col-lg-6">
                  <div class="package-wrap package-wrap-list">
                     <figure class="feature-image">
                        <a href="#"><img src="assets/images/rishikesh.png" alt="Rishikesh Package"></a>
                        <div class="package-price">
                           <h6><span>₹3,500</span> / per person</h6>
                        </div>
                        <div class="package-meta text-center">
                           <ul>
                              <li><i class="far fa-clock"></i> 2D/1N</li>
                              <li><i class="fas fa-user-friends"></i> Group Adventure</li>
                              <li><i class="fas fa-map-marker-alt"></i> Rishikesh</li>
                           </ul>
                        </div>
                     </figure>
                     <div class="package-content">
                        <h3><a href="#">Rishikesh Adventure Retreat</a></h3>
                        <div class="review-area">
                           <span class="review-text">(35 reviews)</span>
                           <div class="rating-start" title="Rated 4.8 out of 5">
                              <span style="width: 90%"></span>
                           </div>
                        </div>
                        <p class="read-more-text">
                           The yoga capital of the world! White-water rafting, camping, cliff jumping, and peace by the Ganga.
                        </p>
                        <a href="javascript:void(0);" class="read-more-toggle">Read More</a>
                        <div class="btn-wrap">
                           <a href="#" class="button-text width-6">Book Now<i class="fas fa-arrow-right"></i></a>
                           <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="btn-wrap text-center">
               <a href="./tour-packages.php" class="button-primary">VIEW ALL PACKAGES</a>
            </div>
         </div>

      </div>
   </section>
   <!-- packages html end -->
   <!-- Home activity section html start -->
   <section class="activity-section activity-bg-image" style="background-image: url(assets/images/img29.jpg);">
      <div class="container">
         <div class="section-heading section-heading-white text-center">
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <h5>EXPLORE GREAT PLACES</h5>
                  <h2 class="headingshadow"><img src="./assets/images/owl.png" width="50px" />POPULAR PACKAGES<img src="./assets/images/owl.png" width="50px" /></h2>
                  <div class="title-icon-divider"><i class="fas fa-suitcase-rolling"></i></div>
               </div>
            </div>
         </div>
         <div class="activity-inner row">
            <div class="col-lg-2 col-md-4 col-6">
               <div class="activity-item">
                  <div class="activity-icon">
                     <a href="#">
                        <img src="assets/images/img44.png" alt="">
                     </a>
                  </div>
                  <div class="activity-content">
                     <h4>
                        <a href="#">Adventure</a>
                     </h4>
                     <p>15 Destination</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
               <div class="activity-item">
                  <div class="activity-icon">
                     <a href="#">
                        <img src="assets/images/img45.png" alt="">
                     </a>
                  </div>
                  <div class="activity-content">
                     <h4>
                        <a href="#">Trekking</a>
                     </h4>
                     <p>12 Destination</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
               <div class="activity-item">
                  <div class="activity-icon">
                     <a href="#">
                        <img src="assets/images/img46.png" alt="">
                     </a>
                  </div>
                  <div class="activity-content">
                     <h4>
                        <a href="#">Camp Fire</a>
                     </h4>
                     <p>7 Destination</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
               <div class="activity-item">
                  <div class="activity-icon">
                     <a href="#">
                        <img src="assets/images/img47.png" alt="">
                     </a>
                  </div>
                  <div class="activity-content">
                     <h4>
                        <a href="#">Off Road</a>
                     </h4>
                     <p>15 Destination</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
               <div class="activity-item">
                  <div class="activity-icon">
                     <a href="#">
                        <img src="assets/images/img48.png" alt="">
                     </a>
                  </div>
                  <div class="activity-content">
                     <h4>
                        <a href="#">Camping</a>
                     </h4>
                     <p>13 Destination</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
               <div class="activity-item">
                  <div class="activity-icon">
                     <a href="#">
                        <img src="assets/images/img49.png" alt="">
                     </a>
                  </div>
                  <div class="activity-content">
                     <h4>
                        <a href="#">Exploring</a>
                     </h4>
                     <p>25 Destination</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- activity html end -->

   <!-- Home special section html start -->
   <!-- <section class="special-section">
      <div class="container">
         <div class="section-heading text-center">
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <h5>TRAVEL OFFER & DISCOUNT</h5>
                  <h2 class="headingshadow"><img src="./assets/images/owl.png" width="50px" />SPECIAL TRAVEL OFFER<img src="./assets/images/owl.png" width="50px" /></h2>
                  <div class="title-icon-divider"><i class="fas fa-suitcase-rolling"></i></div>
               </div>
            </div>
         </div>
         <div class="special-inner mt-0">
            <div class="row">
               <div class="col-sm-6 col-lg-4">
                  <div class="special-overlay-inner">
                     <div class="special-overlay-item">
                        <figure class="special-img">
                           <img src="assets/images/img11.jpg" alt="">
                           <div class="badge-dis">
                              <span>
                                 <strong>15%</strong>
                                 off
                              </span>
                           </div>
                        </figure>
                        <div class="special-content">
                           <div class="meta-cat">
                              <a href="#">MALAYSIA</a>
                           </div>
                           <h3>
                              <a href="#">Sunset view of beautiful lakeside city</a>
                           </h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-lg-4">
                  <div class="special-overlay-inner">
                     <div class="special-overlay-item">
                        <figure class="special-img">
                           <img src="assets/images/img10.jpg" alt="">
                           <div class="badge-dis">
                              <span>
                                 <strong>15%</strong>
                                 off
                              </span>
                           </div>
                        </figure>
                        <div class="special-content">
                           <div class="meta-cat">
                              <a href="#">NEW ZEALAND</a>
                           </div>
                           <h3>
                              <a href="#">Trekking to the mountain camp site</a>
                           </h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-lg-4">
                  <div class="special-overlay-inner">
                     <div class="special-overlay-item">
                        <figure class="special-img">
                           <img src="assets/images/img9.jpg" alt="">
                           <div class="badge-dis">
                              <span>
                                 <strong>15%</strong>
                                 off
                              </span>
                           </div>
                        </figure>
                        <div class="special-content">
                           <div class="meta-cat">
                              <a href="#">CANADA</a>
                           </div>
                           <h3>
                              <a href="#">Experience the natural beauty of glacier</a>
                           </h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <!-- best html end -->
   <!-- Home subscribe section html start -->
   <section class="subscribe-section subscribe-bg-image" style="background-image: url(assets/images/img16.jpg);">
      <div class="container">
         <div class="row">
            <div class="col-lg-7">
               <div class="section-heading section-heading-white pr-40">
                  <h5>TRAVEL OFFER & DISCOUNT</h5>
                  <h2>HOLIDAY SPECIAL OFFER!</h2>
                  <div class="title-icon-divider"><i class="fas fa-suitcase-rolling"></i></div>
                  <h4>We understand your event deserves to be special, so we're offering an exclusive deal just for you.</h4>
                  <div class="newsletter-form">
                     <form>
                        <input type="email" name="s" placeholder="Your Email Address" required>
                        <input type="submit" name="signup" value="SIGN UP NOW!">
                     </form>
                  </div>
                  <p>Join thousands of happy travelers who have discovered unforgettable experiences with our expertly curated tours and unbeatable discounts. Your next adventure is just a sign-up away!</p>
               </div>
            </div>
            <div class="col-lg-5">
               <div class="progress-wrap">
                  <div class="progress-inner">
                     <div class="progress-circle" data-percentage="80">
                        <span class="circle-left">
                           <span class="circle-bar"></span>
                        </span>
                        <span class="circle-right">
                           <span class="circle-bar"></span>
                        </span>
                        <div class="progress-value">85%</div>
                     </div>
                     <h4>Satisfied clients</h4>
                  </div>
                  <div class="progress-inner">
                     <div class="progress-circle" data-percentage="70">
                        <span class="circle-left">
                           <span class="circle-bar"></span>
                        </span>
                        <span class="circle-right">
                           <span class="circle-bar"></span>
                        </span>
                        <div class="progress-value">75%</div>
                     </div>
                     <h4>Reasonable price</h4>
                  </div>
                  <div class="progress-inner">
                     <div class="progress-circle" data-percentage="70">
                        <span class="circle-left">
                           <span class="circle-bar"></span>
                        </span>
                        <span class="circle-right">
                           <span class="circle-bar"></span>
                        </span>
                        <div class="progress-value">70%</div>
                     </div>
                     <h4>Best destination</h4>
                  </div>
                  <div class="progress-inner">
                     <div class="progress-circle" data-percentage="90">
                        <span class="circle-left">
                           <span class="circle-bar"></span>
                        </span>
                        <span class="circle-right">
                           <span class="circle-bar"></span>
                        </span>
                        <div class="progress-value">90%</div>
                     </div>
                     <h4>Positive reviews</h4>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- subscribe html end -->
   <!-- Home team section html start -->
   <section class="team-section">
      <div class="container">
         <div class="section-heading text-center">
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <h5>TEAM MEMBERS</h5>
                  <h2 class="headingshadow"><img src="./assets/images/owl.png" width="50px" />OUR TOUR Host<img src="./assets/images/owl.png" width="50px" /></h2>
                  <div class="title-icon-divider"><i class="fas fa-suitcase-rolling"></i></div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-3 col-sm-6">
               <div class="team-item">
                  <figure class="team-image">
                     <img src="assets/images/img38.jpg" alt="">
                  </figure>
                  <div class="team-content">
                     <div class="heading-wrap">
                        <h3>Sony Madison</h3>
                        <h5>Host</h5>
                     </div>
                     <div class="social-links">
                        <ul>
                           <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <div class="team-item">
                  <figure class="team-image">
                     <img src="assets/images/img42.jpg" alt="">
                  </figure>
                  <div class="team-content">
                     <div class="heading-wrap">
                        <h3>Alison White</h3>
                        <h5>Travel Guide</h5>
                     </div>
                     <div class="social-links">
                        <ul>
                           <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <div class="team-item">
                  <figure class="team-image">
                     <img src="assets/images/img43.jpg" alt="">
                  </figure>
                  <div class="team-content">
                     <div class="heading-wrap">
                        <h3>William Hobb</h3>
                        <h5>Travel Guide</h5>
                     </div>
                     <div class="social-links">
                        <ul>
                           <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <div class="team-item">
                  <figure class="team-image">
                     <img src="assets/images/img39.jpg" alt="">
                  </figure>
                  <div class="team-content">
                     <div class="heading-wrap">
                        <h3>Jennie Bennett</h3>
                        <h5>Travel Guide</h5>
                     </div>
                     <div class="social-links">
                        <ul>
                           <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Home blog section html start -->
   <section class="blog-section">
      <div class="container">
         <div class="section-heading text-center">
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <h5>FROM OUR BLOG</h5>
                  <h2>OUR RECENT POSTS</h2>
                  <div class="title-icon-divider"><i class="fas fa-suitcase-rolling"></i></div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6 col-lg-4">
               <article class="post">
                  <figure class="feature-image">
                     <a href="#">
                        <img src="assets/images/img17.jpg" alt="">
                     </a>
                  </figure>
                  <div class="entry-content">
                     <h3>
                        <a href="#">Life is a beautiful journey not a destination</a>
                     </h3>
                     <div class="entry-meta">
                        <span class="byline">
                           <a href="#">Demoteam</a>
                        </span>
                        <span class="posted-on">
                           <a href="#">August 17, 2025</a>
                        </span>
                        <span class="comments-link">
                           <a href="#">No Comments</a>
                        </span>
                     </div>
                  </div>
               </article>
            </div>
            <div class="col-md-6 col-lg-4">
               <article class="post">
                  <figure class="feature-image">
                     <a href="#">
                        <img src="assets/images/img18.jpg" alt="">
                     </a>
                  </figure>
                  <div class="entry-content">
                     <h3>
                        <a href="#">Take only memories, leave only footprints</a>
                     </h3>
                     <div class="entry-meta">
                        <span class="byline">
                           <a href="#">Demoteam</a>
                        </span>
                        <span class="posted-on">
                           <a href="#">August 17, 2025</a>
                        </span>
                        <span class="comments-link">
                           <a href="#">No Comments</a>
                        </span>
                     </div>
                  </div>
               </article>
            </div>
            <div class="col-md-6 col-lg-4">
               <article class="post">
                  <figure class="feature-image">
                     <a href="#">
                        <img src="assets/images/img19.jpg" alt="">
                     </a>
                  </figure>
                  <div class="entry-content">
                     <h3>
                        <a href="#">Journeys are best measured in new friends</a>
                     </h3>
                     <div class="entry-meta">
                        <span class="byline">
                           <a href="#">Demoteam</a>
                        </span>
                        <span class="posted-on">
                           <a href="#">August 17, 2025 </a>
                        </span>
                        <span class="comments-link">
                           <a href="#">No Comments</a>
                        </span>
                     </div>
                  </div>
               </article>
            </div>
         </div>
      </div>
   </section>
   <!-- blog html end -->
   <!-- Home callback section html start -->
   <section class="bg-img-callback" style="background-image: url(assets/images/img26.jpg);">
      <div class="container">
         <div class="row align-items-center justify-content-between">
            <div class="col-lg-9 col-md-8">
               <div class="callback-content">
                  <h2>JOIN US FOR MORE UPDATE !!</h2>
                  <p>Be the first to know about our latest travel deals, exclusive holiday packages, and exciting destination guides. Subscribe now and start your journey with insider tips, inspiration, and special offers straight to your inbox.</p>
               </div>
            </div>
            <div class="col-lg-3 col-md-4">
               <div class="button-wrap">
                  <a href="#" class="button-primary">LEARN MORE</a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- callback html end -->
</main>
<?php include("./footer.php") ?>