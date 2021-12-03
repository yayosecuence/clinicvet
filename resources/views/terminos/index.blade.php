

@extends('layouts.app')

@section('content')
  <style>
        .container2 {
            max-width: 820px;
            margin: 0px auto;
            margin-top: 50px;
        }

        .comment {
            float: left;
            width: 100%;
            height: auto;
        }

        .commenter {
            float: left;
        }

        .commenter img {
            width: 35px;
            height: 35px;
        }

        .comment-text-area {
            float: left;
            width: 100%;
            height: auto;
        }

        .textinput {
            float: left;
            width: 100%;
            min-height: 75px;
            outline: none;
            resize: none;
            border: 1px solid grey;
        }
    </style>

    <script>


$(document).ready(function(){
$(".btn").click(function(){

var xmlhttp3 = new XMLHttpRequest();
var valores5=document.getElementById('id').value;
  
        
        if (confirm("Usted acaba de aceptar los terminos y condiciones del sistema")) {
       xmlhttp3.open("GET", "http://localhost:8080/skylar/servicios/insert_terminos.php?id="+valores5+"&confirmacion=Acepto", true);
        xmlhttp3.send();
        location.replace("http://localhost:8080/skylar/public/home")
      } else {
        location.replace("http://localhost:8080/skylar/public/home")
      }
       

});

});
</script>
<div class="container">
      
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center"><h4><b>Términos, Condiciones de Uso y Política de Privacidad</b></h4></div>
               <div class="col-md-12">
               	
              

<div class="container2">
  <div class="comment">
<textarea class="textinput" placeholder="Comment" rows="20" cols="95" disabled>

1. INFORMACIÓN GENERAL
Los presentes Términos y condiciones de uso y la Política de privacidad rigen el uso del sitio web mypropertyadmin.com, propiedad de Property Admin S.A. (en adelante PA).
Si desea ponerse en contacto con PA para tratar temas relacionados con este sitio web, puede hacerlo mediante el formulario disponible en https://www.mypropertyadmin.com/#contact.
El acceso y el uso de este sitio web es responsabilidad total del usuario, que está sujeto a la aceptación de los presentes términos y condiciones de uso, de la política de privacidad y el uso de los datos aquí transcritos. El uso de este sitio web y las relaciones entre PA y los usuarios se rigen por la legislación ecuatoriana aplicable.

PA se reserva el derecho de cambiar los presentes términos y condiciones de uso o revisar la política de privacidad y uso de datos en los presentes identificados siempre que lo considere oportuno, en cualquier momento, con o sin previo aviso. Para consultar su versión actual, haga clic en los "Términos y condiciones de uso" que se encuentran en el sitio web de PA. La versión más actual de los Términos y condiciones de uso sustituye todas las versiones anteriores.
Si no está de acuerdo con estos Términos y condiciones de uso, no utilice el sitio web. Estos Términos y condiciones de uso y la Política de privacidad constituyen un contrato entre el usuario y PA, y se aplican en el uso del sitio web. Es responsabilidad del usuario leer y revisar los mismos cada vez que accede al sitio web, con el fin de conocer cualquier cambio realizado, ya que los mismos afectan a sus derechos.
2. DERECHOS DE PROPIEDAD INTELECTUAL
Los contenidos que aparecen en el sitio web, incluyendo, sin limitación, imágenes, textos, software, fotografías, sonido, música, vídeos, elementos interactivos y afines ("Contenido"), marcas y logotipos ("Marcas"), o cualquier otro derecho de propiedad industrial o intelectual que aparecen en el mismo, son propiedad de PA y queda expresamente prohibido su uso por terceros no autorizados. El contenido del sitio web solo está disponible para información y uso personal y no puede ser utilizado, copiado, reproducido, distribuido, transmitido, difundido, vendido, licenciado o, de cualquier otra forma, explotado para cualquier otro fin sin el consentimiento previo y por escrito de sus respectivos propietarios. El usuario acepta no utilizar, desactivar o interferir con los recursos relacionados con la seguridad del sitio web y de la aplicación.
Sin embargo, el usuario podrá imprimir el material contenido en este sitio web, siempre que el mismo no se modifique, sea para uso personal y no comercial, y mantenga la indicación de la fuente y de los derechos de autor, y siempre que no se elimine ninguna otra indicación de propiedad.
Nada en este sitio web deberá interpretarse como una concesión de cualquier tipo de licencia u otra autorización de uso a sus usuarios.

El sitio web puede contener imágenes u otros materiales cuyos derechos de autor pertenecen a terceros, tal como proveedores u otras entidades que contribuyan a su creación o mantenimiento (como, por ejemplo, fotos de banco de imágenes).

A pesar de que los datos personales proporcionados a PA están protegidos de acuerdo a lo definido en la Política de privacidad y uso de datos que aparecen en los presentes Términos y condiciones de uso, cualquier información u otro contenido que el usuario transmita a través de este sitio web, ya sea mediante correo electrónico, envío de archivos o de algún otro modo, se considerará como no confidencial y no reservado.
3. CONTENIDOS Y GARANTÍAS
El usuario acepta que el uso del sitio web debe hacerse bajo su propia cuenta y riesgo. En la medida en que lo permita la ley, PA, está exenta de cualquier garantía, expresa o implícita, con respecto al uso del sitio web. PA no garantiza la veracidad o exactitud de los contenidos disponibles en sus sitios web y no asume ninguna responsabilidad u obligación por cualquier (i) error o contenido poco preciso, (ii) daño personal o daño a la propiedad de cualquier naturaleza que resulte del acceso y uso de las páginas de este sitio web y su aplicación, (iii) acceso no autorizado o uso de nuestros servidores seguros o de información personal o financiera almacenada en ellos, (iv) interrupción o cese de la transmisión desde o hacia nuestro sitio web (iv) error, virus, troyano o similar que pueda ser transmitido hacia o a través del sitio web, o (v) error u omisión en el contenido o cualquier pérdida o daño que se haya producido como resultado del uso de contenidos publicados, enviados, transmitidos o puestos a disposición a través del sitio web, (vi) la no disponibilidad o cualquier dificultad o incapacidad de descargar o acceder al contenido o cualquier otra falla en el sistema de comunicación que pueda resultar en la no disponibilidad del sitio web. PA no será responsable de cualquier asistencia o mantenimiento del sitio web.
PA se reserva el derecho de realizar cambios y correcciones, modificar el nombre y suspender o cerrar el sitio web mypropertyadmin.com cuando lo considere apropiado y sin necesidad de avisar previamente a los usuarios.

PA no asume responsabilidad u obligación por el contenido transmitido entre los usuarios o entre estos y cualquier tercero fuera de este sitio web.
4. RESPONSABILIDAD, USO Y RIESGO
En la medida en que sea permitido por la ley, PA y todos sus representantes legales, directores, empleados u otros que por cualquier forma actúen en nombre y representación de PA, así como cualquier otra parte involucrada en la creación, producción, mantenimiento o implementación de este sitio web, no serán responsables ante cualquier usuario del sitio web, por cualquier posible daño, perjuicio o lesión (incluyendo cualquier pérdida de lucro cesante y daños morales, cualquier pérdida indirecta, accidental o consecuencial) que se deriven del uso correcto o incorrecto de este sitio web y su contenido, del acceso al ordenador, teléfono inteligente, tableta o sistema informático del usuario por terceros, o de cualquier virus, entre otros.
Este sitio web contiene enlaces a sitios web de terceros. Estos enlaces se proporcionan únicamente para la comodidad y el acceso más fácil al usuario. La existencia de dichos enlaces no significa que PA tenga derecho alguno sobre los contenidos de los sitios referidos. PA no comprueba su contenido y no es responsable por el contenido de cualquiera de estos sitios o por cualquier hecho derivado de su uso o visualización, sin verificar que los mismos estén libres de cualquier tipo de virus u otros elementos que puedan causar daños al usuario. El acceso y la visita a cualquiera de estos sitios de terceros se realizan bajo riesgo total del usuario, siendo el usuario el responsable de cualquier uso o de las consecuencias de allí resultantes.

Queda expresamente prohibido el uso del sitio web para fines ilegales o cualesquiera otros fines que puedan ser considerados indignos de la imagen de PA. La usurpación, contrafacción, aprovechamiento del contenido usurpado o falsificación, la identificación ilegítima y la competencia desleal son punibles criminalmente.

El usuario también tiene prohibido crear o introducir en este sitio web cualquier tipo de virus o programa que lo dañe o contamine o aconseje a terceros a hacerlo. La práctica de dicha infracción es punible en los términos de la ley.

El sitio web es controlado y ofrecido por PA desde sus instalaciones en Ecuador. PA no garantiza que el sitio web esté disponible para su uso en otros lugares. Quienes accedan o utilicen el sitio web desde otras jurisdicciones lo hacen bajo su propia iniciativa y son responsables por el cumplimiento de las leyes locales.
5. POLÍTICA DE PRIVACIDAD Y USO DE DATOS
PA es responsable por el uso de la información personal de los usuarios recogida directamente a través de diversos medios. PA se compromete a poner en práctica las medidas técnicas y organizativas adecuadas para proteger los datos personales de sus usuarios contra su destrucción, accidental o ilícita, pérdida accidental, modificación, divulgación o acceso no autorizado.
Se considera la aplicación de un nivel de seguridad acorde con los riesgos que implica el uso dada la naturaleza de los datos a proteger.

Por tanto, PA puede recoger y guardar información que le haya sido suministrada de manera voluntaria y con consentimiento, incluyendo, entre otros, información personal individualizada, como el nombre, dirección, dirección de correo electrónico y el número de teléfono. PA antes del uso y recogida de los datos personales directamente de los respectivos titulares, proporcionará toda la información necesaria relativa al uso y recogerá la autorización respectiva para tal fin.
Los datos proporcionados por los usuarios serán utilizados por PA de conformidad con los preceptos legalmente aplicables, en particular:

a) Utilizados de forma lícita y respetando el principio de buena fe;
b) Recogidos con fines determinados, explícitos y legítimos, no pudiendo ser utilizados posteriormente;
c) Exactos y, de ser necesario, actualizados, debiendo tomarse las medidas adecuadas para asegurar que sean eliminados o rectificados los datos inexactos o incompletos, teniendo en cuenta el fin para el que fueron recogidos o para los que son tratados posteriormente;
d) Conservados para permitir la identificación de sus titulares solamente durante el período necesario para alcanzar los fines de recogida o uso posterior. Los datos solicitados en el sitio web no son considerados, a la luz de la legislación aplicable, como datos sensibles y, por lo tanto, no se aplican las inherentes restricciones.
Los datos personales del usuario son recogidos e introducidos por PA en un archivo automatizado para llevar a cabo actividades incluidas en el ámbito de la iniciativa del sitio web mypropertyadmin.com.
Los datos recogidos podrán transmitirse a otras sociedades del Grupo PA, con sede en Ecuador o en el extranjero, para llevar a cabo cualquier actividad incluida en la iniciativa del sitio web. La recogida y el uso de datos personales se llevarán a cabo de acuerdo con la legislación ecuatoriana, aplicable y vigente, y todas las autorizaciones que, a tal fin, resulten necesarias, se obtendrán previamente por la Ley Orgánica de Protección de Datos. Según la ley, PA adoptó las medidas necesarias para garantizar que los datos proporcionados estén protegidos contra el acceso o uso no autorizado por parte de terceros no autorizados. Sin embargo, PA alerta ante el riesgo residual de acceso no autorizado a través de Internet.

Hay otros tipos de datos, en este caso no personales y no individualizados, que se registran solo para ayudar a mantener el sitio web útil y para garantizar una buena experiencia de navegación de quien lo visita. Se trata de las informaciones estadísticas que, normalmente y por definición, son registradas a través de la ventana de navegación de Internet ("browser"), tales como: la dirección en Internet del sitio web que trajo al usuario directamente al sitio web de PA, las páginas del sitio web más visitadas, el tipo de navegador y el sistema operativo, entre otros.
6. CAPACIDAD PARA ACEPTAR LOS TÉRMINOS Y CONDICIONES DE USO
El usuario confirma ser mayor de 18 años de edad o que cuenta con la autorización legal de sus padres o tutores y ser plenamente capaz de consentir y aceptar los términos, condiciones, obligaciones, afirmaciones, representaciones y garantías descritas en estos Términos y condiciones de uso, y respetar y cumplir los mismos. Si tiene menos de 18 años de edad y no posee una autorización legal de los padres o representantes legales, no utilice el sitio web.
7. SEGURIDAD Y USO DE LA INFORMACIÓN
PA se compromete a garantizar la privacidad de los usuarios registrados. PA no vende ni alquila a terceros cualquier dato personal enviado por los usuarios registrados.

A pesar de los esfuerzos de PA para proteger sus datos personales, una vez que estos son recogidos a través de una red abierta como Internet, los mismos solamente podrán circular en la red sin condiciones de seguridad, corriendo el riesgo de ser vistos y utilizados por terceros no autorizados.
8. CONSERVACIÓN DE INFORMACIÓN PERSONAL
Después de recoger la información de datos personales e individuales, que voluntariamente le fue transmitida, PA procederá a su conservación y mantenimiento hasta nuevo aviso o hasta que sea requerido por la ley. La conservación de esa información permite que PA siga proporcionando servicios personalizados sin interrupción.
9. TRANSMISIÓN
Estos Términos y condiciones de uso y cualquier derecho y licencia por el presente concedidos, no pueden ser transferidos o cedidos por el usuario, pudiendo, sin embargo, ser atribuidos por PA a terceros sin restricción alguna.
10. LEY APLICABLE
Los presentes Términos y condiciones de uso y la Política de privacidad se rigen por la legislación ecuatoriana y se interpretarán de acuerdo a la misma. La versión en español de los presentes Términos y condiciones de uso y de la Política de privacidad, prevalecerán sobre cualquier traducción a otros idiomas, si las hubiera. La nulidad de alguna de las disposiciones tendrá que ser eliminada, quedando las restantes disposiciones del mismo en vigor íntegramente y produciendo sus efectos. 

En la falta de un acuerdo amigable entre las partes, los conflictos y disputas de cualquier naturaleza, relacionados con la formación, aplicación o interpretación del presente Contrato, serán regidos por la ley de Ecuador y sujetos a la jurisdicción del Consejo Nacional de la Judicatura, con renuncia expresa a cualquier otro.


                </textarea>
</div>
</div>
      
            		<form action="{{url('/terminos')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}

     

<input type="text" class="form-control" name="urbanizacion" id="urbanizacion" value="{{Auth::user()->urbanizacion}}" style="visibility: hidden">

        <input type="checkbox" class="" id="confirmacion" name="confirmacion" value="Acepto" checked="">Acepto.

<input type="text" class="form-control" name="id" id="id" value="{{Auth::user()->id}}" style="visibility: hidden">



</form>

<div align="center">
<button type="button" class="btn btn-danger" >Confirmar</button>
</div>
<br>
 </div>
                </div>
              

            </div>

           
        </div>
 	 
    </div>



@endsection