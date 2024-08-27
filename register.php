<?php 
session_start();
?>
<!doctype html>
<html lang="ru">
    <head>
        <?php require_once __DIR__. '/components/head.php' ?>
        <title>Регистрация</title>
    </head>
    <body>
        <?php require_once __DIR__. '/components/header.php' ?>
        <section class="main">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        Регистрация
                    </div>
                    <?php
                        if (isset($_SESSION['fields'])) {
                            ?>
                            <div class="alert alert-danger" role="alert">
                                Проверьте правильность введенных полей
                            </div>
                            <?php
                            $fields = $_SESSION['fields'];
                            unset($_SESSION['fields']);
                        }
                    ?>
                    <div class="card-body">
                        <form method="POST" action="/actions/user/register.php">
                            <div class="mb-3">
                                <label for="emailRegisterField" class="form-label">E-mail</label>
                                <input 
                                    name="email" type="email" 
                                    class="form-control <?= $fields['email']['error'] ? 'is-invalid' : '' ?>"
                                    value="<?= isset($fields['email']['value']) ? $fields['email']['value'] : "" ?>"
                                    id="emailRegisterField" aria-describedby="emailHelp"
                                    required
                                >
                                <div 
                                    id="emailRegisterHelp" 
                                    class="form-text">Мы никогда никому не передадим вашу электронную почту.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="fullNameField" class="form-label">ФИО</label>
                                <input 
                                    name="name" 
                                    type="text" 
                                    value="<?= isset($fields['name']['value']) ? $fields['name']['value'] : "" ?>"
                                    class="form-control <?= $fields['name']['error'] ? 'is-invalid' : '' ?>"
                                    id="fullNameField" 
                                    aria-describedby="emailHelp"
                                    required
                                >
                            </div>
                            <div class="mb-3">
                                <label for="dobField" class="form-label">Дата рождения</label>
                                <input 
                                    name="dob" 
                                    type="date" 
                                    class="form-control <?= $fields['dob']['error'] ? 'is-invalid' : '' ?>"
                                    id="dobField" 
                                    aria-describedby="emailHelp"
                                    value="<?= isset($fields['dob']['value']) ? $fields['dob']['value'] : "" ?>"
                                    required
                                >
                            </div>
                            <div class="mb-3">
                                <label for="passwordRegisterField" class="form-label">Пароль</label>
                                <input 
                                    name="password" 
                                    type="password" 
                                    class="form-control <?= $fields['password']['error'] ? 'is-invalid' : '' ?>"
                                    id="passwordRegisterField"
                                    required
                                >
                            </div>
                            <div class="mb-3">
                                <label for="passwordConfirmField" class="form-label">Подтверждение пароля</label>
                                <input 
                                    name="password_confirmation" 
                                    type="password" 
                                    class="form-control <?= $fields['password']['error'] ? 'is-invalid' : '' ?>"
                                    id="passwordConfirmField"
                                    required
                                >
                            </div>
                            <button type="submit" class="btn btn-primary">Создать аккаунт</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <?php require_once __DIR__. '/components/scripts.php' ?>
    </body>
</html>