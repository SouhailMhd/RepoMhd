<div>

			    <!-- Contact Form -->
			    <!-- <form class="form" method="post" action="#" role="form">
			    	<div class="form-group">
			    	    <label for="name">Name :</label>
			    	    <input type="text" id="name" name="name" placeholder="Enter your name" />
			        </div>

			        <div class="form-group">
			    	    <label for="email">Email :</label>
			    	    <input type="email" id="email" name="email" placeholder="Enter your email" />
			        </div>

			        <div class="form-group">
			    	    <label for="message">Message :</label>
			    	    <textarea rows="10"></textarea>
			        </div>

					<button type="submit" value="">Send it to me !</button>
			    </form>
 -->
	

	<FORM class="form" METHOD=POST ACTION="formexec.php" onSubmit="return testform(this.sender_nom,this.sender_prenom,this.sender_mail,this.sender_tel,this.sender_message)"> 
	                <div class="form-group">
			    	    <label for="name">Nom :</label>
			    	    <input type="text" id="name" name="sender_nom" placeholder="Entrez votre nom" />
			        </div>
			        <div class="form-group">
			    	    <label for="name">Prénom :</label>
			    	    <input type="text" id="prenom" name="sender_prenom" placeholder="Entrez votre prénom" />
			        </div>
			        <div class="form-group">
			    	    <label for="name">Email :</label>
			    	    <input type="text" id="mail" name="sender_mail" placeholder="Entrez votre email" />
			        </div>
			        <div class="form-group">
			    	    <label for="name">Adresse :</label>
			    	    <input type="text" id="adresse" name="sender_adresse" placeholder="Entrez votre adresse" />
			        </div>
			        <div class="form-group">
			    	    <label for="name">Code Postal :</label>
			    	    <input type="text" id="cp" name="sender_cp" placeholder="Entrez votre code postal" />
			        </div>
			        <div class="form-group">
			    	    <label for="name">Ville :</label>
			    	    <input type="text" id="ville" name="sender_ville" placeholder="Entrez votre ville" />
			        </div>
			        <div class="form-group">
			    	    <label for="name">Tel :</label>
			    	    <input type="text" id="tel" name="sender_tel" placeholder="Entrez votre numero de téléphone" />
			        </div>
			        <div class="form-group">
			    	    <label for="name">Message :</label>
			    	    <textarea type="text" id="message" name="sender_message" placeholder="Entrez votre message" cols="40" rows="20"/></textarea>
			        </div>
			       
	
	 
	 
	
	 
	
	 
	 <button type="submit" value="Envoyer" onclick="verifmail(sender_mail);">Soumettre</button>
	 <button type="reset" value="Annuler">Annuler</button>
	
	 
	
	</form>
	
</div>