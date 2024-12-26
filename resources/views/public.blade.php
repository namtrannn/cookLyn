<section id="mu-che">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="mu-chef-area">

            <div class="mu-title">
              {{-- <span class="mu-subtitle">Các chuyên gia ẩm thực của chúng tôi</span> --}}
              <h2>CÔNG THỨC TỪ CỘNG ĐỒNG</h2>
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
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </li>  
                @endforeach
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="mu-chef-area">

            <div class="mu-title">
              <h3>TOP thành viên</h3>
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