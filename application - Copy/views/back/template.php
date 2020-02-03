<!DOCTYPE html>
<html lang="en">

<head>
  <title>
    Cakrawala Semesta Solusindo | Beranda
  </title>
  <?php $this->load->view('back/top_resource'); ?>
</head>

<body class="index-page sidebar-collapse">
    <?php $this->load->view('back/header'); ?>
        <?php $this->load->view($content); ?>
    <?php $this->load->view('back/bottom_resource') ?>
</body>
</html>