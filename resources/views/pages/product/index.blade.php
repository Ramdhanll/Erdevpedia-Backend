@extends('layouts.default')

@section('title','Product')
    
@section('content')
    <div class="orders">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="box-title">Daftar Barang</h4>
            </div>
            <div class="card-body--">
              <div class="table-stats ov-h">
                <table class="table table-hover">
                  <thead class="table-secondary">
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Type</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($items as $item)
                    <tr>
                      <th>{{ $item->id }}</th>
                      <th>{{ $item->name }}</th>
                      <th>{{ $item->type }}</th>
                      <th>{{ $item->price }}</th>
                      <th>{{ $item->quantity }}</th>
                      <th>
                        {{-- <a href=" {{ route('products.gallery') }}" class='btn btn-info btn-sm'> --}}
                        <a href="#" class='btn btn-info btn-sm'>
                          <i class="fa fa-picture-o" aria-hidden="true"></i>
                        </a>
                        <a href="{{ route('products.edit', $item->id) }}" class='btn btn-primary btn-sm'>
                          <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>
                        <form action="{{ route('products.destroy', $item->id) }}" 
                              method="post" 
                              class="d-inline">
                          @csrf
                          @method('delete')
                          <button class="btn btn-danger btn-sm">
                            <i class="fa fa-trash " aria-hidden="true"></i>
                          </button>
                        </form>
                      </th>
                    </tr>
                    @empty
                        <tr>
                          <td colspan="6" class="text-center p-5">Data Tidak Tersedia</td>
                        </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
