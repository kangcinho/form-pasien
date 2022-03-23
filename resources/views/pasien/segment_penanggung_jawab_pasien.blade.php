<h4 class="ui dividing header">Penanggung Jawab Pasien Baru</h4>
<div class="grouped fields">
  <div class="field">
    <div class="ui right labeled input" id="search_nomor_rm">
      <input type="text" placeholder="Input Nomor Rekam Medis" name="nomor_rm" id="nomor_rm">
      <button class="ui button icon" id="search_nrm">
          <i class="search icon"></i>
      </button>
    </div>
    <span class="warnaMerah tidakTerlihat" id="validasi_nomor_rm">
      Nomor Rekam Medis Pasien Penanggung Jawab Tidak Boleh Kosong
    </span>
  </div>

  <div class="field">
    <div class="ui checkbox">
      <input type="checkbox" name="apa_penanggung_punya_nrm" id="apa_penanggung_punya_nrm">
      <label>Saya adalah Pasien Puri Bunda</label>
    </div>
  </div>

  <div class="required field">
    <label>Nama Penanggung Jawab Pasien</label>
    <input type="text" name="nama_penanggung_jawab_pasien" id="nama_penanggung_jawab_pasien" value="" placeholder="Masukan Nama Penanggung Jawab Pasien">
    <span class="warnaMerah tidakTerlihat" id="validasi_nama_penanggung_jawab_pasien">
      Nama Penanggung Jawab Pasien Tidak Boleh Kosong
    </span>
    <span class="warnaMerah tidakTerlihat" id="validasi_nama_penanggung_jawab_pasien_a">
      <br/>Nama Penanggung Jawab Pasien Tidak Valid: Nama Penanggung Jawab Pasien Tidak Boleh Mengandung Angka atau Tanda Baca
    </span>
  </div>
  <div class="required field">
    <label>Alamat Penanggung Jawab Pasien</label>
    <input type="text" name="alamat_penanggung_jawab_pasien" id="alamat_penanggung_jawab_pasien" placeholder="Masukan Alamat Penanggung Jawab Pasien">
    <span class="warnaMerah tidakTerlihat" id="validasi_alamat_penanggung_jawab_pasien">
      Alamat Penanggung Jawab Pasien Tidak Boleh Kosong
    </span>
  </div>
  <!-- <div class="required field">
    <label>Pekerjaan Penanggung Pasien</label>
    <input type="text" name="pekerjaan_penanggung_jawab" id="pekerjaan_penanggung_jawab" placeholder="Masukan Pekerjaan Penanggung Pasien">
    <span class="warnaMerah tidakTerlihat" id="validasi_pekerjaan_penanggung_jawab">
      Pekerjaan Penanggung Pasien Tidak Boleh Kosong
    </span>
    <span class="warnaMerah tidakTerlihat" id="validasi_pekerjaan_penanggung_jawab_a">
      <br/>Pekerjaan Penanggung Jawab Pasien Tidak Valid: Pekerjaan Penanggung Jawab Pasien Tidak Boleh Mengandung Angka atau Tanda Baca
    </span>
  </div> -->
  <div class="required field">
    <label>Pekerjaan Penanggung Pasien</label>
    <div class="ui fluid search selection dropdown">
      <input type="hidden" name="pekerjaan_penanggung_jawab" id="pekerjaan_penanggung_jawab">
      <i class="dropdown icon"></i>
      <div class="default text">Pilih Pekerjaan</div>
      <div class="menu">
        @foreach($pekerjaans as $pekerjaan)
          <div class="item" data-value="{{ $pekerjaan->name }}">{{ $pekerjaan->name }}</div>
        @endforeach
      </div>
    </div>
    <span class="warnaMerah tidakTerlihat" id="validasi_pekerjaan_penanggung_jawab">
      Pekerjaan Penanggung Pasien Tidak Boleh Kosong
    </span>
  </div>

  <div class="required field">
    <label>Nomor KTP atau SIM Penanggung Jawab Pasien</label>
    <input type="text" name="nomor_ktp_penanggung_jawab_pasien" id="nomor_ktp_penanggung_jawab_pasien" placeholder="Masukan Nomor KTP atau SIM Penanggung Jawab Pasien">
    <span class="warnaMerah tidakTerlihat" id="validasi_nomor_ktp_penanggung_jawab_pasien">
      Nomor KTP atau SIM Penanggung Jawab Pasien Tidak Boleh Kosong
    </span>
    <span class="warnaMerah tidakTerlihat" id="validasi_nomor_ktp_penanggung_jawab_pasien_a">
      <br/>Nomor KTP atau SIM Hanya Boleh Angka
    </span>
  </div>
  <div class="required field">
    <label>Nomor Handphone Penanggung Jawab Pasien</label>
    <input type="text" name="nomor_handphone_penanggung_jawab" id="nomor_handphone_penanggung_jawab" value="" placeholder="Masukan Nomor Hanphone Penanggung Jawab Pasien">
    <span class="warnaMerah tidakTerlihat" id="validasi_nomor_handphone_penanggung_jawab">
      Nomor Handphone Penanggung Jawab Pasien Tidak Boleh Kosong
    </span>
    <span class="warnaMerah tidakTerlihat" id="validasi_nomor_handphone_penanggung_jawab_a">
      <br/>Nomor Handphone Tidak Boleh Mengandung Spasi atau Karakter.
    </span>
  </div>
  <div class="required field">
    <label>Hubungan Penanggung dengan Pasien</label>
    <div class="ui fluid selection dropdown" >
      <input type="hidden" name="hubungan_penanggung_dengan_pasien" id="hubungan_penanggung_dengan_pasien">
      <i class="dropdown icon"></i>
      <div class="default text">Pilih Hubungan</div>
      <div class="menu">
        <div class="item" data-value="Pasien Sendiri">Pasien Sendiri</div>
        <div class="item" data-value="Orang Tua">Orang Tua</div>
        <div class="item" data-value="Suami/Istri">Suami/Istri</div>
        <div class="item" data-value="Anak">Anak</div>
        <div class="item" data-value="Saudara Kandung">Saudara Kandung</div>
        <div class="item" data-value="Teman">Teman</div>
        <div class="item" data-value="Lainnya">Lainnya</div>
      </div>
    </div>
    <span class="warnaMerah tidakTerlihat" id="validasi_hubungan_penanggung_dengan_pasien">
      Hubungan Penanggung Jawab dengan Pasien Tidak Boleh Kosong
    </span>
  </div>
</div>

<div class="ui tiny primary right floated right labeled icon button" id="nextPenanggungJawabPasien" tabindex="0">
  Selanjutnya
  <i class="right arrow icon"></i>
</div>
<div class="ui tiny primary left floated left labeled icon button" id="backPenanggungJawabPasien" tabindex="0">
  Sebelumnya
  <i class="left arrow icon"></i>
</div>
