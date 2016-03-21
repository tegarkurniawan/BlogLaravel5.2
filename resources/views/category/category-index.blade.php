@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<ol class="breadcrumb">
		  <li><a href="/home">Beranda</a></li>
		  <li><a href="{{ route('category-index') }}">Kategori</a></li>
		</ol>
		<a href="{{ route('category-create') }}" class="btn btn-primary">Tambah Kategori&nbsp;&nbsp;&nbsp;<i class="fa fa-plus"></i></a>
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr >
						<th>Name</th>
						<th>Action</th>
					</tr>
				</thead>		
	    		<tbody>
					@foreach($category as $row)
					<tr>
						<td>{{ $row->name }}</td>
						<td><a href="{{ route('category-destroy', $row->id)}}" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" class="btn btn-danger"><i class="fa fa-trash "></i></a>&nbsp;&nbsp;<a href="{{ route('category-edit', $row->id)}}" class="btn btn-success"><i class="fa fa-pencil"></i></a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>	
@endsection
