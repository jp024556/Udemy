    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Category</li>
      </ol>
      <!-- Contents-->
      <div class="row">
        <?php if(!isset($cat_name)){ ?>
        <div class="col-md-6 offset-md-3">
          <?php echo $this->session->flashdata('msg'); ?>
          <table class="table table-bordered table-sm">
          <thead>
            <tr>
              <th>Cat ID</th>
              <th>Cat Name</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach($cat as $c){
                echo '
                      <tr>
                        <td>'.$c->cat_id.'</td>
                        <td>'.$c->cat_name.'</td>
                        <td><a href="view_category/e_cat_id/'.$c->cat_id.'"><button class="btn btn-warning">Edit</button></a></td>
                        <td><a href="view_category/r_id/'.$c->cat_id.'"><button class="btn btn-danger">Remove</button></a></td>
                      </tr>
                      ';
              }
            ?>
          </tbody>
        </table>
        </div>
        <?php }else{ ?>
      <div class="col-md-6 offset-md-3">
          <div class="card text-white mb-3">
            <div class="card-header bg-info">Edit Category</div>
            <div class="card-body">
              <form action="<?php echo site_url('view_category/e_cat_id'); ?>" class="form" method="post">
                <input type="hidden" class="form-control" name="id" value="<?php echo $cat_id; ?>">
                <input type="text" class="form-control" name="cat_name" value="<?php echo $cat_name; ?>"><br />
                <input type="submit" name="submit" value="Update" class="btn btn-info pull-right">
              </form>
            </div>
          </div>
      </div>
        <?php } ?>
      </div>
    </div>
    <!-- /.container-fluid-->