@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="page-title">Todo List</h1>
        </div>

        <div class="col-lg-12">
            <form action="{{ route ('todo.store') }}" method="post" enctype="multipart/form-data">
                @csrf  
                
                <!--without this token can't get request in using this method security is high-->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-group">
                            <input class="form-control" type="text" name="titte" placeholder="Enter Task">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                    </div>  
                </div>
             </form>
            
        </div>
    </div>
</div>
@endsection

@push('css')
    <style>
        .page-title{
            padding-top: 5vh;
            font-size: 5rem;
            color: green;
        }
    </style>
@endpush