@extends('layout')
@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome to Our Clothing Brand</h1>
        <p>Discover the latest fashion trends and shop our collection of stylish clothing.</p>
        <a href="/list" class="btn btn-primary btn-lg">Shop Now</a>
    </div>

    <div class="container">
        <h2 class="text-center">Featured Products</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <a href="#"><img class="card-img-top" src="{{ asset('img/product1.PNG') }}" alt="Product 1"></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <a href="#"><img class="card-img-top" src="{{ asset('img/product2.PNG') }}" alt="Product 2"></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <a href="#"><img class="card-img-top" src="{{ asset('img/product3.PNG') }}" alt="Product 3"></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="newsletter-section text-center">
                    <h2>Subscribe to Our Newsletter</h2>
                    <p>Stay updated with our new arrivals, promotions, and exclusive offers.</p>
                    <form action="/subscribe" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Enter your email address" required>
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
