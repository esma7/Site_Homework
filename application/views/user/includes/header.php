<!-- Topbar Start -->

<style>
    .fon {
        border: 6px solid transparent;
        margin-left: 15px;
        border-color: #fff transparent transparent transparent;
    }
</style>

<div class="container-fluid d-none d-lg-block">
    <div class="row align-items-center py-4 px-xl-5">
        <div class="col-lg-3">
            <a href="<?php echo base_url('index'); ?>" class="text-decoration-none">
                <h1 class="m-0"><span class="text-primary">S</span>CHOOLSITE</h1>
            </a>
        </div>
        <div class="col-lg-3 text-right">
            <div class="d-inline-flex align-items-center">
                <i class="fa fa-2x fa-map-marker-alt text-primary mr-3"></i>
                <div class="text-left">
                    <h6 class="font-weight-semi-bold mb-1">Məkan</h6>
                    <small>Bakı şəhəri Buzovna qəsəbəsi Heydər Eyvazov küç. 28, Buzovna, Azerbaijan</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 text-right">
            <div class="d-inline-flex align-items-center">
                <i class="fa fa-2x fa-envelope text-primary mr-3"></i>
                <div class="text-left">
                    <h6 class="font-weight-semi-bold mb-1">Email</h6>
                    <small>bpm05@mail.ru</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 text-right">
            <div class="d-inline-flex align-items-center">
                <i class="fa fa-2x fa-phone text-primary mr-3"></i>
                <div class="text-left">
                    <h6 class="font-weight-semi-bold mb-1">Əlaqə</h6>
                    <small>070 975 13 15</small>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="d-flex align-items-center justify-content-between bg-secondary w-100 text-decoration-none" data-toggle="collapse" href="#navbar-vertical" style="height: 67px; padding: 0 30px;">
                <h5 class="text-primary m-0"><i class="fa fa-book-open mr-2"></i>İxtisaslar</h5>
                <i class="fa fa-angle-down text-primary"></i>
            </a>
            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 9;">
                <div class="navbar-nav w-100">
                    <div class="nav-item dropdown">

                        <?php foreach ($category as $item) { ?>
                            <a href="<?php echo base_url('course/' . $item['c_id']); ?>" class="nav-item nav-link"><?php echo $item['c_name_'. $this->session->userdata('site_lang')]; ?></a>
                        <?php } ?>


                    </div>

                    <!-- <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="" class="dropdown-item">HTML</a>
                                <a href="" class="dropdown-item">CSS</a>
                                <a href="" class="dropdown-item">jQuery</a>

                                 class="nav-link"
                                 data-toggle="dropdown"
                            </div> -->
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0"><span class="text-primary">E</span>COURSES</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav py-0">
                        <a href="<?php echo base_url('index'); ?>" class="nav-item nav-link active"> <?php echo $this->lang->line('home'); ?></a>


                        <a href="<?php echo base_url('about'); ?>" class="nav-item nav-link"><?php echo $this->lang->line('about'); ?></a>
                        <!-- <a href="<?php echo base_url('course'); ?>" class="nav-item nav-link">Courses</a> -->

                        <!-- <a href="<?php echo base_url('teacher') ?>" class="nav-item nav-link">Teachers</a> -->
                        <!-- <a href="<?php echo base_url('blog') ?>" class="nav-item nav-link">All List</a> -->
                        <!-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">All List</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="<?php echo base_url('blog'); ?>" class="dropdown-item">Blog List</a>
                                    <a href="<?php echo base_url('single'); ?>" class="dropdown-item">Blog Detail</a>
                                </div>
                            </div> -->
                        <a href="<?php echo base_url('contact'); ?>" class="nav-item nav-link">
                        <?php echo $this->lang->line('contact'); ?>
                        </a>
                    </div>
                    
                    <a class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" href="<?php echo base_url('contact'); ?>">Join</a>
                    
                    <select  class="fon" onchange="javascript:window.location.href='<?php echo base_url(); ?>LanguageSwitcher/switchLang/'+this.value;">
                        <option value="az" <?php if ($this->session->userdata('site_lang') == 'az') echo 'selected="selected"'; ?>>Az</option>
                        <option value="en" <?php if ($this->session->userdata('site_lang') == 'en') echo 'selected="selected"'; ?>>En</option>
                        <option value="ru" <?php if ($this->session->userdata('site_lang') == 'ru') echo 'selected="selected"'; ?>>Ru</option>
                    </select>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar End -->