@extends('main') 
@section('title','Data penjualan')
@section('breadcrumbs') 
<main id="main" class="main">  
    <div class="pagetitle"> 
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./penjualan">Master Data</a></li>
            <li class="breadcrumb-item active">penjualan</li>
          </ol>
        </nav>
      </div>  
        <section  class="section dashboard">
          <div class="col-12">
            <div class="row">  
                <div class="card top-selling overflow-auto">  
                    <div class="content mt-3">
                        <div class="animated fadeIn">  
                                <div class="card-header"> 
                                    <table width="100%"  class="fa fa-text-height" aria-hidden="true"   border="0" cellpadding="0" cellspacing="0"   class="fa fa-align-center" > 
                                        <tr>
                                         <td><h5 class="card-title">Tambah penjualan</span></h5></td>
                                         <td> 
                                           <div align="right"><a href="{{ url('./penjualan')}}" class="btn btn-success btn-sm" >
                                             <span class="bi bi-arrow-left-circle-fill" style="font-size:16px"> Back</span></a> 
                                           </div> 
                                         </td> 
                                          </tr>
                                        </table>

                                        <div class="col-12">
                                            <div class="card recent-sales overflow-auto">
                                            <div class="card-body">  
                                            <form action="{{ url('penjualan')}}" method="post" enctype="multipart/form-data">
                                                  {{ csrf_field() }} 
                                                  <p>
                                                    <div class="row mb-3"> 
                                                        <label for="name" class="col-sm-2 col-form-label">Nofak jual</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control @error('nofak_jual') is-invalid @enderror"   value="{{ old('nofak_jual') }}"  name="nofak_jual"  required autofocus>
                                                           </div>
                                                      </div> 
                        
                                                      <div class="row mb-3">
                                                        <label for="name" class="col-sm-2 col-form-label">tgl jual</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control @error('tgl_jual') is-invalid @enderror"   value="{{ old('tgl_jual') }}"  name="tgl_jual"  required autofocus>
                                                           </div>
                                                      </div>  

                                                    
                                                      <div class="row mb-3">
                                                        <label for="name" class="col-sm-2 col-form-label">Kode Barang</label>
                                                        <div class="col-sm-10">
                                                          <select class ="form-control" id="kode_barang" name="kode_barang" >
                                                            @foreach ($barang as $item)
                                                            <option value="{{ $item->kode_barang }}">{{$item -> kode_barang}}-{{ $item->nama_barang }}</option>
                                                            @endforeach
                                                          </select>
                                                           </div>
                                                      </div>

                                                      <!-- <div class="row mb-3"> 
                                                        <label for="name" class="col-sm-2 col-form-label">Jenis Barang</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control @error('id_jenis') is-invalid @enderror"   value="{{ old('id_jenis') }}"  name="id_jenis"  required autofocus>
                                                           </div>
                                                      </div>   -->
                                                      


                                                      <div class="row mb-3"> 
                                                        <label for="name" class="col-sm-2 col-form-label">jumlah jual</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control @error('jumlah_jual') is-invalid @enderror"   value="{{ old('jumlah_jual') }}"  name="jumlah_jual"  required autofocus>
                                                           </div>
                                                      </div> 

                                                      <div class="row mb-3"> 
                                                        <label for="name" class="col-sm-2 col-form-label">harga jual</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control @error('harga_jual') is-invalid @enderror"   value="{{ old('harga_jual') }}"  name="harga_jual"  required autofocus>
                                                           </div>
                                                      </div> 

                                                     

                                                      <!-- <div class="row mb-3"> 
                                                        <label for="name" class="col-sm-2 col-form-label">user id</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control @error('nm_user') is-invalid @enderror"   value="{{ old('nm_user') }}"  name="nm_user"  required autofocus>
                                                           </div>
                                                      </div> 

                                                      <div class="row mb-3"> 
                                                        <label for="name" class="col-sm-2 col-form-label">id suplier</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control @error('id_suplier') is-invalid @enderror"   value="{{ old('id_suplier') }}"  name="id_suplier"  required autofocus>
                                                           </div>
                                                      </div>  -->

                                                      <div class="row mb-3">
                                                        <label for="name" class="col-sm-2 col-form-label">User Id</label>
                                                        <div class="col-sm-10">
                                                          <select class ="form-control" id="nm_user" name="nm_user" >
                                                            @foreach ($pengguna as $item)
                                                            <option value="{{ $item->nm_user }}">{{$item -> user_id}}-{{ $item->nm_user }}</option>
                                                            @endforeach
                                                          </select>
                                                           </div>
                                                      </div> 
                                                      
                                                    <button type="submit" class="btn btn-success" style="font-size:16px"><span class="bi bi-save2 green-color"> Save </span></button>
                                                  </form>
                                                 
                                            </div> 
                                  </div>
                           
                        </div> 
                    </div> 
                </div>
            </div>
        </div>
      </section> 
</main> 
@endsection