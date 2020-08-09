@extends('template')

@section('title', 'Cart')
@section('css')

#tentang-bg-img{
background: url({{url('img/g19.jpg')}}) no-repeat center;
background-size: cover;
height: 350px;
border-radius: 10px;
}


@endsection
@section('content')
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
<section class="generic-banner relative" style="background: url('{{url('img/banner-tentang.jpg')}}') no-repeat center center fixed;-webkit-background-size: cover;
-moz-background-size: cover;
background-size: cover;
-o-background-size: cover;
height: 200px;">	
<!-- <div class="container">
  <div class="row height align-items-center justify-content-center">
    <div class="col-lg-10">
      <div class="generic-banner-content">
                      <h2 class="text-white">Navi Coffee bandung</h2>
                      <p class="text-white">Weekend nya udah beres, gak kerasa udah hari senin lagi nih. Tetap semangat ya kalian, seperti biasa jangan lupa ngopi!</p>
                    </div>              
                  </div>
                </div>
              </div> -->
            </section>		
            <!-- End banner Area -->
            <div class="container pt-5">
             <h4><center>Anda Harus Melakukan Pembayaran Sebelum {{ date('D, M-Y') }} 23.59 WIB</center></h4><br>
             <h2 id="demo" class="text-center" style=""></h2>
             <center>
              <div class="form-group">
                <label for="exampleInputEmail1">Nomor Virtual Account :</label>
                <input class="form-control text-center font-weight-bold" type="text" placeholder=""  readonly value="{{$findpembayaran['kode_bayar']}}">
                <small id="emailHelp" class="form-text text-muted">*pastikan anda memasukan nomor VA dengan benar</small>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Nominal :</label>

                <input class="form-control text-center font-weight-bold" type="text" placeholder=""  readonly value="@rupiah($findpembayaran['total_harga'])">
                <small id="emailHelp" class="form-text text-muted">*nominal akan tertera otomatis di sistem Gopay/OVO</small>

              </div>
              <form action="{{url('pembayaran')}}/{{$findpembayaran->id}}" method="post">

                <div class="modal-footer d-flex justify-content-center">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary"><i class="fa fa-check btn-icon-wrapper"> </i> Konfirmasi Pembayaran</button>

                  <input type="hidden" value="{{ csrf_token() }}" name="_token">
                  <input type="hidden" value="put" name="_method">
                </div>

                <small id="emailHelp" class="form-text text-muted">*tombol ini hanya dummy(sementara) untuk men trigger konfirmasi pembayaran, sistem yang asli akan disambungkan dengan payment-gateway dari midtrans yang akan otomatis mengubah status pembayaran menjadi lunas</small>

              </form>
            </center>
            <br><br><br>



            <script>
// Set the date we're counting down to
var countDownDate = new Date("{{ date('d-m-Y') }} 23:59:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML =  hours + "Jam "
  + minutes + "Menit " + seconds + "Detik ";

  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>


</div>
@endsection