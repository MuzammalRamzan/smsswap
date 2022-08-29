<?php  include '_header.php'; ?>

<section id="blog-post" class="blog-post">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sub-title text-center">
                    <h2>Join Waitlist</h2>
                    <p>By continuing, you agree to our <a href="<?= BASEURL ?>privacy-policy.php" target="_blank">Privacy Policy</a>.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="card buy-card">
                    <div class="card-body">
                        <div class="tab-content">
                          <div id="login" class="tab-pane active">
                            <form action="#">
                            	<img src="<?= BASEURL ?>images/google_signin.png" width="100%" class="smt-cs-popup">

                            	<p class="text-center mt-50">OR</p>
                                <div class="form-group">
                                    <label class="from-label">Email</label>
                                    <input type="text" name="" class="form-control card-form-control" placeholder="Enter your email">
                                </div>

                                <div class="form-group text-center">
                                    <button type="button"class="btn btn-default sm-button smt-cs-popup" data-animate="fadeInUp" data-delay="0.4s">Continue
                                        <img class="blue-btn-img" src="images/icons/button-icon.png" alt="">
                                    </button>
                                </div>

                                <div class="text-center">
                                    <span>Already have an account?</span>
                                    <a href="<?= BASEURL ?>login.php">Sign in instead</a>
                                </div>
                            </form>
                            
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php  include '_footer.php'; ?>