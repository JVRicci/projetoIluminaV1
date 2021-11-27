

// variaveis
var latitude
var longitude
var endereco
var map
var marcador

var mapaFrame= document.querySelector('gmap_canvas')

var marcCritBtn= document.querySelector('btnMarcCrit')
var marcRegbtn= document.querySelector('btnMarcReg')


// função para carregar mapa
function initMap() {

  // pede a confirmação do usuario para utilização de geolocalização
  if('geolocation' in navigator){
    //atraves da solicitação, confirma a localização do usuario
    navigator.geolocation.getCurrentPosition(function(position){

      // declara variavel da localização, porém não está sendo utilizada, criada apenas para medida de testes
      const myLatLng = { 
        lat: position.coords.latitude, 
        lng: position.coords.latitude 
        
      };
      
      //reponsavel por carregar informações do mapa
      var mapOptions = {
        //mostra onde vai ser inicializado mapa, em qual localização, por meio de latitude e longitude
        center: {
          lat: position.coords.latitude, 
          lng: position.coords.longitude
        },
        
        //indica o zoom do mapa, para exibição
        zoom: 18,
        //indica que o mapa tera funções de satelite e visualização normal
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      
      //carrega marcador inicial na pagina
      var marcardor = new google.maps.Marker({
        //coordenadas do marcador
        position:  {lat: position.coords.latitude, lng: position.coords.longitude},
        //indica que será usado no mapa
        map,
        // titulo do marcador
        title: "SALVE MUNDO",
        // carrega aparencia do marcador
        icon: {
          // forma circular, cor e tamanho
          path: google.maps.SymbolPath.CIRCLE,
          strokeColor: "black",
          scale: 8
        }
      })
      
      // carrega coordenadas em um text box, para testes, não apagar
      document.getElementById('latLabel').value= position.coords.latitude
      document.getElementById('longLabel').value= position.coords.longitude

      // carrega o mapa de fato na pagina
      map= new google.maps.Map(document.getElementById('map'), mapOptions);
      //carrega o marcador no mapa
      marcardor.setMap(map);
    }
  )} 
  else {
    alert("ERRO AO CARREGAR")
  }

  

}

// função responsavel por carregar o marcador de problema critico
// mesmas variaveis citadas anteriormente
function setMarcCritico(){
  
  if('geolocation' in navigator){
    navigator.geolocation.getCurrentPosition(function(position){    

      var imagem = "icones/bolinha vermelha.png"
      const novoMarcador = new google.maps.Marker({
        position:  {lat: position.coords.latitude, lng: position.coords.longitude},
        map,
        title: "Estado critico",
        icon: {
          path: google.maps.SymbolPath.CIRCLE,
          strokeColor:"red",
          scale: 8
        },
      })
      
      novoMarcador.setMap(null)
      novoMarcador.setMap(map)
      
    })
  
    
  }

}

// função responsavel por carregar o marcador de problema regular
// mesmas variaveis citadas anteriormente
function setMarcRegular(){
  
  if('geolocation' in navigator){
    navigator.geolocation.getCurrentPosition(function(position){    

      
      const novoMarcador = new google.maps.Marker({
        position:  {lat: position.coords.latitude, lng: position.coords.longitude},
        map,
        title: "Estado critico",
        icon: {
          path: google.maps.SymbolPath.CIRCLE,
          strokeColor:"yellow",
          scale: 8
        },
      })
      
      novoMarcador.setMap(null)
      novoMarcador.setMap(map)
    })
      
  }
}


// desconsiderar essa parte, função que foi inultilizada
function finalizar(){


  if(document.getElementById('estCrit').checked == false || document.getElementById('estReg').checked == false){

    alert('Por favor selecione o estado do poste')
    return false;

  }
  else if(document.getElementById('comentTxt').value == ''){
    alert("Por favor descreva o problema")
    return false;

  }
  else{
    
    alert('Registrado com Sucesso! Obrigado por usar nosso sistema!!!')
    return true
  }

  return false;
}

