    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Add SubCategory</li>
      </ol>
      <!-- Contents-->
      <div class="row">
          <div class="col-md-6 offset-md-3">
            <?php echo $this->session->flashdata('msg'); ?>
            <div class="card text-white mb-3">
            <div class="card-header bg-primary">Add a SubCategory</div>
            <div class="card-body">
              <form action="<?php echo site_url('add_subcategory'); ?>" class="form" method="post">
                <label for="catname" class="text-info">Choose a category:</label>
                <select name="cat_id" id="catname" class="form-control">
                  <?php
                    foreach($cat as $c){
                      echo '
                          <option value="'.$c->cat_id.'">'.$c->cat_name.'</option>
                      ';
                    }
                  ?>
                </select><br />
                <input type="text" class="form-control" name="sub_cat_name" placeholder="Enter a new subcategory"><br />
                <input type="submit" name="submit" value="Add" class="btn btn-primary pull-right">
              </form>
            </div>
          </div>
          </div>
      </div>
    </div>
    <!-- /.container-fluid-->