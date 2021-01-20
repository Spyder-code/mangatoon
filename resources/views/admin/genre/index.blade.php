@extends('layouts.dashboard')
@section('content')
    <div class="container">
        <div class="card-group">
            <div class="card border m-1 border-primary">
                <div class="card-body">
                    <div class="d-flex d-lg-flex d-md-block align-items-center">
                        <div>
                            <div class="d-inline-flex align-items-center">
                                <h2 class="text-dark mb-1 font-weight-medium">{{ $data->count() }}</h2>
                            </div>
                            <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Jumlah semua genre</h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <span class="opacity-7 text-muted" style="font-size: 26pt"><i class="fas fa-accessible-icon"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <div class="card border border-success">
                    <div class="card-header bg-success text-white">Tambah Genre</div>
                    <div class="card-body">
                        <form action="{{ route('genre.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Nama genre</label>
                                <input type="text" name="nama" class="form-control text-center" autofocus>
                                <button class="btn btn-outline-success mt-3 d-block w-100">Tambahkan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <div class="card border border-primary rounded">
                    <div class="card-header bg-primary text-white">List Genre</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered center-aligned-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ date('d F Y',strtotime($item->created_at)) }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    $('#zero_config').DataTable();
</script>
@endsection