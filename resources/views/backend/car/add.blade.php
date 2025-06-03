 @extends('backend.master')

 @section('header')
     <div class="row">
         <div class="col-sm-6">
             <h3 class="mb-0">Car</h3>
         </div>
         <div class="col-sm-6">
             <ol class="breadcrumb float-sm-end">
                 <li class="breadcrumb-item"><a href="#">Home</a></li>
                 <li class="breadcrumb-item active" aria-current="page">Add Car</li>
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
                     <div class="card-title">Add Car</div>
                 </div>
                 <!--end::Header-->
                 <!--begin::Form-->
                 <form action="{{ route('car.store') }}" method="post" enctype="multipart/form-data">
                     @csrf
                     <!--begin::Body-->
                     <div class="card-body">
                         <div class="mb-3">
                             <label class="form-label">Title</label>
                             <input type="text" class="form-control" name="title" />
                         </div>
                         <div class="mb-3">
                             <label class="form-label">Regullar Price</label>
                             <input type="number" class="form-control" name="reguller_price" />
                         </div>
                         <div class="mb-3">
                             <label class="form-label">Selling Price</label>
                             <input type="number" class="form-control" name="selling_price" />
                         </div>
                         <div class="mb-3">
                             <label class="form-label">Down Payment</label>
                             <input type="number" class="form-control" name="down_payment" />
                         </div>
                         <div class="mb-3">
                             <label class="form-label">Weekly Rent</label>
                             <input type="number" class="form-control" name="weekly_rent" />
                         </div>
                         <div class="mb-3">
                             <label class="form-label">Description</label>
                             <input type="text" class="form-control" name="description" />
                         </div>
                         <div class="mb-3">
                             <label class="form-label">Cover Image</label>
                             <input type="file" class="form-control" name="cover_image" />
                         </div>
                         <div class="mb-3">
                             <label class="form-label">Other Images</label>
                             <input type="file" class="form-control" name="other_images[]" multiple>
                         </div>
                         <div class="mb-3">
                             <label class="form-label">Status</label>
                             <select class="form-control" name="status">
                                 <option class="form-control" value="1">Active</option>
                                 <option class="form-control" value="2">In Active</option>
                             </select>
                         </div>
                         <div class="mb-3">
                             <button type="button" class="btn btn-warning" id="add_feature">Add Feature</button>
                         </div>

                         <div id="feature_list">
                             <!-- New feature inputs will appear here -->
                         </div>

                     </div>
                     <!--end::Body-->
                     <!--begin::Footer-->
                     <div class="card-footer">
                         <button type="submit" class="btn btn-primary">Add Car</button>
                     </div>
                     <!--end::Footer-->
                 </form>
                 <!--end::Form-->
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
</script>


 @endpush
