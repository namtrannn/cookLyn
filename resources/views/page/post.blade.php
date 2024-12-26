@extends('master')
@section('content')
<div class="container postRe" id="content">
    <div class="inner-header">
	<div class="container">
    <div class="pull-left">
      <div class="beta-breadcrumb">
        <a href="{{ route('trang-chu') }}"><i class="fas fa-home" aria-hidden="true"></i>Home</a> / <span>Đăng công thức</span>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
  </div>             
    <div class="row-fluid">
        <!-- block -->
        <div class="block">
            <div class="block-content collapse in">
                <div class="span12">
                    <form action="{{ route('postRecipes')}}" class="form-horizontal" method="POST" enctype="multipart/form-data">
                      @if(count($errors)>0)   
                          <div class="alert alert-danger">
                              @foreach($errors->all() as $err)
                                  {{ $err }}<br>
                              @endforeach
                          </div>            
                      @endif
                      @CSRF  
                      @if(session('thongbao'))
                          <div class="alert alert-success">
                              {{ session('thongbao') }}
                          </div>
                      @endif
                      <fieldset>
                        <legend>Đăng công thức</legend>
                        <div class="control-group">
                          <label class="control-label" for="select01">Thể loại</label>
                          <div class="controls">
                            <select id="Category" name="category" class="chzn-select" style="width:400px;height:30px">
                              @foreach($category as $cate)
                                <option value="{{ $cate->id }}">{{$cate->name}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="select01">Món ăn</label>
                          <div class="controls">
                            <select id="Dish" name="dish" class="chzn-select" style="width:400px;height:30px">
                              @foreach($dish as $ds)
                                <option value="{{ $ds->id }}">{{ $ds->name }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="typeahead">Tên công thức </label>
                          <div class="controls">
                            <input name="name" placeholder="Nhập tên công thức ..." type="text" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            <p class="help-block"></p>
                          </div>
                        </div>   
                        <div class="control-group">
                          <label class="control-label" for="typeahead">Số nguyên liệu </label>
                          <div class="controls">
                            <input name="amount" placeholder="Nhập số nguyên liệu ..." type="numeric" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            <p class="help-block"></p>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="typeahead">Số người ăn </label>
                          <div class="controls">
                            <input name="eater" placeholder="Nhập số người ăn ..." type="numeric" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                            <p class="help-block"></p>
                          </div>
                        </div>  
                        <div class="control-group">
                          <label class="control-label" for="textarea2">Các nguyên liệu</label>
                          <div class="controls">
                            <textarea name="materials" class="input-xlarge textarea" placeholder="Các nguyên liệu" style="width: 810px; height: 200px"></textarea>
                          </div>
                            <button class="btn btn-success pull-right" onclick="hd()" type="button" id="btnh" style="display:block">Xem hướng dẫn nhập</button>
                            <button class="btn btn-success pull-right" onclick="understand()" type="button" id="btnu" style="display:none">Đã hiểu</button>
                            <div id="guide" style="display: none">
                                <p>gợi ý: </p>
                                <ul>
                                    <li>Quy cách nhập: tên_nguyên_liệu định_lượng đơn_vị_tính ghi_chú </li>
                                    <li>tên_nguyên_liệu: tên nguyên liệu, định_lượng: số lượng,đơn vị_tính: gram,lít,cái,...,ghi chú: diễn giải... </li>
                                    <li>Nhập 1 nguyên liệu trên cùng 1 dòng:
                                        <ul>
                                            <li>*ví dụ: thịt gà 100gr (ghi chú)</li>
                                        </ul>
                                    </li>
                                    <li>Nhập nhiều nguyên liệu trên cùng 1 dòng
                                        <ul>
                                            <li>*nhập nguyên liệu cách nhau bằng dấu (,)</li>
                                            <li>*ví dụ: gà 1/4 con , trái ớt 3 quả, nước 1 lít</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div> 
                        <div class="control-group">
                          <label class="control-label" for="select01">Độ khó</label>
                          <div class="controls">                           
                            <label class="radio-inline">
                                <input name="level" value="1" checked="" type="radio">Dễ
                            </label>
                            <label class="radio-inline">
                                <input name="level" value="2" type="radio">Trung bình
                            </label> 
                            <label class="radio-inline">
                                <input name="level" value="3" type="radio">Khó
                            </label> 
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="typeahead">Thời gian thực hiện</label>
                          <div class="controls">
                            <input style="width:400px;height:30px" name="time" placeholder="Nhập thời gian thực hiện ...(số phút thực hiện)" type="numeric" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>  phút
                            <p class="help-block"></p>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" style="color: Red">CÁC BƯỚC THỰC HIỆN</label>
                        </div>   

                        <div>
                          <div class="control-group">
                            <label class="control-label" for="textarea2">Bước 1</label>
                            <div class="controls">
                              <textarea name="step_1" class="input-xlarge textarea" placeholder="Bước 1 ..." style="width: 810px; height: 200px"></textarea>
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label" for="fileInput">Hình ảnh bước 1</label>
                            <div class="controls">
                              <input name="image_1" class="input-file uniform_on" id="fileInput" type="file">
                            </div>
                          </div>
                        </div>                     
                      <button class="btn btn-success" onclick="myFunction1()" type="button" id="btn1" style="display:block">Thêm bước mới</button>
                        <div id="myDIV1" style="display:none">
                          <div class="control-group">
                            <label class="control-label" for="textarea2">Bước 2</label>
                            <div class="controls">
                              <textarea name="step_2" class="input-xlarge textarea" placeholder="Bước 2 ..." style="width: 810px; height: 200px"></textarea>
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label" for="fileInput">Hình ảnh bước 2</label>
                            <div class="controls">
                              <input name="image_2" class="input-file uniform_on" id="fileInput" type="file">
                            </div>
                          </div>
                        </div>
                        <button class="btn btn-success" onclick="myFunction2()" type="button" id="btn2" style="display:none">Thêm bước  mới</button>

                        <div id="myDIV2" style="display:none">
                          <div class="control-group">
                            <label class="control-label" for="textarea2">Bước 3</label>
                            <div class="controls">
                              <textarea name="step_3" class="input-xlarge textarea" placeholder="Bước 3 ..." style="width: 810px; height: 200px"></textarea>
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label" for="fileInput">Hình ảnh bước 3</label>
                            <div class="controls">
                              <input name="image_3" class="input-file uniform_on" id="fileInput" type="file">
                            </div>
                          </div>
                        </div>
                        <button class="btn btn-success" onclick="myFunction3()" type="button" id="btn3" style="display:none">Thêm bước mới</button>

                        <div id="myDIV3" style="display:none">
                          <div class="control-group">
                            <label class="control-label" for="textarea2">Bước 4</label>
                            <div class="controls">
                              <textarea name="step_4" class="input-xlarge textarea" placeholder="Bước 4 ..." style="width: 810px; height: 200px"></textarea>
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label" for="fileInput">Hình ảnh bước 4</label>
                            <div class="controls">
                              <input name="image_4" class="input-file uniform_on" id="fileInput" type="file">
                            </div>
                          </div>
                      </div >
                      <button class="btn btn-success" onclick="myFunction4()" type="button" id="btn4" style="display:none">Thêm bước mới</button>

                      <div id="myDIV4" style="display:none">
                        <div class="control-group">
                          <label class="control-label" for="textarea2">Bước 5</label>
                          <div class="controls">
                            <textarea name="step_5" class="input-xlarge textarea" placeholder="Bước 5 ..." style="width: 810px; height: 200px"></textarea>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="fileInput">Hình ảnh bước 5</label>
                          <div class="controls">
                            <input name="image_5" class="input-file uniform_on" id="fileInput" type="file">
                          </div>
                        </div>
                      </div>
                      <button class="btn btn-success" onclick="myFunction5()" type="button" id="btn5" style="display:none">Thêm bước mới</button>

                      <div id="myDIV5" style="display:none">
                        <div class="control-group">
                          <label class="control-label" for="textarea2">Bước 6</label>
                          <div class="controls">
                            <textarea name="step_6" class="input-xlarge textarea" placeholder="Bước 6 ..." style="width: 810px; height: 200px"></textarea>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="fileInput">Hình ảnh bước 6</label>
                          <div class="controls">
                            <input name="image_6" class="input-file uniform_on" id="fileInput" type="file">
                          </div>
                        </div>    
                      </div>  
                      <button class="btn btn-success" onclick="myFunction6()" type="button" id="btn6" style="display:none">Thêm bước mới</button>

                      <div id="myDIV6" style="display:none">
                        <div class="control-group">
                          <label class="control-label" for="textarea2">Bước 7</label>
                          <div class="controls">
                            <textarea name="step_7" class="input-xlarge textarea" placeholder="Bước 7 ..." style="width: 810px; height: 200px"></textarea>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="fileInput">Hình ảnh bước 7</label>
                          <div class="controls">
                            <input name="image_7" class="input-file uniform_on" id="fileInput" type="file">
                          </div>
                        </div>     
                      </div>

                        <div class="form-actions" style="margin-top: 30px; margin-bottom: 50px">
                          <button type="submit"  class="btn btn-primary">Đăng bài</button>
                          <button type="reset" class="btn">Cancel</button>
                        </div>
                      </fieldset>
                    </form>

                </div>
            </div>
        </div>
        <!-- /block -->
    </div>    
</div>
@endsection

@section('script')

    <script>
        $(document).ready(function(){
            $("#Category").change(function(){
                var id_category = $(this).val();
                $.get("dish/"+id_category,function(data){
                    $("#Dish").html(data);
                });
                // alert(id_theloai);
            });
        });
    </script>
    <script>
        function hd() {
            var dh = document.getElementById("guide");
            var bh = document.getElementById("btnh");
            var bu = document.getElementById("btnu");

            if (dh.style.display === "none") {
                dh.style.display = "block";
                bh.style.display = "none";
                bu.style.display = "block";
            }

        }
    </script>
    <script>
        function understand() {
            var dh = document.getElementById("guide");
            var bh = document.getElementById("btnh");
            var bu = document.getElementById("btnu");

            if (dh.style.display === "block") {
                dh.style.display = "none";
                bh.style.display = "block";
                bu.style.display = "none";
            }
        }
    </script>
    <script>
    function myFunction1() {
    var d1 = document.getElementById("myDIV1");
    var b1 = document.getElementById("btn1");
    var b2 = document.getElementById("btn2");

    if (d1.style.display === "none") {
      d1.style.display = "block";
      b1.style.display = "none";
      b2.style.display = "block";
    }

}
</script>
<script>
    function myFunction2() {
    var d2 = document.getElementById("myDIV2");
    var b2 = document.getElementById("btn2");
    var b3 = document.getElementById("btn3");

    if (d2.style.display === "none") {
      d2.style.display = "block";
      b2.style.display = "none";
      b3.style.display = "block";
    }

}
</script>
<script>
    function myFunction3() {
    var d3 = document.getElementById("myDIV3");
    var b3 = document.getElementById("btn3");
    var b4 = document.getElementById("btn4");

    if (d3.style.display === "none") {
      d3.style.display = "block";
      b3.style.display = "none";
      b4.style.display = "block";
    }

}
</script>
<script>
    function myFunction4() {
    var d4 = document.getElementById("myDIV4");
    var b4 = document.getElementById("btn4");
    var b5 = document.getElementById("btn5");

    if (d4.style.display === "none") {
      d4.style.display = "block";
      b4.style.display = "none";
      b5.style.display = "block";
    }

}
</script>
<script>
    function myFunction5() {
    var d5 = document.getElementById("myDIV5");
    var b5 = document.getElementById("btn5");
    var b6 = document.getElementById("btn6");

    if (d5.style.display === "none") {
      d5.style.display = "block";
      b5.style.display = "none";
      b6.style.display = "block";
    }

}
</script>
<script>
    function myFunction6() {
    var d6 = document.getElementById("myDIV6");
    var b6 = document.getElementById("btn6");
    var b7 = document.getElementById("btn7");

    if (d6.style.display === "none") {
      d6.style.display = "block";
      b6.style.display = "none";
      b7.style.display = "block";
    }

}
</script>
    <script>
        function myFunction() {
            alert("Bạn cần đăng nhập trước khi đăng bài");
        }
    </script>
@endsection