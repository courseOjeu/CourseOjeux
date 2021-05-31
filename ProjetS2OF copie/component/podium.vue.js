var Podium = Vue.component('Podium',{
    template:`
            <main class="notre-podium">
                <h1>
                    Notre podium
                </h1>
                <h2>Les 3 jeux de société les plus appréciés</h2>
                <div class="podium-img">
                    <img src="../../img/podium.png" alt="">
                </div>
                    <p>Découvrez la sélection des jeux les plus appréciés en France</p>

                <div class="podium-jeux">
                    <h2>1. Blanc Manger Coco</h2>
                    <div class="blanc-manger-coco">
                        <img src="../../img/bmc_podium.png" alt="">
                        <p>Blanc-manger Coco est un jeu de cartes, idéal pour l’apéro entre amis. L’objectif est de rire de tout, grâce à des combinaisons de mots à l’esprit transgressif.</p>
                    </div>
                    <h2>2. Uno</h2>
                    <div class="uno">
                        <img src="../../img/uno_podium.png" alt="">
                        <p>Uno, un jeux de famille rapide et amusant à ramener partout avec vous.</p>
                    </div>
                    <h2>3. Monopoly</h2>
                    <div class="monopoly">
                        <img src="../../img/monop_podium.png" alt="">
                        <p>Réunissez-vous pour jouer au Monopoly, le jeu de société des transactions immobilières.</p>
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