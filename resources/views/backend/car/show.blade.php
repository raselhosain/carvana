 @extends('backend.master')

 @section('header')
     <div class="row">
         <div class="col-sm-6">
             <h3 class="mb-0"></h3>
         </div>
         <div class="col-sm-6">
             <ol class="breadcrumb float-sm-end">
                 <li class="breadcrumb-item"><a href="#">Home</a></li>
                 <li class="breadcrumb-item active" aria-current="page">Car Detail</li>
             </ol>
         </div>
     </div>
 @endsection

 @section('content')
     <div class="row g-4">
         <div class="col-md-6 mx-auto">
             <div class="card card-primary mb-4">
                 <!--begin::Header-->
                 <div class="card-header">
                     <div class="card-title">Car Detail</div>
                 </div>
                 <!--end::Header-->
                 <!--begin::Body-->
                 <div class="card-body">
                     <div class="mb-3">
                         <label class="form-label">Title</label>
                         <input type="text" class="form-control" value="{{ $car->title }}" />
                     </div>
                     <div class="mb-3">
                         <label class="form-label">Regullar Price</label>
                         <input type="number" class="form-control" value="{{ $car->reguller_price }}" />
                     </div>
                     <div class="mb-3">
                         <label class="form-label">Selling Price</label>
                         <input type="number" class="form-control" value="{{ $car->selling_price }}" />
                     </div>
                     <div class="mb-3">
                         <label class="form-label">Down Payment</label>
                         <input type="number" class="form-control" value="{{ $car->down_payment }}" />
                     </div>
                     <div class="mb-3">
                         <label class="form-label">Weekly Rent</label>
                         <input type="number" class="form-control" value="{{ $car->weekly_rent }}" />
                     </div>
                     <div class="mb-3">
                         <label class="form-label">Description</label>
                         <input type="text" class="form-control" value="{{ $car->description }}" />
                     </div>
                     <div class="mb-3">
                         <label class="form-label">Cover Image</label>
                         <img src="{{ asset($car->cover_image) }}" alt="{{ $car->title }}" width="120" height="100">
                     </div>
                     <div class="mb-3">
                         <label class="form-label">Other Images</label>
                         @foreach ($car->otherImage as $image)
                             <img src="{{ asset($image->image) }}" width="120" height="100">
                         @endforeach
                     </div>
                     <div class="mb-3">
                         <label class="form-label">Status</label>
                         <select class="form-control" name="status">
                             <option class="form-control" value="1" @selected($car->status == 1)>Active</option>
                             <option class="form-control" value="2" @selected($car->status == 2)>In Active</option>
                         </select>
                     </div>
                     <div class="mb-3">
                         <h5><b>Features</b></h5>
                         @foreach ($car->carFeature as $feature)
                             <div class="mb-2">
                                 <h6>{{ $feature->feature }}</h6>
                             </div>
                         @endforeach
                     </div>
                     <div class="card-footer">
                        <a href="{{ route('car.edit', $car->id) }}" class="btn btn-primary">Edit Car</a>
                     </div>
                 </div>
             </div>
         </div>
     @endsection
