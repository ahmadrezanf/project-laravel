@extends('main') 
@section('title','pembelian')
@section('breadcrumbs') 
<main id="main" class="main">  
    <div class="pagetitle"> 
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./pembelian">Master Data</a></li>
            <li class="breadcrumb-item active">Data pembelian barang</li>
          </ol>
        </nav>
      </div>  

      <section  class="section dashboard">
        <div class="col-12">
          <div class="row">  
              <div class="card top-selling overflow-auto">  
                  <div class="content mt-3">
                      <div class="animated fadeIn">  
                      @if (session('status'))   
                                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Proses...! </strong> {{ session('status') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                  </div> 
                                  @endif
                      <div class="card-header"> 
                                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                          <td><h5 class="card-title">Data  pembelian Barang</span></h5></td>
                                          <td> 
                                            <div align="right">   
                                              <a href="{{ url('pembelian/show')}}"  class="btn btn-success btn-sm"  role="button" aria-disabled="true">
                                                <span class="bi bi-printer" style="font-size:16px"> Print Data</span> </a>  
                                              
                                                 <a href="{{ url('pembelian/create')}}" class="btn btn-success btn-sm">
                                                <span class="bi bi-plus-circle" style="font-size:16px"> New</span></a> 
                                              </div> 
             
                                        </tr>
                                     </table>
                                     
                                </div>

                              <div class="card-body table-responsive"> 
                                  <table class="table table-borderless datatable">
                                              <thead>
                                                  <tr>
                                                  <th>No.</th>
                                                  <th>Nofak beli</th> 
                                                  <th>tgl beli</th> 
                                                  <th>Nama Barang</th>
                                                  <th>jumlah  beli</th>
                                                  <th>harga beli</th>
                                                  <th>harga jual</th> 
                                                  <th>Nama suplier</th> 
                                                  <th>Ubah</th>
                                                  <th>Hapus</th>
                                                 </tr>
                                              </thead>
                                              <tbody>
                                                @foreach ($pembelian as $item)
                                                <tr>
                                                        <td>{{$loop -> iteration}}</td>
                                                        <td>{{$item -> nofak_beli}}</td> 
                                                        <td>{{$item -> tgl_beli}}</td>
                                                        <td>{{$item -> nama_barang}}</td>  
                                                        <td>{{$item -> jumlah_beli}}</td>
                                                        <td>{{$item -> harga_beli}}</td>
                                                        <td>{{$item -> harga_jual}}</td>
                                                       
                                                        <td>{{$item -> nama_suplier}}</td>
                                                        <td><a href="{{ url('pembelian/' .$item->nofak_beli.'/edit')}}" class="btn btn-success btn-sm" >
                                                        <span class="bi bi-pencil-square" style="font-size:12px"></span></a></td>
                                                        <td>
                                                        <form action="{{ url('pembelian/' .$item->nofak_beli)}}" method="post" class="d-inline" onsubmit="return confirm('Yakin Hapus Data')">
                                                                @method('delete')
                                                                @csrf
                                                                <button class="btn btn-success btn-sm"><span class="bi bi-trash"></span></button> 
                                                                 </td>
                                                            </form>
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
    </section> 
      
</main> 
@endsection