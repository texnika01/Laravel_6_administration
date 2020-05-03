@extends('backend.layouts.app')

@section('content')

    <!-- start form send messages -->
    <div class="card c-email-app">
        <div class="card-header">
            <strong>Create new messages</strong>
        </div><!--card-header-->
        <div class="card-body">
            <div class="col-md-6">
                <h1>{{ $thread->subject }}</h1>
                @each('backend.messages.partials.messages', $thread->messages, 'message')

                @include('backend.messages.partials.form-messages')
            </div>
        </div>
    </div>

@endsection
