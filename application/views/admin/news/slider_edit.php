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
                            <div class="card-body">


                                <form action="<?php echo base_url("a_slider_update_act/".$single_slider['s_id']); ?>" method="post" enctype="multipart/form-data">
                                <h5><strong>EDIT</strong></h5>
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="Enter Title" value="<?php echo $single_slider['s_title']; ?>">
                                    <br>
                                    <label for="desc">Description</label>
                                    <textarea name="description" id="desc" cols="30" rows="10" class="form-control" placeholder="Enter Description"><?php echo $single_slider['s_description']; ?></textarea>
                                    <br>
                                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2  m-lg-2 fleft">
                                        <label for="date">Date</label>
                                        <input type="datetime-local" name="date" id="date" class="form-control" value="<?php echo $single_slider['s_date']; ?>" >
                                    </div>
                                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3  mt-2 me-2 fleft">
                                        <label for="category">Category</label>
                                        <select name="category" id="category" class="form-control">
                                            <?php foreach($slider as $items){ ?>
                                                <option <?php if($single_slider['s_category'] == $items['cat_id']){ echo "SELECTED";} ?> value="<?php echo $items['cat_id']; ?>"><?php echo $items['cat_name']; ?></option>

                                           <?php } ?>
                                           

                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 mt-2 me-2 m-lg-2 fleft">
                                        <label for="status">Status</label>
                                        <select name="status" id="status" class="form-control">
                                        <option <?php if($single_slider['s_status'] == ""){ echo "SELECTED";} ?> value="">-SELECT-</option>
                                            <option <?php if($single_slider['s_status'] == "Active"){ echo "SELECTED";} ?> value="Active">Active</option>
                                            <option  <?php if($single_slider['s_status'] == "Deactive"){ echo "SELECTED";} ?> value="Deactive">Deactive</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 m-lg-2 fleft">
                                        <label for="img">Image</label>
                                        <input type="file" name="img" id="img" class="form-control">
                                    </div>
                                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 m-lg-2 fleft">
                                        <label for="img"> Current Image</label>
                                        <img width="100px" height="100px" src="<?php echo base_url('sekil/news/'. $single_slider['s_file']) ?>" alt="">
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 fleft m-lg-2 d-grid">
                                        <button type="submit" class="btn btn-success btn-block">Update</button>
                                    </div>
                                    <br>
                                    <br>
                                </form>


                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <?php $this->load->view("admin/includes/footer"); ?>
    <?php $this->load->view("admin/includes/footerScript"); ?>