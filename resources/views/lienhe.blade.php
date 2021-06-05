@extends('master/masterpage1')
@section('Home')
<style type="text/css" media="screen">
div.icon img{
        width: 94%;
}
p{
    margin-top: 0;
    margin-bottom: 1rem;
}
.card-body {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
}
.text-white {
    color: #fff!important;
}
.text-uppercase {
    text-transform: uppercase!important;
}
.bg-success {
    background-color: #28a745!important;
}
.card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: rgba(0,0,0,.03);
    border-bottom: 1px solid rgba(0,0,0,.125);
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}
.bg-light {
    background-color: #f8f9fa!important;
}
.card {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
}
.btn:not(:disabled):not(.disabled) {
    cursor: pointer;
}
.text-right {
    text-align: right!important;
}
.btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}
.text-muted {
    color: #6c757d!important;
}
.form-text {
    display: block;
    margin-top: .25rem;
}
.small, small {
    font-size: 80%;
    font-weight: 400;
}
.text-white {
    color: #fff!important;
}
.bg-primary {
    background-color: #007bff!important;
}
.form-group {
    margin-bottom: 1rem;
}
label {
    display: inline-block;
    margin-bottom: .5rem;
}
.form-control {
    display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.card-body {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
}
.col{
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
}
.card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: rgba(0,0,0,.03);
    border-bottom: 1px solid rgba(0,0,0,.125);
}
.row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
    }
.card {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
    }
.card-header:first-child {
    border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
    }
.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    }
/*  */
.tieude{
    text-align: center;
    margin-bottom: 50px;
    font-size: 34px;
    font-family: sans-serif;
    font-weight: 700;
    }
.bg-primary {
    background-color: #10101057 !important;
    }
.card-header.bg-success.text-white.text-uppercase {
    background: #10101057 !important;
    }
button.btn.btn-primary.text-right {
    background: #101010;
    border-color: #101010;

    }
</style>
<!--  -->

<div class="container" style="margin-top: 100px;margin-bottom: 100px;">
     <h2 class="tieude">Liên hệ</h2>
    <div class="row">

        <div class="col">
            <div class="card">
                <div class="card-header bg-primary text-white"><i class="fa fa-envelope"></i>Liên hệ
                </div>
                <div class="card-body">
                    @if(Auth::check())
                    <form method="post">
                       
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="form-group">
                            <label for="name">Tên</label>
                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" placeholder="Nhập tên" required="true" value="{{Auth::user()->name}}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" required="" name="email" value="{{Auth::user()->email}}">
                            <small id="emailHelp" class="form-text text-muted">Chúng tôi đảm bảo sẽ không tiết lộ email của bạn.</small>
                        </div>
                        <div class="form-group">
                            <label for="message">Nội dung</label>
                            <textarea class="form-control" id="message" rows="6" name="noidung" required=""></textarea>
                        </div>
                        <div class="mx-auto">
                        <button type="submit" class="btn btn-primary text-right">Submit</button></div>
                    </form>
                     @endif
                     <form method="post">
                       
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="form-group">
                            <label for="name">Tên</label>
                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" placeholder="Nhập tên" required="true" value="">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" required="" name="email" value="">
                            <small id="emailHelp" class="form-text text-muted">Chúng tôi đảm bảo sẽ không tiết lộ email của bạn.</small>
                        </div>
                        <div class="form-group">
                            <label for="message">Nội dung</label>
                            <textarea class="form-control" id="message" rows="6" name="noidung" required=""></textarea>
                        </div>
                        <div class="mx-auto">
                        <button type="submit" class="btn btn-primary text-right">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-home"></i> Địa chỉ</div>
                <div class="card-body">
                    <p>Nông Hồng Quang</p>
                    <p>Trường ĐH CNTT&TT Thái Nguyên</p>
                    <p>TP.Thái Nguyên</p>
                    <p>Số TK(Viettinbank): 9704158204005918</p>
                    <p>Email :nongquang481@gmail.com</p>
                    <p>Phone:(+84)098217477</p>

                </div>

            </div>
        </div>
    </div>
</div>

@endsection