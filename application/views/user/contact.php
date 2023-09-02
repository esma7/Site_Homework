<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/header'); ?>



<!-- Header Start -->
<div class="container-fluid page-header" style="margin-bottom: 90px;">
    <div class="container">
        <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
            <h3 class="display-4 text-white text-uppercase">Əlaqə</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Əlaqə</p>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Əlaqə</h5>
            <h1>Contact For Any Query</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-form bg-secondary rounded p-5">
                    <div id="success"></div>
                    <form action="<?php echo base_url('contact_message') ?>" method="post">
                        <div class="control-group">
                            <input name="ad" type="text" class="form-control border-0 p-4" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your message" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input name="mail" type="email" class="form-control border-0 p-4" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your message" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input name="movzu" type="text" class="form-control border-0 p-4" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter your message" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea name="mesaj" class="form-control border-0 py-3 px-4" rows="5" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>
                        </div>

                        <br>
                      
                        <?php if ($this->session->flashdata('err')) { ?>
                <div style="text-align:center;" class="alert alert-danger alert-dismissible">
                   <p><?php echo $this->session->flashdata('err'); ?></p>
                    
                </div>
            <?php } ?>
            <?php if ($this->session->flashdata('super')) { ?>
                <div style="text-align:center;" class="alert alert-success alert-dismissible">
                   <p><?php echo $this->session->flashdata('super'); ?></p>
                    
                </div>
            <?php } ?>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


<!-- Footer Start -->
<?php $this->load->view('user/includes/footer'); ?>
<!-- Footer End -->
<?php $this->load->view('user/includes/footerScript'); ?>