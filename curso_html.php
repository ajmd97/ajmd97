<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" type="image/png" href="./images/favicon.png">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/png">
    <title>Curso Definitivo de HTML y CSS - Platzi</title>
    <script type="text/javascript">
        function toggle(obj) {
        var obj=document.getElementById(obj);
        if (obj.style.display == "block") obj.style.display = "none";
        else obj.style.display = "block";
        }
    </script>
</head>
<body>
<?php include "./header.php";?>
<div class="container">
<div class="c_ph_100 c_tb_100 c_sc_75 c_bsc_75 article">
    <h1>Curso Definitivo de HTML y CSS - Platzi</h1>
    <h2><a href="javascript: void(0);" onClick="toggle('menu100')">1. Web Developer Fundamentals</h2></a>
        <span id="menu100" style="display:none;">
            <h3><a href="javascript: void(0);" onClick="toggle('menu110')">1.1. Bienvenida</h3></a>
                <span id="menu110" style="display:none;">
                    <p>Veremos 2 estándares de los 3 que se usan en el desarrollo web: HTML y CSS</p>
                </span>
        </span>
    <h2><a href="javascript: void(0);" onClick="toggle('menu200')">2. Perfiles de un web developer</h2></a>
        <span id="menu200" style="display:none;" >
            <h3><a href="javascript: void(0);" onClick="toggle('menu210')">2.1. Fronted</h3></a>
                <span id="menu210" style="display:none;">
                    <p>Es el desarrollador que maneja la parte visual, la parte del cliente (navegador)</p>
                    <ul>
                        <li>Interacciones</li>
                        <li>Animaciones</li>
                        <li>Estilos</li>
                        <li>Navegación</li>
                    </ul>
                    <h4><a href="javascript: void(0);" onClick="toggle('menu211')">2.1.1. Estándares que maneja un front</h4></a>
                        <span id="menu211" style="display:none;">
                            <ul>
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>JavaScript</li>
                            </ul> 
                        </span>
                    <h4><a href="javascript: void(0);" onClick="toggle('menu212')">2.1.2. Frameworks CSS</h4></a>
                        <span id="menu212" style="display:none;" class="">                        
                            <p>Los frameworks nos ayudan a la hora de construir nuestro proyecto. Son ciertos fragmentos de código para acortar la creación de un producto. Algunos son:</p>
                            <ul>
                                <li>Boostrap</li>
                                <li>Tailwind CSS</li>
                                <li>Foundation</li>
                            </ul>
                        </span> 
                    <h4><a href="javascript: void(0);" onClick="toggle('menu213')">2.1.3. Frameworks y librerías JS</h4></a>
                        <span id="menu213" style="display:none;"> 
                            <p>Son productos que nos permiten escalar nuestro proyecto a producción de una forma más rápida y con una mayor interacción. Algunos son:</p>
                            <ul>
                                <li>React</li>
                                <li>Angular</li>
                                <li>Vue</li>
                            </ul>
                        </span>
                    <h4><a href="javascript: void(0);" onClick="toggle('menu214')">2.1.4. Preprocesadores CSS</h4></a>
                        <span id="menu214" style="display:none;"> 
                            <p>Es una forma diferente de hacer CSS. Algunos lo denominan que es usar "css con superpoderes"</p>
                            <ul>
                                <li>Less</li>
                                <li>Stylus</li>
                                <li>Sass</li>
                            </ul>
                        </span>
                    <h4><a href="javascript: void(0);" onClick="toggle('menu215')">2.1.5. Compilador/Empaquetador</h4></a>
                        <span id="menu215" style="display:none;"> 
                            <p>Estos programas nos permiten usar las últimas versiones de JAvaScript (Siempre debemos usar las últimas versiones de JS, es muy buena práctica) mediante un proceso de complilado para que el navegador lo entienda</p>
                            <ul>
                                <li>Babel</li>
                                <li>Webpack</li>
                            </ul>
                        </span>
                </span>
            <h3><a href="javascript: void(0);" onClick="toggle('menu220')">2.2. Backend</h3></a>
                <span id="menu220" style="display:none;">
                    <p>El desarrollador backend es aquel que trabaja del lado del servidor. Maneja toda la lógica sobre cómo encontrar a los usuarios y demás funciones. Un back no suele necesitar estándares, este puede manejar diferentes tecnología y lenguajes de programación.</p>
                    <h4><a href="javascript: void(0);" onClick="toggle('menu221')">2.2.1. Lenguajes de programación</h4></a>
                        <span id="menu221" style="display:none;">
                            <ul>
                                <li>Python</li>
                                <li>Node.js</li>
                                <li>PHP</li>
                                <li>Ruby</li>
                                <li>Go</li>
                                <li>Java</li>
                                <li>.Net</li>
                            </ul>
                        </span>
                    <h4><a href="javascript: void(0);" onClick="toggle('menu222')">2.2.2. Frameworks</h4></a>                  
                        <span id="menu222" style="display:none;">
                            <ul>
                                <li>Django para Python</li>
                                <li>Laravel para PHP</li>
                                <li>Rails para Ruby</li>
                                <li>Express para Node.js</li>
                                <li>Spring para Java</li>
                            </ul>
                        </span>
                    <h4><a href="javascript: void(0);" onClick="toggle('menu223')">2.2.3. Infraestructura</h4></a>
                        <span id="menu223" style="display:none;">
                            <p>La infraestructura o nube es usada para temas de deploy. Esto puede que no haga parte del backend, sin embargo es necesario tener conocimientos de ellas. De aquí puede salir un perfil llamado DevOps.</p>
                            <ul>
                                <li>Google Cloud</li>
                                <li>Digital Ocean</li>
                                <li>AWS</li>
                                <li>Heroku</li>
                            </ul>
                        </span>
                    <h4><a href="javascript: void(0);" onClick="toggle('menu224')">2.2.4. Bases de datos</h4></a>
                        <span id="menu224" style="display:none;">
                            <ul>
                                <li>MongoDB</li>
                                <li>MySQL</li>
                                <li>PostgresQL</li>
                            </ul>
                        </span>
                </span>
            <h3><a href="javascript: void(0);" onClick="toggle('menu230')">2.3. FullStack</h3></a>
                <span id="menu230" style="display:none;">
                    <p>Es un desarrollador que fusiona varias herramientas/conocimientos del frontend y el backend. Las librerías, los frameworks y lenguajes de programación. Un full stack no lo sabe todo 100%</p>
                    <p>Un full stack, mejor dicho, es un desarrollador que entiende todo el proceso del desarrollo, desde el diseño y la idea, hasta el código y el despliegue. <b>Es entenderlo todo, no saberlo todo.</b></p>
                    <p>Escuela de desarrollo web --> Full Stack. Pero con especialización Front o Back.</p>
                </span>    
            <h3><a href="javascript: void(0);" onClick="toggle('menu240')">2.4. Páginas estáticas vs dinámicas</h3></a>
                <span id="menu240" style="display:none;">
                    <img class="imagen" src="./images/paginas.png">
                    <p>Los websites estáticos son aquellos que por lo general no cambiar. Se les conoce también como landing page o page information.</p>
                    <ul>
                        <li>No están conectadas a una base de datos</li>
                        <li>Por lo general no están conectadas a un servidor propio</li>
                    </ul>
                    <p>Por el contrario, los websites dinámicos son aquellos que dejan de ser páginas y se convierten más en aplicaciones por todas las cosas que se pueden ver y hacer.</p>
                    <ul>
                        <li>Si tienen bases de datos y servidor propio</li>
                        <li>Tiene interacción</li>
                        <li>Debe guardar registros e información</li>
                    </ul>
                    <p>Siempre, dependiendo de los requerimientos del cliente, debemos decidir que tipo de página usar.</p>
                    <p><b>Estático:</b> Blogs, landing.</p>
                    <p><b>Dinámicos:</b> Twitter, Platzi. --> Contenido que cambia</p>
                </span>
        </span>
    <h2><a href="javascript: void(0);" onClick="toggle('menu300')">3. HTML</h2></a>
        <span id="menu300" style="display:none;" >
            <p>Hypertext Markup Language</p>
            <h3><a href="javascript: void(0);" onClick="toggle('menu310')">3.1. Anatomía de una página web</h3></a>
                <span id="menu310" style="display:none;">
                    <p>La anatomía de una página web se podría decir que son los elementos básicos de esta misma.</p>
                    <p>Estos son:</p>
                    <ul>
                        <li>Header</li>
                        <ul>
                            <li>Logo</li>
                            <li>Nav</li>
                        </ul>
                        <li>Main content</li>
                        <li>Side Bar</li>
                        <li>Footer</li>
                    </ul>
                </span>
            <h3><a href="javascript: void(0);" onClick="toggle('menu320')">3.2. Index y su estructura básica: Head</h3></a>
                <span id="menu320" style="display:none;">
                    <p>En el head van todos los archivos importantes para el correcto funcionamiento de nuestra plataforma pero que no deber ser visibles por los usuarios. Algunos de estos archivos pueden ser:</p>
                    <ul>
                        <li>Frameworks</li>
                        <li>Librerías</li>
                        <li>Estilos</li>
                        <li>Fuentes</li>
                        <li>APIs</li>
                    </ul>
                    <div class="code">
                        &#x3C;!DOCTYPE html&#x3E;<br>               
                        &#x3C;!--Le decimos al navegador que este archivo es del tipo html:5--&#x3E;<br>
                        &#x3C;html lang=&#x22;es&#x22;&#x3E;<br>
                        &#x3C;!--Es la etiqueta &#x22;padre&#x22; donde vivir&#xE1; nuestro proyecto. El atributo lang establece el idioma del sitio web. Debemos usarlo para que el navegador pueda traducir nuestra p&#xE1;gina--&#x3E; <br>
                        <br>
                        &#x3C;head&#x3E;<br>
                            &#x3C;meta charset=&#x22;UTF-8&#x22; /&#x3E;<br>
                            &#x3C;!--Este atributo nos ayuda a la hora de incluir caracteres especiales y emojis en nuestro proyecto--&#x3E;<br>
                            &#x3C;meta name=&#x22;description&#x22;content=&#x22;Esta p&#xE1;gina te mostrar&#xE1; fotos de gatos&#x22; /&#x3E;<br>
                            &#x3C;!--Muestra una descripci&#xF3;n de nuestro sitio en los buscadores--&#x3E;<br>
                            &#x3C;meta name=&#x22;robots&#x22;content=&#x22;index,follow&#x22; /&#x3E;<br>
                            &#x3C;!--Le dice a los robots de los navegadores que rastreen nuestra p&#xE1;gina y la muestran en las b&#xFA;squedas--&#x3E;<br>
                            &#x3C;title&#x3E;Mi p&#xE1;gina &#x3C;/title&#x3E;<br>
                            &#x3C;!--T&#xED;tulo de nuestra p&#xE1;gina, no confundir con los h2-H6. Este titulo es el que ves en la pesta&#xF1;a del navegador--&#x3E;<br>
                            &#x3C;meta name=&#x22;viewport&#x22;content=&#x22;width=device-width, initial-scale=1.0&#x22; /&#x3E;<br>
                            &#x3C;!--Nos ayuda a trabajar en proyectos reponsive--&#x3E;<br>
                            &#x3C;link rel=&#x22;stylesheet&#x22;href=&#x22;./css/style.css&#x22;&#x3E;<br>
                            &#x3C;!--Linkea/Enlaza archivos de estilos u otros archivos que necesitemos en nuestro proyecto--&#x3E;<br>
                        &#x3C;/head&#x3E;<br>
                    </div>
                    <p>El usuario solo verá lo que está dentro del body.</p>
                    <p>* El primer archivo siempre debe llamarse <b>index.html</b> porque este es el primer archivo que buscan los servidores a la hora de cargar los archivos de un sitio web.</p>
                    <p>* Existen etiquetas que se cierran y otras que no. Como por ejemplo: img</p>
                </span>                
            <h3><a href="javascript: void(0);" onClick="toggle('menu330')">3.3. Index y su estructura básica: body</h3></a>
                <span id="menu330" style="display:none;">
                        <p>Existen dos tipos de etiquetas en body: De contenido y contenedoras. Las de contenido son las encargadas de mostrar texto, imágenes, videos, etcétera... Mientras que las contenedoras son las que nos van a permiitr darle estrucutra y organizar nuestro contenido.</p>
                </span>
            <h3><a href="javascript: void(0);" onClick="toggle('menu340')">3.4. Anatomía de una etiqueta HTML</h3></a>
                <span id="menu340" style="display:none;">
                    <img src="./images/anatomia-html.png">
                </span>
        </span>            
    <h2><a href="javascript: void(0);" onClick="toggle('menu400')">4. Etiquetas multimedia</h2></a>
    <span id="menu400" style="display:none;" >
        <p>Son el tipo de etiquetas que usaremos para insertar imágenes y vídeos.</p>
        <h3><a href="javascript: void(0);" onClick="toggle('menu410')">4.1. Tipos de imágenes</h3></a>
            <span id="menu410" style="display:none;">
                <img class="imagen" src="./images/tipos-imagenes.png">
                <p>Existen 2 tipos de imágenes: <b>Con pérdida</b> (Lossy) y <b>sin pérdida</b> (Lossless) y esto dependerá del formato que manejemos.</p>
                <ul>
                    <li><b>Lossy:</b> Este tipo de imágenes se refiere a imágenes pequeñas y que pierden calidad (comparadas con las lossless). Nos ayudan a mejorar el tiempo de carga de nuestro website pero perdemos calidad. Algunos de estos formatos son:</li>
                    <ul>
                        <li>JPG --> Photographic Experts Group --> Al comprimirla pierde calidad.</li>
                    </ul>
                    <li><b>Lossless:</b> Este tipo de imágenes no pierde calidad, su calidad siempre se mantendrá igual. Son más lentas en cargar y consume más recursos, pero tendremos unas mejores imágenes sin importar que se comprimen. Algunos formatos de estas son:</li>
                    <ul>
                        <li>GIF --> Graphics Interchange Format</li>
                        <li>PNG --> Portable Network Graphics --> PNG 8 equivale a 258 colores --> PNG 24 equivale a más de 256 colores.</li>
                        <li>SVG (Vector) --> Scalable Vector Graphics --> Se usan para pantallas de retina. Nunca pierden calidad. Nunca.</li>
                    </ul>
                </ul>
            </span>
        <h3><a href="javascript: void(0);" onClick="toggle('menu420')">4.2. Optimización de imágenes</h3></a>
            <span id="menu420" style="display:none;">
                <p>No es óptimo cargar imágenes en nuestros sitio web que pesen mucho porque tardan bastante tiempo en renderizarse y le dan una mala experiencia al usuario.</p>
                <p>El tamaño promedio de una imagen debe ser de 70 a 100 kilobytes.</p>
                <p>Podemos optimizar nuestras imágenes con los siguientes recursos:</p>
                <p><a href="https://tinypng.com/" target="_blank">tinypng</a></p>
                <p>Mejora y reduce el tamaño de las imágenes png y jpg.</p>
                <p><a href="https://www.verexif.com/" target="_blank">verexif</a></p>
                <p>Elimina los metadatos de la imagen. Se usa para imágenes que vienen de una cámara.</p>
            </span>   
        <h3><a href="javascript: void(0);" onClick="toggle('menu430')">4.3. Etiqueta img, figure y figcaption</h3></a>
            <span id="menu430" style="display:none;">
                <p>Es recomendable descargar imágenes solo de tamaño grande, mediano o pequeño</p>
                <p><b>src:</b> Donde está la imagen, su ruta. Puede ser desde nuestras carpetas o desde un enlace externo de otra web.</p>
                <p><b>alt:</b> Texto alternativo por si no se renderiza la imagen y para mejorar la accesibilidad de nuestros sitio.</p>
                <p><b>figure:</b> Genera un contenedor para la imagen</p>
                <p><b>figcaption:</b> Agrega una descripción a la imagen. Será visible en la parte inferior de esta misma. Va dentro de la etiqueta figure</p>
                <p>Por buenas prácticas siempre deberíamos usar la etiqueta figure para insertar un archivo multimedia</p>
            </span>
        <h3><a href="javascript: void(0);" onClick="toggle('menu440')">4.4. Etiqueta video</h3></a>
            <span id="menu440" style="display:none;">
                <div class="code">
                    |< section> </br>
                    |    < video controls preload="auto"> </br>
                    |    |    < source src="./video.m4v#t=10,60" /> </br>
                    |    |    < source src="./video.mp4#t=10,60" /> </br>
                    |    |    < source src="./video.gif" /> </br>
                    |    < /video> </br>
                    |< /section> </br>
                </div>
                <p>Nos permite subir un video mediante la misma forma que una imagen, mediante el atributo src</p>
                <p><b>control:</b> Aparecen los controles para manipular el video. No recibe valores, es un parámetro vacío.</p>
                <p><b>preload:</b> Ayuda a que el video se empiece a descargar una vez se abre el navegador en esa página. A descargar, no a reproducirse automáticamente. Reproducirse automáticamente es una mala práctica </p>
                <p><b>source:</b> Va dentro de la etiqueta video y se usa para especificar varias rutas en caso de que el navegador no entienda algún formato de vídeo. Se pueden poner varios formatos y el navegador utilizará el que más le convenga. Para usarlo se elimina el atributo src del video y se le pone a las etiquetas source. Al video se le dejan los demás atributos.</p>
                <p>Si queremos que el video inicie y termine en un segundo específico, debemos usar unos atributos dentro del src:</p>
                <ul>
                    <li>#t= --> Indica el tiempo en el cual empezará y terminará</li>
                    <li>10,60 --> Son los valores en segundos. Donde 10 (izquierda) es donde inicia y 60 (derecha) donde finaliza. Deben ir separados solo por una coma sin espacio</li>
                </ul>
            </span>
    </span>
    <h2><a href="javascript: void(0);" onClick="toggle('menu500')">5. Formularios</h2></a>
        <span id="menu500" style="display:none;" >
            <h3><a href="javascript: void(0);" onClick="toggle('menu510')">5.1. Etiqueta form e input</h3></a>
                <span id="menu510" style="display:none;">
                    <p>Los formularios son la forma en la cual podemos empezar a generar interacción con los usuarios. Debemos generar buenos formularios para los usuarios, deben ser cortos, fáciles de usar y directos.</p>
                    <div class="code">
                        <code>
                        |< !-- Como no hacerlo --> </br>
                        |    < div> </br>
                        |    |    < input type="text" /> </br>
                        |    |    < input type="text" /> </br>
                        |    |    < input type="text" /> </br>
                        |    |    < input type="text" /> </br>
                        |< /div> </br>
                        |</br>
                        |< !-- Como si hacerlo --> </br>
                        |</br>
                        |    < form action=""> </br>
                        |    |    < label for="nombre"> </br>
                        |    |    |    < span> Cúal es tu nombre? < /span> </br>
                        |    |    |    < input type="text" id="nombre" placeholder="John Cardenas" /> </br>
                        |    |    < /label> </br>
                        |    |    < label for="inicio-platzi"> </br>
                        |    |    |    < span> Qué día comenzaste en Platzi? < /span> </br>
                        |    |    |    < input type="date" id="inicio-platzi" /> </br>
                        |    |    < /label> </br>
                        |    |    < label for="horario"> </br>
                        |    |    |    < span> En qué horario estudias? < /span> </br>
                        |    |    |    < input type="time" id="horario" /> </br>
                        |    |    < /label> </br>
                        |    < /form> </br>
                    </code>
                    </div>
                    <p><b>form: </b>nos permite decirle al navegador que lo que usaremos es un formulario y que el usuario va a interactuar con el. Es una etiqueta contenedora.</p>
                    <p><b>action: </b>es la URL o base de datos a donde se va a enviar la información.</p>
                    <p><b>label: </b>es una etiqueta contenedora de <b>input.</b> Recibe un atributo importante llamado <b>for</b> y el cual debe ser el mismo que el <b>id</b> del <b>input.</b></p>
                    <p><b>placeholder:</b> agrega información dentro del input. Sirve para indicarle al usuario un ejemplo sobre lo que debe hacer.</p>
                    <h4>Tipos de inputs:</h4>
                    <p><a href="https://www.w3schools.com/html/html_form_input_types.asp" target="_blank">tipos de inputs</a></p>
                </span>
            <h3><a href="javascript: void(0);" onClick="toggle('menu520')">5.2. Calendar, auto complete y require</h3></a>
                <span id="menu520" style="display:none;">
                    <p>El atributo <b>name</b> de los inputs nos ayuda en el caso que queramos enviar la información a alguna URL. Debe ser igual que el atributo <b>for</b> de <b>label</b> y por lo tanto que el <b>id</b> del <b>input.</b></p>
                    <div class="code">
                        <code>
                        |< form action=""> </br>
                        |    < label for="nombre"> </br>
                        |    |    < span> Cúal es tu nombre? < /span> </br>
                        |    |    < input  </br>
                        |    |    |    type="text" </br>
                        |    |    |    name="nombre" </br>
                        |    |    |    id="nombre" </br>
                        |    |    |    autocomplete="name" </br>
                        |    |    |    required </br>
                        |    |    /> </br>
                        |    < /label> </br>
                        |    < label for="correo"> </br>
                        |    |    < span> Cúal es tu correo? < /span> </br>
                        |    |    < input  </br>
                        |    |    |    type="email" </br>
                        |    |    |    name="correo" </br>
                        |    |    |    id="correo" </br>
                        |    |    |    autocomplete="email" </br>
                        |    |    |    required </br>
                        |    |    /> </br>
                        |    < /label> </br>
                        |    < label for="pais"> </br>
                        |    |    < span> En qué país vives? < /span> </br>
                        |    |    < input  </br>
                        |    |    |    type="text" </br>
                        |    |    |    name="pais" </br>
                        |    |    |    id="pais" </br>
                        |    |    |    autocomplete="country" </br>
                        |    |    |    required </br>
                        |    |    /> </br>
                        |    < /label> </br>
                        |    < label for="cp"> </br>
                        |    |    < span> Cúal es tu código postal? < /span> </br>
                        |    |    < input  </br>
                        |    |    |    type="text" </br>
                        |    |    |    name="cp" </br>
                        |    |    |    id="cp" </br>
                        |    |    |    autocomplete="postal-code" </br>
                        |    |    |    required </br>
                        |    |    /> </br>
                        |    < /label> </br>
                        |    < input type=""submit" /> </br>
                        |< /form> </br>
                    </code>
                    </div>
                    <p><b>autocomplete:</b> completa el input con los datos que tenga guardado el navegador del usuario. Recibe valores dependiendo de que busquemos autocompletar: name, email, address...</p>
                    <p><b>require:</b> le indica al usuario que debe rellenar la información porque es obligatoria. Si no la rellena no avanza.</p>
                </span>
            <h3><a href="javascript: void(0);" onClick="toggle('menu530')">5.3. Select</h3></a>
                <span id="menu530" style="display:none;">
                    <p><b>Select</b> permite crear una lista para seleccionar varias opciones. Sirve de contenedor para la etiqueta <b>option</b>, la cual muestra los valores de la lista que crea <b>select</b>. Sin embargo, se debe usar más la opción <b>datalist</b> que <b>select</b>, ya que <b>datalist</b> junto a <b>input</b> con el <b>atributo list</b> le permite al usuario buscar en caso de que la lista sea muy larga.</p>
                    <div class="code">
                        <code>
                        |< select name="" id=""> </br>
                        |    |< option value="JavaScript"> Curso de JavaScript < /option> </br>
                        |    |< option value="HTML5"> Curso de HTML5 < /option> </br>
                        |    |< option value="CSS3"> Curso de CSS3 < /option> </br>
                        |    |< option value="Web Standars"> Curso de Web Standars < /option> </br>
                        |< /select> </br>
                        |      </br>
                        |< !-- Con buenas prácticas -> Le das una opción para que busque </br>
                        |      </br>
                        |< input list="cursos"> </br>
                        |< datalist id="cursos"> </br>
                        |    |< option value="JavaScript"> Curso de JavaScript < /option> </br>
                        |    |< option value="HTML5"> Curso de HTML5 < /option> </br>
                        |    |< option value="CSS3"> Curso de CSS3 < /option> </br>
                        |    |< option value="Web Standars"> Curso de Web Standars < /option> </br>
                        |< /datalist> </br> 
                        </code>
                    </div>
                </span>
            <h3><a href="javascript: void(0);" onClick="toggle('menu540')">5.4. Input type submit vs Button Tag</h3></a>
                <span id="menu540" style="display:none;">
                    <p>En HTML5 se pueden crear dos tipos de botones, con input y con button.</p>
                        <div class="code">
                            <code>
                            |< body> </br>
                            |    |< input type="submit" value="Nombre" /> </br>
                            |    |< button> Enviar < /button> </br>
                            |< /body> </br>
                            </code>
                        </div>
                    <p>Básicamente, deberíamos usarlos así:</p>
                    <p><b>input para formularios.</b></p>
                    <p><b>button para otro tipo de botones.</b></p>
                    <p>*El atributo <b>value</b> permite personalizar el texto de un input de tipo submit.</p>
                </span>
        </span>
     

    <!-- CSS -->       
    <h2><a href="javascript: void(0);" onClick="toggle('menu600')">6. CSS</h2></a>
        <span id="menu600" style="display:none;" >
            <h3><a href="javascript: void(0);" onClick="toggle('menu610')">6.1. Qué es?</h3></a>
                <span id="menu610" style="display:none;">
                    <p>Las hojas de estilo en cascada es el archivo que le aplica los estilos a un sitio web en forma de cascada, leyendo el código de arriba hacia abajo.</p>
                </span>
            <h3><a href="javascript: void(0);" onClick="toggle('menu620')">6.2. Anatomía de una regla CSS</h3></a>
                <span id="menu620" style="display:none;">
                    <img class="imagen" src="./images/anatomia-css.png">
                    <h4><a href="javascript: void(0);" onClick="toggle('menu621')">6.2.1. Cómo usamos CSS? por selector, clase y/o IDs</h4></a>
                        <span id="menu621" style="display:none;">
                            <p>Para añadir CSS a nuestro archivo HTML existen 3 formas:</p>
                            <ol>
                                <li>Link externo</li>
                                <div class="code">
                                    <code>
                                        |< head> </br>
                                        |    |< meta charset="UTF-8" /> </br>
                                        |    |< meta name="viewport" content="width=device-width, initial-scale=1.0" /> </br>
                                        |    |< link rel="stylesheet" href="./css/style.css" /> </br>
                                        |< /head> </br>
                                    </code>
                                </div></br>    
                                <li>Se puede agregar como estilo embebido a una etiqueta HTML.</li>
                                <div class="code" >
                                    <code>
                                    < a style="color: white"> </br>
                                    </code>
                                </div>
                                <li>Agregar los estilos dentro de la etiqueta <b>head</b></li>
                                <div class="code">
                                    &#x3C;head&#x3E; <br>
                                    &#x3C;meta charset=&#x22;UTF-8&#x22;/&#x3E; <br>
                                    &#x3C;meta name=&#x22;viewport&#x22; content=&#x22;width=device-width, initial-scale=1.0&#x22;/&#x3E; <br>
                                    &#x3C;link rel=&#x22;stylesheet&#x22; href=&#x22;./css/style.css&#x22;/&#x3E; <br>
                                    &#x3C;title&#x3E;Pseudo Clase y Pseudo Elementos &#x3C;/title&#x3E; <br>
                                    &#x3C;style&#x3E; <br>
                                    body { <br>
                                        background-color: black; <br>
                                        } <br>
                                    &#x3C;/style&#x3E; <br>
                                    &#x3C;/head&#x3E; <br>
                                    </code>
                                </div>
                                <p>Para agregar estilos a una etiqueta de HTML usamos clases y IDs. Siendo las clases las más importantes para elementos generales y los IDs para elementos específicos (Son más recomendados para JavaScript) Ejemplo de usos de estilos con clases:</p>
                                <div class="code">
                                    <code>
                                        |< nav> </br>
                                        |    |< ul id="main-nav" class="nav"> </br>
                                        |    |    |< li> < a href="">Home < /a> < /li> </br>
                                        |    |    |< li> < a href="">Cursos < /a> < /li> </br>
                                        |    |    |< li> < a href="">Instructores < /a> < /li> </br>
                                        |    |    |< li> < a href="" class="blog">Blog < /a> < /li> </br>
                                        |    |< /ul> </br>
                                        |< /nav> </br>
                                    </code>
                                </div>
                                <div class="code">
                                    <code>
                                    |.nav {</br>
                                    |    |margin-top: 10px; </br>
                                    |    |list-style: none; </br>
                                    |    |padding-left: 0; </br>
                                    |    |} </br>
                                    |     </br>
                                    |.nav li {</br>
                                    |    |display: inline-block; </br>
                                    |    |} </br>
                                    |     </br>
                                    |.nav a {</br>
                                    |    |color: white; </br>
                                    |    |background-color: #13a4a4; </br>
                                    |    |padding: 5px; </br>
                                    |    |border-radius: 2px; </br>
                                    |    |text-decoration: none; </br>
                                    |    |} </br>
                                    |     </br>
                                    |.nav .blog {</br>
                                    |    |background-color: red; </br>
                                    |    |} </br>
                                    |     </br>
                                    </code>
                                </div>
                                <p>Para este curso usaremos la metodología BEM la cual nos ayuda a generar clases a elementos de HTML de una manera más ordenada y específica. BEM usa esta sintaxis:</p>
                                <div class="code">
                                    <code>
                                    .main </br>
                                    .main-nav </br>
                                    .main-nav__item </br>
                                    .main-nav__item a </br>
                                    </code>
                                </div>
                            </ol>
                        </span>
                </span>
            <h3><a href="javascript: void(0);" onClick="toggle('menu630')">6.3. Peudo clases y pseudo elementos</h3></a>
                <span id="menu630" style="display:none;">
                    <p>Las pseudo-clases especifica un estado especial a un elemento seleccionado. </p>
                    <div class="code">
                        <code>
                        p:child {</br>
                        |    color: red; </br>
                        |    } </br>
                        /* Convierte todo el texto del primer hijo del bloque de código en rojo.    </br>
                        </code>
                    </div>
                    <p>Lista de pseudo-clases: <a href="https://developer.mozilla.org/es/docs/Web/CSS/Pseudo-classes" target="_blank">https://developer.mozilla.org/es/docs/Web/CSS/Pseudo-classes</a></p>
                    <p>A diferencia de las pseudo-clases los pseudo-elementos no describen un estado especial, sino que permiten añadir estilos a una parte concreta (a veces muy específica) de un elemento.</p>
                    <div class="code">
                        <code>
                        p::first-letter {</br>
                        |    color: red; </br>
                        |    font-size: 20px; </br>
                        |    } </br>
                        /* Toma solo la primera letra de un elemento.    </br>
                        </code>
                    </div>
                    <p>Lista de pseudo-elementos:</p>
                    <a href="https://developer.mozilla.org/es/docs/Web/CSS/Pseudoelementos" target="_blank">https://developer.mozilla.org/es/docs/Web/CSS/Pseudoelementos</a>
                    <p>:active → Pseudo clase que se activa cuando un elemento recibe el evento click.</p>
                    <p>::after → Pseudo elemento que agrega algo (texto, número, figuras) delante del elemento HTML especificado.</p>
                    <ul>
                        <li>En los proyectos casi siempre se trabaja una hoja de estilos por página. Por lo general el nombre del archivo de estilos es el mismo nombre de la página.</li>
                        <li>propiedad <b>content</b> → Agrega contenido (texto) a un elemento especificado.</li>
                    </ul>
                    <img class="imagen" src="./images/pseudo-clases-3.png">
                </span>
            <h3><a href="javascript: void(0);" onClick="toggle('menu640')">6.4. Modelo de caja</h3></a>
                <span id="menu640" style="display:none;">
                    <p>En HTML siempre estamos trabajando con "cajas" que son contenedores el contenido que agregamos. Esta caja cuenta con 4 componentes:</p>
                    <ul>
                        <li>Margin → Espacio externo</li>
                        <li>Border → Borde del contenido. Externo.</li>
                        <li>Padding → Espacio interno</li>
                        <li>Content (width y heigth) → Texto, imágenes, vídeos</li>
                    </ul>
                    <p>* → Es el selector universal de HTML. Se usa para resetear los estilos predeterminados por el navegador.</p>
                    <p>* Para hace que un elemento tome el ancho que le asignemos más un margen o padding sin que se rompa o no funcione el estilo, podemos usar <b>calc</b>. Hará que el ancho se calcule tomando en cuenta el margen y ancho especificado. Esto es muy útil a la hora de hacer desarrollo responsive.</p>
                    <div class="code">
                        <code>
                        container {</br>
                        |    width: (calc 50% - 20px); </br>
                        } </br>
                        </code>
                    </div>
                </span>
            <h3><a href="javascript: void(0);" onClick="toggle('menu650')">6.5. Herencia</h3></a>
                <span id="menu650" style="display:none;">
                    <p>Es el código css que le pasará al hijo de una etiqueta contenedora o padre. El valor <b>inherit</b> es el que nos permite heredar estilos de las <b>etiquetas padres.</b> Por ejemplo, si hay un texto contenido en una etiqueta div, se le puede asignar un <b>margin: inherit</b> y arrojará el mismo margin que tenga ese div.</p>
                </span>
            <h3><a href="javascript: void(0);" onClick="toggle('menu660')">6.6. Especificidad en selectores</h3></a>
                <span id="menu660" style="display:none;">
                    <p>La especificidad es muy importante ya que es el orden por el cual el navegador decide qué estilos aplicarle a un elemento. El orden en cual se decide esto es el siguiente:</p>
                    <ol>
                        <li>Importancia del selector</li>
                        <li>Especificidad</li>
                        <li>Orden de las fuentes → Como se mandan a llamar</li>
                    </ol>
                    <p>Si 2 reglas tiene la misma importancia, pasa a evaluarse la especificidad de cada una. Si cuentan con la misma especificidad, pasa el orden a decidir cual se aplica.</p>
                    <p>En cuestión de importancia, estas son las reglas que primero se aplican:</p>
                    <ol>
                        <li>!important</li>
                        <li>inline styles</li>
                        <li>#ids</li>
                        <li>.class</li>
                        <li>tag</li>
                    </ol>
                    <p>Donde a <b>!important</b> e <b>inline styles</b> debemos evitarlos las mayorías de veces ya que son mala práctica. Siempre debemos tratar de usar las clases.</p>
                    <p>En cuanto al orden de las fuentes:</p>
                    <p>Si se mandan a llamar unos estilos arriba y otros abajo (los dos con la misma clase) los últimos llamados sobrescribirán a los primeros, porque tal como su nombre lo indica, los estilos CSS se leen en cascada y guarda los últimos cambios/valores que lee. (Este es un caso muy extremo)</p>
                    <img class="imagen" src="./images/especifidad.jpg">
                    <p><b>Calculadora de peso de especificidad:</b></p>
                    <p><a href="https://www.codecaptain.io/tools/css-specificity-calculator" target="_blank">https://www.codecaptain.io/tools/css-specificity-calculator</a></p>
                    
                    <p><b>Juego para dominar los selectores:</b></p>
                    <p><a href="https://flukeout.github.io/" target="_blank">https://flukeout.github.io/</a></p>
                </span>
            <h3><a href="javascript: void(0);" onClick="toggle('menu670')">6.7. Demo de especificidad y orden de selectores</h3></a>
                <span id="menu670" style="display:none;">
                    <ul>
                        <li>Por cada etiqueta no se puede tener más de 1 ID. Pero cada etiqueta puede tener más de 1 clase, es normal. Aunque lo máximo recomendado son 3. En cambio el ID es único, no pueden haber 2 IDs en la misma página con el mismo nombre.</li>
                        <li>Los IDs son más importantes para los estilos que las clases.</li>
                        <li>VStudio nos muestra el nivel de especificidad de cada regla de CSS.</li>
                    </ul>
                </span>
            <h3><a href="javascript: void(0);" onClick="toggle('menu680')">6.8. Combinadores: Adjacent Siblings (combinators)</h3></a>
                <span id="menu680" style="display:none;">
                    <p>Los combinadores nos permiten, como su nombre lo dice, combinar selectores y crear una mayor especificidad a la hora de establecer estilos. Los 4 tipos de combinadores más usados son:</p>
                        <div class="code">
                            <code>
                            | /* 1. Hermano cercano: Aplica el estilo a todas las etiquetas p que tenga </br>
                            | h3 + p { </br>
                            |   | color: red; </br>
                            | } </br>
                            | </br>
                            | /* 2. Hermano general: Aplica el estilo siempre y cuando coincida </br>
                            | h3 ~ p { </br>
                            |   | color: red; </br>
                            | } </br>
                            | </br>
                            | /* 3. Hijo: Agregale estilos a una etiqueta p que sea hijo directo de div  </br>
                            | div > p { </br>
                            |   | color: blue; </br>
                            | } </br>
                            | </br>
                            | /* 4. Descendiente: Todas las etiquetas de p que estén dentro de un div  </br>
                            | div p { </br>
                            |   | color: red; </br>
                            | } </br>
                            | </br>
                            </code>
                        </div>
                </span>
            <h3><a href="javascript: void(0);" onClick="toggle('menu690')">6.9. Medidas</h3></a>
                <span id="menu690" style="display:none;">
                    <p>Las medidas en CSS es lo que nos permitirá establecer tamaños a fuentes, contenedores, iconos, imágenes, etcétera... Existen 2 tipos de medidas:</p>
                    <ol>
                        <li><b>Absolutas:</b> Es una medida que no cambia en ningún momento, se usan los pixeles.</li>
                        <li><b>Relativas:</b> Son valores que sí cambian y son relativas a otros elementos.</li>
                    </ol>
                </span>
            <h3><a href="javascript: void(0);" onClick="toggle('menu6100')">6.10. Medidas EM</h3></a>
                <span id="menu6100" style="display:none;">
                    <p>Em es un acrónimo de elemento y lo que hace es que toma el tamaño de fuente de su padre directo. Si un parrafo está encerrado en un div que tiene un tamaño fuente de 16px, entonces:</p>
                    <p>1em → 16px</p>
                    <p>2em → 32px</p>
                    <p>1.5em → 24px</p>
                    <p>No es de las mejores medidas porque puede generar conflicto entre medidas ya que siempre toma la de su padre más cercano y esto puede cambiar el tamaño de los elementos sin que nos demos cuenta.</p>
                </span>
            <h3><a href="javascript: void(0);" onClick="toggle('menu6110')">6.11. Medidas REM</h3></a>
                <span id="menu6110" style="display:none;">
                    <p>*La etiqueta HTML tiene 16px de fuente por defecto</p>
                    <p>REM hace referencia a la etiqueta <b>root</b>  de nuestro archivo HTML, la cual es la etiqueta html. Por lo tanto 1rem siempre será igual a 16px a no ser que cambiemos el tamaño de font-size del html. REM puede ser confuso de calcular y para esto existe un truco, el cual consiste en establecer el tamaño de fuente del html en <b>62.5%</b> de esta forma:</p>
                    <p>1rem → 10px</p>
                    <p>1.6rem → 16px</p>
                    <p>2rem → 20px</p>
                    <div class="code">
                        <code>
                        | html { </br>
                        |   | font-size: 62.5%; </br>
                        | } </br>
                        </code>
                    </div>
                </span>
            <h3><a href="javascript: void(0);" onClick="toggle('menu6120')">6.12. Max/min Width</h3></a>
                <span id="menu6120" style="display:none;">
                    <ul>
                        <li><b>min-width:</b> El elemento no se puede hacer menos ancho desde un tamaño especificado.</li>
                        <li><b>max-width:</b> El elemento no se puede hacer más ancho desde un tamaño especificado.</li>
                        <li><b>min-height:</b> El elemento no se puede hacer menos largo desde un tamaño especificado.</li>
                        <li><b>max-height:</b> El elemento no se puede hacer menos largo desde un tamaño especificado.</li>
                    </ul>
                    <div class="code">
                        <code>
                        | section { </br>
                        |   | width: 80%; </br>
                        |   | min-width: 320px; </br>
                        |   | max-width: 80%; </br>
                        |   | min-height: 500px; </br>
                        |   | margin: 0 left; </br>
                        | } </br>
                        </code>
                    </div>
                    <ul>
                        <li>Cuando usemos el min y max width debemos tener un width base y casi siempre será en porcentajes.</li>
                        <li>En el caso de height no es necesario tener un height base. Se pueden establecer directamente los min y max.</li>
                        <li>Un problema de overflow quiere decir que se tiene más contenido qué espacio en el contenedor padre.</li>
                    </ul>
                </span>
            <h3><a href="javascript: void(0);" onClick="toggle('menu6130')">6.13. Position</h3></a>
                <span id="menu6130" style="display:none;">
                    <p>Es la forma en la cual podemos posicionar contenedores de CSS o las etiquetas de HTML. Algunas de las posiciones más usadas son:</p>
                    <ol>
                        <li><b>Static:</b> Es la que viene por defecto. El elemento se queda donde fue ubicado en el código y de ahí no se mueve.</li>
                        <li><b>Absolute:</b> Esta posición le indica al elemento que se debe borrar del flujo normal de la página. Esto causará que el elemento quede por encima de los demás y deje de ocupar su espacio.</li>
                        <li><b>Relative:</b> Esta posición es considerada una "normal" porque se ubica en con respecto a su posición original. Esto causará que el elemento siga ocupando su espacio a pesar de que no esté ubicado allí.</li>
                        <img class="imagen" src="./images/position.png">
                        <li><b>Fixed:</b> Al igual que sticky, sirven para que el contenido se quede en su posición sin importar si se hace o no scroll. <b>Fixed mantiene el efecto desde que se abre la página.</b></li>
                        <li><b>Sticky:</b> Por su parte, sticky empieza a "seguirte" cuando llegues a él mediante el scroll.</li>
                    </ol>
                </span>
            <h3><a href="javascript: void(0);" onClick="toggle('menu6140')">6.14. Display block</h3></a>
                <span id="menu6140" style="display:none;">
                    <ul>
                        <li><b>block:</b> Usa el 100% del ancho que tenga sin importar si el contenido tiene o no ese espacio. Ocupa siempre el 100% del width. Lo que los apila uno encima del otro.</li>
                        <li><b>inline:</b> Ocupa solo el espacio de su contenido. Lo que permite agruparse unos al lado del otro. No se le puede dar margen ni padding vertical pero sí horizontal. Tampoco se le puede agregar un alto o ancho.</li>
                        <li><b>inline-block:</b> Utiliza el espacio que ocupa el elemento. Solo el que ocupa el elemento, no el 100%.</li>
                    </ul>
                    <img class="imagen" src="./images/display-block-vs-inline-block.png">
                </span>
            <h3><a href="javascript: void(0);" onClick="toggle('menu6150')">6.15. Display Flex</h3></a>
                <span id="menu6150" style="display:none;">
                    <p>Flex nos permite distribuir el espacio entre los elementos/contenedores de nuestra página web, por el contrario que grid, flexbox es unidimensional, trabaja con filas o columnas, pero solo una de cada una. Para usar flex siempre debemos tener un contenedor padre el cual usará el display flex.</p>
                    <ul>
                        <li>Por defecto flex-direction es row.</li>
                        <li><b>flex-wrap: wrap;</b> → Acomoda los elementos dependiendo del viewport width del usuario, y si no hay más espacio baja los elementos ya que no caben el ancho.</li>
                        <li><b>justify-content</b> nos permite alinear los elementos de forma horizontal. <b>align-items</b> hace lo mismo pero verticalmente.</li>
                        <li><b>box-sizing:</b> border-box; → Suma el padding y el borde con el width del elemento. Si aumenta el padding o el borde, el width disminuye para no generar un scroll horizontal. Lo mismo al contrario en caso de que aumente width. Esto se hace para que el elemento ocupe lo que le indicamos y no más.</li>
                    </ul>
                </span>
            <h3><a href="javascript: void(0);" onClick="toggle('menu6160')">6.16. Flexbox Layouts</h3></a>
                <span id="menu6160" style="display:none;">
                    <div class="code">
                        <code>
                        | .container { </br>
                        |   | border: 0.3rem solid black; </br>
                        |   | display: flex; </br>
                        |   | flex-wrap: wrap; </br>
                        | } </br>
                        | </br>
                        | .box { </br>
                        |   | height: 10rem; </br>
                        |   | flex-basis: 10rem; </br>
                        |   | flex-grow: 1; </br>
                        | } </br>
                        </code>
                    </div>    
                    <ul>
                        <li><b>flex-grow</b> → Toma el espacio que sobra para que no haya espacios en blanco. Al darle el valor 1 toma el espacio sobrante que deja otro elemento.</li>
                        <li><b>flex-basis</b> → Define el tamaño que tendrá un elemento antes de que se distribuya al tamaño restante.</li>
                        <li><b>align-items: strech;</b> → Estira los elementos al 100% del valor de su contenedor padre. Ocupa todo el espacio vertical.</li>
                        <li><b>baselinev</b> → Toma solo el alto de su contenido. Lo limita a su propia altura.</li>
                        <li><b>order</b> → Cambia el orden de los hijos del contenedor padre.</p>
                        <p>Todos los contenedores que no tengan orden se pasan para la izquierda. Y los que sí lo tengan empiezan desde donde terminan los que no tienen.</li>
                    </ul>
                </span>
            <h3><a href="javascript: void(0);" onClick="toggle('menu6170')">6.17. Variables</h3></a>
                <span id="menu6170" style="display:none;">
                    <p>Las variables nos permiten guardar un valor para evitar generar mucho código repetido.</p>
                    <div class="code">
                        <code>
                        | :root {</br>
                        |   |--fsize-titulo: 2.5rem;</br>
                        |   |--fsize-cuerpo: 1.6rem;</br>
                        |   |--color-1: #0008C1;</br>
                        |   |--color-2: #2146C7;</br>
                        |   |--color-3: #E6CBA8;</br>
                        |   |--color-4: #FDF0E0;</br>
                        |   |--padding-h2: 1rem;</br>
                        | } </br>
                        </code>
                    </div>
                    <p><b>:root</b> → Hace referencia a la etiqueta html. Aquí es donde declararemos todas nuestras variables. Para declarar una variable asignamos su nombre con dos guiones y luego su valor. Para usarla:</p>
                    <div class="code">
                        <code>
                        | h3 {</br>
                        |   |font-size: calc(var(--fsize-titulo) * 1);</br>
                        |   |padding-top: 2rem;</br>
                        |   |padding-left: calc(var(--padding-h2) * 4);</br>
                        |   |margin-top: 1.5rem;</br>
                        | } </br>
                        </code>
                    </div> 
                </span>
            <h3><a href="javascript: void(0);" onClick="toggle('menu6180')">6.18. Web Fonts</h3></a>
                <span id="menu6180" style="display:none;">
                    <p>Las fuentes genéricas son las que vienen por defecto en nuestro sistema operativo y con las cuales se abrirán en un principio todos los sitios web. Algunas de estas son:</p>
                    <img class="imagen" src="./images/fuentes-genericas.png">
                    <p>Las fuentes que casi siempre se usan son: </p>
                    <ul>
                        <li>Light 300</li>
                        <li>Medium 500</li>
                        <li>Regular 400</li>
                        <li>Bold 900</li>
                    </ul>
                    <p>Si queremos traer fuentes externas y usarla en nuestro proyecto existen 2 formas:</p>
                    <ol>
                        <li>
                            <p>Con @import desde el archivo CSS</p> 
                            <div class="code">
                                <code> @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100&display=swap');</code>
                            </div>
                            <p>El cual no es tan buena práctica porque afecta el performance del sitio web. Casi siempre la mejor práctica es la segunda opción.</p>
                        </li>
                        <li>
                            <p>Con la etiqueta link desde HTML</p>
                            <div class="code">
                                <code>	< link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;900&display=swap" rel="stylesheet" /> </br>
                                </code>
                            </div>
                            <p>*display=swap hace que el proyecto se cargue con la fuente por defecto, y una vez cargue todo el mismo, se cargará la fuente</p>
                            <p>No es bueno cargar más de una fuente externa. Debido a que cada link genera una petición y si agregamos muchos puede afectar el performance.</p>
                            <p>Para usar estas fuentes en los estilos basta con poner el nombre que nos indica <a href="https://fonts.google.com/" target="_blank">Google Fonts</a> como valor de la propiedad font-family</p>
                            <div class="code">
                                <code>html {
                                    </br> font-family: "Roboto", sans-serif;
                                    </br> }
                                </code>
                            </div>
                        </li>
                    </ol>
                </span>
        </span>  <!-- id="menu600"  -->  
    <h2><a href="javascript: void(0);" onClick="toggle('menu700')">7. Responsive Design</h2></a>
        <span id="menu700" style="display:none;" >
            <h3><a href="javascript: void(0);" onClick="toggle('menu710')">7.1. Media queries</h3></a>
                <span id="menu710" style="display:none;">
                    <p>Los media queries nos permiten hacer que nuestros proyectos sean multiplataforma mediante breakpoints. Los breakpoints son puntos donde hacemos cambios, como renderizar elementos o contenedores. Los media querie se agregan así:</p>
                    <div class="code">
                    <code>
                        @media (min-width: 600px) {</br>  
                        |    .c2,</br>  
                        |    .c3,</br>  
                        |    .c4 {</br>  
                        |    |    width: 50%;</br>  
                        |    |}</br>  
                        |    .letra {</br>  
                        |    |font-size: 12px;</br>  
                        |    |}</br>  
                        |}</code>
                    </div>
                    <p>Existen diferentes estrategias para trabajar el responsive. La más recomendada actualmente es la mobile first. Esta nos invita a desarrollar desde un dispositivo mobile y luego ir escalando a dispositivos mayores. El orden que normalmente se maneja es: mobile, tablet, desktop.</p>
                    <p>La mejor forma de trabajar con media queries es enlazando los archivos de estilos desde el head. De esta manera:</p>
                    <div class="code">
                        <code>
                        < link rel="stylesheet" href="./estilos.css" /></br>
                        < link rel="stylesheet" href="./tablet.css" media="screen and (min-width: 600px)" /></br>
                        < link rel="stylesheet" href="./desktop.css" media="screen and (min-width: 800px)" /></br>
                        </code>
                    </div>
                    <p>El primer link siempre será el mobile y no hay necesidad de especificar el atributo <b>media.</b></p>
                </span>  <!-- id="menu710" -->
            <h3><a href="javascript: void(0);" onClick="toggle('menu720')">7.2. Estrategias de responsive: Mostly Fluid</h3></a>
                <span id="menu720" style="display:none;">
                    <p>Este tipo de estrategia se inicia con columnas y a medida que se crecen las pantallas, las columnas van siendo acomodadas. El archivo de estilos principal (styles.css) es el archivo que usaremos para trabajar nuestra primera versión responsive, es decir, la mobile. Luego iremos desarrollando las otras como desktop.css o tablet.css</p>
                    <p>*Los media queries por buenas prácticas siempre deben ir al final de los estilos (en caso de que los tengamos en un solo archivo todos)</p>
                </span> <!-- id="menu720" -->
            <h3><a href="javascript: void(0);" onClick="toggle('menu730')">7.3. Layout Shifter CSS</h3></a>
                <span id="menu730" style="display:none;">
                    <p>Con esta estrategia o patrón de diseño responsive se notan más los cambios. Se inicia con un diseño modo vertical y a medida que se va creciendo la pantalla se empieza a acomodar los contenedores padres que se van renderizando con otros elementos dentro. La clave de este diseño es el reposicionamiento de contenedores y la colocación debajo de otras columnas.</p>
                </span> <!-- id="menu730" -->
            <h3><a href="javascript: void(0);" onClick="toggle('menu740')">7.4. Column Drop</h3></a>
                <span id="menu740" style="display:none;">
                    <img class="imagen" src="./images/column-drop.png">
                <p>En este patrón se tiene todo de forma vertical pero a la hora de que va creciendo el contenido empieza a arrojar los contenedores y los reposiciona a la línea principal, secundaria, etc... En este no se limita el crecimiento del container porque queremos que se estire por completo, que ocupe todo el ancho de la pantalla.</p>
                <p><a href="https://developers.google.com/web/fundamentals/design-and-ux/responsive/patterns" target="_blank">Enlace para profundizar en patrones de diseño web adaptable</a></p>
                </span> <!-- id="menu740" -->
            <h3><a href="javascript: void(0);" onClick="toggle('menu750')">7.5. Buenas prácticas y ejemplos de responsive</h3></a>
                <span id="menu750" style="display:none;">
                    <p>Existen muchos patrones de diseño responsive, algunos hasta incluyen JS pero los 3 vistos anteriormente son los más usados y reconocidos.</p>
                    <p>Algunas de las buenas prácticas que debemos implementar a la hora de desarrollar en responsive son:</p>
                    <ul>
                        <li>Siempre preparar los archivos CSS por breakpoint y no todos en una sola hojas de estilos.</li>
                        <ul>
                            <li>mobile.css/style.css</li>
                            <li>tablet.css</li>
                            <li>desktop.css</li>
                        </ul>
                        <li>Trabajar con máximo 6 breakpoints. Debido a que se generará más código lo cual impactará en performance y no es buena práctica.</li>
                    </ul>
                </span> <!-- id="menu750" -->
            <h3><a href="javascript: void(0);" onClick="toggle('menu760')">7.6. Imágenes responsive</h3></a>
                <span id="menu760" style="display:none;">
                    <p><code> picture </code> y <code> source </code> nos ayudan para trabajar imágenes responsive.</p>
                    <div class="code"><code>
                        < picture > </br>
                        < source media="(min-width:1300px)" srcset="./imgs/large.jpg" /> </br>
                        < source media="(min-width:1000px)" srcset="./imgs/medium.jpg" /> </br>
                        < img src="./imgs/small.jpg" alt="Esuna imágen de ejemplo" /> </br>
                        < /picture> </br></code>
                    </div>
                    <p>la etiqueta <code> source </code> recibe como parámetros media y el srcset. media recibe los valores en los cuales se van a mostrar diferente imágenes dependiendo del tamaño de la pantalla. Y srcset recibe la ruta de la imagen y el navegador decide cuál cargar dependiendo del peso. srcset se comunica con el navegador y le da opciones para escoger la mejor imagen para ese dispositivo. Recibe una imagen como parámetro.</p>
                    <h4><a href="javascript: void(0);" onClick="toggle('menu761')">7.6.1. Herramientas para responsive</h4></a>
                        <span id="menu761" style="display:none;">    
                            <p>mydevice nos muestra los viewport de todos los dispositivos para saber con cuales podemos trabajar. Pero por lo general con trabajar en: 300px, 600px y 1040px tenemos varios dispositivos optimizados.</p>
                            <p><a href="https://www.mydevice.io/" target="_blank">mydevice</a></p>
                            <p><a href="https://responsively.app/" target="_blank">responsively</a></p>
                        </span> <!-- id="menu761" -->
                </span> <!-- id="menu760" -->
        </span> <!-- id="menu700" -->
    <h2><a href="javascript: void(0);" onClick="toggle('menu800')">8. Accesibilidad</h2></a>
        <span id="menu800" style="display:none;" >
            <p>Garantizar la accesibilidad de nuestro sitio es hacerlo inclusivo. Permitir que personas con discapacidades puedan acceder y disfrutar el contenido de una forma fácil para ellos.</p>
            <h3><a href="javascript: void(0);" onClick="toggle('menu810')">8.1. Semántica</h3></a>
                <span id="menu810" style="display:none;">
                    <p>Debemos usar HTML semántico y no solo etiquetas div. Esto le permite a los software de lectura de pantalla saber donde están ubicados para poder guiar a su usuario. Las etiquetas semánticas son las mostradas en la clase <b>index y su estructura básica: body</b></p>
                </span> <!-- id="menu810" -->        
            <h3><a href="javascript: void(0);" onClick="toggle('menu820')">8.2. Texto</h3></a>
                <span id="menu820" style="display:none;">
                    <p>Se recomienda siempre usar medidas relativas, como rem, para los textos. Esto con el fin de que personas con discapacidades visuales puedan aumentar el tamaño de la fuente desde su navegador. Si el texto estuviese en pixeles no se podría cambiar.</p>
                </span> <!-- id="menu820" -->        
            <h3><a href="javascript: void(0);" onClick="toggle('menu830')">8.3. Labels, alt y title</h3></a>
                <span id="menu830" style="display:none;">
                    <p>Los <b>labels</b> funcionan junto a los inputs. Es importante porque al envolver el input en un label, este le da un foco especial que permite hacer click sobre el label y nos lleva a rellenar la información del input. Le ayuda mucho a algunos software de lectura  a enfocarse en el input directamente.</p>
                    <p>El atributo <b>alt</b> nos ayuda a leer la descripción de las imagenes para personas con discapacidades visuales. También sirve para agregar un texto alternativo en caso que la imagen no se carge.</p>
                    <p>El atributo <b>title</b> puede ser usado en varias etiquetas HTML como <b>img</b> o <b>a</b> y su función es agregar una descripción para cuando el usuario haga hover sobre algún elemento.</p>
                </span> <!-- id="menu830" -->  
        </span>  <!-- id="menu800" -->
</div> <!-- Termina class="article" -->
</div> <!-- Termina class="container" -->
</body>
</html>

