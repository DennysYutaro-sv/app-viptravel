@extends('public.layouts.appublic')
@section('content')
<script language="javascript">
function changeCheck1(){
    c1 = document.querySelector("#check1");
    if(c1.checked){
        checkChannel();
    }
    else{
        checkChannel();
    }
}
function checkChannel(){
    c1 = document.querySelector("#check1");
    if (c1.value == "1" ) {
        c1.value = "0";
        //console.log(cR.value);
    }
    else{
        c1.value = "1";
    }
    
}
function changeCheck2(){
    c2 = document.querySelector("#check2");
    if(c2.checked){
        checkChannel2();
    }
    else{
        checkChannel2();
    }
}
function checkChannel2(){
    c2 = document.querySelector("#check2");
    if (c2.value == "1" ) {
        c2.value = "";
    }
    else{
        c2.value = "1";
    }
}
</script>
<div class="slider-destino">
  <!-- fade css -->
      <div class="myslide-destino">
          <div class="txt-destino fade-destino">
              <h3> Blog&nbsp&nbsp&nbsp&nbsp </h3>
              <p> “¿Qué visitar en Cusco?”. </p>
          </div>
          <img class="img-slide-destino" src="{{asset('landing/assets/img/blog/blog-items/lugar3.jpg')}}" style="width: 100%; height: 100%;">
      </div>
  </div>


  <section class="details" id="details">
    
    <div class="box-container">
        
        <div class="box big">
            <div class="blog-items">

                <div class="product-name">
                    <h2>¿Qué visitar en Cusco?</h2>
                    <p>ABRIL 17, 2022.</p>
                    <br>
                    <hr class="hr-yellow-s">
                    <br>
                </div>
                <div class="description">
                    <p>
                        Cusco ciudad con mucho encanto y capital de nuestra 7 maravilla del mundo. Para ayudarte a organizar tu próximo viaje te presento mi guía de Cusco con más de 25 actividades turísticas de interés para conocer:   
                    </p>
                </div>
                <div class="blog-item-description">
                    <br>
                    <div>
                        <button class="accordionb">1.- PLAZA DE ARMAS DE CUSCO </button>
                        <div class="panelb">
                          <p>La plaza de armas del Cusco fue antiguamente un pantano, durante el incanato fue drenado y secado el cual se transformo en el centro administrativo, religioso y cultural de la capital del imperio de los Incas. Luego de la conquista fue ocupada por los españoles quienes construyeron templos y mansiones sobre los palacios Incas que se encuentran alrededor de esta plaza, en este lugar fue ejecutado Tupac Amaru II en 1781. Actualmente es la plaza principal del Cusco moderno el cual esta rodeado por diferentes tipos de negocios hoteles, restaurantes, agencias de viaje, etc. Y los templos de la época de la conquista.
                        Para saber mas de su historia puedes tomar un city tour en el cual podrás conocer toda la historia de la plaza de armas, la catedral, el templo del Koricamcha, y los 4 centros arqueológicos a las afueras de la ciudad.
                        </p>
                        </div>
                    </div>
                    
                    <br>
                    <div>
                        <button class="accordionb">2.- LA CATEDRAL </button>
                        <div class="panelb">
                          <p>
                              Está ubicada en el noreste de la plaza de armas del Cusco con un área de 3956 m.
Llamada también Catedral Basílica de la Virgen de la Asunción, junto al templo de la Sagrada Familia y los templos del Triunfo forman el conjunto de la Catedral, en la época del incanato la plaza de armas estaba rodeado por palacios Incas el Kiswarcancha pertenecía al Inca Wiracocha a su costado se encontraba un edifico circular llamado Suntur Wasi que era una casa de armas o escudos posterior a la conquista de los españoles este lugar se designó para la construcción de iglesias. En 1560 luego de las donaciones de los terrenos empieza la construcción de la catedral, su estructura arquitectónica consta de 3 naves: nave de la epistola, nave del evangelio y nave central asi mismo tiene 14 pilares cruciformes las mismas que defines la distribución de las 24 bóvedas de nervadura.
Tiene un altar Mayor está cubierto de plata aprox. De 1 pulgada de espesor, cuenta con un coro hecho de madera de cedro también se encuentran pinturas de la escuela cusqueña donde resalta el cuadro de la última cena en la cual se puede apreciar el cuy andino y frutos de la región.

                          </p>
                        </div>
                    </div>
                    <br>
                    <div>
                        <button class="accordionb">3.- BASILICA DE LA MERCED DE CUSCO</button>
                        <div class="panelb">
                          <p>
                              Está ubicada al frente de la plazoleta Espinar a 250 m. aprox. De la plaza de armas de Cusco. Los terrenos fueron donados por Francisco Pizarro ubicados en la plaza Cusipata y se inició la construcción en 1535 de la casa y templo en un principio fue una construcción modesta en este lugar fueron sepultados Diego de Almagro (padre e hijo) y Gonzalo Pizarro en el siglo XVI.
En 1650 un terremoto causo destrozos y entre los años 1651 – 1659 del mismo siglo se construyó la segunda estructura con un nuevo estilo que paso de renacentista a Barroco Cusqueño la cual permanece hasta la fecha.
La iglesia en su interior conserva colecciones de lienzos importantes entre ellos la custodia, una pieza hecha de oro, plata y piedras preciosas pesa más de 22 kilogramos (una de las piezas mas valiosas del Perú y Sudamérica).
En la actualidad este lugar ofrece distintos tipos de eventos misas, matrimonios, aniversarios, etc.

                          </p>
                        </div>
                    </div>
                    <br>
                    <div>
                        <button class="accordionb">4.- TEMPLO DEL KORICANCA Y LA BASÍLICA DE SANTO DOMINGO</button>
                        <div class="panelb">
                          <p>
                              Esta ubicado a 2 cuadras de la plaza de armas del Cusco al interior del templo de Santo Domingo.
Koricancha significa lugar recubierto por oro y plata, fue el lugar más sagrado de los Incas en este lugar encontramos los templos del Arcoíris, Illapa (Rayo, Trueno y Relanpago), las Estrellas, la Luna y el templo del Sol, aquí se encontraron los cuerpos de los Incas gobernantes momificados y fueron destrozados, en este lugar se realizaba la fiesta del Inti Raymi y en la actualidad se sigue la tradición.
                          </p>
                        </div>
                    </div>
                    <br>
                    <div>
                        <button class="accordionb">5.- BARRIO DE SAN BLAS</button>
                        <div class="panelb">
                          <p>
                              Toco Cachi el barrio más antiguo de los Incas y también conocido como el barrio de los artesanos, sus calles albergan cantidad de historia, tradición y cultura está ubicado a cuatro cuadras de la plaza de armas puedes llegar por la calle de Hatun Rumiyoc.
                          </p>
                        </div>
                    </div>
                    <br>
                    <div>
                        <button class="accordionb">6.- MERCADO DE SAN PEDRO</button>
                        <div class="panelb">
                          <p>
                              Está ubicado muy cerca de la plaza de armas este mercado fue construido por Gustav Eiffel en 1925 el mismo que construyo la famosa torre Eiffel de Paris, en este lugar podrás observar platos típicos, artesanía a bajos costos, ropa tradicional, la venta de muchos productos agrícolas sus tradiciones y la cultura del poblador Cusqueño.
                          </p>
                        </div>
                    </div>
                    <br>
                    <div>
                        <button class="accordionb">7.- MUSEO DE MACHUPICCHU</button>
                        <div class="panelb">
                          <p>
                              Museo de sitio de Machupicchu diseñado en los años 60 – 70 por Manuel Chavez Ballon propone y ejecuta la construcción del inmueble cuyo fin seria la apertura del Museo de Sitio este proyecto se hizo realidad gracias a la donación económica de la Sra. Anita Fernandini de Naranjo.
Este museo muestra en cada una de sus salas información cronológica de la construcción de Machupicchu, cerámicas, y objetos líticos hallados en la ciudadela.Esta ubicado en el km 112 de la vía férrea, a ½ hora del pueblo de Aguas Calientes en la ruta hacia la ciudadela de Machupicchu.

                          </p>
                        </div>
                    </div>
                    <br>
                    <div>
                        <button class="accordionb">8.- MUSEOS DE CUSCO</button>
                        <div class="panelb">
                          <p>
                              Cusco posee gran numero de museos que nos muestran diferentes culturas que reúnen valiosos vestigios arqueológicos y piezas de arte.
                                Te mencionamos algunos de estos museos para que puedas conocer muchos de estos museos se encuentran cerca a la plaza de armas de Cusco:

                          </p>
                          <br>
                          <p>
                              <li>MUSEO INKA DE LA UNIVERSIDAD SAN ANTONIO ABAD.</li>
                              <li>MUSEO DE ARTE PRECOLOMBINO.</li>
                              <li>MUSEO Y CONVENTO DE SAN FRANCISCO.</li>
                              <li>MUSEO DEL TEMPLO DEL KORICANCHA.</li>
                              <li>MUSEO DE ARTE CONTEMPORANEO, MUNICIPALIDAD DEL CUSCO.</li>
                              <li>MUSEO DEL CONVENTO DE LA MERCED.</li>
                          </p>
                        </div>
                    </div>
                    <br>
                    <div>
                        <button class="accordionb">9.- MUSEO DE LA SAGRADA HOJA DE LA COCA</button>
                        <div class="panelb">
                          <p>
                              Esta ubicado en la cuesta del barrio de San Blas N°618, en este lugar encontrarás toda la información sobre el origen de esta sagrada hoja de la coca desde tiempos ancestrales y el uso que le daban los Incas por sus propiedades medicinales y en sus ceremonias religiosas. Actualmente es muy utilizado por la gente para sanar el mal de altura o soroche tomando un te de hoja de coca, puedes encontrar productos hechos con esta hoja como galletas, chocotejas, licores etc.
Este museo ofrece una experiencia mística como es lectura de la hoja de la coca con personas que tienen el don de leer el pasado, presente y futuro.

                          </p>
                        </div>
                    </div>
                    <br>
                    <div>
                        <button class="accordionb">10.- CHOCO MUSEO</button>
                        <div class="panelb">
                          <p>
                              Esta ubicado en la calle Garcilaso N°210 y en la calle de Hatun Rumiyoc costado de la piedra de los 12 Ángulos, este lugar es dedicado al cacao y chocolate Cusqueño podrás conocer las características, historia y sus derivados del grano de cacao. Este museo cuenta con una fabrica de chocolate artesanal donde realizan una gran variedad de chocolates de granos orgánicos.
                          </p>
                        </div>
                    </div>
                    <br>
                    <div>
                        <button class="accordionb">11.- MIRADOR DE CRISTO BLANCO</button>
                        <div class="panelb">
                          <p>
                              Está ubicado a las afueras del Cusco puedes ir en carro o también caminando, desde este lugar se observa la plaza de armas y sus principales lugares turísticos puedes visitarlo de día o de noche, de este lugar puedes ver la explanada del centro arqueológico de Sacsayhuaman.
                          </p>
                        </div>
                    </div>
                    <br>
                    <div>
                        <button class="accordionb">12.- LA PIEDRA DE LOS 12 ÁNGULOS</button>
                        <div class="panelb">
                          <p>
                              Es uno de los lugares más famosos y turísticos en Cusco, ubicado a 2 cuadras de la plaza de armas subiendo por la calle triunfo hasta llegar a la parte media de la calle Hatun Rumiyoc es un pasaje de grandes rocas es aquí donde se encuentra la gran piedra de los Doce Ángulos, durante la época Inca formaba parte del palacio de Sinchi Roca en la actualidad es parte del Palacio Arzobispal.
                          </p>
                        </div>
                    </div>
                    <br>
                    <div>
                        <button class="accordionb">13.- MORADA DE LOS DIOSES -APUKUNAQ TIANAN.</button>
                        <div class="panelb">
                          <p>
                              Está ubicado a 13 km de la plaza de armas de Cusco a 3450msnm por el arco de Tica Tica del distrito de Poroy. El nombre de este lugar proviene del vocablo quechua que significa Morada de los Dioses. 
                          </p>
                        </div>
                    </div>
                    <br>
                    <div>
                        <button class="accordionb">14.- FARALLONES Y LA CATARATA DE TECSECOCHA</button>
                        <div class="panelb">
                          <p>
                              Los farallones son enormes formaciones rocosas originado por la erosión y movimiento de las placas tectónicas con el pasar del tiempo, alcanzan una altura de 40 a 100m. este lugar comprende miradores naturales donde podrá observar todo el hermoso paisaje que lo rodea y el poblado de Ccorca, Tecsecocha y Cusco.
Según algunos historiadores este lugar fue utilizado como un sitio asentamiento humanos y posteriormente por los Incas para el descanso de sus momias por la cual se encontraron muchas tumbas, actualmente las tumbas de Tecsecocha en Ccorca pueden ser visitadas.
Existen pequeñas entradas alrededor de los Farallones el cual te conducen al interior en la cual podrá apreciar pinturas rupestres de los años 2000 – 2500 a.c. que datan de los primeros pobladores de Cusco.
En este lugar existe una hermosa catarata de mas de 50 m aprox. la cual está rodeada por las plantas nativas.
Esta ubicado a 45 minutos de la ciudad del Cusco al noreste y a 500m del poblado de Ccorca sobre los 3600msnm.
Puede visitar en cualquier fecha del año, de preferencia en la época de sequía abril - octubre entre.

                          </p>
                        </div>
                    </div>
                    <br>
                    <div>
                        <button class="accordionb">15.- MARAS (SALINERAS) – MORAY</button>
                        <div class="panelb">
                          <p>
                              <b>Moray: </b> Conocido como el invernadero Inca, esta zona arqueológica destaca por sus andenes circulares y cuenta con un sistema de regadío, fue utilizado como un centro de investigación agrícola y la adaptación de plantas en los diferentes pisos ecológicos.
Esta ubicado a 7km al oeste del pueblo de maras y a una altitud de 3500msnm.

                          </p>
                          <p>
                              <b>Maras – Salineras: </b> Cuenta con más de 3000 pozos pequeños que están siendo trabajados en una ladera de la quebrada cuenta la leyenda que estos pozos son productos de las lágrimas de Ayar Cachi (Cachi es un término Quechua que significa sal) en la actualidad es famosa por la sal rosada que se recolecta.
Se ubica a 74 km de la ciudad del Cusco a 20 minutos del pueblo de Maras.


                          </p>
                        </div>
                    </div>
                    <br>
                    <div>
                        <button class="accordionb">16.- LAGUNA DE HUMANTAY</button>
                        <div class="panelb">
                          <p>
                              La palabra Humantay proviene del vocablo Quechua que significa Cabeza de Dioses y la palabra Salkantay Montaña Salvaje.
Cuenta la leyenda que la laguna Humantay se origina donde 2 hermanos llamados Humantay y Ausangate donde ellos viajan a tierras desconocidas para poder conseguir alimentos para su pueblo.
Ausangate viajo con dirección al sur mientras que Salkantay fue al norte Ambos encontraron alimentos para su pueblo y enviaron a Cusco, sin embargo Salkantay también encontró el amor en la Diosa Verónica este romance no tuvo un final feliz pues los hermanos tenían que regresar a sus orígenes para frenar la sequie que su pueblo sufría y por esa razón se convirtieron en nevados, el llanto, dolor y tristeza del Apu Salkantay da origen a la Laguna Humantay que hoy por hoy tiene aguas cristalinas de color turquesa que parece un espejo de agua la cual te conecta con la naturaleza  rodeado de paisajes hermosos.

                          </p>
                        </div>
                    </div>
                    <br>
                    <div>
                        <button class="accordionb">17.- CATARATAS DE PEROLNIYOC Y LAS RUINAS DE RAQAYPATA</button>
                        <div class="panelb">
                          <p>
                              Tiene una caída de más de 100 m. aprox. La cual forma un hermoso velo blanco de aguas cristalinas esta a una altitud de 3460 msnm.
Las ruinas de Raqaypata esta ubicada sobre la cima de dicha catarata este centro arqueológico es de la época del Incaica y fue utilizado como almacen , granero y como un lugar administrativo, está a 3560msnm.
Está ubicado a ½ hora de caminata de la comunidad de Socma, cerca al poblado de Ollantaytambo, provincia de Urubamba y departamento del Cusco.
Se puede visitar todo el año, recomendable en los meses de abril – octubre.

                          </p>
                        </div>
                    </div>
                    <br>
                    <div>
                        <button class="accordionb">18.-PUENTE DE QUESHUACHACA – ULTIMO PUENTE INCA COLGANTE</button>
                        <div class="panelb">
                          <p>
                              Ubicado sobre el río Apurímac al sur del Cusco, tiene una distancia de casi 30 m. esta tejido completamente de paja o ichu (en quechua) al ser de ese material cada año se realiza la renovación en la segunda semana del  mes de junio de cada año tiene una duración de 3 años y el 4 día se hace la inauguración con festival folklorico y se puede cruzar, al visitar Quehuachaca también verás otros atractivos como las cuatro lagunas,  Pomacanchi, Acopia, Asnaqocha y Pampamarca y un hermoso volcán que se llama Pabellones, localizada muy cerca de la pequeña ciudad de Combapata. 
Los comuneros encargados de la reconstrucción son Hunchiri, Chaupibanda, Choccayhua y Ccollana Quehue, todos pertenecen a la provincia de Canas. 

                          </p>
                        </div>
                    </div>
                    <br>
                    <div>
                        <button class="accordionb">19.- TURISMO VIVENCIAL EN CUSCO</button>
                        <div class="panelb">
                          <p>
                              Es una nueva alternativa que se le ofrece al visitante en un proceso de encuentro y dialogo de dos culturas diferentes, tiene la finalidad que el turista deje de ser un observador y pase a ser parte inclusiva de la vida diaria de los pobladores en los lugares donde visitan.
                          </p>
                          <br>
                          <p>
                              <li>Convivencia en la comunidad de Misminay (Moray).</li>
                              <li>Convivencia en la comunidad de Willoq Ollantaytambo).</li>
                              <li>Convivencia en la comunidad Amaru (Pisac).</li>
                              <li>Convivencia en la comunidad de Raqchi.</li>
                          </p>
                        </div>
                    </div>
                    <br>
                    <div>
                        <button class="accordionb">20.- EL CAÑON DEL CONDOR (CHONTA - APURIMAC)</button>
                        <div class="panelb">
                          <p>
                              Está ubicado a 98 km y a 3450 msnm al noreste de Cusco en el distrito de Limatambo en el poblado de Chonta a 1 ½ hora de caminata aprox. Desde que nos deja la unidad de transporte tiene una vista impresionante del valle del rio Apurímac, su longitud es como del rio Amazonas, en el lugar se puede apreciar el vuelo del Condor Andino en todo su esplendor y habitad, podrá disfrutar de su hermosa vegetación.
                          </p>
                        </div>
                    </div>
                    <br>
                    <div>
                        <button class="accordionb">21.- EL CAÑON DE SUYCUTAMBO</button>
                        <div class="panelb">
                          <p>
                              Los 3 cañones de Suycutambo se encuentran a 241km al sur del Cuso con un área de casi 40 hectáreas a más 4000msnm. son una maravilla de la propia naturaleza del viento, la lluvia, los ríos y el tiempo estos cañones tienen una altura de más de 80 metros cuyas sombras reflejan diferentes figuras de animales y humanos con un poco de imaginación observaremos muchas figuras.
Por estos cañones están rodeados por los ríos del Apurimac, Callumani y Cerritambo también encontrara lugares arqueológicos de diferentes culturascomo la de Huari, Tiahuanaco o de los Incas.

                          </p>
                        </div>
                    </div>
                    <br>
                    <div>
                        <button class="accordionb">22.- El CAÑON DE ANANISO</button>
                        <div class="panelb">
                          <p>
                              Se ubica a 4200msnm en el poblado de Ananiso, distrito de Pitumarca provincia de Canchis departamento del Cusco, tiene un área de 3KM y una profundidad de 150 m. por donde pasa el rio Ananiso, este cañón fue creado por la naturaleza por medio de erosiones hace millones de años.
Su característica más importante es la elevada tasa de erosion laminar que tienen en la parte alta donde las superficies rocosas han sido meteorizadas y craqueladas con el retiro glaciar dejando descubierta la superficie fisiográfica, se puede realizar diferentes actividades turísticas en el lugar como es pesca deportiva, escalada en roca palestra, camping, trekking, etc. 

                          </p>
                        </div>
                    </div>
                    <br>
                    <div>
                        <button class="accordionb">23.- QUELCCAYA, EL GLACIAR EN CUSCO</button>
                        <div class="panelb">
                          <p>
                              Cuenta la leyenda que este lugar maravilloso esta protegido por un Machu Runa (hombre viejo en quechua) vestido con su poncho blanco que protege todos los alrededores de dicho nevado para que nadie se acerque a destruirlo.
El glaciar Quelccaya se ubica al sureste de Perú, a más de 5600 m.s.n.m y se asienta sobre la cordillera del Vilcanota, siendo una prolongación de la cordillera de los Andes. Es considerado el más extenso de toda la zona tropical del mundo. Este gigante blanco, también es llamado Capa de Hielo Quelccaya, con una longitud que supera los 17 km, una superficie de 44 km² y una capa de hielo de 200 m de espesor.

                          </p>
                        </div>
                    </div>
                    <br>
                    <div>
                        <button class="accordionb">24.- BAÑOS TERMALES DE LARES</button>
                        <div class="panelb">
                          <p>
                              Se encuentra a 3 horas de Cusco aprox. A 3250msnm, estas aguas termales son conocido por sus propiedades curativas musculares, articulares, estomacales y óseas es visitados por muchos que buscan recuperar su salud, si desea pernoctar hay hostales y lugares para acampar en su zona de campamento, en este lugar podremos conocer sus paisajes andinos gracias a los nevados que lo rodean, así como la Veronica, Sawasiray, Pitusiray y el Chicon.
                          </p>
                        </div>
                    </div>
                    <br>
                    <div>
                        <button class="accordionb">25.- BAÑOS TERMALES DE CHIMUR</button>
                        <div class="panelb">
                          <p>
                              Esta ubicado en el distrito de Challabamba a 59 km de la provincia de Paucartambo a 4 horas de recorrido por la ruta asfaltada de Cusco – Calca- Ampares (camino trocha carrozable)– Chimur, sus aguas son cristalinas y transparentes tienen una temperatura aprox. 46° - 53° centígrados es muy concurridos por sus propiedades curativas para las enfermedades reumáticas, óseas, etc. 
En este lugar no tienen energía eléctrica tampoco señal de telefonía, solo cuenta con un pequeño hostal de 3 habitaciones, si deseas quedarte una noche puedes acampar tienen una zona de canping y brindan alimentación básica, cuenta con servicio de desagüe y agua no potable.
Recomendable viajar por 1 día saliendo muy temprano de madrugada llevando sus propios alimentos pasar un día increíble y retornar a descansaren casa.

                          </p>
                        </div>
                    </div>
                    <br>
                    <div>
                        <button class="accordionb">26.- EL INTI PUNKU O PUERTA DEL SOL</button>
                        <div class="panelb">
                          <p>
                              Está ubicado a 2745msnm. Inti Punku o Puerta del Sol esta puerta fue una especie de control de las personas que salían y entraban de la ciudadela Inca de Machu Picchu por su ubicación estratégica con la cual fue diseñada, de este lugar se puede observar la ciudad completa de Machu Picchu, el rio Urubamba, la montaña del Huayna Picchu y sus alrededores, esta es la entrada de las personas que realizan la caminata de camino inca, tiempo 2 horas aprox. De subida y bajada no es muy empinada la caminata tiene escalones amplios.
                          </p>
                        </div>
                    </div>
                    <br>
                    <div>
                        <button class="accordionb">27.- CENTRO ARQUEOLÓGICO DE MACHUPICCHU LA SÉPTIMA MARAVILLA</button>
                        <div class="panelb">
                          <p>
                              Año tras año, Cusco se clasifica constantemente como una de las principales ciudades gastronómicas del Perú por una buena razón. La accesibilidad a productos agrícolas frescos del valle de Urubamba, esto facilita que los restaurantes de la zona obtengan ingredientes de calidad sin importar la época del año. La escena culinaria también es tremendamente diversa y ofrece de todo, desde la exquisita pachamanca hasta el choclo con queso clásico y sencillo. Y con más de 50 restaurantes repartidos por toda la ciudad, es difícil discutir lo asequible y conveniente que es la comida en Cusco.

Dado que comer muy bien en Cusco es la norma, y no la excepción, más adelante hay diez lugares que te harán vibrar por la ciudad incluso después de tu partida.

                          </p>
                        </div>
                    </div>
                    <br>
                    
                    
                </div>
            </div>
        </div>

        <div class="box">
        <br>
            <div class="contact-detail" id="contact">
            <div class="row">
                <div class="contact-detail-title">
                    <h4>! Realice su reserva !</h4>
                </div>
                
                <form id="formCreate" data-url="{{ route('nosotros.store') }}" method="POST">
                @csrf
                    <div class="inputBox">
                        <select name="tour" class="contact-select">
                            <option value="">Elige el tour de tu interes</option>
                            @foreach($tours as $tour)
                                <option value="{{ $tour->name }}">{{ $tour->name }}</option>
                            @endforeach
                            <option value="Otros">Otros(Por favor detalle).</option>
                            </select>
                    </div>
                    <div class="inputBox">
                        <input type="text" placeholder="Nombre" name="name">
                    </div>
                    <div class="inputBox">
                        <input name="email" type="email" placeholder="Gmail">
                    </div>
                    <div class="inputBox">
                        <input name="phone" type="number" placeholder="Número de contacto">
                    </div>
                    <div class="inputBox">
                        <p style="font-size: 1.5rem;font-weight: bold; color: #333;">&nbsp📆 Fecha de llegada: </p>
                        <input value="" name="arrive" type="date" id="dateA" placeholder="📆 Fecha de llegada" >
                    </div>
                    <div class="inputBox">
                        <p style="font-size: 1.5rem;font-weight: bold; color: #333;">&nbsp📆 Fecha de salida: </p>
                        <input name="departure" type="date" id="dateD" placeholder="📆 Fecha de salida">
                    </div>
                    <div class="inputBox">
                        <select name="adults" class="contact-select">
                            <option value="">Número de dultos</option>
                            <option value="1">1 adulto</option>
                            <option value="2">2 adultos</option>
                            <option value="3">3 adultos</option>
                            <option value="4 a más">4 a más adultos</option>
                            </select>
                    </div>
                    <div class="inputBox">
                        <select name="children" class="contact-select">
                            <option value="">Número de niños</option>
                            <option value="Ninguno">Ninguno</option>
                            <option value="1">1 niño</option>
                            <option value="2">2 niños</option>
                            <option value="3">3 niños</option>
                            <option value="4 a más">4 a más niños</option>
                            </select>
                    </div>
                    <div class="inputBox">
                        <select name="nationality" class="contact-select">
                            <option value="">Nacionalidad</option>
                            <option value="Extranjero">Extranjero</option>
                            <option value="Peruano o residente">Peruano o residente</option>
                            <option value="Comunidad Andina de Naciones">Colombia, Ecuador y Bolivia(Comunidad Andina de Naciones)</option>
                            </select>
                    </div>
                    
                    <textarea placeholder="Consultas adicionales" name="additional" id="" cols="30" rows="10"></textarea>

                    <input name="receive" type="checkbox" class="checke" id="check1" value="1" checked onchange="changeCheck1()">
                    <label for="check1">Desea recibir ofertas y descuentos exclusivos</label>
                    <br>
                    <input name="authorize" type="checkbox" class="checke" id="check2" value="1" checked onchange="changeCheck2()">
                    <label for="check2">Autorizo el uso de mis datos</label>

                    <div class="position-btn">
                        <input  type="submit" class="btn" value="RESERVAR AHORA">
                    </div>
                </form>
        
            </div>
                    <!--
                    <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/CuzcoPeruTrips" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=368&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FCuzcoPeruTrips&amp;locale=es_LA&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false"><span style="vertical-align: bottom; width: 340px; height: 130px;"><iframe name="f3e7a2fdbcba9b8" width="1000px" height="1000px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.7/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Dfe887c55c27268%26domain%3Dwww.cuscoperutrips.com%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fwww.cuscoperutrips.com%252Ff1d178e9f8907cc%26relation%3Dparent.parent&amp;container_width=368&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FCuzcoPeruTrips&amp;locale=es_LA&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false" style="border: none; visibility: visible; width: 340px; height: 130px;" class=""></iframe></span></div>
                    -->
                </div>
            </div>
        
    </div>
    <br>
    <!-- Add images to <div class="fotorama"></div> -->
    <hr class="hr-gray">
</section>
<script>

  $(document).ready(function() {
    /*Para abrir las secciones del blog*/
    var acc = document.getElementsByClassName("accordionb");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function(){
            this.classList.toggle("active");
            this.nextElementSibling.classList.toggle("show");
        }
    }
    /*----------------------------------------------------*/
    var fecha = new Date(); //Fecha actual
    fecha.setDate(fecha.getDate() + 5);
    var mes = fecha.getMonth()+1; //obteniendo mes
    var dia = fecha.getDate(); //obteniendo dia
    var ano = fecha.getFullYear(); //obteniendo año
    if(dia<10)
        dia='0'+dia; //agrega cero si el menor de 10
    if(mes<10)
        mes='0'+mes //agrega cero si el menor de 10
    document.querySelector("#dateA").min=ano+"-"+mes+"-"+dia;

    var fecha2 = new Date(); //Fecha actual
    fecha2.setDate(fecha2.getDate() + 5);
    var mes2 = fecha2.getMonth()+1; //obteniendo mes
    var dia2 = fecha2.getDate(); //obteniendo dia
    var ano2 = fecha2.getFullYear(); //obteniendo año
    if(dia2<10)
        dia2='0'+dia2; //agrega cero si el menor de 10
    if(mes2<10)
        mes2='0'+mes2 //agrega cero si el menor de 10
    document.querySelector("#dateD").min=ano2+"-"+mes2+"-"+dia2;
    //Crear reserve
    $formCreate = $('#formCreate');
    $formCreate.on('submit', sendData);
  });

//--------------------------------Crear cliete------------------------------
var $formCreate;

function sendData() {
    event.preventDefault();
    // Obtener la URL
    var createUrl = $formCreate.data('url');
    $.toast({
        text: 'Procesando.',
        showHideTransition: 'slide',
        bgColor: '#27358d',
        allowToastClose: false,
        hideAfter: 6000,
        stack: 10,
        textAlign: 'left',
        position: 'top-right',
        icon: 'info',
        heading: 'Enviando, espere por favor.'
    });
    
    $.ajax({
        url: createUrl,
        method: 'POST',
        data: new FormData(this),
        processData:false,
        contentType:false,
        success: function (data) {
            if (data != "") {
                for ( var property in data )  {
                    $.toast({
                        text:data[property],
                        showHideTransition: 'slide',
                        bgColor: '#D15B47',
                        allowToastClose: false,
                        hideAfter: 6000,
                        stack: 10,
                        textAlign: 'left',
                        position: 'top-right',
                        icon: 'error',
                        heading: 'Error'
                    })
                }
            } else {
                
                $.toast({
                    text: 'Su reversa ha sido enviada, en unos momentos le llegará un mensaje de confirmación a su correo. Nos pondremos en contacto con usted.',
                    showHideTransition: 'slide',
                    bgColor: '#629B58',
                    allowToastClose: false,
                    hideAfter: 5000,
                    stack: 10,
                    textAlign: 'left',
                    position: 'top-right',
                    icon: 'success',
                    heading: 'Éxito'
                });
                setTimeout( function () {
                  url = "{{route('inicio')}}";
                  $(location).attr('href',url);
                }, 5000 )
            }
        }
    });
}
</script>
@include('public.partials.destinies')  
@endsection('content')