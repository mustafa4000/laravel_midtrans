<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <link rel="stylesheet" href="{{ url('/assets/style.css') }}" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="SB-Mid-client-k7hILYNqAANwwZQl"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
  </head>
 
  <body>
    <form action="/payment" method="get">
      <h1>Data Diri</h1>
      <div class="formcontainer">
      <hr/>
      <div class="container">
        <label for="uname"><strong>Nama</strong></label>
        <input type="text" placeholder="Masukkan Nama" name="uname" required>
        <label for="psw"><strong>Email</strong></label>
        <input type="text" placeholder="Masukkan Email" name="email" required>
        <label for="psw"><strong>Nomor</strong></label>
        <input type="text" placeholder="Masukkan Nomor" name="number" required>
      </div>
      <button type="submit">Lanjut</button>
    </form>
    @if(session('alert-success'))
      <script>alert("{{session('alert-success')}}")</script>
    @elseif(session('alert-failed'))
      <script>alert("{{session('alert-failed')}}")</script>
    @endif
  </body>
</html>