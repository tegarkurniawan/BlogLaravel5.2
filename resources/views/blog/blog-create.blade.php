@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">

		<ol class="breadcrumb">
		  <li><a href="/home">Beranda</a></li>
		  <li><a href="{{ route('blog-index') }}">Kontent</a></li>
		  <li><a href="{{ route('blog-create') }}">Tambah Kontent</a></li>
		</ol>

		{!! Form::open(['route' => ['blog-store'],'method' => 'POST']) !!}
		  <div class="form-group">
		    <label for="name">Judul:</label>
		    {!! Form::text('title', null, ['class' => 'form-control']) !!}
		  </div>
		  <div class="form-group">
		    <label for="name">Keterangan:</label>
		    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
		  </div>
		  <div class="form-group">
		    <label for="name">Kategori:</label>
		    {!! Form::select('category_id', $category, null, ['class' => 'form-control']) !!}
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