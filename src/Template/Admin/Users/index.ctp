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
              <th><?= __('Role'); ?></th>
              <th style="width: 140px;"><?= __('Actions'); ?></th>
            </tr>
            <?php foreach ($users as $user): ?>
              <tr>
                <td><?= $user->id; ?></td>
                <td><?= $user->username; ?></td>
                <td><?= $user->role; ?></td>
                <td>
                  <a href="<?= $this->Url->build(['action' => 'view', $user->id]); ?>" class="btn btn-sm btn-primary" title="<?= __('View user profile'); ?>"><i class="fa fa-eye"></i></a>
                  <a href="<?= $this->Url->build(['action' => 'edit', $user->id]); ?>" class="btn btn-sm btn-info" title="<?= __('Edit user'); ?>"><i class="fa fa-edit"></i></a>
                  <?= $this->Form->postLink('<i class="fa fa-trash-o"></i>', ['action' => 'delete', $user->id], ['class' => 'btn btn-sm btn-danger', 'title' => __('Delete user'), 'escape' => false, 'confirm' => __('Are you sure you want to delete this user?')]) ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>
        <!-- /.box-body -->

        <!-- /.box-footer -->
        <div class="box-footer">
          <a href="<?= $this->Url->build(['action' => 'add']); ?>" class="btn btn-success"><i class="fa fa-plus-square-o"></i> <?= __('Add user'); ?></a>
        </div>
        <!-- /.box-footer -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>
<!-- /.content -->
