@extends('main') 
@section('title','Data Pembelian')
@section('breadcrumbs') 

<main id="main" class="main">  
  <div class="pagetitle"> 
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./barang">Master Data</a></li>
          <li class="breadcrumb-item active">Data Pembelian</li>
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
     <a href="{{ url('./jenis')}}" class="btn btn-success btn-sm" >
       <span class="bi bi-arrow-left-circle-fill" style="font-size:16px"> Back</span></a>  
    </td> 
    </tr>
  </table>

<div id="printableArea">
        <td align="center">
          <h5 class="card-title" align="center">Data pembelian</h5>
        </td>
        <table width="100%" border="1" cellpadding="0" cellspacing="0"> 
                <thead>
                    <tr  bgcolor="gray">
                    <th>No.</th>
                    <th>Nofak beli</th> 
                    <th>tgl beli</th> 
                    <th>Nama Barang</th>
                    <th>jumlah  beli</th>
                    <th>harga beli</th>
                    <th>harga jual</th> 
                    <th>Nama suplier</th>  	 	 
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1 ?>
                    @foreach ($pembelian as $item)
                    <tr>
                    <td>{{$loop -> iteration}}</td>
                    <td>{{$item -> nofak_beli}}</td> 
                    <td>{{$item -> tgl_beli}}</td>
                    <td>{{$item -> kode_barang}}</td>  
                    <td>{{$item -> jumlah_beli}}</td>
                    <td>{{$item -> harga_beli}}</td>
                    <td>{{$item -> harga_jual}}</td>
                    <td>{{$item -> id_suplier}}</td>
		                  </tr>
                @endforeach
                </tbody>
            </table> 
    </div>