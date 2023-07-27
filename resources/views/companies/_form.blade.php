
<div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label for="first_name" class="col-md-3 col-form-label">Name</label>
                      <div class="col-md-9">
                        <input type="text" value='{{old("name")}}' name="name" id="name" class="form-control is-invalid">
                        @error('name')
                       <div>{{$message}}</div>
                        @enderror
                        <!-- <div class="invalid-feedback">
                          Please choose a username.
                        </div> -->
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="address" class="col-md-3 col-form-label">Address</label>
                      <div class="col-md-9">
                        <input type="text" value='{{old("address")}}' name="address" id="address" class="form-control">
                        @error('address')
                        <div>{{$message}}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="website" class="col-md-3 col-form-label">Website</label>
                      <div class="col-md-9">
                        <input type="text" value='{{old("website")}}' name="website" id="website" class="form-control">
                        @error('website')
                        <div>{{$message}}</div>
                        @enderror
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="email" class="col-md-3 col-form-label">Email</label>
                      <div class="col-md-9">
                        <input type="text" value='{{old("email")}}' name="email" id="email" class="form-control">
                        @error('email')
                        <div>{{$message}}</div>
                        @enderror
                      </div>
                    </div>
                         
                    <div class="form-group row mb-0">
                      <div class="col-md-9 offset-md-3">
                          <button type="submit" class="btn btn-primary">Save</button>
                          <a href="{{route('company.index')}}" class="btn btn-outline-secondary">Cancel</a>
                      </div>
                    </div>
                  </div>
                </div>
