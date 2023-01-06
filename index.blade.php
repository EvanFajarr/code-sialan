@extends('template.template')
@section('konten')    
@include('pesan.pesan')
 
<div class="container text-center">
    <div class="row">
      <div class="col-sm-6">
        <div class="mb-3 row">
            <label for="tanggal" class="col-sm-2 col-form-label">Hari</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='tanggal' id="tanggal" value="{{ date('l/d/m/y') }} ">
                
            </div>
        </div>

            <div class="mb-3 row">
                <label for="no_meja" class="col-sm-2 col-form-label">No Meja</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='no_meja' id="no_meja">
                </div>
            </div>

           <a href='/' class="btn btn-outline-primary">ss</a>

      </div>
    
        <div class="col-sm-6">
            <div class="mb-3 row">
                <label for="total" class="col-sm-2 col-form-label">Total</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='total' id="total">
                </div>
            </div>

          
                <div class="mb-3 row">
                    <label for="bayar" class="col-sm-2 col-form-label">Bayar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='bayar' id="bayar">
                    </div>
                </div>

               
                    <div class="mb-3 row">
                        <label for="kembali" class="col-sm-2 col-form-label">Kembali</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='kembali' id="kembali">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="status" class="col-sm-2 col-form-label">Status pesanan</label>
                        <div class="col-sm-10">
                            <select class="form-select form-select-lg mb-3" name='status'  id="status" aria-label=".form-select-lg example">
                                <option >0</option>
                                <option >1</option>
                            </select>
                        </div>

                            <div class="mb-3 row">
                                <label for="status_pesanan" class="col-sm-2 col-form-label">Status pesanan</label>
                                <div class="col-sm-10">
                                    <select class="form-select form-select-lg mb-3" name='status_pesanan'  id="status_pesanan" aria-label=".form-select-lg example">
                                        <option >diantar</option>
                                        <option >diproses</option>
                                        <option >tersaji</option>
                                        <option >takeaway</option>
                                    </select>
                                </div>
      </div>
    </div>

@endsection