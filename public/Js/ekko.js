$(document).on('click', '[data-toggle="lightbox"]', function (event) {
    event.preventDefault();
    $(this).ekkoLightbox();
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 572bce5edc6caa9a8266f428d07a33af1d2bbf03


    // API formulaires
    const apiUrl = 'https://geo.api.gouv.fr/communes?codePostal=';
    const format = '&format=json';

    let zipcode = $('#zipcode'); let city = $('#city'); let errorMessage = $('#error-message');

    $(zipcode).on('blur', function(){
      let code = $(this).val();
      //console.log(code);
      let url = apiUrl+code+format;
      //console.log(url);

      fetch(url, {method: 'get'}).then(response => response.json()).then(results => {
        //console.log(results);
        $(city).find('option').remove();
        if(results.length){
          $(errorMessage).text('').hide();
          $.each(results, function(key, value){
            //console.log(value);
            console.log(value.nom);
            $(city).append('<option value="'+value.nom+'">'+value.nom+'</option>');
          });
        }
        else{
          if($(zipcode).val()){
            console.log('Erreur de code postal.');
            $(errorMessage).text('Aucune commmune avec ce code postal.').show();
          }
          else{
            $(errorMessage).text('').hide();
          }
        }
      }).catch(err => {
        console.log(err);
        $(city).find('option').remove();
      });
    });
});
<<<<<<< HEAD
>>>>>>> 4e571da (maj)
=======
>>>>>>> 572bce5edc6caa9a8266f428d07a33af1d2bbf03
