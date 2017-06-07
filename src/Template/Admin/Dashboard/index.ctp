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
      <div class="info-box">
        <span class="info-box-icon bg-aqua">
          <i class="fa fa-credit-card"></i>
        </span>
        <div class="info-box-content">
          <span class="info-box-text"><?= __('Cards'); ?></span>
          <span class="info-box-number"><?= $cardCount; ?></span>
          <a href="<?= $this->Url->build(['controller' => 'Cards', 'action' => 'index']); ?>" class="small-box-footer"><?= __('Manage Cards'); ?> <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
    <!-- ./col -->
  </div>
</section>
