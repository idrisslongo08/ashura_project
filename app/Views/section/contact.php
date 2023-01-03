<?php
//include('headerContact.php');

?>
<a name="contact"></a>
<section class="contact-form-wrap section">
   <div class="container">
      <div class="columns is-justify-content-center mt-5">
         <div class="column is-8-widescreen is-10-desktop has-text-centered mt-4">
            <form action="" method="POST">

               <!-- form message -->
               <?php
                if(isset($_POST['message'])=="succes"){?>
            
               <div class="columns">
                  <div class="column is-12">
                     <div class="alert alert-success contact__msg" style="display: none" role="alert">
                        Votre message a été envoyer avec succes!.
                     </div>
                  </div>
               </div> 
               <!-- end message -->
               <?php
                }
               ?>
               <div>
                     <div class="section-title">
                         <div>
                         <img src="images/icon/contact-mail.png" width="50px">
                       </div>
                       <div>
                           <h2 class="mb-4 text-primary">Contactez-nous</h2>
                           <p> N’hésitez pas à contacter <br></p>
                            Tel :  (+243) 978175635 - (+243) 992168086 <hr>

                            Laissez-nous un message
                        </div>
                     </div>
               </div>
               
               <p class="mb-5"></p>
               <div class="input-group">
                  <div class="bodered">
                     <input name="nom" type="text" class="input" placeholder="Votre nom">
                  </div>
               </div>
               <div class="input-group">
                  <div class="bodered">
                  <input name="subject" type="text" class="input" placeholder="Object du message">
                     
                  </div>
               </div>
               <div class="input-group">
                  <div class="bodered">
                     <input name="email" type="email" class="input" placeholder="Addresse mail ou numéro de télephone">
                  </div>
               </div>
               <div class="input-group-2 mb-4">
                  <div class="bodered">
                     <textarea name="message" class="input" rows="4" placeholder="Message"></textarea>
                  </div>
               </div>
               <button class="btn btn-main" name="submit" type="submit">Envoyer votre message</button>
            </form>
         </div>
      </div>
   </div>
</section>
