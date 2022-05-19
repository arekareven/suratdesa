
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Penduduk
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data Penduduk</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Penduduk</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                   
                  
  </div>
</div>
                </form>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 30px;">No</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 130px;">NIK</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 201px;">Nama Lengkap</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 100px;">Jenis Kelamin</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 113px;">Tempat Lahir</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 113px;">Tanggal Lahir</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 80px;">Agama</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 200px;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                
                <?php
                if(isset($_GET['cari'])){
                    $cari = $_GET['cari'];
                    $row = "select * from warga where tempat_lahir like '%".$cari."%'";             
                }
               $no = 1;
            foreach($query->result() as $row){
                echo "
                <tr>
                    <td>".$no."</td>
                    <td>".$row->nik."</td>
                    <td>".$row->nama_lengkap."</td>
                    <td>".$row->jenis_kelamin."</td>
                    <td>".$row->tempat_lahir."</td>
                    <td>".$row->tanggal_lahir."</td>
                    <td>".$row->agama."</td>
                  <td>
                  <div class='btn-group'>
                  <button type='button' class='btn btn-warning'>Surat</button>
                  <button type='button' class='btn btn-warning dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                    <span class='caret'></span>
                    <span class='sr-only'>Toggle Dropdown</span>
                  </button>
                  <ul class='dropdown-menu' role='menu'>
                    <li><a href='sk_ktp?nik=".$row->nik."' target='_blank'>Surat Keterangan E-KTP</a></li>
                    <li><a href='sk_berpergian?nik=".$row->nik."' target='_blank'>Surat Keterangan Bepergian</a></li>
                    <li><a href='sk_belumpernahnikah?nik=".$row->nik."' target='_blank'>Surat Keterangan Belum Pernah Nikah</a></li>
                    <li><a href='sk_usaha?nik=".$row->nik."' target='_blank'>Surat Keterangan Usaha</a></li>
                    <li><a href='sk_tki?nik=".$row->nik."' target='_blank'>Surat Keterangan Administrasi TKI</a></li>
                    <li><a href='sk_kematian?nik=".$row->nik."' target='_blank'>Surat Keterangan Kematian</a></li>
                  </ul>
                </div>
                <a href ='#' class ='on-default edit-row btn btn-primary' data-toggle='modal' data-target='#custom-width-modal' onClick=\"SetInput('".$row->nik."','".$row->no_kk."','".$row->nama_lengkap."','".$row->jenis_kelamin."','".$row->tempat_lahir."','".$row->tanggal_lahir."','".$row->agama."','".$row->pendidikan."','".$row->jenis_pekerjaan."','".$row->status_perkawinan."','".$row->hubungan_keluarga."','".$row->kewarganegaraan."','".$row->no_paspor."','".$row->no_kitas."','".$row->nama_ayah."','".$row->nama_ibu."','".$row->nik_ayah."','".$row->nik_ibu."')\"><i class ='fa fa-pencil'></i></a>
                    <a href ='#' class ='on-default remove-row btn btn-danger' data-toggle='modal' data-target='#delete-modal'onClick=\"SetInput2('".$row->nik."')\"><i class ='fa fa-trash'></i></a>
                  </td>
                </tr>";$no++;
              }
              ?>
                
            </tbody>
                
              </table>
          </div>
      </div>
     
</div>
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
                <h4 class="modal-title" id="custom-width-modalLabel">Data Penduduk</h4>
            </div>

            <form action="<?php echo base_url(). 'data_penduduk/add'; ?>" method="post"class="form-horizontal" role="form">

            <div class="modal-body">
                    <div class="form-group">
                        <label class="col-md-3 control-label">No KK</label>
                        <div class="col-md-4">
                            <select type="text" class="form-control" id="no_kk" name="no_kk" readonly>
                            <?php
                            $query = $this->m_datakk->tampil_data();
                            foreach ($query->result() as $row) {
                                echo "<option value='".$row->no_kk."'>".$row->no_kk." | ".$row->nama_kk."</option>";
                            }
                            ?>
                            </select>
                        </div>
                    </div>                            
                    <div class="form-group">
                        <label class="col-md-3 control-label">NIK</label>
                        <div class="col-md-4">
                            <input type="number" class="form-control" id="nik" name="nik" required>
                        </div>
                    </div>                                    
                    <div class="form-group">
                        <label class="col-md-3 control-label">Nama Lengkap</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Jenis Kelamin</label>
                        <div class="col-md-3">
                            <select type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                            <?php
                            $opt = array('Laki-laki', 'Perempuan');
                            foreach ($opt as $key => $val) {
                                echo "<option value='".$val."'>".$val."</option>";
                            }
                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Tempat Lahir</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Tanggal Lahir</label>
                        <div class="col-md-3">
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Agama</label>
                        <div class="col-md-3">
                            <select type="text" class="form-control" id="agama" name="agama" required>
                            <?php
                            $opt = array('Islam', 'Kristen', 'Katolik', 'Buddha', 'Hindu', 'Kong Hu Chu');
                            foreach ($opt as $key => $val) {
                                echo "<option value='".$val."'>".$val."</option>";
                            }
                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Pendidikan</label>
                        <div class="col-md-4">
                            <select type="text" class="form-control" id="pendidikan" name="pendidikan" required>
                            <?php
                            $opt = array('SD/Sederajat', 'SLTP/Sederajat', 'SLTA/Sederajat', 'S1/Sarjana', 'S2/Master', 'S3/Doktor');
                            foreach ($opt as $key => $val) {
                                echo "<option value='".$val."'>".$val."</option>";
                            }
                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Jenis Pekerjaan</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="jenis_pekerjaan" name="jenis_pekerjaan" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label">Status Perkawinan</label>
                        <div class="col-md-4">
                            <select type="text" class="form-control" id="status_perkawinan" name="status_perkawinan" required>
                            <?php
                            $opt = array('Kawin', 'Belum Kawin','Cerai Mati','Cerai Hidup');
                            foreach ($opt as $key => $val) {
                                echo "<option value='".$val."'>".$val."</option>";
                            }
                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Hubungan Keluarga</label>
                        <div class="col-md-4">
                            <select type="text" class="form-control" id="hubungan_keluarga" name="hubungan_keluarga" required>
                            <?php
                            $opt = array('Kepala Keluarga','Istri', 'Anak', 'Kerabat');
                            foreach ($opt as $key => $val) {
                                echo "<option value='".$val."'>".$val."</option>";
                            }
                            ?>
                            </select>
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Kewarganegaraan</label>
                        <div class="col-md-2">
                            <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">No. Paspor</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="no_paspor" name="no_paspor">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">No. KITAS</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="no_kitas" name="no_kitas">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Nama Ayah</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Nama Ibu</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">NIK Ayah</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="nik_ayah" name="nik_ayah" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">NIK Ibu</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="nik_ibu" name="nik_ibu" required>
                        </div>
                    </div>
                             
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
            </div>
        </form>
        </div><!-- /.modal-content -->
    </div>

    <div id="delete-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog" style="width:55%;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="custom-width-modalLabel">Konfirmasi Hapus</h4>
                                                    </div>
                                                    <form action="<?php echo base_url(). 'data_penduduk/delete'; ?>" method="post" class="form-horizontal" role="form">
                                                    <div class="modal-body">
                                                        <p>Apakah anda yakin ingin menghapus?</p>
                                                            <div>
                                                                <input type="hidden" id="id_warga2" name="id_warga2">
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
    function SetInput(nik, no_kk, nama_lengkap, jenis_kelamin, tempat_lahir, tanggal_lahir, agama, pendidikan, jenis_pekerjaan, status_perkawinan, hubungan_keluarga, kewarganegaraan, no_paspor, no_kitas, nama_ayah, nama_ibu, nik_ayah, nik_ibu){
        document.getElementById('no_kk').value = no_kk;
        document.getElementById('nik').value = nik;
        document.getElementById('nama_lengkap').value = nama_lengkap;
        document.getElementById('jenis_kelamin').value = jenis_kelamin;
        document.getElementById('tempat_lahir').value = tempat_lahir;
        document.getElementById('tanggal_lahir').value = tanggal_lahir;
        document.getElementById('agama').value = agama;
        document.getElementById('pendidikan').value = pendidikan;
        document.getElementById('jenis_pekerjaan').value = jenis_pekerjaan;
        document.getElementById('status_perkawinan').value = status_perkawinan;
        document.getElementById('hubungan_keluarga').value = hubungan_keluarga;
        document.getElementById('kewarganegaraan').value = kewarganegaraan;
        document.getElementById('no_paspor').value = no_paspor;
        document.getElementById('no_kitas').value = no_kitas;
        document.getElementById('nama_ayah').value = nama_ayah;
        document.getElementById('nama_ibu').value = nama_ibu;
        document.getElementById('nik_ayah').value = nik_ayah;
        document.getElementById('nik_ibu').value = nik_ibu;
    }
    function SetInput2(id_warga){
        document.getElementById('id_warga2').value = id_warga;
    }

    function ResetInput(id_warga, nik, no_kk,nama_lengkap, jenis_kelamin, tempat_lahir, tanggal_lahir, agama, pendidikan, jenis_pekerjaan, status_perkawinan, hubungan_keluarga, kewarganegaraan, no_paspor, no_kitas, nama_ayah, nama_ibu, nik_ayah, nik_ibu){
        document.getElementById('id_warga').value = "";
        document.getElementById('nik').value = "";
        document.getElementById('nama_lengkap').value = "";
        document.getElementById('jenis_kelamin').value = "";
        document.getElementById('tempat_lahir').value = "";
        document.getElementById('tanggal_lahir').value = "";
        document.getElementById('agama').value = "";
        document.getElementById('pendidikan').value = "";
        document.getElementById('jenis_pekerjaan').value = "";
        document.getElementById('status_perkawinan').value = "";
        document.getElementById('hubungan_keluarga').value = "";
        document.getElementById('kewarganegaraan').value = "";
        document.getElementById('no_paspor').value = "";
        document.getElementById('no_kitas').value = "";
        document.getElementById('nama_ayah').value = "";
        document.getElementById('nama_ibu').value = "";
        document.getElementById('nik_ayah').value = "";
        document.getElementById('nik_ibu').value = "";
    }
</script>                                        

  <script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>




