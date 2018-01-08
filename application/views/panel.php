<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Panel</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-lg fa-user-circle-o" aria-hidden="true"></i> <?= $this->session->username ?> <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?= base_url('index.php/auth/logout') ?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>

<div class="container">
  <div class="row">
    <div class="well well-sm text-center">
      <h1><i class="fa fa-3x fa-user-circle-o" aria-hidden="true"></i></h1>
      <h2><?= $this->session->username ?></h2>
      <span>user logged in dashboard</span>
    </div>
  </div>
</div>
