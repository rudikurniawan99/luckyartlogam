@extends('layouts.app')

@section('content')

  <!-- Detail Product -->
  <section class="detail-product-section my-5">
    <div class="container">
      <div class="card">
        <div class="row">

          <!-- Product Photos -->
          <div class="col-12 col-md-5 col-lg-4">
            <div id="carouselExampleControls" class="carousel slide mx-auto mx-md-0 rounded-lg" data-interval="false" data-ride="carousel">
              <div class="carousel-inner">
                @foreach ($photos as $p)
                  @if($loop->index == 0)
                    <div class="carousel-item active">
                       <img src="{{Storage::url($product->photo)}}" class="d-block w-100" alt="{{$product->description}}">
                    </div>
                  @else
                    <div class="carousel-item">
                      <img src="{{Storage::url($p['photo'])}}" class="d-block w-100" alt="{{$product->description}}">
                    </div>
                  @endif
                  
                @endforeach
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>

          <!-- Detail Product -->
          <div class="detail-product col-12 col-md-7 col-lg-8">
            <div class="card h-100 border-0">
              <div class="card-body">
                <h2 class="card-title text-capitalize mb-0">{{ $product->name }}</h2>
                <h5 class="text-muted text-lowercase">{{ $product->category }}</h5>
                <div class="card-text">{{ $product->description }}</div>
              </div>
              <div class="card-footer bg-white border-0">
                <a class="btn btn-success btn-block font-weight-bold" href="https://wa.me/6281338391846">
                  <i class="fab fa-whatsapp fa-lg"></i>
                  Pesan Segera
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

@endsection
