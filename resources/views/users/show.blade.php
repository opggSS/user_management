@extends('users.app')
    <!-- Begin Page Content -->
    @section('styles')
    @endsection
  @section('content')

  <div class="container">
    <div class="row">
      <div class="col float-left" ><h1>hello {{ $user->first_name }} {{$user->last_name}} </h1></div>
    </div>
      
    <ul>
      <li>email : {{$user->email}} </li>
      <li>address_type : {{$user->address_type}}</li>
      <li>street : {{$user->street}}</li> 
      <li>city : {{$user->city}}</li>
      <li>province : {{$user->province}}</li>
      <li>country : {{$user->country}}</li>
      <li>postal_code : {{$user->postal_code}}</li>
      <li>address_default : {{$user->address_default}}</li>
      <li>contact_type : {{$user->contact_type}}</li>
      <li>contact_value : {{$user->contact_value}}</li>
      <li>contact_default : {{$user->contact_default}}</li>
      <li>disabled : {{$user->disabled ? 'true' : 'false'}} </li>
    </ul>
      
  </div>
  <!-- End of Main Content -->
@endsection