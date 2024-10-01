@extends('main') 
@section('title','Data Barang')
@section('breadcrumbs') 
<main id="main" class="main">  
    <div class="pagetitle"> 
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./barang">Master Data</a></li>
            <li class="breadcrumb-item active">kode Barang</li>
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
                                         <td><h5 class="card-title">Ubah Data barang</span></h5></td>
                                         <td> 
                                           <div align="right"><a href="{{ url('./barang')}}" class="btn btn-success btn-sm" >
                                             <span class="bi bi-arrow-left-circle-fill" style="font-size:16px"> Back</span></a> 
                                           </div> 
                                         </td> 
                                          </tr>
                                        </table>

                                        <div class="col-12">
                                            <div class="card recent-sales overflow-auto">
                                            <div class="card-body">  
                                            <form action="{{ url('barang/'.$barang->kode_barang)}}" method="post" enctype="multipart/form-data">
                                                
                                                @method('put')  
                                                {{ csrf_field() }} 
                                                  <p>
                                                    <div class="row mb-3"> 
                                                        <label for="name" class="col-sm-2 col-form-label">Kode barang</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control" readonly  value="{{ old('kode_barang',$barang->kode_barang) }}"  name="kode_barang">
                                                           </div>
                                                      </div> 
                        
                                                      <div class="row mb-3">
                                                        <label for="name" class="col-sm-2 col-form-label">Nama Barang</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control"    value="{{ old('nama_barang',$barang->nama_barang) }}"  name="nama_barang"  required autofocus>
                                                           </div>
                                                      </div>  
                                                      <div class="row mb-3"> 
                                                        <label for="name" class="col-sm-2 col-form-label">satuan</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control" readonly  value="{{ old('satuan',$barang->satuan) }}"  name="satuan">
                                                           </div>
                                                      </div> 

                                                      <div class="row mb-3"> 
                                                        <label for="name" class="col-sm-2 col-form-label">stok</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control" readonly  value="{{ old('stok',$barang->stok) }}"  name="stok">
                                                           </div>
                                                      </div> 

                                                      <div class="row mb-3"> 
                                                        <label for="name" class="col-sm-2 col-form-label">harga beli</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control" readonly  value="{{ old('harga_beli',$barang->harga_beli) }}"  name="harga_beli">
                                                           </div>
                                                      </div> 

                                                      <!-- <div class="row mb-3"> 
                                                        <label for="name" class="col-sm-2 col-form-label">id jenis</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control" readonly  value="{{ old('id_jenis',$barang->id_jenis) }}"  name="id_jenis">
                                                           </div>
                                                      </div>  -->

                                                      <div class="row mb-3">
                                                        <label for="name" class="col-sm-2 col-form-label">Jenis Barang</label>
                                                        <div class="col-sm-10">
                                                          <select class ="form-control" id="id_jenis" name="id_jenis" >
                                                            <option value='{{ old('id_jenis',$barang->id_jenis) }}'>{{ old('id_jenis',$barang->id_jenis) }} -{{ old('id_jenis',$barang->jenis_barang)}}</option>
                                                            @foreach ($jenis as $item)
                                                            <option value="{{ $item->id_jenis }}">{{$item -> id_jenis}}-{{ $item->jenis_barang }}</option>
                                                            @endforeach
                                                          </select>
                                                           </div>
                                                      </div> 

                                                      <!-- <div class="row mb-3"> 
                                                        <label for="name" class="col-sm-2 col-form-label">user id</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control" readonly  value="{{ old('user_id',$barang->user_id) }}"  name="user_id">
                                                           </div>
                                                      </div>  -->

                                                      <div class="row mb-3">
                                                        <label for="name" class="col-sm-2 col-form-label">Nama User</label>
                                                        <div class="col-sm-10">
                                                          <select class ="form-control" id="user_id" name="user_id" >
                                                          <option value='{{ old('user_id',$barang->user_id) }}'>{{ old('user_id',$barang->user_id) }} -{{ old('user_id',$barang->nm_user)}}</option>

                                                            @foreach ($pengguna as $item)
                                                            <option value="{{ $item->user_id }}">{{$item -> user_id}}-{{ $item->nm_user }}</option>
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