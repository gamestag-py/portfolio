<?php
include 'email.php';
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if($name == "" && $email == "" && $message == ""){
    header('Location:index.php');
}else{
    $subject = "New Message From Someone!";
    $content = '<style type="text/css">
    @media only screen and (min-width: 520px) {
    .u-row {
    width: 500px !important;
    }
    .u-row .u-col {
    vertical-align: top;
    }

    .u-row .u-col-100 {
    width: 500px !important;
    }

    }

    @media (max-width: 520px) {
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
    width: 100% !important;
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

    a[x-apple-data-detectors="true"] {
    color: inherit !important;
    text-decoration: none !important;
    }

    table, td { color: #ffffff; } #u_body a { color: #0000ee; text-decoration: underline; } @media (max-width: 480px) { #u_content_heading_1 .v-font-size { font-size: 26px !important; } #u_content_heading_1 .v-text-align { text-align: center !important; } #u_content_text_1 .v-font-size { font-size: 11px !important; } #u_content_text_1 .v-text-align { text-align: center !important; } #u_content_heading_2 .v-font-size { font-size: 16px !important; } #u_content_heading_2 .v-text-align { text-align: left !important; } #u_content_text_2 .v-font-size { font-size: 12px !important; } #u_content_text_3 .v-font-size { font-size: 12px !important; } }
    </style>



    </head>

    <body class="clean-body u_body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #161616;color: #ffffff">
    <!--[if IE]><div class="ie-container"><![endif]-->
    <!--[if mso]><div class="mso-container"><![endif]-->
    <table id="u_body" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #161616;width:100%" cellpadding="0" cellspacing="0">
    <tbody>
    <tr style="vertical-align: top">
    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #161616;"><![endif]-->



    <div class="u-row-container" style="padding: 0px;background-color: transparent">
    <div class="u-row" style="margin: 0 auto;min-width: 320px;max-width: 500px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
    <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:500px;"><tr style="background-color: transparent;"><![endif]-->
    
    <!--[if (mso)|(IE)]><td align="center" width="500" style="width: 500px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
    <div class="u-col u-col-100" style="max-width: 320px;min-width: 500px;display: table-cell;vertical-align: top;">
    <div style="height: 100%;width: 100% !important;">
    <!--[if (!mso)&(!IE)]><!--><div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;"><!--<![endif]-->

    <table style="font-family:arial black,AvenirNext-Heavy,avant garde,arial;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:23px;font-family:arial black,AvenirNext-Heavy,avant garde,arial;" align="left">
        
    <table width="100%" cellpadding="0" cellspacing="0" border="0">
    <tr>
    <td class="v-text-align" style="padding-right: 0px;padding-left: 0px;" align="center">
    
    <img align="center" border="0" src="https://i.postimg.cc/9DL0Td0T/image-6.png" alt="" title="" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 454px;" width="454"/>
    
    </td>
    </tr>
    </table>

    </td>
    </tr>
    </tbody>
    </table>

    <table style="font-family:arial black,AvenirNext-Heavy,avant garde,arial;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial black,AvenirNext-Heavy,avant garde,arial;" align="left">
        
    <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
    <tbody>
    <tr style="vertical-align: top">
        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
        <span>&#160;</span>
        </td>
    </tr>
    </tbody>
    </table>

    </td>
    </tr>
    </tbody>
    </table>

    <table id="u_content_heading_1" style="font-family:arial black,AvenirNext-Heavy,avant garde,arial;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial black,AvenirNext-Heavy,avant garde,arial;" align="left">
        
    <h1 class="v-text-align v-font-size" style="margin: 0px; line-height: 140%; text-align: left; word-wrap: break-word; font-size: 22px; font-weight: 400;">Hello! Shivansh</h1>

    </td>
    </tr>
    </tbody>
    </table>

    <table style="font-family:arial black,AvenirNext-Heavy,avant garde,arial;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial black,AvenirNext-Heavy,avant garde,arial;" align="left">
        
    <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
    <tbody>
    <tr style="vertical-align: top">
        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
        <span>&#160;</span>
        </td>
    </tr>
    </tbody>
    </table>

    </td>
    </tr>
    </tbody>
    </table>

    <table id="u_content_text_1" style="font-family:arial black,AvenirNext-Heavy,avant garde,arial;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial black,AvenirNext-Heavy,avant garde,arial;" align="left">
        
    <div class="v-text-align v-font-size" style="font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">
    <p style="line-height: 140%;">You Got an Email From Your Portfolio</p>
    </div>

    </td>
    </tr>
    </tbody>
    </table>

    <table style="font-family:arial black,AvenirNext-Heavy,avant garde,arial;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial black,AvenirNext-Heavy,avant garde,arial;" align="left">
        
    <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
    <tbody>
    <tr style="vertical-align: top">
        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
        <span>&#160;</span>
        </td>
    </tr>
    </tbody>
    </table>

    </td>
    </tr>
    </tbody>
    </table>

    <table id="u_content_heading_2" style="font-family:arial black,AvenirNext-Heavy,avant garde,arial;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial black,AvenirNext-Heavy,avant garde,arial;" align="left">
        
    <h1 class="v-text-align v-font-size" style="margin: 0px; line-height: 140%; text-align: left; word-wrap: break-word; font-size: 22px; font-weight: 400;">Contact Info.</h1>

    </td>
    </tr>
    </tbody>
    </table>

    <table id="u_content_text_2" style="font-family:arial black,AvenirNext-Heavy,avant garde,arial;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial black,AvenirNext-Heavy,avant garde,arial;" align="left">
        
    <div class="v-text-align v-font-size" style="font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">
    <p style="line-height: 140%;">Name : '.$name.'</p>
    </div>

    </td>
    </tr>
    </tbody>
    </table>

    <table id="u_content_text_3" style="font-family:arial black,AvenirNext-Heavy,avant garde,arial;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial black,AvenirNext-Heavy,avant garde,arial;" align="left">
        
    <div class="v-text-align v-font-size" style="font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">
    <p style="line-height: 140%;">Email : '.$email.'</p>
    </div>

    </td>
    </tr>
    </tbody>
    </table>

    <table style="font-family:arial black,AvenirNext-Heavy,avant garde,arial;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial black,AvenirNext-Heavy,avant garde,arial;" align="left">
        
    <div class="v-text-align v-font-size" style="font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">
    <p style="line-height: 140%;">Message : '.$message.'</p>
    </div>

    </td>
    </tr>
    </tbody>
    </table>

    <table style="font-family:arial black,AvenirNext-Heavy,avant garde,arial;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial black,AvenirNext-Heavy,avant garde,arial;" align="left">
        
    <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
    <tbody>
    <tr style="vertical-align: top">
        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
        <span>&#160;</span>
        </td>
    </tr>
    </tbody>
    </table>

    </td>
    </tr>
    </tbody>
    </table>

    <table style="font-family:arial black,AvenirNext-Heavy,avant garde,arial;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial black,AvenirNext-Heavy,avant garde,arial;" align="left">
        
    <div class="v-text-align" align="center">
    <!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://shivanshagarwal.in" style="height:37px; v-text-anchor:middle; width:101px;" arcsize="11%"  stroke="f" fillcolor="#3AAEE0"><w:anchorlock/><center style="color:#FFFFFF;"><![endif]-->
    <a href="https://shivanshagarwal.in" target="_blank" class="v-button v-font-size" style="box-sizing: border-box;display: inline-block;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #FFFFFF; background-color: #3AAEE0; border-radius: 4px;-webkit-border-radius: 4px; -moz-border-radius: 4px; width:auto; max-width:100%; overflow-wrap: break-word; word-break: break-word; word-wrap:break-word; mso-border-alt: none;font-size: 14px;">
    <span style="display:block;padding:10px 20px;line-height:120%;"><span style="line-height: 16.8px;">Website</span></span>
    </a></div>

    </td>
    </tr>
    </tbody>
    </table>

    <table style="font-family:arial black,AvenirNext-Heavy,avant garde,arial;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
    <tbody>
    <tr>
    <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial black,AvenirNext-Heavy,avant garde,arial;" align="left">
        
    <div align="center">
    <div style="display: table; max-width:184px;">
    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 5px">
    <tbody><tr style="vertical-align: top"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
        <a href="https://instagram.com/shivansh._17" title="Instagram" target="_blank">
        <img src="https://i.postimg.cc/WqdCWPwT/image-3.png" alt="Instagram" title="Instagram" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
        </a>
    </td></tr>
    </tbody></table>
    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 5px">
    <tbody><tr style="vertical-align: top"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
        <a href="https://www.linkedin.com/in/shivansh-agarwal-217137280/" title="LinkedIn" target="_blank">
        <img src="https://i.postimg.cc/p9P7NjJ0/image-1.png" alt="LinkedIn" title="LinkedIn" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
        </a>
    </td></tr>
    </tbody></table>    
    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 5px">
    <tbody><tr style="vertical-align: top"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
        <a href="https://github.com/gamestag-py" title="GitHub" target="_blank">
        <img src="https://i.postimg.cc/62WNhSPp/image-5.png" alt="GitHub" title="GitHub" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
        </a>
    </td></tr>
    </tbody></table>
    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 5px">
    <tbody><tr style="vertical-align: top"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
        <a href="https://telegram.me/G4xWizarD_official" title="Telegram" target="_blank">
        <img src="https://i.postimg.cc/SYjFB9k0/image-4.png" alt="Telegram" title="Telegram" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
        </a>
    </td></tr>
    </tbody></table>
    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 0px">
    <tbody><tr style="vertical-align: top"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
        <a href="mailto://shivanshagarwal1706@gmail.com" title="Email" target="_blank">
        <img src="https://i.postimg.cc/MXLhcvzT/image-2.png" alt="Email" title="Email" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
        </a>
    </td></tr>
    </tbody></table>
    </div>
    </div>
    </td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    </div>
    </td>
    </tr>
    </tbody>
    </table>';

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= ''.$sender.'' . "\r\n";
    $sendMail = mail($recvEmail, $subject, $content, $headers);
    if($sendMail){
        echo "success";
    }
    else{
        echo "failed";
    }
}
