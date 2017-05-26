<ul class="sidebar-menu">
  <li class="header"><?= __('MAIN NAVIGATION'); ?></li>
  <li>
    <a href="<?= $this->Url->build(['controller' => 'Dashboard', 'action' => 'index']); ?>">
      <i class="fa fa-dashboard"></i> <span><?= __('Dashboard'); ?></span>
    </a>
  </li>
  <li>
    <a href="<?= $this->Url->build(['controller' => 'Cards', 'action' => 'index']); ?>">
      <i class="fa fa-credit-card"></i> <span><?= __('Manage Cards'); ?></span>
    </a>
  </li>
  <li>
    <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'index']); ?>">
      <i class="fa fa-user"></i> <span><?= __('Manage Users'); ?></span>
    </a>
  </li>
  <li>
    <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'logout']); ?>">
      <i class="fa fa-sign-out"></i> <span><?= __('Logout'); ?></span>
    </a>
  </li>


  <li class="header">MAIN NAVIGATION</li>
  <li class="treeview">
      <a href="#">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
          <li><a href="<?php echo $this->Url->build('/admin/pages/home'); ?>"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
          <li><a href="<?php echo $this->Url->build('/admin/pages/home2'); ?>"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
      </ul>
  </li>
  <li class="treeview">
      <a href="#">
          <i class="fa fa-files-o"></i>
          <span>Layout Options</span>
          <span class="label label-primary pull-right">4</span>
      </a>
      <ul class="treeview-menu">
          <li><a href="<?php echo $this->Url->build('/admin/pages/layout/top-nav'); ?>"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
          <li><a href="<?php echo $this->Url->build('/admin/pages/layout/boxed'); ?>"><i class="fa fa-circle-o"></i> Boxed</a></li>
          <li><a href="<?php echo $this->Url->build('/admin/pages/layout/fixed'); ?>"><i class="fa fa-circle-o"></i> Fixed</a></li>
          <li><a href="<?php echo $this->Url->build('/admin/pages/layout/collapsed-sidebar'); ?>"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
      </ul>
  </li>
  <li>
      <a href="<?php echo $this->Url->build('/admin/pages/widgets'); ?>">
          <i class="fa fa-th"></i> <span>Widgets</span>
          <small class="label pull-right bg-green">Hot</small>
      </a>
  </li>
  <li class="treeview">
      <a href="#">
          <i class="fa fa-pie-chart"></i>
          <span>Charts</span>
          <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
          <li><a href="<?php echo $this->Url->build('/admin/pages/charts/chartjs'); ?>"><i class="fa fa-circle-o"></i> ChartJS</a></li>
          <li><a href="<?php echo $this->Url->build('/admin/pages/charts/morris'); ?>"><i class="fa fa-circle-o"></i> Morris</a></li>
          <li><a href="<?php echo $this->Url->build('/admin/pages/charts/flot'); ?>"><i class="fa fa-circle-o"></i> Flot</a></li>
          <li><a href="<?php echo $this->Url->build('/admin/pages/charts/inline'); ?>"><i class="fa fa-circle-o"></i> Inline charts</a></li>
      </ul>
  </li>
  <li class="treeview">
      <a href="#">
          <i class="fa fa-laptop"></i>
          <span>UI Elements</span>
          <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
          <li><a href="<?php echo $this->Url->build('/admin/pages/ui/general'); ?>"><i class="fa fa-circle-o"></i> General</a></li>
          <li><a href="<?php echo $this->Url->build('/admin/pages/ui/icons'); ?>"><i class="fa fa-circle-o"></i> Icons</a></li>
          <li><a href="<?php echo $this->Url->build('/admin/pages/ui/buttons'); ?>"><i class="fa fa-circle-o"></i> Buttons</a></li>
          <li><a href="<?php echo $this->Url->build('/admin/pages/ui/sliders'); ?>"><i class="fa fa-circle-o"></i> Sliders</a></li>
          <li><a href="<?php echo $this->Url->build('/admin/pages/ui/timeline'); ?>"><i class="fa fa-circle-o"></i> Timeline</a></li>
          <li><a href="<?php echo $this->Url->build('/admin/pages/ui/modals'); ?>"><i class="fa fa-circle-o"></i> Modals</a></li>
      </ul>
  </li>
  <li class="treeview">
      <a href="#">
          <i class="fa fa-edit"></i> <span>Forms</span>
          <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
          <li><a href="<?php echo $this->Url->build('/admin/pages/forms/general'); ?>"><i class="fa fa-circle-o"></i> General Elements</a></li>
          <li><a href="<?php echo $this->Url->build('/admin/pages/forms/advanced'); ?>"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
          <li><a href="<?php echo $this->Url->build('/admin/pages/forms/editors'); ?>"><i class="fa fa-circle-o"></i> Editors</a></li>
      </ul>
  </li>
  <li class="treeview">
      <a href="#">
          <i class="fa fa-table"></i> <span>Tables</span>
          <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
          <li><a href="<?php echo $this->Url->build('/admin/pages/tables/simple'); ?>"><i class="fa fa-circle-o"></i> Simple tables</a></li>
          <li><a href="<?php echo $this->Url->build('/admin/pages/tables/data'); ?>"><i class="fa fa-circle-o"></i> Data tables</a></li>
      </ul>
  </li>
  <li>
      <a href="<?php echo $this->Url->build('/admin/pages/calendar'); ?>">
          <i class="fa fa-calendar"></i> <span>Calendar</span>
          <small class="label pull-right bg-red">3</small>
      </a>
  </li>
  <li class="treeview">
      <a href="#">
          <i class="fa fa-envelope"></i> <span>Mailbox</span>
          <small class="label pull-right bg-yellow">12</small>
      </a>
      <ul class="treeview-menu">
          <li><a href="<?php echo $this->Url->build('/admin/pages/mailbox/mailbox'); ?>">Inbox <span class="label label-primary pull-right">13</span></a></li>
          <li><a href="<?php echo $this->Url->build('/admin/pages/mailbox/compose'); ?>">Compose</a></li>
          <li><a href="<?php echo $this->Url->build('/admin/pages/mailbox/read-mail'); ?>">Read</a></li>
      </ul>
  </li>
  <li class="treeview">
      <a href="#">
          <i class="fa fa-folder"></i> <span>Examples</span>
          <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
          <li><a href="<?php echo $this->Url->build('/admin/pages/starter'); ?>"><i class="fa fa-circle-o"></i> Starter</a></li>
          <li><a href="<?php echo $this->Url->build('/admin/pages/examples/invoice'); ?>"><i class="fa fa-circle-o"></i> Invoice</a></li>
          <li><a href="<?php echo $this->Url->build('/admin/pages/examples/profile'); ?>"><i class="fa fa-circle-o"></i> Profile</a></li>
          <li><a href="<?php echo $this->Url->build('/admin/pages/examples/login'); ?>"><i class="fa fa-circle-o"></i> Login</a></li>
          <li><a href="<?php echo $this->Url->build('/admin/pages/examples/register'); ?>"><i class="fa fa-circle-o"></i> Register</a></li>
          <li><a href="<?php echo $this->Url->build('/admin/pages/examples/lockscreen'); ?>"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
          <li><a href="<?php echo $this->Url->build('/admin/pages/examples/404'); ?>"><i class="fa fa-circle-o"></i> 404 Error</a></li>
          <li><a href="<?php echo $this->Url->build('/admin/pages/examples/500'); ?>"><i class="fa fa-circle-o"></i> 500 Error</a></li>
          <li><a href="<?php echo $this->Url->build('/admin/pages/examples/blank'); ?>"><i class="fa fa-circle-o"></i> Blank Page</a></li>
          <li><a href="<?php echo $this->Url->build('/admin/pages/examples/pace'); ?>"><i class="fa fa-circle-o"></i> Pace Page</a></li>
      </ul>
  </li>
  <li class="treeview">
      <a href="#">
          <i class="fa fa-share"></i> <span>Multilevel</span>
          <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          <li>
              <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                  <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                  <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                          <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                          <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                      </ul>
                  </li>
              </ul>
          </li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
      </ul>
  </li>
  <li><a href="<?php echo $this->Url->build('/admin/pages/documentation'); ?>"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
  <li class="header">LABELS</li>
  <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
  <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
  <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
  <li><a href="<?php echo $this->Url->build('/admin/pages/debug'); ?>"><i class="fa fa-bug"></i> Debug</a></li>
</ul>
