<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= isset($theme['title']) ? $theme['title'] : 'AdminLTE 2 | Log in'; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <?= $this->Html->css('AdminLTE./bootstrap/css/bootstrap'); ?>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <?= $this->Html->css('AdminLTE.AdminLTE.min'); ?>
  <?= $this->Html->css('AdminLTE-override'); ?>
  <!-- iCheck -->
  <?= $this->Html->css('AdminLTE./plugins/iCheck/square/blue'); ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?= $this->Url->build(array('controller' => 'pages', 'action' => 'display', 'home')); ?>"><?= $theme['logo']['large'] ?> <?= __('Administration'); ?></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"><?= __('Sign in to start your session') ?></p>
    <?= $this->Flash->render(); ?>
    <?= $this->Flash->render('auth'); ?>

<?= $this->fetch('content'); ?>

    <?php
    if (isset($theme['login']['show_social']) && $theme['login']['show_social']) {
        ?>
        <div class="social-auth-links text-center">
          <p>- <?= __('OR') ?> -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> <?= __('Sign in using Facebook') ?></a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> <?= __('Sign in using Google+') ?></a>
        </div>
        <?php
    }
    ?>

    <?php
    if (isset($theme['login']['show_remember']) && $theme['login']['show_remember']) {
        ?>
        <a href="#"><?= __('I forgot my password') ?></a><br>
        <?php
    }
    if (isset($theme['login']['show_register']) && $theme['login']['show_register']) {
        ?>
        <a href="#" class="text-center"><?= __('Register a new membership') ?></a>
        <?php
    }
    ?>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.1.4 -->
<?= $this->Html->script('/plugins/jQuery/jQuery-2.1.4.min'); ?>
<!-- Bootstrap 3.3.5 -->
<?= $this->Html->script('/bootstrap/js/bootstrap'); ?>
<!-- iCheck -->
<?= $this->Html->script('/plugins/iCheck/icheck.min'); ?>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
