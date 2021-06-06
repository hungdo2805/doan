@extends('home_pages.layout.index')


@section('home_pages')

<div class="breadcrumbs_area other_bread">
    <div class="container">   
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">Trang chủ</a></li>
                        <li>/</li>
                        <li>Liên hệ</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>         
</div>
<div class="contact_area">
    <div class="container">   
        <div class="row">
            <div class="col-lg-6 col-md-12">
               <div class="contact_message content">
                    <h3>Liên hệ với chúng tôi</h3>    
                     <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas human. qui sequitur mutationem consuetudium lectorum. Mirum est notare quam</p>
                    <ul>
                        <li><i class="fa fa-fax"></i>  Address : No 40 Baria Sreet 133/2 NewYork City</li>
                        <li><i class="fa fa-phone"></i> <a href="#">Infor@roadthemes.com</a></li>
                        <li><i class="fa fa-envelope-o"></i> 0(1234) 567 890</li>
                    </ul>             
                </div> 
            </div>
            <div class="col-lg-6 col-md-12">
               <div class="contact_message form">
                    <h3>Mong muốn của bạn</h3>   
                    <form id="contact-form" method="POST" action="assets/mail.php">
                        <p>  
                           <label>Tên của bạn (bắt buộc)</label>
                            <input name="name" placeholder="Tên *" type="text"> 
                        </p>
                        <p>       
                           <label>Email của bạn(bắt buộc)</label>
                            <input name="email" placeholder="Email *" type="email">
                        </p>
                        <p>          
                           <label>Nội dung</label>
                            <input name="subject" placeholder="Nội dung *" type="text">
                        </p>    
                        <div class="contact_textarea">
                            <label>Tin nhắn</label>
                            <textarea placeholder="Tin nhắn *" name="message" class="form-control2"></textarea>     
                        </div>   
                        <button type="submit">Gửi thông tin</button>  
                        <p class="form-messege"></p>
                    </form> 

                </div> 
            </div>
        </div>
    </div>    
</div>
@endsection