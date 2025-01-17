
<div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label for="first_name" class="col-md-3 col-form-label">First Name</label>
                      <div class="col-md-9">
                        <input type="text" value='{{old("first_name",$contacts->first_name)}}' name="first_name" id="first_name" class="form-control is-invalid">
                        @error('first_name')
                       <div>{{$message}}</div>
                        @enderror
                        <!-- <div class="invalid-feedback">
                          Please choose a username.
                        </div> -->
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="last_name" class="col-md-3 col-form-label">Last Name</label>
                      <div class="col-md-9">
                        <input type="text" value='{{old("last_name",$contacts->last_name)}}' name="last_name" id="last_name" class="form-control">
                        @error('last_name')
                        <div>{{$message}}</div>
                        @enderror
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="email" class="col-md-3 col-form-label">Email</label>
                      <div class="col-md-9">
                        <input type="text" value='{{old("email",$contacts->email)}}' name="email" id="email" class="form-control">
                        @error('email')
                        <div>{{$message}}</div>
                        @enderror
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="phone" class="col-md-3 col-form-label">Phone</label>
                      <div class="col-md-9">
                        <input type="text" value='{{old("phone",$contacts->phone)}}' name="phone" id="phone" class="form-control">
                        @error('phone')
                        <div>{{$message}}</div>
                        @enderror
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="name" class="col-md-3 col-form-label">Address</label>
                      <div class="col-md-9">
                        <input name="address" value='{{old("address",$contacts->address)}}' id="address" rows="3" class="form-control"></input>
                        @error('address')
                        <div>{{$message}}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="company_id" class="col-md-3 col-form-label">Company</label>
                      <div class="col-md-9">
                        <select name="company_id" id="company_id" class="form-control">
                            @foreach($companies as $id=>$name)
                          <option {{$id===old('$company_id' , $contacts->company_id) ? 'selected' :''}} value="{{$id}}">{{$name}}</option>
                          @endforeach
                          
                        </select>
                        @error('company_id')
                        <div>{{$message}}</div>
                        @enderror
                      </div>
                    </div>
                    <hr>
                    <div class="form-group row mb-0">
                      <div class="col-md-9 offset-md-3">
                          <button type="submit" class="btn btn-primary">Update</button>
                          <a href="{{route('contacts.index')}}" class="btn btn-outline-secondary">Cancel</a>
                      </div>
                    </div>
                  </div>
                </div>
