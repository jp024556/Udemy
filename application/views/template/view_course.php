    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Courses</li>
      </ol>
      <!-- Contents-->
      <div class="row">
         <?php echo $this->session->flashdata('msg'); ?>
        <?php foreach($courses as $course): ?>
          <div class="col-md-4" style="margin-bottom: 20px;">
            <div class="card text-white bg-dark">
              <img src="<?php echo base_url().'assets/course_image/'.$course->course_image; ?>" alt="<?php echo $course->course_image; ?>" class="card-img-top">
              <div class="card-body">
                <h4 class="card-title"><?php echo $course->course_title; ?></h4>
                <p class="card-text"><?php echo $course->course_demo; ?></p>
                <a href="#" class="btn btn-warning">View Lessons</a>
                <a href="<?php echo site_url('view_course/e_id/'); ?><?php echo $course->course_id; ?>" class="btn btn-info">Edit Course</a>
                <a href="<?php echo site_url('view_course/r_id/'); ?><?php echo $course->course_id; ?>" class="btn btn-danger" title="Remove Course">X</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <!-- /.container-fluid-->