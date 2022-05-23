@extends('template.bootstrap')

<form action="/loginProcess" method="post">
    @csrf
    <div class="container">
        <div style="width: 50%; text-align: center;" class="mb3">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div style="width: 50%; text-align: center;" class="mb3">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button style="margin-top: 10" type="submit" class="btn btn-primary">Login</button>
        <p>Dont Have Account?<a href="/">Register</a></p>
    </div>


</form>