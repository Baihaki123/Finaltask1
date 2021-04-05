<?php
session_start();
$form_error = '';
$secret_key = "6Ld6yYIaAAAAANXkqtx5sxtWdU2BdL80qF0xS5fJ";
$verify = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $_POST['g-recaptcha-response']);
$response = json_decode($verify);
if (isset($_POST['submit'])) {
    if ($response->success) { // Jika centang
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username == 'udacodingid' and $password == 'udacodingidJaya2021') {
            $_SESSION['username'] = $username;
            header('Location: beranda.php');
        }else if(strlen($password)<6) {

        }else {
            // jika login salah maka variabel form_error diisi value seperti dibawah
            // nilai variabel ini akan ditampilkan di halaman login jika salah
            $form_error = '<p>Password atau username yang kamu masukkan salah</p>';
?> <script>
                alert('Password atau username yang kamu masukkan salah');
                window.location.href = 'login.php';
            </script> <?php
                    }
                } else {
                        ?> <script>
            alert('Rechapca harus di centang');
            window.location.href = 'login.php';
        </script> <?php
                }
            }
