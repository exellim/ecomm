@extends('layouts\master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">
            <thead>
                <tr>
                  <th>Receipt</th>
                </tr>
              </thead>
            <tbody>
              <tr>
                <td>Amount</td>
                <td>Rp {{$total}}</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>Rp 0</td>
              </tr>
              <tr>
                <td>Ongkir</td>
                <td>Rp 0</td>
              </tr>
            </tbody>
            <thead>
                <tr>
                  <th>Total</th>
                  <th>Rp {{$total+10000}}</th>
                </tr>
              </thead>
          </table>
          <div>
            <form action="/placeorder" method="POST">
                @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="Alamat" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">Payment Method:</label>
                  <br>
                  <input type="radio" value="cash" name="payment"><span>Online Payment</span>
                  <br><br>
                  <input type="radio" value="cash" name="payment"><span>COD</span>
                </div>
                <button type="submit" class="btn btn-default">Pesan Sekarang</button>
              </form>
          </div>
    </div>
</div>
@endsection
