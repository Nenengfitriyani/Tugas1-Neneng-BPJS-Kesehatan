@extends('layout.main')
@section('content')
<div class="right_col" role="main">
    <div class="col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Tambah Data</h3>
            </div>

           
              </div>
            </div>

            <div class="col" role="main">
                <div class="">
                  <div class="page-title">
                    <div class="title_left">
                     
                    </div>
      
                    
                  </div>
      
                  <div class="clearfix"></div>
                  
                  <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <!-- form input mask -->
                        <div class="col-md-6 col-sm-12  ">
                          <div class="x_panel">
                            <div class="x_title">
                              <h2>Form Tambah Data</h2>
                              
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                              <br />
                              <form class="form-horizontal form-label-left">
          
                                <div class="form-group row">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-3">ID</label>
                                  <div class="col-md-9 col-sm-9 col-xs-9">
                                    <input type="text" class="form-control" data-inputmask="'mask': '99/99/9999'">
                                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-3">Nomor Pengajuan</label>
                                  <div class="col-md-9 col-sm-9 col-xs-9">
                                    <input type="text" class="form-control" data-inputmask="'mask' : '(999) 999-9999'">
                                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-3">Tanggal Pengajuan</label>
                                  <div class="col-md-9 col-sm-9 col-xs-9">
                                    <input type="date" class="form-control" data-inputmask="'mask': '99-999999'">
                                    
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-3">Keterangan</label>
                                  <div class="col-md-9 col-sm-9 col-xs-9">
                                    <input type="text" class="form-control" data-inputmask="'mask' : '****-****-****-****-****-***'">
                                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                  </div>
                                </div>
                               
                                <div class="ln_solid"></div>
          
                                <div class="form-group row">
                                  <div class="col-md-9 offset-md-3">
                                    <button type="submit" class="btn btn-primary">Cancel</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                  </div>
                                </div>
          
                              </form>
                            </div>
                          </div>
                        </div>
          
                      </div>
          
                  </form>
                  
      
      
      
                  
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