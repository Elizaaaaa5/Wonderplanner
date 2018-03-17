
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
  <meta name="robots" content="noindex">
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>BitPay</title>
	<meta name="BitPay.com" content="">
	<meta name="The World Leader in Bitcoin Payment Processing" content="">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="format-detection" content="telephone=no">

	<!-- CSS
  ================================================== -->
  <link rel="stylesheet" href="/gc/nn496e77d489/bitpay.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono|Ubuntu:300,700,300italic,700italic" rel="stylesheet" type="text/css">
  <link href="/assets/fa/css/fa.css" rel="stylesheet"> <!--[if IE 7]> <link href="/assets/fa/css/fa-ie7.css" rel="stylesheet"> <![endif]-->

  <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/img/touch-icon.png"/>
	<link rel="apple-touch-icon" sizes="72x72" href="/img/touch-icon-72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/img/touch-icon-114.png">

  
<script type="text/javascript">
  window.analytics||(window.analytics=[]),window.analytics.methods=["identify","track","trackLink","trackForm","trackClick","trackSubmit","page","pageview","ab","alias","ready","group","on","once","off"],window.analytics.factory=function(t){return function(){var a=Array.prototype.slice.call(arguments);return a.unshift(t),window.analytics.push(a),window.analytics}};for(var i=0;i<window.analytics.methods.length;i++){var method=window.analytics.methods[i];window.analytics[method]=window.analytics.factory(method)}window.analytics.load=function(t){var a=document.createElement("script");a.type="text/javascript",a.async=!0,a.src=("https:"===document.location.protocol?"https://":"http://")+"d2dq2ahtl5zl1z.cloudfront.net/analytics.js/v1/"+t+"/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(a,n)},window.analytics.SNIPPET_VERSION="2.0.8",
  window.analytics.load("qsi42b1dn7");
  window.analytics.page();
</script>
<script src="//cdn.optimizely.com/js/2395520134.js"></script>


</head>
<body data-csrf-token="6PQwvo5YCZLnNqFXc4vewYgcM" >

  <div id="alertMsg" class="alert-container">
    <div id="alertMsgTextContainer" class="alert-message">
      <div id="alertClose"><a class="close" style="padding-right: 5px; color: #B94A48">&times;</a></div>
      <div style="padding-right: 20px; padding-left: 5px;"><span id="alertMsgText"></span></div>
    </div>
    <div id="alertTab" class="alert-tab" style="position: relative; top: -1px">
      <img id="alertExcl" class="excl" style="cursor: pointer;  z-index: 1100;" src="/img/exclamation32.png" />
    </div>
  </div>

	<!-- Modals
	================================================== -->

	<div id="modal-ajax" class="modal hide" style="width: 200px; background: #F8F4F0;">
		<div class="modal-header">
		</div>
		<div class="modal-body" style="width: 100%; margin: auto; padding: 0px; color: #666; font-size: 1.0em">
			<br><br>
			<img src="/img/ajax-loader2.gif" style="padding-bottom: 5px">
			<h2>Updating...</h2>
		</div>
	</div>

	<div id="modal-language" class="modal hide">
		<div class="modal-header">
			Language Setting
		</div>
		<div class="modal-body" style="width: 100%; margin: auto; padding: 0px; color: #666; font-size: 1.0em">
			<br>
			<form onSubmit="bp.ajax('/home/setLang', {lang: this.language.value}, function() {window.location.reload();}, function() {}); return false;">
				<fieldset>
					<ul style="margin: auto">
						<li id="language" class="control-group">
							<label class="control-label">Display Language:</label>
							<div class="controls">
								<select id="languageSelect" onChange="$('#changeLang').removeAttr('disabled');" name="language" style="padding: 0px 3px;" >
									
										<option value="ar_SA"  >العربية</option>
									
										<option value="bg_BG"  >Български</option>
									
										<option value="ca_ES"  >Català</option>
									
										<option value="cs_CZ"  >Čeština</option>
									
										<option value="da_DK"  >Dansk</option>
									
										<option value="de_DE"  >Deutsch</option>
									
										<option value="el_GR"  >Ελληνικά</option>
									
										<option value="en"  >English</option>
									
										<option value="es"  >Español</option>
									
										<option value="et_EE"  >Eesti</option>
									
										<option value="fa_IR"  >فارسی</option>
									
										<option value="fi_FI"  >Suomi</option>
									
										<option value="fr_FR"  >Français</option>
									
										<option value="he_IL"  >עברית</option>
									
										<option value="hr_HR"  >Hrvatski</option>
									
										<option value="hu_HU"  >Magyar</option>
									
										<option value="id_ID"  >Bahasa indonesia</option>
									
										<option value="it_IT"  >Italiano</option>
									
										<option value="ja_JP"  >日本語</option>
									
										<option value="ko_KR"  >한국어</option>
									
										<option value="lt_LT"  >Lietuviškai</option>
									
										<option value="lv_LV"  >Latviešu</option>
									
										<option value="ms_MY"  >Bahasa melayu</option>
									
										<option value="nb_NO"  >Norsk</option>
									
										<option value="nl_NL"  >Nederlands</option>
									
										<option value="pl_PL"  >Polski</option>
									
										<option value="pt_BR"  >Português</option>
									
										<option value="pwn"  >L337 5P34K</option>
									
										<option value="ro_RO"  >Română</option>
									
										<option value="ru_RU"  >Русский</option>
									
										<option value="sk_SK"  >Slovenčina</option>
									
										<option value="sl_SI"  >Slovenščina</option>
									
										<option value="sr_RS"  >Српски (Srpski)</option>
									
										<option value="sv_SE"  >Svenska</option>
									
										<option value="th_TH"  >ภาษาไทย</option>
									
										<option value="tr"  >Türkçe</option>
									
										<option value="uk_UA"  >Українська</option>
									
										<option value="vi_VN"  >Tiếng Việt</option>
									
										<option value="zh_CN"  >中文</option>
									
										<option value="zh_TW"  >繁體中文</option>
									
								</select>
							</div>
						</li>
					</ul>
				</fieldset>
				<div style="margin: auto; text-align: center">
					<span width=50%><button id="changeLang" class="btn btn-primary btn-large" role="button" disabled="disabled">Save Changes</button></span>
					<span width=50%><a href="#" class="btn btn-large" data-dismiss="modal" style="text-decoration: none; font-weight: normal; opacity: 1; filter: alpha(opacity = 100); float: center" >Close</a></span>
				</div>
			</form>
		</div>
	</div>


	<!-- Primary Page Layout
	================================================== -->

	<div class="container" style="margin: 0 auto 2em; background: #FFF; box-shadow: 0 0 1px #ddd;">
		<div id="topMenu" class="row header-buyer">
			<div class="container header-buyer" style="vertical-align: middle; margin: auto">
						<div class="columns buyer-left" style="padding-left: 2em;box-sizing: border-box;">
							<h2>Wonderplanner</h2>
							
								 <span class="ellipsis">P.O. Box 400133</span>
								
								<span class="ellipsis">Charlottesville,  VA &nbsp; 22904</span>
								
							
							 <span class="ellipsis">7035994928</span>
						</div>
						<div class="columns buyer-right">

							
								<h1>Cart</h1>
								<a href="mailto:?subject=Saved BitPay shopping cart&body=https://test.bitpay.com/cart?id=FhttyoBjETmrDWLBVxZB3M" class="btn"><i class="icon-envelope"></i></a>
							

							

							

							

							

							

							

							
						</div>
						<br clear=all>
			</div>
		</div> <!--(topMenu)-->

		<div class="row middle" style="margin: 0px; text-align: left">

		
			<div class="container middle-buyer" style="vertical-align: top; margin: auto; ">
		

		

			<div class="sixteen columns " style="text-align: left">
  <br>
  <div id="message"></div>

  <div id="modal-delete-item" class="modal hide">
    <div class="modal-header">
      Delete Item
    </div>
      <form>
      <div class="modal-body">
        Do you want to remove this item from your shopping cart?
        <br><br><br>
        <span style="width:50%;"><a href="#" class="btn btn-danger btn-large itemDelete" data-dismiss="modal"  style="float: center" ><i class="icon-trash icon-white"></i> Delete</a></span>
        <span style="width:50%;"><a href="#" class="btn btn-large" data-dismiss="modal" style="text-decoration: none; font-weight: normal; opacity: 1; filter: alpha(opacity = 100); float: center" tabindex=16 ><i class="icon-shopping-cart"></i> Keep</a></span>

      </div>
    </form>
  </div>

  

  <form id="updateQuantities" class="ajaxForm" data-save-button="recalculate" onSubmit="return bp.saveInfo(this, function(result) {bp.renderTemplate('shoppingItemList',result.data); bp.renderTemplate('shoppingTotals',result.data);});">
    <input type="hidden" name="cartId" value="FhttyoBjETmrDWLBVxZB3M"/>
    <div id="shoppingItemList">
  <div class="save-button" style="margin: 0px">
    <div id="displayCurrency" class="btn-group bsRadio" data-toggle="buttons-radio" style="float: right;">
      
        <a class="btn btn-mini   active" data-toggle-value="BTC">BTC</a>
      
      <input type="hidden" name="currency" data-disable-form-update="true" value="BTC" onChange="bp.saveInfoQuiet($('#updateQuantities').get(0), function(result) {bp.renderTemplate('shoppingItemList', result.data); bp.renderTemplate('shoppingTotals', result.data);})"/>
    </div>
  </div>


<h2>Item List</h2>
<div class="well phone-form form-horizontal" style="margin-top: 5px; margin-bottom: 15px;">

<table class="table table-condensed" style="width: 97%;  font-size: 0.9em; margin: 5px">
  <thead>
    <tr>
      
        <td class="cart-delete-button-td">&nbsp;</td>
      
      <td style="text-align: left"><h3>Item</h3></td>
      <td style="width: 15%; text-align: right"><h3>Price</h3></td>
      <td style="width: 15%; text-align: center"><h3>Quantity</h3></td>
      <td style="width: 15%; text-align: right"><h3>Amount</h3></td>
    </tr>
  </thead>

  <tbody>
    
      <tr>
        
          <td style="text-align: left; width: 10%;" class="cart-delete-button-td">
            <a data-toggle="modal" data-target="modal-delete-item" data-item-id="5aac27814ca200d4310b4d45" data-backdrop="true" class="btn btn-danger btn-small" onClick="bp.deleteCartItem(this);"><span class="hidden-phone">Delete</span><span class="visible-phone"><i class="icon-trash icon-white"></i></span></a>
          </td>
        
        </td>
        <td style="text-align: left; padding: 5px; font-size: 0.9em">
          <b>Family Day Trip Package</b>
          <br>
          
          	001
          
        </td>
        <td style="text-align: right">0.050000</td>
        <td style="text-align: center">
          
            <div>
              <input type="number" name="quantity_5aac27814ca200d4310b4d45" id="quantity_5aac27814ca200d4310b4d45" class="one column noscroll cart-item-quantity" style="float: none" value="1" min="0" step="1" tabindex=70/>
            </div>
          
          
        </td>
        <td style="text-align: right; padding: 5px">0.050000 BTC</b></td>
      </tr>
    

    
  </tbody>
</table>
</div>
</div>

	
      <div style="margin: 5px auto; text-align: center">
        <div class="columns" style="width: 50%; text-align: center">
          &nbsp;
          
            <a href="Our_products.php" class="btn"><i class="icon-shopping-cart"></i> Shop</a>
          
        </div>
        <div class="columns" style="width: 50%; text-align: center">
          <button id="recalculate" class="btn btn-primary disabled" disabled="disabled"  data-busy-text="Recalculating..." data-done-text="Updated" data-error-text="Error">Recalculate</button>
        </div>
        <br clear=all><br>
      </div>
	
  </form>

  <div class="columns double-left" style="text-align: left">
    <div id="shoppingBuyerForm"><form id="updateBuyerInfo" class="ajaxForm" data-save-button="saveBuyerInfo" onSubmit="return bp.saveInfo(this)" autocomplete="on" >
  <input type="hidden" name="cartId" value="FhttyoBjETmrDWLBVxZB3M"/>
<h2 class="black" style="margin-top: 5px">Buyer Information</h2>
<fieldset class="phone-form well form-horizontal" style="margin-top: 5px">
	<ul>
		<li id="buyerEmail" class="control-group">
			<label class="control-label">Email Address:</label>
			<div class="controls">
				<input type="email" name="buyerEmail" class="input-xlarge" placeholder="Email Address" value="" autocapitalize="off" autocorrect="off" maxlength="50" autofocus />
			</div>
		</li>
		
			<li id="buyerName" class="control-group">
				<label class="control-label">Name:</label>
				<div class="controls">
					<input type="text" name="buyerName" class="input-xlarge" placeholder="Name" value=""maxlength="50" >
				</div>
			</li>
		
		
			<li id="buyerAddress" class="control-group">
				<label class="control-label">Shipping Address:</label>
				<div class="controls">
					<input type="text" name="buyerAddress1" class="input-xlarge" placeholder="Address" value="" maxlength="50" >
				</div>
			</li>
			<li id="buyerAddress2" class="control-group">
				<div class="controls">
					<input type="text" name="buyerAddress2" class="input-xlarge" placeholder="Address (continued)" value=""  maxlength="50" >
				</div>
			</li>
			<li id="buyerCity" class="control-group">
				<label class="control-label">City:</label>
				<div class="controls">
					<input type="text" name="buyerCity" class="input-xlarge" placeholder="City" value="" maxlength="50" >
				</div>
			</li>
			<li id="buyerState" class="control-group">
				<label class="control-label">State/Province:</label>
				<div class="controls">
					<input type="text" name="buyerState" class="input-xlarge" placeholder="State/Province" value="" autocorrect="off" autocapitalize="off" maxlength="50" >
				</div>
			</li>
			<li id="buyerZip" class="control-group">
				<label class="control-label">ZIP/Postal Code:</label>
				<div class="controls">
					<input type="text" name="buyerZip" class="input-xlarge" placeholder="ZIP/Postal Code" value="" autocorrect="off" autocapitalize="off" maxlength="50" >
				</div>
			</li>
			<li id="buyerCountry" class="control-group">
				<label class="control-label">Country:</label>
				<div class="controls">
					<select name="buyerCountry" class="input-xlarge" value="United States">
						<option value="Afghanistan">Afghanistan</option><option value="Åland Islands">Åland Islands</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antigua And Barbuda">Antigua And Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Bouvet Island">Bouvet Island</option><option value="Brazil">Brazil</option><option value="British Indian Ocean Territory">British Indian Ocean Territory</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo">Congo</option><option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Côte d'Ivoire">Côte d'Ivoire</option><option value="Croatia">Croatia</option><option value="Curaçao">Curaçao</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern Territories">French Southern Territories</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guernsey">Guernsey</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option><option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Isle of Man">Isle of Man</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jersey">Jersey</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea, Republic of">Korea, Republic of</option><option value="Kosovo">Kosovo</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macao">Macao</option><option value="Macedonia, The Former Yugoslav Republic Of">Macedonia, The Former Yugoslav Republic Of</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia, Federated States of">Micronesia, Federated States of</option><option value="Moldova, Republic of">Moldova, Republic of</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcairn">Pitcairn</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Réunion">Réunion</option><option value="Romania">Romania</option><option value="Russian Federation">Russian Federation</option><option value="Rwanda">Rwanda</option><option value="Saint Barthélemy">Saint Barthélemy</option><option value="Saint Helena">Saint Helena</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Martin (French Part)">Saint Martin (French Part)</option><option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Sint Maarten (Dutch Part)">Sint Maarten (Dutch Part)</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option><option value="South Sudan">South Sudan</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="Suriname">Suriname</option><option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Taiwan, Province of China">Taiwan, Province of China</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania, United Republic of">Tanzania, United Republic of</option><option value="Thailand">Thailand</option><option value="Timor-Leste">Timor-Leste</option><option value="Togo">Togo</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turks and Caicos Islands">Turks and Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States" selected>United States</option><option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Virgin Islands, British">Virgin Islands, British</option><option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option><option value="Wallis and Futuna">Wallis and Futuna</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>
					</select>
				</div>
			</li>
		
		
		
	</ul>
</fieldset>
<div style="margin: auto; text-align: center; margin-bottom: 20px">
	<button id="saveBuyerInfo" class="btn btn-primary btn-large" role="button" disabled="disabled" data-busy-text="Saving" data-error-text="Not Saved" data-done-text="Saved">Save Changes</button>
</div>
</form>
</div>
  </div>

  <div class="columns single-right" style="text-align: left">
    <div id="shoppingTotals"><div id="checkoutTotal">
	<h2>Order Total</h2>
</div>

<div class="phone-form well" style="margin-top: 5px; padding-top: 6px;">
	<ul >
		
		
			<li>
				<div style="display: inline-block; width: 48%; padding: 13px 0px 0px 3px">Tax:</div>
				<div style="display: inline-block; width: 48%; text-align: right; padding: 13px 3px 0px 0px">0.000000 BTC</div>
			</li>
		
		
			<li>
				<div style="display: inline-block; width: 48%; padding: 13px 0px 0px 3px">Shipping:</div>
				<div style="display: inline-block; width: 48%; text-align: right; padding: 13px 3px 0px 0px">0.000000 BTC</div>
			</li>
		
			<li>
				<div style="display: inline-block; width: 48%; padding: 13px 0px 0px 3px"><strong>TOTAL:</strong></div>
				<div style="display: inline-block; width: 48%; text-align: right; padding: 13px 3px 0px 0px"><strong><b id="orderTotal">0.050000</b> BTC</strong></div>
			</li>
	</ul>
</div>
</div>
    
      <div style="margin: auto; text-align: center" id="cart-checkout-button-wrapper">
        <input type="image" style="width: auto" src="/img/button2.png" border="0" alt="Checkout" onClick="bp.cartCheckout('FhttyoBjETmrDWLBVxZB3M')"/>
      </div>
      <div style="font-size: 0.9em; text-align: left; margin-top: 15px" id="cart-checkout-footer"><b>NOTE:</b> Item Prices are subject to change until you Checkout.</div>
    
    
  </div>

</div>
<br clear=all><br>


		</div>
		<div class="row" style="background: #426D9C; min-height: 30px; margin: 0px; padding: 0px; text-align: left;clear: both;">
			<div class="container footer" style="height: auto; vertical-align: middle; margin: auto; color: #FFF; text-align: left;">
				<table class="footer-text" style="width: 90%; margin: auto; height: 30px">
					<tr>
						<td style="width: 33%; text-align: left;">&copy;<span class="hidden-phone">2011-<span id="currentYearString">current</span></span> <a href="https://bitpay.com" target=_blank>BitPay, Inc.</a></td>
						<td style="width: 34%; text-align: center;"><a data-toggle="modal" href="#modal-language" data-backdrop="true">English</a></td>
						<td style="width: 33%; text-align: right">
							<a href="mailto:info@bitpay.com">Contact</a>
						</td>
					</tr>
				</table>
			</div>
		</div> <!--(footer)-->
	</div><!-- container -->




	<!-- Script
  ================================================== -->
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript" src="/gc/nn496e77d489/bitpay.js"></script>

  
  <script type="text/javascript">
    var currentYearString = document.getElementById('currentYearString');
    currentYearString.innerHTML = new Date().getFullYear();
    window.lstrs={"68767446ea":"Item List","652bcc3a47":"Item","93c91c851e":"Price","822bab8d41":"Quantity","49e96d7cdf":"Amount","e2d0a54968":"Delete","8d368efb8e":"No items are in your shopping cart.","03cae7f5ea":"Order Total","5be28ea2f9":"SUBTOTAL","47e2886ee5":"Tax","ad5751430e":"Shipping","ab2882c864":"TOTAL"};
    $('#languageSelect').val('en');
    
    (function(){var divName='modal';(function(){var e=Handlebars.template,t=Handlebars.templates=Handlebars.templates||{};t[divName]=e(function(e,t,n,r,i){this.compilerInfo=[2,">= 1.0.0-rc.3"],n=n||e.helpers,i=i||{};var s="",o,u="function",a=this.escapeExpression;return s+='<div class="modal hide" id="pageModal">\n  <div class="modal-header">\n    '+a((o=t.title,typeof o===u?o.apply(t):o))+'\n  </div>\n  <div class="modal-body">\n    <p>'+a((o=t.message,typeof o===u?o.apply(t):o))+'</p>\n	<br><br><br>\n    <a href="#" class="btn btn-large" data-dismiss="modal">Close</a>\n  </div>\n</div>\n',s})})();})();(function(){var divName='message';(function(){var e=Handlebars.template,t=Handlebars.templates=Handlebars.templates||{};t[divName]=e(function(e,t,n,r,i){function h(e,t){var n="",r,i;n+='\n	<div class="alert '+f((r=e.messageType,typeof r===a?r.apply(e):r))+' fade in">\n		',i=(r=(r=e.showClose,typeof r===a?r.apply(e):r),c.call(e,r,{hash:{},inverse:l.noop,fn:l.program(2,p,t),data:t}));if(i||i===0)n+=i;n+="\n		",i=(r=e.message,typeof r===a?r.apply(e):r);if(i||i===0)n+=i;return n+="\n	</div>\n",n}function p(e,t){return'<a class="close" data-dismiss="alert" href="#">&times;</a>'}this.compilerInfo=[2,">= 1.0.0-rc.3"],n=n||e.helpers,i=i||{};var s="",o,u,a="function",f=this.escapeExpression,l=this,c=n.blockHelperMissing;u=(o=(o=t.messages,typeof o===a?o.apply(t):o),c.call(t,o,{hash:{},inverse:l.noop,fn:l.program(1,h,i),data:i}));if(u||u===0)s+=u;return s+="\n",s})})();})();(function(){var divName='shoppingItemList';(function(){var e=Handlebars.template,t=Handlebars.templates=Handlebars.templates||{};t[divName]=e(function(e,t,n,r,i){function h(e,t){var n="",r,i;n+='\n  <div class="save-button" style="margin: 0px">\n    <div id="displayCurrency" class="btn-group bsRadio" data-toggle="buttons-radio" style="float: right;">\n      ',i=(r=(r=e.currencies,typeof r===a?r.apply(e):r),l.call(e,r,{hash:{},inverse:f.noop,fn:f.program(2,p,t),data:t}));if(i||i===0)n+=i;return n+='\n      <input type="hidden" name="currency" data-disable-form-update="true" value="'+c((r=e.currency,typeof r===a?r.apply(e):r))+"\" onChange=\"bp.saveInfoQuiet($('#updateQuantities').get(0), function(result) {bp.renderTemplate('shoppingItemList', result.data); bp.renderTemplate('shoppingTotals', result.data);})\"/>\n    </div>\n  </div>\n",n}function p(e,t){var n="",r,i;n+='\n        <a class="btn btn-mini ',i=(r=(r=e.first,typeof r===a?r.apply(e):r),l.call(e,r,{hash:{},inverse:f.noop,fn:f.program(3,d,t),data:t}));if(i||i===0)n+=i;n+=" ",i=(r=(r=e.last,typeof r===a?r.apply(e):r),l.call(e,r,{hash:{},inverse:f.noop,fn:f.program(5,v,t),data:t}));if(i||i===0)n+=i;n+=" ",i=(r=(r=e.selected,typeof r===a?r.apply(e):r),l.call(e,r,{hash:{},inverse:f.noop,fn:f.program(7,m,t),data:t}));if(i||i===0)n+=i;return n+='" data-toggle-value="'+c((r=e.code,typeof r===a?r.apply(e):r))+'">'+c((r=e.code,typeof r===a?r.apply(e):r))+"</a>\n      ",n}function d(e,t){return"btn-first"}function v(e,t){return"btn-last"}function m(e,t){return"active"}function g(e,t){return'\n        <td class="cart-delete-button-td">&nbsp;</td>\n      '}function y(e,t,r){var i="",s,o;i+="\n      <tr>\n        ",s=n["if"].call(e,r.isShopping,{hash:{},inverse:f.noop,fn:f.program(12,b,t),data:t});if(s||s===0)i+=s;i+='\n        </td>\n        <td style="text-align: left; padding: 5px; font-size: 0.9em">\n          <b>'+c((s=e.itemDesc,typeof s===a?s.apply(e):s))+"</b>\n          <br>\n          ",o=n["if"].call(e,r.isShopping,{hash:{},inverse:f.noop,fn:f.program(14,w,t),data:t});if(o||o===0)i+=o;i+='\n        </td>\n        <td style="text-align: right">'+c((s=e.price,typeof s===a?s.apply(e):s))+'</td>\n        <td style="text-align: center">\n          ',o=n["if"].call(e,r.isShopping,{hash:{},inverse:f.noop,fn:f.program(16,E,t),data:t});if(o||o===0)i+=o;i+="\n          ",o=n["if"].call(e,r.isShopping,{hash:{},inverse:f.program(18,S,t),fn:f.noop,data:t});if(o||o===0)i+=o;return i+='\n        </td>\n        <td style="text-align: right; padding: 5px">'+c((s=e.amount,typeof s===a?s.apply(e):s))+" "+c((s=e.currency,typeof s===a?s.apply(e):s))+"</b></td>\n      </tr>\n    ",i}function b(e,t){var r="",i;return r+='\n          <td style="text-align: left; width: 10%;" class="cart-delete-button-td">\n            <a data-toggle="modal" data-target="modal-delete-item" data-item-id="'+c((i=e.itemId,typeof i===a?i.apply(e):i))+'" data-backdrop="true" class="btn btn-danger btn-small" onClick="bp.deleteCartItem(this);"><span class="hidden-phone">'+c(n._.call(e,"e2d0a54968",{hash:{},data:t}))+'</span><span class="visible-phone"><i class="icon-trash icon-white"></i></span></a>\n          </td>\n        ',r}function w(e,t){var n="",r;return n+="\n          	"+c((r=e.itemCode,typeof r===a?r.apply(e):r))+"\n          ",n}function E(e,t){var n="",r;return n+='\n            <div>\n              <input type="number" name="quantity_'+c((r=e.itemId,typeof r===a?r.apply(e):r))+'" id="quantity_'+c((r=e.itemId,typeof r===a?r.apply(e):r))+'" class="one column noscroll cart-item-quantity" style="float: none" value="'+c((r=e.quantity,typeof r===a?r.apply(e):r))+'" min="0" step="1" tabindex=70/>\n            </div>\n          ',n}function S(e,t){var n="",r;return n+="\n            "+c((r=e.quantity,typeof r===a?r.apply(e):r))+"\n          ",n}function x(e,t,r){var i="",s;i+="\n      <tr>\n        ",s=n["if"].call(e,r.isShopping,{hash:{},inverse:f.noop,fn:f.program(21,T,t),data:t});if(s||s===0)i+=s;i+="\n        ",s=n["if"].call(e,r.isReceipt,{hash:{},inverse:f.noop,fn:f.program(23,N,t),data:t});if(s||s===0)i+=s;return i+="\n          "+c(n._.call(e,"8d368efb8e",{hash:{},data:t}))+"<br><br>\n        </td>\n      </tr>\n    ",i}function T(e,t){return"\n        <td colspan=5>\n        "}function N(e,t){return"\n        <td colspan=4>\n        "}this.compilerInfo=[2,">= 1.0.0-rc.3"],n=n||e.helpers,i=i||{};var s="",o,u,a="function",f=this,l=n.blockHelperMissing,c=this.escapeExpression;o=n.unless.call(t,t.isBill,{hash:{},inverse:f.noop,fn:f.program(1,h,i),data:i});if(o||o===0)s+=o;s+="\n\n<h2>"+c(n._.call(t,"68767446ea",{hash:{},data:i}))+'</h2>\n<div class="well phone-form form-horizontal" style="margin-top: 5px; margin-bottom: 15px;">\n\n<table class="table table-condensed" style="width: 97%;  font-size: 0.9em; margin: 5px">\n  <thead>\n    <tr>\n      ',o=n["if"].call(t,t.isShopping,{hash:{},inverse:f.noop,fn:f.program(9,g,i),data:i});if(o||o===0)s+=o;s+='\n      <td style="text-align: left"><h3>'+c(n._.call(t,"652bcc3a47",{hash:{},data:i}))+'</h3></td>\n      <td style="width: 15%; text-align: right"><h3>'+c(n._.call(t,"93c91c851e",{hash:{},data:i}))+'</h3></td>\n      <td style="width: 15%; text-align: center"><h3>'+c(n._.call(t,"822bab8d41",{hash:{},data:i}))+'</h3></td>\n      <td style="width: 15%; text-align: right"><h3>'+c(n._.call(t,"49e96d7cdf",{hash:{},data:i}))+"</h3></td>\n    </tr>\n  </thead>\n\n  <tbody>\n    ",u=(o=(o=t.items,typeof o===a?o.apply(t):o),l.call(t,o,{hash:{},inverse:f.noop,fn:f.programWithDepth(y,i,t),data:i}));if(u||u===0)s+=u;s+="\n\n    ",u=(o=(o=t.items,typeof o===a?o.apply(t):o),l.call(t,o,{hash:{},inverse:f.programWithDepth(x,i,t),fn:f.noop,data:i}));if(u||u===0)s+=u;return s+="\n  </tbody>\n</table>\n</div>\n",s})})();})();(function(){var divName='shoppingTotals';(function(){var e=Handlebars.template,t=Handlebars.templates=Handlebars.templates||{};t[divName]=e(function(e,t,n,r,i){function l(e,t){var r="",i;return r+='\n			<li>\n				<div style="display: inline-block; width: 48%; padding: 13px 0px 0px 3px">'+u(n._.call(e,"5be28ea2f9",{hash:{},data:t}))+':</div>\n				<div style="display: inline-block; width: 48%; text-align: right; padding: 13px 3px 0px 0px">'+u((i=e.subtotal,typeof i===a?i.apply(e):i))+" "+u((i=e.currency,typeof i===a?i.apply(e):i))+"</div>\n			</li>\n		",r}function c(e,t){var r="",i;return r+='\n			<li>\n				<div style="display: inline-block; width: 48%; padding: 13px 0px 0px 3px">'+u(n._.call(e,"47e2886ee5",{hash:{},data:t}))+':</div>\n				<div style="display: inline-block; width: 48%; text-align: right; padding: 13px 3px 0px 0px">'+u((i=e.tax,typeof i===a?i.apply(e):i))+" "+u((i=e.currency,typeof i===a?i.apply(e):i))+"</div>\n			</li>\n		",r}function h(e,t){var r="",i;return r+='\n			<li>\n				<div style="display: inline-block; width: 48%; padding: 13px 0px 0px 3px">'+u(n._.call(e,"ad5751430e",{hash:{},data:t}))+':</div>\n				<div style="display: inline-block; width: 48%; text-align: right; padding: 13px 3px 0px 0px">'+u((i=e.shipping,typeof i===a?i.apply(e):i))+" "+u((i=e.currency,typeof i===a?i.apply(e):i))+"</div>\n			</li>\n		",r}this.compilerInfo=[2,">= 1.0.0-rc.3"],n=n||e.helpers,i=i||{};var s="",o,u=this.escapeExpression,a="function",f=this;s+='<div id="checkoutTotal">\n	<h2>'+u(n._.call(t,"03cae7f5ea",{hash:{},data:i}))+'</h2>\n</div>\n\n<div class="phone-form well" style="margin-top: 5px; padding-top: 6px;">\n	<ul >\n		',o=n["if"].call(t,t.showSubtotal,{hash:{},inverse:f.noop,fn:f.program(1,l,i),data:i});if(o||o===0)s+=o;s+="\n		",o=n["if"].call(t,t.tax,{hash:{},inverse:f.noop,fn:f.program(3,c,i),data:i});if(o||o===0)s+=o;s+="\n		",o=n["if"].call(t,t.shipping,{hash:{},inverse:f.noop,fn:f.program(5,h,i),data:i});if(o||o===0)s+=o;return s+='\n			<li>\n				<div style="display: inline-block; width: 48%; padding: 13px 0px 0px 3px"><strong>'+u(n._.call(t,"ab2882c864",{hash:{},data:i}))+':</strong></div>\n				<div style="display: inline-block; width: 48%; text-align: right; padding: 13px 3px 0px 0px"><strong><b id="orderTotal">'+u((o=t.total,typeof o===a?o.apply(t):o))+"</b> "+u((o=t.currency,typeof o===a?o.apply(t):o))+"</strong></div>\n			</li>\n	</ul>\n</div>\n",s})})();})();
  </script>
</body>
</html>
