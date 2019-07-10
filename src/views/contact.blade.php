@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Contact us</div>

                    <div class="card-body">
                        <form action="{{ route('contact.store') }}" method="post">
                            @csrf
                            <input type="text" name="name">
                            <input type="text" name="email">
                            <textarea name="message" cols="30" rows="10"></textarea>
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
