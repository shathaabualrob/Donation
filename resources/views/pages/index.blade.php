@extends('layouts.app')

@section('content')
{{-- jumbotron text-center --}}
    <div class="donate-header ">
        <h1 class="text-center">تبرع</h1>
        {{-- <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p> --}}
    </div>
    <hr>
    <div class="head-text" dir="rtl">
        <h2>ساعد حملة في حماية حرية التعبير والحقوق الرقمية الفلسطينية ارسل تبرعاتك ومساهمتك من خلال:</h2>
    </div>
    <hr>
    <div class="form-wrapper" dir="rtl">
        <form>
            <div class="section" id="section1" class="row">
              <div class="row">
                <h3 class="section-title">معلومات المتبرع</h3>
              </div>
                <div class="section1-left col-sm-6 ">
                    <h4>إختر العملة:</h4>
                    <br>
                    <div class="row">
                        <div class="col-sm-6" style=" padding:5px 0px 0px 0px;">
                            <input type="radio" id="shekel" name="donation-currency" value="shekel" >
                            <label for="shekel">الشيكل (₪)</label><br>
                        </div>
                        <div class="col-sm-6" style=" padding:5px 0px 0px 0px;">
                            <input type="radio" id="dollar" name="donation-currency" value="dollar" checked>
                            <label for="dollar">الدولار الامريكي ($)</label><br>    
                        </div>
                    </div>
                </div>{{-- section1-left --}}
                <div class="section1-right col-sm-6">
                    <h4 >إختر نوع التبرع:</h4>
                    <br>
                    <div class="row">
                        <div class="col-sm-4" dir="ltr">
                            <select class="form-control input-lg" id="month" name="month" size="1" multiple >
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>                            
                        </div>
                        <div class="col-sm-4 " style=" padding:5px 60px 0px 0px;">
                            <input style="color: teal;" type="radio" id="monthly" name="donation-type" value="monthly">
                            <label for="monthly">شهري</label>
                        </div>
                        <div class="col-sm-4  " style=" padding:5px 0px 0px 0px;">
                            <input type="radio" id="once" name="donation-type" value="once" checked>
                            <label for="once">مرة واحدة</label><br>
                        </div>
                    </div>
                    <br>
                    <h4 style="margin-top: 30px;" >إختر مبلغ التبرع:</h4>
                    <br>
                    <div class="row choose-val  ">
                        <input type="button" value="100$">
                        <input type="button" value="150$">
                        <input type="button" value="200$">
                        <input type="button" value="250$">
                        <input type="button" value="300$">
                    </div>
                    <div class="row chosen-val">
                        <input class="form-control input-lg" type="text" placeholder="400$">
                    </div>
                </div>{{-- section1-right --}}
              </div>{{-- section1 --}}  
            <div class="section" id="section2" class="row">
              <h3 class="section-title">المعلومات الشخصية</h3>
                <div class="row"> 
               
                    
                  
                    {{-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! --}}
                    {{-- الخيار التاني لازم يكون معتمد عالاول يعني يظهر المدن الموجودةبالبلداللي اختارها --}}
                    <div class="form-group col-md-6">
                        <label for="state">البلد</label>
                        <select id="state" class="form-control input-lg">
                          <option value="Jordan" selected>الاردن</option>
                          <option value="Saudi Arabia" >المملكةالعربيةالسعودية</option>
                          <option value="Palestine" >فلسطين</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="name">الاسم</label>
                      <input  type="name" class="form-control input-lg" id="name" placeholder="الاسم الكامل">
                    </div>
                    <div class="form-group ">
                      <div class="form-group col-md-6">
                        <label for="address">العنوان</label>
                        <input type="text" class="form-control input-lg" id="address" placeholder="عمان - ش. الاردن - عمارة 76">
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="city">المدينة</label>
                      <select class="form-control input-lg" id="city" >
                        <option value="Jordan" selected>الزرقاء</option>
                        <option value="Saudi Arabia" >عمان</option>
                        <option value="Palestine" >جرش</option>
                      </select>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="phone">رقم الهاتف</label>
                        <input class="form-control input-lg" type="tel" value="+976 999 999 99 99" id="phone">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="email">البريد الالكتروني</label>
                        <input class="form-control input-lg" type="email" class="form-control" id="email" placeholder="user@gmail.com">
                      </div>
                    </div>
                </div>
            </div>{{-- section2 --}}
            <div class="section" id="section3" class="row">
              <div class="row">
                <h3 class="section-title">معلومات الدفع</h3>
              </div>
              <div class="row" >
                <div class="col-sm-6" style="margin-left:140px;" ></div>
                <div class="col-sm-2" style=" padding:5px 0px 0px 0px;">
                  <input  type="radio" id="paypal" name="pay-type" value="paypal" >
                  <label for="paypal">PayPal <i class="fa fa-paypal"></i></label><br>    
              </div>
                <div class="col-sm-2" style="padding:5px 0px 0px 0px;">
                    <input  type="radio" id="creditcard" name="pay-type" value="creditcard" checked>
                    <label for="creditcard">بطاقة الاعتماد <i class="fa fa-credit-card"></i></label><br>
                </div>
              </div>
              <div class="row" style="padding: 50px">
                <form >
                  <div class=" form-group col-sm-6">
                    <label for="ccnumber">رقم البطاقة</label>
                    <input class="form-control input-lg" id="ccnumber" type="text" placeholder="123 456 665 909 009" autocomplete="email">
                        {{-- <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="mdi mdi-credit-card"></i>
                            </span>
                        </div> --}}
                  </div>
                  <div class="col-sm-6 form-group">
                    <label for="chname">اسم حامل البطاقة</label>
                    <input class="form-control input-lg" id="chname" type="text" placeholder="CARD HOLDER NAME">
                  </div>
                  <div class="col-sm-6 form-group">
                    <label for="cvc">CVC</label>
                    <input class="form-control input-lg" id="cvc" type="text" placeholder="874">
                  </div>
                  <div class="col-md-6 form-group">
                    <label for="cc-exp" >تاريخ الانتهاء</label> 
                    <input id="cc-exp" type="tel" class="input-lg form-control cc-exp" autocomplete="cc-exp" placeholder="23/21" required>
                  </div>
                  <div class="col-md-6 form-group">
                    <button type="submit" class="form1 btn btn-primary">تم</button>
                  </div>
                </form>
              </div>  
            </div>{{-- section3 --}}
            <div class="col-md-2 form-group">
              <button type="submit" class="form2 btn btn-primary">تبرع</button>
            </div>
          </form>
    </div> {{-- form-wrapper --}}   
@endsection