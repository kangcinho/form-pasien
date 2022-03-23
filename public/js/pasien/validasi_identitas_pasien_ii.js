$(document).ready(function(){
	$('#kewarganegaraan').on('change', function(){
		if($('#kewarganegaraan').val() == '' ){
			$('#validasi_kewarganegaraan').removeClass('tidakTerlihat');
		}else{
			$('#validasi_kewarganegaraan').addClass('tidakTerlihat');
		}
	})
	$('#provinsi').on('change', function(){
		if($('#provinsi').val() == '' ){
			$('#validasi_provinsi').removeClass('tidakTerlihat');
		}else{
			$('#validasi_provinsi').addClass('tidakTerlihat');
		}
	})
	$('#kabupaten').on('change', function(){
		if($('#kabupaten').val() == '' ){
			$('#validasi_kabupaten').removeClass('tidakTerlihat');
		}else{
			$('#validasi_kabupaten').addClass('tidakTerlihat');
		}
	})
	$('#kecamatan').on('change', function(){
		if($('#kecamatan').val() == '' ){
			$('#validasi_kecamatan').removeClass('tidakTerlihat');
		}else{
			$('#validasi_kecamatan').addClass('tidakTerlihat');
		}
	})
	$('#alamat_pasien').on('change', function(){
		if($('#alamat_pasien').val() == '' ){
			$('#validasi_alamat_pasien').removeClass('tidakTerlihat');
		}else{
			$('#validasi_alamat_pasien').addClass('tidakTerlihat');
		}
	})

	$('#alamat_email').on('change', function(){
		if($('#alamat_email').val() == '' ){

		}else{
			if(email($('#alamat_email').val())){
				$('#validasi_alamat_email_a').addClass('tidakTerlihat');
			}else{
				$('#validasi_alamat_email_a').removeClass('tidakTerlihat');
			}
		}
	})

	$('#nextIdentitasPasienII').on('click', function(){
		if(cekValidasiIdentitasPasienII()){
			$('#segment_identitas_pasien_ii').hide('')
			$('#navigasi_identitas_pasien_ii').removeClass('active');

			$('#segment_identitas_pasien_iii').show('')
			$('#navigasi_identitas_pasien_iii').addClass('active');
			$('#pekerjaan').focus()
		}else{
			tambahInfoValidasiIdentitasPasienII()
		}
	})
})

function tambahInfoValidasiIdentitasPasienII(){
	if($('#kewarganegaraan').val() == '' ){
		$('#validasi_kewarganegaraan').removeClass('tidakTerlihat');
	}else{
		$('#validasi_kewarganegaraan').addClass('tidakTerlihat');
	}

	if($('#provinsi').val() == '' ){
		$('#validasi_provinsi').removeClass('tidakTerlihat');
	}else{
		$('#validasi_provinsi').addClass('tidakTerlihat');
	}

	if($('#kabupaten').val() == '' ){
		$('#validasi_kabupaten').removeClass('tidakTerlihat');
	}else{
		$('#validasi_kabupaten').addClass('tidakTerlihat');
	}

	if($('#kecamatan').val() == '' ){
		$('#validasi_kecamatan').removeClass('tidakTerlihat');
	}else{
		$('#validasi_kecamatan').addClass('tidakTerlihat');
	}

	if($('#alamat_pasien').val() == '' ){
		$('#validasi_alamat_pasien').removeClass('tidakTerlihat');
	}else{
		$('#validasi_alamat_pasien').addClass('tidakTerlihat');
	}

	if($('#alamat_email').val() == '' ){
		//Nothing to do
	}else{
		if(email($('#alamat_email').val())){
			$('#validasi_alamat_email_a').addClass('tidakTerlihat');
		}else{
			$('#validasi_alamat_email_a').removeClass('tidakTerlihat');
		}
	}
}

function cekValidasiIdentitasPasienII(){
	if($('#kewarganegaraan').val() == '' ){
		return false;
	}else if($('#provinsi').val() == '' ){
		return false;
	}else if($('#kecamatan').val() == '' ){
		return false;
	}else if($('#kabupaten').val() == '' ){
		return false;
	}else if($('#alamat_pasien').val() == '' ){
		return false;
	}else if($('#alamat_email').val() != '' ){
		if(!email($('#alamat_email').val())){
			return false;
		}
	}
	return true;
}
