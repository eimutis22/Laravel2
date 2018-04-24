@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="/writecomment" method="post">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <input class="form-control" type="text" name="comment" placeholder="Comment.."> <br>
                        <input class="btn btn-block btn-success" type="submit" value="Submit Comment">
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
