@extends('backend.master')

@section('header')
<div class="row">
         <div class="col-sm-6">
             <h3 class="mb-0">Car</h3>
         </div>
         <div class="col-sm-6">
             <ol class="breadcrumb float-sm-end">
                 <li class="breadcrumb-item"><a href="#">Home</a></li>
                 <li class="breadcrumb-item active" aria-current="page">Manage Car</li>
             </ol>
         </div>
     </div>

@endsection

@section('content')
<div class="row">
              <div class="col-md-12 mx-auto">
                <div class="card mb-4">
                  <div class="card-header"><h3 class="card-title">All Car List</h3></div>
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr class="text-center">
                          <th style="width: 15px">Sl. No.</th>
                          <th>Title</th>
                          <th>Regular Price</th>
                          <th>Selling Price</th>
                          <th>Down Payment</th>
                          <th>Weekly Rent</th>
                          <th>Status</th>
                          <th>Image</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($cars as $car)
                        <tr class="align-middle text-center">
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $car->title }}</td>
                          <td>{{ $car->reguller_price }}</td>
                          <td>{{ $car->selling_price }}</td>
                          <td>{{ $car->down_payment }}</td>
                          <td>{{ $car->weekly_rent }}</td>
                          <td>{{ $car->status == 1 ? 'Active' : 'In Active' }}</td>
                          <td>
                            <img src="{{ asset($car->cover_image) }}" alt="{{ $car->title }}" width="120" height="100">
                          </td>
                          <td>
                            <div class="d-flex gap-1 justify-content-center">
                                <a href="{{ route('car.show', $car->id) }}" class="btn btn-success">Show</a>
                                <a href="{{ route('car.edit', $car->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('car.destroy', $car->id) }}" method="post" onsubmit="return confirm('Are you sure want to delete ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  <div class="card-footer clearfix">
                    {{ $cars->links('pagination::bootstrap-5') }}
                  </div>
                </div>
              </div>
            </div>
@endsection
