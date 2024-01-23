@extends('layouts.app')

@section('content')

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">  

    <link href="{{ asset('import/assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('import/assets/css/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{ asset('import/assets/css/templatemo-festava-live.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset ('import/assets/css/seat.css') }}" >


    <title>Movie Seat Booking</title>

    <style>
        a
    {
        color: white;
    }

    button:hover
    {
        color: rgb(61, 40, 40);
    }

    a:hover
    {
        color: white;
    }

    
    </style>

</head>

<body>
    <div class="movie-container">
      <label> Select a concert:</label>
      <select id="movie">
        <option value="220">HyperAct 15 YEARS JOURNEY</option>
        <option value="320">Ed Sheeran</option>
        <option value="250">Mayapada Ungu</option>
        <option value="260">The Rose</option>
      </select>
    </div>

    <ul class="showcase">
      <li>
        <div class="seat"></div>
        <small>Available</small>
      </li>
      <li>
        <div class="seat selected"></div>
        <small>Selected</small>
      </li>
      <li>
        <div class="seat sold"></div>
        <small>Sold</small>
      </li>
    </ul>
   

    <div class="container">
      
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>

      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat sold"></div>
        <div class="seat sold"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat sold"></div>
        <div class="seat sold"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat sold"></div>
        <div class="seat sold"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat sold"></div>
        <div class="seat sold"></div>
        <div class="seat sold"></div>
        <div class="seat"></div>
      </div>
    </div>

    <p class="text">
      You have selected <span id="count">0</span> seat for a price of RM<span
        id="total"
        >0</span
      >
    </p>

    
    <a href="{{ url('/payment') }}" class="btn custom-btn d-lg-block d-none">Checkout</a>
    

  
<!--ALL OF THE JS SCRIPT-->
<script src="{{ asset('import/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('import/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('import/assets/js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('import/assets/js/seat.js') }}"></script>
        <script src="{{ asset('import/assets/js/custom.js') }}"></script>



</body>
@endsection