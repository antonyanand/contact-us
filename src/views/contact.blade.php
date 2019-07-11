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

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

{{--                                    @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email">

{{--                                    @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="message" class="col-md-4 col-form-label text-md-right">Message: </label>

                                <div class="col-md-6">
                                    <textarea id="message" class="form-control" name="message" required></textarea>

{{--                                    @error('message')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary"> Submit </button>
                                </div>
                            </div>
                        </form>
                    </div>
{{--                    <div class="card-header">Contact us</div>--}}

{{--                    <div class="card-body">--}}
{{--                        <form action="{{ route('contact.store') }}" method="post">--}}
{{--                            @csrf--}}
{{--                            <input type="text" name="name">--}}
{{--                            <input type="text" name="email">--}}
{{--                            <textarea name="message" cols="30" rows="10"></textarea>--}}
{{--                            <input type="submit" value="Submit">--}}
{{--                        </form>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
@endsection
