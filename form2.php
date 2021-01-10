<?php
	session_start();
?>
<html>
	<head>
		<title>Registration Form</title>
	</head>
	<body>
		<h3 align="center">Application Form</h3>
		<center>
		<table>
			<form name="my_form" method="POST" action="" enctype="multipart/form-data" >
				<tr>
					<td><strong>Username:</br></br></strong></td>
					<td><input type="text" name="u_name" placeholder="User name" required autofocus></br></br></td>
				</tr>
				<tr>
					<td><strong>Name:</br></br></strong></td>
					<td><input type="text" name="name" placeholder="Enter your name" required></br></br></td>
				</tr>
				<tr>
					<td><strong>Age:</br></br></strong></td>
					<td><input type="text" name="Age_txt" placeholder="Enter your age"></br></br></td>
				</tr>
				<tr>
					<td><strong>Phone No:</br></br></strong></td>
					<td>
					<select name="countryCode" >	
							<option  >Country Code....</option>
							<option name="GB" value="44">UK (+44)</option>
							<option name="US" value="1">USA (+1)</option>
							<option name="DZ" value="213">Algeria (+213)</option>
							<option name="AD" value="376">Andorra (+376)</option>
							<option name="AO" value="244">Angola (+244)</option>
							<option name="AI" value="1264">Anguilla (+1264)</option>
							<option name="AG" value="1268">Antigua Barbuda (+1268)</option>
							<option name="AR" value="54">Argentina (+54)</option>
							<option name="AM" value="374">Armenia (+374)</option>
							<option name="AW" value="297">Aruba (+297)</option>
							<option name="AU" value="61">Australia (+61)</option>
							<option name="AT" value="43">Austria (+43)</option>
							<option name="AZ" value="994">Azerbaijan (+994)</option>
							<option name="BS" value="1242">Bahamas (+1242)</option>
							<option name="BH" value="973">Bahrain (+973)</option>
							<option name="BD" value="880">Bangladesh (+880)</option>
							<option name="BB" value="1246">Barbados (+1246)</option>
							<option name="BY" value="375">Belarus (+375)</option>
							<option name="BE" value="32">Belgium (+32)</option>
							<option name="BZ" value="501">Belize (+501)</option>
							<option name="BJ" value="229">Benin (+229)</option>
							<option name="BM" value="1441">Bermuda (+1441)</option>
							<option name="BT" value="975">Bhutan (+975)</option>
							<option name="BO" value="591">Bolivia (+591)</option>
							<option name="BA" value="387">Bosnia Herzegovina (+387)</option>
							<option name="BW" value="267">Botswana (+267)</option>
							<option name="BR" value="55">Brazil (+55)</option>
							<option name="BN" value="673">Brunei (+673)</option>
							<option name="BG" value="359">Bulgaria (+359)</option>
							<option name="BF" value="226">Burkina Faso (+226)</option>
							<option name="BI" value="257">Burundi (+257)</option>
							<option name="KH" value="855">Cambodia (+855)</option>
							<option name="CM" value="237">Cameroon (+237)</option>
							<option name="CA" value="1">Canada (+1)</option>
							<option name="CV" value="238">Cape Verde Islands (+238)</option>
							<option name="KY" value="1345">Cayman Islands (+1345)</option>
							<option name="CF" value="236">Central African Republic (+236)</option>
							<option name="CL" value="56">Chile (+56)</option>
							<option name="CN" value="86">China (+86)</option>
							<option name="CO" value="57">Colombia (+57)</option>
							<option name="KM" value="269">Comoros (+269)</option>
							<option name="CG" value="242">Congo (+242)</option>
							<option name="CK" value="682">Cook Islands (+682)</option>
							<option name="CR" value="506">Costa Rica (+506)</option>
							<option name="HR" value="385">Croatia (+385)</option>
							<option name="CU" value="53">Cuba (+53)</option>
							<option name="CY" value="90392">Cyprus North (+90392)</option>
							<option name="CY" value="357">Cyprus South (+357)</option>
							<option name="CZ" value="42">Czech Republic (+42)</option>
							<option name="DK" value="45">Denmark (+45)</option>
							<option name="DJ" value="253">Djibouti (+253)</option>
							<option name="DM" value="1809">Dominica (+1809)</option>
							<option name="DO" value="1809">Dominican Republic (+1809)</option>
							<option name="EC" value="593">Ecuador (+593)</option>
							<option name="EG" value="20">Egypt (+20)</option>
							<option name="SV" value="503">El Salvador (+503)</option>
							<option name="GQ" value="240">Equatorial Guinea (+240)</option>
							<option name="ER" value="291">Eritrea (+291)</option>
							<option name="EE" value="372">Estonia (+372)</option>
							<option name="ET" value="251">Ethiopia (+251)</option>
							<option name="FK" value="500">Falkland Islands (+500)</option>
							<option name="FO" value="298">Faroe Islands (+298)</option>
							<option name="FJ" value="679">Fiji (+679)</option>
							<option name="FI" value="358">Finland (+358)</option>
							<option name="FR" value="33">France (+33)</option>
							<option name="GF" value="594">French Guiana (+594)</option>
							<option name="PF" value="689">French Polynesia (+689)</option>
							<option name="GA" value="241">Gabon (+241)</option>
							<option name="GM" value="220">Gambia (+220)</option>
							<option name="GE" value="7880">Georgia (+7880)</option>
							<option name="DE" value="49">Germany (+49)</option>
							<option name="GH" value="233">Ghana (+233)</option>
							<option name="GI" value="350">Gibraltar (+350)</option>
							<option name="GR" value="30">Greece (+30)</option>
							<option name="GL" value="299">Greenland (+299)</option>
							<option name="GD" value="1473">Grenada (+1473)</option>
							<option name="GP" value="590">Guadeloupe (+590)</option>
							<option name="GU" value="671">Guam (+671)</option>
							<option name="GT" value="502">Guatemala (+502)</option>
							<option name="GN" value="224">Guinea (+224)</option>
							<option name="GW" value="245">Guinea - Bissau (+245)</option>
							<option name="GY" value="592">Guyana (+592)</option>
							<option name="HT" value="509">Haiti (+509)</option>
							<option name="HN" value="504">Honduras (+504)</option>
							<option name="HK" value="852">Hong Kong (+852)</option>
							<option name="HU" value="36">Hungary (+36)</option>
							<option name="IS" value="354">Iceland (+354)</option>
							<option name="IN" value="91">India (+91)</option>
							<option name="ID" value="62">Indonesia (+62)</option>
							<option name="IR" value="98">Iran (+98)</option>
							<option name="IQ" value="964">Iraq (+964)</option>
							<option name="IE" value="353">Ireland (+353)</option>
							<option name="IL" value="972">Israel (+972)</option>
							<option name="IT" value="39">Italy (+39)</option>
							<option name="JM" value="1876">Jamaica (+1876)</option>
							<option name="JP" value="81">Japan (+81)</option>
							<option name="JO" value="962">Jordan (+962)</option>
							<option name="KZ" value="7">Kazakhstan (+7)</option>
							<option name="KE" value="254">Kenya (+254)</option>
							<option name="KI" value="686">Kiribati (+686)</option>
							<option name="KP" value="850">Korea North (+850)</option>
							<option name="KR" value="82">Korea South (+82)</option>
							<option name="KW" value="965">Kuwait (+965)</option>
							<option name="KG" value="996">Kyrgyzstan (+996)</option>
							<option name="LA" value="856">Laos (+856)</option>
							<option name="LV" value="371">Latvia (+371)</option>
							<option name="LB" value="961">Lebanon (+961)</option>
							<option name="LS" value="266">Lesotho (+266)</option>
							<option name="LR" value="231">Liberia (+231)</option>
							<option name="LY" value="218">Libya (+218)</option>
							<option name="LI" value="417">Liechtenstein (+417)</option>
							<option name="LT" value="370">Lithuania (+370)</option>
							<option name="LU" value="352">Luxembourg (+352)</option>
							<option name="MO" value="853">Macao (+853)</option>
							<option name="MK" value="389">Macedonia (+389)</option>
							<option name="MG" value="261">Madagascar (+261)</option>
							<option name="MW" value="265">Malawi (+265)</option>
							<option name="MY" value="60">Malaysia (+60)</option>
							<option name="MV" value="960">Maldives (+960)</option>
							<option name="ML" value="223">Mali (+223)</option>
							<option name="MT" value="356">Malta (+356)</option>
							<option name="MH" value="692">Marshall Islands (+692)</option>
							<option name="MQ" value="596">Martinique (+596)</option>
							<option name="MR" value="222">Mauritania (+222)</option>
							<option name="YT" value="269">Mayotte (+269)</option>
							<option name="MX" value="52">Mexico (+52)</option>
							<option name="FM" value="691">Micronesia (+691)</option>
							<option name="MD" value="373">Moldova (+373)</option>
							<option name="MC" value="377">Monaco (+377)</option>
							<option name="MN" value="976">Mongolia (+976)</option>
							<option name="MS" value="1664">Montserrat (+1664)</option>
							<option name="MA" value="212">Morocco (+212)</option>
							<option name="MZ" value="258">Mozambique (+258)</option>
							<option name="MN" value="95">Myanmar (+95)</option>
							<option name="NA" value="264">Namibia (+264)</option>
							<option name="NR" value="674">Nauru (+674)</option>
							<option name="NP" value="977">Nepal (+977)</option>
							<option name="NL" value="31">Netherlands (+31)</option>
							<option name="NC" value="687">New Caledonia (+687)</option>
							<option name="NZ" value="64">New Zealand (+64)</option>
							<option name="NI" value="505">Nicaragua (+505)</option>
							<option name="NE" value="227">Niger (+227)</option>
							<option name="NG" value="234">Nigeria (+234)</option>
							<option name="NU" value="683">Niue (+683)</option>
							<option name="NF" value="672">Norfolk Islands (+672)</option>
							<option name="NP" value="670">Northern Marianas (+670)</option>
							<option name="NO" value="47">Norway (+47)</option>
							<option name="OM" value="968">Oman (+968)</option>
							<option name="PW" value="680">Palau (+680)</option>
							<option name="PA" value="507">Panama (+507)</option>
							<option name="PG" value="675">Papua New Guinea (+675)</option>
							<option name="PY" value="595">Paraguay (+595)</option>
							<option name="PE" value="51">Peru (+51)</option>
							<option name="PH" value="63">Philippines (+63)</option>
							<option name="PL" value="48">Poland (+48)</option>
							<option name="PT" value="351">Portugal (+351)</option>
							<option name="PR" value="1787">Puerto Rico (+1787)</option>
							<option name="QA" value="974">Qatar (+974)</option>
							<option name="RE" value="262">Reunion (+262)</option>
							<option name="RO" value="40">Romania (+40)</option>
							<option name="RU" value="7">Russia (+7)</option>
							<option name="RW" value="250">Rwanda (+250)</option>
							<option name="SM" value="378">San Marino (+378)</option>
							<option name="ST" value="239">Sao Tome  Principe (+239)</option>
							<option name="SA" value="966">Saudi Arabia (+966)</option>
							<option name="SN" value="221">Senegal (+221)</option>
							<option name="CS" value="381">Serbia (+381)</option>
							<option name="SC" value="248">Seychelles (+248)</option>
							<option name="SL" value="232">Sierra Leone (+232)</option>
							<option name="SG" value="65">Singapore (+65)</option>
							<option name="SK" value="421">Slovak Republic (+421)</option>
							<option name="SI" value="386">Slovenia (+386)</option>
							<option name="SB" value="677">Solomon Islands (+677)</option>
							<option name="SO" value="252">Somalia (+252)</option>
							<option name="ZA" value="27">South Africa (+27)</option>
							<option name="ES" value="34">Spain (+34)</option>
							<option name="LK" value="94">Sri Lanka (+94)</option>
							<option name="SH" value="290">St. Helena (+290)</option>
							<option name="KN" value="1869">St. Kitts (+1869)</option>
							<option name="SC" value="1758">St. Lucia (+1758)</option>
							<option name="SD" value="249">Sudan (+249)</option>
							<option name="SR" value="597">Suriname (+597)</option>
							<option name="SZ" value="268">Swaziland (+268)</option>
							<option name="SE" value="46">Sweden (+46)</option>
							<option name="CH" value="41">Switzerland (+41)</option>
							<option name="SI" value="963">Syria (+963)</option>
							<option name="TW" value="886">Taiwan (+886)</option>
							<option name="TJ" value="7">Tajikstan (+7)</option>
							<option name="td" value="66">Thailand (+66)</option>
							<option name="TG" value="228">Togo (+228)</option>
							<option name="TO" value="676">Tonga (+676)</option>
							<option name="TT" value="1868">Trinidad  Tobago (+1868)</option>
							<option name="TN" value="216">Tunisia (+216)</option>
							<option name="TR" value="90">Turkey (+90)</option>
							<option name="TM" value="7">Turkmenistan (+7)</option>
							<option name="TM" value="993">Turkmenistan (+993)</option>
							<option name="TC" value="1649">Turks  Caicos Islands (+1649)</option>
							<option name="TV" value="688">Tuvalu (+688)</option>
							<option name="UG" value="256">Uganda (+256)</option>
							<option name="UA" value="380">Ukraine (+380)</option>
							<option name="AE" value="971">United Arab Emirates (+971)</option>
							<option name="UY" value="598">Uruguay (+598)</option>
							<option name="UZ" value="7">Uzbekistan (+7)</option>
							<option name="VU" value="678">Vanuatu (+678)</option>
							<option name="VA" value="379">Vatican City (+379)</option>
							<option name="VE" value="58">Venezuela (+58)</option>
							<option name="VN" value="84">Vietnam (+84)</option>
							<option name="VG" value="1284">Virgin Islands - British (+1284)</option>
							<option name="VI" value="1340">Virgin Islands - US (+1340)</option>
							<option name="WF" value="681">Wallis - Futuna (+681)</option>
							<option name="YE" value="969">Yemen (North)(+969)</option>
							<option name="YE" value="967">Yemen (South)(+967)</option>
							<option name="ZM" value="260">Zambia (+260)</option>
							<option name="ZW" value="263">Zimbabwe (+263)</option>
					</select> 
					<input type="text" name="ph_txt" placeholder="Phone number"  maxlength="15" size="15">
					</td>
				<td></br></br></td>
				</tr>
				<tr>
					<td><strong>Email:</br></br></strong></td>
					<td><input type="email" name="Email_txt" placeholder="Enter your email" required></br></br></td>
				</tr>
				<tr>
					<td><strong>Sex:</strong></td>
					<td>
						<input type="radio" name="gender" value="Male"/>Male
						<input type="radio" name="gender" value="Female"/>Female
						<input type="radio" name="gender" value="Other"/>Other
					</td>
					<td></br></br></td>
				</tr>
				<tr>
					<td><strong>Hobby:</strong></td>
					<td>
						<input type="checkbox" name="hobby" value="Singing"/>Singing
						<input type="checkbox" name="hobby" value="Reading"/>Reading
						<input type="checkbox" name="hobby" value="T.V."/>Watching T.V
					</td>
					<td></br></br></td>
				</tr>
				<tr>
					<td><strong>Country:</strong></td>
					<td>
						<select name="My_Menu" >
								<option value="">Country...</option>
								<option value="Afganistan">Afghanistan</option>
								<option value="Albania">Albania</option>
								<option value="Algeria">Algeria</option>
								<option value="American Samoa">American Samoa</option>
								<option value="Andorra">Andorra</option>
								<option value="Angola">Angola</option>
								<option value="Anguilla">Anguilla</option>
								<option value="Antigua Barbuda">Antigua Barbuda</option>
								<option value="Argentina">Argentina</option>
								<option value="Armenia">Armenia</option>
								<option value="Aruba">Aruba</option>
								<option value="Australia">Australia</option>
								<option value="Austria">Austria</option>
								<option value="Azerbaijan">Azerbaijan</option>
								<option value="Bahamas">Bahamas</option>
								<option value="Bahrain">Bahrain</option>
								<option value="Bangladesh">Bangladesh</option>
								<option value="Barbados">Barbados</option>
								<option value="Belarus">Belarus</option>
								<option value="Belgium">Belgium</option>
								<option value="Belize">Belize</option>
								<option value="Benin">Benin</option>
								<option value="Bermuda">Bermuda</option>
								<option value="Bhutan">Bhutan</option>
								<option value="Bolivia">Bolivia</option>
								<option value="Bonaire">Bonaire</option>
								<option value="Bosnia  Herzegovina">Bosnia  Herzegovina</option>
								<option value="Botswana">Botswana</option>
								<option value="Brazil">Brazil</option>
								<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
								<option value="Brunei">Brunei</option>
								<option value="Bulgaria">Bulgaria</option>
								<option value="Burkina Faso">Burkina Faso</option>
								<option value="Burundi">Burundi</option>
								<option value="Cambodia">Cambodia</option>
								<option value="Cameroon">Cameroon</option>
								<option value="Canada">Canada</option>
								<option value="Canary Islands">Canary Islands</option>
								<option value="Cape Verde">Cape Verde</option>
								<option value="Cayman Islands">Cayman Islands</option>
								<option value="Central African Republic">Central African Republic</option>
								<option value="Chad">Chad</option>
								<option value="Channel Islands">Channel Islands</option>
								<option value="Chile">Chile</option>
								<option value="China">China</option>
								<option value="Christmas Island">Christmas Island</option>
								<option value="Cocos Island">Cocos Island</option>
								<option value="Colombia">Colombia</option>
								<option value="Comoros">Comoros</option>
								<option value="Congo">Congo</option>
								<option value="Cook Islands">Cook Islands</option>
								<option value="Costa Rica">Costa Rica</option>
								<option value="Cote DIvoire">Cote D'Ivoire</option>
								<option value="Croatia">Croatia</option>
								<option value="Cuba">Cuba</option>
								<option value="Curaco">Curacao</option>
								<option value="Cyprus">Cyprus</option>
								<option value="Czech Republic">Czech Republic</option>
								<option value="Denmark">Denmark</option>
								<option value="Djibouti">Djibouti</option>
								<option value="Dominica">Dominica</option>
								<option value="Dominican Republic">Dominican Republic</option>
								<option value="East Timor">East Timor</option>
								<option value="Ecuador">Ecuador</option>
								<option value="Egypt">Egypt</option>
								<option value="El Salvador">El Salvador</option>
								<option value="Equatorial Guinea">Equatorial Guinea</option>
								<option value="Eritrea">Eritrea</option>
								<option value="Estonia">Estonia</option>
								<option value="Ethiopia">Ethiopia</option>
								<option value="Falkland Islands">Falkland Islands</option>
								<option value="Faroe Islands">Faroe Islands</option>
								<option value="Fiji">Fiji</option>
								<option value="Finland">Finland</option>
								<option value="France">France</option>
								<option value="French Guiana">French Guiana</option>
								<option value="French Polynesia">French Polynesia</option>
								<option value="French Southern Ter">French Southern Ter</option>
								<option value="Gabon">Gabon</option>
								<option value="Gambia">Gambia</option>
								<option value="Georgia">Georgia</option>
								<option value="Germany">Germany</option>
								<option value="Ghana">Ghana</option>
								<option value="Gibraltar">Gibraltar</option>
								<option value="Great Britain">Great Britain</option>
								<option value="Greece">Greece</option>
								<option value="Greenland">Greenland</option>
								<option value="Grenada">Grenada</option>
								<option value="Guadeloupe">Guadeloupe</option>
								<option value="Guam">Guam</option>
								<option value="Guatemala">Guatemala</option>
								<option value="Guinea">Guinea</option>
								<option value="Guyana">Guyana</option>
								<option value="Haiti">Haiti</option>
								<option value="Hawaii">Hawaii</option>
								<option value="Honduras">Honduras</option>
								<option value="Hong Kong">Hong Kong</option>
								<option value="Hungary">Hungary</option>
								<option value="Iceland">Iceland</option>
								<option value="India">India</option>
								<option value="Indonesia">Indonesia</option>
								<option value="Iran">Iran</option>
								<option value="Iraq">Iraq</option>
								<option value="Ireland">Ireland</option>
								<option value="Isle of Man">Isle of Man</option>
								<option value="Israel">Israel</option>
								<option value="Italy">Italy</option>
								<option value="Jamaica">Jamaica</option>
								<option value="Japan">Japan</option>
								<option value="Jordan">Jordan</option>
								<option value="Kazakhstan">Kazakhstan</option>
								<option value="Kenya">Kenya</option>
								<option value="Kiribati">Kiribati</option>
								<option value="Korea North">Korea North</option>
								<option value="Korea Sout">Korea South</option>
								<option value="Kuwait">Kuwait</option>
								<option value="Kyrgyzstan">Kyrgyzstan</option>
								<option value="Laos">Laos</option>
								<option value="Latvia">Latvia</option>
								<option value="Lebanon">Lebanon</option>
								<option value="Lesotho">Lesotho</option>
								<option value="Liberia">Liberia</option>
								<option value="Libya">Libya</option>
								<option value="Liechtenstein">Liechtenstein</option>
								<option value="Lithuania">Lithuania</option>
								<option value="Luxembourg">Luxembourg</option>
								<option value="Macau">Macau</option>
								<option value="Macedonia">Macedonia</option>
								<option value="Madagascar">Madagascar</option>
								<option value="Malaysia">Malaysia</option>
								<option value="Malawi">Malawi</option>
								<option value="Maldives">Maldives</option>
								<option value="Mali">Mali</option>
								<option value="Malta">Malta</option>
								<option value="Marshall Islands">Marshall Islands</option>
								<option value="Martinique">Martinique</option>
								<option value="Mauritania">Mauritania</option>
								<option value="Mauritius">Mauritius</option>
								<option value="Mayotte">Mayotte</option>
								<option value="Mexico">Mexico</option>
								<option value="Midway Islands">Midway Islands</option>
								<option value="Moldova">Moldova</option>
								<option value="Monaco">Monaco</option>
								<option value="Mongolia">Mongolia</option>
								<option value="Montserrat">Montserrat</option>
								<option value="Morocco">Morocco</option>
								<option value="Mozambique">Mozambique</option>
								<option value="Myanmar">Myanmar</option>
								<option value="Nambia">Nambia</option>
								<option value="Nauru">Nauru</option>
								<option value="Nepal">Nepal</option>
								<option value="Netherland Antilles">Netherland Antilles</option>
								<option value="Netherlands">Netherlands (Holland, Europe)</option>
								<option value="Nevis">Nevis</option>
								<option value="New Caledonia">New Caledonia</option>
								<option value="New Zealand">New Zealand</option>
								<option value="Nicaragua">Nicaragua</option>
								<option value="Niger">Niger</option>
								<option value="Nigeria">Nigeria</option>
								<option value="Niue">Niue</option>
								<option value="Norfolk Island">Norfolk Island</option>
								<option value="Norway">Norway</option>
								<option value="Oman">Oman</option>
								<option value="Pakistan">Pakistan</option>
								<option value="Palau Island">Palau Island</option>
								<option value="Palestine">Palestine</option>
								<option value="Panama">Panama</option>
								<option value="Papua New Guinea">Papua New Guinea</option>
								<option value="Paraguay">Paraguay</option>
								<option value="Peru">Peru</option>
								<option value="Phillipines">Philippines</option>
								<option value="Pitcairn Island">Pitcairn Island</option>
								<option value="Poland">Poland</option>
								<option value="Portugal">Portugal</option>
								<option value="Puerto Rico">Puerto Rico</option>
								<option value="Qatar">Qatar</option>
								<option value="Republic of Montenegro">Republic of Montenegro</option>
								<option value="Republic of Serbia">Republic of Serbia</option>
								<option value="Reunion">Reunion</option>
								<option value="Romania">Romania</option>
								<option value="Russia">Russia</option>
								<option value="Rwanda">Rwanda</option>
								<option value="St Barthelemy">St Barthelemy</option>
								<option value="St Eustatius">St Eustatius</option>
								<option value="St Helena">St Helena</option>
								<option value="St Kitts-Nevis">St Kitts-Nevis</option>
								<option value="St Lucia">St Lucia</option>
								<option value="St Maarten">St Maarten</option>
								<option value="St Pierre  Miquelon">St Pierre  Miquelon</option>
								<option value="St Vincent  Grenadines">St Vincent  Grenadines</option>
								<option value="Saipan">Saipan</option>
								<option value="Samoa">Samoa</option>
								<option value="Samoa American">Samoa American</option>
								<option value="San Marino">San Marino</option>
								<option value="Sao Tome  Principe">Sao Tome  Principe</option>
								<option value="Saudi Arabia">Saudi Arabia</option>
								<option value="Senegal">Senegal</option>
								<option value="Serbia">Serbia</option>
								<option value="Seychelles">Seychelles</option>
								<option value="Sierra Leone">Sierra Leone</option>
								<option value="Singapore">Singapore</option>
								<option value="Slovakia">Slovakia</option>
								<option value="Slovenia">Slovenia</option>
								<option value="Solomon Islands">Solomon Islands</option>
								<option value="Somalia">Somalia</option>
								<option value="South Africa">South Africa</option>
								<option value="Spain">Spain</option>
								<option value="Sri Lanka">Sri Lanka</option>
								<option value="Sudan">Sudan</option>
								<option value="Suriname">Suriname</option>
								<option value="Swaziland">Swaziland</option>
								<option value="Sweden">Sweden</option>
								<option value="Switzerland">Switzerland</option>
								<option value="Syria">Syria</option>
								<option value="Tahiti">Tahiti</option>
								<option value="Taiwan">Taiwan</option>
								<option value="Tajikistan">Tajikistan</option>
								<option value="Tanzania">Tanzania</option>
								<option value="Thailand">Thailand</option>
								<option value="Togo">Togo</option>
								<option value="Tokelau">Tokelau</option>
								<option value="Tonga">Tonga</option>
								<option value="Trinidad  Tobago">Trinidad  Tobago</option>
								<option value="Tunisia">Tunisia</option>
								<option value="Turkey">Turkey</option>
								<option value="Turkmenistan">Turkmenistan</option>
								<option value="Turks  Caicos Is">Turks  Caicos Is</option>
								<option value="Tuvalu">Tuvalu</option>
								<option value="Uganda">Uganda</option>
								<option value="Ukraine">Ukraine</option>
								<option value="United Arab Erimates">United Arab Emirates</option>
								<option value="United Kingdom">United Kingdom</option>
								<option value="United States of America">United States of America</option>
								<option value="Uraguay">Uruguay</option>
								<option value="Uzbekistan">Uzbekistan</option>
								<option value="Vanuatu">Vanuatu</option>
								<option value="Vatican City State">Vatican City State</option>
								<option value="Venezuela">Venezuela</option>
								<option value="Vietnam">Vietnam</option>
								<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
								<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
								<option value="Wake Island">Wake Island</option>
								<option value="Wallis  Futana Is">Wallis  Futana Is</option>
								<option value="Yemen">Yemen</option>
								<option value="Zaire">Zaire</option>
								<option value="Zambia">Zambia</option>
								<option value="Zimbabwe">Zimbabwe</option>
						</select>						
					</td>
					<td></br></br></td>
				</tr>
				<tr>
					<td>Upload You Signature:</br></br></td>
					<td><input type="file" name="upload" value="upload"  accept="image/*"/></br></br></td>
					<td></br></br></td>
				</tr>
				<tr>
					<td>Password:</br></br></td>
					<td><input type="password" name="pwd" placeholder="Enter your password"></br></br></td>
				</tr>
				<tr>
					<td>Confirm Password:</br></br></td>
					<td><input type="password" name="cpwd" placeholder="Enter your confirm password"></br></br></td>
				</tr>
				<tr>
					<td>
						<td><input type="submit" value="Submit" name="Submit"/>
						<input type="reset" value="reset" name="Reset"/></td>
					</td>
				</tr>
			</form>
		</table>
		</center>
	</body>
</html>