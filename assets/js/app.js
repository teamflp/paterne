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