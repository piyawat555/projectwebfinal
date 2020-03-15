@extends('layouts.app')

@section('content')
@role('admin')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard admin</div>
                    admin
            </div>
        </div>
    </div>
</div>
@endrole
@role('users')
<p>คุณไม่ใช่ Admin</p>
@endrole
@endsection
