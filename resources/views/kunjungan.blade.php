@extends('layout.main')
@section('main')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">{{ $data['wrapper'] }}</h1>
          <a href="/tambahKunjungan" class="btn btn-success mt-2">Tambah</a>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
  <!-- /.content-header -->
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">

                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 300px;">
                  <table class="table table-head-fixed text-nowrap">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Jumlah Kunjungan</th>
                        <th>Jumlah Tamu</th>
                        <th>Hari Kunjungan</th>
                        <th>Keterangan</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($kunjungan as $m)
                        <tr>
                            <td>{{ $m['id'] }}</td>
                            <td>{{ $m['jml_kunjungan'] }}</td>
                            <td>{{ $m['jml_tamu'] }}</td>
                            <td>{{ $m['hari_kunjungan'] }}</td>
                            <td>{{ $m['keterangan'] }}</td>
                            <td class="text-center">
                                <a href="/editSantri/" class="btn btn-warning text-white"><i class="fas fa-edit"></i> Edit</a>
                                <a href="" class="btn btn-danger text-white"><i class="fas fa-trash"></i> Delete</a>
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection
