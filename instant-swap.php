<?php  include '_header.php'; ?>

<section id="blog-post" class="blog-post">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sub-title text-center">
                    <h2>Swap for SMS</h2>
                    <p>Is quickly and without restrictions</p>
                    <p>All operations are automatic</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card swap-transaction-card">
                    <div class="card-header">
                        <h5 class="card-title center-text">Swap</h5>
                    </div>
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="from-label">You Send</label>
                                <select class="form-control card-form-control swapper-1" onchange="swapper()">
                                    <option value="busd">BUSD</option>
                                    <option value="sms">SMS</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="from-label">Volume</label>
                                <input type="text" name="" class="form-control card-form-control send-volume" placeholder="10000.20309488592">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="from-label">You Receive</label>
                                <input type="text" name="" class="form-control card-form-control swapper-2" value="SMS" disabled>
                            </div>
                            <div class="form-group">
                                <label class="from-label">Volume</label>
                                <input type="text" name="" class="form-control card-form-control receive-volume" placeholder="76923.20309488592">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="from-label">To Address</label>
                                <input type="text" name="" class="form-control card-form-control" >
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <a role="button" class="btn btn-default sm-button smt-cs-popup" data-animate="fadeInUp" data-delay="0.4s">Swap
                            <img class="blue-btn-img" src="images/icons/button-icon.png" alt="">
                        </a>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title center-text">Swap History</h5>
                    </div>
                    <div class="card-body">
                        <div class="card swap-history-card">
                            <div class="row swap-coin">
                                <div class="col-md-2">
                                    <img src="<?= BASEURL ?>/images/busd.png" width="100%">
                                </div>
                                <div class="col-md-10">
                                    BUSD
                                </div>
                            </div>

                            <div class="row swap-figures">
                                <div class="col-md-2">
                                    <img src="https://dirham.app/img/refresh-cw.27fed424.svg">
                                </div>
                                <div class="col-md-10">
                                    <h5>BUSD 0.13</h5>
                                    <h5 class="muted">SMS 1.00</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="sub-title text-center">
                    <h2>Important! It is an automatic Swap without OneDriven</h2>
                    <p>All operations are automatic</p>
                    <p>This service is available only to Social Media customers</p>
                    <a href="<?=  BASEURL ?>" class="btn btn-default sm-button" data-animate="fadeInUp" data-delay="0.4s" style="width: 200px; margin-top: 20px;">Back
                            <img class="blue-btn-img" src="images/icons/button-icon.png" alt="">
                        </a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function swapper() {
        send = $('.swapper-1').val();
        receive = $('.swapper-2').val();
        if(send == 'busd'){
            $('.swapper-2').val('SMS');
            $('.send-volume').attr('placeholder','10000.20309488592');
            $('.receive-volume').attr('placeholder','76923.20309488592');
        }
        else {
            $('.swapper-2').val('BUSD');
            $('.send-volume').attr('placeholder','76923.20309488592');
            $('.receive-volume').attr('placeholder','10000.20309488592');
        }
    }
</script>

<?php  include '_footer.php'; ?>