<?php $this->load->view("admin/includes/headerStyle"); ?>
<?php $this->load->view("admin/includes/leftSide"); ?>
<?php $this->load->view("admin/includes/navbar"); ?>
<div class="content-wrapper">
    <!-- Content -->
    <style>
        .fleft {
            float: left;
        }

        tbody tr td:first-child {
            color: red;
            font-weight: bold;
            width: 100px;
        }
    </style>

    

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <h5 class="card-header">Detail Table
                        <a href="<?php echo base_url("a_slider_list"); ?>">
                            <button type="button" style=" float:right;" class="btn btn-secondary ">Back</button>
                        </a>
                    </h5>
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-12">
                            <div class="card-body">



                                <table class="table table-bordered">

                                    <tbody>
                                        <tr>
                                            <td>TITLE</td>
                                            <td><?php echo $single_slider['s_title'] ?></td>

                                        </tr>
                                        <tr>
                                            <td>DESCRIPTION</td>
                                            <td><?php echo $single_slider['s_description'] ?></td>

                                        </tr>
                                        <tr>
                                            <td>DATE</td>
                                            <td><?php echo $single_slider['s_date'] ?></td>

                                        </tr>
                                        <tr>
                                            <td>CATEGORY</td>
                                            <td><?php echo $single_slider['cat_name'] ?></td>

                                        </tr>

                                        <tr>
                                            <td>STATUS</td>
                                            <td><?php echo $single_slider['s_status'] ?></td>

                                        </tr>
                                        <tr>
                                            <td>IMAGE</td>
                                            <td>

                                                <?php if ($single_slider['s_file_ext'] == 'mp3') { ?>
                                                    <audio controls>
                                                        <source src="<?php echo base_url('sekil/news/') . $single_slider['s_file']; ?>" type="audio/mpeg">

                                                    </audio>
                                                <?php } else { ?>
                                                    <img width="300px;" src="<?php echo base_url('sekil/news/') . $single_slider['s_file']; ?>" alt="">

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
    </div>
</div>





<?php $this->load->view("admin/includes/footer"); ?>
<?php $this->load->view("admin/includes/footerScript"); ?>