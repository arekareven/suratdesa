<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         History
      </h1>
      
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row scroll">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data History</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nomor Surat</th>
                    <th>Tanggal Surat</th>
                    <th>Nama Surat</th>
                    <th>Nama Warga</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                $warga = $this->db->query("SELECT * FROM surat WHERE nama_surat='Surat Keterangan KTP'");
        foreach ($warga->result() as $row){
                    echo "
                    <tr>
                        <td>".$no."</td>
                        <td>".$row->no_surat."</td>
                        <td>".$row->tanggal_surat."</td>
                        <td>".$row->nama_surat."</td>
                        <td>".$row->nama."</td>                       
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

  