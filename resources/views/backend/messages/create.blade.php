@extends('backend.layouts.app')

@section('content')

    <!-- start form send messages -->
    <div class="card c-email-app">
        <div class="card-header">
            <strong>Create new messages</strong>
        </div><!--card-header-->
        <div class="card-body">

        <!-- start form -->
        {!! Form::open(['route' => 'admin.messages.store', 'method' => 'post']) !!}

            @include('backend.messages._form')
        <!-- button groupe -->
            <div class="form-group">
                <div class="col-sm-4 col-sm-offset-2">
                    <button type="submit" class="btn btn-default" href="#"> Cancel </button>
                    <button type="submit" class="btn btn-primary"> Submit</button>
                </div>
            </div>
            <!-- end button groupe -->
        {!! Form::close() !!}
        <!-- end form -->
        </div>
    </div>
    <!-- end form send messages -->
@endsection
