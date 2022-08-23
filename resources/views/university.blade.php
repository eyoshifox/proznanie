@extends('layouts.main')

@section('body')
<section id="university">
    <div class="container">
        <div class="row justify-content-center align-items-center p-2">
        	<div class="col-xxl-5 text-center">
        	    <div class="card-instituts-img ratio ratio-16x9" style="box-shadow: -2px 21px 8px 0px rgba(34, 60, 80, 0.2); ">
                    <svg style="width: 100%;height: 100%; padding: 20px;" viewBox="0 0 279 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M102.7 29V15.5V2H111.4H120.1V8.79999V15.6L124.9 8.79999L129.7 2H138.4H147.1V15.5V29H138.5H129.9V22.2V15.4L125 22.2L120.1 29H111.5H102.7Z" fill="#2B2B2B"/>
                        <path d="M61.3 11.7V7V2.10001H79.9H98.5V7V11.9H93.5H88.5V20.5V29.1H79.9H71.3V20.4V11.8H66.3H61.3V11.7Z" fill="#2B2B2B"/>
                        <path d="M0.100006 29V15.4V2H11.5H22.9L25.9 7.60001C27.5 10.7 28.9 13.2 28.9 13.2C28.9 13.2 30.4 10.7 32.1 7.60001L35.3 2H46.3H57.3V15.4V28.8H48.7H40.1V22.1C40.1 15.7 40.1 15.4 39.9 15.7C39.8 15.8 38.1 18.8 36.1 22.4L32.5 28.8H28.3H24.1L20.4 22.1L16.7 15.4V22.1V28.8H8.39999H0.100006V29V29Z" fill="#2B2B2B"/>
                        <path d="M157.4 2.10001H160L162.1 5.79999L164.2 2.10001H166.8V8H165V3.89999L162.7 8H161.7L159.4 3.89999V8H157.6V2.10001H157.4Z" fill="#2B2B2B"/>
                        <path d="M171.8 1.89999C175.5 1.89999 176 3.79999 176 4.79999V5C176 6 175.6 8 171.8 8H171.5C167.7 8 167.3 6.1 167.3 5V4.79999C167.3 3.69999 167.7 1.89999 171.5 1.89999H171.8ZM174 4.89999C174 4.19999 173.6 3.29999 171.6 3.29999C169.6 3.29999 169.2 4.19999 169.2 4.89999V5C169.2 5.7 169.6 6.60001 171.6 6.60001C173.6 6.60001 174 5.7 174 5V4.89999Z" fill="#2B2B2B"/>
                        <path d="M180.2 8.10001C176.8 8.10001 176.2 6.20001 176.2 5.10001V4.89999C176.2 3.79999 176.7 2 180.2 2H180.5C183.9 2 184.5 3.59999 184.5 4.29999V4.39999H182.5C182.5 4.19999 182.2 3.39999 180.3 3.39999C178.5 3.39999 178.1 4.19999 178.1 4.89999V5C178.1 5.7 178.6 6.60001 180.3 6.60001C182.2 6.60001 182.4 5.7 182.5 5.5H184.5V5.60001C184.5 6.40001 183.9 8 180.5 8H180.2V8.10001Z" fill="#2B2B2B"/>
                        <path d="M186.9 5.20001V8H185V2.10001H186.9V4.60001L189.9 2.10001H192.3L188.9 4.79999L192.5 8H190.1L186.9 5.20001Z" fill="#2B2B2B"/>
                        <path d="M196.3 1.89999C200 1.89999 200.5 3.79999 200.5 4.79999V5C200.5 6 200.1 8 196.3 8H196C192.2 8 191.8 6.1 191.8 5V4.79999C191.8 3.69999 192.2 1.89999 196 1.89999H196.3ZM198.5 4.89999C198.5 4.19999 198.1 3.29999 196.1 3.29999C194.1 3.29999 193.7 4.19999 193.7 4.89999V5C193.7 5.7 194.1 6.60001 196.1 6.60001C198.1 6.60001 198.5 5.7 198.5 5V4.89999Z" fill="#2B2B2B"/>
                        <path d="M201 2.10001H206.1C207.8 2.10001 208.3 2.8 208.3 3.5V3.60001C208.3 4.40001 207.6 4.69999 207.4 4.79999C207.8 4.89999 208.7 5.19999 208.7 6.29999V6.39999C208.7 7.29999 208.2 8.10001 206.2 8.10001H201V2.10001ZM202.8 3.29999V4.29999H205.7C206.2 4.29999 206.3 4.09999 206.3 3.79999C206.3 3.59999 206.2 3.29999 205.7 3.29999H202.8ZM202.8 5.5V6.70001H205.9C206.5 6.70001 206.6 6.40001 206.6 6.10001C206.6 5.80001 206.5 5.5 205.9 5.5H202.8V5.5Z" fill="#2B2B2B"/>
                        <path d="M212.8 8.10001C209.4 8.10001 208.8 6.20001 208.8 5.10001V4.89999C208.8 3.79999 209.3 2 212.8 2H213.1C216.5 2 217.1 3.59999 217.1 4.29999V4.39999H215.1C215.1 4.19999 214.8 3.39999 212.9 3.39999C211.1 3.39999 210.7 4.19999 210.7 4.89999V5C210.7 5.7 211.2 6.60001 212.9 6.60001C214.8 6.60001 215 5.7 215.1 5.5H217.1V5.60001C217.1 6.40001 216.5 8 213.1 8H212.8V8.10001Z" fill="#2B2B2B"/>
                        <path d="M219.5 5.20001V8H217.6V2.10001H219.5V4.60001L222.5 2.10001H224.9L221.5 4.79999L225.1 8H222.7L219.5 5.20001Z" fill="#2B2B2B"/>
                        <path d="M231.1 4.10001L227.1 8H225.2V2.10001H227.1V6L231.1 2.10001H233V8H231.1V4.10001Z" fill="#2B2B2B"/>
                        <path d="M239.6 4.10001L235.6 8H233.7V2.10001H235.6V6L239.6 2.10001H241.5V8H239.6V4.10001ZM237.5 1.70001C236.1 1.70001 235.8 0.799994 235.8 0.399994H237.2C237.2 0.499994 237.3 0.799988 237.7 0.799988C238.1 0.799988 238.2 0.499994 238.2 0.399994H239.5C239.5 0.799994 239.1 1.70001 237.8 1.70001H237.5Z" fill="#2B2B2B"/>
                        <path d="M159.7 14H157.1V12.6H164.1V14H161.5V18.5H159.6V14H159.7Z" fill="#2B2B2B"/>
                        <path d="M171.2 12.6V14H166.8V14.9H171.1V16.3H166.8V17.3H171.3V18.7H165V12.8H171.2V12.6Z" fill="#2B2B2B"/>
                        <path d="M171.5 18.5L174.5 15.5L171.6 12.6H174.1L175.8 14.3L177.5 12.6H179.8L176.9 15.5L179.8 18.5H177.5L175.7 16.7L173.9 18.5H171.5Z" fill="#2B2B2B"/>
                        <path d="M180.2 12.6H182.1V14.8H186.1V12.6H188V18.5H186.1V16.2H182.1V18.5H180.2V12.6Z" fill="#2B2B2B"/>
                        <path d="M193.3 12.4C197 12.4 197.5 14.3 197.5 15.3V15.5C197.5 16.5 197.1 18.5 193.3 18.5H193C189.2 18.5 188.8 16.6 188.8 15.5V15.3C188.8 14.2 189.2 12.4 193 12.4H193.3ZM195.5 15.4C195.5 14.7 195.1 13.8 193.1 13.8C191.1 13.8 190.7 14.7 190.7 15.4V15.5C190.7 16.2 191.1 17.1 193.1 17.1C195.1 17.1 195.5 16.2 195.5 15.5V15.4Z" fill="#2B2B2B"/>
                        <path d="M203.1 13.9H200.3C200.3 16.8 200.1 17.3 199.8 17.8C199.5 18.3 199.1 18.5 198.1 18.5H197.6V17H197.7C198 17 198.2 17 198.3 16.8C198.5 16.5 198.6 15.7 198.6 12.5H205V18.4H203.1V13.9V13.9Z" fill="#2B2B2B"/>
                        <path d="M210.2 12.4C213.9 12.4 214.4 14.3 214.4 15.3V15.5C214.4 16.5 214 18.5 210.2 18.5H209.9C206.1 18.5 205.7 16.6 205.7 15.5V15.3C205.7 14.2 206.1 12.4 209.9 12.4H210.2ZM212.4 15.4C212.4 14.7 212 13.8 210 13.8C208 13.8 207.6 14.7 207.6 15.4V15.5C207.6 16.2 208 17.1 210 17.1C212 17.1 212.4 16.2 212.4 15.5V15.4Z" fill="#2B2B2B"/>
                        <path d="M215.1 12.6H221.1V14H217V18.5H215.1V12.6Z" fill="#2B2B2B"/>
                        <path d="M227.7 14.6L223.7 18.5H221.8V12.6H223.7V16.5L227.7 12.6H229.6V18.5H227.7V14.6Z" fill="#2B2B2B"/>
                        <path d="M235.1 16.5C234.6 16.6 234.1 16.7 233.3 16.7C231.3 16.7 230.2 16.2 230.2 14.6V12.6H232.1V14.1C232.1 15 232.7 15.2 233.8 15.2C234.2 15.2 234.7 15.2 235.2 15.1V12.6H237.1V18.5H235.2V16.5H235.1Z" fill="#2B2B2B"/>
                        <path d="M244.2 12.6V14H239.8V14.9H244.1V16.3H239.8V17.3H244.3V18.7H238V12.8H244.2V12.6Z" fill="#2B2B2B"/>
                        <path d="M248.9 18.6C245.5 18.6 244.9 16.7 244.9 15.6V15.4C244.9 14.3 245.4 12.5 248.9 12.5H249.2C252.6 12.5 253.2 14.1 253.2 14.8V14.9H251.2C251.2 14.7 250.9 13.9 249 13.9C247.2 13.9 246.8 14.7 246.8 15.4V15.5C246.8 16.2 247.3 17.1 249 17.1C250.9 17.1 251.1 16.2 251.2 16H253.2V16.1C253.2 16.9 252.6 18.5 249.2 18.5H248.9V18.6Z" fill="#2B2B2B"/>
                        <path d="M255.8 15.7V18.5H253.9V12.6H255.8V15.1L258.8 12.6H261.2L257.8 15.3L261.4 18.5H259L255.8 15.7Z" fill="#2B2B2B"/>
                        <path d="M267.5 14.6L263.5 18.5H261.6V12.6H263.5V16.5L267.5 12.6H269.4V18.5H267.5V14.6Z" fill="#2B2B2B"/>
                        <path d="M276.2 14.6L272.2 18.5H270.3V12.6H272.2V16.5L276.2 12.6H278.1V18.5H276.2V14.6ZM274.2 12.2C272.8 12.2 272.5 11.3 272.5 10.9H273.9C273.9 11 274 11.3 274.4 11.3C274.8 11.3 274.9 11 274.9 10.9H276.2C276.2 11.3 275.8 12.2 274.5 12.2H274.2Z" fill="#2B2B2B"/>
                        <path d="M163.2 25.1L159.2 29H157.3V23.1H159.2V27L163.2 23.1H165.1V29H163.2V25.1Z" fill="#2B2B2B"/>
                        <path d="M166 23.1H167.9V25.3H171.9V23.1H173.8V29H171.9V26.7H167.9V29H166V23.1Z" fill="#2B2B2B"/>
                        <path d="M178.5 29.1C175.1 29.1 174.5 27.2 174.5 26.1V25.9C174.5 24.8 175 23 178.5 23H178.8C182.2 23 182.8 24.6 182.8 25.3V25.4H180.8C180.8 25.2 180.5 24.4 178.6 24.4C176.8 24.4 176.4 25.2 176.4 25.9V26C176.4 26.7 176.9 27.6 178.6 27.6C180.5 27.6 180.7 26.7 180.8 26.5H182.8V26.6C182.8 27.4 182.2 29 178.8 29H178.5V29.1Z" fill="#2B2B2B"/>
                        <path d="M185.7 24.5H183.1V23.1H190.1V24.5H187.5V29H185.6V24.5H185.7Z" fill="#2B2B2B"/>
                        <path d="M196.8 25.1L192.8 29H190.9V23.1H192.8V27L196.8 23.1H198.7V29H196.8V25.1Z" fill="#2B2B2B"/>
                        <path d="M202 24.5H199.4V23.1H206.4V24.5H203.8V29H202V24.5Z" fill="#2B2B2B"/>
                        <path d="M211.3 27.6C210.7 28.6 210.5 29 209.3 29H208.1V27.6H209.1C209.3 27.6 209.3 27.5 209.3 27.5C209.3 27.4 209.2 27.3 209.2 27.2L206.4 23.1H208.6L210.4 26L212.1 23.1H214L211.3 27.6Z" fill="#2B2B2B"/>
                        <path d="M216.8 24.5H214.2V23.1H221.2V24.5H218.6V29H216.7V24.5H216.8Z" fill="#2B2B2B"/>
                        </svg>
                    </div>
        	</div>
        	<div class="col-xxl-7">
				<h2 class="title-univers">Московский технологический институт</h2>
				<ul class=" mb-4">
                    <li>МТИ - динамично развивающийся ВУЗ столицы, который имеет бессрочную лицензию на осуществление образовательной деятельности.
</li><li>Институт объединил фундаментальную теоретическую подготовку с новейшими практическими знаниями, приблизив формат обучения по самым актуальным направлениям к лучшим европейским образцам. </li>
<li>На текущий момент в МТИ работают преподаватели высокого уровня в области общепрофессиональных и специальных дисциплин. 76% преподавательского состава имеют учёную степень и богатый опыт практической деятельности в соответствующей профессиональной сфере, более 15% имеют учёную степень доктора наук.</li>
<li>Помимо диплома государственного образца, студенты получают к нему Международное приложение – документ, который официально подтверждает полученное в России высшее образование для учебных заведений и работодателей в Европе, США, Азии и других странах мира.</li>                </ul>
              
                	<a class="document-link" href="https://mti.edu.ru/assets/File/svedeniya-ob-obrazovatelnoj-organizaczii/reestrovaya-vyipiska.pdf" target="_blank">Лицензия на осуществление образовательной деятельности ОАНО "МОИ"(с приложениями)</a>
               
                
        	</div>
        </div>
    </div>
</section>
<section id="course">
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
                        <span ><b>Профильная направленность:</b><p class="card-text">Финансы и кредит</p></span>
                        
                        <span ><b>Форма обучения:</b><p class="card-text">Очно-заочная</p></span>
                        <span ><b>Стоимость обучения (в год):</b> <p class="card-text">48000 руб. </p> </span>
                        <div class="button-card" >
                            <a href="/course" type="button" class="btn-course">Посмотреть</a>
                        </div>
                       
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mt-4 mb-4">
                <div class="card">
                    <div class="priem-imgbox ratio ratio-4x3" style="height: 400px">
                        <img src="/public/img/instituts/cources/economic.jpg" alt="course img" class="img">
                    </div>
      
                  <div class="card-body">
                    <p class="card-title">38.03.01 Экономика</p>
                    <div class="row d-flex justify-content-center align-items-center">
                        <span ><b>Профильная направленность:</b><p class="card-text">Финансы и кредит</p></span>
                        
                        <span ><b>Форма обучения:</b><p class="card-text">Очно-заочная</p></span>
                        <span ><b>Стоимость обучения (в год):</b> <p class="card-text">48000 руб. </p> </span>
                        <div class="button-card" >
                            <a href="/course" type="button" class="btn-course">Посмотреть</a>
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
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mt-4 mb-4">
                <div class="card">
                    <div class="priem-imgbox ratio ratio-4x3" style="height: 400px">
                        <img src="/public/img/instituts/cources/economic.jpg" alt="course img" class="img">
                    </div>
      
                  <div class="card-body">
                    <p class="card-title">38.03.01 Экономика</p>
                    <div class="row d-flex justify-content-center align-items-center">
                        <span ><b>Профильная направленность:</b><p class="card-text">Финансы и кредит</p></span>
                        
                        <span ><b>Форма обучения:</b><p class="card-text">Очно-заочная</p></span>
                        <span ><b>Стоимость обучения (в год):</b> <p class="card-text">48000 руб. </p> </span>
                        <div class="button-card" >
                            <a href="/course" type="button" class="btn-course">Посмотреть</a>
                        </div>
                       
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mt-4 mb-4">
                <div class="card">
                    <div class="priem-imgbox ratio ratio-4x3" style="height: 400px">
                        <img src="/public/img/instituts/cources/economic.jpg" alt="course img" class="img">
                    </div>
      
                  <div class="card-body">
                    <p class="card-title">38.03.01 Экономика</p>
                    <div class="row d-flex justify-content-center align-items-center">
                        <span ><b>Профильная направленность:</b><p class="card-text">Финансы и кредит</p></span>
                        
                        <span ><b>Форма обучения:</b><p class="card-text">Очно-заочная</p></span>
                        <span ><b>Стоимость обучения (в год):</b> <p class="card-text">48000 руб. </p> </span>
                        <div class="button-card" >
                            <a href="/course" type="button" class="btn-course">Посмотреть</a>
                        </div>
                       
                      
                    </div>
                  </div>
                </div>
              </div>
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