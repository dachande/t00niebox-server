<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?= __('User List'); ?>
    <small><?= __('Manage Users'); ?></small>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('Users'); ?></h3>
        </div>
        <!-- /.box-header -->

        <!-- /.box-body -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th style="width: 80px;"><?= __('ID'); ?></th>
              <th><?= __('Username'); ?></th>
              <th><?= __('Title'); ?></th>
              <th style="width: 100px;"><?= __('Actions'); ?></th>
            </tr>
            <?php foreach ($cards as $card): ?>
              <tr>
                <td><?= $card->id; ?></td>
                <td><?= $card->uuid; ?></td>
                <td><?= $card->title; ?></td>
                <td>
                  <button type="button" class="btn btn-sm btn-info" title="<?= __('Edit'); ?>"><i class="fa fa-edit"></i></button>
                  <button type="button" class="btn btn-sm btn-danger" title="<?= __('Delete'); ?>"><i class="fa fa-trash-o"></i></button>
                </td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>
        <!-- /.box-body -->

        <!-- /.box-footer -->
        <div class="box-footer">
          <button type="button" class="btn btn-default"><i class="fa fa-plus-square-o"></i> <?= __('Add new card'); ?></button>
        </div>
        <!-- /.box-footer -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>
<!-- /.content -->
