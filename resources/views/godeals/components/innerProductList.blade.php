<section class="product-list-d-filters">
    <div class="container">
        <!-- category header -->
        <div class="category-buttons buttons-margin">
                <button class="category-button category-button-product"><p>ლეპტოპ კომპიუტერები</p></button>
                <button class="category-button category-button-product"><p>კომპიუტერის მაუსები</p></button>
                <button class="category-button category-button-product"><p>მონიტორები</p></button>
                <button class="category-button category-button-product"><p>კლავიატურა</p></button>
                <button class="category-button category-button-product"><p>უსადენო ყურსასმენები</p></button>
                <button class="category-button category-button-product"><p>ოპერატიული მეხსიერება</p></button>
                <button class="category-button category-button-product"><p>მონიტორები</p></button>
                <button class="category-button category-button-product"><p>კლავიატურა</p></button>
                <button class="category-button category-button-product"><p>უსადენო ყურსასმენები</p></button>
                <button class="category-button category-button-product"><p>ოპერატიული მეხსიერება</p></button>
                <button class="category-button category-button-product"><p>პადები</p></button>
                <!-- all categories special button -->
            </div>
        <!-- end -->
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-12 col-12">
                <div class="filter-wrapper">
                    <!-- items filter -->
                    <div class="items-row-sorting">
                        <div class="items-row-header-brand">
                            <p>მწარმოებელი</p>
                        </div>
                        <div class="accessories-row__inner">
                            <p class="costumcheckbox"><input type="checkbox" name="vehicle1" value="woman">
                                <label for="vehicle1">Samsung</label>
                            </p>
                            <p class="costumcheckbox"><input type="checkbox" name="vehicle2" value="man">
                                <label for="vehicle2">Apple</label>
                            </p>
                            <p class="costumcheckbox"><input type="checkbox" name="vehicle3" value="unisex">
                                <label for="vehicle3">Asus</label>
                            </p>
                            <p class="costumcheckbox"> <input type="checkbox" name="vehicle4" value="child">
                                <label for="vehicle4">Acer</label>
                            </p>
                            <p class="see-all-cats"><a href="#">ყველას ნახვა</a></p>
                        </div>
                    </div>

                    <div class="items-row-sorting">
                        <div class="items-row-header-brand">
                            <p>ფასდაკლება</p>
                        </div>
                        <div class="accessories-row__inner">
                            <p class="costumcheckbox"><input type="checkbox" name="vehicle11" value="woman1">
                                <label for="vehicle11">30%</label>
                            </p>
                            <p class="costumcheckbox"><input type="checkbox" name="vehicle21" value="man1">
                                <label for="vehicle21">35%</label>
                            </p>
                            <p class="costumcheckbox"><input type="checkbox" name="vehicle31" value="unisex1">
                                <label for="vehicle31">40%</label>
                            </p>
                            <p class="costumcheckbox"> <input type="checkbox" name="vehicle41" value="child1">
                                <label for="vehicle41">20%</label>
                            </p>
                        </div>
                    </div>

                    <div class="items-row-sorting">
                        <div class="items-row-header-brand">
                            <p>ფასი</p>
                            <div id="rangeNumbers">0-2000 <span class="lari"></span></div>
                        </div>
                        <div class="accessories-row__inner">
                           <input type="text" class="js-range-slider" onchange="getvalue()" id="value" name="my_range" value="" />
                        </div>
                    </div>

                    <div class="items-row-sorting">
                        <div class="items-row-header-brand">
                            <p>ტრანსპორტირების ვადა</p>
                        </div>
                        <div class="accessories-row__inner">
                            <p class="costumcheckbox"><input type="checkbox" name="vehicle11" value="woman1">
                                <label for="vehicle11">30%</label>
                            </p>
                            <p class="costumcheckbox"><input type="checkbox" name="vehicle21" value="man1">
                                <label for="vehicle21">35%</label>
                            </p>
                            <p class="costumcheckbox"><input type="checkbox" name="vehicle31" value="unisex1">
                                <label for="vehicle31">40%</label>
                            </p>
                            <p class="costumcheckbox"> <input type="checkbox" name="vehicle41" value="child1">
                                <label for="vehicle41">20%</label>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-9 col-lg-9 col-md-12 col-12">
                  <div class="filter-icons--mob">
                      <div class="filter-icons--inner d-flex justify-content-between">
                          <div class="filter d-flex" id="showFilter">
                              <p>ფილტრი</p>
                              <img src="{{url('img/filter.png')}}" class="img-fluid">
                          </div>
                          <div class="sortBy d-flex">
                              <p>დალაგება</p>
                              <img src="{{url('img/sortby.png')}}" class="img-fluid">
                          </div>
                      </div>
                  </div>
                <div class="items-row-wrapper">
                    <div class="items-inner">
                        <div class="row">
                             <!-- item box -->
                             <div class="col-xl-3 col-lg-3 col-md-6 col-12 column-bordered">
                                <div class="product-item">
                                    <div class="slider-item__inner">
                                        <div class="item-sale-mark">
                                            <p>-31%</p>
                                        </div>
                                        <div class="product-item-image">
                                            <img src="{{url('img/testitem.png')}}" class="img-fluid">
                                        </div>
                                        <div class="product-list-details">
                                            <div class="product-main-name product-list-product-name">
                                                <p>პროდუქტის დასახელება დაიწერება აქ რამხელაც იქნება 2 ხაზზე ხაზზე ხაზზე ხაზზე</p>
                                            </div>
                                            <div class="product-item-price-container d-flex justify-content-between">
                                                <div class="product-slider-price product-slider-price--main">
                                                    <div class="product-new-price product-item-new-price">
                                                        <p>1237.99<span class="lari">'</span></p>
                                                    </div>
                                                    <div class="product-old-price product-old-price--main">
                                                        <p>1923.92<span class="lari">'</span></p>
                                                    </div>
                                                </div>
                                                <div class="product-slider-price-installment product-slider-price-installment--main">
                                                    <div class="product-price-installment  product-item-new-price--installment">
                                                        <p>123.32<span class="lari">'</span></p>
                                                    </div>
                                                    <div class="product-price-permonth product-price-permonth--main">
                                                        <p>თვეში</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-12 column-bordered">
                                <div class="product-item">
                                    <div class="slider-item__inner">
                                        <div class="item-sale-mark">
                                            <p>-31%</p>
                                        </div>
                                        <div class="product-item-image">
                                            <img src="{{url('img/testitem.png')}}" class="img-fluid">
                                        </div>
                                        <div class="product-list-details">
                                            <div class="product-main-name product-list-product-name">
                                                <p>პროდუქტის დასახელება დაიწერება აქ რამხელაც იქნება 2 ხაზზე ხაზზე ხაზზე ხაზზე</p>
                                            </div>
                                            <div class="product-item-price-container d-flex justify-content-between">
                                                <div class="product-slider-price product-slider-price--main">
                                                    <div class="product-new-price product-item-new-price">
                                                        <p>1237.99<span class="lari">'</span></p>
                                                    </div>
                                                    <div class="product-old-price product-old-price--main">
                                                        <p>1923.92<span class="lari">'</span></p>
                                                    </div>
                                                </div>
                                                <div class="product-slider-price-installment product-slider-price-installment--main">
                                                    <div class="product-price-installment  product-item-new-price--installment">
                                                        <p>123.32<span class="lari">'</span></p>
                                                    </div>
                                                    <div class="product-price-permonth product-price-permonth--main">
                                                        <p>თვეში</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-12 column-bordered">
                                <div class="product-item">
                                    <div class="slider-item__inner">
                                        <div class="item-sale-mark">
                                            <p>-31%</p>
                                        </div>
                                        <div class="product-item-image">
                                            <img src="{{url('img/testitem.png')}}" class="img-fluid">
                                        </div>
                                        <div class="product-list-details">
                                            <div class="product-main-name product-list-product-name">
                                                <p>პროდუქტის დასახელება დაიწერება აქ რამხელაც იქნება 2 ხაზზე ხაზზე ხაზზე ხაზზე</p>
                                            </div>
                                            <div class="product-item-price-container d-flex justify-content-between">
                                                <div class="product-slider-price product-slider-price--main">
                                                    <div class="product-new-price product-item-new-price">
                                                        <p>1237.99<span class="lari">'</span></p>
                                                    </div>
                                                    <div class="product-old-price product-old-price--main">
                                                        <p>1923.92<span class="lari">'</span></p>
                                                    </div>
                                                </div>
                                                <div class="product-slider-price-installment product-slider-price-installment--main">
                                                    <div class="product-price-installment  product-item-new-price--installment">
                                                        <p>123.32<span class="lari">'</span></p>
                                                    </div>
                                                    <div class="product-price-permonth product-price-permonth--main">
                                                        <p>თვეში</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-12 column-bordered">
                                <div class="product-item">
                                    <div class="slider-item__inner">
                                        <div class="item-sale-mark">
                                            <p>-31%</p>
                                        </div>
                                        <div class="product-item-image">
                                            <img src="{{url('img/testitem.png')}}" class="img-fluid">
                                        </div>
                                        <div class="product-list-details">
                                            <div class="product-main-name product-list-product-name">
                                                <p>პროდუქტის დასახელება დაიწერება აქ რამხელაც იქნება 2 ხაზზე ხაზზე ხაზზე ხაზზე</p>
                                            </div>
                                            <div class="product-item-price-container d-flex justify-content-between">
                                                <div class="product-slider-price product-slider-price--main">
                                                    <div class="product-new-price product-item-new-price">
                                                        <p>1237.99<span class="lari">'</span></p>
                                                    </div>
                                                    <div class="product-old-price product-old-price--main">
                                                        <p>1923.92<span class="lari">'</span></p>
                                                    </div>
                                                </div>
                                                <div class="product-slider-price-installment product-slider-price-installment--main">
                                                    <div class="product-price-installment  product-item-new-price--installment">
                                                        <p>123.32<span class="lari">'</span></p>
                                                    </div>
                                                    <div class="product-price-permonth product-price-permonth--main">
                                                        <p>თვეში</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-12 column-bordered">
                                <div class="product-item">
                                    <div class="slider-item__inner">
                                        <div class="item-sale-mark">
                                            <p>-31%</p>
                                        </div>
                                        <div class="product-item-image">
                                            <img src="{{url('img/testitem.png')}}" class="img-fluid">
                                        </div>
                                        <div class="product-list-details">
                                            <div class="product-main-name product-list-product-name">
                                                <p>პროდუქტის დასახელება დაიწერება აქ რამხელაც იქნება 2 ხაზზე ხაზზე ხაზზე ხაზზე</p>
                                            </div>
                                            <div class="product-item-price-container d-flex justify-content-between">
                                                <div class="product-slider-price product-slider-price--main">
                                                    <div class="product-new-price product-item-new-price">
                                                        <p>1237.99<span class="lari">'</span></p>
                                                    </div>
                                                    <div class="product-old-price product-old-price--main">
                                                        <p>1923.92<span class="lari">'</span></p>
                                                    </div>
                                                </div>
                                                <div class="product-slider-price-installment product-slider-price-installment--main">
                                                    <div class="product-price-installment  product-item-new-price--installment">
                                                        <p>123.32<span class="lari">'</span></p>
                                                    </div>
                                                    <div class="product-price-permonth product-price-permonth--main">
                                                        <p>თვეში</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-12 column-bordered">
                                <div class="product-item">
                                    <div class="slider-item__inner">
                                        <div class="item-sale-mark">
                                            <p>-31%</p>
                                        </div>
                                        <div class="product-item-image">
                                            <img src="{{url('img/testitem.png')}}" class="img-fluid">
                                        </div>
                                        <div class="product-list-details">
                                            <div class="product-main-name product-list-product-name">
                                                <p>პროდუქტის დასახელება დაიწერება აქ რამხელაც იქნება 2 ხაზზე ხაზზე ხაზზე ხაზზე</p>
                                            </div>
                                            <div class="product-item-price-container d-flex justify-content-between">
                                                <div class="product-slider-price product-slider-price--main">
                                                    <div class="product-new-price product-item-new-price">
                                                        <p>1237.99<span class="lari">'</span></p>
                                                    </div>
                                                    <div class="product-old-price product-old-price--main">
                                                        <p>1923.92<span class="lari">'</span></p>
                                                    </div>
                                                </div>
                                                <div class="product-slider-price-installment product-slider-price-installment--main">
                                                    <div class="product-price-installment  product-item-new-price--installment">
                                                        <p>123.32<span class="lari">'</span></p>
                                                    </div>
                                                    <div class="product-price-permonth product-price-permonth--main">
                                                        <p>თვეში</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-12 column-bordered">
                                <div class="product-item">
                                    <div class="slider-item__inner">
                                        <div class="item-sale-mark">
                                            <p>-31%</p>
                                        </div>
                                        <div class="product-item-image">
                                            <img src="{{url('img/testitem.png')}}" class="img-fluid">
                                        </div>
                                        <div class="product-list-details">
                                            <div class="product-main-name product-list-product-name">
                                                <p>პროდუქტის დასახელება დაიწერება აქ რამხელაც იქნება 2 ხაზზე ხაზზე ხაზზე ხაზზე</p>
                                            </div>
                                            <div class="product-item-price-container d-flex justify-content-between">
                                                <div class="product-slider-price product-slider-price--main">
                                                    <div class="product-new-price product-item-new-price">
                                                        <p>1237.99<span class="lari">'</span></p>
                                                    </div>
                                                    <div class="product-old-price product-old-price--main">
                                                        <p>1923.92<span class="lari">'</span></p>
                                                    </div>
                                                </div>
                                                <div class="product-slider-price-installment product-slider-price-installment--main">
                                                    <div class="product-price-installment  product-item-new-price--installment">
                                                        <p>123.32<span class="lari">'</span></p>
                                                    </div>
                                                    <div class="product-price-permonth product-price-permonth--main">
                                                        <p>თვეში</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-12 column-bordered">
                                <div class="product-item">
                                    <div class="slider-item__inner">
                                        <div class="item-sale-mark">
                                            <p>-31%</p>
                                        </div>
                                        <div class="product-item-image">
                                            <img src="{{url('img/testitem.png')}}" class="img-fluid">
                                        </div>
                                        <div class="product-list-details">
                                            <div class="product-main-name product-list-product-name">
                                                <p>პროდუქტის დასახელება დაიწერება აქ რამხელაც იქნება 2 ხაზზე ხაზზე ხაზზე ხაზზე</p>
                                            </div>
                                            <div class="product-item-price-container d-flex justify-content-between">
                                                <div class="product-slider-price product-slider-price--main">
                                                    <div class="product-new-price product-item-new-price">
                                                        <p>1237.99<span class="lari">'</span></p>
                                                    </div>
                                                    <div class="product-old-price product-old-price--main">
                                                        <p>1923.92<span class="lari">'</span></p>
                                                    </div>
                                                </div>
                                                <div class="product-slider-price-installment product-slider-price-installment--main">
                                                    <div class="product-price-installment  product-item-new-price--installment">
                                                        <p>123.32<span class="lari">'</span></p>
                                                    </div>
                                                    <div class="product-price-permonth product-price-permonth--main">
                                                        <p>თვეში</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-12 column-bordered">
                                <div class="product-item">
                                    <div class="slider-item__inner">
                                        <div class="item-sale-mark">
                                            <p>-31%</p>
                                        </div>
                                        <div class="product-item-image">
                                            <img src="{{url('img/testitem.png')}}" class="img-fluid">
                                        </div>
                                        <div class="product-list-details">
                                            <div class="product-main-name product-list-product-name">
                                                <p>პროდუქტის დასახელება დაიწერება აქ რამხელაც იქნება 2 ხაზზე ხაზზე ხაზზე ხაზზე</p>
                                            </div>
                                            <div class="product-item-price-container d-flex justify-content-between">
                                                <div class="product-slider-price product-slider-price--main">
                                                    <div class="product-new-price product-item-new-price">
                                                        <p>1237.99<span class="lari">'</span></p>
                                                    </div>
                                                    <div class="product-old-price product-old-price--main">
                                                        <p>1923.92<span class="lari">'</span></p>
                                                    </div>
                                                </div>
                                                <div class="product-slider-price-installment product-slider-price-installment--main">
                                                    <div class="product-price-installment  product-item-new-price--installment">
                                                        <p>123.32<span class="lari">'</span></p>
                                                    </div>
                                                    <div class="product-price-permonth product-price-permonth--main">
                                                        <p>თვეში</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-12 column-bordered">
                                <div class="product-item">
                                    <div class="slider-item__inner">
                                        <div class="item-sale-mark">
                                            <p>-31%</p>
                                        </div>
                                        <div class="product-item-image">
                                            <img src="{{url('img/testitem.png')}}" class="img-fluid">
                                        </div>
                                        <div class="product-list-details">
                                            <div class="product-main-name product-list-product-name">
                                                <p>პროდუქტის დასახელება დაიწერება აქ რამხელაც იქნება 2 ხაზზე ხაზზე ხაზზე ხაზზე</p>
                                            </div>
                                            <div class="product-item-price-container d-flex justify-content-between">
                                                <div class="product-slider-price product-slider-price--main">
                                                    <div class="product-new-price product-item-new-price">
                                                        <p>1237.99<span class="lari">'</span></p>
                                                    </div>
                                                    <div class="product-old-price product-old-price--main">
                                                        <p>1923.92<span class="lari">'</span></p>
                                                    </div>
                                                </div>
                                                <div class="product-slider-price-installment product-slider-price-installment--main">
                                                    <div class="product-price-installment  product-item-new-price--installment">
                                                        <p>123.32<span class="lari">'</span></p>
                                                    </div>
                                                    <div class="product-price-permonth product-price-permonth--main">
                                                        <p>თვეში</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

