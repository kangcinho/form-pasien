{!! Form::open(['class' => 'ui form']) !!}
  <div id="section_jenis_kerjasama" class="tidakTerlihat">
    <h3 class="ui dividing header">Apa Jenis Kerjsama Yang Anda Gunakan?</h3>
    <div class="grouped fields">
      <div class="field">
        <div class="ui radio checkbox">
          <input type="radio" name="final_jenis_kerjasama" id="final_umum" value="3" checked>
          <label>Umum</label>
        </div>
      </div>
      <div class="field">
        <div class="ui radio checkbox">
          <input type="radio" name="final_jenis_kerjasama" value="9" id="final_bpjs">
          <label>BPJS</label>
        </div>
      </div>
      <div class="field">
        <div class="ui radio checkbox">
          <input type="radio" name="final_jenis_kerjasama" value="2" id="final_iks">
          <label>IKS</label>
        </div>
      </div>
    </div>
  </div>

  <div id="section_tipe_pasien" class="tidakTerlihat">
    <h3 class="ui dividing header">Pasien Datang Ke Puri Bunda Sebagai?</h3>
    <div class="grouped fields">
      <div class="field">
        <div class="ui radio checkbox">
          <input type="radio" name="final_tipe_pasien" id="final_tipe_pasien_rawat_jalan" value="1">
          <label>Pasien Rawat Jalan</label>
        </div>
      </div>
      <div class="field">
        <div class="ui radio checkbox">
          <input type="radio" name="final_tipe_pasien" value="0" id="final_tipe_pasien_rawat_inap">
          <label>Pasien Rawat Inap</label>
        </div>
      </div>
    </div>
  </div>

  <div id="section_kerjasama_perusahaan">
    <h3 class="ui dividing header">Kerjsama Perusahaan</h3>
    <div class="grouped fields">
      <div class="required field">
        <label>Nomor Anggota</label>
        <input type="text" name="final_nomor_anggota" id="final_nomor_anggota" placeholder="Masukan Nomor Anggota" readonly>
      </div>
      <div class="required field">
        <label>Nama Perusahaan</label>
        <div class="ui fluid search selection dropdown disabled" id="final_nama_perusahaan">
          <input type="hidden" name="final_nama_perusahaan">
          <i class="dropdown icon"></i>
          <div class="default text">Pilih Perusahaan</div>
          <div class="menu">
            @foreach($perusahaans as $perusahaan)
              @if(stristr($perusahaan->Nama_Customer,'xx'))
                @continue
              @endif
              @if($perusahaan->NamaKelas != 'XX')
                @if($perusahaan->NamaKelas == 'Kelas Madri')
                  <div class="item" data-value="{{ $perusahaan->Kode_Customer.'&kangcinho&'.$perusahaan->CustomerKerjasamaID }}">{{ $perusahaan->Nama_Customer.' - Kelas 2'  }}</div>
                @elseif($perusahaan->NamaKelas == 'Kelas Srikandi')
                  <div class="item" data-value="{{ $perusahaan->Kode_Customer.'&kangcinho&'.$perusahaan->CustomerKerjasamaID }}">{{ $perusahaan->Nama_Customer.' - Kelas 3'  }}</div>
                @else
                  <div class="item" data-value="{{ $perusahaan->Kode_Customer.'&kangcinho&'.$perusahaan->CustomerKerjasamaID }}">{{ $perusahaan->Nama_Customer.' - Kelas 1'  }}</div>
                @endif
              @else
                <div class="item" data-value="{{ $perusahaan->Kode_Customer.'&kangcinho&'.$perusahaan->CustomerKerjasamaID }}">{{ $perusahaan->Nama_Customer }}</div>
              @endif
            @endforeach
          </div>
        </div>
      </div>
      <div class="field">
        <label>Kelompok Anggota</label>
        <div class="ui fluid selection dropdown disabled" id="final_kelompok_anggota">
          <input type="hidden" name="final_kelompok_anggota">
          <i class="dropdown icon"></i>
          <div class="default text">Pilih Kelompok Anggota</div>
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
      </div>
      <div id="final_area_kelas_pertanggungan">
        <div class="required field">
          <label>Kelas Pertanggungan</label>
          <div class="ui fluid selection dropdown disabled" id="final_kelas_pertanggungan">
            <input type="hidden" name="final_kelas_pertanggungan">
            <i class="dropdown icon"></i>
            <div class="default text">Pilih Kelas Pertanggungan</div>
            <div class="menu">
              <div class="item" data-value="14">Kelas 1</div>
              <div class="item" data-value="17">Kelas 2</div>
              <div class="item" data-value="18">Kelas 3</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tidakTerlihat">
      <h4 class="ui dividing header">Penanggung Jawab Anggota Kerjasama</h4>
      <div class="grouped fields">
        <div class="field">
          <label>Nomor Anggota Penanggung Jawab</label>
          <input type="text" name="final_nomor_anggota_penanggung_jawab" id="final_nomor_anggota_penanggung_jawab" placeholder="Masukan Nomor Anggota Penanggung Jawab" readonly>
        </div>
        <div class="field">
          <label>Nama Anggota Penanggung Jawab</label>
          <input type="text" name="final_nama_anggota_penanggung_jawab" id="final_nama_anggota_penanggung_jawab" placeholder="Nama Anggota Penanggung Jawab" readonly>
        </div>
        <div class="field">
          <label>Jenis Kelamin Anggota Penanggung Jawab</label>
          <div class="ui fluid selection dropdown disabled" id="final_jenis_kelamin_anggota_penanggung_jawab">
            <input type="hidden" name="final_jenis_kelamin_anggota_penanggung_jawab" >
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
  </div>
  <h3 class="ui dividing header">Identitas Pasien</h3>
  <div class="grouped fields">
    <div class="required field">
      <label>Nama Pasien</label>
      <input type="text" name="final_nama_pasien" id="final_nama_pasien" value="" placeholder="Masukan Nama Pasien Baru" readonly>
    </div>
    <div class="required field">
      <label>Nama Belakang Pasien</label>
      <input type="text" name="final_nama_alias_pasien" id="final_nama_alias_pasien" placeholder="Masukan Nama Alias Pasien" readonly>
    </div>
    <div class="required field">
      <label>Nomor KTP/SIM</label>
      <input type="text" name="final_nomor_identitas" id="final_nomor_identitas" placeholder="Masukan Nomor KTP / SIM" readonly>
    </div>
    <div class="required field">
      <label>Jenis Kelamin</label>
      <div class="ui fluid selection dropdown disabled" id="final_jenis_kelamin">
        <input type="hidden" name="final_jenis_kelamin" >
        <i class="dropdown icon"></i>
        <div class="default text">Pilih Jenis Kelamin</div>
        <div class="menu">
          <div class="item" data-value="M">Laki-laki</div>
          <div class="item" data-value="F">Perempuan</div>
        </div>
      </div>
    </div>
    <div class="required field">
      <label>Agama</label>
      <div class="ui fluid selection dropdown disabled" id="final_agama">
        <input type="hidden" name="final_agama" >
        <i class="dropdown icon"></i>
        <div class="default text">Pilih Agama</div>
        <div class="menu">
          <div class="item" data-value="BD">Budha</div>
          <div class="item" data-value="HD">Hindu</div>
          <div class="item" data-value="IS">Islam</div>
          <div class="item" data-value="KC">Konghucu</div>
          <div class="item" data-value="KR">Kristen</div>
          <div class="item" data-value="KT">Katholik</div>
          <div class="item" data-value="LL">Lain-lain</div>
        </div>
      </div>
    </div>
    <div class="required field">
      <label>Nomor Handphone</label>
      <input type="text" name="final_nomor_handphone" id="final_nomor_handphone" value="" placeholder="Masukan Nomor Hanphone" readonly>
    </div>
    <div class="required field">
      <label>Tempat dan Tanggal Lahir</label>
      <div class="fields">
        <div class="eight wide field">
          <input type="text" name="final_tempat_lahir" id="final_tempat_lahir" value="" placeholder="Masukan Tempat Lahir" readonly>
        </div>
        <div class="eight wide  field">
          <input type="date" name="final_tgl_lahir" id="final_tgl_lahir" value="" readonly>
        </div>
      </div>
    </div>
    <div class="field">
      <label>Umur Pasien Saat Ini</label>
      <div class="ui right labeled input">
        <input type="text" name="final_umur_pasien" id="final_umur_pasien" value="" readonly>
        <div class="ui label">
          Tahun
        </div>
      </div>
    </div>
  </div>

  <div class="grouped fields">
    <div class="required field">
    <label>Kewarganegaraan</label>
    <div class="ui fluid search selection dropdown disabled" id="final_kewarganegaraan">
      <input type="hidden" name="final_kewarganegaraan" >
      <i class="dropdown icon"></i>
      <div class="default text">Pilih Negara</div>
        <div class="menu">
          @foreach($negaras as $negara)
            <div class="item" data-value="{{ $negara->NationalityID }}">{{ $negara->Nationality }}</div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="required field">
      <label>Provinsi</label>
      <div class="ui fluid search selection dropdown disabled" id="final_provinsi">
        <input type="hidden" name="final_provinsi" >
        <i class="dropdown icon"></i>
        <div class="default text">Pilih Provinsi</div>
        <div class="menu">
          @foreach($provinsis as $provinsi)
            <div class="item" data-value="{{ $provinsi->Propinsi_ID }}">{{ $provinsi->Nama_Propinsi }}</div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="required field">
      <label>Kabupaten</label>
      <div class="ui fluid search selection dropdown disabled" id="final_kabupaten">
        <input type="hidden" name="final_kabupaten" >
        <i class="dropdown icon"></i>
        <div class="default text">Pilih Kabupaten</div>
        <div class="menu">
          @foreach($kabupatens as $kabupaten)
            <div class="item" data-value="{{ $kabupaten->Kode_Kabupaten }}">{{ $kabupaten->Nama_Kabupaten }}</div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="required field">
      <label>Kecamatan/Kota</label>
      <div class="ui fluid search selection dropdown disabled" id="final_kecamatan">
        <input type="hidden" name="final_kecamatan" >
        <i class="dropdown icon"></i>
        <div class="default text">Pilih Kecamatan/Kota</div>
        <div class="menu">
          @foreach($kecamatans as $kecamatan)
            <div class="item" data-value="{{ $kecamatan->KecamatanID }}">{{ $kecamatan->KecamatanNama }}</div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="required field">
      <label>Alamat Pasien Sesuai KTP/SIM</label>
      <textarea name="final_alamat_pasien"  id="final_alamat_pasien" rows="1" style="resize:none" placeholder="Masukan Alamat Pasien" readonly></textarea>
    </div>
    <div class="field">
      <label>Alamat E-mail</label>
      <input type="text" name="final_alamat_email" id="final_alamat_email" value="" placeholder="Masukan Alamat Email" readonly>
    </div>
    <div class="required field">
      <label>Pekerjaan</label>
      <div class="ui fluid search selection dropdown disabled" id="final_pekerjaan">
        <input type="hidden" name="final_pekerjaan">
        <i class="dropdown icon"></i>
        <div class="default text">Pilih Pekerjaan</div>
        <div class="menu">
          @foreach($pekerjaans as $pekerjaan)
            <div class="item" data-value="{{ $pekerjaan->name }}">{{ $pekerjaan->name }}</div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="required field">
      <label>Pendidikan Terakhir</label>
      <div class="ui fluid selection dropdown disabled" id="final_pendidikan">
        <input type="hidden" name="final_pendidikan" >
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
    </div>
    <div class="required field">
      <label>Hambatan Berkomunikasi</label>
      <div class="ui fluid selection dropdown disabled" id="final_hambatan_komunikasi">
        <input type="hidden" name="final_hambatan_komunikasi" >
        <i class="dropdown icon"></i>
        <div class="default text">Apakah Ada Hambatan Berkomunikasi?</div>
        <div class="menu">
          <div class="item" data-value="YA">Ya</div>
          <div class="item selected" data-value="TIDAK">Tidak</div>
        </div>
      </div>
    </div>
    <div class="field">
      <label>Suku/Etnis</label>
      <div class="ui fluid search selection dropdown disabled" id="final_suku">
        <input type="hidden" name="final_suku" >
        <i class="dropdown icon"></i>
        <div class="default text">Pilih Suku/Etnis</div>
        <div class="menu">
          @foreach($etnises as $etnis)
            <div class="item" data-value="{{ $etnis->EtnisID }}"> {{ $etnis->EtnisName }}</div>
          @endforeach
        </div>
      </div>
    </div>

    <h4 class="ui dividing header">Penanggung Jawab Pasien Baru</h4>
    <div class="grouped fields">
      <div class="field">
        <label>Nomor RM</label>
        <input type="text" name="final_nomor_rm" id="final_nomor_rm" value="" placeholder="Masukan Nomor RM" readonly>
      </div>
      <div class="field">
        <div class="ui checkbox">
          <input type="checkbox" name="final_apa_penanggung_punya_nrm" id="final_apa_penanggung_punya_nrm" readonly>
          <label>Saya adalah Pasien Puri Bunda</label>
        </div>
      </div>

      <div class="required field">
        <label>Nama Penanggung Jawab Pasien</label>
        <input type="text" name="final_nama_penanggung_jawab_pasien" id="final_nama_penanggung_jawab_pasien" value="" placeholder="Masukan Nama Penanggung Jawab Pasien" readonly>
      </div>
      <div class="required field">
        <label>Alamat Penanggung Jawab Pasien</label>
        <input type="text" name="final_alamat_penanggung_jawab_pasien" id="final_alamat_penanggung_jawab_pasien" placeholder="Masukan Alamat Penanggung Jawab Pasien" readonly>
      </div>
      <div class="required field">
        <label>Pekerjaan Penanggung Pasien</label>
        <div class="ui fluid search selection dropdown disabled" id="final_pekerjaan_penanggung_jawab">
          <input type="hidden" name="final_pekerjaan_penanggung_jawab">
          <i class="dropdown icon"></i>
          <div class="default text">Pilih Pekerjaan</div>
          <div class="menu">
            @foreach($pekerjaans as $pekerjaan)
              <div class="item" data-value="{{ $pekerjaan->name }}">{{ $pekerjaan->name }}</div>
            @endforeach
          </div>
        </div>
      </div>
      <div class="required field">
        <label>Nomor KTP atau SIM Penanggung Jawab Pasien</label>
        <input type="text" name="final_nomor_ktp_penanggung_jawab_pasien" id="final_nomor_ktp_penanggung_jawab_pasien" placeholder="Masukan Nomor KTP atau SIM Penanggung Jawab Pasien" readonly>
      </div>
      <div class="required field">
        <label>Nomor Handphone Penanggung Jawab Pasien</label>
        <input type="text" name="final_nomor_handphone_penanggung_jawab" id="final_nomor_handphone_penanggung_jawab" value="" placeholder="Masukan Nomor Hanphone Penanggung Jawab Pasien" readonly>
      </div>
      <div class="required field">
        <label>Hubungan Penanggung dengan Pasien</label>
        <div class="ui fluid selection dropdown disabled" id="final_hubungan_penanggung_dengan_pasien">
          <input type="hidden" name="final_hubungan_penanggung_dengan_pasien" >
          <i class="dropdown icon"></i>
          <div class="default text">Pilih Hubungan</div>
          <div class="menu">
            <div class="item" data-value="Pasien Sendiri">Buta Huruf</div>
            <div class="item" data-value="Orang Tua">Orang Tua</div>
            <div class="item" data-value="Suami/Istri">Suami/Istri</div>
            <div class="item" data-value="Anak">Anak</div>
            <div class="item" data-value="Saudara Kandung">Saudara Kandung</div>
            <div class="item" data-value="Teman">Teman</div>
            <div class="item" data-value="Lainnya">Lainnya</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="required field">
    <div class="ui checkbox">
      <input type="checkbox" name="final_konfirmasi" id="final_konfirmasi" value="" class="warning">
      <label >Data Saya Diatas Sudah Benar</label>
    </div>
  </div>

  <button class="ui right labeled icon button right floated primary" type="submit" id="saveData">
    <i class="save icon"></i>
    Kirim Ke Server
  </button>
  <div class="ui labeled icon button right floated negative" id="dataSalah">
    <i class="pencil icon"></i>
    Data Saya Masih Salah
  </div>
{!! Form::close() !!}
