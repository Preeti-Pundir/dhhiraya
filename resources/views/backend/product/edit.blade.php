@extends('backend.layouts.master')

@section('main-content')
    <div class="card">
        <h5 class="card-header">Edit Product</h5>
        <div class="card-body">
            <form method="post" action="{{ route('product.update', $product->id) }} " enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="inputTitle" class="col-form-label">Title <span class="text-danger">*</span></label>
                    <input id="inputTitle" type="text" name="title" placeholder="Enter title"
                        value="{{ $product->title }}" class="form-control">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="summary" class="col-form-label">Summary <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="summary" name="summary">{{ $product->summary }}</textarea>
                    @error('summary')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description" class="col-form-label">Other Details</label>
                    <textarea class="form-control" id="description" name="description">{{ $product->description }}</textarea>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label  class="col-form-label">Add Brochure (Only pdf)<span class="text-danger"></span></label>
                    <input type="file" name="brochure"  value="{{ $product->brochure }}" class="form-control">
                    @error('brochure')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>

                <div class="form-group">
                    <label for="inputTitle" class="col-form-label">Add developer Site link <span class="text-danger"></span></label>
                    <input id="inputTitle" type="text" name="developersite" placeholder="https://example.com"
                        value="{{ $product->developersite }}" class="form-control">
                    @error('developersite')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="developer" class="col-form-label">Developer</label>
                    <textarea class="form-control" id="developer" name="developer">{{ $product->developer }}</textarea>
                    @error('developer')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="acquisition" class="col-form-label">Acquisition</label>
                    <textarea class="form-control" id="acquisition" name="acquisition">{{ $product->acquisition }}</textarea>
                    @error('acquisition')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>



                <div class="form-group">
                    <label for="inputarea" class="col-form-label">Area <span class="text-danger">*</span></label>
                    <input id="inputarea" type="text" name="area" placeholder="Enter area"
                        value="{{ $product->area }}" class="form-control">
                    @error('area')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="inputrooms" class="col-form-label">Rooms <span class="text-danger">*</span></label>
                    <input id="inputrooms" type="text" name="rooms" placeholder="Enter rooms"
                        value="{{ $product->rooms }}" class="form-control">
                    @error('rooms')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="pr_condition" class="col-form-label">Condition <span class="text-danger">*</span></label>
                    <select name="pr_condition" class="form-control">
                        <option value="Ready to move in"
                            {{ $product->pr_condition == 'Ready to move in' ? 'selected' : '' }}>Ready to move in</option>
                        <option value="Construction" {{ $product->pr_condition == 'Construction' ? 'selected' : '' }}>
                            Construction</option>
                    </select>
                    @error('pr_condition')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>



                <div class="form-group">
                    <label for="cat_id">Category <span class="text-danger">*</span></label>
                    <select name="cat_id" id="cat_id" class="form-control">
                        <option value="">--Select any category--</option>
                        @foreach ($categories as $key => $cat_data)
                            <option value='{{ $cat_data->id }}' {{ $product->cat_id == $cat_data->id ? 'selected' : '' }}>
                                {{ $cat_data->title }}</option>
                        @endforeach
                    </select>
                </div>
                @php
                    $sub_cat_info = DB::table('categories')
                        ->select('title')
                        ->where('id', $product->child_cat_id)
                        ->get();

                @endphp


                <div class="form-group">
                    <label for="brand_id">Location</label>
                    <select name="brand_id" class="form-control">
                        <option value="">--Select Brand--</option>
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}" {{ $product->brand_id == $brand->id ? 'selected' : '' }}>
                                {{ $brand->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="price" class="col-form-label">Price(NRS) <span class="text-danger">*</span></label>
                    <input id="price" type="text" name="price" placeholder="Enter price"
                        value="{{ $product->price }}" class="form-control">
                    @error('price')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>




                <div class="form-group">
                    <label for="inputPhoto" class="col-form-label">Photo <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <a id="lfm" data-input="thumbnail" data-preview="holder"
                                class="btn btn-primary text-white">
                                <i class="fas fa-image"></i> Choose
                            </a>
                        </span>
                        <input id="thumbnail" class="form-control" type="text" name="photo"
                            value="{{ $product->photo }}">
                    </div>
                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                    @error('photo')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="col-form-label">Add property Images <span class="text-danger">*</span></label>
                    <input type="file" name="ss[]" multiple value="{{ $product->ss }}" class="form-control">
                    @error('ss')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
                    <select name="status" class="form-control">
                        <option value="active" {{ $product->status == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ $product->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                    @error('status')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <button class="btn btn-success" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('backend/summernote/summernote.min.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
@endpush
@push('scripts')
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script src="{{ asset('backend/summernote/summernote.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

    <script>
        $('#lfm').filemanager('image');

        $(document).ready(function() {
            $('#summary').summernote({
                placeholder: "Write short description.....",
                tabsize: 2,
                height: 150
            });
        });
        $(document).ready(function() {
            $('#description').summernote({
                placeholder: "Write detail Description.....",
                tabsize: 2,
                height: 150
            });
        });
    </script>

    <script>
        var child_cat_id = '{{ $product->child_cat_id }}';
        // alert(child_cat_id);
        $('#cat_id').change(function() {
            var cat_id = $(this).val();

            if (cat_id != null) {
                // ajax call
                $.ajax({
                    url: "/admin/category/" + cat_id + "/child",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        if (typeof(response) != 'object') {
                            response = $.parseJSON(response);
                        }
                        var html_option = "<option value=''>--Select any one--</option>";
                        if (response.status) {
                            var data = response.data;
                            if (response.data) {
                                $('#child_cat_div').removeClass('d-none');
                                $.each(data, function(id, title) {
                                    html_option += "<option value='" + id + "' " + (
                                            child_cat_id == id ? 'selected ' : '') + ">" +
                                        title + "</option>";
                                });
                            } else {
                                console.log('no response data');
                            }
                        } else {
                            $('#child_cat_div').addClass('d-none');
                        }
                        $('#child_cat_id').html(html_option);

                    }
                });
            } else {

            }


        });
        if (child_cat_id != null) {
            $('#cat_id').change();
        }
    </script>
@endpush
