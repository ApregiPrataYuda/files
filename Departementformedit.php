<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h3><span class="badge badge-secondary"><?= $title?></span></h3>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a class="text-info" href="<?=site_url('Kategori_products')?>"><u class="badge badge-secondary">Kembali ke Kategori</u> </a></li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>


<section class="content  col-md-12">

  <!-- general form elements disabled -->
  <div class="card card-secondary">
    <div class="card-header" style="background-color:RGB(40, 178, 170);">
      <h3 class="card-title text-light">Update Data</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form action="<?= base_url('Departement/proses')?>" method="post">
        <div class="row">

        <div class="col-md-6 mt-2 <?= form_error('nama') ? '' : null ?>">
            <label for="nama"><span> Nama Departement*</span> </label>
            <input type="hidden" name="id_departement" value="<?= $row->id_departement ?>">
            <input type="text" class="form-control" value="<?= $row->nama ?>" name="nama" id="nama" placeholder="Nama Departement">
            <small class="text-danger" style="font-style: italic "><span class="badge badge-danger"><?= form_error('nama') ?></span></small>
          </div>
        </div>

      
        <div class="row ml-auto mb-3 mr-5 mt-3">
          <button type="submit" name="edit" class="btn btn-outline-secondary btn-sm ml-2"> <i class="fa fa-save"></i> Simpan</button>
          <button type="Reset" class="btn btn-outline-warning btn-sm ml-2"><i class="fa fa-undo"></i> Reset</button>
        </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
</section>