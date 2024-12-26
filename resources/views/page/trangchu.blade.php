@extends('master')
@section('content')

<!-- Start slider  -->
  <section id="mu-slider">
    <div class="container">
    <div class="mu-slider-are"> 

      <!-- Top slider -->
      <div class="mu-top-slider"   style="margin-top: 50px">
        <!-- Top slider single slide -->
        @foreach($slide as $sl)
        <div class="mu-top-slider-single">
          <img style="border-radius: 50px" src="upload/slide/{{ $sl->image }}" alt="img" width="2200px" height="400px">
          <!-- Top slider content -->
          <!-- <div class="mu-top-slider-content">
            <div class="title">               
              <h1 class="mt2 mb1 center" style="color: #e58a2f">Ăn gì hôm nay? Nấu ngay món ngon</h1>
            </div>
              <form method="get" action="{{ route('search') }}">
                <div class="search-container">
                  <span>
                    <i class="fas fa-search"></i>
                  </span>
                  <input type="text" name="key" value="" class="form-control" placeholder="Ví dụ: kim chi, cupcake, soup, sinh tố..">
                </div>
              </form>
            <p></p>           
            {{-- <a href="#mu-reservation" class="mu-readmore-btn mu-reservation-btn">BOOK A TABLE</a> --}}
          </div> -->
          <!-- / Top slider content -->
        </div>
        @endforeach
      </div>
    </div>
    </div>
  </section>
  <!-- End slider  -->

  <!-- Start About us -->
  <!-- @include('about') -->
  <!-- End About us -->
   <!--product area start-->
    <div class="product_area deals_product mb-50">
      <section id="mu-gallery">
        <div class="top-content container">
              <!--Start search-->
              <div class="h1-filter">Bộ Lọc</div>
              <div class="col-md-5 home-search">
                  <form method="get" action="{{ route('search') }}">
                      <div class="header-search">
                          <input class="namerecipe" placeholder="Tìm kiếm công thức" type="text" name="key">
                          <button type="submit" class="btn-header--search">
                              <i class="fas fa-search"></i>
                          </button>
                      </div>
                  </form>
              </div>
              <div class="col-md-5 login-box" >
                  <div class="row col-md-10">
                      <div class=" postRecipe col-md-6 col-xs-8" onclick="myFunction()">
                          <a href="{{route('post')}}" >
                              <div style="margin-top: 5px;">
                                  <img width="30px"; height="30px" src="upload/logo/post.png" alt=""> Đăng công thức
                              </div>
                          </a>
                      </div>
                  </div>
              </div>
              <!--End Search-->
          </div>
        <div class="container home-recipes">
<!--Start filter-->
        <div class="col-md-3 filter">
            <form method="get" action="{{ route('filter') }}">
                <div class="form-group">
                    <label for="time">Mục đích</label>
                    <select class="form-control" id="category" name="category">
                        <option value="">Tất cả</option>
                        @foreach($category as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="level">Độ khó</label>
                    <select class="form-control" id="level" name="level">
                        <option value="">Tất cả</option>
                        <option value="1">Dễ</option>
                        <option value="2">Trung bình</option>
                        <option value="3">Khó</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="time">Thời gian</label>
                    <select class="form-control" id="time" name="time">
                        <option value="">Tất cả</option>
                        <option value="1">Dưới 30 phút</option>
                        <option value="2">Từ 30 - 60 phút</option>
                        <option value="3">Trên 60 phút</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Lọc</button>
            </form>
        </div>
<!--End filter-->
         <div class="recipes">
            <div class="row row-recipes">
                {{-- <div class="product_carousel product_column4 owl-carousel"> --}}
                  @foreach($recipes as $re)
                  <div class="col-lg-4 mb-4" >
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">

                                    <a class="primary_img" href="{{route('recipes', $re->id)}}"><img style="border-radius: 10px; height: 164.06px; width:262.5px" src="upload/dish/{{ $re->dish->image }}"  alt=""></a>
                                    <div class="time-level">
                                        <span>Thời gian : {{ $re->time }} m </span>
                                        <span class="label_sale">
                                            Mức độ :
                                          @if($re->level == 1) {{ "Dễ" }} <i style="color: green" class="fas fa-bolt"></i>
                                          @elseif($re->level == 2) {{ "Trung bình" }} <i style="color: #e58a2f" class="fas fa-bolt"></i>
                                          @else  {{ "Khó" }} <i style="color: red" class="fas fa-bolt"></i></span>
                                          @endif
{{--                                        <span class="label_sale"><strong> <i style="color:blue" class="fas fa-user-friends"></i>  </strong>{{ $re->eater }} người</span>--}}
                                    </div>

                                    <div class="quick_button">
                                            <span>Lượt xem : {{$re->number_view}} <i class="fas fa-eye"></i></span>
                                            <span class="label_like"><span class="nlike">{{$re->number_like}}</span><a class="like" idRecipe = "{{$re->id}}"> <i class="far fa-thumbs-up"></i> </a>
                                                <input class="check_like" type="hidden" value="false">
                                            </span>
                                        </div>
                                </div>
                                <div class="product_name" style="height: 40px">
                                    <h4><a href="{{ route('recipes', $re->id) }}"><strong>{{ $re->name }}</strong></a></h4>
                                </div>
                                <div class="price_box">
                                    <span><strong>Công thức bởi: </strong>{{$re->user->name}}</span>
                                </div>
                            </figure>
                        </article>
                  </div>
                  @endforeach
                {{-- </div> --}}
            </div>
            <div class="row">{{ $recipes->links() }}</div>
         </div>
        </div>
      </section>
    </div>
    <!--product area end-->
  <!-- Start Counter Section -->
  @include('couter')
  <!-- End Counter Section --> 
  {{-- @include('public') --}}
  <!-- Start Restaurant Menu -->
  @include('menu')
  <!-- End Restaurant Menu -->

<hr>
  <!-- Start Gallery -->
  @include('gallery')
  <!-- End Gallery -->
  
  <!-- Start Client Testimonial section -->
  @include('client')
  <!-- End Client Testimonial section -->
  
  <!-- Start Chef Section -->
  @include('chefs')
  <!-- End Chef Section -->

@endsection

@section('script')

  <script type="text/javascript" src="sources/assets/js/simple-animated-counter.js"></script>
  <script type="text/javascript">
    function formatText(){
       var result;
       result = this.substr(0,10);

       return result;

    }
      // var no = document.getElementById('NOTE').value;
    
      // document.getElementById('NOTE').innerHTML= no.substrc(0,10);
    
    $('.like').click(function(){
      var focus1 = $(this).closest('.label_like');
      var getInput = $(focus1.find('.check_like')).val();
      {{-- console.log($(this)) --}}
      if(getInput=='false'){
        //$('.check_like').val(true);     
        var focus2 = $(focus1.find('.nlike')).text();
        var focus3 = $(focus1.find('.check_like'));
        focus3.val(true)
        typeof focus2
        focus2 = Number(focus2) + 1
        $(focus1.find('.nlike')).text(focus2);
        var focus4 = $(this).find('i')
        focus4.css({"color" : "red"})
        //alert(focus2)
      }   
      if(getInput=='true'){  
        var focus2 = $(focus1.find('.nlike')).text();
        var focus3 = $(focus1.find('.check_like'));
        focus3.val(false)
        typeof focus2
        focus2 = Number(focus2) - 1
        $(focus1.find('.nlike')).text(focus2);
        var focus4 = $(this).find('i')
        focus4.css({"color" : ""})
        //alert(focus2)
      }   
      //alert($(this).attr('idRecipe'))
      console.log($(focus1.find('.nlike')).text())
      console.log($(this).attr('idRecipe'))
      $.post('recipesLike/'+$(this).attr('idRecipe'),{number_like : $(focus1.find('.nlike')).text(),"_token": "{{ csrf_token() }}"},function(data){
          console.log(data);
      })
    })
  </script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
      document.addEventListener('DOMContentLoaded', function() {
          const form = document.querySelector('.home-search form');
          const input = form.querySelector('input[name="key"]');
          const button = form.querySelector('button[type="submit"]');

          form.addEventListener('submit', function(event) {
              event.preventDefault();
              if (input.value.trim() === '') {
                  Swal.fire({
                      icon: 'warning',
                      title: 'Lỗi',
                      text: 'Bạn chưa nhập từ khóa tìm kiếm!',
                      confirmButtonColor: '#e58a2f',
                      confirmButtonText: 'OK'
                  });
              } else {
                  form.submit();
              }
          });
      });
  </script>
    <script>
        $(document).ready(function(){
            // Bắt sự kiện click vào nút like
            $('.like').on('click', function(e){
                e.preventDefault();

                // Lấy id của công thức từ thuộc tính idRecipe
                var recipe_id = $(this).attr('idRecipe');

                // Gửi request lên server để tăng số like của công thức
                $.ajax({
                    url: '/recipes/like/' + recipe_id,
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response){
                        // Nếu request thành công, cập nhật số like hiển thị trên giao diện
                        $('.nlike#' + recipe_id).text(response.likes);
                    }
                });
            });
        });
    </script>

@endsection