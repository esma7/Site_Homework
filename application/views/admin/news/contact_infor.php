<?php $this->load->view("admin/includes/headerStyle"); ?>
<?php $this->load->view("admin/includes/leftSide"); ?>
<?php $this->load->view("admin/includes/navbar"); ?>
<div class="content-wrapper">
    <!-- Content -->
    <style>
        .fleft {
            float: left;
        }
    </style>


    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-12">
                            <div class="card">
                                <h5 class="card-header">Bordered Table</h5>
                                <div class="card-body">
                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Subject</th>
                                                    <!-- <th>Date</th> -->
                                                    <th>Description</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                          
                                           
                                               
                                            <?php $sira=0; foreach ($get_contact as $items) { $sira++ ?>
                                                <tr>
                                                <td><?php echo $sira; ?></td>                                                   
                                                <td><?php echo $items['contact_name']; ?></td>
                                                    <td>
                                                    <i class="fab fa-angular fa-lg text-danger me-3"><?php echo $items['contact_email']; ?></i>
                                                    </td>
                                                    <td><span class="badge bg-label-primary me-1"><?php echo $items['contact_subject']; ?></span></td>
                                                    <td><span><?php echo $items['contact_message']; ?></span></td>
                                                   
                                                    <td>
                                                            <a href=""><button type="button" class="btn btn-info btn-sm">
                                                                    <i class="bx bx-detail "></i>
                                                                </button></a>
                                                           
                                                            <a onclick="return confirm('Are you sure want to delete?')" href="<?php echo base_url('a_contact_delete/'. $items['contact_id']);?>"><button type="button" class="btn btn-danger btn-sm">
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

</div>




<?php $this->load->view("admin/includes/footer"); ?>
<?php $this->load->view("admin/includes/footerScript"); ?>