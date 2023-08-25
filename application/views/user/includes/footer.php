<?php $category =$this->db->get('category')->result_array(); ?>


<div class="container-fluid bg-dark text-white py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
    <div class="row pt-5">
        <div class="col-lg-7 col-md-12">
            <div class="row">
                <div class="col-md-6 mb-5">
                    <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Get In Touch</h5>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>Bakı şəhəri Buzovna qəsəbəsi Heydər Eyvazov küç. 28, Buzovna, Azerbaijan</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>070 975 13 15</p>
                    <p><i class="fa fa-envelope mr-2"></i>bpm05@mail.ru</p>
                    <div class="d-flex justify-content-start mt-4">
                        <a class="btn btn-outline-light btn-square mr-2" href="https://t.me/vetedugovaz"><i class="fab fa-telegram"></i></a>
                        <a class="btn btn-outline-light btn-square mr-2" href="https://www.facebook.com/bakucultureandcrafts/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-square mr-2" href="https://www.linkedin.com/company/vetedugovaz"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-square" href="https://www.instagram.com/vetedugovaz/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <!-- <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Our Courses</h5> -->
                    <!-- <div class="d-flex flex-column justify-content-start">
                    <?php foreach($category as $item){?>
                        <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i><?php echo $item['c_name_'.$this->session->userdata('site_lang')]; ?></a>
                           <?php } ?>
                       
                    </div> -->
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-12 mb-5">



            <form action="<?php echo base_url('message'); ?>" method="post">
                <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Newsletter</h5>
                <p>Ən son yeniliklərdən xeberdar olun</p>
                <div class="w-100">
                    <div style="height:67px !important; " class="input-group">
                        <input name="email" type="text" class="form-control border-light" style="padding: 30px; border-radius:10px; float:left; " placeholder="Your Email Address" >
                        <div class="input-group-append">
                            <button type="submit" style="margin:20px 4px 0px; border-radius:10px; float:left;" class="btn btn-primary px-4 mb-5">Sign Up</button>
                        </div>
                    </div>
                </div>

                
            <?php if ($this->session->flashdata('err')) { ?>
                <div style="width:250px;" class="alert alert-danger alert-dismissible">
                   <small><?php echo $this->session->flashdata('err'); ?></small>
                    
                </div>
            <?php } ?>
            <?php if ($this->session->flashdata('ela')) { ?>
                <div style="width:250px;" class="alert alert-success alert-dismissible">
                   <small><?php echo $this->session->flashdata('ela'); ?></small>
                    
                </div>
            <?php } ?>
            </form>
           


        </div>
    </div>
</div>
<!-- <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
    <div class="row">
        <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
            <p class="m-0 text-white">&copy; <a href="#">Domain Name</a>. All Rights Reserved. Designed by <a href="https://htmlcodex.com">HTML Codex</a>
            </p>
        </div>
        <div class="col-lg-6 text-center text-md-right">
            <ul class="nav d-inline-flex">
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="#">Privacy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="#">Terms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="#">FAQs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="#">Help</a>
                </li>
            </ul>
        </div>
    </div>
</div> -->