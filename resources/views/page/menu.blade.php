@extends('master')
@section('content')
  <section id="mu-restaurant-menu" style="margin-top: 100px">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-restaurant-menu-area">

            <div class="mu-title">
              {{-- <span class="mu-subtitle">Thực đơn của chúng tôi</span> --}}
              <h2>Thực đơn</h2>
            </div>
            
            <div class="mu-restaurant-menu-content">
                <ul class="nav nav-tabs mu-restaurant-menu">
                    <li class="active"><a href="#ansang" data-toggle="tab">Ăn sáng</a></li>
                    <li><a href="#khaivi" data-toggle="tab">Khai vị</a></li>
                    <li><a href="#monchinh" data-toggle="tab">Món chính</a></li>
                    <li><a href="#anvat" data-toggle="tab">Ăn vặt</a></li>
                    <li><a href="#thucuong" data-toggle="tab">Thức uống</a></li>
                    <li><a href="#salad" data-toggle="tab">Salad</a></li>
                </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="ansang">
                  <div class="mu-tab-content-area">
                    <div class="row">

                      <div class="col-md-12">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            @foreach($dish_breakfast as $dsb)
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  {{-- <a href="#"> --}}
                                  <a>
                                    <img style="border-radius: 10%" class="media-object" src="upload/dish/{{ $dsb->image}}" alt="img" width="110px" height="110px">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a><strong>{{ $dsb->name }}</strong></a></h4>
                                  <h5>{{ $dsb->note }}</h5>
                                  <p><strong>{{ $dsb->category->name }}</strong></p>
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

                <div class="tab-pane fade" id="khaivi">
                  <div class="mu-tab-content-area">
                    <div class="row">

                      <div class="col-md-12">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            @foreach($dish_appetizer as $dsa)
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  {{-- <a href="#"> --}}
                                  <a>
                                    <img style="border-radius: 10%" class="media-object" src="upload/dish/{{ $dsa->image}}" alt="img" width="110px" height="110px">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a><strong>{{ $dsa->name }}</strong></a></h4>
                                  <h5>{{ $dsa->note }}</h5>
                                  <p><strong>{{ $dsa->category->name }}</strong></p>
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

                <div class="tab-pane fade" id="monchinh">
                    <div class="mu-tab-content-area">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="mu-tab-content-left">
                                  <ul class="mu-menu-item-nav">
                                    @foreach($dish_main as $dsm)
                                    <li>
                                      <div class="media">
                                        <div class="media-left">
                                          {{-- <a href="#"> --}}
                                          <a>
                                            <img style="border-radius: 10%" class="media-object" src="upload/dish/{{ $dsm->image}}" alt="img" width="110px" height="110px">
                                          </a>
                                        </div>
                                        <div class="media-body">
                                          <h4 class="media-heading"><a><strong>{{ $dsm->name }}</strong></a></h4>
                                          <h5>{{ $dsm->note }}</h5>
                                          <p><strong>{{ $dsm->category->name }}</strong></p>
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

                <div class="tab-pane fade" id="anvat">
                    <div class="mu-tab-content-area">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="mu-tab-content-left">
                                  <ul class="mu-menu-item-nav">
                                    @foreach($dish_snack as $dsn)
                                    <li>
                                      <div class="media">
                                        <div class="media-left">
                                          {{-- <a href="#"> --}}
                                          <a>
                                            <img style="border-radius: 10%" class="media-object" src="upload/dish/{{ $dsn->image}}" alt="img" width="110px" height="110px">
                                          </a>
                                        </div>
                                        <div class="media-body">
                                          <h4 class="media-heading"><a><strong>{{ $dsn->name }}</strong></a></h4>
                                          <h5>{{ $dsn->note }}</h5>
                                          <p><strong>{{ $dsn->category->name }}</strong></p>
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

                <div class="tab-pane fade" id="thucuong">
                  <div class="mu-tab-content-area">
                    <div class="row">

                      <div class="col-md-12">
                        <div class="mu-tab-content-left">
                          <ul class="mu-menu-item-nav">
                            @foreach($dish_drink as $dsd)
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  {{-- <a href="#"> --}}
                                  <a>
                                    <img style="border-radius: 10%" class="media-object" src="upload/dish/{{ $dsd->image}}" alt="img" width="110px" height="110px">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a><strong>{{ $dsd->name }}</strong></a></h4>
                                  <h5>{{ $dsd->note }}</h5>
                                  <p><strong>{{ $dsd->category->name }}</strong></p>
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
                <div class="tab-pane fade" id="salad">
                  <div class="mu-tab-content-area">
                    <div class="row">

                      <div class="col-md-12">
                        <div class="mu-tab-content-left">
                                                      
                            <ul class="mu-menu-item-nav">

                                @foreach($dish_salad as $dss)
                                @if(count($dish_salad) == 0)    
                                    <strong>Không có món nào</strong> 
                                @else                            
                                <li>
                                  <div class="media">
                                    <div class="media-left">
                                      {{-- <a href="#"> --}}
                                      <a>
                                        <img style="border-radius: 10%" class="media-object" src="upload/dish/{{ $dss->image}}" alt="img" width="110px" height="110px">
                                      </a>
                                    </div>
                                    <div class="media-body">
                                      <h4 class="media-heading"><a><strong>{{ $dss->name }}</strong></a></h4>
                                      <h5>{{ $dss->note }}</h5>
                                      <p><strong>{{ $dss->category->name }}</strong></p>
                                    </div>
                                  </div>
                                </li>    
                                @endif 
                                @endforeach   
                            </ul>                              
                        </div>
                      </div>
                    
                   </div>
                 </div>
                </div>
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