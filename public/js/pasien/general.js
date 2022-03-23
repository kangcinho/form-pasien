$(document).ready(function(){
	$('.ui.dropdown').dropdown();
	$('.ui.checkbox').checkbox();

	$('#segment_jenis_kerjasama').toggleClass('tidakTerlihat')
	$('#segment_data_kerjasama').toggleClass('tidakTerlihat')
	$('#segment_identitas_pasien_i').toggleClass('tidakTerlihat')
	$('#segment_identitas_pasien_ii').toggleClass('tidakTerlihat')
	$('#segment_identitas_pasien_iii').toggleClass('tidakTerlihat')
	$('#segment_penanggung_jawab_pasien').toggleClass('tidakTerlihat')
	$('#segment_all_data').toggleClass('tidakTerlihat')

	$('#nextTipePasien').on('click', function(){
		$('#segment_jenis_kerjasama').show('')
		$('#segment_tipe_pasien').hide('')
		$('#navigasi_jenis_kerjasama').toggleClass('active');
	})

	$('#beforeJenisKerjasama').on('click', function(){
		$('#segment_jenis_kerjasama').hide('')
		$('#segment_tipe_pasien').show('')
		$('#navigasi_jenis_kerjasama').toggleClass('active');
	})

	$('#nextJenisKerjasama').on('click', function(){
		if($('#umum').is(':checked')){
			$('#segment_jenis_kerjasama').hide('')
			$('#navigasi_jenis_kerjasama').removeClass('active');

			$('#segment_identitas_pasien_i').show('')
			$('#navigasi_identitas_pasien_i').addClass('active');

			$('#nama_pasien').focus()
		}else{
			$('#segment_jenis_kerjasama').hide('')
			$('#navigasi_jenis_kerjasama').removeClass('active');

			$('#segment_data_kerjasama').show('')
			$('#navigasi_data_kerjasama').addClass('active');

			$('#nomor_anggota').focus()

			if($('#iks').is(':checked')){
				$('#area_kelas_pertanggungan').addClass('tidakTerlihat')
			}else{
				$('#area_kelas_pertanggungan').removeClass('tidakTerlihat')
			}
		}
	})

	$('#backDataKerjasama').on('click', function(){
		$('#segment_jenis_kerjasama').show('')
		$('#navigasi_jenis_kerjasama').addClass('active');

		$('#segment_data_kerjasama').hide('')
		$('#navigasi_data_kerjasama').removeClass('active');
	})

	$('#backIdentitasPasienI').on('click', function(){
		if($('#umum').is(':checked')){
			$('#segment_identitas_pasien_i').hide('')
			$('#navigasi_identitas_pasien_i').removeClass('active');

			$('#segment_jenis_kerjasama').show('')
			$('#navigasi_jenis_kerjasama').addClass('active');
		}else{
			$('#segment_data_kerjasama').show('')
			$('#navigasi_data_kerjasama').addClass('active');

			$('#segment_identitas_pasien_i').hide('')
			$('#navigasi_identitas_pasien_i').removeClass('active');
			$('#nomor_anggota').focus()
		}
	})

	$('#backIdentitasPasienII').on('click', function(){
		$('#segment_identitas_pasien_i').show('')
		$('#navigasi_identitas_pasien_i').addClass('active');

		$('#segment_identitas_pasien_ii').hide('')
		$('#navigasi_identitas_pasien_ii').removeClass('active');
		$('#nama_pasien').focus()
	})

	$('#backIdentitasPasienIII').on('click', function(){
		$('#segment_identitas_pasien_ii').show('')
		$('#navigasi_identitas_pasien_ii').addClass('active');

		$('#segment_identitas_pasien_iii').hide('')
		$('#navigasi_identitas_pasien_iii').removeClass('active');
		$('#kewarganegaraan').focus()
	})

	$('#backPenanggungJawabPasien').on('click', function(){
		$('#segment_identitas_pasien_iii').show('')
		$('#navigasi_identitas_pasien_iii').addClass('active');

		$('#segment_penanggung_jawab_pasien').hide('')
		$('#navigasi_penanggung_jawab_pasien').removeClass('active');
		$('#pekerjaan').focus()
	})

	$('#tgl_lahir').on('change', function(){
		$('#umur_pasien').val(getAge($('#tgl_lahir').val()));
	})

	$('#dataSalah').on('click', function(){
			$('#segment_all_data').hide('')
			$('#navigasi_final_data').removeClass('active');
		if($('#umum').is(':checked')){
			$('#segment_identitas_pasien_i').show('')
			$('#navigasi_identitas_pasien_i').addClass('active');
		}else{
			$('#segment_data_kerjasama').show('')
			$('#navigasi_data_kerjasama').addClass('active');
		}
	})

	$('.message .close').on('click', function() {
	    $(this).closest('.message').transition('fade');
	});

	$('#saveData').on('click', function(){
		if($('#final_konfirmasi').is(':checked')){
			return true;
		}
		$('#final_konfirmasi').focus()

		return false;
	})
})
