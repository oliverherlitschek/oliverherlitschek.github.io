<article class="form bg-lpurple pl-1 pr-1 pt-1 c-purple" id="book-form">
        <form action="/bookform" method="POST" id="bookform" class="flex flex-wrap flex-sb">
            <div class="close-btn">&times;</div>
          <h3 class="heading w-100 mb-10 s-body">Skriv til os</h3>
  <p class="body w-100 mb-1 s-small">Nu er det din tur! Uanset om du er klar til at starte i et forløb, har spørgsmål eller bare gerne vil vide mere — send os en besked, så vender vi tilbage i løbet af et par dage.</p>
  
                <?php  
                
                if(isset($alert)){
                
                echo '<div class="error_msg_wrapper"><ol>';
                
                foreach($alert as $key=>$val)
                {
                    echo '<li>'.$val.'</li>';
                }
                
                echo '</ol></div>'; 
                    
                }
                
                if(isset($success)){
                
                echo '<div  class="success_msg_wrapper">';
                
                    echo $success;
                    
                echo '</div>';  
                    
                }
                
                ?>

                <input type="text" class="w-100 m-w-100 mb-1 m-mb-15" id="bookname" name="bookname" placeholder="Navn" value="<?= $data['bookname'] ?? '' ?>" required>

                <input type="number" class="w-half m-w-half mb-1 m-mb-15" id="bookage" name="bookage" placeholder="Alder" value="<?= $data['bookage'] ?? '' ?>" required>

                <input type="text" class="w-half m-w-half mb-1 m-mb-15" id="bookpronouns" name="bookpronouns" placeholder="Pronominer" value="<?= $data['bookpronouns'] ?? '' ?>"> 

                <input type="number" class="w-half m-w-100 mb-1 m-mb-15" id="bookpostalcode" name="bookpostalcode" placeholder="Postnummer" maxlength="4" minlength="4" value="<?= $data['bookpostalcode'] ?? '' ?>" required>

                <input type="tel" class="w-half m-w-100 mb-1 m-mb-15" id="bookphonenumber" name="bookphonenumber" placeholder="Telefonnummer" maxlength="8" minlength="8" value="<?= $data['bookphonenumber'] ?? '' ?>" required>

                <input type="email" class="w-100 m-w-100 mb-1 m-mb-15" id="bookemail" name="bookemail" placeholder="Email" value="<?= $data['bookemail'] ?? '' ?>" required>

            <textarea id="bookmessage"  class="w-100" name="bookmessage" placeholder="Hvad skal vi tale om — og er der nogen, du helst vil tale med? Ordet er frit :)" required><?= $data['bookmessage'] ?? '' ?></textarea>
                <label for="accept_terms" class="container mt-1"><p class="body s-small">Ja, jeg accepterer <a href="https://www.avilius.dk/blog/handelsbetingelser" title="Handelsbetingelser" target="_blank" class="underline">handelsbetingelserne</a> og <a href="https://www.avilius.dk/blog/privatlivspolitik" title="Data- og privatlivspolitik" target="_blank" class="underline">data- og privatlivspolitikken</a>.</p>
                    <input type="checkbox" class="hide-input" id="accept_terms" name="accept_terms" value="Ja" required/>
                    <span class="checkmark bg-white"></span>
                </label>


                <?php echo csrf_field() ?>
                <?php echo honeypot_field() ?>



                <label for="accept_marketing" class="container mt-15 mb-1"><p class="body s-small">Ja tak, jeg ønsker at modtage nye podcasts, artikler og invitationer til events en gang imellem.</p>
                    

                    <input type="checkbox" class="hide-input" id="accept_marketing" name="accept_marketing" value="Ja" />
                    <span class="checkmark bg-white"></span>
                </label>


                <div class="m-c mb-1">
                    <input type="hidden" name="formid" value="bookform">
                    <label for="submit"><button class="btn form-btn bg-white c-purple ta-c mono w-full pl-1 pr-1 s-small s-pl-2 s-pr-2">Send</button></label>
                    <input type="submit" class="hide-input" id="submit" name="submit" value="Send besked">
                </div>
                   
        </form>
         </article>
        </section>
        
</article>
<!-- <div class="modal-overlay bg-white o-75 book-button"></div> -->