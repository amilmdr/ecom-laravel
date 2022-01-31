@extends('master')
@section('content')
<div class=" custom-product">
<div class="col-sm-10">
<table class="table table-striped">

    <tbody>
      <tr>
        <td>Amount</td>
        <td>$ {{$total}}</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>$ 0</td>
       
      </tr>
      <tr>
        <td>Delivery</td>
        <td>$ 10</td>
        
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>$ {{$total+10}}</td>
        
      </tr>
    </tbody>
  </table>
<div>
<form action="/orderplace" method="POST">
  <div class="form-group">
    @csrf
    <textarea name="address" placeholder="Enter Your Address" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="pwd">Paymant Methods:</label><br><br>
    <input type="radio" VALUE="cash"  name="payment"><samp>Online Paymant</samp> <br><br>
    <input type="radio" VALUE="cash" name="payment"><samp>Emi Paymant</samp> <br><br>
    <input type="radio" VALUE="cash"  name="payment"><samp>Paymant on Delivery</samp> <br><br>
  </div>
  <button type="submit" class="btn btn-Priamry">Order Now</button>
</form>
</div>
</div>
</div>
    @endsection
