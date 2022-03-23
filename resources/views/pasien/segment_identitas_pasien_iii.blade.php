<h4 class="ui dividing header">Identitas Pasien Baru</h4>
<div class="grouped fields">
  <div class="required field">
    <label>Pekerjaan</label>
    <div class="ui fluid search selection dropdown">
      <input type="hidden" name="pekerjaan" id="pekerjaan">
      <i class="dropdown icon"></i>
      <div class="default text">Pilih Pekerjaan</div>
      <div class="menu">
        @foreach($pekerjaans as $pekerjaan)
          <div class="item" data-value="{{ $pekerjaan->name }}">{{ $pekerjaan->name }}</div>
        @endforeach
      </div>
    </div>
    <span class="warnaMerah tidakTerlihat" id="validasi_pekerjaan">
      Pekerjaan Tidak Boleh Kosong
    </span>
  </div>

  <div class="required field">
    <label>Pendidikan Terakhir</label>
    <div class="ui fluid selection dropdown">
      <input type="hidden" name="pendidikan" id="pendidikan">
      <i class="dropdown icon"></i>
      <div class="default text">Pilih Pendidikan</div>
      <div class="menu">
        <div class="item" data-value="BUTA HURUF">Buta Huruf</div>
        <div class="item" data-value="SD">SD</div>
        <div class="item" data-value="SMP">SMP</div>
        <div class="item" data-value="SMA">SMA</div>
        <div class="item" data-value="SMU">SMU</div>
        <div class="item" data-value="DIPLOMA">Diploma</div>
        <div class="item" data-value="S1">S1</div>
        <div class="item" data-value="S2">S2</div>
        <div class="item" data-value="S3">S3</div>
      </div>
    </div>
    <span class="warnaMerah tidakTerlihat" id="validasi_pendidikan">
      Pendidikan Tidak Boleh Kosong
    </span>
  </div>
  <div class="required field">
    <label>Hambatan Berkomunikasi</label>
    <div class="ui fluid selection dropdown">
      <input type="hidden" name="hambatan_komunikasi" id="hambatan_komunikasi" value="TIDAK">
      <i class="dropdown icon"></i>
      <div class="default text">Apakah Ada Hambatan Berkomunikasi?</div>
      <div class="menu">
        <div class="item" data-value="YA">Ya</div>
        <div class="item selected" data-value="TIDAK">Tidak</div>
      </div>
    </div>
    <span class="warnaMerah tidakTerlihat" id="validasi_hambatan_komunikasi">
      Hambatan Berkomunikasi Tidak Boleh Kosong
    </span>
  </div>
  <div class="required field">
    <label>Suku/Etnis</label>
    <div class="ui fluid search selection dropdown">
      <input type="hidden" name="suku" id="suku">
      <i class="dropdown icon"></i>
      <div class="default text">Pilih Suku/Etnis</div>
      <div class="menu">
        @foreach($etnises as $etnis)
          <div class="item" data-value="{{ $etnis->EtnisID }}"> {{ $etnis->EtnisName }}</div>
        @endforeach
      </div>
    </div>
    <span class="warnaMerah tidakTerlihat" id="validasi_suku">
      Suku/Etnis Tidak Boleh Kosong
    </span>
  </div>
</div>

<div class="ui tiny primary right floated right labeled icon button" id="nextIdentitasPasienIII" tabindex="0">
  Selanjutnya
  <i class="right arrow icon"></i>
</div>
<div class="ui tiny primary left floated left labeled icon button" id="backIdentitasPasienIII" tabindex="0">
  Sebelumnya
  <i class="left arrow icon"></i>
</div>
