@extends('layout.app')
@section('title','Contact App | Edit company')
@section('content')
<main class="py-5">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-title">
                <strong>Edit Company</strong>
              </div>           
              <div class="card-body">
                <form action="{{route('company.update',$company->id)}}" method="post">
                    @method('PUT')
                  @csrf
                @include('companies._formedit')
                </form>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection