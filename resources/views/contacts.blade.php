@extends('layouts.main')
@section('title')
Контакты
@endsection
@section('body')
<section id="contacts">
    <div class="container">
        <div class="row">
            <h2 class="title"> Контакты</h2>
        </div>
        <div class="row d-flex ">
            <div class="col-md-6">
                <div class="contacts-title">
                    Наши подразделения в городах РФ:
                </div>
                <div class="contacts-office">
                    <div class="contacts-suptitle"><b> г. Альметьевск (Республика Татарстан)</b> </div>
                    <div class="contacts-suptitle"><img src="/public/img/icons/telephone.png" width="25" height="25" alt=""> <a href="tel:+79172265487">+7 (917) 22-65-487</a> </div>
                    
                </div>
                <div class="contacts-office">
                    <div class="contacts-suptitle"><b>г. Белорецк</b> </div>
                    <div class="contacts-suptitle"><img src="/public/img/icons/telephone.png" width="25" height="25" alt=""><a href="tel:+79273093134">+7 (927) 30-93-134,</a> <a href="tel:+79373141150">+7 (937) 31-41-150</a>   </div>
                    <div class="contacts-suptitle"><img src="/public/img/icons/location.png" width="25" height="25" alt=""> г. Белорецк, ул. Кирова, 60</div>
                    <div class="contacts-suptitle"><img src="/public/img/icons/time.png" width="25" height="25" alt=""> Пн-Пт: 09:00 - 18:00</div>
                </div>
                <div class="contacts-office">
                    <div class="contacts-suptitle"><b> г. Гай</b> </div>
                    <div class="contacts-suptitle"><img src="/public/img/icons/telephone.png" width="25" height="25" alt=""> <a href="tel:+79033978594">+7 (903) 39-78-594</a> </div>
                    <div class="contacts-suptitle"><img src="/public/img/icons/location.png" width="25" height="25" alt=""> г. Гай, ул. Ленина, 56</div>
                </div>
                <div class="contacts-office">
                    <div class="contacts-suptitle"><b> г. Мелеуз</b> </div>
                    <div class="contacts-suptitle"><img src="/public/img/icons/telephone.png" width="25" height="25" alt=""><a href="tel:+79373140500">+7 (937) 31-40-500,</a> <a href="tel:+79610474276">+7 (961) 04-74-276</a> </div>
                    <div class="contacts-suptitle"><img src="/public/img/icons/location.png" width="25" height="25" alt=""> г. Мелеуз, ул. Смоленская, д. 31</div>
                    <div class="contacts-suptitle"><img src="/public/img/icons/post.png" width="25" height="25" alt=""> meleuzcpot@gmail.com</div>
                    <div class="contacts-suptitle"><img src="/public/img/icons/time.png" width="25" height="25" alt=""> Пн-Пт: 09:00 - 18:00</div>
                </div>
                <div class="contacts-office">
                    <div class="contacts-suptitle"><b> с. Октябрьское</b> </div>
                    <div class="contacts-suptitle"><img src="/public/img/icons/telephone.png" width="25" height="25" alt=""><a href="tel:+79619067738">+7 (961) 90-67-738</a>  </div>
                    <div class="contacts-suptitle"><img src="/public/img/icons/location.png" width="25" height="25" alt=""> с. Октябрьское, ул. Лесная, 2А</div>
                    <div class="contacts-suptitle"><img src="/public/img/icons/time.png" width="25" height="25" alt=""> Пн-Пт: 09:00 - 18:00</div>
                </div>
                <div class="contacts-office">
                    <div class="contacts-suptitle"><b> г. Салават</b> </div>
                    <div class="contacts-suptitle"><img src="/public/img/icons/telephone.png" width="25" height="25" alt=""><a href="tel:+79373140460">+7 (937) 31-40-460,</a> <a href="tel:+79373140535">+7 (937) 31-40-535</a>  </div>
                    <div class="contacts-suptitle"><img src="/public/img/icons/location.png" width="25" height="25" alt=""> г. Салават, ул. Островского, 11</div>
                    <div class="contacts-suptitle"><img src="/public/img/icons/time.png" width="25" height="25" alt=""> Пн-Пт: 09:00 - 18:00</div>
                </div>
                <div class="contacts-office">
                    <div class="contacts-suptitle"><b>г. Санкт-Петербург</b> </div>
                    <div class="contacts-suptitle"><img src="/public/img/icons/telephone.png" width="25" height="25" alt=""> <a href="tel:+79870371299">+7 (987) 03-71-299</a> </div>
                </div>
                <div class="contacts-office">
                    <div class="contacts-suptitle"><b> г. Стерлитамак</b> </div>
                    <div class="contacts-suptitle"><img src="/public/img/icons/telephone.png" width="25" height="25" alt=""> <a href="tel:79273397121">+7 (927) 33-97-121</a> </div>
                    
                </div>
                <div class="contacts-office">
                    <div class="contacts-suptitle"><b>г. Томск (Томская область)</b> </div>
                    <div class="contacts-suptitle"><img src="/public/img/icons/telephone.png" width="25" height="25" alt=""><a href="tel:+79539137120"> +7 (953) 91-37-120</a></div>
                    <div class="contacts-suptitle"><img src="/public/img/icons/location.png" width="25" height="25" alt=""> г. Томск, пр. Кирова, 58</div>
                </div>
                
                
               
                
               
                
               
               
               </div>
       <div class="col-md-6">
        <div class="contacts-title">
            Главный офис г.Уфа
        </div>
        <div class="contacts-suptitle"><img src="/public/img/icons/telephone.png" width="25" height="25" alt=""><b>Телефон (доступен WhatsApp):</b>&nbsp;<a href="tel:+79373678727">+7 (937) 36-78-727</a> </div>
        <div class="contacts-suptitle"><img src="/public/img/icons/post.png" width="25" height="25" alt=""><b>Почта:</b>&nbsp;@proznanierf.ru </div>
        <div class="contacts-suptitle"><img src="/public/img/icons/location.png" width="25" height="25" alt=""><b>Адрес:</b>&nbsp; ул. Кирова, 105</div>
        <div class="contacts-suptitle"><img src="/public/img/icons/time.png" width="25" height="25" alt=""><b>Время работы:</b>&nbsp; Пн-Пт: 09:00 - 18:00</div>
        <div class="map" id="map">
            
        </div>
       </div>
       
        </div>
    </div>
</section>
@include('include.footer')
@endsection