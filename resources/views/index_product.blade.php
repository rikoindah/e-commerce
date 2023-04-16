@extends('layouts.app')

@section('content')
<style>
.wrapper {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: yellow;
}
h1 {
    font-size: 24px;
    color: green;
    font
}
.text-container {
  animation-name: slide-left;
  animation-duration: 30s;
  animation-timing-function: linear;
  animation-iteration-count: infinite;
  white-space: nowrap;
}

@keyframes slide-left {
  0% {
    transform: translateX(100%);
  }
  100% {
    transform: translateX(-100%);
  }
}
</style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Products') }}</div>

                    <div class="card-group m-auto">
                        @foreach ($products as $product)
                            <div class="card m-3" style="width: 18rem;">
                                <img class="card-img-top" src="{{ url('storage/' . $product->image) }}"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">{{ $product->name }}</p>
                                    <form action="{{ route('show_product', $product) }}" method="get">
                                        <button type="submit" class="btn btn-primary">Show detail</button>
                                    </form>
                                    @if (Auth::check() && Auth::user()->is_admin)
                                        <form action="{{ route('delete_product', $product) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger mt-2">Delete product</button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <section>
    <div class="wrapper">
        <div class="text-container">
            <h1>Selamat Datang Di website E-Commerce. SIlahkan Checkout yah</h1>
        </div>
    </div>
    </section>
    
@endsection