var Enquete = Vue.component('Enquete',{
    template:`
            <main class="categorie">
                <h2> Enquête </h2>
                <div class="articles_container">
                    <div id="jeu1">
                        <h3> Blanc Manger Coco </h3>
                        <img src="../img/bmc_article.png" alt="" >
                        <p>Blanc-manger Coco est un jeu de cartes, idéal pour l’apéro entre amis. L’objectif est de rire de tout, grâce à des combinaisons de mots à l’esprit transgressif.</p>
                        <button> Voir l'article </button>
                    </div>
            
                    <div id="jeu2">
                        <h3> Nom jeu 2 </h3>
                        <img src="../img/Uno_article.png" alt="">
                        <p> Description jeu 2 </p>
                        <button> Voir l'article </button>
                    </div>
            
                    <div id="jeu3">
                        <h3> Nom jeu 3 </h3>
                        <img src="../img/codenames_article.png" alt="">
                        <p> Description jeu 3 </p>
                        <button> Voir l'article </button>
                    </div>
                </div>
            </main>
        `,
    data(){
        return{
            $listeJeu:[]

        }
    },

    mounted(){
        // Requete Ajax par Axios pour la liste des villageois
        // du backend
        axios.get('http://localhost:8888/ProjetS2OF/listeJeu.php')
            // récupération des données
            .then(response => {
                this.listeJeu = response.data;
                console.log("Liste des jeu", this.listeJeu);

            })
            // cas d'erreurs
            .catch(error =>{
                console.log(error);
            })
    },

    method:{

    }

})