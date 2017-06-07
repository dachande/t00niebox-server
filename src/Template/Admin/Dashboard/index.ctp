<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?= __('Dashboard'); ?>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-3 col-sm-6 col-xs-12">
      <!-- small box -->
      <div class="info-box">
        <span class="info-box-icon bg-aqua">
          <i class="ion ion-card"></i>
        </span>
        <div class="info-box-content">
          <span class="info-box-text"><?= __('Cards'); ?></span>
          <span class="info-box-number"><?= $cardCount; ?></span>
          <a href="<?= $this->Url->build(['controller' => 'Cards', 'action' => 'index']); ?>" class="small-box-footer"><?= __('Manage Cards'); ?> <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
    <!-- ./col -->

    <div class="col-lg-3 col-sm-6 col-xs-12">
      <!-- small box -->
      <div class="info-box">
        <span class="info-box-icon bg-red">
          <i class="ion ion-person"></i>
        </span>
        <div class="info-box-content">
          <span class="info-box-text"><?= __('Users'); ?></span>
          <span class="info-box-number"><?= $userCount; ?></span>
          <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'index']); ?>" class="small-box-footer"><?= __('Manage Users'); ?> <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
    <!-- ./col -->
  </div>

  <div class="row">
    <!-- Card Quick Add -->
    <div class="col-xs-12">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title"><?= __('Quick Add'); ?>: <?= __('Card'); ?></h3>
        </div>
        <div class="box-body">
          <p>Element coming soon...</p>
        </div>
      </div>
    </div>
  </div>
</section>
