<section class="content-header ml-4">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1><?= $title ?></h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a class="text-secondary" href="<?= site_url('') ?>"><span class="badge badge-outline-secondary">Kembali</span></a></li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>





    <section class="content">
    <div id="flash" data-flash="<?= $this->session->flashdata('pesan') ?>">
      <div id="flasherr" data-flasherr="<?= $this->session->flashdata('error') ?>">
        <!-- Default box -->
        <div class="card">
          <div class="card-header" style="background-color:RGB(40, 178, 170);">
            <h3 class="card-title  text-light"></h3>
             
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="card">
              <div class="card-header">
              <div class="row">
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <a href="<?= base_url('Departement/Add')?>" class="btn btn-sm btn-outline-info mb-3">Tambah Data</a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                     <th scope="col" style="width:5%">No</th>
                      <th scope="col">Nama Departement</th>
                      <th scope="col" style="width:5%">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; foreach ($row as $key => $value) { ?>
                   <tr>
                     <td><?= $no++?></td>
                     <td><?= $value->nama?></td>
                     <td>
                        <a href="<?= base_url('Departement/edit/'.$value->id_departement) ?>" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></a>
                         <a href="<?= base_url('Departement/delete/'.$value->id_departement) ?>" class="btn btn-xs btn-danger" id="btn-hapus"><i class="fa fa-trash"></i></a>
                     </td>
                   </tr>
                 <?php } ?>
                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <!-- <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p> -->
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->

  </section>