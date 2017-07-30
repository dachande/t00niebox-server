<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?= __('Card Details'); ?>
    <small><?= __('Manage Cards'); ?></small>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('Card title'); ?>: <?= $card['title']; ?></h3>
        </div>
        <!-- /.box-header -->

        <!-- /.box-body -->
        <div class="box-body">
          <div class="table-responsive no-padding">
            <table class="table">
              <tr>
                <td><?= __('Uuid'); ?></td>
                <td><?= $card['uuid']; ?></td>
              </tr>
              <tr>
                <td><?= __('Title'); ?></td>
                <td><?= $card['title']; ?></td>
              </tr>
              <tr>
                <td><?= __('Share'); ?></td>
                <td><?= $card['share']; ?></td>
              </tr>
            </table>
          </div>

          <h4><?= __('Files'); ?> / <?= __('Folders'); ?></h4>
          <div class="table-responsive no-padding">
            <table class="table">
              <?php foreach ($card['files_array'] as $file): ?>
                <tr>
                  <td><?= $file; ?></td>
                </tr>
              <?php endforeach; ?>
            </table>
          </div>
        </div>
        <!-- /.box-body -->

        <!-- /.box-footer -->
        <div class="box-footer">
          <a href="<?= $this->Url->build(['action' => 'edit', $card['id']]); ?>" class="btn btn-info"><i class="fa fa-edit"></i> <?= __('Edit card'); ?></a>
          <?= $this->Form->postLink('<i class="fa fa-trash-o"></i> ' . __('Delete card'), ['action' => 'delete', $card->id], ['class' => 'btn btn-danger', 'title' => __('Delete card'), 'escape' => false, 'confirm' => __('Are you sure you want to delete this card?')]) ?>
        </div>
        <!-- /.box-footer -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>
<!-- /.content -->
