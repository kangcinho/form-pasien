  <h4 class="ui dividing header">Kerjasama Perusahaan</h4>
  <div class="grouped fields">
    <div class="required field">
      <label>Nomor Anggota</label>
      <input type="text" name="nomor_anggota" id="nomor_anggota" placeholder="Masukan Nomor Anggota">
      <span class="warnaMerah tidakTerlihat" id="validasi_nomor_anggota">
        Nomor Anggota Tidak Boleh Kosong
      </span>
      <span class="warnaMerah tidakTerlihat" id="validasi_nomor_anggota_a">
        <br/>Nomor Anggota Tidak Boleh Kosong A
      </span>
    </div>
    <div class="required field">
      <label>Nama Perusahaan</label>
      <div class="ui fluid search selection dropdown" id="menuPerusahaan">
        <input type="hidden" name="nama_perusahaan" id="nama_perusahaan">
        <i class="dropdown icon"></i>
        <div class="default text">Pilih Perusahaan</div>
        <div class="menu">
          {{-- @foreach($perusahaans as $perusahaan)
            @if(stristr($perusahaan->Nama_Customer,'xx'))
              @continue
            @endif
            @if($perusahaan->NamaKelas != 'XX')
              @if($perusahaan->NamaKelas == 'Kelas Srikandi')
                <div class="item" data-value="{{ $perusahaan->Kode_Customer.'&kangcinho&'.$perusahaan->CustomerKerjasamaID }}">{{ $perusahaan->Nama_Customer.' - Kelas 3'  }}</div>
              @elseif($perusahaan->NamaKelas == 'Kelas Madri')
                <div class="item" data-value="{{ $perusahaan->Kode_Customer.'&kangcinho&'.$perusahaan->CustomerKerjasamaID }}">{{ $perusahaan->Nama_Customer.' - Kelas 2'  }}</div>
              @else
                <div class="item" data-value="{{ $perusahaan->Kode_Customer.'&kangcinho&'.$perusahaan->CustomerKerjasamaID }}">{{ $perusahaan->Nama_Customer.' - Kelas 1'  }}</div>
              @endif
            @else
              <div class="item" data-value="{{ $perusahaan->Kode_Customer.'&kangcinho&'.$perusahaan->CustomerKerjasamaID }}">{{ $perusahaan->Nama_Customer }}</div>
            @endif
          @endforeach --}}
        </div>
      </div>
      <span class="warnaMerah tidakTerlihat" id="validasi_nama_perusahaan">
        Nama Perusahaan Tidak Boleh Kosong
      </span>
    </div>
    <div class="field">
      <label>Kepesertaan</label>
      <div class="ui fluid selection dropdown">
        <input type="hidden" name="kelompok_anggota" id="kelompok_anggota">
        <i class="dropdown icon"></i>
        <div class="default text">Pilih Kepesertaan Kartu</div>
        <div class="menu">
          <div class="item" data-value="E">Pemegang Kartu</div>
          <div class="item" data-value="S">Suami/Istri</div>
          <div class="item" data-value="C1">Anak Pertama</div>
          <div class="item" data-value="C2">Anak Kedua</div>
          <div class="item" data-value="C3">Anak Ketiga</div>
          <div class="item" data-value="C4">Anak Keempat</div>
          <div class="item" data-value="C5">Anak Kelima</div>
          <div class="item" data-value="C6">Anak Keenam</div>
        </div>
      </div>
      <span class="warnaMerah tidakTerlihat" id="validasi_kelompok_anggota">
        Kelompok Anggota Tidak Boleh Kosong
      </span>
    </div>
    <div id="area_kelas_pertanggungan">
      <div class="required field">
        <label>Kelas Pertanggungan</label>
        <div class="ui fluid selection dropdown" id="kelas_pertanggungan_div">
          <input type="hidden" name="kelas_pertanggungan" id="kelas_pertanggungan">
          <i class="dropdown icon"></i>
          <div class="default text">Pilih Kelas Pertanggungan</div>
          <div class="menu">
            <div class="item" data-value="14">Kelas 1</div>
            <div class="item" data-value="17">Kelas 2</div>
            <div class="item" data-value="18">Kelas 3</div>
          </div>
        </div>
        <span class="warnaMerah tidakTerlihat" id="validasi_kelas_pertanggungan">
         Kelas Pertanggungan Tidak Boleh Kosong
        </span>
      </div>
    </div>


  </div>
  <div class="tidakTerlihat">
    <h4 class="ui dividing header">Penanggung Jawab Anggota Kerjasama</h4>
    <div class="grouped fields">
      <div class="field">
        <label>Nomor Anggota Penanggung Jawab</label>
        <input type="text" name="nomor_anggota_penanggung_jawab" id="nomor_anggota_penanggung_jawab" placeholder="Masukan Nomor Anggota Penanggung Jawab">
      </div>
      <div class="field">
        <label>Nama Anggota Penanggung Jawab</label>
        <input type="text" name="nama_anggota_penanggung_jawab" id="nama_anggota_penanggung_jawab" placeholder="Nama Anggota Penanggung Jawab">
      </div>
      <div class="field">
        <label>Jenis Kelamin Anggota Penanggung Jawab</label>
        <div class="ui fluid selection dropdown">
          <input type="hidden" name="jenis_kelamin_anggota_penanggung_jawab" id="jenis_kelamin_anggota_penanggung_jawab">
          <i class="dropdown icon"></i>
          <div class="default text">Pilih Jenis Kelamin</div>
          <div class="menu">
            <div class="item" data-value="M">
              Laki-Laki
            </div>
            <div class="item" data-value="F">
              Perempuan
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 <div class="ui tiny primary right floated right labeled icon button" id="nextDataKerjasama" tabindex="0">
  Selanjutnya
  <i class="right arrow icon"></i>
</div>
<div class="ui tiny primary left floated left labeled icon button" id="backDataKerjasama" tabindex="0">
  Sebelumnya
  <i class="left arrow icon"></i>
</div>
