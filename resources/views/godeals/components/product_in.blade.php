<section class="product_main_section">
    <div class="container-fluid product_page">
    <!-- breadcrumbs nav -->
        <div class="product_map">
            <p>
                <a href="">
                    <span>მთავარი / </span>
                </a>
                <a href="">
                    <span>ფოტო და ვიდეო კამერები /</span>
                </a>
                <a href="">
                    <span>ფირიანი ფოტოკამერები</span>
                </a>

            </p>
        </div>

        <div class="row">
            <div class="col-xl-5 col-lg-4 left_section">
                <div class="slider_content desktop_slider">
                    <div class="slider_img_main">
                        <div class="img_prev" onclick="prevImg()">
                            <img src="{{url('img/prod_drop.svg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="slider_imgs ">
                            <div class="scroll_img">
                                <div class="img active_img">
                                    <img src="{{url('img/slide1.png')}}" alt="" class="img-fluid">
                                </div>

                                <div class="img ">
                                    <img src="{{url('img/slide1.png')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="img_next" onclick="nextImg()">
                            <img src="{{url('img/prod_drop.svg')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <!-- main slider image box -->
                    <div class="main_img">
                        <img src="{{url('img/slide1.png')}}" alt="" class="img-fluid current_img">
                    </div>
                </div>
            </div>

            <div class="col-xl-7 col-lg-8 middle_section">
                <div class="product_description">
                    <div class="product_first_sec">
                        <div class="spec_prod">
                            <p class="prod_id">#250091</p>
                            <p class="sold_numb">გაიყიდა <span>2</span> ბოლო <span>72</span> საათში</p>
                        </div>
                        <div class="prod_name">
                            <p>Nike air max 90 Essential womans Light Bone Running Shoe 9.5 US</p>
                        </div>
                        <div class="made_by" data-toggle="modal" data-target="#exampleModal">
                            <p>გამყიდველი: <span>Nike</span></p>
                        </div>
                        <!-- seller modal conent goes here -->
                        @include("godeals.components.seller_modal")
                        <div class="rating">
                            <p>
                            <img src="{{url('img/star-regular.svg')}}" alt="" class="img-fluid">
                            <img src="{{url('img/star-regular.svg')}}" alt="" class="img-fluid">
                            <img src="{{url('img/star-regular.svg')}}" alt="" class="img-fluid">
                            <img src="{{url('img/star-regular.svg')}}" alt="" class="img-fluid">
                            <img src="{{url('img/star-regular.svg')}}" alt="" class="img-fluid">
                                <span><i> 16</i> შეფასება</span>
                            </p>
                        </div>
                    </div>



                    <div class="product_second_sec">
                        <div class="in_stock">
                            <div class="price_section">
                                <div class="new_price">
                                    <p><span class="lari">'</span>397.29</p>
                                </div>
                                <div class="old_price">
                                    <p><span class="lari">'</span>397.29</p>
                                </div>
                            </div>
                        </div>
                        <div class="discount">
                            <span>-20%</span>
                        </div>
                        <div class="condition">
                            <p>თვეში: <span>39₾</span></p>
                            <p>მდგომარეობა: <span class="condition_hover">ახალი</span></p>
                            <div class="condition_tooltip">
                                <p>ნივთი არის პროფესიონალურად აღდგენილი ( შეკეთებული) გამართულად მუშაობის მიზნით მწარმოებლის ან მწარმოებლის ავტორიზებული გამყიდველის მიერ. ეს ნიშნავს, რომ ნივთი არის შეკეთებული, შემოწმებული ისე, რომ შესაბამისობაში მოვიდეს მწარმოებლის მოთხოვნებთან და არის კარგ მდგომარეობაში.</p>
                            </div>
                        </div>
                        <div class="options">
                            <div>
                                <select name="" id="">
                                    <option value="red">red</option>
                                    <option value="black">black</option>
                                    <option value="green">green</option>
                                    <option value="black">black</option>
                                    <option value="red">red</option>
                                    <option value="black">black</option>
                                    <option value="red">red</option>
                                    <option value="black">black</option>
                                </select>
                            </div>
                            <p class="stock_count">
                                მარაგშია:<span>5</span>
                            </p>
                        </div>
                    </div>
                    <div class="product_third_sec">
                        <div class="specifications">
                            <h5>მახასიათებლები</h5>
                            <p>Condition: New with box: A brand-new, unused, and unworn item (including handmade items) in the original packaging
                            </p>
                            <p>UPC: Does not apply</p>
                            <p>Upper Material: Leather - Textile</p>
                            <p>Upper Material: Leather - Textile</p>
                            <p>Upper Material: Leather - Textile</p>
                            <div class="see_more_spec">
                                <span>ნახე მეტი</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="buy_section right_section">
                    <div class="buy_inner">
                        <div class="buy_first_sec">
                            <p class="buy_price">ფასი: <i class="lari">'</i><span>397.29</span></p>
                            <p class="buy_address">მდებარეობა: <span>დედოფლისწყარო</span></p>
                            <p class="delivery_time">მიწოდების დრო: <span>20 აგვისტო</span></p>
                            <div class="product_tooltip_price">
                                <p class="delivery_price">მიწოდების ფასი:</p>
                                <div class="question_mark2">
                                    <img src="{{url('img/question1.svg')}}"  alt="" class="before_question2" style="display: block;">
                                    <img src="{{url('img/question2.svg')}}" alt="" class="after_question2" style="display: none;">
                                </div>
                                <div class="answer_question2">
                                    <span class="span_triangle2"></span>
                                    <span class="span_triangle_22"></span>
                                    <div class="answer_box2">
                                        <p>ფასი დაანგარიშდება აშშ-ს საწყობში აწონვის შემდეგ. ტექსტია დასაზუსტებელი</p>
                                        <span>100 გრამი = 80 ცენტს</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="buy_second_sec">
                            <div class="buy_btn">
                                <a href="">
                                    <p>ყიდვა</p>
                                </a>
                            </div>
                            <div class="add_to_cart">
                                <a href="">
                                    <p>კალათაში დამატება</p>
                                </a>
                            </div>
                        </div>
                        <div class="buy_third_sec">
                            <div class="credit_buy_cont">
                                <div class="credit_btn">
                                    <a href="">
                                        <p>განვადება</p>
                                    </a>
                                </div>
                                <div class="credit_info">
                                    <p>განვადების პირობები</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Description Section -->
    <section class="description">
        <div class="container">
            <h1 class="desc_heading">მონაცემები</h1>
            <div class="options_description">
                <ul>
                    <li>Condition: <span>New with box: A brand-new, unused, and unworn item (including handmade items) in the original packaging</span></li>
                    <li>UPC: <span>Does not apply</span></li>
                    <li>Upper Type: <span>Leather - Textile</span></li>
                    <li>Shoe Type: <span>Low Top</span></li>
                    <li>Gender: <span>Woman</span></li>
                    <li>Fastening: <span>Lace Up</span></li>
                    <li>Model: <span>Air Max 90 Essential</span></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Description Section -->
    <section class="description">
        <div class="container">
            <h1 class="desc_heading">აღწერა</h1>
        </div>
    </section>


        <section class="description">
            <div class="container">
                <h1 class="desc_heading">გარანტიის პირობები</h1>
                <div class="options_description">
                    <ul>
                        <li class="garanty">თუ ამანათი არ მიიღებთ იმ მდგომაროებით, სპეფიციკაციითა და რაოდენობით, რაც აღწერილობაში იყო მითითებული, აუცილებლად უნდა 
                            დაგვიკავშირდეთ ნივთის მიღებიდან 10 დღის განმავლობაში და გამოგვიგზავნოთ დამადასტურებელი ფოტო ან ვიდეო მასალა. ჩვენი ტექნიკური 
                            ჯგუფის აგენტი თქვენი სახელით დაუკავშირდება გამყიდველს და დაგეხმარებათ პრობლემის მოგვარებაში. იბიჯის გამოსაწერ პროდუქციაზე 
                            გამყიდველის საერთაშორისო გარანტია არ ვრცელდება.</li>
                    </ul>
                </div>
            </div>
        </section>