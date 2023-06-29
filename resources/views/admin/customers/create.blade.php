<x-admin.layout title="Add to the CV - Thèque">
    <x-admin.header title="Add to the CV - Thèque" />
    <x-admin.flash />
    <div class="row">
        <div class="col-xl-9 col-md-12 col-12">
            <!-- card -->
            <div class="card mb-5">
                <!-- card body -->
                <div class="card-body">
                    <form action="{{ route('admin.cv-theque.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <x-admin.form.field class="row g-3">
                            <div class="col-md-4">
                                <x-admin.form.input id="lastname" name="lastname" label="nom"  :important="true"  />
    
                            </div>
                            <div class="col-md-4">
                                <x-admin.form.input id="firstname" name="firstname" label="prenom"  :important="true"  />
    
                            </div>
                            <div class="col-md-4">
                                <x-admin.form.input  label="Email" name="email" type="mail"  :important="true"  />
                            </div>
                            <div class="col-md-2">
                                <x-admin.form.input  type="tel" id="tel" label="Téléphone" name="phone"  :important="true"  />
    
                            </div>
                            <div class="col-md-2">
                                <x-admin.form.input  type="number" id="age" label="age" name="age"  :important="true"  />
    
                            </div>
                        
                            <div class="col-8">
                                <x-admin.form.input  type="file" id="picture" name="picture" label="Photo"  />
                            </div>
                            <div class="col-12">
                                <x-admin.form.textarea name="biography" label="Biographie Professionelle" :important="true" />
                            </div>

                            <div class="col-12">
                                <x-admin.form.input type="file" :important="true" required name="cv_path" label="Déposez votre CV" />
                            </div>
                            
                            
                        </x-admin.form.field>
                        <div class="d-flex justify-content-between">
                            <a href="{{ url('admin/cv-theque') }}" class="btn btn-dark">
                                {{ 'Retour' }}
                            </a>
                                <button type="submit"
                                    class="btn btn-primary">

                                    {{ "Enregistrer" }}
                                </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-admin.layout>
