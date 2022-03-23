<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
use Mike42\Escpos\EscposImage;
use App\Pasien;
use Mike42\Escpos\PrintConnectors\NetworkPrintConnector;
use Mike42\Escpos\Printer;
use Mike42\Escpos\CapabilityProfile;
use GuzzleHttp\Client;

class PrinterController extends Controller
{
  public function print($nrm){
    // dd($nrm);
    // $tanggalSekarangAll = \Carbon\Carbon::now();
    // $tanggalSekarangWaktu = \Carbon\Carbon::now()->toDateTimeString();
    // $HariSekarang = \Carbon\Carbon::now()->format('D');

    // $tanggalSekarang = $tanggalSekarangAll->toDateString();
    // $tanggalAwalSekarang = $tanggalSekarang." 00:00:00";
    // $tanggalAkhirSekarang = $tanggalSekarang." 23:59:59";
    
    $dataGlobalPrinting = $this->getNomorAntreanFromAPI();
    
    if($this->saveAntrian($dataGlobalPrinting,$nrm)){
      try {
        //Package ESC POS PHP
        //whoami adalah nama komputer client
        //astungkara adalah password komputer
        //192.168.1.60 adalah IP address komputer 
        //EPSON TM-U220 Receipt_ adalah nama Printer yang terinstall dalam komputer client
        $connector = new WindowsPrintConnector("smb://whoami:astungkara@192.168.1.60/EPSON TM-U220 Receipt_");
        $printer = new Printer($connector);

        $printer -> setLineSpacing(35);
        $printer -> setFont(Printer::FONT_C);
        $printer -> setJustification(Printer::JUSTIFY_CENTER);

        //LOGO
        $logo = EscposImage::load(public_path('img/logo/logo_cetak.png'));
        $printer -> bitImageColumnFormat($logo,Printer::IMG_DOUBLE_HEIGHT);

        //NOMOR RM
        $printer->text($nrm);
        $printer->feed();

        //TUJUAN
        $printer->setEmphasis(true);
        $printer->text("Admission");
        $printer->feed();
        $printer->feed();

        //NOMOR ANTREAN
        $printer -> selectPrintMode(Printer::MODE_DOUBLE_WIDTH | Printer::MODE_DOUBLE_HEIGHT);
        $printer->text($dataGlobalPrinting->nomor);
        $printer->feed();
        $printer->setEmphasis(false);
        $printer->selectPrintMode();

        //SISA ANTREAN
        $printer->text("Sisa Antrean: ".$dataGlobalPrinting->sisa_antrian);
        $printer->feed();

        //HARI, TANGGAL
        $printer->text($dataGlobalPrinting->tanggal);
        $printer->feed();

        //TERIMA KASIH
        $printer->text("Terima Kasih");
        $printer->feed();
        $printer->cut();
        $printer->close();
      }catch(Exception $e){
        //return back();
      }
    }
    // return view('')
  }

  //Mendapatkan Nomor Antrean SElanjutnya dari Sistem Antrean 2000
  public function getNomorAntreanFromAPI(){
    $client = new Client();
    $response_data = '';
    $tanggal = explode(' ',\Carbon\Carbon::now())[0];
    $res = $client->request('GET','http://192.168.7.228:2000/webservices?status=DAFTAR_LOKAL&jadwal=95&id_customer=&layanan=9&tgl_booking=$tanggal&booking_type=w&payment');

    if ($res->getStatusCode() == 200) { // 200 OK
        $response_data = json_decode($res->getBody()->getContents());
    }
    return $response_data->data;
  }

  public function saveAntrian($dataApi,$nrm){
    $tanggalSekarang = \Carbon\Carbon::now();
    $tanggalSekarangTime = $tanggalSekarang->toDateTimeString();

    $pasien = Pasien::where('nrm',$nrm)->first();
    $pasien->nomor = $dataApi->nomor;
    $pasien->waktu_ambil_tiket = $tanggalSekarangTime;
    $pasien->waktu_ambil_booking = $tanggalSekarangTime;
    $pasien->waktu_konfirmasi = $tanggalSekarangTime;
    $pasien->sisa_antrean = $dataApi->sisa_antrian;
    $pasien->created_at = \Carbon\Carbon::now();
    $pasien->save();
    return true;
  }

    // public function getNomorAntrean($tanggalAwalSekarang, $tanggalAkhirSekarang){
    //   // $query = "SELECT COUNT(*) FROM log_tqueue WHERE waktu_ambil_tiket >= $tanggalAwalSekarang AND waktu_ambil_tiket <= $tanggalAkhirSekarang AND layanan = 9";
    //   $nomorAntrean = \DB::connection('mysql_global_printing')->table('log_tqueue')->where('waktu_ambil_tiket','>=',$tanggalAwalSekarang)->where('waktu_ambil_tiket','<=',$tanggalAkhirSekarang)->where('layanan', 9)->count('*');
    //   if(strlen($nomorAntrean) == 1){
    //     if($nomorAntrean == 9){
    //       $nomorAntrean = "A0".($nomorAntrean+1);
    //     }else{
    //       $nomorAntrean = "A00".($nomorAntrean+1);
    //     }
    //   }else if(strlen($nomorAntrean) == 2){
    //     if($nomorAntrean == 99){
    //       $nomorAntrean = "A".($nomorAntrean+1);
    //     }else{
    //       $nomorAntrean = "A0".($nomorAntrean+1);
    //     }
    //   }
    //   return $nomorAntrean;
    // }

    // public function getSisaAntrean($tanggalAwalSekarang,$tanggalAkhirSekarang){
    //   $sisaAntrean = "Sisa Antrian: 20";
    //   $sisaAntrean = \DB::connection('mysql_global_printing')->table('log_tqueue')->where('waktu_ambil_tiket','>=',$tanggalAwalSekarang)->where('waktu_ambil_tiket','<=',$tanggalAkhirSekarang)->where('layanan', 9)->where('status','=',4)->count('*');

    //   $sisaAntrean = "Sisa Antrian: ".($sisaAntrean-1);
    //   return $sisaAntrean;
    // }

    // public function getSisaAntreanAfterSave($tanggalAwalSekarang,$tanggalAkhirSekarang){
    //   $sisaAntrean = "Sisa Antrian: 20";
    //   $sisaAntrean = \DB::connection('mysql_global_printing')->table('log_tqueue')->where('waktu_ambil_tiket','>=',$tanggalAwalSekarang)->where('waktu_ambil_tiket','<=',$tanggalAkhirSekarang)->where('layanan', 9)->where('status','=',4)->count('*');

    //   $sisaAntrean = "Sisa Antrian: ".($sisaAntrean);
    //   return $sisaAntrean;
    // }

    // public function getMaxNomor(){
    //   $maxKodeBooking = \DB::connection('mysql_global_printing')->table('log_tqueue')->max('kode_booking');
    //   return ($maxKodeBooking+1);
    // }

    // public function getTanggal($tanggal, $hari){
    //   $tgl = explode(" ",$tanggal)[0];
    //   $tanggalPakai = explode("-",$tgl)[2];
    //   $bulanPakai = explode("-",$tgl)[1];
    //   $tahunPakai = explode("-",$tgl)[0];

    //   $waktu = explode(" ",$tanggal)[1];
    //   $jamPakai = explode(":",$waktu)[0];
    //   $menitPakai = explode(":",$waktu)[1];

    //   switch($hari){
    //     case "Mon" : $hari = "Senin"; break;
    //     case "Tue" : $hari = "Selasa"; break;
    //     case "Wed" : $hari = "Rabu"; break;
    //     case "Thu" : $hari = "Kamis"; break;
    //     case "Fri" : $hari = "Jumat"; break;
    //     case "Sat" : $hari = "Sabtu"; break;
    //     case "Sun" : $hari = "Minggu"; break;
    //   }
    //   return $hari.", ".$tanggalPakai."-".$bulanPakai."-".$tahunPakai." ".$jamPakai.":".$menitPakai;
    // }
}
