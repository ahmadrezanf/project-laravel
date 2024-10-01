@extends('main') 
@section('title','Data Pembelian')
@section('breadcrumbs') 

<main id="main" class="main">  
  <div class="pagetitle"> 
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./barang">Master Data</a></li>
          <li class="breadcrumb-item active">Data Manajemen</li>
        </ol>
      </nav>
    </div>   
<head> 
    
<script type="text/javascript">
        function printDiv(divName){
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();

            document.body.innerHTML = originalContents;
        }
        printDiv('printableArea');
    </script>

<table width="100%"  class="fa fa-text-height" aria-hidden="true"   border="0" cellpadding="0" cellspacing="0"   class="fa fa-align-center" > 
  <tr   align="right"> 
    <td> 
    <a href="#" onclick="printDiv('printableArea')" class="btn btn-success btn-sm">  
      <span class="bi bi-printer" style="font-size:16px"> Print Data</span> </a> 
     <a href="{{ url('./pengguna')}}" class="btn btn-success btn-sm" >
       <span class="bi bi-arrow-left-circle-fill" style="font-size:16px"> Back</span></a>  
    </td> 
    </tr>
  </table>

<div id="printableArea">
        <td align="center">
          <h5 class="card-title" align="center">Data manajemen akun</h5>
        </td>
        <table width="100%" border="1" cellpadding="0" cellspacing="0"> 
                <thead>
                    <tr  bgcolor="gray">
                    <th>id.</th>
                    <th>name</th> 
                    <th>email</th> 
                    <th>email_verified</th>
                    <th>password</th>
                    <th>remember token</th>
                    <th>created</th> 
                    <th>updated</th>  	 	 
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1 ?>
                    @foreach ($pembelian as $item)
                    <tr>
                    <td>{{$loop -> iteration}}</td>
                    <td>{{$item -> id}}</td> 
                    <td>{{$item -> name}}</td>
                    <td>{{$item -> email}}</td>  
                    <td>{{$item -> email_verified_at}}</td>
                    <td>{{$item -> password}}</td>
                    <td>{{$item -> remember_token}}</td>
                    <td>{{$item -> created_at}}</td>
                    <td>{{$item -> updated_at}}</td>
		                  </tr>
                @endforeach
                </tbody>
            </table> 
    </div>