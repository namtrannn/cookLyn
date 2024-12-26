@extends('recipe-master')
@section('content')
<section id="mu-gallery">
    <div class="detail_1 recipe-detail-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <ul class="recipes-breadcrumb d-flex">
                        <li>
                            <a href="">Công thức</a>
                        </li>
                        <span>/</span>
                        <li>
                            <a href="">{{$Category->name}}</a> <!-- Ten danh muc -->
                        </li>
                        <span>/</span>
                        <li>
                            {{$recipe->name}}
                            <!--  Ten cong thuc -->
                        </li>
                    </ul>
                    <div class="recipe-header-info">
                        <div class="recipe-main--img">
                            <img src="upload/dish/{{$Dish->image}}" alt="Cách làm {{$recipe->name}}" />
                            <!--  Chèn ảnh Món Ăn -->
                        </div>
                        <div class="recipe-header-detail">
                            <div class="recipe-headline">
                                <div class="recipe-type">
                                    <span class="item" style="margin-right:5px">
                                        <span class="text cuisine-label">Mục đích</span>
                                        <span class="type">{{$Category->name}}</span>
                                    </span>
                                    <span class="item" style="margin-right:5px">
                                        <span class="text cuisine-label">Công thức bởi</span>
                                        <span class="type">{{$recipe->user->name}}</span>
                                    </span>
                                </div>
                                <h1 class="p-name fn recipe-title">
                                    {{ $recipe->name }}
                                </h1>
                                <span class="fa fa-star text-#e58a2f" style="color: #e58a2f!important;"></span>
                                <span class="fa fa-star text-#e58a2f" style="color: #e58a2f!important;"></span>
                                <span class="fa fa-star text-#e58a2f" style="color: #e58a2f!important;"></span>
                                <span class="fa fa-star text-#e58a2f" style="color: #e58a2f!important;"></span>
                                <span class="fa fa-star text-#e58a2f" style="color: #e58a2f!important;"></span>
                            </div>
                            <div class="recipe-header-stats">
                                <div class="row justify-content-center">
                                    <div class="col-lg-3">
                                        <div class="recipe-stats--box">
                                            <div class="stats-text">
                                                Nguyên liệu
                                            </div>
                                            <div class="duration">
                                                <div class="duration-block">
                                                    <b class="stats-count">{{$demnguyenlieu}}</b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="recipe-stats--box">
                                            <div class="stats-text">
                                                Thực hiện
                                            </div>
                                            <div class="duration">
                                                <div class="duration-block">
                                                    <b class="stats-count">{{$recipe->time}}</b>
                                                    <time>m</time>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="recipe-stats--box">
                                            <div class="stats-text">
                                                Phần ăn
                                            </div>
                                            <div class="duration">
                                                <div class="duration-block">
                                                    <b class="stats-count">{{$recipe->eater}}</b>
                                                    <time>người</time>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="recipe-stats--box">
                                            <div class="stats-text">
                                                Độ khó
                                            </div>
                                            <div class="duration">
                                                <div class="duration-block">
                                                    <b class="stats-count">{{$dokho}}</b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="recipe-detail">
                        <div class="recipe-ingredient-wrapper">
                            <div class="recipe-box-heading">
                                <div class="col-md-8 col-sm-6 p-0">
                                    <h2 class="title capit">
                                        Nguyên liệu làm {{$recipe->name}}
                                    </h2>
                                    <div class="des">
                                        <span>cho</span>
                                        <span id="SPAN_200" class="text-highlight">
                                            <strong id="STRONG_201">2</strong>
                                            <strong id="STRONG_202">{{$recipe->eater}}</strong>
                                        </span>
                                        <span>Phần ăn</span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="pull-right">
                                        <div class="serving-container" style="padding-top: 4px;">
                                            <span id="SPAN_206">
                                                <span id="SPAN_207"></span>
                                                Phần ăn
                                            </span>
                                            <span id="SPAN_208">
                                                <input type="text" id="INPUT_209" value="{{$recipe->eater}}" />
                                            </span>
                                            <span id="SPAN_210">
                                                <a id="A_211">
                                                    <span id="SPAN_212" onclick="tinhnguyenlieu();">

                                                    </span>
                                                </a>
                                            </span>
                                        </div>
                                        <div id="DIV_213">
                                            <img src="" id="IMG_214" alt='' />
                                        </div>
                                    </div>
                                    <div class="erorr" id="diverorr"
                                        style="position: absolute;bottom: -20px;right: 74px;color: red;display: none;">
                                        <span id="erorr">AAAA</span>
                                    </div>
                                </div>
                            </div>
                            <div class="recipe-ingredient-box">
                                <div id="DIV_216">
                                    <ul id="UL_217">

                                        @foreach($mang as $mangs)
                                        <li id="LI_218">
                                            <ul id="UL_219">
                                                <li id="LI_220">
                                                    <span id="SPAN_221"></span>
                                                </li>
                                                <li id="LI_222">
                                                    <span id="SPAN_223">{{$mangs}}</span> <!-- SPAN_3 -->
                                                </li>
                                            </ul>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div>
                                    <!-- ngIf: ingredientGroups.length > 0 -->

                                    <ul class="list-unstyled">
                                        <!-- ngRepeat: group in ingredientGroups | orderBy:'displayOrder' -->

                                        <li>
                                            <!-- ngIf: group.name !== null -->

                                            <ul class="list-inline recipe-ingredient-list">
                                                <!-- ngRepeat: item in getIngredientByGroupId(group.id) -->
                                                @foreach($Array1 as $key=>$values)
                                                <li class="recipe-ingredient ng-scope">
                                                    <ul class="list-inline">
                                                        <li>
                                                            <span id="SPAN_301"></span>
                                                            <span id="SPAN_302"></span>
                                                            <span id="SPAN_303"></span>
                                                        </li>
                                                        <li>
                                                            <span id="SPAN_305" class="ex" value="">{{$Array1[$key][0]}}
                                                            </span>
                                                            <span id="id_.{{$key}}" class="ex">{{$Array21[$key]}}</span>
                                                            <span class="ex">{{$Array1[$key][1]}}</span>
                                                        </li>
                                                    </ul>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="recipe-detail-box">
                            <div class="recipe-direction-box">
                                <div class="headline">
                                    <h2 class="capit" style="padding-right:120px;">
                                        Cách làm {{$recipe->name}}
                                    </h2>
                                    <div class="cooking-time">
                                        <span class="stats-item">
                                            <span class="stats-text">Thực hiện</span>
                                            <span class="duration-block">
                                                <b id="B_443">{{$recipe->time}}</b>m
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="recipe-content">
                                    <div class="recipe-direction-box">
                                        <h2>Thực hiện</h2>
                                        <div class="panel-group description">
                                            @for( $i=0;$i<$dembuoc;$i++) 
                                            <div class="panel panel-default clearfix">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a>Bước
                                                            <span class="num"></span>
                                                        </a>
                                                        <br>
                                                        <a class="tick-active">
                                                            {{$i+1}}
                                                            <span></span>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div class="panel-collapse collapse in">
                                                    <div class="panel-body has-photo">
                                                        {{$ArrayStep[$i]}}
                                                    </div>
                                                    <div class="step-photos col2">
                                                        <a href="" class="cooky-photo">
                                                            <img src="upload/recipes/{{$ArrayImage[$i]}}" />
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endfor
                                        </div>                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="recipe-box recipe-review-container clearfix">
                        <div class="recipe-review-list">
                            <div class="recipe-reviews ng-isolate-scope">
                                @if(Auth::check())
                                <div class="inline-recipe-review-form simple-review-form with-fake-input micro-box">
                                    <div id="DIV_738">
                                        
                                            @CSRF
                                            <div id="DIV_760">
                                                @if(session('thongbao'))
                                                {{ session('thongbao') }}
                                                @endif
                                                <span id="SPAN_761"></span>
                                                <input type="text" class="mycontent" placeholder="Nội dung thảo luận..." name="content"
                                                    id="INPUT_762" /> 
                                                    <span id="SPAN_763">
                                                        <button type="button" class="btncomment" id="BUTTON_764" data1="{{$recipe->id}}">
                                                            Gửi bình luận
                                                        </button>
                                                    </span>
                                            </div>
                                       
                                    </div>
                                    <!-- ngIf: ignoreId>0 && mainReviews.length>0 -->
                                </div>
                                @endif
                                <div class="review-has-comments">
                                    <h3>Bình luận</h3>
                                    <div class="media" style="padding: 20px">
                                        @foreach($recipe->comment as $key=>$cm)
                                        <div class="media-body d-flex">
                                            <a class="">
                                                @if($cm->user->avatar == null)
                                                <img style="border-radius:50%" width="64px" height="64px"
                                                    class="media-object" src="upload/icon/account.png">
                                                @else
                                                <img style="border-radius:50%" width="64px" height="64px"
                                                    class="media-object" src="upload/avatar/{{$cm->user->avatar}}">
                                                @endif
                                            </a>
                                            <div class="cmt-info">
                                                <h6 class="media-heading">
                                                    <span>{{$cm->user->name}}</span> 
                                                    <small style="font-size: 10px;margin-left:10px">
                                                        {{ $cm->created_at }}</small>
                                                </h6>
                                                <span> {{ $cm->content }}</span>
                                            </div>
                                        </div>
                                        <hr>
                                            
                                        @endforeach
                                        <div class="media-body base d-flex" style="display:none" >
                                            <a class="a" href="">
                                                <img style="border-radius:50%" width="64px" height="64px"
                                                    @if(Auth::check())
                                                    class="media-object myavatar" src="upload/avatar/" data1="{{Auth::user()->avatar}}">
                                                    @endif
                                            </a>
                                            <div class="cmt-info">
                                                <h6 class="media-heading">
                                                    <span class="nameuser"></span>
                                                    <small class="mydate" style="font-size: 10px;margin-left: 10px;">
                                                    </small>
                                                </h6>
                                                <span class="textcontent"> </span>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <!-- Comment -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- itemprop instruction for h-recipe micro-format-->
                <div class="col-lg-4 col-sm-12">
                    <div class="related-recipe-box">
                        <div class="headline">
                            <h3>
                                Món liên quan
                            </h3>
                        </div>
                        <div class="related-list">
                            <div class="related-recipe-list row">
                                @foreach($listrecipe as $listrecipes)
                                <div class="col-lg-6">
                                    <div class="related-box">
                                        <a href="{{route('recipes', $listrecipes->id)}}"
                                            title="Cách Bàm {{$listrecipes->name}} Tại Nhà">
                                            <img alt="" src="upload/recipes/{{$listrecipes->image_1}}" />
                                        </a>
                                        <div>
                                            <a  href="{{route('recipes', $listrecipes->id)}}"
                                                title="Cách làm {{$listrecipes->name}}">
                                                
                                                    {{$listrecipes->name}}
                                                
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.5.1.min.js">
</script>
<script type="text/javascript"> 

    function tinhnguyenlieu() {
        
    var phanan =document.getElementById('INPUT_209').value;
   
    /*alert($Array21[0]);*/
        if(isNaN(phanan) || phanan<=0 )
           { document.getElementById('diverorr').style.display="block";
             document.getElementById('erorr').innerHTML='invalid value';
             document.getElementsByClassName('ex').style.textDecoration="underline";
        }
        else
        {
            var Array1 =[];
           @foreach ($Array21 as $key=>$value)
               Array1 [{{$key}}] ={{$value}}/{{$recipe->eater}}*phanan;
               document.getElementById('id_.{{$key}}').innerHTML=Array1[{{$key}}];
            @endforeach
            
            
        }
        document.getElementById('STRONG_202').innerHTML= phanan;
    }

    $('.btncomment').click(function(){
        if($.trim($('.mycontent').val()) != ''){
          
            $.post('comment/'+$(this).attr('data1'),{content : $('.mycontent').val(),"_token": "{{ csrf_token() }}"},function(data){
                var base = $('.base').clone();
                base.css({"display" : "flex"});
                base.removeClass("base");
                var focus1 = $(base.find('.nameuser')).text(data.user.name);
                $(base.find('.textcontent')).text(data.comment.content);
                console.log(data.comment.created_at);
                $(base.find('.mydate')).text(data.comment.created_at);
                var focus = $(base.find('.myavatar')).attr('src','upload/avatar/'+data.user.avatar);
                $('.media').prepend(base);
                $(".mycontent").val("");
                console.log(data);
            })
        }
        else{
            alert('Không được để trống');
        }
    })

    $('.mycontent').keydown(function(e){
         if(e.which === 13){
            if($.trim($('.mycontent').val()) != ''){
       
                $.post('comment/'+$('.btncomment').attr('data1'),{content : $('.mycontent').val(),"_token": "{{ csrf_token() }}"},function(data){
                    var base = $('.base').clone();
                    base.css({"display" : "flex"});
                    base.removeClass("base");
                    var focus1 = $(base.find('.nameuser')).text(data.user.name);
                    $(base.find('.textcontent')).text(data.comment.content);
                    console.log(data.comment.created_at);
                    $(base.find('.mydate')).text(data.comment.created_at);
                    var focus = $(base.find('.myavatar')).attr('src','upload/avatar/'+data.user.avatar);
                    $('.media').prepend(base);
                    $(".mycontent").val("");
                    console.log(data);
                })
            }
            else{
                alert('Không được để trống');
            }
        }  
    });

</script>

@endsection