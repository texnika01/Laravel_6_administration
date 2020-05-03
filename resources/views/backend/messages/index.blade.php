@extends('backend.layouts.app')

@section('content')
    @include('backend.messages.partials.flash')

    <div class="card card-accent-info">
        <div class="card-header"> Messages </div>
        <div class="card-body">

            <table class="table table-responsive-sm">
                <thead>
                <tr>
                    <th>Creator</th>
                    <th>Participants</th>
                    <th>Title</th>
                    <th>Messages</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                    @each('backend.messages.partials.thread', $threads, 'thread', 'backend.messages.partials.no-threads')
                </tbody>
            </table>
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </div>
    </div>
@endsection
