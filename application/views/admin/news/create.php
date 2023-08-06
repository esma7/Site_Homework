<?php $this->load->view("admin/includes/headerStyle"); ?>
<?php $this->load->view("admin/includes/leftSide"); ?>
<?php $this->load->view("admin/includes/navbar"); ?>
<div class="content-wrapper">
    <!-- Content -->
<style>
    .fleft{
        float:left;
    }
</style>
   

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-12">
                            <div class="card-body">

                               
                               <form action="<?php echo base_url("a_news_create_act"); ?>" method="post" enctype="multipart/form-data">
                                <label for="title">Title</label>
                                <input  name="title" type="text"  id="title" class="form-control" placeholder="Title...">
                                <br>
                                <label for="desc">Description</label>
                                <textarea name="description" id="desc" cols="30" rows="10" class="form-control" placeholder="Description..."></textarea>
                                <br>
                               <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 fleft m-lg-2">
                               <label for="date">Date</label>
                                <input type="datetime-local" name="date" id="date" class="form-control">
                               </div>
                               <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 fleft m-lg-1">
                               <label for="category">Category</label>
                                <select name="category" id="category" class="form-control">
                                    <option value="">-SELECT-</option>
                                    
                                    <?php foreach($category as $items) {?>
                                        <option value="<?php echo $items['c_id']; ?>"><?php echo $items['c_name']; ?></option>
                                    <?php }?>
                                    
                                </select>
                               </div>
                               <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 fleft m-lg-1">
                               <label for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="">SELECT</option>

                                    <?php foreach($status as $items) {?>
                                       <option value="<?php echo $items['s_id']; ?>"><?php echo $items['s_status']; ?></option>
                                    <?php }?>

                                </select>
                               </div>
                               <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 fleft m-lg-1">
                               <label for="img">Image</label>
                                <input type="file" name="image" id="img" class="form-control">
                               </div>
                               
                               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 fleft m-lg-2 d-grid">
                               <button type="submit" class="btn btn-success btn-block">Send</button>
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