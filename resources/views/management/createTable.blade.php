@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
        @include('management.inc.sidebar') 
            
        <div class='col-sm-8'> Create Table
            <hr>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/management/table" method="POST">
            @csrf
                <div class='form-group'>
                    <label for="categoryName">Table Number</label>
                    <input type="text" name="name" class="form-control" placeholder='Table...'>
                </div>

                <button type="submit" class='btn btn-primary btn-sm'>Save</button>
            </form>
        </div>
        </div>

    </div>


@endsection