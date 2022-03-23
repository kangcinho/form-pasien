$(document).ready(function(){
	$('#kewarganegaraan').on('keypress', function(e){
		// if(e.keyCode == 13){

		// }
	})
	$('#provinsi').on('change', function(e){

	})

	$('#kecamatan').on('change', function(e){
		$('#alamat_pasien').focus()
	})

	$('#alamat_pasien').on('keypress', function(e){
		if(e.keyCode == 13){
			$('#alamat_email').focus()
		}
	})
	$('#alamat_email').on('keypress', function(e){
		if(e.keyCode == 13){
			$('#nextIdentitasPasienII').focus()
		}
	})
	
	$('#nextIdentitasPasienII').on('keypress',function(e){
		if(e.keyCode == 13){
			$('#nextIdentitasPasienII').click()
		}
	})
})