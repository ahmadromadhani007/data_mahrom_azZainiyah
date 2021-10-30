@extends('layout.main')
@section('main')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">{{ $data['wrapper'] }}</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Tambah Data Wali Santri</h3>
                    </div>
                    <form action="/create">
                        @csrf
                        <div class="card-body">
                          <div class="form-group">
                            <label for="jml_kunjungan">Jumlah Kunjungan</label>
                            <input type="number" class="form-control" id="jml_kunjungan" name="jml_kunjungan" placeholder="Masukkan Jumlah">
                          </div>
                          <div class="form-group">
                            <label for="jml_tamu">Jumlah Tamu</label>
                            <input type="number" class="form-control" id="jml_tamu" name="jml_tamu" placeholder="Masukkan Jumlah Tamu">
                          </div>
                          <div class="form-group">
                            <label for="hari_kunjungan">Hari Kunjungan</label>
                            <input type="text" class="form-control" id="hari_kunjungan" name="hari_kunjungan" placeholder="Masukkan Hari Kunjungan">
                          </div>
                          <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukkan Keterangan">
                          </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
