<!DOCTYPE html>
<html lang="en">

<head>

<?php include  './includes/dashboard-head.php' ?>

</head>


<html>
  <body class="">
    

  <div class="wrapper ">
    <?php include './includes/sidebar.php'?> 
    
    <div class="main-panel">
      <?php include './includes/dashboard-header.php'?>
      <div class="content">
        <div class="container-fluid">
          
            
        <form class="custom-style">
          <div class="card card-body">
              <div class="row">
                <div class="col mb-3 mb-md-0">
                    <div class="">
                      <h3 class="heading-bd font-weight-light text-primary mt-0">Type</h3>
                      <select name="Type" id="provider-selector" class="form-control provider-selector" data-preselect="">
                          <option value="" selected disabled>Select type...</option>
                          <option>USPS Express V4</option>
                          <option>USPS First Class V4</option>
                          <option>UPS Next Day Air Early V2</option>
                          <option>UPS Next Day Air V2</option>
                          <option>UPS 2nd Day Air V2</option>
                          <option>UPS 3 Day Select V2</option>
                          <option>UPS Ground V2</option>
                          <option>USPS Priority</option>
                          <option>USPS Express</option>
                          <option>FedEx Ground</option>
                          <option>UPS Ground</option>
                          <option>RoyalMail</option>
                      </select>
                    </div>
                </div>
                <div class="col-md-6 mb-3 mb-md-0" id="WeightContainer">
                    <h3 class="heading-bd font-weight-light text-primary mt-0">Package Weight <i class="text-muted small" id="WeightHelper">(lb)</i></h3>
                    <div class="">
                      <input type="number" min="0" step="1" name="Weight" class="form-control" id="Weight" placeholder="0" required value="" required>
                    </div>
                </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-6">
                <div class="card">
                    <div class="heading-bd card-header font-weight-light text-primary h3 my-0">From Address</div>
                    <div class="card-body pb-2">
                      <div class="form-group">
                          <label for="FromTemplate" id="FromTemplateLabel" class="FieldLabel mb-1 text-muted">Saved Address</label>
                          <select id="FromTemplate" name="FromTemplate" class="form-control TemplateSelector" data-prefix="From" data-value="">
                            <option selected value="">Select a saved address...</option>
                            <option value="d1117763-b115-8b0b-6cd4-4d210d8c656c">Ray Padilla AK 74505</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="FromCountry" id="FromCountryLabel" class="FieldLabel mb-1 text-muted">Country <b class="text-danger" title="Required">*</b></label>
                          <select id="FromCountry" name="FromCountry" class="form-control" disabled data-value="">
                            <option selected disabled value="">Select a country</option>
                            <option value="AF">Afghanistan</option>
                            <option value="AX">Aland Islands</option>
                            <option value="AL">Albania</option>
                            <option value="DZ">Algeria</option>
                            <option value="AS">American Samoa</option>
                            <option value="AD">Andorra</option>
                            <option value="AO">Angola</option>
                            <option value="AI">Anguilla</option>
                            <option value="AQ">Antarctica</option>
                            <option value="AG">Antigua And Barbuda</option>
                            <option value="AR">Argentina</option>
                            <option value="AM">Armenia</option>
                            <option value="AW">Aruba</option>
                            <option value="AU">Australia</option>
                            <option value="AT">Austria</option>
                            <option value="AZ">Azerbaijan</option>
                            <option value="BS">Bahamas</option>
                            <option value="BH">Bahrain</option>
                            <option value="BD">Bangladesh</option>
                            <option value="BB">Barbados</option>
                            <option value="BY">Belarus</option>
                            <option value="BE">Belgium</option>
                            <option value="BZ">Belize</option>
                            <option value="BJ">Benin</option>
                            <option value="BM">Bermuda</option>
                            <option value="BT">Bhutan</option>
                            <option value="BO">Bolivia</option>
                            <option value="BA">Bosnia And Herzegovina</option>
                            <option value="BW">Botswana</option>
                            <option value="BV">Bouvet Island</option>
                            <option value="BR">Brazil</option>
                            <option value="IO">British Indian Ocean Territory</option>
                            <option value="BN">Brunei Darussalam</option>
                            <option value="BG">Bulgaria</option>
                            <option value="BF">Burkina Faso</option>
                            <option value="BI">Burundi</option>
                            <option value="KH">Cambodia</option>
                            <option value="CM">Cameroon</option>
                            <option value="CA">Canada</option>
                            <option value="CV">Cape Verde</option>
                            <option value="KY">Cayman Islands</option>
                            <option value="CF">Central African Republic</option>
                            <option value="TD">Chad</option>
                            <option value="CL">Chile</option>
                            <option value="CN">China</option>
                            <option value="CX">Christmas Island</option>
                            <option value="CC">Cocos (Keeling) Islands</option>
                            <option value="CO">Colombia</option>
                            <option value="KM">Comoros</option>
                            <option value="CG">Congo</option>
                            <option value="CD">Congo, Democratic Republic</option>
                            <option value="CK">Cook Islands</option>
                            <option value="CR">Costa Rica</option>
                            <option value="CI">Cote D&quot;Ivoire</option>
                            <option value="HR">Croatia</option>
                            <option value="CU">Cuba</option>
                            <option value="CY">Cyprus</option>
                            <option value="CZ">Czech Republic</option>
                            <option value="DK">Denmark</option>
                            <option value="DJ">Djibouti</option>
                            <option value="DM">Dominica</option>
                            <option value="DO">Dominican Republic</option>
                            <option value="EC">Ecuador</option>
                            <option value="EG">Egypt</option>
                            <option value="SV">El Salvador</option>
                            <option value="GQ">Equatorial Guinea</option>
                            <option value="ER">Eritrea</option>
                            <option value="EE">Estonia</option>
                            <option value="ET">Ethiopia</option>
                            <option value="FK">Falkland Islands (Malvinas)</option>
                            <option value="FO">Faroe Islands</option>
                            <option value="FJ">Fiji</option>
                            <option value="FI">Finland</option>
                            <option value="FR">France</option>
                            <option value="GF">French Guiana</option>
                            <option value="PF">French Polynesia</option>
                            <option value="PR">Puerto Rico</option>
                            <option value="TF">French Southern Territories</option>
                            <option value="GA">Gabon</option>
                            <option value="GM">Gambia</option>
                            <option value="GE">Georgia</option>
                            <option value="DE">Germany</option>
                            <option value="GH">Ghana</option>
                            <option value="GI">Gibraltar</option>
                            <option value="GR">Greece</option>
                            <option value="GL">Greenland</option>
                            <option value="GD">Grenada</option>
                            <option value="GP">Guadeloupe</option>
                            <option value="GU">Guam</option>
                            <option value="GT">Guatemala</option>
                            <option value="GG">Guernsey</option>
                            <option value="GN">Guinea</option>
                            <option value="GW">Guinea-Bissau</option>
                            <option value="GY">Guyana</option>
                            <option value="HT">Haiti</option>
                            <option value="HM">Heard Island &amp; Mcdonald Islands</option>
                            <option value="VA">Holy See (Vatican City State)</option>
                            <option value="HN">Honduras</option>
                            <option value="HK">Hong Kong</option>
                            <option value="HU">Hungary</option>
                            <option value="IS">Iceland</option>
                            <option value="IN">India</option>
                            <option value="ID">Indonesia</option>
                            <option value="IR">Iran, Islamic Republic Of</option>
                            <option value="IQ">Iraq</option>
                            <option value="IE">Ireland</option>
                            <option value="IM">Isle Of Man</option>
                            <option value="IL">Israel</option>
                            <option value="IT">Italy</option>
                            <option value="JM">Jamaica</option>
                            <option value="JP">Japan</option>
                            <option value="JE">Jersey</option>
                            <option value="JO">Jordan</option>
                            <option value="KZ">Kazakhstan</option>
                            <option value="KE">Kenya</option>
                            <option value="KI">Kiribati</option>
                            <option value="KR">South Korea</option>
                            <option value="KW">Kuwait</option>
                            <option value="KG">Kyrgyzstan</option>
                            <option value="LA">Lao People&quot;s Democratic Republic</option>
                            <option value="LV">Latvia</option>
                            <option value="LB">Lebanon</option>
                            <option value="LS">Lesotho</option>
                            <option value="LR">Liberia</option>
                            <option value="LY">Libyan Arab Jamahiriya</option>
                            <option value="LI">Liechtenstein</option>
                            <option value="LT">Lithuania</option>
                            <option value="LU">Luxembourg</option>
                            <option value="MO">Macao</option>
                            <option value="MK">Macedonia</option>
                            <option value="MG">Madagascar</option>
                            <option value="MW">Malawi</option>
                            <option value="MY">Malaysia</option>
                            <option value="MV">Maldives</option>
                            <option value="ML">Mali</option>
                            <option value="MT">Malta</option>
                            <option value="MH">Marshall Islands</option>
                            <option value="MQ">Martinique</option>
                            <option value="MR">Mauritania</option>
                            <option value="MU">Mauritius</option>
                            <option value="YT">Mayotte</option>
                            <option value="MX">Mexico</option>
                            <option value="FM">Micronesia, Federated States Of</option>
                            <option value="MD">Moldova</option>
                            <option value="MC">Monaco</option>
                            <option value="MN">Mongolia</option>
                            <option value="ME">Montenegro</option>
                            <option value="MS">Montserrat</option>
                            <option value="MA">Morocco</option>
                            <option value="MZ">Mozambique</option>
                            <option value="MM">Myanmar</option>
                            <option value="NA">Namibia</option>
                            <option value="NR">Nauru</option>
                            <option value="NP">Nepal</option>
                            <option value="NL">Netherlands</option>
                            <option value="AN">Netherlands Antilles</option>
                            <option value="NC">New Caledonia</option>
                            <option value="NZ">New Zealand</option>
                            <option value="NI">Nicaragua</option>
                            <option value="NE">Niger</option>
                            <option value="NG">Nigeria</option>
                            <option value="NU">Niue</option>
                            <option value="NF">Norfolk Island</option>
                            <option value="MP">Northern Mariana Islands</option>
                            <option value="NO">Norway</option>
                            <option value="OM">Oman</option>
                            <option value="PK">Pakistan</option>
                            <option value="PW">Palau</option>
                            <option value="PS">Palestinian Territory, Occupied</option>
                            <option value="PA">Panama</option>
                            <option value="PG">Papua New Guinea</option>
                            <option value="PY">Paraguay</option>
                            <option value="PE">Peru</option>
                            <option value="PH">Philippines</option>
                            <option value="PN">Pitcairn</option>
                            <option value="PL">Poland</option>
                            <option value="PT">Portugal</option>
                            <option value="QA">Qatar</option>
                            <option value="RE">Reunion</option>
                            <option value="RO">Romania</option>
                            <option value="RU">Russian Federation</option>
                            <option value="RW">Rwanda</option>
                            <option value="BL">Saint Barthelemy</option>
                            <option value="SH">Saint Helena</option>
                            <option value="KN">Saint Kitts And Nevis</option>
                            <option value="LC">Saint Lucia</option>
                            <option value="MF">Saint Martin</option>
                            <option value="PM">Saint Pierre And Miquelon</option>
                            <option value="VC">Saint Vincent And Grenadines</option>
                            <option value="WS">Samoa</option>
                            <option value="SM">San Marino</option>
                            <option value="ST">Sao Tome And Principe</option>
                            <option value="SA">Saudi Arabia</option>
                            <option value="SN">Senegal</option>
                            <option value="RS">Serbia</option>
                            <option value="SC">Seychelles</option>
                            <option value="SL">Sierra Leone</option>
                            <option value="SG">Singapore</option>
                            <option value="SK">Slovakia</option>
                            <option value="SI">Slovenia</option>
                            <option value="SB">Solomon Islands</option>
                            <option value="SO">Somalia</option>
                            <option value="ZA">South Africa</option>
                            <option value="GS">South Georgia And Sandwich Isl.</option>
                            <option value="ES">Spain</option>
                            <option value="LK">Sri Lanka</option>
                            <option value="SD">Sudan</option>
                            <option value="SR">Suriname</option>
                            <option value="SJ">Svalbard And Jan Mayen</option>
                            <option value="SZ">Swaziland</option>
                            <option value="SE">Sweden</option>
                            <option value="CH">Switzerland</option>
                            <option value="SY">Syrian Arab Republic</option>
                            <option value="TW">Taiwan</option>
                            <option value="TJ">Tajikistan</option>
                            <option value="TZ">Tanzania</option>
                            <option value="TH">Thailand</option>
                            <option value="TL">Timor-Leste</option>
                            <option value="TG">Togo</option>
                            <option value="TK">Tokelau</option>
                            <option value="TO">Tonga</option>
                            <option value="TT">Trinidad And Tobago</option>
                            <option value="TN">Tunisia</option>
                            <option value="TR">Turkey</option>
                            <option value="TM">Turkmenistan</option>
                            <option value="TC">Turks And Caicos Islands</option>
                            <option value="TV">Tuvalu</option>
                            <option value="UG">Uganda</option>
                            <option value="UA">Ukraine</option>
                            <option value="AE">United Arab Emirates</option>
                            <option value="UK">United Kingdom</option>
                            <option value="US">United States</option>
                            <option value="UM">United States Outlying Islands</option>
                            <option value="UY">Uruguay</option>
                            <option value="UZ">Uzbekistan</option>
                            <option value="VU">Vanuatu</option>
                            <option value="VE">Venezuela</option>
                            <option value="VN">Viet Nam</option>
                            <option value="VG">Virgin Islands, British</option>
                            <option value="VI">Virgin Islands, U.S.</option>
                            <option value="WF">Wallis And Futuna</option>
                            <option value="EH">Western Sahara</option>
                            <option value="YE">Yemen</option>
                            <option value="ZM">Zambia</option>
                            <option value="ZW">Zimbabwe</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="FromName" id="FromNameLabel" class="FieldLabel mb-1 text-muted">Name <b class="text-danger" title="Required">*</b></label>
                          <input type="text" class="form-control" id="FromName" name="FromName" maxlength="40" placeholder="Name" value="" data-filter="^[A-Za-z ]{1,40}$" required>
                      </div>
                      <div class="form-group">
                          <label for="FromCompany" id="FromCompanyLabel" class="FieldLabel mb-1 text-muted">Company / Reference Number <i class="text-muted">(optional)</i></label>
                          <input type="text" class="form-control" id="FromCompany" name="FromCompany" placeholder="Company" value="" data-filter="^[A-Za-z0-9#:\- ]{1,40}$">
                      </div>
                      <div id="FromPhoneContainer" class="form-group">
                          <label for="FromPhone" id="FromPhoneLabel" class="FieldLabel mb-1 text-muted">Phone</label>
                          <div class="input-group random-phone">
                            <input type="text" class="form-control" id="FromPhone" name="FromPhone" placeholder="Phone" value="" data-filter="^[0-9]{1,10}$">
                            <span class="input-group-append input-group-text">
                            <span class="fa fa-random"></span>
                            </span>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="FromStreet" id="FromStreetLabel" class="FieldLabel mb-1 text-muted">Street <b class="text-danger" title="Required">*</b></label>
                          <input type="text" class="form-control" id="FromStreet" name="FromStreet" placeholder="Street" value="" data-filter="^[A-Za-z0-9 ]{1,40}$" required>
                      </div>
                      <div class="form-group">
                          <label for="FromStreet2" id="FromStreet2Label" class="FieldLabel mb-1 text-muted">Street 2 <i class="text-muted">(optional)</i></label>
                          <input type="text" class="form-control" id="FromStreet2" name="FromStreet2" placeholder="Street 2" value="" data-filter="^[A-Za-z0-9 ]{1,40}$">
                      </div>
                      <div class="form-group">
                          <label for="FromCity" id="FromCityLabel" class="FieldLabel mb-1 text-muted">City</label>
                          <input type="text" class="form-control" name="FromCity" id="FromCity" placeholder="City" value="" data-filter="^[A-Za-z ]{1,40}$" required>
                      </div>
                      <div class="form-group">
                          <label for="FromZip" id="FromZipLabel" class="FieldLabel ">Zip <b class="text-danger" title="Required">*</b> <i class="text-muted">(auto-fills state and city)</i> </label>
                          <input type="text" class="form-control zip-autofill" name="FromZip" id="FromZip" placeholder="Zip" maxlength="10" value="" maxlength="10" data-prefix="From" data-city="FromCity" data-state="FromState" data-key="js-4SWpExZK9XLhWvZDHhF53Wn4T01YXy8YTJa4cuOBkXJ6fmpBdi6iMbrvMlExInH4" data-filter="^[A-Za-z0-9\- ]{1,40}$" required>
                      </div>
                      <div id="FromStateContainer" class="form-group">
                          <label for="FromState" id="FromStateLabel" class="FieldLabel mb-1 text-muted">State</label>
                          <select id="FromState" name="FromState" class="form-control" data-value="" required>
                            <option selected disabled value="">Select a state</option>
                            <option value="AK">Alaska (AK)</option>
                            <option value="AL">Alabama (AL)</option>
                            <option value="AR">Arkansas (AR)</option>
                            <option value="AZ">Arizona (AZ)</option>
                            <option value="CA">California (CA)</option>
                            <option value="CO">Colorado (CO)</option>
                            <option value="CT">Connecticut (CT)</option>
                            <option value="DC">District Of Columbia (DC)</option>
                            <option value="DE">Delaware (DE)</option>
                            <option value="FL">Florida (FL)</option>
                            <option value="GA">Georgia (GA)</option>
                            <option value="HI">Hawaii (HI)</option>
                            <option value="IA">Iowa (IA)</option>
                            <option value="ID">Idaho (ID)</option>
                            <option value="IL">Illinois (IL)</option>
                            <option value="IN">Indiana (IN)</option>
                            <option value="KS">Kansas (KS)</option>
                            <option value="KY">Kentucky (KY)</option>
                            <option value="LA">Louisiana (LA)</option>
                            <option value="MA">Massachusetts (MA)</option>
                            <option value="MD">Maryland (MD)</option>
                            <option value="ME">Maine (ME)</option>
                            <option value="MI">Michigan (MI)</option>
                            <option value="MN">Minnesota (MN)</option>
                            <option value="MO">Missouri (MO)</option>
                            <option value="MS">Mississippi (MS)</option>
                            <option value="MT">Montana (MT)</option>
                            <option value="NC">North Carolina (NC)</option>
                            <option value="ND">North Dakota (ND)</option>
                            <option value="NE">Nebraska (NE)</option>
                            <option value="NH">New Hampshire (NH)</option>
                            <option value="NJ">New Jersey (NJ)</option>
                            <option value="NM">New Mexico (NM)</option>
                            <option value="NV">Nevada (NV)</option>
                            <option value="NY">New York (NY)</option>
                            <option value="OH">Ohio (OH)</option>
                            <option value="OK">Oklahoma (OK)</option>
                            <option value="OR">Oregon (OR)</option>
                            <option value="PA">Pennsylvania (PA)</option>
                            <option value="PR">Puerto Rico (PR)</option>
                            <option value="RI">Rhode Island (RI)</option>
                            <option value="SC">South Carolina (SC)</option>
                            <option value="SD">South Dakota (SD)</option>
                            <option value="TN">Tennessee (TN)</option>
                            <option value="TX">Texas (TX)</option>
                            <option value="UT">Utah (UT)</option>
                            <option value="VA">Virginia (VA)</option>
                            <option value="VT">Vermont (VT)</option>
                            <option value="WA">Washington (WA)</option>
                            <option value="WI">Wisconsin (WI)</option>
                            <option value="WV">West Virginia (WV)</option>
                            <option value="WY">Wyoming (WY)</option>
                          </select>
                      </div>
                      <div id="FromStateIntContainer" class="form-group int-only" style="display: none;">
                          <label for="FromStateInt" id="FromStateIntLabel" class="FieldLabel mb-1 text-muted">State</label>
                          <input type="text" class="form-control" name="FromState" id="FromStateInt" placeholder="State" value="" data-filter="^[A-Za-z ]{1,40}$">
                      </div>
                    </div>
                </div>
              </div>
              <div class="col-md-6">
                <div id="order-to">
                    <div class="card">
                      <div class="heading-bd card-header font-weight-light text-primary h3 my-0 d-flex justify-content-between align-items-center">
                          <div>To Address</div>
                          <button type="button" class="btn btn-link p-0 text-danger order-to-remove d-none">
                          <span class="fa fa-sm fa-trash-alt"></span>
                          </button>
                      </div>
                      <div class="card-body pb-2">
                          <div class="form-group order-to-template-seletor">
                            <label for="ToTemplate" id="ToTemplateLabel" class="FieldLabel mb-1 text-muted">Saved Address</label>
                            <select id="ToTemplate" name="To[Template][]" class="form-control TemplateSelector" data-prefix="To" data-value="">
                                <option selected value="">Select a saved address...</option>
                                <option value="d1117763-b115-8b0b-6cd4-4d210d8c656c">Ray Padilla AK 74505</option>
                            </select>
                          </div>
                          <div class="form-group order-to-country">
                            <label for="ToCountry" id="ToCountryLabel" class="FieldLabel mb-1 text-muted">Country <b class="text-danger" title="Required">*</b></label>
                            <select id="ToCountry" name="To[Country][]" class="form-control" disabled data-value="">
                                <option selected disabled value="">Select a country</option>
                                <option value="AF">Afghanistan</option>
                                <option value="AX">Aland Islands</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AQ">Antarctica</option>
                                <option value="AG">Antigua And Barbuda</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaijan</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahrain</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB">Barbados</option>
                                <option value="BY">Belarus</option>
                                <option value="BE">Belgium</option>
                                <option value="BZ">Belize</option>
                                <option value="BJ">Benin</option>
                                <option value="BM">Bermuda</option>
                                <option value="BT">Bhutan</option>
                                <option value="BO">Bolivia</option>
                                <option value="BA">Bosnia And Herzegovina</option>
                                <option value="BW">Botswana</option>
                                <option value="BV">Bouvet Island</option>
                                <option value="BR">Brazil</option>
                                <option value="IO">British Indian Ocean Territory</option>
                                <option value="BN">Brunei Darussalam</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="KH">Cambodia</option>
                                <option value="CM">Cameroon</option>
                                <option value="CA">Canada</option>
                                <option value="CV">Cape Verde</option>
                                <option value="KY">Cayman Islands</option>
                                <option value="CF">Central African Republic</option>
                                <option value="TD">Chad</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CX">Christmas Island</option>
                                <option value="CC">Cocos (Keeling) Islands</option>
                                <option value="CO">Colombia</option>
                                <option value="KM">Comoros</option>
                                <option value="CG">Congo</option>
                                <option value="CD">Congo, Democratic Republic</option>
                                <option value="CK">Cook Islands</option>
                                <option value="CR">Costa Rica</option>
                                <option value="CI">Cote D&quot;Ivoire</option>
                                <option value="HR">Croatia</option>
                                <option value="CU">Cuba</option>
                                <option value="CY">Cyprus</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="DK">Denmark</option>
                                <option value="DJ">Djibouti</option>
                                <option value="DM">Dominica</option>
                                <option value="DO">Dominican Republic</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egypt</option>
                                <option value="SV">El Salvador</option>
                                <option value="GQ">Equatorial Guinea</option>
                                <option value="ER">Eritrea</option>
                                <option value="EE">Estonia</option>
                                <option value="ET">Ethiopia</option>
                                <option value="FK">Falkland Islands (Malvinas)</option>
                                <option value="FO">Faroe Islands</option>
                                <option value="FJ">Fiji</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="GF">French Guiana</option>
                                <option value="PF">French Polynesia</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="TF">French Southern Territories</option>
                                <option value="GA">Gabon</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="DE">Germany</option>
                                <option value="GH">Ghana</option>
                                <option value="GI">Gibraltar</option>
                                <option value="GR">Greece</option>
                                <option value="GL">Greenland</option>
                                <option value="GD">Grenada</option>
                                <option value="GP">Guadeloupe</option>
                                <option value="GU">Guam</option>
                                <option value="GT">Guatemala</option>
                                <option value="GG">Guernsey</option>
                                <option value="GN">Guinea</option>
                                <option value="GW">Guinea-Bissau</option>
                                <option value="GY">Guyana</option>
                                <option value="HT">Haiti</option>
                                <option value="HM">Heard Island &amp; Mcdonald Islands</option>
                                <option value="VA">Holy See (Vatican City State)</option>
                                <option value="HN">Honduras</option>
                                <option value="HK">Hong Kong</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IR">Iran, Islamic Republic Of</option>
                                <option value="IQ">Iraq</option>
                                <option value="IE">Ireland</option>
                                <option value="IM">Isle Of Man</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italy</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japan</option>
                                <option value="JE">Jersey</option>
                                <option value="JO">Jordan</option>
                                <option value="KZ">Kazakhstan</option>
                                <option value="KE">Kenya</option>
                                <option value="KI">Kiribati</option>
                                <option value="KR">South Korea</option>
                                <option value="KW">Kuwait</option>
                                <option value="KG">Kyrgyzstan</option>
                                <option value="LA">Lao People&quot;s Democratic Republic</option>
                                <option value="LV">Latvia</option>
                                <option value="LB">Lebanon</option>
                                <option value="LS">Lesotho</option>
                                <option value="LR">Liberia</option>
                                <option value="LY">Libyan Arab Jamahiriya</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lithuania</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MO">Macao</option>
                                <option value="MK">Macedonia</option>
                                <option value="MG">Madagascar</option>
                                <option value="MW">Malawi</option>
                                <option value="MY">Malaysia</option>
                                <option value="MV">Maldives</option>
                                <option value="ML">Mali</option>
                                <option value="MT">Malta</option>
                                <option value="MH">Marshall Islands</option>
                                <option value="MQ">Martinique</option>
                                <option value="MR">Mauritania</option>
                                <option value="MU">Mauritius</option>
                                <option value="YT">Mayotte</option>
                                <option value="MX">Mexico</option>
                                <option value="FM">Micronesia, Federated States Of</option>
                                <option value="MD">Moldova</option>
                                <option value="MC">Monaco</option>
                                <option value="MN">Mongolia</option>
                                <option value="ME">Montenegro</option>
                                <option value="MS">Montserrat</option>
                                <option value="MA">Morocco</option>
                                <option value="MZ">Mozambique</option>
                                <option value="MM">Myanmar</option>
                                <option value="NA">Namibia</option>
                                <option value="NR">Nauru</option>
                                <option value="NP">Nepal</option>
                                <option value="NL">Netherlands</option>
                                <option value="AN">Netherlands Antilles</option>
                                <option value="NC">New Caledonia</option>
                                <option value="NZ">New Zealand</option>
                                <option value="NI">Nicaragua</option>
                                <option value="NE">Niger</option>
                                <option value="NG">Nigeria</option>
                                <option value="NU">Niue</option>
                                <option value="NF">Norfolk Island</option>
                                <option value="MP">Northern Mariana Islands</option>
                                <option value="NO">Norway</option>
                                <option value="OM">Oman</option>
                                <option value="PK">Pakistan</option>
                                <option value="PW">Palau</option>
                                <option value="PS">Palestinian Territory, Occupied</option>
                                <option value="PA">Panama</option>
                                <option value="PG">Papua New Guinea</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE">Peru</option>
                                <option value="PH">Philippines</option>
                                <option value="PN">Pitcairn</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="QA">Qatar</option>
                                <option value="RE">Reunion</option>
                                <option value="RO">Romania</option>
                                <option value="RU">Russian Federation</option>
                                <option value="RW">Rwanda</option>
                                <option value="BL">Saint Barthelemy</option>
                                <option value="SH">Saint Helena</option>
                                <option value="KN">Saint Kitts And Nevis</option>
                                <option value="LC">Saint Lucia</option>
                                <option value="MF">Saint Martin</option>
                                <option value="PM">Saint Pierre And Miquelon</option>
                                <option value="VC">Saint Vincent And Grenadines</option>
                                <option value="WS">Samoa</option>
                                <option value="SM">San Marino</option>
                                <option value="ST">Sao Tome And Principe</option>
                                <option value="SA">Saudi Arabia</option>
                                <option value="SN">Senegal</option>
                                <option value="RS">Serbia</option>
                                <option value="SC">Seychelles</option>
                                <option value="SL">Sierra Leone</option>
                                <option value="SG">Singapore</option>
                                <option value="SK">Slovakia</option>
                                <option value="SI">Slovenia</option>
                                <option value="SB">Solomon Islands</option>
                                <option value="SO">Somalia</option>
                                <option value="ZA">South Africa</option>
                                <option value="GS">South Georgia And Sandwich Isl.</option>
                                <option value="ES">Spain</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="SD">Sudan</option>
                                <option value="SR">Suriname</option>
                                <option value="SJ">Svalbard And Jan Mayen</option>
                                <option value="SZ">Swaziland</option>
                                <option value="SE">Sweden</option>
                                <option value="CH">Switzerland</option>
                                <option value="SY">Syrian Arab Republic</option>
                                <option value="TW">Taiwan</option>
                                <option value="TJ">Tajikistan</option>
                                <option value="TZ">Tanzania</option>
                                <option value="TH">Thailand</option>
                                <option value="TL">Timor-Leste</option>
                                <option value="TG">Togo</option>
                                <option value="TK">Tokelau</option>
                                <option value="TO">Tonga</option>
                                <option value="TT">Trinidad And Tobago</option>
                                <option value="TN">Tunisia</option>
                                <option value="TR">Turkey</option>
                                <option value="TM">Turkmenistan</option>
                                <option value="TC">Turks And Caicos Islands</option>
                                <option value="TV">Tuvalu</option>
                                <option value="UG">Uganda</option>
                                <option value="UA">Ukraine</option>
                                <option value="AE">United Arab Emirates</option>
                                <option value="UK">United Kingdom</option>
                                <option value="US">United States</option>
                                <option value="UM">United States Outlying Islands</option>
                                <option value="UY">Uruguay</option>
                                <option value="UZ">Uzbekistan</option>
                                <option value="VU">Vanuatu</option>
                                <option value="VE">Venezuela</option>
                                <option value="VN">Viet Nam</option>
                                <option value="VG">Virgin Islands, British</option>
                                <option value="VI">Virgin Islands, U.S.</option>
                                <option value="WF">Wallis And Futuna</option>
                                <option value="EH">Western Sahara</option>
                                <option value="YE">Yemen</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabwe</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="ToName" id="ToNameLabel" class="FieldLabel mb-1 text-muted">Name <b class="text-danger" title="Required">*</b></label>
                            <input type="text" class="form-control" id="ToName" name="To[Name][]" maxlength="40" placeholder="Name" value="" data-filter="^[A-Za-z ]{1,40}$" required>
                          </div>
                          <div class="form-group">
                            <label for="ToCompany" id="ToCompanyLabel" class="FieldLabel mb-1 text-muted">Company / Reference Number <i class="text-muted">(optional)</i></label>
                            <input type="text" class="form-control" id="ToCompany" name="To[Company][]" placeholder="Company" value="" data-filter="^[A-Za-z0-9#:\- ]{1,40}$">
                          </div>
                          <div id="ToPhoneContainer" class="form-group">
                            <label for="ToPhone" id="ToPhoneLabel" class="FieldLabel mb-1 text-muted">Phone</label>
                            <div class="input-group random-phone">
                                <input type="text" class="form-control" id="ToPhone" name="To[Phone][]" placeholder="Phone" value="" data-filter="^[0-9]{1,10}$">
                                <span class="input-group-append input-group-text">
                                <span class="fa fa-random"></span>
                                </span>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="ToStreet" id="ToStreetLabel" class="FieldLabel mb-1 text-muted">Street <b class="text-danger" title="Required">*</b></label>
                            <input type="text" class="form-control" id="ToStreet" name="To[Street][]" placeholder="Street" value="" data-filter="^[A-Za-z0-9 ]{1,40}$" required>
                          </div>
                          <div class="form-group">
                            <label for="ToStreet2" id="ToStreet2Label" class="FieldLabel mb-1 text-muted">Street 2 <i class="text-muted">(optional)</i></label>
                            <input type="text" class="form-control" id="ToStreet2" name="To[Street2][]" placeholder="Street 2" value="" data-filter="^[A-Za-z0-9 ]{1,40}$">
                          </div>
                          <div class="form-group">
                            <label for="ToCity" id="ToCityLabel" class="FieldLabel mb-1 text-muted">City</label>
                            <input type="text" class="form-control" id="ToCity" name="To[City][]" placeholder="City" value="" data-filter="^[A-Za-z ]{1,40}$" required>
                          </div>
                          <div class="form-group">
                            <label for="ToZip" id="ToZipLabel" class="FieldLabel ">Zip <b class="text-danger" title="Required">*</b> <i class="text-muted">(auto-fills state and city)</i></label>
                            <input type="text" class="form-control zip-autofill" name="To[Zip][]" id="ToZip" placeholder="Zip" maxlength="10" value="" maxlength="10" data-prefix="To" data-city="ToCity" data-state="ToState" data-key="js-4SWpExZK9XLhWvZDHhF53Wn4T01YXy8YTJa4cuOBkXJ6fmpBdi6iMbrvMlExInH4" data-filter="^[A-Za-z0-9\- ]{1,40}$" required>
                          </div>
                          <div id="ToStateContainer" class="form-group">
                            <label for="ToState" id="ToStateLabel" class="FieldLabel mb-1 text-muted">State</label>
                            <select id="ToState" name="To[State][]" class="form-control" data-value="" required>
                                <option selected disabled value="">Select a state</option>
                                <option value="AK">Alaska (AK)</option>
                                <option value="AL">Alabama (AL)</option>
                                <option value="AR">Arkansas (AR)</option>
                                <option value="AZ">Arizona (AZ)</option>
                                <option value="CA">California (CA)</option>
                                <option value="CO">Colorado (CO)</option>
                                <option value="CT">Connecticut (CT)</option>
                                <option value="DC">District Of Columbia (DC)</option>
                                <option value="DE">Delaware (DE)</option>
                                <option value="FL">Florida (FL)</option>
                                <option value="GA">Georgia (GA)</option>
                                <option value="HI">Hawaii (HI)</option>
                                <option value="IA">Iowa (IA)</option>
                                <option value="ID">Idaho (ID)</option>
                                <option value="IL">Illinois (IL)</option>
                                <option value="IN">Indiana (IN)</option>
                                <option value="KS">Kansas (KS)</option>
                                <option value="KY">Kentucky (KY)</option>
                                <option value="LA">Louisiana (LA)</option>
                                <option value="MA">Massachusetts (MA)</option>
                                <option value="MD">Maryland (MD)</option>
                                <option value="ME">Maine (ME)</option>
                                <option value="MI">Michigan (MI)</option>
                                <option value="MN">Minnesota (MN)</option>
                                <option value="MO">Missouri (MO)</option>
                                <option value="MS">Mississippi (MS)</option>
                                <option value="MT">Montana (MT)</option>
                                <option value="NC">North Carolina (NC)</option>
                                <option value="ND">North Dakota (ND)</option>
                                <option value="NE">Nebraska (NE)</option>
                                <option value="NH">New Hampshire (NH)</option>
                                <option value="NJ">New Jersey (NJ)</option>
                                <option value="NM">New Mexico (NM)</option>
                                <option value="NV">Nevada (NV)</option>
                                <option value="NY">New York (NY)</option>
                                <option value="OH">Ohio (OH)</option>
                                <option value="OK">Oklahoma (OK)</option>
                                <option value="OR">Oregon (OR)</option>
                                <option value="PA">Pennsylvania (PA)</option>
                                <option value="PR">Puerto Rico (PR)</option>
                                <option value="RI">Rhode Island (RI)</option>
                                <option value="SC">South Carolina (SC)</option>
                                <option value="SD">South Dakota (SD)</option>
                                <option value="TN">Tennessee (TN)</option>
                                <option value="TX">Texas (TX)</option>
                                <option value="UT">Utah (UT)</option>
                                <option value="VA">Virginia (VA)</option>
                                <option value="VT">Vermont (VT)</option>
                                <option value="WA">Washington (WA)</option>
                                <option value="WI">Wisconsin (WI)</option>
                                <option value="WV">West Virginia (WV)</option>
                                <option value="WY">Wyoming (WY)</option>
                            </select>
                          </div>
                          <div id="ToStateIntContainer" class="form-group int-only" style="display: none;">
                            <label for="ToStateInt" id="ToStateIntLabel" class="FieldLabel mb-1 text-muted">State</label>
                            <input type="text" class="form-control" name="To[State][]" id="ToStateInt" placeholder="State" value="" data-filter="^[A-Za-z ]{1,40}$">
                          </div>
                      </div>
                    </div>
                </div>
                <div class="mb-4">
                    <input type="file" id="order-to-import-file" class="d-none">
                    <button type="button" class="btn btn-success" id="order-to-import">
                    <span class="fa fa-file-csv mr-1"></span>
                    <span>Import CSV</span>
                    </button>
                    <span class="fa fa-lg fa-question-circle text-muted px-3" data-toggle="popover" title="The CSV should be delimited with comma (,) and the following headers" data-content="Country,Name,Company,Street1,Street2,City,State,Zip"></span>
                    <button type="button" class="btn btn-link text-success p-0" id="order-to-add">
                    <span class="fa fa-plus mr-1"></span>
                    <span>or add reciever manually</span>
                    </button>
                </div>
              </div>
          </div>
          <div class="d-md-flex justify-content-between align-items-center text-center">
              <button type="submit" id="order-button" class="btn btn-lg btn-primary"><span class="fa fa-tag mr-3"></span>Order Label</button>
              <div class="">
                <input type="text" name="Coupon" class="form-control coupon-code" placeholder="Coupon Code" id="Coupon">
                <div id="CouponMessage" class="mt-1" style="display: none;"></div>
              </div>
              <h1 class="font-weight-light text-center text-md-left">Price: <span id="Price" data-currency="$" class="text-success">$0.00</span></h1>
          </div>
          <p class="text-small text-danger text-center text-md-right">* Required Fields</p>
        </form>

              
        </div>

      </div>

      <?php include './includes/dashboard-footer.php'?> 
    </div>
  </div>
  

  <?php include './includes/theme-color.php'?>

  <?php include './includes/footer.php'?>

  </body>

</html>