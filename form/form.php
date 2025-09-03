<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Donation Form</title>
    <link rel="stylesheet" href="form.css" />
    <style>
      .error {color: #FF0000;}
    </style>
  </head>
  <body>
    <?php
    // define variables and set to empty values
    $fnameErr = $lnameErr = $companyErr = $address1Err= $address2Err = $cityErr = $stateErr = $zipErr = $countryErr = $phoneErr = $faxErr = $emailErr = $amountErr = $nameErr = "";
    $fname = $lname = $company = $address1 = $address2 = $city = $state = $zip = $country = $phone = $fax = $email = $amount = $name = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["fname"])) {
        $fnameErr = "First Name is required";
      } else {
        $fname = test_input($_POST["fname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
          $nameErr = "Only letters and white space allowed";
        }
      }
      if (empty($_POST["lname"])) {
        $lnameErr = "Last Name is required";
      } else {
        $lname = test_input($_POST["lname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-A-Z-' ]*$/",$lname)) {
          $lnameErr = "Only letters and white space allowed";
        }
      }
      //company
      if (empty($_POST["company"])) {
        $companyErr = "Company is required";
      } else {
        $company = test_input($_POST["company"]);
      }
      if (!empty($_POST["company"])) {
            $company = test_input($_POST["company"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$company)) {
                $companyErr = "Only letters and white space allowed";
            }
        }
      if (empty($_POST["address1"])) {
        $address1Err = "Address 1 is required";
      } else {
        $address1 = test_input($_POST["address1"]);
      }
      if (empty($_POST["city"])) {
        $cityErr = "City is required";
      } else {
        $city = test_input($_POST["city"]);
      }
      if (empty($_POST["state"])) {
        $stateErr = "State is required";
      } else {
        $state = test_input($_POST["state"]);
      }
      if (empty($_POST["zip"])) {
        $zipErr = "Zip Code is required";
      } else {
        $zip = test_input($_POST["zip"]);
      }
      if (empty($_POST["country"])) {
        $countryErr = "Country is required";
      } else {
        $country = test_input($_POST["country"]);
      }

      if (empty($_POST["phone"])) {
        $phoneErr = "Phone is required";
      } else {
        $phone = test_input($_POST["phone"]);
      }
      
        if (!empty($_POST["phone"])) {
            $phone = test_input($_POST["phone"]);
            if (!preg_match("/^[0-9]{11}$/",$phone)) {
                $phoneErr = "Invalid phone number format";
            }
        }
       
      if (empty($_POST["fax"])) {
        $faxErr = "Fax is required";
      } else {
        $fax = test_input($_POST["fax"]);
      }
        if (!empty($_POST["fax"])) {
            $fax = test_input($_POST["fax"]);
            if (!preg_match("/^[0-9]{10}$/",$fax)) {
                $faxErr = "Invalid fax number format";
            }
        }
      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
        }
      }
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <form class="donation-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <h2 class="section-heading">  Donor Information</h2>

      <div class="form-row">
        <label>First Name <span>*</span></label>
        <input type="text" name="fname"  value="<?php echo $fname;?>"/>
        <span class="error"> <?php echo $fnameErr;?></span>
      </div>

      <div class="form-row">
        <label>Last Name<span>*</span></label
        ><input type="text" name="lname" value="<?php echo $lname;?>" />
        <span class="error"> <?php echo $lnameErr;?></span>
      </div>

      <div class="form-row"><label>Company</label><input type="text" name="company" value="<?php echo $company;?>" /></div>
      <div class="form-row">
        <span class="error"> <?php echo $companyErr;?></span>
        
        <label>Address 1<span>*</span></label
        ><input type="text" name="address1"  value="<?php echo $address1;?>"  />
        <span class="error"> <?php echo $address1Err;?></span>
      </div>

      <div class="form-row"><label>Address 2</label><input type="text" name="address2" value="<?php echo $address2;?>" /></div>
     
      <div class="form-row">
        <label>City<span>*</span></label
        ><input type="text" name="city"  value="<?php echo $city;?>" />
        <span class="error"> <?php echo $cityErr;?></span>
      </div>
      
      <div class="form-row">
        <label>State<span>*</span></label>
        <select name="state" >
          <option value="">Select a State</option>
          <option value="New York" <?php if ($state == "New York") echo "selected";?>>New York</option>
          <option value="Texas" <?php if ($state == "Texas") echo "selected";?>>Texas</option>
          <option value="Florida" <?php if ($state == "Florida") echo "selected";?>>Florida</option>
        </select>
      </div>
      
      <div class="form-row">
        <label>Zip Code<span>*</span></label
        ><input type="text" name="zip" value="<?php echo $zip;?>" />
        <span class="error"> <?php echo $zipErr;?></span>
      </div>
      
      <div class="form-row">
        <label>Country<span>*</span></label>
        <select name="country" >
          <option value="">Select a Country</option>
          <option value="USA" <?php if ($country == "USA") echo "selected";?>>USA</option>
          <option value="Canada" <?php if ($country == "Canada") echo "selected";?>>Canada</option>
          <option value="UK" <?php if ($country == "UK") echo "selected";?>>UK</option>
          <option value="Bangladesh" <?php if ($country == "Bangladesh") echo "selected";?>>Bangladesh</option>
        </select>
      </div>
       <span class="error"> <?php echo $countryErr;?></span>
     
       <div class="form-row"><label>Phone</label><input type="tel" name="phone" value="<?php echo $phone;?>" />
      <span class="error"> <?php echo $phoneErr;?></span>
    </div>
    
    <div class="form-row"><label>Fax</label><input type="tel" name="fax" value="<?php echo $fax;?>" />
      <span class="error"> <?php echo $faxErr;?></span>
    </div>
    
    <div class="form-row">
        <label>Email<span>*</span></label
        ><input type="email" name="email"  value="<?php echo $email;?>" />
        <span class="error"> <?php echo $emailErr;?></span>
      </div>

      <div class="form-row donation-options">
        <label>Donation Amount<span>*</span></label>
        <div>
          <label
            ><input type="radio" name="amount" value="0" <?php if (isset($amount) && $amount=="0") echo "checked";?> /> None</label>
             
          <label><input type="radio" name="amount" value="50" <?php if (isset($amount) && $amount=="50") echo "checked";?> /> $50</label>
          <label><input type="radio" name="amount" value="75" <?php if (isset($amount) && $amount=="75") echo "checked";?> /> $75</label>
          <label><input type="radio" name="amount" value="100" <?php if (isset($amount) && $amount=="100") echo "checked";?> /> $100</label>
          <label><input type="radio" name="amount" value="250" <?php if (isset($amount) && $amount=="250") echo "checked";?> /> $250</label>
          <label
            ><input type="radio" name="amount" value="other" /> Other</label
          >
        </div>
        <span class="error"> <?php echo $amountErr;?></span>
      </div>

      <div class="form-row">
        <label>Other Amount $</label><input type="text" />
      </div>

      <div class="form-row checkbox-line">
        <input type="checkbox" id="recurring" />

        <label for="recurring"
          >I am interested in giving on a regular basis.</label
        >
      </div>

      <div class="form-row">
        <label>Monthly Credit Card $</label>
        <input type="text" style="width: 60px" />
        <label>For</label>
        <input type="text" style="width: 40px" />
        <label>Months</label>
      </div>

      <h2 class="section-heading">
        Honorarium and Memorial Donation Information
      </h2>
      <div class="form-row radio-group">
        <label>I would like to make this donation</label>
        <div>
          <label
            ><input type="radio" name="dedication" value="honor" /> To
            Honor</label
          >
          <label
            ><input type="radio" name="dedication" value="memory" /> In Memory
            of</label
          >
        </div>
      </div>

      <div class="form-row"><label>Name</label><input type="text" /></div>
      <div class="form-row">
        <label>Acknowledge Donation To</label><input type="text" />
      </div>

      <div class="form-row"><label>Address</label><input type="text" /></div>

      <div class="form-row"><label>City</label><input type="text" /></div>

      <div class="form-row">
        <label>State</label>
        <select>
          <option value="">Select a State</option>
          <option>New York</option>
          <option>Texas</option>
        </select>
      </div>

      <div class="form-row"><label>Zip</label><input type="text" /></div>
      <h2 class="section-heading">Additional Information</h2>
      <p class="note">
        Please enter your name, company or organization as you would like it to
        appear in our publications:
      </p>

      <div class="form-row"><label>Name</label><input type="text" /></div>

      <div class="form-row checkbox-line">
        <input type="checkbox" /> I would like my gift to remain anonymous.
      </div>

      <div class="form-row checkbox-line">
        <input type="checkbox" /> My employer offers a matching gift program. I
        will mail the matching gift form.
      </div>

      <div class="form-row checkbox-line">
        <input type="checkbox" /> Please save the cost of acknowledging this
        gift by not mailing a thank you letter.
      </div>

      <div class="form-row"><label>Comments</label><textarea></textarea></div>

      <p class="note">How may we contact you?</p>

      <div class="form-row checkbox-line"><input type="checkbox" /> E-mail</div>

      <div class="form-row checkbox-line">
        <input type="checkbox" /> Postal Mail
      </div>

      <div class="form-row checkbox-line">
        <input type="checkbox" /> Telephone
      </div>

      <div class="form-row checkbox-line"><input type="checkbox" /> Fax</div>

      <p class="note">
        I would like to receive newsletters about special events by:
      </p>

      <div class="form-row checkbox-line"><input type="checkbox" /> E-mail</div>

      <div class="form-row checkbox-line">
        <input type="checkbox" /> Postal Mail
      </div>

      <div class="form-row checkbox-line">
        <input type="checkbox" /> I would like information about volunteering
        with the organization.
      </div>

      <div class="form-row buttons">
        <input type="reset" value="Reset" />
        <input type="submit" value="Submit" />
      </div>


    </form>
  </body>
</html>
