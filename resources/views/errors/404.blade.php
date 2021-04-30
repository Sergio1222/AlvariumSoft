@extends('layouts.app')

@section('content')

        <div class="container text-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="error-template">
                        <h1>
                            Oops!</h1>
                        <h2>
                            404 Not Found</h2>
                        <div class="error-details">
                            Sorry, an error has occured, Requested page not found!
                        </div>
                        <div class="error-actions">
                            <a href="{{ route('home') }}" class="btn btn-primary btn-lg">
                                Take Me Home
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection
