@extends('layout.layout')
@section('content')
<div class="page-content">
<div class="row">
        <div class="col-md-6 offset-md-3" style="margin-top: 80px; margin-left: 330px;">
            <h2>Register</h2>
            <form method="POST" action="{{url('/register')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
         
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="role">Role</label>
                        <select name="role" class="form-control" >
                            <option value disabled selected>User Type</option>
                            <option value="vendor">Vendor</option>
                            <option value="customer">Customer</option>
                        </select> 
                </div>
         
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" >
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
        
                <div class="form-group">
                    <label for="password-confirm">Confirm Password:</label>
                    <input type="password" class="form-control @error('password-confirm') is-invalid @enderror" id="password-confirm" name="password-confirm">
                    @error('password-confirm')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
         
                <div class="form-group">
                    <button style="cursor:pointer" type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
</div>
</div>
@endsection