<?php require_once "model.php"; ?>

<?php
       $errors = array(); 
 
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
       
        if(isset($post['submit'])){

         $name = $post['name'];
         $company = $post['company'];
         $address = $post['address'];
         $floor = $post['floor'];
         $country = $post['country'];
         $post_code = $post['post_code'];
         $city = $post['city'];
         $phone = $post['phone'];
         $email = $post['email'];
         $Rname = $post['Rname'];
         $Rphone = $post['Rphone'];
         $Rcountry = $post['Rcountry'];
         $Raddress = $post['Raddress'];
         $Rfloor = $post['Rfloor'];
         $Rpost_code = $post['Rpost_code'];
          $Rcity = $post['Rcity'];
          $Remail = $post['Remail'];
           $Rcompany = $post['Rcompany'];
         
         $sql = 'INSERT INTO public_form (name,company, address,floor,country,post_code,city,phone,email,Rname,Rphone,Rcountry,Raddress,Rfloor,Rpost_code,Rcity,Remail,Rcompany) VALUES (:name, :company, :address, :floor, :country, :post_code, :city, :phone, :email, :Rname, :Rphone, :Rcountry,:Raddress, :Rfloor, :Rpost_code, :Rcity, :Remail, :Rcompany)';
         $stmt = $pdo->prepare($sql);
         $stmt->execute(array(':name'=>$name, ':company'=>$company, ':address'=>$address, ':floor'=>$floor, ':country'=>$country, ':post_code'=>$post_code, ':city'=>$city, ':phone'=>$phone, ':email' => $email, ':Rname'=>$Rname, ':Rphone'=>$Rphone, ':Rcountry' =>$Rcountry, ':Raddress'=>$Raddress, ':Rfloor'=>$Rfloor, ':Rpost_code'=>$Rpost_code, ':Rcity'=>$Rcity, ':Remail'=>$Remail, ':Rcompany'=>$Rcompany));
         if ($stmt) {
               $message = "Successfull we will get back to you shortly";
           } else {
           $message = "An Error Occured";
           }
       // }
   }
?>

<?php include("includes/header.php"); ?>
<!-- inner banner -->
<div class="inner-banner" id="home">
	<div class="container">
		
	</div>	
</div>
<!-- inner banner -->

<!-- contact -->
<section class="contact py-5 my-lg-5">
	<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
		
	<div class="map">
		<div class="main_grid_contact">

			<div class="form">
				<h4 > Enter your (From) address and the recipient's (To) address.</h4>
				<h3 class="text-capitalize mb-2">From Address</h3>
				 <div class="container">
		 <?php if(isset($message)) : ?>
               <div class="alert alert-danger alert-dismissable">
                  <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
                     <?php echo $message; 
                     unset($message);
                  ?>
               </div>
            <?php endif; ?>
        </div>
				<form action="en_np_features.php" method="post">
					<div class="input-group">
						<input type="text" class="margin2" name="name" placeholder="Your name" required="">
						<input type="text" name="company" placeholder="Company" required="">
					</div>
					<div class="input-group">
  
						<input type="text" class="margin2" name="address" placeholder="Street Address"  required="">
						<input type="text" name="floor" placeholder="Apt, Floor, Suite, etc (Optional)">
					</div>
					 <select name="country">
                <option value="Nepal" selected disabled>Country/Location</option>
				<option value="Afghanistan">Afghanistan</option>
				<option value="Albania">Albania</option>
				<option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
				<option value="Angola">Angola</option>
				<option value="Anguilla">Anguilla</option>
				<option value="Antartica">Antartica</option>
				<option value="Antigua and Barbuda">Antigua and Barbuda</option>
				<option value="Agentina">Agentina</option>
				<option value="Armenia">Armenia</option>
				<option value="Aruba">Aruba</option>
				<option value="Ashmore and Cartier island">Ashmore and Cartier island</option>
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
				<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
				<option value="Botswana">Botswana</option>
				<option value="Brazil">Brazil</option>
				<option value="British virgin islands">British virgin islands</option>
				<option value="Brunei">Brunei</option>
				<option value="Bulgaria">Bulgaria</option>
				<option value="Burkina Faso">Burkina Faso</option>
				<option value="Burma">Burma </option>
				<option value="Burundi">Burundi</option>
				<option value="Cambodia">Cambodia</option>
				<option value="Cameron">Cameron</option>
				<option value="Canada">Canada</option>
				<option value="Cape Verde">Cape Verde</option>
				<option value="Cayman islands">Cayman islands</option>
				<option value="Central African Republic">Central African Republic</option>
				<option value="Chad">Chad</option>
				<option value="Chile">Chile</option>
				<option value="China">China</option>
				<option value="Christmas island">Christmas island</option>
				<option value="Clipperton island">Clipperton island</option>
				<option value="Cocos (Keeling) islands">Cocos (Keeling) islands</option>
				<option value="Colombia">Colombia</option>
				<option value="Comoros">Comoros</option>
				<option value="Congo Democratic Republic of the">Congo Democratic Republic of the</option>
				<option value="Cook islands">Cook islands</option>
				<option value="Costa Rica">Costa Rica</option>
				<option value="Cote d Ivoire">Cote d Ivoire</option>
				<option value="Croatia">Croatia</option>
				<option value="Cuba">Cuba</option>
				<option value="Cyprus">Cyprus</option>
				<option value="Czeck Republic">Czeck Republic</option>
				<option value="Denmark">Denmark</option>
				<option value="Djibouti">Djibouti</option>
				<option value="Deminica">Deminica</option>
				<option value="Deminican Republic">Deminican Republic</option>
				<option value="Ecuador">Ecuador</option>
				<option value="Eqypt">Eqypt</option>
				<option value="El Salvador">El Salvador</option>
				<option value="Equatorial Guinea">Equatorial Guinea</option>
				<option value="Eritrea">Eritrea</option>
				<option value="Estonia">Estonia</option>
				<option value="Ethiopia">Ethiopia</option>
				<option value="Europa island">Europa island</option>
				<option value="Falkland island (islas Malvinas)">Falkland island (islas Malvinas)</option>
				<option value="Faroe islands">Faroe islands</option>
				<option value="Fiji">Fiji</option>
				<option value="Finland">Finland</option>
				<option value="France">France</option>
				<option value="French Guiana">French Guiana</option>
				<option value="French Polynesia">French Polynesia</option>
				<option value="French Southern and Antarctic Lands">French Southern and Antarctic Lands</option>
				<option value="Gabon">Gabon</option>
				<option value="Gambia">Gambia</option>
				<option value="Gaza Strip">Gaza Strip</option>
				<option value="Georgia">Georgia</option>
				<option value="Germany">Germany</option>
				<option value="Ghana">Ghana</option>
				<option value="Gibraltar">Gibraltar</option>
				<option value="Glorioso island">Glorioso island</option>
				<option value="Greece">Greece</option>
				<option value="Greenland">Greenland</option>
				<option value="Grenada">Grenada</option>
				<option value="Guadeloupe">Guadeloupe</option>
				<option value="Guam">Guam</option>
				<option value="Guatermala">Guatermala</option>
				<option value="Guernsey">Guernsey</option>
				<option value="Guinea">Guinea</option>
				<option value="Guinae-Bissau">Guinae-Bissau</option>
				<option value="Guyaria">Guyaria</option>
				<option value="Haiti">Haiti</option>
				<option value="Heard island and McDonald islands">Heard island and McDonald islands</option>
				<option value="Holy See (Vatican City)">Holy See (Vatican City)</option>
				<option value="Hunduras">Hunduras</option>
				<option value="Hong Kong">Hong Kong</option>
				<option value="Howland island">Howland island</option>
				<option value="Hungary">Hungary</option>
				<option value="iceland">iceland</option>
				<option value="India">India</option>
				<option value="Indonesia">Indonesia</option>
				<option value="Iran">Iran</option>
				<option value="Iraq">Iraq</option>
				<option value="Ireland">Ireland</option>
				<option value="Ireland, Northern">Ireland, Northern</option>
				<option value="Isreal">Isreal</option>
				<option value="Italy">Italy</option>
				<option value="jamacia">jamacia</option>
				<option value="jan Mayen">jan Mayen</option>
				<option value="japan">japan</option>
				<option value="jarvis island">jarvis island</option>
				<option value="jersey">jersey</option>
				<option value="johnston Atoil">johnston Atoil</option>
				<option value="jordan">jordan</option>
				<option value="juan de Nova island">juan de Nova island</option>
				<option value="KazaKhstan">KazaKhstan</option>
				<option value="Kenya">Kenya</option>
				<option value="Kiribati">Kiribati</option>
				<option value="Korea North">Korea North</option>
				<option value="Korea South">Korea South</option>
				<option value="Kuwait">Kuwait</option>
				<option value="Kyrgyzstan">Kyrgyzstan</option>
				<option value="laos">laos</option>
				<option value="Latvia">Latvia</option>
				<option value="Lebanon">Lebanon</option>
				<option value="Lesotho">Lesotho</option>
				<option value="Liberia">Liberia</option>
				<option value="Libya">Libya</option>
				<option value="Liechtenstein">Liechtenstein</option>
				<option value="Lithuania">Lithuania</option>
				<option value="Luxembourg">Luxembourg</option>
				<option value="Macau">Macau</option>
				<option value="Macedonia, Former Yugoslav Republic">Macedonia, Former Yugoslav Republic</option>
				<option value="Madagascar">Madagascar</option>
				<option value="Malawi">Malawi</option>
				<option value="Malaysia">Malaysia</option>
				<option value="Maidives">Maidives</option>
				<option value="Mali">Mali</option>
				<option value="Malta">Malta</option>
				<option value="Man, Isle of">Man, Isle of</option>
				<option value="Marshall Island">Marshall Island</option>
				<option value="Martinique">Martinique</option>
				<option value="Mauritlus">Mauritlus</option>
				<option value="Mayotte">Mayotte</option>
				<option value="Mexico">Mexico</option>
				<option value="Micronesia, Fedetated State of">Micronesia, Fedetated State of</option>
				<option value="Midway Islands">Midway Islands</option>
				<option value="Moldova">Moldova</option>
				<option value="Manaco">Manaco</option>
				<option value="Mongolia">Mongolia</option>
				<option value="Montserrat">Montserrat</option>
				<option value="Morocco">Morocco</option>
				<option value="Mozambique">Mozambique</option>
				<option value="Namibia">Namibia</option>
				<option value="Nauru">Nauru</option>
				<option value="Nepal">Nepal</option>
				<option value="Netherlands">Netherlands</option>
				<option value="Netherlands Antilies">Netherlands Antilies</option>
				<option value="New Caledonia">New Caledonia</option>
				<option value="New Zealand">New Zealand</option>
				<option value="Nicaragua">Nicaragua</option>
				<option value="Niger">Niger</option>
				<option value="Nigeria">Nigeria</option>
				<option value="Niue">Niue</option>
				<option value="Norfolk Island">Norfolk Island</option>
				<option value="Northern Mariana Islands">Northern Mariana Islands</option>
				<option value="Norway">Norway</option>
				<option value="Orman">Orman</option>
				<option value="Pakistan">Pakistan</option>
				<option value="Palau">Palau</option>
				<option value="Panama">Panama</option>
				<option value="Papua New Guinea">Papua New Guinea</option>
				<option value="Paraguay">Paraguay</option>
				<option value="Peru">Peru</option>
				<option value="Phillipines">Phillipines</option>
				<option value="Pitcaim islands">Pitcaim islands</option>
				<option value="Poland">Poland</option>
				<option value="Portugal">Portugal</option>
				<option value="Puerto Rica">Puerto Rica</option>
				<option value="Qatar">Qatar</option>
				<option value="Reunion">Reunion</option>
				<option value="Romania">Romania</option>
				<option value="Russia">Russia</option>
				<option value="Rwanda">Rwanda</option>
				<option value="Saint Helena">Saint Helena</option>
				<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
				<option value="Saint Lucia">Saint Lucia</option>
				<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
				<option value="Samoa">Samoa</option>
				<option value="San Marino">San Marino</option>
				<option value="Sao Tome and Principle">Sao Tome and Principle</option>
				<option value="Saudi Arabia">Saudi Arabia</option>
				<option value="Scotland">Scotland</option>
				<option value="Senegal">Senegal</option>
				<option value="Seychelles">Seychelles</option>
				<option value="Sierra Leone">Sierra Leone</option>
				<option value="Singapore">Singapore</option>
				<option value="Sloviakia">Sloviakia</option>
				<option value="Slovania">Slovania</option>
				<option value="Solomon Islands">Solomon Islands</option>
				<option value="Somalia">Somalia</option>
				<option value="South Africa">South Africa</option>
				<option value="South Georgia and South Sandwich islands">South Georgia and South Sandwich islands</option>
				<option value="Spain">Spain</option>
				<option value="Spratty Islands">Spratty Islands</option>
				<option value="Sri Lanka">Sri Lanka</option>
				<option value="Sudan">Sudan</option>
				<option value="Suriname">Suriname</option>
				<option value="Svaziland">Svaziland</option>
				<option value="Sweden">Sweden</option>
				<option value="Switzerland">Switzerland</option>
				<option value="Syria">Syria</option>
				<option value="Taiwan">Taiwan</option>
				<option value="Tyjikistan">Tyjikistan</option>
				<option value="Tanzania">Tanzania</option>
				<option value="Tobago">Tobago</option>
				<option value="Togo">Togo</option>
				<option value="Tokelau">Tokelau</option>
				<option value="Tonga">Tonga</option>
				<option value="Trinidad">Trinidad</option>
				<option value="Tunisia">Tunisia</option>
				<option value="Turkey">Turkey</option>
				<option value="Turkmenistan">Turkmenistan</option>
				<option value="Tuvalu">Tuvalu</option>
				<option value="Uganda">Uganda</option>
				<option value="Ukraine">Ukraine</option>
				<option value="United Arab Emirates">United Arab Emirates</option>
				<option value="Seychelles">Seychelles</option>
				<option value="United Kingdom">United Kingdom</option>
				<option value="Uruguay">Uruguay</option>
				<option value="USA">USA</option>
				<option value="Uzbekistan">Uzbekistan</option>
				<option value="Vanuatu">Vanuatu</option>
				<option value="Venezuela">Venezuela</option>
				<option value="Vietnam">Vietnam</option>
				<option value="Virgin Islands">Virgin Islands</option>
				<option value="Wales">Wales</option>
				<option value="Wallis and Futuna">Wallis and Futuna</option>
				<option value="West Bank">West Bank</option>
				<option value="Western Sahara">Western Sahara</option>
				<option value="Yemen">Yemen</option>
				<option value="Yugoslavia">Yugoslavia</option>
				<option value="Zambia">Zambia</option>
				<option value="Zimbabwe">Zimbabwe</option>
			</select>
					<div class="input-group">
						<input type="text" class="margin2" name="post_code" placeholder="Post code (Optional)" >
						<input type="text" name="city" placeholder="City/State" required="" >
					</div>
					<div class="input-group">
						<input type="text" class="margin2" name="phone" placeholder="Phone "  required="">
						<input type="text" name="email" placeholder="Email notification"  required="">
					</div>
				
			</div>
			<div class="form">
				<h3 class="text-capitalize mb-2">To Address</h3>
					<div class="input-group">
						<input type="text" class="margin2" name="Rname" placeholder="Recipient name" required="">
						<input type="text" name="Rcompany" placeholder="Company (Optional)">
					</div>
					 <select name="Rcountry">
                <option value="#" selected disabled>Country/Location</option>
				<option value="Afghanistan">Afghanistan</option>
				<option value="Albania">Albania</option>
				<option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
				<option value="Angola">Angola</option>
				<option value="Anguilla">Anguilla</option>
				<option value="Antartica">Antartica</option>
				<option value="Antigua and Barbuda">Antigua and Barbuda</option>
				<option value="Agentina">Agentina</option>
				<option value="Armenia">Armenia</option>
				<option value="Aruba">Aruba</option>
				<option value="Ashmore and Cartier island">Ashmore and Cartier island</option>
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
				<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
				<option value="Botswana">Botswana</option>
				<option value="Brazil">Brazil</option>
				<option value="British virgin islands">British virgin islands</option>
				<option value="Brunei">Brunei</option>
				<option value="Bulgaria">Bulgaria</option>
				<option value="Burkina Faso">Burkina Faso</option>
				<option value="Burma">Burma </option>
				<option value="Burundi">Burundi</option>
				<option value="Cambodia">Cambodia</option>
				<option value="Cameron">Cameron</option>
				<option value="Canada">Canada</option>
				<option value="Cape Verde">Cape Verde</option>
				<option value="Cayman islands">Cayman islands</option>
				<option value="Central African Republic">Central African Republic</option>
				<option value="Chad">Chad</option>
				<option value="Chile">Chile</option>
				<option value="China">China</option>
				<option value="Christmas island">Christmas island</option>
				<option value="Clipperton island">Clipperton island</option>
				<option value="Cocos (Keeling) islands">Cocos (Keeling) islands</option>
				<option value="Colombia">Colombia</option>
				<option value="Comoros">Comoros</option>
				<option value="Congo Democratic Republic of the">Congo Democratic Republic of the</option>
				<option value="Cook islands">Cook islands</option>
				<option value="Costa Rica">Costa Rica</option>
				<option value="Cote d Ivoire">Cote d Ivoire</option>
				<option value="Croatia">Croatia</option>
				<option value="Cuba">Cuba</option>
				<option value="Cyprus">Cyprus</option>
				<option value="Czeck Republic">Czeck Republic</option>
				<option value="Denmark">Denmark</option>
				<option value="Djibouti">Djibouti</option>
				<option value="Deminica">Deminica</option>
				<option value="Deminican Republic">Deminican Republic</option>
				<option value="Ecuador">Ecuador</option>
				<option value="Eqypt">Eqypt</option>
				<option value="El Salvador">El Salvador</option>
				<option value="Equatorial Guinea">Equatorial Guinea</option>
				<option value="Eritrea">Eritrea</option>
				<option value="Estonia">Estonia</option>
				<option value="Ethiopia">Ethiopia</option>
				<option value="Europa island">Europa island</option>
				<option value="Falkland island (islas Malvinas)">Falkland island (islas Malvinas)</option>
				<option value="Faroe islands">Faroe islands</option>
				<option value="Fiji">Fiji</option>
				<option value="Finland">Finland</option>
				<option value="France">France</option>
				<option value="French Guiana">French Guiana</option>
				<option value="French Polynesia">French Polynesia</option>
				<option value="French Southern and Antarctic Lands">French Southern and Antarctic Lands</option>
				<option value="Gabon">Gabon</option>
				<option value="Gambia">Gambia</option>
				<option value="Gaza Strip">Gaza Strip</option>
				<option value="Georgia">Georgia</option>
				<option value="Germany">Germany</option>
				<option value="Ghana">Ghana</option>
				<option value="Gibraltar">Gibraltar</option>
				<option value="Glorioso island">Glorioso island</option>
				<option value="Greece">Greece</option>
				<option value="Greenland">Greenland</option>
				<option value="Grenada">Grenada</option>
				<option value="Guadeloupe">Guadeloupe</option>
				<option value="Guam">Guam</option>
				<option value="Guatermala">Guatermala</option>
				<option value="Guernsey">Guernsey</option>
				<option value="Guinea">Guinea</option>
				<option value="Guinae-Bissau">Guinae-Bissau</option>
				<option value="Guyaria">Guyaria</option>
				<option value="Haiti">Haiti</option>
				<option value="Heard island and McDonald islands">Heard island and McDonald islands</option>
				<option value="Holy See (Vatican City)">Holy See (Vatican City)</option>
				<option value="Hunduras">Hunduras</option>
				<option value="Hong Kong">Hong Kong</option>
				<option value="Howland island">Howland island</option>
				<option value="Hungary">Hungary</option>
				<option value="iceland">iceland</option>
				<option value="India">India</option>
				<option value="Indonesia">Indonesia</option>
				<option value="Iran">Iran</option>
				<option value="Iraq">Iraq</option>
				<option value="Ireland">Ireland</option>
				<option value="Ireland, Northern">Ireland, Northern</option>
				<option value="Isreal">Isreal</option>
				<option value="Italy">Italy</option>
				<option value="jamacia">jamacia</option>
				<option value="jan Mayen">jan Mayen</option>
				<option value="japan">japan</option>
				<option value="jarvis island">jarvis island</option>
				<option value="jersey">jersey</option>
				<option value="johnston Atoil">johnston Atoil</option>
				<option value="jordan">jordan</option>
				<option value="juan de Nova island">juan de Nova island</option>
				<option value="KazaKhstan">KazaKhstan</option>
				<option value="Kenya">Kenya</option>
				<option value="Kiribati">Kiribati</option>
				<option value="Korea North">Korea North</option>
				<option value="Korea South">Korea South</option>
				<option value="Kuwait">Kuwait</option>
				<option value="Kyrgyzstan">Kyrgyzstan</option>
				<option value="laos">laos</option>
				<option value="Latvia">Latvia</option>
				<option value="Lebanon">Lebanon</option>
				<option value="Lesotho">Lesotho</option>
				<option value="Liberia">Liberia</option>
				<option value="Libya">Libya</option>
				<option value="Liechtenstein">Liechtenstein</option>
				<option value="Lithuania">Lithuania</option>
				<option value="Luxembourg">Luxembourg</option>
				<option value="Macau">Macau</option>
				<option value="Macedonia, Former Yugoslav Republic">Macedonia, Former Yugoslav Republic</option>
				<option value="Madagascar">Madagascar</option>
				<option value="Malawi">Malawi</option>
				<option value="Malaysia">Malaysia</option>
				<option value="Maidives">Maidives</option>
				<option value="Mali">Mali</option>
				<option value="Malta">Malta</option>
				<option value="Man, Isle of">Man, Isle of</option>
				<option value="Marshall Island">Marshall Island</option>
				<option value="Martinique">Martinique</option>
				<option value="Mauritlus">Mauritlus</option>
				<option value="Mayotte">Mayotte</option>
				<option value="Mexico">Mexico</option>
				<option value="Micronesia, Fedetated State of">Micronesia, Fedetated State of</option>
				<option value="Midway Islands">Midway Islands</option>
				<option value="Moldova">Moldova</option>
				<option value="Manaco">Manaco</option>
				<option value="Mongolia">Mongolia</option>
				<option value="Montserrat">Montserrat</option>
				<option value="Morocco">Morocco</option>
				<option value="Mozambique">Mozambique</option>
				<option value="Namibia">Namibia</option>
				<option value="Nauru">Nauru</option>
				<option value="Nepal">Nepal</option>
				<option value="Netherlands">Netherlands</option>
				<option value="Netherlands Antilies">Netherlands Antilies</option>
				<option value="New Caledonia">New Caledonia</option>
				<option value="New Zealand">New Zealand</option>
				<option value="Nicaragua">Nicaragua</option>
				<option value="Niger">Niger</option>
				<option value="Nigeria">Nigeria</option>
				<option value="Niue">Niue</option>
				<option value="Norfolk Island">Norfolk Island</option>
				<option value="Northern Mariana Islands">Northern Mariana Islands</option>
				<option value="Norway">Norway</option>
				<option value="Orman">Orman</option>
				<option value="Pakistan">Pakistan</option>
				<option value="Palau">Palau</option>
				<option value="Panama">Panama</option>
				<option value="Papua New Guinea">Papua New Guinea</option>
				<option value="Paraguay">Paraguay</option>
				<option value="Peru">Peru</option>
				<option value="Phillipines">Phillipines</option>
				<option value="Pitcaim islands">Pitcaim islands</option>
				<option value="Poland">Poland</option>
				<option value="Portugal">Portugal</option>
				<option value="Puerto Rica">Puerto Rica</option>
				<option value="Qatar">Qatar</option>
				<option value="Reunion">Reunion</option>
				<option value="Romania">Romania</option>
				<option value="Russia">Russia</option>
				<option value="Rwanda">Rwanda</option>
				<option value="Saint Helena">Saint Helena</option>
				<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
				<option value="Saint Lucia">Saint Lucia</option>
				<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
				<option value="Samoa">Samoa</option>
				<option value="San Marino">San Marino</option>
				<option value="Sao Tome and Principle">Sao Tome and Principle</option>
				<option value="Saudi Arabia">Saudi Arabia</option>
				<option value="Scotland">Scotland</option>
				<option value="Senegal">Senegal</option>
				<option value="Seychelles">Seychelles</option>
				<option value="Sierra Leone">Sierra Leone</option>
				<option value="Singapore">Singapore</option>
				<option value="Sloviakia">Sloviakia</option>
				<option value="Slovania">Slovania</option>
				<option value="Solomon Islands">Solomon Islands</option>
				<option value="Somalia">Somalia</option>
				<option value="South Africa">South Africa</option>
				<option value="South Georgia and South Sandwich islands">South Georgia and South Sandwich islands</option>
				<option value="Spain">Spain</option>
				<option value="Spratty Islands">Spratty Islands</option>
				<option value="Sri Lanka">Sri Lanka</option>
				<option value="Sudan">Sudan</option>
				<option value="Suriname">Suriname</option>
				<option value="Svaziland">Svaziland</option>
				<option value="Sweden">Sweden</option>
				<option value="Switzerland">Switzerland</option>
				<option value="Syria">Syria</option>
				<option value="Taiwan">Taiwan</option>
				<option value="Tyjikistan">Tyjikistan</option>
				<option value="Tanzania">Tanzania</option>
				<option value="Tobago">Tobago</option>
				<option value="Togo">Togo</option>
				<option value="Tokelau">Tokelau</option>
				<option value="Tonga">Tonga</option>
				<option value="Trinidad">Trinidad</option>
				<option value="Tunisia">Tunisia</option>
				<option value="Turkey">Turkey</option>
				<option value="Turkmenistan">Turkmenistan</option>
				<option value="Tuvalu">Tuvalu</option>
				<option value="Uganda">Uganda</option>
				<option value="Ukraine">Ukraine</option>
				<option value="United Arab Emirates">United Arab Emirates</option>
				<option value="Seychelles">Seychelles</option>
				<option value="United Kingdom">United Kingdom</option>
				<option value="Uruguay">Uruguay</option>
				<option value="USA">USA</option>
				<option value="Uzbekistan">Uzbekistan</option>
				<option value="Vanuatu">Vanuatu</option>
				<option value="Venezuela">Venezuela</option>
				<option value="Vietnam">Vietnam</option>
				<option value="Virgin Islands">Virgin Islands</option>
				<option value="Wales">Wales</option>
				<option value="Wallis and Futuna">Wallis and Futuna</option>
				<option value="West Bank">West Bank</option>
				<option value="Western Sahara">Western Sahara</option>
				<option value="Yemen">Yemen</option>
				<option value="Yugoslavia">Yugoslavia</option>
				<option value="Zambia">Zambia</option>
				<option value="Zimbabwe">Zimbabwe</option>
			</select> 
					<div class="input-group">
						<input type="text" class="margin2" name="Raddress" placeholder="Street Address"  required="">
						<input type="text" name="Rfloor" placeholder="Apt, Floor, Suite, etc (Optional)">
					</div>
					<div class="input-group">
						<input type="text" class="margin2" name="Rpost_code" placeholder="Postal code"  required="">
						<input type="text" name="Rcity" placeholder="City/State"  required="">
					</div>
					<div class="input-group">
						<input type="text" class="margin2" name="Rphone" placeholder="Phone"  required="">
						<input type="text" name="Remail" placeholder="email notification" required="">
					</div>
					<checked value="">This is a residential address</checked>
					<div class="input-group1">
						<button class="submit btn" name="submit">Send </button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- //contact -->
<?php include("includes/footer.php"); ?>
