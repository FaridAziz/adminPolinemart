@extends('Dashboard')
@section('title','Admin Polinemart')
@section('judul','Data Jual')
@section('content')
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
            <div class="col-6 mt-2">
            <a href="/jual/tambah" class="btn btn-primary text-white">                
                Jual Barang
            </a>
        </div><br>
              <div class="table table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>No</th>
                      <th>Nama</th>
                      <th>Keterangan</th>
                      <th>Kategori</th>
                      <th>Harga</th>
                      <th>Stok</th>
                      <th>Gambar</th>
                      <th>Action</th>

                    </tr>
                </thead>
                    <tbody>
                        <?php $no =1; ?>
                        @foreach ($jual['data'] as $jwl)
                        <tr>
                            <td>{{ $no }} <?php $no++; ?></td>
                            <td>{{ $jwl['nama_brg'] }}</td>
                            <td>{{ $jwl['keterangan'] }}</td>
                            <td>{{ $jwl['kategori'] }}</td>
                            <td>{{ $jwl['harga'] }}</td>
                            <td>{{ $jwl['stok'] }}</td>
                            <td>{{ $jwl['gambar'] }}</td>
                            <td>     
                            <a href="/jual/edit/{{ $jwl['id_brg'] }}" class="btn btn-warning">Edit</a>
                            <a href="/jual/delete/{{ $jwl['id_brg'] }}" class="btn btn-danger">Delete</a>
                                
                            </td>
                        </tr>
                         @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</div>

@endsection