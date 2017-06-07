<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?= __('Card List'); ?>
    <small><?= __('Manage Cards'); ?></small>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('Cards'); ?></h3>
        </div>
        <!-- /.box-header -->

        <!-- /.box-body -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th style="width: 80px;"><?= __('ID'); ?></th>
              <th><?= __('Uuid'); ?></th>
              <th><?= __('Title'); ?></th>
              <th style="width: 140px;"><?= __('Actions'); ?></th>
            </tr>
            <?php foreach ($cards as $card): ?>
              <tr>
                <td><?= $card->id; ?></td>
                <td><?= $card->uuid; ?></td>
                <td><?= $card->title; ?></td>
                <td>
                  <a href="<?= $this->Url->build(['action' => 'view', $card->id]); ?>" class="btn btn-sm btn-primary" title="<?= __('View card'); ?>"><i class="fa fa-eye"></i></a>
                  <a href="<?= $this->Url->build(['action' => 'edit', $card->id]); ?>" class="btn btn-sm btn-info" title="<?= __('Edit card'); ?>"><i class="fa fa-edit"></i></a>
                  <?= $this->Form->postLink('<i class="fa fa-trash-o"></i>', ['action' => 'delete', $card->id], ['class' => 'btn btn-sm btn-danger', 'title' => __('Delete card'), 'escape' => false, 'confirm' => __('Are you sure you want to delete this card?')]) ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>
        <!-- /.box-body -->

        <!-- /.box-footer -->
        <div class="box-footer">
          <a href="<?= $this->Url->build(['action' => 'add']); ?>" class="btn btn-success"><i class="fa fa-plus-square-o"></i> <?= __('Add new card'); ?></a>
        </div>
        <!-- /.box-footer -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>
<!-- /.content -->
