var Forum = Vue.component('Forum',{
    template:`
            <main class="forum">
                <div class="forum">
                    <h2>Forum</h2>
                    <h3> Sujet : Quel est le meilleur jeu de carte ? </h3>
            
                <div class="bouton-haut">
                    <button>Répondre</button>
                    <button>Nouveau sujet</button>
                </div>
            
                <div class="rectangle">
            
                    <div class="rond"></div>
            
                    <div class="message-admin">
                        <p>Admin</p>
                        <p>03/07/2020</p>
            
                    <div class="ligne">
                        <img src="images/Ligne%208.svg" alt="" width="100%">
                    </div>
            
                        <p>Bienvenue sur le Forum !</p>
                    </div>
                </div>
            
                    <div class="bouton-bas">
            
                    <button>Poster</button>
            
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