<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/header'); ?>





<!-- Carousel Start -->

<style type="text/css">
    .fon {
        margin: 8px;
    }

    .iconcolor {
        color: orange;
    }

    .sekil {
        width: 25px;
        height: 25px;
        background: transparent;
        border-radius: 50%;
        margin-right: 5px;
    }

    .xbrsekil {
        width: 100%;
        height: 200px;
    }
</style>



<!-- Carousel Start -->
<div class="container-fluid p-0 pb-5 mb-5">
    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#header-carousel" data-slide-to="1"></li>
            <li data-target="#header-carousel" data-slide-to="2"></li>

        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" style="min-height: 300px;">
                <img style="height:768px!important;" class="position-relative w-100" src="<?php echo base_url('uploads/news/' . $web_design['n_file']); ?>" style="min-height: 200px; object-fit: cover;">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="p-5" style="width: 100%; max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-md-3"> 5 saylı Bakı Peşə Məktəbi </h5>
                        <a href="<?php echo base_url('single/' . $web_design['n_id']); ?>">
                            <h1 class="display-3 text-white mb-md-4"><?php echo $web_design['n_title_' . $this->session->userdata('site_lang')]; ?></h1>
                        </a>
                        <a href="<?php echo base_url('single/' . $web_design['n_id']); ?>" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2"><?php echo $web_design['c_name_' . $this->session->userdata('site_lang')]; ?></a>
                        <span style="background:transparent; border:none;" class=" btn btn-info text-primary py-md-2 px-md-4 mt-2 "><?php echo  date("d.m.Y", strtotime($web_design['n_date'])); ?></span>
                    </div>
                </div>
            </div>
            <?php foreach($slider_left_side as $items){?>
                <div class="carousel-item" style="min-height: 300px;">
                <img style="height:768px!important;" class="position-relative w-100" src="<?php echo base_url('uploads/news/' . $items['n_file']); ?>" style="min-height: 200px; object-fit: cover;">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="p-5" style="width: 100%; max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-md-3">5 saylı Bakı Peşə Məktəbi</h5>
                        <a href="<?php echo base_url('single/' . $items['n_id']); ?>">
                            <h1 class="display-3 text-white mb-md-4"><?php echo $items['n_title_' . $this->session->userdata('site_lang')]; ?></h1>
                        </a>
                        <a href="<?php echo base_url('single/' . $items['n_id']); ?>" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2"><?php echo $items['c_name_' . $this->session->userdata('site_lang')]; ?></a>
                        <span style="background:transparent; border:none;" class=" btn btn-info text-primary py-md-2 px-md-4 mt-2 "><?php echo  date("d.m.Y", strtotime($items['n_date'])); ?></span>
                    </div>
                </div>
            </div>
           
           <?php } ?>
            

        </div>
    </div>
</div>








<!-- Carousel End -->


<!-- About Start -->
<!-- <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img  class="img-fluid rounded mb-4 mb-lg-0" src="<?php echo base_url('uploads/news/'); ?>baku_pese_logo.png" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="text-center mb-4">
                        <h5 style="letter-spacing: 5px; text-align:center!important;" class="text-primary text-uppercase mb-3">Haqqımızda</h5>
                        <h1><img  style="width:150px; height:150px;  border-radius:50%;"src="<?php echo base_url('uploads/news/'); ?>pese_tehsil_agentlik.jpg" alt=""></h1>
                       
                    </div>
                    <p style="line-height:1.6 !important;">Peşə təhsili sahəsində dövlət siyasətinin həyata keçirilməsini təmin edən və əlaqələndirən, Azərbaycan Respublikası Elm və Təhsil Nazirliyinin tabeliyindəki peşə təhsili müəssisələrinin fəaliyyətini təşkil edən icra hakimiyyəti orqanıdır.</p>
                    <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                </div>
            </div>
        </div>
    </div> -->
<!-- About End -->





<!-- Courses Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Courses</h5>
            <h1>Our Popular Courses</h1>
        </div>
        <div class="row">

            <?php foreach ($slider_bottom_side as $item) { ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2" style="height:400px !important;">
                        <img class="img-fluid w-100 xbrsekil" src="<?php echo base_url('uploads/news/' . $item['n_file']); ?>" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <div class="d-flex align-items-center">
                                    <?php if ($item['a_img']) { ?>
                                        <img class="rounded-circle mr-2 sekil" src="<?php echo base_url('uploads/admin/' . $item['a_img']); ?>" alt="">
                                    <?php } else { ?>
                                        <img class="sekil" src="https://hivedinn.s3.amazonaws.com/upload/photos/d-avatar.jpg?cache=0" alt class="w-px-40 h-auto rounded-circle" />
                                    <?php } ?>
                                    <small class="m-0"><?php echo $item['a_name']; ?></small>
                                </div>
                                <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>01h 30m</small>
                            </div>

                            <?php if (strlen($item['n_title_' . $this->session->userdata('site_lang')]) > 30) { ?>

                                <a class="h6  mb-3 text-info text-uppercase font-weight-bold" href="<?php echo base_url('single/' . $item['n_id']); ?>"><?php echo mb_substr(($item['n_title_' . $this->session->userdata('site_lang')]), 0, 20, 'UTF-8') . '...'; ?></a>

                            <?php } else { ?>

                                <a class="h6  mb-3 text-info text-uppercase font-weight-bold" href="<?php echo base_url('single/' . $item['n_id']); ?>"><?php echo $item['n_title_' . $this->session->userdata('site_lang')]; ?></a>

                            <?php } ?>

                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-circle text-primary mr-2" aria-hidden="true"></i> <?php echo $item['c_name_' . $this->session->userdata('site_lang')]; ?></h6>
                                    <h5 class="m-0">$99</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>





        </div>
    </div>
</div>
<!-- Courses End -->
<!-- Category Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Subjects</h5>
            <h1>Explore Top Subjects</h1>
        </div>
        <div class="row">
            <?php foreach ($category as $item) { ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="<?php echo base_url('uploads/news/'); ?>abstract.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="<?php echo base_url('course/' . $item['c_id']); ?>">
                            <h4 style="color:orange !important;" class="text-white font-weight-medium"><?php echo $item['c_name_' . $this->session->userdata('site_lang')]; ?></h4>
                            <!-- <span>1 qrup</span> -->
                        </a>
                    </div>
                </div>
            <?php } ?>






        </div>
    </div>
</div>
<!-- Category Start -->


<!-- Registration Start
<div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <div class="mb-4">
                    <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Need Any Courses</h5>
                    <h1 class="text-white">30% Off For New Students</h1>
                </div>
                <p class="text-white">Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos,
                    ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
                    dolor</p>
                <ul class="list-inline text-white m-0">
                    <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Labore eos amet dolor amet diam</li>
                    <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Etsea et sit dolor amet ipsum</li>
                    <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Diam dolor diam elitripsum vero.</li>
                </ul>
            </div>
            <div class="col-lg-5">
                <div class="card border-0">
                    <div class="card-header bg-light text-center p-4">
                        <h1 class="m-0">Sign Up Now</h1>
                    </div>
                    <div class="card-body rounded-bottom bg-primary p-5">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control border-0 p-4" placeholder="Your name" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 p-4" placeholder="Your email" required="required" />
                            </div>
                            <div class="form-group">
                                <select class="custom-select border-0 px-4" style="height: 47px;">
                                    <option selected>Select a course</option>
                                    <option value="1">Course 1</option>
                                    <option value="2">Course 1</option>
                                    <option value="3">Course 1</option>
                                </select>
                            </div>
                            <div>
                                <button class="btn btn-dark btn-block border-0 py-3" type="submit">Sign Up Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Registration End -->


<!-- Team Start -->
<!-- <div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Teachers</h5>
            <h1>Meet Our Teachers</h1>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 text-center team mb-4">
                <div class="team-item rounded overflow-hidden mb-2">
                    <div class="team-img position-relative">
                        <img class="img-fluid" src="<?php echo base_url('public/user/'); ?>img/team-1.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="bg-secondary p-4">
                        <h5>Jhon Doe</h5>
                        <p class="m-0">Web Designer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-4">
                <div class="team-item rounded overflow-hidden mb-2">
                    <div class="team-img position-relative">
                        <img class="img-fluid" src="<?php echo base_url('public/user/'); ?>img/team-2.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="bg-secondary p-4">
                        <h5>Jhon Doe</h5>
                        <p class="m-0">Web Designer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-4">
                <div class="team-item rounded overflow-hidden mb-2">
                    <div class="team-img position-relative">
                        <img class="img-fluid" src="<?php echo base_url('public/user/'); ?>img/team-3.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="bg-secondary p-4">
                        <h5>Jhon Doe</h5>
                        <p class="m-0">Web Designer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-4">
                <div class="team-item rounded overflow-hidden mb-2">
                    <div class="team-img position-relative">
                        <img class="img-fluid" src="<?php echo base_url('public/user/'); ?>img/team-4.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="bg-secondary p-4">
                        <h5>Jhon Doe</h5>
                        <p class="m-0">Web Designer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Testimonial</h5>
            <h1>Məzunlarımız</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="owl-carousel testimonial-carousel">
                    <div class="text-center">
                        <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                        <h4 class="font-weight-normal mb-4">"3 il yüksək texniki peşə təhsili almaq mənə mane olmur, əksinə avantajdır. Bu, bizə daha yaxşı öyrənmək, maraqlandığımız sahə üzrə dərin biliyə sahib olmaq imkanı verir. Tələbə yoldaşlarım arasında əvvəlki illərdə peşə təhsili alan, ancaq universitetə müsabiqədənkənar qəbul imkanı verən yüksək texniki peşə təhsilinə yenidən üz tutanlar da çoxdur”.</h4>
                        <img class="img-fluid mx-auto mb-3" src="<?php echo base_url('uploads/news/'); ?>sevinc.jpg" alt="">
                        <h5 class="m-0">Sevinc Abdullayeva</h5>
                        <span>Sənaye və İnnovasiyalar üzrə Bakı Dövlət Peşə Təhsil Mərkəzində Yüksək texniki peşə üzrə Qrafik dizayn tələbəsi</span>
                    </div>
                    <div class="text-center">
                        <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                        <h4 class="font-weight-normal mb-4">“İstəyirdim əlimdə bir peşəm olsun. Avtomobillərə xüsusi marağım olduğunu nəzərə alaraq bu ixtisaslarla maraqlandım. Təhsil aldığım müəssisənin bu arzumu gerçəkləşdirmək üçün ən yaxşısı olduğunu öyrəndim.Burda təhsilimizin 70 faizi təcrübədir.Mənim üçün çox maraqlı olan bir işi öyrənirəm. Üstəlik, buradakı təhsilimi tamamladıqdan sonra texniki universitetlərin birində təhsil almaq imkanım var. Bu da o deməkdir ki, burdakı təhsilimi tamamladıqdan sonra rahatca iş də tapa bilərəm, universitetdə təhsilimi davam etdirə də”</h4>
                        <img class="img-fluid mx-auto mb-3" src="<?php echo base_url('uploads/news/'); ?>abis.jpg" alt="">
                        <h5 class="m-0">Abış Abışov</h5>
                        <span>Sənaye və İnnovasiyalar üzrə Bakı Dövlət Peşə Təhsil Mərkəzinin Nəqliyyat vasitələrinin texniki istismarı ixtisası üzrə tələbəsi</span>
                    </div>
                    <div class="text-center">
                        <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                        <h4 class="font-weight-normal mb-4">Mədəniyyət və Sənətkarlıq üzrə Bakı Dövlət Peşə Təhsil Mərkəzi</h4>
                        <img class="img-fluid mx-auto mb-3" src="<?php echo base_url('uploads/news/'); ?>5nomre.jpg" alt="">
                        <h5 class="m-0">5 nömrəli Bakı Peşə Məktəbi</h5>
                        <span>13 nömrəli Bakı Peşə Məktəbi/15 nömrəli Bakı Peşə Liseyi</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Blog Start
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Our Blog</h5>
            <h1>Latest From Our Blog</h1>
        </div>

        <div class="row pb-3">

            <div class="col-lg-4 mb-4">
                <div class="blog-item position-relative overflow-hidden rounded mb-2">
                    <img style="height:300px;" class="img-fluid" src="<?php echo base_url('uploads/news/' . $web_design['n_file']); ?>" alt="">
                    <a class="blog-overlay text-decoration-none" href="">
                        <h5 class="text-white mb-3"><?php echo $web_design['n_title_' . $this->session->userdata('site_lang')];  ?></h5>
                        <p class="text-primary m-0"><?php echo  date("d.m.Y", strtotime($web_design['n_date']));  ?></p>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="blog-item position-relative overflow-hidden rounded mb-2">
                    <img style="height:300px;" class="img-fluid" src="<?php echo base_url('uploads/news/' . $system_admin['n_file']); ?>" alt="">
                    <a class="blog-overlay text-decoration-none" href="">
                        <h5 class="text-white mb-3"><?php echo $system_admin['n_title_' . $this->session->userdata('site_lang')];  ?></h5>
                        <p class="text-primary m-0"><?php echo  date("d.m.Y", strtotime($system_admin['n_date'])); ?></p>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="blog-item position-relative overflow-hidden rounded mb-2">
                    <img style="height:300px;" class="img-fluid" src="<?php echo base_url('uploads/news/' . $network_admin['n_file']); ?>" alt="">
                    <a class="blog-overlay text-decoration-none" href="">
                        <h5 class="text-white mb-3"><?php echo $network_admin['n_title_' . $this->session->userdata('site_lang')];  ?></h5>
                        <p class="text-primary m-0"><?php echo  date("d.m.Y", strtotime($network_admin['n_date'])); ?></p>
                    </a>
                </div>
            </div>

        </div>


    </div>
</div> -->
<!-- Blog End -->

<!-- Footer Start -->
<?php $this->load->view('user/includes/footer'); ?>
<!-- Footer End -->
<?php $this->load->view('user/includes/footerScript'); ?>