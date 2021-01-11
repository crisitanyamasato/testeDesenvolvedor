$(document).ready(function(){

  $('#searchUser').on('keyup', function(e){//Pegando valor que esta sendo digitado no input #seachUser
    
    let username = e.target.value; // definindo o valor do username
    
    if(username!='')  { // verifica se username esta vazio
      
      var request = new XMLHttpRequest(); //instanciando o request
      
      request.open('GET', 'https://api.github.com/users/'+username+'/repos', true); //requisião da api

      request.onload = function () {
        var data = JSON.parse(this.response); //armazenando o dados do json em objeto

        var statusHTML = ''; 

        $.each(data, function(i, status) {
          statusHTML += '<tr>';
          statusHTML += '<td>' + status.id + '</td>';
          statusHTML += '<td>' + status.name + '</td>';
          statusHTML += '<td><a href="'+status.html_url+'" target="_blank">Acessar</a></td>';
          statusHTML += '<td><a href="' + status.html_url +'/archive/master.zip" target="_blank"> Download</a></td>';
          statusHTML += '</tr>';
          });//Montando o HTML com os valores que foram armazenados em data

        $('tbody').html(statusHTML);//Acresentando o HTML que foi montado na pagina
      }

      request.send();//enviando a requesição 
    }
  });
});
