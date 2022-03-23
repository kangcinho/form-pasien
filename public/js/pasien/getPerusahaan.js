$(document).ready(function(){
  $("input[name='jenis_kerjasama']").each( function () {
      $(this).on('change', function(){
        $('.ui.dropdown#menuPerusahaan').dropdown({
          values: [{
            name:'',
            value:'',
          }]
        });

        if($(this).val() == 9){
          //BPJS CALL
          $.ajax({
            type:'GET',
            url: 'getPerusahaanBPJS',
            success:function(data){
              let dataPerusahaan = [];
              for(let i = 0; i < data.data.length; i++){
                if(data.data[i].NamaKelas == "Kelas Shakuntala"){
                  data.data[i].Nama_Customer += ' - '+'Kelas 1'
                }else if(data.data[i].NamaKelas == "Kelas Madri"){
                  data.data[i].Nama_Customer += ' - '+'Kelas 2'
                }else{
                  data.data[i].Nama_Customer += ' - '+'Kelas 3'
                }
                dataPerusahaan.push({
                  name: data.data[i].Nama_Customer,
                  value: data.data[i].Kode_Customer+'&kangcinho&'+data.data[i].CustomerKerjasamaID
                });
              }
              $('.ui.dropdown#menuPerusahaan').dropdown({
                values: dataPerusahaan
              });
            }
          });
        }else if($(this).val() == 2){
          //IKS CALL
          $.ajax({
            type:'GET',
            url: 'getPerusahaanIKS',
            success:function(data){
              let dataPerusahaan = [];
              for(let i = 0; i < data.data.length; i++){
                dataPerusahaan.push({
                  name: data.data[i].Nama_Customer,
                  value: data.data[i].Kode_Customer+'&kangcinho&'+data.data[i].CustomerKerjasamaID
                });
              }
              $('.ui.dropdown#menuPerusahaan').dropdown({
                values: dataPerusahaan
              });
            }
          });
        }

      })
   });
})
