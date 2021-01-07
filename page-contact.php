<?php
/*
Template Name: Contact Us
*/
 get_header(); 
?>

 <!-- =========================
        Contact Map SECTION
========================= -->
<section class="contact_map sec_padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heading">
          <h2><?php _e('contact us','softcar'); ?></h2>
        </div><!--/.heading -->
        <div id="map"></div><!--/#map -->
      </div><!--/.col-md-12 -->
    </div><!--/.row -->
  </div><!--/.container -->
</section><!--/.contact_map -->
<!-- =========================
    Contact Form SECTION
========================= -->
<section class="contact_form sec_padding">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-3">
        <div class="contact_single">
          <h3>contact us</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. logorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
        </div><!--/.contact_single -->

        <div class="contact_single">
          <h3>softcar wash</h3>
          <ul>
            <li>64 Sticky Bakky, Headlandpark</li>
            <li>Telephone: +123456789</li>
            <li>E-mail: soft@soft-theme.com</li>
          </ul>
        </div><!--/.contact_single -->
      </div><!--/.col-md-3 -->
      <div class="col-md-7 col-sm-7 col-md-offset-1 col-sm-offset-1">
        <div class="contact_form_header">
          <h3>contact form</h3>
        </div><!--/.contact_form_header -->
        <div class="contact-form">
          <div class="row">
            <div class="col-md-12 col-sm-12 contact_form_group">
                <label>your name</label>
                <input type="text" name="name" class="form-control" placeholder="" required="" />
              </div>
              <div class="col-md-12 col-sm-12 contact_form_group">
                <label>your email</label>
                <input type="email" name="email" class="form-control" placeholder="" required="" />
              </div>
              <div class="col-md-12 col-sm-12 contact_form_group">
                <label>your telephone</label>
                <input type="text" name="telephone" class="form-control" placeholder="" required="" />
              </div>
              <div class="col-md-12 col-sm-12 contact_form_group">
                <label>your message</label>
                <textarea name="message" class="form-control message_box" placeholder=""></textarea>
              </div>
              <div class="col-md-12 col-sm-12 contact_form_group">
                <button type="submit">submit</button>
              </div>
          </div><!--/.row -->
        </div><!--/.contact-form -->
      </div><!--/.ol-md-7 -->
    </div><!--/.row -->
  </div><!--/.container -->
</section><!--/.contact_form -->

<?php get_footer(); 