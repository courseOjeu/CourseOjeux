var Partage = Vue.component('Partage',{
    template:`
            <main class="partage">
            <router-link :to="{name:Home}">
                <h2>Partagez votre jeu</h2>
                </router-link>
                <div class="champ_partage">
                    <form>
                        <input type="text" id="fname" name="firstname" placeholder="Votre jeu">
                        <input type="text" id="fname" name="lastname" placeholder="Sa catégorie">
                        <input type="submit" value="Ajouter">
                        <router-link :to="{name:Home}">
                    </form> 
                </div>
                <div class="ajout_jeu">
                    <div class="info_jeu">
                        <p>Nom du jeu :</p>
                        <p>ajouté par :</p>
                    </div>
                    <div class="image_jeu">
                        
                    </div>
                    <div class="top_jeu">
                        <img src="img/flèch_bas.png" alt="">
                        <img src="img/fleche_haut.png" alt="">
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