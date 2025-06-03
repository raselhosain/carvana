 @extends('backend.master')

 @section('header')
     <div class="row">
         <div class="col-sm-6">
             <h3 class="mb-0">Car</h3>
         </div>
         <div class="col-sm-6">
             <ol class="breadcrumb float-sm-end">
                 <li class="breadcrumb-item"><a href="#">Home</a></li>
                 <li class="breadcrumb-item active" aria-current="page">Edit Car</li>
             </ol>
         </div>
     </div>
 @endsection

 @section('content')
     <div class="row g-4">
         <div class="col-md-6 mx-auto">
             <div class="card card-primary mb-4">
                 <div class="card-header">
                     <div class="card-title">Edit Car</div>
                 </div>
                 <form action="{{ route('car.update', $car->id) }}" method="post" enctype="multipart/form-data">
                     @csrf
                     @method('put')
                     <div class="card-body">
                         <div class="mb-3">
                             <label class="form-label">Title</label>
                             <input type="text" class="form-control" name="title" value="{{ $car->title }}" />
                         </div>
                         <div class="mb-3">
                             <label class="form-label">Regullar Price</label>
                             <input type="number" class="form-control" name="reguller_price"
                                 value="{{ $car->reguller_price }}" />
                         </div>
                         <div class="mb-3">
                             <label class="form-label">Selling Price</label>
                             <input type="number" class="form-control" name="selling_price"
                                 value="{{ $car->selling_price }}" />
                         </div>
                         <div class="mb-3">
                             <label class="form-label">Down Payment</label>
                             <input type="number" class="form-control" name="down_payment"
                                 value="{{ $car->down_payment }}" />
                         </div>
                         <div class="mb-3">
                             <label class="form-label">Weekly Rent</label>
                             <input type="number" class="form-control" name="weekly_rent"
                                 value="{{ $car->weekly_rent }}" />
                         </div>
                         <div class="mb-3">
                             <label class="form-label">Description</label>
                             <input type="text" class="form-control" name="description"
                                 value="{{ $car->description }}" />
                         </div>
                         <div class="mb-3">
                             <label class="form-label">Cover Image</label>
                             <input type="file" class="form-control" name="cover_image" />
                             <img src="{{ asset($car->cover_image) }}" alt="{{ $car->title }}" width="120"
                                 height="100">
                         </div>
                         <div class="mb-3">
                             <label class="form-label">Other Images</label>
                             <input type="file" class="form-control" name="other_images[]" multiple>
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
                             <button type="button" class="btn btn-warning" id="add_feature">Add Feature</button>
                         </div>

                         <div id="feature_list">
                             @foreach ($car->carFeature as $feature)
                                 <div class="d-flex align-items-center mb-2">
                                     <input type="text" name="features[]"
                                         value="{{ $feature->feature }}" class="form-control me-2">
                                     <button type="button" class="btn btn-danger btn-sm remove-feature">✖</button>
                                 </div>
                             @endforeach
                         </div>
                     </div>
                     <div class="card-footer">
                         <button type="submit" class="btn btn-primary">Update Car</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 @endsection

 @push('script')
     <script>
         document.getElementById('add_feature').addEventListener('click', function(e) {
             e.preventDefault();

             const featureList = document.getElementById('feature_list');

             const featureDiv = document.createElement('div');
             featureDiv.className = 'd-flex align-items-center mb-2';

             const input = document.createElement('input');
             input.type = 'text';
             input.name = 'features[]';
             input.className = 'form-control me-2';
             input.placeholder = 'Enter feature';

             const delBtn = document.createElement('button');
             delBtn.type = 'button';
             delBtn.className = 'btn btn-danger btn-sm';
             delBtn.innerHTML = '✖';

             delBtn.addEventListener('click', function() {
                 featureDiv.remove();
             });

             featureDiv.appendChild(input);
             featureDiv.appendChild(delBtn);

             featureList.appendChild(featureDiv);
         });

         document.querySelectorAll('.remove-feature').forEach(function(btn) {
             btn.addEventListener('click', function() {
                 btn.parentElement.remove();
             });
         });
     </script>
 @endpush
