@extends('template.bootstrap')

<form action="/{{ $keluhan->id }}/admin/editProcess" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div style="width: 50%; text-align: center;" class="mb3">
            <label class="form-label" for="content">Keluhan</label>
            <textarea class="form-control" id="content" name="content">{{ $keluhan->content }}</textarea>
        </div>
        <select style="width: 50%; margin-top: 10" class="form-select" aria-label="Disabled select example" id="status" name="status">
            <option>Belum Terkirim</option>
            <option>Terkirim</option>
        </select>
        <button style="margin-top: 10" class="btn btn-warning" type="submit">Send</button>
    </div>
</form>