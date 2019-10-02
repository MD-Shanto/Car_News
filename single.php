<?php get_header() ?>
<!--Main Slider-->
<section id="home-slider-v1" class="slider-v1">
    <div class="main-slider-v1 owl-item">
        <div class="item" style="background-image:url(images/resource/home-slide-1.jpg);">
            <div class="overlay"></div>
            <div class="slide-description">
                <div class="animate-item">
                    <h2>Welcome to Our Car Care House!!!</h2>
                </div>
                <div class="animate-item">
                    <h3>Top One Car Care in your city with very good quality Engr.</h3>
                </div>
                <div class="animate-item">
                    <a class="btn-1 btn btn-primary" href="#">Contact</a>
                    <a class="btn-2 btn btn-primary" href="#">Appoinment</a>
                </div>
            </div>
        </div>
        <div class="item" style="background-image:url(images/resource/home-slide-2.jpg);">
            <div class="overlay"></div>
            <div class="slide-description">
                <div class="animate-item">
                    <h2>Welcome to Our Car Care House!!!</h2>
                </div>
                <div class="animate-item">
                    <h3>Top One Car Care in your city with very good quality Engr.</h3>
                </div>
                <div class="animate-item">
                    <a class="btn-1 btn btn-primary" href="#">Contact</a>
                    <a class="btn-2 btn btn-primary" href="#">Appoinment</a>
                </div>
            </div>
        </div>
        <div class="item" style="background-image:url(images/resource/home-slide-3.jpg);">
            <div class="overlay"></div>
            <div class="slide-description">
                <div class="animate-item">
                    <h2>Welcome to Our Car Care House!!!</h2>
                </div>
                <div class="animate-item">
                    <h3>Top One Car Care in your city with very good quality Engr.</h3>
                </div>
                <div class="animate-item">
                    <a class="btn-1 btn btn-primary" href="#">Contact</a>
                    <a class="btn-2 btn btn-primary" href="#">Appoinment</a>
                </div>
            </div>
        </div>
        <div class="item" style="background-image:url(images/resource/home-slide-4.jpg);">
            <div class="overlay"></div>
            <div class="slide-description">
                <div class="animate-item">
                    <h2>Welcome to Our Car Care House!!!</h2>
                </div>
                <div class="animate-item">
                    <h3>Top One Car Care in your city with very good quality Engr.</h3>
                </div>
                <div class="animate-item">
                    <a class="btn-1 btn btn-primary" href="#">Contact</a>
                    <a class="btn-2 btn btn-primary" href="#">Appoinment</a>
                </div>
            </div>
        </div>
        <div class="item" style="background-image:url(images/resource/home-slide-5.jpg);">
            <div class="overlay"></div>
            <div class="slide-description">
                <div class="animate-item">
                    <h2>Welcome to Our Car Care House!!!</h2>
                </div>
                <div class="animate-item">
                    <h3>Top One Car Care in your city with very good quality Engr.</h3>
                </div>
                <div class="animate-item">
                    <a class="btn-1 btn btn-primary" href="#">Contact</a>
                    <a class="btn-2 btn btn-primary" href="#">Appoinment</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Slider End -->

<!-- News / Blog section  
    ============================================= -->
<div id="news-area" class="section-gray news-section-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ftl">
                <div class="single-page-details">
                    <h2><?php the_title() ?></h2>
                    <p> <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('feature_image_one', array('class' => 'post-thumb')); ?>
                        <?php endif ?></p>
                    <p><?php the_excerpt() ?></p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="comment-area">
                            <h2 class="page-header">Comments</h2>
                            <div class="comment-list">
                            <?php get_template_part('sidebar') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php get_template_part('sidebar') ?>
        </div>
    </div>
</div>
<!-- /news table  -->
<div id="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <h1 class="subs-title">Subscribe to news letter :</h1>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="subcrb-form">
                <form class="subscription registerForm">
                    <div class="input-group">
                        <input type="email" name="formInput[email]" value="" class="form-control" placeholder="Your Email:" required="" title="valid email is required" id="emaill">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="submit" value="submit" id="submit-btn"><i class="fa fa-paper-plane-o"></i></button>
                        </span>
                    </div>
                    <input type="hidden" name="action" value="submitform">
                </form>
            </div>
        </div>
    </div>
</div>
<!--=== Right Fixed Appiontment Form ===-->
<div id="appiontment-now-box">
    <p class="toggle">APPOINTMENT</p>
    <div class="appiontment-now ">
        <div class="appiontment-form">
            <p>Instant online Appiontment</p>
            <form name="contact_us_popup" method="post" action="contact.php">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" placeholder="Enter Name" class="form-control required name" name="name" aria-required="true" id="name1" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="email" placeholder="Email" class="form-control required email" name="email" aria-required="true" id="email" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input name="form_appontment_date" class="form-control required date-picker" type="text" placeholder="Date" aria-required="true" id="datepicker1" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" placeholder="Phone" class="form-control" name="phone" id="phone" required>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="text" placeholder="Vehicle Registration Num* " class="form-control required" name="subject" id="reg1" required>
                        </div>
                    </div>

                </div>
                <div class="form-group">
                    <textarea placeholder="Message" rows="7" class="form-control required" name="message" required></textarea>
                </div>
                <div class="form-group tac">
                    <button class="btn btn-primary transition3s" type="submit">APPOINTMENT Now</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--===/ Right Fixed Appiontment Form ===-->
<?php get_footer() ?>