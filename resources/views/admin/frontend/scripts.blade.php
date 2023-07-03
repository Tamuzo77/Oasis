<!-- Libs JS -->
<script src="{{ asset('admin/assets/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/feather-icons/dist/feather.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/simplebar/dist/simplebar.min.js') }}"></script>

@if (request()->is('admin/actualites/create') || request()->is('admin/formations/create'))
<script src="{{ asset('admin/assets/libs/tippy.js/dist/tippy-bundle.umd.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/vendors/choice.js') }}"></script>
<script src="{{ asset('admin/assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>
@endif


<!-- Theme JS -->
<script src="{{ asset('admin/assets/js/theme.min.js') }}"></script>
<!-- jsvectormap -->
<script src="{{ asset('admin/assets/libs/jsvectormap/dist/js/jsvectormap.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/jsvectormap/dist/maps/world.js') }}"></script>
<script src="{{ asset('admin/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/vendors/chart.js') }}"></script>

@if (request()->is('admin/actualites/categories'))
    <script src="{{ asset('admin/assets/libs/prismjs/prism.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/prismjs/plugins/toolbar/prism-toolbar.min.js') }}"></script>
@endif

@if (request()->is('admin/actualites-grid') || request()->is('admin/actualites-list') || request()->is('admin/actualites/create') || request()->is('admin/formations/create'))
    <script src="{{ asset('admin/assets/libs/dropzone/dist/min/dropzone.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/flatpickr/dist/flatpickr.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/quill/dist/quill.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/%40popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendors/tooltip.js') }}"></script>
@endif

@if (request()->is('admin/emplois') || request()->is('admin/recruteurs') || request()->is('admin/roles') || request()->is('admin/permissions'))
<script src="{{ asset('admin/assets/libs/%40popperjs/core/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/tippy.js/dist/tippy-bundle.umd.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/vendors/tooltip.js') }}"></script>
<script src="{{ asset('admin/assets/libs/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/vendors/datatable.js') }}"></script>
@endif


<script src="{{ asset('admin/assets/libs/bs-stepper/dist/js/bs-stepper.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/vendors/beStepper.js') }}"></script> 
<script src="{{ asset('admin/assets/js/filepond.js') }}"></script>
