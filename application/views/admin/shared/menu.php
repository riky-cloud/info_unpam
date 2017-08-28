<!-- menu profile quick info -->

<!-- /menu profile quick info -->

<br />

<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>General</h3>
    <ul class="nav side-menu">
      <li><a href='<?php echo base_url('admin'); ?>'><i class="fa fa-home"></i> Home</a></li>
      <li><a>Artikel <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?php echo base_url('admin/artikel'); ?>">list</a></li>
          <li><a href="<?php echo base_url('admin/artikel/create'); ?>">insert</a></li>
        </ul>
      </li>
      <li><a>Master Foto <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?php echo base_url('admin/foto'); ?>">list</a></li>
        </ul>
      </li>
      <li><a>Master Kategori <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?php echo base_url('admin/kategori'); ?>">list</a></li>
        </ul>
      </li>

    </ul>
  </div>
</div>
