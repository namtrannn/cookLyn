<section id="mu-chef">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-chef-area">

            <div class="mu-title">
              {{-- <span class="mu-subtitle">Các chuyên gia ẩm thực của chúng tôi</span> --}}
              <h2>Các chuyên gia ẩm thực của chúng tôi</h2>
            </div>

            <div class="mu-chef-content">
              <ul class="mu-chef-nav">
                @foreach($master as $mt)
                <li>
                  <div class="mu-single-chef">
                    <figure class="mu-single-chef-img">
                      <img src="upload/avatar/{{ $mt->avatar }}" width="265px" height="285px" alt="chef img">
                    </figure>
                    <div class="mu-single-chef-info">
                      <h4>{{ $mt->name }}</h4>
                      <span>Đến từ: {{ $mt->address }}</span>
                    </div>
                    <div class="mu-single-chef-social">
                      <a ><i class="fa fa-facebook"></i></a>
                      <a ><i class="fa fa-twitter"></i></a>
                      <a ><i class="fa fa-google-plus"></i></a>
                      <a ><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>  
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>