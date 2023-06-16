
<div class="py-6">
  <div class="row">
    <div class="col-md-12 col-12 mb-4">
      <div class="d-flex justify-content-between
        align-items-center">
        <!-- Heading -->
        <div class="mb-3 mb-lg-0">
          <h3 class="mb-0">{{ __("$title") }}</h3>
        </div>
        <!-- icons -->
        <div class="d-flex align-items-center">
          <form method="get">
            <select name="status" class="form-select" onchange="this.form.submit()">
                <option value="">Filtre</option>
                <option value="actif" {{ Request::get('status') == 'actif' ? 'selected' : '' }}>Actif</option>
                <option value="inactif" {{ Request::get('status') == 'inactif' ? 'selected' : '' }}>Inactif</option>

            </select>


          </form>
          <a href="#!" class="btn btn-primary ms-3">Ajouter un Service</a>
        </div>
      </div>

    </div>
  
  
  
  </div>
  <div class="row">
      <div class="col-xxl-3 col-lg-6 mb-4">
          <div class="card">
              <div class="card-body text-center  ">
                  <div class="my-4">
                      <div class="mb-5">
                          <img src="{{ asset('admin/assets/images/svg/sellerlogo-1.svg') }}" alt="Image">
  
                      </div>
                      <h4 class="mb-0">True Line Store</h4>
                      <span>Adam Pyles</span>
                  </div>
  
                  <div id="storeOne" class="px-8"></div>
                  <div class="mt-6 row ">
                      <div class="col">
                          <div>
                              <h3 class="mb-0 ">345</h3>
                              <span>Products</span>
                          </div>
  
                      </div>
                      <div class="vr g-0"></div>
                      <div class="col">
                          <div>
                              <h3 class="mb-0 ">$45,129</h3>
                              <span>Wallet Balance</span>
                          </div>
  
                      </div>
  
                  </div>
  
              </div>
              <div class="card-footer text-end">
                  <a href="#!" class="btn btn-primary-soft">View Details<i class="ms-1 icon-xs"
                          data-feather="arrow-right"></i></a>
              </div>
  
          </div>
  
      </div>
      <div class="col-xxl-3 col-lg-6 mb-4">
          <div class="card">
              <div class="card-body text-center  ">
                  <div class="my-4 ">
                      <div class="mb-5">
                          <img src="{{ asset('admin/assets/images/svg/sellerlogo-2.svg') }}" alt="Image">
                      </div>
                      <h4 class="mb-0">Nykaa Fashion</h4>
                      <span>Brian Raines</span>
                  </div>
  
                  <div id="storeTwo" class="px-8"></div>
                  <div class="mt-6 row ">
                      <div class="col">
                          <div>
                              <h3 class="mb-0 ">1234</h3>
                              <span>Products</span>
                          </div>
  
                      </div>
                      <div class="vr g-0"></div>
                      <div class="col">
                          <div>
                              <h3 class="mb-0 ">$1,45,129</h3>
                              <span>Wallet Balance</span>
                          </div>
  
                      </div>
  
                  </div>
  
              </div>
              <div class="card-footer text-end">
                  <a href="#!" class="btn btn-primary-soft">View Details<i class="ms-1 icon-xs"
                          data-feather="arrow-right"></i></a>
              </div>
  
          </div>
  
      </div>
      <div class="col-xxl-3 col-lg-6 mb-4">
          <div class="card">
              <div class="card-body text-center  ">
                  <div class="my-4 ">
                      <div class="mb-5">
                          <img src="{{ asset('admin/assets/images/svg/sellerlogo-3.svg') }}" alt="Image">
                      </div>
                      <h4 class="mb-0">Beverly Maclean</h4>
                      <span>Brian Raines</span>
                  </div>
  
                  <div id="storeThree" class="px-8"></div>
                  <div class="mt-6 row ">
                      <div class="col">
                          <div>
                              <h3 class="mb-0 ">456</h3>
                              <span>Products</span>
                          </div>
  
                      </div>
                      <div class="vr g-0"></div>
                      <div class="col">
                          <div>
                              <h3 class="mb-0 ">$53,269</h3>
                              <span>Wallet Balance</span>
                          </div>
  
                      </div>
  
                  </div>
  
              </div>
              <div class="card-footer text-end">
                  <a href="#!" class="btn btn-primary-soft">View Details<i class="ms-1 icon-xs"
                          data-feather="arrow-right"></i></a>
              </div>
  
          </div>
  
      </div>
      <div class="col-xxl-3 col-lg-6 mb-4">
          <div class="card">
              <div class="card-body text-center  ">
                  <div class="my-4 ">
                      <div class="mb-5">
                          <img src="{{ asset('admin/assets/images/svg/sellerlogo-4.svg') }}" alt="Image">
                      </div>
                      <h4 class="mb-0">Nine Digital Store</h4>
                      <span>Adam Pyles</span>
                  </div>
  
                  <div id="storeFour" class="px-8"></div>
                  <div class="mt-6 row ">
                      <div class="col">
                          <div>
                              <h3 class="mb-0 ">242</h3>
                              <span>Products</span>
                          </div>
  
                      </div>
                      <div class="vr g-0"></div>
                      <div class="col">
                          <div>
                              <h3 class="mb-0 ">$63,789</h3>
                              <span>Wallet Balance</span>
                          </div>
  
                      </div>
  
                  </div>
  
              </div>
              <div class="card-footer text-end">
                  <a href="#!" class="btn btn-primary-soft">View Details<i class="ms-1 icon-xs"
                          data-feather="arrow-right"></i></a>
              </div>
  
          </div>
  
      </div>
      <div class="col-xxl-3 col-lg-6 mb-4">
          <div class="card">
              <div class="card-body text-center  ">
                  <div class="my-4 ">
                      <div class="mb-5">
                          <img src="{{ asset('admin/assets/images/svg/sellerlogo-5.svg') }}" alt="Image">
                      </div>
                      <h4 class="mb-0">Titan Jewellery</h4>
                      <span>Brian Raines</span>
                  </div>
  
                  <div id="storeFive" class="px-8"></div>
                  <div class="mt-6 row ">
                      <div class="col">
                          <div>
                              <h3 class="mb-0 ">636</h3>
                              <span>Products</span>
                          </div>
  
                      </div>
                      <div class="vr g-0"></div>
                      <div class="col">
                          <div>
                              <h3 class="mb-0 ">$13,976</h3>
                              <span>Wallet Balance</span>
                          </div>
  
                      </div>
  
                  </div>
  
              </div>
              <div class="card-footer text-end">
                  <a href="#!" class="btn btn-primary-soft">View Details<i class="ms-1 icon-xs"
                          data-feather="arrow-right"></i></a>
              </div>
  
          </div>
  
      </div>
      <div class="col-xxl-3 col-lg-6 mb-4">
          <div class="card">
              <div class="card-body text-center  ">
                  <div class="my-4 ">
                      <div class="mb-5">
                          <img src="{{ asset('admin/assets/images/svg/sellerlogo-6.svg') }}" alt="Image">
                      </div>
                      <h4 class="mb-0">HalfRound Store</h4>
                      <span>Beverly Maclean</span>
                  </div>
  
                  <div id="storeSix" class="px-8"></div>
                  <div class="mt-6 row ">
                      <div class="col">
                          <div>
                              <h3 class="mb-0 ">456</h3>
                              <span>Products</span>
                          </div>
  
                      </div>
                      <div class="vr g-0"></div>
                      <div class="col">
                          <div>
                              <h3 class="mb-0 ">$13,976</h3>
                              <span>Wallet Balance</span>
                          </div>
  
                      </div>
  
                  </div>
  
              </div>
              <div class="card-footer text-end">
                  <a href="#!" class="btn btn-primary-soft">View Details<i class="ms-1 icon-xs"
                          data-feather="arrow-right"></i></a>
              </div>
  
          </div>
  
      </div>
      <div class="col-xxl-3 col-lg-6 mb-4">
          <div class="card">
              <div class="card-body text-center  ">
                  <div class="my-4 ">
                      <div class="mb-5">
                          <img src="{{ asset('admin/assets/images/svg/sellerlogo-2.svg') }}" alt="Image">
                      </div>
                      <h4 class="mb-0">True Line Store</h4>
                      <span>Beverly Maclean</span>
                  </div>
  
                  <div id="storeSeven" class="px-8"></div>
                  <div class="mt-6 row ">
                      <div class="col">
                          <div>
                              <h3 class="mb-0 ">283</h3>
                              <span>Products</span>
                          </div>
  
                      </div>
                      <div class="vr g-0"></div>
                      <div class="col">
                          <div>
                              <h3 class="mb-0 ">$10,976</h3>
                              <span>Wallet Balance</span>
                          </div>
  
                      </div>
  
                  </div>
  
              </div>
              <div class="card-footer text-end">
                  <a href="#!" class="btn btn-primary-soft">View Details<i class="ms-1 icon-xs"
                          data-feather="arrow-right"></i></a>
              </div>
  
          </div>
  
      </div>
      <div class="col-xxl-3 col-lg-6 mb-4">
          <div class="card">
              <div class="card-body text-center  ">
                  <div class="my-4 ">
                      <div class="mb-5">
                          <img src="{{ asset('admin/assets/images/svg/sellerlogo-1.svg') }}" alt="Image">
                      </div>
                      <h4 class="mb-0">Nykaa Fashion</h4>
                      <span>Brian Raines</span>
                  </div>
  
                  <div id="storeEight" class="px-8"></div>
                  <div class="mt-6 row ">
                      <div class="col">
                          <div>
                              <h3 class="mb-0 ">560</h3>
                              <span>Products</span>
                          </div>
  
                      </div>
                      <div class="vr g-0"></div>
                      <div class="col">
                          <div>
                              <h3 class="mb-0 ">$12,300</h3>
                              <span>Wallet Balance</span>
                          </div>
  
                      </div>
  
                  </div>
  
              </div>
              <div class="card-footer text-end">
                  <a href="#!" class="btn btn-primary-soft">View Details<i class="ms-1 icon-xs"
                          data-feather="arrow-right"></i></a>
              </div>
  
          </div>
  
      </div>
  </div>
  </div>

</div>




