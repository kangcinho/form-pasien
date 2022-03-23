$(document).ready(function(){
	$('#nama_pasien').on('keypress', function(e){
		if(e.keyCode == 13){
			$('#nama_alias_pasien').focus()
		}
	})
	$('#nama_alias_pasien').on('keypress', function(e){
		if(e.keyCode == 13){
			$('#nomor_identitas').focus()
		}
	})	
	$('#nomor_identitas').on('keypress', function(e){
		if(e.keyCode == 13){
			
		}
	})
	$('#jenis_kelamin').on('change', function(){

	})
	$('#agama').on('change', function(){
		$('#nomor_handphone').focus()
	})
	$('#nomor_handphone').on('keypress', function(e){
		if(e.keyCode == 13){
			$('#tempat_lahir').focus()
		}
	})
	$('#tempat_lahir').on('keypress', function(e){
		if(e.keyCode == 13){
			$('#tgl_lahir').focus()
		}
	})

	$('#tgl_lahir').on('change', function(e){
		
	})

	$('#nextIdentitasPasienI').on('keypress', function(e){
		if(e.keyCode == 13){
			$('#nextIdentitasPasienI').click()
		}
	})
})