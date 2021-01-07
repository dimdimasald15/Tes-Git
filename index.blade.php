@extends('template')

@section('main')
<div id="siswa">
	<h2><br/>Siswa<br/><br/> </h2>

	@if (!empty($siswa_list))
	<table class = "table table-striped">
	 <thead class="thead-dark">
			<tr>
				<th>NISN</th>
				<th>Nama</th>
				<th>Tgl Lahir</th>
				<th>Jenis Kelamin</th>
				<th><center>Action</center></th>
			</tr>
		</thead>
		<tbody>
			@foreach($siswa_list as $siswa)
			<tr>
				<td>{{$siswa->nisn}}</td>
				<td>{{$siswa->nama_siswa}}</td>
				<td>{{$siswa->tanggal_lahir}}</td>
				<td>{{$siswa->jenis_kelamin}}</td>
				<td><a class ="btn btn-success btn-sm" href="{{url('siswa/' .$siswa->id) }}">Detail</a></td>
				<td><a class ="btn btn-warning btn-sm" href="{{url('siswa/' .$siswa->id.'/edit') }}">Edit</a></td>
				<td><a class ="btn btn-danger btn-sm" href="{{url('siswa/' .$siswa->id.'/delete') }}">Delete</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<center><br/><a href="{{url('siswa/create')}}" class="btn btn-primary">Tambah Siswa</a></center>
	@else
		<p>Tidak ada data siswa.</p>
	@endif
</div>
@stop

@section('footer')
<div id="footer">
	<footer>
		<center>
			<p>
				<br/><br/>&copy; 2020 Belajar_laravel
			</p>
		</center>
	</footer>
</div>
@stop