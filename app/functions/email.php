<?php 

function send($data) {
    
    $email = new PHPMailer\PHPMailer\PHPMailer; //Instancia o PHP Mailer
    $email->CharSet = 'UTF-8';
    $email->SMTPSecure = 'plain'; //ssl;
    $email->isSMTP();
    $email->Host = 'smtp.mailtrap.io';
    $email->Port = 465;
    $email->SMTPAuth = true;
    $email->Username = 'ba5ceeba0bf171';
    $email->Password = '7bd368c9a4b297';
    $email->isHTML(true);
    $email->setFrom('contatoruanvinicius@gmail.com');
    $email->FromName = $data['quem'];
    $email->addAddress($data['para']);
    $email->Body = $data['mensagem'];
    $email->Subject = $data['assunto'];
    $email->AltBody = 'Para ver esse email tenha certeza de estar vendo em um programa que aceite ver HTML';
    $email->MsgHTML($data['mensagem']);
    $email->send();
    

}
