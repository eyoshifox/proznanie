@extends('layouts.main')

@section('body')

<section id="item" >
    <div class="container">
        <div class="row">
            <h2 class="title" style="color: #fff">Направления - Бакалавриат</h2>
        </div>
        <div class="row d-flex justify-content-center">
           
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mt-4 mb-4">
                    
                    <div class="card ">
                       
                        <div class="priem-imgbox ratio ratio-4x3" style="height: 400px">
                            <img src="/public/img/instituts/cources/economic.jpg" alt="course img" class="img">
                        </div>
                   
                      <div class="card-body">
                        
                        <p class="card-title">38.03.01 Экономика</p>
                        <div class="row d-flex justify-content-center align-items-center">
                            <span ><b>Учебное заведение:</b><p class="card-text">ИДК</p></span>
                            <span ><b>Профильная направленность:</b><p class="card-text">Финансы и кредит</p></span>
                            <span ><b>Форма обучения:</b><p class="card-text">Очно-заочная</p></span>
                             
                            <span ><b>Стоимость обучения (в год):</b> <p class="card-text">48000 руб. </p> </span>
                            <div class="button-card" >
                                <button type="button" class="btn-course" data-bs-toggle="modal" data-bs-target="#card-modal">Посмотреть</button>
                            </div>
                            
                           
                          
                        </div>
                      </div>
                    </div>
                
                  </div>
            
           
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mt-4 mb-4">
                    
                    <div class="card ">
                       
                        <div class="priem-imgbox ratio ratio-4x3" style="height: 400px">
                            <img src="/public/img/instituts/cources/economic.jpg" alt="course img" class="img">
                        </div>
                   
                      <div class="card-body">
                        
                        <p class="card-title">38.03.01 Экономика</p>
                        <div class="row d-flex justify-content-center align-items-center">
                            <span ><b>Учебное заведение:</b><p class="card-text">ИДК</p></span>
                            <span ><b>Профильная направленность:</b><p class="card-text">Финансы и кредит</p></span>
                            <span ><b>Форма обучения:</b><p class="card-text">Очно-заочная</p></span>
                             
                            <span ><b>Стоимость обучения (в год):</b> <p class="card-text">48000 руб. </p> </span>
                            <div class="button-card" >
                                <button type="button" class="btn-course" data-bs-toggle="modal" data-bs-target="#card-modal">Посмотреть</button>
                            </div>
                            
                           
                          
                        </div>
                      </div>
                    </div>
                
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mt-4 mb-4">
                    
                    <div class="card ">
                       
                        <div class="priem-imgbox ratio ratio-4x3" style="height: 400px">
                            <img src="/public/img/instituts/cources/economic.jpg" alt="course img" class="img">
                        </div>
                   
                      <div class="card-body">
                        
                        <p class="card-title">38.03.01 Экономика</p>
                        <div class="row d-flex justify-content-center align-items-center">
                            <span ><b>Учебное заведение:</b><p class="card-text">ИДК</p></span>
                            <span ><b>Профильная направленность:</b><p class="card-text">Финансы и кредит</p></span>
                            <span ><b>Форма обучения:</b><p class="card-text">Очно-заочная</p></span>
                             
                            <span ><b>Стоимость обучения (в год):</b> <p class="card-text">48000 руб. </p> </span>
                            <div class="button-card" >
                                <button type="button" class="btn-course" data-bs-toggle="modal" data-bs-target="#card-modal">Посмотреть</button>
                            </div>
                            
                           
                          
                        </div>
                      </div>
                    </div>
                
                  </div>
        </div>
    </div>
</section>
<section id="course" style="background: #fff">
    <div class="container">
        <div class="row">
            <h2 class="title" >Направления - Магистратура</h2>
        </div>
        <div class="row d-flex justify-content-center">
           <h2> Нет направлений</h2>
              
        </div>
    </div>
</section>
<section  id="request" >
    <div class="request-overlay ">
        <div class="container">
            <div class="row">
                <h2 class="title">Заявка на поступление</h2>
            </div>
            
    <div class="row">
        <form class="question-form" name="demanded_questions" action="/contacts/" method="POST" enctype="multipart/form-data"><input type="hidden" name="bxajaxid" id="bxajaxid_915a6c8eb3e5f21156d48334ccabe263_8BACKi" value="915a6c8eb3e5f21156d48334ccabe263"><input type="hidden" name="AJAX_CALL" value="Y">
        {{-- <script type="text/javascript">
            function _processform_8BACKi(){
                if (BX('bxajaxid_915a6c8eb3e5f21156d48334ccabe263_8BACKi'))
                {
                    var obForm = BX('bxajaxid_915a6c8eb3e5f21156d48334ccabe263_8BACKi').form;
                    BX.bind(obForm, 'submit', function() {BX.ajax.submitComponentForm(this, 'comp_915a6c8eb3e5f21156d48334ccabe263', true)});
                }
                BX.removeCustomEvent('onAjaxSuccess', _processform_8BACKi);
            }
            if (BX('bxajaxid_915a6c8eb3e5f21156d48334ccabe263_8BACKi'))
                _processform_8BACKi();
            else
                BX.addCustomEvent('onAjaxSuccess', _processform_8BACKi);
            </script> --}}
            <input type="hidden" name="sessid" id="sessid" value="cdc54c59ef2c4db8de8b99fa3fd0e4d4">
            <input type="hidden" name="WEB_FORM_ID" value="3">
                    <div class="question-form__row">
                       
                                    <div class="question-form__block-right">
            
            
                            <div class="question-form__field-wrap ">
                                <div class="question-form__field
                                            ">
                                    <input type="text" id="firstname" name="form_text_9" value="">                        
                                    <label for="firstname">
                                        <span>Имя</span>
                                        <span class="question-form__field-star">*</span>
                                    </label>
                                </div>
                                <div class="question-form__field-error">
                                    Введите Имя
                                </div>
                            </div>
                            <div class="question-form__fields">
                                <div class="question-form__field-wrap ">
                                    <div class="question-form__field">
                                        <input type="text" id="phone" class="phone" name="form_text_10" value="">                            
                                        <label for="phone">
                                            <span>Телефон</span>
                                            <span class="question-form__field-star">*</span>
                                        </label>
                                    </div>
                                    <div class="question-form__field-error">
                                        Введите Телефон
                                    </div>
                                </div>
                                <div class="question-form__field-wrap ">
                                    <div class="question-form__field
                                                ">
                                        <input type="text" id="email" class="some_input" name="form_email_11" value="" size="0">                            
                                        <label for="email">
                                            <span>E-mail</span>
                                            <span class="question-form__field-star">*</span>
                                        </label>
                                    </div>
                                    <div class="question-form__field-error">
                                        Введите E-mail
                                    </div>
                                </div>
                             
                              
                            </div>
            
            
                                            <div class="question-form__btn-wrap">
                                <button class="btn btn_request question-form__btn" type="submit" name="web_form_submit" value="Отправить">Отправить</button>
                                <div class="question-form__btn-description">
                                    Нажимая на кнопку, я соглашаюсь на 
                                    <a href="/confi" target="_blank" class="question-form__link">
                                        обработку персональных данных</a>
                                                        </div>
                            </div>
                        </div>
                                
                                </div></form>
    </div>
</div>
</div>
</section> 
@include('include.footer')
@endsection