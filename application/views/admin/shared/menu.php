<!-- menu profile quick info -->
<div class="profile clearfix">
  <div class="profile_pic">
    <img src="<?php echo base_url(); ?>assets/admin/production/images/img.jpg" alt="..." class="img-circle profile_img">
  </div>
  <div class="profile_info">
    <span>Welcome,</span>
    <h2>John Doe</h2>
  </div>
</div>
<!-- /menu profile quick info -->

<br />

<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>General</h3>
    <ul class="nav side-menu">
      <li><a href='<?php echo base_url('admin'); ?>'><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a></li>
      <li><a>Artikel <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?php echo base_url('admin/artikel'); ?>">list</a></li>
          <li><a href="#">insert</a></li>
        </ul>
      </li>

    </ul>
  </div>
</div>
