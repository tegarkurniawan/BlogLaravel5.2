@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">

		<ol class="breadcrumb">
		  <li><a href="/home">Beranda</a></li>
		  <li><a href="{{ route('category-index') }}">Kategori</a></li>
		  <li><a href="{{ route('category-create') }}">Tambah Kategori</a></li>
		</ol>

		{!! Form::open(['route' => ['category-store'],'method' => 'POST']) !!}
		  <div class="form-group">
		    <label for="name">Nama Kategori:</label>
		    {!! Form::text('name', null, ['class' => 'form-control']) !!}

		  </div>
		  {!! Form::submit('Simpan', ['class' => 'btn btn-success']) !!}
		{!! Form::close() !!}
		<br>
		@if($errors->any())
                  
          	 <ul class="alert alert-danger">
                    
                @foreach($errors->all() as $error)

                   <li style="margin-left:5px;">{{ $error }}</li>

                @endforeach

            </ul>

         @endif
	</div>
</div>
@endsection