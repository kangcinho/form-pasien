$(document).ready(function(){
  $('#provinsi').on('change', function(e){
    $('.ui.dropdown#menuKabupaten').dropdown({
      values: [{
        name:'',
        value:'',
      }]
    });

    $('.ui.dropdown#menuKecamatan').dropdown({
      values: [{
        name:'',
        value:'',
      }]
    });

    $.ajax({
      type:'GET',
      url: 'getKabupaten/'+$('#provinsi').val(),
      success:function(data){
        let dataKabupaten = [];
        for(let i = 0; i < data.data.length; i++){
          dataKabupaten.push({
            name: data.data[i].Nama_Kabupaten,
            value: data.data[i].Kode_Kabupaten
          });
        }
        $('.ui.dropdown#menuKabupaten').dropdown({
          values: dataKabupaten
        });
      }
    });
  })
})
