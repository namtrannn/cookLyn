@extends('master')
@section('content')
<section id="mu-gallery">
    <div id="DIV_1" class="detail_1">
        <div id="DIV_2">
            <div id="DIV_3">
                <ul id="UL_4">
                    <li id="LI_5">
                        <a href="" id="A_6">Công thức</a>
                    </li>
                    <li id="LI_7">
                        <a href="" id="A_8">{{$Category->name}}</a> <!-- Ten danh muc -->
                    </li>
                    <li id="LI_9">
                        {{$recipe->name}}
                        <!--  Ten cong thuc -->
                    </li>
                </ul>
            </div>
        </div>
        <!-- hrecipe h-recipe -->

        <div id="DIV_10" style="height: 4694px;">
            <div id="DIV_11" style="height: 4694px">

                <div id="DIV_13">
                    <img src="upload/dish/{{$Dish->image}}" alt="Cách làm {{$recipe->name}}" id="IMG_14" />
                    <!--  Chèn ảnh Món Ăn -->
                </div>
                <div id="DIV_15">
                    <div id="DIV_16">
                        <div id="DIV_17">
                            <span id="SPAN_18" style=" width: 120px;"> 
                                <span id="SPAN_19">Mục đích</span> 
                                <span id="SPAN_20">{{$Category->name}}</span>
                            </span> 
                            <span id="SPAN_21"> 
                                <span id="SPAN_22">Công thức bởi</span> 
                                <span id="SPAN_23">{{$recipe->user->name}}</span>
                            </span>
                        </div>
                        <h1 id="H1_24">
                            {{ $recipe->name }}
                        </h1>
                        <span class="fa fa-star text-#e58a2f" style="color: #e58a2f!important;"></span>
                        <span class="fa fa-star text-#e58a2f" style="color: #e58a2f!important;"></span>
                        <span class="fa fa-star text-#e58a2f" style="color: #e58a2f!important;"></span>
                        <span class="fa fa-star text-#e58a2f" style="color: #e58a2f!important;"></span>
                        <span class="fa fa-star text-#e58a2f" style="color: #e58a2f!important;"></span>
                    </div>
                </div>
                <div id="DIV_40">
                    <span id="SPAN_41"><span id="SPAN_42"></span></span>
                    <ul id="UL_43">
                        <li id="LI_44">
                            <div id="DIV_45">
                                <span id="SPAN_46">Nguyên liệu</span> <span id="SPAN_47"> <b id="B_48">

                                        {{$demnguyenlieu}}
                                    </b></span>
                            </div>
                        </li>
                        <li id="LI_49">
                            <div id="DIV_50">
                                <span id="SPAN_51">Thực hiện</span> <span id="SPAN_52"> <span id="SPAN_53"><b
                                            id="B_54"></b></span></span>
                                <time id="TIME_55">
                                    {{$recipe->time}}
                                </time> m<span id="SPAN_56"></span>
                            </div>
                        </li>
                        <li id="LI_57">
                            <div id="DIV_58">
                                <span id="SPAN_59" style="color: black">Phần ăn </span> <span id="SPAN_60"><b
                                        id="B_61">{{$recipe->eater}}</b> người</span>
                            </div>
                        </li>
                        <li id="LI_62">
                            <div id="DIV_63">
                                <span id="SPAN_64">Độ khó</span> <span id="SPAN_65"><b id="B_66">{{$dokho}}</b></span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div id="DIV_147" style="height: auto;">

                    <button id="BUTTON_172">
                        <i id="I_173"></i> Tải lên hình đã thực hiện
                    </button>
                    <!-- </div> -->

                    <div id="DIV_174">
                        <div id="DIV_175">
                            <div id="DIV_176">
                                <div id="DIV_177">
                                </div>
                                <div id="DIV_178">
                                </div>
                                <div id="DIV_179">
                                </div>
                                <div id="DIV_180">
                                </div>
                                <div id="DIV_181">
                                </div>
                                <div id="DIV_182">
                                </div>
                                <div id="DIV_183">
                                </div>
                                <div id="DIV_184">
                                </div>
                                <div id="DIV_185">
                                </div>
                                <div id="DIV_186">
                                </div>
                                <div id="DIV_187">
                                </div>
                                <div id="DIV_188">
                                </div>
                                <div id="DIV_189">
                                </div>
                                <div id="DIV_190">
                                </div>
                                <div id="DIV_191">
                                </div>
                                <div id="DIV_192">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="DIV_195">
                        <div id="DIV_196">
                            <div id="DIV_197">
                                <h2 id="H2_198">
                                    Nguyên liệu làm {{$recipe->name}}
                                </h2>
                                <div>
                                    cho <span id="SPAN_200"><strong id="STRONG_201">2</strong><strong
                                            id="STRONG_202">{{$recipe->eater}}</strong></span> Phần ăn
                                </div>
                            </div>
                            <div id="DIV_203">
                                <div id="DIV_204">
                                    <div id="DIV_205">
                                        <span id="SPAN_206"><span id="SPAN_207"></span> Phần ăn</span>
                                        <span id="SPAN_208">
                                            <input type="text" id="INPUT_209" value="{{$recipe->eater}}" /></span>
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
                                    style="position: absolute;bottom: -28px;right: 74px;color: red;display: none;">
                                    <span id="erorr">AAAA</span>
                                </div>
                            </div>
                        </div>

                        <div id="DIV_215">
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
                            </div>
                            <div id="DIV_293">
                                <!-- ngIf: ingredientGroups.length > 0 -->

                                <ul id="UL_295" style="width: 700px ;height: 308px">
                                    <!-- ngRepeat: group in ingredientGroups | orderBy:'displayOrder' -->

                                    <li id="LI_296">
                                        <!-- ngIf: group.name !== null -->

                                        <ul id="UL_297" style="width: 800px">
                                            <!-- ngRepeat: item in getIngredientByGroupId(group.id) -->
                                            @foreach($Array1 as $key=>$values)
                                            <li id="LI_298" style="width: 372px">
                                                <ul id="UL_299">
                                                    <li id="LI_300">
                                                        <span id="SPAN_301"></span><span id="SPAN_302"></span><span
                                                            id="SPAN_303"></span>
                                                    </li>
                                                    <li id="LI_304" style="width: 190px">

                                                        <span id="SPAN_305" class="ex" value="">{{$Array1[$key][0]}}
                                                        </span>
                                                        <span id="id_.{{$key}}" class="ex">{{$Array21[$key]}}</span>
                                                        <span class="ex">{{$Array1[$key][1]}}</span>


                                                        <!--     <span id="SPAN_mon"></span>
                                                                        -->
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

                    <div id="DIV_435" style="height: 3000px">
                        <div id="DIV_436" style="height:3000px ">
                            <div id="DIV_437">
                                <h2 id="H2_438">
                                    Cách làm {{$recipe->name}}
                                </h2>
                                <div id="DIV_439">
                                    <span id="SPAN_440"> <span id="SPAN_441">Thực hiện</span> <span id="SPAN_442"> <b
                                                id="B_443">{{$recipe->time}}</b>m</span></span>
                                </div>

                            </div>
                            <div id="DIV_452" style="height: 2750px">

                                <h2 id="H2_454">
                                    Thực hiện
                                </h2>
                                <div id="DIV_455" style="height: auto;">
                                    @for( $i=0;$i<$dembuoc;$i++) <div id="DIV_456" style="height: 450px">

                                        <!-- Step 1 -->

                                        <div id="DIV_457">
                                            <h4 id="H4_458">
                                                <a style="color: #a4b0be; font-size: 30px" id="A_461">Bước
                                                    {{--                                                  <span id="SPAN_462"></span>--}}
                                                </a>
                                                <br>
                                                <a style="color: Red; font-size: 30px" id="A_459">{{$i+1}} <span style="font-size: 30px" id="SPAN_460"></span></a>

                                            </h4>
                                        </div>

                                        <div id="DIV_464" style="height: 400px">
                                            <div id="DIV_465" style="padding: 20px;">

                                                {{$ArrayStep[$i]}}
                                            </div>

                                            <div id="DIV_471">
                                                <a href="" id="A_472"><img
                                                        alt="Sandwich thịt nguội và phô mai nướng giòn - Croque Monsieur"
                                                        src="upload/recipes/{{$ArrayImage[$i]}}" id="IMG_473"
                                                        style="" />
                                                </a>
                                            </div>
                                        </div>
                                </div>
                                @endfor
                            </div>
                            <!-- itemprop instruction for h-recipe micro-format-->
                        </div>
                    </div>
                </div>
                <div id="DIV_733">
                    <div id="DIV_734">
                        <div id="DIV_735">
                            @if(Auth::check())
                            <div id="DIV_736">
                                <div id="DIV_738">
                                    <!-- <div id="DIV_739">
                                        <div id="DIV_740">
                                            <div id="DIV_741">

                                            </div>
                                        </div> -->
                                        <!-- end ngRepeat: rating in ratingOnlyReviews -->

                                        <!-- <div id="DIV_744">
                                            <div id="DIV_745">

                                            </div>
                                        </div> -->
                                        <!-- end ngRepeat: rating in ratingOnlyReviews -->

                                    <!-- </div> -->
                                    <form action="comment/{{$recipe->id}}" method="POST" role="form">
                                    @CSRF
                                    <div id="DIV_760">
                                        @if(session('thongbao'))
                                            {{ session('thongbao') }}
                                        @endif
                                        <span id="SPAN_761"></span>
                                        <input type="text" placeholder="Nội dung thảo luận..."
                                            name="content" id="INPUT_762" /> <span id="SPAN_763">
                                            <button type="submit" id="BUTTON_764">
                                                Gửi bình luận
                                            </button></span>
                                    </div>
                                    </form>
                                </div>
                                <!-- ngIf: ignoreId>0 && mainReviews.length>0 -->
                            </div>
                            @endif
                                <h3>Bình luận</h3>
                            <!-- Comment -->
                            <div class="media" style="padding: 20px">        
                                @foreach($recipe->comment as $cm)
                                <div class="media-body">
                                        <a class="pull-left" href="#">
                                        @if($cm->user->avatar == null)
                                            <img style="border-radius:50%" width="64px" height="64px" class="media-object" src="upload/icon/account.png">
                                        @else
                                        <img style="border-radius:50%" width="64px" height="64px" class="media-object" src="upload/avatar/{{$cm->user->avatar}}">
                                        @endif
                                        </a>
                                    <h6 class="media-heading"> {{$cm->user->name}}
                                        <small class="pull-right" style="font-size: 10px"> {{ $cm->created_at }}</small>       
                                    </h6>   
                                    <span> {{ $cm->content }}</span>                
                                                          
                                </div>
                                <hr>
                                @endforeach
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div id="DIV_840" class="relate">
        <div id="DIV_854">
            <h3 id="H3_855">
                Món liên quan
            </h3>
        </div>
        <div id="DIV_856">
            <div id="DIV_857" style="width: 440px">
                @foreach($listrecipe as $listrecipes)
                <div id="DIV_858 " style="width: 185px">
                    <div id="DIV_859">
                        <div id="DIV_860" style="width: 600px;">
                            <a href="{{route('recipes', $listrecipes->id)}}"
                                title="Cách Bàm {{$listrecipes->name}} Tại Nhà" id="A_861">
                                <img alt="" src="upload/recipes/{{$listrecipes->image_1}}" style="width: 140px" />

                            </a>
                        </div>
                        <div id="DIV_863" style="padding: 24px 0px 0px;">
                            <a href="{{route('recipes', $listrecipes->id)}}" title="Cách làm {{$listrecipes->name}}"
                                id="A_864">
                                <h1 style="font-size: 11px;color: black;margin-top: 3px;font-weight: bold;">
                                    {{$listrecipes->name}}</h1>
                            </a>

                        </div>
                    </div>
                </div>

                @endforeach
                <div class="row">
                    {{$listrecipe->links()}}
                </div>
            </div>

        </div>





    </div>

    </div>
</section>
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
    document.getElementById('STRONG_202').innerHTML=phanan;
}
</script>




@endsection