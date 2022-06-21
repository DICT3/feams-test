<?= $this->extend('adminlte') ?>

<?= $this->section('page_header') ?>
<div class="card container-fluid m-1 p-2">
  <div class="row mb-2">
      <div class="col">
          <h1><?= esc($title)?></h1>
      </div>
      <div class="col">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url()?>/admin/announcements">Announcements</a></li>
            <li class="breadcrumb-item active"><?= esc($title)?></li>
          </ol>
    </div>
  </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?php if(!empty(session()->getFlashdata('failMsg'))):?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <?= session()->getFlashdata('failMsg');?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php endif;?>
<?php if(!empty(session()->getFlashdata('successMsg'))):?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <?= session()->getFlashdata('successMsg');?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php endif;?>

<div class="container-fluid m-2">
  <div class="row">
    <div class="card col-md-7 m-2 p-2">
      <div class="row justify-content-center">
          <div class="col">
              <?php if(esc($announce['image'])):?>
                <img src="<?= base_url()?>/public/uploads/announcements/<?= esc($announce['image'])?>" class="rounded img-fluid" alt="Announcement image">
              <?php endif;?>
          </div>
      </div>
      <br>
      <div class="row">
          <div class="col">
              <?= esc($announce['description'], 'raw')?>
          </div>
      </div>
    </div>
    <div class="card col-md-4 m-2 p-2">
      <h4>Other Announcements</h4>
      <ul class="list-group list-group-flush">
        <?php foreach($announces as $ann):?>
          <a href="<?= base_url()?>/announcements/<?= $ann['link']?>" class="list-group-item list-group-item-action" style="background-color: transparent;"><?= $ann['title']?></a>
        <?php endforeach?>
      </ul>
    </div>
  </div>
</div>
<div class="container">
</div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>

<?= $this->endSection() ?>
    