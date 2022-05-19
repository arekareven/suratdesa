<div class="content-wrapper">
	<section class="content-header">
		<h1>Surat Keterangan Ahli Waris</h1>
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url('beranda'); ?>"><i class="fa fa-dashboard"></i> Beranda </a></li>
				<li><a href="<?php echo base_url('surat_keterangan'); ?>"> Daftar Cetak Surat Keterangan</a></li>
				<li class="active">Surat Keterangan Ahli Waris</li>
			</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header with-border">
						<a href="<?php echo base_url('data_penduduk'); ?>" class="btn btn-social btn-flat btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"  title="Kembali Ke Daftar Wilayah">
							<i class="fa fa-arrow-circle-left "></i>Kembali Ke Daftar Cetak Surat Keterangan
           				</a>
					</div>
					<div class="box-body">
						<form action="" id="main" name="main" method="POST" class="form-horizontal">
						<div class="form-group">
							<label for="nik"  class="col-sm-3 control-label">NIK</label>
							<div class="col-sm-6 col-lg-4">
							<input id="nik" class="form-control input-sm digits required" type="text" placeholder="NIK" name="nik" min="16" max="16">
						</div>
					</div>						
	<div class="form-group konfirmasi">
		<label for="keperluan"  class="col-sm-3 control-label">Nama</label>
			<div class="col-sm-3">
				<input class="form-control input-sm" name="nama_lengkap" type="text" readonly>
			</div>
	</div>

	<div class="form-group konfirmasi">
		<label for="keperluan"  class="col-sm-3 control-label">Tempat  / Tanggal Lahir / Umur</label>
			<div class="col-sm-4">
				<input class="form-control input-sm" name="tempat_lahir" type="text" readonly>
			</div>
			<div class="col-sm-2">
				<input class="form-control input-sm" name="tanggal_lahir" type="text" readonly>
			</div>
	</div>

	<div class="form-group konfirmasi">
		<label for="keperluan"  class="col-sm-3 control-label">Jenis Kelamin</label>
			<div class="col-sm-3">
				<input class="form-control input-sm" name="jenis_kelamin" type="text" readonly>
			</div>
	</div>		

	<div class="form-group konfirmasi">
		<label for="keperluan"  class="col-sm-3 control-label">Pekerjaan / Warga Negara /Agama</label>
			<div class="col-sm-2">
				<input class="form-control input-sm" name="jenis_pekerjaan" type="text" readonly>
			</div>
			<div class="col-sm-2">
				<input class="form-control input-sm" name="kewarganegaraan" type="text" readonly>
			</div>
			<div class="col-sm-2">
				<input class="form-control input-sm" name="agama" type="text" readonly>
			</div>
	</div>

	<div class="form-group konfirmasi">
		<label for="keperluan"  class="col-sm-3 control-label">Status Perkawinan</label>
			<div class="col-sm-3">
				<input class="form-control input-sm" name="status_perkawinan" type="text" readonly>
			</div>
	</div>	

	<div class="form-group konfirmasi">
		<label for="keperluan"  class="col-sm-3 control-label">Alamat / RT / RW </label>
			<div class="col-sm-4">
			 <input class="form-control input-sm" name="dusun" type="text" readonly>
			</div>
			<div class="col-sm-1">
			 	<input class="form-control input-sm" name="rt" type="text" readonly>
			</div>
			<div class="col-sm-1">
			 	<input class="form-control input-sm" name="rw" type="text" readonly>
			</div>
	</div>

	<div class="form-group">
		<label for="nomor" class="col-sm-3 control-label">Nomor Surat</label>
			<div class="col-sm-4">
				<input id="nomor" class="form-control input-sm digits required" type="text" placeholder="Nomor Surat" name="nomor" value="474.2/000/404.319.04/2019">
			</div>
			<div class="col-sm-4">
				<p class="help-block"><em>Format nomor surat: </em><span id="format_nomor">474.2/000(Nomor Urut)/404.319.04/2019(Tahun)</span></p>
			</div>
	</div>
	
</div>



	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.js"></script>
    <script type="text/javascript">
    	$('#nik').val(<?php echo $_GET['nik']; ?>);
        $(document).ready(function(){
             $('#nik').on('click',function(){
               	var nik=$(this).val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('SK_ahliwaris/get_warga')?>",
                    dataType : "JSON",
                    data : {nik: nik},
                    cache:false,
                    success: function(data){
                        $.each(data,function(nik, nama_lengkap, tempat_lahir, tanggal_lahir,jenis_kelamin, dusun, rt, rw, jenis_pekerjaan, kewarganegaraan, agama){
                            $('[name="nama_lengkap"]').val(data.nama_lengkap);
                            $('[name="tempat_lahir"]').val(data.tempat_lahir);
                            $('[name="tanggal_lahir"]').val(data.tanggal_lahir);
                            $('[name="jenis_kelamin"]').val(data.jenis_kelamin);
							$('[name="jenis_pekerjaan"]').val(data.jenis_pekerjaan);
							$('[name="kewarganegaraan"]').val(data.kewarganegaraan);
							$('[name="status_perkawinan"]').val(data.status_perkawinan);
							$('[name="agama"]').val(data.agama);
							$('[name="dusun"]').val(data.dusun);
							$('[name="rt"]').val(data.rt);
							$('[name="rw"]').val(data.rw);
							$('[name="nik2"]').val(data.nik);
                        });
                         
                    }
                });
                return false;
           });
        });
    </script>
</form>
</div>

<div class="box-footer">
	<div class="row">
		<div class="col-xs-12">
			<button type="reset" onclick="$('#validasi').trigger('reset');" class="btn btn-social btn-flat btn-danger btn-sm"><i class="fa fa-times"></i> Batal</button>
			<form action="<?php echo base_url('sk_ahliwaris/redirectLaporan'); ?>" method="POST">
				<input type="hidden" name="nik2" id="nik2">
				<button type="submit" class="btn btn-social btn-flat btn-success btn-sm pull-right" style="margin-right: 5px;"><i class="fa fa-file-text"></i> Ekspor Dok</button>
			</form>
		</div>
	</div>
</div>
				</div>
			</div>
		</div>
	</section>
</div>

<script>

	function reset(){

	}
</script>