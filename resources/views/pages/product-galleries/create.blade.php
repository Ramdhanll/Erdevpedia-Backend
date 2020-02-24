@extends('layouts.default')

@section('title','Product')
    
@section('content')
    <div class="card">
      <div class="card-header">
        <strong>Tambah Foto Barang</strong>
      </div>
      <div class="card-body card-block">
        <form action="{{ route('product-galleries.store') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="product_id" class="form-control-label">Nama Barang</label>
            <select name="product_id"
                    class="form-control @error('product_id') is-invalid @enderror" > 
                @foreach ($products as $product)
                  <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
            @error('product_id') <div class="text-muted"> {{ $message }} </div> @enderror
          </div>
          <div class="form-group">
            <label for="photo" class="form-control-label">Foto Barang</label>
            <input type="file" 
                    name="photo" 
                    id="photo" 
                    class="form-control @error('photo') is-invalid @enderror" 
                    value="{{ old('photo') }}"
                    accept="image/*">
            @error('photo') <div class="text-muted"> {{ $message }} </div> @enderror
          </div>
          <div class="form-group">
            <label for="is_default" class="form-control-label">Jadikan Default</label>
            <br>
            <label>
              <input type="radio" 
                    name="is_default" 
                    class="form-control @error('is_default') is-invalid @enderror" 
                    value="1"> Ya
            </label>
              &nbsp;
            <label>
              <input type="radio" 
                    name="is_default" 
                    class="form-control @error('is_default') is-invalid @enderror" 
                    value="0"> Tidak
            </label>
            @error('is_default') <div class="text-muted"> {{ $message }} </div> @enderror
          </div>
          <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">
              Tambah Foto Barang
            </button>
          </div>
        </form>
      </div>
    </div>
@endsection
