@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="page-title">Todo List</h1>
        </div>

        <div class="col-lg-12 mt-5">
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
        <div class="col-lg-12 mt-5">
            <div>
                <table class="table table-striped table-dark">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tittle</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($task as $key => $task)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $task -> titte }}</td>
                                <td>
                                    @if ($task->done == 0)
                                        <span class="badge bg-warning">Not Completed</span>
                                    @else
                                        <span class="badge bg-success">Completed</span>
                                    @endif 
                                </td>
                                <td>
                                    <a href="{{ route('todo.delete', $task->id) }}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                    <a href="{{ route('todo.done', $task->id) }}" class="btn btn-success"><i class="bi bi-check-circle"></i></a>
                                </td>
                            </tr>
                        @endforeach
                      
                    </tbody>
                  </table>
            </div>
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