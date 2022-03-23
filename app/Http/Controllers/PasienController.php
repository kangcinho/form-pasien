<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasien;
use App\Http\Requests\PasienRequestForm;
use App\Pekerjaan;
use App\Http\Controllers\PrinterController;

class PasienController extends Controller
{
  public function getPasienIndividual($nrm){
      $pasien = \DB::connection('sqlsrv')->table('mPasien')->where('NRM', $nrm)->first();
      if($pasien){
        return response()->json(array('data' => $pasien, 'flag' => "sqlserver"));
      }else{
        return response()->json(array('msg'=> "No RM <b>".$nrm."</b> Belum Terdaftar pada Sistem Sanata"));
      }
  }

  public function showPasien(){
  	$etnises = $this->getEtnis();
  	$negaras = $this->getNegara();
    $kecamatans = $this->getKecamatan();
    $kabupatens = $this->getKabupaten();
  	$provinsis = $this->getProvinsi();
  	$perusahaans = $this->getPerusahaan();
    $pekerjaans = $this->getPekerjaan();
  	return view('pasien.daftar_pasien', compact('etnises', 'negaras','provinsis','kecamatans','kabupatens','perusahaans','pekerjaans'));
  }

  public function getEtnis(){
  	// $data = \DB::connection('sqlsrv')->statement('select EtnisID, EtnisName FROM mEtnis');
  	$data = \DB::connection('sqlsrv')->table('mEtnis')->get();
  	return $data;
  }

  public function getNegara(){
  	$data = \DB::connection('sqlsrv')->table('mNationality')->get();
  	return $data;
  }

  public function getProvinsi(){
  	$data = \DB::connection('sqlsrv')->table('mPropinsi')->get();
  	return $data;
  }

  public function getKabupatenAjax($idPropinsi){
    $data = \DB::connection('sqlsrv')->table('mKabupaten')->where('PropinsiID',$idPropinsi)->get();
    return response()->json(array('data' => $data));
  }

  public function getKecamatanAjax($idKabupaten){
  	$data = \DB::connection('sqlsrv')->table('mKecamatan')->where('KabupatenID',$idKabupaten)->get();
  	return response()->json(array('data' => $data));
  }

  public function getKabupaten(){
    $data = \DB::connection('sqlsrv')->table('mKabupaten')->get();
    return $data;
  }

  public function getKecamatan(){
    $data = \DB::connection('sqlsrv')->table('mKecamatan')->get();
    return $data;
  }

  public function getDesa(){
  	$data = \DB::connection('sqlsrv')->table('mDesa')->get();
  	return $data;
  }

  public function getPerusahaan(){
  	$data = \DB::connection('sqlsrv')->table('VW_Kerjasama')->orderBy('CustomerKerjasamaID')->orderBy('NamaKelas','asc')->get();
  	return $data;
  }

  function getNRMTemp(){
    $nrm = \DB::connection('sqlsrv')->select("exec mPasien_GetNRMPasienTemp");
    return $nrm;
  }

  public function getPerusahaanBPJS(){
    $data = \DB::connection('sqlsrv')->table('VW_Kerjasama')->where('JenisKerjasama','BPJS')->orderBy('CustomerKerjasamaID')->get();
  	return response()->json(array('data' => $data));
  }

  public function getPerusahaanIKS(){
    $data = \DB::connection('sqlsrv')->table('VW_Kerjasama')->where('JenisKerjasama','IKS')->where('Nama_Customer','!=','-')->where('Nama_Customer','not like','%xx%')->get();
    return response()->json(array('data' => $data));
  }

  public function getPekerjaan(){
    $pekerjaan = Pekerjaan::all();
    return $pekerjaan;
  }
  public function savePasien(PasienRequestForm $request){
      $final_jenis_kerjasama = $request->final_jenis_kerjasama;
      $JenisPasien = '';
      if($final_jenis_kerjasama == "2"){
        $JenisPasien = "IKS";
      }else if($final_jenis_kerjasama == "3"){
        $JenisPasien = "UMUM";
      }else if($final_jenis_kerjasama == "9"){
        $JenisPasien = "BPJS";
      }
      $final_tipe_pasien = $request->final_tipe_pasien;
      if($final_tipe_pasien == "1"){
        $final_tipe_pasien = "RJ";
      }else{
        $final_tipe_pasien = "RI";
      }

      $final_nama_perusahaan = explode("&kangcinho&",$request->final_nama_perusahaan);
      $final_nomor_anggota = $request->final_nomor_anggota;
      $final_kelompok_anggota = $request->final_kelompok_anggota;
      $final_kelas_pertanggungan = $request->final_kelas_pertanggungan;
      $final_nomor_anggota_penanggung_jawab = $request->final_nomor_anggota_penanggung_jawab;
      $final_nama_anggota_penanggung_jawab = $request->final_nama_anggota_penanggung_jawab;
      $final_jenis_kelamin_anggota_penanggung_jawab = $request->final_jenis_kelamin_anggota_penanggung_jawab;
      $final_nama_pasien = $request->final_nama_pasien;
      $final_nama_alias_pasien = $request->final_nama_alias_pasien;
      $final_nomor_identitas = $request->final_nomor_identitas;
      $final_jenis_kelamin = $request->final_jenis_kelamin;
      $final_agama = $request->final_agama;
      $final_nomor_handphone = $request->final_nomor_handphone;
      $final_tempat_lahir = $request->final_tempat_lahir;
      $final_tgl_lahir = $request->final_tgl_lahir;
      $final_umur_pasien = $request->final_umur_pasien;
      $final_kewarganegaraan = $request->final_kewarganegaraan;
      $final_provinsi = $request->final_provinsi;
      $final_kecamatan = $request->final_kecamatan;
      $final_kabupaten = $request->final_kabupaten;
      $final_alamat_pasien = $request->final_alamat_pasien;
      $final_alamat_email = $request->final_alamat_email;
      $final_pekerjaan = $request->final_pekerjaan;
      $final_pendidikan = $request->final_pendidikan;
      $final_hambatan_komunikasi = $request->final_hambatan_komunikasi;
      $final_suku = $request->final_suku;
      $final_konfirmasi = $request->final_konfirmasi;

      $final_nomor_rm = $request->final_nomor_rm;
      $final_nama_penanggung_jawab_pasien = $request->final_nama_penanggung_jawab_pasien;
      $final_apa_penanggung_punya_nrm = $request->final_apa_penanggung_punya_nrm;
      if ($final_apa_penanggung_punya_nrm == "on"){
        $final_apa_penanggung_punya_nrm = 1;
      }else{
        $final_apa_penanggung_punya_nrm = 0;
      }
      $final_alamat_penanggung_jawab_pasien = $request->final_alamat_penanggung_jawab_pasien;
      $final_pekerjaan_penanggung_jawab = $request->final_pekerjaan_penanggung_jawab;
      $final_nomor_ktp_penanggung_jawab_pasien = $request->final_nomor_ktp_penanggung_jawab_pasien;
      $final_nomor_handphone_penanggung_jawab = $request->final_nomor_handphone_penanggung_jawab;
      $final_hubungan_penanggung_dengan_pasien = $request->final_hubungan_penanggung_dengan_pasien;

      // NOT NULL
      $nrm = $this->getNRMTemp();
      // $final_nama_pasien = 'Ho';
      // $final_jenis_kelamin = 'M';
      // $final_umur_pasien = 22;
      // $final_jenis_kerjasama = 3;

      // TglLahirDiketahui
      // AnggotaBaru
      // PasienLoyal
      // TotalKunjunganRawatInap
      // TotalKunjunganRawatJalan
      // KunjunganRJ_TahunIni
      // KunjunganRI_TahunIni
      // PasienVVIP
      // PasienKTP
      // SedangDirawat
      // JmlKunjunganDB
      // KomunitasDB
      // Aktive_Keanggotaan

      if($final_nama_perusahaan[0] == ""){
        $final_nama_perusahaan[0] = null;
        $final_nama_perusahaan[1] = null;
      }

      if($final_nomor_anggota == ""){
        $final_nomor_anggota = null;
      }

      if($final_kelompok_anggota == ""){
        $final_kelompok_anggota = null;
      }

      if($final_kelas_pertanggungan == ""){
        $final_kelas_pertanggungan = null;
      }

      if($final_nomor_anggota_penanggung_jawab == ""){
        $final_nomor_anggota_penanggung_jawab = null;
      }

      if($final_nama_anggota_penanggung_jawab == ""){
        $final_nama_anggota_penanggung_jawab = null;
      }

      if($final_jenis_kelamin_anggota_penanggung_jawab == ""){
        $final_jenis_kelamin_anggota_penanggung_jawab = null;
      }
      // dd($final_tgl_lahir);
      \DB::connection('sqlsrv')->table('mPasien_temp')->insert([
          'NRM' => $nrm[0]->nrm,
          'NamaPasien' => $final_nama_pasien,
          'NoIdentitas' => $final_nomor_identitas,
          'JenisKelamin' => $final_jenis_kelamin,
          'TglLahir' => $final_tgl_lahir,
          'TglLahirDiketahui' => 1,
          'UmurSaatInput' => $final_umur_pasien,
          'Pekerjaan' => $final_pekerjaan,
          'Alamat' => $final_alamat_pasien,
          'PropinsiID' => $final_provinsi,
          'KabupatenID' => $final_kabupaten,
          'KecamatanID' => $final_kecamatan,
          'DesaID' => '',
          'BanjarID' => '',
          'Phone' => $final_nomor_handphone,
          'Email' => $final_alamat_email,
          'JenisPasien' => $JenisPasien,
          'JenisKerjasamaID' => $final_jenis_kerjasama,
          'AnggotaBaru' => 1,
          'CustomerKerjasamaID' => $final_nama_perusahaan[1],
          'CompanyID' => $final_nama_perusahaan[0],
          'NoKartu' => $final_nomor_anggota,
          'Klp' => $final_kelompok_anggota,
          'JabatanDiPerusahaan' => '',
          'PasienLoyal' => 0,
          'TotalKunjunganRawatInap' => 0,
          'TotalKunjunganRawatJalan' => 0,
          'KunjunganRJ_TahunIni' => 0,
          'KunjunganRI_TahunIni' => 0,
          'EtnisID' => $final_suku,
          'NationalityID' => $final_kewarganegaraan,
          'PasienVVIP' => 0,
          'PasienKTP' => 1,
          'TglInput' => \Carbon\Carbon::now(),
          'UserID' => '',
          'CaraDatangPertama' => 'SENDIRI',
          'DokterID_ReferensiPertama' => null,
          'SedangDirawat' => 0,
          'JmlKunjunganHD' => null,
          'JmlKunjunganDB' => 0,
          'KomunitasDB' => 0,
          'TglMulaiKomunitasDB' => null,
          'JmlRIThnIni' => null,
          'JmlRIOpnameIni' => null,
          'LastDateRI' => null,
          'KodePos' => '',
          'TglRegKasusKecelakaanBaru' => null,
          'NoRegKecelakaanBaru' => null,
          'Aktive_Keanggotaan' => 1,
          'Agama' => $final_agama,
          'NoANggotaE' => $final_nomor_anggota_penanggung_jawab,
          'NamaAnggotaE' => $final_nama_anggota_penanggung_jawab,
          'GenderAnggotaE' => $final_jenis_kelamin_anggota_penanggung_jawab,
          'TglTidakAktif' => null,
          'TipePasienAsal' => null,
          'NoKartuAsal' => null,
          'NamaPerusahaanAsal' => null,
          'PenanggungIsPasien' => $final_apa_penanggung_punya_nrm,
          'PenanggungNRM' => $final_nomor_rm,
          'PenanggungNama' => $final_nama_penanggung_jawab_pasien,
          'PenanggungAlamat' => $final_alamat_penanggung_jawab_pasien,
          'PenanggungPhone' => $final_nomor_handphone_penanggung_jawab,
          'PenanggungKTP' => $final_nomor_ktp_penanggung_jawab_pasien,
          'PenanggungHubungan' => $final_hubungan_penanggung_dengan_pasien,
          'PenanggungPekerjaan' => $final_pekerjaan_penanggung_jawab,
          'Aktif' => '1',
          'PasienBlackList' => '0',
          'NamaIbuKandung' => '',
          'NonPBI' => '0',
          'KdKelas' => $final_kelas_pertanggungan,
          'TempatLahir' => $final_tempat_lahir,
          'JamLahir' => null,
          'BBLahir' => null,
          'PBLahir' => null,
          'LahirNormal' => null,
          'LahirSC' => null,
          'Prematur' => null,
          'NamaAlias' => $final_nama_alias_pasien,
          'PrintKartu' => 0,
          'Pendidikan' => $final_pendidikan,
          'HambatanBerkomunikasi' => $final_hambatan_komunikasi
      ]);

      \DB::connection('mysql')->table('pasien')->insert([
          'NRM' => $nrm[0]->nrm,
          'NamaPasien' => $final_nama_pasien,
          'NoIdentitas' => $final_nomor_identitas,
          'JenisKelamin' => $final_jenis_kelamin,
          'TglLahir' => $final_tgl_lahir,
          'TglLahirDiketahui' => 1,
          'UmurSaatInput' => $final_umur_pasien,
          'Pekerjaan' => $final_pekerjaan,
          'Alamat' => $final_alamat_pasien,
          'PropinsiID' => $final_provinsi,
          'KabupatenID' => $final_kabupaten,
          'KecamatanID' => $final_kecamatan,
          'DesaID' => '',
          'BanjarID' => '',
          'Phone' => $final_nomor_handphone,
          'Email' => $final_alamat_email,
          'JenisPasien' => $JenisPasien,
          'JenisKerjasamaID' => $final_jenis_kerjasama,
          'AnggotaBaru' => 1,
          'CustomerKerjasamaID' => $final_nama_perusahaan[1],
          'CompanyID' => $final_nama_perusahaan[0],
          'NoKartu' => $final_nomor_anggota,
          'Klp' => $final_kelompok_anggota,
          'JabatanDiPerusahaan' => '',
          'PasienLoyal' => 0,
          'TotalKunjunganRawatInap' => 0,
          'TotalKunjunganRawatJalan' => 0,
          'KunjunganRJ_TahunIni' => 0,
          'KunjunganRI_TahunIni' => 0,
          'EtnisID' => $final_suku,
          'NationalityID' => $final_kewarganegaraan,
          'PasienVVIP' => 0,
          'PasienKTP' => 1,
          'TglInput' => \Carbon\Carbon::now(),
          'UserID' => '',
          'CaraDatangPertama' => 'SENDIRI',
          'DokterID_ReferensiPertama' => null,
          'SedangDirawat' => 0,
          'JmlKunjunganHD' => null,
          'JmlKunjunganDB' => 0,
          'KomunitasDB' => 0,
          'TglMulaiKomunitasDB' => null,
          'JmlRIThnIni' => null,
          'JmlRIOpnameIni' => null,
          'LastDateRI' => null,
          'KodePos' => '',
          'TglRegKasusKecelakaanBaru' => null,
          'NoRegKecelakaanBaru' => null,
          'Aktive_Keanggotaan' => 1,
          'Agama' => $final_agama,
          'NoANggotaE' => $final_nomor_anggota_penanggung_jawab,
          'NamaAnggotaE' => $final_nama_anggota_penanggung_jawab,
          'GenderAnggotaE' => $final_jenis_kelamin_anggota_penanggung_jawab,
          'TglTidakAktif' => null,
          'TipePasienAsal' => null,
          'NoKartuAsal' => null,
          'NamaPerusahaanAsal' => null,
          'PenanggungIsPasien' => $final_apa_penanggung_punya_nrm,
          'PenanggungNRM' => $final_nomor_rm,
          'PenanggungNama' => $final_nama_penanggung_jawab_pasien,
          'PenanggungAlamat' => $final_alamat_penanggung_jawab_pasien,
          'PenanggungPhone' => $final_nomor_handphone_penanggung_jawab,
          'PenanggungKTP' => $final_nomor_ktp_penanggung_jawab_pasien,
          'PenanggungHubungan' => $final_hubungan_penanggung_dengan_pasien,
          'PenanggungPekerjaan' => $final_pekerjaan_penanggung_jawab,
          'Aktif' => '1',
          'PasienBlackList' => '0',
          'NamaIbuKandung' => '',
          'NonPBI' => '0',
          'KdKelas' => $final_kelas_pertanggungan,
          'TempatLahir' => $final_tempat_lahir,
          'JamLahir' => null,
          'BBLahir' => null,
          'PBLahir' => null,
          'LahirNormal' => null,
          'LahirSC' => null,
          'Prematur' => null,
          'NamaAlias' => $final_nama_alias_pasien,
          'PrintKartu' => 0,
          'Pendidikan' => $final_pendidikan,
          'HambatanBerkomunikasi' => $final_hambatan_komunikasi,
          'tipePasien' => $final_tipe_pasien
      ]);

      $status = "Data Pasien: <b>$final_nama_pasien</b> Berhasil Tersimpan!<br/>
      Nomor Rekam Medis Sementara Anda adalah <b>".$nrm[0]->nrm."</b><br/>Segera Lakukan Proses Registrasi pada Loket Registrasi Puri Bunda Untuk Mendapatkan Nomor Rekam Medis Tetap.";
      $etnises = $this->getEtnis();
      $negaras = $this->getNegara();
      $provinsis = $this->getProvinsi();
      $kecamatans = $this->getKecamatan();
      $kabupatens = $this->getKabupaten();
      $perusahaans = $this->getPerusahaan();
      $pekerjaans = $this->getPekerjaan();

      $tanggalSekarang = \Carbon\Carbon::now()->toDateString();
      $printing = new PrinterController();
      $printing->print($nrm[0]->nrm);


      if($final_tipe_pasien == "RJ"){
        $final_tgl_lahir = $this->tanggalView($final_tgl_lahir);
        $tanggalSekarang = $this->tanggalView($tanggalSekarang);
        return view('print.generalConsentRJ', compact('final_nama_pasien', 'final_tgl_lahir', 'final_nama_penanggung_jawab_pasien', 'tanggalSekarang'));
      }else{
        $final_tgl_lahir = $this->tanggalView($final_tgl_lahir);
        $tanggalSekarang = $this->tanggalView($tanggalSekarang);
        return view('print.generalConsentRI', compact('final_nama_pasien', 'final_tgl_lahir', 'final_nama_penanggung_jawab_pasien', 'tanggalSekarang'));
      }
      return view('pasien.daftar_pasien', compact('etnises', 'negaras','provinsis', 'kecamatans','kabupatens','perusahaans', 'status','pekerjaans'));
  }
  public function tanggalView($date){
    $tanggal = explode('-',$date)[2];
    $bulan = explode('-',$date)[1];
    $tahun = explode('-',$date)[0];

    switch($bulan){
      case "01" : $bulan = "Januari"; break;
      case "02" : $bulan = "Februari"; break;
      case "03" : $bulan = "Maret"; break;
      case "04" : $bulan = "April"; break;
      case "05" : $bulan = "Mei"; break;
      case "06" : $bulan = "Juni"; break;
      case "07" : $bulan = "Juli"; break;
      case "08" : $bulan = "Agustus"; break;
      case "09" : $bulan = "September"; break;
      case "10" : $bulan = "Oktober"; break;
      case "11" : $bulan = "November"; break;
      case "12" : $bulan = "Desember"; break;
    }
    return $tanggal." ".$bulan." ".$tahun;
  }

  public function showGlobal(){
	// $test = \DB::connection('mysql_global_printing')->table('log_tqueue')->get();
	// dd($test);
  }
}
