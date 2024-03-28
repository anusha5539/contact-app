@extends('layout.app')

@section('title','Contact App | All contacts')
@section('content')
 <!-- content -->
 <main class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header card-title">
                  <div class="d-flex align-items-center">
                    <h2 class="mb-0">All Contacts</h2>
                    <div class="ml-auto">
                      <a href="{{route('contacts.create')}}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New</a>
                    </div>
                  </div>
                </div>
              <div class="card-body">
                @include('contact._filter')
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Last Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">phone</th>
                      <th scope="col">Address</th>
                      <th scope="col">Company name</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    @include('layout._message')
                    @if($contact->count())
                    @foreach($contact as $index=> $contacts)
                    <th scope="row">{{$index+$contact->firstItem()}}</th>
                      <td>{{$contacts->first_name}}</td>
                      <td>{{$contacts->last_name}}</td>
                      <td>{{$contacts->email}}</td>
                      <td>{{$contacts->phone}}</td>
                      <td>{{$contacts->address}}</td>
                      <td>{{$contacts->company->name}}</td>
                      <td width="150">
                        <a href="{{route('contacts.show',$contacts->id)}}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                        <a href="{{route('contacts.edit',$contacts->id)}}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                        <a href="{{route('contacts.destroy',$contacts->id)}}" class="btn-delete btn btn-sm btn-circle btn-outline-danger" title="Delete" onclick='confirm("Do you want to delete??")'><i class="fa fa-times"></i></a>
                      </td>
                    </tr>
                    @endforeach
                    <form id="form-delete" style="display:none" method="post">
                        @csrf
                        @method('Delete')
                      </form>
                    @endif
                      
                    
                  </tbody>
                </table> 

                {{$contact->appends(request()->only('company_id'))->links()}}
            </div>
          
        </div>
    </main>
@endsection

