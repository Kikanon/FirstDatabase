
<h1>Vstavi podatke za novega uporabnika.</h1><hr>

<form action="insert_user.php" method="post" style="margin: 20px">
	Uporabnisko ime: <br><input type="text" name="user_name" autocomplete="off" placeholder="npr. heker13" required="true"><br>
    Geslo:           <br><input type="password" name="user_pass" autocomplete="off" placeholder="npr. geslo123" required="true"><br>
	Potrdi geslo:    <br><input type="password" name="user_passc" autocomplete="off" placeholder="*******" required="true"><br>
	E-mail:          <br><input type="text" name="user_mail" autocomplete="off" splaceholder="npr. Kiki.Bambino@sers.si" required="true"><br>
	<input type="submit">
</form>


<a href="index.php" style="margin: 20px">Return no main page</a>