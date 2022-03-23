<h4 class="ui dividing header">Identitas Pasien Baru</h4>
<div class="grouped fields">
  <div class="required field">
    <label>Kewarganegaraan</label>
    <div class="ui fluid search selection dropdown">
      <input type="hidden" name="kewarganegaraan" id="kewarganegaraan">
      <i class="dropdown icon"></i>
      <div class="default text">Pilih Negara</div>
      <div class="menu">
        @foreach($negaras as $negara)
          <div class="item" data-value="{{ $negara->NationalityID }}">{{ $negara->Nationality }}</div>
        @endforeach
      </div>
    </div>
    <span class="warnaMerah tidakTerlihat" id="validasi_kewarganegaraan">
      Kewarganegaraan Tidak Boleh Kosong
    </span>
  </div>
  <div class="required field">
    <label>Provinsi</label>
    <div class="ui fluid search selection dropdown">
      <input type="hidden" name="provinsi" id="provinsi">
      <i class="dropdown icon"></i>
      <div class="default text">Pilih Provinsi</div>
      <div class="menu">
        @foreach($provinsis as $provinsi)
          <div class="item" data-value="{{ $provinsi->Propinsi_ID }}">{{ $provinsi->Nama_Propinsi }}</div>
        @endforeach
      </div>
    </div>
    <span class="warnaMerah tidakTerlihat" id="validasi_provinsi">
      Provinsi Tidak Boleh Kosong
    </span>
  </div>
  <div class="required field">
    <label>Kabupaten</label>
    <div class="ui fluid search selection dropdown" id="menuKabupaten">
      <input type="hidden" name="kabupaten" id="kabupaten">
      <i class="dropdown icon"></i>
      <div class="default text">Pilih Kabupaten</div>
      <div class="menu" >
        {{-- @foreach($kecamatans as $kecamatan)
          <div class="item" data-value="{{ $kecamatan->KecamatanID }}">{{ $kecamatan->KecamatanNama }}</div>
        @endforeach --}}
      </div>
    </div>
    <span class="warnaMerah tidakTerlihat" id="validasi_kabupaten">
      Kabupaten Tidak Boleh Kosong
    </span>
  </div>
  <div class="required field">
    <label>Kecamatan/Kota</label>
    <div class="ui fluid search selection dropdown" id="menuKecamatan">
      <input type="hidden" name="kecamatan" id="kecamatan">
      <i class="dropdown icon"></i>
      <div class="default text">Pilih Kecamatan/Kota</div>
      <div class="menu">
        {{-- @foreach($kecamatans as $kecamatan)
          <div class="item" data-value="{{ $kecamatan->KecamatanID }}">{{ $kecamatan->KecamatanNama }}</div>
        @endforeach --}}
      </div>
    </div>
    <span class="warnaMerah tidakTerlihat" id="validasi_kecamatan">
      Kecamatan atau Kota Tidak Boleh Kosong
    </span>
  </div>
  <div class="required field">
    <label>Alamat Pasien Sesuai KTP/SIM</label>
    <textarea name="alamat_pasien"  id="alamat_pasien" rows="1" style="resize:none" placeholder="Masukan Alamat Pasien"></textarea>
    <span class="warnaMerah tidakTerlihat" id="validasi_alamat_pasien">
      Alamat Pasien Tidak Boleh Kosong
    </span>
  </div>
  <div class="field">
    <label>Alamat E-mail</label>
    <input type="text" name="alamat_email" id="alamat_email" value="" placeholder="Masukan Alamat Email">
    <span class="warnaMerah tidakTerlihat" id="validasi_alamat_email_a">
      Alamat Email Tidak Valid
    </span>
  </div>
</div>

<div class="ui tiny primary right floated right labeled icon button" id="nextIdentitasPasienII" tabindex="0">
  Selanjutnya
  <i class="right arrow icon"></i>
</div>
<div class="ui tiny primary left floated left labeled icon button" id="backIdentitasPasienII" tabindex="0">
  Sebelumnya
  <i class="left arrow icon"></i>
</div>
