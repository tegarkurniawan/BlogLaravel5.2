@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<ol class="breadcrumb">
		  <li><a href="/home">Beranda</a></li>
		  <li><a href="{{ route('blog-index') }}">Kontent</a></li>
		</ol>
		<a href="{{ route('blog-create') }}" class="btn btn-primary">Tambah Kontent&nbsp;&nbsp;&nbsp;<i class="fa fa-plus"></i></a>
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr >
						<th>Judul</th>
						<th>Keterangan</th>
						<th>Kategori</th>
						<th>Action</th>
					</tr>
				</thead>		
	    		<tbody>
					@foreach($blog as $row)
					<tr>
						<td>{{ $row->title }}</td>
						<td>{{ $row->description }}</td>
						<td>{{ $row->category->name}}</td>
						<td><a href="{{ route('blog-destroy', $row->id)}}" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" class="btn btn-danger"><i class="fa fa-trash "></i></a>&nbsp;&nbsp;<a href="{{ route('blog-edit',$row->id) }}" class="btn btn-success"><i class="fa fa-pencil"></i></a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>	
@endsection
