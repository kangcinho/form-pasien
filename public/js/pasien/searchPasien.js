$(document).ready(function(){
  $('#search_nrm').on('click', function(e){
    if($('#apa_penanggung_punya_nrm').is(':checked')){
      alert('Cari Pasien')
      e.preventDefault();
      var nrm = $("#nomor_rm").val();
      $.ajax({
        type:'GET',
        url: 'getPasienIndividual/'+nrm,
        success:function(data){
            if(!data.data){
              alert('Pasien Tidak Diketemukan')
            }else{
              $("#nama_penanggung_jawab_pasien").val(data.data.NamaPasien);
              $("#alamat_penanggung_jawab_pasien").val(data.data.Alamat);
              $("#pekerjaan_penanggung_jawab").val(data.data.Pekerjaan);
              $("#nomor_ktp_penanggung_jawab_pasien").val(data.data.NoIdentitas);
              $("#nomor_handphone_penanggung_jawab").val(data.data.Phone);
            }
        }
      });
    }
  })

  $("#nomor_rm").on('keypress',function(e){
    if(e.which == 13){
      $('#search_nrm').click();
    }
  })
})
