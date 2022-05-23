@extends('template.bootstrap')

<form action="/registerProccess" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div style="width: 50%; text-align: center;" class="mb3">
            <label class="form-label" for="name">Username</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div style="width: 50%; text-align: center;" class="mb3">
            <label class="form-label" for="email">Email Address</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div style="width: 50%; text-align: center;" class="mb3">
            <label class="form-label" for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button style="margin-top: 10" class="btn btn-primary" type="submit">Submit</button>
        <p>Already Have Account?<a href="/login">Login</a></p>
    </div>
</form>

