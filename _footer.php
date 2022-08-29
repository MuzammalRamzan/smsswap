<footer id="footer-06" class="footer">
    <div class="container">
        <div class="row footer-btm-wrapper">
            <div class="col-md-12 col-lg-12">
                <div class="footer_items">
                    <div class="footer-single-col footer_single_list_1">
                        <h3 class="subtitle_1">&nbsp;<img src="images/bounce/Blue-logo.png" alt=""></h3>
                        <ul class="social-links list-unstyled ml-auto">
                            <li class="nav-item"><a href="https://t.me/sms_finance" target="_blank"><i class="fab fa-telegram"></i></a></li>
                            <li class="nav-item"><a href="https://t.me/smswap_finance" target="_blank"><i class="fab fa-telegram"></i></a></li>
                            <li class="nav-item"><a href="https://link.medium.com/aRPYP1hmahb" target="_blank"><i class="fab fa-medium"></i></a></li>
                            <li class="nav-item"><a href="https://www.reddit.com/u/Smswap_finance?utm_medium=android_app&utm_source=share" target="_blank"><i class="fab fa-reddit"></i></a></li>
                            <li class="nav-item"><a href="https://youtube.com/channel/UCC4AkOnfCn2VJDbh9cEkM1g" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            <li class="nav-item"><a href="https://www.facebook.com/Smswapfinance/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="nav-item"><a href="https://twitter.com/smswap_finance?s=09" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>

                    <div class="footer-single-col footer_single_list_2">
                        <h3 class="subtitle_1">Company</h3> 
                        <ul class="list-unstyled">
                            <li><a href="<?= BASEURL ?>">Home</a></li>
                            <li><a href="<?= BASEURL ?>about-us.php">About Us</a></li>
                        </ul>
                    </div>

                    <div class="footer-single-col footer_single_list_3">
                        <h3 class="subtitle_1">Information</h3>
                        <ul class="list-unstyled">
                            <li><a href="<?= BASEURL ?>privacy-policy.php">Privacy Policy</a></li>
                            <li><a href="<?= BASEURL ?>risk-disclosure.php">Risk Disclosure</a></li>
                            <li><a href="<?= BASEURL ?>legal-disclaimer.php">Legal Disclaimer</a></li>
                            <li><a role="button" class="smt-cs-popup">Live Chat</a></li>
                        </ul>
                    </div>

                    <div class="footer-single-col footer_single_list_4">
                        <h3 class="subtitle_1">Product</h3>
                        <ul class="list-unstyled">
                            <li><a href="<?= BASEURL ?>faq.php">Faq</a></li>
                            <li><a href="<?= BASEURL ?>terms-of-services.php">Terms of Service & Conditions</a></li>
                        </ul>
                    </div>
                </div>                  
            </div>
        </div>       
    </div>  
    <div class="copyright">
        <p> Copyright &copy; <?= date('Y') ?> - <span>Social Media Token</span></p>            
    </div>   
    <span class="shape1 header-shape"><img src="images/shape/home_6/footer_shape_1.png" alt=""></span>
    <span class="shape2 header-shape"><img src="images/shape/home_6/footer_shape_2.png" alt=""></span>
    <span class="shape3 header-shape"><img src="images/shape/home_6/footer_shape_3.png" alt=""></span>           
</footer><!-- ./ End Footer Area-->
   
<div id="smtPopUp" class="modal" data-easein="swoopIn"  tabindex="-1" role="dialog" aria-labelledby="costumModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title">
                    Coming Soon
                </h4>
            </div>
            <div class="modal-body text-center">
                <p >
                    Our team is working really hard on some features for you. We'll launch them soon.
                </p>
                <p >Stay Connected!</p>
                <button class="btn sm-button" data-dismiss="modal" aria-hidden="true" style="margin-right: 0;">
                    OK
                </button>
            </div>
        </div>
    </div>
</div>

    <!-- JavaScript Files -->
    
    <script src="js/assets/popper.min.js"></script>
    <script src="js/assets/bootstrap.min.js"></script>
    <script src="js/assets/owl.carousel.min.js"></script>    
    <script src="js/assets/jquery.sticky.js"></script>
    <script src="js/assets/isotope.pkgd.min.js"></script>
    <script src="js/assets/jquery.magnific-popup.min.js"></script>
    <script src="js/assets/jquery.downCount2.js"></script>
    <script src="js/assets/jquery.countdown.js"></script>
    <script src="js/assets/particles.js"></script>
    <script src="js/assets/app.js"></script>      
    <script src="js/assets/smooth-scroll.js"></script> 
    <script src="js/assets/wow.min.js"></script>              
    <script src="js/custom.js"></script>  

    <?php if(PAGE == 'buy') { ?>

        <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/ethereum/web3.js/dist/web3.min.js"></script>
        <script src="js/smt-script.js"></script> 

    <?php } ?> 

    
</body>
<script>
    $(document).on('click','.smt-cs-popup',function(){
        $('#smtPopUp').modal('show');
    });

    $(function () {
        // $(document).on('keydown','.number',function (event) {
        //     if(event.which == 8 || event.which == 0 || event.which == 110 || (event.which > 104 && event.which < 196)){
        //         return true;
        //     }
        //     if(event.which < 46 || event.which > 59) {
        //         alert('false 1'+ event.which);
        //         return false;
        //         //event.preventDefault();
        //     } // prevent if not number/dot

        //     if(event.which == 46 && $(this).val().indexOf('.') != -1) {
        //         return false;
        //         //event.preventDefault();
        //     } // prevent if already dot

        // });
    });
</script>

</html>