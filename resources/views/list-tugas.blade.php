@extends('layouts.app')

@section('title','Daftar Tugas')

@section('content')
<style>
  .nomor {
    text-align: center;
  }
</style>
<div class="container-fluid">
  <!--begin::Row-->
  <div class="row mt-4">
    <!-- Start col -->
    <div class="col-* connectedSortable mx-auto">
      <div class="card mb-4">
        <div class="card-header"><h3 class="card-title">Daftar Tugas</h3></div>
        <div class="card-body">
          <div>
            <div class="container mt-4">
              <div class="table-responsive">
                  <table class="table table-bordered">
                      <thead>
                          <tr class="text-center">
                              <th>No</th>
                              <th>Judul Tugas</th>
                              <th>Mata Kuliah</th>
                              <th>Deskripsi Tugas</th>
                              <th>Deadline</th>
                              <th>Prioritas</th>
                              <th>Keterangan</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td class="nomor">1</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>
                                <select class="form-select" id="status" name="status" required>
                                  <option value="Belum Selesai" selected>Belum Selesai</option>
                                  <option value="Dikerjakan">Dikerjakan</option>
                                  <option value="Selesai">Selesai</option>
                                </select>
                              </td>
                          </tr>
                      </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card -->
    </div>
    <!-- /.Start col -->
  </div>
  <!-- /.row (main row) -->
</div>
@endsection