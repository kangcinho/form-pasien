$(document).ready(function(){
	$('#nomor_anggota').on('change',function(){
		if($('#nomor_anggota').val() == ''){
			$('#validasi_nomor_anggota').removeClass('tidakTerlihat')
		}else{
			$('#validasi_nomor_anggota').addClass('tidakTerlihat')
		}

		// if(numberOnly($('#nomor_anggota').val())){
		// 	$('#validasi_nomor_anggota_a').addClass('tidakTerlihat')
		// }else{
		// 	$('#validasi_nomor_anggota_a').removeClass('tidakTerlihat')
		// }
	})

	$('#nama_perusahaan').on('change',function(){
		if($('#nama_perusahaan').val() == ''){
			$('#validasi_nama_perusahaan').removeClass('tidakTerlihat')
		}else{
			$('#validasi_nama_perusahaan').addClass('tidakTerlihat')
		}
	})

	$('#nama_perusahaan').on('change', function(){
		// alert($(this).val())
		if($("#bpjs").is(":checked")){
			let namaPerusahaan = $('#nama_perusahaan').val().split("&kangcinho&")[1];
			if(namaPerusahaan == "1587"){
				$('#kelas_pertanggungan_div').dropdown('set selected', '14')
			}else if(namaPerusahaan == "1678"){
					$('#kelas_pertanggungan_div').dropdown('set selected', '17')
			}else{
					$('#kelas_pertanggungan_div').dropdown('set selected', '18')
			}
		}
	})

	// $('#kelompok_anggota').on('change',function(){
	// 	if($('#kelompok_anggota').val() == ''){
	// 		$('#validasi_kelompok_anggota').removeClass('tidakTerlihat')
	// 	}else{
	// 		$('#validasi_kelompok_anggota').addClass('tidakTerlihat')
	// 	}
	// })

	if($('#bpjs').is(':checked')){
		$('#kelas_pertanggungan').on('change',function(){
			if($('#kelas_pertanggungan').val() == ''){
				$('#validasi_kelas_pertanggungan').addClass('tidakTerlihat')
			}else{
				$('#validasi_kelas_pertanggungan').addClass('tidakTerlihat')
			}
		})
	}

	$('#nextDataKerjasama').on('click', function(){
		if(cekValidasiKerjasama()){
			$('#segment_data_kerjasama').hide('')
			$('#navigasi_data_kerjasama').removeClass('active');

			$('#segment_identitas_pasien_i').show('')
			$('#navigasi_identitas_pasien_i').addClass('active');
			$('#nama_pasien').focus()
		}else{
			tambahInfoValidasiDataKerjasama();
		}
	})
})

function cekValidasiKerjasama(){
	if($('#nomor_anggota').val() == ''){
		return false;
	}else if($('#nama_perusahaan').val() == ''){
		return false;
	}else if($('#bpjs').is(':checked')){
		if($('#kelas_pertanggungan').val() == ''){
			return false;
		}
	}
	// }else if(!numberOnly($('#nomor_anggota').val())){
	// 	return false;
	// }
	return true;
}


function tambahInfoValidasiDataKerjasama(){
	if($('#nomor_anggota').val() == ''){
		$('#validasi_nomor_anggota').removeClass('tidakTerlihat')
	}else{
		$('#validasi_nomor_anggota').addClass('tidakTerlihat')
	}

	if($('#nama_perusahaan').val() == ''){
		$('#validasi_nama_perusahaan').removeClass('tidakTerlihat')
	}else{
		$('#validasi_nama_perusahaan').addClass('tidakTerlihat')
	}

	// if($('#kelompok_anggota').val() == ''){
	// 	$('#validasi_kelompok_anggota').removeClass('tidakTerlihat')
	// }else{
	// 	$('#validasi_kelompok_anggota').addClass('tidakTerlihat')
	// }

	if($('#bpjs').is(':checked')){
		if($('#kelas_pertanggungan').val() == ''){
			$('#validasi_kelas_pertanggungan').removeClass('tidakTerlihat')
		}else{
			$('#validasi_kelas_pertanggungan').addClass('tidakTerlihat')
		}
	}

	// if(numberOnly($('#nomor_anggota').val())){
	// 	$('#validasi_nomor_anggota_a').addClass('tidakTerlihat')
	// }else{
	// 	$('#validasi_nomor_anggota_a').removeClass('tidakTerlihat')
	// }
}
