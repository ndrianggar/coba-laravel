

{{-- <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
            <!-- untuk css disini -->
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    {{-- <title>Halaman Home | About</title> --}}
{{-- </head>
    <body> --}}
        @extends('layouts.main')
        
        @section('container')
        <h1>Halaman About</h1>
        <!-- < ?= $variable?> -->
          <h3>{{ $nama }}</h3>
        <p><?php echo $email?></p>
        <img src="<?php echo $image?>" alt="image 1" width="200" class="img-thumbnail rounded-circle">
    @endsection
 {{-- <script src="js/script.js"></script>   
   <!-- untuk js disini -->
</body>
</html> --}}

