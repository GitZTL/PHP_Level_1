<h1>Some text here</h1>

<div class="register">
        <h5>Здесь будет вывод имени юзера</h5>
	       <h2>Регистрация</h2>
            <form method="post">
    <!--**** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user.php методом "post" ***** -->
        <p>
            <label>Ваш логин:<br></label>
            <input name="login" type="text" size="15" maxlength="15">
        </p>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
        <p>
            <label>Ваш пароль:<br></label>
            <input name="pass" type="password" size="15" maxlength="15">
        </p>
<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 
        <p>
            <input type="submit" name="submit" value="Регистрация / Вход">
<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** --> 
           
        </p>
        </form>
        <form method="post">
            <p>
             <input type="submit" name="logout" value="Отмена регистрации"> 
            </p>
        </form>
        </div>