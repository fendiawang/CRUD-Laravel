@extends('admin/admin')
@section('content')
    <div class="row">
        <div class="col-12">
           <form action="/updatedata/{{$products->id}}" method="POST">
           @csrf
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Barang</h3>
                    </div>
                    <div class="card-body">
                        @if(!empty($errors->all()))
                        <div class="alert alert-danger">
                            {{ Html::ul($errors->all())}}
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <!-- {{ Form::label('name', 'Nama Barang') }} -->
                                    <label>Nama Barang</label>
                                    <input type="text" name="name" class="form-control" value="{{ $products->name }}">
                                </div>
                                <div class="form-group">
                                <label>Harga Barang</label>
                                    <input type="number" name="price" class="form-control" value="{{ $products->price }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Kondisi barang</label>
                                <select name="condition">
                                <option selected>{{ $products->condition}}</option>
                                <option value="baru">baru</option>
                                <option value="bekas">bekas</option>
                                </select>   
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                            <div class="form-floating">
                                <label for="floatingTextarea">Deskripsi</label>
                            <textarea class="form-control" name="description" value="{{ $products->description}}"></textarea>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="/admin" class="btn btn-outline-info">Kembali</a>
                        <!-- {{ Form::submit('Proses', ['class' => 'btn btn-primary pull-right']) }} -->
                        <button type="submit" class="btn btn-primary pull-rigth">Simpan</button>
                    </div>
                </div>
            </form>
           
        </div>
    </div>
@endsection