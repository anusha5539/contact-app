@extends('layout.app')

@section('title','Contact App | All companies')
@section('content')
 <!-- content -->
 <main class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header card-title">
                  <div class="d-flex align-items-center">
                    <h2 class="mb-0">All Companies</h2>
                    <div class="ml-auto">
                      <a href="{{route('company.create')}}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New</a>
                    </div>
                  </div>
                </div>
              <div class="card-body">
                @include('companies._filter')
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Address</th>
                      <th scope="col">Website</th>
                      <th scope="col">Email</th>
                      <th scope="col">Contacts</th>
                      <th scope='col'>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      @include('layout._message')
                      @if($companies->count())
                    @foreach($companies as $index=> $company)
                    <th scope="row">{{$index+$companies->firstItem()}}</th>
                      <td>{{$company->name}}</td>
                      <td>{{$company->address}}</td>
                      <td>{{$company->website}}</td>
                      <td>{{$company->email}}</td>
                      <td>{{$company->contacts->count()}}</td>
              
                      <td width="150">
                        <a href="{{route('company.show',$company->id)}}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                        <a href="{{route('company.edit',$company->id)}}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                        <a href="{{route('company.destroy',$company->id)}}" class="btn btn-sm btn-circle btn-outline-danger" title="Delete" onclick="confirm('Are you sure?')"><i class="fa fa-times"></i></a>
                      </td>
                    </tr>
                    @endforeach
                    @endif
                  </tbody>
                </table> 

                {{$companies->links()}}
            </div>
          
        </div>
    </main>
@endsection

