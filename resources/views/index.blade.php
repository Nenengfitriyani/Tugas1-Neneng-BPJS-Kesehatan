@extends('layout.main')
@section('content')
<div class="right_col" role="main">
    <div class="col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>BPJS Kesehatan ASN</h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Go!</button>
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Data Pengajuan</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Settings 1</a>
                          <a class="dropdown-item" href="#">Settings 2</a>
                        </div>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <a href= "{{ route('user.create') }}" class="btn btn-primary mb-3"> Tambah Data</a>
                          <div class="card-box table-responsive">
                  
                  <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nomor Pengajuan</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                       
                      </tr>
                    </thead>

                    <tbody>

                        @foreach ($data as $d)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $d->name }}</td>
                            <td>{{ $d->email }}</td>
                            <td>{{ $d->keterangan }}</td>
                            <td>
                                <a href="" class="btn btn-primary"><i class="fas fa-pen"></i> Edit </a>
                                <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Hapus </a>
                            </td>
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

          </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection