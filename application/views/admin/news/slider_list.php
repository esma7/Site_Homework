<?php $this->load->view("admin/includes/headerStyle"); ?>
<?php $this->load->view("admin/includes/leftSide"); ?>
<?php $this->load->view("admin/includes/navbar"); ?>





<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-12">
                            <div class="card">
                                <h5 class="card-header">Slider List
                                    <a href="<?php echo base_url("a_news_slider"); ?>">
                                        <button type="button" style=" float:right;" class="btn btn-success ">Create</button>
                                    </a>
                                </h5>


                                <div class="card-body">

                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>№</th>
                                                    <th>Title</th>
                                                    <!-- <th>Description</th> -->
                                                    <th>Img</th>
                                                    <th>Category</th>

                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                <?php $sira=0; foreach ($get_all as $items) { $sira++ ?>

                                                    
                                                    <tr>
                                                        <td><?php echo $sira; ?></td>
                                                        <td>
                                                            <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo $items['s_title'] ?></strong>
                                                        </td>
                                                        <!-- <td><?php echo $items['s_description'] ?></td> -->
                                                        <td>
                                                            <img width="100px;" height="100px" src="<?php echo base_url('sekil/news/'. $items['s_file']) ?>" alt="">
                                                        </td>
                                                        <td><?php echo $items['cat_name'] ?></td>
                                                        <td><?php echo date("d/m/Y", strtotime($items['s_date'])); ?></td>

                                                        <td><?php if($items['s_status']== 'Active') {?>

                                                            <span class="badge bg-label-success me-1"><?php echo $items['s_status'] ?></span>

                                                       <?php } else if( $items['s_status']== 'Deactive'){?>

                                                        <span class="badge bg-label-danger me-1"><?php echo $items['s_status'] ?></span>
                                                      <?php } else{?>
                                                        <span class="badge bg-label-info me-1">UPSS</span>
                                                     <?php }?></td>
                                                        <td>
                                                            <a href="<?php echo base_url('a_slider_view/'.$items['s_id']); ?>"><button type="button" class="btn btn-info btn-sm">
                                                                    <i class="bx bx-detail "></i>
                                                                </button></a>
                                                            <a href="<?php echo base_url('a_slider_update/'.$items['s_id']);?>"> <button type="button" class="btn btn-warning btn-sm">
                                                                    <i class="bx bx-edit-alt "></i>
                                                                </button></a>
                                                            <a onclick="return confirm('Are you sure want to delete?')" href="<?php echo base_url('a_slider_delete/'.$items['s_id']);?>"><button type="button" class="btn btn-danger btn-sm">
                                                                    <i class="bx bx-trash "></i>
                                                                </button></a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <?php $this->load->view("admin/includes/footer"); ?>
    <?php $this->load->view("admin/includes/footerScript"); ?>