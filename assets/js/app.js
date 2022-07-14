new Vue({
     el: '#myCarousel',
     data: {
          slides: [
               {
                    url: './images/slide01.webp',
                    alt: 'Slide 01',
                    titre1: 'Transport Urgent',
                    titre2: 'Transport National en Urgence !',
                    btn: 'Découvrez notre service',
               },
               {
                    url: './images/slide02.webp',
                    alt: 'Slide 02',
                    titre1: 'Transport Professionnel',
                    titre2: 'Transport longue distance',
                    btn: 'Découvrez notre service',
               },
               {
                    url: './images/slide03.webp',
                    alt: 'Slide 03',
                    titre1: null,
                    titre2: 'Transport en Ile-de-France',
                    btn: 'Découvrez notre service',
               },
               {
                    url: './images/slide01.webp',
                    alt: 'Slide 01',
                    titre1: 'Transport Urgent',
                    titre2: 'Transport National en Urgence !',
                    btn: 'Découvrez notre service',
               },
          ]
     }
});

new Vue({
     el: '#services',
     data: {
          services: [
               {
                    url: './images/transport-de-marchandises-paris.webp',
                    alt: 'Transport en Ile-de-France', 
                    title: 'Transport de Marchandises',
                    texte: 'Notre transport routier de marchandises se distingue par la rapidité, la souplesse et l\'adaptabilité des envois à tous les types de cargaisons.',
               },
               {
                    url: './images/transport-urgent-et-securise.webp',
                    alt: 'Transport Urgent et Sécurisé',
                    title: 'Transport Urgent et Sécurisé',
                                   texte: 'Une livraison express comprend un service de transport express hautement sécurisé. Votre colis reste entre de bonnes mains tout au long de son trajet.',
               },
               {
                    url: './images/livraison-express.webp',
                    alt: 'Livraison Express',
                    title: 'Livraison Express',
                    texte: 'Envoi et livraison express de colis et documents, transport express, qui propose une large gamme de services de transport.',
               },
               {
                    url: 'images/demenagement.webp',
                    alt: 'Déménagement Professionnel',
                    title: 'Déménagement Professionnel',
                    texte: 'Spécialiste du déménagement d\'entreprise, Démépool se charge de votre transfert d\'activité ou mutation professionnelle.',
               },
               {
                    url: './images/navette-reguliere.webp',
                    alt: 'Navette Régulière',
                    title: 'Navette Régulière',
                    titl: 'Avec le service navette régulière de Transport Express, envoyez vos courriers et plis programmés en toute sécurité.',
               },
               {
                    url: './images/temperature-dirigee.webp',
                    alt: 'Température Dirigée',
                    title: 'Température Dirigée',
                    texte: 'Spécialistes du transport à température dirigée, le transport frigorifique concerne un large panel de produits (légumes, surgelés, congelés).',
               },
          ]
     }
});

new Vue({
     el: '#icon-home',
     data: {
          homes: [
               { icon_home: '<i class="fas fa-home"></i>' },
          ]
     }
});

// Créer de router pour la page d'accueil

const router = new VueRouter({
     mode: 'history',
     routes: [
          { path: '/', component: Accueil },
          { path: '/formations', component: Formation },
          { path: '/services', component: Services },
          { path: '/contact', component: Contact },
     ]
});

router.push('/');
router.push('/formations');
router.push('/services');
router.push('/contact');

// créer des liens pour les pages

new Vue({
     el: '#mynav',
     data: {
          navs: [
               {
                    url: './index.html',
                    alt: 'Accueil',
                    text: 'Accueil',
               },
               {
                    url: './formations.html',
                    alt: 'Formations',
                    text: 'Formations',
               },
               {
                    url: './services.html',
                    alt: 'Services',
                    text: 'Services',
               },
               {
                    url: './contact.html',
                    alt: 'Contact',
                    text: 'Contact',
               },
          ],

          // créer un bouton pour le menu mobile
          nav_mobile: [
               {
                    url: './index.html',
                    alt: 'Accueil',
                    text: 'Accueil',
               },
          ],

          // On récupère la largeur de l'écran
          screen_width: window.innerWidth,
          // On récupère la hauteur de l'écran
          screen_height: window.innerHeight,

          // On créé une animation
          show_nav: false,
     },
     methods: {
          // Fonction pour afficher le menu mobile
          show_nav_mobile: function() {
               this.show_nav_mobile = true;
               this.hide_nav_mobile = false;
          }
          // Fonction pour cacher le menu mobile
     },
     mounted: function () {   // Fonction pour afficher le menu mobile
          window.addEventListener('resize', () => {
               this.screen_width = window.innerWidth;
               this.screen_height = window.innerHeight;
          });
     },

     // Créer une méthode pour cacher la navbar
     // quand on scroll
     // et afficher la navbar quand on revient en haut
     // et quand on scroll
     
     methods: {
          show_nav: function () { 
               if (this.screen_height >= 68) { 
                    this.show_nav = false;
               }
               else {
                    this.show_nav = true;
               }
          }
     },
});
