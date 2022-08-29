<?php  include '_header.php'; ?>

<section id="blog-post" class="blog-post">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sub-title text-center">
                    <h2>Login to Join SMS</h2>
                    <p>Trade Bitcoin and Ethereum futures with zero fees powered by the SMS token.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card buy-card">
                    <div class="card-header">
                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#login" >Login</a></li>
                          <li><a data-toggle="tab" href="#register" >Sign Up</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                          <div id="login" class="tab-pane active">
                            <form action="#">
                                <div class="form-group">
                                    <label class="from-label">Email</label>
                                    <input type="text" name="" class="form-control card-form-control" placeholder="Enter your email">
                                </div>

                                <div class="form-group">
                                    <label class="from-label">Password</label>
                                    <input type="password" name="" class="form-control card-form-control" placeholder="Valid Password">
                                </div>

                                <div class="form-group text-center">
                                    <button type="button"class="btn btn-default  sm-button" data-animate="fadeInUp" data-delay="0.4s">Login
                                        <img class="blue-btn-img" src="images/icons/button-icon.png" alt="">
                                    </button>
                                </div>

                                <div class="text-center">
                                    <a href="#">Forget Password?</a>
                                </div>
                            </form>
                            
                          </div>
                          <div id="register" class="tab-pane ">
                           <form action="#">
                                <div class="form-group">
                                    <label class="from-label">Username</label>
                                    <input type="text" name="" class="form-control card-form-control" placeholder="johnlee">
                                </div>

                                <div class="form-group">
                                    <label class="from-label">Email</label>
                                    <input type="text" name="" class="form-control card-form-control" placeholder="test@company.com">
                                </div>

                                <div class="form-group">
                                    <label class="from-label">Password</label>
                                    <input type="password" name="" class="form-control card-form-control" placeholder="*******">
                                </div>

                                <div class="form-group">
                                    <label class="from-label">Referral ID</label>
                                    <input type="password" name="" class="form-control card-form-control" placeholder="">
                                </div>

                                <div class="form-group text-center">
                                    <button type="button"class="btn btn-default  sm-button" data-animate="fadeInUp" data-delay="0.4s">Sign Up
                                        <img class="blue-btn-img" src="images/icons/button-icon.png" alt="">
                                    </button>
                                </div>

                                <div class="text-center">
                                    <span>Already have an account?</span>
                                    <a href="#">Sign in instead</a>
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

<script>
    $(document).on('click','.nav-tabs>li',function() {
        $('.nav-tabs>li').removeClass('active');
        $(this).addClass('active');
        $(this).closest('a').click();
    });
</script>
<?php  include '_footer.php'; ?>