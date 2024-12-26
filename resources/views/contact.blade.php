<section id="mu-contact">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-contact-area">

          <div class="mu-title">
            {{-- <span class="mu-subtitle">Liên hệ với chúng tôi</span> --}}
            <h2>Liên hệ với chúng tôi</h2>
          </div>

          <div class="mu-contact-content">
            <div class="row">

              <div class="col-md-6">
                <div class="mu-contact-left">
                  <!-- Email message div -->
                  <div id="form-messages"></div>
                  <!-- Start contact form -->
                  <form id="ajax-contact" method="post" action="" class="mu-contact-form">
                    <div class="form-group">
                      <label for="name">Tên của bạn</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Họ tên" required>
                    </div>
                    <div class="form-group">
                      <label for="email">Địa chỉ email</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>                      
                    <div class="form-group">
                      <label for="subject">Chủ đề</label>
                      <input type="text" class="form-control" id="subject" name="topic" placeholder="Chủ đề" required>
                    </div>
                    <div class="form-group">
                      <label for="message">Thông điệp</label>                        
                      <textarea class="form-control" id="message" name="message"  cols="30" rows="10" placeholder="Nội dung thông điệp" required></textarea>
                    </div>                      
                    <button type="submit" class="mu-send-btn">Gửi thư</button>
                  </form>
                </div>
              </div>

              <div class="col-md-6">
                <div class="mu-contact-right">
                  <div class="mu-contact-widget">
                    <h3>Địa chỉ</h3>
                    <p>Nam Từ Liêm - Hà Nội</p>
                    <address>
                      <p><i class="fa fa-phone"></i> +84 38278 8384</p>
                      <p><i class="fa fa-envelope-o"></i>Liên hệ: cookingdiary.ns@gmail.com</p>
                      <p><i class="fa fa-map-marker"></i>Minh Khai - Từ Liêm - Hà Nội</p>
                    </address>
                  </div>
                  {{-- <div class="mu-contact-widget">
                    <h3>  Giờ mở cửa</h3>                      
                    <address>
                      <p><span>Thứ 2 - Thứ 6</span> 9.00h đến 12.00h</p>
                      <p><span>Thứ 7</span> 9.00h đến 10.00h</p>
                      <p><span>Chủ nhật</span> 10.00h đến 12.00h</p>
                    </address>
                  </div> --}}
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>