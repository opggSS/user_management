@extends('users.app')
    <!-- Begin Page Content -->
    @section('styles')
    @endsection
  @section('content')

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
  <form method="post" action="{{route('users.update', $user->id)}}" >
        @method('PUT')
        {{ csrf_field() }}
  <div class="container" >
    <div class="row">
      <div class="col float-left" ><h1>Updating {{ $user->first_name }} {{$user->last_name}} </h1></div>
    </div>
      
    <ul>
      <li>email :                        
        <input class="form-control" type="email" name="email" value="{{ $user->email }}" placeholder="email" >
      </li>
      
      <li>first name :                        
        <input class="form-control" type="text" name="first_name" value="{{ $user->first_name }}" placeholder="first name" >
      </li>
      <li>last name :                        
        <input class="form-control" type="text" name="last_name" value="{{ $user->last_name }}" placeholder="last name" >
      </li>

      <li>address_type : 
        <input class="form-control" type="text" name="address_type" value="{{ $user->address_type }}" placeholder="address type" >
    
      </li>
      <li>street : 
        <input class="form-control" type="text" name="street" value="{{ $user->street }}" placeholder="street" >
      </li>
      <li>city : 
        <input class="form-control" type="text" name="city" value="{{ $user->city }}" placeholder="city" >
      </li>
      <li>province : 
        <input class="form-control" type="text" name="province" value="{{ $user->province }}" placeholder="province" >
      </li>
      <li>country : 
        <input class="form-control" type="text" name="country" value="{{ $user->country }}" placeholder="country" >
      </li>
      <li>postal code : 
        <input class="form-control" type="text" name="postal_code" value="{{ $user->postal_code }}" placeholder="postal code" >
      </li>
      <li>address default : 
        <input class="form-control" type="text" name="address_default" value="{{ $user->address_default }}" placeholder="address default" >
      </li>
      <li>contact type : 
        <input class="form-control" type="text" name="contact_type" value="{{ $user->contact_type }}" placeholder="contact type" >
      </li>
      <li>contact value : 
        <input class="form-control" type="text" name="contact_value" value="{{ $user->contact_value }}" placeholder="contact value" >
      </li>
      <li>contact value : 
        <input class="form-control" type="text" name="contact_value" value="{{ $user->contact_value }}" placeholder="contact value" >
      </li>
      <li>contact default : 
        <input class="form-control" type="text" name="contact_default" value="{{ $user->contact_default }}" placeholder="contact default" >
      </li>
      <li>disabled : 

        <select class="form-control" name="disabled" option="{{$user->disabled}}">
          <option 
            @if($user->disabled == 0) selected = 'selected' 
            @endif
            value='0'>
            false
          </option>
   
          <option  
            @if($user->disabled == 1) selected = 'selected' 
            @endif
            value='1'>
            true
          </option>
        </select>
      </li>
    </ul>
    <input type="submit" value="Save" class="btn btn-success btn-lg form-control mt-3"> 

  </div>
</form>
  <!-- End of Main Content -->
@endsection