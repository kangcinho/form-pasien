$(document).ready(function(){
  $('#kabupaten').on('change', function(e){

    $('.ui.dropdown#menuKecamatan').dropdown({
      values: [{
        name:'',
        value:'',
      }]
    });

    if($('#kabupaten').val()){
      $.ajax({
        type:'GET',
        url: 'getKecamatan/'+$('#kabupaten').val(),
        success:function(data){
          let dataKecamatan = [];
          for(let i = 0; i < data.data.length; i++){
            dataKecamatan.push({
              name: data.data[i].KecamatanNama,
              value: data.data[i].KecamatanID
            });
          }
          $('.ui.dropdown#menuKecamatan').dropdown({
            values: dataKecamatan
          });
        }
      });
    }
  })
})
