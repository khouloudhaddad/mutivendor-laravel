@extends('admin.layout.layout')

@section('content')

<div class="content-wrapper">
    @if($slug=='personal')
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Vendor Personal Details</h4>
                  <p class="card-description">
                    Update Vendor Personal Details
                  </p>
                  @if(Session::has('error_message'))
                    <div class="mt-3 alert alert-danger alert-dismissible fade show" role="alert">
                        <p><strong>Error: </strong>{{ Session::get('error_message') }}</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                   @endif

                   @if(Session::has('success_message'))
                    <div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
                        <p class="mb-0"><strong>Success: </strong>{{ Session::get('success_message') }}</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                   @endif

                    @if ($errors->any())
                            <div class="mt-3 alert alert-danger alert-dismissible fade show" role="alert">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                    @endif
                  <form
                  class="forms-sample"
                  action="{{ url('admin/update-vendor-details/personal') }}"
                  method="POST"
                  name="updateVendorPersonalDetailsForm"
                  id="updateVendorPersonalDetailsForm"
                  enctype="multipart/form-data"
                  >
                  @csrf
                    <div class="form-group">
                      <label>Vendor Username/Email</label>
                      <input type="text" class="form-control" value="{{ $vendorPersonalDetails['email'] }}" readonly>
                    </div>

                    <div class="form-group">
                      <label for="vendor_name">Name</label>
                      <input type="text" class="form-control" value="{{  $vendorPersonalDetails['name'] }}"
                      id="vendor_name" name="vendor_name" placeholder="Enter Name" required>
                    </div>

                    <div class="form-group">
                      <label for="vendor_address">Address</label>
                      <input type="text" class="form-control" value="{{  $vendorPersonalDetails['address'] }}"
                      id="vendor_address" name="vendor_address" placeholder="Enter Address" required>
                    </div>

                    <div class="form-group">
                      <label for="vendor_city">City</label>
                      <input type="text" class="form-control" value="{{  $vendorPersonalDetails['city'] }}"
                      id="vendor_city" name="vendor_city" placeholder="Enter City" required>
                    </div>

                    <div class="form-group">
                      <label for="vendor_state">State</label>
                      <input type="text" class="form-control" value="{{  $vendorPersonalDetails['state'] }}"
                      id="vendor_state" name="vendor_state" placeholder="Enter State" required>
                    </div>

                    <div class="form-group">
                      <label for="vendor_country">Country</label>
                      <input type="text" class="form-control" value="{{ $vendorPersonalDetails['country'] }}"
                      id="vendor_country" name="vendor_country" placeholder="Enter Country" required>
                    </div>

                    <div class="form-group">
                      <label for="vendor_pincode">Pincode</label>
                      <input type="text" class="form-control" value="{{ $vendorPersonalDetails['pincode'] }}"
                      id="vendor_pincode" name="vendor_pincode" placeholder="Enter Pincode" required>
                    </div>

                    <div class="form-group">
                      <label for="vendor_mobile">Mobile</label>
                      <input type="number" class="form-control" value="{{ $vendorPersonalDetails['mobile'] }}"
                      id="vendor_mobile" name="vendor_mobile" placeholder="Enter mobile Number"
                      required
                      minlength="10"
                      maxlength="10"
                      >
                    </div>
                    <!--Image -->
                    <div class="form-group position-relative mt-2">
                      <label class="custom-file-label" for="vendor_image">Upload Vendor Image</label>
                      <input type="file" class="form-control custom-file-input mb-2"
                      value="{{ Auth::guard('admin')->user()->image }}"
                      id="vendor_image"
                      name="vendor_image"
                      required>

                      @if(!empty(Auth::guard('admin')->user()->image))
                        <a href="{{ asset('admin/images/vendor_photos/'.Auth::guard('admin')->user()->image) }}">View Image</a>
                        <input type="hidden" value="{{ Auth::guard('admin')->user()->image }}"
                        name="current_vendor_image" />
                      @endif
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>

        </div>
    @elseif ($slug == 'business')
         <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Vendor Business Details</h4>
                  <p class="card-description">
                    Update Vendor Business Details
                  </p>
                  @if(Session::has('error_message'))
                    <div class="mt-3 alert alert-danger alert-dismissible fade show" role="alert">
                        <p><strong>Error: </strong>{{ Session::get('error_message') }}</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                   @endif

                   @if(Session::has('success_message'))
                    <div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
                        <p class="mb-0"><strong>Success: </strong>{{ Session::get('success_message') }}</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                   @endif

                    @if ($errors->any())
                            <div class="mt-3 alert alert-danger alert-dismissible fade show" role="alert">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                    @endif
                  <form
                  class="forms-sample"
                  action="{{ url('admin/update-vendor-details') }}"
                  method="POST"
                  name="updateAdminDetailsForm"
                  id="updateAdminDetailsForm"
                  enctype="multipart/form-data"
                  >
                  @csrf
                    <div class="form-group">
                      <label>Admin Username/Email</label>
                      <input type="text" class="form-control" value="{{ Auth::guard('admin')->user()->email }}" readonly>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Admin Type</label>
                      <input type="email" class="form-control"  value="{{ Auth::guard('admin')->user()->type }}" readonly>
                    </div>
                    <div class="form-group">
                      <label for="admin_city">Name</label>
                      <input type="text" class="form-control" value="{{ Auth::guard('admin')->user()->name }}"
                      id="admin_name" name="admin_name" placeholder="Enter Name" required>
                    </div>
                    <div class="form-group">
                      <label for="admin_mobile">Mobile</label>
                      <input type="number" class="form-control" value="{{ Auth::guard('admin')->user()->mobile }}"
                      id="admin_mobile" name="admin_mobile" placeholder="Enter mobile Number"
                      required
                      minlength="10"
                      maxlength="10"
                      >
                    </div>
                    <!--Image -->
                    <div class="form-group position-relative mt-2">
                      <label class="custom-file-label" for="admin_image">Upload Admin Image</label>
                      <input type="file" class="form-control custom-file-input mb-2"
                      value="{{ Auth::guard('admin')->user()->image }}"
                      id="admin_image"
                      name="admin_image"
                      required>

                      @if(!empty(Auth::guard('admin')->user()->image))
                        <a href="{{ asset('admin/images/admin_photos/'.Auth::guard('admin')->user()->image) }}">View Image</a>
                        <input type="hidden" value="{{ Auth::guard('admin')->user()->image }}"
                        name="current_admin_image" />
                      @endif
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>

        </div>
    @elseif ($slug == 'bank')
         <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Vendor Bank Details</h4>
                  <p class="card-description">
                    Update Vendor Bank Details
                  </p>
                  @if(Session::has('error_message'))
                    <div class="mt-3 alert alert-danger alert-dismissible fade show" role="alert">
                        <p><strong>Error: </strong>{{ Session::get('error_message') }}</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                   @endif

                   @if(Session::has('success_message'))
                    <div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
                        <p class="mb-0"><strong>Success: </strong>{{ Session::get('success_message') }}</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                   @endif

                    @if ($errors->any())
                            <div class="mt-3 alert alert-danger alert-dismissible fade show" role="alert">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                    @endif
                  <form
                  class="forms-sample"
                  action="{{ url('admin/update-vendor-details') }}"
                  method="POST"
                  name="updateAdminDetailsForm"
                  id="updateAdminDetailsForm"
                  enctype="multipart/form-data"
                  >
                  @csrf
                    <div class="form-group">
                      <label>Admin Username/Email</label>
                      <input type="text" class="form-control" value="{{ Auth::guard('admin')->user()->email }}" readonly>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Admin Type</label>
                      <input type="email" class="form-control"  value="{{ Auth::guard('admin')->user()->type }}" readonly>
                    </div>
                    <div class="form-group">
                      <label for="admin_name">Name</label>
                      <input type="text" class="form-control" value="{{ Auth::guard('admin')->user()->name }}"
                      id="admin_name" name="admin_name" placeholder="Enter Name" required>
                    </div>
                    <div class="form-group">
                      <label for="admin_mobile">Mobile</label>
                      <input type="number" class="form-control" value="{{ Auth::guard('admin')->user()->mobile }}"
                      id="admin_mobile" name="admin_mobile" placeholder="Enter mobile Number"
                      required
                      minlength="10"
                      maxlength="10"
                      >
                    </div>
                    <!--Image -->
                    <div class="form-group position-relative mt-2">
                      <label class="custom-file-label" for="admin_image">Upload Admin Image</label>
                      <input type="file" class="form-control custom-file-input mb-2"
                      value="{{ Auth::guard('admin')->user()->image }}"
                      id="admin_image"
                      name="admin_image"
                      required>

                      @if(!empty(Auth::guard('admin')->user()->image))
                        <a href="{{ asset('admin/images/admin_photos/'.Auth::guard('admin')->user()->image) }}">View Image</a>
                        <input type="hidden" value="{{ Auth::guard('admin')->user()->image }}"
                        name="current_admin_image" />
                      @endif
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>

        </div>
    @endif
</div>

@endsection
