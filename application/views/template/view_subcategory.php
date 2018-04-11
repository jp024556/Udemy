    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">SubCategory</li>
      </ol>
      <!-- Contents-->
      <div class="row">
        <?php if(!isset($sub_cat_name)){ ?>
        <div class="col-md-6 offset-md-3">
          <?php echo $this->session->flashdata('msg'); ?>
          <table class="table table-bordered table-sm">
          <thead>
            <tr>
              <th>SubCat ID</th>
              <th>SubCat Name</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach($sub_cat as $c){
                foreach($cat as $ca){
                  if($c->cat_id == $ca->cat_id){
                    $pcat_name = $ca->cat_name;
                  }
                }
                echo '
                      <tr>
                        <td>'.$c->sub_cat_id.'</td>
                        <td>'.$pcat_name.'<br />&nbsp;&nbsp;&nbsp;&nbsp;=>'.$c->sub_cat_name.'</td>
                        <td><a href="view_subcategory/e_subcat_id/'.$c->sub_cat_id.'"><button class="btn btn-warning">Edit</button></a></td>
                        <td><a href="view_subcategory/r_id/'.$c->sub_cat_id.'"><button class="btn btn-danger">Remove</button></a></td>
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
            <div class="card-header bg-info">Edit SubCategory</div>
            <div class="card-body">
              <form action="<?php echo site_url('view_subcategory/e_subcat_id'); ?>" class="form" method="post">
                <input type="hidden" class="form-control" name="id" value="<?php echo $sub_cat_id; ?>">
                <input type="text" class="form-control" name="sub_cat_name" value="<?php echo $sub_cat_name; ?>"><br />
                <input type="submit" name="submit" value="Update" class="btn btn-info pull-right">
              </form>
            </div>
          </div>
      </div>
        <?php } ?>
      </div>
    </div>
    <!-- /.container-fluid-->