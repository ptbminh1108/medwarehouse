<!-- Sidebar Menu -->
<nav class="mt-2">

  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

    <!-- Dashboard Tab -->
    <li class="nav-item">
      <a href="<?php echo url('dashboard') ?>" class="nav-link <?php echo (@$_page->menu == 'dashboard') ? 'active' : '' ?>">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
          <?php echo lang('App.dashboard') ?>
        </p>
      </a>
    </li>
    <!-- Dashboard Tab -->  

    <!-- Items Tab -->  
    <?php if (hasPermissions('users_list')) : ?>
      <li class="nav-item">
        <a href="<?php echo url('#') ?>" class="nav-link <?php echo (@$_page->menu == 'items') ? 'active' : '' ?>">
          <i class="nav-icon fas fa-user"></i>
          <p>
            <?php echo lang('App.items') ?>
            <i class="right fas fa-angle-right"></i>
          </p>
        </a>
      </li>
    <?php endif ?>
    <!-- Items Tab -->  

    <!-- Sales Tab -->  
    <?php if (hasPermissions('activity_log_list')) : ?>
      <li class="nav-item">
        <a href="<?php echo url('#') ?>" class="nav-link <?php echo (@$_page->menu == 'activity_logs') ? 'active' : '' ?>">
          <i class="nav-icon fas fa-history"></i>
          <p>
            <?php echo lang('App.sales') ?>
            <i class="right fas fa-angle-right"></i>
          </p>
        </a>

       
        <ul class="nav nav-treeview">

          <!-- Customer sub Tab -->  
          <li class="nav-item">
            <a href="<?php echo url('#') ?>" class="nav-link <?php echo (@$_page->submenu == 'general') ? 'active' : '' ?>">
              <i class="far fa-circle nav-icon"></i>
              <p> <?php echo lang('App.customers') ?> </p>
            </a>
          </li>
          <!-- Customer sub Tab -->  

          <!-- Requirement forms sub Tab -->  
          <li class="nav-item">
            <a href="<?php echo url('#') ?>" class="nav-link <?php echo (@$_page->submenu == 'general') ? 'active' : '' ?>">
              <i class="far fa-circle nav-icon"></i>
              <p> <?php echo lang('App.requirement_forms') ?> </p>
            </a>
          </li>
          <!-- Requirement forms sub Tab -->  

        </ul>
      </li>
    <?php endif ?>
    <!-- Sales Tab -->  
    
    <!-- Purchases Tab -->  
        <?php if (hasPermissions('users_list')) : ?>
      <li class="nav-item">
        <a href="<?php echo url('#') ?>" class="nav-link <?php echo (@$_page->menu == 'purchases') ? 'active' : '' ?>">
          <i class="nav-icon fas fa-money-bill"></i>
          <p>
            <?php echo lang('App.purchases') ?>
            <i class="right fas fa-angle-right"></i>
          </p>
        </a>
      </li>
    <?php endif ?>
    <!-- Purchases Tab -->  

     <!-- Settings Tab -->  
     <?php if (hasPermissions('users_list')) : ?>
      <li class="nav-item">
        <a href="<?php echo url('#') ?>" class="nav-link <?php echo (@$_page->menu == 'settings') ? 'active' : '' ?>">
          <i class="nav-icon fas fa-cog"></i>
          <p>
            <?php echo lang('App.settings') ?>
            <i class="right fas fa-angle-right"></i>
          </p>
        </a>

        <ul class="nav nav-treeview">

          <!-- User sub Tab -->  
          <li class="nav-item">
            <a href="<?php echo url('users') ?>" class="nav-link <?php echo (@$_page->submenu == 'users') ? 'active' : '' ?>">
              <i class="far fa-user "></i>
              <p> <?php echo lang('App.users') ?> </p>
            </a>
          </li>
          <!-- Customer sub Tab -->  

          <!-- Roles forms sub Tab -->  
          <li class="nav-item">
            <a href="<?php echo url('roles') ?>" class="nav-link <?php echo (@$_page->submenu == 'roles') ? 'active' : '' ?>">
              <i class="far fa-user"></i>
              <p> <?php echo lang('App.roles')?> </p>
            </a>
          </li>
          <!-- Roles forms sub Tab -->  
          <!-- Register forms sub Tab -->  
           <li class="nav-item">
            <a href="<?php echo url('auth/register') ?>" class="nav-link <?php echo (@$_page->submenu == 'register') ? 'active' : '' ?>">
              <i class="far fa-user"></i>
              <p> <?php echo lang('App.register')?> </p>
            </a>
          </li>
          <!-- Register forms sub Tab -->  

        </ul>

      </li>
    <?php endif ?>
    <!-- Settings Tab -->  


     <!-- Logouts Tab -->  
     <?php if (hasPermissions('users_list')) : ?>
      <li class="nav-item">
        <a href="<?php echo url('auth/logout') ?>" class="nav-link">
          <i class="nav-icon fas fa-sign-out-alt"></i>
          <p>
            <?php echo lang('App.log_out') ?>
            <i class="right fas fa-angle-right"></i>
          </p>
        </a>
      </li>
    <?php endif ?>
    <!-- Logouts Tab -->  

    <?php if (!hasModule('adminlte')) : ?>
      <?= $this->include("Adminlte\Views\aside-nav") ?>
    <?php endif; ?>

  </ul>
</nav>
<!-- /.sidebar-menu -->