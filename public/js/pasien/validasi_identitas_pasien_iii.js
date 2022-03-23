$(document).ready(function(){
	$('#pekerjaan').on('change', function(){
		if($('#pekerjaan').val() == ''){
			$('#validasi_pekerjaan').removeClass('tidakTerlihat')
		}else{
			$('#validasi_pekerjaan').addClass('tidakTerlihat')
		}

		// if(textOnly($('#pekerjaan').val())){
		// 	$('#validasi_pekerjaan_a').addClass('tidakTerlihat')
		// }else{
		// 	$('#validasi_pekerjaan_a').removeClass('tidakTerlihat')
		// }
	})

	$('#pendidikan').on('change', function(){
		if($('#pendidikan').val() == ''){
			$('#validasi_pendidikan').removeClass('tidakTerlihat')
		}else{
			$('#validasi_pendidikan').addClass('tidakTerlihat')
		}
	})

	$('#hambatan_komunikasi').on('change', function(){
		if($('#hambatan_komunikasi').val() == ''){
			$('#validasi_hambatan_komunikasi').removeClass('tidakTerlihat')
		}else{
			$('#validasi_hambatan_komunikasi').addClass('tidakTerlihat')
		}
	})

	$('#suku').on('change', function(){
		if($('#suku').val() == ''){
			$('#validasi_suku').removeClass('tidakTerlihat')
		}else{
			$('#validasi_suku').addClass('tidakTerlihat')
		}
	})

	$('#nextIdentitasPasienIII').on('click', function(){
		if(cekValidasiIdentitasPasienIII()){
			$('#segment_identitas_pasien_iii').hide('')
			$('#navigasi_identitas_pasien_iii').removeClass('active');
			$('#segment_penanggung_jawab_pasien').show('')
			$('#navigasi_penanggung_jawab_pasien').addClass('active');
		}else{
			tambahInfoValidasiIdentitasPasienIII()
		}
	})
})

function tambahInfoValidasiIdentitasPasienIII(){
	if($('#pekerjaan').val() == ''){
		$('#validasi_pekerjaan').removeClass('tidakTerlihat')
	}else{
		$('#validasi_pekerjaan').addClass('tidakTerlihat')
	}

	if($('#pendidikan').val() == ''){
		$('#validasi_pendidikan').removeClass('tidakTerlihat')
	}else{
		$('#validasi_pendidikan').addClass('tidakTerlihat')
	}

	if($('#hambatan_komunikasi').val() == ''){
		$('#validasi_hambatan_komunikasi').removeClass('tidakTerlihat')
	}else{
		$('#validasi_hambatan_komunikasi').addClass('tidakTerlihat')
	}

	if($('#suku').val() == ''){
		$('#validasi_suku').removeClass('tidakTerlihat')
	}else{
		$('#validasi_suku').addClass('tidakTerlihat')
	}

	if(textOnly($('#pekerjaan').val())){
		$('#validasi_pekerjaan_a').addClass('tidakTerlihat')
	}else{
		$('#validasi_pekerjaan_a').removeClass('tidakTerlihat')
	}
}

function cekValidasiIdentitasPasienIII(){
	if($('#pekerjaan').val() == ''){
		return false
	}else if($('#pendidikan').val() == ''){
		return false
	}else if($('#hambatan_komunikasi').val() == ''){
		return false
	}else if($('#suku').val() == ''){
		return false
	}
	// }else if(!textOnly($('#pekerjaan').val())){
	// 	return false
	// }

	return true;
}
