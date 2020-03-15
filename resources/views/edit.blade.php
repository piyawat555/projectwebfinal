@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Edit profile</h1>
                </div>
                <div class="form-group row">
                    <label for="address" class="col-md-4 col-form-label">address</label>

                    <div class="col-md-6">
                        <input id="address" type="address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') ?? $user->userprofile->address }}" required autocomplete="address">

                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                    <div class="form-group row">
                        <label for="telephonenumber" class="col-md-4 col-form-label">telephonenumber</label>

                    <div class="col-md-6">
                        <input id="telephonenumber" type="telephonenumber" class="form-control @error('telephonenumber') is-invalid @enderror" name="telephonenumber" value="{{ old('telephonenumber')?? $user->userprofile->telephonenumber }}" required autocomplete="telephonenumber">

                        @error('telephonenumber')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="socialurl" class="col-md-4 col-form-label">socialurl</label>

                    <div class="col-md-6">
                        <input id="socialurl" type="socialurl" class="form-control @error('socialurl') is-invalid @enderror" name="socialurl" value="{{ old('socialurl')?? $user->userprofile->socialurl  }}" required autocomplete="socialurl">

                        @error('socialurl')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row pt-4">
                    <button type="submit" class="btn-primary">saveProfile</button>
               </div>
            </div>
        </div>
    </form>

</div>
@endsection
