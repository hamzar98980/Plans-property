<?php
ob_start();
@include("dbconfig.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor_2\autoload.php';

include 'Layout/navbar.php';
$uid = $_SESSION['id'];
$ch = date("Y-m-d H:i:s");

function generateNumericOTP($n) {

  $generator = "1357902468";
  
  $result = "";
  
  for ($i = 1; $i <= $n; $i++) {
      $result .= substr($generator, (rand()%(strlen($generator))), 1);
  }
  // Return result
  return $result;
}

$sm = generateNumericOTP(4);
$sql_ins = "INSERT into s_auth(`user_id`,`auth_code`,`auth_time`) values
($uid,$sm,now())";
if($con->query($sql_ins)){
  $otp = $sm;
  // $email= $_SESSION['email'];
  // $name=$_SESSION['name'];
  // $head= "Location : authmailing.php";
  //  header($head);
 





    $mailing = $_SESSION['email'];
 
    $name = $_SESSION['name'];
 
        $mail = new PHPMailer(true);


        try
        {
            $mail -> SMTPDebug = 1;
            $mail -> isSMTP();
            $mail -> Host = 'smtp.gmail.com';
            $mail -> SMTPAuth = true;
            $mail -> Username = 'sampleid.201@gmail.com';
            $mail -> Password = 'wpuonrkasrutqzyu';
            $mail -> SMTPSecure = 'tls';
            $mail -> Port = 587;
        
            $mail -> setFrom('sampleid.201@gmail.com', 'Plans Property');
            $mail -> addAddress($mailing, 'Taha');
            $mail -> isHTML(true);
            $mail -> Subject = 'Here is your Email Verification Code';
            $mail -> Body = "<!DOCTYPE HTML PUBLIC '-//W3C//DTD XHTML 1.0 Transitional //EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
            <html xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>
            <head>
            <!--[if gte mso 9]>
            <xml>
              <o:OfficeDocumentSettings>
                <o:AllowPNG/>
                <o:PixelsPerInch>96</o:PixelsPerInch>
              </o:OfficeDocumentSettings>
            </xml>
            <![endif]-->
              <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
              <meta name='viewport' content='width=device-width, initial-scale=1.0'>
              <meta name='x-apple-disable-message-reformatting'>
              <!--[if !mso]><!--><meta http-equiv='X-UA-Compatible' content='IE=edge'><!--<![endif]-->
              <title></title>
              
                <style type='text/css'>
                  @media only screen and (min-width: 620px) {
              .u-row {
                width: 600px !important;
              }
              .u-row .u-col {
                vertical-align: top;
              }
            
              .u-row .u-col-100 {
                width: 600px !important;
              }
            
            }
            
            @media (max-width: 620px) {
              .u-row-container {
                max-width: 100% !important;
                padding-left: 0px !important;
                padding-right: 0px !important;
              }
              .u-row .u-col {
                min-width: 320px !important;
                max-width: 100% !important;
                display: block !important;
              }
              .u-row {
                width: calc(100% - 40px) !important;
              }
              .u-col {
                width: 100% !important;
              }
              .u-col > div {
                margin: 0 auto;
              }
            }
            body {
              margin: 0;
              padding: 0;
            }
            
            table,
            tr,
            td {
              vertical-align: top;
              border-collapse: collapse;
            }
            
            p {
              margin: 0;
            }
            
            .ie-container table,
            .mso-container table {
              table-layout: fixed;
            }
            
            * {
              line-height: inherit;
            }
            
            a[x-apple-data-detectors='true'] {
              color: inherit !important;
              text-decoration: none !important;
            }
            
            table, td { color: #000000; } #u_body a { color: #0000ee; text-decoration: underline; } @media (max-width: 480px) { #u_content_image_4 .v-src-width { width: auto !important; } #u_content_image_4 .v-src-max-width { max-width: 43% !important; } #u_content_heading_1 .v-container-padding-padding { padding: 8px 20px 0px !important; } #u_content_heading_1 .v-font-size { font-size: 21px !important; } #u_content_heading_1 .v-text-align { text-align: center !important; } #u_content_text_2 .v-container-padding-padding { padding: 35px 15px 10px !important; } #u_content_text_3 .v-container-padding-padding { padding: 10px 15px 40px !important; } }
                </style>
              
              
            
            <!--[if !mso]><!--><link href='https://fonts.googleapis.com/css?family=Lato:400,700&display=swap' rel='stylesheet' type='text/css'><link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap' rel='stylesheet' type='text/css'><!--<![endif]-->
            
            </head>
            
            <body class='clean-body u_body' style='margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #c2e0f4;color: #000000'>
              <!--[if IE]><div class='ie-container'><![endif]-->
              <!--[if mso]><div class='mso-container'><![endif]-->
              <table id='u_body' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #c2e0f4;width:100%' cellpadding='0' cellspacing='0'>
              <tbody>
              <tr style='vertical-align: top'>
                <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top'>
                <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td align='center' style='background-color: #c2e0f4;'><![endif]-->
                
            
            <div class='u-row-container' style='padding: 0px;background-color: transparent'>
              <div class='u-row' style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;'>
                <div style='border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;'>
                  <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding: 0px;background-color: transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:600px;'><tr style='background-color: #ffffff;'><![endif]-->
                  
            <!--[if (mso)|(IE)]><td align='center' width='600' style='width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;' valign='top'><![endif]-->
            <div class='u-col u-col-100' style='max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;'>
              <div style='height: 100%;width: 100% !important;'>
              <!--[if (!mso)&(!IE)]><!--><div style='height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;'><!--<![endif]-->
              
            <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
              <tbody>
                <tr>
                  <td class='v-container-padding-padding' style='overflow-wrap:break-word;word-break:break-word;padding:0px 0px 10px;font-family:arial,helvetica,sans-serif;' align='left'>
                    
              <table height='0px' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 6px solid #6f9de1;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
                <tbody>
                  <tr style='vertical-align: top'>
                    <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
                      <span>&#160;</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            
                  </td>
                </tr>
              </tbody>
            </table>
            
            <table id='u_content_image_4' style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
              <tbody>
                <tr>
                  <td class='v-container-padding-padding' style='overflow-wrap:break-word;word-break:break-word;padding:20px 10px;font-family:arial,helvetica,sans-serif;' align='left'>
                    
            <table width='100%' cellpadding='0' cellspacing='0' border='0'>
              <tr>
                <td class='v-text-align' style='padding-right: 0px;padding-left: 0px;' align='center'>
                  
                  <img align='center' border='0' src='https://ucc928bd5c9480f19886788bff05.previews.dropboxusercontent.com/p/thumb/ABrijnW_0qe11a-uYbG1Sx9Dep-R3ye16RoL9mggyh7KZFkdRq1NZJXL9Ka7ucI3Yb68iLFC6eJcabFJGk3JEvfpJ1SVMLCLO6Bj1QT-iLvPFW2biROxgFzFBAUIRPwTinN8i0uPvb_aThYgNYvehiXMlRxkrsZwAO4_MCIdvch1uuViou9QODgayubU2XBOkMWN8In75NZk3PGYBHfORThr2LgAVFqOjJsoBliGEZcQ0X5NpKfWRdfd16qc3QCsluCdN5b4QueETE0EB3fruN0TZWK1inwBSu0dXmKJOWFYs5GzwjENyRhTtuYqO-0LNh1gkkxugtVrQJa03O_II6ETx--s6_PBWKnoA_NG8k-kJg1Bcp7Ws_Zd90yVdpfKd38bC5WoZbJ5J3sKLcb1kDKMn1DIYKnMRiDqNoykDngLtA/p.png' alt='Logo' title='Logo' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 30%;max-width: 174px;' width='174' class='v-src-width v-src-max-width'/>
                  
                </td>
              </tr>
            </table>
            
                  </td>
                </tr>
              </tbody>
            </table>
            
              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
            <!--[if (mso)|(IE)]></td><![endif]-->
                  <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                </div>
              </div>
            </div>
            
            
            
            <div class='u-row-container' style='padding: 0px;background-color: transparent'>
              <div class='u-row' style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;'>
                <div style='border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;'>
                  <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding: 0px;background-color: transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:600px;'><tr style='background-color: #ffffff;'><![endif]-->
                  
            <!--[if (mso)|(IE)]><td align='center' width='600' style='width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;' valign='top'><![endif]-->
            <div class='u-col u-col-100' style='max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;'>
              <div style='height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'>
              <!--[if (!mso)&(!IE)]><!--><div style='height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'><!--<![endif]-->
              
            <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
              <tbody>
                <tr>
                  <td class='v-container-padding-padding' style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;' align='left'>
                    
            <table width='100%' cellpadding='0' cellspacing='0' border='0'>
              <tr>
                <td class='v-text-align' style='padding-right: 0px;padding-left: 0px;' align='center'>
                  
                  <img align='center' border='0' src='https://uc55f6cf68639b16d7dc9904793d.previews.dropboxusercontent.com/p/thumb/ABpeYAeGI3JUoyUVngSO94E3FHdzoz1T6RVtFV6_mDcGiX-UqGpXeS9WhcY0xahHEzWpA44phKU-bUBSfWUC81OlhLwoYe5E_uze_5iRltU8xk5sg_kVaEKuC815OiwS-QHvjrp1dSxhfJKf3-7usanielq0Fh7d8YiXXw1bQazF6cyWaQDJfODDTN-WAi7moD64VOqPkI65e7FJM-g2m7vbfyWzdlL5rt0GPfnoyf2BaK3CGkrt1FAbp2BM2RHznK-ufdMJsX7_y0wjEsvS7Ps_Y6uqq3RahRYWte3sBtLJ6-4AH5InwKGIeHKfXjbsRk94nXtSTh1gDCKbJazOL3Z1gT_FNphNsTxNUFeqz4KDZkLpexnxozUC4_OoVNHzANnxnPBaqaFKB8tfxeVhzMmcuIvJLh8PNmIBaYXwvmtzmA/p.jpeg' alt='Banner' title='Banner' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 94%;max-width: 545.2px;' width='545.2' class='v-src-width v-src-max-width'/>
                  
                </td>
              </tr>
            </table>
            
                  </td>
                </tr>
              </tbody>
            </table>
            
            <table id='u_content_heading_1' style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
              <tbody>
                <tr>
                  <td class='v-container-padding-padding' style='overflow-wrap:break-word;word-break:break-word;padding:9px 30px 40px 31px;font-family:arial,helvetica,sans-serif;' align='left'>
                    
              <h1 class='v-text-align v-font-size' style='margin: 0px; color: #023047; line-height: 170%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: 'Open Sans',sans-serif; font-size: 26px;'>
                <strong>Email Verification of Seller</strong>
              </h1>
            
                  </td>
                </tr>
              </tbody>
            </table>
            
              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
            <!--[if (mso)|(IE)]></td><![endif]-->
                  <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                </div>
              </div>
            </div>
            
            
            
            <div class='u-row-container' style='padding: 0px;background-color: transparent'>
              <div class='u-row' style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;'>
                <div style='border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;'>
                  <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding: 0px;background-color: transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:600px;'><tr style='background-color: #ffffff;'><![endif]-->
                  
            <!--[if (mso)|(IE)]><td align='center' width='600' style='width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;' valign='top'><![endif]-->
            <div class='u-col u-col-100' style='max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;'>
              <div style='height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'>
              <!--[if (!mso)&(!IE)]><!--><div style='height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'><!--<![endif]-->
              
            <table id='u_content_text_2' style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
              <tbody>
                <tr>
                  <td class='v-container-padding-padding' style='overflow-wrap:break-word;word-break:break-word;padding:35px 55px 10px;font-family:arial,helvetica,sans-serif;' align='left'>
                    
              <div class='v-text-align' style='color: #333333; line-height: 180%; text-align: left; word-wrap: break-word;'>
                <p style='font-size: 14px; line-height: 180%;'><span style='font-size: 18px; line-height: 32.4px; font-family: Lato, sans-serif;'><strong><span style='line-height: 32.4px; font-size: 18px;'>Hi $name</span></strong></span></p>
            <p style='font-size: 14px; line-height: 180%;'>&nbsp;</p>
            <p style='font-size: 14px; line-height: 180%;'><span style='font-family: Lato, sans-serif; font-size: 16px; line-height: 28.8px;'>Received your Request Upon Email verification of plans property for the seller Account Enter this 4 digit code in your site for verification.&nbsp;</span></p>
            <p style='font-size: 14px; line-height: 180%;'>&nbsp;</p>
            <p style='font-size: 14px; line-height: 180%;'><span style='font-size: 16px; line-height: 28.8px; font-family: Lato, sans-serif;'><strong><span style='line-height: 28.8px; font-size: 16px;'>To go ahead with your data verification, we would require these information from you:</span></strong></span></p>
              </div>
            
                  </td>
                </tr>
              </tbody>
            </table>
            
            <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
              <tbody>
                <tr>
                  <td class='v-container-padding-padding' style='overflow-wrap:break-word;word-break:break-word;padding:20px 10px 30px;font-family:arial,helvetica,sans-serif;' align='left'>
                    
              <!--[if mso]><style>.v-button {background: transparent !important;}</style><![endif]-->
            <div class='v-text-align' align='center'>
              <!--[if mso]><v:roundrect xmlns:v='urn:schemas-microsoft-com:vml' xmlns:w='urn:schemas-microsoft-com:office:word' href='#' style='height:57px; v-text-anchor:middle; width:260px;' arcsize='77%'  stroke='f' fillcolor='#33428d'><w:anchorlock/><center style='color:#FFFFFF;font-family:arial,helvetica,sans-serif;'><![endif]-->  
                <a  target='_blank' class='v-button' style='box-sizing: border-box;display: inline-block;font-family:arial,helvetica,sans-serif;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #FFFFFF; background-color: #33428d; border-radius: 44px;-webkit-border-radius: 44px; -moz-border-radius: 44px; width:auto; max-width:100%; overflow-wrap: break-word; word-break: break-word; word-wrap:break-word; mso-border-alt: none;'>
                  <span style='display:block;padding:20px 70px;line-height:120%;'><strong><span style='font-family: 'Open Sans', sans-serif; font-size: 14px; line-height: 16.8px;'>$otp</span></strong></span>
                </a>
                
              <!--[if mso]></center></v:roundrect><![endif]-->
            </div>
            
                  </td>
                </tr>
              </tbody>
            </table>
            
            <table id='u_content_text_3' style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
              <tbody>
                <tr>
                  <td class='v-container-padding-padding' style='overflow-wrap:break-word;word-break:break-word;padding:10px 55px 40px;font-family:arial,helvetica,sans-serif;' align='left'>
                    
              <div class='v-text-align' style='line-height: 170%; text-align: left; word-wrap: break-word;'>
                <p style='font-size: 14px; line-height: 170%;'><span style='font-family: Lato, sans-serif; font-size: 16px; line-height: 27.2px;'>You want to add these information following on the above on plans property site</span></p>
            <p style='font-size: 14px; line-height: 170%;'>&nbsp;</p>
            <p style='font-size: 14px; line-height: 170%;'><span style='font-family: Lato, sans-serif; font-size: 16px; line-height: 27.2px;'>If you have any questions/issues regarding the process, feel free to contact us.&nbsp;</span></p>
            <p style='font-size: 14px; line-height: 170%;'>&nbsp;</p>
            <p style='font-size: 14px; line-height: 170%;'><span style='font-family: Lato, sans-serif; font-size: 16px; line-height: 27.2px;'>With Regards,</span></p>
            <p style='font-size: 14px; line-height: 170%;'><span style='font-family: Lato, sans-serif; font-size: 14px; line-height: 23.8px;'><strong><span style='font-size: 16px; line-height: 27.2px;'>Plans Property</span></strong></span></p>
              </div>
            
                  </td>
                </tr>
              </tbody>
            </table>
            
              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
            <!--[if (mso)|(IE)]></td><![endif]-->
                  <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                </div>
              </div>
            </div>
            
            
            
            <div class='u-row-container' style='padding: 0px;background-color: transparent'>
              <div class='u-row' style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;'>
                <div style='border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;'>
                  <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding: 0px;background-color: transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:600px;'><tr style='background-color: #ffffff;'><![endif]-->
                  
            <!--[if (mso)|(IE)]><td align='center' width='600' style='width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;' valign='top'><![endif]-->
            <div class='u-col u-col-100' style='max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;'>
              <div style='height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'>
              <!--[if (!mso)&(!IE)]><!--><div style='height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'><!--<![endif]-->
              
            <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
              <tbody>
                <tr>
                  <td class='v-container-padding-padding' style='overflow-wrap:break-word;word-break:break-word;padding:5px 10px 40px;font-family:arial,helvetica,sans-serif;' align='left'>
                    
              <h1 class='v-text-align v-font-size' style='margin: 0px; color: #000000; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: 'Lato',sans-serif; font-size: 26px;'>
                Call: <strong>0317-0802260</strong>
              </h1>
            
                  </td>
                </tr>
              </tbody>
            </table>
            
              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
            <!--[if (mso)|(IE)]></td><![endif]-->
                  <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                </div>
              </div>
            </div>
            
            
            
            <div class='u-row-container' style='padding: 0px;background-color: transparent'>
              <div class='u-row' style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #080f30;'>
                <div style='border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;'>
                  <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding: 0px;background-color: transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:600px;'><tr style='background-color: #080f30;'><![endif]-->
                  
            <!--[if (mso)|(IE)]><td align='center' width='600' style='width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;' valign='top'><![endif]-->
            <div class='u-col u-col-100' style='max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;'>
              <div style='height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'>
              <!--[if (!mso)&(!IE)]><!--><div style='height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'><!--<![endif]-->
              
            <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
              <tbody>
                <tr>
                  <td class='v-container-padding-padding' style='overflow-wrap:break-word;word-break:break-word;padding:42px 10px 15px;font-family:arial,helvetica,sans-serif;' align='left'>
                    
            <div align='center'>
              <div style='display: table; max-width:179px;'>
              <!--[if (mso)|(IE)]><table width='179' cellpadding='0' cellspacing='0' border='0'><tr><td style='border-collapse:collapse;' align='center'><table width='100%' cellpadding='0' cellspacing='0' border='0' style='border-collapse:collapse; mso-table-lspace: 0pt;mso-table-rspace: 0pt; width:179px;'><tr><![endif]-->
              
                
                <!--[if (mso)|(IE)]><td width='32' style='width:32px; padding-right: 13px;' valign='top'><![endif]-->
               
                <!--[if (mso)|(IE)]></td><![endif]-->
                
                
                <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
              </div>
            </div>
            
                  </td>
                </tr>
              </tbody>
            </table>
            
            <table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
              <tbody>
                <tr>
                  <td class='v-container-padding-padding' style='overflow-wrap:break-word;word-break:break-word;padding:10px 10px 35px;font-family:arial,helvetica,sans-serif;' align='left'>
                    
              <div class='v-text-align' style='color: #ffffff; line-height: 210%; text-align: center; word-wrap: break-word;'>
                <p style='font-size: 14px; line-height: 210%;'><span style='font-family: Lato, sans-serif; font-size: 14px; line-height: 29.4px;'>You're receiving this email because you request us about Email Verification.</span></p>
            <p style='font-size: 14px; line-height: 210%;'><span style='font-family: Lato, sans-serif; font-size: 14px; line-height: 29.4px;'>&copy;2022 palns Property | Block A North Nazimabad, Karachi. Pakistan</span></p>
              </div>
            
                  </td>
                </tr>
              </tbody>
            </table>
            
              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
            <!--[if (mso)|(IE)]></td><![endif]-->
                  <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                </div>
              </div>
            </div>
            
            
                <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                </td>
              </tr>
              </tbody>
              </table>
              <!--[if mso]></div><![endif]-->
              <!--[if IE]></div><![endif]-->
            </body>
            
            </html>";
              //  $mail -> send();
               if($mail -> send()){
                header("Location: auth.php?verify=0");

               }
          
        }
        catch(Exception $e)
        {
           
           echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }



}

?>