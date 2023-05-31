document.addEventListener('DOMContentLoaded', () => {
  const stock = document.querySelector('#stock');
  const ventes = document.querySelector('#ventes');
  const client = document.querySelector('#client');
  const bilan = document.querySelector('#bilan');
  const formulaire = document.querySelector('#formulaire');
  const explication = document.querySelector('#explication');

  const affichage_stock = document.querySelector('#affichage_stock');
  const affichage_ventes = document.querySelector('#affichage_ventes');
  const affichage_client = document.querySelector('#affichage_client');
  const affichage_bilan = document.querySelector('#affichage_bilan');
  const affichage_formulaire = document.querySelector('#affichage_formulaire');
  const affichage_explication = document.querySelector('#affichage_explication');
  const affichage_index = document.querySelector('#affichage_index');

  const bouton_ventes_ok = document.querySelector('.boutonv');
    const bouton_modifier_stock = document.querySelector('.boutono');
    const bouton_supp_stock = document.querySelector('.boutonr'); 

    const affichage_ventes_stock = document.querySelector('#affichage_ventes_stock');
    const valider_ventes_stock = document.querySelector('.valider_ventes_stock');
    const affichage_modifier_stock = document.querySelector('#affichage_modifier_stock');
    const valider_modifier_stock = document.querySelector('.valider_modifier_stock')
    const affichage_supp_stock = document.querySelector('#affichage_supp_stock');
    const valider_supp_stock = document.querySelector('.valider_supp_stock');
// bouton vente dans l'affichage stock
    bouton_ventes_ok.addEventListener('click', ()=> {
                    affichage_ventes_stock.style.display = 'inline-block';
                    affichage_supp_stock.style.display = 'none';
                    affichage_modifier_stock.style.display = 'none';
    })

    valider_ventes_stock.addEventListener('click', ()=> {
      affichage_ventes_stock.style.display = 'none';
    })
//--------------------------------------------------------
//bouton modifier dans l'affichage stock
bouton_modifier_stock.addEventListener('click', ()=> {
          affichage_modifier_stock.style.display = 'inline-block';
          affichage_supp_stock.style.display = 'none';
          affichage_ventes_stock.style.display = 'none';

    })

    valider_modifier_stock.addEventListener('click', ()=> {
      affichage_modifier_stock.style.display = 'none';
    })
//-----------------------------------------------------------
//bouton supprimer dans l'affichage stock
bouton_supp_stock.addEventListener('click', ()=> {
                affichage_supp_stock.style.display = 'inline-block';
                affichage_ventes_stock.style.display = 'none';
                affichage_modifier_stock.style.display = 'none';
    })

    valider_supp_stock.addEventListener('click', ()=> {
      affichage_supp_stock.style.display = 'none';
    })
    //----------------------------------------------------------------
// menu entier

  stock.addEventListener('click', () => {
    if (affichage_stock.style.display == 'block') {
      affichage_stock.style.display = 'none';
      affichage_index.style.display = 'block';

      
    } else {
      affichage_stock.style.display = 'block';
      affichage_index.style.display = 'none';
      affichage_ventes.style.display = 'none';
      affichage_client.style.display = 'none';
      affichage_bilan.style.display = 'none';
      affichage_formulaire.style.display = 'none';
      affichage_explication.style.display = 'none';
    }
  });

  ventes.addEventListener('click', () => {
    if (affichage_ventes.style.display == 'block') {
      affichage_ventes.style.display = 'none';
      affichage_index.style.display = 'block';
    } else {
      affichage_ventes.style.display = 'block';
      affichage_stock.style.display = 'none';
      affichage_index.style.display = 'none';
      affichage_client.style.display = 'none';
      affichage_bilan.style.display = 'none';
      affichage_formulaire.style.display = 'none';
      affichage_explication.style.display = 'none';
    }
  });

  client.addEventListener('click', () => {
    if (affichage_client.style.display == 'block') {
      affichage_client.style.display = 'none';
      affichage_index.style.display = 'block';
    } else {
      affichage_client.style.display = 'block';
      affichage_stock.style.display = 'none';
      affichage_ventes.style.display = 'none';
      affichage_index.style.display = 'none';
      affichage_bilan.style.display = 'none';
      affichage_formulaire.style.display = 'none';
      affichage_explication.style.display = 'none';
    }
  });

  bilan.addEventListener('click', () => {
    if (affichage_bilan.style.display == 'block') {
      affichage_bilan.style.display = 'none';
      affichage_index.style.display = 'block';
    } else {
      affichage_bilan.style.display = 'block';
      affichage_stock.style.display = 'none';
      affichage_index.style.display = 'none';
      affichage_ventes.style.display = 'none';
      affichage_client.style.display = 'none';
      affichage_formulaire.style.display = 'none';
      affichage_explication.style.display = 'none';
    }
  });

  formulaire.addEventListener('click', () => {
    if (affichage_formulaire.style.display == 'block') {
      affichage_formulaire.style.display = 'none';
      affichage_index.style.display = 'block';
    } else {
      affichage_formulaire.style.display = 'block';
      affichage_stock.style.display = 'none';
      affichage_ventes.style.display = 'none';
      affichage_index.style.display = 'none';
      affichage_client.style.display = 'none';
      affichage_bilan.style.display = 'none';
      affichage_explication.style.display = 'none';
    }
  });

  explication.addEventListener('click', () => {
    if (affichage_explication.style.display == 'block') {
      affichage_explication.style.display = 'none';
      affichage_index.style.display = 'block';
    } else {
      affichage_explication.style.display = 'block';
      affichage_stock.style.display = 'none';
      affichage_ventes.style.display = 'none';
      affichage_index.style.display = 'none';
      affichage_client.style.display = 'none';
      affichage_bilan.style.display = 'none';
      affichage_formulaire.style.display = 'none';
    }
  });
});

//---------------------------------------------------------