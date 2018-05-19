@extends('layouts.app')

@section('content')
<div class="container">
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div> -->
    <div class="row">
        <div class="col-md-8">
            <div class="card bg-dark">
                <div class="card-body">
                    <form class="form form-horizontal" method="POST" action="{{ route('codeSubmission') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <textarea rows="20" cols="95" name="source"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-success">Check the code</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
