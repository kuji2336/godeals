<section class="user_form">
    <div class="container">
        <div class="user_form_inner">
            <h1>ანგარიში</h1>

                <div class="login_registration">
                   <p class="login_text active_field">შესვლა</p>
                   <p class="registraion_text">რეგისტრაცია</p>
                </div>

              <!-- Login tab -->
            <div class="login active_registraion">
                <input type="text" name="mob_numb" placeholder="ტელეფონის ნომერი" class="numb_field" />
                <div class="password_input">
                    <input type="password" name="password" placeholder="პაროლი" class="magic_word" id="login_password_input" />
                </div>
                <div class="option_login d-flex justify-content-between align-items-center">
                    <div class="save_pass d-flex align-items-center">
                        <input type="checkbox" id="save_password" name="save_password" />
                        <label for="save_password">
                            დამახსოვრება
                        </label>
                    </div>
                    <div class="forgot_password">
                        <p><a href="#">პაროლის შეცვლა</a></p>
                    </div>
                </div>
                <div class="login_btn">
                    <p>შესვლა</p>
                </div>
            </div>
             
            <!-- registration tab -->
            <div class="registraion">
                <div class="user_reg">
                    <input type="text" name="firstname" placeholder="სახელი გვარი" class="firstname_input" />
                      <p class="field_required">ველის შევსება აუცილებელია</p>
                    <input type="text" name="mobile" placeholder="ტელ.ნომერი" />
                       <p class="field_required">ველის შევსება აუცილებელია</p>
                    <input type="text" name="email" placeholder="ელ.ფოსტა" class="mail_check" />
                       <p class="field_required">ველის შევსება აუცილებელია</p>
                    <div class="password_input">
                        <input type="password" name="password" placeholder="პაროლი" class="magic_word" id="password_input" />
                    </div>
                    <div class="agree-main agreeterms_inner justify-content-between align-items-center ">
                            <input type="checkbox" class="agree-checkbox"  name="agree_term" />
                            <label for="agree_term"><span>გავეცანი და ვეთანხმები</span> </label><span class="underline_terms" data-toggle="modal" data-target="#terms">პირობებს</span>
                    </div>
                </div>
                <div class="registraion_btn">
                    <h5>რეგისტრაცია</h5>
                </div>
            </div>
        </div>
    </div>
</section>