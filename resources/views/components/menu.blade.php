 <div class="menu">
     <div class="container">
         <div class="row">
             <div class="templatemo_topwrapper shadow">
                 <div class="col-sm-4">
                     <div class="templatemo_webtitle">ИОДМТ</div>
                 </div>
                 <div class="col-sm-8">
                     <nav class="navbar navbar-default" role="navigation">
                         <div class="container-fluid">

                             <!-- Brand and toggle get grouped for better mobile display -->
                             <div class="navbar-header">
                                 <button type="button" class="navbar-toggle" data-toggle="collapse"
                                     data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle
                                         navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                                     <span class="icon-bar"></span></button>
                             </div>

                             <!-- Collect the nav links, forms, and other content for toggling -->
                             <div id="top-menu">
                                 <div class="collapse navbar-collapse main_menu" id="bs-example-navbar-collapse-1">
                                     <ul class="nav navbar-nav">
                                         <li wire:click="changeView('main-page')">
                                             <a class="show-1 templatemo_home" href="/">
                                                 <span class="fa fa-home"></span>{!! __('Главная') !!}</a>
                                         </li>

                                         @if (Auth::check())
                                             <li wire:click="changeView('subjects')">
                                                 <a class="show-1 templatemo_page2" href="/Subjects">
                                                     <span class="fa fa-picture-o"></span>{!! __('Дисциплины') !!}</a>
                                             </li>
                                         @endif
                                         <li>
                                             <a href="/images/index_authors.PNG" data-rel="lightbox">
                                                 <span class="fa fa-users"></span>Автор туралы</a>
                                         </li>
                                         @if (Auth::check())
                                             <li>
                                                 <a href="/Logout">
                                                     <span class="fa fa-right-from-bracket">
                                                     </span>{!! __('Выйти') !!}
                                                 </a>
                                             </li>
                                         @else
                                             <li wire:click="changeView('login')">
                                                 <a class="show-1 templatemo_page3" href="/Login">
                                                     <span
                                                         class="fa fa-right-to-bracket"></span>{!! __('Войти') !!}</a>
                                             </li>
                                         @endif

                                     </ul>
                                 </div>
                             </div>
                             <!-- /.navbar-collapse -->
                         </div>
                         <!-- /.container-fluid -->
                     </nav>
                 </div>
             </div>
         </div>
     </div>
 </div>
