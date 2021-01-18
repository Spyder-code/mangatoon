<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Pesan</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($pesan as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->pembeli->nama }}</td>
                                <td>{{ $item->pesan }}</td>
                                <td>Menuggu Konfirmasi</td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>

                        <form action="{{ route('pembeli.kirim') }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-success">Kirim</button>
                        </form>
                </div>
            </div>
            <form action="{{ route('pembeli.post') }}" method="post">
                @csrf
            <div class="row">
                    <div class="col-8">
                        <div class="form-group">
                            <label for="">Keterangan penggunaan variabel:</label>
                            <ol>
                                <li>Nama = [nama]</li>
                                <li>Alamat = [alamat]</li>
                                <li>Phone = [phone]</li>
                            </ol>
                        </div>
                        <div class="form-group">
                            <label>Pesan</label>
                            <textarea name="pesan" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-4">
                        <h3>Contact</h3>
                        <hr>
                        <div class="form-group">
                            @foreach ($user as $item)
                                <label>
                                    <input type="checkbox" name="id_pembeli[]" value="{{ $item->id }}">
                                    <span> {{ $item->nama }}</span>
                                </label>
                            @endforeach
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>