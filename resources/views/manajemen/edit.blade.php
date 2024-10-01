@extends('main') 
@section('title','Data Manajemen')
@section('breadcrumbs') 
<main id="main" class="main">  
    <div class="pagetitle"> 
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./manajemen">Master Data</a></li>
            <li class="breadcrumb-item active">Manajemen</li>
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
                                         <td><h5 class="card-title">Ubah Data Manajemen</span></h5></td>
                                         <td> 
                                           <div align="right"><a href="{{ url('./manajemen')}}" class="btn btn-success btn-sm" >
                                             <span class="bi bi-arrow-left-circle-fill" style="font-size:16px"> Back</span></a> 
                                           </div> 
                                         </td> 
                                          </tr>
                                        </table>

                                        <div class="col-12">
                                            <div class="card recent-sales overflow-auto">
                                            <div class="card-body">  
                                            <form action="{{ url('manajemen/'.$manajemen->id)}}" method="post" enctype="multipart/form-data">
                                                @method('put')
                                                  {{ csrf_field() }} 
                                                  <p>
                                                    <div class="row mb-3"> 
                                                        <label for="name" class="col-sm-2 col-form-label">id</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control" readonly  value="{{ old('id',$manajemen->id) }}"  name="nofak_beli" >
                                                           </div>
                                                      </div> 
                        
                                                      <div class="row mb-3">
                                                        <label for="name" class="col-sm-2 col-form-label">name</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control @error('name') is-invalid @enderror"   value="{{ old('name',$manajemen->name) }}"  name="name"  required autofocus>
                                                           </div>
                                                      </div> 
                                                      
                                                      <div class="row mb-3">
                                                        <label for="name" class="col-sm-2 col-form-label">email</label>
                                                        <div class="col-sm-10">
                                                          <select class ="form-control" id="email" name="email" >
                                                          <option value='{{old('email',$manajemen->email)}}'>{{old('email',$manajemen->email)}}-{{old('email',$manajemen->name)}}</option>
                                                            @foreach ($user as $item)
                                                            <option value="{{ $item->email }}">{{$item -> email}}-{{ $item->name }}</option>
                                                            @endforeach
                                                          </select>
                                                           </div>
                                                      </div> 

                                                      <div class="row mb-3">
                                                        <label for="name" class="col-sm-2 col-form-label">email verified</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control @error('email_verified_at') is-invalid @enderror"   value="{{ old('email_verified_at',$manajemen->email_verified_at) }}"  name="email_verified_at"  required autofocus>
                                                           </div>
                                                      </div>  

                                                      <div class="row mb-3">
                                                        <label for="name" class="col-sm-2 col-form-label">password</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control @error('password') is-invalid @enderror"   value="{{ old('password',$manajemen->password) }}"  name="manajemen"  required autofocus>
                                                           </div>
                                                      </div>

                                                      <div class="row mb-3">
                                                        <label for="name" class="col-sm-2 col-form-label">remember token</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control @error('remember_token') is-invalid @enderror"   value="{{ old('remember_token',$manajemen->remember_token) }}"  name="remember_token"  required autofocus>
                                                           </div>
                                                      </div>  

                                                      <div class="row mb-3">
                                                        <label for="name" class="col-sm-2 col-form-label">created</label>
                                                        <div class="col-sm-10">
                                                          <select class ="form-control" id="created_at" name="created_at" >
                                                          <option value='{{old('created_at',$manajemen->created_at)}}'>{{old('created_at',$manajemen->created_at)}}-{{old('user_id',$manajemen->nm_user)}}</option>
                                                            @foreach ($user as $item)
                                                            <option value="{{ $item->created_at }}">{{$item -> created_at}}-{{ $item->name }}</option>
                                                            @endforeach
                                                          </select>
                                                           </div>
                                                      </div> 
                                                      
                                                      <div class="row mb-3">
                                                        <label for="name" class="col-sm-2 col-form-label">update at</label>
                                                        <div class="col-sm-10">
                                                          <select class ="form-control" id="update_at" name="update_at" >
                                                          <option value='{{old('update_at',$manajemen->update_at)}}'>{{old('update_at',$manajemen->update_at)}}-{{old('update_at',$manajemen->nama_suplier)}}</option>
                                                            @foreach ($suplier as $item)
                                                            <option value="{{ $item->update_at }}">{{$item -> update_at}}-{{ $item->nama_suplier }}</option>
                                                            @endforeach
                                                          </select>
                                                           </div>
                                                      </div>  

                                                    <button type="submit" class="btn btn-success" style="font-size:16px"><span class="bi bi-save2 green-color"> Update </span></button>
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