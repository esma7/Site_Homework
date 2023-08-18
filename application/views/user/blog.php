<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/header'); ?>


<!-- Header Start -->
<div class="container-fluid page-header" style="margin-bottom: 90px;">
    <div class="container">
        <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
            <h3 class="display-4 text-white text-uppercase">ALL list</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">List</p>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- Blog Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="row pb-3">
                    <?php foreach ($slider_left_side as $left_slide) { ?>
                        <div class="col-lg-6 mb-4">
                            <div class="blog-item position-relative overflow-hidden rounded mb-2">
                                <img style="height:200px !important;" class="img-fluid" src="<?php echo base_url('uploads/news/'. $left_slide['n_file']); ?>" alt="">
                                <a class="blog-overlay text-decoration-none" href="">
                                    <h5 class="text-white mb-3"><?php echo $left_slide['n_title']; ?></h5>


                                    <p class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href=""><?php echo $left_slide['c_name']; ?></p>
                                    <p class="text-primary m-0"><?php echo  date("d-m-Y", strtotime($left_slide['n_date'])); ?></p>
                                </a>
                            </div>
                        </div>
                    <?php } ?>



                                           
                        <div class="col-12">
                            <nav aria-label="Page navigation">
                                <ul class="pagination pagination-lg justify-content-center mb-0">
                                  <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                      <span aria-hidden="true">&laquo;</span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                  </li>
                                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                      <span aria-hidden="true">&raquo;</span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </li>
                                </ul>
                              </nav>
                        </div>
                </div>
            </div>

            <div class="col-lg-4 mt-5 mt-lg-0">
                <!-- Author Bio -->
                <div class="d-flex flex-column text-center bg-dark rounded mb-5 py-5 px-4">
                    <img src="<?php echo base_url('public/user/'); ?>img/bpm.jpg" class="img-fluid rounded-circle mx-auto mb-3" style="width: 80px !important; height:70px !important;">
                    <h3 class="text-primary mb-3">Sema Babayeva
                        Vidadi Elizade</h3>
                    <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Tag Cloud</h3>
                    <p class="text-white m-0">5 nomreli Baki Pese Mektebinin Web Design muellimleri</p>
                </div>

                <!-- Search Form -->
                <div class="mb-5">
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Keyword">
                            <div class="input-group-append">
                                <span class="input-group-text bg-transparent text-primary"><i class="fa fa-search"></i></span>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="mb-5">
                    <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">CATEGORY</h3>
                    <div class="d-flex flex-wrap m-n1">

                        <?php foreach ($category as $item) { ?>
                            <a href="" class="btn btn-outline-primary m-1"><?php echo $item['c_name']; ?></a>
                        <?php } ?>


                    </div>
                </div>
                <!-- Category List -->
                <!-- <div class="mb-5">
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Categories</h3>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0">Web Design</a>
                                <span class="badge badge-primary badge-pill">150</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0">Help Desk</a>
                                <span class="badge badge-primary badge-pill">131</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0">Software Programming</a>
                                <span class="badge badge-primary badge-pill">78</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0">Network Administrator</a>
                                <span class="badge badge-primary badge-pill">56</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0">System Administrator</a>
                                <span class="badge badge-primary badge-pill">98</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0">Graphic design</a>
                                <span class="badge badge-primary badge-pill">98</span>
                            </li>
                        </ul>
                    </div> -->

                <!-- Recent Post -->
                <div class="mb-5">
                    <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Recent Post</h3>
                    <?php foreach($limit_5news as $item){?>
                            <a class="d-flex align-items-center text-decoration-none mb-3" href="">
                            <img style="height:100px !important; width:130px !important;" class="img-fluid rounded" src="<?php echo base_url('uploads/news/'. $item['n_file']); ?>" alt="">
                            <div class="pl-3">
                                <h6 class="m-1"><?php echo $item['n_title']; ?></h6>
                                <small><?php echo  date("d.m.Y", strtotime($item['n_date'])); ?></small>
                            </div>
                        </a>
                      <?php  } ?>
                    </a>

                   
                   </div>

                <!-- Tag Cloud -->
                
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->


<!-- Footer Start -->
<?php $this->load->view('user/includes/footer'); ?>
<!-- Footer End -->
<?php $this->load->view('user/includes/footerScript'); ?>