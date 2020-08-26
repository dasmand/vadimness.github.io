<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Главная</title>
    <link href="/design/{$settings->theme|escape}/css/bootstrap.min.css" rel="stylesheet">
    <link href="/design/{$settings->theme|escape}/css/style.css" rel="stylesheet">
    <link href="/design/{$settings->theme|escape}/css/helveticaneuecyr.css" rel="stylesheet">
    <link href="/design/{$settings->theme|escape}/css/star-rating.css" rel="stylesheet">
     <script src="/design/{$settings->theme|escape}/js/jq.js"></script>
 {* <link href="http://{$smarty.server.HTTP_HOST}/design/{$settings->theme|escape}/css/helveticaneuecyr.css" rel="stylesheet">
 *}
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <div class="main-wrapper">
            <aside>
              <header>
                  <div class="menu_top">
                          <nav class="navbar navbar-default menu">
                                <div class="navbar-header">
                                    <a href="http://dev.cyberintels.com/"><div class="navbar-brand img-circle hidden-xs"></div></a>
                                </div>
                                <div>
                                  <ul class="nav navbar-nav">
                                    <li>Доставка СУШИ <span class="block">в Николаеве</span></li>
                                    
                                  </ul>
                                    <button type="submit" class="header-button"><img class="figure" src="design/{$settings->theme|escape}/img/phone.png" alt="">Обратный звонок</button>
                                  <div class="nav navbar-nav navbar-right hidden-xs">
                                    <h2>+38 (066) 356 33 22</h2>
                                    <p>Вс-Чт: 11:00-23:00,<span>Вс-Чт: 11:00-23:00</span></p>
                                    
                                  </div>
                                </div><!-- /.navbar-collapse -->
                            </nav>
                      </div>
                    <div class="menu_bottom">
                      <nav class="navbar navbar-default menu">
                                <div class="navbar-header">
                                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar first"></span>
                                    <span class="icon-bar second"></span>
                                    <span class="icon-bar third"></span>
                                  </button>
                                </div>
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                  <ul class="nav nav-justified menu_justified menu-collapse">
                                    {include file='categories_texttop2.tpl'}
                                    <li class="white first visible-xs"><a href="#">(Лого)<br/>Главная</a></li>
                                    <li class="white visible-xs"><a href="/dostavka-i-oplata2"><img src="design/{$settings->theme|escape}/img/picture.gif" alt="">Доставка<br/>и оплата</a></li>
                                    <li class="white second visible-xs"><a href="http://dev.cyberintels.com/otzyvy"><img src="design/{$settings->theme|escape}/img/picture_1.gif" alt=""><br/>Отзывы</a></li>
                                    <li class="white third visible-xs"><a href="#"><img src="design/{$settings->theme|escape}/img/picture_2.gif" alt=""><br/>Акции и новости</a></li>
                                  </ul>
                                </div><!-- /.navbar-collapse -->
                                <!-----------------------------------Mobile Menu-----------------------> 
                               <div class="mobile-menu visible-xs"> <!-- Мобильное меню -->
                                      <ul class="nav nav-tabs nav-justified" role="tablist"><!-- Таб Главная -->
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Главная</a></li>
                                        <li role="presentation" class="active-link"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><img class="figure1" src="design/{$settings->theme|escape}/img/basket.png" alt="">Корзина</a></li> <!-- Таб Корзина -->
                                      </ul>
                                      <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home">
                                           <p class="hidden-collapse">Здесь будет текст важных сообщений или новостей в несколько строк.Здесь будет текст важных сообщений или новостей в несколько строк.Здесь будет текст важных сообщений или новостей в несколько строк.</p>
                                        <img src="design/{$settings->theme|escape}/img/main.jpg" alt="" class="mobile-img">      
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="profile">
                                          <div class="basket mobile">
                                                        <div class="basket_top">
                                                            <h4>Узнать условия доставки</h4>
                                                              <hr>
                                                              <div class="header_title">
                                                                 <h1><img src="design/{$settings->theme|escape}/img/basket.png" alt="">Ваша корзина</h1>
                                                              </div>
                                                        </div>
                                           <div class="basket_bottom">  
                                                 {include file='cart_informer.tpl'}
                                            </div>
                                            </div>







                                        </div><!--/tabpanel-->
                                      </div><!--/tab-content-->
                               </div><!-- Конец мобильное меню -->
                                  <p class="hidden-xs">Здесь будет текст важных сообщений или новостей в несколько строк.Здесь будет текст важных сообщений или новостей в несколько строк.Здесь будет текст важных сообщений или новостей в несколько строк.</p> 
                            </nav>
                    </div>
                </header>
 <!---------------------------------------------------------MAIN-CONTENT-------------------------------------------->
 {if $smarty.server.REQUEST_URI=='' or $smarty.server.REQUEST_URI=='/'} 
             <div class="main-content hidden-xs">
                  <img src="design/{$settings->theme|escape}/img/main.jpg" alt="">
               </div>
   {else}
     {$page->body}
     {$content}            
  {/if}             
 <!---------------------------------------------------------FOOTER--------------------------------------------> 
                  <footer>
                  <div class="row">
                      <div class="col-md-6 col-xs-12 col-sm-12">
                          <div class="footer-left footer-left-collapse">
                              <ul class="list-unstyled">
                                  {include file='categories_texttop.tpl'}
                              </ul>
                                <div class="clearfix"></div>
                                <button type="submit" class="footer_button"><img class="figure1" src="design/{$settings->theme|escape}/img/zakaz.png" alt="">Заказать</button>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 col-sm-12 footer-left">
                          <div class="footer-right pull-right">
                              <h2>+38 (066) 356 33 22</h2>
                                <p>Вс-Чт: 11:00-23:00,Вс-Чт: 11:00-23:00</p>
                                <p>Николаев, Садовая, 12</p>
                                <ul class="list-unstyled">
                                  <li><a href="">Доставка и оплата</a></li>
                                    <li><a href="">Акции и новости</a></li>
                                    <li><a href="http://dev.cyberintels.com/otzyvy">Отзывы</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
              </footer>
      </aside>
   
  <div class="basket hidden-xs">
              <div class="basket_top">
                  <h4>Узнать условия доставки</h4>
                    <hr>
                    <div class="header_title">
                       <h1><img src="design/{$settings->theme|escape}/img/basket.png" alt="">Ваша корзина</h1>
                    </div>
              </div>
 <div class="basket_bottom">           
      {include file='cart_informer.tpl'}

  </div><!--basket_bottom-->
             
  </div>


</div>
<!--main-wrapper-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/design/{$settings->theme|escape}/js/bootstrap.min.js"></script>
    <script src="/design/{$settings->theme|escape}/js/star-rating.js"></script>
      <script>
          function setEqualHeight(columns) {
              var tallestcolumn = 0;
              columns.each( function() {
                  currentHeight = $(this).height();
                  if(currentHeight > tallestcolumn) {
                      tallestcolumn = currentHeight;
                  }
              });
              columns.height(tallestcolumn); // переназначаем максимальную высоту
          }
          $(document).ready(function() { setEqualHeight($(".product-img")); });
          $(document).ready(function() { setEqualHeight($(".product-title")); });
          $(document).ready(function() { setEqualHeight($(".desc")); });
      </script>
      <script src="/design/{$settings->theme|escape}/js/custom.js"></script>


     </body>
</html>
