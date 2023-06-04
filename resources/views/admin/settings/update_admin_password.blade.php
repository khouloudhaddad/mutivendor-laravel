@extends('admin.layout.layout')

@section('content')

<div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 mx-auto grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Settings</h4>
                  <p class="card-description">
                    Update Admin Password
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
                        <p><strong>Success: </strong>{{ Session::get('success_message') }}</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                   @endif
                  <form
                  class="forms-sample"
                  action="{{ url('admin/update-admin-password') }}"
                  method="POST"
                  name="updateAdminPasswordForm"
                  id="updateAdminPasswordForm"
                  >
                  @csrf
                    <div class="form-group">
                      <label>Admin Username/Email</label>
                      <input type="text" class="form-control" value={{ $admin->email }} readonly>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Admin Type</label>
                      <input type="email" class="form-control"  value={{ $admin->type }} readonly>
                    </div>
                    <div class="form-group">
                      <label for="current_password">Current Password</label>
                      <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Enter Current Password" required>
                      <span id="check_password" class="d-block py-1"></span>
                    </div>
                    <div class="form-group">
                      <label for="new_password">New Password</label>
                      <input type="password" class="form-control" id="new_password" name="new_password" placeholder="New Password" required>
                    </div>
                    <div class="form-group">
                      <label for="confirm_password">Confirm Password</label>
                      <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm New Password" required>
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>

        </div>

</div>

@endsection
