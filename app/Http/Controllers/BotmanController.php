<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Incoming\Answer;


class BotmanController extends Controller
{
    /**Esta funcion es la de el chatbot esta funcion ya la definimos en nuestra ruta de chatbot
     * dicha ruta accedera a este metodo handle y en este metodo se encuentra el contenido
     * de nuestro chatbot**/
    public function handle()
    {
        $botman = app('botman');

        /**Esta funcion es la cual replicara nuestro mensaje con una respuesta**/
        $botman->hears('{message}', function ($botman, $message) {


            /**Aqui hemos creado todas nuestras preguntas de el chatbot**/

            /**(If$message) es la funcion de un solo mensaje que cuando el usario lo escribe tiene que ser
             * exactamente de la forma que aqui este escrito por ejemplo hola todo minuscula entonces el
             * usuario al escribirlo tal y como esta detallado nuestro chat respondera Hola como te llamas
             * si no se escribe de la forma detallada no respondera nada**/

            /**Por eso tambien variamos con (or$message)para dar mas entrada de respuesta con distinto formato
             * mayuscula,minuscula,grande,pequeña, tambien con un hola bot minuscula o mayuscula grande o pequeña**/

            /**El usuario responde Hola el chatbot responde lo que esta en la (funcion Askname)**/
            if ($message == 'hola' or $message == 'Hola' or $message == 'HOLA' or $message == 'Hola Bot' or $message == 'hola bot' or $message == 'HOLA BOT') {
                $this->askName($botman);

                /**El usuario responde ayuda o tengo un problema**/
            } elseif ($message == 'necesito ayuda' or $message == 'Necesito Ayuda' or $message == 'NECESITO AYUDA' or $message == 'Tengo un problema' or $message == 'Tengo Un Problema' or $message == 'TENGO UN PROBLEMA' or $message == 'tengo un problema' or $message == 'ayuda' or $message == 'AYUDA' or $message == 'Ayuda') {
                /**El chatbot respondera con todas estas opciones*/
                $botman->reply("Si quieres saber cuáles son los requisitos de el Registro escribe✔️ (0)");
                $botman->reply("Si quieres saber cómo Registrarte como donante👥💉 escribe (1)");
                $botman->reply("Si quieres saber cuál es la importancia de donar💓 escribe (2)");
                $botman->reply("Si quieres saber que debes hacer antes de hacer una donación👨‍⚕️ escribe (3)");
                $botman->reply("para ver más opciones escribe➕ (Mas)");

                /**Si el usuario responde 0 el chatbot respondera con este parrafo**/
            } elseif ($message == '0') {
                $botman->reply("Los requisitos son ✔️: ser mayor de edad y Tener un usuario en BloodBuddy");
                $botman->reply("Si aun no eres un Usuario copia y pega este enlace en tu navegador y crea tu Usuario📲💻 http://127.0.0.1:8000/register");

                /**Si el usuario responde 1 el chatbot respondera con este parrafo**/
            } elseif ($message == '1') {
                $botman->reply("Para ser un donante debes de haberte registrado anteriormente en BloodBuddy,
                 Luego debes ir al apartado donante y luego dar click y te llevara al formulario de registro,
                 para que puedas registrarte siguiendo los pasos, si no sabes donde se encuentra el apartado de donante copia y pega
                 este enlace en tu navegador📲💻 http://127.0.0.1:8000/donantes/create");

                /**Si el usuario responde 2 el chatbot respondera con este parrafo**/
            } elseif ($message == '2') {
                $botman->reply("💉Donar sangre es donar vida, pues las transfusiones no solo forman parte del tratamiento de determinadas enfermedades, 
                sino también a salvar vidas ante situaciones médicas de extrema gravedad, como en caso de hemorragias por accidentes de tráfico, 
                por poner un ejemplo sencillo, Se dice que con una sola donación se pueden salvar tres vidas, porque son tres los fundamentales
                 usos en los que se fracciona una sola bolsa de sangre.🩸🩺");

                /**Si el usuario responde 3 el chatbot respondera con este parrafo**/
            } elseif ($message == '3') {
                $botman->reply("😴Duerma bien la noche anterior a la donación, acuda tras haber ingerido una comida pobre en grasas, (nunca en ayunas)
                 y evite fumar desde al menos una hora antes de la donación, Si tienen tendencia a tener niveles bajos de hierro, puede prepararse tomando alimentos ricos,
                  como carnes rojas, hígado, pescado y huevos. También las legumbres y frutos secos son ricos en este nutriente.🥕🥬");

                /**Si el usuario responde mas el chatbot respondera con estas opciones**/
            } elseif ($message == 'mas' or $message == 'MAS' or $message == 'Mas') {
                $botman->reply("¿Puedo donar si estoy tomando medicación?🧴💊 escribe (4)");
                $botman->reply("¿Que debo hacer después de haber Donado?☑️❔ escribe (5)");
                $botman->reply(" 👨‍🔬¿Qué síntomas puedo presentar durante y después de donar?🤒 escribe (6)");
                $botman->reply("🚑¿Quieres saber para qué se utiliza la sangre?💉🩸 Escribe (7)");

                /**Si el usuario responde 4 el chatbot respondera con este parrafo**/
            } elseif ($message == '4') {
                $botman->reply("La mayoría de los medicamentos no impide donar sangre. Los medicamentos comunes, como los que se usan para controlar la presión arterial,
                 las píldoras anticonceptivas y los medicamentos de venta libre, no afectan la elegibilidad🧴💊.");

                /**Si el usuario responde 5 el chatbot respondera con este parrafo**/
            } elseif ($message == '5') {
                $botman->reply("Tras la donación es necesario mantenerse en reposo durante unos 10-15 minutos. Debe tomar abundantes líquidos y 
                evitar fumar y beber alcohol en las dos horas siguientes a la donación. Debe evitar ambientes calurosos o la realización de 
                deportes o actividades extenuantes al menos hasta el día siguiente.☑️💯");

                /**Si el usuario responde 6 el chatbot respondera con este parrafo**/
            } elseif ($message == '6') {
                $botman->reply("🤒Durante las donaciónes de sangre, puedes llegar a presentar mareo,
                nausea sensación de frío, hormigueo en labios y nariz que se acentúan pero La recuperación puede ser
                paulatina sin afectar las actividades tu vida diaria.💯");

                /**Si el usuario responde 7 el chatbot respondera con este parrafo**/
            } elseif ($message == '7') {
                $botman->reply("👨‍🔬La sangre que se obtiene gracias a las donaciones, es destinada
                al tratamiento de muchas enfermedades que producen anemia y en el tratamiento de distintos tipos de cáncer,
                así como a intervenciones quirúrgicas, trasplantes de órganos y tratamiento ante accidentes, hemorragias y quemaduras.");

                /**Si el usuario responde gracias de cualquiera de estas formas*/
            } elseif ($message == 'muchas gracias' or $message == 'gracias' or $message == 'Gracias' or $message == 'Muchas gracias' or $message == 'GRACIAS' or $message == 'ok' or $message == 'OK' or $message == 'ok gracias' or $message == 'OK GRACIAS' or $message == 'Ok Gracias') {

                /**el chatbot respondera con lo siguiente**/
                $botman->reply("😃de nada ¿deceas que te ayude en algo más? ❓ ");

                /**Si el usuario responde NO de cualquiera de estas formas*/
            } elseif ($message == 'No' or $message == 'no' or $message == 'NO' or $message == 'no gracias' or $message == 'No gracias' or $message == 'NO GRACIAS' or $message == 'nada' or $message == 'NADA' or $message == 'nada gracias' or $message == 'NADA GRACIAS') {

                /**el chatbot respondera con lo siguiente**/
                $botman->reply("😃Muchas gracias por haber usado el servicio de asistencia de BloodBuddy espero haberte Ayudado.👍");

                /**Si el usuario responde SI de cualquiera de estas formas*/
            } elseif ($message == 'si porfavor' or $message == 'si' or $message == 'SI' or $message == 'Por favor' or $message == 'por favor' or $message == 'porfavor') {

                /**el chatbot respondera con lo siguiente**/
                $botman->reply("¿que mas deceas Saber?👀");
            }
        });

        $botman->listen();
    }
    /**Como dijimos al comienzo esta funcion Askname nos dara apertura a nuestro chatbot
     * ya que cuando el usuario escriba el Hola o hola bot el chatbot respondera lo siguiente**/
    public function askName($botman)
    {
        /**el chatbot respondera lo siguiente**/
        $botman->ask('✋¡Hola! Como te llamas', function (Answer $answer) {

            /**$name sirve para que cuando el usuario escriba su nombre**/
            $name = $answer->getText();

            /**el chatbot respondera lo siguiente**/ /**$name devolvera el nombre que escribio el usuario antes**/
            $this->say('😃¡Es un Gusto Conocerte! ' . $name);
            $this->say('🙌Si necesitas Ayuda escribe👉Ayuda o 👉Tengo un problema');
        });
    }
}