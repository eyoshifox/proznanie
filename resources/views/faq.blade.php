@extends('layouts.main')
@section('title')
Вопросы-ответы
@endsection
@section('body')
<section id="faq">
    <div class="container">
        <div class="row">
            <h2 class="title"> Вопросы-ответы</h2>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="accordion-block">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            Как мне выбрать программу или ВУЗ, если я сам не очень знаю чего хочу?
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            Для этого и создана Единая Приемная комиссия, чтобы помочь вам разобраться. Для этого мы проводим тестирование и определяем ваши склонности к тому или иному виду деятельности, проводим беседу и выясняем ваши ожидания от полученной специальности или квалификации. На основе этих и других параметров определяем подходящую для вас образовательную программу. 
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            Когда начинается обучение по очно-заочной форме?
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body">
                            Стандартно обучение по очно-заочной форме в вузах начинается с 1 октября. 
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            Что такое дистанционное обучение?
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body">
                            Дистанционные образовательные технологии — это технологии обучения, реализуемые в основном с применением информационно-телекоммуникационных сетей при опосредованном (на расстоянии) взаимодействии обучающихся и педагогических работников. Дистанционные технологии могут применяться при различных формах обучения: очной, заочной и очно-заочной (вечерней). 
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            В чем отличие заочной от очно-заочной формы обучения?
                          </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                          <div class="accordion-body">
                            В отличие от заочного обучения, когда студенты в среднем дважды в год приезжают на сессию, сдают зачеты и экзамены, защищают курсовые, занятия очно-заочной формы проходят регулярно, но в вечернее время или выходные дни. Если вы учитесь заочно или очно-заочно с применением дистанционных технологий, различия минимальны, поскольку сам процесс обучения зависит в основном от вас — как и когда знакомиться с материалом и слушать вебинары в цифровом формате. 
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            На сколько будет повышаться стоимость обучения?
                          </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
                          <div class="accordion-body">
                            Согласно Федеральному закону об образовании, стоимость платных образовательных услуг может повышаться только в рамках официально установленной инфляции в Российской Федерации за соответствующий период. Образовательные организации, как правило, четко следуют этой норме. Например, в 2020 г. инфляция составила 4,91%. 
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            В чем отличие бакалавриата от специалитета? И почему в некоторых ВУЗах есть специалитет, а в других нет?
                          </button>
                        </h2>
                        <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSix">
                          <div class="accordion-body">
                            С точки зрения законодательства — это разные уровни высшего образования. И бакалавриат и магистратура — высшее образование. На большинство должностей, где необходимо высшее образование, достаточно иметь диплом бакалавра. Но некоторые должности предполагают диплом магистра. Система бакалавриат-магистратура принята в большинстве стран мира и называется «Болонской системой» к которой Россия присоединилась в 2003 году. Специалитет также остался на ряде направлений подготовки (как правило, инженерных). Есть в ВУЗе специалитет или нет, зависит от образовательной программы, на которую ВУЗ получил лицензию . 
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            Какие документы нужны для поступления в ВУЗ? Какова стоимость обучения?
                            В каждом ВУЗе мог
                          </button>
                        </h2>
                        <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSeven">
                          <div class="accordion-body">
                            В каждом ВУЗе могут быть свои особенности в зависимости от выбранной образовательной программы. То же самое касается стоимости обучения. Для этого и создана Единая Приемная комиссия, чтобы в каждом отдельном случае помочь выяснить эти вопросы. 
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingEight">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            Как поступить в ВУЗ по диплому СПО?
                          </button>
                        </h2>
                        <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingEight">
                          <div class="accordion-body">
                            Прием в ВУЗ на основе среднего профессионального образования осуществляется по внутренним вступительным испытаниям, проводимым вузом самостоятельно, т.е. необходимости в ЕГЭ в данном случае нет. 
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingNine">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseNine" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            А чем отличаются факультеты организаций ИДК и МФЮА ?
                          </button>
                        </h2>
                        <div id="panelsStayOpen-collapseNine" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingNine">
                          <div class="accordion-body">
                            Каждый ВУЗ в организации своей деятельности имеет свои особенности. Их довольно много: от правил оформления документов, до выдачи справок, системы организации дистанционного обучения и т.п. Для того, что бы учесть эту специфику и создана Единая Приемная комиссия. 
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTen">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTen" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            Как можно обучиться на программах профпереподготовки бесплатно?
                          </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTen" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTen">
                          <div class="accordion-body">
                            Сейчас реализуется множество федеральных программ по обучению граждан, например, проекты «Содействие занятости» или «Цифровые профессии». В каждом конкретном случае специалист Единой Приемной комиссии подберет и подходящий федеральные проект и программу обучения. 
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingEleven">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEleven" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            Какие курсы самые востребованные среди населения?
                          </button>
                        </h2>
                        <div id="panelsStayOpen-collapseEleven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingEleven">
                          <div class="accordion-body">
                            Так определенно сказать нельзя, поскольку «население» это очень общий термин. Нужно исходить из интересов отдельно взятого человека. Мы помогаем разобраться в этом досконально и подобрать оптимальную программу
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwelve">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwelve" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            Зачем мне обращаться в Единую Приемную комиссию, если я сам могу найти нужную информацию на сайте соответствующего ВУЗа?
                          </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwelve" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwelve">
                          <div class="accordion-body">
                            Действительно, если вы знаете куда вам пойти учиться и на какую программу, то сделать это можете самостоятельно. Однако, у большинства людей есть разного рода сомнения — верно ли я выбираю, лучшее ли я выбираю, подойдет ли та или иная программа именно мне и смогу ли я учиться?
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThirteen">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThirteen" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            Будет ли список курсов и направлений расширяться? 
                          </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThirteen" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThirteen">
                          <div class="accordion-body">
                            Да, перечень программ постоянно дополняется. 
                          </div>
                        </div>
                      </div>
                     
                      
                    
                  </div>
              </div>
        </div>
    </div>
</section>
@include('include.footer')
@endsection