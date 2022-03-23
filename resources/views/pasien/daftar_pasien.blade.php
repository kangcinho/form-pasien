@extends('master.index')
@section('title','Pendaftaran Kartu Berobat Pasien RSIA Puri Bunda')
@section('content')

@if(isset($status))
<div class="ui warning message transition">
  <i class="close icon"></i>
  <div class="header">
    Data Berhasil Disimpan!
  </div>
  {!!$status!!}
</div>
@endif

<div class="ui column center aligned page grid">

	<div class="ui tabular tiny menu" id="navigasi">
	  <a class="item" data-tab="first" id="navigasi_jenis_kerjasama">Jenis Kerjasama</a>
	  <a class="item" data-tab="second" id="navigasi_data_kerjasama">Data Kerjasama</a>
	  <a class="item" data-tab="third"  id="navigasi_identitas_pasien_i">Identitas Pasien</a>
	  <a class="item" data-tab="fourth" id="navigasi_identitas_pasien_ii">Identitas Pasien</a>
	  <a class="item" data-tab="fiveth" id="navigasi_identitas_pasien_iii">Identitas Pasien</a>
	  <a class="item" data-tab="fiveth" id="navigasi_penanggung_jawab_pasien">Penanggung Jawab Pasien</a>
	  <a class="item" data-tab="sixth"  id="navigasi_final_data">Final Data</a>
	</div>
	<div class="column left aligned fifteen wide">
		<div class="ui small form">
      <div class="ui segment clearing" id="segment_tipe_pasien">
        @include('pasien.segment_tipe_pasien')
      </div>

			<div class="ui segment clearing" id="segment_jenis_kerjasama">
				@include('pasien.segment_jenis_kerjasama')
			</div>

			<div class="ui segment clearing" id="segment_data_kerjasama">
				@include('pasien.segment_data_kerjasama')
			</div>

			<div class="ui segment clearing" id="segment_identitas_pasien_i">
				@include('pasien.segment_identitas_pasien_i')
			</div>

			<div class="ui segment clearing" id="segment_identitas_pasien_ii">
				@include('pasien.segment_identitas_pasien_ii')
			</div>

			<div class="ui segment clearing" id="segment_identitas_pasien_iii">
				@include('pasien.segment_identitas_pasien_iii')
			</div>

			<div class="ui segment clearing" id="segment_penanggung_jawab_pasien">
				@include('pasien.segment_penanggung_jawab_pasien')
			</div>
		</div>

		<div id="segment_all_data">
			<h3 class="ui top attached header centered info message">
				Konfirmasi Data Pasien Baru <span id="title_form_data"></span>
			</h3>
			<div class="ui attached segment clearing">
				@include('pasien.segment_all_data')
			</div>
		</div>
	</div>
</div>
@endsection

@section('additionalJS')
	<script type="text/javascript" src="{{ asset('js/pasien/general.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/pasien/function_getAge.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/pasien/validasi_kerjasama.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/pasien/validasi_identitas_pasien_i.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/pasien/validasi_identitas_pasien_ii.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/pasien/validasi_identitas_pasien_iii.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/pasien/validasi_penanggung_jawab_pasien.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/pasien/searchPasien.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/pasien/function_validation.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/navigasi/navigasi_data_kerjasama.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/navigasi/navigasi_identitas_pasien_i.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/navigasi/navigasi_identitas_pasien_ii.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/navigasi/navigasi_identitas_pasien_iii.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/navigasi/navigasi_penanggung_jawab_pasien.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/demografi/getKabupaten.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/demografi/getKecamatan.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/pasien/getPerusahaan.js') }}"></script>
@endsection
