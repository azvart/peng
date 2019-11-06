@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">









                 <form class="needs-validation" method='POST' action="{{asset('home')}}">
                    {!!csrf_field()!!}

    <div class="form-group">
      <label for="name"> Name</label>
      <input type="text" class="form-control" name='name' id="name" placeholder="Name"  >
      @error('name')
                                    <span class="alert alert-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    </div>
     <div class="form-group">
      <label for="price">Price</label>
      <input type="text" class="form-control" id="price" placeholder="Price" name='price' >
      @error('price')
                                    <span class="alert alert-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    </div>


     <div class="form-group">
      <label for="body">Description</label>
      <input type="text" class="form-control" id="body" placeholder="Description" name='body' >
      @error('body')
                                    <span class="alert alert-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    </div>

       <div class="form-group">
      <label for="small_body">Short Description</label>
      <input type="text" class="form-control" id="small_body" placeholder="Short Description" name='small_body' >
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

<div class='form-group'>
     <div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="showhide" name='showhide'>
  <label class="custom-control-label" for="showhide">Check this custom checkbox</label>
</div>
</div>
  
  <div class="form-group">
    <select class="custom-select"name='category' id='category' >
      <option value="">Open this select menu</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
    <div class="invalid-feedback">Example invalid custom select feedback</div>
  </div>

   <div class="custom-file">
    <input type="file" class="custom-file-input" id="picture" name='picture'>
    <label class="custom-file-label" for="picture">Choose file...</label>
    <div class="invalid-feedback">Example invalid custom file feedback</div>
  </div>
  <br>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>





                </div>
            </div>
        </div>
    </div>
</div>
@endsection
