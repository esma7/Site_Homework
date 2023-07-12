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
              <!-- Bordered Table -->
              <div class="card">
                <h5 class="card-header">Bordered Table
                  <a href="<?php echo base_url("a_news_create"); ?>">
                    <button type="button" class="btn btn-success" style="float:right;">Create</button>
                  </a>
                </h5>
                <div class="card-body">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Category</th>
                          <th>Date</th>
                          <th>Image</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>
                            <i class="fab fa-angular fa-lg text-danger me-1"></i> <strong>Angular Project</strong>
                          </td>
                          <td>Albert Cook</td>
                          <td>LAber</td>
                          <td>
                            22.11.22
                          </td>
                          <td><a href="">
                              <img width="90px" src="https://imgv3.fotor.com/images/blog-cover-image/part-blurry-image.jpg" alt="">
                            </a></td>
                         
                          <td><span class="badge bg-label-success me-1">Active</span></td>
                          <td>

                            <a href="">
                              <button type="button" class="btn btn-success btn-sm" data-bs-toggle="dropdown">
                                <i class="bx bx-edit-alt me-1"></i> Edit
                              </button>
                            </a>
                            <a href="">
                              <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="dropdown">
                                <i class="bx bx-trash me-1"></i> Delete
                              </button></a>



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
  </div>



  <?php $this->load->view("admin/includes/footer"); ?>
  <?php $this->load->view("admin/includes/footerScript"); ?>