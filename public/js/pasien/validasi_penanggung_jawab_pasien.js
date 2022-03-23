$(document).ready(function(){
	$('#apa_penanggung_punya_nrm').on('change', function(){
		if($('#apa_penanggung_punya_nrm').is(':checked')){
			$('#search_nomor_rm').removeClass('disabled')
		}else{
			$('#search_nomor_rm').addClass('disabled')
			$('#nomor_rm').val(null)
			if(!$('#validasi_nomor_rm').hasClass('tidakTerlihat')){
				$('#validasi_nomor_rm').addClass('tidakTerlihat')
			}
		}
	})

	if($('#apa_penanggung_punya_nrm').is(':checked')){
		$('#search_nomor_rm').removeClass('disabled')
	}else{
		$('#search_nomor_rm').addClass('disabled')
	}

	$('#nama_penanggung_jawab_pasien').on('change', function(){
		if($('#nama_penanggung_jawab_pasien').val() == ''){
			$('#validasi_nama_penanggung_jawab_pasien').removeClass('tidakTerlihat')
		}else{
			$('#validasi_nama_penanggung_jawab_pasien').addClass('tidakTerlihat')
		}

		if(textOnly($('#nama_penanggung_jawab_pasien').val())){
			$('#validasi_nama_penanggung_jawab_pasien_a').addClass('tidakTerlihat')
		}else{
			$('#validasi_nama_penanggung_jawab_pasien_a').removeClass('tidakTerlihat')
		}
	})

	$('#alamat_penanggung_jawab_pasien').on('change', function(){
		if($('#alamat_penanggung_jawab_pasien').val() == ''){
			$('#validasi_alamat_penanggung_jawab_pasien').removeClass('tidakTerlihat')
		}else{
			$('#validasi_alamat_penanggung_jawab_pasien').addClass('tidakTerlihat')
		}
	})

	$('#pekerjaan_penanggung_jawab').on('change', function(){
		if($('#pekerjaan_penanggung_jawab').val() == ''){
			$('#validasi_pekerjaan_penanggung_jawab').removeClass('tidakTerlihat')
		}else{
			$('#validasi_pekerjaan_penanggung_jawab').addClass('tidakTerlihat')
		}

		// if(textOnly($('#pekerjaan_penanggung_jawab').val())){
		// 	$('#validasi_pekerjaan_penanggung_jawab_a').addClass('tidakTerlihat')
		// }else{
		// 	$('#validasi_pekerjaan_penanggung_jawab_a').removeClass('tidakTerlihat')
		// }
	})

	$('#nomor_ktp_penanggung_jawab_pasien').on('change', function(){
		if($('#nomor_ktp_penanggung_jawab_pasien').val() == ''){
			$('#validasi_nomor_ktp_penanggung_jawab_pasien').removeClass('tidakTerlihat')
		}else{
			$('#validasi_nomor_ktp_penanggung_jawab_pasien').addClass('tidakTerlihat')
		}

		if(noIdentitas($('#nomor_ktp_penanggung_jawab_pasien').val())){
			$('#validasi_nomor_ktp_penanggung_jawab_pasien_a').addClass('tidakTerlihat')
		}else{
			$('#validasi_nomor_ktp_penanggung_jawab_pasien_a').removeClass('tidakTerlihat')
		}
	})

	$('#nomor_handphone_penanggung_jawab').on('change', function(){
		if($('#nomor_handphone_penanggung_jawab').val() == ''){
			$('#validasi_nomor_handphone_penanggung_jawab').removeClass('tidakTerlihat')
		}else{
			$('#validasi_nomor_handphone_penanggung_jawab').addClass('tidakTerlihat')
		}

		if(phoneNumber($('#nomor_handphone_penanggung_jawab').val())){
			$('#validasi_nomor_handphone_penanggung_jawab_a').addClass('tidakTerlihat')
		}else{
			$('#validasi_nomor_handphone_penanggung_jawab_a').removeClass('tidakTerlihat')
		}
	})

	$('#hubungan_penanggung_dengan_pasien').on('change', function(){
		if($('#hubungan_penanggung_dengan_pasien').val() == ''){
			$('#validasi_hubungan_penanggung_dengan_pasien').removeClass('tidakTerlihat')
		}else{
			$('#validasi_hubungan_penanggung_dengan_pasien').addClass('tidakTerlihat')
		}
	})

	$('#nextPenanggungJawabPasien').on('click', function(){
		if(cekValidasiPenanggungJawabPasien()){
			$('#segment_penanggung_jawab_pasien').hide('')
			$('#navigasi_penanggung_jawab_pasien').removeClass('active');

			$('#segment_all_data').show('')
			$('#navigasi_final_data').addClass('active');

			if($('#umum').is(':checked')){
				$('#section_kerjasama_perusahaan').addClass('tidakTerlihat')
				$('#title_form_data').text(' (Umum)')
			}else if($('#bpjs').is(':checked')){
				$('#title_form_data').text(' (BPJS)')
			}else{
				$('#title_form_data').text(' (IKS)')
			}

			if($('#umum').is(':checked')){
				if($("#bpjs").is(':checked')){
					$("#final_bpjs").prop('checked',true)
				}else if($("#iks").is(':checked')){
					$("#final_iks").prop('checked',true)
				}else{
					$("#final_umum").prop('checked',true)
				}

				if($("#tipe_pasien_rawat_jalan").is(':checked')){
					$("#final_tipe_pasien_rawat_jalan").prop('checked',true)
				}else{
					$("#final_tipe_pasien_rawat_inap").prop('checked',true)
				}

				$('#final_nama_pasien').val($('#nama_pasien').val())
				$('#final_nama_alias_pasien').val($('#nama_alias_pasien').val())
				$('#final_nomor_identitas').val($('#nomor_identitas').val())
				$('#final_jenis_kelamin').dropdown('set selected', $('#jenis_kelamin').val())
				$('#final_agama').dropdown('set selected', $('#agama').val())
				$('#final_nomor_handphone').val($('#nomor_handphone').val())
				$('#final_tempat_lahir').val($('#tempat_lahir').val())
				$('#final_tgl_lahir').val($('#tgl_lahir').val())
				$('#final_umur_pasien').val($('#umur_pasien').val())
				$('#final_kewarganegaraan').dropdown('set selected', $('#kewarganegaraan').val())
				$('#final_provinsi').dropdown('set selected', $('#provinsi').val())
				$('#final_kecamatan').dropdown('set selected', $('#kecamatan').val())
				$('#final_kabupaten').dropdown('set selected', $('#kabupaten').val())
				$('#final_alamat_pasien').val($('#alamat_pasien').val())
				$('#final_alamat_email').val($('#alamat_email').val())
				$('#final_pekerjaan').dropdown('set selected', $('#pekerjaan').val())
				$('#final_pendidikan').dropdown('set selected', $('#pendidikan').val())
				$('#final_hambatan_komunikasi').dropdown('set selected', $('#hambatan_komunikasi').val())
				$('#final_suku').dropdown('set selected', $('#suku').val())

				$('#final_nomor_rm').val($('#nomor_rm').val())
				if($('#apa_penanggung_punya_nrm').is(':checked')){
					$('#final_apa_penanggung_punya_nrm').prop('checked', true)
				}else{
					$('#final_apa_penanggung_punya_nrm').prop('checked', false)
				}
				$('#final_nama_penanggung_jawab_pasien').val($('#nama_penanggung_jawab_pasien').val())
				$('#final_alamat_penanggung_jawab_pasien').val($('#alamat_penanggung_jawab_pasien').val())
				$('#final_pekerjaan_penanggung_jawab').dropdown('set selected', $('#pekerjaan_penanggung_jawab').val())
				$('#final_nomor_ktp_penanggung_jawab_pasien').val($('#nomor_ktp_penanggung_jawab_pasien').val())
				$('#final_nomor_handphone_penanggung_jawab').val($('#nomor_handphone_penanggung_jawab').val())
				$('#final_hubungan_penanggung_dengan_pasien').dropdown('set selected', $('#hubungan_penanggung_dengan_pasien').val())

			}else{

				if($("#bpjs").is(':checked')){
					$("#final_bpjs").prop('checked',true)
				}else if($("#iks").is(':checked')){
					$("#final_iks").prop('checked',true)
				}else{
					$("#final_umum").prop('checked',true)
				}

				if($("#tipe_pasien_rawat_jalan").is(':checked')){
					$("#final_tipe_pasien_rawat_jalan").prop('checked',true)
				}else{
					$("#final_tipe_pasien_rawat_inap").prop('checked',true)
				}

				$('#final_nomor_anggota').val($('#nomor_anggota').val())
				$('#final_nama_perusahaan').dropdown('set selected', $('#nama_perusahaan').val())
				$('#final_kelompok_anggota').dropdown('set selected', $('#kelompok_anggota').val())
				if($("#bpjs").is(':checked')){
					$('#final_kelas_pertanggungan').dropdown('set selected', $('#kelas_pertanggungan').val())
				}
				$('#final_nomor_anggota_penanggung_jawab').val($('#nomor_anggota_penanggung_jawab').val())
				$('#final_nama_anggota_penanggung_jawab').val($('#nama_anggota_penanggung_jawab').val())
				$('#final_jenis_kelamin_anggota_penanggung_jawab').dropdown('set selected', $('#jenis_kelamin_anggota_penanggung_jawab').val())
				$('#final_nama_pasien').val($('#nama_pasien').val())
				$('#final_nama_alias_pasien').val($('#nama_alias_pasien').val())
				$('#final_nomor_identitas').val($('#nomor_identitas').val())
				$('#final_jenis_kelamin').dropdown('set selected', $('#jenis_kelamin').val())
				$('#final_agama').dropdown('set selected', $('#agama').val())
				$('#final_nomor_handphone').val($('#nomor_handphone').val())
				$('#final_tempat_lahir').val($('#tempat_lahir').val())
				$('#final_tgl_lahir').val($('#tgl_lahir').val())
				$('#final_umur_pasien').val($('#umur_pasien').val())
				$('#final_kewarganegaraan').dropdown('set selected', $('#kewarganegaraan').val())
				$('#final_provinsi').dropdown('set selected', $('#provinsi').val())
				$('#final_kabupaten').dropdown('set selected', $('#kabupaten').val())
				$('#final_kecamatan').dropdown('set selected', $('#kecamatan').val())
				$('#final_alamat_pasien').val($('#alamat_pasien').val())
				$('#final_alamat_email').val($('#alamat_email').val())
				$('#final_pekerjaan').dropdown('set selected', $('#pekerjaan').val())
				$('#final_pendidikan').dropdown('set selected', $('#pendidikan').val())
				$('#final_hambatan_komunikasi').dropdown('set selected', $('#hambatan_komunikasi').val())
				$('#final_suku').dropdown('set selected', $('#suku').val())

				$('#final_nomor_rm').val($('#nomor_rm').val())
				if($('#apa_penanggung_punya_nrm').is(':checked')){
					$('#final_apa_penanggung_punya_nrm').prop('checked', true)
				}else{
					$('#final_apa_penanggung_punya_nrm').prop('checked', false)
				}
				$('#final_nama_penanggung_jawab_pasien').val($('#nama_penanggung_jawab_pasien').val())
				$('#final_alamat_penanggung_jawab_pasien').val($('#alamat_penanggung_jawab_pasien').val())
				$('#final_pekerjaan_penanggung_jawab').dropdown('set selected', $('#pekerjaan_penanggung_jawab').val())
				$('#final_nomor_ktp_penanggung_jawab_pasien').val($('#nomor_ktp_penanggung_jawab_pasien').val())
				$('#final_nomor_handphone_penanggung_jawab').val($('#nomor_handphone_penanggung_jawab').val())
				$('#final_hubungan_penanggung_dengan_pasien').dropdown('set selected', $('#hubungan_penanggung_dengan_pasien').val())
			}
			if($("#bpjs").is(':checked')){
				// $('#final_kelas_pertanggungan').val($('#kelas_pertanggungan').val())
				$('#final_kelas_pertanggungan').dropdown('set selected', $('#kelas_pertanggungan').val())
				$('#final_area_kelas_pertanggungan').removeClass('tidakTerlihat')
			}else{
				$('#final_kelas_pertanggungan').dropdown('set selected', null)
				$('#final_area_kelas_pertanggungan').addClass('tidakTerlihat')
			}
		}else{
			tambahInfoValidasiPenanggungJawabPasien()
		}
	})
})

function tambahInfoValidasiPenanggungJawabPasien(){
	if($('#nama_penanggung_jawab_pasien').val() == ''){
		$('#validasi_nama_penanggung_jawab_pasien').removeClass('tidakTerlihat')
	}else{
		$('#validasi_nama_penanggung_jawab_pasien').addClass('tidakTerlihat')
	}

	if($('#alamat_penanggung_jawab_pasien').val() == ''){
		$('#validasi_alamat_penanggung_jawab_pasien').removeClass('tidakTerlihat')
	}else{
		$('#validasi_alamat_penanggung_jawab_pasien').addClass('tidakTerlihat')
	}

	if($('#pekerjaan_penanggung_jawab').val() == ''){
		$('#validasi_pekerjaan_penanggung_jawab').removeClass('tidakTerlihat')
	}else{
		$('#validasi_pekerjaan_penanggung_jawab').addClass('tidakTerlihat')
	}

	if($('#nomor_ktp_penanggung_jawab_pasien').val() == ''){
		$('#validasi_nomor_ktp_penanggung_jawab_pasien').removeClass('tidakTerlihat')
	}else{
		$('#validasi_nomor_ktp_penanggung_jawab_pasien').addClass('tidakTerlihat')
	}

	if($('#nomor_handphone_penanggung_jawab').val() == ''){
		$('#validasi_nomor_handphone_penanggung_jawab').removeClass('tidakTerlihat')
	}else{
		$('#validasi_nomor_handphone_penanggung_jawab').addClass('tidakTerlihat')
	}

	if($('#hubungan_penanggung_dengan_pasien').val() == ''){
		$('#validasi_hubungan_penanggung_dengan_pasien').removeClass('tidakTerlihat')
	}else{
		$('#validasi_hubungan_penanggung_dengan_pasien').addClass('tidakTerlihat')
	}

	if($('#apa_penanggung_punya_nrm').is(':checked')){
		if($('#nomor_rm').val() == ''){
			$('#validasi_nomor_rm').removeClass('tidakTerlihat')
		}else{
			$('#validasi_nomor_rm').addClass('tidakTerlihat')
		}
	}

	if(textOnly($('#nama_penanggung_jawab_pasien').val())){
		$('#validasi_nama_penanggung_jawab_pasien_a').addClass('tidakTerlihat')
	}else{
		$('#validasi_nama_penanggung_jawab_pasien_a').removeClass('tidakTerlihat')
	}

	// if(textOnly($('#pekerjaan_penanggung_jawab').val())){
	// 	$('#validasi_pekerjaan_penanggung_jawab_a').addClass('tidakTerlihat')
	// }else{
	// 	$('#validasi_pekerjaan_penanggung_jawab_a').removeClass('tidakTerlihat')
	// }

	if(noIdentitas($('#nomor_ktp_penanggung_jawab_pasien').val())){
		$('#validasi_nomor_ktp_penanggung_jawab_pasien_a').addClass('tidakTerlihat')
	}else{
		$('#validasi_nomor_ktp_penanggung_jawab_pasien_a').removeClass('tidakTerlihat')
	}

	if(phoneNumber($('#nomor_handphone_penanggung_jawab').val())){
		$('#validasi_nomor_handphone_penanggung_jawab_a').addClass('tidakTerlihat')
	}else{
		$('#validasi_nomor_handphone_penanggung_jawab_a').removeClass('tidakTerlihat')
	}
}

function cekValidasiPenanggungJawabPasien(){
	if($('#nama_penanggung_jawab_pasien').val() == ''){
		return false
	}else if($('#alamat_penanggung_jawab_pasien').val() == ''){
		return false
	}else if($('#pekerjaan_penanggung_jawab').val() == ''){
		return false
	}else if($('#nomor_ktp_penanggung_jawab_pasien').val() == ''){
		return false
	}else if($('#nomor_handphone_penanggung_jawab').val() == ''){
		return false
	}else if($('#hubungan_penanggung_dengan_pasien').val() == ''){
		return false
	}else if($('#apa_penanggung_punya_nrm').is(':checked')){
		if($('#nomor_rm').val() == ''){
			return false;
		}
	}else if(!textOnly($('#nama_penanggung_jawab_pasien').val())){
		return false
	}else if(!noIdentitas($('#nomor_ktp_penanggung_jawab_pasien').val())){
		return false
	}else if(!phoneNumber($('#nomor_handphone_penanggung_jawab').val())){
		return false
	}

	return true;
}
