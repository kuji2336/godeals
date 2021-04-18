<header>
        <!------top navigation bar-->
        <nav class="top-nav notranslate">
            <div class="container-fluid header_cont dark-blue-bg">
                <div class="costum-row-out">
                    <!-- LOGO -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-6 logo_box">
                        <div class="logo-main" style="align-items: center; justify-content: space-between;">
                            <div class="logo-wrapper">
                            <a href="https://go24.ge/"> 
                                <div class="logo">
                                   <img src="{{url('img/go24s.svg')}}" class="ebg_icon">
                                </div>
                            </a>
                            <a href="https://ebg.ge/outlet">
                                <div class="logo">
                                    <img src="{{url('img/goautlet.svg')}}" class="ebg_icon">
                                </div>
                            </a>
                            <a href="https://order24.ge/">
                                <div class="logo logo-active">
                                    <img src="{{url('img/godeals.svg')}}" class="prime_icon">
                                </div>
                            </a>
                            </div>
                        </div>

                        <!-- Dropdown LOGOS mobile -->
                        <div class="Dropdown-logo-wrapper">
                            <div class="Selected-logo">
                                <img src="{{url('img/godeals.svg')}}" class="ebg_icon" style="height: 35px;">
                                <span class="arrow-down"><img src="{{url('img/arrow-down.svg')}}"></span>
                            </div>
                            <div class="dropdown-box">
                                <div class="dropdown-box-logos">
                                    <ul>
                                        <li class="ebglogo">
                                            <a href="https://go24.ge/"><img src="{{url('img/go24s.svg')}}"></a>
                                        </li>
                                        <li class="primelogo">
                                            <a href="https://ebg.ge/outlet"><img src="{{url('img/goautlet.svg')}}"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                        <!-- Search -->
                    <div class="col-xl-5 col-lg-5 col-md-12 search_container">
                        <div class="search_outer_cont">
                            <div class="search-main">
                                <div class="select_category">
                                    <div class="selected_category">
                                        <div class="choosen_main">
                                            <p class="choosen_category">ყველა</p>
                                            <img src="{{url('img/arrow-down.svg')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="search-field-main">
                                    <input class="search-field" autocomplete="off" type="text" name="search"
                                        placeholder="მოძებნე ნივთი...">
                                    <img src="{{url('img/search.svg')}}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- User Info and mobile sidenav-->
                    <div class="col-lg-3 col-lg-3 col-md-6 user_outer_section col-6">
                        <div class="use_section">
                            <div class="user_section_inner log-in">

                            <!-- content for not register or logined in user -->
                            <section class="not-signded">
                                     <div class="not-signded__inner d-flex">
                                         <div class="log-in-user">
                                            <p>შესვლა</p>
                                         </div>
                                         <div class="user-favourites">
                                            <img src="{{url('img/heart.svg')}}">
                                         </div>
                                         <div class="user-basket not-register">
                                            <img src="{{url('img/basket.svg')}}">
                                         </div>
                                     </div>
                             </section>
                             
                                <div class="user">
                                        <div class="user-logined-in">
                                            <div class="triangle_user"></div>
                                            <div class="user_profile" style="top: -380px;">
                                                <div class="profile_cont">
                                                    <div class="profile_header">
                                                        <div class="profile_sub_header"><p>გამარჯობა,</p></div>
                                                        <div class="profile_header_flex">
                                                            <p></p>
                                                            <div></div>
                                                            <p><a href="/outlet/logout">გასვლა</a></p>
                                                        </div>
                                                        <img src="">
                                                    </div>
                                                    <div class="profile_menu_list">
                                                        <ul>
                                                            <a href="">
                                                                <li>
                                                                    <img src=""> 
                                                                    <p>შეტყობინებები (<span>1</span>)</p>
                                                                </li>
                                                            </a>
                                                            <a href="">
                                                                <li>
                                                                    <img src=""> 
                                                                    <p>შეკვეთები</p>
                                                                </li>
                                                            </a>
                                                            <a href="">
                                                                <li>
                                                                    <img src="">
                                                                    <p class="balance_header_p">
                                                                        <span>ბალანსი</span>
                                                                        <div class="flex_balance_header" >
                                                                        <span class="balance_green">00.0<i class="lari">'</i></span>
                                                                        <div class="divider_line"></div>
                                                                        <span class="debt_warning">38.50<i class="lari">'</i></span>
                                                                    </div>
                                                                    </p>
                                                                </li>
                                                            </a>
                                                            <a href="">
                                                                <li>
                                                                    <img src="">
                                                                    <p>პირადი ინფორმაცია</p>
                                                                </li>
                                                            </a>
                                                            <a href="">
                                                                <li>
                                                                    <img src="">
                                                                    <p>მისამართი</p>
                                                                </li>
                                                            </a>
                                                        </ul>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        
        <!------search navbar mobile-->
        <div class="search-nav-mobile">
            <div class="search_nav_mob">
                <div class="all_categories">
                    <p>
                    <span class="dropdown-arrow">
                    <div id="nav-icon1"> <span></span> <span></span> <span></span> </div>
                    </span>
                    </p>
                </div>
                <div class="mobile_search_input">
                    <input class="search_mob" placeholder="ჩაწერე რისი პოვნა გინდა">
                    <div class="search_costum_btn">
                        <span><span class="search_btn_mob"><img src="{{url('img/search.svg')}}"></span> ძიება</span>
                    </div>
                </div>
            </div>
        </div>