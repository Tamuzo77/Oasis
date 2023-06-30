<x-admin.layout title="Créer une Actualité">

    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <!-- Page header -->
            <div class="mb-5">
                <h3 class="mb-0 ">Créer une nouvelle Actualité</h3>

            </div>
        </div>
        <div>
            <!-- row -->
            <div class="row">
                <div class="col-xl-9 col-md-12 col-12">
                    <!-- card -->
                    <div class="card mb-5">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- form -->
                            <form id="my-form" action="{{ route('admin.actualites.update',\Illuminate\Support\Facades\Crypt::encrypt($actus->slug)) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <!-- form group -->
                                    <div class="mb-3 col-12">
                                        <label class="form-label">Titre <span class="text-danger">*</span></label>
                                        <input type="text" name="title"
                                            class="form-control @error('title') is-invalid @enderror"
                                            placeholder="Enter actus title" value="{{ old('title') ?? $actus->title }}" required>
                                        @error('title')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <x-admin.form.label name="slug" :important="true" />
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="slug">https://example.com/</span>
                                        <input type="text" class="form-control" id="basic-url" name="slug" value="{{ old('slug', $actus->slug) }}" aria-describedby="slug" placeholder="actus-title">
                                    </div>
                                    <!-- form group -->
                                    <x-admin.form.textarea label="Description" name="content" required> 
                                        {{ $actus->content }}
                                    </x-admin.form.textarea>

                                    {{--<div class="mb-20 col-12">
                                        <label class="form-label">Description</label>
                                        <div name="description" id="editor">
                                            <p> {!! $actus->content !!} </p>
                                        </div>
                                        <input type="hidden" name="content" id="description" class="hidden-input">
                                        @error('content')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>--}}

                                    <br>
                                    <br>
                                    <br>
                                    <!-- form group -->
                                    <div class="mb-4 col-md-6 col-12">
                                        <label class="form-label">Categorie
                                        </label>
                                        <select class="form-select" name="categoryNew_id">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" 
                                                    {{ old('categoryNew_id', $actus->categoryNew_id) == $category->id ? 'selected = "selected"' : '' }} >{{ ucwords($category->name) }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- form group -->
                                    <div class="mb-4 col-md-6 col-12">
                                        <label class="form-label">Statut</label>
                                        <select class="form-select" name="status_id">
                                            @foreach ($statuses as $status)
                                                <option value="{{ $status->id }} {{ old('status_id', $actus->status_id) == $status->id ? 'selected="selected"' : '' }}">{{ $status->libelle }}</option>
                                            @endforeach
                                        </select>
                                    </div>



                                    <input type="hidden" name="author" value="OASIS">


                                    <div class="col-12 mb-4">
                                        <h5 class="mb-2">Image de couverture </h5>

                                        <div class="fallback d-block dropzone border-dashed min-h-0 rounded-2">

                                            <input value="{{ old('cover_image', $actus->cover_image) }}" name="cover_image"
                                                type="file" >

                                            @error('cover_image')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>



                                    </div>

                                    <div class="col-md-8"></div>
                                    <!-- button -->
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit"
                                            onclick="submitForm()">Submit</button>
                                        <button type="button" class="btn btn-outline-primary ms-2"
                                            data-bs-dismiss="offcanvas" aria-label="Close">Close</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card mb-5 ">
                        <div class="card-header">
                            <h4 class="mb-0">Attached files</h4>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div>
                                    <h5>Add Attached files here.</h5>
                                    <div class=" p-10  border-dashed mb-4 text-center">
                                        <span>Drop files here to upload</span>
                                    </div>
                                    <div class="card card-bordered  mb-4 ">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <img src="../assets/images/background/profile-bg.jpg" alt=""
                                                        class="icon-shape icon-xxl rounded-3">
                                                    <div class="ms-3">
                                                        <h6 class="mb-0">Uploaded Image Title 02-08-2023 at 4:35:56 PM.png
                                                        </h6>
                                                        <small>0.8 MB</small>
                                                    </div>
                                                </div>
                                                <div>
                                                    <a href="#!" class="link-danger"><i data-feather="trash-2"
                                                            class="icon-xs"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-bordered  mb-4 ">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <img src="../assets/images/background/profile-bg.jpg" alt=""
                                                        class="icon-shape icon-xxl rounded-3">
                                                    <div class="ms-3">
                                                        <h6 class="mb-0">Uploaded Image Title 02-08-2023 at 4:35:56 PM.png
                                                        </h6>
                                                        <small>0.8 MB</small>
                                                    </div>
                                                </div>
                                                <div>
                                                    <a href="#!" class="link-danger"><i data-feather="trash-2"
                                                            class="icon-xs"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="mt-4 d-flex justify-content-end">
                        <a href="#!" class="btn btn-primary me-2">Create</a>
                        <a href="#!" class="btn btn-dark">Save as Draft</a>
                    </div>
                </div>


                <div class="col-xl-3">
                    <div class="card mb-5">
                        <div class="card-header">
                          <h4 class="mb-0">Actuelle Image de Couverture</h4>
                        </div>
                        <div class="card-body">
                            <img src="{{ asset( 'storage/' . $actus->cover_image) }}" alt="Image"
                            class="img-fluid rounded-top custom-image">
                            
                        </div>
      
                      </div>
                    <div class="card ">
                        <div class="card-header">
                            <h4 class="mb-0">Tags</h4>
                        </div>
                        <div class="card-body">
                            <label class="form-label">Categories</label>
                            <select class="form-select">
                                <option selected>Select Categories</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <div class="mt-4">
                                <label class="form-label">Tags</label>
                                <input class="form-control" id="choices-text-input" data-choices
                                    data-choices-limit="Required Limit" placeholder="Enter Skills" type="text"
                                    value="Creative, Dash ui">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <script>
            function submitForm() {
                /*var description = document.getElementById('editor').innerHTML;
                document.getElementById('description').value = description;
                document.forms[0].submit();*/

                Dropzone.options.myDropzone = {
                    url: document.getElementById('myForm').getAttribute('action'),
                    paramName: "cover_image",
                    maxFiles: 1,
                    acceptedFiles: "image/*",
                    init: function() {
                        this.on("success", function(file, response) {
                            console.log(response);
                        });
                    }
                };

            }
        </script>
        <style>
            .ql-hidden{
              visibility: hidden;
              position: absolute;
            }
            .custom-image {
              height: 130px; 
              object-fit: cover; 
            }
      
      
        </style>
</x-admin.layout>
