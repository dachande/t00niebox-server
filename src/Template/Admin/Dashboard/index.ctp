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
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3><?= $cardCount; ?></h3>

          <p><?= __('Cards'); ?></p>
        </div>
        <div class="icon">
          <i class="fa fa-credit-card"></i>
        </div>
        <a href="<?= $this->Url->build(['controller' => 'Cards', 'action' => 'index']); ?>" class="small-box-footer"><?= __('Manage Cards'); ?> <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
</section>
