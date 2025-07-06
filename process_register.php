<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

session_start();

$errors = [];
$old_input = [];

// Procesar formulario solo si es POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validar y sanitizar
    $nombre = sanitize($_POST['nombre'] ?? '');
    $email = sanitize($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    // Validaciones (como en tu código anterior)
    // ...

    // Insertar registro
    if (empty($errors)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        try {
            $stmt = $conn->prepare("INSERT INTO usuarios (nombre, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $nombre, $email, $hashed_password);
            
            if ($stmt->execute()) {
                $_SESSION['register_success'] = 'Registro exitoso!';
                header("Location: login.php");
                exit();
            }
        } catch (mysqli_sql_exception $e) {
            // Manejar error de duplicado u otros
            if ($e->getCode() == 1062) {
                $errors['email'] = 'Este email ya está registrado';
            } else {
                $errors['general'] = 'Error en el registro: ' . $e->getMessage();
            }
        }
    }

    // Guardar errores para mostrar
    $_SESSION['register_errors'] = $errors;
    $_SESSION['old_input'] = [
        'nombre' => $nombre,
        'email' => $email
    ];
    header("Location: register.php");
    exit();
}

// Si llega aquí es GET, mostrar formulario
// ...