<!doctype html>
<html class="no-js" lang="zxx">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Outstock</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        
		<!-- CSS here -->
        <link rel="stylesheet" href="assets/css/preloader.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/metisMenu.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
        <link rel="stylesheet" href="assets/css/fontAwesome5Pro.css">
        <link rel="stylesheet" href="assets/css/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/default.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        

       

        <!-- prealoder area start -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                <div class="object" id="first_object"></div>
                <div class="object" id="second_object"></div>
                <div class="object" id="third_object"></div>
                </div>
            </div>      
        </div>
        <!-- prealoder area end -->

        <!-- header area start -->
        <?php include('header.php') ?>
        <!-- header area end -->

        <!-- scroll up area start -->
        <div class="scroll-up" id="scroll" style="display: none;">
            <a href="javascript:void(0);"><i class="fas fa-level-up-alt"></i></a>
        </div>
        <!-- scroll up area end -->

        <!-- search area start -->
        <section class="header__search white-bg transition-3">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="header__search-inner text-center">
                            <form action="#">
                                <div class="header__search-btn">
                                    <a href="javascript:void(0);" class="header__search-btn-close"><i class="fal fa-times"></i></a>
                                </div>
                                <div class="header__search-header">
                                    <h3>Search</h3>
                                </div>
                                <div class="header__search-categories">
                                    <ul class="search-category">
                                        <li><a href="shop.html">All Categories</a></li>
                                        <li><a href="shop.html">Accessories</a></li>
                                        <li><a href="shop.html">Chair</a></li>
                                        <li><a href="shop.html">Tablet</a></li>
                                        <li><a href="shop.html">Men</a></li>
                                        <li><a href="shop.html">Women</a></li>
                                        
                                    </ul>
                                </div>
                                <div class="header__search-input p-relative">
                                    <input type="text" placeholder="Search for products... ">
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </div>
                            </form>
                
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="body-overlay transition-3"></div>
        <!-- search area end -->

        <!-- extra info area start -->
        <?php include('mobilemenu.php') ?>
        <div class="body-overlay transition-3"></div>
        <!-- extra info area end -->

    <main>
        
        
         <!-- profile area start -->
         <section class="profile__area pt-50 pb-50 grey-bg">
            <div class="container">
               <div class="profile__basic-inner pb-20 bg-white">
                  <div class="row align-items-center">
                     <div class="col-xxl-6 col-md-6">
                        <div class="profile__basic d-md-flex align-items-center">
                           <div class="profile__basic-thumb mr-30">
                              <img src="assets/img/testimonial/person-1.jpg" alt="">
                           </div>
                           <div class="profile__basic-content">
                              <h3 class="profile__basic-title">
                               <span>Harish Chander</span>
                              </h3>
                              <p><a href="my-course.html">Frontend Developer</a></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-6 col-md-6">
                        <div class="profile__basic-cart d-flex align-items-center justify-content-md-end">
                           <div class="cart-info mr-10">
                              <a href="cart.php">View cart</a>
                           </div>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- profile area end -->

         <!-- profile menu area start -->
         <section class="profile__menu pb-70 grey-bg">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-4 col-md-4">
                     <div class="profile__menu-left bg-white mb-50">
                        <h3 class="profile__menu-title"><i class="fa fa-list-alt"></i> Your Menu</h3>
                        <div class="profile__menu-tab">
                           <div class="nav nav-tabs flex-column justify-content-start text-start" id="nav-tab" role="tablist">
                              <button class="nav-link active" id="nav-account-tab" data-toggle="tab" data-target="#nav-account" type="button" role="tab" aria-controls="nav-account" aria-selected="true"> <i class="fa fa-user"></i> My Account</button>
                              <button class="nav-link" id="nav-order-tab" data-toggle="tab" data-target="#nav-order" type="button" role="tab" aria-controls="nav-order" aria-selected="false"><i class="fa fa-file"></i>Orders</button>
                              <button class="nav-link" id="nav-password-tab" data-toggle="tab" data-target="#nav-password" type="button" role="tab" aria-controls="nav-password" aria-selected="false"><i class="fa fa-lock"></i>Change Password</button>
                              <button class="nav-link"><i class="fa fa-sign-out"></i> Logout</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-8 col-md-8">
                     <div class="profile__menu-right">
                        <div class="tab-content" id="nav-tabContent">
                           <div class="tab-pane fade show active" id="nav-account" role="tabpanel" aria-labelledby="nav-account-tab">
                              <div class="profile__info">
                                 <div class="profile__info-top d-flex justify-content-between align-items-center">
                                    <h3 class="profile__info-title">Profile Information</h3>
                                    <button class="profile__info-btn" type="button" data-toggle="modal" data-target="#profile_edit_modal"><i class="fa-regular fa-pen-to-square"></i> Edit Profile</button>
                                 </div>

                                 <div class="profile__info-wrapper white-bg">
                                    <div class="profile__info-item">
                                       <p>Name</p>
                                       <h4>Harish Chander</h4>
                                    </div>
                                    <div class="profile__info-item">
                                       <p>Email</p>
                                       <h4><a href="mailt:outstock@hotmail.com" class="__cf_email__" data-cfemail="94fdfaf2fbd4f1f0e1fff1e6baf7fbf9"><span class="__cf_email__" data-cfemail="9bf4eeefe8eff4f8f0dbf3f4eff6faf2f7b5f8f4f6">[ARYAAYAAN9@GMAIL.COM]</span></a></h4>
                                    </div>
                                    <div class="profile__info-item">
                                       <p>Phone</p>
                                       <h4>9599346298</h4>
                                    </div>
                                    <div class="profile__info-item">
                                       <p>Address</p>
                                       <h4>FlAT NO 3A, POCKET-B , KONDLI GHAROLI , MAYUR VIHAR PHASE 3 , DELHI-96</h4>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="nav-order" role="tabpanel" aria-labelledby="nav-order-tab">
                              <div class="order__info">
                                 <div class="order__info-top d-flex justify-content-between align-items-center">
                                    <h3 class="order__info-title">My Orders</h3>
                                    <button type="button" class="order__info-btn"><i class="fa-regular fa-trash-can"></i> Clear</button>
                                 </div>

                                 <div class="order__list white-bg table-responsive">
                                    <table class="table">
                                       <thead>
                                         <tr>
                                           <th scope="col">Order ID</th>
                                           <th scope="col">Name</th>
                                           <th scope="col">Price</th>
                                           <th scope="col">Details</th>
                                         </tr>
                                       </thead>
                                       <tbody>
                                         <tr>
                                           <td class="order__id">#3520</td>
                                           <td><a href="product-details.html" class="order__title">University seminar series global.</a></td>
                                           <td>$144.00</td>
                                           <td><a href="product-details.html" class="order__view-btn">View</a></td>
                                         </tr>
                                         <tr>
                                           <td class="order__id">#2441</td>
                                           <td><a href="product-details.html" class="order__title">Web coding and apache basics</a></td>
                                           <td>$59.54</td>
                                           <td><a href="product-details.html" class="order__view-btn">View</a></td>
                                         </tr>
                                         <tr>
                                           <td class="order__id">#2357</td>
                                           <td><a href="product-details.html" class="order__title">Economics historical development</a></td>
                                           <td>$89.90</td>
                                           <td><a href="product-details.html" class="order__view-btn">View</a></td>
                                         </tr>
                                       </tbody>
                                     </table>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="nav-password" role="tabpanel" aria-labelledby="nav-password-tab">
                              <div class="password__change">
                                 <div class="password__change-top">
                                    <h3 class="password__change-title">Change Password</h3>
                                 </div>
                                 <div class="password__form white-bg">
                                    <form action="#">
                                       <div class="password__input">
                                          <p>Old Password</p>
                                          <input type="password" placeholder="Enter Old Password">
                                       </div>
                                       <div class="password__input">
                                          <p>New Password</p>
                                          <input type="password" placeholder="Enter New Password">
                                       </div>
                                       <div class="password__input">
                                          <p>Confirm Password</p>
                                          <input type="password" placeholder="Confirm Password">
                                       </div>
                                       <div class="password__input">
                                          <button type="submit" class="os-btn os-btn-black">Update password</button>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                         </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- profile menu area end -->

         <div class="profile__edit-modal">
            <!-- Modal -->
            <div class="modal fade" id="profile_edit_modal" tabindex="-1" aria-labelledby="profile_edit_modal" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                     <div class="profile__edit-wrapper">
                        <div class="profile__edit-close">
                           <button type="button" class="profile__edit-close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
                        </div>
                        <form action="#">
                           <div class="profile__edit-input">
                              <p>Name</p>
                              <input type="text" placeholder="Your Name">
                           </div>
                           <div class="profile__edit-input">
                              <p>Email</p>
                              <input type="text" placeholder="Your Email">
                           </div>
                           <div class="profile__edit-input">
                              <p>Phone</p>
                              <input type="text" placeholder="Your Phone">
                           </div>
                           <div class="profile__edit-input">
                              <p>Address</p>
                              <input type="text" placeholder="Your Address">
                           </div>
                           <div class="profile__edit-input">
                              <button type="submit" class="os-btn os-btn-black w-100">Update</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
    </main>

        <!-- footer area start -->
        <?php include('footer.php') ?>
        <!-- footer area end -->

		<!-- JS here -->
        <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="assets/js/vendor/waypoints.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/jquery.fancybox.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery-ui-slider-range.js"></script>
        <script src="assets/js/ajax-form.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from wphix.com/template/outstock-prv/outstock/account.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Jul 2024 09:51:48 GMT -->
</html>