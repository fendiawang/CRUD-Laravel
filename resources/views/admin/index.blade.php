@extends('admin/admin')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Barang</h3>
                <div class="card-tools">
                 <a href="/create" class="btn btn-tool">
                     <i class="fa fa-plus"></i>
                     &nbsp; Add
                 </a>
             </div>
         </div>
         <div class="card-body">
         @if($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ $message }}
        </div>
        @endif
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-center">
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Deskripsi</th>
                                <th>Kondisi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no= 1;
                            @endphp
                            @foreach($products as $product)
                            <tr>
                                <td class="text-center">{{$no++ }}</td>
                                <td>{{ $product['name'] }}</td>
                                <td>Rp. {{ $product['price'] }}</td>
                                <td>{{ $product['description'] }}</td>
                                <td>{{ $product['condition'] }}</td>
                                <td valign="center">
                                    <a href="/delete/{{$product->id}}" type="button" class="btn btn-danger">Hapus</a>
                                    <a  href="/edit/{{$product->id}}" type="button" class="btn btn-info">Edit</a>
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
 
@endsection