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
                        <a href="<?php echo base_url("a_news_contact"); ?>">
                            <button type="button" style=" float:right;" class="btn btn-secondary ">Back</button>
                        </a>
                    </h5>
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-12">
                            <div class="card-body">

                                <table class="table table-bordered">

                                    <tbody>
                                        <tr>
                                            <td>Name</td>
                                            <td><?php echo $get_contact['contact_name'] ?></td>

                                        </tr>
                                        <tr style="color:brown;">
                                            <td>Email</td>
                                            <td><?php echo $get_contact['contact_email'] ?></td>

                                        </tr>
                                        <tr style="font-weight:bold;">
                                            <td>Subject</td>
                                            <td><?php echo $get_contact['contact_subject'] ?></td>

                                        </tr>
                                       
                                        <tr>
                                            <td>Description</td>
                                            <td><?php echo $get_contact['contact_message'] ?></td>

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