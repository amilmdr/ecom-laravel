@extends('master')
@section('content')
<div class="conteainer addproduct">
    <div class=" row">
        <div class="col-sm-4 col-sm-offset-4">
<form  action='/addproduct' method='post'>
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Product Name </label>
    <input type="text" name="name" class="form-control" id="exampleInputname" placeholder="User Name">
  </div>
  <div class="form-group">
    <label for="exampleInputprice">Price</label>
    <input type="text" name="price" class="form-control" id="exampleprice" placeholder="Price">
  </div>
  <div class="form-group">
    <label for="exampleInputcategory">Category</label>
    <input type="text" name="category" class="form-control" id="exampleInputcategory" placeholder="Category">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="textarea" name="description" class="form-control" id="exampleInputdescription" placeholder="Description">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Photo</label>
    <input type="file" name="gallery" class="form-control" id="exampleInputphoto">
  </div>
  <button type="submit" class="btn btn-submit">Save</button>
</form>
</div>
</div>
</div>
    @endsection
