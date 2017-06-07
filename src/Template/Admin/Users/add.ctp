<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?= __('Add user'); ?>
    <small><?= __('Manage Users'); ?></small>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <?= $this->Form->create($user, ['class' => 'form-horizontal']); ?>
      <div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title"><?= __('New user account'); ?></h3>
        </div>
        <div class="box-body">
          <?= $this->Form->control('username'); ?>
          <?= $this->Form->control('password'); ?>
          <?= $this->Form->control('role', ['options' => ['admin' => __('Administrator'), 'manager' => __('Card Manager')]]); ?>
        </div>
        <div class="box-footer text-right">
          <a href="javascript:history.back()" class="btn btn-link"><?= __('Cancel'); ?></a>
          <button type="submit" class="btn btn-success"><?= __('Save user'); ?></button>
        </div>
      </div>
      <?= $this->Form->end(); ?>
    </div>
  </div>
</section>
