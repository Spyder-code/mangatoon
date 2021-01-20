@extends('layouts.dashboard')
@section('content')
    <div class="container-fluid">
        @if ($message = Session::get('success'))
        <div class="row">
            <div class="col mt-3">
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{ $message }}</strong>
                </div>
            </div>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="row">
            <div class="col-sm-8 mt-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">Profil</div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group text-center">
                                        <img src="{{ asset('card/'.Auth::id().'.jpg') }}" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Nama lengkap</label>
                                        <input type="text" name="nama" value="{{ Auth::user()->name }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control" readonly>
                                    </div>
                                    <button type="submit" class="btn btn-info d-block w-100">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mt-4">
                <div class="card">
                    <div class="card-header bg-success text-white">Password</div>
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>New password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm password</label>
                                        <input type="password" name="confirm-password" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-info d-block w-100">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    function loadImg (event){
        var id = event.target.labels[0].dataset.id;
        $('#'+id).attr('src', URL.createObjectURL(event.target.files[0]));
    };
</script>
@endsection
