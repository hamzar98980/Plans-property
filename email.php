<?php
@include("dbconfig.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor_2\autoload.php';

    $mailing = $_POST['email'];
      
   
    $sql = "SELECT * from subscriber where s_email = '$mailing'";

    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) === 1) {

        header("Location: index.php?success=Already Subscribed Our Newsletter");;


    }
    else
    {
        $sql_insert = "INSERT INTO `subscriber` (`s_email`) VALUES ('$mailing')";
        if($con->query($sql_insert)){

 
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
        
            $mail -> setFrom('sampleid.201@gmail.com', 'Tollins');
            $mail -> addAddress($mailing, 'Mohsin');
            $mail -> isHTML(true);
            $mail -> Subject = 'Thanks For Subscribing Us - Tollins';
            $mail -> Body = "<!DOCTYPE html>

            <html lang='en' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:v='urn:schemas-microsoft-com:vml'>
            <head>
            <title></title>
            <meta content='text/html; charset=utf-8' http-equiv='Content-Type'/>
            <meta content='width=device-width, initial-scale=1.0' name='viewport'/>
            <!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
            <style>
                    * {
                        box-sizing: border-box;
                    }
            
                    body {
                        margin: 0;
                        padding: 0;
                    }
            
                    a[x-apple-data-detectors] {
                        color: inherit !important;
                        text-decoration: inherit !important;
                    }
            
                    #MessageViewBody a {
                        color: inherit;
                        text-decoration: none;
                    }
            
                    p {
                        line-height: inherit
                    }
            
                    .desktop_hide,
                    .desktop_hide table {
                        mso-hide: all;
                        display: none;
                        max-height: 0px;
                        overflow: hidden;
                    }
            
                    @media (max-width:720px) {
            
                        .desktop_hide table.icons-inner,
                        .social_block.desktop_hide .social-table {
                            display: inline-block !important;
                        }
            
                        .icons-inner {
                            text-align: center;
                        }
            
                        .icons-inner td {
                            margin: 0 auto;
                        }
            
                        .image_block img.big,
                        .row-content {
                            width: 100% !important;
                        }
            
                        .mobile_hide {
                            display: none;
                        }
            
                        .stack .column {
                            width: 100%;
                            display: block;
                        }
            
                        .mobile_hide {
                            min-height: 0;
                            max-height: 0;
                            max-width: 0;
                            overflow: hidden;
                            font-size: 0px;
                        }
            
                        .desktop_hide,
                        .desktop_hide table {
                            display: table !important;
                            max-height: none !important;
                        }
                    }
                </style>
            </head>
            <body style='background-color: #f9f9f9; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;'>
            <table border='0' cellpadding='0' cellspacing='0' class='nl-container' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f9f9f9;' width='100%'>
            <tbody>
            <tr>
            <td>
            <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-1' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
            <tbody>
            <tr>
            <td>
            <table align='center' border='0' cellpadding='0' cellspacing='0' class='row-content stack' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 700px;' width='700'>
            <tbody>
            <tr>
            <td class='column column-1' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;' width='100%'>
            <div class='spacer_block' style='height:10px;line-height:10px;font-size:1px;'> </div>
            </td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-2' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
            <tbody>
            <tr>
            <td>
            <table align='center' border='0' cellpadding='0' cellspacing='0' class='row-content stack' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 700px;' width='700'>
            <tbody>
            <tr>
            <td class='column column-1' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;' width='100%'>
            <table border='0' cellpadding='0' cellspacing='0' class='image_block block-1' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
            <tr>
            <td class='pad' style='width:100%;padding-right:0px;padding-left:0px;'>
            <div align='center' class='alignment' style='line-height:10px'><img alt='Alternate text' src='assets/images/resources/logo.png' style='display: block; height: auto; border: 0; width: 154px; max-width: 100%;' title='Alternate text' width='154'/></div>
            </td>
            </tr>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-3' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
            <tbody>
            <tr>
            <td>
            <table align='center' border='0' cellpadding='0' cellspacing='0' class='row-content stack' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 700px;' width='700'>
            <tbody>
            <tr>
            <td class='column column-1' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;' width='100%'>
            <div class='spacer_block' style='height:15px;line-height:15px;font-size:1px;'> </div>
            </td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            
            </td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-5' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
            <tbody>
            <tr>
            <td>
            <table align='center' border='0' cellpadding='0' cellspacing='0' class='row-content stack' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #d3e8ff; color: #000000; width: 700px;' width='700'>
            <tbody>
            <tr>
            <td class='column column-1' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;' width='100%'>
            <table border='0' cellpadding='0' cellspacing='0' class='image_block block-2' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
            <tr>
            <td class='pad' style='width:100%;padding-right:0px;padding-left:0px;padding-top:30px;'>
            <div align='center' class='alignment' style='line-height:10px'><img alt='Im an image' class='big' src='https://previews.dropbox.com/p/thumb/ABpcCo50aiR1dp0oSS4KTl6z2v6W6xQ2jn4_kqaKRc-ygbsxAE_aFvaSDorM-1VUuGHhQsEehVqKqcBGWL5_kmD5vBwmPW21-wGGDxBgudT97q0mgMjcNYMpjOGpu2TJITsHZ3E6x3A1RUuvU4XfcCP-O5g41O_WBrQM45Z4rCg16aRdFD6KfpPFDW10oSc7RIfzjjeBBvWVn44lpXfdPgY_nbOd5THGhKEfqqDJ2jwlQCGYDXo9X9j-NWTeYXpy6tG5ac4GepxscD6MtxEWKeh-E2u2ARyqzYYBt-ap6qLgdIoVia2nVF5hb-5Jc84TT7XsM2kuEZNzCXmbJ5eic-2FCCMfbVpujgpgpmvhIPOPo3W8SSFVvSuno-bfReadtGU/p.png' style='display: block; height: auto; border: 0; width: 420px; max-width: 100%;' title='I'm an image' width='420'/></div>
            </td>
            </tr>
            </table>
            <table border='0' cellpadding='0' cellspacing='0' class='text_block block-3' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;' width='100%'>
            <tr>
            <td class='pad' style='padding-bottom:10px;padding-left:40px;padding-right:40px;padding-top:10px;'>
            <div style='font-family: sans-serif'>
            <div class='' style='font-size: 12px; mso-line-height-alt: 18px; color: #191919; line-height: 1.5; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;'>
            <p style='margin: 0; font-size: 16px; text-align: center; mso-line-height-alt: 24px;'><strong><span style='font-size:38px;'>Hi, </span></strong></p>
            <p style='margin: 0; font-size: 16px; text-align: center; mso-line-height-alt: 24px;'><strong><span style='font-size:38px;'>welcome to Plans Property!</span></strong></p>
            </div>
            </div>
            </td>
            </tr>
            </table>
            <table border='0' cellpadding='0' cellspacing='0' class='text_block block-4' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;' width='100%'>
            <tr>
            <td class='pad' style='padding-bottom:65px;padding-left:10px;padding-right:10px;padding-top:10px;'>
            <div style='font-family: sans-serif'>
            <div class='' style='font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #191919; line-height: 1.2; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;'>
            <p style='margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 16.8px;'><span style='font-size:22px;'>Thanks for subscribing Us!</span></p>
            </div>
            </div>
            </td>
            </tr>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            
            <
            <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-17' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
            <tbody>
            <tr>
            <td>
            <table align='center' border='0' cellpadding='0' cellspacing='0' class='row-content stack' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 700px;' width='700'>
            <tbody>
            <tr>
            <td class='column column-1' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;' width='100%'>
            <table border='0' cellpadding='0' cellspacing='0' class='social_block block-2' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
            <tr>
            <td class='pad' style='padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:50px;text-align:center;'>
            <div class='alignment' style='text-align:center;'>
            <table border='0' cellpadding='0' cellspacing='0' class='social-table' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block;' width='230px'>
            <tr>
            <td style='padding:0 7px 0 7px;'><a href='https://www.facebook.com/' target='_blank'><img alt='Facebook' height='32' src='images/facebook2x.png' style='display: block; height: auto; border: 0;' title='Facebook' width='32'/></a></td>
            <td style='padding:0 7px 0 7px;'><a href='https://twitter.com/' target='_blank'><img alt='Twitter' height='32' src='images/twitter2x.png' style='display: block; height: auto; border: 0;' title='Twitter' width='32'/></a></td>
            <td style='padding:0 7px 0 7px;'><a href='https://instagram.com/' target='_blank'><img alt='Instagram' height='32' src='images/instagram2x.png' style='display: block; height: auto; border: 0;' title='Instagram' width='32'/></a></td>
            <td style='padding:0 7px 0 7px;'><a href='https://www.linkedin.com/' target='_blank'><img alt='LinkedIn' height='32' src='images/linkedin2x.png' style='display: block; height: auto; border: 0;' title='LinkedIn' width='32'/></a></td>
            <td style='padding:0 7px 0 7px;'><a href='' target='_blank'><img alt='YouTube' height='32' src='images/youtube2x.png' style='display: block; height: auto; border: 0;' title='YouTube' width='32'/></a></td>
            </tr>
            </table>
            </div>
            </td>
            </tr>
            </table>
            <table border='0' cellpadding='0' cellspacing='0' class='text_block block-4' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;' width='100%'>
            <tr>
            <td class='pad' style='padding-bottom:10px;padding-left:40px;padding-right:40px;padding-top:25px;'>
            <div style='font-family: sans-serif'>
            <div class='' style='font-size: 12px; mso-line-height-alt: 24px; color: #555555; line-height: 2; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;'>
            <p style='margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 28px;'>If you have any questions, feel free message us at support@plans.com. All right reserved. Update.</p>
            </div>
            </div>
            </td>
            </tr>
            </table>
            <table border='0' cellpadding='0' cellspacing='0' class='text_block block-5' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;' width='100%'>
            <tr>
            <td class='pad' style='padding-bottom:10px;padding-left:40px;padding-right:40px;'>
            <div style='font-family: sans-serif'>
            <div class='' style='font-size: 12px; mso-line-height-alt: 24px; color: #555555; line-height: 2; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;'>
            <p style='margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 28px;'>5781 Spring St Salinas, Idaho 88606 United States</p>
            </div>
            </div>
            </td>
            </tr>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-18' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
            <tbody>
            <tr>
            <td>
            <table align='center' border='0' cellpadding='0' cellspacing='0' class='row-content stack' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 700px;' width='700'>
            <tbody>
            <tr>
            <td class='column column-1' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;' width='100%'>
            <table border='0' cellpadding='10' cellspacing='0' class='text_block block-1' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;' width='100%'>
            <tr>
            <td class='pad'>
            <div style='font-family: sans-serif'>
            <div class='' style='font-size: 12px; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 14.399999999999999px; color: #ffffff; line-height: 1.2;'>
            <p style='margin: 0; font-size: 12px; text-align: center; mso-line-height-alt: 14.399999999999999px;'><span style='color:#555555;'>Terms of use <strong>|</strong> Privacy Policy</span></p>
            </div>
            </div>
            </td>
            </tr>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-19' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
            <tbody>
            <tr>
            <td>
            <table align='center' border='0' cellpadding='0' cellspacing='0' class='row-content stack' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 700px;' width='700'>
            <tbody>
            <tr>
            <td class='column column-1' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;' width='100%'>
            <table border='0' cellpadding='0' cellspacing='0' class='image_block block-1' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
            <tr>
            <td class='pad' style='width:100%;padding-right:0px;padding-left:0px;'>
            <div align='center' class='alignment' style='line-height:10px'><img alt='Alternate text' class='big' src='images/white_down.png' style='display: block; height: auto; border: 0; width: 700px; max-width: 100%;' title='Alternate text' width='700'/></div>
            </td>
            </tr>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-20' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
            <tbody>
            <tr>
            <td>
            <table align='center' border='0' cellpadding='0' cellspacing='0' class='row-content stack' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 700px;' width='700'>
            <tbody>
            <tr>
            <td class='column column-1' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;' width='100%'>
            <div class='spacer_block' style='height:25px;line-height:25px;font-size:1px;'> </div>
            </td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-21' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
            <tbody>
            <tr>
            <td>
            <table align='center' border='0' cellpadding='0' cellspacing='0' class='row-content stack' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 700px;' width='700'>
            <tbody>
            <tr>
            <td class='column column-1' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;' width='100%'>
            <table border='0' cellpadding='0' cellspacing='0' class='icons_block block-1' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
            <tr>
            <td class='pad' style='vertical-align: middle; color: #9d9d9d; font-family: inherit; font-size: 15px; padding-bottom: 5px; padding-top: 5px; text-align: center;'>
            <table cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
            <tr>
            <td class='alignment' style='vertical-align: middle; text-align: center;'>
            <!--[if vml]><table align='left' cellpadding='0' cellspacing='0' role='presentation' style='display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;'><![endif]-->
            <!--[if !vml]><!-->
            <table cellpadding='0' cellspacing='0' class='icons-inner' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block; margin-right: -4px; padding-left: 0px; padding-right: 0px;'>
            <!--<![endif]-->
            </table>
            </td>
            </tr>
            </table>
            </td>
            </tr>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table><!-- End -->
            </body>
            </html>";
               $mail -> send();
            echo "Mail has been sent successfully!";
            header("Location: index.php?success=Thanks For Subscribing Us - Tollins&subscribe=1");;
        }
        catch(Exception $e)
        {
           
           echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
     }
    }





?>