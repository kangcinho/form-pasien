$(document).ready(function(){
	$('#nama_pasien').on('change',function(){
		if($('#nama_pasien').val() == ''){
			$('#validasi_nama_pasien').removeClass('tidakTerlihat')
		}else{
			$('#validasi_nama_pasien').addClass('tidakTerlihat')
		}

		if(textOnly($('#nama_pasien').val())){
			$('#validasi_nama_pasien_a').addClass('tidakTerlihat')
		}else{
			$('#validasi_nama_pasien_a').removeClass('tidakTerlihat')
		}
	})

	$('#nama_alias_pasien').on('change',function(){
		if($('#nama_alias_pasien').val() == ''){
			$('#validasi_nama_alias_pasien').removeClass('tidakTerlihat')
		}else{
			$('#validasi_nama_alias_pasien').addClass('tidakTerlihat')
		}

		if(textOnly($('#nama_alias_pasien').val())){
			$('#validasi_nama_alias_pasien_a').addClass('tidakTerlihat')
		}else{
			$('#validasi_nama_alias_pasien_a').removeClass('tidakTerlihat')
		}
	})

	$('#nomor_identitas').on('change',function(){
		if($('#nomor_identitas').val() == ''){
			$('#validasi_nomor_identitas').removeClass('tidakTerlihat')
		}else{
			$('#validasi_nomor_identitas').addClass('tidakTerlihat')
		}

		if(noIdentitas($('#nomor_identitas').val())){
			$('#validasi_nomor_identitas_a').addClass('tidakTerlihat')
		}else{
			$('#validasi_nomor_identitas_a').removeClass('tidakTerlihat')
		}
	})

	$('#jenis_kelamin').on('change',function(){
		if($('#jenis_kelamin').val() == ''){
			$('#validasi_jenis_kelamin').removeClass('tidakTerlihat')
		}else{
			$('#validasi_jenis_kelamin').addClass('tidakTerlihat')
		}
	})

	$('#agama').on('change',function(){
		if($('#agama').val() == ''){
			$('#validasi_agama').removeClass('tidakTerlihat')
		}else{
			$('#validasi_agama').addClass('tidakTerlihat')
		}
	})

	$('#nomor_handphone').on('change',function(){
		if($('#nomor_handphone').val() == ''){
			$('#validasi_nomor_handphone').removeClass('tidakTerlihat')
		}else{
			$('#validasi_nomor_handphone').addClass('tidakTerlihat')
		}

		if(phoneNumber($('#nomor_handphone').val())){
			$('#validasi_nomor_handphone_a').addClass('tidakTerlihat')
		}else{
			$('#validasi_nomor_handphone_a').removeClass('tidakTerlihat')
		}
	})

	$('#tempat_lahir').on('change',function(){
		if($('#tempat_lahir').val() == ''){
			$('#validasi_tempat_lahir').removeClass('tidakTerlihat')
		}else{
			$('#validasi_tempat_lahir').addClass('tidakTerlihat')
		}

		if(textOnly($('#tempat_lahir').val())){
			$('#validasi_tempat_lahir_a').addClass('tidakTerlihat')
		}else{
			$('#validasi_tempat_lahir_a').removeClass('tidakTerlihat')
		}
	})

	$('#tgl_lahir').on('change',function(){
		if($('#tgl_lahir').val() == ''){
			$('#validasi_tgl_lahir').removeClass('tidakTerlihat')
		}else{
			$('#validasi_tgl_lahir').addClass('tidakTerlihat')
		}
	})

	$('#nextIdentitasPasienI').on('click', function(){
		if(cekValidasiIdentitasPasienI()){
			$('#segment_identitas_pasien_i').hide('')
			$('#navigasi_identitas_pasien_i').removeClass('active');

			$('#segment_identitas_pasien_ii').show('')
			$('#navigasi_identitas_pasien_ii').addClass('active');
			$('#kewarganegaraan').focus()
		}else{
			tambahInfoValidasiIdentitasPasienI()
		}
	})	
})

function tambahInfoValidasiIdentitasPasienI(){
	if($('#nama_pasien').val() == ''){
		$('#validasi_nama_pasien').removeClass('tidakTerlihat')
	}else{
		$('#validasi_nama_pasien').addClass('tidakTerlihat')
	}

	if($('#nama_alias_pasien').val() == ''){
		$('#validasi_nama_alias_pasien').removeClass('tidakTerlihat')
	}else{
		$('#validasi_nama_alias_pasien').addClass('tidakTerlihat')
	}

	if($('#nomor_identitas').val() == ''){
		$('#validasi_nomor_identitas').removeClass('tidakTerlihat')
	}else{
		$('#validasi_nomor_identitas').addClass('tidakTerlihat')
	}

	if($('#jenis_kelamin').val() == ''){
		$('#validasi_jenis_kelamin').removeClass('tidakTerlihat')
	}else{
		$('#validasi_jenis_kelamin').addClass('tidakTerlihat')
	}

	if($('#agama').val() == ''){
		$('#validasi_agama').removeClass('tidakTerlihat')
	}else{
		$('#validasi_agama').addClass('tidakTerlihat')
	}

	if($('#nomor_handphone').val() == ''){
		$('#validasi_nomor_handphone').removeClass('tidakTerlihat')
	}else{
		$('#validasi_nomor_handphone').addClass('tidakTerlihat')
	}

	if($('#tempat_lahir').val() == ''){
		$('#validasi_tempat_lahir').removeClass('tidakTerlihat')
	}else{
		$('#validasi_tempat_lahir').addClass('tidakTerlihat')
	}

	if($('#tgl_lahir').val() == ''){
		$('#validasi_tgl_lahir').removeClass('tidakTerlihat')
	}else{
		$('#validasi_tgl_lahir').addClass('tidakTerlihat')
	}

	if(textOnly($('#nama_pasien').val())){
		$('#validasi_nama_pasien_a').addClass('tidakTerlihat')
	}else{
		$('#validasi_nama_pasien_a').removeClass('tidakTerlihat')
	}

	if(textOnly($('#nama_alias_pasien').val())){
		$('#validasi_nama_alias_pasien_a').addClass('tidakTerlihat')
	}else{
		$('#validasi_nama_alias_pasien_a').removeClass('tidakTerlihat')
	}

	if(noIdentitas($('#nomor_identitas').val())){
		$('#validasi_nomor_identitas_a').addClass('tidakTerlihat')
	}else{
		$('#validasi_nomor_identitas_a').removeClass('tidakTerlihat')
	}

	if(phoneNumber($('#nomor_handphone').val())){
		$('#validasi_nomor_handphone_a').addClass('tidakTerlihat')
	}else{
		$('#validasi_nomor_handphone_a').removeClass('tidakTerlihat')
	}

	if(textOnly($('#tempat_lahir').val())){
		$('#validasi_tempat_lahir_a').addClass('tidakTerlihat')
	}else{
		$('#validasi_tempat_lahir_a').removeClass('tidakTerlihat')
	}
}

function cekValidasiIdentitasPasienI(){
	if($('#nama_pasien').val() == ''){
		return false;
	}else if($('#nama_alias_pasien').val() == ''){
		return false;
	}else if($('#nomor_identitas').val() == ''){
		return false;
	}else if($('#jenis_kelamin').val() == ''){
		return false;
	}else if($('#agama').val() == ''){
		return false;
	}else if($('#nomor_handphone').val() == ''){
		return false;
	}else if($('#tempat_lahir').val() == ''){
		return false;
	}else if($('#tgl_lahir').val() == ''){
		return false;
	}else if(!textOnly($('#nama_pasien').val())){
		// alert(1)
		return false;
	}else if(!textOnly($('#nama_alias_pasien').val())){
		// alert(2)
		return false;
	}else if(!noIdentitas($('#nomor_identitas').val())){
		// alert(3)
		return false;
	}else if(!phoneNumber($('#nomor_handphone').val())){
		// alert(4)
		return false;
	}else if(!textOnly($('#tempat_lahir').val())){
		// alert(5)
		return false;
	}

	return true;
}