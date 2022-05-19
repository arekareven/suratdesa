
                <!-- Page-Title -->
                

 <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title m-b-30"><b>Data Warga</b></h4>
                            <div style="width:100%; text-align:right; margin-bottom:10px;">
                                <a href="#" class="on-default edit-row btn btn-success" data-toggle="modal" data-target="#custom-width-modal"><i class="fa fa-plus"></i></a>

                            </div>

                            <table id="datatable" class="table table-striped table-bordered" >
                                <thead font-size="5pt">
                                <tr>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>TTL</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Agama</th>
                                    <th>Pendidikan</th>
                                    <th>Status Perkawinan</th>
                                    <th>Pekerjaan</th>
                                    <th>Kewarganegaraan</th>
                                    <th>Nama Ayah</th>
                                    <th>Nama Ibu</th>
                                    <th>Hubungan Keluarga</th>
                                    <th>Aksi</th>
                                    

                                </tr>
                                </thead>


                                <tbody>
                                <tr>
                                    <td>065637447564384</td>
                                    <td>098752345788223</td>
                                    <td>Yanto</td>
                                    <td>Arianto</td>
                                    <td>Madiun, 23/05/1999</td>
                                    <td>Islam</td>
                                    <td>SMA</td>
                                    <td>Pelajar</td>
                                    <td>Sutarjo</td>
                                    <td>Suminem</td>
                                    <td>Ds. Bagor Kab. Kediri</td>
                                    <td>Laki-laki</td>
                                    <td>Belum Nikah</td>
                                    <td><a href="#" class="on-default edit-row btn btn-primary" data-toggle="modal" data-target="#custom-width-modal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="on-default remove-row btn btn-danger" data-toggle="modal" data-target="#delete-modal"><i class="fa fa-trash-o"></i></a>
                                </td>
                                </tr>
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- end row -->
                <div id="custom-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width:55%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="custom-width-modalLabel">Data Warga</h4>
            </div>
        <form class="form-horizontal" role="form"> 
            <div class="modal-body">                                   
                    <div class="form-group">
                        <label class="col-md-3 control-label">Nama Pegawai</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="namaPegawai" name="namaPegawai" required>
                        </div>
                    </div>                                    
                    <div class="form-group">
                        <label class="col-md-3 control-label">Alamat</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                    </div>                                    
                    <div class="form-group">
                        <label class="col-md-3 control-label">No HP</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="noHP" name="noHP" required>
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
            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Tidak</button>
                <button type="button" class="btn btn-success waves-effect waves-light">Ya</button>
            </div>
        </div>
</div> <!-- container -->

        </div> 

            