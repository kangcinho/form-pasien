$(document).ready(function(){
	$('#nomor_rm').on('keypress',function(e){
		if(e.keyCode == 13){
			$('#nama_penanggung_jawab_pasien').focus()
		}
	})

	$('#nama_penanggung_jawab_pasien').on('keypress',function(e){
		if(e.keyCode == 13){
			$('#alamat_penanggung_jawab_pasien').focus()
		}
	})
	$('#alamat_penanggung_jawab_pasien').on('keypress',function(e){
		if(e.keyCode == 13){
			$('#pekerjaan_penanggung_jawab').focus()
		}		
	})
	$('#pekerjaan_penanggung_jawab').on('keypress',function(e){
		if(e.keyCode == 13){
			$('#nomor_ktp_penanggung_jawab_pasien').focus()
		}			
	})
	$('#nomor_ktp_penanggung_jawab_pasien').on('keypress',function(e){
		if(e.keyCode == 13){
			$('#nomor_handphone_penanggung_jawab').focus()
		}			
	})
	$('#nomor_handphone_penanggung_jawab').on('keypress',function(e){
		
	})
	$('#hubungan_penanggung_dengan_pasien').on('change',function(){
		$('#nextPenanggungJawabPasien').focus()
	})
	$('#nextPenanggungJawabPasien').on('keypress',function(e){
		if(e.keyCode == 13){
			$('#nextPenanggungJawabPasien').click()
		}
	})
})