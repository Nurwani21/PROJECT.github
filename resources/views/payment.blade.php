@extends('layouts.app')

@section('content')

<style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            text-align: center;
        }

        .payment-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #ff8c00;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #ff8c00;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #e07b00;
        }
    </style>
</head>
<body>

    <div class="section-overlay"></div>

    <div class="payment-container">
        <div class="row">

            <div class="col-lg-6 col-10 mx-auto">
                <form class="custom-form ticket-form mb-5 mb-lg-0" onsubmit="return processPayment()">
                    <h2 class="text-center mb-4">Payment Method</h2>

                    <div class="ticket-form-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="card-number">Card Number</label>
                                <input type="text" id="card-number" name="card-number" placeholder="Enter card number" required>
                            </div>
                                 
                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="card-holder">Card Holder Name</label>
                                <input type="text" id="card-holder" name="card-holder" placeholder="Enter card holder's name" required>
                            </div>


                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="expiration-date">Expiration Date</label>
                                <input type="text" id="expiration-date" name="expiration-date" placeholder="MM/YYYY" required>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <label for="cvv">CVV</label>
                                <input type="text" id="cvv" name="cvv" placeholder="Enter CVV" required>
                            </div>
                    </div>
                        
                        <div class="col-lg-4 col-md-10 col-8 mx-auto">
                            <button type="submit" class="form-control">Process Payment</button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</section>

<script>
    function processPayment() {
        // Simulate processing payment (replace with actual payment gateway integration)
        alert('Payment processed successfully!');
        return false; // Prevent form submission for this example
    }
</script>

<script src="{{ asset('import/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('import/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('import/assets/js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('import/assets/js/seat.js') }}"></script>
        <script src="{{ asset('import/assets/js/custom.js') }}"></script>

@endsection
