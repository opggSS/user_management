@extends('users.app')
    <!-- Begin Page Content -->
    @section('styles')
    @endsection
  @section('content')

  <div class="container">
    <div class="row">
      <div class="col float-left" ><h1>Users</h1></div>
    </div>
      
    <table class="table table-bordered" >
      <thead>
        <tr class="thead-dark">
          <th scope="col">first name</th>
          <th scope="col">last name</th>
          <th scope="col">Email</th>
          <th scope="col">actions</th>
        </tr>
      </thead>
      <tbody>
      
      @foreach ($users as $key => $user)
      <tr>
        <td>
            <span>{{ $user->first_name }}</span>
        </td>
        
        <td>
            <span>{{ $user->last_name }}</span>
        </td>
        <td>
            <span>{{ $user->email }}</span>
        </td>
        <td>
          <a href="{{ route('users.show', $user->id) }}" class="btn btn-success btn-sm">View</a> 
          <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>  
          <form method="post" id="{{$key}}_delete" action="{{route('users.destroy',$user->id)}}" >
            @method('delete')
            {{ csrf_field() }}
            <input type="submit" value="Delete" class="btn btn-danger btn-block btn-h1-spacing" action="{{route('users.destroy',$user->id)}}" form="{{$key}}_delete">
          </form>
        </td>
      </tr>
      @endforeach
      </tbody>
    </table>
    <div class="row">
      <div class="col float-left" ><h1>Create user</h1></div>
    </div>
      
    <table class="table table-bordered" >
      <thead>
        <tr class="thead-dark">
          <th scope="col">last name</th>
          <th scope="col">Email</th>
          <th scope="col">password</th>
          <th scope="col">actions</th>
        </tr>
      </thead>
      <tbody>
      <form method="post" action="{{route('users.store')}}">
            {{ csrf_field() }}
          <tr>
            <td>
                <input class="form-control" name="last_name" placeholder="required">
            </td>
        
            <td>
                <input class="form-control" name="email" placeholder="email" >
            </td>
            <td>
                <input type="password" name="password" placeholder="new password" class="form-control" ><br>
                <input type="password" placeholder="confirm password" name="password_confirm" class="form-control" >
            </td>
            <td>
                <input type="submit"  value="Add" class="btn btn-primary btn-block btn-h1-spacing"> 
            </td>
          </tr>
        </form>
      </tbody>


  </div>
  <!-- End of Main Content -->
@endsection