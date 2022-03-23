$(document).ready(function(){
	$('#pekerjaan').on('keypress', function(e){
		if(e.keyCode == 13){
			$('#pendidikan').focus()
		}
	})
		
	$('#pendidikan').on('keypress', function(e){
		if(e.keyCode == 13){

		}
	})

	$('#hambatan_komunikasi').on('change', function(){

	})

	$('#suku').on('change', function(){
		$('#nextIdentitasPasienIII').focus()
	})

	$('#nextIdentitasPasienIII').on('keypress', function(e){
		if(e.keyCode == 13){
			$('#nextIdentitasPasienIII').click()
		}
	})
})