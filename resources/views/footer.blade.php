<style type="text/css" media="screen">
.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
#aa-footer {
    background-color: #222;
    display: inline;
    float: left;
    width: 100%;
}
#aa-footer .aa-footer-top .aa-footer-top-area {
    display: inline;
    float: left;
    width: 100%;
}
#aa-footer .aa-footer-top .aa-footer-top-area .aa-footer-widget {
    display: block;
}
#aa-footer .aa-footer-top .aa-footer-top-area .aa-footer-widget h3 {
    color: #fff;
}
ul {
    padding: 0;
    margin: 0;
    list-style: none;
}
#aa-footer .aa-footer-top .aa-footer-top-area .aa-footer-widget .aa-footer-nav li a {
    color: #888;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -ms-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
}
#aa-footer .aa-footer-top .aa-footer-top-area .aa-footer-widget .aa-footer-nav li a:hover {
    color: white;
   text-decoration: none;
    transition: all 0.5s;
}
#aa-footer .aa-footer-top .aa-footer-top-area .aa-footer-widget .aa-footer-social a {
    border: 1px solid #888;
    color: #888;
    display: inline-block;
    font-size: 18px;
    margin-right: 8px;
    padding: 2px 0;
    text-align: center;
    width: 35px;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -ms-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
}
address {
    margin-bottom: 20px;
    font-style: normal;
    line-height: 1.42857143;
}
#aa-footer .aa-footer-top .aa-footer-top-area .aa-footer-widget address p {
    margin-bottom: 5px;
    color: #888;
}
</style>
<footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
     <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-top-area">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <h3>Menu</h3>
                  <ul class="aa-footer-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Quần Áo Bóng Đá</a></li>
                    <li><a href="#">Giày</a></li>
                    <li><a href="#">Phụ Kiện Thể Thao</a></li>
                    <li><a href="#">Tin Tức</a></li>
                    <li><a href="#">Liên hệ</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Quần Áo Bóng Đá</h3>
                    <ul class="aa-footer-nav">
                      <ul class="aa-footer-nav">
                     @foreach($rd_ds as $ds)
                      <li><a href="{{url('loaisp',[$ds->id])}}" title="" >{{$ds->name}}</a></li>       
                     @endforeach
                    </ul>

                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Thương hiệu</h3>
                    <ul class="aa-footer-nav">
                     @foreach($danhsach as $br)
                      <li><a href="{{url('thuonghieu',[$br->id])}}" title="" >{{$br->name}}</a></li>       
                     @endforeach
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Contact Us</h3>
                    <address>
                      <p>NÔNG HỒNG QUANG</p>
                      <p><span class="fa fa-phone"></span>(+84)398217477</p>
                      <p><span class="fa fa-envelope"></span>nongquang481@gmail.com</p>
                    </address>
                    <div class="aa-footer-social">
                      <a href="#"><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-twitter"></span></a>
                      <a href="#"><span class="fa fa-google-plus"></span></a>
                      <a href="#"><span class="fa fa-youtube"></span></a>
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
    <!-- footer-bottom -->
    <div style="height:50px">   
    </div>
  </footer>