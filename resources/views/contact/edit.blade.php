@extends('layout.app')
@section('title','Contact App | Edit contact')
@section('content')
<main class="py-5">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-title">
                <strong>Edit Contact</strong>
              </div>           
              <div class="card-body">
                <form action="{{route('contacts.update',$contacts->id)}}" method="post">
                    @method('PUT')
                  @csrf
                @include('contact._formedit')
                </form>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection