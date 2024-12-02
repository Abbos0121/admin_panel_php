<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Включаем отображение ошибок
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Подключение к базе данных
require 'include/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullName = htmlspecialchars(trim($_POST['fullname']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $company = htmlspecialchars(trim($_POST['company']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Проверка на обязательные поля
    if (empty($fullName) || empty($email) || empty($phone) || empty($message)) {
        $_SESSION['message_status'] = [
            'class' => 'alert-danger',
            'message' => 'Все поля обязательны для заполнения!'
        ];
        header('Location: contact.php'); // Перенаправление на страницу с формой
        exit;
    }

    // Сохранение сообщения в базу данных
    try {
        $stmt = $pdo->prepare("INSERT INTO messages (`fullname`, `email`, `phone`, `company`, `message`) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$fullName, $email, $phone, $company, $message]);

        $_SESSION['message_status'] = [
            'class' => 'alert-success',
            'message' => 'Сообщение успешно отправлено в базу данных!'
        ];
    } catch (PDOException $e) {
        $_SESSION['message_status'] = [
            'class' => 'alert-danger',
            'message' => 'Ошибка при сохранении сообщения: ' . $e->getMessage()
        ];
        header('Location: contact.php');
        exit;
    }

    // Отправка письма через PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Настройки SMTP
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = 'smtp.gmail.com';
        $mail->Username = 'abbossmadmurotov010120011@gmail.com'; // Ваш Gmail
        $mail->Password = 'yzvvzgfpwonnfdcq';    // Пароль приложения
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        
        // Получатель и отправитель
        // Получатель и отправитель
        $mail->setFrom('abbossmadmurotov010120011@gmail.com', 'Admin Panel');
        $mail->addAddress('abbossmadmurotov010120011@gmail.com', 'Admin Panel');

        // Контент письма
        $mail->isHTML(true);
        $mail->Subject = 'New enquiry - Admin Panel Contact Form';
        $mail->Body = "
            <h3>Hello, you got a new enquiry</h3>
            <h4>Fullname: {$fullName}</h4>
            <h4>Email: {$email}</h4>
            <h4>Phone: {$phone}</h4>
            <h4>Company: {$company}</h4>
            <h4>Message: {$message}</h4>
        ";

        // Отправка письма
        if ($mail->send()) {
            $_SESSION['message_status'] = [
                'class' => 'alert-success',
                'message' => 'Сообщение успешно отправлено на почту!'
            ];
        } else {
            $_SESSION['message_status'] = [
                'class' => 'alert-danger',
                'message' => 'Ошибка при отправке почты: ' . $mail->ErrorInfo
            ];
        }
    } catch (Exception $e) {
        $_SESSION['message_status'] = [
            'class' => 'alert-danger',
            'message' => 'Ошибка при отправке почты: ' . $mail->ErrorInfo
        ];
    }

    // Редирект обратно на страницу формы
    header('Location: contact.php');
    exit;
} else {
    header('Location: contact.php');
    exit;
}

?>
