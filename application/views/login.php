<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container" style="margin-top:50px">
  <div class="col-md-4 col-md-offset-4">
    <?= $this->session->flashdata('message_login') ?>
    <div class="panel panel-default">
      <div class="panel-heading text-center"><h3 class="panel-title"><strong><i class="fa fa-lg fa-user" aria-hidden="true"></i> User Authentication</strong></h3></div>
      <div class="panel-body">
        <form action="<?= base_url('index.php/Auth/index') ?>" method="post" accept-charset="utf-8" role="form">
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" class="form-control" name="username" id="username">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" id="password">
          </div>
          <button type="submit" class="btn btn-block btn-default"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</button>
        </form>
      </div>
    </div>
  </div>
</div>