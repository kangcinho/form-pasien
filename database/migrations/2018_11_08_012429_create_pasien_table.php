<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('NRM')->nullable();
            $table->string('NamaPasien')->nullable();
            $table->string('NoIdentitas')->nullable();
            $table->string('JenisKelamin')->nullable();
            $table->string('TglLahir')->nullable();
            $table->string('TglLahirDiketahui')->nullable();
            $table->string('UmurSaatInput')->nullable();
            $table->string('Pekerjaan')->nullable();
            $table->string('Alamat')->nullable();
            $table->string('PropinsiID')->nullable();
            $table->string('KabupatenID')->nullable();
            $table->string('KecamatanID')->nullable();
            $table->string('DesaID')->nullable();
            $table->string('BanjarID')->nullable();
            $table->string('Phone')->nullable();
            $table->string('Email')->nullable();
            $table->string('JenisPasien')->nullable();
            $table->string('JenisKerjasamaID')->nullable();
            $table->string('AnggotaBaru')->nullable();
            $table->string('CustomerKerjasamaID')->nullable();
            $table->string('CompanyID')->nullable();
            $table->string('NoKartu')->nullable();
            $table->string('Klp')->nullable();
            $table->string('JabatanDiPerusahaan')->nullable();
            $table->string('PasienLoyal')->nullable();
            $table->string('TotalKunjunganRawatInap')->nullable();
            $table->string('TotalKunjunganRawatJalan')->nullable();
            $table->string('KunjunganRJ_TahunIni')->nullable();
            $table->string('KunjunganRI_TahunIni')->nullable();
            $table->string('EtnisID')->nullable();
            $table->string('NationalityID')->nullable();
            $table->string('PasienVVIP')->nullable();
            $table->string('PasienKTP')->nullable();
            $table->string('TglInput')->nullable();
            $table->string('UserID')->nullable();
            $table->string('CaraDatangPertama')->nullable();
            $table->string('DokterID_ReferensiPertama')->nullable();
            $table->string('SedangDirawat')->nullable();
            $table->string('JmlKunjunganHD')->nullable();
            $table->string('JmlKunjunganDB')->nullable();
            $table->string('KomunitasDB')->nullable();
            $table->string('TglMulaiKomunitasDB')->nullable();
            $table->string('JmlRIThnIni')->nullable();
            $table->string('JmlRIOpnameIni')->nullable();
            $table->string('LastDateRI')->nullable();
            $table->string('KodePos')->nullable();
            $table->string('TglRegKasusKecelakaanBaru')->nullable();
            $table->string('NoRegKecelakaanBaru')->nullable();
            $table->string('Aktive_Keanggotaan')->nullable();
            $table->string('Agama')->nullable();
            $table->string('NoANggotaE')->nullable();
            $table->string('NamaAnggotaE')->nullable();
            $table->string('GenderAnggotaE')->nullable();
            $table->string('TglTidakAktif')->nullable();
            $table->string('TipePasienAsal')->nullable();
            $table->string('NoKartuAsal')->nullable();
            $table->string('NamaPerusahaanAsal')->nullable();
            $table->string('PenanggungIsPasien')->nullable();
            $table->string('PenanggungNRM')->nullable();
            $table->string('PenanggungNama')->nullable();
            $table->string('PenanggungAlamat')->nullable();
            $table->string('PenanggungPhone')->nullable();
            $table->string('PenanggungKTP')->nullable();
            $table->string('PenanggungHubungan')->nullable();
            $table->string('PenanggungPekerjaan')->nullable();
            $table->string('Aktif')->nullable();
            $table->string('PasienBlackList')->nullable();
            $table->string('NamaIbuKandung')->nullable();
            $table->string('NonPBI')->nullable();
            $table->string('KdKelas')->nullable();
            $table->string('TempatLahir')->nullable();
            $table->string('JamLahir')->nullable();
            $table->string('BBLahir')->nullable();
            $table->string('PBLahir')->nullable();
            $table->string('LahirNormal')->nullable();
            $table->string('LahirSC')->nullable();
            $table->string('Prematur')->nullable();
            $table->string('NamaAlias')->nullable();
            $table->text('PrintKartu')->nullable();
            $table->text('Pendidikan')->nullable();
            $table->text('HambatanBerkomunikasi')->nullable();
            $table->text('tipePasien')->nullable();
            $table->text('nomor')->nullable();
            $table->text('sisa_antrean')->nullable();
            $table->text('waktu_ambil_tiket')->nullable();
            $table->text('waktu_ambil_booking')->nullable();
            $table->text('waktu_konfirmasi')->nullable();
            $table->timestamps();

            // change at my.cnf
            //innodb_strict_mode=0
            // innodb_log_file_size = 512M
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasien');
    }
}
