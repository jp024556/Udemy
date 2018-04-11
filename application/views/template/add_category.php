    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Add Category</li>
      </ol>
      <!-- Contents-->
      <div class="row">
          <div class="col-md-6 offset-md-3">
            <?php echo $this->session->flashdata('msg'); ?>
            <div class="card text-white mb-3">
            <div class="card-header bg-primary">Add a Category</div>
            <div class="card-body">
              <form action="<?php echo site_url('add_category'); ?>" class="form" method="post">
                <input type="text" class="form-control" name="cat_name" placeholder="Enter a new category"><br />
                <input type="submit" name="submit" value="Add" class="btn btn-primary pull-right">
              </form>
            </div>
          </div>
          </div>
      </div>
    </div>
    <!-- /.container-fluid-->