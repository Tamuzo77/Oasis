<x-admin.layout title="Boutique">
    <x-admin.header :title="'Boutique'" />
    <link href="{{ asset('admin/assets/libs/tiny-slider/dist/tiny-slider.css') }}" rel="stylesheet">
    <script src="{{ asset('admin/assets/libs/tiny-slider/dist/min/tiny-slider.js') }}"></script>
    <div>
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- card body -->
                    <div class="card-body p-5">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="tns-outer tns-slide-active" id="product-ow">
                                    <div class="tns-liveregion tns-visually-hidden" aria-live="polite"
                                        aria-atomic="true">slide <span class="current">3</span> of 4</div>
                                    <div id="product-mw" class="tns-ovh">
                                        <div class="tns-inner" id="product-iw">
                                            <div class="product  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal"
                                                id="product"
                                                style="transition-duration: 0s; transform: translate3d(-33.3333%, 0px, 0px);">
                                                <div class="tns-item tns-slide-cloned" aria-hidden="true"
                                                    tabindex="-1">
                                                    @php
                                                        $pic = $product->main_image;
                                                    @endphp
                                                    <div>
                                                        <!-- img -->
                                                        <img src="{{ asset("storage/library/$pic") }}" alt="Image"
                                                            class="img-fluid tns-slide-active">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- product tools -->
                                <div class="product-tools">
                                    <div class="thumbnails row g-3" id="product-thumbnails"
                                        aria-label="Carousel Pagination">
                                        <div class="col-3" data-nav="0" tabindex="-1" aria-label="Carousel Page 1"
                                            aria-controls="product">
                                            <div class="thumbnails-img">
                                                <!-- img -->
                                                <img src="../assets/images/ecommerce/product-1.jpg" alt="Image">
                                            </div>
                                        </div>
                                        <div class="col-3 tns-nav-active" data-nav="1"
                                            aria-label="Carousel Page 2 (Current Slide)" aria-controls="product">
                                            <div class="thumbnails-img">
                                                <!-- img -->
                                                <img src="../assets/images/ecommerce/product-2.jpg" alt="Image">
                                            </div>
                                        </div>
                                        <div class="col-3" data-nav="2" tabindex="-1" aria-label="Carousel Page 3"
                                            aria-controls="product">
                                            <div class="thumbnails-img">
                                                <!-- img -->
                                                <img src="../assets/images/ecommerce/product-3.jpg" alt="Image">
                                            </div>
                                        </div>
                                        <div class="col-3" data-nav="3" tabindex="-1" aria-label="Carousel Page 4"
                                            aria-controls="product">
                                            <div class="thumbnails-img">
                                                <!-- img -->
                                                <img src="../assets/images/ecommerce/product-4.jpg" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-12">
                                <div class="my-5 mx-xl-10">
                                    <div>
                                        <!-- heading -->
                                        <h1>{{ $product->title }}</h1>
                                        <div>
                                            <!-- review -->
                                            <span><span class="me-2 text-dark "><i
                                                        class="mdi mdi-star text-success "></i>
                                                </span>Type: {{ $product->type->name }}</span>
                                        </div>
                                    </div>
                                    <hr class="my-3">
                                    <div class="mb-5">
                                        <!-- heading -->
                                        <h4 class="mb-1">{{ $product->price }}
                                            <span class="text-warning">(FCFA)</span>
                                        </h4>
                                        <span></span>
                                    </div>
                                    <hr class="mt-4 mb-2">
                                    <div class=" mb-4" id="ecommerceAccordion">
                                        <!-- List group -->

                                        <ul class="list-group list-group-flush">

                                            <!-- List group item -->
                                            <li class="list-group-item px-0">
                                                <!-- Toggle -->
                                                <a class="d-flex align-items-center text-inherit text-decoration-none h4 mb-0"
                                                    data-bs-toggle="collapse" href="#productDetails" role="button"
                                                    aria-expanded="false" aria-controls="productDetails">
                                                    <div class="me-auto">
                                                        Details du produit
                                                    </div>
                                                    <!-- Chevron -->
                                                    <span class="chevron-arrow  ms-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-chevron-down icon-xs">
                                                            <polyline points="6 9 12 15 18 9"></polyline>
                                                        </svg>
                                                    </span>
                                                </a>
                                                <!-- Row -->
                                                <!-- Collapse -->
                                                <div class="collapse show" id="productDetails"
                                                    data-bs-parent="#ecommerceAccordion">
                                                    <div class="py-3 ">
                                                        <p>{{ $product->description }} </p>

                                                        <!-- heading -->
                                                        <h4>Features:</h4>
                                                        <!-- list -->
                                                        <ul>
                                                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            </li>
                                                            <li> Integer ut justo quis diam finibus lobortis vel at dui.
                                                            </li>
                                                            <li> Morbi ultricies leo sit amet nisl suscipit, et
                                                                vulputate orci fringilla.
                                                            </li>
                                                            <li> Nullam sit amet lacus ut nibh pharetra rutrum venenatis
                                                                ac purus.
                                                            </li>
                                                            <li> Sed ut arcu dapibus, viverra ex vitae, fermentum
                                                                libero.
                                                            </li>
                                                            <li> Fusce eget mauris in elit ultricies vehicula.
                                                            </li>
                                                            <li> Vivamus tincidunt ligula id sollicitudin finibus.
                                                            </li>
                                                            <li>Nullam facilisis enim viverra nulla malesuada consequat.
                                                            </li>
                                                            <li>
                                                                Nullam feugiat turpis ullamcorper augue fringilla, at
                                                                facilisis magna dignissim.
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- List group item -->
                                            <li class="list-group-item px-0">
                                                <!-- Toggle -->
                                                <a class="d-flex align-items-center text-inherit text-decoration-none h4 mb-0"
                                                    data-bs-toggle="collapse" href="#specifications" role="button"
                                                    aria-expanded="false" aria-controls="specifications">
                                                    <div class="me-auto">
                                                        Specifications
                                                    </div>
                                                    <!-- Chevron -->
                                                    <span class="chevron-arrow  ms-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-chevron-down icon-xs">
                                                            <polyline points="6 9 12 15 18 9"></polyline>
                                                        </svg>
                                                    </span>
                                                </a>
                                                <!-- Row -->
                                                <!-- Collapse -->
                                                <div class="collapse " id="specifications"
                                                    data-bs-parent="#ecommerceAccordion">
                                                    <div class="py-3 ">
                                                        <table class="table table-striped">
                                                            <tbody>
                                                                <tr>

                                                                    <th class="w-20">Sport</th>
                                                                    <td>Running</td>

                                                                </tr>
                                                                <tr>

                                                                    <th class="w-20">Material</th>
                                                                    <td>Mesh</td>

                                                                </tr>
                                                                <tr>

                                                                    <th class="w-20">Fastening</th>
                                                                    <td>Lace-Ups </td>

                                                                </tr>
                                                                <tr>

                                                                    <th class="w-20">Outsole Type</th>
                                                                    <td>Marking </td>

                                                                </tr>
                                                                <tr>

                                                                    <th class="w-20">Warranty</th>
                                                                    <td>3 months </td>

                                                                </tr>

                                                            </tbody>
                                                        </table>


                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item px-0">
                                                <!-- Toggle -->
                                                <a class="d-flex align-items-center text-inherit text-decoration-none h4 mb-0"
                                                    data-bs-toggle="collapse" href="#freeShippingPolicy"
                                                    role="button" aria-expanded="false"
                                                    aria-controls="freeShippingPolicy">
                                                    <div class="me-auto">
                                                        Free Shipping Policy
                                                    </div>
                                                    <!-- Chevron -->
                                                    <span class="chevron-arrow  ms-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-chevron-down icon-xs">
                                                            <polyline points="6 9 12 15 18 9"></polyline>
                                                        </svg>
                                                    </span>
                                                </a>
                                                <!-- Row -->
                                                <!-- Collapse -->
                                                <div class="collapse " id="freeShippingPolicy"
                                                    data-bs-parent="#ecommerceAccordion">
                                                    <div class="py-3 ">
                                                        <p class="mb-0">The single most important criteria for a lot
                                                            of first time
                                                            customers. Lorem
                                                            ipsum dolor sit amet consectetur adipiscing elit enean nisi
                                                            magna rhoncus in
                                                            diam vel, aliquet volutpat nisl.</p>

                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item px-0 border-bottom">
                                                <!-- Toggle -->
                                                <a class="d-flex align-items-center text-inherit text-decoration-none h4 mb-0"
                                                    data-bs-toggle="collapse" href="#refundPolicy" role="button"
                                                    aria-expanded="false" aria-controls="refundPolicy">
                                                    <div class="me-auto">
                                                        Refund Policy
                                                    </div>
                                                    <!-- Chevron -->
                                                    <span class="chevron-arrow  ms-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-chevron-down icon-xs">
                                                            <polyline points="6 9 12 15 18 9"></polyline>
                                                        </svg>
                                                    </span>
                                                </a>
                                                <!-- Row -->
                                                <!-- Collapse -->
                                                <div class="collapse " id="refundPolicy"
                                                    data-bs-parent="#ecommerceAccordion">
                                                    <div class="py-3 ">
                                                        <p class="mb-0">A Return &amp; Refund Policy is a policy that
                                                            dictates under what
                                                            conditions
                                                            customers can return products they've purchased from your
                                                            eCommerce
                                                            store and whether you'll reimburse them or not.</p>

                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin.layout>
