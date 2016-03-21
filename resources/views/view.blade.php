@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

            <div class="col-md-12">
               
                    <div class="thumbnail">
                        <!-- <img class="img-responsive" src="http://placehold.it/800x300" alt=""> -->
                        <div class="caption-full">
                            <!-- <h4 class="pull-right">$24.99</h4> -->
                            <h4><a href="#">{{ $blog->title }}</a>
                            </h4>
                            <p>{{ $blog->description }}</p>
                        </div>
                       
                    </div>
                
            </div>
    </div>
</div>

@endsection
