$(document).ready(function(){
	$('#nomor_anggota').on('keypress', function(e){
		if(e.keyCode == 13){

		}
	})
	$('#nama_perusahaan').on('change', function(){

	})

	$('#kelompok_anggota').on('change', function(){
		
	})

	$('#kelas_pertanggungan').on('change', function(){
		$('#nomor_anggota_penanggung_jawab').focus()
	})

	$('#nomor_anggota_penanggung_jawab').on('keypress', function(e){
		if(e.keyCode == 13){
			$('#nama_anggota_penanggung_jawab').focus()
		}
	})
	
	$('#nama_anggota_penanggung_jawab').on('keypress', function(e){
		if(e.keyCode == 13){
			
		}
	})

	$('#jenis_kelamin_anggota_penanggung_jawab').on('change', function(){
		$('#nextDataKerjasama').focus()
	})
	$('#nextDataKerjasama').on('keypress', function(e){
		if(e.keyCode == 13){
			$('#nextDataKerjasama').click()
		}
	})
})