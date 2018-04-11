    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active"><?php if(isset($course)){ echo "Edit Course"; }else{ echo "Add Course"; } ?></li>
      </ol>
      <!-- Contents-->
      <div class="row">
          <div class="col-md-10 offset-md-1">
             <?php echo $this->session->flashdata('msg'); ?>
            <div class="card text-white mb-3">
              <div class="card-header bg-info"><?php if(isset($course)){ echo "Edit a Course"; }else{ echo "Add a Course"; } ?></div>
              <div class="card-body bg-info">
                <form action="<?php if(isset($course)){ echo site_url('view_course/edit/'.$course[0]->course_id);}else{ echo site_url('add_course'); } ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="course_title">Enter a course title:</label>
                  <input type="text" class="form-control" id="course_title" placeholder="Enter course title" name="course_title" <?php if(isset($course)){ echo 'value="'.$course[0]->course_title.'"'; } ?>>
                </div>
                <div class="form-group">
                  <label for="course_intro">Give a course introduction:</label>
                  <input type="text" class="form-control" id="course_intro" placeholder="Write course intro" name="course_intro" <?php if(isset($course)){ echo 'value="'.$course[0]->course_demo.'"'; } ?>>
                </div>
                <div class="form-group">
                  <label for="course_category">Select a course category:</label>
                  <select class="form-control" name="course_category" id="course_category">
                    <?php foreach($cat as $c): ?>
                    <option value="<?php echo $c->cat_id; ?>"><?php echo $c->cat_name; ?></option>
                  <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="course_subcategory">Select a course subcategory:</label>
                  <select class="form-control" name="course_subcategory" id="course_subcategory">
                    <?php foreach($sub_cat as $sc): ?>
                    <option value="<?php echo $sc->sub_cat_id; ?>"><?php echo $sc->sub_cat_name; ?></option>
                  <?php endforeach; ?>
                  </select>
                </div>
                 <div class="form-group">
                  <label for="course_description">Write course description:</label>
                  <textarea name="course_description" id="course_description" cols="30" rows="10" class="form-control"><?php if(isset($course)){ echo $course[0]->course_desc; } ?></textarea>
                </div>
                <div class="form-group">
                  <label for="course_req">Write course requirement:</label>
                  <textarea name="course_req" id="course_req" cols="30" rows="10" class="form-control"><?php if(isset($course)){ echo $course[0]->course_req; } ?></textarea>
                </div>
                <div class="form-group">
                  <label for="course_aud">Write about target audience:</label>
                  <textarea name="course_aud" id="course_aud" cols="30" rows="10" class="form-control"><?php if(isset($course)){ echo $course[0]->course_aud; } ?></textarea>
                </div>
                <div class="form-group">
                  <label for="course_get">Write what audience get:</label>
                  <textarea name="course_get" id="course_get" cols="30" rows="10" class="form-control"><?php if(isset($course)){ echo $course[0]->course_get; } ?></textarea>
                </div>
                 <div class="form-group">
                  <label for="course_img">Select a course image:</label>
                  <?php if(isset($course)){ echo '<img src="'.base_url().'assets/course_image/'.$course[0]->course_image.'" width="100px" height="100px"'; }else{ echo '<input type="file" name="course_img" class="form-control" id="course_img">'; } ?>
                </div>
                <div class="form-group">
                  <label for="course_price">Course price:</label>
                  <input type="text" name="course_price" class="form-control" id="course_price" <?php if(isset($course)){ echo 'value="'.$course[0]->course_price.'"'; } ?>>
                </div>
                <button type="submit" name="add_course" value="add_course" class="btn btn-warning pull-right"><?php if(isset($course)){ echo 'Update Course'; }else{ echo 'Add Course'; }?></button>
              </form>
              </div>
            </div>
          </div>
      </div>
    </div>
    <!-- /.container-fluid-->