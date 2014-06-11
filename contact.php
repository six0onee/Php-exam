<?php  
include("contact.controller.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<title>Contact | Wanna go to Japan next week ? | Antoine Gouin</title>
	
    <link rel="icon" type="image/png" href="img/favicon.png" />
    
</head>
<body>
	<div id="contactform">
		<?php if($hideForm == 0): ?>
        <div class="row">
            <div class="large-5 medium-6 small-12 columns small-centered">
				<form action="contact.php" method="post">
					<ol class="form-list">
						<li>
							<label for="lastname">Nom :</label>
							<input type="text" name="lastname" placeholder="Bruce" required>
						</li>
							<?php if (isset($errors['lastname'])){ echo "<li><p>".$errors['lastname']."</p></li>";} ?>
						<li>
							<label for="lastname">Prénom :</label>
							<input type="text" name="firstname" required placeholder="Lee" class="<?php if (isset($errors['firstname'])){ echo 'error';} ?>">
						</li>
							<?php if (isset($errors['firstname'])){ echo "<li><p>".$errors['firstname']."</p></li>";} ?>
						<li>
							<label for="email">Email :</label>
							<input type="text" name="email" placeholder="brucelee@dragon.com" required>
						</li>
							<?php if (isset($errors['email'])){ echo "<li><p>".$errors['email']."</p></li>";} ?>
						<li>
							<label for="message">Message :</label>
							<textarea name="message" placeholder="Nǐhǎo!" required></textarea>
						</li>
							<?php if (isset($errors['message'])){ echo "<li><p>".$errors['message']."</p></li>";} ?>
						<li>
							<input type="submit" value="Envoyer" name="contact" value="Envoyer le message">
						</li>
					</ol>
				</form>	
	            <?php endif; ?>
	            <div class="large-12 medium-12 small-10 columns small-centered">
	            	<div class="status">
						<?php if(isset($statuscontact)): ?>
							<p><?php echo $statuscontact ?></p>
						<?php endif; ?>
					</div>
				</div>
            </div>
        </div>
	</div>

</body>
</html>