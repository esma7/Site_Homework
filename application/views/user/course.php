<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/header'); ?>



<!-- Header Start -->
<div class="container-fluid page-header" style="margin-bottom: 90px;">
    <div class="container">
        <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
            <h3 class="display-4 text-white text-uppercase">Courses <h1 style="color:orange !important;"><?php echo $category['c_name_az']; ?></h1></h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Courses</p>
            </div>
        </div>
    </div>
</div>

<!-- Header End -->
<!-- Courses Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <!-- <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Courses</h5> -->
            <!-- <h1><?php echo $category['c_name_az']; ?></h1> -->
        </div>
        <div class="row">


            <?php foreach ($category_of as $item) { ?>
                <div class="col-lg-4 col-md-6 mb-4" style="height:400px !important;">
                    <div class="rounded overflow-hidden mb-2">
                        <?php if ( $item['n_file']) { ?>
                            <img style="height:150px; width:100%;" class="img-fluid" src="<?php echo base_url('uploads/news/' . $item['n_file']); ?>" alt="">
                             <?php } else { ?>                                                
                            <img style="height:150px; width:100%;" class="img-fluid" src="https://hivedinn.s3.amazonaws.com/upload/photos/d-avatar.jpg?cache=0" alt class="w-px-40 h-auto rounded-circle" />
                        <?php } ?>

                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>25 Students</small>
                                <small><a class="m-0"><?php echo $item['c_name_az']; ?></a></small>

                            </div>
                            <?php if (strlen($item['n_title_az']) > 30) { ?>
                                <a class="h5  mb-3 text-info text-uppercase font-weight-bold" href="<?php echo base_url('single/' . $item['n_id']); ?>"><?php echo mb_substr(($item['n_title_az']), 0, 20, 'UTF-8') . '...'; ?></a>


                            <?php } else { ?>
                                <a class="h6  mb-3 text-info text-uppercase font-weight-bold" href="<?php echo base_url('single/' . $item['n_id']); ?>"><?php echo $item['n_title_az']; ?></a>

                            <?php } ?>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <!-- <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6> -->
                                    <h6 class="m-0"><?php echo  date("d.m.Y", strtotime($item['n_date']));  ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>





        </div>
    </div>
</div>


<!-- Category Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Subjects</h5>
            <h1>Bütün qruplar</h1>
        </div>
        <div class="row">

            <?php foreach ($courses as $item) { ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="<?php echo base_url('uploads/news/'); ?>abstract.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="<?php echo base_url('course/'. $item['c_id']); ?>">
                            <h4 style="color:orange !important;" class="text-white font-weight-medium"><?php echo $item['c_name_az']; ?></h4>
                            <span>1 qrup</span>
                        </a>
                    </div>
                </div>
            <?php } ?>
          


        </div>
    </div>
</div>
<!-- Category Start -->


<!-- Courses End -->

<!-- Footer Start -->
<?php $this->load->view('user/includes/footer'); ?>
<!-- Footer End -->
<?php $this->load->view('user/includes/footerScript'); ?>