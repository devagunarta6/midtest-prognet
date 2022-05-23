@extends('template.bootstrap')

<form action="/{{ $keluhan->id }}/editProcess" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div style="width: 50%; text-align: center;" class="mb3">
            <label class="form-label" for="content">Keluhan</label>
            <textarea class="form-control" id="content" name="content">{{ $keluhan->content }}</textarea>
        </div>
        <button style="margin-top: 10" class="btn btn-primary" type="submit">Submit</button>
    </div>
</form>