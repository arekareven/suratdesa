<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data KK
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row scroll">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Kartu Keluarga</h3>
                <div style="width:100%; text-align:right; margin-bottom:10px;">
                                    <a href="#" class="on-default edit-row btn btn-success" data-toggle="modal" data-target="#custom-width-modal" onClick="ResetInput()"><i class="fa fa-plus"></i></a>

                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No KK</th>
                        <th>Nama KK</th>
                        <th>Dusun</th>
                        <th>RT</th>
                        <th>RW</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $no = 1;
                        foreach($query->result() as $row){
                            echo "
                            <tr>
                                <td>".$no."</td>
                                <td>".$row->no_kk."</td>
                                <td>".$row->nama_kk."</td>
                                <td>".$row->dusun."</td>
                                <td>".$row->rt."</td>
                                <td>".$row->rw."</td>
                                <td>
                                    <a href ='".base_url('data_penduduk/detail?no_kk='.$row->no_kk)."' class ='on-default edit-row btn btn-success' title='Daftar Warga' target='_blank'><i class ='fa fa-search'></i></a>
                                    <a href ='#' class ='on-default edit-row btn btn-primary' data-toggle='modal' data-target='#custom-width-modal' onClick=\"SetInput('".$row->no_kk."','".$row->nama_kk."','".$row->dusun."','".$row->rt."','".$row->rw."')\"><i class ='fa fa-pencil'></i></a>
                                    <a href ='#' class ='on-default remove-row btn btn-danger' data-toggle='modal' data-target='#delete-modal' onClick=\"SetInput2('".$row->no_kk."','".$row->nama_kk."','".$row->dusun."','".$row->rt."','".$row->rw."')\"><i class ='fa fa-trash'></i></a>
                                </td>                          
                            </tr>"; $no++;
                        } 
                    ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    
    <!-- /.content -->
  </div>

  <div id="custom-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width:55%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="custom-width-modalLabel">Data KK</h4>
            </div>
        <form action="<?php echo base_url(). 'data_kk/add'; ?>" method="post"class="form-horizontal" role="form">
            <div class="modal-body">                                   
                <div class="form-group">
                    <label class="col-md-3 control-label">No KK</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="no_kk" name="no_kk" required>
                        </div>
                </div>                                    
                <div class="form-group">
                    <label class="col-md-3 control-label">Nama KK</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="nama_kk" name="nama_kk" required>
                        </div>
                </div>                                    
                <div class="form-group">
                    <label class="col-md-3 control-label">Dusun</label>
                    <div class="col-md-4">
                        <select type="text" class="form-control" id="dusun" name="dusun" required>
                        <?php
                        $opt = array('Sidorejo', 'Kedungglagah 1', 'Kedungglagah 2');
                        foreach ($opt as $key => $val) {
                            echo "<option value='".$val."'>".$val."</option>";
                        }
                        ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">RT</label>
                    <div class="col-md-2">
                        <input type="number" min="1" class="form-control" style="text-align: right;" id="rt" name="rt">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">RW</label>
                    <div class="col-md-2">
                    <input type="number" min="1" class="form-control" style="text-align: right;" id="rw" name="rw" required>
                    </div>
                </div>             
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
            </div>
        </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

         <div id="delete-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog" style="width:55%;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="custom-width-modalLabel">Konfirmasi Hapus</h4>
                                                    </div>
                                                    <form action="<?php echo base_url(). 'data_kk/delete'; ?>" method="post" class="form-horizontal" role="form">
                                                    <div class="modal-body">
                                                        <p>Apakah anda yakin ingin menghapus?</p>
                                                            <div>
                                                                <input type="hidden" id="id_kk2" name="id_kk2">
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Tidak</button>
                                                        <button type="submit" class="btn btn-success waves-effect waves-light">Ya</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->            

<script type="text/javascript">
    function SetInput(no_kk, nama_kk, dusun, rt, rw){
        document.getElementById('no_kk').value = no_kk;
        document.getElementById('nama_kk').value = nama_kk;
        document.getElementById('dusun').value = dusun;
        document.getElementById('rt').value = rt;
        document.getElementById('rw').value = rw;
    }
    function SetInput2(id_kk,no_kk, nama_kk, dusun, rt, rw){
        document.getElementById('id_kk2').value = id_kk;
        document.getElementById('no_kk2').value = no_kk;
        document.getElementById('nama_kk2').value = nama_kk;
        document.getElementById('dusun2').value = dusun;
        document.getElementById('rt').value = rt;
        document.getElementById('rw').value = rw;
    }

    function ResetInput(id_kk,no_kk, nama_kk, dusun, rt, rw){
        document.getElementById('id_kk').value = "";
        document.getElementById('no_kk').value = "";
        document.getElementById('nama_kk').value = "";
        document.getElementById('dusun').value = "";
        document.getElementById('rt').value = "";
        document.getElementById('rw').value = "";
    }
</script>