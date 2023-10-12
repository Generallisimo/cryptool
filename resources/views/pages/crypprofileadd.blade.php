@extends('layouts.app', ['pageSlug' => 'crypprofileadd'])

@section('content')
<div class="card">
  <div class="card-body">
    <form>
      <div class="form-group">
        <label for="exampleInputEmail1">Name Profile</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect1">Buyers</label>
        <select class="form-control " id="exampleFormControlSelect1">
            <option>Buyer 1 new</option>
            <option>Buyer 2</option>
            <option>Buyer 3</option>
        </select>
    </div>


      <div class="form-group">
        <label for="exampleFormControlTextarea1" class="form-label">Cookie</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      
      <div class="form-group">
        <label for="exampleInputEmail1">Useragent</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Useragent">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Proxy</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Proxy">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1"> Link For Change IP </label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter link IP">
      </div>

      <button type="submit" class="btn btn-primary">Create</button>
    </form>
  </div>
</div>
@endsection
@push('js')
@endpush