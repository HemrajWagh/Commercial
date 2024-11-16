<?php

// date_default_timezone_set("Asia/Kolkata"); 
$mysql_hostname = "localhost";
$mysql_user = "Kp_Prospera_Co";
$mysql_password = "jVVWD0zmZUKtJf59";
$mysql_database = "Kp_Prospera_Co_db";
$db = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Database Connection Problem a");mysqli_select_db($db, $mysql_database) or die("Database Connection Problem b");

  $name = !empty($_POST['name'])?$_POST['name']:NULL;
  $mobile = !empty($_POST['mobile'])?$_POST['mobile']:NULL;
  $email = !empty($_POST['email']) ? $_POST['email'] : NULL;
  $message = !empty($_POST['message'])?$_POST['message']:NULL;

  $utm_source = !empty($_POST['utm_source'])?$_POST['utm_source']:NULL;
  $utm_medium = !empty($_POST['utm_medium'])?$_POST['utm_medium']:NULL;
  $utm_campaign = !empty($_POST['utm_campaign'])?$_POST['utm_campaign']:NULL;
  $utm_term = !empty($_POST['utm_term']) ? $_POST['utm_term'] : NULL;
  $utm_display = !empty($_POST['utm_display'])?$_POST['utm_display']:NULL;

  // $sql = "INSERT INTO `leads` (`name`,  `mobile`, `email`, `utm_source`, `utm_medium`, `utm_campaign`, `utm_term`, `utm_display`, `created_at`) VALUES ('".$name."',  '".$mobile."' , '".$email. "', '".$utm_source."', '".$utm_medium."', '".$utm_campaign."', '".$utm_term. "', '" . $utm_display . "', now())";
  $sql = "INSERT INTO `Leads` (`name`,  `mobile`, `email`,`message`, `utm_source`, `utm_medium`, `utm_campaign`, `utm_term`, `utm_display`, `created_at`) VALUES ('".$name."',  '".$mobile."' , '".$email. "','".$message. "', '".$utm_source."', '".$utm_medium."', '".$utm_campaign."', '".$utm_term. "', '" . $utm_display . "', now())";

  if (mysqli_query($db, $sql)) 
  {
      // try
      // {
      //     $today = date('d/m/Y');
      //     $time = date('H:i:s');

      //     // Prepare the data array
      //     $data = array(
      //         'name' => $name,
      //         'email' => $email,
      //         'mobile' => $mobile,
      //         'message'=>$message,
      //         'utm_source' => $utm_source,
      //         'utm_medium' => $utm_medium,
      //         'utm_campaign' => $utm_campaign,
      //         'utm_term' => $utm_term,
      //         'date' => $today,
      //         'time' => $time
      //     );
        
      //     $curl = curl_init();

      //     curl_setopt_array($curl, array(
      //       CURLOPT_URL => 'https://script.google.com/macros/s/AKfycbwvzUaXNoKaOK6aW8kTbI1ry93f1EWHOPofMEGFwRw3EqgtsAME8h9I7J2rKwjkglLw/exec',
      //       CURLOPT_RETURNTRANSFER => true,
      //       CURLOPT_ENCODING => '',
      //       CURLOPT_MAXREDIRS => 10,
      //       CURLOPT_TIMEOUT => 0,
      //       CURLOPT_FOLLOWLOCATION => true,
      //       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      //       CURLOPT_CUSTOMREQUEST => 'POST',
      //       CURLOPT_POSTFIELDS => $data,
      //     ));

      //     $response = curl_exec($curl);
      //     curl_close($curl);
      //     echo $response;        
      // }
      // catch (\Throwable $th) {
      
      // }

      // try 
      // {
      //     $curl = curl_init();
      //     curl_setopt_array($curl, array(
      //       CURLOPT_URL => 'https://api-in21.leadsquared.com/v2/OpportunityManagement.svc/Capture?accessKey=u$r735234cb5339eaaf6d65d431b6822639&secretKey=a0a42eb33262a40bb5a609f52f52d99b1365bd75',
      //       CURLOPT_RETURNTRANSFER => true,
      //       CURLOPT_ENCODING => '',
      //       CURLOPT_MAXREDIRS => 10,
      //       CURLOPT_TIMEOUT => 0,
      //       CURLOPT_FOLLOWLOCATION => true,
      //       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      //       CURLOPT_CUSTOMREQUEST => 'POST',
      //       CURLOPT_POSTFIELDS =>
      //       '{
      //             "LeadDetails": [
      //                             {
      //                             "Attribute": "Phone",
      //                             "Value": "' . $mobile . '"
      //                             },
      //                             {
      //                             "Attribute": "FirstName",
      //                             "Value": "' . $name . '"
      //                             },
      //                             {
      //                             "Attribute": "LastName",
      //                             "Value": ""
      //                             },
      //                             {
      //                             "Attribute": "EmailAddress",
      //                             "Value": "' . $email . '"
      //                             },
      //                             {
      //                             "Attribute": "mx_City",
      //                             "Value": ""
      //                             },
      //                             {
      //                             "Attribute": "SearchBy",
      //                             "Value": "Phone"
      //                             }
      //             ],
      //             "Opportunity": {
      //                         "OpportunityEventCode": 12000,
      //                         "Fields": [
      //                             {
      //                                 "SchemaName": "mx_Custom_1",
      //                                 "Value": "' . $name . ' - Kumar Never Settle A2 Launch"
      //                             },
      //                             {
      //                                 "SchemaName": "mx_Custom_16",
      //                                 "Value": "Kumar Never Settle A2 Launch"
      //                             },
      //                             {
      //                                 "SchemaName": "mx_Custom_17",
      //                                 "Value": "Residential"
      //                             },
      //                             {
      //                                 "SchemaName": "mx_Custom_64", 
      //                                 "Value": "1 BHK"
      //                             },
      //                             {
      //                                 "SchemaName": "Owner",
      //                                 "Value": "digital.integration@xanadu.in"
      //                             },
      //                             {
      //                                 "SchemaName": "mx_Custom_73",
      //                                 "Value": "Web Leads"
      //                             },
      //                             {
      //                                 "SchemaName": "Status",
      //                                 "Value": "Open"
      //                             },
      //                             {
      //                                 "SchemaName": "mx_Custom_2",
      //                                 "Value": "Not Attempted"
      //                             },
      //                             {
      //                               "SchemaName": "mx_Custom_3",
      //                               "Value": "'.$utm_source.'"
      //                             },
      //                             {
      //                               "SchemaName": "mx_Custom_20",
      //                               "Value": "'.$utm_campaign.'"
      //                             },
      //                             {
      //                               "SchemaName": "mx_Custom_21",
      //                               "Value": "'.$utm_medium.'"
      //                             }
      //                         ]
      //             }
      //       }',
      //       CURLOPT_HTTPHEADER => array(
      //         'Content-Type: application/json'
      //       ),
      //     ));

      //   $response = curl_exec($curl);
      //   curl_close($curl);

      //   // var_dump($response);die();
      //   echo 1;
      // } 
      // catch (\Exception $e) 
      // {      
      // }

  }
  else
  {
    echo 0;
  }
?>
