<?php
    // require 'utils/phpmailer/PHPMailerAutoload.php';
    // function sendPrice($emailAddress){
    //     $mail = new PHPMailer;
    //     $mail->isSMTP();

    //     $mail->Host = 'smtp.plodovkaopt.pp.ua';
    //     $mail->SMTPAuth = true;
    //     $mail->Username = 'info@plodovkaopt.pp.ua'; // логин от вашей почты
    //     $mail->Password = 'qwe321qwe'; // пароль от почтового ящика
    //     $mail->SMTPSecure = NULL; 
    //     $mail->Port = '25025';

    //     $mail->CharSet = 'UTF-8';
    //     $mail->From = 'info@plodovkaopt.pp.ua'; // адрес почты, с которой идет отправка
    //     $mail->FromName = 'PlodovkaOpt'; // имя отправителя
    //     $mail->addAddress($emailAddress);
   

    //     $mail->isHTML(true);

    //     $mail->Subject = 'Прайс-лист на плодовые саженцы. Питомник PlodovkaOpt.';
    //     $mail->Body = ' <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html style="width:100%;font-family:arial, \'helvetica neue\', helvetica, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0;"> <head> <meta charset="UTF-8"> <meta content="width=device-width, initial-scale=1" name="viewport"> <meta name="x-apple-disable-message-reformatting"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta content="telephone=no" name="format-detection"> <title>New email</title> <!--[if (mso 16)]><style type="text/css"> a {text-decoration: none;} </style><![endif]--> <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--> <style type="text/css">@media only screen and (max-width:600px) {p, ul li, ol li, a { font-size:16px!important; line-height:150%!important } h1 { font-size:30px!important; text-align:center; line-height:120%!important } h2 { font-size:26px!important; text-align:center;
    //         line-height:120%!important } h3 { font-size:20px!important; text-align:center; line-height:120%!important } h1 a { font-size:30px!important } h2 a { font-size:26px!important } h3 a { font-size:20px!important } .es-menu td a { font-size:16px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:16px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:16px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class="gmail-fix"] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:block!important } a.es-button { font-size:20px!important;
    //         display:block!important; border-width:10px 0px 10px 0px!important } .es-btn-fw { border-width:10px 0px!important; text-align:center!important } .es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0px!important } .es-m-p0r { padding-right:0px!important } .es-m-p0l { padding-left:0px!important } .es-m-p0t { padding-top:0px!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } .es-desk-hidden { display:table-row!important; width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } .es-desk-menu-hidden {
    //         display:table-cell!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } }#outlook a {	padding:0;}.ExternalClass {	width:100%;}.ExternalClass,.ExternalClass p,.ExternalClass span,.ExternalClass font,.ExternalClass td,.ExternalClass div {	line-height:100%;}.es-button {	mso-style-priority:100!important;	text-decoration:none!important;}a[x-apple-data-detectors] {	color:inherit!important;	text-decoration:none!important;	font-size:inherit!important;	font-family:inherit!important;	font-weight:inherit!important;	line-height:inherit!important;}.es-desk-hidden {	display:none;	float:left;	overflow:hidden;	width:0;	max-height:0;	line-height:0;	mso-hide:all;}</style> </head> <body style="width:100%;font-family:arial, \'helvetica neue\', helvetica, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0;"> <div
    //         class="es-wrapper-color" style="background-color:#F6F6F6;"> <!--[if gte mso 9]><v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t"> <v:fill type="tile" color="#f6f6f6"></v:fill> </v:background><![endif]--> <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;"> <tr style="border-collapse:collapse;"> <td valign="top" style="padding:0;Margin:0;"> <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;"> <tr style="border-collapse:collapse;"> <td align="center" style="padding:0;Margin:0;"> <table class="es-content-body"
    //         style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;" width="600" cellspacing="0" cellpadding="0" align="center"> <tr style="border-collapse:collapse;"> <td align="left" style="Margin:0;padding-top:20px;padding-bottom:20px;padding-left:20px;padding-right:20px;"> <!--[if mso]><table width="560" cellpadding="0" cellspacing="0"><tr><td width="356" valign="top"><![endif]--> <table class="es-left" cellspacing="0" cellpadding="0" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left;"> <tr style="border-collapse:collapse;"> <td class="es-m-p0r es-m-p20b" width="356" valign="top" align="center" style="padding:0;Margin:0;"> <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> <tr style="border-collapse:collapse;"> <td class="es-infoblock es-m-txt-c"
    //         align="left" style="padding:0;Margin:0;line-height:14px;font-size:12px;color:#CCCCCC;"> <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:12px;font-family:arial, \'helvetica neue\', helvetica, sans-serif;line-height:14px;color:#CCCCCC;">Прайс лист на плодовые саженцы</p> </td> </tr> </table> </td> </tr> </table> <!--[if mso]></td><td width="20"></td><td width="184" valign="top"><![endif]--> <table cellspacing="0" cellpadding="0" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> <tr style="border-collapse:collapse;"> <td width="184" align="left" style="padding:0;Margin:0;"> <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> <tr style="border-collapse:collapse;"> <td class="es-infoblock es-m-txt-c" align="right"
    //         style="padding:0;Margin:0;line-height:14px;font-size:12px;color:#CCCCCC;"> <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:12px;font-family:arial, \'helvetica neue\', helvetica, sans-serif;line-height:14px;color:#CCCCCC;"><a target="_blank" href="https://plodovkaopt.pp.ua" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, \'helvetica neue\', helvetica, sans-serif;font-size:12px;text-decoration:underline;color:#2CB543;">Перейти на сайт</a></p> </td> </tr> </table> </td> </tr> </table> <!--[if mso]></td></tr></table><![endif]--> </td> </tr> </table> </td> </tr> </table> <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;"> <tr style="border-collapse:collapse;"> <td align="center"
    //         style="padding:0;Margin:0;"> <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;"> <tr style="border-collapse:collapse;"> <td align="left" style="Margin:0;padding-top:20px;padding-bottom:20px;padding-left:20px;padding-right:20px;"> <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> <tr style="border-collapse:collapse;"> <td width="560" valign="top" align="center" style="padding:0;Margin:0;"> <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> <tr style="border-collapse:collapse;"> <td align="center" style="padding:0;Margin:0;padding-bottom:15px;"> <h2
    //         style="Margin:0;line-height:29px;mso-line-height-rule:exactly;font-family:arial, \'helvetica neue\', helvetica, sans-serif;font-size:24px;font-style:normal;font-weight:normal;color:#333333;">Прайс-лист на плодовые саженцы. Питоник плодовых саженцев PlodovkaOpt.</h2> </td> </tr> <tr style="border-collapse:collapse;"> <td align="left" style="padding:0;Margin:0;padding-top:20px;"> <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, \'helvetica neue\', helvetica, sans-serif;line-height:21px;color:#333333;">Добрый день! Вы оставили заявку на нашем сайте https://plodovkaopt.pp.ua&nbsp; для озногомления с прайс листом. Скачайте его из вложений к письму или нажмите на кнопку ниже.</p> </td> </tr> <tr style="border-collapse:collapse;"> <td align="center" style="padding:10px;Margin:0;"> <span class="es-button-border"
    //         style="border-style:solid;border-color:#2CB543;background:#31CB4B;border-width:0px;display:inline-block;border-radius:5px;width:auto;"> <a href="https://plodovkaopt.pp.ua/price.doc" download=""  class="es-button" target="_blank" style="mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, \'helvetica neue\', helvetica, sans-serif;font-size:18px;color:#FFFFFF;border-style:solid;border-color:#31CB4B;border-width:10px 20px 10px 20px;display:inline-block;background:#31CB4B;border-radius:5px;font-weight:normal;font-style:normal;line-height:22px;width:auto;text-align:center;border-left-width:20px;border-right-width:20px;">Скачать Прайс-лист</a> </span> </td> </tr> <tr style="border-collapse:collapse;"> <td align="left" style="padding:0;Margin:0;padding-top:15px;"> <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, \'helvetica
    //         neue\', helvetica, sans-serif;line-height:21px;color:#333333;">Мы наберем вас в ближайшее время чтобы ответить на все ваши вопросы. Если вы хотите связаться с нами быстрее - наберите нас по нномеру +380 50 627 54 03 или +380 50 627 54 03.</p><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, \'helvetica neue\', helvetica, sans-serif;line-height:21px;color:#333333;"><br></p><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, \'helvetica neue\', helvetica, sans-serif;line-height:21px;color:#333333;">С Уважением,</p><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, \'helvetica neue\', helvetica, sans-serif;line-height:21px;color:#333333;">Плодовый питомник Plodovka Opt</p> </td> </tr> <tr style="border-collapse:collapse;"> <td align="left"
    //         style="padding:0;Margin:0;padding-top:20px;"> <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:arial, \'helvetica neue\', helvetica, sans-serif;line-height:21px;color:#333333;"><br></p> </td> </tr> </table> </td> </tr> </table> </td> </tr> </table> </td> </tr> </table> <table class="es-footer" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top;"> <tr style="border-collapse:collapse;"> <td align="center" style="padding:0;Margin:0;"> <table class="es-footer-body" width="600" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;"> <tr style="border-collapse:collapse;"> <td
    //         align="left" style="Margin:0;padding-top:20px;padding-bottom:20px;padding-left:20px;padding-right:20px;"> <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> <tr style="border-collapse:collapse;"> <td width="560" valign="top" align="center" style="padding:0;Margin:0;"> <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> <tr style="border-collapse:collapse;"> <td align="center" style="padding:20px;Margin:0;"> <table width="75%" height="100%" cellspacing="0" cellpadding="0" border="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> <tr style="border-collapse:collapse;"> <td style="padding:0;Margin:0px 0px 0px 0px;border-bottom:1px solid #CCCCCC;background:none;height:1px;width:100%;margin:0px;"> </td> </tr> </table> </td> </tr> <tr
    //         style="border-collapse:collapse;"> <td align="center" style="padding:0;Margin:0;padding-top:10px;padding-bottom:10px;"> <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:11px;font-family:arial, \'helvetica neue\', helvetica, sans-serif;line-height:17px;color:#333333;">Питоиник плодовых саженцев PlodovkaOpt</p> </td> </tr> <tr style="border-collapse:collapse;"> <td align="center" style="padding:0;Margin:0;padding-top:10px;padding-bottom:10px;"> <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:11px;font-family:arial, \'helvetica neue\', helvetica, sans-serif;line-height:17px;color:#333333;">Адрес: Украина, Бахмутский район, с. Хромовое</p> </td> </tr> <tr style="border-collapse:collapse;"> <td align="center" style="padding:0;Margin:0;padding-top:10px;padding-bottom:10px;"> <p
    //         style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:11px;font-family:arial, \'helvetica neue\', helvetica, sans-serif;line-height:17px;color:#333333;">© PlodovkaOpt</p> </td> </tr> </table> </td> </tr> </table> </td> </tr> </table> </td> </tr> </table> <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;"> <tr style="border-collapse:collapse;"> <td align="center" style="padding:0;Margin:0;"> <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;" width="600" cellspacing="0" cellpadding="0" align="center"> <tr style="border-collapse:collapse;"> <td align="left" style="padding:0;Margin:0;padding-left:20px;padding-right:20px;padding-bottom:30px;"> <table width="100%"
    //         cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> <tr style="border-collapse:collapse;"> <td width="560" valign="top" align="center" style="padding:0;Margin:0;"> <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> <tr style="border-collapse:collapse;"> <td class="es-infoblock" align="center" style="padding:0;Margin:0;line-height:14px;font-size:12px;color:#CCCCCC;"> <a target="_blank" href="http://viewstripo.email/?utm_source=templates&amp;utm_medium=email&amp;utm_campaign=basic&amp;utm_content=one_column" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, \'helvetica neue\', helvetica, sans-serif;font-size:12px;text-decoration:underline;color:#2CB543;"> <img
    //         src="https://llhve.stripocdn.email/content/guids/CABINET_3456ae095b7a69b3b453be2d331bab56/images/53211550841294535.png" alt="https://plodovkaopt.pp.ua" width="85" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;" title="https://plodovkaopt.pp.ua"> </a> </td> </tr> </table> </td> </tr> </table> </td> </tr> </table> </td> </tr> </table> </td> </tr> </table> </div> </body></html>';
       
            
    //     $mail->addAttachment('./price.doc', 'price.doc');
    //     // $mail->SMTPDebug = 1;

    //    	$mail->send();
    // }
    // -------------------------------------------
    $data = json_decode($_POST["data"]);
    if (!empty($data->email) && !empty($data->phone)) {

        $name = (!empty($data->name) && isset($data->name)) ? $data->name : "No name";
        $email = (!empty($data->email) && isset($data->email)) ? $data->email : "No email";
        $phone = (!empty($data->phone) && isset($data->phone)) ? $data->phone : "No phone";
        
        // TODO: uncomment
        
        // $host = 'a213547.mysql.mchost.ru'; // адрес сервера 
        // $database = 'a213547_plodovka'; // имя базы данных
        // $user = 'a213547_plodovka'; // имя пользователя
        // $password = 'qwe321qwe'; // пароль
        
        // $db = mysqli_connect($host, $user, $password, $database); 
        // mysqli_set_charset($db, 'utf8');
        // $query = "INSERT INTO lead (name, email, phone, date) VALUES ('".$name."', '".$email."', '".$phone."', NOW())";
        // $result = mysqli_query($db, $query) or die("Ошибка " . mysqli_error($db));
        // mysqli_close($db);
        
        // mail("zhivovsad1962@gmail.com", "Заявка на саженцы PlodovkaOpt за " . date("d.m.Y") , "Имя: " . $name . "; E-mail - " . $email . "; Телефон - " . $phone);
        // mail("plodovkaopt@gmail.com", "Заявка на саженцы PlodovkaOpt за " . date("d.m.Y"), "Имя: " . $name . "; E-mail - " . $email . "; Телефон - " . $phone);
        
        // if(!empty($email)){
            // sendPrice($email);
        // }

        echo 1;
   
        
    } else {
        echo 2;
    }