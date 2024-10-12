<!-- resources/views/diamonds.blade.php -->

@extends('layouts.app')  <!-- Ensure you have a layout or remove this line if not using layouts -->

@section('title', 'Sbay Tinh')

@section('content')
    <h1>Testing if view loads</h1> <!-- This is your debug message -->
    
    <div class="row">
        <!-- Left Side Column (Image and Text) -->
        <div class="col-md-4 col-12">
            <img src="https://i.pinimg.com/564x/82/55/03/8255033248d018b6c5f3d460b2deec16.jpg" alt="" style="width: 200px; height: auto;">
            <p>Mobile Legends</p>
            <p>ទិញពេជ្រ Mobile Legends ដោយខ្លួនឯង!</p>
        </div>

        <!-- Right Side Column (Diamond Packages) -->
        <div class="col-md-8 col-12">
            <div class="row row-cols-1 row-cols-md-3 g-3">
                @foreach ($diamondPackages as $package)
                    <div class="col">
                        <div class="card" data-value="{{ $package['value'] }}" data-price="{{ $package['price'] }}">
                            <div class="price">${{ $package['price'] }}</div>
                            {{ $package['value'] }} Diamonds + {{ $package['bonus'] }} Bonus
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="mt-3">
        <h5>Total Diamonds: <span id="total-diamonds">0</span></h5>
        <h5>Total Pay: $<span id="total-pay">0.00</span></h5>
        
        <!-- Insert your ID Button (Always Visible) -->
        <a href="{{ route('form.show') }}" class="btn btn-primary mt-3" id="proceed-button">Insert your ID</a>
    </div>
@endsection
