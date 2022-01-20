<div class="centrage">
		<div class="centrage container-sm w-25 mt-5 px-4">
			<h1>Identification</h1>
			<form method="POST"  action="index.php?action=user&choix=verif">
			<div class="form-group">
  				<div class="mb-3">
					<label for="email" class="form-label">Email / login</label>
					<input type="text" class="form-control" name="username" id="email" placeholder="Email / login" />
					<div id="emailHelp" class="form-text">Saisir votre email.</div>
				</div>
</div>
           <div class="form-group">
				<div class="mb-3">
					<label for="password" class="form-label">Mot de passe</label>
					<input type="password" class="form-control" name="password" id="password" placeholder="mot de passe" />
				</div>
</div>
				<input type="submit" class="btn btn-primary" id="submit" value="Connexion" />
			</form>
		</div>
</div>