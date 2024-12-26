@extends('master')
@section('content')
  <section id="mu-gallery" style="margin-top: 100px">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-gallery-area">

          <div class="mu-title">
            {{-- <span class="mu-subtitle">Bộ sưu tập của chúng tôi</span> --}}
            <h2>Bộ sưu tập các món ăn</h2>
          </div>

          <div class="mu-gallery-content">
          
            <!-- Start gallery image -->
            <div class="mu-gallery-body">
              <!-- start single gallery image -->
              @foreach($dish as $ds)
              <div class="mu-single-gallery col-md-4">
                  <div class="mu-single-gallery-item">
                      <figure class="mu-single-gallery-img">
                        <a class="mu-imglink" href="upload/dish/{{ $ds->image }}">
                        <img style="border-radius: 3%" alt="img" src="upload/dish/{{ $ds->image }}">
                         <div class="mu-single-gallery-info">
                            <img class="mu-view-btn" src="sources/assets/img/plus.png" alt="plus icon img">
                        </div> 
                        <span><strong>{{ $ds->name }}</strong></span>
                      </a>
                      </figure>            
                  </div>
              </div>
              <!-- End single gallery image -->
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- End slider  -->
  <!-- Start Map section -->
  @include('map')
  <!-- End Map section -->

@endsection