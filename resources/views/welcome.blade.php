@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
                <p class="lead">Kategori</p>
                <div class="list-group" id="tab">
                    @foreach($category as $i)
                    <a href="{{ route('kategori-index',$i->name) }}" class="list-group-item">{{ $i->name }}</a>
                    @endforeach
                </div>
            </div>

            <div class="col-md-9">
                @foreach($blog as $row)
                    <div class="thumbnail">
                        <!-- <img class="img-responsive" src="http://placehold.it/800x300" alt=""> -->
                        <div class="caption-full">
                            <!-- <h4 class="pull-right">$24.99</h4> -->
                            <h4><a href="#">{{ $row->title }}</a>
                            </h4>
                            <p>{{ substr($row->description,0,20) }}..</p>
                        </div>
                       
                    </div>
                @endforeach
            </div>
    </div>
</div>


@endsection
