@extends('layout')

@section('content')

@if ($message = Session::get('success'))

    <div class="alert alert-success">
        <p> {{$message}} </p>
    </div>
@endif
<h1>Laravel Kitap Uygulaması</h1>
  <br>
<div class="row">
 
      <div class="col-md-4">
         <form action="/" method="get">
            <div class="input-group"> 
               <input type="input" name="search" class="form-control" placeholder="Kitap Adı veya ISBN Giriniz ">
               <span class="input-group-prepend">
               <button type="submit" class="btn btn-primary"> Search</button>
               </span>
            </div>
         </form>
    
   </div>
</div>
<div class="container mt-5">
   <table class="table table-bordered mb-5">
      <thead>
         <tr class="table-success">
            
            <th scope="col"> ISBN NO</th>
            <th scope="col"> KITAP ADI</th>
            <th scope="col"> YAZAR</th>
            <th scope="col"> KATEGORI</th>
            <th scope="col"> YAYINEVI</th>
            <th scope="col"> DİL</th>
            <th scope="col"> SAYFA SAYISI</th>
         </tr>
      </thead>
      <tbody>
         @foreach ($kitapbilgis as $kitapbilgi) 
         <tr>
            <td> {{$kitapbilgi->isbnno}} </td>
            <td> {{$kitapbilgi->kitapadi}} </td>
            <td> {{$kitapbilgi->adi}}  {{$kitapbilgi->soyadi}}</td>
            <td> {{$kitapbilgi->kategoriadi}} </td>
            <td> {{$kitapbilgi->yayineviadi}} </td>
            <td> {{$kitapbilgi->dil}} </td>
            <td> {{$kitapbilgi->sayfasayisi}} </td>
            
         </tr>
         @endforeach
      </tbody>
   </table>
</div>
<div class="d-flex justify-content-center">
   {!! $kitapbilgis->links() !!}
</div>



@endsection
