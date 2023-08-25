<?php $this->load->view("admin/includes/headerStyle"); ?>
<?php $this->load->view("admin/includes/leftSide"); ?>
<?php $this->load->view("admin/includes/navbar"); ?>
<div class="content-wrapper">

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-12">
                            <div class="card">
                                <h5 class="card-header">Single News 
                                    <a href="<?php echo base_url("a_news_list"); ?>">
                                        <button type="button" class="btn btn-warning" style="float:right;">Back</button>
                                    </a>
                                </h5>
                                <div class="card-body">

                                    <style>
                                        tbody tr td:first-child {
                                            color: red;
                                            font-weight: 600
                                        }
                                    </style>
                                
                                      
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td style="width:150px;">Title az</td>
                                                <td><?php echo $single_news['n_title_az']; ?></td>

                                            </tr>
                                            <tr>
                                                <td>Description az</td>
                                                <td><?php echo $single_news['n_description_az']; ?></td>

                                            </tr>

                                           
                                            <tr>
                                                <td>Date</td>
                                                <td><?php echo $single_news['n_date']; ?></td>

                                            </tr>
                                            <tr>
                                                <td>Category</td>
                                                <td><?php echo $single_news['c_name_az']; ?></td>

                                            </tr>
                                            <tr>
                                                <td>Status</td>
                                                <td><?php echo $single_news['s_status']; ?></td>

                                            </tr>
                                            <tr>
                                                <td>File</td>
                                                <td>
                                                    <?php if ($single_news['n_file_ext'] == '.mp3') { ?>
                                                        <audio controls>                                                          
                                                            <source src="<?php echo base_url('uploads/news/' . $single_news['n_file']); ?>" type="audio/mpeg">
                                                    </audio>
                                                    <?php } else { ?>
                                                        <img width="150px" src="<?php echo base_url('uploads/news/' . $single_news['n_file']); ?>" alt="">
                                                    <?php } ?>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



            <?php $this->load->view("admin/includes/footer"); ?>
            <?php $this->load->view("admin/includes/footerScript"); ?>