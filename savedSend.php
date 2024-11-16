          <?php
          session_start();
          $name = $tym = $message = $email = $phone  = $project = $source = "";
          $err = [];
          var_dump($_POST);
          // $servername = "localhost";
          // $username = "Kp_Panache";
          // $password = "fT6Fd2ovmjR16sJh";

          try {
            $conn = new PDO("mysql:host=$servername;dbname=kp_panache_db", $username, $password);
            
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
          var_dump($_POST);

          if(isset($_COOKIE['__gtm_campaign_url'])){
            $utm_sourceUrl =$_COOKIE['__gtm_campaign_url'];    
          }


          $utmUrl=parse_url($utm_sourceUrl);
          
          parse_str($utmUrl['query'], $params);
          // echo ' Hi '.$params['utm_campaign'].' your emailID is '.$params['utm_medium'];

          $utm_source=$params['utm_source'];
          $utm_medium=$params['utm_medium'];
          $utm_campaign=$params['utm_campaign'];
              // var_dump($utm_campaign);die();
          if(is_null($utm_source)){
            $utm_source='Organic';
          };
          if (is_null($utm_medium)) {
            $utm_medium='';
          };
          if (is_null($utm_campaign)) {
            $utm_campaign='';
          };
          $siteUrl='https://newlaunch.kumarworld.com/';
          if(is_null($utm_sourceUrl)){
            $utm_Url=$siteUrl;
          }
          else{
            $utm_Url=$utm_sourceUrl;
          };


          if(isset($_POST['name']) && !empty($_POST['name'])){
            $name = $_POST['name'];
          }else{
            $err['name'] = "Name is Required";
          }

          if (validate_phone_number($_POST['mobile']) == true) {
           if(isset($_POST['mobile']) && !empty($_POST['mobile'])){
            $phone = $_POST['mobile'];
          }else{
           $err['mobile'] = "Mobile number is Required";
         }
       } else {
        $err['mobile'] = "Invalid Mobile number";
      }

          // var_dump(strlen($_POST['email']) > 30);die();
      if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $err['email'] = "Invalid email format";
      }else if(isset($_POST['email']) && !empty($_POST['email'])){
        $email = $_POST['email'];
      }else{
        $err['email'] = "Email is Required";
      }


      if(isset($_POST['message']) && !empty($_POST['message'])){
        $message = $_POST['message'];
      }else{
        $err['message'] = "Message is Required";
      }

      // if(isset($_POST['pid']) && !empty($_POST['pid'])){
      //   $pid = $_POST['pid'];
      // }else{
      //   $err['pid'] = "Project Name is Required";
      // }
      if (isset($_POST['source'])) {
        $source=$_POST['source'];
      }
      $source = "KP_WebSite";

      if (isset($_POST['KpSidebarForm'])) {
        $PopUp=$_POST['KpSidebarForm'];
      }

        // var_dump($_POST);die();
      
      if(count($err) == 0){
        // var_dump($err);
        // var_dump($_POST);die();
        
        $project = "Panache";
        // echo "<pre>";
        // print_r($projects[$pid]);
        // echo "<pre>";
        $honeypot=$_REQUEST['firstname'];
        if(empty($honeypot && $json->success==1)){
        // if(true){
          
                    // var_dump($_POST);die();
          $query = "INSERT INTO leads SET name=:name, email=:email, mobile_no=:phone, message=:message, project_name=:project, source=:source, utm_source=:utmSource, utm_medium=:utmMedium, utm_campaign=:utmCampaign";
// 
          $stmt = $conn->prepare($query);
          $name = htmlspecialchars(strip_tags($name));
          $email = htmlspecialchars(strip_tags($email));
          $phone = htmlspecialchars(strip_tags($phone));
          $message = htmlspecialchars(strip_tags($message));
        // $pid = htmlspecialchars(strip_tags($pid));
          $tym = htmlspecialchars(strip_tags($tym));
          $source = htmlspecialchars(strip_tags($source));
          $utmSource = htmlspecialchars(strip_tags($utmSource));
          $utmMedium = htmlspecialchars(strip_tags($utmMedium));
          $utmCampaign = htmlspecialchars(strip_tags($utmCampaign));

        // 
          $stmt->bindParam(":name", $name);
          $stmt->bindParam(":email", $email);
          $stmt->bindParam(":phone", $phone);
          $stmt->bindParam(":message", $message);
          $stmt->bindParam(":project", $project);
          $stmt->bindParam(":source", $source);
          $stmt->bindParam(":utmSource", $utmSource);
          $stmt->bindParam(":utmMedium", $utmMedium);
          $stmt->bindParam(":utmCampaign", $utmCampaign);

          // print $query;
          if($stmt->execute()){
            // var_dump($_POST);
            $PopUp='';

            $post = array (
              'Name'=> $name,
              'Email'=>$email,
              'Phone'=>$phone,
              'Remarks'=>$PopUp,
              'Project'=>$project,
              'LandingPage'=>$utm_Url,
              'Referral'=>$source,
              'Utm_Source'=>$utmSource,
              'Utm_Medium'=>$utmMedium,
              'Utm_Campaign'=>$utmCampaign,
              'Country'=>$country
            );
            $qString=http_build_query($post);
                // echo "<pre>";
                // print_r($qString);
                // echo "<pre>";
                // var_dump($qString);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL,"https://quadraleads.in/QleadsKW/EnquiryModule/Common/EnquiryToExternalSource");
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_HEADER,true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER);
            $resp = trim(curl_exec($ch));
                // $resp = curl_exec($ch);
            $json = json_decode($resp);

            if ($e = curl_error($ch)) {
              echo $e;
            }
            else{
              $decoded = json_decode($resp);
            // echo "<pre>";
            // print_r($post);
            // echo "<pre>";
                    // print_r($resp);
                    // echo "<pre>";
                    // print_r($decoded);
                    // echo "<pre>";
                    // var_dump($decoded);
              $encoded = json_encode($decoded,true);
                    // var_dump  ($encoded);

                    // foreach ($decoded as $key => $value) {
                    // echo $key .':'.$value.'<br>';
                    //     }
            }
            curl_close ($ch);
            // ----------------------Qudra Integreation End-------------

            //email

            $to = "richard.mudaliar@megapolis.co.in, hemraj.wagh@kumarworld.com" ;
            // $to = "hemraj.wagh@kumarworld.com" ;

            $subject = "Kumar Properties Enquiry - " .$project; 

            $body  .= '<html><body>';
            $body .= '<table rules="all" style="border-color: #666;" cellpadding="10">';    
            $body .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" .$name. "</td></tr>";
            $body .= "<tr><td><strong>Email:</strong> </td><td>" . $email. "</td></tr>";
            $body .= "<tr><td><strong>Phone:</strong> </td><td>" .  $phone. "</td></tr>";
            $body .= "<tr><td><strong>Project:</strong> </td><td>"  .$project. "</td></tr>";
            $body .= "<tr><td><strong>UTM Source:</strong> </td><td> ".$utm_source."</td></tr>";
            $body .= "<tr><td><strong>Campaign Medium:</strong> </td><td> ".$utm_medium."</td></tr>";
            $body .= "<tr><td><strong>Campaign Name:</strong> </td><td> ".$utm_campaign."</td></tr>";
            $body .= "</table>";
            $body .= "</body></html>";

            $headers = "From: newlaunch@kumarworld.com \r\n";
                                      //$headers .='X-Mailer: PHP/' . phpversion();
                                           //$headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            $send = mail($to, $subject, $body, $headers);

            header('Location: thank-you.php');

          } 
               // -----------End if($stmt) ---------
          else{
            return false;
          }

        } 

      }else{
        $_SESSION['errors'] = $err;
        $_SESSION['postval'] = $_POST;
        // echo "<pre>";
        // print_r($err);
        // echo "<pre>";
        header('Location: index.php');
      }


            // --------------End if(honypot)----------
      function validate_phone_number($phone)
      {    
       if (strlen($phone) <= 10) {
        return true;
      } else {
       return false;
     }
   }



   if(isset($_COOKIE['__gtm_campaign_url'])){
    unset($_COOKIE['__gtm_campaign_url']);    
  }
            // function validate_email($email)
            // {    
            //    if (strlen($email) <= 30) {
            //       return true;
            //    } else {
            //      return false;
            //    }
            // }

  ?>                                
  <?php 
  session_destroy();
  ?>

<!-- <!DOCTYPE html>
<html>
<head>
  <title>Processing....</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<body>
  <section class="w-100 section-1 h-100 ">
    <div class="container ">
      <div class="row h-100 ">
        <img src="images/loading.gif" alt="Processing..." style="display: flex;justify-content: center;align-items: center; margin:10px auto; width:100%; max-width: 870px;">
      </div>
    </div>
  </section>

</body>
</html> -->