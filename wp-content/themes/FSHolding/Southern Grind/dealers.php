	<?php
	/*
		Template Name: Dealers Page
	*/
	?>
<?php get_header(); ?>
<div class="pagenev">
    <div class="conwidth-resources">
        <div class="floatleft">
            <br/>
            <span class="subNavBig">BECOME A DEALER</span>
        </div>
        <div class="clearDiv50"></div>
    </div>
</div>

<div id="container">
    <div id="dealerBoxWrapper">

        <script>
            jQuery(document).ready(function ($) {
                $('input[type=radio]').change(function () {
                    $(this).parent().removeClass('error');
                    checkRequiredFields();
                });
                $('input[type=text], select').on('change', function () {
                    $(this).removeClass('error');
                    checkRequiredFields();
                });
            });
            function checkRequiredFields() {

                $('*').removeClass('error');

                // Check Text fields:
                $('input')
                    .filter(function () {
                        return $(this).data('required') === 1;
                    })
                    .each(function () {
                        if ($(this).val() === '') {
                            $(this).addClass('error');
                        }
                    });

                // Check selects:
                $('select')
                    .filter(function () {
                        return $(this).data('required') === 1;
                    })
                    .each(function () {
                        if ($(this).val() === '') {
                            $(this).addClass('error');
                        }
                    });

                // Check radio buttons:
                $('input')
                    .filter(function () {
                        return $(this).data('required') === 2;
                    })
                    .each(function () {
                        var name = $(this).attr('name'),
                            radioValue = $("input[name=" + name + "]:checked").val();
                        if (!radioValue) {
                            $(this).parent().addClass('error');
                        }
                    });

                // Zip Code:
                $('input')
                    .filter(function () {
                        return $(this).data('required') === 3;
                    })
                    .each(function () {
                        var regEx = /^\d{5}(?:[-\s]\d{4})?$/;
                        regEx.test($(this).val()) ? $(this).removeClass('error') : $(this).addClass('error');
                    });

                // Phone Number:
                $('input')
                    .filter(function () {
                        return $(this).data('required') === 4;
                    })
                    .each(function () {
                        var regEx = /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/;
                        regEx.test($(this).val()) ? $(this).removeClass('error') : $(this).addClass('error');
                    });

                // Email:
                $('input')
                    .filter(function () {
                        return $(this).data('required') === 5;
                    })
                    .each(function () {
                        var regEx = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                        regEx.test($(this).val()) ? $(this).removeClass('error') : $(this).addClass('error');
                    });

                var errors = $('.error').length;

                if (errors > 0) {
                    $('#Error_Message')
                        .addClass('error')
                        .html('Please fill out the ' + errors + ' required field' + (errors === 1 ? '' : 's') + ' above');
                    $('input[name=SpamCheck2]').val('');
                } else {
                    $('#Error_Message')
                        .removeClass('error')
                        .html('');
                    $('input[name=SpamCheck2]').val(1);
                }

                if (!$('input[name=SpamCheck]').prop('checked')) {
                    $('label[for=SpamCheck]').addClass('error');
                    return false;
                } else {
                    $('label[for=SpamCheck]').removeClass('error');
                }

                return errors === 0;
            }
            function resetForm() {
                $('.error').removeClass('error');
                $('input[type=text]').each(function () {
                    $(this).val('');
                });
                $('select').each(function () {
                    $(this).find('option').first().attr('selected', true);
                });
                $('input[type=radio]').prop('checked', false);
                $('.thankYou').css('display', 'none');

                return false;
            }
        </script>

        <style>
            form label {
                display: inline-block;
                min-width: 150px;
                color: white;
            }

            form section:not(:last-of-type) {
                margin: 0 0 40px;
            }

            form .supplier:not(:last-of-type) {
                margin: 0 0 20px;
            }

            form .question:not(:last-of-type) {
                margin: 0 0 20px;
            }

            form .question label {
                min-width: auto;
            }

            form .question.error, form label[for=SpamCheck].error {
                color: red;
            }

            form input[type=text] {
                border: 1px solid transparent;
            }

            form input[type=text].error {
                border: 1px solid red;
            }

            form select.error {
                border: 1px solid red;
            }

            .dealerBox2 .thankYou {
                margin: 20px auto;
                padding: 40px;
                width: 80%;
                max-width: 400px;
                border: 1px solid white;
                border-radius: 10px;
                text-align: center;
            }

            .dealerBox2 .instructions{
                margin: 0 auto 20px auto;
            }
        </style>

        <div class="dealerBox2">

            <div class="instructions">
                <p>
                    Southern Grind knives are distributed by W.R. Case. To receive more information about becoming a Southern Grind dealer, please fill out the form below. Or download the <a
                            href="<?= get_template_directory_uri() ?>/pdf/CreditApplication_and_TaxExempt.pdf"
                            target="_blank">Account Signup Form</a> and fax it to 877-227-3997. We will never share,
                    sell, or rent individual personal information.
                </p>
            </div>

            <?php if (isset($_GET['submit']) && $_GET['submit'] === "success"): ?>
                <div class="thankYou">
                    <strong>Thank you!</strong>
                    <p>Your request as been submitted.</p>
                </div>
            <?php endif; ?>

            <form action="<?= get_template_directory_uri() ?>/caseDealerFormSubmit.php" method="POST" name="form1"
                  onsubmit="return checkRequiredFields()">
                <section>
                    <div>
                        <label for="Contact_Name">* Contact Name:</label> &nbsp;
                        <input name="Contact_Name"
                               type="text"
                               placeholder="Contact Name"
                               id="Contact_Name"
                               data-required="1"/>
                    </div>
                    <div>
                        <label for="Company_Name">* Company Name:</label> &nbsp;
                        <input name="Company_Name"
                               type="text"
                               placeholder="Company Name"
                               id="Company_Name" data-required="1"/>
                    </div>
                    <div>
                        <label for="Company_Address">* Street Address:</label> &nbsp;
                        <input name="Company_Address"
                               type="text"
                               id="Company_Address"
                               placeholder="Company Address"
                               data-required="1"/>
                    </div>
                    <div>
                        <label for="Company_City">* City:</label> &nbsp;
                        <input name="Company_City" type="text"
                               placeholder="City"
                               id="Company_City"
                               data-required="1"/>
                        &nbsp;* State:
                        <select name="Company_State"
                                data-required="1">
                            <option></option>
                            <option value="AL">AL</option>
                            <option value="AK">AK</option>
                            <option value="AR">AR</option>
                            <option value="AZ">AZ</option>
                            <option value="CA">CA</option>
                            <option value="CO">CO</option>
                            <option value="CT">CT</option>
                            <option value="DC">DC</option>
                            <option value="DE">DE</option>
                            <option value="FL">FL</option>
                            <option value="GA">GA</option>
                            <option value="HI">HI</option>
                            <option value="IA">IA</option>
                            <option value="ID">ID</option>
                            <option value="IL">IL</option>
                            <option value="IN">IN</option>
                            <option value="KS">KS</option>
                            <option value="KY">KY</option>
                            <option value="LA">LA</option>
                            <option value="MA">MA</option>
                            <option value="MD">MD</option>
                            <option value="ME">ME</option>
                            <option value="MI">MI</option>
                            <option value="MN">MN</option>
                            <option value="MO">MO</option>
                            <option value="MS">MS</option>
                            <option value="MT">MT</option>
                            <option value="NC">NC</option>
                            <option value="ND">ND</option>
                            <option value="NE">NE</option>
                            <option value="NH">NH</option>
                            <option value="NJ">NJ</option>
                            <option value="NM">NM</option>
                            <option value="NV">NV</option>
                            <option value="NM">NM</option>
                            <option value="NV">NV</option>
                            <option value="NY">NY</option>
                            <option value="OH">OH</option>
                            <option value="OK">OK</option>
                            <option value="OR">OR</option>
                            <option value="PA">PA</option>
                            <option value="RI">RI</option>
                            <option value="SC">SC</option>
                            <option value="SD">SD</option>
                            <option value="TN">TN</option>
                            <option value="TX">TX</option>
                            <option value="UT">UT</option>
                            <option value="VA">VA</option>
                            <option value="VT">VT</option>
                            <option value="WA">WA</option>
                            <option value="WI">WI</option>
                            <option value="WV">WV</option>
                            <option value="WY">WY</option>
                        </select>
                    </div>
                    <div>
                        <label for="Company_Zip"
                               data-required="3">
                            * Zip:
                        </label> &nbsp;
                        <input type="text"
                               name="Company_Zip"
                               id="Company_Zip"
                               size="5" maxlength="5"
                               placeholder="Zip"
                               data-required="3"/>
                    </div>
                    <div>
                        <label for="Company_Phone">* Phone Number:</label> &nbsp;
                        <input name="Company_Phone" type="text"
                               placeholder="(XXX)XXX-XXXX"
                               id="Company_Phone"
                               data-required="4"/>
                    </div>
                    <div>
                        <label for="Company_Fax">Fax Number:</label> &nbsp;
                        <input name="Company_Fax" type="text"
                               placeholder="(XXX)XXX-XXXX"
                               id="Company_Fax">
                    </div>
                    <div>
                        <label for="Email">Email:</label> &nbsp;
                        <input name="Email"
                               type="text"
                               id="Email"
                               placeholder="Email">
                    </div>
                </section>
                <section>
                    <div class="question">
                        * Do you have a walk-in retail establishment?<br/>
                        <input type="radio" name="Walkin" id="Walkin_yes" value="yes" data-required="2">
                        <label for="Walkin_yes">Yes</label>
                        <input type="radio" name="Walkin" id="Walkin_no" value="no">
                        <label for="Walkin_no">No</label>
                    </div>
                    <div class="question">
                        * Is this location a residence?<br/>
                        <input type="radio" name="Residence" id="Residence_yes" value="yes" data-required="2">
                        <label for="Residence_yes">Yes</label>
                        <input type="radio" name="Residence" id="Residence_no" value="no">
                        <label for="Residence_no">No</label>
                    </div>
                    <div class="question">
                        * How many days is your store open?<br/>
                        <input type="radio" name="Day" id="Day_12" value="1-2" data-required="2">
                        <label for="Day_12">1-2</label>
                        <input type="radio" name="Day" id="Day_34" value="3-4">
                        <label for="Day_34">3-4</label>
                        <input type="radio" name="Day" id="Day_5" value="5+">
                        <label for="Day_5">5+</label>
                    </div>
                    <div class="question">
                        * Do you plan to sell Case via a website?<br/>
                        <input type="radio" name="Website" id="Website_yes" value="yes" data-required="2">
                        <label for="Website_yes">Yes</label>
                        <input type="radio" name="Website" id="Website_no" value="no">
                        <label for="Website_no">No</label>
                    </div>
                    <div class="question">
                        * Do you plan to sell Case via internet auction (e.g. ebay)?<br/>
                        <input type="radio" name="Auction" id="Auction_yes" value="yes" data-required="2">
                        <label for="Auction_yes">Yes</label>
                        <input type="radio" name="Auction" id="Auction_no" value="no">
                        <label for="Auction_no">No</label>
                    </div>
                    <!--
                    <div class="question">
                        Are you interested in selling Zippo lighters, too?<br/>
                        <input type="radio" name="Zippo" id="Zippo_yes" value="yes">
                        <label for="Zippo_yes">Yes</label>
                        <input type="radio" name="Zippo" id="Zippo_no" value="no">
                        <label for="Zippo_no">No</label>
                    </div>
                    -->
                </section>
                <section>
                    <h3>
                        Bank Reference
                    </h3>
                    <div>
                        <label for="Bank_Name">Bank Name:</label> &nbsp;
                        <input name="Bank_Name"
                               type="text"
                               id="Bank_Name"
                               placeholder="Bank Name">
                    </div>
                    <div>
                        <label for="Bank_City">Bank City:</label> &nbsp;
                        <input name="Bank_City" type="text"
                               placeholder="Bank City"
                               id="Bank_City"> &nbsp;State:
                        <select name="Bank State">
                            <option></option>
                            <option value="AL">AL</option>
                            <option value="AK">AK</option>
                            <option value="AR">AR</option>
                            <option value="AZ">AZ</option>
                            <option value="CA">CA</option>
                            <option value="CO">CO</option>
                            <option value="CT">CT</option>
                            <option value="DC">DC</option>
                            <option value="DE">DE</option>
                            <option value="FL">FL</option>
                            <option value="GA">GA</option>
                            <option value="HI">HI</option>
                            <option value="IA">IA</option>
                            <option value="ID">ID</option>
                            <option value="IL">IL</option>
                            <option value="IN">IN</option>
                            <option value="KS">KS</option>
                            <option value="KY">KY</option>
                            <option value="LA">LA</option>
                            <option value="MA">MA</option>
                            <option value="MD">MD</option>
                            <option value="ME">ME</option>
                            <option value="MI">MI</option>
                            <option value="MN">MN</option>
                            <option value="MO">MO</option>
                            <option value="MS">MS</option>
                            <option value="MT">MT</option>
                            <option value="NC">NC</option>
                            <option value="ND">ND</option>
                            <option value="NE">NE</option>
                            <option value="NH">NH</option>
                            <option value="NJ">NJ</option>
                            <option value="NM">NM</option>
                            <option value="NV">NV</option>
                            <option value="NM">NM</option>
                            <option value="NV">NV</option>
                            <option value="NY">NY</option>
                            <option value="OH">OH</option>
                            <option value="OK">OK</option>
                            <option value="OR">OR</option>
                            <option value="PA">PA</option>
                            <option value="RI">RI</option>
                            <option value="SC">SC</option>
                            <option value="SD">SD</option>
                            <option value="TN">TN</option>
                            <option value="TX">TX</option>
                            <option value="UT">UT</option>
                            <option value="VA">VA</option>
                            <option value="VT">VT</option>
                            <option value="WA">WA</option>
                            <option value="WI">WI</option>
                            <option value="WV">WV</option>
                            <option value="WY">WY</option>
                        </select>
                    </div>
                    <div>
                        <label for="Bank_Phone">Bank Phone:</label> &nbsp;
                        <input name="Bank_Phone"
                               type="text"
                               placeholder="(XXX)XXX-XXXX"
                               id="Bank_Phone">
                    </div>
                </section>
                <section>
                    <h3>Trade Reference</h3>
                    <div class="supplier">
                        <div>
                            <label for="Supplier_Name">Supplier Name:</label> &nbsp;
                            <input name="Supplier_Name" type="text"
                                   placeholder="Supplier 1's Name"
                                   id="Supplier_Name"/>
                        </div>
                        <div>
                            <label for="Supplier_City">Supplier City:</label> &nbsp;
                            <input name="Supplier_City"
                                   type="text"
                                   placeholder="Supplier 1 City"
                                   id="Supplier_City"/> &nbsp;State:
                            <select name="Supplier_State">
                                <option></option>
                                <option value="AL">AL</option>
                                <option value="AK">AK</option>
                                <option value="AR">AR</option>
                                <option value="AZ">AZ</option>
                                <option value="CA">CA</option>
                                <option value="CO">CO</option>
                                <option value="CT">CT</option>
                                <option value="DC">DC</option>
                                <option value="DE">DE</option>
                                <option value="FL">FL</option>
                                <option value="GA">GA</option>
                                <option value="HI">HI</option>
                                <option value="IA">IA</option>
                                <option value="ID">ID</option>
                                <option value="IL">IL</option>
                                <option value="IN">IN</option>
                                <option value="KS">KS</option>
                                <option value="KY">KY</option>
                                <option value="LA">LA</option>
                                <option value="MA">MA</option>
                                <option value="MD">MD</option>
                                <option value="ME">ME</option>
                                <option value="MI">MI</option>
                                <option value="MN">MN</option>
                                <option value="MO">MO</option>
                                <option value="MS">MS</option>
                                <option value="MT">MT</option>
                                <option value="NC">NC</option>
                                <option value="ND">ND</option>
                                <option value="NE">NE</option>
                                <option value="NH">NH</option>
                                <option value="NJ">NJ</option>
                                <option value="NM">NM</option>
                                <option value="NV">NV</option>
                                <option value="NM">NM</option>
                                <option value="NV">NV</option>
                                <option value="NY">NY</option>
                                <option value="OH">OH</option>
                                <option value="OK">OK</option>
                                <option value="OR">OR</option>
                                <option value="PA">PA</option>
                                <option value="RI">RI</option>
                                <option value="SC">SC</option>
                                <option value="SD">SD</option>
                                <option value="TN">TN</option>
                                <option value="TX">TX</option>
                                <option value="UT">UT</option>
                                <option value="VA">VA</option>
                                <option value="VT">VT</option>
                                <option value="WA">WA</option>
                                <option value="WI">WI</option>
                                <option value="WV">WV</option>
                                <option value="WY">WY</option>
                            </select>
                        </div>
                        <div>
                            <label for="Supplier_Phone">Supplier Phone:</label> &nbsp;
                            <input name="Supplier_Phone"
                                   type="text"
                                   placeholder="(XXX)XXX-XXXX"
                                   id="Supplier_Phone"/>
                        </div>
                        <div>
                            <label for="Supplier_Account_Number">Supplier Account #:</label> &nbsp;
                            <input name="Supplier_Account_Number"
                                   type="text"
                                   placeholder="ACCT#"
                                   id="Supplier_Account_Number"/>
                        </div>
                    </div>
                    <div class="supplier">
                        <div>
                            <label for="Supplier_2_Name">Supplier Name:</label> &nbsp;
                            <input name="Supplier_2_Name"
                                   type="text"
                                   placeholder="Supplier #2's Name"
                                   id="Supplier_2_Name"/>
                        </div>
                        <div>
                            <label for="Supplier_2_City">Supplier City:</label> &nbsp;
                            <input name="Supplier_2_City"
                                   type="text"
                                   placeholder="Supplier 2 City"
                                   id="Supplier_2_City"/> &nbsp;State:
                            <select name="Supplier_2_State">
                                <option></option>
                                <option value="AL">AL</option>
                                <option value="AK">AK</option>
                                <option value="AR">AR</option>
                                <option value="AZ">AZ</option>
                                <option value="CA">CA</option>
                                <option value="CO">CO</option>
                                <option value="CT">CT</option>
                                <option value="DC">DC</option>
                                <option value="DE">DE</option>
                                <option value="FL">FL</option>
                                <option value="GA">GA</option>
                                <option value="HI">HI</option>
                                <option value="IA">IA</option>
                                <option value="ID">ID</option>
                                <option value="IL">IL</option>
                                <option value="IN">IN</option>
                                <option value="KS">KS</option>
                                <option value="KY">KY</option>
                                <option value="LA">LA</option>
                                <option value="MA">MA</option>
                                <option value="MD">MD</option>
                                <option value="ME">ME</option>
                                <option value="MI">MI</option>
                                <option value="MN">MN</option>
                                <option value="MO">MO</option>
                                <option value="MS">MS</option>
                                <option value="MT">MT</option>
                                <option value="NC">NC</option>
                                <option value="ND">ND</option>
                                <option value="NE">NE</option>
                                <option value="NH">NH</option>
                                <option value="NJ">NJ</option>
                                <option value="NM">NM</option>
                                <option value="NV">NV</option>
                                <option value="NM">NM</option>
                                <option value="NV">NV</option>
                                <option value="NY">NY</option>
                                <option value="OH">OH</option>
                                <option value="OK">OK</option>
                                <option value="OR">OR</option>
                                <option value="PA">PA</option>
                                <option value="RI">RI</option>
                                <option value="SC">SC</option>
                                <option value="SD">SD</option>
                                <option value="TN">TN</option>
                                <option value="TX">TX</option>
                                <option value="UT">UT</option>
                                <option value="VA">VA</option>
                                <option value="VT">VT</option>
                                <option value="WA">WA</option>
                                <option value="WI">WI</option>
                                <option value="WV">WV</option>
                                <option value="WY">WY</option>
                            </select>
                        </div>
                        <div>
                            <label for="Supplier_2_Phone">Supplier Phone:</label> &nbsp;
                            <input name="Supplier_2_Phone"
                                   type="text"
                                   placeholder="(XXX)XXX-XXXX"
                                   id="Supplier_2_Phone"/>
                        </div>
                        <div>
                            <label for="Supplier_2_Account_Number">Supplier Account #:</label> &nbsp;
                            <input name="Supplier_2_Account_Number"
                                   type="text"
                                   placeholder="ACCT#"
                                   id="Supplier_2_Account_Number"/>
                        </div>
                    </div>
                </section>
                <section>
                    <input type="checkbox" name="SpamCheck" id="SpamCheck" value="NotSpam"> &nbsp;
                    <label for="SpamCheck">Please check this box to let us know you're not a spambot.</label>
                    <input type="hidden" name="SpamCheck2" value=""/>
                </section>
                <section class="controls">
                    <input type="reset" name="Reset" value="Reset" onclick="return resetForm()"/>
                    <input type="submit" name="Submit" value="Submit"/> <span id="Error_Message"></span>
                </section>
            </form>
        </div>
    </div>
    <?php get_footer(); ?>