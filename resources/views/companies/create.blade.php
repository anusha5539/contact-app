@extends('layout.app')
@section('title','Contact App | Add new companies')
@section('content')
<main class="py-5">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-title">
                <strong>Add New Company</strong>
              </div>           
              <div class="card-body">
                <form action="{{route('company.store')}}" method="post">
                  @csrf
                @include('companies._form')
                </form>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection