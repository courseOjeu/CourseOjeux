    var Contact = Vue.component('Contact',{
        template:`
            <main class="contact">
                <h2> Contact </h2>
                <div class="container_contact">
                    <form>
                        <label for="fname">Prénom</label>
                        <input type="text" id="fname" name="firstname" placeholder="Votre prénom">
                        
                        <label for="fname">Nom</label>
                        <input type="text" id="fname" name="lastname" placeholder="Votre nom">
                        
                        <label for="sujet">Sujet</label>
                        <input type="text" id="sujet" name="sujet" placeholder="L'objet de votre message">
                    
                        <label for="emailAddress">Email</label>
                        <input id="emailAddress" type="email" name="email" placeholder="Votre email">
                    
                    
                        <label for="subject">Message</label>
                        <textarea id="subject" name="subject" placeholder="Votre message" style="height:200px"></textarea>
                    
                        <input type="submit" value="Envoyer">
                    </form>
                </div>
                <div class="visu4">
        <div class="titreequipe">
            <h4>Notre équipe</h4>
        </div>
        <div class="bande">
            <div class="align2">
                <div class="theo" data-sal="slide-up" data-sal-duration="1500" data-sal-delay="250">
                    <img src="../img/photo_théo.png" alt="">
                    <h4>Théo Reille</h4>
                    <p>19 ans</p>
                    <strong>Chargé de communication</strong>
                </div>
            <div class="david" data-sal="slide-up" data-sal-duration="1500">
                <img src="../img/photo_david.png" alt="">
                <h4>David Rivera</h4>
                <p>20 ans</p>
                <strong>Chargé du design</strong>
            </div>
                <div class="nicolas" data-sal="slide-up" data-sal-duration="1500" data-sal-delay="250">
                    <img src="../img/photo_nicolas.png" alt="">
                    <h4>Nicolas Louisin</h4>
                    <p>20 ans</p>
                    <strong>Chargé du développement</strong>
                </div>
            </div>
        </div>

            </main>
    
        `,
        data(){
            return{

            }
        },

        mounted(){

        },

        method:{

        }

    })