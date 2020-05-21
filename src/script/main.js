import $ from 'jquery';

$(document).ready(function () {
  // Reference
  var container = $('.main__wrapper');
  var inputbox = $('.header__inputbox');
  var logo = $('.header__logo');
  // Api Reference
  var database = 'http://localhost:8888/php-ajax-dischi/dist/partials/data-json.php';
  // Handlebars config
  var source = $('#card-template').html();
  var template = Handlebars.compile(source);

  // Default actions on main-page
  inputbox.focus();
  getData();
  
  // Reset albums view when Click on logo
  logo.click( () => {
    container.html('');
    getData();
  });

  // Search Albums by author with keyup on inputbox
  inputbox.keyup(function(e){
    if (e.which == 13){
      search();
    }
  })

  /****************************************************
  * FUNCTIONS
  ****************************************************/

  // FUNCTION: Get data by API
  function getData (){
    $.ajax({
      url: database,
      method: 'GET',
      success: function(data){
        for (let i = 0; i < data.length; i++){
          var card = {
            title: data[i].title,
            author: data[i].author,
            year: data[i].year,
            logo: data[i].logo
          }
          var html = template(card);
          container.append(html);
        }
      },
      error: () => { console.log('Errore Api') }
    })
  }

  // FUNCTION: Search data by API
  function search(){
    var searchText = $('.header__inputbox').val().trim().toLowerCase();
    container.html('');
    $.ajax({
      url: database,
      method: 'GET',
      success: function(data){
        var cont = false;
        for (let i = 0; i < data.length; i++){
          if (data[i].author.toLowerCase() == searchText){
            cont = true;
            var card = {
              title: data[i].title,
              author: data[i].author,
              year: data[i].year,
              logo: data[i].logo
            }
            var html = template(card);
            container.append(html);
          }
        }
        if (!cont){ 
          alert('Nessun risultato prodotto dalla ricerca') 
        };
        // Reset inputbox
        $('.header__inputbox').val('');
      },
      error: () => { console.log('api error');
      }
    })
  }

}); //End Doc Ready