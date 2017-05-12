@extends('layout/login')
@section('content')

<!-- Form Module-->

<div class="pen-title">
  <h1>Flat Login Form</h1><span>Pen <i class='fa fa-paint-brush'></i> + <i class='fa fa-code'></i> by <a href='http://andytran.me'>Andy Tran</a></span>
</div>
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <div class="tooltip">Sign Up</div>
  </div>
   {!! Form::open(['url' => 'books/home']) !!}
  <div class="form">
    <h2>Login to your account</h2>
      <input type="text" placeholder="Username" name="fname"/>
      <input type="password" placeholder="Password" name="lname"/>
      <button>Login</button>
  </div>
 
  <div class="cta"><a href="http://andytran.me">Forgot your password?</a></div>
</div>
 {!! Form::close() !!}
  @stop