<?php
/*
  Template Name: Home Page
*/

//Advanced Custom fields
$qualifcations = get_field('qualifcations');
$my_story = get_field('my_story');
$craft = get_field('craft');
$weapons_of_choice = get_field('weapons_of_choice');

get_header(); ?>

<!-- HERO
     ====================================================================================== -->
     <section id="hero">
             <article>
                 <div class="container-fluid remove-all-margin-padding">

                     <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/jays-office.png" class="img-responsive" alt="picture of jay letheby"/>

                         <div class="contact-buttons text-center">
                             <ul>
                             <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                 <button type="button" class="btn btn-primary btn-lg raised"><bold><i class="fa fa-twitter"></bold></i> Twitter</button>
                                 <button type="button" class="btn btn-primary btn-lg raised"><i class="fa fa-github"></i> Github</button>
                                 <button type="button" class="btn btn-primary btn-lg raised"><i class="fa fa-linkedin"></i> Linkedin</button>
                             </ul>
                         </div><!-- contact-buttons -->

                       </div><!-- container -->
               </article>
     </section>

     <!-- JAYS INTRO SECTION
     ====================================================================================== -->
     <section id="intro">
          <article>
             <div class="container clearfix">
                 <div class="row">

                     <div class="col-sm-9 intro-text">
                         <!-- Information about Jay -->
                         <h2 class="page-header">Skills & Experience</h2>

                         <ul id="jay-description">
                             <li><strong>Qualifications: </strong><?php echo $qualifcations ?></li>
                             <li><strong>My Story: </strong><?php echo $my_story ?></li>
                             <li><strong>Craft: </strong><?php echo $craft ?></li>
                             <li><strong>Weapons of choice: </strong><?php echo $weapons_of_choice ?></li>
                         </ul>

                     </div><!-- col -->
                     <div class="col-sm-3">
                         <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/jay1.png" class="img-responsive" alt="picture of jay letheby">
                     </div><!-- col -->
                 </div><!-- row -->
             </div><!-- container -->
         </article>
     </section>


     <!-- FOLIO SECTION
     ====================================================================================== -->
     <section id="web-gallery">
         <div class="container">

             <div class="row" >

               <h2 class="page-header">My Folio</h2>

                 <div class="col-lg-12">
                     <h3 class="Responsive align-center">Responsive Webs Sites</h3>
                 </div>

                 <div class="col-lg-6 col-md-6 col-xs-6 thumb">
                     <a class="thumbnail" href="picture1.html">
                         <img class="img-responsive" src="<?php bloginfo('stylesheet_directory');?>/assets/img/k9movers.png" alt="thumbnail of k9movers website">
                     </a>
                 </div>

                 <div class="col-lg-6 col-md-6 col-xs-6 thumb">
                     <a class="thumbnail" href="picture2.html">
                         <img class="img-responsive" src="<?php bloginfo('stylesheet_directory');?>/assets/img/leesartgallery.png" alt="thumbnail of leesartgallery website">
                     </a>
                 </div>
             </div><!-- row -->

             <div class="row" id="game-gallery">

                  <div class="col-lg-12">
                     <h3 class="Responsive">Mobile Games</h3>
                 </div>

                 <div class="col-lg-12 col-md-12 col-xs-12 thumb">
                     <a class="thumbnail" href="picture3.html">
                         <img class="img-responsive" src="<?php bloginfo('stylesheet_directory');?>/assets/img/mobile_game.png" alt="thumbnail of mobile game">
                     </a>
                 </div>
             </div><!-- row -->

             <div class="row" id="mobile-gallery">

                 <div class="col-lg-12">
                     <h3 class="Responsive">Mobile Applications</h3>
                 </div>

                 <div class="col-lg-6 col-md-6 col-xs-6 thumb">
                     <a class="thumbnail" href="picture4.html">
                         <img class="img-responsive" src="<?php bloginfo('stylesheet_directory');?>/assets/img/mobile.png" alt="thumbnail of mobile application">
                     </a>
                 </div>

                 <div class="col-lg-6 col-md-6 col-xs-6 thumb">
                     <a class="thumbnail" href="picture4.html">
                         <img class="img-responsive" src="<?php bloginfo('stylesheet_directory');?>/assets/img/shoplist_1.png" alt="thumbnail of mobile application">
                     </a>
                 </div>


             </div><!-- row -->

         </div><!-- container -->
     </section>


     <!-- CONNECT SECTION
     ====================================================================================== -->
     <section id="connect">
         <article>
           <div class="container">

             <div class="row" >

                 <h2 class="page-header"></h2>

                 <div class="col-lg-6">
                     <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/old-phone_EDIT.jpg" class="img-responsive" alt="picture of old phone"/>
                 </div>

                 <div class="col-lg-6">
                     <p>Want to get in touch with Jay? Be it to request more info about what Jay can do for you, then fill out the form below and press the <strong>Send"</strong>
                         button and Jay will get back to you as soon as possible.</p>
                     <form id="contact-form" method="post" action="contact.php" role="form">

                         <div class="messages"></div>

                         <div class="controls">

                             <div class="row">
                                 <div class="col-md-6 col-lg-6">
                                     <div class="form-group">
                                         <label for="form_name">Firstname *</label>
                                         <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                         <div class="help-block with-errors"></div>
                                     </div>
                                 </div>
                                 <div class="col-md-6 col-lg-6"">
                                     <div class="form-group">
                                         <label for="form_lastname">Lastname *</label>
                                         <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                         <div class="help-block with-errors"></div>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label for="form_email">Email *</label>
                                         <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                         <div class="help-block with-errors"></div>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label for="form_phone">Phone</label>
                                         <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                                         <div class="help-block with-errors"></div>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-12">
                                     <div class="form-group">
                                         <label for="form_message">Message *</label>
                                         <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                         <div class="help-block with-errors"></div>
                                     </div>
                                 </div>
                                 <div class="col-md-12">
                                     <input type="submit" class="btn btn-success btn-send" value="Send message">
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-12">
                                     <p class="text-small"><strong>*</strong> These fields are required.</p>
                                 </div>
                             </div>
                         </div>

                     </form>
                   </div>
               </div><!-- row -->
           </div><!-- container -->
       </article>
     </section>

<?php get_footer(); ?>
