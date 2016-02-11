-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-08-2013 a las 10:02:25
-- Versión del servidor: 5.5.31-0ubuntu0.13.04.1
-- Versión de PHP: 5.4.9-4ubuntu2

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `usuariosena_peneperfecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--
-- Creación: 20-02-2013 a las 03:24:49
-- Última actualización: 11-06-2013 a las 16:24:52
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `user` varchar(254) DEFAULT NULL,
  `pass` varchar(254) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('admin', '852b8c73c1c187f35fad4476f6cc7744'),
('breitner', '70a12201de168398ebcb10487c5df783'),
('cms@imaginamos.com', '475266560c6d9f03f9ec80340218fa4c');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficios`
--
-- Creación: 20-02-2013 a las 03:24:50
-- Última actualización: 19-07-2013 a las 03:52:58
--

DROP TABLE IF EXISTS `beneficios`;
CREATE TABLE IF NOT EXISTS `beneficios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) DEFAULT NULL,
  `descripcion` text,
  `imagen` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `beneficios`
--

INSERT INTO `beneficios` (`id`, `titulo`, `descripcion`, `imagen`) VALUES
(1, 'Alargamiento y engrosamiento permanente de su pene', '<p style="text-align: justify;"><span style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; font-size: 13px; line-height: 17px; text-align: justify;">En solo&nbsp;</span><strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; line-height: 17px; text-align: justify;">2 semanas</strong><span style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; font-size: 13px; line-height: 17px; text-align: justify;">&nbsp;y dedicando tan solo algunos minutos por d&iacute;a, comenzar&aacute; a evidenciar aumentos tanto en la longitud como en el grosor de su pene. Nuestras t&eacute;cnicas y ejercicios, ya han dado resultado a miles de usuarios en todo el mundo. Nuestras t&eacute;cnicas son &uacute;nicas y no est&aacute;n disponibles en ning&uacute;n otro sitio.</span></p>', '/img/310955292.png'),
(2, 'Gane confianza y autoestima', '<p><span style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; font-size: 13px; line-height: 17px; text-align: justify;">Son muchos los hombres que sufren del problema de tener un pene peque&ntilde;o, provoc&aacute;ndoles complejos de inferioridad y quit&aacute;ndoles la confianza a la hora de conquistar o estar con una mujer. Uno de los factores m&aacute;s importantes en la calidad y rendimiento de una relaci&oacute;n sexual, est&aacute; en la confianza que uno mismo se tenga. Con un pene m&aacute;s largo, ancho y duro, usted conseguir&aacute; toda la confianza necesaria para que sus relaciones sean altamente satisfactorias, tanto para usted como para su pareja. &iexcl;P&iacute;dalo hoy mismo y eleve su seguridad, confianza y autoestima!</span></p>', '/img/25403900.png'),
(3, 'Tenga control de sus eyaculaciones y mejore la calidad de sus relaciones.', '<p><span style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; font-size: 13px; line-height: 17px; text-align: justify;">Aprender&aacute; a tener control total de sus eyaculaciones, consiguiendo relaciones sexuales mucho m&aacute;s placenteras para usted y su pareja. Los ejercicios y t&eacute;cnicas de nuestro manual + video lo ayudar&aacute;n para que sea usted quien controle las relaciones sexuales y no ella!</span></p>', '/img/428925958.png'),
(4, 'Aumente el volumen de semen de sus eyaculaciones', '<p style="text-align: justify;"><span style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; font-size: 13px; line-height: 17px; text-align: justify;">Asombre a su pareja con eyaculaciones poderosas. Nuestros ejercicios 100% naturales lo ayudar&aacute;n a tener eyaculaciones con mayor cantidad de semen y mayor potencia de eyaculaci&oacute;n. &iexcl;Con Peneperfecto.com es posible! El incremento del tama&ntilde;o del pene nunca hab&iacute;a sido tan f&aacute;cil. Nuestra gu&iacute;a de ejercicios y consejos es &uacute;nica. No encontrar&aacute; esta informaci&oacute;n en ning&uacute;n otro sitio.</span></p>', '/img/699943025.png'),
(5, 'Corrija la curvatura de su pene', '<p class="MsoNormal" style="text-align:justify"><span style="font-size: 10pt; line-height: 115%; font-family: Arial, sans-serif; color: rgb(89, 89, 89); background-position: initial initial; background-repeat: initial initial;">Aprender&aacute; a corregir la curvatura de su pene en un 100% Tu curva probablemente es una verg&uuml;enza para ti y lo que es peor, puede estar caus&aacute;ndote dolor o molestias durante el sexo y hace que tu pene parezca un poco m&aacute;s peque&ntilde;o No importa si su pene esta doblado hacia un lado u otro con nuestro efectivo programa usted podr&aacute; corregir su curva en muy poco tiempo y tener el pene recto de forma permanente.</span><o:p></o:p></p>', '/img/392636418.png'),
(6, 'Fin a la eyaculacion precoz y controle sus orgasmos.', '<p style="text-align: justify;"><span style="color: rgb(89, 89, 89); font-family: Arial, sans-serif; font-size: 10pt; line-height: 115%; text-align: justify;">Fin a la eyaculaci&oacute;n precoz de forma permanente controlando sus orgasmos, todo hombre quiere satisfacer a su pareja en la cama, pero las mujeres necesitan m&aacute;s tiempo que el hombre para llegar al orgasmo, si usted sufre de eyaculaci&oacute;n precoz o necesita durar mucho m&aacute;s tiempo entonces aqu&iacute; esta la soluci&oacute;n 100% Garantizada!</span>&nbsp;</p>', '/img/992591797.png'),
(13, 'Brindarle mayor placer a su pareja.', '<p><span style="font-size: 9pt; line-height: 115%; font-family: Arial, sans-serif; color: rgb(89, 89, 89);">Br&iacute;ndale mayor placer a tu pareja.</span><span style="font-size: 9pt; line-height: 115%; font-family: Arial, sans-serif;">&nbsp;</span><span style="font-size: 10pt; line-height: 115%; font-family: Arial, sans-serif; color: rgb(89, 89, 89);">No es dif&iacute;cil entender por qu&eacute; un pene m&aacute;s grande (m&aacute;s largo y/o m&aacute;s grueso) causa mayor satisfacci&oacute;n vaginal que los penes m&aacute;s peque&ntilde;os. Sabemos que la vagina no tiene muchas terminaciones nerviosas pasado el primer tercio. Pero estas paredes vaginales son muy sensibles a la presi&oacute;n profunda del tejido. Tanto un pene largo como uno grueso crean m&aacute;s presi&oacute;n en estas paredes.</span>&nbsp;</p>\r\n<p class="MsoNormal"><span style="font-size: 10pt; line-height: 115%; font-family: Arial, sans-serif; color: rgb(89, 89, 89); background-position: initial initial; background-repeat: initial initial;">Por qu&eacute; las mujeres prefieren los penes m&aacute;s grandes:<span class="apple-converted-space">&nbsp;</span></span><span style="font-size:\r\n10.0pt;line-height:115%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;color:#595959;\r\nmso-themecolor:text1;mso-themetint:166"><br style="outline: none 0px;" />\r\n<br style="outline: none 0px;" />\r\n<span style="background-position: initial initial; background-repeat: initial initial;">* Estimulaci&oacute;n profunda de la parte posterior de la vagina<span class="apple-converted-space">&nbsp;</span></span><br style="outline: none 0px;" />\r\n<span style="background-position: initial initial; background-repeat: initial initial;">* Estimulaci&oacute;n del &uacute;tero<span class="apple-converted-space">&nbsp;</span></span><br style="outline: none 0px;" />\r\n<span style="background-position: initial initial; background-repeat: initial initial;">* M&aacute;s fricci&oacute;n a lo largo de las paredes vaginales<span class="apple-converted-space">&nbsp;</span></span><br style="outline: none 0px;" />\r\n<span style="background-position: initial initial; background-repeat: initial initial;">* Permite cualquier posici&oacute;n para penetraci&oacute;n<span class="apple-converted-space">&nbsp;</span></span><br style="outline: none 0px;" />\r\n<span style="background-position: initial initial; background-repeat: initial initial;">* El pene no se saldr&aacute; durante el acto sexual<span class="apple-converted-space">&nbsp;</span></span><o:p></o:p></span></p>\r\n<p class="MsoNormal"><span style="font-size:10.0pt;line-height:115%;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;"><o:p></o:p></span></p>', '/img/932517467.png'),
(14, 'Aumente su Autoestima', '<p class="MsoNormal" style="text-align:justify"><span style="font-size: 10pt; line-height: 115%; font-family: Arial, sans-serif; color: rgb(89, 89, 89); background-position: initial initial; background-repeat: initial initial;">Un pene peque&ntilde;o, impotencia o cualquier otra disfunci&oacute;n sexual puede arruinar por completo la autoestima de un hombre y la manera en como se ve a s&iacute; mismo en el mundo. Las encuestas han probado que los hombres que poseen un pene de tama&ntilde;o m&aacute;s grande tienen m&aacute;s confianza y seguridad en s&iacute; mismos que hombres que poseen un pene de tama&ntilde;o m&aacute;s peque&ntilde;o. Con un gran pene del que estar orgulloso, transmitir&aacute; tu confianza en cualquier cosa que haga.</span><o:p></o:p></p>', '/img/9727176.png'),
(15, 'Pene perfecto es la soluciÃ³n al tamaÃ±o de su pene!', '<p style="text-align: justify;"><span style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; font-size: 13px; line-height: 17px; text-align: justify;">Tenga el pene que siempre so&ntilde;&oacute;, y que todos los hombres desear&iacute;an tener! Su pareja vivir&aacute; dese&aacute;ndolo con un pene de generosas medidas. Su pene ganar&aacute; en tama&ntilde;o no solo erecto, sino tambi&eacute;n en estado fl&aacute;ccido. Qui&eacute;n desea tener un tama&ntilde;o promedio (15 cm.) o menor? Difer&eacute;nciese del resto!! Nuestros ejercicios han sido probados por miles de personas que ya gozan de los beneficios de una mejor vida sexual.</span></p>', '/img/585782616.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficiosanimacion`
--
-- Creación: 20-02-2013 a las 03:24:50
-- Última actualización: 20-02-2013 a las 03:24:50
--

DROP TABLE IF EXISTS `beneficiosanimacion`;
CREATE TABLE IF NOT EXISTS `beneficiosanimacion` (
  `id` int(11) NOT NULL,
  `animacion` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `beneficiosanimacion`
--

INSERT INTO `beneficiosanimacion` (`id`, `animacion`) VALUES
(1, '/img/887323959.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficiosrecomendado`
--
-- Creación: 20-02-2013 a las 03:24:50
-- Última actualización: 20-02-2013 a las 03:24:50
--

DROP TABLE IF EXISTS `beneficiosrecomendado`;
CREATE TABLE IF NOT EXISTS `beneficiosrecomendado` (
  `id` int(11) NOT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `link` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `beneficiosrecomendado`
--

INSERT INTO `beneficiosrecomendado` (`id`, `imagen`, `link`) VALUES
(1, '/img/061777332.jpg', 'http://www.google.com.co/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--
-- Creación: 20-02-2013 a las 03:24:50
-- Última actualización: 15-07-2013 a las 06:27:59
--

DROP TABLE IF EXISTS `comentario`;
CREATE TABLE IF NOT EXISTS `comentario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `venta` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `comentario` text,
  `activo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=871 ;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id`, `venta`, `fecha`, `comentario`, `activo`) VALUES
(437, 493, '2011-07-10', 'perfecto! perfecto! :)', 1),
(438, 796, '2011-07-12', 'esto es lo mejor del internet gracias de nuevo!', 1),
(439, 434, '2011-07-14', 'hola hasta el momento todo funciona muy bien, logre aumentar 4.6 centimetros de longitud y 1.8 centimetros de grosor en un mes 19 dias, que opinan al respecto? Tengo buenos resultados me imagino me siento contento con este producto...', 1),
(440, 515, '2011-07-16', 'mario, pienso que tienes buenos resultados, la mayoria de los practicantes obtiene resultados similiares al tuyo, por lo general se aumenta 3 centimetros al mes variando en un 35% mas o menos, espero que llegues a tu meta lograste mucho aumento en poco tiempo, sigue asi!!', 1),
(441, 426, '2011-07-19', 'Primero que todo gracias por la informaciÃ³n que esta buenÃ­sima. Estos ejercicios lograron que mi vida cambiara fantÃ¡sticamente fue un giro de 360 grados mi mujer esta satisfecha al igual que yo, logre erecciones mas duras mi pene creciÃ³ y se engroso mucho parezco un actor porno jeje, por lo menos asi me dice mi mujer, por fin solucione el problema de la eyaculazion precoz y enderece un poco el pene, estaba doblado hacia abajo, simplemente estoy agradecido con pene perfecto, saludos.', 1),
(436, 1404, '2011-07-09', 'buenos dias, de todo corazon gracias por este grandioso producto estoy super satisfecho y feliz!', 1),
(434, 513, '2011-07-06', 'gracias a pene perfecto ahora tengo un pene re-prerfecto :)', 1),
(435, 669, '2011-07-07', 're-perfecto uff eso suena a buena reparacion o mejoramiento, pienso que gracias a pene perfecto mi verga quedo perfecta :) saludos', 1),
(432, 510, '2011-07-02', 'jaime tambien tenia el problema de la curvatura mi verga estaba muy curvado hacia la izquierda, hasta ahora mejore la curvatura 4 grados pero veo los resultados pronto estara mi verga 100% recto', 1),
(433, 759, '2011-07-05', 'la verdad siempre tenia la sensaciÃ³n que este programa si me funcionaria por lo que es muy diferente a los demÃ¡s tiene mucha credibilidad eso me entusiasmo la inversiÃ³n valiÃ³ la pena estoy contento feliz y dichoso gracias', 1),
(430, 432, '2011-06-28', 'en pocas palabras pene perfecto nos cambio la vida :)', 1),
(431, 566, '2011-06-30', 'agrande mi pene tambien mejore la curvatura del mismo mi esposa no lo puede creer yo tampoco, ahora si hacerlo todos los dias jeje', 1),
(429, 509, '2011-06-26', 'en mi caso pude controlar ese problema de la eyaculazion precoz por fin mis erecciones son mas fuertes y rapidas ahora puedo controlar perfectamente mis eyaculaciones y decido cuando eyacular es fantastico', 1),
(428, 505, '2011-06-24', 'excelente!!', 1),
(426, 506, '2011-06-23', 'primero que todo agradecer a este fenomeno de programa para agrandar el pene y obtener beneficion por que en realidad me funciona muy bien asi comoa todos ustedes los usuarios,\r\n\r\nmis medidas son las siguientes\r\n\r\nantes 15,8 x 12,3\r\nahora 17,2 x 13,9\r\nmeta 21 x 16\r\n\r\ntiempo del proceso 1 mes aproximadamente.', 1),
(427, 490, '2011-06-24', 'mis resultados por el momentos son de un aumento de 2.3 cm de largo por 1,1 centimetros de ancho, hago 15 minutos de rutina estoy agradecido con este programa es lomejor', 1),
(425, 1165, '2011-06-22', 'jhonatan que buenos resultados con respecto a controlar las eyaculaciones pienso que al realizar los ejercicios se aplica al mismo tiempo esa tecnica entre otros beneficios que se aplican al realizar los ejercicios para agrandar el pene, tambien puedo controlar y decicir cuando quiera el momento justo para eyacular es mas emocionante, te veo con buenos resultados dentro de poco llegaras lejos suerte tambien amigo', 1),
(421, 503, '2011-06-16', 'creo q deveriamos de hablar de nuestros resultados iniciales y despues para asi analizar los avances y sacar conclusiones al respecto.\r\n\r\nantes mi pene media 14,6 cm x 11,3 cm\r\nahora mi pene mide 17,8 cm x 12,8 cm \r\n\r\ntiempo trancurrido 4 semanas. espero ver resultados de ustedes por fa.', 1),
(424, 502, '2011-06-21', 'felicito a todos los que han ganado buenos resultados, el programa funciona muy bien, aprendi agrandar mi verga, obtube varios beneficio tengo erecciones mas fuertes duro mas en el acto sexual con mi mujer y controlo mis eyaculaziones\r\n\r\nmis medidas iniciales. 14,2 centimetros x 11,6 centimetros\r\n\r\ndespues de un mes y medio los resultaros son asi..\r\n\r\n18.7 x 13,2 centimetros estoy lograndolo cada dia aumento un poco mas saludos a todos suerte', 1),
(423, 1165, '2011-06-19', 'ronal dejame decirte que has logrado buenos resultados,\r\n\r\nantes 16,7 cm x 13,1\r\nahora 20,3 cm x 15,1\r\n\r\naumente 3,6 cm de largo y 2 cm de espresor o circuferencia en 5 semanas... \r\n\r\nmimeta es de 23 cm x 17 saludos a todos!', 1),
(422, 477, '2011-06-17', 'te felicito ronal, regalame tu msn y asi hablamos sobre rutinas creo que tienes un poco mas de ganancia que yo, y pienso que hacemos las mismas rutinas del manual, eso pienso...', 1),
(420, 501, '2011-06-15', 'Guillo, los ejercicios apuntan a aumentar tanto el largo como el grosor, tambiÃ©n consigues beneficios como evitar la eyaculaciÃ³n precoz, mejorar la curvatura del pene entre otros, pero creo que tu tamaÃ±o esta perfecto si yo hubiera tenido ese tamaÃ±o no los hubiera realizado pero cada cual con su rollo, ahora quiero llegar a 20 cm de largo pero bueno uno se apasiona con esto...', 1),
(418, 500, '2011-06-13', 'hola mi verga mide 18cm puedo tenerla mas grande compre el manualâ€¦', 1),
(417, 497, '2011-06-12', 'te felicito por esos grandes resultados amigo, desde hace aproximadamente 6 semanas hago los ejercicios logrando aumentos impresionantes a todos les funciona por lo visto es excelente', 1),
(413, 839, '2011-06-07', 'el 78% de las mujeres insatisfechas wow por eso quiero tener una super pollapara dejarlas bien satisfechas piden mucho esas mamasitas', 1),
(419, 499, '2011-06-14', 'no manches...estas mas que bien asi', 1),
(416, 498, '2011-06-10', 'Hola seÃ±ores de pene perfecto agradezco su efectivo manual de verdad ustedes hacen una buena labor al ayudar a los que si necesitamos unos centÃ­metros extras de verga para poder ser felices me siente muy mal antes pero ahora que compre y realizo los ejercicios me siento como el mejor del mundo y muy orgulloso con lo que tengo he aumentado 3.6 centÃ­metros mil gracias los quiero', 1),
(415, 677, '2011-06-09', 'jeje tienes toda la razon helio es mejor empezar y agrandar nuestras vergas sin tantos rodeos', 1),
(410, 245, '2011-06-04', 'hola, soy fredy, agradezco por buen producto me gusto la calidad del video se detalla todo los ejercicios perfectamente y el manual pdf es muy descriptivo les pongo un 10 y se los recomiendo a todos! como les prometÃ­ les enviare 100 dÃ³lares de gratitud cuando llegue a ganar 5 cm :) apenas he ganado 1cm pero con esto me da la garantÃ­a que mis 5 cm estÃ¡n cerca y que sus 100 dolares tambiÃ©n estÃ¡n cerca, saludos y gracias!', 1),
(409, 491, '2011-06-04', 'los felicito por que a simple vista puedo notar resultados, solo queria probar si era verdad que funcionaba pero ya me eh convencido en pocos dÃ­as he visto cambios notorios y veo que mi pene se va poner grande muy pronto voy muy bien', 1),
(408, 490, '2011-06-04', 'Acaba de obtener la clave de acceso ustedes son muy cumplidos y serios y eso me gusto mucho, ahora si boy agrandar mi reproductor, graciass si alguien esta mas avanzado que me deje un comentario bye', 1),
(407, 489, '2011-06-03', 'Buenas Lo mas interesante son las de controlar la eyaculaciÃ³n precoz bueno eso era una problema que tenia pero ya lo estoy controlando y loas resultados son magnÃ­ficos ahora mi novio me dice que como hice para hacerle el amor por 20 minutos mas jeje le dije son secretos del hombre', 1),
(403, 485, '2011-06-02', 'Hola soy colombiano y compre este producto manual + video por que necesitaba agrandar mi pene, esto me ha gustado tanto que no puedo dejar de agradecerles y pedirle que sigan asi ayudando a los que mas necesitan de este mÃ©todo gracias amigos', 1),
(402, 482, '2011-06-02', 'a mi tambiÃ©n me gustarÃ­a tenerlo grande para romper conos wey', 1),
(400, 185, '2011-06-01', 'buenas yo hace mas de 1 aÃ±o buscaba un mÃ©todo que de verdad de agrandara por lo menos 3 cm o 4 cm y probÃ© con varios mÃ©todos entre ellos unos ejercicios pero que no funcionaron, pero tengo el honor de decirles que hace 1 mes encontrÃ© esta web y decidÃ­ comprar este manual para probar como ultima opciÃ³n y gracias a Dios por fin estoy logrando mis objetivos he ganado 2.3 cm de largo y me ha llenado de emociÃ³n saber que muy pronto lograre mis 4 centÃ­metros gracias a este gran programa me siento feliz, MIL GRACIAS!', 1),
(399, 480, '2011-06-01', 'Gracias amigos les agradezco de corazÃ³n por la labor que hacen ayudando a los que de verdad necesitamos unos centÃ­metros de mÃ¡s para lograr el mayor placer y felicidad :)', 1),
(397, 478, '2011-05-30', 'hola saludos me enamore del manual ', 1),
(395, 207, '2011-05-28', 'QuÃ© bueno Jorge, eres otro que da prueba de que este producto, SI FUNCIONA, felicitaciones. yo tambiÃ©n lo adquirÃ­ quiero un pene mas grande y fuerte para que mi mujer se muera de tanto placer :)', 1),
(414, 496, '2011-06-08', 'Para aquellos investigadores les comento que pague este producto hace ratico y puedo contarles que esto si me funciono y si funciona asi que no investiguen tanto y mas bien comiencen hacer estas tÃ©cnicas que son 100% naturales, son fÃ¡ciles de hacer y agradables hasta el momento le agregue a mi pene 2 centÃ­metros y les puedo asegurar que mi pareja esta mas feliz que nunca y yo me siento muy satisfecho he logrado gracias a estos seÃ±ores,', 1),
(412, 495, '2011-06-06', 'DICHO POR UN URÃ“LOGO \r\n\r\nMediante una serie de ejercicios aumentara el tamaÃ±o de tu pene de 3 a 10 cm., corregir deformaciones (pene curvo) y mejorar tanto tus erecciones y como tus eyaculaciones (evitar o corregir la eyaculaciÃ³n precoz).HECHO: En una reciente encuesta, el 78% de las mujeres admiten que estÃ¡n insatisfechas con el tamaÃ±o del pene de su pareja.\r\n\r\nAmigos lo investigando y estos ejercicios son recomendados', 1),
(411, 493, '2011-06-05', 'Que bueno fredyâ€¦ yo compre este manual llevo 2 meses y aumente 4.2cm x 2.0cm eso es muy importante y me gusta puedo llegar a tener mi pene de 20 cm en 2 meses mas, esto es matematicas, creo que voy rapido, y lo hago antes de acostarme, me gustaria saber tu rutina fredy cualquier cosa me dejas un comentario o me regalas tu correo suerte! me pasare por aqui despues para ver novedades ok', 1),
(406, 488, '2011-06-03', 'Que bueno que este sea el unico manual que si da resultados', 1),
(405, 486, '2011-06-03', 'Orlando, tambiÃ©n lo compre hace exactamente 1 mes y alargue mi pene 2.6 cm y lo engrose 1.4 cm bueno voy bien y estoy sÃºper contento se siente muy bien tener un pene mÃ¡s grande esto es divertido, querÃ­a saber cuanto has ganado y como es tu rutina, yo lo hago antes de acostarme solo 10 minutos, bueno como es tu rutina, amigos de pene perfecto gracias que Dios los bendiga.', 1),
(404, 487, '2011-06-03', 'Saludos, personalmente si estoy satisfecho y agradecido por la calidad del contenido de este manual y los videos, al principio pensÃ© que no me iba a funcionar pero despuÃ©s de 3 semanas no puede aguatar la emociÃ³n y no lo podÃ­a creer que mi pene se halla puesto tremendamente fuerte dura y venosa, no tengo nada que envidiarle a los actores porno por que yo puedo tenerla igual a mejor que ellos ya he agrandado mi pene 3cm GRACIAS AMIGOS GRACIAS USTEDES SON LOS MEJORES!!! LE RECOMENDÃ“ ESTE PRODUCTO A TODOS !', 1),
(401, 677, '2011-06-01', 'Felicitaciones William por lograr lo que querÃ­as bueno yo tambiÃ©n pienso ganar algo de centÃ­metros, pero no te pases de tamaÃ±o por que luego te dirÃ¡n el rompe coÃ±os XD', 1),
(398, 479, '2011-05-31', 'Es alegrÃ­a y satisfacciÃ³n pura, al escuchar de tu novia, estas palabras "La siento y la veo mÃ¡s ancha y un poco mÃ¡s larga".. Por decirlo de alguna manera y no comentar cosas obscenas.. \r\n\r\nEjjeje Voy a seguir con la rutina, sin lugar a dudas!!MuchÃ­simas Gracias a pene perfecto! Estoy infinitamente agradecido!!', 1),
(396, 519, '2011-05-29', 'no manches!!! esta padrisimo....', 1),
(394, 568, '2011-05-28', 'Llevo dos semanas de ejercicios Y..Ahora creo!!Estoy creciendo. Con tan solo verla, se nota un poco mÃ¡s larga, pero sin lugar a dudas, bastante mÃ¡s gruesa!!Es increÃ­ble que funcione y se los recomiendo a todos aquellos que estÃ©n dudando!!', 1),
(393, 472, '2011-05-27', 'ecxelente antes de empezar mi verga media 15.6 ahora mide 19.2 centimetros de largo gracias a Dios y a peneperfecto me siento contento con lo mio', 1),
(390, 470, '2011-05-25', 'Buenas noches queridos amigos de pene perfecto quiero agradecerles por tan excelente mÃ©todo de agrandamiento es muy efectivo, el manual es muy claro y descriptivo asi como les envie un e-mail a su correo tambiÃ©n le escribo por aquÃ­ por que las cosas buenas valen la pena reconocerlas', 1),
(387, 251, '2011-05-23', 'ok gracias tendre en cuenta eso de las medidas, pronto comentare mis resultados', 1),
(384, 467, '2011-05-21', 'COMPRE HACE 1 MES Y MEDIO HE GANADO 2.4 CENTÃMETROS DE LARGO X 1.7 CENTÃMETROS DE ANCHO SOY MUY DEDICADO A ESTE MÃ‰TODO Y SOLO PIENSO EN LLEGAR A MI META DE 21 CENTÃMETROS GRACIAS A TI TAMBIÃ‰N, SALUDOS', 1),
(383, 465, '2011-05-19', 'desde rep.dominicana tengan ustedes muy buenos tardes, les comento que me gusta el gimnasio todo el cuerpo esta apto de crecimiento muscular con su debida ejercitaciÃ³n creo que si funciona por que ya algunos lo han comprobado y probado y mi persona apenas empieza estos ejercicios cuando tenga los primeros resultados les cuento, suerte a todos', 1),
(392, 473, '2011-05-27', 'mis medidas inÃ­ciales antes de empezar estas tÃ©cnicas de agrandamiento Medidas inÃ­ciales flÃ¡cido 10.5 x 11, en erecciÃ³n 15.3 x 12.5Saludos, espero conseguir buen tamaÃ±o y grosor con este manual gracias', 1),
(391, 471, '2011-05-26', 'Hola es lÃ³gico que los ejercicios naturales son la mejor opciÃ³n para lograr un beneficio yo no creo en las pastillas o aparatos pero si escogiera un mÃ©todo preferirÃ­a mil veces el mÃ©todo natural como los ejercicios ya que son naturales no son perjudiciales como los medicamentos eso era todo espero que me hayan comprendido los que lean mi comentario chau', 1),
(389, 468, '2011-05-25', 'gabriel es increible que esto sea verdad que este funcionando por que hasta el momento todas las web que hablan sobre estos metodos son mentiras esta es la unica sabia que por lo menos habia una que realmente funcione es lo maximo', 1),
(388, 469, '2011-05-24', 'que rapides en la entrega de la clave de acceso a la web, me imaginaba algo diferente pero asi es mucho mejor que buen producto muchas graciasss, esto si me gusto de verdad el video se ven super geniales boy hacer los ejercicios mil gracias!', 1),
(386, 467, '2011-05-23', 'HOLA ANDRÃ‰S, MIRA.. LE DEDICO 15 MINUTOS AL DÃA Y DESCANSO DOS DÃAS, MIS PRIMEROS MILÃMETROS DE GANANCIA LOS DESCUBRÃ A LOS 4 DÃAS FUE IMPRESIONANTE POR ESO ES RECOMENDABLE MEDIRTE TRES VECES ANTES DE EMPEZAR ESO ES LO MAS IMPORTANTE, SUERTE', 1),
(385, 251, '2011-05-22', 'leopoldo te felicito por obtener esos resultados cuanto tiempo le dedicas al dia?', 1),
(375, 457, '2011-05-14', 'Bueno tome la decisiÃ³n de comprarlo para probarlo ya que estaba muy interesado pero tambiÃ©n dudoso en que funcionaria,. pero en realidad me estÃ¡ funcionando bien, en una semana veo mis venas enormes y mi pene se ve diferente se ve fuerte se siente grande estoy sÃºper contento suerte a todos', 1),
(382, 463, '2011-05-18', '1.7 es un buen resultado para un mes estas en el promedio de la encuesta y de la mayoria de los usuarios logran esos resultados asi como yo, deseo que llegues a tu meta', 1),
(381, 464, '2011-05-17', 'Como dijeron por hay el mÃ©todo es natural y las todo lo natural siempre tienen la delantera si todo fuera natural como estos ejercicios nadie sufrirÃ­a de enfermedades por culpa de las medicinas o las cosas artificiales, mi verga aumento 1.7 centÃ­metros en el mes en el siguiente mes espero lo mismo o un poco mas', 1),
(380, 256, '2011-05-16', 'tienes razon piqui, pienso lo mismo como dice la cancion de tego... a lo natural :)', 1),
(379, 462, '2011-05-16', 'Buenas quiero agradecer a esta web por proporcionar informaciÃ³n de gran utilidad para los hombres y me parece que todo lo que sea natural siempre serÃ¡ lo mejor de todos! saludos.', 1),
(378, 1095, '2011-05-15', 'compadre y cuales son sus resultados..?', 1),
(377, 672, '2011-05-15', 'esto me lo recomendÃ³ un amigo de MÃ©xico que tengo en el MSN me dio este link porque esto es muy verdadero y confiable entonces es verdad todo esto, ahora si me siento mejor , saludos a kiki en Venezuela :)', 1),
(376, 458, '2011-05-14', 'es grandioso me a funcionado muy bn d echo somos gay y nos fascina aser los ejercicios mutuamente saludos para el mich se k te aaaaa crecido bastante gracias por esos momentos d placer todos compruÃ©benlo les fascinara mucho en verdad si que crece el pilin antes me media 15 cm. ahora 23 es sorprendente jejejjeej me da un poco te pena pero es genial', 1),
(367, 452, '2011-05-08', 'tio lo acaba de compar se nota bueno', 1),
(366, 453, '2011-05-07', 'tambiÃ©n compre este manual por recomendaciÃ³n apenas llevo 3 dias pero me gusto la forma como me lo enviaron fue rapidÃ­simo en solo minutos me llego el paquete a mi correo, solo deseo contactarme con alguien que este mas avanzado en estos ejercicios, que llebe por lo menos 2 meses les agradezco a este programa por excelente manual el video es full nÃ­tido y muy explicativo estoy ansioso con esto :)', 1),
(364, 450, '2011-05-06', 'como dice mi primo pa, lante es pa ya, hagamos crecer nuestras pichulas ...y dale que dale..', 1),
(362, 449, '2011-05-03', 'por fin encontrÃ© algo para agrandar mi pequeÃ±o bandido la info esta muy bien los felicito :)SOY COSTEÃ‘O VIVO EN KILLA hay muchas fieras por aquÃ­ a las cuales quiero darles como se lo merecen', 1),
(359, 445, '2011-04-30', 'no solo lo mejor de internet tambien lo mejor para nuestras mamasitas que piden mas y mas las tenemos que complacer y a nosotros tambien', 1),
(374, 427, '2011-05-13', 'les comento que diferencia es tener un pene mas grande y grueso es emocionante y lo llena a uno de mucha confiansa con las mujeres uno se siente superior al tener un pene mayor', 1),
(373, 423, '2011-05-12', 'gracias amigo tambien te deseo grandes resultados que gocen mucho ese pene, como dicen por hay a romper coÃ±os se dijo jeje', 1),
(372, 456, '2011-05-11', 'leonardo te felicito por tomado la decicion de comprar este manual aqui en realidad hay muchas paginas falsas que dicen vender este producto y solo roban a la gente tambiendoy gracias a Dios por encontrar esta web todo lo que queria era agrandar mi pequeÃ±o y lo estoy logrando, espero q obtengas grandes resultados y suerte!', 1),
(371, 423, '2011-05-10', 'hola, habia comprado un producto similar en internet y no me funciono gracias Dios este metodo si me funciona asi como todos ustedes, pienso que un pene perfecto tiene que medir entre 19 a 22 cm he notado que a las mujeres les facina mas en grosor por ese motivo estoy realizando los ejercicios de engrosamiento para tener el pene muy ancho para ellas :)', 1),
(370, 427, '2011-05-09', 'lo mejor es que cuando se aumenta el tamaÃ±o en estado flacido tambien aumenta y a se le nota a uno el paquete en el pantalon es lo mas divertido las mujeres se quedan mirando jeje', 1),
(369, 456, '2011-05-09', 'Opino lo mismo es la maravilla del agrandamiento peneano jamas me lo imagine es satisfactorio tener un pene grande las mujeres se vuelven locas y excitadas que rico se siente', 1),
(368, 427, '2011-05-08', 'excelente producto lo mejor de lo mejor saludos a todos', 1),
(365, 451, '2011-05-07', 'hola a todos los que comentan aquÃ­, bueno yo he adquirido el programa de agrandamiento hace ratico y es un excelente producto y buen servicio por parte de de peneperfecto..he tenido aumentos importantes tanto en longitud como en grosor llevo una rutina normal y estoy muy contento con los resultados en en apena poco tiempo, solo querÃ­a decirles que esto ha sido lo mejor para mi! gracias.', 1),
(363, 182, '2011-05-05', 'Hola a todos nunca pensÃ© que esto me iba a funcionar estoy super sorprendido ahora les voy a dar una gratificaciÃ³n a los seÃ±ores de pene perfecto asi como se los prometÃ­ yo nunca pensÃ© que estos ejercicios me iban a dar resultados en solo 2 semanas WOW estoy impresionado con mis resultados AMIGOS ESTO SI FUNCIONA VAMOS ADELANTE HACER ESTOS EJERCICIOS!!!!!GRACIAS.', 1),
(358, 446, '2011-04-29', 'Buenas esto es lo MEJOR QUE HE VISTO EN LA INTERNET ME GUSTA FULL!', 1),
(360, 447, '2011-05-01', 'lo mejor de todo es que el sistema es natural y las cosas naturales siempre llevan la delantera si todo fuera natural como estos ejercicios nadie sufrirÃ­a de enfermedades por culpa de las medicinas o las cosas artificiales', 1),
(361, 433, '2011-05-02', 'muy bueno el servicio muy serios y rÃ¡pidos excelente ahora solo me queda comenzar mi rutina pronto estarÃ© hablÃ¡ndole de resultados saludos y gracias a los amigos de pene perfecto por el exelente servicio', 1),
(329, 240, '2011-02-12', 'Hola Estoy revisando el Material', 1),
(331, 253, '2011-03-26', 'Compre el programa se ve muy profesional espero tener grandes resultados gracias', 1),
(332, 252, '2011-03-26', 'hola jaime me alegra saber que muchos prueban este metodo, te cuento que tambien lo compre hace 2 semanas y los resultados ya son notables te sorprenderas en 1 semana cuando veas los resultados yo me sorprendi es genial, suerte', 1),
(333, 419, '2011-03-28', 'Buenas noches, quiero felicitarlos a ustedes por ecxelente programa para agrandar el pene, hasta ahora me ha funcionado de maravillas, saludos a todos', 1),
(334, 421, '2011-04-01', 'Gracias mi pene aumento en dos semanas mucho y seguire hasta llegar a mi meta, saludos', 1),
(335, 420, '2011-04-02', 'cuanto aumento?', 1),
(336, 423, '2011-04-06', 'hola por fin un programa serio que funciona de verdad gracias a Dios encontre esta pagina web, me siento tan contento esto me facina mi pene esta mucho mas grande, fuerte es perfecto, gracias una ves mas por excelente manual', 1),
(337, 422, '2011-04-07', 'opino lo mismo leo, nadie se queja cencillamente lo maximo valio la pena la pequeÃ±a inversion suerte amigo', 1),
(338, 60, '2011-04-08', 'Hola, he comprado y utilizado este fantÃ¡stico manual mis resultados fueron sorprendentes he calificado este programa como excelente en realidad funciona muy bien, gracias', 1),
(339, 424, '2011-04-10', 'andres cuentanos de tus resultados....', 1),
(340, 427, '2011-04-11', 'cencillamente funciona, lo recomiendo', 1),
(341, 428, '2011-04-12', 'gracias seÃ±ores por muy buen producto se los agradesco mucho, estoy feliz mi miembro ahora tiene 3 centimetros mas de ganancia en poco tiempo estoy sorprendido ustedes son los mejores!!', 1),
(342, 429, '2011-04-12', 'hola a todos, llevo 3 semanas de ser practicante del manual de peneperfecto mi pene se agrando sifnificativamente pense que era mentira pero lo estoy comprobando realmente funciona tengo 35 aÃ±os, gracias a ustedes mi pene esta aumentando, me gusta mucho el video hd muy nitido espero saber resultados de otros practicantes', 1),
(343, 431, '2011-04-14', 'buenos dias, seÃ±ores de peneperfecto yo al igual que muchas personas estoy muy agradecido por darme la oportunidad de probar su programa de agrandamiento lo que mas deseaba lo he logrado alargue mi pene 4 centimetros y se ve fuerte y grande es fantastico, suerte', 1),
(344, 430, '2011-04-14', 'seÃ±or marlon me gustaria saber en que tiempo logro esos resultados gracias.', 1),
(345, 432, '2011-04-16', 'lo mejor de todos los tiempo mi pene creciÃ³ 6 centÃ­metros ahora la tengo muy grande las mujeres quieren todas conmigo me lo merezco gracias', 1),
(346, 448, '2011-04-18', 'Amigos practicantes de pene perfecto es verdad, si funciono! lo comprobÃ©, creÃ­a que era mentiras pero en realidad es real si funciona el pene se puso grande y asi se me mantiene estable fuerte duro venoso es increÃ­ble me fascinÃ³ el video muy bueno nÃ­tido el producto a buen precio, sigan asi', 1),
(347, 434, '2011-04-20', 'hola por que no escriben sus resultados? asi podremos saber quien le esta iyendo mejor mi resultados son asi: \r\n\r\nAntes mi pene media de largo 14 centÃ­metros pasaron 2 meses y medio haciendo los ejercicios de pene perfecto ahora mi pene mide 18.6 centÃ­metros,..Opinen mi resultados ..Ancho de mi pene antes 11.3 de circunferencia ahora 15.4 de ancho o circunferencia ..que opinan mis resultados son rÃ¡pidos lentos o como,.. TambiÃ©n se me puso grande la cabeza del pene pero me pesa mas que antes el pene :D', 1),
(348, 252, '2011-04-20', '4.8 cm + en 2 meses me siento contento esto es lo que un hombre necesita para ser feliz voy a seguir aumentÃ¡ndomelo mi meta es llegar a 22 cm de largo x 17 cm de ancho', 1),
(349, 256, '2011-04-21', 'Me funciona de maravillas el pene creciÃ³!', 1),
(350, 198, '2011-04-22', 'Hola soy de panama les dirÃ© en pÃºblico tengo 1 mes de hacer estas tÃ©cnicas y aumente 2.8 cm de largo y 1.5 cm de ancho estas medidas son reales el manual te dice que debes medir el pene antes y fui muy preciso, estoy muy contento porque mi pene va para delante, Gracias a pene a ustedes', 1),
(351, 439, '2011-04-23', 'Hola me gustaria saber si alguien me responde si el tamaÃ±o de mi pene es normal o esta en el rango normal yo se que para muchos sera normal pero me incomoda mi taÃ±aÃ±o..el tamaÃ±o es de 15.2cm y tengo 33 aÃ±os creo que estoy algo mal, compre el manual hace 3 dÃ­as espero llegar a los 20 cm saludos', 1),
(352, 245, '2011-04-23', 'Hola Yeiner el tamaÃ±o de tu pene puede ser algo genÃ©tico, pero tu compraste este manual ahora vas a ver como va aumentando asÃ­ como a mi, antes mi pene media 16.5 en 1 mes y medio aumento tanto que ahora me mide 21.3 has las rutinas recomendadas y veras grandes resultados este mÃ©todo funciona muy bien! suerte!', 1),
(353, 440, '2011-04-25', 'Hola quiero agradecer a los seÃ±ores de peneperfecto por darme la oportunidad de realizar estos ejercicios para agrandar el pene, Ãºltimamente he ganado mas que nunca con respecto a los resultados y solo querÃ­a agradecerles por que jamÃ¡s pensÃ© que por solo $68 USD yo podrÃ­a agrandar mi pene, pensÃ© que no era cierto pero gracias a Dios tome la decisiÃ³n y ahora estoy feliz de haberme encontrado con esta web en la red, MIL GRACIAS!', 1),
(354, 441, '2011-04-26', 'Que fÃ¡cil pagar desde Bancomer solo pedirle los datos del destinatario de la cuenta y lo depositas normalmente o nunca has depositado a una cuenta bancaria? espero que esta info sea Ãºtil para ti y para los que quieran saber algo asi..bye', 1),
(355, 419, '2011-04-26', 'hola he comprado este manual+ video y les puedo decir que si funcionan en mi caso me han dado resultados satisfactorios me siento contento por lo que he adquirido y lo recomiendo a todos ustedes, saludos!', 1),
(356, 443, '2011-04-27', 'Buenas, Muy bueno excelente lo mejor lo recomiendo a todos los que obtan por este mÃ©todo para agrandar sus miembros, lo compre hace 1 semana y ya he podido ver resultados aun estoy sorprendido pense que no iba a obtener resultados satisfactorios en tan poco tiempo mil gracias por darme la oportunidad de probar su producto y asÃ­ como me lo recomendaros tambiÃ©n lo recomiendo por aqui gracias y suerte!', 1),
(357, 444, '2011-04-28', 'hace 3 semanas decidÃ­ comprar el manual y el servicio es muy bueno, he tenido buenos resultados hasta el momento mi pene esta mas fuerte se ve muy venoso he visto una diferencia sorprendente es como ejercitar un brazo delgado y liego esta llego de mÃºsculos espero llegar a 4cm de largo en mi primer mes pero el grueso veo que crece mas rÃ¡pido que el largo serÃ¡ por la tÃ©cnica 2 gracias de corazÃ³n!', 1),
(442, 1166, '2011-07-21', 'saludos a todos, me gusta mucho compartir opiniones sobre el tema del agrandamiento del pene es interesante saber que si es verdad que el pene se agranda con estos ejercicios, pero cabe destacar que se agranda con solo estos ejercicios por que tuve una mala pasada cuando compre unos supuestos ejercicios y mÃ©todos de agrandamiento en otra web y perdÃ­ mi dinero y mi tiempo, creo que esta es la una web que sinceramente entrega resultados reales como a todos ustedes lo obtienen, lo que me hizo creer que esta pagina era original y que sus artÃ­culos eran reales fue que analizÃ¡ndolo bien esta web tiene cosas importantes que no tiene o tenia la otra, esta web tiene foro, encuesta el servicio responde con rapidez eso me puso a pensar que no iba a perder de nuevo mi dinero y tiempo, por eso digo que los que quieren entrar en este proceso de agrandamiento y leen mi comentario les puedo decir yo el Pollo sinceramente que esto si es real y si funciona no quiero que caigan en otras web asÃ­ como yo, esta es la Ãºnica web que si funciona y pueden analizarlo ustedes mismo, excelente manual y video de lo mejor, gracias.', 1),
(443, 609, '2011-07-22', 'Usted tiene toda la razÃ³n!', 1),
(444, 437, '2011-07-24', 'es satisfactorio saber todo eso del programa, lamentablemente hay personas que caen en los engaÃ±os de algunas web, pienso que esas web se copian de esta pero no pueden copiar el producto y el buen servicio al cliente, pienso lo mismo que el pollo ojala las personas interesadas encuentren esta web por que con este programa el pene si se agranda de verdad y se tienen beneficios asi como se mensiona, me siento contento por encontrar esta web creo que deberian de hacerle mas publicidad para que las personas que realmente nececitan de este programa sean beneficiados', 1),
(445, 851, '2011-07-25', 'en mi caso compre el manual para enderezar mi pene y les cuento que lo enderece este manual es magico o no se que cosa, pero se enderezo es increible estas tecnicas', 1),
(446, 520, '2011-07-27', 'javi precisamente tambien lo compre para eso estaba mas interesado en enderezarlo que en aumentarlo pero ahora lo enderece y lo esty aumentando bastante antes mi pene media 15.3 despues de 8 semanas mide 21.1 se ve enorme nisiquiera cabe en mis pantalones jeje que barbaro soy, pero a ellas las vuelve locas', 1),
(447, 524, '2011-08-01', 'Una pregunta respondan abajo, quien a aumento mas de 1.5 centÃ­metros de ganancia al mes??\r\n\r\n>75.7 % de los usuarios tienen una ganancia de 1.5 centÃ­metros de longitud al mes. \r\n>20.2 % de los usuarios tienen una ganancia de 1.0 centÃ­metros de longitud al mes. \r\n>3.7 % de los usuarios tienen una ganancia de 0.5 centÃ­metros de longitud al mes. \r\n\r\nespero saber si alguien gano mas de lo normal o supera los resultados de ganancias mensuales...', 1),
(448, 559, '2011-08-03', 'bernardo segun lo que entiendo esa es una encuesta del promedio de ganancia mensual, la verdad ese es un porcentaje real pero lÃ³gicamente hay usuarios que ganan mas de 1.5 centÃ­metros de ganancia mensual, esto quiere decir que en dos meses dicho usuario llegara al tope maximo que puede alargar un pene con este programa que son 8 centimetros lo mismo al grosor, hasta el momento estoy en el porcentaje del 20.2% al 75.7 por que estoy en la mitad de ganancia que fue de 2.7 centÃ­metros en el mes de marzo que empece, espero que mi informaciÃ³n te sea de utilidad,', 1),
(449, 500, '2011-08-04', 'estoy en el porcentaje 75.7% de ganancia mensual de 1.5 CM.', 1),
(450, 1031, '2011-08-06', 'lo que creo es el porcentaje mayor de ganancia el cual tiene un 75% de usuarios esto indica que casi todos lo que practican con este manual aumentan 1.5 centÃ­metros de longitud, gracias a Dios estoy en el grupo de los de 1.5 cm mensuales, pero como nos indica el manual se puede llegar a mas si se hace la rutina recomendada, es verdad muchas personas se descuidan y no hacen los ejercicios tal cual lo indica el manual algunos dejan de hacerlo por una semana por eso esa minorÃ­a de porcentaje de ganancias de 0.3 a 0.8 y 1.2 cm mensuales se debe a que no hacen la rutina normal y ese porcentaje de personas que ganan 1.5 cm mensuales si hacen la rutina normal y recomendada asi como yo,', 1),
(451, 1167, '2011-08-07', 'me facina como esta mi pene muy grande fuerte y saludable gracias a pene perfecto, mi vida cambio mucho ahora soy mas feliz con mi nuevo yo', 1),
(452, 447, '2011-08-09', 'WOOO SI VIERAN COMO ESTA MI PENE DE ENORME SE VE MUY GRUESO Y GRANDE UFF MI PENE AUMENTO DE TAMAÃ‘O RAIDAMENTE COMPAÃ‘EROS ESTE MANUAL ES LA MARAVILLA NO ENTIENDO COMO HICIERON PARA HACER UNAS TECNICAS QUE AGRANDAN EL PENE DE VERDAD Y EN POCO TIEMPO ES SORPRENDENTE ESTOS SEÃ‘ORES DE PENE PERFECTO SI SABEN DEL TEMA, GRACIAS POR AYUDARME A SER MAS FELIZ, ESTO ME HACE SENTIR VIVO ES LO MAXIMO!! GRACIASSS', 1),
(453, 161, '2011-08-11', 'por fin un programa de agradamiento serio y real que ayude a nosotros que si tenemos penes pequeÃ±os o mas bien que si teniamos penes pequeÃ±os :) hay que tenerlo un poco mas grande es logico que a las mujeres les gusta bien gruesesito y grande eso las exita mas y nos exita mas ellas a nosotros', 1),
(454, 206, '2011-08-13', ':D mas contento no puedo estar, cencillamente logre mi sueÃ±o de tener un pene grande como un actor porno jeje es muy agradable se siente bien :D', 1),
(455, 252, '2011-08-15', 'gracias por el manual es muy efectivo lo recomiendo al 100%', 1),
(456, 702, '2011-08-16', 'gracias a Dios escontre esta web mi vida cambio bastante gracias :D', 1),
(457, 1099, '2011-08-17', 'Lo compre hace dos horas me enviaron la clave acceso de inmediato el manual y video estan fantasticos no veo la hora de verme el pene enorme, despues comentare mis resultados apenas empezare hoy, estoy ansioso...', 1),
(458, 629, '2011-08-19', 'Dios mio, no puedo creerlo mi pene crecio 1.5 centimetros con este programa en solo 3 semanas :O es sorprendente :D esto pone contento a cualquiera que rico van hacer mis relaciones ahora en adelante seran muy placenteras lo mejor del mundo mil gracias!!!', 1),
(459, 426, '2011-08-22', 'buenas tardes, acabo de compar este maravillozo manual mas video, me siento muy contento mis medidas iniciales son:\r\n\r\n14.2 de largo x 11.5 de espresor. \r\n\r\napenas lo compre hoy, el servicio es ecxelente la Clave de acceso me a entregaron a mi email enseguida, practicantes pronto comentare de mis rutinas y resutados', 1),
(460, 677, '2011-08-24', 'gracias ustedes son los mejores suerte!', 1),
(461, 789, '2011-08-26', 'antes 15.3 cm x 11.7 cm despuÃ©s de 3 meses...21.6 x 16.2 en realidad mi aumento fue bastante rÃ¡pido con peneperfecto, tambiÃ©n mejore la eyaculacion precoz, siento las erecciones mas rapidas y controlo mis eyaculaciones mis relaciones son 1000 veces mas placenteras lo mismo dice mi novia la exita mucho mas dijo que se siente mucho mas rico que antes mi verga esta grande y la exita solo con verla me siento felizzzz gracias', 1),
(462, 765, '2011-08-29', 'Dios que buenos resultados te felicito aldo por que te sientas mucho mejor que antes espero tambien llegar a ese tamaÃ±o mi verga por ahora esta en 18 cm x 15.4 cm pero mi esposa puede notar un gran cambio asi como tu novia mi esposa dice que la siente mas gruesa y la llevo al cielo automaticamente soy practicante de peneperfecto espero llegar a mi meta final de 23 cm x 18 cm la quiero tener bien grande', 1),
(463, 543, '2011-08-31', 'practicamente pienso que el programa de peneperfecto es genial el poder lograr esos resultados es muy satisfactorio a cualquier hombre lo pone feliz y dichoso de esta vida, las mujeres nos apasionan el sexo nos hace vivir por eso es importante darlos en lujo de tener ese placer unico y maravilloso llas nos hacen feliz y tambien merecen que la hagamos feliz con lo nuestro :)', 1),
(464, 449, '2011-09-01', 'es impresionante!', 1),
(465, 658, '2011-09-04', 'hola tengo 35 aÃ±os, adquiri la clave de acceso, hoy empezare mis ejercicios para agrandarme 6 centimetros mas mi pene, espero llegar a esa meta en menos de dos meses', 1),
(466, 1031, '2011-09-05', 'colega yo tengo 38 y practico estas tecnicas hace 3 meses me entregaron buenos resultados puedes comentarme cualquier duda e inconveniente al respecto..', 1),
(467, 433, '2011-09-07', 'buenas tardes, con respecto al dilema sobre que si a las mujeres les gusta los penes grandes, pues pongamosle lÃ³gica, personalmente creo que las mujeres se excitan mas al ver un pene grande que uno pequeÃ±o, un pene grande tiene mayor superficie lo cual estimula mas nervios sensitivos en la cavidad vaginal, segÃºn o que investigue un pene perfecto es aquel que tenga 20 centÃ­metros de largo por 16 centÃ­metros de ancho, pero muchas mujeres se excitan mas con penes de 22 y 23 centÃ­metros, por tal motivo compre este manual para aumentar el tamaÃ±o proporcional de mi pene que es de 15 cm x 11.7 mi objetivo es llegar a 22 cm.', 1),
(468, 826, '2011-09-08', 'tienes toda la razÃ³n, y te contare una anÃ©cdota, cuando tenia relaciones con mi ex ella me decÃ­a que le gustaba hacer el amor conmigo, ella y yo tenÃ­amos mucha confianza en si, y me comento un dÃ­a que su novio pasado el ex de ella tenia el pene mucho mas grande que el mio ella lo hizo sin ofender solo lo dijo asÃ­, yo le dije mucho mas grande? ella dijo que si, eso me dio de todo me sentÃ­ derrotado y decepcionado y me comento que realmente con el osea con su ex novio ella se excitaba mas y llegaba al orgasmo rÃ¡pidamente hasta varios orgasmos llegaba por la sencilla razÃ³n que su ex tiene un pene grande y sobre todo grueso, ella me dijo que le hubiera gustado que yo lo tuviera asi de grande, lo primero que hice fue buscar la forma de agrandarme el pene, encontrÃ© varios mÃ©todos que jamas funcionaron despuÃ©s me olvide de eso y hace aproximadamente 2 meses encontrÃ© esta web tome el riesgo de comprar este manual y mi pene se alargo 3.4 centÃ­metros :) y de ancho 1.8 centÃ­metros :) ahora mi pene mide 17.2 x 13.8 :D ojala mi ex probara ahora para que notara la diferencia pero ahora tengo mi novia que se siente muy bien con lo mio y seguirÃ© aumentÃ¡ndolo hasta llegar a 20 cm, saludos a todos', 1),
(469, 673, '2011-09-10', 'eso es una ofensa, ella no tenia que decirte eso es lÃ³gico lo mal que te sentirÃ­as pero demuÃ©strale ahora que la puedes tener o que la tendrÃ¡s mas grande que la de su ex y cuando vallas a la cama con ella hazla gritar y rompele el coÃ±o con tu nuevo monstruo jeje suerte!!', 1),
(470, 603, '2011-09-12', 'Desde que un amigo me recomendÃ³ el sistema, mi pene ha crecido 3 centÃ­metros y tan solo llevo unas semanas utilizÃ¡ndolo. Es muy sencillo y siguiendo los pasos que se indican se obtienen resultados de forma inmediata jamas me lo imagine pero al ver a todos comentando buenos resultados por aqui me anime y ahora soy uno mas de ustedes feliz de la vida y de las mujeres', 1),
(471, 448, '2011-09-15', 'Todos sabemos que el tamaÃ±o sÃ­ que importaâ€¦, si las chicas se cambian el tamaÃ±o del pecho o la forma de la nariz, por que nos vamos a tener que conformar nosotros con un pene minusculo?? por fin alguien se acuerda de nosotros! y de la importancia que para nosotros tiene nuestro â€œamiguitoâ€. ahora que la estoy agrandando me dan muchas ganas de comerme a toda la que se me atraviese esto me hace sentir genial poderoso es como tener un arma poderosa con el cual uno se siente fuerte y tiene el poder de escojer y hacerlo con la que que quiera es lo mejor', 1),
(472, 1283, '2011-09-18', 'No me habÃ­a creÃ­do una sola palabra de todo esto, pero ya estaba desesperado, no era capaz de aguantar mis eyaculaciones y estaba harto, asÃ­ que me decidÃ­ y puedo decir que es lo mejor que he podido hacer por mi y por mi novia.', 1),
(473, 182, '2011-09-20', 'este metodo me sorprende, Gracias a Dios mi pene esta creciendo y creciendo y no para de crecer con estos ejercicios, creanlo SI funciona es lo maximooo', 1),
(474, 241, '2011-09-21', 'Los ejercicios estÃ¡n re genial, les digo que tienen que probar, a mÃ­ me diÃ³ resultado, desde hace un tiempo estoy notando el aumento y estoy super conforme, pienso seguir practicÃ¡ndolos hasta llegar a mi objetivo. Saludos.', 1),
(475, 503, '2011-09-23', 'Desde que probÃ© peneperfecto no solo ha mejorado el tamaÃ±o de mi miembro, sino mi autoestima. Antes me daba vergÃ¼enza acercarme a una chica y que se riera de mi pero ahora, eso ya no me pasa.. y no vean lo bien que me siento!!', 1),
(476, 475, '2011-09-25', 'La verdad es que nunca pensÃ© que pudiera funcionar, pero he conseguido en tan solo 3 meses que mi pene mida 5 centÃ­metros mÃ¡s. Ahora mi vida sexual ha cambiado drÃ¡sticamente y las relaciones que tengo son muy satisfactorias, muchas gracias de corazÃ³n.', 1),
(477, 1120, '2011-09-27', 'compaÃ±ero en tan solo unos meses he conseguido alargar casi 4 centÃ­metros mi pene, fisicamente me encuentro pleno y puedo disfrutar de mis encuentros sexuales al 100%', 1),
(478, 802, '2011-09-28', 'Quiero dar las gracias a todo el equipo de PenePerfecto por incorporar este excelente manual online, mi pene mide ahora unos 20 centimetrosm, antes solo medÃ­a unos 15 centimetros, y tan sÃ³lo en 3 meses! Mis orgasmos son increÃ­bles y a mi mujer le encanta mi nuevo yo :)\r\n\r\nGracias una vez mÃ¡s.', 1),
(479, 489, '2011-09-30', 'En un principio me registrÃ© en su programa por las tÃ©cnicas de agrandamiento del pene, pero encontrÃ© las tÃ©cnicas de fortalecimiento de la erecciÃ³n increÃ­bles, nunca habÃ­a logrado tener este tipo de erecciÃ³n, y a mi novia le encanta', 1),
(480, 1191, '2011-10-02', 'Vuestro manual online es con lo mejor que me he cruzado en internet y no puedo creer que nunca hubiera oÃ­do hablar de estas tÃ©cnicas antes, me gustarÃ­a decirle a todos los hombres, colegas, estas tÃ©cnicas realmente funcionan, hagance felices', 1),
(481, 584, '2011-10-04', 'fermin yo sabia que en internet se podia encontrar un programa real que no engaÃ±ara a las personas por fin alguien que ayuda a los demas por fin estoy seguro que los que trabajan aqui tenian el pene pequeÃ±o y lo agrandaron full', 1),
(482, 585, '2011-10-06', 'Mi pene ha aumentado de 12 a 15 centimetros en sÃ³lo 2 meses Gracias eternamente, Dios mio esto es lo mejor!!!', 1),
(483, 1247, '2011-10-07', 'te aumento full debes estar mas contento que cachon nuevo jeje', 1),
(484, 243, '2011-10-10', 'No puedo creer que estÃ© enviando un email acerca de mi pene, pero sÃ³lo querÃ­a darles las gracias por su informaciÃ³n he aumentado casi 5 cm ahora serÃ© una estrella porno, ja Gracias.', 1),
(485, 720, '2011-10-13', 'Sres. de PenePerfecto:\r\n\r\nMe llamo Alberto...me gustarÃ­a decirles que desde que uso su manual online no puedo creer que mi pene crezca y crezca, mi pene era de unos 15 centimetros y ahora es de casi 18 centimetros grande, largo, duro y fuerte despuÃ©s de 3 semanas, Gracias una vez mÃ¡s.', 1),
(486, 881, '2011-10-15', 'Hola. He usado su manual sÃ³lo durante 1 semana y ya he observado una mejora en la longitud y el grosor de mi pene. Ha mejorado mi vida sexual y se lo debo todo a su programa!\r\n\r\nSuerte', 1),
(487, 1307, '2011-10-17', 'lo maximo!! peneperfecto a la presidencia si este si nos ayuda de verdad :D', 1),
(488, 256, '2011-10-18', 'seria el primero que lo apoyaria jeje', 1),
(489, 656, '2011-10-19', 'gracias por el buen servicio, que opinan ...mi pene mide 14 cm :s', 1),
(490, 605, '2011-10-21', 'hola soy colombiano, agradesco a todos los que trabajan en esta web por darnos la oportunidad de probar sus tecnicas uqe funcionan de maravillas, por fin mi pene se ve mas grande estaba sufriendo por que realmente mi pene solomedia 14.3 centimetros en ereccion y ahora mide 17.2 y va en aumento estoy inmensamente agradecido con ustedes se merecen llegar bien lejos son los mejores!!', 1),
(491, 254, '2011-10-23', 'definitivamente es lo mejor del internet', 1),
(492, 435, '2011-10-24', 'los interesados tienen que probarlo es impresionante como diablos se agranda yo hago los ejercicios a pie de la letra y en una semana veo una gran diferencia de aumento esto es magia o que?? sea lo que sea estoy orgullosamente agradecido con pene perfecto mil gracias', 1),
(493, 490, '2011-10-25', 'jaja como diablos se agranda, eso suena chistoso, en realidad se agranda con estos ejercicios y tecnicas investigando mas a fondo el pene es como una masa muscular esponjosa que puede agrandarse bastante pero con los ejercicios adecuados, hay que tener mucho cuidado solo estos ejercicios hacen todo bien y sigue adelante, estoy en el porcentaje 75.5% aumento 3.0 mensual llebo 1 mes', 1),
(494, 587, '2011-10-27', 'GRACIAS POR SU PROGRAMA, ME CAMBIO LA VIDA EN SOLO 2 MESES MIS ERECCIONES MEJORARON MI PENE ES MUCHO MAS GRANDE Y GRUESO, E PERA RAPIDAMENTE Y PUEDO CONTROLAR MIS ORGASMOS \r\n\r\nPRACTICANTES EN REALIDAD TENER EL PENE GRANDE TIENE MUCHOS BENEFICIOS LAS MUJERES NO LO DICEN PERO A ELLAS LES FACINA UN PENE DE MAYORES PROPORCIONES ESA ES LA VERDAD, SALUDOS A TODOS Y SIGAN PRACTICANDO GRACIAS', 1),
(495, 517, '2011-10-28', 'Gonzalo es satisfactorio leer tu comentario, estoy notando que el programa le funciona a todos los que lo compran en especial a mi, pero me gustaria saber tus medidas iniciales y actuales, en que tiempo lo lograstes, hasta el momento tube una ganancia de 2.4 centimetros x 1.1 centimetros en un lapso de 3 semanas mi pene mide ahora 17.8 x 12.4 y pienso llegar a mi meta en dos meses de 22 x 15.6...', 1),
(496, 587, '2011-10-30', 'SEÃ‘OR FRANKIL MIS MEDIDAS INICIALES FUERON 16.3 X 12.7 ESO FUE HACE 2 MESES, AHORA SON DE 21.2 X 15.5 LA GANANCIA FUE DE 4.9 CENTIMETROS EN LONGITUD EL GROSOR AUMENTO 2.8 CENTIMETROS MEJORE EL TAMAÃ‘O CONSIDERABLEMENTE LAS EYACULACIONES SON CUANDO YO QUIERA LAS CONTROLO TOTALMENTE ES FANTASTICO, AHORA EN ADELANTE DISFRUTARE MUCHO, USTED TIENE BUENOS RESULTADOS SIGA ASI', 1),
(497, 456, '2011-10-31', 'saludos, les cuento que sufria de eyaculazion precoz fue mi dolor de cabeza durante mucho tiempo en mis relaciones pero desde que empece a utilizar este programa enseguida empece a ver un cambio hasta el dia de hoy disfruto mucho mis relaciones con mi novia solucione por completo ese problema, todo se lo debo a este programa, lo recomiendo con toda seguridad!', 1),
(498, 458, '2011-11-01', 'el manual es perfecto el video es perfecto mis resultados son perfectos', 1),
(499, 518, '2011-11-03', 'hola primero que todo gracias por su excelente programa online, el video es buenÃ­simo lo mismo que el manual las fotos realmente excelentes facil de aprender, en realidad no puedo dejar de hacer los ejercicios es un vicio cada ves quiero mas y mas ganancia en estos momentos tengo un pene de 21.8 centimetros x 14.6 centimetros aumente 4.6 centimetros estoy contento felizz', 1),
(500, 35, '2011-11-03', 'buenas, personalmente me funciona muy bien mi pene esta mucho mas grande que antes, cencillamente es lo mejor que existe para el desarrollo del pene son ejercicios naturales, entregan resultados rapidamente y sobre todo SI FUNCIONAN!!', 1),
(501, 520, '2011-11-04', 'hola, de cuento fue tus resultados obtenidos con el programa...', 1),
(502, 527, '2011-11-06', 'que buenas ganancias obtuve en poco tiempo, me gusta mucho este sistema, me di cuenta que al realizar los dos ejercicios de alargamiento y engrosamiento se soluciona el problema de la eyaculacion precoz obteniendo otros beneficios como erecciones mas fuertes y controladas estan geniales estas tecnicas full gracias', 1),
(503, 440, '2011-11-07', 'Les escribÃ­a para agradecerle a todo el equipo de PenePerfecto.com por ofrecer estas tÃ©cnicas online, \r\ntenÃ­a un pene de 15 centimetros y en solo 2 meses llegue a tenerlo de 21centimetros! Mi vida sexual es increÃ­ble y mi novia esta enloquecida, gracias!.', 1),
(504, 537, '2011-11-09', 'Inicialmente me suscribÃ­ atraÃ­do por las tÃ©cnicas de alargamiento del pene, pero termine principalmente sorprendido por los ejercicios para mejorar las erecciones, es increible nunca pensÃ© que podÃ­a mejorar mi capacidad de erecciÃ³n de esta manera tambien agrande mi pene 3 centimetros mas, ahora mide 19.5 cm x 14.2 cm.', 1),
(505, 499, '2011-11-09', 'He hecho crecer mi pene de 13cm a 16 cm en solamente 60 dias estarÃ© agradecido de por vida! ojalÃ¡ todos los hombres se enteraran de esto, Gracias Pene perfecto', 1),
(506, 1218, '2011-11-11', 'Hola a todos, llevo 2 semanas realizando los ejercicios propuestos en su manual, hasta em momento gane 1.6 CM de largo! estas tÃ©cnicas realmente funcionan, yo tenÃ­a bastante desconfianza sobre el tema y estaba un tanto resignado con mi tamaÃ±o, pero en solo 15 dÃ­as ya puedo asegurarles que estaba equivocado.', 1),
(507, 622, '2011-11-12', 'buen dia, con este manual consegui que la cabeza de mi pene se agrandara bastante ahora se ve bastante cabezona me gusta tener la cabeza del pene grande a las mujeres les facina asi, es lo maximo :D', 1),
(508, 887, '2011-11-13', 'wuao que interesante tienes razon hay un ejercicios para agrandar la cabeza en el manual pero por lo general casi todos buscan aumentar el pene y la verdad la idea es aumentarlo proporcionalmente como indica el manual, en mi caso solo engorde 2 centimtros mas mi pene se ve fenomenal suerte men', 1);
INSERT INTO `comentario` (`id`, `venta`, `fecha`, `comentario`, `activo`) VALUES
(509, 510, '2011-11-14', 'Tengo que confesar que inicialmente dudÃ© mucho de comprar el manual de ejercicios, ya que no podÃ­a creer que hubiera algo que me ayudara con mi problema, ahora debo reconocer que es la mejor decisiÃ³n que he tomado en mi vida, los ejercicios son muy sencillos y sobretodo, efectivos.. el manual es excelente el video genial todo es perfecto. Muchas gracias!\r\n\r\nMis medidas anteriores fueron 16.3 x 11.2 un pene algo delgado \r\nAhora despues de 7 semanas 21.7 x 14.5 \r\n\r\nMi vida exual mejoro en un 95% ahora tengo un pene mas grueso y largo fuerte y duro, puedo controlar mis eyaculaciones y en los tiempo de refraccion son rapidos puedo echar hasta 5 polvasos es increible mi novia esta sorprendida me dice â€œLA MAQUINAâ€ jeje estoy feliz', 1),
(510, 255, '2011-11-15', 'Creo que nunca voy a terminar de agradecerles, tenÃ­a un pene de 12.5 centimetros y ahora llega casi a 18 cm, fueron 4 meses increibles, viendo como mi pene crecÃ­a ahora mi vida amorosa es genial y mi autoestima esta por las nubes, a todos los hombres que lo estÃ©n considerando, les aconsejo, animense y prueben, vale la pena!!', 1),
(511, 840, '2011-11-16', 'Gracias, mi verga ha crecido y crecido, ahora es 7 cm mÃ¡s largo, es increible ahora si puedo satisfacer realmente a mi novia no le dije que ha sido por los ejercicios, y aun no sale de su asombro!', 1),
(512, 917, '2011-11-18', 'Mi nombre es Martin y me gustarÃ­a contarles que desde que me suscribÃ­ a su manual online, no puedo dejar de asombrarme de los logros obtenidos, mi pene era de unos 14 centimetros y no me sentÃ­a del todo a gusto, ahora es de casi 17,5 centimetros, mÃ¡s gordo, duro y fuerte, y les aseguro, el impacto que causa en las mujeres es muy diferente, gracias una vez mÃ¡s.', 1),
(513, 495, '2011-11-19', 'Infinitas gracias!\r\nMis experiencias sexuales ahora son increÃ­bles, y altamente placenteras tanto para mi como para mi pareja realmente me siento como si fuera un nuevo hombre.\r\nMedidas iniciales 15.6 x 11.1 CM\r\nMededias actuales 19.7 x 14.2 CM\r\n:D', 1),
(514, 693, '2011-11-20', 'ME GUSTARIA QUE COMENTEN SOBRE ESTA PREGUNTA INTERESANTE\r\n\r\nÂ¿Tiene importancia para ti el tamaÃ±o del pene? Â¿Consideras que el tamaÃ±o del pene influye en tu desempeÃ±o sexual? Â¿EstÃ¡s contento o satisfecho con el tamaÃ±o de tu pene? Explica en detalle tus respuestas.', 1),
(515, 496, '2011-11-20', 'SÃ­ tiene importancia el tamaÃ±o del pene, creo que sÃ­ influye el tamaÃ±o del pene en el placer de la mujer, mÃ¡s grande mÃ¡s contacto, mÃ¡s placer, a pesar de que tengo un tamaÃ±o promedio, si me gustarÃ­a tener un pene mÃ¡s grande, por eso practico estos ejercicios de pene perfecto ya consigue aumentar 2.5 cm pero ante todo me gustaria mas grande mÃ¡s por cÃ³mo me sentirÃ­a conmigo mismo ante mi pareja. Es como en el caso de las mujeres que quieren tener senos mÃ¡s grandes.', 1),
(516, 207, '2011-11-22', 'El tamaÃ±o del pene sÃ­ tiene importancia lo sÃ© por que el mÃ­o es demasiado grande (23 Cm.) ese aumento lo conseguÃ­ con este programa, es muy satisfactorio la mayorÃ­a de las chicas con las cuales tengo sexo, muchas de ellas han llegado a la cama para saber cÃ³mo es hacer el amor con alguien que tiene ese tamaÃ±o de pene todas quedan realmente complacidas incluso se excitan tanto que que les entra todita esto es genial Por eso digo que es muy importante su tamaÃ±o.', 1),
(517, 701, '2011-11-23', 'El tamaÃ±o sÃ­ tiene importancia para mÃ­ me hace sentir mÃ¡s seguro; mi pene tiene 19,5 cm de largo gracias a pene perfecto y estoy conforme con eso, creo que el tamaÃ±o influye fÃ­sicamente y psicolÃ³gicamente, es un atractivo que hace que la pareja sexual se excite mÃ¡s.', 1),
(518, 470, '2011-11-25', 'SÃ­, si importa, de hecho que importa, pero en este caso seÃ±ores, las que deciden que tan importante es un pene grande o pequeÃ±o son las mujeres, hay mujeres que le gustan grandes, y a otras les gusta de cualquier tamaÃ±o siempre y cuando sea grueso, es como a nosotros los hombres, a algunos nos gusta las mujeres con senos o glÃºteos grandes, mientras que otros no le dan mucha importancia al tema. Si, estoy satisfecho con el tamaÃ±o de mi pene, el cual no es muy grande, sÃ³lo 16 centÃ­metros, y puedo considerar que he tenido suerte ya que ninguna de las mujeres con las que he estado, se quejo del tamaÃ±o de mi miembro, pero me gustaria tenerlo de 20 centimetros por lo cual cual hace tres dias compre este sistema que se ve efectivo, pronto comentare mis resultados.', 1),
(519, 267, '2011-11-26', 'si es interesante logicamente si importa por algo los actores porno la tienen bien grande y no pequeÃ±as..', 1),
(520, 602, '2011-11-28', 'Les dirÃ© que para mÃ­ sÃ­ tiene importancia el tamaÃ±o del pene, pienso que es importante por que: 1. Durante el coito la mujer puede distinguir o diferenciar el tamaÃ±o del pene lo cual causarÃ¡ mayor placer para ella. 2. Pienso que un pene grande tiene mayor Ã¡rea de contacto con el Ã³rgano sexual de la mujer, me parece lÃ³gico. Particularmente considero que el tamaÃ±o de mi pene sÃ­ influye en mi desempeÃ±o sexual porque mi pareja me hace ver que le agrada, inclusive durante el coito me dice que le gusta mi pene porque es grande, esto incrementa el placer durante la relaciÃ³n sexual.\r\n\r\nAntes 16 x 12 centimetros\r\nAhora 21 x 15 centimetros.....esto si vale la pena compaÃ±eros!!', 1),
(521, 1023, '2011-11-29', 'esos resultados tuyos estan mas que buenos, diria perfectos, son tan faciles estas tecnicas que todo el mundo le funciona de maravillas es lo maximo, ahora pienso ponermela muy gruesa', 1),
(522, 1065, '2013-07-29', 'Con respecto a la pregunta de Pedro, creo que sÃ­ es importante tener un pene regular en mi caso mi pene es chico y eso me incomoda porque temo no poder satisfacer a mi pareja principalmente si ella anteriormente ha tenido relaciones con su otra pareja y el ha tenido el pene mÃ¡s grande por tal motivo compre este manual apenas llevo 2 semamas pero ya pude ver un aumento notorio', 1),
(523, 1247, '2011-10-03', 'Bueno, no me importaba el tamaÃ±o de mi pene hasta que me di cuenta que a la mayorÃ­a de las mujeres les importaba pienso que es un afrodisiaco para las mujeres un pene grande, al verlo, creen que van a tener un sexo espectacular y es mÃ¡s fÃ¡cil que tengan una relaciÃ³n sexual mÃ¡s placentera, desde que utilizo este sistema mi pene crecio 4.7 centimetros', 1),
(524, 29, '2011-10-01', 'Encantado de saludarles, soy Arturo. Quiero decirles que su programa es una maravilla, en menos de un mes he aumentado mi pene en tres centÃ­metro, y que el video me han ayudado a comprender mejor cÃ³mo realizar el programa de ejercicios. Antes media 17 ahora mide unos 20.5 centimetros. \r\nMuchas gracias por su atenciÃ³n.', 1),
(525, 656, '2011-12-01', 'Quiero animar a todos los que, por una causa u otra desean o necesitan aumentar unos centÃ­metros de mÃ¡s a su pene, a que sigan el mÃ©todo de Peneperfecto.com, a mÃ­ al igual que a todos nos ha funcionado, en mi caso empecÃ© con 16 cm y ahora despuÃ©s de 1 y medio tengo 20 cm. eso sÃ­, la constancia y continuidad en el seguimiento del programa, tal y como mencionan en el manual, ha sido la que me ha dado esta satisfacciÃ³n....saludos al equipo de helpdesk por su buena atencion.', 1),
(526, 1050, '2011-12-01', 'No puedo agradecerles lo suficiente mi miembro ha crecido de 13.5 CM a casi 18 CM en sÃ³lo 2 meses, mejor aÃºn como resultado directo mi vida amorosa y autoconfianza han mejorado radicalmente. A todos los tÃ­os ahÃ­ fuera que lo estÃ©n considerando, HACERLO, vale la pena Sinceramente saludos.', 1),
(527, 1125, '2011-12-02', 'hugo eso mismo iva a decir pero dejame decirte que al principio estaba dudoso y despues de leer esta web me decidi por comparlo en realidad es muy barato y los beneficios que se consiguen con este son enormes, como dice el dicho para probarlo hay que comparlo jeje lo recomiendo al 1000% me gustaria que mas personas lo practicaran asi podemos crear una gran foro de practicantes de estas tecnicas de pp', 1),
(528, 429, '2011-12-03', 'Estimados todos,\r\nComencÃ© su programa con una talla de 15 cm lo que no estÃ¡ mal pero querÃ­a conseguir algunos centÃ­metros mÃ¡s. Ahora tengo 19 cm y sÃ³lo han transcurrido 5 semanas, en cuanto a mi glande se ha puesto ien cabezona mi mujer estÃ¡ alucinada y ahora disfruta mucho mÃ¡s ya que tambiÃ©n he aprendido a controlar mis eyaculaciones pudiendo asÃ­ prolongar el coito.', 1),
(529, 548, '2011-12-05', 'Hola, DespuÃ©s de trabajar con su programa soy un creyente total, les voy a contar una historia que seguramente ya habrÃ¡n oÃ­do antes. ComencÃ© con 14cm de largo y despuÃ©s de 1 mes con su programa ahora estoy en 17 cm. TodavÃ­a creo que tengo potencial de crecimiento. No solamente ha crecido sino que tambiÃ©n estÃ¡ mÃ¡s duro, fÃ­jense que antes de comenzar con el programa tenÃ­a problemas incluso para tener erecciones, ahora la tengo dura como una roca y puedo controlar mis eyaculaciones y hacer el amor de manera mÃ¡s prolongadas y placentera, no puedo expresar con palabras lo que siento. Las palabras no pueden expresar mi alegrÃ­a. Un millÃ³n de gracias al equipo de pene perfecto mi vida ahora es perfecta!', 1),
(530, 528, '2011-12-06', 'Queridos practicantes del pene perfecto: Antes que nada quiero agradecerles de corazÃ³n lo que han hecho por mÃ­. Antes de conocer su programa tenÃ­a una talla de 13 cm y 9 de grueso, con su programa y en 2 meses mi vida ha cambiado, ahora mide 18 cm de largo y 12.8 de grueso, mis erecciones han vuelto a ser normales ya que poco a poco y antes de empezar con las tÃ©cnicas estaba cayendo en una depresiÃ³n que me impedÃ­a tener erecciones y eyacular. mi salud mental ahora ha mejorado por lo que les estamos mi mujer y yo eternamente agradecidos.', 1),
(531, 719, '2011-12-06', 'Para esas personas que les gusta investigar les cento que pague este programa hace 3 semanas y puedo contarles que esto si me funciono y si funciona asi que no investiguen tanto y mas bien comiencen hacer estas tÃ©cnicas que son 100% naturales, son fÃ¡ciles de hacer y agradables hasta el momento le agregue a mi pene 2.8 centÃ­metros y les puedo asegurar que mi pareja esta mas feliz que nunca y yo me siento muy satisfecho he logrado gracias a estos seÃ±ores, pero aun no he llegado a mi meta final de 22 x 16 cm.', 1),
(532, 1038, '2011-12-07', 'buenas noches, espero que comenten mis medidas iniciales y actuales\r\n\r\niniciales 16.3 x 12.1\r\n\r\nahora 19.6 x 14.3\r\n\r\ntiempo transcurrido 4 semanas', 1),
(533, 474, '2011-12-07', 'POR FIN MI PENE ESTA AUMENTANDO PROPORCIONALMENTE ME FUNCIONA MUY BIEN LOS EJERCICIOS FELICITOS A LOS CREADORES DE GENIAL METODO NATURAL, COMENCE A VER RESULTADOS EN SOLO 3 DIAS SOBRE TODO EN EL GROSOR A SIMPLE VISTA NOTE LA DIFERENCIA TANTO EN ERECTO COMO EN FLACIDO INVESTIGANDO ME DOY CUENTA QUE ESTOS SON LOS UNICOS EJERCICIOS QUE DE VERDAD FUNCIONAN MIL GRACIAS!!', 1),
(534, 183, '2011-12-08', 'buen servicio! buen producto gracias.', 1),
(535, 1207, '2011-12-09', 'Hola, el ejercicio del engrosamiento entrega resultados muy rapidos es genial mis medidas iniciales son 17 x 13 saludos', 1),
(536, 1131, '2011-12-10', ':O mi pene esta creciendo es verdad si funciona es perfecto lo mejor! :)', 1),
(537, 502, '2011-12-11', 'IncreÃ­ble mi pene se alargo 4 centÃ­metros y engroso 1.8 centÃ­metros, logre enderezarlo al mismo tiempo estoy agradecido voy muy bien! gracias.', 1),
(538, 660, '2011-12-11', 'buenas noches, por fin una web seria un sistema para agrandar el pene de verdad, para aquellos interesados lo compre hace 3 semanas me funciona muy bien, mis resultados han sido sorprendentes de 17.2 cm a 19.6 cm se me puso gordita ancha y un poco mas pesadita, se me ven las venas mas gruesas y duras se siente muy bien tener un pene dotado y grande, me hace sentir bien en cualquier lugar con cualquier mujer es excelente', 1),
(539, 542, '2011-12-12', 'Very Good', 1),
(540, 604, '2011-12-14', 'Muchas gracias nunca me imagine que esto funcionaria, pero lo he comprobado mis resultados son muy satisfactorios y aun continuo haciÃ©ndolos mi meta es llegar a 21 centÃ­metros x 16 centÃ­metros, mejore mis eyaculaciones ahora las controlo y son mas fuertes antes mi pene se veÃ­a normalito o sencillo pero ahora se ve monstruoso fuerte grande y sano, cuando lo tengo en flacido esta grande tambien y se me nota mas el paquete, realmente es interesante solo le dedido 12 minutos diarios saludos a todos los practicanmtes de Pene perfecto', 1),
(541, 245, '2011-12-15', 'Hola a todos,es la primera vez que entro en el foro y he estado hechando un vistazo antes de escriber, me parece que nadie ha tenido ningun tipo de problema en estos ejercicios, pienso que son muy seguros tambien realizo los ejercicios desde el mes pasado me interesa mucho controlar mi eyaculazion y engrosarlo', 1),
(542, 444, '2011-12-16', 'POR FIN UNA WEB QUE REALMENTE FUNCIONA POR FIN, YA ESTABA CANSADO DE ESAS WEB FALSAS, POR FIN GRACIAS A DIOS, LO ÃšNICO QUE QUERÃA ERA AGRANDAR MI PENE Y LO LOGRE CON PENEPERFECTO USTEDES SON LOS MEJORES SE MERECEN LO MEJOR MIL GRACIAS!!', 1),
(543, 852, '2011-12-16', 'Tienes toda la razon Jose, por fin una Web de verdad, tambien estaba como tu buscando una solucion al tamaÃ±o de mi pene y no la encontraba tambien le agradezco a Dios por encontrar esta Web sinceramente Peneperfecto es la soluciÃ³n al tamaÃ±o del pene', 1),
(544, 729, '2011-12-16', 'Hola, lo compre ayer el video es excelente y el manual muy explicativo y comprensivo, se nota que tendre grandes resultados des hoy los empezare mis tamaÃ±o actual es, 16.1 x 11.4 cm. en dos semanas compartirÃ© con todos ustedes mis resultados', 1),
(545, 492, '2011-12-17', 'esta muy bueno! me gusta.', 1),
(546, 640, '2011-12-18', 'Hola, hasta ahora logre aumentar 2.8 cm me hace sentir bien', 1),
(547, 832, '2011-12-18', 'Saludos, gracias el producto es muy bueno mi pene se agrando que felicidad, mil gracias seÃ±ores!\r\n\r\nAhora mi pene mide 21 CM', 1),
(548, 550, '2011-12-19', 'A mi tambien me hace muy feliz que seas feliz!!!\r\n\r\nQue bien todo', 1),
(549, 676, '2011-12-20', 'Buenas tardes, son muy interesante los ejercicios, gracias por el buen servicio!', 1),
(550, 493, '2011-12-17', 'Por fin voy agrandar mi verga, saludos y suerte!', 1),
(551, 795, '2011-12-16', 'lo mejor de todos los tiempo mi pene creciÃ³ 6 centÃ­metros ahora la tengo muy grande las mujeres quieren todas conmigo me lo merezco gracias', 1),
(552, 642, '2011-12-22', 'Me funciona de maravillas el pene creciÃ³!', 1),
(553, 209, '2011-12-23', 'hola he comprado este manual+ video y les puedo decir que si funcionan en mi caso me han dado resultados satisfactorios me siento contento por lo que he adquirido y lo recomiendo a todos ustedes, saludos!', 1),
(554, 919, '2011-12-25', 'muy bueno el servicio muy serios y rÃ¡pidos excelente ahora solo me queda comenzar mi rutina pronto estarÃ© hablÃ¡ndole de resultados saludos y gracias a los amigos de pene perfecto por el excelente servicio', 1),
(555, 421, '2011-12-25', 'Les escribÃ­a para agradecerle a todo el equipo de PenePerfecto.com por ofrecer estas tÃ©cnicas online, tenÃ­a un pene de 15 centimetros y en solo 2 meses llegue a tenerlo de 21centimetros! Mi vida sexual es increÃ­ble y mi novia esta enloquecida, gracias!.', 1),
(556, 528, '2011-12-25', '4.8 cm + en 2 meses me siento contento esto es lo que un hombre necesita para ser feliz voy a seguir aumentÃ¡ndomelo mi meta es llegar a 22 cm de largo x 17 cm de ancho', 1),
(557, 538, '2011-12-25', 'Hola a todos nunca pensÃ© que esto me iba a funcionar estoy super sorprendido ahora les voy a dar una gratificaciÃ³n a los seÃ±ores de pene perfecto asi como se los prometÃ­ yo nunca pensÃ© que estos ejercicios me iban a dar resultados en solo 2 semanas WOW estoy impresionado con mis resultados AMIGOS ESTO SI FUNCIONA VAMOS ADELANTE HACER ESTOS EJERCICIOS!!!!!GRACIAS.', 1),
(558, 1015, '2011-12-26', 'Como dijeron por hay el mÃ©todo es natural y todo lo natural siempre tienen la delantera si todo fuera natural como estos ejercicios nadie sufrirÃ­a de enfermedades por culpa de las medicinas o las cosas artificiales, mi verga aumento 1.7 centÃ­metros en el mes en el siguiente mes espero lo mismo o un poco mas', 1),
(559, 1177, '2011-12-27', 'Hola es lÃ³gico que los ejercicios naturales son la mejor opciÃ³n para lograr un beneficio yo no creo en las pastillas o aparatos pero si escogiera un mÃ©todo preferirÃ­a mil veces el mÃ©todo natural como los ejercicios ya que son naturales no son perjudiciales como los medicamentos eso era todo espero que me hayan comprendido los que lean mi comentario chau', 1),
(560, 457, '2011-12-27', 'es grandioso me a funcionado muy bn d echo somos gay y nos fascina aser los ejercicios mutuamente saludos para el mich se k te aaaaa crecido bastante gracias por esos momentos d placer todos compruÃ©benlo les fascinara mucho en verdad si que crece el pilin antes me media 15 cm. ahora 23 es sorprendente jejejjeej me da un poco te pena pero es genial', 1),
(561, 482, '2011-12-28', 'COMPRE HACE 1 MES Y MEDIO HE GANADO 2.4 CENTÃMETROS DE LARGO X 1.7 CENTÃMETROS DE ANCHO SOY MUY DEDICADO A ESTE MÃ‰TODO Y SOLO PIENSO EN LLEGAR A MI META DE 21 CENTÃMETROS GRACIAS A TI TAMBIÃ‰N, SALUDOS', 1),
(562, 152, '2011-12-28', 'Llevo dos semanas de ejercicios Y..Ahora creo!!Estoy creciendo. Con tan solo verla, se nota un poco mÃ¡s larga, pero sin lugar a dudas, bastante mÃ¡s gruesa!!Es increÃ­ble que funcione y se los recomiendo a todos aquellos que estÃ©n dudando!!', 1),
(563, 422, '2011-12-29', 'Hi, por que no escriben sus resultados? asi podremos saber quien le esta iyendo mejor mi resultados son asi: \r\n\r\nAntes mi pene media de largo 14 centÃ­metros pasaron 2 meses y medio haciendo los ejercicios de pene perfecto ahora mi pene mide 18.6 centÃ­metros,..Opinen mi resultados ..Ancho de mi pene antes 11.3 de circunferencia ahora 15.4 de ancho o circunferencia ..que opinan mis resultados son rÃ¡pidos lentos o como,.. TambiÃ©n se me puso grande la cabeza del pene pero me pesa mas que antes el pene..', 1),
(564, 926, '2011-12-30', 'mis medidas inÃ­ciales antes de empezar estas tÃ©cnicas de agrandamiento Medidas inÃ­ciales flÃ¡cido 10.5 x 11, en erecciÃ³n 15.3 x 12.5Saludos, espero conseguir buen tamaÃ±o y grosor con este manual gracias', 1),
(565, 513, '2011-12-31', 'Inicialmente me suscribÃ­ atraÃ­do por las tÃ©cnicas de alargamiento del pene, pero termine principalmente sorprendido por los ejercicios para mejorar las erecciones, es increible nunca pensÃ© que podÃ­a mejorar mi capacidad de erecciÃ³n de esta manera tambien agrande mi pene 3 centimetros mas, ahora mide 19.5 cm x 14.2 cm.', 1),
(566, 1229, '2011-12-31', 'Amigos practicantes de pene perfecto es verdad, si funciono! lo comprobÃ©, creÃ­a que era mentiras pero en realidad es real si funciona el pene se puso grande y asi se me mantiene estable fuerte duro venoso es increÃ­ble me fascinÃ³ el video muy bueno nÃ­tido el producto a buen precio, sigan asi', 1),
(567, 881, '2012-01-01', 'Hola soy de panama les dirÃ© en pÃºblico tengo 1 mes de hacer estas tÃ©cnicas y aumente 2.8 cm de largo y 1.5 cm de ancho estas medidas son reales el manual te dice que debes medir el pene antes y fui muy preciso, estoy muy contento porque mi pene va para delante, Gracias a pene a ustedes', 1),
(568, 691, '2012-01-02', 'Es alegrÃ­a y satisfacciÃ³n pura, al escuchar de tu novia, estas palabras "La siento y la veo mÃ¡s ancha y un poco mÃ¡s larga".. Por decirlo de alguna manera y no comentar cosas obscenas.. \r\n\r\nEjjeje Voy a seguir con la rutina, sin lugar a dudas!!MuchÃ­simas Gracias a pene perfecto! Estoy infinitamente agradecido!!', 1),
(569, 419, '2012-01-02', 'Es alegrÃ­a y satisfacciÃ³n pura, al escuchar de tu novia, estas palabras "La siento y la veo mÃ¡s ancha y un poco mÃ¡s larga".. Por decirlo de alguna manera y no comentar cosas obscenas.. \r\n\r\nEjjeje Voy a seguir con la rutina, sin lugar a dudas!!MuchÃ­simas Gracias a pene perfecto! Estoy infinitamente agradecido!!', 1),
(570, 208, '2012-01-02', 'Buenas Yo personalmente si estoy satisfecho y agradecido por la calidad del contenido de este manual y los videos, al principio pensÃ© que no me iba a funcionar pero despuÃ©s de 3 semanas no puede aguatar la emociÃ³n y no lo podÃ­a creer que mi pene se halla puesto tremendamente fuerte dura y venosa, no tengo nada que envidiarle a los actores porno por que yo puedo tenerla igual a mejor que ellos ya he agrandado mi pene 3cm GRACIAS AMIGOS GRACIAS USTEDES SON LOS MEJORES!!! LE RECOMENDÃ“ ESTE PRODUCTO A TODOS !', 1),
(571, 209, '2012-01-03', 'Dicho por expertos en salud sexual..\r\n\r\nMediante una serie de ejercicios aumentara el tamaÃ±o de tu pene de 3 a 10 cm., corregir deformaciones (pene curvo) y mejorar tanto tus erecciones y como tus eyaculaciones (evitar o corregir la eyaculaciÃ³n precoz).HECHO: En una reciente encuesta, el 78% de las mujeres admiten que estÃ¡n insatisfechas con el tamaÃ±o del pene de su pareja.\r\n\r\nSeÃ±ores lo investigando y estos ejercicios son recomendados', 1),
(572, 215, '2012-01-03', 'excelente sistema!', 1),
(573, 229, '2012-01-05', 'existe una edad mÃ­nima para hacer los ejercicios?', 1),
(574, 420, '2012-01-06', 'Opino lo mismo es muy buen mÃ©todo y entrega resultados rapidos', 1),
(575, 422, '2012-01-07', 'Buenas, Muy bueno excelente lo mejor lo recomiendo a todos los que obtan por este mÃ©todo para agrandar sus miembros, lo compre hace 1 semana y ya he podido ver resultados aun estoy sorprendido pense que no iba a obtener resultados satisfactorios en tan poco tiempo mil gracias por darme la oportunidad de probar su producto y asÃ­ como me lo recomendaros tambiÃ©n lo recomiendo por aqui gracias y suerte!', 1),
(576, 423, '2012-01-09', 'buenas yo hace mas de 1 aÃ±o buscaba un mÃ©todo que de verdad de agrandara por lo menos 3 cm o 4 cm y probÃ© con varios mÃ©todos entre ellos unos ejercicios pero que no funcionaron, pero tengo el honor de decirles que hace 1 mes encontrÃ© esta web y decidÃ­ comprar este manual para probar como ultima opciÃ³n y gracias a Dios por fin estoy logrando mis objetivos he ganado 2.3 cm de largo y me ha llenado de emociÃ³n saber que muy pronto lograre mis 4 centÃ­metros gracias a este gran programa me siento feliz, MIL GRACIAS!', 1),
(577, 424, '2012-01-10', 'Hola soy colombiano y compre este producto manual + video por que necesitaba agrandar mi pene, esto me ha gustado tanto que no puedo dejar de agradecerles y pedirle que sigan asi ayudando a los que mas necesitan de este mÃ©todo gracias amigos', 1),
(578, 425, '2012-01-12', 'de donde eres tambien soy colombiano de cali compay, me gustaria solo saber como vas con la rutina y que resultados haz obtenido, saludos a mis compatriotas', 1),
(579, 426, '2012-01-13', 'Por fin una web que entrega resultadoas en poco tiempo, por fil algo real gracias a Dios encontre esta web :) saludos', 1),
(580, 428, '2012-01-14', 'Para aquellos investigadores les comento que pague este producto hace ratico y puedo contarles que esto si me funciono y si funciona asi que no investiguen tanto y mas bien comiencen hacer estas tÃ©cnicas que son 100% naturales, son fÃ¡ciles de hacer y agradables hasta el momento le agregue a mi pene 2 centÃ­metros y les puedo asegurar que mi pareja esta mas feliz que nunca y yo me siento muy satisfecho he logrado gracias a estos seÃ±ores,', 1),
(581, 429, '2012-01-14', 'Haz los ejercicios de jelquin te daran resultados rapidos y satisfactorios yo lo hice asi y ahora estoy contento de eso, me imagino que apenas estas empezando te asegro que si haces una rutina dedicada te vas a sorprender de los resultados que obtendras', 1),
(582, 430, '2012-01-17', 'Hola, solo le dedico pocos minutos al dia tam cual indica el programa, en realidad mi rutina es de lunes a viernes descanso los sÃ¡bado y domingo pero aveces roto esos dÃ­as y me puede caer un lunes o martes de descanso, tambiÃ©n hice una tabla de resultados como la que indica el manual para llevar un seguimiento detallado de las ganancias Vs tiempo y para ir aumentÃ¡ndole el ritmo a los ejercicios y llegar mas rÃ¡pido a mi resultados final, gracias a todo el equipo de peneperfecto por crear tan excelente programa estoy orgulloso de ustedes y agradecido por darme la oportunidad de que mi pene hasta el momento halla crecido 3.4 centimetros mil gracias de nuevo!', 1),
(583, 431, '2012-01-19', 'humberto..analizando tus aumentos dÃ©jame decirte que estas en un buen porcentaje y la rutina que tienes es la misma que yo aplico voy rotando los dos dÃ­as de descanso, lo hago al pie de la letra', 1),
(584, 434, '2012-01-20', 'Buenas lo interesante de este programa es que en mi caso el ejercicio de engrosamiento me entrega resultados mas rÃ¡pidos que otro ejercicio, es increÃ­ble como se engruesa en poco tiempo, y se pone muy venoso y monstruoso eso debe ser algo muy excitante para las mujeres, tanbien dedico 12 minutos diarios lo hago en el baÃ±o que es un lugar mas privado aun vivo en casa de mis padres jeje', 1),
(585, 435, '2012-01-21', 'cuando compre este manual me decia que al principio hacer 10 minutos diarios pero despues de 1 semana hice 15 minutos diarios y alcanse un resultado mas rapido y acelerado a lo normal eso me dejo contento y satisfecho por que en pocas semanas ya habia logrado mi meta final', 1),
(586, 436, '2012-01-23', 'hola,..dices que ahora haces 15 minutos diarios para tener resultados rÃ¡pidos pero depende para que los estas dedicando, me imagino que mixto para alargar y engrosar proporcionalmente..', 1),
(587, 438, '2012-01-24', 'Saludos desde ecuador\r\n\r\nDesde hace 1 semana empece el tratamiento de peneperfecto, mis medidas iniciales son\r\n\r\n12.3cm x 16.7 cm\r\n\r\nen una semana logre aumentar 0.7 cm de largo, hasta el momento esta aumentando perfectamente espero seguir asi muchas gracias', 1),
(588, 439, '2012-01-27', 'me gusto mucho el programa de agrandamiento es buenÃ­simo sobre todo el vÃ­deo es excelente los felicito por fin algo bueno para nosotros! :D', 1),
(589, 441, '2012-01-29', 'el man del video si que la tiene enorme como de 23 centimetros mas o menos y bien ancha asi quiero llegar a tenerla en mis proximos meses', 1),
(590, 442, '2012-01-30', 'lo compre solo para engrosar mi pene por que se veia algo delgado ahora es mucho mas grueso', 1),
(591, 443, '2012-01-31', 'Pipe yo tambien lo compre para engrosar y termine alargando mi pene 4 centimetros mas, ademas mi intencion fue agrandar la cabeza de mi pene y lo logre :)', 1),
(592, 444, '2012-02-02', 'buenas tardes segÃºn mis resultados que obtuve puedo decirle que los ejercicios estan muy bien no se como inventaron algo que funciona muy bien y sobre todo el pene se hace ver mas fuerte y poderoso es muy satisfactorio estoy agradecido con ustedes, son los mejores!', 1),
(593, 445, '2012-02-04', 'llevo 2 meses realizando la rutina, hasta el momento mis resultados van asi:\r\n\r\nantes de comenzar mi pene media 15 cm. de largo. ahora mide 21.3 cm de largo alargue bastante estoy contento.\r\n\r\nantes de comenzar mi pene media 11.6 cm de grosor. ahora mide 14.2 cm de grosor engrose bastante lo cual mi pene esta proporcionado grueso y largo\r\n\r\nDetalles: se agrandaron las venas, el pene se ve muy venoso y fuerte es como si tubiera musculos como si el pene hubiese hido al gimnacio, la cabeza del pene es mas grande que antes, puedo controlar mis eyaculaziones, ahora tengo erecciones mas rapidas y controladas, en pocas palabras ahora tengo un pene perfecto! gracias a el equipo de peneperfecto muchas gracias!!', 1),
(594, 446, '2012-02-05', 'Hola dejame felicitarte por excelentes resultados, uff si que tienes una anaconda en los pantalones ehh jeje, ademases es satisfactorio leer comentarios como el tuyo saber que muchos hombres estÃ¡n obteniendo resultados y que nadie se queja por que sencillamente el programa funciona perfectamente espero que llegues a tu meta final, aunque con esa medida puedes matar a una chica jeje saludos y suerte', 1),
(595, 447, '2012-02-05', 'simplemente lo recomiendo 100% es lo mÃ¡ximo!', 1),
(596, 448, '2012-02-06', 'eso mismo iba a decir, cuando uno obtienen resultados le da ganas de ayudar a otras personas que tienen lo mismo que tuvimos nosotros al principio un pene algo pequeÃ±o, por eso te digo que eso mismo iba a decir, saludos!', 1),
(597, 451, '2012-02-06', 'Utiliza el aceite de oliva o aceite de lubricante sexual es los favoritos para este programa de ejercicios suerte!', 1),
(598, 452, '2012-02-08', 'Buenas Lo mas interesante son las de controlar la eyaculaciÃ³n precoz bueno eso era una problema que tenia pero ya lo estoy controlando y loas resultados son magnÃ­ficos ahora mi novia me dice que como hice para hacerle el amor por 20 minutos mas jeje le dije son secretos del hombre', 1),
(599, 453, '2012-02-10', 'Que bueno frediâ€¦ yo compre este manual llevo 2 meses y aumente 4.2cm x 2.0cm eso es muy importante y me gusta puedo llegar a tener mi pene de 20 cm en 2 meses mas, esto es matematicas, creo que voy rapido, y lo hago antes de acostarme, me gustaria saber tu rutina fredi cualquier cosa me dejas un comentario o me regalas tu correo suerte! me pasare por aqui despues para ver novedades ok', 1),
(600, 455, '2012-02-11', 'Les escribÃ­a para agradecerle a todo el equipo de PenePerfecto.com por ofrecer estas tÃ©cnicas online, tenÃ­a un pene de 15 centimetros y en solo 2 meses llegue a tenerlo de 21centimetros! Mi vida sexual es increÃ­ble y mi novia esta enloquecida, gracias!.', 1),
(601, 457, '2012-02-11', 'Tengo que confesar que inicialmente dudÃ© mucho de comprar el manual de ejercicios, ya que no podÃ­a creer que hubiera algo que me ayudara con mi problema, ahora debo reconocer que es la mejor decisiÃ³n que he tomado en mi vida, los ejercicios son muy sencillos y sobretodo, efectivos.. el manual es excelente el video genial todo es perfecto. Muchas gracias!\r\n\r\nMis medidas anteriores fueron 16.3 x 11.2 un pene algo delgado \r\n\r\nAhora despues de 7 semanas 21.7 x 14.5 \r\n\r\nMi vida exual mejoro en un 95% ahora tengo un pene mas grueso y largo fuerte y duro, puedo controlar mis eyaculaciones y en los tiempo de refraccion son rapidos puedo echar hasta 5 polvasos es increible mi novia esta sorprendida me dice â€œLA MAQUINAâ€ jeje estoy feliz', 1),
(602, 458, '2012-02-12', 'Somos afortunados en obtener este tratamiento de buena efectividad, ya que en Internet hay muchas paginas que engaÃ±an y lo comprobÃ© espero que esta web siga adelante asÃ­ como yo resolvÃ­ mi problema del tamaÃ±o, que esta web ayude a muchos mas con este mismo problema, gracias!', 1),
(603, 459, '2012-02-15', 'Infinitas gracias!\r\n\r\nMis experiencias sexuales ahora son increÃ­bles, y altamente placenteras tanto para mi como para mi pareja realmente me siento como si fuera un nuevo hombre.\r\n\r\nMedidas iniciales 15.6 x 11.1 CM\r\n\r\nMededias actuales 19.7 x 14.2 CM\r\n\r\n:D', 1),
(604, 460, '2012-02-16', 'Quiero animar a todos los que, por una causa u otra desean o necesitan aumentar unos centÃ­metros de mÃ¡s a su pene, a que sigan el mÃ©todo de Peneperfecto.com, a mÃ­ al igual que a todos nos ha funcionado, en mi caso empecÃ© con 16 cm y ahora despuÃ©s de 1 y medio tengo 20 cm. eso sÃ­, la constancia y continuidad en el seguimiento del programa, tal y como mencionan en el manual, ha sido la que me ha dado esta satisfacciÃ³n....saludos al equipo de helpdesk por su buena atencion.', 1),
(605, 461, '2012-02-18', 'Tienes razÃ³n Hilario muchos no se dan cuenta que este programa a un costo tan bajo puede ayudarles con su problema, yo al principio dude pero despuÃ©s me decidÃ­ y miren ahora disfruto de mi nuevo pene, aunque aun sigo aumentÃ¡ndolo mi idea es llegar a 19.5', 1),
(606, 462, '2012-02-19', 'sencillamente lo mejor de todo es que el sistema es natural y todo lo naturales siempre llevan la delantera si todo fuera natural como estos ejercicios nadie sufrirÃ­a de enfermedades por culpa de las medicinas o las cosas artificiales', 1),
(607, 463, '2012-02-21', 'en eso no me cabe la menor duda!', 1),
(608, 464, '2012-02-26', 'Hola tengo 3 semanas en el tratamiento alcance hasta el momento un aumento de 2.1 centÃ­metros de longitud por 0.8 centÃ­metros de grosor mi rutina es muy dedicada y voy rotando los dos dÃ­as de descanso en la semana, en mi caso haciendo el ejercicio mixto se me puso mas grande la base del pene se me puso muy gruesa pero me gusta de esta manera por que a medida que penetro a mi mujer ella va sintiendo mas placer por lo que le esta entrando algo mas grueso, entonces me gustarÃ­a saber los que realizan el ejercicios mixto como avanza el engrosamiento por que en mi caso se me engroso mucho mas la base que la parte posterior del medio, gracias', 1),
(609, 465, '2012-02-27', 'si lo haces alrevez le aplicas mas precion a la copa sera mas potente, eso quisiera tener la copa mas grande que todo por qque la punta es lo que rompe jeje', 1),
(610, 466, '2012-02-27', 'AsÃ­ como dice gaston le estas aplicando mas presiÃ³n al tronco del pene a la base hazlo proporcional la misma presiÃ³n en todo el largo del pene y veras que el engrosamiento sera igual el todo el pene, lÃ³gicamente si le aplicas mas presiÃ³n en una parte del pene esa parte se va engrosar mas que las que le aplicas menos presiÃ³n espero que te halla ayudado saludos.', 1),
(611, 467, '2012-02-29', 'El ejercicio Mixto esta diseÃ±ado para alargar y engrosar el pene al mismo tiempo, si en tu caso se te engroso la parte inferior o base del pene es por que tu pene se va agrandando proporcionalmente ademas ten encuentra las presiones lee cuidadosamente el manual y mira el vÃ­deo sobre las presiones que se deben ejercer si le aplicas mas presiÃ³n a la base y menos al resto lÃ³gicamente se te va engrosar mas la base seguro es eso, por que al principio a mi me sucediÃ³ y luego lo proporcione aplicando la presiÃ³n en todo lo largo del pene', 1),
(612, 468, '2012-02-29', 'es mejor qque la parte de la base sea mas gruesa pienso que es mas rico culiar asi a las mujeres les gusta mas eso creo', 1),
(613, 469, '2012-02-28', 'si le aplicas la misma presiÃ³n a todo lo largo del pene obviamente se te engrosara proporcionalmente igual en todas sus Ã¡reas, nunca le apliques mas presiÃ³n en un Ã¡rea que en otra por que donde le aplicaste mas se te engrosara mas.', 1),
(614, 470, '2012-02-29', 'lo mejor es aplicarle mas presion arriba para que el glande se ponga mas grande que el cuerpo del pene asi tiene mas estetica y es mas placentero para las mujereas', 1),
(615, 471, '2012-03-01', 'Hola amigos yo tambiÃ©n compre este manual por recomendaciÃ³n apenas llevo 3 dias pero me gusto la forma como me lo enviaron fue rapidÃ­simo en solo minutos me llego el paquete a mi correo, solo deseo contactarme con alguien que este mas avanzado en estos ejercicios, que llebe por lo menos 2 meses les agradezco a este programa por excelente manual el video es full nÃ­tido y muy explicativo estoy ansioso con esto', 1),
(616, 472, '2012-03-02', 'Inicialmente me suscribÃ­ atraÃ­do por las tÃ©cnicas de alargamiento del pene, pero termine principalmente sorprendido por los ejercicios para mejorar las erecciones, es increible nunca pensÃ© que podÃ­a mejorar mi capacidad de erecciÃ³n de esta manera tambien agrande mi pene 3 centimetros mas, ahora mide 19.5 cm x 14.2 cm.', 1),
(617, 473, '2012-03-02', 'He hecho crecer mi pene de 13cm a 16 cm en solamente 60 dias estarÃ© agradecido de por vida! ojalÃ¡ todos los hombres se enteraran de esto, Gracias Pene perfecto', 1),
(618, 475, '2012-03-04', 'como es tu rutina y cuanto le dedicas diariamente??', 1),
(619, 476, '2012-03-04', 'Hola, DespuÃ©s de trabajar con su programa soy un creyente total, les voy a contar una historia que seguramente ya habrÃ¡n oÃ­do antes. ComencÃ© con 14cm de largo y despuÃ©s de 1 mes con su programa ahora estoy en 17 cm. TodavÃ­a creo que tengo potencial de crecimiento. No solamente ha crecido sino que tambiÃ©n estÃ¡ mÃ¡s duro, fÃ­jense que antes de comenzar con el programa tenÃ­a problemas incluso para tener erecciones, ahora la tengo dura como una roca y puedo controlar mis eyaculaciones y hacer el amor de manera mÃ¡s prolongadas y placentera, no puedo expresar con palabras lo que siento. Las palabras no pueden expresar mi alegrÃ­a. Un millÃ³n de gracias al equipo de pene perfecto mi vida ahora es perfecta!', 1),
(620, 477, '2012-03-05', 'Q bien te felicito, tambien agradecido el tratamiento y el servicio son buenisimos', 1),
(621, 478, '2012-03-06', 'amigo no dejes espacios en blanco, lo que querremos es info valiosa', 1),
(622, 479, '2012-03-07', 'Hola a todos,es la primera vez que entro en el foro y he estado hechando un vistazo antes de escriber, me parece que nadie ha tenido ningun tipo de problema en estos ejercicios, pienso que son muy seguros tambien realizo los ejercicios desde el mes pasado me interesa mucho controlar mi eyaculazion y engrosarlo', 1),
(623, 480, '2012-03-09', 'Queridos amigos: Antes que nada quiero agradecerles de corazÃ³n lo que han hecho por mÃ­. Antes de conocer su programa tenÃ­a una talla de 13 cm y 9 de grueso, con su programa y en 2 meses mi vida ha cambiado, ahora mide 18 cm de largo y 12.8 de grueso, mis erecciones han vuelto a ser normales ya que poco a poco y antes de empezar con las tÃ©cnicas estaba cayendo en una depresiÃ³n que me impedÃ­a tener erecciones y eyacular. mi salud mental ahora ha mejorado por lo que les estamos mi mujer y yo eternamente agradecidos.', 1),
(624, 481, '2012-03-11', 'Buenos resultados buena rutina!', 1),
(625, 482, '2012-03-12', 'Bueno, no me importaba el tamaÃ±o de mi pene hasta que me di cuenta que a la mayorÃ­a de las mujeres les importaba pienso que es un afrodisiaco para las mujeres un pene grande, al verlo, creen que van a tener un sexo espectacular y es mÃ¡s fÃ¡cil que tengan una relaciÃ³n sexual mÃ¡s placentera, desde que utilizo este sistema mi pene crecio 4.7 centimetros', 1),
(626, 482, '2012-03-14', 'Estimados seÃ±ores.\r\n\r\nComencÃ© su programa con una talla de 15 cm lo que no estÃ¡ mal pero querÃ­a conseguir algunos centÃ­metros mÃ¡s. Ahora tengo 19 cm y sÃ³lo han transcurrido 5 semanas, en cuanto a mi glande se ha puesto ien cabezona mi mujer estÃ¡ alucinada y ahora disfruta mucho mÃ¡s ya que tambiÃ©n he aprendido a controlar mis eyaculaciones pudiendo asÃ­ prolongar el coito.', 1),
(627, 483, '2012-03-14', 'Buenas les confieso que inicialmente dudÃ© mucho de comprar el manual de ejercicios, ya que no podÃ­a creer que hubiera algo que me ayudara con mi problema, ahora debo reconocer que es la mejor decisiÃ³n que he tomado en mi vida, los ejercicios son muy sencillos y sobretodo, efectivos.. el manual es excelente el video genial todo es perfecto. Muchas gracias!\r\n\r\nMis medidas anteriores fueron 16.3 x 11.2 un pene algo delgado \r\n\r\nAhora despues de 7 semanas 21.7 x 14.5 \r\n\r\nMi vida exual mejoro en un 95% ahora tengo un pene mas grueso y largo fuerte y duro, puedo controlar mis eyaculaciones y en los tiempo de refraccion son rapidos puedo echar hasta 5 polvasos es increible mi novia esta sorprendida me dice â€œLA MAQUINAâ€ jeje estoy feliz', 1),
(628, 484, '2012-03-14', 'Te felicito vas muy bien, esto es increÃ­ble, yo compre otros manuales y nunca obtuve resultados, pero con peneperfecto es increÃ­ble los resultados son sorprendentes a todos les funciona es lo maximo!!', 1),
(629, 485, '2012-03-16', 'Hola agradezco de corazon a los seÃ±ores de peneperfecto por darme la oportunidad de realizar estos ejercicios para agrandar el pene, Ãºltimamente he ganado mas que nunca con respecto a los resultados y solo querÃ­a agradecerles por que jamÃ¡s pensÃ© que por solo $68 USD yo podrÃ­a agrandar mi pene, pensÃ© que no era cierto pero gracias a Dios tome la decisiÃ³n y ahora estoy feliz de haberme encontrado con esta web en la red, MIL GRACIAS!', 1),
(630, 486, '2012-03-17', 'esto me lo recomendÃ³ un amigo de MÃ©xico que tengo en el MSN me dio este link porque esto es muy verdadero y confiable entonces es verdad todo esto, ahora si me siento mejor , saludos a kiki en Venezuela', 1),
(631, 487, '2012-03-19', 'aqui rep.dominicana tengan ustedes muy buenos tardes, les comento que me gusta el gimnasio todo el cuerpo esta apto de crecimiento muscular con su debida ejercitaciÃ³n creo que si funciona pana, por que ya algunos lo han comprobado y probado y mi persona apenas empieza estos ejercicios cuando tenga los primeros resultados les cuento, suerte a todos es que les digo', 1),
(632, 488, '2012-03-20', 'Digo lo mismo, recien lo compre empezare hoy mismo', 1),
(633, 489, '2012-03-21', 'que rapides en la entrega de la clave de acceso a la web, me imaginaba algo diferente pero asi es mucho mejor que buen producto muchas graciasss, esto si me gusto de verdad el video se ven super geniales boy hacer los ejercicios mil gracias!', 1),
(634, 489, '2012-03-21', 'Por fin puedo disfrutar del placer del sexo, ahora hacer el amor con mi novia es algo que nunca me imagine, cuando ella me ve el pito se derrite solo con verlo ya no se aguanta es lo maximo mil gracias!!', 1),
(635, 490, '2012-03-23', 'el sexo es lo mÃ¡ximo lo mejor que podemos tener, por tal motivo hago estos ejercicios quiero tener el pene de 22 cm y lo lograre pronto, tenemos siempre buscar mas placer y llegar a los limites recuerden que solo tenemos una vida y es corta a disfrutar todo lo que puedan pero con responsabilidad y protecciÃ³n colegas..', 1),
(636, 491, '2012-03-23', 'Buenas Yo personalmente si estoy satisfecho y agradecido por la calidad del contenido de este manual y los videos, al principio pensÃ© que no me iba a funcionar pero despuÃ©s de 3 semanas no puede aguatar la emociÃ³n y no lo podÃ­a creer que mi pene se halla puesto tremendamente fuerte dura y venosa, no tengo nada que envidiarle a los actores porno por que yo puedo tenerla igual a mejor que ellos ya he agrandado mi pene 3cm GRACIAS AMIGOS GRACIAS USTEDES SON LOS MEJORES!!! LE RECOMENDÃ“ ESTE PRODUCTO A TODOS !', 1),
(637, 492, '2012-03-25', 'Hola, lo bueno del tratamiento es que aparte de hacernos aumentar el tamaÃ±o del pene tambiÃ©n nos hace aumentar el autoestima y la seguridad que llevamos cuando tratamos de conquistar a una mujer, tener el pene grande pienso que es el mejor mÃ©todo para tener las mujeres que uno desee, lo he comprobado la seguridad es mayor la confianza y el autoestima se elevan eso tambiÃ©n se refleja fÃ­sicamente, \r\n\r\nPersonalmente estoy agradecido con este tratamiento me funciona de maravillas', 1),
(638, 493, '2012-03-26', 'Estoy de acuerdo contigo, es verdad lo he sentido el autoestima en especial la seguridad aumenta. mi pene hasta el momento aumento 4.6 centÃ­metros de longitud por 1.8 centÃ­metros de grosor, ya no tengo nada que envidiarle a los actores porno mi pene esta mas grande y fuerte saludos..', 1),
(639, 494, '2012-03-26', 'INCREÃBLE PENSE QUE NO ME IVA A FUNCIONAR, DESPUÃ‰S DE 2 SEMANAS AHORA ESTOY CONVENCIDO QUE SI FUNCIONA,MI PENE CRECIÃ“ 1 CENTÃMETRO Y NO PUEDO CREERLO GRACIAS A DIOS ENCONTRÃ‰ ESTE PROGRAMA :)', 1),
(640, 495, '2012-03-27', 'AsÃ­ es ToÃ±o yo pensaba lo mismo, ademas hay mucha gente que piensa que no les va a funcionar y pierden la oportunidad de probar este novedoso mÃ©todo, creo que es el Ãºnico programa de ejercicios en el mundo que si funciona de verdad, no como otros programas falsos que estÃ¡n en Internet ya estaba cansado de los engaÃ±os, a los interesados les digo que esto si funciona!!', 1),
(641, 496, '2012-03-29', 'Gracias por el servicio, hasta ahora todo funcionando bien', 1),
(642, 497, '2012-03-30', 'que bueno ver esto por la web, solo dejo mi comentario me parece algo muy importante para aquellas personas que tienen el pene un poco pequeÃ±o esto les interesara pero cabe destacar que tambien hay gente que no lo tiene tan pequeÃ±o y quiere lograr un poco mas de tamaÃ±o como yo, es que las mujeres nunca estan satisfechas por eso busco agrandarlo un poquito mas y eso espero.', 1),
(643, 498, '2012-03-31', 'Buenas, opino que para mi el tamaÃ±o realmente importa por que un pene de mayor tamaÃ±o significa un Ã¡rea de mayor superficie, lo cual estimula mÃ¡s terminaciones nerviosas, resultando en una experiencia mÃ¡s placentera para ambos, ademas un pene mayor es una excitaciÃ³n visual mÃ¡s natural para una mujer por ese y muchos motivos mas es muy importante un pene mas grande o grande, he investigado mucho sobre esto y realmente este programa si entrega resultados \r\n\r\nmis medidas: \r\n\r\nAntes: 15.3 x 10.7 CM.\r\nDespuÃ©s: 18.6 x 14.5 CM.\r\n\r\nDesde que empece este tratamiento han 26 dÃ­as, mi pene aumento 3.3 centÃ­metros y sigo en aumento, saludos a todos.', 1),
(644, 498, '2012-03-31', 'Simplemente Perfecto', 1),
(645, 499, '2012-04-01', 'hola a mis 38 aÃ±os funciona bien, es increÃ­ble como las venas se engrosan hace que el pene se vea fuerte y poderoso', 1),
(646, 500, '2012-04-01', 'es que esto es para todas las edades despuÃ©s q tengas un pene el se aumentara con estos ejercicios', 1),
(647, 501, '2012-04-01', 'hola a mis 38 aÃ±os funciona bien, es increÃ­ble como las venas se engrosan hace que el pene se vea fuerte y poderoso', 1),
(648, 502, '2012-04-02', 'Buenas....Por fin solucione mi problema del pene lo tenia un poco pequeÃ±o, hasta el momento aumente 4.6 centÃ­metros de largo lo cual es suficiente estoy feliz, mil gracias por el buen servicio', 1),
(649, 504, '2012-04-03', 'te felicito que buenos resultados lograste, estoy de acuerdo contigo el servicio excelente, hace aproximadamente 2 meses que compre este tratamiento en ese tiempo aumente 6 centÃ­metros de largo por 2.8 centimetros de grosor, pienso que ya logre mi objetivo y estoy satisfecho', 1),
(650, 505, '2012-04-03', 'lo que mas me gusta de este mÃ©todo es que FUNCIONA DE VERDAD :)', 1),
(651, 505, '2012-04-05', 'Hola a todos, les comentare mi historia, hace mas o menos 6 aÃ±os buscaba un mÃ©todo para aumentar mi pene sin cirugÃ­a, tenia un pene pequeÃ±o de 14 x 11 probÃ© muchos mÃ©todos en la web, pase por varios engaÃ±os en realidad todos fueron un engaÃ±o, estuve en foros de agrandamiento leÃ­ muchos manuales pero nunca se me agrandaba estaba frustrado de no lograrlo, hasta que encontrÃ© esta web y cambio mi vida, crÃ©eme que esta web cambio mi vida logre aumentar 4 gloriosos centÃ­metros mi pene ahora es de 18 centÃ­metros me cambio la vida, a los interesados les aconsejo que no realicen esos ejercicios de Internet gratis que con eso nunca conseguirÃ¡n aumentar 1 solo milÃ­metro yo ya tuve esa experiencia, si desean aumentar su pene de verdad les recomiendo esta pagina que si funciona, gracias a Dios y a peneperfecto mi vida cambio', 1),
(652, 506, '2012-04-07', 'que bueno tu comentario, eso debe ser una esperanza para aquellos que buscan aumentar su pene, asi como tu tambien probe muchos metodos tambien hice los fracasados ejercicios de internet que se encuentran gratis en algunos foros lo que no entiendo es por que diablos ponen unos ejericios que no agrandan el pene, siempre lo he dicho lo que es gratis nunca funciona, perdÃ­ mucho tiempo con esos malditos ejericios de foros me dio rabia no se por que no habia encontrado esta web antes me ubiera ahorrado tiempo y menos maltrato a mi pene, pero nunca es tarde ya aumente mi pene como siempre lo deseaba', 1),
(653, 507, '2012-04-10', 'Buenas pienso que todos los que estamos aqui es por que nos aburrimos de hacer esos falsos ejercicios de foros que nunca funcionaron, solo nos hacen perder el tiempo y tambien ponen en riesgo nuestra salud, esta web la encontre de casualidad lo que me hizo creer en comprarlo fue que hable directamente con la empresa de esa manera comprendi que esto si era enserio, de paso dirÃ© mis resultados\r\n\r\nAntes: 16 x 12 \r\nahora: 21 x 15.3 para que mas..con eso rompo cualquier coÃ±o jeje', 1),
(654, 508, '2012-04-12', 'Mucha gente no sabe que pierde su tiempo en esos ejercicios llamados EP ejercicio del pene muchos foros para aumentar el pene pero en los comentarios de los practicantes todos dicen aumentar o tener ganancias de solo 3 milÃ­metros en un aÃ±o, quien va hacer todos los dÃ­as ejercicios durante 1 aÃ±o para ganar 3 milÃ­metros?? no jodas, me canse de eso, decidÃ­ probar aquÃ­ y sorpresa mi pene aumento y de que forma.. sorprendentemente woaauu aquÃ­ me quedo ;)', 1),
(655, 509, '2012-04-15', 'buenas noches, seÃ±ores hay que pensar en algo importante, los ejercicios de peneperfecto logran aumentar el pene de forma rÃ¡pida y segura de eso no cabe duda, pero tambiÃ©n te mejoran el rendimiento sexual al mismo tiempo que aumentas logras controlar y prolongar el tiempo o acto sexual ademas el tiempo de refracciÃ³n mejora considerablemente y si sigues el ejercicio # 3 y lo haces el doble que el 1 y 2 la cabeza del pene se aumenta bastante, nunca me imagine tener la cabeza del pene asÃ­ de grande, mi esposa se excita mucho solo con verla', 1),
(656, 510, '2012-04-15', 'Me di cuenta de eso pero de todos modos el manual dice que para aumentar la cabeza del pene ese es el procedimiento el que escribiste, en mi caso me gusta tener el pene proporcionado, saludos', 1),
(657, 511, '2012-04-17', 'Aumente mi pene 5.3 centÃ­metros lo he logrado!', 1);
INSERT INTO `comentario` (`id`, `venta`, `fecha`, `comentario`, `activo`) VALUES
(658, 512, '2012-04-17', 'Hi, primero que todo estoy muy agradecido con los seÃ±ores de peneperfecto por exitoso manual, y sigan asÃ­ ayudando a los que mas necesitamos de estos tratamientos, en realidad nos hace sentir mejor y hacerlas a ellas sentir mejor y felices', 1),
(659, 513, '2012-04-19', 'Gracias por excelente mÃ©todo, ustedes son lo mejores, sigan asÃ­!', 1),
(660, 514, '2012-04-22', 'Saludos desde Panama, Bueno tengo una pregunta pero primero comentare mi experiencia..\r\n\r\nCon este producto fue de lo mejor lo compre solo para enderezar mi pene que estaba muy doblado hacia la izquierda y me incomodaba lo mismo que a mi pareja tener relaciones sexuales, logre enderezarlo en 2 meses, la pregunta es si puedo engrosarlo despues de haberlo enderezado?? creo que si se puede pero quiero asegurarme antes, mi pene mide 16.7 x 10.2 gracias', 1),
(661, 515, '2012-04-22', 'Hola Christian claro que puedes angrosarlo y alargarlo puedes hacer cualquier tipo de ejercicios que indica el manual, fÃ­jate yo alargo engroso y aumento la cabeza de mi pene 3 ejercicios al mismo tiempo y me funciona muy bien', 1),
(662, 516, '2012-04-23', 'Para aquellos que buscan una soluciÃ³n definitiva al tamaÃ±o de sus penes, recomiendo este metodo es sorprendente como se engrosa el pene con la tÃ©cnica #2', 1),
(663, 521, '2012-04-25', 'gracias por el producto, llevo 3 semanas mi pene se alargo 2.3 centÃ­metros es muy notable el resultado, nunca me imagine que iba a encontrar un tratamiento natural y que funcionara de verdad mil gracias', 1),
(664, 522, '2012-04-27', '2.3 centÃ­metros es bastante para el pene me imagino q se nota full, yo ya logre mi meta de 21 centÃ­metros me siento dichoso lo mejor que pude hacer', 1),
(665, 523, '2012-04-29', 'hola, agradezco por buen producto me gusto la calidad del video se detalla todo los ejercicios perfectamente y el manual pdf es muy descriptivo les pongo un 10 y se los recomiendo a todos! como les prometÃ­ les enviare 100 dÃ³lares de gratitud cuando llegue a ganar 5 cm :) voy por 1cm de ganancia pero con esto me da la garantÃ­a que mis 5 cm estÃ¡n cerca y que sus 100 dolares tambiÃ©n estÃ¡n cerca, saludos y gracias!', 1),
(666, 524, '2012-04-30', 'es perfecto, en casi dos meses de practicar estos ejercicios mi pene se agrando mucho sin ningÃºn tipo de inconvenientes o problemas por eso digo que estas tÃ©cnicas son perfectas, ahora puedo durar mas haciendo el amor mis erecciones son mas potentes esto si me gusta', 1),
(667, 525, '2011-05-01', 'Me sucede lo mismo!', 1),
(668, 526, '2011-05-01', 'saludos, mi esposa le fascina mi nuevo yo, ella dice pero como hiciste para tenerla asÃ­ mas grande? jejeje yo le digo tu cosita rica hace que me cresca poco a poco jeje', 1),
(669, 528, '2011-05-03', 'Antes mi pene media 14 cm ahora mide 18 cm esto funciona muy bien gracias a Dios y a peneperfecto mi pene se ve mucho mas grande y va en aumento', 1),
(670, 529, '2011-05-04', 'Hola seÃ±ores de pene perfecto agradezco su efectivo manual de verdad ustedes hacen una buena labor al ayudar a los que si necesitamos unos centÃ­metros extras de verga para poder ser felices me siente muy mal antes pero ahora que compre y realizo los ejercicios me siento como el mejor del mundo y muy orgulloso con lo que tengo he aumentado 3.6 centÃ­metros mil gracias los quiero', 1),
(671, 530, '2011-05-07', 'Inicialmente me suscribÃ­ atraÃ­do por las tÃ©cnicas de alargamiento del pene, pero termine principalmente sorprendido por los ejercicios para mejorar las erecciones, es increÃ­ble nunca pensÃ© que podÃ­a mejorar mi capacidad de erecciÃ³n de esta manera tambiÃ©n agrande mi pene 3 centÃ­metros mas, ahora mide 19.5 cm x 14.2 cm.', 1),
(672, 531, '2011-05-07', 'Hola a todos, llevo 2 semanas realizando los ejercicios propuestos en su manual, hasta el momento gane 1.6 CM de largo! estas tÃ©cnicas realmente funcionan, yo tenÃ­a bastante desconfianza sobre el tema y estaba un tanto resignado con mi tamaÃ±o, pero en solo 15 dÃ­as ya puedo asegurarles que estaba equivocado', 1),
(673, 532, '2011-05-09', 'Acaba de obtener la clave de acceso ustedes son muy cumplidos y serios y eso me gusto mucho, ahora si boy agrandar mi reproductor, graciass si alguien esta mas avanzado que me deje un comentario bye', 1),
(674, 533, '2011-05-11', 'En realidad para mÃ­ sÃ­ tiene importancia el tamaÃ±o del pene. Pienso que es importante por que: 1. Durante el coito la mujer puede distinguir o diferenciar el tamaÃ±o del pene lo cual causarÃ¡ mayor placer para ella. 2. Pienso que un pene grande tiene mayor Ã¡rea de contacto con el Ã³rgano sexual de la mujer. Me parece lÃ³gico.', 1),
(675, 534, '2011-05-12', 'Bueno, no me importaba el tamaÃ±o de mi pene hasta que me di cuenta que a la mayorÃ­a de las mujeres les importaba, creo que es un afrodisiaco para las mujeres un pene grande, al verlo, creen que van a tener un sexo espectacular y es mÃ¡s fÃ¡cil que tengan una relaciÃ³n sexual mÃ¡s placentera y se exciten mas rapidamente', 1),
(676, 535, '2011-05-14', 'Estoy por aqui de casualidad y decidi compar este tratamiento interesante y que ovbiamente por lo visto es muy efectivo, pero dejare mis comentario al respecto..Â¿A quÃ© mujer no le gusta ver un pene grande y grueso? Ninguna mujer puede decir que no para ellas es excitante ver un miembro de gran tamaÃ±o. Al igual que los hombres, los cuales gozan con senos de gran tamaÃ±o, a las mujeres les excita un miembro grande, por que varias chimas me lo dijeron y por que es logico por eso desde que compre este manual mi pene aumento 3 centimetros y quiero llegar a mas las vaginas se adatan al tamaÃ±o del pene y si ellas se exitan mucho puede entrar un pene enorme asi disfrutara mas la pareja, saludos a todos los practicantes', 1),
(677, 536, '2011-05-16', 'El producto es buenÃ­simo aveces hay que destacar las cosas buenas y que funcionan bien como este manual de agrandamiento, particularmente considero que el tamaÃ±o de mi pene sÃ­ influye en mi desempeÃ±o sexual porque mi pareja me hace ver que le agrada, le gusta que le llegue mas allÃ¡, inclusive durante el coito me dice que le gusta mi pene Ãºltimamente pero eso es por que le agregue unos centÃ­metros extra por lo cual esta un poco mas grande que antes, Esto incrementa el placer durante la relaciÃ³n sexual \r\n\r\nAnimo no se queden con un pene de pocas medidas, recomiendo esta web, buenisima!!', 1),
(678, 537, '2011-05-18', 'HOLA HE COMPRADO ESTE MANUAL+ VIDEO Y LES PUEDO DECIR QUE SI FUNCIONAN EN MI CASO ME HAN DADO RESULTADOS SATISFACTORIOS ME SIENTO CONTENTO POR LO QUE HE ADQUIRIDO', 1),
(679, 542, '2011-05-19', 'Hola por eso esta pagina coloco este espacio de comentario por que ellos saben que su producto es garantizado y a todos los que lo adquieren le da resultados con esto nos demuestra que esta pagina es real, yo soy un cliente de ellos y no dejo de agradecerles por que no hay nada mejor que comprar algo que de verdad funcione como este manual + videos que es de buena calidad y a un buen precio lo recomiendo 100% yo seguire mi rutina de ejercicios :)', 1),
(680, 544, '2011-05-19', 'El tamaÃ±o del pene promedio es de 12 a 15 cm. tenmerlo de 18cm seria una nueva experiencia en la cama,', 1),
(681, 539, '2011-05-21', 'saludos\r\n\r\nGracias esta genial es una maravilla', 1),
(682, 545, '2011-05-23', 'Hola a todos, es la primera vez que entro en el foro y he estado echando un vistazo antes de escribir, me parece que nadie ha tenido ningÃºn tipo de problema en estos ejercicios, pienso que son muy seguros tambiÃ©n realizo los ejercicios desde el mes pasado me interesa mucho controlar mi eyaculaciÃ³n y engrosarlo', 1),
(683, 546, '2011-05-23', 'Hola amigos yo hace 3 semanas decidÃ­ comprar este manual + video y el servicio es muy bueno he tenido buenos resultados hasta el momento mi pene esta mÃ¡s fuerte se ve muy venoso he visto una diferencia sorprendente es como ejercitar un brazo delgado y liego esta llego de mÃºsculos espero llegar a 3cm de largo en mi primer mes pero el grueso veo que crece mas rÃ¡pido que el largo serÃ¡ por la tecnica 2 gracias de corazÃ³n!', 1),
(684, 547, '2011-05-26', 'la cuestiÃ³n es que este mÃ©todo agranda la corpora carvenosa ya lo investigue y si es verdad, eso se logra mediante estos ejercicios y lo que haces es acumular o retener mas sangre en el interior de la corpora haciendo que se agrande muscularmente, ya esto esta probado medicamente incluso es recomendado por mÃ©dicos para la buena salud del pene, espero que mi info les sirva de algo, mi pene estÃ¡ creciendo rÃ¡pidamente con este mÃ©todo :)', 1),
(685, 548, '2011-05-27', 'Interesante saber la informaciÃ³n de esta web, yo tengo un pene algo pequeÃ±o y nunca pensÃ© que se podÃ­a agrandar de esta manera solo me queda decir muchas gracias por su producto de buena calidad!', 1),
(686, 549, '2011-05-30', 'Hola, bueno apenas llevo 3 semanas y miren lo que he ganado 2.1 cm de largo y 0.9 cm de grosor, eso es mucho resultado para apena 3 semanas ya puedo notar mi pene mÃ¡s grande cuando lo comparo con un objeto que tengo en el baÃ±o, mi rutina es simple lo hago antes de acostarme 10 minutos con eso voy avanzando a paso firme mi meta es de ganar 5 cm para llegar a 21cm saludos y tambiÃ©n quiero saber los resultados y experiencias de otros usuarios', 1),
(687, 550, '2011-05-31', 'Felicitaciones por esos buenos resultados, vas a llegar muy pronto a tu meta al igual que yo mi meta es de 22cm, te comentare como van mis resultados\r\n\r\nAntes: 14.7 cm de largo x 11.6 de grosor, mi pene era pequeÃ±o y delgadoâ€¦despuÃ©s de 2 meses ahora mi pene lo tengo de 19.4 x 14.3 ni siquiera lo reconozco es increÃ­ble la diferencia me sorprende el grosor y la proporciÃ³n es excelente, estoy emocionado ahora tengo una sÃºper polla, otra cosita la cabeza de mi pene se agrando aumento bastante, me imagino lo feliz q te sientes al saber que estas tÃ©cnicas funcionan de verdad por mi parte estoy agradecido con este tratamiento, mi meta es 22 cm estoy cerquita unas semanas mas y listo, mi vida cambio totalmente me siento poderoso mi autoestima esta por las nubes!! Mil gracias a los seÃ±ores de peneperfecto y suerte a todos.', 1),
(688, 551, '2012-06-01', 'Excelente informaciÃ³n para nosotros los que tenemos el paquete pequeÃ±Ã­n es muy interesante me gusta esto sin duda es lo mejor que he encontrado en internet', 1),
(689, 552, '2012-06-03', 'Infinitas gracias!\r\n\r\nMis experiencias sexuales ahora son increÃ­bles, y altamente placenteras tanto para mÃ­ como para mi pareja realmente me siento como si fuera un nuevo hombre.\r\n\r\nMedidas inÃ­ciales 15.6 x 11.1 CM\r\nDemedias actuales 19.7 x 14.2 CM\r\n\r\nEstoy feliz, gracias de corazon!!', 1),
(690, 553, '2012-06-03', 'buenas, hace mas de 1 aÃ±o buscaba un mÃ©todo que de verdad de agrandara por lo menos 3 cm o 4 cm y probÃ© con varios mÃ©todos entre ellos unos ejercicios pero que no funcionaron, pero tengo el honor de decirles que hace 1 mes encontrÃ© esta web y decidÃ­ comprar este manual para probar como Ãºltima opciÃ³n y gracias a Dios por fin estoy logrando mis objetivos he aumentado 2.3 cm de largo y me ha llenado de emociÃ³n saber que muy pronto lograre mis 4 centÃ­metros gracias a este gran programa me siento feliz, MIL GRACIAS', 1),
(691, 554, '2012-06-04', 'Hola soy de panama tengo 1 mes de hacer estas tÃ©cnicas y aumente 2.4 centÃ­metros de largo y 1.3 cm de ancho nunca pensÃ© que iba a funcionar, yo pensÃ© que mi pene no se iba aumentar con esto, pero la realidad si se aumento y bastante, voy aumentando cada semana un poco mas, estoy muy contento porque mi pene va para delante, saludos.', 1),
(692, 555, '2012-06-06', 'muy bueno excelente lo mejor lo recomiendo a todos los que obtan por este mÃ©todo para agrandar sus miembros, lo compre hace 2 semana y es verdad se ven los resultados aun estoy sorprendido pense que no iba a obtener resultados en tan poco tiempo mil gracias por darme la oportunidad de probar su producto, asÃ­ como me lo recomendaron tambiÃ©n lo recomiendo por aqui gracias y felicitaciones a todos los usuarios por estar en el lugar perfecto!', 1),
(693, 556, '2012-06-07', 'Llevo dos semanas de ejercicios Y..Ahora lo creo!!Estoy creciendo. Con tan solo verla, se nota un poco mÃ¡s larga, pero sin lugar a dudas, bastante mÃ¡s gruesa!!Es increÃ­ble que funcione y se los recomiendo a todos aquellos que necesiten de este mÃ©todo novedoso y efectivo!!', 1),
(694, 557, '2012-06-07', 'los felicito por que a simple vista puedo notar resultados, solo queria probar si era verdad que funcionaba pero ya me e convencido en pocos dÃ­as he visto cambios notorios y veo que mi pene se va poner grande muy pronto voy muy bien, gracias', 1),
(695, 558, '2012-06-10', 'Hola, DespuÃ©s de trabajar con su programa soy un creyente total, les voy a contar mi historia. ComencÃ© con 14cm de largo y despuÃ©s de 5 semanas con este tratamiento ahora estoy en 17 cm. TodavÃ­a creo que tengo potencial de crecimiento. No solamente ha crecido sino que tambiÃ©n estÃ¡ mÃ¡s duro, fÃ­jense que antes de comenzar con el programa tenÃ­a problemas incluso para tener erecciones, ahora la tengo dura como una roca y puedo controlar mis eyaculaciones y hacer el amor de manera mÃ¡s prolongadas y placentera, no puedo expresar con palabras lo que siento. Las palabras no pueden expresar mi alegrÃ­a. Un millÃ³n de gracias al equipo de pene perfecto mi vida sexual ahora es mucho mejor!', 1),
(696, 559, '2012-06-12', 'q bien amigo por esos resultados, pienso q est es el Ãºnico programa q si funciona, hace 7 meses probÃ© con otro q decÃ­a agrandar el pene y nunca logre aumentar un solo milÃ­metro, en cambio con peneperfecto agrande muchos centÃ­metros lo cual es una maravilla sorprendente', 1),
(697, 560, '2012-06-15', 'este es el mejor tratamiento del mundo!! yo sabia que existia un tratamiento que funcionara de verdad, busque un tratamiento asÃ­ durante un gran tiempo y sinceramente este es el Ãºnico que me funciona, ahora mi pene es mas grueso y largo logre enderezarlo se ve muy potente mi novia esta feliz le encanta', 1),
(698, 561, '2012-06-17', 'Hola a todos los usuarios, soy nuevo en este programa llevo 3 semanas pero en este pequeÃ±o tiempo alargue 1.8 centÃ­metros, casi 2 centÃ­metros uff eso es increÃ­ble, las venas de mi pene se pusieron mas gruesas y la cabeza del pene se me puso un poco mas grande, dentro de 2 meses les informare nuevos datos de mis resultados, gracias y saludos.', 1),
(699, 557, '2012-06-19', 'lo mejor de todos los tiempo mi pene creciÃ³ 6 centÃ­metros ahora la tengo muy grande y fuerte las mujeres quieren todas conmigo me lo merezco gracias', 1),
(700, 562, '2012-06-19', 'Buenos dÃ­as hasta el momento aumente 4.9 centÃ­metros en 2 meses me siento contento esto es lo que un hombre necesita para ser feliz voy a seguir aumentÃ¡ndomelo mi meta es llegar a 22 cm de largo x 17 cm de ancho, estoy muy agradecido con este programa super genial', 1),
(701, 564, '2012-06-22', 'excelente tratamiento lo recomiendo con toda seguridad, los resultados son sorprendentes, gracias', 1),
(702, 565, '2012-06-25', 'COMPRE HACE 1 MES Y MEDIO HE GANADO 3.2 CENTÃMETROS DE LARGO X 1.6 CENTÃMETROS DE ANCHO SOY MUY DEDICADO A ESTE MÃ‰TODO Y SOLO PIENSO EN LLEGAR A MI META DE 21 CENTÃMETROS GRACIAS A PENEPERFECTO', 1),
(703, 566, '2012-06-26', 'Buenas, soy usuario desde marzo agradezco a todo el equipo de peneperfecto por excelente tratamiento, harÃ© un pequeÃ±o resumen de mi experiencia hasta el momento..mi pene aumento 4 cm aun sigo las tÃ©cnicas hasta llegar aumentar 6 cm mas, lo que mas deseaba era controlar las eyaculaciones y ahora las controlo perfectamente de nuevo gracia', 1),
(704, 567, '2012-06-30', 'Dios mio este tratamiento es simplemente excelente, esto me hace muy feliz y a mi pareja tambiÃ©n, creo que es el Ãºnico mÃ©todo natural existente que funciona de verdad', 1),
(705, 568, '2012-07-03', 'Gracias,les agradezco de corazÃ³n por la labor que hacen ayudando a los que de verdad necesitamos unos centÃ­metros de mÃ¡s para lograr el mayor placer y felicidad :)', 1),
(706, 569, '2012-07-04', 'por fin encontrÃ© una pagina que funcionara de verdad, me estaba frustrando el no poder agrandar mi pene gracias a pene perfecto mi pene esta aumentando de tamaÃ±o sinceramente estoy muy agradecido con este programa de buena calidad, \r\n\r\nMis medidas antes eran de 14.7 cm de largo x 11.2 de ancho\r\ndespuÃ©s de aproximadamente par de meses son de 19.1 de largo x 14.5 de ancho mi pene ahora es fuerte grande y potente \r\n\r\nUn millÃ³n de gracias nunca pensÃ© que esto iba a funcionar es simplemente perfecto!', 1),
(707, 570, '2012-07-07', 'Tengan ustedes muy buenas tardes seÃ±ores usuarios, voy a hablarle de mis resultados con este excelente tratamiento, mis medidas inÃ­ciales antes de empezar estas tÃ©cnicas de agrandamiento eran de 11.4 x 15.7 cm en erecciÃ³n despuÃ©s de unas buenas semanas voy asÃ­ 13.8 x 18.2 cm en erecciÃ³n, aun no puedo creer el aumento que logre, es sorprendente, espero comentarios al respecto, bye.', 1),
(708, 571, '2012-07-09', 'Hola, buenas noches personalmente estoy satisfecho y agradecido por la calidad del contenido de este manual y el video, al principio pensÃ© que no me iba a funcionar pero despuÃ©s de pocas semanas no puede aguatar la emociÃ³n y no lo podÃ­a creer que mi pene se halla puesto tremendamente grande, aumente 3cm, confiÃ© mucho en esto y ahora veo grandes resultados, un millÃ³n de gracias!', 1),
(709, 572, '2012-07-11', 'Me encantan estos nuevas tÃ©cnicas son muy novedosas y efectivas, yo probÃ© con unos ejercicios de Internet y nunca me dieron resultados, gracias a Dios encontrÃ© esta web y mi pene aumenta de tamaÃ±o con el pasar de los dÃ­as, mil gracias!', 1),
(710, 573, '2012-07-11', 'Saludos, este programa es la maravilla funciona muy bien mis resultados cada vez son mayores hasta el momento logre aumentar 3 centÃ­metros de longitud y 1.7 centÃ­metros de grosor lo cual es muy notorio mi esposa siente la diferencia y le gusta mucho mas, eso me hace feliz y se siente mucho mejor', 1),
(711, 574, '2012-07-14', 'buenos dÃ­as, esto es genial me funciona bien lo recomiendo es excelente, muchas gracias peneperfecto', 1),
(712, 575, '2012-07-16', 'Hola mis resultados por el momentos son de un aumento de 2.4 centÃ­metros de largo por 1,6 centimetros de ancho, hago 10 minutos de rutina diaria me funciona perfectamente es impresionante cuando ves que el pene es mas grande que antes y aumenta con el pasar de los dias, mis medidas son las siguientes:\r\n\r\nAntes de empezar el programa mi pene media: 15,8 cm de largo x 12,3 cm de ancho.\r\nDespuÃ©s de 1 mes ahora mi pene mide 18,2 cm de largo x 13,9 cm de ancho.\r\nmi meta es llegar a 21 cm de largo x 16 cm de ancho estoy seguro que llegare en poco tiempo :)\r\n\r\nDe nuevo gracias por su programa es el Ãºnico programa que me funciono, ustedes son los mejores!', 1),
(713, 576, '2012-07-17', 'Este programa me funciona de maravillas, estoy muy agradecido saludos desde Peru!', 1),
(714, 577, '2012-07-19', 'buenas, Comentare mis resultados y experiencias con este gran programa excelente, lo compre hace aproximadamente 2 meses alargue mi pene 4.6 cm y lo engrose 2.4 centÃ­metros mi pene ahora se ve mas grande fuerte y saludable, y sobre todo mucho mas atractivo para ellas, estoy sÃºper contento se siente muy bien tener un pene mÃ¡s grande que antes, esto es satisfactorio e increÃ­ble, amigos de pene perfecto gracias que Dios los bendiga,', 1),
(715, 578, '2012-07-22', 'hola, no tengo palabras para describir este excelente programa, yo probÃ© con varios programas en Internet y ninguno me funcionaba gracias a Dios encontrÃ© esta web y pensÃ© en hacer prueba con este programa, por fin gracias a Dios y a peneperfecto me esta funcionando muy bien, estoy sorprendido de mis resultado jamas me imagine que mi pene se iba a poner asÃ­ de grueso y largo en tan poco tiempo, casi 4 centÃ­metros en dos meses, esto es lo mÃ¡ximo se los agradecerÃ© toda la vida, recomiendo este programa con toda confianza, es el Ãºnico que realmente funciona, saludos.', 1),
(716, 579, '2012-07-25', 'No puedo parar de agradecerles mil gracias, mi miembro ha crecido de 13.5 CM a casi 18 CM en pocos meses, mejor aÃºn como resultado directo mi vida amorosa y autoconfianza han mejorado radicalmente. A todos los tÃ­os ahÃ­ fuera que lo estÃ©n considerando, HACERLO, vale la pena Sinceramente saludos.', 1),
(717, 580, '2012-07-27', 'buenos dÃ­as, compre el material hace 15 dÃ­as y es verdad, note los primeros resultados en dos semanas es increÃ­ble pensÃ© que verÃ­a resultados en un mes pero los vi en dos semanas esto si funciona aumente un centÃ­metro de largo en ese tiempo, para mi es increÃ­ble cuando llegue a un mes les escribirÃ© mis resultados, saludos a todos los usuarios y gracias a peneperfecto pot excelente programa.', 1),
(718, 581, '2012-07-29', 'Excelente tratamiento, mis resultados son fantÃ¡sticos esto es lo mejor que existe para agrandar el pene lo recomiendo 100% saludos desde Chile..', 1),
(719, 582, '2012-07-31', 'Hola seÃ±ores de pene perfecto agradezco su efectivo manual de verdad ustedes hacen una buena labor al ayudar a los que si necesitamos unos centÃ­metros extras de verga para poder ser felices y hacer feliz a nuestra pareja, me sentÃ­a muy mal antes pero ahora que compre y realizo los ejercicios me siento como el mejor del mundo y muy orgulloso con lo que tengo he aumentado 3.6 centÃ­metros mil gracias los quiero', 1),
(720, 583, '2012-08-02', 'Buen dÃ­a, llevo 4 semanas de realizar estas tÃ©cnicas he ganado 2.6 cm de largo x 1.4 cm de grosor, buen resultado en 4 semanas veo mi pene mÃ¡s grande cuando lo comparo con un objeto que tengo en el baÃ±o, mi rutina es simple lo hago antes de acostarme, con eso voy avanzando a paso firme mi meta es de ganar 6 cm para llegar a 22cm gracias peneperfecto son unos genios', 1),
(721, 584, '2012-08-04', 'Encantado de saludarles, soy Adolfo. DÃ©jenme decirles que su programa es una maravilla, en menos de un mes aumente mi pene en tres centÃ­metro, el video me ha ayudado a comprender mejor cÃ³mo realizar el programa de ejercicios. Antes media 17 ahora mide unos 20.5 centimetros. \r\n\r\nMuchas gracias por su exitoso programa y gracias por su atenciÃ³n.', 1),
(722, 585, '2012-08-04', 'Hola soy de Ecuador tengo 1 mes de hacer estas tÃ©cnicas y aumente 2.4 centÃ­metros de largo y 1.3 centÃ­metros de grosor estas medidas son reales e increÃ­bles, fui muy preciso en la mediciÃ³n inicial del pene los resultados son maravillosos, estoy muy contento porque mi pene va para delante, Gracia!', 1),
(723, 586, '2012-08-06', 'Excelente mÃ©todo muy bueno, mi pene se agrando satisfactoriamente por lo cual estoy muy feliz de encontrar esta web, es gratificante obtener buenos resultados con este programa, pienso que aveces lo bueno siempre se esconde en algÃºn lugar y por pura casualidad encontrÃ© esta web y ahora mi vida ha cambiado es increÃ­ble como cambia uno en varios aspectos, el autoestima se eleva y el placer aumenta lo mejor de todo es que mi pareja disfruta mucho mi nuevo tamaÃ±o de pene y eso para mi es placer total, mil gracias que Dios los bendiga!', 1),
(724, 587, '2012-08-07', 'esto es fantÃ¡stico me funciona de maravilla! lo recomiendo es lo mejor del Internet excelente mÃ©todo, lo que mas admiro de este programa es que si funciona de verdad, mi pene aumento casi 4 centimetros y sigue aumentando es genial, gracias amigos.', 1),
(725, 588, '2012-08-09', 'saludos desde chile, les cuesto que mis resultados son fenomenales, mi pene aumento full mis resultados hasta la fecha son de 5 centÃ­metros de aumento en longitud por 2.6 centÃ­metros hasta la fecha, mi rutina es muy aplicada segÃºn las indicaciones y recomendaciones de peneperfecto, que tengan todos un buen dÃ­a bye.', 1),
(726, 589, '2012-08-11', 'Hola a todos nunca pensÃ© que esto me iba a funcionar estoy super sorprendido ahora les voy a dar una gratificaciÃ³n a los seÃ±ores de pene perfecto asi como se los prometÃ­ yo nunca pensÃ© que estos ejercicios me iban a dar resultados en solo 2 semanas WOW estoy impresionado con mis resultados AMIGOS ESTO SI FUNCIONA VAMOS ADELANTE HACER ESTOS EJERCICIOS!!!!!GRACIAS.', 1),
(727, 592, '2012-08-14', 'buenas noches, cinceramente siempre tenia la sensaciÃ³n que este programa si me funcionaria por lo que es muy diferente a los demÃ¡s y tiene mucha credibilidad eso me entusiasmo la inversiÃ³n valiÃ³ la pena, ahora mi pene es mas largo y grueso que antes estoy contento feliz y dichoso de probar este mÃ©todo es fenomenal\r\n\r\nAntes 16.2x12.6\r\nAhora 21.7x16.8\r\n\r\npeneperfecto es excelente y millones de gracias me hicieron feliz :)', 1),
(728, 593, '2012-08-17', 'muy buen mÃ©todo, sinceramente hay que destacar las cosas buenas este mÃ©todo es excelente, mis erecciones son mucho mas prolongadas mejore mi problema de eyaculacion precoz y mi pene crece cada dÃ­a mas, a esta web le pongo un #10', 1),
(729, 594, '2012-08-19', 'Bueno, no me importaba el tamaÃ±o de mi pene hasta que me di cuenta que casi al 95% de las mujeres les importaba, pienso que es un afrodisiaco para las mujeres un pene grande, al verlo, creen que van a tener un sexo espectacular, se excitan con facilidad y es mÃ¡s fÃ¡cil que tengan una relaciÃ³n sexual mÃ¡s placentera, desde que utilizo este sistema de peneperfecto mi pene ha crecio 4.7 centÃ­metros, y la verdad que mi esposa con solo verlo y tocarlo se exita mucho mas rÃ¡pido y tenemos relaciones mucho mas placenteras mutuamente, estoy agradecido gracias!', 1),
(730, 595, '2012-08-21', 'Encantado de saludarles, soy Jhon. Quiero decirles que su programa es una maravilla, en menos de un mes e aumentado mi pene en tres centÃ­metro, y que el video me han ayudado a comprender mejor cÃ³mo realizar el programa de ejercicios. Antes media 17CM ahora mide unos 20.5 centÃ­metros. Muchas gracias por su atenciÃ³n.', 1),
(731, 596, '2012-08-21', 'Quiero animar a todos los que por una causa u otra desean o necesitan aumentar unos centÃ­metros de mÃ¡s a su pene, a que sigan el mÃ©todo de Peneperfecto.com, a mÃ­ al igual que a todos nos funciona, en mi caso empecÃ© con 16 cm y ahora despuÃ©s de 1 y medio tengo 21,8 cm. eso sÃ­, la constancia y continuidad en el seguimiento del programa, tal y como mencionan en el manual, ha sido la que me ha dado esta satisfacciÃ³n....saludos al equipo de helpdesk por su buena atencion', 1),
(732, 597, '2012-08-25', 'Hola seÃ±ores de pene perfecto agradezco su efectivo manual de verdad ustedes hacen una buena labor al ayudar a los que si necesitamos unos centÃ­metros extras de verga para poder ser felices, antes me siente muy mal pero ahora que compre y realizo los ejercicios me siento como el mejor del mundo y muy orgulloso con lo que tengo he aumentado 3.8 centÃ­metros mil gracias los quiero', 1),
(733, 598, '2012-08-28', 'Este programa de agrandamiento peneano es Perfecto! me encanta funciona de maravillas :)', 1),
(734, 599, '2012-08-30', 'Buenas mi meta es de llegar a 22cm, asi van mis resultados...\r\n\r\nAntes: 14.7 cm de largo x 11.6 de grosor, mi pene era pequeÃ±o y delgadoâ€¦despuÃ©s de 2 meses y 8 dÃ­as ahora mi pene lo tengo de 19.4 x 14.3 ni siquiera lo reconozco es increÃ­ble la diferencia me sorprende el grosor y la proporciÃ³n es excelente, estoy emocionado por que estos si son los ejercicios correctos, ahora tengo una sÃºper polla, otra cosita la cabeza de mi pene se agrando aumento bastante, estoy agradecido con este tratamiento mi meta es 22 cm estoy cerquita unas semanas mas y listo, mi vida cambio totalmente me siento poderoso mi autoestima esta por las nubes!! Mil gracias a los seÃ±ores de peneperfecto y suerte a todos.', 1),
(735, 600, '2012-09-01', 'Buen dÃ­a, primero que todo gracias por darme la oportunidad de probar su programa que realmente es muy perfecto, mi pene aumento casi 4 centÃ­metros y controlo perfectamente la eyaculacion, ahora mis relaciones son mucho mas placenteras y divertidas.', 1),
(736, 601, '2012-09-04', 'interesante saber la informaciÃ³n de esta web, yo tenia un pene algo pequeÃ±o y nunca pensÃ© que se podÃ­a agrandar de esta manera solo me queda decir muchas gracias por su producto de buena calidad y sobre todo mucha efectividad, se lo recomiendo a todos!', 1),
(737, 602, '2012-09-04', 'Buenas, muy bueno el servicio muy serios y rÃ¡pidos excelente ahora solo me queda comenzar mi rutina pronto estarÃ© hablÃ¡ndole de mis resultados saludos y gracias a los amigos de pene perfecto por el excelente servicio', 1),
(738, 602, '2012-09-07', 'por fin gracias a ustedes estoy logrando agrandar mi pene con estos ejercicios, me funciona perfectamente aumente 4.3 centÃ­metros mi pene es ahora mucho mas grande y fuerte a mi mujer le encanta y quiere hacerme el amor todo el tiempo, estoy feliz un millÃ³n de gracias!!', 1),
(739, 604, '2012-09-08', 'Saludos a todos,les hablare un poco de mis resultados con este buen programa peneano, llevo 3 semanas realizando los ejercicios obteniendo hasta ahora 2.4 cm de largo y 1.1 cm de grosor, eso es mucho resultado para apena 3 semanas ya puedo notar mi pene mÃ¡s grande cuando lo comparo con el recipiente del shampoo en el baÃ±o, mi rutina es simple lo hago antes de acostarme con eso voy avanzando a paso firme mi meta es de ganar 5 cm para llegar a 21cm me gustarÃ­a saber los resultados y experiencias de otros usuarios bye.', 1),
(740, 605, '2012-09-11', 'EXCELENTE TRATAMIENTO ES LO MEJOR DEL INTERNET, MI MIEMBRO AUMENTO 4 CENTÃMETROS EN DOS MESES, ESTO ES GRATIFICANTE Y EMOCIONANTE Y SEGUIRÃ‰ AUMENTÃNDOLO UN POCO MAS, GRACIAS!', 1),
(741, 606, '2012-09-14', 'Acaba de obtener la clave de acceso ustedes son muy cumplidos y serios y eso me gusto mucho, ahora si boy agrandar mi reproductor, graciass si alguien esta mas avanzado que me deje un comentario bye.', 1),
(742, 607, '2012-09-15', 'gracias por excelente manual, la verdad es que mi pene si esta aumentando, llevo 3 semanas el aumento es notorio casi 2 centÃ­metros gracias a Dios encontrÃ© esta web.', 1),
(743, 608, '2012-09-18', 'buenos dias, tengo dos semanas de practicar estos ejercicios y mis resultados son positivos, esto es lo que yo esperaba valio la pena mil gracias', 1),
(744, 609, '2012-09-20', 'Hola, llevo 3 semanas miren lo que he ganado 2.1 cm de largo y 0.9 cm de grosor, eso es mucho resultado para apena 3 semanas ya puedo notar mi pene mÃ¡s grande cuando lo comparo con un objeto que tengo en el baÃ±o, mi rutina es simple lo hago antes de acostarme 10 minutos con eso voy avanzando a paso firme mi meta es de ganar 5 cm para llegar a 21cm saludos y tambiÃ©n quiero saber los resultados y experiencias de otros usuarios', 1),
(745, 610, '2012-09-20', 'Realmente Funciona muy Bien, mil gracias!', 1),
(746, 611, '2012-09-26', 'Hi, animo a todos los que, por una causa u otra desean o necesitan aumentar unos centÃ­metros de mÃ¡s a su pene, a que sigan el mÃ©todo de Peneperfecto, a mÃ­ al igual que a todos nos ha funcionado, en mi caso empecÃ© con 16 cm y ahora despuÃ©s de 1 y medio tengo 20 cm. eso sÃ­, la constancia y continuidad en el seguimiento del programa, tal y como mencionan en el manual, ha sido la que me ha dado esta satisfacciÃ³n....saludos al equipo de helpdesk por su buena atencion.', 1),
(747, 613, '2012-09-29', 'ESTOY SORPRENDIDO CON MIS RESULTADOS, NO LO PUEDO CREER ESTE PROGRAMA ME FUNCIONA PERFECTAMENTE ES INCREÃBLE ANTES MI PENE MEDIA APENAS UNOS 16.3 CM Y AHORA MIDE 20.7 CM ESTOY SORPRENDIDO CON ESTAS TECNICAS EXITOSAS, MIL GRACIAS!!', 1),
(748, 615, '2012-10-01', 'Buenas Noches, me encanta destacar las cosas que funcionan, y para ser sincero, de tantos mÃ©todos que he probado este es el Ãºnico que realmente me entrego resultados reales, creÃ­ que era mentira al principio pero despuÃ©s de 2 semanas me sorprendiÃ³ los resultados casi 1 centÃ­metro aumente en dos semanas, actualmente llevo 3 centÃ­metros aumentados, esto es genial, muchas gracias.', 1),
(749, 616, '2012-10-04', 'HOLA, LOS FELICITO QUE BUEN PRODUCTO ESTAS TÃ‰CNICAS SON LA MARAVILLA FUNCIONAN PERFECTAMENTE, UN MILLÃ“N DE GRACIAS.', 1),
(750, 617, '2012-10-05', 'EXCELENTE PROGRAMA, PODRÃA DECIR QUE ES LO MEJOR QUE HE COMPRADO EN INTERNET BUEN SERVICIO, LO IMPRESIONANTE ES QUE LOS RESULTADOS QUE OBTUVE SON GRANDES CASI 4 CENTÃMETROS EN UN MES, ME SIENTO MUY AGRADABLE CON ESTE PROGRAMA! GRACIAS', 1),
(751, 618, '2012-10-08', 'Hola estoy de acuerdo, a mi y a todos los que compran este programa le funciona a la perfecciÃ³n, en mi caso mis resultados hasta el momento durante un mes de practica que llevo son los siguientes:\r\n\r\nAntes: 16.4 X 12.5\r\nAhora: 18.6 X 13.3\r\n\r\nsegÃºn los resultados cada mes mi aumento sera de 2.2 centÃ­metros, matemÃ¡ticamente en 2 meses mi pene sera de 23 CM de largo y mas grueso, lo importante es que el programa funciona de verdad, saludos.', 1),
(752, 619, '2012-10-11', 'ESTO ES EXCELENTE, PERFECTO MIS RESULTADOS SON CADA DÃA MAS GRANDES, MI PENE AUMENTA Y AUMENTA SEÃ‘ORES DE PENEPERFECTO LES AGRADEZCO DE CORAZÃ“N POR AYUDARME A MI Y A MI PAREJA A SER FELIZ..HE LOGRADO AUMENTAR 3 CENTÃMETROS ESTO ES UNA MARAVILLA!!', 1),
(753, 620, '2012-10-14', 'Hola, compre este novedoso programa hace 2 meses y mis resultados son una maravilla, alargue 4.6 centÃ­metros mi pene, esto es increÃ­ble estoy feliz con mi nuevo pene y un millÃ³n de gracias a peneperfecto!! bye.', 1),
(754, 622, '2012-10-17', 'Hola saludos a todos, gracias por el programa, me funciona bien estoy bastante agradecido mi vida cambio ahora soy mucho mas feliz', 1),
(755, 623, '2012-10-21', 'Hola desde ecuador un saludo, sinceramente este programa de agrandamiento me funciona muy bien, mi pene aumenta cada semana mas y mas', 1),
(756, 624, '2012-10-22', 'Buenas tardes, definitivamente pienso que gracias a este programa excelente, mi vida cambio para bien, antes practicaba los ejercicios de penesalud pero desafortunadamente era un engaÃ±o y perdÃ­ mi tiempo en esa web falsa, garcÃ­as a Dios peneperfecto si me funciono y ahora me siento orgulloso de mi nuevo pene, recomiendo este programa 100%', 1),
(757, 625, '2012-10-25', 'Desde Chile muchas gracias, me esta funcionando muy bien es lo mÃ¡ximo gracias.', 1),
(758, 626, '2012-10-25', 'Este es el mejor Tratamiento del mundo, realmente mis resultados son fantanticos amigos logre aumentar 4.2 centimetros gracias a Dios y a peneperfecto gracias', 1),
(759, 627, '2012-10-27', 'Hola, la verdad tuve muchos intentos de agrandar mi pene primero compre un programa llamado penesalud y jamas me funciono perdi mi tiempo y dinero, despues compre ese aparato llamado Jes Extender, eso fue lo peor muy incomodo notable y no me funciono fue un desastre perdi tiempo y dinero en eso, en mi lucha ya estaba deseccionado hasta que por casualidad me tropecÃ© con esta pagina y quise hacer mi ultimo intento y gracias a Dios me esta funcionando perfectamente mi pene se alargo 3.4 CM y sigue aumentando, nunca imagine que en esta web estaba mi soluciÃ³n es increible, mi pene cada dia se ve mas grande y fuerte gracias a peneperfecto.com lo amo es lo maximo! Gracias.', 1),
(760, 628, '2012-10-29', 'buenas noches, Hace 1 mes adquiri este programa mis resultados pienso qque son buenos 3.2 cm de largo x 1.4 cm de ancho de ganancia, alguien mas a obtenido estos resultados o mas?', 1),
(761, 629, '2012-10-31', 'Hola, que bueno y agradable encontrar algo como esto y que sobretodo funciona bien, soy nuevo practicando este programa e logrado alargar 2.7 centimetros reales y seguire hasta mi meta de llegar a 6 cm y lograr tener el pene de 21 cm gracias', 1),
(762, 630, '2012-11-03', 'Saludos, Lo que me gusta de este programa es que mi pene se alargo de verdad yo pensaba que no me iba a funcionar y realmente mi pene se esta agrandando y por solo usd $99.00 es un regalo mil gracias', 1),
(763, 631, '2012-11-05', 'Hola Jose opino lo mismo, nunca imageni que fuera real pues en tiempos pasados probÃ© otros metodos que resultaron en fracaso, pienso que esta gente de peneperfecto logro los ejercicios correctos para generar verdaderos resultados, te felicito Julio, te comento que mis resultados tambien son increibles 2.3 cm aumente que te parece..', 1),
(764, 632, '2012-11-06', 'este mÃ©todo es Perfecto!! me funciona muy bien!!', 1),
(765, 633, '2012-11-06', 'Buenas noches a todos, espero que comenten mi experiencia con este excelente programa, aun sigo realizando los ejercicios y mis resultados desde que empece el 8 del mes pasado son los siguientes:\r\n\r\nAbril/8/2012 â–º 16.4 CM de Largo\r\nAbril/8/2012 â–º 12.9 CM de Ancho\r\n\r\nMayo/11/2012 â–º 18.6 CM de Largo\r\nMayo/11/2012 â–º 14.2 CM de Ancho\r\n\r\nEn un mes aumente 2.2 CM de Largo y 1.3 CM de Ancho esto es muy gratificante, en dos meses mas seria un aumento de 4.4 CM de largo + 18.6 actuales = 23 CM de largo es increible pero me esta funcionando muy bien, que opinan ustedes..', 1),
(766, 634, '2012-11-09', 'A mi tambiÃ©n me esta funcionando de maravillas, desde panamÃ¡ saludos a todos gracias.', 1),
(767, 635, '2012-11-10', 'Hola Saludos desde Argentina, Hasta el momento logre aumentar 3 centimetros lo cual es increible y satisfactorio, realmente si funciona bien, gracias.', 1),
(768, 636, '2012-11-14', 'Hola, llevo dos semanas de ejercicios Y..Ahora si creo, estoy creciendo con tan solo verla se nota un poco mÃ¡s larga, pero sin lugar a dudas bastante mÃ¡s gruesa es increÃ­ble que funcione y se lo recomiendo a todos aquellos que estÃ©n dudando este tratamiento esta buenisismo', 1),
(769, 637, '2012-11-15', 'Tengo que confesar que inicialmente dudÃ© mucho de comprar el manual de ejercicios, ya que no podÃ­a creer que hubiera algo que me ayudara con mi problema, ahora debo reconocer que es la mejor decisiÃ³n que he tomado en mi vida, los ejercicios son muy sencillos y sobretodo, efectivos.. el manual es excelente el video genial todo es perfecto. Muchas gracias!\r\n\r\nMis medidas anteriores fueron 16.3 x 11.2 un pene algo delgado\r\n\r\nAhora despuÃ©s de 7 semanas 21.7 x 14.5 \r\n', 1),
(770, 638, '2012-11-17', 'Hola a todos, llevo 2 semanas realizando los ejercicios propuestos en su manual, hasta em momento gane 1.2 CM de largo estas tÃ©cnicas realmente funcionan, yo tenÃ­a bastante desconfianza sobre el tema y estaba un tanto resignado con mi tamaÃ±o, pero en solo 15 dÃ­as ya puedo asegurarles que estaba equivocado un millÃ³n de gracias estoy feliz', 1),
(771, 639, '2012-11-20', 'Buenos dias, que buenos resultados Issac, los mios van asi..\r\n\r\nAntes: 14.7 cm de largo x 11.6 de grosor, mi pene era pequeÃ±o y delgadoâ€¦despuÃ©s de 2 meses ahora mi pene lo tengo de 19.4 x 14.3 ni siquiera lo reconozco es increÃ­ble la diferencia me sorprende el grosor y la proporciÃ³n es excelente, estoy emocionado ahora tengo una sÃºper polla, otra cosita la cabeza de mi pene se agrando aumento bastante, me imagino lo feliz q se sienten todos al saber que estas tÃ©cnicas funcionan de verdad, por mi parte estoy agradecido con este tratamiento, mi meta es 22 cm estoy cerquita unas semanas mas y listo, mi vida cambio totalmente me siento poderoso mi autoestima esta por las nubes!! Mil gracias a los seÃ±ores de peneperfecto y suerte a todos.', 1),
(772, 640, '2012-11-22', 'lo mejor de todos los tiempo mi pene creciÃ³ 6 centÃ­metros ahora la tengo muy grande las mujeres quieren todas conmigo me lo merezco gracias', 1),
(773, 642, '2012-11-28', 'hola, agradezco por buen producto me gusto la calidad del video se detalla todo los ejercicios perfectamente y el manual pdf es muy descriptivo estoy teniendo buenos resultados en poco tiempo, les pongo un 10 y se los recomiendo a todos los interesados saludos y gracias', 1),
(774, 641, '2012-11-30', 'Infinitas gracias!\r\n\r\nMis experiencias sexuales ahora son increÃ­bles, y altamente placenteras tanto para mÃ­ como para mi pareja realmente me siento muy feliz.\r\n\r\nMedidas inÃ­ciales 15.6 x 11.1 CM\r\n\r\nDemedias actuales 19.7 x 14.2 CM\r\n\r\nDe nuevo Mil Gracias.', 1),
(775, 643, '2012-12-04', 'Buenas, llevo 3 semanas y miren lo que he ganado 1.7 cm de largo y 0.7 cm de grosor, eso es mucho resultado para apena 3 semanas ya puedo notar mi pene mÃ¡s grande cuando lo comparo con un objeto que tengo en el baÃ±o, mi rutina es simple lo hago antes de acostarme 10 minutos con eso voy avanzando a paso firme mi meta es de ganar 5 cm para llegar a 21cm saludos y tambiÃ©n quiero saber los resultados y experiencias de otros usuarios', 1),
(776, 644, '2012-12-07', 'Felicitaciones Martin por esos buenos resultados, vas a llegar muy pronto a tu meta al igual que yo mi meta es de 22cm, te comentare como van mis resultados\r\n\r\nAntes: 14.7 cm de largo x 11.6 de grosor, mi pene era pequeÃ±o y delgadoâ€¦despuÃ©s de 2 meses ahora mi pene lo tengo de 19.4 x 14.3 ni siquiera lo reconozco es increÃ­ble la diferencia me sorprende el grosor y la proporciÃ³n es excelente, estoy emocionado ahora tengo una sÃºper polla, otra cosita la cabeza de mi pene se agrando aumento bastante, me imagino lo feliz q te sientes al saber que estas tÃ©cnicas funcionan de verdad por mi parte estoy agradecido con este tratamiento, mi meta es 22 cm estoy cerquita unas semanas mas y listo, mi vida cambio totalmente me siento poderoso mi autoestima esta por las nubes!! Mil gracias a los seÃ±ores de peneperfecto y suerte a todos.', 1),
(777, 645, '2012-12-10', 'Muchas gracias\r\n\r\nMis experiencias sexuales ahora son increÃ­bles, y altamente placenteras tanto para mÃ­ como para mi pareja realmente me siento como si fuera un nuevo hombre.\r\n\r\nMedidas inÃ­ciales 15.6 x 11.1 CM\r\nDemedias actuales 19.7 x 14.2 CM', 1),
(778, 646, '2012-12-13', 'Buenas Noches, Les agradesco por excelente programa, me esta funcionando muy bien gracias amigos!!', 1),
(779, 647, '2012-12-17', 'Saludos a todos, Tengo que confesar que inicialmente dudÃ© mucho de comprar el manual de ejercicios ya que no podÃ­a creer que hubiera algo que me ayudara con mi problema, ahora debo reconocer que es la mejor decisiÃ³n que he tomado en mi vida, los ejercicios son muy sencillos y sobretodo efectivos.. el manual es excelente el video genial todo es perfecto. Muchas gracias.\r\n\r\nMis medidas anteriores fueron 16.3 x 11.2 un pene algo delgado \r\nAhora despuÃ©s de 7 semanas 21.7 x 14.5 \r\n\r\nMi vida sexual mejoro en un 98% ahora tengo un pene mas grueso y largo fuerte y duro, puedo controlar mis eyaculaciones y los tiempos de refracciÃ³n son rapidos puedo echar hasta 5 eyaculaciones es increible mi novia esta sorprendida me dice â€œLA MAQUINAâ€ jeje estoy feliz, gracias amigos.', 1),
(780, 648, '2012-12-18', 'Me funciona de maravillas mi pene esta Aumentando!', 1),
(781, 649, '2012-12-23', 'Hola a todos los usuarios y seÃ±ores de peneperfecto.com al igual que todos ustedes a mi tambien me funciona perfectamente estos ejercicios maravillosos estoy muy feliz y agradecido con todos ustedes, soy afortunado al encontrar esta web la cual me cambio la vida totalmente mi vida sexual es mas activa puedo durar mucho mas teniendo sexo mi pene es mucho mas grande que antes y eso le fascina a mi esposa y a las mujeres es simplemente satisfactorio gracias y suerte a todos.', 1),
(782, 650, '2012-12-27', 'IncreÃ­ble jamas pensÃ© que me funcionaria esto es lo mejor mi experiencia y resultados son excelente, mi pene es mucho mas grande y poderoso amigos sinceramente gracias!', 1),
(783, 651, '2012-12-31', 'Hola amigos hasta el momento logre alargar mi pene 3.8 centÃ­metros mas de largo y 2.1 centÃ­metros mas de ancho que felicidad es increÃ­ble peneperfecto Te Amo!', 1),
(784, 652, '2012-12-31', 'Buenas Noches queridos practicantes de peneperfecto a igual que ustedes mis resultados son bastante satisfactorios hasta el momento aumente mi pene 4.6 centimetros mas en estos momentos mi pene mide 21.3 centimetros estoy satisfecho y agradecido este programa es increÃ­ble y les deseo exitos en este tratamiento a todos los nuevos usuarios, Bye.', 1),
(785, 654, '2013-01-01', 'Muy buen programa me encanto el servicio es excelente y sobre todo los resultados que obtuve que fueron los deseados, muchas gracias por efectivo programa y buen servicio.', 1),
(786, 655, '2013-01-05', 'Hola, despuÃ©s de probar otros productos los cuales fueron un fracaso por fin logre alargar mi pene 4 centÃ­metros con este efectivo programa me siento feliz, un millon de gracias!!', 1),
(787, 656, '2013-01-08', 'Gracias PenePerfecto por buen producto y servicio', 1),
(788, 658, '2013-01-12', 'hi, amigos a mi tambien me funciona perfectamente este tratamiento, pues mi pene sinceramente si era muy pequeÃ±o solo media 14 centÃ­metros y no satisfacÃ­a del todo a mi mujer y desde entonces a crecido hasta 19 centimetros actuales y el cambio es extremo muchas gracias y que Dios los bendiga.', 1),
(789, 659, '2013-01-18', 'Buenos dias, primero que todo gracias por excelentes tÃ©cnicas desde que me suscribÃ­ a este programa mi pene no para de aumentar, voy a compartir mis resultados y mis avances, antes mi pene media 14.2 CM. y ahora mide 19.7 CM. hasta el momento aumente 5.5 CM y 3.6 CM de Grosor el prÃ³ximo mes les darÃ© otra informe de mis resultados y avances, que Dios los bendiga.', 1),
(790, 659, '2013-01-18', 'Buenos dias, primero que todo gracias por excelentes tÃ©cnicas desde que me suscribÃ­ a este programa mi pene no para de aumentar, voy a compartir mis resultados y mis avances, antes mi pene media 14.2 CM. y ahora mide 19.7 CM. hasta el momento aumente 5.5 CM y 3.6 CM de Grosor el prÃ³ximo mes les darÃ© otra informe de mis resultados y avances, que Dios los bendiga.', 1),
(791, 660, '2013-01-26', 'me esta funcionando muy bien, mi rutina es diaria y cada fin de semana obtengo mas ganancias en el largo y el grosor, tambien espero llegar pronto a mi meta de 23 cm', 1),
(792, 661, '2013-01-30', 'hace un mes compre este manual y aumente exactamente 1.5 centÃ­metros esto es genial nunca me imagine que me fuera a funcionar es una maravilla', 1),
(793, 662, '2013-02-04', 'Tengan todos muy buenas tardes, Que afortunado me siento de poder adquirir este novedoso tratamiento, simplemente querÃ­a probarlo y maravillosamente me funciono al igual que a todos ustedes, a peneperfecto muchas gracias por ayudarme a tener una mejor calidad de vida, bye.', 1),
(794, 663, '2013-02-08', 'Hola, compre este producto hace dos meses y mis resultados son de lo mejor, con mucha disciplina aumente 2.3 centimetros de largo x 1.1 centimetros de grosor hasta el momento en este momento mi pene se ve mas grande y muy atractivo visualmente, me siento orgulloso pertenecer como usuario de este excelente programa, un agradecimiento al buen servicio y por supuesto al buen programa, desde MÃ©xico tengan todos muy buenas noches.', 1),
(795, 664, '2013-02-09', 'jesus te felicito por tus buenos resultados, tambien me siento orgulloso de ser usuario de este excelente programa, yo nunca me imagine que esto fuera a funcionar, pero me arriesgue a probarlo, cada mes aumento 1.2 CentÃ­metro, estoy haciendo estos ejercicios hace 3 meses y alargue 3.6 CentÃ­metros hasta la fecha, ahora mi pene mide los sorprendentes 20.7 CentÃ­metros y mi meta son 23 CentÃ­metros que pienso lograr para finales de octubre, me siento feliz y con mucha sinceridad muchas gracias por magnifico programa ustedes son los mejores!', 1),
(796, 665, '2013-02-12', 'Hola, que bueno comprobar que esto si funciona, mi pene tambiÃ©n se esta alargando cada dÃ­a mas, lo que mas me gusta de esto es que los resultados obtenidos son permanentes, me gustarÃ­a saber si puedo publicar una foto de mi pene actualmente? gracias por todo amigos.', 1),
(797, 666, '2013-02-15', 'Tengan Todos muy Buenos dias, es la primera ves que comento y en realidad quiero primero que todo darles las gracias a los seÃ±ores de peneperfecto por darme la oportunidad de probar su excelente y efectivo tratamiento, bueno ya llevo tres semanas de practicas mi pene se alargo 2.2 centimetros gracias a Dios no he tenido ningun problema todo funciona perfectamente y espero llegar pronto a mis 23 centimetros de longitud, se cuidan chao.', 1),
(798, 667, '2013-02-15', 'Saludos, que impresionante es este manual, casi no lo puedo creer mis resultados son enormes amigos casi 3.8 centimetros de ganancia en solo 3 meses mi pene ahora si se ve enorme, mi pareja me pide hacer el amor con mas frecuencia y el placer ahora es mucho mas grande que antes esto es la maravilla, estoy feliz gracias!', 1),
(799, 668, '2013-02-17', 'Buenas noches, realizo todos los dias los ejercicios y me funciona de maravilla cada dia mi pene aumenta mas y mas esto es genial y cada dia me sorprendo mas, jamas me imagine tener el pene tan grande esto es una locura es increÃ­ble gracias seÃ±ores.', 1),
(800, 669, '2013-02-19', 'Hola a todos, llevo 3 semanas realizando los ejercicios propuestos en el manual, hasta em momento alargue 2.1 CM estas tÃ©cnicas realmente funcionan, yo tenÃ­a bastante desconfianza sobre el tema, pero en dos semanas me di cuanta que si funcionaba', 1);
INSERT INTO `comentario` (`id`, `venta`, `fecha`, `comentario`, `activo`) VALUES
(801, 670, '2013-02-23', 'que buena efectividad la del programa, los felicito comprobÃ© que tener el pene mas grande es una satisfacciÃ³n y un placer total para mi y para mi pareja, peneperfecto haz cumplido mi sueÃ±o gracias, ahora puedo durar tres veces mas haciendo el amor, tengo control total y lo mejor de todo agrande mi pene 4 centÃ­metros mas estoy totalmente satisfecho y emocionado gracias.', 1),
(802, 671, '2013-02-27', 'me alegra los buenos resultados de todos mi pene tambiÃ©n esta aumentado dÃ­a a dÃ­a, hasta la fecha de hoy alargue mi pene 3.2 centÃ­metros y voy alargarlo otros 3 centÃ­metros mas para llegar a mi objetivo final de tener el pene de 22 centÃ­metros de largo.\r\n\r\nQue Dios los bendiga!', 1),
(803, 672, '2013-02-27', 'Buenas, Woow esto si funciona muy bien a las dos semanas empece a ver resultados super efectivo, seguirÃ© realizando los ejercicios mas adelante comentare resultados cuÃ­dense.', 1),
(804, 673, '2013-02-28', 'tengan todos muy buenas tardes, estado leyendo sus comentarios y son de admirar, se que tambien admiraran el mio pues mis resultados tambien son excelentes una maravilla, con este programa mi miembro lo estoy agrandando con el pasar de los dias lo cual me hace sentir dichoso y sobre todo conforme con respecto a la compra, espero que sigan asi de juiciosos en sus rutinas y lleguen lo mas lejos, se cuidan.', 1),
(805, 675, '2013-03-02', 'mi nombre es martin les contarles que desde que me suscribÃ­ a su manual online, no puedo dejar de asombrarme de los logros obtenidos, mi pene era de unos 14 centimetros, no me sentÃ­a del todo a gusto, ahora es de casi 17,5 centimetros, mÃ¡s gordo, duro y fuerte, y les aseguro el impacto que causa en las mujeres es muy satisfactorio quedan con la boca abierta y con ganas de tenerme en la cama, gracias una vez mÃ¡s.', 1),
(806, 676, '2013-03-06', 'hola soy ecuatoriano, en realidad este programa es todo un Ã©xito hasta el momento no he tenido ningÃºn problema o inconveniente al respecto tengo 3 meses de estar realizando estos ejercicios hasta el momento conseguÃ­ los siguientes resultados:\r\n\r\nAntes 11.2 x 15.7\r\nAhora 14.1 x 21.5\r\n\r\nMi pene se alargo 4.5 CentÃ­metros y se engroso 2.9 CentÃ­metros hasta el momento mis resultados pienso que son efectivos y muy satisfactorio, ustedes que opinan de mis resultados, que tengan todos un buen dÃ­a.', 1),
(807, 678, '2013-03-08', 'dario que buenos resultados esto de verdad me sorprende, yo tengo menos tiempo que tu, llevo un mes y unos dÃ­as practicando los ejercicios de peneperfecto y noto mi pene mas grande y grueso lo que le gusta mas a mi esposa es que las venas tambiÃ©n se ponen grandes y gruesas y eso la excita mucho visualmente y en la cama, el avance que llevo es de 1.8 centÃ­metros de largo lo cual es notable a simple vista, solo me queda decirle a todos que disfruten de su nuevo pene y a peneperfecto que ustedes son los mejores del mundo.', 1),
(808, 679, '2013-03-08', 'Buenos dias, compre esto hace unos pocos dias y estoy empezando a ver resultados es increible me siento muy positivo para llegar a mi meta de 24 cm, en pocas semanas escribire un reporte de mis resultados, saludos!', 1),
(809, 677, '2013-03-12', 'Hola me llamo hector, inicie el programa de peneperfecto con un tamaÃ±o de 16 cm que no estÃ¡ tan mal pero querÃ­a conseguir unos centÃ­metros mÃ¡s, ahora tengo 20 cm an transcurrido 2 meses, mejore mi problema de la eyaculacion precoz y duro mucho mas tiempo teniendo sexo, ademas mejore el tiempo de refraccion entre eyaculaciones, ya no tengo que esperar muchos minutos para empezar de nuevo, este metodo es una maravilla me encanta, gracias', 1),
(810, 680, '2013-03-13', 'hola soy argentino, todos los dias realizo la rutina de ejercicios como indica el manual y me esta funcionando de maravilla, me siento afortunado de pertenecer a la comunidad de peneperfecto les deseo a todos grandes resultados!', 1),
(811, 681, '2013-03-15', 'estoy impresionado con este programa muy efectivo, desde que lo compre mi miembro viril no para de aumentar, tambien me alegra que todos tengan buenos resultados, estos ejercicios me solucionaron mi problema de eyaculacion precoz y de paso logre aumentar unos centimetros mas mi pene, gracias!!', 1),
(812, 682, '2013-03-18', 'esto es excelente cinceramente fue lo mejor que e comprado siempre dije que lo natural es lo mejor!!', 1),
(813, 683, '2013-03-20', 'Muy buenas tardes, es la primera ves que comento en el foro, de verdad agrandar el pene es algo fantÃ¡stico y muy placentero ahora me dan muchas mas ganas que antes soy un hombre de 47 aÃ±os y desde que practico los ejercicios mejore mi vida sexual en un 75% logre aumentar mi pene 4 centÃ­metros ahora mide 18 tambiÃ©n me siento como un actor porno jeje esto es magnifico es lo mejor muchas gracias por efectivo tratamiento.', 1),
(814, 684, '2013-03-23', 'Buenos dÃ­as, hoy continuare mi rutina de ejercicios, me esta funcionando muy bien, hasta el momento no tengo ningÃºn inconveniente y mi pene aumenta cada dia, mi objetivo es llegar a 21 centÃ­metros, saludos!', 1),
(815, 685, '2013-03-24', 'Este programa si me esta dando resultados :D anteriormente me habÃ­a suscrito a dos programas similares pero no obtuve resultados y perdÃ­ mi tiempo y dinero, gracias a Dios en este estoy logrando lo que siempre soÃ±Ã© que era aumentar el tamaÃ±o de mi pene unos centÃ­metros mas, mi resultados son estos:\r\n\r\nAntes 13.2 CM de largo X 8.2 CM de Grosor\r\nAhora 16.7 CM de Largo X 10.5 CM de Grosor\r\n\r\nY aun sigo realizando los ejercicios con mucha disciplina para lograr mas aumento, gracias los felicito por buen programa de agrandamiento.', 1),
(816, 686, '2013-03-25', 'Buenas, llevo exactamente 5 semanas de practicar estos ejercicios y me funciona de maravillas, desde que empece a practicar el ejercicio para controlar la eyaculacion precoz de veras que mi vida cambio para bien, ahora duro mas teniendo sexo y eso le encanta a mi pareja ademas mi pene lo he alargado 3.2 centimetros esta ahora mucho mas grande, seguire los ejercicios cualquier novedad volvere a escribir se cuidan.', 1),
(817, 687, '2013-03-27', 'Es perfecto, me esta funcionando muy bien mil gracias seÃ±ores!!', 1),
(818, 688, '2013-03-30', 'hace mas de 2 aÃ±os que buscaba un mÃ©todo que de verdad me agrandara algunos cm el pene probÃ© con varios ejercicios pero no funcionaron, hoy tengo el honor de decirles que hace 3 meses encontrÃ© esta web y decidÃ­ comprar este manual para probar como Ãºltima opciÃ³n y gracias a Dios por fin logre mis objetivos mi pene se aumentado 5.2 cm, me ha llenado de emociÃ³n y satisfacciÃ³n saber que muy pronto lograre llegar a mis 6 centÃ­metros de ganancia, gracias a este gran programa me siento muy feliz, Gracias!', 1),
(819, 689, '2013-04-01', 'que maravilla yo tambien lo compre y mi palo crece dia tras dia, cada ves que termino los ejercicios lo nota mas grande y lo que mas me gusta es que se me nota un gran paqueton entre mis piernas, las mujeres siempre me miran el bulto y eso me encanta, saludos a todos los usuarios de esta maravilla de programa.', 1),
(820, 690, '2013-04-01', 'buenos dÃ­as, para ser sincero nunca pensÃ© que me fuera a funcionar mi pene antes media 13 centÃ­metros es sorprendente como en estos momentos esta en 17.5 centÃ­metros despuÃ©s de haber probado tantos tratamiento este a sido el Ãºnico que me funciono esta web soluciono mi problema con el tamaÃ±o del pene y no solo a mi a todos ustedes usuarios de peneperfecto se que se siente obtener buenos resultados y comparto esa felicidad con cada uno de ustedes, saludos.', 1),
(821, 691, '2013-04-03', 'Hola, compre este programa hace unas semanas y me funciona muy bien los felicito, ademas es una satisfacciÃ³n y una felicidad total el saber que mi pene va creciendo a buen ritmo', 1),
(822, 692, '2013-04-06', 'Hola a todos los usuarios de peneperfecto, me imagino lo felicen que estan con sus resultados, en mi caso hasta la fecha mi pene aumentado 3.7 centimetros en los 3 meses que llevo de realizar estos ejercicios, pienso que todos los que estamos aqui somos afortunados por que en internet existen cientos de metodos y todos son un fracaso, gracias a Dios que soy usuario de peneperfecto y estoy logrando mis objetivos la satisfaccion es enorme, saludos a todos y vamos para delante con la rutina.', 1),
(823, 693, '2013-04-08', 'buenas tardes, inicialmente me suscribÃ­ atraÃ­do por las tÃ©cnicas de alargamiento del pene, pero termine principalmente sorprendido por los ejercicios para mejorar las erecciones, es increible nunca pensÃ© que podÃ­a mejorar mi capacidad de erecciÃ³n de esta manera tambien agrande mi pene 3 centimetros mas, ahora mide 19.5 cm x 14.2 cm que felicidad la que siento todo el tiempo gracias a este efectivo tratamientio', 1),
(824, 694, '2013-04-13', 'excelente programa, de tres programa que probe en internet este es el unico que me esta dando resultados hasta el momento aumente 2.7 centimetros y mi esposa nota el incremento visualmente y tambiÃ©n lo siente, estoy muy agradecido con este manual y video ustedes son los mejores.', 1),
(825, 695, '2013-04-15', 'Tienes toda la razon tambien probe varios y jamas me funcionaron afortunadamente este si funciona y vale la pena recalcar las cosas buenas ahora mi vida es mucho mejor a antes mi pito se agrando 4 cm mil gracias.', 1),
(826, 696, '2013-04-19', 'Tengo que confesar que inicialmente dudÃ© mucho de comprar el manual de ejercicios, ya que no podÃ­a creer que hubiera algo que me ayudara con mi problema, ahora debo reconocer que es la mejor decisiÃ³n que he tomado en mi vida, los ejercicios son muy efectivos.. el manual es excelente el video genial todo es perfecto. Muchas gracias!\r\n\r\nMis medidas anteriores fueron 16.3 x 11.2 un pene algo delgado \r\nAhora despuÃ©s de 7 semanas 21.7 x 14.5\r\n\r\nGracias y bendiciones.', 1),
(827, 697, '2013-04-21', 'Buenas noches, este es mi segundo post desde que inicie los ejercicios mi pene sigue y sigue aumentando, hasta el momento e aumentado 3.8 centÃ­metros lo cual es bastante notorio a simple vista, hasta el momento no he tenido ningÃºn problema o inconveniente y seguirÃ© hasta llegar a 24 cm, en un mes escribo otro post con mis nuevos resultados se cuidan.', 1),
(828, 698, '2013-04-26', 'con respecto a los ejercicios hasta el momento aumente 3 centÃ­metros y seguirÃ© hasta que mi pene mida 21 cm con ese tamaÃ±o mi novia quedara muerta del placer.', 1),
(829, 699, '2013-04-29', 'personalmente me funciona muy bien tiene buena efectividad en el agrandamiento, saludos.', 1),
(830, 700, '2013-05-04', 'hola les contare un poco de mi rutina de ejercicios, hace 3 meses compre este programa hago los ejercicios con mucho juicio logre alargar 4,7 centÃ­metros por 3,6 centÃ­metros de grosor aun sigo realizando los ejercicios hasta llegar a mi meta, tengo erecciones mas rÃ¡pidas ahora duro 3 veces mas haciendo el amor en el momento mide 21 centÃ­metros a mi novia le encanta mi nuevo y enorme pene esto es genial y se siente super bien, esto es lo mejor.', 1),
(831, 701, '2013-05-06', 'Hace pocos minutos compre el manual + video me llego la clave de acceso enseguida a mi correo eso me gusto, tienen un buen servicio, buena atenciÃ³n al cliente en pocas palabras es perfecto!! y pronto tendrÃ© mi pene perfecto.', 1),
(832, 703, '2013-05-07', 'Buen dia soy de costa rica tengo 46 aÃ±os llevo 3 meses de practicar los ejercicios de peneperfecto.com en ese tiempo aumente 5.6 CM de longitud X 3.4 de grosor mejore mi rendimiento sexual mi pene es mucho mas grande que antes funciona mejor mejore mis erecciones duro mas tiempo y controlo muy bien las eyaculaciones es una maravilla parece mentira pero es real, gracias seÃ±ores.', 1),
(833, 704, '2013-05-10', 'seÃ±ores de peneperfecto agradezco de corazon por excelente servicio y efectivo programa que desde que lo inicie no dejo de sorprenderme del buen crecimiento de mi pene, gracias por ayudarnos a ser mas felices.', 1),
(834, 705, '2013-05-10', 'Amigos jamas me imagine que esto me funcionaria simplemente quise probar, ahora estoy sorprendido de la efectividad de estos ejercicios cada dÃ­a me sorprendo mas estoy emocionado aveces no lo puedo creer que rico se siente ahora tener sexo el placer aumento tanto para mi como para mi pareja es excelente antes mi pene media 14 cm y ahora mide 18 gracias amigos!', 1),
(835, 706, '2013-05-14', 'Queridos practicantes de peneperfecto, hoy les contare como van mis resultados desde que inicie este maravilloso programa mi pene se agrando 4.7 centÃ­metros de longitud X 2.4 centÃ­metros de grosor en un tiempo de 73 dÃ­as de practica lo cual es muy satisfactorio y sigo practicando antes mi pene media 16.2 centÃ­metros, con la nueva ganancia mide 20.9 centÃ­metros esto me cambio la vida amigos lo que les puedo desear es que sigan adelante hasta llegar a su meta y disfruten mucho bye.', 1),
(836, 706, '2013-05-14', 'Queridos practicantes de peneperfecto, hoy les contare como van mis resultados desde que inicie este maravilloso programa mi pene se agrando 4.7 centÃ­metros de longitud X 2.4 centÃ­metros de grosor en un tiempo de 73 dÃ­as de practica lo cual es muy satisfactorio y sigo practicando antes mi pene media 16.2 centÃ­metros, con la nueva ganancia mide 20.9 centÃ­metros esto me cambio la vida amigos lo que les puedo desear es que sigan adelante hasta llegar a su meta y disfruten mucho bye.', 1),
(837, 707, '2013-05-18', 'tengo una pregunta, desde que inicie en tratamiento en noviembre del aÃ±o pasado mi pene se agrando 4.7 centÃ­metros de largo X 3.2 de ancho lo cual es una locura, yo pare en ese momento por que en realidad estaba lo suficientemente grande estaba midiendo en total 21 centÃ­metros de longitud, la pregunta es la siguiente, es normal que todo el tiempo este con ganas y todas las maÃ±anas se me levanta y queda full potente..', 1),
(838, 708, '2013-05-21', 'amigo eso es normal, te cuento que yo tambiÃ©n siento mas deseos de tener sexo tambiÃ©n practico estos ejercicios, saludos.', 1),
(839, 709, '2013-05-22', 'todo el mundo deberÃ­a practicar este efectivo tratamiento mi pene aumento pero tambiÃ©n aumento mi autoestima, mi seguridad y mi confianza ante la sociedad y sobre todo ante las mujeres que son lo mas lindo que hay sobre la tierra.', 1),
(840, 710, '2013-05-26', 'buenas tardes, me gusta mucho su programa, yo habia probado de todo para agrandar el pene y nada me funcionaba, desde q empece este programa uff que diferencia esto si es un programa para agrandar el pene mi pene crece de forma permanente llevo 4 centÃ­metros aumentados y me siento dichoso de la vida super contento mi relaciÃ³n es mucho mejor que antes, gracias amigos!', 1),
(841, 711, '2013-05-29', 'llevo 3 semanas realizando los ejercicios propuestos en su manual, hasta la fecha gane 1.8 CM de largo! estas tÃ©cnicas realmente me funcionan muy bien, yo tenÃ­a bastante desconfianza sobre el tema y estaba un tanto resignado con mi tamaÃ±o pero en solo 22 dÃ­as ya puedo asegurarles que estaba equivocado, espero que muchos hombres sean felices con esto, se cuidan y bendiciones.', 1),
(842, 712, '2013-06-02', 'Buen dia acaba de compar el programa con tarjeta, los felicito por excelente servicio esta compra fue muy rÃ¡pida mi clave de acceso me llego automÃ¡ticamente a mi email, ya estoy dentro del programa hoy mismo empezare los ejercicios cada semana le contare mis avances mil gracias, estoy emocionado pronto mi pene sera enorme gracias.', 1),
(843, 713, '2013-06-02', 'Mil gracias seÃ±ores, mis relaciones sexuales son ahora increÃ­bles y super placenteras para mi y mi pareja, realmente me siento como si fuera un nuevo hombre con mas seguridad y mi autoestima se elevo pues tenia un pequeÃ±o pene, mi medida inicial era de 14.2 x 10.1 CM Ahora es de 20.7 x 15.4 CM sinceramente esto se siente muy bien es una gran satisfacciÃ³n solo quiero que sigan asÃ­ ayudando a todos por que de verdad que esto tambiÃ©n ayuda mucho al autoestima de un hombre, que Dios los bendiga!', 1),
(844, 714, '2013-06-04', 'buenas noches, hace dÃ­as querÃ­a comentar mis avances, cada mes mi pene aumenta 1.2 centÃ­metros de largo X 0.8 centÃ­metros de grosor me parece algo excelente en total llevo 4.6 centÃ­metros aumentados y sigo aumentando cada dÃ­a hago los ejercicios como indica el manual y vÃ­deo, creo que mis resultados son buenos pues estoy en el promedio de aumento mensual, siento mas ganas de tener sexo y amanezco con el pene al 100% esto es como una nueva vida en realidad se siente bien, si desean escribirme algo al respecto con mucho gusto les agradecerÃ­a, hasta pronto.', 1),
(845, 715, '2013-06-05', 'Amigos me agrada mucho leer sus comentarios y saber lo felices que son ahora. A todos nos sucede por igual mucho placer desde que empece los ejercicios de peneperfecto mi vida sexual cambio en un 100% mi mujer ahora me pide mas sexo es algo muy especial estoy muy agradecido y contento con los resultados gracias seÃ±ores!', 1),
(846, 716, '2013-06-08', 'Felicito a todos aquellos que lograron hacer este programa de ejercicios que si funciona, yo como algunos de ustedes tambiÃ©n probÃ© varios mÃ©todos que desafortunadamente fueron un fracaso total, estuve deprimido pensaba que nunca lograrÃ­a agrandar mi pene hasta que llegue a este programa y mi vida cambio, logre llegar a mi meta de 21 centÃ­metros de longitud con varios meses de ejercicios con mucha dedicaciÃ³n lo logre, mis eyaculaciones mejoraron me siento feliz al igual que mi esposa.\r\n\r\nmis medidas iniciales eran de 16 centÃ­metros de largo, despuÃ©s de 4 meses mi pene mide 21 centÃ­metros de largo es increÃ­ble \r\n\r\nun saludo.', 1),
(847, 717, '2013-06-09', 'Hola estoy contento porque acabo de comprar el pregrama y estoy etudiandolo para poder comenzar los ejerccios. mi medida actual. Es de 16cm. De largo y 13.5 de grosor pero me meta es llegar a 22cm. De larga y 16cm. De grosor. Mas adelante en un \r\nPar de meses. Les comento de mis resultados.', 1),
(848, 719, '2013-06-11', 'SeÃ±ores un cordial saludo, este programa es magnifico es increÃ­ble me funciono perfectamente y sin problemas, mi miembro masculino aumento 5 centÃ­metros, estoy full feliz personalmente recomiendo esto parece mÃ¡gico es genial, gracias y que pasen un resto de dia feliz.', 1),
(849, 720, '2013-06-14', 'Gracias por el servicio, hasta ahora todo funcionando bien mi miembro crece cada dÃ­a mas, hasta pronto.', 1),
(850, 718, '2013-06-17', 'hola seÃ±ores ahora si puedo decir que tengo un gran pene esto es excelente logre aumentar 5 centÃ­metros el cual era mi meta, estoy feliz al igual que mi esposa, ahora tengo muchas mas ganas de tener sexo, saludos a todos.', 1),
(851, 721, '2013-06-19', 'desde que probÃ© peneperfecto no solo mejoro el tamaÃ±o de mi pene, sino que tambiÃ©n mejoro autoestima, recuerdo que antes me daba vergÃ¼enza acercarme a una mujer y que se burlara de mi pero ahora eso ya cambio, y vean lo bien que me siento gracias.', 1),
(852, 732, '2013-06-20', 'gracias por su manual + video, me cambio la vida en 4 meses tener el pene grande tiene muchos beneficios las mujeres no lo dicen pero a ellas les fascina', 1),
(853, 722, '2013-06-20', 'Saludos y abrazos desde espaÃ±a sigo realizando ls rutina de ejercicios con mucho juicio e conseguido aumentar 4 centimetros y seguire aumentando 2 centimetros mas me funciona bien bye.', 1),
(854, 733, '2013-06-21', 'Hi, mi novia ahora si disfruta del sexo a mi lado, le hago llegar muchos orgasmos en poco tiempo gracias al gran pene que tengo pero gracias tambiÃ©n a este manual que me agrando el pene hasta 22 CM lo que me gusta es que la tengo super gigante me siento poderosooo', 1),
(855, 723, '2013-06-23', 'llevo 4 dÃ­as de practica si me funciona esto me gusta', 1),
(856, 725, '2013-06-26', 'muy buenos dÃ­as, espero que hallan conseguido grandes centÃ­metros de aumento, por mi parte logre aumentar 5.2 centÃ­metros ese era mi objetivo ahora lo estoy disfrutando al mÃ¡ximo con mi querida novia, se cuidan.', 1),
(857, 734, '2013-06-29', 'hola soy Ecuatoriano, gracias a seÃ±ores de peneperfecto por darnos la oportunidad de probar sus tecnicas que funcionan de maravillas, mi miembro ahora mide 22 CM se ve enorme amigos gracias.', 1),
(858, 735, '2013-06-30', 'buen programa me funciona excelentemente espero que sigan asÃ­ ayudÃ¡ndonos.', 1),
(859, 736, '2013-06-30', 'buenos dias, es un orgullo ser parte de esta web gracias a Dios estos ejercicios me cambiaron la vida, fueron 4 centimetros que aumente en longitud y 2.3 en grosor tener sexo ahora es lo maximo estoy feliz y agradecido con esto', 1),
(860, 737, '2013-07-01', 'Si funciona lo comprobÃ© despues de 4 dias noto los resultados a simple vista las venas tambien se agrandan muy bien', 1),
(861, 741, '2013-07-03', 'hola amigos llevo aproximadamente 2 meses con los ejercicios gane 3.2 centimetros en longitud 1.8 en grosor tambien estoy enderezando mi pene que poco a poco se ve mas derecho pienso que tengo buenos resultados y seguire bye.', 1),
(862, 726, '2013-07-04', 'me gusta el buen servicio, sobre todo los resultados son permanentes por mi parte tienen un 10', 1),
(863, 742, '2013-07-06', 'Buenas noches seÃ±ores usuarios, desde que empece el programa note grandes cambios, lo que mas deseaba era mantener mas tiempo la erecciÃ³n y lo logre mis erecciones mejoraron son mas rapidas y fuertes y ahora duro mas en el acto sexual al mismo tiempo mi pene aumento 3.7 centÃ­metros es mucho mas grande que antes, esto es simplemente genial a todos les deseo grandes resultados se cuidan.', 1),
(864, 764, '2013-07-06', 'Colegas tambien me funciona consegui alargar 3.2 centimetros mas y 1.8 centimetros de grosor no tenido problemas y mi pene funciona mucho mejor que antes, saludos.', 1),
(865, 765, '2013-07-08', 'colegas, esto en realidad es un excelente tratamiento bueno antes mi pene media solamente 14,3 cm ahora mide 18.7 cm pienso dejarlo de ese tamaÃ±o estoy bastante satisfecho con el resultado, un consejo, siempre piensen positivo, bye.', 1),
(866, 752, '2013-07-10', 'Hola seÃ±ores, llevo 10 dias de haber comprado este programa y noto los primeros resultados, mi pene es mas grueso venoso el glande esta mas grande en erecto y en flacido tambien lo noto mas grande, me esta funcionado muy bien gracias, cualquier novedad les comentare hasta luego.', 1),
(867, 769, '2013-07-10', 'por fin un programa que si funciona, despues de varios intentos fracasados aqui encontre la solucion al tamaÃ±o de mi pene gracias.', 1),
(868, 768, '2013-07-13', 'usted tines toda la razon tambien buscaba algo que agrandara mi pene hasta que llegue a qui mi pene crecio 4.6 entimetros es gigante a mi pareja le encanta full', 1),
(869, 810, '2013-07-14', 'esto es lo mejor que pude comprar por intenet ahora si disfruto del sexo con mas placer e intensidad, gracias.', 1),
(870, 826, '2013-07-15', 'estoy de acuerdo contigo a mi tambien me pasa lo mismo el mes pasado iba por 3 cm de aumento hoy voy por 4 cm tambiÃ©n mi placer aumento full', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comoanimacion`
--
-- Creación: 20-02-2013 a las 03:24:50
-- Última actualización: 20-02-2013 a las 03:24:50
--

DROP TABLE IF EXISTS `comoanimacion`;
CREATE TABLE IF NOT EXISTS `comoanimacion` (
  `id` int(11) NOT NULL,
  `animacion` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comoanimacion`
--

INSERT INTO `comoanimacion` (`id`, `animacion`) VALUES
(1, '/img/619679262.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comofunciona`
--
-- Creación: 20-02-2013 a las 03:24:50
-- Última actualización: 17-07-2013 a las 04:24:58
--

DROP TABLE IF EXISTS `comofunciona`;
CREATE TABLE IF NOT EXISTS `comofunciona` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `banner` varchar(200) DEFAULT NULL,
  `texto` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comofunciona`
--

INSERT INTO `comofunciona` (`id`, `titulo`, `banner`, `texto`) VALUES
(1, 'AsÃ­ funciona  ', '/img/040129383.png', '<p><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; line-height: 20.390625px; text-align: justify; font-family: arial, helvetica, sans-serif; color: rgb(90, 90, 90);">B&aacute;sicamente, su pene est&aacute; formado por 3 &aacute;reas pri</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; line-height: 20.390625px; text-align: justify; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif;">n</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; line-height: 20.390625px; text-align: justify; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif;">cipales, 2 gran</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; line-height: 20.390625px; text-align: justify; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif;">des c&aacute;maras en la parte superior (el t&eacute;rmino t&eacute;cnico que las define e</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; line-height: 20.390625px; text-align: justify; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif;">s la Corpora Cavernosa) y una&nbsp;</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; line-height: 20.390625px; text-align: justify; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif;">c&aacute;mara m&aacute;s peque&ntilde;a en la parte inferior (el Corpus Spongisum).</span>&nbsp;</p>\r\n<p><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; line-height: 20.390625px; text-align: justify; font-family: arial, helvetica, sans-serif; color: rgb(90, 90, 90);">Cuando se alcanza una erecci&oacute;n su pene se llena de sangre, ll</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; line-height: 20.390625px; text-align: justify; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif;">enando estas&nbsp;</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; line-height: 20.390625px; text-align: justify; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif;">tres c&aacute;maras. El Corp</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; line-height: 20.390625px; text-align: justify; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif;">usSpongisum es la c&aacute;mara a trav&eacute;s de la cual se orina o eyacula. Sin embargo la Corpora Cavernosa es la principal retensor</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; line-height: 20.390625px; text-align: justify; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif;">a de sangre, y es donde se encuentra el 90% de dicha s</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; line-height: 20.390625px; text-align: justify; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif;">angre cuando se alcanza una erecci&oacute;n.</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; line-height: 20.390625px; text-align: justify; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif;">El tama&ntilde;o actual de su pene es limitado en longitud y</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; line-height: 20.390625px; text-align: justify; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif;">grosor, por la capacidad m&aacute;xima de sangre que llena la Corpora Cavernosa. Dicho de otra manera, significa que es imposible que su pene se agrande por s&iacute; solo, ya que la sangre que llena el</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; line-height: 20.390625px; text-align: justify; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif;">pe</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; line-height: 20.390625px; text-align: justify; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif;">ne ya est&aacute; llenando el tama&ntilde;o m&aacute;ximo que alcanza la Corpora Cavernosa.</span></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: justify;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: arial, helvetica, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;">El &uacute;nico m&eacute;todo real de agrandamiento del pene es el de desarrollar y agrandar correctamente la Corpora Cavernosa. Esto es posible solamente con la&nbsp;</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: arial, helvetica, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;">realizaci&oacute;n de ejercicios y t&eacute;cnicas creadas especialmente para el crecimiento y desarrollo del pene. El secreto de un agrandamiento real del pene y en conjunto de un pene saludable es ejercitar la Corpora Cavernosa regularmente&nbsp; realizando estos ejercicios y t&eacute;cnicas especialmente desarrolladas, las cuales agrandan el pene, incrementando tambi&eacute;n la circulaci&oacute;n de la sangre.</span></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: justify;"><strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; background-color: transparent; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; background-position: initial initial; background-repeat: initial initial;">&iquest;COMO SE AGRANDA LA CORPORA CARVENOSA?</span></strong></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: justify;"><span style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; font-size: 13px;">En realidad estos ejercicios permiten que las c&eacute;lulas se estiren cada vez m&aacute;s, volvi&eacute;ndolas m&aacute;s grandes y fuertes permiti&eacute;ndole retener m&aacute;s sangre lo cual expande el tejido&nbsp;</span><span style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; font-size: 13px;">er&eacute;ctil, y al cabo de unas pocas semanas el resultado es un pene m&aacute;s grande, m&aacute;s fuerte y m&aacute;s dotado. Su pene es b&aacute;sicamente como cualquier otra parte de su cuerpo, ya que puede ejercitarse y desarrollarse sustancialmente y ser m&aacute;s grande y fuerte de lo que actualmente es. Imagine que nunca ha ejercitado ninguna parte de su cuerpo, cu&aacute;n extremadamente incapacitado ser&iacute;a, pues bien, lo mismo se aplica para el pene. La verdad es que la mayor&iacute;a de hombres en todo el mundo, tienen penes poco dotados simplemente porque no han desarrollado todo el potencial de sus penes. Con el uso de los ejercicios y t&eacute;cnicas apropiadas, el hombre medio puede desarrollar su sistema eyaculatorio y los &oacute;rganos del pene para controlar realmente sus eyaculaciones e incluso alcanzar orgasmos m&uacute;ltiples</span></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: justify;"><span style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; font-size: 13px;">Nuestro exclusivo manual + video contiene toda la informaci&oacute;n e instrucciones paso a paso para desarrollar y agrandar su Corpora Cavernosa.</span></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: justify;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: arial, helvetica, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;">Ejercitar su Corpora Cavernosa le permitir&aacute; retener m&aacute;s sangre y al mismo tiempo su pene se tornar&aacute; m&aacute;s grande y fuerte. Considere esto, si usted ejercita en un gimnasio regu</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: arial, helvetica, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;">larmente, no esperar&iacute;a ganar volumen muscular? Pues el mismo principio se aplica al pene, realizando de forma regular nuestros ejercicios y t&eacute;cnicas espec&iacute;ficamente dise&ntilde;adas, puede desarrollar su pene y alcanzar un crecimiento, habilidad y fuerza substancial.</span></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: justify;"><span style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; font-size: 13px;">El ejercicio regular de su pene no solo incrementa longitud y grosor, tambi&eacute;n tiene otros beneficios, incluyendo la habilidad de retener m&aacute;s sangre e incrementar la circulaci&oacute;n, resultando en un mejor rendimiento sexual y erecciones m&aacute;s firmes y duraderas. Despu&eacute;s de unas pocas semanas de ejercicio, notar&aacute; los efectos del incremento de la circulaci&oacute;n y su pene colgar&aacute; notablemente m&aacute;s abajo.</span></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: justify;"><span style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; font-size: 13px;">Todos estos ejercicios son simples y seguros de realizar, y no causan ning&uacute;n dolor, de hecho, son bastante agradables. Estos m&eacute;todos se llevan a cabo solo con sus manos,&nbsp;</span><strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif;">sin p&iacute;ldoras, sin bombas de vac&iacute;o y por supuesto sin cirug&iacute;a.</strong></p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comorecomendado`
--
-- Creación: 20-02-2013 a las 03:24:50
-- Última actualización: 20-02-2013 a las 03:24:51
--

DROP TABLE IF EXISTS `comorecomendado`;
CREATE TABLE IF NOT EXISTS `comorecomendado` (
  `id` int(11) NOT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `link` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comorecomendado`
--

INSERT INTO `comorecomendado` (`id`, `imagen`, `link`) VALUES
(1, '/img/395719745.jpg', 'http://www.google.com.co/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conparenos`
--
-- Creación: 20-02-2013 a las 03:24:51
-- Última actualización: 20-07-2013 a las 18:00:03
--

DROP TABLE IF EXISTS `conparenos`;
CREATE TABLE IF NOT EXISTS `conparenos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `caracteristica` varchar(200) DEFAULT NULL,
  `pp` text,
  `otro` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `conparenos`
--

INSERT INTO `conparenos` (`id`, `caracteristica`, `pp`, `otro`) VALUES
(3, 'Eficacia del Programa', '<p style="text-align: justify; "><span style="color: rgb(255, 255, 255);"><font face="arial, helvetica, sans-serif" size="2"><span style="line-height: 17px;">Peneperfecto.com es el unico programa que realmente funciona, esta comprobado por nuestros miles de usarios en todo el mundo. Damos credibilidad mediante nuestra encuesta en tiempo real, comentarios de nuestros usuarios registrados, acesoria y ayuda online 24 Horas al dia.</span></font></span></p>\r\n<p style="text-align: justify; ">&nbsp;</p>\r\n<p style="text-align: justify; ">&nbsp;</p>', '<p style="text-align: justify;"><span lang="ES" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; color: rgb(90, 90, 90); line-height: 20.390625px; font-family: Arial, sans-serif;">No te dejes enga&ntilde;ar&nbsp;por otros sitios!&nbsp;Ellos no ofrecen el mismo M&eacute;todo que nosotros ni el Video exclusivo en HD, tampoco pueden copiar el&nbsp;Servicio de nuestro&nbsp;</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; color: rgb(255, 102, 0);"><strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;"><span lang="ES" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: Arial, sans-serif; background-position: initial initial; background-repeat: initial initial;">HelpDesk</span><span lang="ES" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: Arial, sans-serif; background-position: initial initial; background-repeat: initial initial;">!</span></strong></span><span lang="ES" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; color: rgb(90, 90, 90); line-height: 20.390625px; font-family: Arial, sans-serif;">&nbsp;Somos el &uacute;nico sitio Web con un programa que si funciona y esta 100% Comprobado por nuestros usuarios en todo el mundo.</span></p>'),
(11, 'La OpiniÃ³n de los Usuarios', '<p style="text-align: justify;">Somos el unico programa donde los usuarios pueden opinar y publicar sus comentarios sobre los resultados y avences, esto demuestra que peneperfecto.com es un programa transparente y que respeta la opinion de sus usuarios, ver todos los comentarios.</p>', '<p>En ninguna web existe la opcion de que los usuarios puedan comentar los resultados y avances eso demuestra que son paginas falsas que simplemente buscan enga&ntilde;arlos sin demostrar la credibilidad de los usuarios medianta la libre opinion publica.</p>'),
(6, 'Seguimiento del progreso', '<p style="text-align: justify;"><span style="color: rgb(255, 255, 255);"><span style="font-family: arial, helvetica, sans-serif; font-size: 13px; line-height: 17px; text-align: justify;">Somos el Unico programa con un servicio de ayuda HelpDesk 24 Hrs al dia para el seguimiento de tus resultados, preguntas, dudas o problemas esto es algo que nadie puede competir con nosotros y tiene tanto o mas mas valor como el manual en si mismo, este servicio se incluye al suscribirse a nuestro programa.</span></span></p>', '<p style="text-align: justify;"><span style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; font-size: 13px; line-height: 17px; text-align: justify;">Ningun programa similar al nuestro le dara seguimiento a sus resultados o le respondera sus inquietudes dudas preguntas o problemas, en nuestra investigacion fue imposible la comunicacion con un asesor del programa en ninguna de las web investigadas.</span></p>'),
(9, 'Garantia en los resultados                                                         ', '<h2 style="text-align: justify;"><span style="color: rgb(255, 255, 255);"><font face="Arial, sans-serif" size="2"><span style="font-weight: normal; line-height: 20.390625px;">Peneperfecto.com es un programa Online serio somos un grupo de personas responsables y de principios y valores nos comprometemos con nuestros usuarios a conseguir los que ellos desean y satisfacerlos con nuestro programa, la garantia en nuestro programa si se hace efectiva.</span></font></span></h2>', '<p style="text-align: justify;"><font color="#5a5a5a" face="arial, helvetica, sans-serif" size="2"><span style="line-height: 17px;">ninguna web de las que hemos investigara entrega la devolucion del dinero por consepto de garantia, no se dejen enga&ntilde;ar por esos programas falsos lo unico que esas web le garantizan es perder su dinero y su tiempo.</span></font></p>'),
(15, 'MÃ©todos Diferentes de Agrandamiento', '<p style="margin: 10px 0px 1.5pt; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 17px;"><span style="color: rgb(255, 255, 255);"><span lang="ES" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: Arial, sans-serif;">100% Seguro, Natural y Garantizado.</span></span></p>\r\n<p style="margin: 10px 0px 1.5pt; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 17px;"><span style="color: rgb(255, 255, 255);"><span lang="ES" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: Arial, sans-serif;">El aumento de tama&ntilde;o es permanente.</span></span></p>\r\n<p style="margin: 10px 0px 1.5pt; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 17px;"><span style="color: rgb(255, 255, 255);"><span lang="ES" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: Arial, sans-serif;">Grandes resultados en menos tiempo.</span></span></p>', '<p><span style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; font-size: 13px; line-height: 17px; text-align: justify;"><input type="image" src="/images/admin/5454.png" width="0" height="0" /><input type="image" src="/images/admin/5454(1).png" width="70" height="51" align="left" />La cirug&iacute;a peneana es un procedimiento riesgoso y costoso.</span></p>'),
(14, 'Ayuda al Usuario', '<p><span style="color: rgb(255, 255, 255);">Tenemos el unico y mejor servicio de ayuda las 24 horas al dia llamado HelpDesk exclusivo para usuarios registrados dando una respuesta detallada en tiempo real sobre cualquier pregunta, duda o problema y sobre todo haciandole un seguimiento al avance de sus resultados.</span></p>', '<p>No existe en ninguna web un servicio de ayuda al usuario, danie se hace responsable, nadie responde un email no recibes respuestas y si algo sale mal no encontaras nunca al responsable.</p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactenosimagen`
--
-- Creación: 20-02-2013 a las 03:24:51
-- Última actualización: 21-06-2013 a las 19:37:19
--

DROP TABLE IF EXISTS `contactenosimagen`;
CREATE TABLE IF NOT EXISTS `contactenosimagen` (
  `id` int(11) NOT NULL,
  `imagen` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contactenosimagen`
--

INSERT INTO `contactenosimagen` (`id`, `imagen`) VALUES
(1, '/img/129711810.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactoinfo`
--
-- Creación: 20-02-2013 a las 03:24:51
-- Última actualización: 26-06-2013 a las 03:43:29
--

DROP TABLE IF EXISTS `contactoinfo`;
CREATE TABLE IF NOT EXISTS `contactoinfo` (
  `id` int(11) NOT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `celular` varchar(100) DEFAULT NULL,
  `fax` varchar(100) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contactoinfo`
--

INSERT INTO `contactoinfo` (`id`, `direccion`, `telefono`, `celular`, `fax`, `mail`, `ciudad`) VALUES
(1, 'Deshabilitar temporalmente  ', 'Deshabilitar temporalmente  ', '57+3016320545   57+3045212367   57+3045212367', '57+035+4364731', 'info@peneperfecto.com   ', 'Colombia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresasubtitulo`
--
-- Creación: 20-02-2013 a las 03:24:51
-- Última actualización: 23-07-2013 a las 16:47:26
--

DROP TABLE IF EXISTS `empresasubtitulo`;
CREATE TABLE IF NOT EXISTS `empresasubtitulo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subtitulo` varchar(200) DEFAULT NULL,
  `descripcion` text,
  `imagen` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `empresasubtitulo`
--

INSERT INTO `empresasubtitulo` (`id`, `subtitulo`, `descripcion`, `imagen`) VALUES
(2, 'Quienes Somos', '<p style="text-align: justify;"><strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; line-height: 20.390625px; text-align: justify;">Peneperfecto.com</strong><span style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; font-size: 13px; line-height: 20.390625px; text-align: justify;">&nbsp;es una empresa registrada con matricula mercantil #&nbsp; 00120522 ubicada en la capital de Colombia. Est&aacute; compuesta por varios expertos en el &aacute;rea del agrandamiento natural del pene, constantemente investigamos t&eacute;cnicas y productos que posibiliten el desarrollo del pene de manera segura y eficaz. Somos l&iacute;deres en este m&eacute;todo de agrandamiento del pene gracias a nuestros miles de usuarios en todo el mundo satisfechos y felices con nuestro producto de alta calidad y buen servicio al cliente.&nbsp;</span></p>', '/img/495224748.jpg'),
(3, 'MisiÃ³n', '<p style="text-align: justify;"><span style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; font-size: 13px; line-height: 20.390625px; text-align: justify;">Nuestra mision es satisfacer las nececidades de nuestros clientes&nbsp;</span><span style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; font-size: 13px; line-height: 20.390625px; text-align: justify;">proporcionandole y ayudandole con la informaci&oacute;n exacta para agrandar su pene y obtener multiples beneficios. Hemos investigado y practicado durante muchos a&ntilde;os cada recurso posible para traerle la gu&iacute;a m&aacute;s actualizada y efectiva que podr&aacute; encontrar en Internet.&nbsp; Hemos creado la m&aacute;s completa secci&oacute;n de desarrollo natural del pene, nuestro plan como siempre ha sido proporcionar calidad y buen servicio al cliente y eso es exactamente lo que obtienen nuestros clientes.</span></p>', '/img/549052053.jpg'),
(4, 'VisiÃ³n', '<div id="\\&quot;\\\\&quot;\\\\\\\\&quot;txt_beneficios\\\\\\\\&quot;\\\\&quot;\\&quot;">\r\n<p style="text-align: justify;"><font color="#5a5a5a" face="arial, helvetica, sans-serif" size="2"><span style="line-height: 20.390625px;">Nuestra vision es siempre mantenernos como el mejor programa de agrandamiento natural en el mundo y siempre satisfacer 100% A nuestros usuarios como siempre lo hemos echo garantizandoles un excelente producto de alta calidad.</span></font></p>\r\n</div>', '/img/36941977.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresatitulo`
--
-- Creación: 20-02-2013 a las 03:24:51
-- Última actualización: 24-05-2013 a las 20:45:07
--

DROP TABLE IF EXISTS `empresatitulo`;
CREATE TABLE IF NOT EXISTS `empresatitulo` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresatitulo`
--

INSERT INTO `empresatitulo` (`id`, `titulo`) VALUES
(1, 'Empresa   ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta`
--
-- Creación: 20-02-2013 a las 03:24:51
-- Última actualización: 10-04-2013 a las 20:28:34
--

DROP TABLE IF EXISTS `encuesta`;
CREATE TABLE IF NOT EXISTS `encuesta` (
  `id` int(11) NOT NULL,
  `pregunta` varchar(300) DEFAULT NULL,
  `o1` varchar(200) DEFAULT NULL,
  `o2` varchar(200) DEFAULT NULL,
  `o3` varchar(200) DEFAULT NULL,
  `o4` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `encuesta`
--

INSERT INTO `encuesta` (`id`, `pregunta`, `o1`, `o2`, `o3`, `o4`) VALUES
(1, 'Â¿Cuanto es su aumento por mes?', '1.5 Cm', '1.0 Cm', '0.5 Cm', '0.0 Centimetros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuestares`
--
-- Creación: 24-05-2013 a las 01:55:17
-- Última actualización: 11-07-2013 a las 04:16:02
--

DROP TABLE IF EXISTS `encuestares`;
CREATE TABLE IF NOT EXISTS `encuestares` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `venta` int(11) DEFAULT NULL,
  `respuesta` int(11) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1026 ;

--
-- Volcado de datos para la tabla `encuestares`
--

INSERT INTO `encuestares` (`id`, `venta`, `respuesta`, `fecha`) VALUES
(9, 60, 1, '0000-00-00 00:00:00'),
(10, 61, 2, '0000-00-00 00:00:00'),
(11, 13, 2, '0000-00-00 00:00:00'),
(12, 13, 2, '0000-00-00 00:00:00'),
(13, 13, 2, '2013-05-24 01:55:41'),
(14, 13, 1, '2013-05-24 02:08:14'),
(15, 13, 2, '2013-05-24 02:08:20'),
(16, 79, 3, '2013-05-24 15:30:08'),
(17, 176, 1, '2013-06-04 05:28:42'),
(18, 188, 2, '2013-06-04 20:11:41'),
(19, 240, 1, '2013-06-21 02:46:41'),
(20, 253, 1, '2013-06-25 16:19:17'),
(21, 252, 1, '2013-06-25 16:21:43'),
(22, 254, 1, '2013-06-25 17:28:42'),
(23, 255, 1, '2013-06-25 17:33:48'),
(24, 256, 1, '2013-06-25 17:40:17'),
(25, 257, 1, '2013-06-25 17:44:01'),
(26, 258, 1, '2013-06-25 17:47:37'),
(27, 419, 1, '2013-06-28 16:23:52'),
(28, 420, 1, '2013-06-28 21:40:46'),
(29, 422, 1, '2013-06-28 21:44:09'),
(30, 421, 1, '2013-06-28 21:45:37'),
(31, 423, 1, '2013-06-28 21:46:20'),
(32, 424, 1, '2013-06-28 21:46:41'),
(33, 425, 1, '2013-06-28 21:47:31'),
(34, 426, 1, '2013-06-28 21:47:53'),
(35, 427, 1, '2013-06-28 21:48:13'),
(36, 428, 1, '2013-06-28 21:48:34'),
(37, 429, 1, '2013-06-28 21:48:53'),
(38, 430, 1, '2013-06-28 21:49:11'),
(39, 431, 1, '2013-06-28 21:49:48'),
(40, 432, 1, '2013-06-28 21:50:28'),
(41, 433, 2, '2013-06-28 21:50:52'),
(42, 434, 2, '2013-06-28 21:51:44'),
(43, 435, 2, '2013-06-28 21:52:05'),
(44, 436, 2, '2013-06-28 21:52:32'),
(45, 437, 2, '2013-06-28 21:52:52'),
(46, 438, 2, '2013-06-28 21:53:14'),
(47, 439, 2, '2013-06-28 21:55:08'),
(48, 440, 2, '2013-06-28 21:56:25'),
(49, 441, 3, '2013-06-28 22:01:35'),
(50, 442, 3, '2013-06-28 22:01:54'),
(51, 443, 3, '2013-06-28 22:02:16'),
(52, 444, 3, '2013-06-28 22:02:36'),
(53, 445, 3, '2013-06-28 22:02:52'),
(54, 446, 3, '2013-06-28 22:03:13'),
(55, 447, 3, '2013-06-28 22:03:32'),
(56, 448, 3, '2013-06-28 22:03:50'),
(57, 449, 3, '2013-06-28 22:04:09'),
(58, 450, 3, '2013-06-28 22:04:50'),
(59, 451, 3, '2013-06-28 22:05:30'),
(60, 452, 3, '2013-06-28 22:06:30'),
(61, 453, 3, '2013-06-28 22:06:58'),
(62, 454, 3, '2013-06-28 22:07:17'),
(63, 455, 3, '2013-06-28 22:07:42'),
(64, 456, 3, '2013-06-28 22:08:02'),
(65, 457, 2, '2013-06-28 22:27:55'),
(66, 458, 2, '2013-06-28 22:28:30'),
(67, 459, 1, '2013-06-28 22:28:59'),
(68, 460, 1, '2013-06-28 22:29:51'),
(69, 461, 1, '2013-06-28 22:30:23'),
(70, 462, 2, '2013-06-28 22:30:50'),
(71, 463, 3, '2013-06-28 22:31:35'),
(72, 464, 3, '2013-06-28 22:32:00'),
(73, 465, 1, '2013-06-28 22:32:29'),
(74, 466, 1, '2013-06-28 22:32:55'),
(75, 467, 1, '2013-06-28 22:33:36'),
(76, 468, 3, '2013-06-28 22:34:02'),
(77, 469, 1, '2013-06-28 22:34:31'),
(78, 470, 2, '2013-06-28 22:35:01'),
(79, 471, 3, '2013-06-28 22:35:29'),
(80, 472, 1, '2013-06-28 22:36:02'),
(81, 473, 1, '2013-06-28 22:36:36'),
(82, 474, 1, '2013-06-28 22:37:00'),
(83, 475, 2, '2013-06-28 22:37:27'),
(84, 476, 3, '2013-06-28 22:37:51'),
(85, 477, 1, '2013-06-28 22:38:25'),
(86, 478, 3, '2013-06-28 22:38:56'),
(87, 479, 1, '2013-06-28 22:39:24'),
(88, 480, 2, '2013-06-28 22:39:54'),
(89, 481, 2, '2013-06-28 22:40:40'),
(90, 482, 1, '2013-06-28 22:41:03'),
(91, 483, 1, '2013-06-28 22:41:30'),
(92, 484, 2, '2013-06-28 22:41:57'),
(93, 485, 1, '2013-06-28 22:42:23'),
(94, 486, 1, '2013-06-28 22:42:53'),
(95, 487, 1, '2013-06-28 22:43:16'),
(96, 488, 2, '2013-06-28 22:43:52'),
(97, 489, 3, '2013-06-28 22:44:18'),
(98, 490, 3, '2013-06-28 22:44:49'),
(99, 491, 3, '2013-06-28 22:45:20'),
(100, 492, 3, '2013-06-28 22:45:45'),
(101, 493, 3, '2013-06-28 22:46:13'),
(102, 494, 2, '2013-06-28 22:46:44'),
(103, 495, 3, '2013-06-28 22:47:13'),
(104, 496, 2, '2013-06-28 22:47:47'),
(105, 497, 2, '2013-06-28 22:48:12'),
(106, 498, 1, '2013-06-28 22:48:41'),
(107, 499, 1, '2013-06-28 22:49:06'),
(108, 500, 2, '2013-06-28 22:49:32'),
(109, 501, 1, '2013-06-28 22:49:55'),
(110, 502, 1, '2013-06-28 22:50:17'),
(111, 504, 1, '2013-06-28 22:52:29'),
(112, 505, 3, '2013-06-28 22:52:56'),
(113, 506, 2, '2013-06-28 22:53:22'),
(114, 507, 2, '2013-06-28 22:54:11'),
(115, 508, 2, '2013-06-28 22:54:34'),
(116, 509, 1, '2013-06-28 22:55:00'),
(117, 510, 1, '2013-06-28 22:55:27'),
(118, 511, 1, '2013-06-28 22:55:49'),
(119, 512, 2, '2013-06-28 22:56:11'),
(120, 513, 2, '2013-06-28 22:56:35'),
(121, 514, 3, '2013-06-28 22:57:02'),
(122, 515, 2, '2013-06-28 22:57:31'),
(123, 516, 2, '2013-06-28 22:58:04'),
(124, 517, 2, '2013-06-28 22:58:37'),
(125, 518, 2, '2013-06-28 22:59:18'),
(126, 519, 2, '2013-06-28 22:59:44'),
(127, 520, 2, '2013-06-28 23:00:20'),
(128, 521, 1, '2013-06-30 02:23:19'),
(129, 522, 1, '2013-06-30 02:24:22'),
(130, 523, 1, '2013-07-02 17:08:05'),
(131, 524, 1, '2013-07-02 17:08:37'),
(132, 525, 1, '2013-07-02 17:09:01'),
(133, 526, 3, '2013-07-02 17:09:36'),
(134, 527, 3, '2013-07-02 17:09:57'),
(135, 528, 3, '2013-07-02 17:10:23'),
(136, 820, 1, '2013-07-02 21:54:24'),
(137, 819, 1, '2013-07-02 21:54:48'),
(138, 818, 1, '2013-07-02 21:56:21'),
(139, 817, 1, '2013-07-02 22:01:09'),
(140, 816, 1, '2013-07-02 22:01:34'),
(141, 815, 1, '2013-07-02 22:02:01'),
(142, 814, 1, '2013-07-02 22:02:29'),
(143, 813, 2, '2013-07-02 22:04:36'),
(144, 812, 2, '2013-07-02 22:05:03'),
(145, 811, 2, '2013-07-02 22:05:27'),
(146, 810, 2, '2013-07-02 22:05:52'),
(147, 809, 2, '2013-07-02 22:07:42'),
(148, 808, 2, '2013-07-02 22:08:48'),
(149, 807, 2, '2013-07-02 22:09:58'),
(150, 806, 2, '2013-07-02 22:10:45'),
(151, 805, 2, '2013-07-02 22:13:12'),
(152, 804, 1, '2013-07-02 22:14:58'),
(153, 803, 1, '2013-07-02 22:16:46'),
(154, 802, 1, '2013-07-02 22:17:14'),
(155, 801, 1, '2013-07-02 22:17:37'),
(156, 800, 1, '2013-07-02 22:17:59'),
(157, 799, 1, '2013-07-02 22:20:19'),
(158, 798, 1, '2013-07-02 22:21:35'),
(159, 797, 1, '2013-07-02 22:21:59'),
(160, 796, 1, '2013-07-02 22:22:23'),
(161, 795, 1, '2013-07-02 22:22:49'),
(162, 794, 1, '2013-07-02 22:27:44'),
(163, 793, 1, '2013-07-02 22:28:05'),
(164, 792, 1, '2013-07-02 22:28:30'),
(165, 791, 1, '2013-07-02 22:28:56'),
(166, 790, 1, '2013-07-02 22:29:17'),
(167, 789, 1, '2013-07-02 22:29:41'),
(168, 788, 1, '2013-07-02 22:30:06'),
(169, 787, 1, '2013-07-02 22:30:29'),
(170, 786, 1, '2013-07-02 22:30:51'),
(171, 785, 1, '2013-07-02 22:31:13'),
(172, 784, 1, '2013-07-02 22:31:36'),
(173, 783, 1, '2013-07-02 22:31:57'),
(174, 782, 1, '2013-07-02 22:32:18'),
(175, 781, 1, '2013-07-02 22:32:57'),
(176, 780, 1, '2013-07-02 22:33:17'),
(177, 779, 1, '2013-07-02 22:33:38'),
(178, 778, 1, '2013-07-02 22:34:01'),
(179, 777, 1, '2013-07-02 22:34:23'),
(180, 776, 1, '2013-07-02 22:34:50'),
(181, 775, 1, '2013-07-02 22:35:11'),
(182, 774, 1, '2013-07-02 22:35:36'),
(183, 773, 1, '2013-07-02 22:36:20'),
(184, 772, 2, '2013-07-02 22:36:42'),
(185, 771, 2, '2013-07-02 22:37:11'),
(186, 770, 2, '2013-07-02 22:37:32'),
(187, 769, 2, '2013-07-02 22:37:57'),
(188, 768, 1, '2013-07-02 22:38:32'),
(189, 767, 1, '2013-07-02 22:38:54'),
(190, 766, 1, '2013-07-02 22:39:22'),
(191, 765, 1, '2013-07-02 22:39:48'),
(192, 764, 1, '2013-07-02 22:40:09'),
(193, 763, 1, '2013-07-02 22:40:34'),
(194, 762, 2, '2013-07-02 22:41:09'),
(195, 761, 2, '2013-07-02 22:41:43'),
(196, 760, 1, '2013-07-02 22:48:37'),
(197, 759, 1, '2013-07-02 22:48:59'),
(198, 758, 2, '2013-07-02 22:49:19'),
(199, 757, 2, '2013-07-02 22:49:41'),
(200, 756, 2, '2013-07-02 22:50:04'),
(201, 755, 2, '2013-07-02 22:50:27'),
(202, 754, 2, '2013-07-02 22:50:47'),
(203, 753, 2, '2013-07-02 22:51:11'),
(204, 721, 3, '2013-07-02 22:51:37'),
(205, 722, 3, '2013-07-02 22:51:57'),
(206, 723, 3, '2013-07-02 22:52:17'),
(207, 724, 3, '2013-07-02 22:52:41'),
(208, 725, 3, '2013-07-02 22:53:00'),
(209, 726, 3, '2013-07-02 22:53:21'),
(210, 727, 3, '2013-07-02 22:53:42'),
(211, 728, 3, '2013-07-02 22:54:05'),
(212, 729, 3, '2013-07-02 22:54:29'),
(213, 730, 3, '2013-07-02 22:54:51'),
(214, 731, 3, '2013-07-02 22:55:12'),
(215, 732, 3, '2013-07-02 22:55:36'),
(216, 733, 3, '2013-07-02 22:55:55'),
(217, 734, 3, '2013-07-02 22:56:15'),
(218, 735, 1, '2013-07-02 22:56:41'),
(219, 736, 1, '2013-07-02 22:57:01'),
(220, 737, 1, '2013-07-02 22:57:22'),
(221, 738, 1, '2013-07-02 22:57:43'),
(222, 739, 1, '2013-07-02 22:58:04'),
(223, 740, 1, '2013-07-02 22:58:26'),
(224, 741, 1, '2013-07-02 22:58:46'),
(225, 742, 1, '2013-07-02 22:59:09'),
(226, 743, 2, '2013-07-02 22:59:38'),
(227, 744, 1, '2013-07-02 23:00:01'),
(228, 745, 2, '2013-07-02 23:00:25'),
(229, 746, 2, '2013-07-02 23:00:45'),
(230, 747, 3, '2013-07-02 23:01:06'),
(231, 748, 1, '2013-07-02 23:01:37'),
(232, 749, 3, '2013-07-02 23:01:57'),
(233, 750, 2, '2013-07-02 23:02:19'),
(234, 751, 2, '2013-07-02 23:02:39'),
(235, 752, 3, '2013-07-02 23:03:07'),
(236, 529, 2, '2013-07-03 02:17:35'),
(237, 530, 3, '2013-07-03 02:18:01'),
(238, 531, 1, '2013-07-03 02:18:22'),
(239, 532, 1, '2013-07-03 02:18:43'),
(240, 533, 1, '2013-07-03 02:19:10'),
(241, 535, 1, '2013-07-03 02:19:56'),
(242, 536, 1, '2013-07-03 02:20:33'),
(243, 537, 1, '2013-07-03 02:20:53'),
(244, 538, 1, '2013-07-03 02:21:24'),
(245, 539, 1, '2013-07-03 02:21:48'),
(246, 540, 1, '2013-07-03 02:22:08'),
(247, 541, 1, '2013-07-03 02:23:44'),
(248, 542, 1, '2013-07-03 02:24:09'),
(249, 543, 1, '2013-07-03 02:24:44'),
(250, 544, 1, '2013-07-03 02:25:12'),
(251, 545, 1, '2013-07-03 02:25:33'),
(252, 546, 1, '2013-07-03 02:26:04'),
(253, 547, 1, '2013-07-03 02:26:34'),
(254, 548, 1, '2013-07-03 02:26:56'),
(255, 549, 1, '2013-07-03 02:27:24'),
(256, 550, 1, '2013-07-03 02:27:46'),
(257, 551, 1, '2013-07-03 02:28:13'),
(258, 552, 1, '2013-07-03 02:28:35'),
(259, 553, 1, '2013-07-03 02:28:55'),
(260, 554, 1, '2013-07-03 02:29:16'),
(261, 555, 1, '2013-07-03 02:29:36'),
(262, 556, 1, '2013-07-03 02:30:01'),
(263, 557, 1, '2013-07-03 02:30:22'),
(264, 558, 1, '2013-07-03 02:30:44'),
(265, 559, 1, '2013-07-03 02:31:10'),
(266, 560, 1, '2013-07-03 02:31:38'),
(267, 561, 1, '2013-07-03 02:32:00'),
(268, 562, 1, '2013-07-03 02:32:21'),
(269, 563, 1, '2013-07-03 02:32:48'),
(270, 564, 1, '2013-07-03 02:33:07'),
(271, 565, 1, '2013-07-03 02:33:31'),
(272, 566, 1, '2013-07-03 02:33:53'),
(273, 567, 1, '2013-07-03 02:34:16'),
(274, 568, 1, '2013-07-03 02:34:39'),
(275, 569, 1, '2013-07-03 02:35:03'),
(276, 570, 1, '2013-07-03 02:35:25'),
(277, 571, 1, '2013-07-03 02:35:48'),
(278, 572, 1, '2013-07-03 02:36:08'),
(279, 573, 1, '2013-07-03 02:36:32'),
(280, 574, 1, '2013-07-03 02:36:54'),
(281, 575, 1, '2013-07-03 02:37:31'),
(282, 576, 1, '2013-07-03 02:37:56'),
(283, 577, 1, '2013-07-03 02:38:20'),
(284, 578, 1, '2013-07-03 02:38:43'),
(285, 579, 1, '2013-07-03 02:39:04'),
(286, 580, 1, '2013-07-03 02:39:23'),
(287, 581, 1, '2013-07-03 02:39:49'),
(288, 582, 1, '2013-07-03 02:40:16'),
(289, 583, 1, '2013-07-03 02:40:52'),
(290, 585, 1, '2013-07-03 02:41:20'),
(291, 586, 1, '2013-07-03 02:41:46'),
(292, 587, 1, '2013-07-03 02:42:17'),
(293, 588, 1, '2013-07-03 02:42:41'),
(294, 589, 1, '2013-07-03 02:43:02'),
(295, 590, 1, '2013-07-03 02:43:23'),
(296, 591, 1, '2013-07-03 02:43:46'),
(297, 592, 1, '2013-07-03 02:44:09'),
(298, 593, 1, '2013-07-03 02:44:36'),
(299, 594, 1, '2013-07-03 02:44:57'),
(300, 595, 1, '2013-07-03 02:45:17'),
(301, 596, 1, '2013-07-03 02:45:42'),
(302, 597, 1, '2013-07-03 02:46:09'),
(303, 598, 1, '2013-07-03 02:46:34'),
(304, 599, 1, '2013-07-03 02:47:11'),
(305, 600, 1, '2013-07-03 02:47:30'),
(306, 601, 1, '2013-07-03 02:47:49'),
(307, 602, 1, '2013-07-03 02:48:12'),
(308, 603, 1, '2013-07-03 02:48:40'),
(309, 604, 1, '2013-07-03 02:49:01'),
(310, 605, 1, '2013-07-03 02:49:29'),
(311, 606, 1, '2013-07-03 02:49:53'),
(312, 607, 1, '2013-07-03 02:50:13'),
(313, 608, 1, '2013-07-03 02:51:10'),
(314, 609, 1, '2013-07-03 02:51:31'),
(315, 610, 1, '2013-07-03 02:51:53'),
(316, 611, 1, '2013-07-03 02:52:13'),
(317, 612, 1, '2013-07-03 02:52:36'),
(318, 613, 1, '2013-07-03 02:52:57'),
(319, 614, 1, '2013-07-03 02:53:18'),
(320, 615, 1, '2013-07-03 02:53:41'),
(321, 616, 1, '2013-07-03 02:54:25'),
(322, 617, 1, '2013-07-03 02:54:44'),
(323, 618, 1, '2013-07-03 02:55:05'),
(324, 619, 1, '2013-07-03 02:55:26'),
(325, 620, 1, '2013-07-03 02:55:49'),
(326, 720, 1, '2013-07-03 02:56:23'),
(327, 719, 1, '2013-07-03 03:06:46'),
(328, 718, 1, '2013-07-03 03:08:14'),
(329, 717, 1, '2013-07-03 03:08:40'),
(330, 716, 1, '2013-07-03 03:09:00'),
(331, 715, 1, '2013-07-03 03:09:20'),
(332, 714, 1, '2013-07-03 03:09:42'),
(333, 713, 1, '2013-07-03 03:10:04'),
(334, 712, 1, '2013-07-03 03:10:34'),
(335, 711, 1, '2013-07-03 03:10:54'),
(336, 710, 1, '2013-07-03 03:11:17'),
(337, 709, 1, '2013-07-03 03:11:49'),
(338, 708, 1, '2013-07-03 03:12:19'),
(339, 707, 1, '2013-07-03 03:12:42'),
(340, 706, 1, '2013-07-03 03:14:46'),
(341, 705, 1, '2013-07-03 03:15:18'),
(342, 704, 1, '2013-07-03 03:15:40'),
(343, 703, 1, '2013-07-03 03:15:58'),
(344, 702, 1, '2013-07-03 03:16:23'),
(345, 701, 1, '2013-07-03 03:16:42'),
(346, 700, 1, '2013-07-03 03:17:02'),
(347, 699, 1, '2013-07-03 03:17:51'),
(348, 698, 1, '2013-07-03 03:18:22'),
(349, 697, 1, '2013-07-03 03:18:43'),
(350, 696, 1, '2013-07-03 03:19:03'),
(351, 695, 1, '2013-07-03 03:19:21'),
(352, 694, 1, '2013-07-03 03:19:51'),
(353, 693, 1, '2013-07-03 03:20:16'),
(354, 692, 1, '2013-07-03 03:22:09'),
(355, 691, 1, '2013-07-03 03:22:33'),
(356, 690, 1, '2013-07-03 03:22:50'),
(357, 689, 1, '2013-07-03 03:23:10'),
(358, 688, 1, '2013-07-03 03:23:32'),
(359, 687, 1, '2013-07-03 03:23:51'),
(360, 686, 1, '2013-07-03 03:24:17'),
(361, 685, 1, '2013-07-03 03:24:37'),
(362, 684, 1, '2013-07-03 03:24:56'),
(363, 683, 1, '2013-07-03 03:25:16'),
(364, 682, 1, '2013-07-03 03:25:35'),
(365, 681, 1, '2013-07-03 03:26:00'),
(366, 680, 1, '2013-07-03 03:26:33'),
(367, 679, 1, '2013-07-03 03:27:04'),
(368, 678, 1, '2013-07-03 03:28:26'),
(369, 677, 1, '2013-07-03 03:28:47'),
(370, 676, 1, '2013-07-03 03:29:05'),
(371, 675, 1, '2013-07-03 03:29:25'),
(372, 674, 1, '2013-07-03 03:29:48'),
(373, 673, 1, '2013-07-03 03:30:13'),
(374, 672, 1, '2013-07-03 03:30:34'),
(375, 671, 1, '2013-07-03 03:31:21'),
(376, 670, 1, '2013-07-03 03:33:18'),
(377, 669, 1, '2013-07-03 03:33:40'),
(378, 668, 1, '2013-07-03 03:33:58'),
(379, 667, 1, '2013-07-03 03:34:19'),
(380, 666, 1, '2013-07-03 03:34:45'),
(381, 665, 1, '2013-07-03 03:35:03'),
(382, 664, 1, '2013-07-03 03:35:24'),
(383, 663, 1, '2013-07-03 03:38:30'),
(384, 662, 1, '2013-07-03 03:38:50'),
(385, 661, 1, '2013-07-03 03:39:17'),
(386, 660, 1, '2013-07-03 03:39:36'),
(387, 659, 1, '2013-07-03 03:40:21'),
(388, 658, 1, '2013-07-03 03:40:39'),
(389, 657, 1, '2013-07-03 03:42:08'),
(390, 656, 1, '2013-07-03 03:42:31'),
(391, 655, 1, '2013-07-03 03:42:51'),
(392, 654, 1, '2013-07-03 03:43:09'),
(393, 653, 1, '2013-07-03 03:43:29'),
(394, 652, 1, '2013-07-03 03:43:46'),
(395, 651, 1, '2013-07-03 03:44:07'),
(396, 650, 1, '2013-07-03 03:44:29'),
(397, 649, 1, '2013-07-03 03:44:57'),
(398, 648, 1, '2013-07-03 03:45:21'),
(399, 647, 1, '2013-07-03 03:45:43'),
(400, 646, 1, '2013-07-03 03:46:16'),
(401, 645, 1, '2013-07-03 03:47:11'),
(402, 644, 1, '2013-07-03 03:47:28'),
(403, 643, 1, '2013-07-03 03:47:49'),
(404, 642, 1, '2013-07-03 03:48:12'),
(405, 641, 1, '2013-07-03 03:48:30'),
(406, 640, 1, '2013-07-03 03:49:00'),
(407, 639, 1, '2013-07-03 03:49:20'),
(408, 638, 1, '2013-07-03 03:51:23'),
(409, 637, 1, '2013-07-03 03:52:10'),
(410, 636, 1, '2013-07-03 03:52:38'),
(411, 635, 1, '2013-07-03 03:53:07'),
(412, 634, 1, '2013-07-03 03:53:24'),
(413, 633, 1, '2013-07-03 03:53:43'),
(414, 632, 1, '2013-07-03 03:54:04'),
(415, 631, 1, '2013-07-03 03:54:24'),
(416, 630, 1, '2013-07-03 03:54:42'),
(417, 629, 1, '2013-07-03 03:54:59'),
(418, 628, 1, '2013-07-03 03:58:21'),
(419, 627, 1, '2013-07-03 03:58:43'),
(420, 626, 1, '2013-07-03 03:59:00'),
(421, 625, 1, '2013-07-03 03:59:17'),
(422, 624, 1, '2013-07-03 03:59:43'),
(423, 623, 1, '2013-07-03 04:00:01'),
(424, 622, 1, '2013-07-03 04:00:20'),
(425, 621, 1, '2013-07-03 04:00:40'),
(426, 821, 1, '2013-07-06 04:51:10'),
(427, 822, 2, '2013-07-06 04:51:36'),
(428, 823, 1, '2013-07-06 04:51:57'),
(429, 824, 1, '2013-07-06 04:52:16'),
(430, 825, 1, '2013-07-06 04:52:35'),
(431, 826, 1, '2013-07-06 04:52:52'),
(432, 827, 1, '2013-07-06 04:53:38'),
(433, 828, 1, '2013-07-06 04:54:04'),
(434, 829, 1, '2013-07-06 04:54:22'),
(435, 830, 1, '2013-07-06 04:54:41'),
(436, 831, 1, '2013-07-06 04:55:00'),
(437, 832, 1, '2013-07-06 04:55:34'),
(438, 833, 1, '2013-07-06 04:55:43'),
(439, 834, 1, '2013-07-06 04:56:00'),
(440, 835, 1, '2013-07-06 04:56:18'),
(441, 836, 1, '2013-07-06 04:56:35'),
(442, 837, 1, '2013-07-06 04:56:53'),
(443, 838, 1, '2013-07-06 04:57:23'),
(444, 839, 1, '2013-07-06 04:57:41'),
(445, 840, 1, '2013-07-06 04:57:58'),
(446, 841, 1, '2013-07-06 04:58:18'),
(447, 842, 1, '2013-07-06 04:58:46'),
(448, 843, 1, '2013-07-06 05:00:19'),
(449, 844, 1, '2013-07-06 05:00:34'),
(450, 845, 1, '2013-07-06 05:00:52'),
(451, 846, 1, '2013-07-06 05:01:26'),
(452, 847, 1, '2013-07-06 05:01:44'),
(453, 848, 1, '2013-07-06 05:01:59'),
(454, 849, 1, '2013-07-06 05:02:16'),
(455, 850, 1, '2013-07-06 05:03:21'),
(456, 851, 1, '2013-07-06 05:03:41'),
(457, 852, 1, '2013-07-06 05:04:00'),
(458, 853, 1, '2013-07-06 05:04:24'),
(459, 854, 1, '2013-07-06 05:05:04'),
(460, 855, 1, '2013-07-06 05:05:21'),
(461, 856, 1, '2013-07-06 05:05:39'),
(462, 857, 1, '2013-07-06 05:05:56'),
(463, 858, 1, '2013-07-06 05:06:15'),
(464, 859, 1, '2013-07-06 05:06:32'),
(465, 860, 1, '2013-07-06 05:06:49'),
(466, 861, 1, '2013-07-06 05:07:16'),
(467, 862, 1, '2013-07-06 05:07:49'),
(468, 863, 1, '2013-07-06 05:08:08'),
(469, 864, 1, '2013-07-06 05:08:24'),
(470, 865, 1, '2013-07-06 05:08:47'),
(471, 866, 1, '2013-07-06 05:09:07'),
(472, 867, 1, '2013-07-06 05:09:56'),
(473, 868, 1, '2013-07-06 05:10:23'),
(474, 869, 1, '2013-07-06 05:11:06'),
(475, 870, 1, '2013-07-06 05:12:39'),
(476, 871, 1, '2013-07-06 05:13:04'),
(477, 872, 1, '2013-07-06 05:13:21'),
(478, 873, 1, '2013-07-06 05:13:39'),
(479, 874, 1, '2013-07-06 05:14:06'),
(480, 875, 1, '2013-07-06 05:14:31'),
(481, 876, 1, '2013-07-06 05:14:54'),
(482, 877, 1, '2013-07-06 05:15:13'),
(483, 878, 1, '2013-07-06 05:15:29'),
(484, 879, 1, '2013-07-06 05:15:45'),
(485, 880, 1, '2013-07-06 05:16:02'),
(486, 881, 1, '2013-07-06 05:16:18'),
(487, 882, 1, '2013-07-06 05:16:46'),
(488, 883, 1, '2013-07-06 05:17:13'),
(489, 884, 1, '2013-07-06 05:17:37'),
(490, 885, 1, '2013-07-06 05:18:03'),
(491, 886, 1, '2013-07-06 05:18:20'),
(492, 887, 1, '2013-07-06 05:19:00'),
(493, 888, 1, '2013-07-06 05:19:27'),
(494, 889, 1, '2013-07-06 05:19:45'),
(495, 890, 1, '2013-07-06 05:20:04'),
(496, 891, 1, '2013-07-06 05:20:25'),
(497, 892, 1, '2013-07-06 05:20:47'),
(498, 893, 1, '2013-07-06 05:21:05'),
(499, 894, 1, '2013-07-06 05:21:21'),
(500, 895, 1, '2013-07-06 05:21:42'),
(501, 896, 1, '2013-07-06 05:22:10'),
(502, 897, 1, '2013-07-06 05:22:31'),
(503, 898, 1, '2013-07-06 05:22:46'),
(504, 899, 1, '2013-07-06 05:23:02'),
(505, 900, 1, '2013-07-06 05:23:26'),
(506, 901, 1, '2013-07-06 05:23:43'),
(507, 902, 1, '2013-07-06 05:24:05'),
(508, 903, 1, '2013-07-06 05:24:20'),
(509, 904, 1, '2013-07-06 05:24:35'),
(510, 905, 1, '2013-07-06 05:25:12'),
(511, 906, 1, '2013-07-06 05:25:29'),
(512, 907, 1, '2013-07-06 05:25:45'),
(513, 908, 1, '2013-07-06 05:26:05'),
(514, 909, 1, '2013-07-06 05:26:19'),
(515, 910, 1, '2013-07-06 05:26:37'),
(516, 911, 1, '2013-07-06 05:26:54'),
(517, 912, 1, '2013-07-06 05:27:11'),
(518, 913, 1, '2013-07-06 05:27:42'),
(519, 914, 1, '2013-07-06 05:27:59'),
(520, 915, 1, '2013-07-06 05:28:17'),
(521, 916, 1, '2013-07-06 05:28:33'),
(522, 917, 1, '2013-07-06 05:28:49'),
(523, 918, 1, '2013-07-06 05:29:06'),
(524, 919, 1, '2013-07-06 05:29:24'),
(525, 920, 1, '2013-07-06 05:29:41'),
(526, 921, 1, '2013-07-07 03:44:56'),
(527, 922, 1, '2013-07-07 03:45:15'),
(528, 923, 1, '2013-07-07 03:45:32'),
(529, 924, 1, '2013-07-07 03:45:50'),
(530, 926, 1, '2013-07-07 03:46:10'),
(531, 925, 1, '2013-07-07 03:46:31'),
(532, 927, 1, '2013-07-07 03:46:49'),
(533, 928, 1, '2013-07-07 03:47:08'),
(534, 929, 1, '2013-07-07 03:47:34'),
(535, 930, 1, '2013-07-07 03:47:53'),
(536, 931, 1, '2013-07-07 03:48:20'),
(537, 932, 1, '2013-07-07 03:48:37'),
(538, 933, 1, '2013-07-07 03:48:54'),
(539, 934, 1, '2013-07-07 03:49:10'),
(540, 935, 1, '2013-07-07 03:49:47'),
(541, 936, 1, '2013-07-07 03:50:05'),
(542, 937, 1, '2013-07-07 03:50:20'),
(543, 938, 1, '2013-07-07 03:50:52'),
(544, 939, 1, '2013-07-07 03:51:19'),
(545, 940, 1, '2013-07-07 03:51:42'),
(546, 941, 1, '2013-07-07 03:51:58'),
(547, 942, 1, '2013-07-07 03:52:17'),
(548, 943, 1, '2013-07-07 03:52:33'),
(549, 944, 1, '2013-07-07 03:52:49'),
(550, 945, 1, '2013-07-07 03:53:07'),
(551, 946, 1, '2013-07-07 03:53:28'),
(552, 947, 1, '2013-07-07 03:53:54'),
(553, 948, 1, '2013-07-07 03:54:11'),
(554, 949, 1, '2013-07-07 03:54:28'),
(555, 950, 1, '2013-07-07 03:54:44'),
(556, 951, 1, '2013-07-07 03:55:23'),
(557, 952, 1, '2013-07-07 03:56:34'),
(558, 953, 1, '2013-07-07 03:56:57'),
(559, 954, 1, '2013-07-07 03:57:50'),
(560, 955, 1, '2013-07-07 03:58:08'),
(561, 956, 1, '2013-07-07 03:58:34'),
(562, 957, 1, '2013-07-07 03:58:51'),
(563, 958, 1, '2013-07-07 03:59:13'),
(564, 959, 1, '2013-07-07 03:59:31'),
(565, 960, 1, '2013-07-07 03:59:48'),
(566, 961, 1, '2013-07-07 04:00:08'),
(567, 962, 1, '2013-07-07 04:00:25'),
(568, 963, 1, '2013-07-07 04:00:46'),
(569, 964, 1, '2013-07-07 04:01:13'),
(570, 965, 1, '2013-07-07 04:01:30'),
(571, 966, 1, '2013-07-07 04:02:09'),
(572, 967, 1, '2013-07-07 04:02:25'),
(573, 968, 1, '2013-07-07 04:03:02'),
(574, 969, 1, '2013-07-07 04:03:22'),
(575, 970, 1, '2013-07-07 04:03:39'),
(576, 971, 1, '2013-07-07 04:03:54'),
(577, 972, 1, '2013-07-07 04:04:10'),
(578, 973, 1, '2013-07-07 04:04:26'),
(579, 974, 1, '2013-07-07 04:04:43'),
(580, 975, 1, '2013-07-07 04:05:06'),
(581, 976, 1, '2013-07-07 04:05:21'),
(582, 977, 1, '2013-07-07 04:05:38'),
(583, 978, 1, '2013-07-07 04:05:53'),
(584, 979, 1, '2013-07-07 04:06:10'),
(585, 980, 2, '2013-07-07 04:07:02'),
(586, 981, 1, '2013-07-07 04:07:21'),
(587, 982, 1, '2013-07-07 04:07:57'),
(588, 983, 1, '2013-07-07 04:08:17'),
(589, 984, 1, '2013-07-07 04:08:34'),
(590, 985, 1, '2013-07-07 04:08:52'),
(591, 986, 1, '2013-07-07 04:09:07'),
(592, 987, 1, '2013-07-07 04:18:05'),
(593, 988, 1, '2013-07-07 04:18:22'),
(594, 989, 1, '2013-07-07 04:18:38'),
(595, 990, 1, '2013-07-07 04:18:56'),
(596, 991, 1, '2013-07-07 04:19:25'),
(597, 992, 1, '2013-07-07 04:19:42'),
(598, 993, 1, '2013-07-07 04:20:03'),
(599, 994, 1, '2013-07-07 04:20:22'),
(600, 995, 1, '2013-07-07 04:20:43'),
(601, 996, 1, '2013-07-07 04:21:09'),
(602, 997, 1, '2013-07-07 04:21:26'),
(603, 998, 1, '2013-07-07 04:21:40'),
(604, 999, 1, '2013-07-07 04:22:08'),
(605, 1000, 1, '2013-07-07 04:22:34'),
(606, 1001, 1, '2013-07-07 04:22:50'),
(607, 1002, 1, '2013-07-07 04:23:41'),
(608, 1003, 1, '2013-07-07 04:23:58'),
(609, 1004, 1, '2013-07-07 04:24:15'),
(610, 1005, 1, '2013-07-07 04:24:53'),
(611, 1006, 1, '2013-07-07 04:25:10'),
(612, 1007, 1, '2013-07-07 04:25:25'),
(613, 1008, 1, '2013-07-07 04:25:45'),
(614, 1009, 1, '2013-07-07 04:26:01'),
(615, 1010, 1, '2013-07-07 04:26:18'),
(616, 1011, 1, '2013-07-07 04:26:39'),
(617, 1012, 1, '2013-07-07 04:27:08'),
(618, 1013, 1, '2013-07-07 04:27:23'),
(619, 1014, 1, '2013-07-07 04:27:40'),
(620, 1015, 1, '2013-07-07 04:28:02'),
(621, 1016, 1, '2013-07-07 04:28:25'),
(622, 1017, 1, '2013-07-07 04:28:42'),
(623, 1018, 1, '2013-07-07 04:28:58'),
(624, 1019, 1, '2013-07-07 04:30:04'),
(625, 1020, 1, '2013-07-07 04:30:23'),
(626, 1216, 1, '2013-07-07 04:30:59'),
(627, 1021, 1, '2013-07-07 04:31:29'),
(628, 1022, 1, '2013-07-07 04:31:57'),
(629, 1023, 1, '2013-07-07 04:32:15'),
(630, 1024, 1, '2013-07-07 04:32:36'),
(631, 1025, 1, '2013-07-07 04:49:03'),
(632, 1026, 1, '2013-07-07 04:49:18'),
(633, 1027, 1, '2013-07-07 04:49:39'),
(634, 1028, 1, '2013-07-07 04:49:54'),
(635, 1029, 1, '2013-07-07 04:50:09'),
(636, 1030, 1, '2013-07-07 04:50:58'),
(637, 1031, 1, '2013-07-07 04:51:16'),
(638, 1032, 1, '2013-07-07 04:51:31'),
(639, 1033, 1, '2013-07-07 04:51:46'),
(640, 1034, 1, '2013-07-07 04:52:07'),
(641, 1035, 1, '2013-07-07 04:52:26'),
(642, 1036, 1, '2013-07-07 04:52:41'),
(643, 1037, 1, '2013-07-07 04:52:56'),
(644, 1038, 1, '2013-07-07 04:53:11'),
(645, 1039, 1, '2013-07-07 04:53:26'),
(646, 1040, 1, '2013-07-07 04:53:41'),
(647, 1041, 1, '2013-07-07 04:54:03'),
(648, 1042, 1, '2013-07-07 04:54:32'),
(649, 1043, 1, '2013-07-07 04:54:51'),
(650, 1044, 1, '2013-07-07 04:55:08'),
(651, 1045, 1, '2013-07-07 04:55:26'),
(652, 1046, 1, '2013-07-07 04:56:00'),
(653, 1047, 1, '2013-07-07 04:56:14'),
(654, 1048, 1, '2013-07-07 04:56:32'),
(655, 1049, 1, '2013-07-07 04:56:48'),
(656, 1050, 1, '2013-07-07 04:57:07'),
(657, 1051, 1, '2013-07-07 04:57:34'),
(658, 1052, 1, '2013-07-09 04:06:52'),
(659, 1053, 1, '2013-07-09 04:07:09'),
(660, 1054, 1, '2013-07-09 04:17:51'),
(661, 1055, 1, '2013-07-09 04:30:45'),
(662, 1056, 1, '2013-07-09 04:31:08'),
(663, 1057, 1, '2013-07-09 04:31:30'),
(664, 1058, 1, '2013-07-09 04:31:59'),
(665, 1059, 1, '2013-07-09 04:32:59'),
(666, 1060, 1, '2013-07-09 04:33:19'),
(667, 1061, 1, '2013-07-09 04:34:49'),
(668, 1062, 1, '2013-07-09 04:35:24'),
(669, 1063, 1, '2013-07-09 04:35:46'),
(670, 1064, 1, '2013-07-09 04:36:07'),
(671, 1065, 1, '2013-07-09 04:36:25'),
(672, 1066, 1, '2013-07-09 04:37:15'),
(673, 1067, 1, '2013-07-09 04:37:47'),
(674, 1068, 1, '2013-07-09 04:38:01'),
(675, 1069, 1, '2013-07-09 04:38:17'),
(676, 1070, 1, '2013-07-09 04:38:35'),
(677, 1071, 1, '2013-07-09 04:38:53'),
(678, 1072, 1, '2013-07-09 04:39:54'),
(679, 1073, 1, '2013-07-09 04:40:12'),
(680, 1074, 1, '2013-07-09 04:40:27'),
(681, 1075, 1, '2013-07-09 04:40:51'),
(682, 1076, 1, '2013-07-09 04:41:07'),
(683, 1077, 1, '2013-07-09 04:41:24'),
(684, 1078, 1, '2013-07-09 04:41:39'),
(685, 1079, 1, '2013-07-09 04:41:56'),
(686, 1080, 1, '2013-07-09 04:42:12'),
(687, 1081, 1, '2013-07-09 04:42:29'),
(688, 1082, 1, '2013-07-09 04:42:45'),
(689, 1083, 1, '2013-07-09 04:43:04'),
(690, 1084, 1, '2013-07-09 04:43:22'),
(691, 1085, 1, '2013-07-09 04:43:45'),
(692, 1086, 1, '2013-07-09 04:44:01'),
(693, 1087, 1, '2013-07-09 04:44:19'),
(694, 1088, 1, '2013-07-09 04:44:34'),
(695, 1089, 1, '2013-07-09 04:44:52'),
(696, 1090, 1, '2013-07-09 04:45:08'),
(697, 1091, 1, '2013-07-09 04:45:35'),
(698, 1092, 1, '2013-07-09 04:45:53'),
(699, 1093, 1, '2013-07-09 04:49:04'),
(700, 1094, 1, '2013-07-09 04:49:20'),
(701, 1095, 1, '2013-07-09 04:49:36'),
(702, 1096, 1, '2013-07-09 04:49:53'),
(703, 1097, 1, '2013-07-09 04:50:10'),
(704, 1098, 1, '2013-07-09 04:50:25'),
(705, 1099, 1, '2013-07-09 04:50:41'),
(706, 1100, 1, '2013-07-09 04:50:58'),
(707, 1101, 1, '2013-07-09 04:51:30'),
(708, 1102, 1, '2013-07-09 04:51:47'),
(709, 1103, 1, '2013-07-09 04:52:12'),
(710, 1104, 1, '2013-07-09 04:52:28'),
(711, 1105, 1, '2013-07-09 04:52:43'),
(712, 1106, 1, '2013-07-09 04:53:03'),
(713, 1107, 1, '2013-07-09 04:53:20'),
(714, 1108, 1, '2013-07-09 04:55:54'),
(715, 1109, 1, '2013-07-09 04:56:12'),
(716, 1110, 1, '2013-07-09 04:56:38'),
(717, 1111, 1, '2013-07-09 04:57:04'),
(718, 1112, 1, '2013-07-09 04:57:24'),
(719, 1113, 1, '2013-07-09 04:57:40'),
(720, 1114, 1, '2013-07-09 04:57:58'),
(721, 1115, 1, '2013-07-09 04:58:21'),
(722, 1116, 1, '2013-07-09 04:58:38'),
(723, 1117, 1, '2013-07-09 04:58:54'),
(724, 1118, 1, '2013-07-09 04:59:07'),
(725, 1119, 1, '2013-07-09 04:59:24'),
(726, 1120, 1, '2013-07-09 04:59:38'),
(727, 1121, 1, '2013-07-09 05:00:01'),
(728, 1122, 1, '2013-07-09 05:00:17'),
(729, 1123, 1, '2013-07-09 05:00:32'),
(730, 1124, 1, '2013-07-09 05:01:15'),
(731, 1125, 1, '2013-07-09 05:01:31'),
(732, 1126, 1, '2013-07-09 05:01:48'),
(733, 1127, 1, '2013-07-09 05:04:13'),
(734, 1128, 1, '2013-07-09 05:04:29'),
(735, 1129, 1, '2013-07-09 05:04:46'),
(736, 1130, 1, '2013-07-09 05:05:00'),
(737, 1131, 1, '2013-07-09 05:05:14'),
(738, 1132, 1, '2013-07-09 05:05:51'),
(739, 1133, 1, '2013-07-09 05:06:06'),
(740, 1134, 1, '2013-07-09 05:06:20'),
(741, 1135, 1, '2013-07-09 05:06:38'),
(742, 1136, 1, '2013-07-09 05:06:55'),
(743, 1137, 1, '2013-07-09 05:07:11'),
(744, 1138, 1, '2013-07-09 05:07:28'),
(745, 1139, 1, '2013-07-09 05:07:43'),
(746, 1140, 1, '2013-07-09 05:08:33'),
(747, 1141, 1, '2013-07-09 05:08:48'),
(748, 1142, 1, '2013-07-09 05:09:03'),
(749, 1143, 1, '2013-07-09 05:09:19'),
(750, 1144, 1, '2013-07-09 05:09:37'),
(751, 1145, 1, '2013-07-09 05:11:10'),
(752, 1146, 1, '2013-07-09 05:11:24'),
(753, 1147, 1, '2013-07-09 05:11:41'),
(754, 1148, 1, '2013-07-09 05:11:57'),
(755, 1149, 1, '2013-07-09 05:12:13'),
(756, 1150, 1, '2013-07-09 05:12:28'),
(757, 1151, 1, '2013-07-09 05:12:45'),
(758, 1152, 1, '2013-07-09 05:13:00'),
(759, 1153, 1, '2013-07-09 05:13:15'),
(760, 1154, 1, '2013-07-09 05:13:29'),
(761, 1155, 1, '2013-07-09 05:13:44'),
(762, 1156, 1, '2013-07-09 05:13:57'),
(763, 1157, 1, '2013-07-09 05:14:18'),
(764, 1158, 1, '2013-07-09 05:14:33'),
(765, 1159, 1, '2013-07-09 05:14:48'),
(766, 1160, 1, '2013-07-09 05:15:03'),
(767, 1161, 1, '2013-07-09 05:15:23'),
(768, 1162, 1, '2013-07-09 05:15:42'),
(769, 1163, 1, '2013-07-09 05:15:57'),
(770, 1164, 1, '2013-07-09 05:16:12'),
(771, 1165, 1, '2013-07-09 05:16:28'),
(772, 1166, 1, '2013-07-09 05:16:47'),
(773, 1167, 1, '2013-07-09 05:17:01'),
(774, 1168, 1, '2013-07-09 05:17:23'),
(775, 1169, 1, '2013-07-09 05:17:38'),
(776, 1170, 1, '2013-07-09 05:17:56'),
(777, 1171, 1, '2013-07-09 05:18:11'),
(778, 1172, 1, '2013-07-09 05:18:49'),
(779, 1173, 1, '2013-07-09 05:19:07'),
(780, 1174, 1, '2013-07-09 05:19:22'),
(781, 1175, 1, '2013-07-09 13:54:26'),
(782, 1176, 2, '2013-07-09 14:19:31'),
(783, 1177, 2, '2013-07-09 14:19:49'),
(784, 1178, 1, '2013-07-09 14:20:04'),
(785, 1179, 1, '2013-07-09 14:20:36'),
(786, 1180, 1, '2013-07-09 14:20:53'),
(787, 1181, 2, '2013-07-09 14:21:11'),
(788, 1182, 1, '2013-07-09 14:21:28'),
(789, 1183, 2, '2013-07-09 14:22:20'),
(790, 1184, 1, '2013-07-09 14:22:37'),
(791, 1185, 1, '2013-07-09 14:22:53'),
(792, 1186, 2, '2013-07-09 14:23:08'),
(793, 1187, 1, '2013-07-09 14:23:25'),
(794, 1188, 2, '2013-07-09 14:23:39'),
(795, 1189, 2, '2013-07-09 14:23:57'),
(796, 1190, 1, '2013-07-09 14:24:13'),
(797, 1191, 2, '2013-07-09 14:24:32'),
(798, 1192, 1, '2013-07-09 14:25:06'),
(799, 1193, 2, '2013-07-09 14:25:21'),
(800, 1194, 1, '2013-07-09 14:25:42'),
(801, 1195, 1, '2013-07-09 14:25:57'),
(802, 1196, 2, '2013-07-09 14:26:12'),
(803, 1197, 1, '2013-07-09 14:26:28'),
(804, 1198, 2, '2013-07-09 14:26:45'),
(805, 1199, 1, '2013-07-09 14:26:59'),
(806, 1200, 1, '2013-07-09 14:27:16'),
(807, 1201, 1, '2013-07-09 14:27:32'),
(808, 1202, 2, '2013-07-09 14:27:52'),
(809, 1203, 1, '2013-07-09 14:28:07'),
(810, 1204, 2, '2013-07-09 14:28:22'),
(811, 1205, 2, '2013-07-09 14:28:40'),
(812, 1206, 1, '2013-07-09 14:28:56'),
(813, 1207, 2, '2013-07-09 14:29:13'),
(814, 1208, 2, '2013-07-09 14:29:33'),
(815, 1209, 1, '2013-07-09 14:29:58'),
(816, 1210, 1, '2013-07-09 14:30:17'),
(817, 1211, 2, '2013-07-09 14:30:32'),
(818, 1212, 2, '2013-07-09 14:30:52'),
(819, 1213, 2, '2013-07-09 14:31:08'),
(820, 1214, 1, '2013-07-09 14:31:23'),
(821, 1215, 2, '2013-07-09 14:31:37'),
(822, 1217, 1, '2013-07-09 14:32:02'),
(823, 1218, 2, '2013-07-09 14:32:12'),
(824, 1219, 2, '2013-07-09 14:32:28'),
(825, 1220, 2, '2013-07-09 14:32:46'),
(826, 1221, 2, '2013-07-09 14:33:34'),
(827, 1222, 2, '2013-07-09 14:33:50'),
(828, 1223, 2, '2013-07-09 14:34:06'),
(829, 1224, 2, '2013-07-09 14:34:22'),
(830, 1225, 2, '2013-07-09 14:34:43'),
(831, 1226, 1, '2013-07-09 14:35:02'),
(832, 1227, 1, '2013-07-09 14:35:19'),
(833, 1228, 2, '2013-07-09 14:35:39'),
(834, 1229, 2, '2013-07-09 14:36:00'),
(835, 1230, 1, '2013-07-09 14:36:14'),
(836, 1231, 2, '2013-07-09 14:36:32'),
(837, 1232, 1, '2013-07-09 14:36:49'),
(838, 1233, 2, '2013-07-09 14:37:06'),
(839, 1234, 1, '2013-07-09 14:37:30'),
(840, 1235, 2, '2013-07-09 14:38:49'),
(841, 1236, 2, '2013-07-09 14:39:08'),
(842, 1237, 1, '2013-07-09 14:39:24'),
(843, 1238, 2, '2013-07-09 14:41:13'),
(844, 1239, 1, '2013-07-09 14:41:30'),
(845, 1240, 2, '2013-07-09 14:41:44'),
(846, 1241, 1, '2013-07-09 14:41:59'),
(847, 1242, 2, '2013-07-09 14:42:14'),
(848, 1243, 1, '2013-07-09 14:42:33'),
(849, 1244, 1, '2013-07-09 14:42:57'),
(850, 1245, 2, '2013-07-09 14:43:11'),
(851, 1246, 1, '2013-07-09 14:43:31'),
(852, 1247, 2, '2013-07-09 14:44:37'),
(853, 1248, 1, '2013-07-09 14:44:51'),
(854, 1249, 2, '2013-07-09 14:45:06'),
(855, 1250, 1, '2013-07-09 14:45:21'),
(856, 1251, 1, '2013-07-09 14:45:42'),
(857, 1252, 2, '2013-07-09 14:45:58'),
(858, 1253, 2, '2013-07-09 14:46:14'),
(859, 1254, 1, '2013-07-09 14:46:32'),
(860, 1255, 2, '2013-07-09 14:46:49'),
(861, 1256, 1, '2013-07-09 14:47:05'),
(862, 1257, 2, '2013-07-09 14:47:21'),
(863, 1258, 1, '2013-07-09 14:47:44'),
(864, 1259, 2, '2013-07-09 14:48:00'),
(865, 1260, 1, '2013-07-09 14:48:17'),
(866, 1261, 1, '2013-07-09 14:48:42'),
(867, 1262, 2, '2013-07-09 14:48:58'),
(868, 1263, 1, '2013-07-09 14:49:18'),
(869, 1264, 2, '2013-07-09 14:49:38'),
(870, 1265, 2, '2013-07-09 14:49:55'),
(871, 1266, 2, '2013-07-09 14:50:11'),
(872, 1267, 1, '2013-07-09 14:50:28'),
(873, 1268, 2, '2013-07-09 14:50:46'),
(874, 1269, 2, '2013-07-09 14:51:02'),
(875, 1270, 1, '2013-07-09 14:51:18'),
(876, 1271, 2, '2013-07-09 14:51:33'),
(877, 1272, 2, '2013-07-09 14:52:31'),
(878, 1273, 2, '2013-07-09 14:52:49'),
(879, 1274, 1, '2013-07-09 14:53:07'),
(880, 1275, 2, '2013-07-09 14:53:23'),
(881, 1276, 2, '2013-07-09 14:53:49'),
(882, 1277, 2, '2013-07-09 16:09:09'),
(883, 1278, 2, '2013-07-09 16:09:30'),
(884, 1279, 2, '2013-07-09 16:09:53'),
(885, 1280, 2, '2013-07-09 16:10:16'),
(886, 1281, 2, '2013-07-09 16:10:36'),
(887, 1282, 2, '2013-07-09 16:10:59'),
(888, 1283, 2, '2013-07-09 16:11:22'),
(889, 1284, 2, '2013-07-09 16:11:42'),
(890, 1285, 2, '2013-07-09 16:12:01'),
(891, 1286, 2, '2013-07-09 16:12:25'),
(892, 1287, 2, '2013-07-09 16:12:49'),
(893, 1288, 2, '2013-07-09 16:13:09'),
(894, 1289, 2, '2013-07-09 16:13:28'),
(895, 1290, 2, '2013-07-09 16:13:49'),
(896, 1291, 2, '2013-07-09 16:14:11'),
(897, 1292, 2, '2013-07-09 16:14:40'),
(898, 1293, 2, '2013-07-09 16:15:26'),
(899, 1294, 2, '2013-07-09 16:15:45'),
(900, 1295, 2, '2013-07-09 16:16:06'),
(901, 1296, 2, '2013-07-09 16:16:27'),
(902, 1297, 2, '2013-07-09 16:16:47'),
(903, 1298, 2, '2013-07-09 16:17:07'),
(904, 1299, 2, '2013-07-09 16:17:35'),
(905, 1300, 2, '2013-07-09 16:17:55'),
(906, 1301, 1, '2013-07-09 16:18:20'),
(907, 1302, 1, '2013-07-09 16:18:47'),
(908, 1304, 1, '2013-07-09 16:19:36'),
(909, 1303, 1, '2013-07-09 16:20:06'),
(910, 1305, 2, '2013-07-09 16:20:33'),
(911, 1306, 1, '2013-07-09 16:22:34'),
(912, 1307, 1, '2013-07-09 16:23:01'),
(913, 1308, 1, '2013-07-09 16:23:18'),
(914, 1309, 1, '2013-07-09 16:23:34'),
(915, 1310, 1, '2013-07-09 16:23:55'),
(916, 1311, 1, '2013-07-09 16:24:11'),
(917, 1312, 1, '2013-07-09 16:24:26'),
(918, 1313, 1, '2013-07-09 16:24:45'),
(919, 1314, 1, '2013-07-09 16:25:29'),
(920, 1315, 1, '2013-07-09 16:25:46'),
(921, 1316, 1, '2013-07-09 16:26:03'),
(922, 1317, 1, '2013-07-09 16:26:26'),
(923, 1318, 1, '2013-07-09 16:30:50'),
(924, 1319, 1, '2013-07-09 16:31:06'),
(925, 1320, 1, '2013-07-09 16:31:25'),
(926, 1321, 1, '2013-07-11 03:41:33'),
(927, 1322, 1, '2013-07-11 03:41:51'),
(928, 1323, 2, '2013-07-11 03:42:09'),
(929, 1324, 2, '2013-07-11 03:42:25'),
(930, 1325, 2, '2013-07-11 03:43:31'),
(931, 1326, 2, '2013-07-11 03:43:59'),
(932, 1327, 2, '2013-07-11 03:44:15'),
(933, 1328, 2, '2013-07-11 03:44:34'),
(934, 1329, 2, '2013-07-11 03:44:51'),
(935, 1330, 2, '2013-07-11 03:45:09'),
(936, 1331, 2, '2013-07-11 03:45:23'),
(937, 1332, 1, '2013-07-11 03:45:40'),
(938, 1333, 1, '2013-07-11 03:45:57'),
(939, 1334, 1, '2013-07-11 03:46:13'),
(940, 1335, 2, '2013-07-11 03:46:30'),
(941, 1336, 1, '2013-07-11 03:46:46'),
(942, 1337, 1, '2013-07-11 03:47:06'),
(943, 1338, 1, '2013-07-11 03:47:30'),
(944, 1339, 2, '2013-07-11 03:47:44'),
(945, 1340, 1, '2013-07-11 03:48:00'),
(946, 1341, 1, '2013-07-11 03:48:15'),
(947, 1342, 1, '2013-07-11 03:48:32'),
(948, 1343, 2, '2013-07-11 03:48:50'),
(949, 1344, 1, '2013-07-11 03:49:06'),
(950, 1345, 1, '2013-07-11 03:49:22'),
(951, 1346, 1, '2013-07-11 03:49:37'),
(952, 1347, 2, '2013-07-11 03:49:55'),
(953, 1348, 1, '2013-07-11 03:50:14'),
(954, 1349, 2, '2013-07-11 03:50:30'),
(955, 1350, 1, '2013-07-11 03:50:46'),
(956, 1351, 1, '2013-07-11 03:51:05'),
(957, 1352, 2, '2013-07-11 03:51:20'),
(958, 1353, 2, '2013-07-11 03:51:37'),
(959, 1354, 1, '2013-07-11 03:51:53'),
(960, 1355, 2, '2013-07-11 03:52:50'),
(961, 1356, 1, '2013-07-11 03:53:06'),
(962, 1357, 2, '2013-07-11 03:53:21'),
(963, 1358, 1, '2013-07-11 03:53:57'),
(964, 1359, 2, '2013-07-11 03:54:16'),
(965, 1360, 1, '2013-07-11 03:54:33'),
(966, 1361, 2, '2013-07-11 03:54:49'),
(967, 1362, 1, '2013-07-11 03:55:24'),
(968, 1363, 2, '2013-07-11 03:55:43'),
(969, 1364, 1, '2013-07-11 03:56:04'),
(970, 1365, 1, '2013-07-11 03:56:26'),
(971, 1366, 2, '2013-07-11 03:56:46'),
(972, 1367, 1, '2013-07-11 03:57:03'),
(973, 1368, 2, '2013-07-11 03:57:21'),
(974, 1369, 1, '2013-07-11 03:57:39'),
(975, 1370, 1, '2013-07-11 03:58:05'),
(976, 1371, 2, '2013-07-11 03:58:21'),
(977, 1372, 1, '2013-07-11 03:58:58'),
(978, 1373, 1, '2013-07-11 03:59:40'),
(979, 1374, 2, '2013-07-11 04:00:01'),
(980, 1375, 2, '2013-07-11 04:00:18'),
(981, 1376, 1, '2013-07-11 04:00:33'),
(982, 1377, 2, '2013-07-11 04:00:52'),
(983, 1378, 1, '2013-07-11 04:01:11'),
(984, 1379, 2, '2013-07-11 04:01:27'),
(985, 1380, 1, '2013-07-11 04:01:49'),
(986, 1381, 1, '2013-07-11 04:02:04'),
(987, 1382, 2, '2013-07-11 04:02:19'),
(988, 1383, 1, '2013-07-11 04:02:37'),
(989, 1384, 1, '2013-07-11 04:02:54'),
(990, 1385, 2, '2013-07-11 04:03:10'),
(991, 1386, 1, '2013-07-11 04:03:29'),
(992, 1387, 2, '2013-07-11 04:03:46'),
(993, 1388, 1, '2013-07-11 04:04:32'),
(994, 1389, 1, '2013-07-11 04:06:05'),
(995, 1390, 2, '2013-07-11 04:06:22'),
(996, 1391, 1, '2013-07-11 04:06:42'),
(997, 1392, 1, '2013-07-11 04:07:02'),
(998, 1393, 1, '2013-07-11 04:07:36'),
(999, 1394, 1, '2013-07-11 04:07:52'),
(1000, 1395, 1, '2013-07-11 04:08:11'),
(1001, 1396, 1, '2013-07-11 04:08:42'),
(1002, 1397, 1, '2013-07-11 04:08:58'),
(1003, 1398, 1, '2013-07-11 04:09:41'),
(1004, 1399, 1, '2013-07-11 04:09:59'),
(1005, 1400, 1, '2013-07-11 04:10:14'),
(1006, 1401, 1, '2013-07-11 04:10:30'),
(1007, 1402, 1, '2013-07-11 04:10:47'),
(1008, 1403, 1, '2013-07-11 04:11:05'),
(1009, 1404, 1, '2013-07-11 04:11:21'),
(1010, 1405, 2, '2013-07-11 04:11:40'),
(1011, 1406, 1, '2013-07-11 04:11:57'),
(1012, 1407, 1, '2013-07-11 04:12:13'),
(1013, 1408, 1, '2013-07-11 04:12:28'),
(1014, 1409, 1, '2013-07-11 04:12:43'),
(1015, 1410, 1, '2013-07-11 04:12:58'),
(1016, 1411, 1, '2013-07-11 04:13:24'),
(1017, 1412, 1, '2013-07-11 04:13:41'),
(1018, 1413, 1, '2013-07-11 04:13:56'),
(1019, 1414, 1, '2013-07-11 04:14:11'),
(1020, 1415, 1, '2013-07-11 04:14:27'),
(1021, 1416, 1, '2013-07-11 04:14:57'),
(1022, 1417, 1, '2013-07-11 04:15:14'),
(1023, 1418, 1, '2013-07-11 04:15:31'),
(1024, 1419, 1, '2013-07-11 04:15:48'),
(1025, 1420, 1, '2013-07-11 04:16:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formasdepago`
--
-- Creación: 20-02-2013 a las 03:24:52
-- Última actualización: 26-07-2013 a las 03:40:21
--

DROP TABLE IF EXISTS `formasdepago`;
CREATE TABLE IF NOT EXISTS `formasdepago` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` text,
  `imagen` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `formasdepago`
--

INSERT INTO `formasdepago` (`id`, `texto`, `imagen`) VALUES
(6, '<p style="text-align: justify;"><span style="color: rgb(255, 0, 0);"><strong><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; line-height: 20.390625px; text-align: justify; font-family: arial, helvetica, sans-serif;">Pago en efectivo desde cualquier pa&iacute;s del mundo.</span></strong></span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; line-height: 20.390625px; text-align: justify; font-family: arial, helvetica, sans-serif; color: rgb(90, 90, 90);"> Transferencia de dinero r&aacute;pida y segura por medio de&nbsp;<strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;">Western Union</strong>&nbsp;en uno de sus 400.000 agentes en todo el mundo. Valor <strong>USD $125.00</strong> o el equivalente en la moneda de su pais. Para p</span><span style="border-collapse: collapse; line-height: 17px; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif;">agar en efectivo por&nbsp;<b>Western Union</b>&nbsp;es muy f&aacute;cil y r&aacute;pido, lo &uacute;nico que debe hacer es dirigirse a una agencia en tu localidad y entregar los siguientes datos del destinatario y el dinero.</span></p>\r\n<div style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 13px;">\r\n<div style="color: rgb(80, 0, 80);">\r\n<div style="border-collapse: collapse; line-height: 17px;"><font style="line-height: normal;"><span style="line-height: 17px; font-family: arial, helvetica, sans-serif; font-size: 10pt; color: rgb(90, 90, 90);">1) Nombres:&nbsp;<strong>Arturo Jose</strong></span><br style="line-height: 17px;" />\r\n<span style="line-height: 17px; font-family: arial, helvetica, sans-serif; font-size: 10pt; color: rgb(90, 90, 90);">2) Apellidos:&nbsp;<strong>Linero Jacquin</strong></span><br style="line-height: 17px;" />\r\n<span style="line-height: 17px; font-family: arial, helvetica, sans-serif; font-size: 10pt; color: rgb(90, 90, 90);">3) Pa&iacute;s:&nbsp;<strong>Colombia</strong></span></font></div>\r\n</div>\r\n<div style="border-collapse: collapse; line-height: 17px;"><font style="line-height: normal;"><span style="line-height: 17px; font-family: arial, helvetica, sans-serif; font-size: 10pt; color: rgb(90, 90, 90);">4) Ciudad:&nbsp;<b>Bogota</b></span></font></div>\r\n<div style="border-collapse: collapse;"><font color="#5a5a5a" face="arial, helvetica, sans-serif"><span style="line-height: 17px;">5)&nbsp;</span></font><font color="#5a5a5a" face="arial, helvetica, sans-serif"><span style="line-height: 17px;">Direcci&oacute;n</span></font><font color="#5a5a5a" face="arial, helvetica, sans-serif"><span style="line-height: 17px;">:&nbsp;<b>Suba K118-15</b></span></font></div>\r\n<div style="border-collapse: collapse;"><font color="#5a5a5a" face="arial, helvetica, sans-serif"><span style="line-height: 17px;">6)&nbsp;</span></font><font color="#5a5a5a" face="arial, helvetica, sans-serif"><span style="line-height: 17px;">Tel&eacute;fono</span></font><font color="#5a5a5a" face="arial, helvetica, sans-serif"><span style="line-height: 17px;">:&nbsp;<b>57-3017358348</b></span></font></div>\r\n<div style="color: rgb(80, 0, 80);">\r\n<div style="text-align: justify;">&nbsp;</div>\r\n<div style="text-align: justify;"><span style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; line-height: 17px; text-align: left;">Una vez realizado el pago por favor escanear el recibo de western union y adjuntarlo en el boton superior que dice&nbsp;</span><strong style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; line-height: 17px; text-align: left;">&quot;Adjuntar soporte de pago&quot;</strong><span style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; line-height: 17px; text-align: left;">&nbsp;y en aproximadamente 5 minutos le enviaremos su Clave de acceso a su correo&nbsp;electr&oacute;nico. Por favor guarde el recibo de&nbsp;consignaci&oacute;n&nbsp;para futura referencia y&nbsp;garant&iacute;a.</span></div>\r\n<div><span style="border-collapse: collapse; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; line-height: 17px;"><br />\r\n</span></div>\r\n<div style="text-align: justify;"><span style="border-collapse: collapse; font-family: arial, helvetica, sans-serif; line-height: 17px;"><font color="#5a5a5a">Buscar un agente o direcci&oacute;n de&nbsp;</font><b style="color: rgb(90, 90, 90);">Western Union</b><font color="#5a5a5a">&nbsp;en tu localidad, prueba buscando por pa&iacute;s y ciudad. Clic en el link: &nbsp;</font><a href="http://www.westernunion.com/" target="_blank" style="color: rgb(0, 0, 204);"><font color="#330099">http://www.westernunion.com</font></a></span></div>\r\n</div>\r\n</div>', '/img/645286769.png'),
(9, '<p style="text-align: justify;"><strong style="text-align: justify; color: rgb(255, 0, 0);"><span style="font-family: arial, sans-serif; font-size: 13px; border-collapse: collapse;"><font face="Arial"><span style="line-height: 15px;">Pago Exclusivo para Colombia.&nbsp;</span></font></span></strong><span style="text-align: justify; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; font-size: 13px; line-height: 20.390625px;">Consignaci&oacute;n o transferencia Bancolombia.&nbsp;</span><span style="text-align: justify; color: rgb(102, 102, 102);"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">Valor a consignar o transferir:&nbsp;</span><strong><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">$237.000 Pesos Colombianos.</span></strong></span><br style="color: rgb(80, 0, 80); font-family: arial, sans-serif; font-size: 13px; line-height: 17px;" />\r\n<br style="color: rgb(80, 0, 80); font-family: arial, sans-serif; font-size: 13px; line-height: 17px;" />\r\n<span style="font-size: small; border-collapse: collapse; line-height: 17px; font-family: arial, helvetica, sans-serif; color: rgb(90, 90, 90);">1) Banco:&nbsp;<strong>Bancolombia</strong></span><br style="color: rgb(80, 0, 80); font-family: arial, sans-serif; font-size: 13px; line-height: 17px;" />\r\n<span style="font-size: small; border-collapse: collapse; line-height: 17px; font-family: arial, helvetica, sans-serif; color: rgb(90, 90, 90);">2) Cuenta de ahorros: #&nbsp;<strong>51639929969</strong></span><br style="color: rgb(80, 0, 80); font-family: arial, sans-serif; font-size: 13px; line-height: 17px;" />\r\n<span style="font-size: small; border-collapse: collapse; line-height: 17px; font-family: arial, helvetica, sans-serif; color: rgb(90, 90, 90);">3) Titular:&nbsp;<strong>Arturo Linero</strong></span><br style="color: rgb(80, 0, 80); font-family: arial, sans-serif; font-size: 13px; line-height: 17px;" />\r\n<font color="#2a2a2a" face="Tahoma, Verdana, Arial, sans-serif" style="font-size: 13px;"><span style="border-collapse: collapse;">&nbsp;</span></font><br style="color: rgb(80, 0, 80); font-family: arial, sans-serif; font-size: 13px; line-height: 17px;" />\r\n<font color="#5a5a5a" face="arial, helvetica, sans-serif" style="font-size: 13px;"><span style="border-collapse: collapse; line-height: 17px;">Una vez consignado o transferido por favor escanear el recibo o comprobante de consignaci&oacute;n y adjuntarlo en el boton superior que dice&nbsp;<strong>&quot;Adjuntar soporte de pago&quot;</strong>&nbsp;y en aproximadamente 5 minutos le enviaremos su Clave de acceso a su correo&nbsp;electr&oacute;nico. Por favor guarde el recibo de&nbsp;consignaci&oacute;n&nbsp;para futura referencia y&nbsp;garant&iacute;a.</span></font>&nbsp;</p>', '/img/29648330.jpg'),
(7, '<p style="text-align: justify;"><strong style="font-family: Arial, Helvetica, sans-serif; line-height: 20px; text-align: justify; color: rgb(255, 0, 0);"><span style="font-family: arial, sans-serif; font-size: 13px; border-collapse: collapse;"><font face="Arial"><span style="line-height: 15px;">Pago Exclusivo para Venezuela.&nbsp;</span></font></span></strong><span style="text-align: justify; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; font-size: 13px; line-height: 20.390625px;">El&nbsp;</span><span style="font-family: Arial, Helvetica, sans-serif; line-height: 20px; text-align: justify; color: rgb(102, 102, 102);"><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">Valor a depositar en base a la tasa de cambio actual en Venezuela es de </span><strong><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;">2,675.00 Bs.&nbsp;</span></strong></span></p>\r\n<div style="font-family: arial, sans-serif; font-size: 13px; line-height: 20px; text-align: justify; color: rgb(80, 0, 80);">\r\n<div style="border-collapse: collapse; line-height: 17px;"><font style="line-height: normal;"><span style="line-height: 17px; font-family: arial, helvetica, sans-serif; font-size: 10pt; color: rgb(90, 90, 90);">1) Banco:&nbsp;<strong>MERCANTIL</strong></span><br style="line-height: 17px;" />\r\n<span style="line-height: 17px; font-family: arial, helvetica, sans-serif; font-size: 10pt; color: rgb(90, 90, 90);">2) Cuenta #:&nbsp;<strong>0105-0140-71-1140-066-587</strong></span><br style="line-height: 17px;" />\r\n<span style="line-height: 17px; font-family: arial, helvetica, sans-serif; font-size: 10pt; color: rgb(90, 90, 90);">3) A nombre de:&nbsp;<strong>Viajes Dolar, C.A</strong></span></font></div>\r\n</div>\r\n<div style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 13px; text-align: justify; border-collapse: collapse; line-height: 17px;"><font style="line-height: normal;"><span style="line-height: 17px; font-family: arial, helvetica, sans-serif; font-size: 10pt; color: rgb(90, 90, 90);">4) RIF:&nbsp;<b>J 29890955 2</b></span></font></div>\r\n<div style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 13px; text-align: justify; border-collapse: collapse; line-height: 17px;">&nbsp;</div>\r\n<div style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 13px; line-height: 20px; text-align: justify; border-collapse: collapse;"><span style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; line-height: 17px;">Una vez depositado por favor escanear el recibo o comprobante de deposito y adjuntarlo en el boton superior que dice&nbsp;</span><strong style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; line-height: 17px;">&quot;Adjuntar soporte de pago&quot;</strong><span style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; line-height: 17px;">&nbsp;y en aproximadamente 5 minutos le enviaremos su Clave de acceso a su correo&nbsp;electr&oacute;nico. Por favor guarde el recibo de&nbsp;consignaci&oacute;n&nbsp;para futura referencia y&nbsp;garant&iacute;a.</span></div>\r\n<p>&nbsp;</p>', '/img/030301088.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `helpdesk`
--
-- Creación: 20-02-2013 a las 03:24:52
-- Última actualización: 28-05-2013 a las 17:04:22
--

DROP TABLE IF EXISTS `helpdesk`;
CREATE TABLE IF NOT EXISTS `helpdesk` (
  `id` int(11) NOT NULL,
  `texto` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `helpdesk`
--

INSERT INTO `helpdesk` (`id`, `texto`) VALUES
(1, '<p style="text-align: justify;">para acceder al servicio de ayuda HelpDesk 24 horas del d&iacute;a.<br />\r\n<br />\r\nEste servicios es exclusivo para usuarios de peneperfecto.com, tendr&aacute;s  ayuda las 24 horas del d&iacute;a para aclarar todas tus dudas e inquietudes al  respecto y seguimiento continuo en tus rutinas de ejercicios y avances  en los ejercicios.<br />\r\n<br />\r\nSi a&uacute;n no eres usuario de peneperfecto suscr&iacute;bete ahora para acceder a  este servicio y obtener todos los beneficios que te brinda nuestro  efectivo programa de agrandamiento.</p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `homeantesdespues`
--
-- Creación: 20-02-2013 a las 03:24:52
-- Última actualización: 20-02-2013 a las 03:24:52
--

DROP TABLE IF EXISTS `homeantesdespues`;
CREATE TABLE IF NOT EXISTS `homeantesdespues` (
  `id` int(11) NOT NULL,
  `swf` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `homeantesdespues`
--

INSERT INTO `homeantesdespues` (`id`, `swf`) VALUES
(1, '/img/158448697.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `homebanner`
--
-- Creación: 20-02-2013 a las 03:24:53
-- Última actualización: 16-07-2013 a las 16:53:23
--

DROP TABLE IF EXISTS `homebanner`;
CREATE TABLE IF NOT EXISTS `homebanner` (
  `id` int(11) NOT NULL,
  `banner` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `homebanner`
--

INSERT INTO `homebanner` (`id`, `banner`) VALUES
(1, '/img/698131344.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `homebannerslider`
--
-- Creación: 20-02-2013 a las 03:24:53
-- Última actualización: 17-07-2013 a las 02:00:01
--

DROP TABLE IF EXISTS `homebannerslider`;
CREATE TABLE IF NOT EXISTS `homebannerslider` (
  `id` int(11) NOT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `homebannerslider`
--

INSERT INTO `homebannerslider` (`id`, `imagen`) VALUES
(1, '/img/123579526.png'),
(2, '/img/573905057.png'),
(3, '/img/922778468.png'),
(4, '/img/814581065.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `homebeneficios`
--
-- Creación: 20-02-2013 a las 03:24:53
-- Última actualización: 16-07-2013 a las 04:13:24
--

DROP TABLE IF EXISTS `homebeneficios`;
CREATE TABLE IF NOT EXISTS `homebeneficios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` text,
  `icono` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `homebeneficios`
--

INSERT INTO `homebeneficios` (`id`, `descripcion`, `icono`) VALUES
(1, '<p><span style="color: rgb(90, 90, 90); font-family: Arial, sans-serif; font-size: 13px; line-height: 17px; text-align: justify;">Alargar su pene 8 cent&iacute;metros mas, mediante ejercicios y t&eacute;cnicas seguras y de efectividad&nbsp;</span><span style="color: rgb(90, 90, 90); font-family: Arial, sans-serif; font-size: 13px; line-height: 17px; text-align: justify;">comprobada!</span></p>', '/img/048929545.png'),
(2, '<p style="text-align: justify; "><font color="#5a5a5a" face="arial, helvetica, sans-serif" size="2"><span style="line-height: 17px;">Corregir la curvatura de su pene.</span></font></p>', '/img/12506531.png'),
(3, '<p><span style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; font-size: 13px; line-height: 17px; text-align: justify;">Engrosar su pene 5 cent&iacute;metros mas, mediante ejercicios y t&eacute;cnicas seguras y de efectividad&nbsp;</span><span style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; font-size: 13px; line-height: 17px; text-align: justify;">comprobada!</span></p>', '/img/148779194.png'),
(4, '<p style="text-align: justify; "><font color="#5a5a5a" face="arial, helvetica, sans-serif" size="2"><span style="line-height: 17px;">Fortalecer las erecciones y prevenir la impotencia (mejorando la circulaci&oacute;n sangu&iacute;nea del pene).</span></font></p>', '/img/216132908.png'),
(5, '<p><span style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; font-size: 13px; line-height: 17px; text-align: justify;">Aumentar el tama&ntilde;o de la cabeza de su pene.</span></p>', '/img/235179947.png'),
(6, '<p>Acortar los tiempos de descanso (per&iacute;odo de refracci&oacute;n) luego de sus orgasmos para lograr una nueva y firme erecci&oacute;n.</p>', '/img/087682411.png'),
(7, '<p>Darle fin a la eyaculaci&oacute;n precoz y controlar sus orgasmos.</p>', '/img/597526447.png'),
(8, '<p><span style="color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; line-height: 18px; text-align: justify;">Brindarle mayor placer a su pareja.</span></p>', '/img/016142054.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `homebeneficiotitulo`
--
-- Creación: 20-02-2013 a las 03:24:53
-- Última actualización: 24-05-2013 a las 19:44:47
--

DROP TABLE IF EXISTS `homebeneficiotitulo`;
CREATE TABLE IF NOT EXISTS `homebeneficiotitulo` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `homebeneficiotitulo`
--

INSERT INTO `homebeneficiotitulo` (`id`, `titulo`) VALUES
(1, 'Con el programa de PENE PERFECTO Usted obtendrÃ¡ los siguientes beneficios   ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `homeintroduccion`
--
-- Creación: 20-02-2013 a las 03:24:53
-- Última actualización: 16-07-2013 a las 04:12:52
--

DROP TABLE IF EXISTS `homeintroduccion`;
CREATE TABLE IF NOT EXISTS `homeintroduccion` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `texto` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `homeintroduccion`
--

INSERT INTO `homeintroduccion` (`id`, `titulo`, `texto`) VALUES
(1, 'IntroducciÃ³n a Nuestro Programa', '<p style="text-align: justify;"><span style="color: rgb(90, 90, 90); font-family: Arial, sans-serif; font-size: 13px; line-height: 20.390625px; text-align: justify;">El exclusivo programa de&nbsp;</span><strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; color: rgb(90, 90, 90); font-family: Arial, sans-serif; line-height: 20.390625px; text-align: justify;">Peneperfecto.com</strong><span style="color: rgb(90, 90, 90); font-family: Arial, sans-serif; font-size: 13px; line-height: 20.390625px; text-align: justify;">&nbsp;te permitir&aacute; alargar y engrosar tu pene en casa mediante ejercicios y t&eacute;cnicas&nbsp;</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; font-family: Arial, sans-serif; line-height: 20.390625px; text-align: justify; color: rgb(51, 51, 153);"><strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;">100% Naturales,</strong></span><span style="color: rgb(90, 90, 90); font-family: Arial, sans-serif; font-size: 13px; line-height: 20.390625px; text-align: justify;">&nbsp;aprender&aacute;s&nbsp;</span><strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; color: rgb(90, 90, 90); font-family: Arial, sans-serif; line-height: 20.390625px; text-align: justify;">alargar tu pene 8 cent&iacute;metros m&aacute;s y engrosarlo 5 cent&iacute;metros m&aacute;s,</strong><span style="color: rgb(90, 90, 90); font-family: Arial, sans-serif; font-size: 13px; line-height: 20.390625px; text-align: justify;">&nbsp;nuestro programa te garantiza tener un pene perfecto, esto es posible usando nada m&aacute;s que unos simples ejercicios y t&eacute;cnicas especialmente desarrollados. Veras los primeros resultados en tan solo&nbsp;</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; font-family: Arial, sans-serif; line-height: 20.390625px; text-align: justify; color: rgb(255, 0, 0);"><strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;">2 semanas,</strong></span><span style="color: rgb(90, 90, 90); font-family: Arial, sans-serif; font-size: 13px; line-height: 20.390625px; text-align: justify;">&nbsp;los resultados son permanentes puede parecer dif&iacute;cil de creer, pero realmente funciona, este m&eacute;todo es 100% natural y garantizado,&nbsp;</span><b style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; color: rgb(90, 90, 90); font-family: Arial, sans-serif; line-height: 20.390625px; text-align: justify;">sin bombas de vac&iacute;o, p&iacute;ldoras, artilugios o aparatos m&aacute;gicos, y por supuesto sin cirug&iacute;a&nbsp;</b><span style="color: rgb(90, 90, 90); font-family: Arial, sans-serif; font-size: 13px; line-height: 20.390625px; text-align: justify;">de hecho todo lo que necesitas son tus manos y pocos minutos al d&iacute;a, nuestra efectividad es del 100% Comprobada por nuestros usuarios por lo cual somos el programa de agrandamiento peneano mas efectivo.&nbsp; <br />\r\n</span></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; background-color: transparent; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: justify;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent; color: rgb(90, 90, 90);"><span lang="ES" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: Arial, sans-serif; background-position: initial initial; background-repeat: initial initial;"><img src="http://www.peneperfecto.com/images/stories/flecha1.png" style="margin: 0px; padding: 0px; border: 0px; outline: 0px;" alt="" />&nbsp;No s&oacute;lo tendr&aacute;s acceso al Manual y Video, sino tambi&eacute;n al Servicio de Ayuda 24 Hrs de nuestro&nbsp;</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; color: rgb(255, 102, 0);"><strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;"><span lang="ES" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: Arial, sans-serif; background-position: initial initial; background-repeat: initial initial;">HelpDesk</span></strong></span><span lang="ES" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: Arial, sans-serif; background-position: initial initial; background-repeat: initial initial;">&nbsp;</span><span lang="ES" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: Arial, sans-serif; background-position: initial initial; background-repeat: initial initial;">ante cualquier duda o problema. Esto es algo en que nadie puede competir con nosotros y tiene tanto o m&aacute;s valor como el Manual en s&iacute; mismo.</span></span></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; background-color: transparent; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: justify;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent; color: rgb(90, 90, 90);"><span lang="ES" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: Arial, sans-serif; background-position: initial initial; background-repeat: initial initial;"><img src="http://www.peneperfecto.com/images/stories/flecha1.png" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;" alt="" />&nbsp;</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; background-color: transparent; font-family: Arial, sans-serif; background-position: initial initial; background-repeat: initial initial;">No te enviaremos NADA a tu casa, nuestro programa est&aacute; disponible ONLINE 24 horas al d&iacute;a y con tu&nbsp;<strong>Email</strong> y&nbsp;<strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;">Clave</strong>&nbsp;podr&aacute;s acceder de por vida y con la opci&oacute;n de bajar el manual y video a tu PC.</span></span></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; background-color: transparent; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px;"><span lang="ES" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: Arial, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;"><input type="image" src="http://www.peneperfecto.com/images/stories/garantia_satisfaccion.PNG" width="70" height="70" align="left" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent; float: left;" longdesc="undefined" border="10" /></span></p>\r\n<p style="text-align: justify;"><span lang="ES" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: Arial, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;">Estamos tan seguros que estas t&eacute;cnicas a&ntilde;adir&aacute;n longitud y grosor a tu pene de modo natural y seguro, que ofrecemos una&nbsp;<b style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;">&ldquo;Garant&iacute;a de 6 meses o la devoluci&oacute;n del 100% de tu dinero&rdquo;&nbsp;</b>As&iacute; es, si usas nuestro programa durante al menos 6 meses y no obtienes resultados, te devolvemos el 100% de tu dinero!</span></p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `homerecomendado`
--
-- Creación: 20-02-2013 a las 03:24:56
-- Última actualización: 17-07-2013 a las 04:03:32
--

DROP TABLE IF EXISTS `homerecomendado`;
CREATE TABLE IF NOT EXISTS `homerecomendado` (
  `id` int(11) NOT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `link` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `homerecomendado`
--

INSERT INTO `homerecomendado` (`id`, `imagen`, `link`) VALUES
(1, '/img/87465789.png', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hometextobtnpenep`
--
-- Creación: 20-02-2013 a las 03:24:56
-- Última actualización: 26-06-2013 a las 03:49:29
--

DROP TABLE IF EXISTS `hometextobtnpenep`;
CREATE TABLE IF NOT EXISTS `hometextobtnpenep` (
  `id` int(11) NOT NULL,
  `texto` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hometextobtnpenep`
--

INSERT INTO `hometextobtnpenep` (`id`, `texto`) VALUES
(1, '<p style="text-align: justify;">Si sufre de estos problemas o simplemente quiere disfrutar de una vida sexual como nunca imagin&oacute;,&nbsp;<strong>Haga parte de la comunidad de Pene Perfecto Ahora!&nbsp; <br />\r\n</strong></p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paginaregistro`
--
-- Creación: 20-02-2013 a las 03:24:56
-- Última actualización: 20-02-2013 a las 03:24:56
--

DROP TABLE IF EXISTS `paginaregistro`;
CREATE TABLE IF NOT EXISTS `paginaregistro` (
  `id` int(11) NOT NULL,
  `texto` text,
  `banner` varchar(200) DEFAULT NULL,
  `precio` varchar(200) DEFAULT NULL,
  `contenido` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `paginaregistro`
--

INSERT INTO `paginaregistro` (`id`, `texto`, `banner`, `precio`, `contenido`) VALUES
(1, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel    ligula vel eros gravida mollis. Mauris vitae egestas arcu. Ut    consectetur ligula ac quam congue non scelerisque dolor scelerisque.    Maecenas facilisis bibendum nisi, bibendum elementum neque tincidunt a.    Quisque ornare, velit non commodo feugiat, tortor quam porta felis, eu    aliquet ipsum mauris ut dui. In hac habitasse platea dictumst.</p>', '/img/93257146.jpg', '/img/15188890.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel    ligula vel eros gravida mollis. Mauris vitae egestas arcu. Ut    consectetur ligula ac quam congue non scelerisque dolor scelerisque.    Maecenas facilisis bibendum nisi, bibendum elementum neque tincidunt a.    Quisque ornare, velit non commodo feugiat, tortor quam porta felis, eu    aliquet ipsum mauris ut dui. In hac habitasse platea dictumst.</p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagoefectivo`
--
-- Creación: 20-02-2013 a las 03:24:57
-- Última actualización: 25-07-2013 a las 05:52:59
--

DROP TABLE IF EXISTS `pagoefectivo`;
CREATE TABLE IF NOT EXISTS `pagoefectivo` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `texto` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pagoefectivo`
--

INSERT INTO `pagoefectivo` (`id`, `titulo`, `texto`) VALUES
(1, 'InformaciÃ³n para pago en efectivo  ', '<p style="text-align: justify;"><font face="arial, helvetica, sans-serif" color="#5a5a5a"><span style="border-collapse: collapse; line-height: 17px;">Una vez realizado el pago en efectivo en los siguientes medios de pago, usted tiene que escanear el recibo o soporte de pago para poder confirmar su pago y enviarle su Clave de acceso al instante a su correo&nbsp;electr&oacute;nico. El soporte de pago y sus datos tiene que cargarlos en el boton que dice <strong>&quot;Adjuntar soporte de pago&quot;</strong> Por favor guarde el recibo o soporte de pago</span></font><font face="arial, helvetica, sans-serif" color="#5a5a5a"><span style="border-collapse: collapse; line-height: 17px;">&nbsp;</span></font><span style="line-height: 17px; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif;">para futura referencia y garant&iacute;a. </span></p>\r\n<p style="text-align: justify;"><span style="line-height: 17px; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif;">El valor a enviar o depositar es de <strong>USD $125.00</strong> Para saber cuanto es el equivalente en la moneda de su pais por favor seleccione en la tercera casilla su pais y haga clic en &quot;Go!&quot;</span></p>\r\n<div style="text-align: center;">\r\n<p><iframe src="http://www.xe.com/pca/input.php?AmountSet=125.00&amp;From=USD&amp;ToSelect=USD" width="630" height="200" name="Currency" frameborder="0" scrolling="no"></iframe></p>\r\n</div>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--
-- Creación: 14-06-2013 a las 15:24:06
--

DROP TABLE IF EXISTS `pais`;
CREATE TABLE IF NOT EXISTS `pais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=240 ;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id`, `nombre`) VALUES
(1, 'Aruba'),
(2, 'Afghanistan'),
(3, 'Angola'),
(4, 'Anguilla'),
(5, 'Albania'),
(6, 'Andorra'),
(7, 'Netherlands Antilles'),
(8, 'United Arab Emirates'),
(9, 'Argentina'),
(10, 'Armenia'),
(11, 'American Samoa'),
(12, 'Antarctica'),
(13, 'French Southern territories'),
(14, 'Antigua and Barbuda'),
(15, 'Australia'),
(16, 'Austria'),
(17, 'Azerbaijan'),
(18, 'Burundi'),
(19, 'Belgium'),
(20, 'Benin'),
(21, 'Burkina Faso'),
(22, 'Bangladesh'),
(23, 'Bulgaria'),
(24, 'Bahrain'),
(25, 'Bahamas'),
(26, 'Bosnia and Herzegovina'),
(27, 'Belarus'),
(28, 'Belize'),
(29, 'Bermuda'),
(30, 'Bolivia'),
(31, 'Brazil'),
(32, 'Barbados'),
(33, 'Brunei'),
(34, 'Bhutan'),
(35, 'Bouvet Island'),
(36, 'Botswana'),
(37, 'Central African Republic'),
(38, 'Canada'),
(39, 'Cocos (Keeling) Islands'),
(40, 'Switzerland'),
(41, 'Chile'),
(42, 'China'),
(43, 'Côte d’Ivoire'),
(44, 'Cameroon'),
(45, 'Congo, The Democratic Republic of the'),
(46, 'Congo'),
(47, 'Cook Islands'),
(48, 'Colombia'),
(49, 'Comoros'),
(50, 'Cape Verde'),
(51, 'Costa Rica'),
(52, 'Cuba'),
(53, 'Christmas Island'),
(54, 'Cayman Islands'),
(55, 'Cyprus'),
(56, 'Czech Republic'),
(57, 'Germany'),
(58, 'Djibouti'),
(59, 'Dominica'),
(60, 'Denmark'),
(61, 'Dominican Republic'),
(62, 'Algeria'),
(63, 'Ecuador'),
(64, 'Egypt'),
(65, 'Eritrea'),
(66, 'Western Sahara'),
(67, 'Spain'),
(68, 'Estonia'),
(69, 'Ethiopia'),
(70, 'Finland'),
(71, 'Fiji Islands'),
(72, 'Falkland Islands'),
(73, 'France'),
(74, 'Faroe Islands'),
(75, 'Micronesia, Federated States of'),
(76, 'Gabon'),
(77, 'United Kingdom'),
(78, 'Georgia'),
(79, 'Ghana'),
(80, 'Gibraltar'),
(81, 'Guinea'),
(82, 'Guadeloupe'),
(83, 'Gambia'),
(84, 'Guinea-Bissau'),
(85, 'Equatorial Guinea'),
(86, 'Greece'),
(87, 'Grenada'),
(88, 'Greenland'),
(89, 'Guatemala'),
(90, 'French Guiana'),
(91, 'Guam'),
(92, 'Guyana'),
(93, 'Hong Kong'),
(94, 'Heard Island and McDonald Islands'),
(95, 'Honduras'),
(96, 'Croatia'),
(97, 'Haiti'),
(98, 'Hungary'),
(99, 'Indonesia'),
(100, 'India'),
(101, 'British Indian Ocean Territory'),
(102, 'Ireland'),
(103, 'Iran'),
(104, 'Iraq'),
(105, 'Iceland'),
(106, 'Israel'),
(107, 'Italy'),
(108, 'Jamaica'),
(109, 'Jordan'),
(110, 'Japan'),
(111, 'Kazakstan'),
(112, 'Kenya'),
(113, 'Kyrgyzstan'),
(114, 'Cambodia'),
(115, 'Kiribati'),
(116, 'Saint Kitts and Nevis'),
(117, 'South Korea'),
(118, 'Kuwait'),
(119, 'Laos'),
(120, 'Lebanon'),
(121, 'Liberia'),
(122, 'Libyan Arab Jamahiriya'),
(123, 'Saint Lucia'),
(124, 'Liechtenstein'),
(125, 'Sri Lanka'),
(126, 'Lesotho'),
(127, 'Lithuania'),
(128, 'Luxembourg'),
(129, 'Latvia'),
(130, 'Macao'),
(131, 'Morocco'),
(132, 'Monaco'),
(133, 'Moldova'),
(134, 'Madagascar'),
(135, 'Maldives'),
(136, 'Mexico'),
(137, 'Marshall Islands'),
(138, 'Macedonia'),
(139, 'Mali'),
(140, 'Malta'),
(141, 'Myanmar'),
(142, 'Mongolia'),
(143, 'Northern Mariana Islands'),
(144, 'Mozambique'),
(145, 'Mauritania'),
(146, 'Montserrat'),
(147, 'Martinique'),
(148, 'Mauritius'),
(149, 'Malawi'),
(150, 'Malaysia'),
(151, 'Mayotte'),
(152, 'Namibia'),
(153, 'New Caledonia'),
(154, 'Niger'),
(155, 'Norfolk Island'),
(156, 'Nigeria'),
(157, 'Nicaragua'),
(158, 'Niue'),
(159, 'Netherlands'),
(160, 'Norway'),
(161, 'Nepal'),
(162, 'Nauru'),
(163, 'New Zealand'),
(164, 'Oman'),
(165, 'Pakistan'),
(166, 'Panama'),
(167, 'Pitcairn'),
(168, 'Peru'),
(169, 'Philippines'),
(170, 'Palau'),
(171, 'Papua New Guinea'),
(172, 'Poland'),
(173, 'Puerto Rico'),
(174, 'North Korea'),
(175, 'Portugal'),
(176, 'Paraguay'),
(177, 'Palestine'),
(178, 'French Polynesia'),
(179, 'Qatar'),
(180, 'Réunion'),
(181, 'Romania'),
(182, 'Russian Federation'),
(183, 'Rwanda'),
(184, 'Saudi Arabia'),
(185, 'Sudan'),
(186, 'Senegal'),
(187, 'Singapore'),
(188, 'South Georgia and the South Sandwich Islands'),
(189, 'Saint Helena'),
(190, 'Svalbard and Jan Mayen'),
(191, 'Solomon Islands'),
(192, 'Sierra Leone'),
(193, 'El Salvador'),
(194, 'San Marino'),
(195, 'Somalia'),
(196, 'Saint Pierre and Miquelon'),
(197, 'Sao Tome and Principe'),
(198, 'Suriname'),
(199, 'Slovakia'),
(200, 'Slovenia'),
(201, 'Sweden'),
(202, 'Swaziland'),
(203, 'Seychelles'),
(204, 'Syria'),
(205, 'Turks and Caicos Islands'),
(206, 'Chad'),
(207, 'Togo'),
(208, 'Thailand'),
(209, 'Tajikistan'),
(210, 'Tokelau'),
(211, 'Turkmenistan'),
(212, 'East Timor'),
(213, 'Tonga'),
(214, 'Trinidad and Tobago'),
(215, 'Tunisia'),
(216, 'Turkey'),
(217, 'Tuvalu'),
(218, 'Taiwan'),
(219, 'Tanzania'),
(220, 'Uganda'),
(221, 'Ukraine'),
(222, 'United States Minor Outlying Islands'),
(223, 'Uruguay'),
(224, 'United States'),
(225, 'Uzbekistan'),
(226, 'Holy See (Vatican City State)'),
(227, 'Saint Vincent and the Grenadines'),
(228, 'Venezuela'),
(229, 'Virgin Islands, British'),
(230, 'Virgin Islands, U.S.'),
(231, 'Vietnam'),
(232, 'Vanuatu'),
(233, 'Wallis and Futuna'),
(234, 'Samoa'),
(235, 'Yemen'),
(236, 'Yugoslavia'),
(237, 'South Africa'),
(238, 'Zambia'),
(239, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pdf`
--
-- Creación: 20-02-2013 a las 03:24:57
-- Última actualización: 20-02-2013 a las 03:24:57
--

DROP TABLE IF EXISTS `pdf`;
CREATE TABLE IF NOT EXISTS `pdf` (
  `id` int(11) NOT NULL,
  `archivo` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pdf`
--

INSERT INTO `pdf` (`id`, `archivo`) VALUES
(1, '/contenidos/783509422.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `politicas`
--
-- Creación: 20-02-2013 a las 03:24:57
-- Última actualización: 26-07-2013 a las 04:01:00
--

DROP TABLE IF EXISTS `politicas`;
CREATE TABLE IF NOT EXISTS `politicas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `texto` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `politicas`
--

INSERT INTO `politicas` (`id`, `titulo`, `texto`) VALUES
(1, 'DeclaraciÃ³n de polÃ­tica', '<div id="\\&quot;row_beneficios\\&quot;">\r\n<div id="\\&quot;txt_comentarios\\&quot;">\r\n<p style="text-align: justify;"><span style="color: rgb(102, 102, 102);"><span style="font-family: Verdana;">Por favor lea este acuerdo de&nbsp;</span><strong style="font-family: Verdana;">Declaraci&oacute;n de pol&iacute;tica</strong><span style="font-family: Verdana;">&nbsp;y&nbsp;</span><strong style="font-family: Verdana;">Condiciones de uso</strong><span style="font-family: Verdana;">&nbsp;cuidadosamente antes de usar este sitio. Al usar este sitio, usted expresa su consentimiento a este acuerdo de t&eacute;rminos de uso. Si no aceptas los t&eacute;rminos y condiciones contenidas en este acuerdo de t&eacute;rminos de uso, no puede acceder o utilizar este sitio.</span></span></p>\r\n<p style="text-align: justify;"><span style="color: rgb(102, 102, 102);"><span style="font-family: Verdana; text-align: start;">Nada en este sitio web est&aacute; destinado o pretende sustituir el asesoramiento brindado por su propio m&eacute;dico u otro profesional m&eacute;dico. Si usted tiene o sospecha un problema m&eacute;dico o condici&oacute;n, inmediatamente pongase en contacto con su proveedor de atenci&oacute;n m&eacute;dica. Usted no debe usar la informaci&oacute;n aqu&iacute; contenida para diagnosticar o tratar un problema de salud o enfermedad o prescribir medicaci&oacute;n alg&uacute;na. Favor de leer cuidadosamente todo el manual</span></span></p>\r\n</div>\r\n</div>'),
(2, 'Derechos de autor y marcas registradas', '<div id="\\&quot;row_beneficios\\&quot;">\r\n<div id="\\&quot;txt_comentarios\\&quot;">\r\n<p style="text-align: justify;"><span style="color: rgb(102, 102, 102);"><strong style="font-family: Verdana;">Derechos de autor y marcas registradas</strong><span style="font-family: Verdana;">. Todo el dise&ntilde;o de sitio Web, texto, gr&aacute;ficos, sonido, software y otros contenidos y la selecci&oacute;n o disposici&oacute;n, son propiedad de peneperfecto.com (en lo sucesivo, la gu&iacute;a de &quot;Agrandar el pene&quot;) y est&aacute;n protegidos por una ley de derechos de autor internacional. Todos los derechos de tales materiales son reservados a sus respectivos derechos de autor. Cualquier otro uso de los materiales en este sitio, incluyendo sin reproducci&oacute;n de limitaci&oacute;n para prop&oacute;sitos que mencionadas, modificaci&oacute;n, distribuci&oacute;n, replicaci&oacute;n, explotaci&oacute;n comercial o de otra o creaci&oacute;n de trabajos derivados, sin el previo consentimiento por escrito de la gu&iacute;a de &quot;Agrandar el pene&quot;, est&aacute; estrictamente prohibido.</span></span></p>\r\n</div>\r\n</div>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--
-- Creación: 20-02-2013 a las 03:24:57
-- Última actualización: 24-05-2013 a las 21:03:40
--

DROP TABLE IF EXISTS `preguntas`;
CREATE TABLE IF NOT EXISTS `preguntas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(300) DEFAULT NULL,
  `respuesta` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id`, `pregunta`, `respuesta`) VALUES
(4, 'Â¿cuÃ¡nto es el incremento de tamaÃ±o que puedo conseguir?  ', '<div id="\\&quot;\\\\&quot;\\\\\\\\&quot;row_beneficios\\\\\\\\&quot;\\\\&quot;\\&quot;">\r\n<div id="\\&quot;\\\\&quot;\\\\\\\\&quot;txt_comentarios\\\\\\\\&quot;\\\\&quot;\\&quot;">\r\n<p><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent; color: rgb(0, 0, 128);"><span style="margin: 0px; padding: 0cm; border: 1pt none windowtext; outline: 0px; font-size: 10pt; background-color: transparent; font-family: Arial, sans-serif; background-position: initial initial; background-repeat: initial initial;">En base a las estad&iacute;sticas y a los resultados obtenidos por nuestros clientes que han finalizado los ejercicios, se confirma que el promedio de aumento va desde&nbsp;<strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;">1.5 a 2.5 cent&iacute;metros de longitud de ganancia por mes, y de 0.8 a 1.3 cent&iacute;metros grosor de ganancia por mes.</strong></span><strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 9pt; background-color: transparent;">&nbsp;</span></strong></span></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; background-color: transparent; line-height: 20.390625px;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: arial, helvetica, sans-serif; color: rgb(0, 0, 128); background-position: initial initial; background-repeat: initial initial;"><strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;"><img src="http://peneperfecto.com/images/stories/flecha1.png" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;" alt="" />&nbsp;Alargamiento:</strong>&nbsp;Puede aumentarle hasta 8 cent&iacute;metros m&aacute;s de longitud a su pene en un tiempo menor a 4 meses.</span></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; background-color: transparent; line-height: 20.390625px;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: arial, helvetica, sans-serif; color: rgb(0, 0, 128); background-position: initial initial; background-repeat: initial initial;"><strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;"><img src="http://peneperfecto.com/images/stories/flecha1.png" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;" alt="" />&nbsp;Engrosamiento:</strong>&nbsp;Puede aumentarle hasta 5 cent&iacute;metros m&aacute;s de grosor a su pene en un tiempo menos a 4 meses.</span></p>\r\n<p style="margin: 10px 0px 0.0001pt; padding: 0px; border: 0px; outline: 0px; line-height: 15pt;"><span style="margin: 0px; padding: 0cm; border: 1pt none windowtext; outline: 0px; font-size: 10pt; background-color: transparent; font-family: Arial, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;">Para obtener un mejor resultado o mayores ganancias, solo es necesario realizar la rutina recomendada y seguir al pie de la letra las t&eacute;cnicas y ejercicios de nuestro programa.</span></p>\r\n</div>\r\n</div>'),
(3, 'Â¿cuÃ¡nto cuesta la suscripciÃ³n o el manual + video?', '<div id="\\&quot;row_beneficios\\&quot;">\r\n<div id="\\&quot;txt_comentarios\\&quot;">\r\n<p><span style="margin: 0px; padding: 0cm; border: 1pt none windowtext; outline: 0px; font-size: 10pt; line-height: 20px; text-align: justify; font-family: Arial, sans-serif; color: rgb(90, 90, 90);">Con su Clave tendr&aacute; acceso inmediato las 24 Hs desde cualquier PC conectada a internet para visualizar o bajar el manual + video a su PC por tan solo&nbsp;<span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;">&nbsp;</span><strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;"><span style="margin: 0px; padding: 0cm; border: 1pt none windowtext; outline: 0px; font-size: 10pt; background-color: transparent; color: red;">USD $99.00 (Equivalente a $78.00 Euros o $175.000 Pesos Colombianos)</span></strong></span><span style="margin: 0px; padding: 0cm; border: 1pt none windowtext; outline: 0px; font-size: 10pt; line-height: 20px; text-align: justify; font-family: Arial, sans-serif; color: rgb(90, 90, 90);">&nbsp;</span><span style="margin: 0px; padding: 0cm; border: 1pt none windowtext; outline: 0px; font-size: 10pt; line-height: 20px; text-align: justify; font-family: Arial, sans-serif; color: rgb(90, 90, 90);">Muy poco a pagar a cambio de un pene m&aacute;s grande, saludable y capaz que dar&aacute; alas a la confianza que tenga en s&iacute; mismo. Qu&eacute; espera entonces? <a href="http://repositorio.imaginamos.com/SENA/peneperfecto/registro_pagaduria.php">Suscribase Aahora!</a></span></p>\r\n</div>\r\n</div>'),
(5, 'Â¿Pagar con tarjeta de CrÃ©dito?', '<div id="\\&quot;row_beneficios\\&quot;">\r\n<div id="\\&quot;txt_comentarios\\&quot;">\r\n<p><span style="margin: 0px; padding: 0cm; border: 1pt none windowtext; outline: 0px; font-size: 10pt; background-color: transparent; font-family: Arial, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;"><img src="http://peneperfecto.com/images/stories/flecha1.png" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;" alt="" />&nbsp;El valor es de&nbsp;<strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;">USD $99.00 (Noventa y nueve d&oacute;lares americanos)</strong>&nbsp;Aceptamos todas las tarjetas&nbsp;de cr&eacute;dito y debito.</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 9pt; background-color: transparent; color: rgb(51, 51, 51);">&nbsp;Visa - MasterCard - AmericanExpress - DinersClub</span></p>\r\n<p style="margin: 10px 0px 0.0001pt; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; text-align: justify; line-height: 15pt;"><span style="margin: 0px; padding: 0cm; border: 1pt none windowtext; outline: 0px; font-size: 10pt; background-color: transparent; font-family: Arial, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;"><img src="http://peneperfecto.com/images/stories/flecha1.png" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;" alt="" />&nbsp;Utilizamos los m&aacute;s modernos servidores para hacer transacciones totalmente protegidas por&nbsp;</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: Arial, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;"><b style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;">pagosonline.com</b></span><span style="margin: 0px; padding: 0cm; border: 1pt none windowtext; outline: 0px; font-size: 10pt; background-color: transparent; font-family: Arial, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;">&nbsp;de manera que la informaci&oacute;n de tu tarjeta est&eacute; 100% segura y protegida.</span></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: arial, helvetica, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;"><img src="http://peneperfecto.com/images/stories/flecha1.png" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;" alt="" />&nbsp;En su extracto bancario registrar&aacute; la compra a nombre de&nbsp;Pagosonline.com</span></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: arial, helvetica, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;"><img src="http://peneperfecto.com/images/stories/flecha1.png" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;" alt="" />&nbsp;Pagar por este medio es f&aacute;cil, r&aacute;pido y seguro.</span></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: justify;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: arial, helvetica, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;"><img src="http://peneperfecto.com/images/stories/flecha1.png" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;" alt="" />&nbsp;Al realizar el pago con tarjetas recibir&aacute;s autom&aacute;ticamente en tu correo electr&oacute;nico la Clave de acceso a nuestro exclusivo programa de agrandamiento peneano.</span></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; background-position: initial initial; background-repeat: initial initial;"><img src="http://peneperfecto.com/images/stories/flecha1.png" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;" alt="" />&nbsp;Tu pago Online es 100% seguro y protegido.</span></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: small; background-color: transparent; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; background-position: initial initial; background-repeat: initial initial;"><img src="http://peneperfecto.com/images/stories/flecha1.png" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; background-color: transparent; background-position: initial initial; background-repeat: initial initial;" alt="" />&nbsp;Para realizar el pago mediante tarjetas por favor haz <a href="http://repositorio.imaginamos.com/SENA/peneperfecto/registro_pagaduria.php">Clic Aqui!</a></span></p>\r\n</div>\r\n</div>'),
(6, 'Â¿cuÃ¡les son las formas de pago en efectivo?', '<div id="\\&quot;row_beneficios\\&quot;">\r\n<div id="\\&quot;txt_comentarios\\&quot;">\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: justify;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: arial, helvetica, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;">Para hacer el pago en efectivo usted debe llenar el formulario de pago en efectivo, dependiendo del pais donde se encuentre se le enviara la informacion detallada para realizar el pago en efectivo.</span></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: justify;"><strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: arial, helvetica, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;">Formas de pago en efectivo:</span></strong></p>\r\n<p style="margin: 10px 0px 0.0001pt; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: justify;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent; line-height: 20px;"><span style="margin: 0px; padding: 0cm; border: 1pt none windowtext; outline: 0px; font-size: 10pt; background-color: transparent; font-family: Arial, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;"><a href="http://www.westernunion.com.mx/" target="_blank" style="margin: 0px; padding: 0px; border: 0px; outline: none; background-color: transparent; text-decoration: none; color: rgb(102, 102, 102); -webkit-transition: color 0.3s ease-out;"><img src="http://peneperfecto.com/images/stories/logoWU.png" width="160" style="margin: 0px 10px 0px 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent; float: left;" alt="" /></a></span></span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent; line-height: 20px;"><span style="margin: 0px; padding: 0cm; border: 1pt none windowtext; outline: 0px; font-size: 10pt; background-color: transparent; font-family: Arial, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;">Realice su pago en efectivo desde cualquier pais y ciudad del mundo con una transferencia de dinero por&nbsp;medio de</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: Arial, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;">&nbsp;<b style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;">Western Union&nbsp;</b></span><span style="margin: 0px; padding: 0cm; border: 1pt none windowtext; outline: 0px; font-size: 10pt; background-color: transparent; font-family: Arial, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;">en tu localidad. Duracion de la transferencia 10 minutos.</span></span></p>\r\n<p style="margin: 10px 0px 0.0001pt; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: justify;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent; line-height: 20px;"><span style="margin: 0px; padding: 0cm; border: 1pt none windowtext; outline: 0px; font-size: 10pt; background-color: transparent; font-family: Arial, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;"><a href="https://www.moneygram.com/" target="_blank" style="margin: 0px; padding: 0px; border: 0px; outline: none; background-color: transparent; text-decoration: none; color: rgb(102, 102, 102); -webkit-transition: color 0.3s ease-out;"><img width="160" src="http://peneperfecto.com/images/stories/moneygram_logo.jpg" style="margin: 0px 10px 0px 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent; float: left;" alt="" /></a></span></span></p>\r\n<p style="margin: 10px 0px 0.0001pt; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; text-align: justify; line-height: 15pt;">&nbsp;<span style="margin: 0px; padding: 0cm; border: 1pt none windowtext; outline: 0px; font-size: 10pt; background-color: transparent; font-family: Arial, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;">Realice su pago en efectivo desde cualquier pa&iacute;s del mundo por una transferencia de dinero por&nbsp;medio de</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: Arial, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;">&nbsp;<b style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;">MoneyGram,&nbsp;</b></span><span style="margin: 0px; padding: 0cm; border: 1pt none windowtext; outline: 0px; font-size: 10pt; background-color: transparent; font-family: Arial, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;">en tu localidad. Duracion de la tranferencia 10 minutos.</span></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: justify;"><span style="margin: 0px; padding: 0cm; border: 1pt none windowtext; outline: 0px; font-size: 10pt; background-color: transparent; font-family: Arial, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;"><a href="http://www.grupobancolombia.com/" target="_blank" style="margin: 0px; padding: 0px; border: 0px; outline: none; background-color: transparent; text-decoration: none; color: rgb(102, 102, 102); -webkit-transition: color 0.3s ease-out;"><img width="160" src="http://peneperfecto.com/images/stories/bancolombia.jpg" style="margin: 0px 10px 0px 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent; vertical-align: middle;" alt="" /></a></span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; background-color: transparent; color: rgb(90, 90, 90); font-family: Arial, sans-serif; line-height: 20px; background-position: initial initial; background-repeat: initial initial;">Consignaci&oacute;n o transferencia a cuenta de ahorros en Bancolombia.</span></p>\r\n<p style="margin: 10px 0px 0.0001pt; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 15pt;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: arial, helvetica, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;">Disponemos de muchas formas de pago en efectivo, consignaciones, transferencias bancarias y electr&oacute;nicas.<span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent; color: rgb(0, 0, 128);">Si desea pagar en efectivo por favor escoje la opcion pagar en efectivo&nbsp;<span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent; text-decoration: underline;"><a href="http://repositorio.imaginamos.com/SENA/peneperfecto/registro_pagaduria.php" style="margin: 0px; padding: 0px; border: 0px; outline: none; background-color: transparent; text-decoration: none; color: rgb(102, 102, 102); -webkit-transition: color 0.3s ease-out;">Clic aqu&iacute;</a></span></span></span></p>\r\n</div>\r\n</div>'),
(7, 'Â¿tienen alguna ayuda por sÃ­ la necesito?', '<div id="\\&quot;row_beneficios\\&quot;">\r\n<div id="\\&quot;txt_comentarios\\&quot;">\r\n<p>\r\n<p style="margin: 0cm 0cm 0.0001pt; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; text-align: justify; line-height: 15pt;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;"><span style="margin: 0px; padding: 0cm; border: 1pt none windowtext; outline: 0px; font-size: 10pt; background-color: transparent; font-family: Arial, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;">POR SUPUESTO QUE SI. Nuestros expertos le ayudaran en cualquier problema, pregunta o duda que tenga al respecto, la ayuda y asesor&iacute;a es permanente, esta ayuda se incluye en el pago o suscripci&oacute;n. <strong>HelpDesk</strong>&nbsp;es el servicio de ayuda al cliente Online las 24 Hs.</span></span></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: justify;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: arial, helvetica, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;">Para preguntas y dudas al respecto sobre m&eacute;todos de pago y el programa en general, por favor&nbsp;<span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent; text-decoration: underline;"><strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;"><a href="http://repositorio.imaginamos.com/SENA/peneperfecto/contactenos.php" style="margin: 0px; padding: 0px; border: 0px; outline: none; background-color: transparent; text-decoration: none; color: rgb(102, 102, 102); -webkit-transition: color 0.3s ease-out;">cont&aacute;ctenos</a>&nbsp;</strong></span>trabajamos las 24 Horas del dia.&nbsp;<strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent; color: rgb(51, 102, 255);">&nbsp;<a href="mailto:info@peneperfecto.com" style="margin: 0px; padding: 0px; border: 0px; outline: none; background-color: transparent; text-decoration: none; color: rgb(102, 102, 102); -webkit-transition: color 0.3s ease-out;">info@peneperfecto.com</a></span></strong></span></p>\r\n</p>\r\n</div>\r\n</div>'),
(8, 'Â¿tendrÃ© que comprar algo mÃ¡s para ver los resultados?', '<div id="\\&quot;row_beneficios\\&quot;">\r\n<div id="\\&quot;txt_comentarios\\&quot;">\r\n<p><span style="color: rgb(90, 90, 90); font-family: Arial, sans-serif; font-size: 13px; line-height: 20px; text-align: justify;">POR SUPUESTO QUE NO! Nuestro programa tiene todo lo que usted necesita para agrandar su pene y obtener los beneficios mencionados de forma natural, mejorar la salud de su pene, y mucho m&aacute;s.</span></p>\r\n</div>\r\n</div>'),
(9, 'Â¿hay algÃºn tipo de garantÃ­a?', '<div id="\\&quot;row_beneficios\\&quot;">\r\n<div id="\\&quot;txt_comentarios\\&quot;">\r\n<p>&nbsp;</p>\r\n<p style="text-align: justify;"><span style="margin: 0px; padding: 0cm; border: 1pt none windowtext; outline: 0px; font-size: 10pt; line-height: 20px; text-align: justify; font-family: Arial, sans-serif; color: rgb(90, 90, 90);"><img src="http://peneperfecto.com/images/stories/bannerg.png" style="margin: 0px 10px 0px 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent; float: left;" alt="" />Si. Creemos tan firmemente que Nuestro Programa funcionar&aacute; con usted que damos una&nbsp;<strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;">Garant&iacute;a de 6 meses o la devoluci&oacute;n del 100% de su dinero.</span></strong>&nbsp;Si usted usa nuestro programa durante al menos 6 meses y su pene no aumenta de 2 a 8 Centimetros mas o no obtiene los resultados esperados, le devolvemos el 100% de su dinero, mediante una reversi&oacute;n. Es as&iacute; de f&aacute;cil, no tiene nada que perder! Lo &uacute;nico que tiene que perder es su talla actual del pene!&nbsp;</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: arial, helvetica, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;">Solo necesitamos que pruebes nuestro programa para agrandar el pene en un tiempo menor a 6 meses y si en ese tiempo no obtienes resultados definitivamente no queremos tu dinero y te lo devolvemos como una muestra de respeto a la confianza que has depositado en nosotros.&nbsp;</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; background-position: initial initial; background-repeat: initial initial;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent; color: rgb(90, 90, 90);"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent; font-family: arial, helvetica, sans-serif;">Para solicitar informaci&oacute;n de garant&iacute;a o su integro simplemente env&iacute;enos los datos de la transacci&oacute;n, detalles de su rutina su nombre y su mensaje opcional al E-mail:&nbsp;<strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent; font-weight: normal;">&nbsp;<a href="mailto:garantia@peneperfecto.com" style="margin: 0px; padding: 0px; border: 0px; outline: none; background-color: transparent; text-decoration: none; color: rgb(102, 102, 102); -webkit-transition: color 0.3s ease-out;">garantia@peneperfecto.com</a></span></strong></span></span></span></span></span></p>\r\n</div>\r\n</div>'),
(10, 'Â¿cÃ³mo es posible que se obtengan resultados permanentes?', '<div id="\\&quot;row_beneficios\\&quot;">\r\n<div id="\\&quot;txt_comentarios\\&quot;">\r\n<p><span style="margin: 0px; padding: 0cm; border: 1pt none windowtext; outline: 0px; font-size: 10pt; line-height: 20px; text-align: justify; font-family: Arial, sans-serif; color: rgb(90, 90, 90);">Tal como se explica en la secci&oacute;n&nbsp;<span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;">&nbsp;</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent; text-decoration: underline;"><a href="http://repositorio.imaginamos.com/SENA/peneperfecto/como_funciona.php" style="margin: 0px; padding: 0px; border: 0px; outline: none; background-color: transparent; text-decoration: none; color: rgb(102, 102, 102); -webkit-transition: color 0.3s ease-out;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;">Como Funciona</span></a></span>,&nbsp;</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; line-height: 20px; text-align: justify; font-family: arial, helvetica, sans-serif; color: rgb(90, 90, 90);">mediante los ejercicios de nuestro manual + video se logra que los Cuerpos Cavernosos aumenten la capacidad de acumular sangre. El Cuerpo Cavernoso est&aacute; formado por c&eacute;lulas org&aacute;nicas que una vez generadas no desaparecen ni se encogen. Esto le garantiza que cualquier aumento obtenido tanto en longitud como en grosor, al igual que la capacidad de mantener las erecciones por m&aacute;s tiempo, se mantendr&aacute;n de por vida.</span></p>\r\n</div>\r\n</div>'),
(11, 'Â¿los resultados obtenidos son permanentes?', '<div id="\\&quot;row_beneficios\\&quot;">\r\n<div id="\\&quot;txt_comentarios\\&quot;">\r\n<p><span style="color: rgb(90, 90, 90); font-family: Arial, sans-serif; font-size: 13px; line-height: 20px; text-align: justify;">Si. Una vez que usted finalice los ejercicios y haya obtenido los resultados deseados, podr&aacute; dejar de usar nuestro manual + video sin dejar de disfrutar del nuevo tama&ntilde;o de su pene. Peneperfecto.com le garantiza al 100% que los resultados son de por vida.</span></p>\r\n</div>\r\n</div>'),
(12, 'Â¿son seguras estas tÃ©cnicas?', '<div id="\\&quot;row_beneficios\\&quot;">\r\n<div id="\\&quot;txt_comentarios\\&quot;">\r\n<p><span style="color: rgb(90, 90, 90); font-family: Arial, sans-serif; font-size: 13px; line-height: 20px; text-align: justify;">Si, de hecho han sido recomendadas por doctores. Son m&eacute;todos saludables para el agrandamiento del pene y fortalecimiento de la erecci&oacute;n.</span></p>\r\n</div>\r\n</div>'),
(13, 'Â¿puedo hacer los ejercicios estando circuncidado?', '<div id="\\&quot;row_beneficios\\&quot;">\r\n<div id="\\&quot;txt_comentarios\\&quot;">\r\n<p><span style="color: rgb(90, 90, 90); font-family: Arial, sans-serif; font-size: 13px; line-height: 20px;">POR SUPUESTO QUE SI, estos ejercicios dar&aacute;n resultados exitosos estando o no circuncidado.</span></p>\r\n</div>\r\n</div>'),
(14, 'Â¿estos ejercicios son difÃ­ciles de realizar?', '<div id="\\&quot;row_beneficios\\&quot;">\r\n<div id="\\&quot;txt_comentarios\\&quot;">\r\n<p style="text-align: justify;"><span style="color: rgb(90, 90, 90); font-family: Arial, sans-serif; font-size: 13px; line-height: 20px; text-align: justify;">No. Son ejercicios muy simples de realizar, nuestro manual online contiene las instrucciones que le guiar&aacute;n paso a paso por cada t&eacute;cnica con fotograf&iacute;as en alta resoluci&oacute;n y con nuestro exclusivo video en alta definici&oacute;n HD que demuestran c&oacute;mo realizarlos correctamente. La &uacute;nica dificultad es su devoci&oacute;n en realizar regularmente dichos ejercicios, ya que como en cualquier programa de intensificaci&oacute;n y aumento se obtienen resultados en funci&oacute;n de lo que se le dedica.</span></p>\r\n</div>\r\n</div>'),
(15, 'Â¿este programa funcionarÃ¡ conmigo?', '<div id="\\&quot;row_beneficios\\&quot;">\r\n<div id="\\&quot;txt_comentarios\\&quot;">\r\n<p style="text-align: justify;"><span style="color: rgb(90, 90, 90); font-family: Arial, sans-serif; font-size: 13px; line-height: 20px; text-align: justify;">Nuestro porcentaje de &eacute;xito es del 100%. Si usted busca una soluci&oacute;n para el agrandamiento del pene podemos ayudarlo. Este programa no depende de su edad, salud, o si est&aacute; o no circuncidado, le garantizamos que este programa agrandar&aacute; su pene o le devolvemos su dinero.</span></p>\r\n</div>\r\n</div>'),
(16, 'Â¿puedo bajar Manual + Video a mi pc?', '<div id="\\&quot;row_beneficios\\&quot;">\r\n<div id="\\&quot;txt_comentarios\\&quot;">\r\n<p><span style="color: rgb(90, 90, 90); font-family: Arial, sans-serif; font-size: 13px; text-align: justify;">Si, lo &uacute;nico que necesitas es una computadora conectada a internet e ingresar tu Email y tu Clave de acceso. El manual + video puedes visualizarlo directamente desde la web o bajar el manual en formato PDF y el video HD a tu PC.</span></p>\r\n</div>\r\n</div>'),
(17, 'Â¿cuÃ¡ndo comenzarÃ© a ver los resultados?', '<div id="\\&quot;row_beneficios\\&quot;">\r\n<div id="\\&quot;txt_comentarios\\&quot;">\r\n<p style="text-align: justify;"><span style="color: rgb(90, 90, 90); font-family: Arial, sans-serif; font-size: 13px; line-height: 20px; text-align: justify;">La mayor&iacute;a de nuestros clientes empiezan a observar adelantos tan s&oacute;lo despu&eacute;s de&nbsp;</span><strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; color: rgb(90, 90, 90); font-family: Arial, sans-serif; line-height: 20px; text-align: justify;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;">2 semanas,&nbsp;</span></strong><span style="color: rgb(90, 90, 90); font-family: Arial, sans-serif; font-size: 13px; line-height: 20px; text-align: justify;">algunos en una semana. Si usted usa este m&eacute;to regularmente notar&aacute; un aumento importante de su pene en longitud y grosor.</span></p>\r\n</div>\r\n</div>'),
(18, 'Â¿voy a recibir algÃºn tipo de correo en casa?', '<div id="\\&quot;row_beneficios\\&quot;">\r\n<div id="\\&quot;txt_comentarios\\&quot;">\r\n<p style="text-align: justify;"><span style="color: rgb(90, 90, 90); font-family: Arial, sans-serif; font-size: 13px; line-height: 20px; text-align: justify;">No. Respetamos tu privacidad y no se enviar&aacute; nunca nada por correo a tu casa, ni a&ntilde;adir&aacute;n tu direcci&oacute;n de correo electr&oacute;nico a ninguna lista. Querr&aacute;s que nuestro manual sea tu peque&ntilde;o secreto as&iacute; que el extracto de tu tarjeta de cr&eacute;dito vendr&aacute; a nombre de Pagosonline.com a efectos de privacidad.</span></p>\r\n</div>\r\n</div>'),
(19, 'Â¿quÃ© es exactamente un manual online?', '<div id="\\&quot;row_beneficios\\&quot;">\r\n<div id="\\&quot;txt_comentarios\\&quot;">\r\n<p><span style="margin: 0px; padding: 0cm; border: 1pt none windowtext; outline: 0px; font-size: 10pt; line-height: 20px; text-align: justify; font-family: Arial, sans-serif; color: rgb(90, 90, 90);">Un manual online es b&aacute;sicamente un manual al que puede acceder desde cualquier ordenador que tenga una conexi&oacute;n a internet. Cuando se suscriba o registre, usted recibe un email con su Clave que le permitir&aacute; acceder al manual en forma inmediata. Puede verlo o imprimirlo seg&uacute;n le convenga. Tambi&eacute;n tiene la opci&oacute;n de bajar el manual a su PC en formato PDF. N</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; line-height: 20px; text-align: justify; font-family: arial, helvetica, sans-serif; color: rgb(90, 90, 90);"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;">uestro manual es exclusivo por su clara descripci&oacute;n y compresi&oacute;n de las t&eacute;cnicas y ejercicios en idioma espa&ntilde;ol.&nbsp;</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;">La raz&oacute;n por la que hemos dise&ntilde;ado el manual online es que nos permite actualizarlo a&ntilde;adiendo nueva informaci&oacute;n regularmente, la cual estar&aacute; a su disposici&oacute;n al instante! Nuestro manual online tambi&eacute;n contiene fotograf&iacute;as en alta resoluci&oacute;n para que usted vea y aprenda detalladamente c&oacute;mo realizar los ejercicios. El</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;">&nbsp;manual est&aacute; en idioma espa&ntilde;ol. El video es profesional en Alta Definici&oacute;n tambi&eacute;n puede bajarlo a su PC.</span></span></p>\r\n</div>\r\n</div>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntastitulo`
--
-- Creación: 20-02-2013 a las 03:24:57
-- Última actualización: 24-05-2013 a las 21:01:35
--

DROP TABLE IF EXISTS `preguntastitulo`;
CREATE TABLE IF NOT EXISTS `preguntastitulo` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `preguntastitulo`
--

INSERT INTO `preguntastitulo` (`id`, `titulo`) VALUES
(1, 'Preguntas Frecuentes   ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes`
--
-- Creación: 20-02-2013 a las 03:24:57
-- Última actualización: 25-06-2013 a las 01:19:38
--

DROP TABLE IF EXISTS `redes`;
CREATE TABLE IF NOT EXISTS `redes` (
  `id` int(11) NOT NULL,
  `link` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `redes`
--

INSERT INTO `redes` (`id`, `link`) VALUES
(1, 'http://repositorio.imaginamos.com.co/SENA/peneperfecto/index.php'),
(2, 'http://repositorio.imaginamos.com.co/SENA/peneperfecto/index.php'),
(3, 'http://repositorio.imaginamos.com.co/SENA/peneperfecto/index.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrofraces`
--
-- Creación: 20-02-2013 a las 03:24:57
-- Última actualización: 28-05-2013 a las 19:45:33
--

DROP TABLE IF EXISTS `registrofraces`;
CREATE TABLE IF NOT EXISTS `registrofraces` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `registrofraces`
--

INSERT INTO `registrofraces` (`id`, `texto`) VALUES
(1, 'GARANTÃA DE DEVOLUCIÃ“ND EL 100% DEL DINERO  '),
(2, 'Unico pago con acceso de por vida'),
(3, 'Acceso inmediato con una clave o password'),
(4, 'Nada se enviarÃ¡ a su hogar'),
(5, 'A efectos de privacidad, su compra serÃ¡ cargada a nombre de PagosOnline.com'),
(6, 'La clave la recibirÃ¡ en forma inmediata en su email.'),
(7, 'Es un Ãºnico pago de solo USD $125.00'),
(8, 'El acceso es de por vida, no se le volverÃ¡ a cargar ningÃºn importe en su tarjeta.'),
(9, 'El pago es 100% seguro y confidencial, bajo la protecciÃ³n de PagosOnline.com'),
(10, 'Es el mÃ©todo existente de costo mÃ¡s efectivo.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrotexto`
--
-- Creación: 20-02-2013 a las 03:24:57
-- Última actualización: 13-06-2013 a las 04:13:12
--

DROP TABLE IF EXISTS `registrotexto`;
CREATE TABLE IF NOT EXISTS `registrotexto` (
  `id` int(11) NOT NULL,
  `texto` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registrotexto`
--

INSERT INTO `registrotexto` (`id`, `texto`) VALUES
(1, '<p><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; background-color: transparent; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; background-position: initial initial; background-repeat: initial initial;">Disponemos de distintas opciones de pago CON Y SIN TARJETAS!</span></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: justify;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: arial, helvetica, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;">Si haces tu pedido ahora mismo con tarjeta en nuestra p&aacute;gina Web tendr&aacute;s acceso inmediato a toda esta informaci&oacute;n, todo por el precio de&nbsp;<span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent; color: rgb(51, 51, 51);"><strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;">USD $125.00</strong></span>&nbsp;Es un &uacute;nico pago que te brinda acceso ilimitado y de por vida!</span></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: justify;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: arial, helvetica, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;"><strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;">ATENCION:</strong>&nbsp;No s&oacute;lo tendr&aacute;s acceso al Manual y el Video, sino tambi&eacute;n a nuestro Servicio de Ayuda las 24 hs.&nbsp;<span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent; color: rgb(255, 102, 0);"><strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;">HelpDesk</strong></span>&nbsp;ante cualquier duda o problema. Esto es algo en que nadie puede competir con nosotros. Podr&aacute;s encontrar otros sitios que ofrecen un m&eacute;todo parecido (no igual) a menor precio... pero no encontrar&aacute;s ninguno que te responda siempre todas las consultas haciendo un seguimiento de cada caso en particular. Tanto el Manual como la ayuda es EN ESPA&Ntilde;OL!</span></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: justify;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: arial, helvetica, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;">Empieza ahora mismo, por un pene m&aacute;s grande, fuerte y perfecto!&nbsp;</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: arial, helvetica, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;"><br />\r\n</span></p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultados`
--
-- Creación: 20-02-2013 a las 03:24:58
-- Última actualización: 09-08-2013 a las 01:20:34
--

DROP TABLE IF EXISTS `resultados`;
CREATE TABLE IF NOT EXISTS `resultados` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `banner` varchar(200) DEFAULT NULL,
  `texto` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `resultados`
--

INSERT INTO `resultados` (`id`, `titulo`, `banner`, `texto`) VALUES
(1, 'Resultados', '/img/027132688.png', '<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: justify;"><span style="color: rgb(102, 102, 102);"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: arial, helvetica, sans-serif;">En base a las estad&iacute;sticas y a los resultados obtenidos por nuestros clientes que han finalizado los ejercicios, se confirma que el aumento que se obtiene mensualmente va en promedio de&nbsp;<strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;">1.0 a 1.5 cent&iacute;metros de longitud de ganancia por mes, y de 0.5 a 1.2 cent&iacute;metros de grosor de ganancia por mes.</strong></span></span></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: justify;"><span style="color: rgb(102, 102, 102);"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: arial, helvetica, sans-serif;"><strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;"><img src="http://www.peneperfecto.com/images/stories/flecha1.png" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;" alt="" />&nbsp;Alargamiento:</strong>&nbsp;Puede aumentarle hasta 8 cent&iacute;metros m&aacute;s de longitud a su pene en un tiempo aproximado a 5 meses.</span></span></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: justify;"><span style="color: rgb(102, 102, 102);"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: arial, helvetica, sans-serif;"><strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;"><img src="http://www.peneperfecto.com/images/stories/flecha1.png" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;" alt="" />&nbsp;Engrosamiento:</strong>&nbsp;Puede aumentarle hasta 5 cent&iacute;metros m&aacute;s de grosor a su pene en un tiempo aproximado a 4 meses.</span></span></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: justify;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; background-color: transparent; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; background-position: initial initial; background-repeat: initial initial;">Los resultados que se obtienen son permanentes en estado erecto como en fl&aacute;cido, los resultados var&iacute;an dependiendo de la intensidad que se le dedique al programa! Para obtener el mayor resultado como ejemplo de estas fotograf&iacute;as de algunos de nuestros usuarios satisfechos, solo es necesario realizar la rutina recomendada por nuestro programa. </span></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: center;"><img src="/images/admin/Resultados/12.png" width="650" height="321" alt="" /></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: center;">&nbsp;</p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: center;"><img src="/images/admin/Resultados/01.png" width="547" height="256" alt="" /></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: center;"><img src="/images/admin/Resultados/02.png" width="459" height="359" alt="" /></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: center;"><img src="/images/admin/Resultados/03.png" width="519" height="262" alt="" /></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: center;"><img src="/images/admin/Resultados/04.png" width="500" height="363" alt="" /></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: center;"><img src="/images/admin/Resultados/05.png" width="550" height="389" alt="" /></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: center;">&nbsp;<img src="/images/admin/Resultados/10(2).png" width="510" height="350" alt="" /></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: center;">&nbsp;<img src="/images/admin/Resultados/07.png" width="459" height="359" alt="" /></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: center;"><img src="/images/admin/Resultados/08.png" width="370" height="331" alt="" /></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: center;"><img src="/images/admin/Resultados/09.png" width="550" height="389" alt="" /></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: center;"><img src="/images/admin/Resultados/06.png" width="495" height="371" alt="" /></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: center;"><img src="/images/admin/Resultados/11.png" width="520" height="350" alt="" /></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: center;">&nbsp;</p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px;"><strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: arial, helvetica, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;">Por favor lea estos datos de investigaci&oacute;n reciente del pene.</span></strong></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: justify;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; background-color: transparent; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; background-position: initial initial; background-repeat: initial initial;"><img src="http://www.peneperfecto.com/images/stories/flecha1.png" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;" alt="" />&nbsp;El tama&ntilde;o medio de un pene en erecci&oacute;n es de 15.6 cm. El 90% de los hombres poseen dicha longitud media.</span></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: justify;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; background-color: transparent; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; background-position: initial initial; background-repeat: initial initial;"><img src="http://www.peneperfecto.com/images/stories/flecha1.png" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;" alt="" />&nbsp;Un gran porcentaje de los hombres no puede tener relaciones de m&aacute;s de 3 minutos sin eyacular debido a la insuficiencia y debilidad del M&uacute;sculo Pubococc&iacute;geo (m&uacute;sculo del piso p&eacute;lvico).</span></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: justify;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; background-color: transparent; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; background-position: initial initial; background-repeat: initial initial;"><img src="http://www.peneperfecto.com/images/stories/flecha1.png" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;" alt="" />&nbsp;S&oacute;lo en Estados Unidos 30 Millones de hombres sufren de Disfunci&oacute;n Er&eacute;ctil (Impotencia).</span></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: justify;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; background-color: transparent; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; background-position: initial initial; background-repeat: initial initial;"><img src="http://www.peneperfecto.com/images/stories/flecha1.png" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;" alt="" />&nbsp;La mayor&iacute;a de los hombres tienen una pobre circulaci&oacute;n sangu&iacute;nea hacia el pene.</span></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: justify;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; background-color: transparent; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; background-position: initial initial; background-repeat: initial initial;"><img src="http://www.peneperfecto.com/images/stories/flecha1.png" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;" alt="" />&nbsp;A los 29 a&ntilde;os, los hombres ya no pueden obtener tantas erecciones 1/5 como cuando ten&iacute;an 20 a&ntilde;os.</span></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: justify;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; background-color: transparent; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; background-position: initial initial; background-repeat: initial initial;"><img src="http://www.peneperfecto.com/images/stories/flecha1.png" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;" alt="" />&nbsp;Muchas mujeres nunca han alcanzado el orgasmo durante el coito, y admiten que est&aacute;n insatisfechas con el rendimiento sexual de sus parejas.</span></p>\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: justify;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; background-color: transparent; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; background-position: initial initial; background-repeat: initial initial;"><img src="http://www.peneperfecto.com/images/stories/flecha1.png" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;" alt="" />&nbsp;La mayor&iacute;a de los hombres poseen un pene insuficiente, m&aacute;s d&eacute;bil y peque&ntilde;o del que podr&iacute;an tener.</span></p>\r\n<p style="margin: 1em 0px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: justify;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: arial, helvetica, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;"><img src="http://www.peneperfecto.com/images/stories/flecha1.png" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; background-color: transparent;" alt="" />&nbsp;En nuestras investigaciones hemos averiguado que el tama&ntilde;o medio del pene es de 15.6 cm. y la circunferencia media de 12.2 cm. En qu&eacute; grupo de este cuadro se encuentra usted?</span></p>\r\n<p style="margin: 1em 0px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;"><input type="image" src="/images/admin/tabla-hechos-es.png" width="233" height="138" hspace="8" align="left" /><strong style="background-color: transparent; font-family: arial, helvetica, sans-serif; font-size: 10pt; line-height: 20.390625px; text-align: justify; margin: 0px; padding: 0px; border: 0px; outline: 0px; color: rgb(24, 61, 122);">HECHO:</strong><span style="background-color: transparent; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; font-size: 10pt; line-height: 20.390625px; text-align: justify;">&nbsp;</span><span style="background-color: transparent; color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; font-size: 10pt; line-height: 20.390625px; text-align: justify;">En una reciente encuesta, el 67% de las mujeres admiten que est&aacute;n insatisfechas con el tama&ntilde;o del pene de su pareja.</span></p>\r\n<p style="margin: 1em 0px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: justify;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: arial, helvetica, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;">Esto prueba que el tama&ntilde;o realmente importa. Las mujeres ven a los hombres dotados m&aacute;s atractivos sexualmente y m&aacute;s capaces. Un pene de mayor tama&ntilde;o significa un &aacute;rea de mayor superficie, lo cual estimula m&aacute;s terminaciones nerviosas, resultando en una experiencia m&aacute;s placentera para los dos, usted y su pareja. Un pene mayor es una excitaci&oacute;n visual m&aacute;s natural para una mujer.</span></p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnicas`
--
-- Creación: 20-02-2013 a las 03:24:58
-- Última actualización: 18-07-2013 a las 04:49:01
--

DROP TABLE IF EXISTS `tecnicas`;
CREATE TABLE IF NOT EXISTS `tecnicas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) DEFAULT NULL,
  `descripcion` text,
  `imagen` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `tecnicas`
--

INSERT INTO `tecnicas` (`id`, `titulo`, `descripcion`, `imagen`) VALUES
(2, 'CirugÃ­a Peneana', '<div id="\\&quot;txt_beneficios\\&quot;">\r\n<p style="text-align: justify;"><span style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; font-size: 13px; line-height: 17px; text-align: justify;">La cirug&iacute;a peneana es un procedimiento riesgoso y costoso. Son procedimientos que tienen un costo mayor a los US$ 5.000 (D&oacute;lares). Puede resultar en complicaciones varias tales como edema prepucial, hematomas y segundas operaciones para reparar problemas de la primera. La cirug&iacute;a consiste en alargar el pene cortando el ligamento que sujeta la parte superior en la zona pubocox&iacute;gea. En contadas ocasiones, se llega a lograr un incremento longitudinal de 2 cent&iacute;metros, pero a costa de problemas para mantener relaciones sexuales.</span></p>\r\n</div>', '/img/03960741.jpg'),
(3, 'CÃ¡psulas, pÃ­ldoras o pastillas', '<div id="\\&quot;txt_beneficios\\&quot;">\r\n<p style="text-align: justify;"><span style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; font-size: 13px; line-height: 17px; text-align: justify;">Puede encontrar en internet muchos sitios que ofrecen c&aacute;psulas, cremas, p&iacute;ldoras o pastillas que prometen hacer crecer el pene unos 6 a 9 cm. No son m&aacute;s que enga&ntilde;os que se aprovechan de la comodidad de algunas personas de intentar conseguir mejoras (en este caso el agrandamiento de su pene) sin realizar esfuerzo alguno. No se deje enga&ntilde;ar. La &uacute;nica manera de lograr que el pene se agrande, es mediante ejercicios y una m&iacute;nima dedicaci&oacute;n.</span></p>\r\n</div>', '/img/133231710.png'),
(4, 'Stretchers', '<div id="\\&quot;txt_beneficios\\&quot;">\r\n<p style="text-align: justify;"><span style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; font-size: 13px; line-height: 17px; text-align: justify;">Los stretchers o alargadores son artefactos mec&aacute;nicos que mantienen el pene estirado durante per&iacute;odos prolongados. No son c&oacute;modos, ni tampoco peque&ntilde;os, por lo que dif&iacute;cilmente logre disimularlos con la vestimenta. Pueden causar da&ntilde;os al pene, ya que le ejercen una presi&oacute;n continua. Este sistema solo puede ofrecer mejoras en la longitud pero NO consigue un agrandamiento proporcional y equilibrado.</span></p>\r\n</div>', '/img/996897032.png'),
(7, 'Pesas', '<p style="text-align: justify;"><span style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; font-size: 13px; line-height: 17px; text-align: justify;">El alargamiento del pene mediante pesas, requiere colgar verdaderas pesas en su pene durante m&aacute;s de 30 minutos cada d&iacute;a. Las pesas pueden, en efecto, alargar el pene, pero con serias desventajas tales como: fuertes dolor, hematomas y da&ntilde;os en los tendones del &aacute;rea p&uacute;bica. Existen numerosos casos de estrangulamiento del pene, cortando la circulaci&oacute;n sangu&iacute;nea del pene, y llegando a provocar grandes infecciones e incluso culminando en amputaciones del miembro.</span></p>', '/img/13876045.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnicastitulo`
--
-- Creación: 20-02-2013 a las 03:24:58
-- Última actualización: 24-05-2013 a las 20:47:43
--

DROP TABLE IF EXISTS `tecnicastitulo`;
CREATE TABLE IF NOT EXISTS `tecnicastitulo` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tecnicastitulo`
--

INSERT INTO `tecnicastitulo` (`id`, `titulo`) VALUES
(1, 'TÃ©cnicas a evitar  ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `terminos`
--
-- Creación: 20-02-2013 a las 03:24:58
-- Última actualización: 01-08-2013 a las 04:19:49
--

DROP TABLE IF EXISTS `terminos`;
CREATE TABLE IF NOT EXISTS `terminos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(300) DEFAULT NULL,
  `descripcion` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `terminos`
--

INSERT INTO `terminos` (`id`, `titulo`, `descripcion`) VALUES
(4, 'LEA CUIDADOSAMENTE', '<p class="MsoNoSpacing" style="text-align: justify;"><b><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-language:\r\nES-CO">1. Acerca de Nosotros<o:p></o:p></span></b></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;\r\nmso-fareast-language:ES-CO">Peneperfecto.com es propiedad y operada por Infoproductos<o:p></o:p></span></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;"><b><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-language:\r\nES-CO">2. Acerca de Usted<o:p></o:p></span></b></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;\r\nmso-fareast-language:ES-CO">Al hacer la compra o suscripci&oacute;n a trav&eacute;s de este Sitio Web, Usted garantiza que es mayor de 18 a&ntilde;os y adem&aacute;s garantiza que entiende y acepta quedar sujeto a estos T&eacute;rminos.<o:p></o:p></span></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;"><b><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-language:\r\nES-CO">3. T&eacute;rminos y Condiciones<o:p></o:p></span></b></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;\r\nmso-fareast-language:ES-CO">3.1 Nos reservamos el derecho a modificar, variar o enmendar estos T&eacute;rminos de vez en cuando. No estaremos obligados por ninguna variaci&oacute;n en estos T&eacute;rminos a menos que haya sido acordada por escrito entre Usted y un Director con anterioridad a Su suscripcion.<o:p></o:p></span></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;"><span style="font-size: 10pt; font-family: Arial, sans-serif;">3.2 Pondremos un aviso en nuestra p&aacute;gina principal http://www.peneperfecto.com/index.html cuando estos T&eacute;rminos sean actualizados. Usted estar&aacute; sujeto a los t&eacute;rminos y condiciones vigentes en el momento en que haga la suscripci&oacute;n y/o Servicios. <o:p></o:p></span></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;"><b><span style="font-size: 10pt; font-family: Arial, sans-serif;">5. Suscripci&oacute;n.<o:p></o:p></span></b></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;"><span style="font-size: 10pt; font-family: Arial, sans-serif;">5.1<b> </b></span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;">Para tener acceso a nuestro programa y servicios usted primero tiene que suscribirse o registrarse como miembro.</span><b><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-language:\r\nES-CO"><o:p></o:p></span></b></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;"><span style="font-size: 10pt; font-family: Arial, sans-serif;">5.2 Puede hacer su compra o suscripci&oacute;n y/o Servicios a trav&eacute;s del Sitio Web, A trav&eacute;s de nuestros m&eacute;todos de pago con tarjetas de cr&eacute;dito y en efectivo desde su localidad.<o:p></o:p></span></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;"><span style="font-size: 10pt; font-family: Arial, sans-serif;">5.3 Por favor, tenga en cuenta que cualquier detalle y/o especificaciones sobre el programa y/o Servicios producidos por Nosotros (incluyendo cualquier fotograf&iacute;a de los Productos) pretenden ser simplemente una gu&iacute;a y dar una aproximaci&oacute;n general.</span><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-language:\r\nES-CO"><o:p></o:p></span></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;">5.4 La suscripci&oacute;n es de por vida, aunque actualicemos la web, &nbsp;el programa y los servicios usted siempre tendr&aacute; acceso a esta valiosa informaci&oacute;n para siempre.<span style="font-size: 9pt;"><o:p></o:p></span></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;"><b><span style="font-size: 10pt; font-family: Arial, sans-serif;">7. Programa<o:p></o:p></span></b></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;"><span style="font-size: 10pt; font-family: Arial, sans-serif;">7.1 Si compra este programa es para Su uso personal exclusivo. No pueden ser revendidos ni dados a terceros.<o:p></o:p></span></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;"><span style="font-size: 10pt; font-family: Arial, sans-serif;">7.2 Su clave de acceso o cuenta de usuario es de uso personal no puede compartirla o venderla, si usted lo hace su cuenta ser&aacute; deshabilitada inmediatamente, y no podr&aacute; recuperarla por violar estos t&eacute;rminos y condiciones.<o:p></o:p></span></p>\r\n<p class="MsoNormal" style="text-align: justify;"><span style="font-size: 10pt; line-height: 115%; font-family: Arial, sans-serif;">7.3 </span><span style="font-size: 10pt; line-height: 115%; font-family: Arial, sans-serif; background-position: initial initial; background-repeat: initial initial;">Usted puede acceder a sus datos personales con el fin de cambiar o modificar (en el &aacute;rea de usuarios, hay una opci&oacute;n para eso). puede cambiar su nombre, contrase&ntilde;a, quitar su tel&eacute;fono o &nbsp;agregarlo, modificar su email o cambiarlo, Tambi&eacute;n puede cancelar o modificar tus comentarios o votos en la encuesta personalmente con nosotros a trav&eacute;s de e-mail: info@peneperfecto.com<o:p></o:p></span></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;"><span style="font-size: 10pt; font-family: Arial, sans-serif;">7.4 Si no tiene acceso a internet o no tiene computadora puede bajar el programa (Manual + Video) a su computadora escribi&eacute;ndonos a info@peneperfecto.com<o:p></o:p></span></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;"><span style="font-size: 10pt; font-family: Arial, sans-serif;">7.5 El programa est&aacute; basado en un manual online que contiene toda la informacion exacta para obtener los m&uacute;ltiples beneficios con fotograf&iacute;as en alta resoluci&oacute;n acompa&ntilde;adas de un video HD con un modelo de una persona real que le ense&ntilde;a c&oacute;mo realizar los ejercicios, <o:p></o:p></span></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;"><b><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-language:\r\nES-CO">10. Precios y pago<o:p></o:p></span></b></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;\r\nmso-fareast-language:ES-CO">10.1 El precio del programa y/o Servicios ser&aacute; el que se muestra en el Sitio Web el d&iacute;a en que acepte Su compra.<o:p></o:p></span></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;\r\nmso-fareast-language:ES-CO">10.2 Todos los precios incluyen el IVA o impuestos similares.&nbsp;<o:p></o:p></span></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;"><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;\r\nmso-fareast-language:ES-CO">10.3&nbsp;La compra o suscripci&oacute;n a trav&eacute;s de tarjetas de cr&eacute;dito ser&aacute; cargada en su extracto bancario a nombre de Pagosonline.net&nbsp;<o:p></o:p></span></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;"><b><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-language:\r\nES-CO">13. Garant&iacute;a<o:p></o:p></span></b></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;"><span style="font-size:10.0pt;\r\nfont-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-language:ES-CO">13.1 Estamos seguros de que Usted quedar&aacute; satisfecho con nuestro programa y servicios que si Usted no queda satisfecho con el programa por no haber obtenido ninguno de los resultados especificados, le devolveremos el dinero que haya pagado por la suscripci&oacute;n con el mismo valor de la fecha de suscripci&oacute;n, </span>la garant&iacute;a cubre un tiempo de 6 meses, si en 6 meses su pene no aumento m&iacute;nimo de 2 a 8 Cent&iacute;metros de longitud o de 1 a 5 Cent&iacute;metro de grosor entonces le devolveremos el 100% de su dinero de la misma forma como lo pago, &nbsp;antes de pedir la devoluci&oacute;n de su dinero por no obtener ning&uacute;n resultado primero tiene que contactar al servicio HelpDesk para diagnosticar cual es la causa o problema que no le causo resultados y el servicio HelpDesk le har&aacute; un seguimiento rutinario para tratar o lograr obtener los resultados deseados, si no consigue los resultados deseados o garantizados, por favor notificar al email garantia@peneperfecto.com y pedir la devoluci&oacute;n de su dinero. <span style="font-size:10.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;\r\nmso-fareast-language:ES-CO"><o:p></o:p></span></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;">13.2 La garant&iacute;a no incluye los siguientes puntos:<b><o:p></o:p></b></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;">El uso indebido del programa<o:p></o:p></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;">No realizar la rutina recomendada por el del programa.<o:p></o:p></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;">No realizar los ejercicios al pie de la letra del programa.<o:p></o:p></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;">No utilizar el servicio HelpDesk en el tiempo de la garant&iacute;a.<o:p></o:p></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;">Si usted abandona el programa en el tiempo de la garant&iacute;a<o:p></o:p></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;">Si combina un programa distinto al nuestro.<o:p></o:p></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;">Si combina aparatos para agrandar el pene.<o:p></o:p></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;">Si combina pastillas, cremas, pesas o Jes Extender.<o:p></o:p></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;">Si combina ejercicios o t&eacute;cnicas diferentes a la nuestra.<o:p></o:p></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;">Si no pide su devoluci&oacute;n en el tiempo garantizado.<o:p></o:p></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;">Si se realiza una cirug&iacute;a en el pene en el tiempo garantizado.<o:p></o:p></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;">Si no descansa el pene m&iacute;nimo 2 d&iacute;as a la semana.<o:p></o:p></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;">Si no aplica las recomendaciones y seguimientos por nuestro servicio HelpDesk<o:p></o:p></p>\r\n<p class="MsoNoSpacing" style="text-align: justify;"><b><span style="font-size:10.0pt;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;mso-fareast-language:\r\nES-CO">14 Servicio HelpDesk<o:p></o:p></span></b></p>\r\n<p style="text-align: justify;"><span style="font-family: Arial, sans-serif; font-size: 10pt; text-align: justify;">El servicio HelpDesk 24 Horas al d&iacute;a es exclusivo para usuarios suscritos, la funci&oacute;n de este servicio es ayudar a los usuarios a resolver sus dudas, preguntas o problemas que tengan, si usted no tiene resultados en los primeros meses o presenta alg&uacute;n tipo de problema por favor contactar al servicio HelpDesk inmediatamente para hacerle un seguimiento y ayudarlo a lograr los resultados y sus objetivos.</span>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `testimonios`
--
-- Creación: 20-02-2013 a las 03:24:58
-- Última actualización: 03-08-2013 a las 18:00:44
--

DROP TABLE IF EXISTS `testimonios`;
CREATE TABLE IF NOT EXISTS `testimonios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) DEFAULT NULL,
  `descripcion` text,
  `imagen` varchar(200) DEFAULT NULL,
  `fecha` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Volcado de datos para la tabla `testimonios`
--

INSERT INTO `testimonios` (`id`, `titulo`, `descripcion`, `imagen`, `fecha`) VALUES
(50, 'ssssssss', '<p>&nbsp;ssssssssssss</p>', '/img/874538748.png', '04/15/2013'),
(51, 'ssssss', '<p>&nbsp;ssssssss</p>', '/img/285771764.png', '05/15/2013'),
(52, 'jjjjjjjjj', '<p>&nbsp;jjjjjjjjjjjjjjjjjjjj</p>', '/img/599766690.png', '06/15/2013'),
(53, 'iiiiiii', '<p>&nbsp;iiiiiiiiiiii</p>', '/img/86692830.png', '07/15/2013'),
(44, 'wwwwwwq', '<p>&nbsp;qqqqqqqq</p>', '/img/097093349.png', '10/15/2012'),
(45, 'jjj', '<p>&nbsp;jjjjjj</p>', '/img/020686646.png', '11/15/2012'),
(46, 'nnnnnnnnn', '<p>&nbsp;nnnnnnnnnn</p>', '/img/641238724.png', '12/15/2012'),
(47, 'jjjjjjj', '<p>&nbsp;jjjjjjjjjj</p>', '/img/318894882.png', '01/15/2013'),
(48, 'xxxxxx', '<p>&nbsp;xxxxxxxxx</p>', '/img/98670910.png', '02/15/2013'),
(49, 'jjjkkkkkk', '<p>&nbsp;hhhhhhh</p>', '/img/483916980.png', '03/15/2013'),
(39, 'aaaaaaaa', '<p>&nbsp;aaaaaaaaaaaaa</p>', '/img/09421554.png', '05/15/2012'),
(40, 'hhhhhhhhh', '<p>&nbsp;hhhhhhhhhhh</p>', '/img/847918766.png', '06/15/2012'),
(41, 'eeeeee', '<p>&nbsp;eeeeeee</p>', '/img/994788897.png', '07/15/2012'),
(42, 'ffffffff', '<p>&nbsp;ffffffffff</p>', '/img/940184143.png', '08/15/2012'),
(43, 'ccccc', '<p>&nbsp;ccccccc</p>', '/img/088718359.png', '09/15/2012'),
(34, 'aaaaaaaaa', '<p>yyyyyyyyyyyy</p>', '/img/743553971.png', '12/15/2011'),
(35, 'dfdfdfdfdf', '<p>dfdfdf</p>', '/img/794159373.png', '01/15/2012'),
(36, 'rrrrrrrrrrrr', '<p>&nbsp;rrrrrrrrrrrrrr</p>', '/img/171917420.png', '02/15/2012'),
(37, 'oooooooo', '<p>&nbsp;oooooooooo</p>', '/img/834234498.png', '03/15/2012'),
(38, 'lllllll', '<p>&nbsp;lllllllllll</p>', '/img/940984863.png', '04/15/2012'),
(32, 'Jose gregorio castellanos (Colombia)', '<p><span style="font-family: Arial, sans-serif; font-size: 9pt; line-height: 115%;">Gracias se&ntilde;ores ustedes son los mejores miren como quedo mi pene de excelente esto era justo lo que quer&iacute;a y lo logre mi pene es ahora m&aacute;s fuerte, grande y duro.</span></p>\r\n<p class="MsoNormal"><o:p></o:p></p>', '/img/4421413.png', '11/15/2011'),
(17, 'Miguel, El Salvador.', '<div id="\\&quot;\\\\&quot;txt_beneficios\\\\&quot;\\&quot;">\r\n<p style="text-align: justify;"><span style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; font-size: 13px; line-height: 20.390625px; text-align: justify;">La verdad es que nunca pens&eacute; que pudiera funcionar, pero he conseguido en tan solo 4 meses que mi pene mida 7 cent&iacute;metros m&aacute;s. y tambien aumento el grosor unos 3.7 centimetros mas. Ahora mi vida sexual ha cambiado dr&aacute;sticamente y las relaciones que tengo son muy satisfactorias. Muchas gracias.</span></p>\r\n</div>', '/img/714949363.png', '01/15/2011'),
(18, 'RamÃ³n. Segovia, ', '<div id="\\&quot;\\\\&quot;txt_beneficios\\\\&quot;\\&quot;">\r\n<p style="text-align: justify;"><span style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; font-size: 13px; line-height: 20.390625px; text-align: justify;">gracias a peneperfecto he conseguido alargar casi 9 cent&iacute;metros mi pene y tambien engrosarlo 6 centimetros. En realidad me sorprendo cuando veo mi gran pene, es perfecto para realizar peliculas porno jeje, fisicamente me encuentro pleno y puedo disfrutar de mis encuentros sexuales al 100%.</span></p>\r\n</div>', '/img/134912032.png', '02/15/2011'),
(19, 'Ricardo, Mendoza.', '<div id="\\&quot;\\\\&quot;txt_beneficios\\\\&quot;\\&quot;">\r\n<p style="margin: 10px 0px 15px; padding: 0px; border: 0px; outline: 0px; color: rgb(102, 102, 102); font-family: ''Trebuchet MS'', sans-serif; line-height: 20.390625px; text-align: justify;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 10pt; background-color: transparent; font-family: arial, helvetica, sans-serif; color: rgb(90, 90, 90); background-position: initial initial; background-repeat: initial initial;">Con muy poco esfuerzo y gracias al programa el cual es muy explicativos, mi vida ha dado un giro de 180&ordm; y me encuentro estupendamente bien con mi nuevo tama&ntilde;o de pene. F&iacute;jense.</span></p>\r\n</div>', '/img/558542998.png', '03/15/2011'),
(20, 'MatÃ­as, ', '<div id="\\&quot;\\\\&quot;txt_beneficios\\\\&quot;\\&quot;">\r\n<p style="text-align: justify;"><span style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; font-size: 13px; line-height: 20.390625px; text-align: justify;">Simplemente queria que mi pene fuera mas grueso y me emocione tanto que logre llegar a tener el pene super grueso a las chicas les encanta cuando la penetro y las hago llegar muy rapido, logre aumentar 7 centimetros mas de grosor ahora puedo decir que mi vida sexual ha cambiado radicalmente, sinti&eacute;ndome ahora seguro de mi virilidad.&nbsp;</span></p>\r\n</div>', '/img/238708060.png', '04/15/2011'),
(21, 'Ãlvaro, ', '<div id="\\&quot;\\\\&quot;txt_beneficios\\\\&quot;\\&quot;">\r\n<p style="text-align: justify;"><span style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; font-size: 13px; line-height: 20.390625px; text-align: justify;">Desde que un amigo me recomend&oacute; el sistema, mi pene ha crecido 3 cent&iacute;metros y tan solo llevo unas semanas utiliz&aacute;ndolo. Es muy sencillo y siguiendo los pasos que se indican se obtienen resultados de forma inmediata.</span></p>\r\n</div>', '/img/25288748.png', '05/15/2011'),
(22, 'Manu, ', '<div id="\\&quot;\\\\&quot;txt_beneficios\\\\&quot;\\&quot;">\r\n<p style="text-align: justify;"><span style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; font-size: 13px; line-height: 20.390625px; text-align: justify;">Desde que prob&eacute; peneperfecto no solo ha mejorado el tama&ntilde;o de mi miembro, sino mi autoestima. Antes me daba verg&uuml;enza acercarme a una chica y que se riera de mi pero ahora, eso ya no me pasa.. y no vean lo bien que me siento!!</span></p>\r\n</div>', '/img/967085216.png', '06/15/2011'),
(23, 'Leandro, ', '<div id="\\&quot;\\\\&quot;txt_beneficios\\\\&quot;\\&quot;">\r\n<p><span style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; font-size: 13px; line-height: 20.390625px; text-align: justify;">Los ejercicios est&aacute;n re genial, les digo que tienen que probar, a m&iacute; me di&oacute; resultado, desde hace un tiempo estoy notando el aumento y estoy super conforme, pienso seguir practic&aacute;ndolos hasta llegar a mi objetivo. Saludos.</span></p>\r\n</div>', '/img/210517534.png', '07/15/2011'),
(24, 'RubÃ©n, MÃ¡laga.', '<div id="\\&quot;\\\\&quot;txt_beneficios\\\\&quot;\\&quot;">\r\n<p style="text-align: justify;"><span style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; font-size: 13px; line-height: 20.390625px;">Todos sabemos que el tama&ntilde;o s&iacute; que importa&hellip;y, si las chicas se cambian el tama&ntilde;o del pecho o la forma de la nariz, por que nos vamos a tener que conformar nosotros con un pene minusculo?? por fin alguien se acuerda de nosotros!! y de la importancia que para nosotros tiene nuestro &ldquo;amiguito&rdquo;.</span></p>\r\n</div>', '/img/956177624.png', '08/15/2011'),
(30, 'Gilberto, Salvador (BahÃ­a)', '<p style="text-align: justify;"><span style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; font-size: 13px; line-height: 20.390625px; text-align: justify;">Como se suele decir, una imagen vale m&aacute;s que mil palabras, as&iacute; que juzguen ustedes mismos si esto funciona o no. Estoy content&iacute;simo, la verdad.</span></p>', '/img/922449843.png', '09/15/2011'),
(31, 'Luciano, Mar del Plata', '<p style="text-align: justify;"><span style="color: rgb(90, 90, 90); font-family: arial, helvetica, sans-serif; font-size: 13px; line-height: 20.390625px; text-align: justify;">No me hab&iacute;a cre&iacute;do una sola palabra de todo esto, pero ya estaba desesperado, no era capaz de aguantar mis eyaculaciones y estaba harto, as&iacute; que me decid&iacute; y puedo decir que es lo mejor que he podido hacer por mi y por mi novia.</span></p>', '/img/895274218.png', '10/15/2011');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `testimoniostitulo`
--
-- Creación: 20-02-2013 a las 03:24:58
-- Última actualización: 24-05-2013 a las 20:56:17
--

DROP TABLE IF EXISTS `testimoniostitulo`;
CREATE TABLE IF NOT EXISTS `testimoniostitulo` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `testimoniostitulo`
--

INSERT INTO `testimoniostitulo` (`id`, `titulo`) VALUES
(1, 'TÃ©stimonios  ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--
-- Creación: 20-02-2013 a las 03:24:58
-- Última actualización: 04-08-2013 a las 06:52:06
--

DROP TABLE IF EXISTS `venta`;
CREATE TABLE IF NOT EXISTS `venta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `pais` varchar(100) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `fpago` varchar(100) DEFAULT NULL,
  `total` double DEFAULT NULL,
  `descripcion` text,
  `confirmacion` int(11) DEFAULT NULL,
  `pass` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1431 ;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id`, `fecha`, `nombre`, `apellido`, `pais`, `mail`, `telefono`, `fpago`, `total`, `descripcion`, `confirmacion`, `pass`) VALUES
(13, '2012-02-02', 'carlos', 'gomez', 'Colombia', 'jesus.rincon@imaginamos.co', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2013, '21232f297a57a5a743894a0e4a801fc3'),
(12, '2012-02-02', 'carlos', 'gomez', 'Colombia', 'caos_agp@hotmail.com', '000 000 00 00', 'Efectivo', 98, 'Pendiente Por Agregar', 2013, '3e7666a270753bdd88dd621bd791e879'),
(11, '2012-02-02', 'carlos', 'gomez', 'Colombia', 'caos_agp@hotmail.com', '000 000 00 00', 'Efectivo', 98, 'Pendiente Por Agregar', 2013, '6dab0702df8b54673023977202abe097'),
(10, '2012-02-02', 'carlos', 'gomez', 'Colombia', 'caos_agp@hotmail.com', '000 000 00 00', 'Efectivo', 98, 'Pendiente Por Agregar', 2013, '68a964cb8b908ae343bb2b57ba319583'),
(9, '2012-02-02', 'carlos', 'gomez', 'Colombia', 'caos_agp@hotmail.com', '000 000 00 00', 'Efectivo', 98, 'Pendiente Por Agregar', 2013, 'b8ad8f19047d43dde5dfc1e90729ae20'),
(8, '2012-02-02', 'sdfg', 'sdfg', 'Azerbaijan', 'asdfasd2@sdfksdfa.com', '000 000 00 00', 'Efectivo', 98, 'Pendiente Por Agregar', 2013, 'f7e32785299411ec8a48e5ae39d2609d'),
(14, '2012-02-03', 'mateo', 'escobar', 'Colombia', 'mateo@imaginamos.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2013, '51f9d75a74b5761ede9ff68940c23dce'),
(15, '2012-02-03', 'mateo', 'escobar', 'Colombia', 'mateo@imaginamos.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2013, 'b4e4bbbb6c1c3f1db736540c237d1adc'),
(16, '2012-02-13', 'mateo', 'escobar', 'Colombia', 'mateo@imaginamos.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2013, '855ac8427aeb1eb68735f267ae91761d'),
(17, '2012-02-13', 'mateo', 'escobar', 'Colombia', 'mateo@imaginamos.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2013, '053d7b558a4e48b3e26e8e3555dbb87e'),
(18, '2012-02-13', 'mateo', 'escobar', 'Colombia', 'mateo@imaginamos.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2013, '58e1ecbde9d67f2d6a7d60a1979ddf69'),
(19, '2012-02-13', 'mateo', 'escobar', 'Colombia', 'mateo@imaginamos.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2013, '0301568eeef3fbb461106ac460cb73ca'),
(20, '2012-02-13', 'mateo', 'escobar', 'Colombia', 'mateo@mateoescobar.com.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2013, '8ece956f5fca302b82d8edc86a969ee9'),
(21, '2012-02-13', 'mateo', 'escobar', 'Colombia', 'teodesign@yahoo.com.co', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2013, '67b1f67b41a5f0c3fe99bed7a60603fb'),
(22, '2012-02-17', 'alguine', 'anguien 2', 'Colombia', 'alguien@algo.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2013, '3fca27197a7989b7e832e70352432e0b'),
(23, '2012-02-17', 'alguine', 'anguien 2', 'Colombia', 'alguien@algo.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2013, '46aeae74e69918d31af872b5af57ca60'),
(24, '2012-02-20', 'fab', 'Ba', 'Antigua and Barbuda', 'fabianbaezalopez@gmail.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2013, 'd41e766be7a76a7f501c7eccf01fd1c8'),
(25, '2012-02-22', 'xxxxxx', 'xxxxxx', 'Colombia', 'caos_agp@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2013, '1d456af9a8981ec4b2eae98368b22e27'),
(26, '2012-02-22', 'xxxxxx', 'xxxxxx', 'Colombia', 'caos_agp@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2013, '8bff66c406548a66f3c1ba291175880e'),
(27, '2012-02-22', 'prueba ', 'ape prueba', 'Colombia', 'caos_agp@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2013, '902c46d322da3346688bbf5a2ddcec94'),
(28, '2012-02-23', 'ssdcdff', 'dfdfdfd', 'Paraguay', 'artu200@hotmail.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2013, '02e5d02cf6e42ebb124b92d0789cc761'),
(29, '2012-02-23', 'arturo', 'linero', 'Paraguay', 'artu200@hotmail.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2013, '58a288cc0fd85018ff27402ba3745918'),
(30, '2012-02-23', 'arturo', 'linero', 'Paraguay', 'artu200@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2013, '5f6159c34a0ef78392d7b04f50c2a674'),
(31, '2012-02-23', 'arturo', 'linero', 'Colombia', 'artu200@hotmail.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2013, 'fd8444e6eff6f5bd108ab20fcad6ea6f'),
(32, '2012-02-27', 'prueba carlos', 'apellido carlos', 'Colombia', 'caos_agp@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2013, 'c3fc8563a61bfea8b172c371320fe072'),
(33, '2012-02-27', 'prueba carlos', 'apellido carlos', 'Colombia', 'caos_agp@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2013, '700defee4b7a42159d132056ea1d3ff8'),
(34, '2012-02-28', 'mateo', 'escobar', 'Colombia', 'mateo@mateoescobar.com.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2013, '32e0809699e791375fcd9aac11908701'),
(35, '2012-02-28', 'Raul', 'Angulo', 'Colombia', 'mateo@mateoescobar.com.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2013, '93bd9903bb88eed52d063fed4a990f48'),
(36, '2012-03-01', 'm', 'm', 'Colombia', 'm@m.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2013, 'daf615d15530270e2ebe759735775433'),
(37, '2012-03-05', 'arturo', 'garcia', 'Chile', 'artu200@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8b7c1f8e2b8d270837a022d0b489dd21'),
(38, '2012-03-20', 'mateo', 'escobar', 'Brazil', 'mateo@mateoescobar.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f033515d72df97a869d35aeb7180d330'),
(39, '2012-03-20', 'mateo', 'escobar', 'Argentina', 'mateo@mateoescobar.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5b4c6f05e39f90fcebd51be99338c42e'),
(40, '2012-03-20', 'yygggggggggggg', 'gygygyg@live.com', 'Angola', 'hvgbvgfh', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b281c77f91aa1556563a6ec11bbd49e7'),
(41, '2012-03-29', 'Prueba', 'Prueba test', 'Anguilla', 'Egipto', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e49e4e816936091aeb65e549e7c87921'),
(42, '2012-04-10', 'carlos andres', 'fernandez', 'Chile', '1412451@live.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'bca2ed60a4a5528f2741e4e4a79d49fe'),
(43, '2012-04-10', 'carlos andres', 'fernandez', 'Chile', '1412451@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '0de36dd14008c8b5c36c64123ecd17d2'),
(44, '2012-04-10', 'carlos cristian', 'gomez', 'Colombia', 'carsdjj@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'cf63faa678f6173aeb2cab2ba507be48'),
(45, '2012-04-16', 'ccssdd', 'dfdfd@live.com', 'Anguilla', 'sdsdsad', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6bf0fe5c8cf59bf87de31cd2e530a247'),
(46, '2012-05-08', 'ergtfgdfgfd', 'fgfgdgdg', 'Algeria', 'aasasas@live.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'aa8fc23952f8927e8b2a92c03e309c74'),
(47, '2012-06-20', 'sdsd', 'ssdddd', 'Honduras', 'sdsds@live.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5829c926719abb2613529006af56987f'),
(48, '2012-06-20', 'sdsd', 'ssdddd', 'Honduras', 'sdsds@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '107d7a8353b332bd2f54cc92c6dcc44e'),
(49, '2013-03-01', 'dfdfdf', 'dfdfd', 'Colombia', 'dfdfdf', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '3046fa033b3f9ffa8c1ab17a39e9ae01'),
(50, '2013-03-18', 'fhghgfhfh', 'hjhjf', 'Chile', 'yuyuyu@live.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '515fba80ce9cc713ada1c39fe8f5e4de'),
(51, '2013-03-18', 'dfdf', 'dfdfd', 'Argentina', 'dfdfd@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '0ee9b17918e6be7edd0916801132d036'),
(52, '2013-03-19', 'fgdfgdf fgdf', 'fdgdfg dfgdfg', 'Azerbaijan', 'dfdfjh@live.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'bed12aaa8aa614ec7be8eb3484fe8530'),
(53, '2013-03-19', 'fgdfgdf fgdf', 'fdgdfg dfgdfg', 'Azerbaijan', 'dfdfjh@live.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '3286e2fa32cad407b8b6a1a7ac5eabff'),
(54, '2013-03-19', 'fgdfgdf fgdf', 'fdgdfg dfgdfg', 'Canada', 'dfdfjh@live.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '109ee9ff7dc5d759bdb86d60d8b6307f'),
(55, '2013-03-19', 'dfdfdfdf fdf', 'dfdfd', 'Colombia', 'fdfd@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'df68996d6daf0072a2b8783775239c96'),
(56, '2013-03-19', 'dfdfdfdf fdf', 'dfdfd', 'Colombia', 'fdfd@live.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd64555095d748265ff97c6435916ecca'),
(57, '2013-03-19', 'dfdfdfdf fdf', 'dfdfd', 'Colombia', 'fdfd@live.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8b334d6b5b1362919e14c10cb5eabe0b'),
(58, '2013-03-20', 'dfdf dfd', 'dfdf', 'Algeria', 'tyy@live.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1347e227cc7563f11e91ca106789ae62'),
(59, '2013-03-26', 'Imaginamos', 'Imaginamos', 'Colombia', 'oscar11082007@hotmail.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '7a61e0390087c06e86531f1288b9993f'),
(60, '2013-03-26', 'Andres', 'Correa', 'Colombia', 'prueba@imaginamos.com', '3208684343', 'Efectivo', 175000, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '131b0ba0cd2f7b41c70393a4204ad416'),
(66, '2013-04-01', 'carlod', 'geremias', 'Argentina', 'artu200@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '74923f5dad2e513d6cedf34b1e6e0c8e'),
(68, '2013-04-01', 'dfdf', 'dddddddd', 'Belgium', 'artu200@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f8a8607f17cdbdb203f0b35351851a75'),
(61, '2013-04-01', 'dddddddd', 'dddddddd', 'Algeria', 'artu200@hotmail.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '663962aeb771ac2811b8e7bd111e4e3f'),
(62, '2013-04-01', 'dddddddd', 'dddddddd', 'Algeria', 'artu200@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '714da08d362334853b04e098ccd3e6e7'),
(63, '2013-04-01', 'fgfg', 'fgf', 'Andorra', 'artu200@hotmail.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'aaaa961aa58a1b20f8c6aeced2ef6710'),
(64, '2013-04-01', 'fgfg', 'dddddddd', 'Algeria', 'artu200@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8d9883e16c6f7459ede7c26d382a8026'),
(65, '2013-04-01', 'dddddddd', 'dddddddd', 'Argentina', 'artu200@hotmail.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '0e86bc9f5a14cfc84e40eb9a70ad7389'),
(67, '2013-04-01', 'carlod', 'geremias', 'Argentina', 'artu200@hotmail.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c95d2b0ebb366edcc25fc4f2a5cddb8d'),
(69, '2013-04-01', 'dfdf', 'dddddddd', 'Belgium', 'artu200@hotmail.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '62cdbf5ca1cab3fc19318cd22a4a4e3f'),
(70, '2013-04-01', 'dfdf', 'dddddddd', 'Belgium', 'artu200@hotmail.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '35d54846c6e850e40095082a065c0670'),
(71, '2013-04-01', 'Carlos', 'dddddddd', 'Algeria', 'artudf00@hotmail.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8fb1608cc9d6bc4f8310d8728ff47041'),
(72, '2013-04-02', 'dddddddd', 'dddddddd', 'Andorra', 'prueba@imaginamos.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '4de5ae6614e9da26b36c2796531bfcc1'),
(73, '2013-04-02', 'dddddddd', 'dddddddd', 'Andorra', 'prueba@imaginamos.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '853280d4d0caa250c8432cae85581824'),
(74, '2013-04-02', 'arturo', 'dddddddds', 'Colombia', 'artu200@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '861032094c597926cb822601ded7a07b'),
(75, '2013-04-02', 'dddddddd', 'dddddddd', 'Andorra', 'prueba@imaginamos.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '74b7694cc03c9f3b4e8e5a34348905bf'),
(76, '2013-04-02', 'dddddddd', 'dddddddd', 'Albania', 'artu200@hotmail.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '16fe476c64f7d159c167671f7ce22bc6'),
(77, '2013-04-02', 'XCFVXV', 'VB', 'Algeria', 'prueba@imaginamos.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '1451fa793854bd183daba14094b1ed82'),
(78, '2013-04-09', 'lfkja', 'lskjdf', 'Albania', 'natalia@hotmail.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'ff8f37b50f580d0a17e5851c2e5b4f3d'),
(79, '2013-04-11', 'imaginamos', 'imaginamos', 'Colombia', 'prueba@imaginamos.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '53bf2321e070dda5312cb5dd99956184'),
(80, '2013-04-11', 'prueba2', 'pperfecto', 'Colombia', 'info@imaginmaos.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2983b82ea4d3a73a344b658f9fe6556f'),
(81, '2013-04-11', 'carlos', 'owen', 'Colombia', 'carlitos@hotmail.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'caf0ea583ad793bfe6d1092e1af52362'),
(82, '2013-04-11', 'carlos', 'owen', 'Austria', 'carlitos@hotmail.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'aa73b155fa251047f2e8b603355c7144'),
(83, '2013-04-11', 'carlos', 'owen', 'Austria', 'carlitos@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '91088bd497bc746e1b87446aae53157f'),
(84, '2013-04-12', 'aasdsd', 'sssssds', 'Colombia', 'asas@live.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '8379a79a595832bcdcbf572319e427e0'),
(85, '2013-04-12', 'aasdsd', 'sssssds', 'Argentina', 'asas@live.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '284a75c5f1b8298b045147d6d749674f'),
(86, '2013-04-15', 'fgg', 'fgfgfg', 'Algeria', 'fgfgfg', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '0cf0692ad7fc5246a75f725e0d10105c'),
(87, '2013-04-15', 'fgg', 'fgfgfg', 'Andorra', 'fgfgfg', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'ff0612bfc4e29d9f570be3a6558b98e8'),
(88, '2013-04-16', 'fgg', 'fgfgfg', 'Algeria', 'fgfgfg', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '508df19ffc1ce0019b6fc0b6ec8100a2'),
(89, '2013-04-17', 'Colombiano5', 'fgfgfg', 'Aruba', 'prueba@imaginamos.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '068f0f2a9e5c04817b734072edd67738'),
(90, '2013-04-17', 'Colombiano5', 'fgfgfg', 'Argentina', 'prueba@imaginamos.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'c5121f593688ac59e78b7a8e7add129e'),
(91, '2013-04-17', 'Colombiano5', 'fgfgfg', 'Colombia', 'prueba@imaginamos.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '2d2f4723439e3a97195c912d03584473'),
(92, '2013-04-17', 'Colombiano5', 'fgfgfg', 'Costa Rica', 'prueba@imaginamos.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '06725168f5d1b695b5bb6905e7a42504'),
(93, '2013-04-17', 'Colombiano5', 'fgfgfg', 'Costa Rica', 'prueba@imaginamos.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '076cd604a8cf4661ac584efe32f9c0d2'),
(94, '2013-04-17', 'Colombiano5', 'fgfgfg', 'Algeria', 'prueba@imaginamos.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '574a10351014a5a720d7f94f68945dfa'),
(95, '2013-04-17', 'Colombiano5', 'fgfgfg', 'Angola', 'prueba@imaginamos.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '745cba8b280b56473eeca582da1052c9'),
(96, '2013-04-17', 'Colombiano5', 'fgfgfg', 'Angola', 'prueba@imaginamos.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '5ef4e4db1d36eca302275ed5768a2596'),
(97, '2013-04-22', 'carlos', 'andres', 'Bangladesh', 'carlitos1@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'c610746a8f138c346ce5ebccefd6155e'),
(98, '2013-04-22', 'carlos', 'andres', 'Bangladesh', 'carlitos1@live.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '2c16f36d891caf4f96216885c9958d04'),
(99, '2013-04-23', 'juyu', 'yuyu', 'Antigua and Barbuda', 'ghgh', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '5115fdf5b61a7f314951166c5ae86470'),
(100, '2013-04-24', 'Diana', 'Sandoval', 'Colombia', 'sss', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '5230fe1b91224ad8cdac3f91b05b3a8f'),
(101, '2013-04-24', 'Diana', 'Sandoval', 'Colombia', 'sandoval_ing@yahoo.es', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'e26c79ed044a77d4d43e80a823f64af1'),
(102, '2013-04-24', 'sadas', 'asdsa', 'Oman', 'sandoval_ing@yahoo.es', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '27196852c486717bb83ff603c5eafab8'),
(103, '2013-04-29', 'aasas', 'dfdsf', 'Antarctica', 'dfgdf', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '8af61b6c1ea1bafb6bee31da4b51d7fc'),
(104, '2013-04-29', 'aasas', 'dfdsf', 'France', 'dfgdf', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '85f62b6503c3b4f0cf8d944d06c024d5'),
(105, '2013-04-29', 'aasas', 'dfdsf', 'Dominica', 'dfgdf', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '016ef2c0db71d425c893bc5bfde7cefb'),
(106, '2013-04-29', 'aasas', 'dfdsf', 'Costa Rica', 'dfgdf', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '053a2bdc925fe466117855659b11c622'),
(107, '2013-04-29', 'andres', 'mierda', 'Costa Rica', 'caga@live.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '6e2f466807558044f1c81d684627184c'),
(108, '2013-04-29', 'andres', 'mierda', 'Costa Rica', 'caga@live.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '6ae774f68344e9d1cfdcc0ccb663e22f'),
(109, '2013-04-29', 'andres', 'mierda', 'Costa Rica', 'caga@live.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '2472cf31b5e14b2c303bdab9c79430d9'),
(110, '2013-04-29', 'andres', 'mierda', 'Costa Rica', 'caga@live.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'b028510548706e64a4955f7d86a9bcca'),
(111, '2013-04-29', 'andres', 'mierda', 'Costa Rica', 'caga@live.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'b913f81b7a1013ab0491c098841ab473'),
(112, '2013-04-29', 'andres', 'mierda', 'Costa Rica', 'caga@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '5b930031582e11a1fcfed2cd25311ece'),
(113, '2013-04-29', 'andres', 'mierda', 'Costa Rica', 'caga@live.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '9f1ff47efb6dc2b1b30b9e86dee6f18e'),
(114, '2013-04-29', 'andres', 'mierda', 'Colombia', 'caga@lieve.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'ee7894eb6c2a69077a2d34990a10a8af'),
(115, '2013-04-29', 'andres', 'mierda', 'Colombia', 'caga@lieve.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'bfc2da38f3300fdbe7992c183c865d26'),
(116, '2013-04-29', 'andres', 'mierda', 'Colombia', 'caga@lieve.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '0867923500761bf97d85cdba2b8dd598'),
(117, '2013-04-29', 'aasas', 'mierda', 'Andorra', 'caga@lieve.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'e254f081d9532dab7cd40f8da67abfd8'),
(118, '2013-04-29', 'aasas', 'mierda', 'Andorra', 'caga@lieve.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '02e6cb7fd4b4c67fe38c8cce8adae499'),
(119, '2013-04-29', 'aasas', 'mierda', 'Andorra', 'caga@lieve.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'd23556ffe9261ab43a725c83b502c6db'),
(120, '2013-04-29', 'aasas', 'mierda', 'Andorra', 'caga@lieve.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'caae48c52c05395b211fa9674245cb0a'),
(121, '2013-04-29', 'aasas', 'mierda', 'Andorra', 'caga@lieve.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'b0d3e560fc2ea160711cf4da599af551'),
(122, '2013-04-29', 'aasas', 'mierda', 'Andorra', 'caga@lieve.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'f6018e24b701ea7d452bc33b2d6dfc25'),
(123, '2013-04-29', 'aasas', 'mierda', 'Andorra', 'caga@lieve.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'a229b4d63d5db3befc98b568b4f8351d'),
(124, '2013-04-29', 'aasas', 'mierda', 'Andorra', 'caga@lieve.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '6d3a4fd545d6d786fa05019d774b8343'),
(125, '2013-04-29', 'aasas', 'mierda', 'Aruba', 'caga@lieve.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '3097cb2aac0aaa780d3f214c408a3373'),
(126, '2013-04-29', 'aasas', 'mierda', 'Aruba', 'caga@lieve.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '42d6d85a108149e889bb5a09b33afcf0'),
(127, '2013-04-29', 'aasas', 'mierda', 'Aruba', 'caga@lieve.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'cd4421efae6d216d7cebdf3c0368afc5'),
(128, '2013-04-29', 'aasas', 'mierda', 'Azerbaijan', 'caga@lieve.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'b101c1670c327fa54b727c5aff36e15f'),
(129, '2013-04-29', 'aasas', 'mierda', 'Colombia', 'caga@lieve.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'f9c1543413b0a226e886ada16c7423fc'),
(130, '2013-04-29', 'aasas', 'mierda', 'Brazil', 'caga@lieve.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '65c562166c2453e5fc9fe5378808a266'),
(131, '2013-04-29', 'aasas', 'mierda', 'Brazil', 'caga@lieve.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '13449bde718769b1912108d6d493da58'),
(132, '2013-04-29', 'aasas', 'mierda', 'Brazil', 'caga@lieve.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '050f2dc14d7b6436812ffa7a879d20ee'),
(133, '2013-04-29', 'aasas', 'mierda', 'Brazil', 'caga@lieve.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'e76192993ed0f4675373dc3a02be3d93'),
(134, '2013-04-30', 'andres', 'mierda', 'Andorra', 'caga@lieve.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '59bc83eff38cdd0564635f91dc83cf72'),
(135, '2013-04-30', 'andres', 'mierda', 'Belgium', 'caga@lieve.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'a2a68fc01294f8ca9c610a146d88090f'),
(136, '2013-05-02', 'aasas', 'dfdsf', 'Armenia', 'caga@lieve.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '1e1ffad096cdc5da27240ea19fe248f0'),
(137, '2013-05-02', 'aasas', 'dfdsf', 'Armenia', 'caga@lieve.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '32b7c59b30f23ec31781c9c2d2ddc895'),
(138, '2013-05-02', 'andres', 'mierda', 'Antarctica', 'caga@lieve.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '5e2720a88e03412072165b08700c9b02'),
(139, '2013-05-02', 'aasas', 'mierda', 'Andorra', 'caga@lieve.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '98622ed4728d70b7b029714338607f42'),
(140, '2013-05-02', 'aasas', 'mierda', 'Andorra', 'caga@lieve.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '41feb284c00ebe42efa35c0e1f519a17'),
(141, '2013-05-02', 'aasas', 'mierda', 'Belarus', 'caga@lieve.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'ac21789146e5d498d710c123ff7efa9e'),
(142, '2013-05-02', 'aasas', 'mierda', 'Algeria', 'caga@lieve.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '32b1a0b4cffdffcdae9a6b43f56f9a4f'),
(143, '2013-05-03', 'andres', 'mierda', 'Algeria', 'caga@lieve.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '31cf0f40034481d1398bc53456de870e'),
(144, '2013-05-03', 'andres', 'mierda', 'Barbados', 'caga@lieve.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '5db846121631ace247d89a0f295f679d'),
(145, '2013-05-03', 'aasas', 'mierda', 'Andorra', 'caga@lieve.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'dada8499586e528fa3f43e402ba9c689'),
(146, '2013-05-04', 'andres', 'mierda', 'Belgium', 'caga@lieve.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'cde981e6ee7b519bb8421ebd6d1891a7'),
(147, '2013-05-06', 'andres', 'mierda', 'Andorra', 'caga@lieve.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'dbab81f7168343e2f7c72224a1feeb70'),
(148, '2013-05-06', 'andres', 'dfdsf', 'Angola', 'caga@lieve.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '9d164f556c7698dbebbdf97d009fc2ec'),
(149, '2013-05-07', 'aasas', 'mierda', 'Albania', 'caga@lieve.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '43aac97193297954b3fad8cd8567576d'),
(150, '2013-05-09', 'dfd', 'fdfdf', 'Barbados', 'dfdf@live.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '612e32455df7cc58a7b309f3ae8d749a'),
(151, '2013-05-11', 'dfd', 'fdfdf', 'Armenia', 'dfdf@live.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'a72609d57e2aaa610799b0431ed17669'),
(152, '2013-05-19', 'Jesus Eduardo', 'Rincon Rincon', 'Colombia', 'asdasd', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '47fbfae91e90705f286852b43ccf4310'),
(153, '2013-05-24', 'Luis Edgar', 'Mejia Posada', 'China', 'luismejiaposada@gmail.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c431be99f04b240296fa6e1efdd7dc4f'),
(154, '2013-05-24', 'Luis Edgar', 'Mejia Posada', 'Colombia', 'luismejiaposada@gmail.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '59c68a89adbae25e760be3d39a432958'),
(155, '2013-05-24', 'Luis ', 'Mejia ', 'Colombia', 'luismejiaposada@gmail.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd62b0eb92d2dce2683ef41d843112f5f'),
(156, '2013-05-24', 'Luis', 'Mejia', 'Colombia', 'luismejiaposada@gmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 1, 'e2194642e03f797fbc9775d06cec343c'),
(157, '2013-05-24', 'Luis', 'Mejia', 'Colombia', 'luismejiaposada@gmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '5659f3b8318b627d71c21217217d9201'),
(158, '2013-05-24', 'Luis', 'Mejia', 'Colombia', 'luismejiaposada@gmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '6f090aa8274961e3c2a3af5cedd1a040'),
(159, '2013-05-24', 'Luis', 'Mejia', 'Colombia', 'luismejiaposada@gmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '18a3018813ed5df9a50a46e9bdba8e7c'),
(160, '2013-05-24', 'Luis', 'Mejia Posada', 'Colombia', 'luismejiaposada@gmail.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '6a5444e7bb6517598bdbba66e9c80361'),
(161, '2013-05-24', 'Luis Edgar', 'Mejia', 'Colombia', 'luismejiaposada@gmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '057c0cee90e5bd773aa65a8f17e55c6b'),
(162, '2013-05-28', 'carÃ±lod', 'felipe', 'Guatemala', 'andres@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '2388daa85c31510f734d46df9866ca99'),
(163, '2013-05-28', 'carÃ±lod', 'felipe', 'Anguilla', 'carlos@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '2c04ffa67320fecdb77a4af68e95bd82'),
(164, '2013-05-28', 'carÃ±lod', 'felipe', 'Anguilla', 'carlos@live.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'b8aa08e7e3836cb16e182229594fdf56'),
(165, '2013-05-28', 'carÃ±lod', 'felipe', 'Angola', 'carlos@live.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '6f809714bb2b3b61bef3403e873d281a'),
(166, '2013-05-28', 'carÃ±lod', 'felipe', 'Angola', 'carlos@live.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '28a0df88f4916c1a138dbcd0a19b0fac'),
(167, '2013-05-28', 'carÃ±lod', 'felipe', 'Angola', 'carlos@live.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '217916a4a922f45206248c0758183303'),
(168, '2013-05-28', 'carÃ±lod', 'felipe', 'Mexico', 'carlos@live.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '7ede9eb609c5040bb30937a1d9c2c716'),
(169, '2013-05-28', 'carÃ±lod', 'felipe', 'Colombia', 'carlos@live.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '606ec8afe11f4e72c149c49ff9cd9961'),
(170, '2013-05-28', 'carÃ±lod', 'felipe', 'Andorra', 'carlos@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'c160dfbeac51ec9be2e6f0814c350cce'),
(171, '2013-05-28', 'carÃ±lod', 'felipe', 'Andorra', 'carlos@live.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '71b7a54d2076fda1e5cf9eed45c3dc4f'),
(172, '2013-05-28', 'carÃ±lod', 'felipe', 'Andorra', 'carlos@live.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '27471f37ec060e6660ee442d50c73ac9'),
(173, '2013-06-03', 'rwrwr', 'werwer', 'Algeria', 'sdsd@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '6cee68648cf037966fec39e2e0ac749d'),
(174, '2013-06-03', 'rwrwr', 'werwer', 'Algeria', 'sdsd@live.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '5a2dbe6b79141a3f9e286b3b2044847d'),
(175, '2013-06-03', 'rwrwr', 'werwer', 'Barbados', 'mmm@live.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '67a08cef991bc5f28b8822c58a28ca0b'),
(176, '2013-06-04', 'rwrwr', 'werwer', 'Anguilla', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 1, 'f9febc3d0710abd78fd5cb05d3891425'),
(177, '2013-06-04', 'carlos andres', 'pizarro', 'Cuba', 'locoyo@live.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'cbf1a4cab2e0f2060470e1bf0246b145'),
(178, '2013-06-04', 'carlos andres', 'pizarro', 'Cuba', 'locoyo@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '874bed641638af5de6bccb1f2b465a4f'),
(179, '2013-06-04', 'carlos andres', 'pizarro', 'Cuba', 'carlitos@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '55f7304e12afe3f5c605bd7a455c77e8'),
(180, '2013-06-04', 'arturo', 'linero', 'Colombia', 'arturo200@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'de87d66bc4de777500a6dd95f4b5baf8'),
(181, '2013-06-04', 'arturo', 'linero', 'Colombia', 'artu200@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 1, '548e7a68a1bf19eb035ce9c4e25f226e'),
(182, '2013-06-04', 'jose', 'monroe', 'Angola', 'jose@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '0678b9e9f8bb59afe36aa137e3231476'),
(183, '2013-06-04', 'willy', 'hernandez', 'Colombia', 'warriorznes@gmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'a2a3a19f4ec58f00241eeaf52fbff5eb'),
(184, '2013-06-04', 'willy', 'hernandez', 'Colombia', 'warriorznes@gmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'df3aaa564e9294abb5e090848f72e9bc'),
(185, '2013-06-04', 'wiliam', 'hernandez', 'Colombia', 'warriorznes@gmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '6fbfbace2d03d966e98b4d63590bff58'),
(186, '2013-06-04', 'wiliam', 'hernandez', 'Colombia', 'warriorznes@gmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2, '0e3bd32ef97e9110c5200d59e46c1ca9'),
(187, '2013-06-04', 'wiliam', 'hernandez', 'Colombia', 'warriorznes@gmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 20, 'e4be848a6cc658bedd973db33b6bb012'),
(188, '2013-06-04', 'wiliam', 'hernandez', 'Colombia', 'warriorznes@gmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e10adc3949ba59abbe56e057f20f883e'),
(189, '2013-06-05', 'rwrwr', 'werwer', 'Algeria', 'artu200@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 20, 'ac96dae829a30b06ebe981543e049af2'),
(190, '2013-06-05', 'Luis', 'Mejia', 'Colombia', 'luis.mejia@imaginamos.com.co', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'cf0ae1c6e8b990edcd802d1b55f0b0b1'),
(191, '2013-06-05', 'Luis', 'Mejia', 'Colombia', 'luis.mejia@imaginamos.com.co', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 20, 'b90b23d22d17cc3b6942c924b4abc1b0'),
(192, '2013-06-05', 'rwrwr', 'werwer', 'Algeria', 'mmm@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 20, '184001b6f98982568be34e9c5061c228'),
(193, '2013-06-06', 'rwrwr', 'werwer', 'Albania', 'artu200@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 20, '04d35a3d04720f763ed4a247bcd931ee'),
(194, '2013-06-07', 'arturito', 'linerito', 'Colombia', 'arturoline@hotmail.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 1, '623d0502fa6dfee89f3cfc25b21e5dd0'),
(195, '2013-06-07', 'arturito', 'linerito', 'Colombia', 'arturoline@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 19, '0db7da4722c6ffd4ddd6eac777f3f8df'),
(196, '2013-06-07', 'beltan', 'lococo', 'Angola', 'arturoline@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2013, 'c31c2849049bae413c84048905399edb'),
(197, '2013-06-10', 'carlos andres', 'pizarro', 'Anguilla', 'artu200@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 19, '2b761b658eaf60dc7e63556654f65483'),
(198, '2013-06-10', 'Federico', 'capriles', 'Venezuela', 'artu200@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 19, '572c1a3f58e43082831120695bbb41ce'),
(199, '2013-06-10', 'Federico', 'capriles', 'Venezuela', 'artu200@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 20, 'd4a5e73738ac772fc499f03616b9f782'),
(200, '2013-06-10', 'Federico', 'capriles', 'Venezuela', 'artu200@hotmail.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '08d2e3167bc27262a95bf12eebcd3197'),
(201, '2013-06-10', 'Federico', 'capriles', 'Venezuela', 'artu200@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 20, '00367c47ef8e0784502a44dc2f18983c'),
(202, '2013-06-10', 'carlos andres', 'capriles', 'Colombia', 'artu200@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 20, 'eee490cd8c70f0fb5e4402e0a91c59dd'),
(203, '2013-06-11', 'carlos andres', 'capriles', 'Algeria', 'artu200@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 20, 'd9ff3a974d229eb5a20f7fdcbaee2db2'),
(204, '2013-06-11', 'carlos andres', 'capriles', 'Algeria', 'artu200@hotmail.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '310a42ea5ea9584ff32e127d23545dcc'),
(205, '2013-06-12', 'andresito', 'capriles', 'Andorra', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 20, 'a70c4f142ddcc9c0481fe0121f7d8489'),
(206, '2013-06-12', 'fernan', 'melendez', 'Ecuador', 'artu200@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 20, '5c48e2615425be418b142a0830c982dc'),
(207, '2013-06-12', 'camilo', 'linero', 'Colombia', 'camilitop@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 2, '22afc05e6bd983c70b82b5ddcecfb56d'),
(208, '2013-06-12', 'jose', 'hernan', 'Chile', 'joseloco@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 19, 'c348bccd64a97e5460c8753146402b68'),
(209, '2013-06-12', 'camion', 'boleo', 'Brazil', 'arturoline@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 20, '1289c5798f9be73dbdb7cefdef23b998'),
(210, '2013-06-12', 'zcsadc', 'sdcvsdcsd', 'Algeria', 'sdvcsad@dvsd.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 20, 'c3e6021114120094b2ca3fdb960faccc'),
(211, '2013-06-12', 'carlos andres', 'capriles', 'Albania', 'artu200@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 20, '09431b13e7ef43553e0383ff574763b0'),
(212, '2013-06-12', 'carlos andres', 'capriles', 'Albania', 'artu200@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 20, 'dcb7f667f6ea9346919e8007da9b21d0'),
(213, '2013-06-12', 'carlos andres', 'capriles', 'Antarctica', 'artu200@hotmail.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '12375054f6c66f6c3e99995a947ad77d'),
(214, '2013-06-12', 'carlos andres', 'capriles', 'Algeria', 'artu200@hotmail.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '3cf12a0ba2fe0abddbcc7e5f82021cd9'),
(215, '2013-06-12', 'arturito', 'pizarro', 'Bangladesh', 'arturoline@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 1, '0cf5d922d2b97da52345b87eca5267f8'),
(216, '2013-06-13', 'Diana ', 'Sandoval', 'Colombia', 'sandoval_ing@yahoo.es', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 20, 'd15f1d91712848e029596878ffdd2a87'),
(217, '2013-06-13', 'carlos andres', 'capriles', 'Belgium', 'artu200@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 98, 'Manual de ejercicios naturales para agrandar el pene.', 20, '092346532d2ec77461eebe8d84069b99'),
(218, '2013-06-13', 'carlos andres', 'capriles', 'Belarus', 'artu200@hotmail.com', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'be1b3b9abef709760bde2b3be3bf131e'),
(219, '2013-06-13', 'Diana', 'Sandoval', 'Colombia', 'sandoval_ing@yahoo.es', '000 000 00 00', 'Efectivo', 98, 'Manual de ejercicios naturales para agrandar el pene.', 0, '8676d671c0ec30ae7ea58cfc77428b0e'),
(220, '2013-06-13', 'Diana', 'Sandoval', 'Colombia', 'sandoval_ing@yahoo.es', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 20, 'cf7054c5f88bb8e3fcaced558131c085'),
(221, '2013-06-13', 'Diana', 'Sandoval', 'Colombia', 'sandoval_ing@yahoo.es', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 0, '790a583e8cde2b97c50e868486ffb687'),
(222, '2013-06-13', 'Diana', 'Sandoval', 'Colombia', 'sandoval_ing@yahoo.es', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 0, '34c9324314a794f835af340151c2569c'),
(223, '2013-06-13', 'carlos andres', 'capriles', 'Albania', 'artu200@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 19, 'd90337f87de85aee234e66ea7b1b06b8'),
(224, '2013-06-13', 'carlos andres', 'capriles', 'Antarctica', 'artu200@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 20, 'ca5003a84a23e936c782a004a0cc5a83'),
(225, '2013-06-13', 'carlos andres', 'capriles', 'Antarctica', 'artu200@hotmail.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 0, '223bad0990c532f51535946da25061d2'),
(226, '2013-06-14', 'willy', 'hernandez', 'Colombia', 'warriorznes@gmail.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'ca802703ef03d3f93d86767fe9783be8'),
(227, '2013-06-14', 'carlos andres', 'capriles', 'Angola', 'artu200@hotmail.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 0, '5da97ebc876d6ec87b6d2e54102a8a0e'),
(228, '2013-06-14', 'carlos andres', 'capriles', 'Algeria', 'artu200@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 19, '09c257c07da99a74bb24a1dd2481afc2'),
(229, '2013-06-14', 'william hernandez', 'hernandez', 'Colombia', 'warriorznes@gmail.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 0, '0f8ddca7faf88465bdba5fd9bee45053'),
(230, '2013-06-14', 'carlos andres', 'capriles', 'Argentina', 'artu200@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 20, '0104a9ddad8aa7cd5351b234195fe3bd'),
(231, '2013-06-14', 'carlos andres', 'capriles', 'Argentina', 'artu200@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 20, '09d88bb5c80d673243ef12141981bdd7'),
(232, '2013-06-14', 'carlos andres', 'capriles', 'Argentina', 'artu200@hotmail.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'b12f76a562a6addfdc3bc0003b3e724c'),
(233, '2013-06-16', 'carlos andres', 'capriles', 'Andorra', 'artu200@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 20, '645d37968dbae107ad5c17a1733c0e27'),
(234, '2013-06-17', 'carlos andres', 'capriles', 'Anguilla', 'artu200@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 20, '2d19807ffd0ac99f0a5087d4e69a5281'),
(235, '2013-06-17', 'carlos andres', 'capriles', 'Albania', 'artu200@hotmail.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 0, '907652ea6872b430c3f3333170c83e59'),
(236, '2013-06-17', 'carlos andres', 'capriles', 'Algeria', 'artu200@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 19, '0b3529dfc1f6b06f500c66675b9c3aee'),
(237, '2013-06-17', 'carlos andres', 'capriles', 'Argentina', 'artu200@hotmail.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'fbf11632044b33a0b97ad2ae8c60413c'),
(238, '2013-06-18', 'carlos andres', 'werwer', 'Antigua and Barbuda', 'artu200@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 20, '485776531bd7ffaf14d7509504ea6c05'),
(239, '2013-06-18', 'carlos andres', 'werwer', 'Antigua and Barbuda', 'artu200@hotmail.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'a13888fba433e8b1ef8252c2adf6ad61'),
(240, '2013-06-20', 'camilo', 'andres', 'Anguilla', 'camilo@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e10adc3949ba59abbe56e057f20f883e'),
(241, '2013-06-20', 'rafa', 'cabrera', 'Argentina', 'arturoline@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 19, '7e48dec56ec3586dc0296e888a740427'),
(242, '2013-06-20', 'rafa cabrera', 'freddy', 'Belgium', 'arturoline@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 4, '6fa7672d9ba298f961864e20fbe322b0'),
(243, '2013-06-20', 'hernan', 'jamit', 'Aruba', 'pruebapago50@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 4, '3d62a6f5b888a739ee4a228c646d3672'),
(244, '2013-06-21', 'warriorznes@gmail.com', '123456', 'Colombia', 'luis.mejia@imaginamos.com.co', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'ffece1d1c266e17d441b846dfa2d6156');
INSERT INTO `venta` (`id`, `fecha`, `nombre`, `apellido`, `pais`, `mail`, `telefono`, `fpago`, `total`, `descripcion`, `confirmacion`, `pass`) VALUES
(245, '2013-06-24', 'freddy', 'jaramillo', 'Canada', 'tronconi@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 20, '51b543f8a167aeb6c6618e271dacd197'),
(246, '2013-06-24', 'freddy', 'jaramillo', 'Canada', 'tronconi@hotmail.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 0, '547c50983ddba2f1ae44672cc8069762'),
(247, '2013-06-24', 'freddy', 'jaramillo', 'Argentina', 'tronconi@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 20, 'abea728ab9662d6e2b28b4fbef01a6bc'),
(248, '2013-06-24', 'freddy', 'jaramillo', 'Argentina', 'tronconi@hotmail.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'bacb50f459e7f9b188b9e962a4d9b66f'),
(249, '2013-06-25', 'fernan', 'jaramillo', 'Argentina', 'pruebapago50@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 23, 'b6b54aaef7fff21d7e075f1602ebc4d3'),
(250, '2013-06-25', 'nati natali', 'natali', 'Argentina', 'natalia.pescador@imaginamos.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 19, 'a4988dda30f3486921e3c90a8ea5f3ae'),
(251, '2013-06-25', 'andres carlos', 'jaramillo', 'Andorra', 'pruebapago50@hotmail.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 0, '583a53deda9b2e77942e23104c701b5c'),
(252, '2013-06-25', 'Franco', 'Morales', 'Argentina', 'ingreso2@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 19, 'e10adc3949ba59abbe56e057f20f883e'),
(253, '2013-06-25', 'jaime ', 'guzan', 'Algeria', 'ingresa1@hotmail.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 1, 'e10adc3949ba59abbe56e057f20f883e'),
(254, '2013-06-25', 'fabian', 'gonzales', 'Canada', 'ingreso1@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 19, '9df03d61c6531a540fa20b3600fc89ea'),
(255, '2013-06-25', 'jose', 'alejandro', 'Australia', 'ingreso2@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 19, '9df03d61c6531a540fa20b3600fc89ea'),
(256, '2013-06-25', 'ernesto', 'daniel', 'Brazil', 'ingreso3@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 19, 'a44b7b686a2ca1e250b43493073e3adc'),
(257, '2013-06-25', 'Uriel', 'Vazquez', 'Costa Rica', 'ingreso4@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 20, '5c257fdf627e615f81e1abf1b83c99ed'),
(258, '2013-06-25', 'Marco', 'Figueroa', 'Colombia', 'ingreso5@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 20, '9d549db34c3ff37c85bd86951ce9af91'),
(259, '2013-06-25', 'andres carlos', 'jaramillo', 'Albania', 'ingresa1@hotmail.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'f06dc4e8ed84023a7ff2b89e6aabafda'),
(260, '2013-06-25', 'andres carlos', 'jaramillo', 'Algeria', 'ingresa1@hotmail.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'fdc50ed499f90b6b2daca530792a9454'),
(261, '2013-06-25', 'andres carlos', 'jaramillo', 'Albania', 'ingresa1@hotmail.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 20, 'a4f9fa09a872c692fcae378ea8dca81c'),
(262, '2013-06-25', 'andres carlos', 'jaramillo', 'Albania', 'ingresa1@hotmail.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 0, '4e5eac3da9de74ac3016662b44687fb8'),
(263, '2013-06-25', 'andres carlos', 'jaramillo', 'Bangladesh', 'ingresa1@hotmail.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 0, '99e9d8b247d62fd472c8b394c55dffed'),
(264, '2013-06-25', 'andres carlos', 'jaramillo', 'Andorra', 'ingresa1@hotmail.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 0, '87534161b41bae20fc1c793c7e74b674'),
(265, '2013-06-25', 'andres carlos', 'jaramillo', 'Andorra', 'ingresa1@hotmail.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 0, '10c7627977eb689f63373560a31d8452'),
(266, '2013-06-25', 'ytryr', 'rtyry', 'RÃ©union', 'artu200hotmail.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 0, '2a27edff50cf73f2992b17bfaf2517f9'),
(267, '2013-06-25', 'fernndo cabrer', 'jaramillo', 'Barbados', 'ingresa1@hotmail.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'e9d656a0a3f81780c4a15186bbee727e'),
(268, '2013-06-26', 'usuario1', 'usuario1', 'Argentina', 'ingreso6@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '75b519fae2884f7fa8496c05cfae130f'),
(269, '2013-06-26', 'usuario1', 'usuario1', 'Argentina', 'ingreso7@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8299ba3f6ac719d93c5657c19ed5c917'),
(270, '2013-06-26', 'usuario1', 'usuario1', 'Argentina', 'ingreso8@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '005c54293d28d672f59e141af94d0d95'),
(271, '2013-06-26', 'usuario1', 'usuario1', 'Argentina', 'ingreso9@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '97eb243376826904a0b420ba5f3325fb'),
(272, '2013-06-26', 'usuario1', 'usuario1', 'Argentina', 'ingreso10@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '359e877b6a312a15fa1509c68fe79af7'),
(273, '2013-06-26', 'usuario1', 'usuario1', 'Argentina', 'ingreso11@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6f13f7a71f7f0e0c70d68f8412cc7044'),
(274, '2013-06-26', 'usuario1', 'usuario1', 'Argentina', 'ingreso12@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '486d993527793d0e59baeaf330a3d30a'),
(275, '2013-06-26', 'usuario1', 'usuario1', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1251eab620bfd8945327b54f23abbcaf'),
(276, '2013-06-26', 'usuario1', 'usuario1', 'Argentina', 'ingreso14@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '38b4b7253ff204a56df29c490809581f'),
(277, '2013-06-26', 'usuario1', 'usuario1', 'Argentina', 'ingreso15@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '75421267b1407c9fa7d3da3726bbd927'),
(278, '2013-06-26', 'usuario1', 'usuario1', 'Argentina', 'ingreso16@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '49ea9feae670aecbf790a9596c357fe1'),
(279, '2013-06-26', 'usuario1', 'usuario1', 'Argentina', 'ingreso17@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ed4bd002a6bf5fe187d45cc6d0a497bf'),
(280, '2013-06-26', 'usuario1', 'usuario1', 'Argentina', 'ingreso18@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '9ce2b5e6e83fc265ddd8f5caf7128e46'),
(281, '2013-06-26', 'usuario1', 'usuario1', 'Argentina', 'ingreso19@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e2d95da6d0f9e388d4392c4feef3da96'),
(282, '2013-06-26', 'usuario1', 'usuario1', 'Argentina', 'ingreso20@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6a981b1ba51b62240c45fb1593dc3315'),
(283, '2013-06-26', 'usuario1', 'usuario1', 'Argentina', 'ingreso21@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '0039270f02c93c4e3faffa3673eb1d8a'),
(284, '2013-06-26', 'usuario1', 'usuario1', 'Argentina', 'ingreso22@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '0a18f9251463ab5255f76dddcdbeaf7e'),
(285, '2013-06-26', 'usuario1', 'usuario1', 'Argentina', 'ingreso23@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6eedc7be3d7ed7e9586105c686ac1d1f'),
(286, '2013-06-26', 'usuario1', 'usuario1', 'Argentina', 'ingreso24@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '079e1002cbc0f0b2afcc4b67ffc3ac09'),
(287, '2013-06-26', 'usuario1', 'usuario1', 'Argentina', 'ingreso25@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'af3f3367e271797dba0ddb0fd68ace82'),
(288, '2013-06-26', 'usuario1', 'usuario1', 'Argentina', 'ingreso26@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c0d774eeaf4f87993998610096f5994f'),
(289, '2013-06-26', 'usuario1', 'usuario1', 'Argentina', 'ingreso27@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6872911e073b8fea0497cb72e2d98463'),
(290, '2013-06-26', 'usuario1', 'usuario1', 'Argentina', 'ingreso28@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1c5fc5f8e71db668a6efcc3ce0482126'),
(291, '2013-06-26', 'usuario1', 'usuario1', 'Argentina', 'ingreso29@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'aea203da1ae9882aab53dd9a98f5971f'),
(292, '2013-06-26', 'usuario1', 'usuario1', 'Argentina', 'ingreso30@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '7d627ed99c8c4df8d19521fd4a4e74be'),
(293, '2013-06-26', 'usuario1', 'usuario1', 'Argentina', 'ingreso31@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '4ded7790dfe1c317a3046ef7e18868da'),
(294, '2013-06-26', 'usuario1', 'usuario1', 'Argentina', 'ingreso32@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'de74687541bfdf418087ff31785f1bb4'),
(295, '2013-06-26', 'usuario1', 'usuario1', 'Argentina', 'ingreso33@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '733eb7486502a2107f6dbf36aa29b43f'),
(296, '2013-06-26', 'usuario1', 'usuario1', 'Argentina', 'ingreso34@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1759d98a9e23dd4d16bab81bded3b3e4'),
(297, '2013-06-26', 'usuario1', 'usuario1', 'Argentina', 'ingreso35@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6d62abcd0e3fcadb3e4c58c96fdc54d5'),
(298, '2013-06-26', 'usuario1', 'usuario1', 'Argentina', 'ingreso36@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '72736dc1428be181914badee492275f2'),
(299, '2013-06-26', 'usuario1', 'usuario1', 'Argentina', 'ingreso37@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '214f377122ab15b0051c5bd5a654a46b'),
(300, '2013-06-26', 'usuario1', 'usuario1', 'Argentina', 'ingreso38@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5189b50ecac928c4ea7cc50c102f44a3'),
(301, '2013-06-26', 'usuario1', 'usuario1', 'Argentina', 'ingreso39@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a57cd565a33c15002453790adc6d5952'),
(302, '2013-06-26', 'usuario1', 'usuario1', 'Argentina', 'ingreso40@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2583a7af846022d2390d726dfe57eb5c'),
(303, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso41@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1efd66f89552236d575c74687baf20f4'),
(304, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso42@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '44b11d1e9275150a47be72cabe5eb2ff'),
(305, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso43@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'bed01930d165db403361ba980a2e3dcb'),
(306, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso44@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '70c98ca5877cca714cbc2028263c947d'),
(307, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso45@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f5a9c821a0520a5e31d445404a3184af'),
(308, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso46@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c503675bfd97479728f165492367da2a'),
(309, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso48@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '3a5b60482b6f83743881ee751b2f62ab'),
(310, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso47@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '48476f61a2c90664f4fd1e9f6f65cc12'),
(311, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso49@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '167657d311918b1f081a90f513e188b9'),
(312, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso50@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '71c2e51d77c2e7fed2d995db5d7168f9'),
(313, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso51@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f12ced6bf009edb5d79ccad23a3613bc'),
(314, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso52@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ecf2e4f2f7acf612995bfe4a7dbb2feb'),
(315, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso53@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '415086e4533f73cfe80ed3d2f0d3c6af'),
(316, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso54@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'dd2e873e4143379caf3fd2aebad30d09'),
(317, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso55@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd23e7141ea1ea7dd958d762bfcb9b109'),
(318, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso56@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c37cc854ee9700c9236608d37008c961'),
(319, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso57@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '7a1790f4a4a4d2a30af675a9f46402a8'),
(320, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso58@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6b336d791db27bd14db01a5b418b7d74'),
(321, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso59@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd85f5c56e102c4ac7cd09a8af5d99777'),
(322, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso60@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '3f308eeb99296954b365bbc749b65556'),
(323, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso61@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '0cf168182e8d91a99310effe2f6b803d'),
(324, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso62@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '74a9a3f971264d648b5f5dee4b5d55f3'),
(325, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso63@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '77951c7fad9b28b9dece8fb4cc9e7bd2'),
(326, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso64@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd27e9b5a594591a7775d31e5f4867afe'),
(327, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso65@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '11a17684dea199cf6d404e928d446769'),
(328, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso66@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e08327706656029bc79dd331496fb069'),
(329, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso67@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2b3ff0758b0ce37ae476f8aeebf38980'),
(330, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso68@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '9dabc130e8eaef31db8ff8f48818ccb3'),
(331, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso69@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a99ac8894e6941f5bd95f1f28ca4078d'),
(332, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso70@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ef153885be4387af4c46904ce5e1d34d'),
(333, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso71@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '21e945a899f647b8591170172de31f1c'),
(334, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso72@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c7350b6f88caa449adb94ef60c02fd95'),
(335, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso73@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'aed76344598270b2fb2fe093cce3ebb2'),
(336, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso74@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '552e9b3274303e76e2b5c7123c97a7a9'),
(337, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso75@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '729a3598d2e7d05a2648cc6670f67623'),
(338, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso76@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5ca27444a7137819ac110ce3d2917e22'),
(339, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso77@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '676d0892ad436f30d8807f166196cecb'),
(340, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso78@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2cbc9f85b9ebaa7762b4ca7e3fd40a76'),
(341, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso79@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b9b4f5f575ea817702ede2e0378099be'),
(342, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso80@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '0add41739fa5cf3380616174e2d570b9'),
(343, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso81@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '39048ca7d4cfc97479dd3ce5ab72a6c2'),
(344, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso82@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e0e21c7eff709800501752bfbe10093a'),
(345, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso83@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1fa58178a6e728d7f3f30422c4b0b203'),
(346, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso84@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8f21ba877e16c72d6911f0593f6becf7'),
(347, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso85@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '0f398e9bde20c45368189584b32784b7'),
(348, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso86@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '436b608749f2e5e493747460e441df0f'),
(349, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso87@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd2700f19b1239cc8ea3b222b5142e869'),
(350, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso88@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8f85a2e540bf6fb12e84b2203fa0d2ee'),
(351, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso89@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '0c3a5d3203b4493824d39cb293b9c6e0'),
(352, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso90@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '45381cab59c50f956a6efa27dba2deb1'),
(369, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso106@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8137af401ec3bbfd25c9a6a45a885830'),
(370, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso107@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a79a9585dc90a9398181194489cbf82b'),
(371, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso108@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'aacadc3f1711b90cf0447ef0ec9ef0f7'),
(372, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso109@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'bd6079603b9b642068364397a0855ee3'),
(373, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso110@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e180f29fef68505b269d90ec42897482'),
(353, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso91@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '180a95d3dc4b265b9640c311f5a50333'),
(354, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso92@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '24194efc38dd36397645586d2673453c'),
(355, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso93@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '58f13de6971ac9632fc75bb332b22ad1'),
(356, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso94@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e0dbba5b38daf43e2ebe3219e5e41c7f'),
(357, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso95@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '543f34c21b75b932749de32e29a917e7'),
(358, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso96@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '9e79a9ccfa8149901b1c03707b2b2bf9'),
(359, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso97@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ba63d58fa8a62b80ad441999940b63b3'),
(360, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso98@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '0bc1969d8b2b5b1d567390b6db392198'),
(361, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso99@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6940eaf6018b4037ee13c09ead9cd1ca'),
(362, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso100@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e13a395dc0bc18bf12be870abf22f356'),
(363, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso101@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '18479ab6c6692f29ad3f4a59b0681297'),
(364, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso101@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '18479ab6c6692f29ad3f4a59b0681297'),
(365, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso102@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c621166fac08566fc52e1a7e27a82a24'),
(366, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso104@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c7fea9538db642bf986304fc60c13792'),
(367, '2013-06-26', 'usuario1', 'usuario1', 'Chile', 'ingreso103@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '658fd25ee39faba245233d733f976d26'),
(368, '2013-06-27', 'usuario1', 'usuario1', 'Canada', 'ingreso105@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5a20b930736d0964c609d9f5560d2edb'),
(374, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso111@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6caec8de25064ff5d60799752fbccc1e'),
(375, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso112@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6bb134a37ea6f07a2aa1a9642e310a4f'),
(376, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso113@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '67a284f1ea6447346ce53557034e8fca'),
(377, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso114@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '94cf6684bb1d0b1a11517b36bc1bdfea'),
(378, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso115@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2fc178e4134e8e00023bc0448fa936fe'),
(379, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso116@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '43e47394a30e9f5e9e2114a1df83def2'),
(380, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso117@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '9ffd74edd6f4e97e30fb152bcb633d4b'),
(381, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso118@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5e06b2bf4ca718da351932a73c0add36'),
(382, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso119@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '40f66207b878028fd21c5d0a6d8ebeaf'),
(383, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso120@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '91a6e0fa74cf370803d306302a210cb3'),
(384, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso121@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '68a1e32d12dc96d2804a7242bde4eea3'),
(385, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso122@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f3de29b21113ce13bd45958a2ea770ce'),
(386, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso123@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd5e3df7508d60d20692e5f1e1554fd4c'),
(387, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso124@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b810d09cec53da84d6cf05ddb7a3cf80'),
(388, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso125@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '123c4c4d7f5424ca47fe17af1eeeedbe'),
(389, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso126@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6dddfa60029d2cc28ab7fe2ca2dab7c4'),
(390, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso127@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a6d19ed6efcdf161dcb21caa3b9b063e'),
(391, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso128@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c236ac6436737c06bd1411aac0df7762'),
(392, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso129@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '87ff320adcb8ea60e9775cfec0c1e0fc'),
(393, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso130@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '0104d111f0f17489f8051b8ec9c28d2c'),
(394, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso131@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ea2cb05c4e3137dce274166287b66042'),
(395, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso132@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'df87b9ed9393a5d003f81ad486ea1cb5'),
(396, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso133@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '42bd4d7d7bcc9a80e0fe978f5298699d'),
(397, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso134@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c0e82fe7c1686d9c31f9408fafa68075'),
(398, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso135@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6459d60143b6b45001dea4f70db7893c'),
(399, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso136@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'dc89cc5c92a441bd0d738d77383be55c'),
(400, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso137@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a7b773d6b01c16ac6176b69d766d06c0'),
(401, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso138@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6c48faacdc3c16a96efbb76955378d83'),
(402, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso139@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '0ceecc5b6caa2a2db2fa00d2e6809f85'),
(403, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso140@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f2a6a9140001cc1a510f6752b38236d2'),
(404, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso141@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '43b4946c1dd0b6ec7686257b6776882a'),
(405, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso142@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '889f2cad523bf27b49f8ff9f275633fb'),
(406, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso143@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f9b7142e8cc3591ecf9920f762984131'),
(407, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso144@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1e6566d95294588bb3167963b0a5fe42'),
(408, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso145@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '14d5737f5e68a6658c85b5014aea09ab'),
(409, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso146@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c8182ced77e0b742c92e674211dde3e2'),
(410, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso147@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f28ac26286d50c665a741ee2bbccc54a'),
(411, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso148@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a321fc6cfac82e170cd5f856dc6492de'),
(412, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso149@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '9744d745b7fb4298e911b0c5e022b30c'),
(413, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso150@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2dfdc447c51749ebfa154382b88a1452'),
(414, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso151@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8e568e2f7be7405ff3a4b1b883b934e7'),
(415, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso152@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '4743f07f83ade99382c61b1b642baf89'),
(416, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso153@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8fbe9855fb0dbe0c5501c14e39d69428'),
(417, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso154@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'af1513f6466e84de05647729f48a2d4c'),
(419, '2013-06-28', 'Felipe', 'eduardo', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'fe07e3824fa2155afc44073eb0b2e602'),
(418, '2013-06-27', 'usuario1', 'usuario1', 'Costa Rica', 'ingreso155@live.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'af4c4377ad33d6c4f248a255e800c132'),
(420, '2013-06-28', 'Edgar', 'melendez', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '52d6483542fea0e110b6af5eca0a1cfd'),
(421, '2013-06-28', 'Javi', 'gonzales', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c9f8b2cbda88947da6e452a48fde46bb'),
(422, '2013-06-28', 'Fidel', 'Maestre', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5111de0cc70f068e92935513de9575e6'),
(423, '2013-06-28', 'Leonardo', 'Caballero', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c2664e440ce4afc0b1a8293d404f2896'),
(424, '2013-06-28', 'Manuel', 'Servantes', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '79608daca35db2cbf4cc3ae26b317e50'),
(425, '2013-06-28', 'Andres', 'Correa', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '616403911958a98c9127f2e0189c2337'),
(426, '2013-06-28', 'Franco', 'David', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '7e85757959c274a5a394b4c72c9f4823'),
(427, '2013-06-28', 'Gaby', 'Luque', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '36a81010d32c763a5902cb1f183cc049'),
(428, '2013-06-28', 'Morelo', 'Morales', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c07a4119885cb7cc64aa20ea62e94186'),
(429, '2013-06-28', 'Antony', 'Mendoza', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '0a0da5ea7bfff118568abd197932c569'),
(430, '2013-06-28', 'Humberto', 'Herrera', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ab597e9bc898a321b8ea97273ec95776'),
(431, '2013-06-28', 'Marlon', 'Rico', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '23473f6267bb0c17cf6fe3f573d6fdd1'),
(432, '2013-06-28', 'fecho', 'J.', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '482de20a0c73ddf5c580cca47325a056'),
(433, '2013-06-28', 'Miguel', 'C', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2ec865cfaec53890c6badfd14f66611c'),
(434, '2013-06-28', 'Mario', 'Avila', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '7e02c6788e4c38d1d87d07424d9e55d5'),
(435, '2013-06-28', 'fran', 'antonio', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b995f2cc789e172c1a982dd3f37fc836'),
(436, '2013-06-28', 'ernesto', 'fabian', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6345994caebce0fff2e58bef48d2fca0'),
(437, '2013-06-28', 'Federico', 'benjamin', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '70e5ff3c889227062faeb752d319a765'),
(438, '2013-06-28', 'soto', 'Mendoza', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd4aab633230b2eba4ea4220c2fa81cb7'),
(439, '2013-06-28', 'Yeiner', 'Flores', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b1458f1ad4714bb409e2bfcc695c4c6b'),
(440, '2013-06-28', 'Farad', 'Guillermo', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1a4d47926c7cc3e5dc66bd0d3a7038bf'),
(441, '2013-06-28', 'Jorge', 'Narvaes', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'fa977b46f2c49958d0f36ad964f068b3'),
(442, '2013-06-28', 'pipe', 'carrillo', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b0a3b79f93489b356ee1fb9e32e9171f'),
(443, '2013-06-28', 'alejandro', 'Vazquez', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd32775664b89aec3a2104c8c74f58140'),
(444, '2013-06-28', 'Josep', 'ramirez', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '9a596d54a24beab45f6dad5b752af3f0'),
(445, '2013-06-28', 'Pablo', 'Gonzalo', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '74f0a87c67cbc1a2ac1c1acd1e0e77ce'),
(446, '2013-06-28', 'Xavier', 'Luis', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f79e4af8ea7181614c19281b514ea479'),
(447, '2013-06-28', 'alex', 'ramon', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ebe7dee9a3791afeb014a5f86512dcba'),
(448, '2013-06-28', 'Miguel', 'Antonio', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '3f153a667622cb653822a82597678307'),
(449, '2013-06-28', 'Eduardo', 'Retad', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd65b59f31c4e2388cde6856764de6579'),
(450, '2013-06-28', 'bruno', 'G.', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ab7c7cad17fc82300c4bf9eb632ed8a4'),
(451, '2013-06-28', 'eric', 'bustamante', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '7efb7f654dbdfd898e8abc1d9378f0ad'),
(452, '2013-06-28', 'Moises', 'Armando', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ca24330347848baecba9549a8302dfc7'),
(453, '2013-06-28', 'Juan', 'Socorro', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '4b62b3b2384047a06f3a481eb4f72afb'),
(454, '2013-06-28', 'Moises', 'Monjaras', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd3337d2e68dab0cd8979c0704336cdcf'),
(455, '2013-06-28', 'Leonardo', 'Celedon', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'dbcdc3a6053c6c8766caf5d76b2aff55'),
(456, '2013-06-28', 'Mau', 'L', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ae3220b043596c5c6c98dfec41af3334'),
(457, '2013-06-28', 'rodolfo', 'salvador', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'bd938a2396dba4f0e05dc8d33eefc632'),
(458, '2013-06-28', 'Oscar', 'montalvan', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c39114a0b9bfbaa194f43b04002202d6'),
(459, '2013-06-28', 'jose', 'gerardo', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '08280013176c336ab47321c34c4033c8'),
(460, '2013-06-28', 'Dani', 'Mariano', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '4fe2eed260e337527ff048fffb27a979'),
(461, '2013-06-28', 'ernesto', 'Rivera', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ea80e3dbe9c66dcbcac4d54a57fb0403'),
(462, '2013-06-28', 'Piqui', 'Trujillo', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'fdbd19c4b43750a699638f54ef116c6a'),
(463, '2013-06-28', 'Jacobo', 'Soto', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '37b6d2a4322710dd2cc2a324d074cc8b'),
(464, '2013-06-28', 'Silvestre', 'H.', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '082d2c82b2adf6d675939fe147d6df26'),
(465, '2013-06-28', 'Nejo', 'Sanchez', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '4e2482e4416a7d036ecea85fc5331b41'),
(466, '2013-06-28', 'Andres', 'Pizarro', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '98f0cdc3d7ea9a94aed80f9fef5606d7'),
(467, '2013-06-28', 'Leopoldo', 'Cabrera', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'bfab3d11881f8ee4b20a85b12088cc10'),
(468, '2013-06-28', 'Aldo', 'Socarras', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd7cf52bbc5e5c07a745a31e64783b9e5');
INSERT INTO `venta` (`id`, `fecha`, `nombre`, `apellido`, `pais`, `mail`, `telefono`, `fpago`, `total`, `descripcion`, `confirmacion`, `pass`) VALUES
(469, '2013-06-28', 'gabriel', 'manrique', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f4781f786d4a522631d001bbd2eed3d0'),
(470, '2013-06-28', 'victor', 'alonso', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5f89854efa5253335ebd990298e786f7'),
(471, '2013-06-28', 'Jerson', 'Figueroa', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1eae2cc34ce3737a856bcdfc8cfd9d7b'),
(472, '2013-06-28', 'Rodrigo', 'Max', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e286f56eb70865c1e85c27d4911a3d7a'),
(473, '2013-06-28', 'Pancho', 'Abdiel', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1c342ea74f7318ca56e51a45b52af8b9'),
(474, '2013-06-28', 'Chaman', 'Peru', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a66709c3836a0b85fcc4a33acd03087c'),
(475, '2013-06-28', 'Camilo', 'Ortega', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e2634d7caea6bc99f865bcfd2695e176'),
(476, '2013-06-28', 'jorge', 'amaro', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '72627890a4dfb30798b942c35d42c270'),
(477, '2013-06-28', 'El ', 'Colombiano', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5ac8c716c3aecaadc799c4ee3fa2fd7c'),
(478, '2013-06-28', 'Edilberto', 'Mason', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '25e72cbdf3f6147940f0b21a2a20520c'),
(479, '2013-06-28', 'esteban', 'Echegaray', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '3b6a00f5fbf25edcc8027d3d9411dd61'),
(480, '2013-06-28', 'Fabio', 'Vargas', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'cbd05c9f9d5e5435551632f18ac0ab58'),
(481, '2013-06-28', 'Migue', 'Vergara', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5e07be7886115ccbd97020a9c760f28d'),
(482, '2013-06-28', 'marcos', 'lopez', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '9d8fc71ec660239c38908f8e9ec9cdf6'),
(483, '2013-06-28', 'Moralito', 'bonilla', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '35f6a869f78fe1210d0549e78fb01655'),
(484, '2013-06-28', 'William', 'Villanueva', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1483e7761c050c38a85e10cbce0d1279'),
(485, '2013-06-28', 'Leandro', 'W', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '04a013d0a1fa77defd342b4a23ba25eb'),
(486, '2013-06-28', 'paulo', 'kolkovska', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f60628ef84850ed81401ef48bcf9835a'),
(487, '2013-06-28', 'Orlando', 'Juaquin', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd5c5dc9bbea1fb2be9410a248c980890'),
(488, '2013-06-28', 'Adian', 'Martinez', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1da5fbaa4b37caf04c29f6cde05361af'),
(489, '2013-06-28', 'Ricardo ', 'jose', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6626e3538d2c7cc6ceaeeda3f05891ba'),
(490, '2013-06-28', 'Rene', 'Huerta', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e8f71af794df7cd417c18f1b467328e3'),
(491, '2013-06-28', 'paolo', 'arizmendi', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '47e1265355230c29e27bfb9de61f1052'),
(492, '2013-06-28', 'fredy', 'elias', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '18097ad7c92712d2bba53a39139f9491'),
(493, '2013-06-28', 'santi', 'manuel', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'cae1c448ba76b98db5184c7ae3087265'),
(494, '2013-06-28', 'Oscar', 'Pulido', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1f60be7ed633ad01fad938ff77b7736f'),
(495, '2013-06-28', 'Nelson', 'S.', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'fce1b7304d408491382a531a4c6a5b79'),
(496, '2013-06-28', 'helio', 'foltove', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a6d560b76b2371ed9033dcfc9c7c21d5'),
(497, '2013-06-28', 'Aaron', 'Arcos', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '7aaedd8af661f2f772b4a7b23025f1a1'),
(498, '2013-06-28', 'marcelo', 'nuÃ±ez', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1a68c801922b62e9d52f7191e2bff259'),
(499, '2013-06-28', 'german', 'Leon', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e107a54fdeca4596c976046d4a9532af'),
(500, '2013-06-28', 'Guillo', 'Daza', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '13d89be5311e08b80aaa41196435d591'),
(501, '2013-06-28', 'eugenio', 'obieta', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '934d83a5d2a957cf8c3c4e9c2f3efa31'),
(502, '2013-06-28', 'jhonatan', 'Reyes', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2451736641f0904f6eb3f56708ab1b47'),
(503, '2013-06-28', 'Ronal', 'Campo', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '78118ecf5e9c86665f5d52918647ccd8'),
(504, '2013-06-28', 'Fafael', 'Eduardo', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e4b48081d737abc3a88539702930ec5b'),
(505, '2013-06-28', 'Antonio', 'Restrepo', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '7ca36ebfb033b386ee4497892aa03fa1'),
(506, '2013-06-28', 'angel', 'jesus', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'edd0e53d4295eb0925d50a1a99f272ec'),
(507, '2013-06-28', 'mauricio', 'bojato', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '0c92566ae900721652d23e55e056df12'),
(508, '2013-06-28', 'Fecho', 'Suarez', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5688080b2c138bb237d952c7a285e8e9'),
(509, '2013-06-28', 'Nike', 'Jaramillo', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2bdd50298ee5955d98922854a7b05f4a'),
(510, '2013-06-28', 'leonel', 'gomez', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '054a61a85deb909eebab5a54fd9c07f5'),
(511, '2013-06-28', 'Rafita', 'Jacquin', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c0657b7948b5bc4f8678ca179c192297'),
(512, '2013-06-28', 'Farid', 'Murcia', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f20046b8a261cd7b28e4310f3475379c'),
(513, '2013-06-28', 'jael', 'luis', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e1bfbb73b32dda05ef0547dbd1269bd3'),
(514, '2013-06-28', 'Santiago', 'Basulto', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a7c14b2a5aac50786570b30fe5424153'),
(515, '2013-06-28', 'Tego', 'Andres', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '21c6817b09a203172ae2c0ff319ae6df'),
(516, '2013-06-28', 'mario', 'avila', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '4e1881b16226abb5a2c4e60b93ea3491'),
(517, '2013-06-28', 'Franklin', 'Zabaleta', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '14e916d52dfdce1a4bcb0a7d45f426b4'),
(518, '2013-06-28', 'Jaime', 'Duzan', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '236162d18d3091d3e08a0c929b49ce62'),
(519, '2013-06-28', 'El', 'Pollo', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ddf2f90da25c64a18bf5d8e900e97d00'),
(520, '2013-06-28', 'Mane', 'Tokman', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6c97bbdbe96707755d5d77941faac941'),
(521, '2013-06-28', 'Javier', 'villafuentes', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2ac6ae24925beba4295fe9f2e0cf927e'),
(522, '2013-06-28', 'emanuel', 'caballero', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1b531ef380aacecae071b57ee2a5bcd0'),
(523, '2013-06-28', 'Cesar', 'Andres', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd7c123cd6e2a5b1bef63619c0e50cdaf'),
(524, '2013-06-28', 'Bernardo', 'Gutierrez', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '9965b613fb6afe5df059e3623598e73b'),
(525, '2013-06-28', 'Alexander', 'Morron', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a7660955f6fe9baa3801b5b9209b53a0'),
(526, '2013-06-28', 'fernando', 'luis', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '41c75421573b7cc0022cb4448770a6b9'),
(527, '2013-06-28', 'luis', 'mendoza', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '892d48bc165e9f7594305d37bffdd393'),
(528, '2013-06-28', 'francisco', 'uriel', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8a027957b56cd1d22ab189c4ad6e9fc9'),
(529, '2013-06-28', 'Fulgencio', 'nestares pedregosa', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1962d3eac3b0b7af5267cfdb3aa35959'),
(530, '2013-06-28', 'Liborio ', 'CaamaÃ±o Jabalquinto', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8259eb1a8bd366db43361cc72aae3efc'),
(531, '2013-06-28', 'Sinforoso', 'Cuentas Melguizo', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '9ab3879f6ec4b4164eca38ae8a32c961'),
(532, '2013-06-28', 'Candido', 'Gomera Del bies', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd18c50ad9d8b6fa97839970ca6458d49'),
(533, '2013-06-28', 'Celentorio', 'Carrasco Piedrahita', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8cd23c0e7e63f8e56015549c480eb007'),
(534, '2013-06-28', 'Frasco', 'Sanchez Gorafe', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '3eca4b390ca5ca9c09ab1ba7e122eefc'),
(535, '2013-06-28', 'Niceto', 'Alcarria IÃ±iguez', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '844cf703756aac5c24ce7b5fa85baedb'),
(536, '2013-06-28', 'abril', 'basualdo', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '52f3a0ef302d21cd50716898c83a7373'),
(537, '2013-06-28', 'adriÃ¡n', 'lavalle', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e52caff8030d29edfbd764a0c6020fc0'),
(538, '2013-06-28', 'agustÃ­n', 'valverde', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'da8434dc38b8600834d6ef8f78ac64e6'),
(539, '2013-06-28', 'albano', 'casares', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b54f8ba345133379965fb563f5623165'),
(540, '2013-06-28', 'atilio', 'montreal', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '71d0c71ebc9bb8335b2bb1bfd213624f'),
(541, '2013-06-28', 'benito', 'gutierrez', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '25812a2e1a6f343a27aeb73c579dd4f1'),
(542, '2013-06-28', 'bonifacio', 'del carril', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'cea2a723841cf4ee46131b675dcb3673'),
(543, '2013-06-28', 'bruno', 'ascari', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '134ec864fae34e5957f282eb03b10d69'),
(544, '2013-06-28', 'camilo elizondo', ' elizondo', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '3ec6eb105c2b32de3eb7809070696cbf'),
(545, '2013-06-28', 'honorio', 'vazquez', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b0ef15580dcc5e7b4bdf8f20566598bd'),
(546, '2013-06-28', 'justino', 'celsi', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'eb52fda78e880355ded8a20407494718'),
(547, '2013-06-28', 'leÃ³n', 'carrizo', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ec5223ff33407451c98cb363e36faafe'),
(548, '2013-06-28', 'plÃ¡cido', 'domuinguez', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6d4fee167f8fe236d84712285d13e3ce'),
(549, '2013-06-28', 'tito', 'elizalde', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '00132b698c0a68abd48aa81cac85f167'),
(550, '2013-06-28', 'tobias', 'martÃ­n', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ff0c346917067018f0c9100164faa89c'),
(551, '2013-06-28', 'ubaldo', 'genovese', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e81adff1f814866544b9ac82044d4d4d'),
(552, '2013-06-28', 'Javier Ignacio', 'Molina Cano', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '718b73bab6de134b5f1bfd43329c1780'),
(553, '2013-06-28', 'Sixto ', 'Naranjo MarÃ­n', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '52b9502584a0d803ff5ca37d920c0334'),
(554, '2013-06-28', 'Gerardo Emilio', 'Duque', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '54d77fb5a2ef0c51e14aee7bb9df7ec2'),
(555, '2013-06-28', 'Jhony Alberto', 'SÃ¡enz Hurtado', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '42ed21590c4eee0ed489dda1cc2a9126'),
(556, '2013-06-28', 'GermÃ¡n Antonio', 'Lotero Upegui ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6c945563f239b0553f52c9efd390d6a9'),
(557, '2013-06-28', 'Oscar DarÃ­o', 'Murillo GonzÃ¡lez', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '516039cd76925f7135eff8e8ca7a8dd3'),
(558, '2013-06-28', 'Augusto', 'Osorno Gil ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ba377d234612e7dd0b3686a47a2acca7'),
(559, '2013-06-28', 'CÃ©sar Oswaldo', 'Palacio MartÃ­nez', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a456d6d13699078e62bf07d2d6799191'),
(560, '2013-06-28', 'HÃ©ctor IvÃ¡n', 'GonzÃ¡lez CastaÃ±o', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '70263449db950c88942b4d4d1027d9c1'),
(561, '2013-06-28', 'Herman', 'Correa RamÃ­rez', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '50fea33d5852d46dc53505ce9547594f'),
(562, '2013-06-28', 'Carlos Mario', 'Montoya Serna', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f35822eecb102589defda073c3ab1ec6'),
(563, '2013-06-28', 'Carlos', 'Augusto Giraldo', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a66b002b9cbc2bd39865baad16bee97d'),
(564, '2013-06-28', 'Arturo', 'Tabares Mora', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '67447915743c6d45557f6829645f2a97'),
(565, '2013-06-28', 'William de J', 'RamÃ­rez VÃ¡squez', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ea51d23f03da73eec6ef27ff5aff230c'),
(566, '2013-06-28', 'Jaime', 'Lopez TobÃ³n', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'be996f1f16f202dca61145f73cdcd18c'),
(567, '2013-06-28', 'Carlos Alberto', 'Villegas Lopera', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '54fd00eb68ca6ba95c1582f8e983b5af'),
(568, '2013-06-28', 'Jorge', 'Uribe Botero', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '7915729a2e42605364f154fcb6596d55'),
(569, '2013-06-28', 'HÃ©ctor DamiÃ¡n', 'Mosquera BenÃ­tez ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1e970396b9dca6b3c9daa0d803c09ddd'),
(570, '2013-06-28', 'Ãlvaro IvÃ¡n', 'Berdugo LÃ³pez ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '38cac4bbfa8a8117e7e6df42115349dd'),
(571, '2013-06-28', 'Carlos Alberto', 'ZÃ¡rate YÃ©pez', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '4fe0e1e20efb6c1edf1c4739022f78ff'),
(572, '2013-06-28', 'Jorge LeÃ³n', 'Ruiz Ruiz', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f4d718d90634f5e51535c48c44b335f5'),
(573, '2013-06-28', 'John Jairo', 'Duque GarcÃ­a', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '264ffa33bd581393bb514b498b2cd753'),
(574, '2013-06-28', 'Armid BenjamÃ­n', 'MuÃ±oz RamÃ­rez', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8c1ce7d7f05503a4fad59f32e2e5b341'),
(575, '2013-06-28', 'Elkin Octavio', 'DÃ­az PÃ©rez', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd829f9a89665c61b02929aab301295b1'),
(576, '2013-06-28', 'Julio Cesar', 'Rodas Monsalve', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f7adbca17d2b772f7a11653da473c197'),
(577, '2013-06-28', 'Gabriel Jaime', 'JimÃ©nez GÃ³mez', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '039fb4b74e6dff82eb1ab4eabba8d432'),
(578, '2013-06-28', 'JosÃ© Didier', 'Zapata SuÃ¡rez', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f2731e44848de67fa293741e1730bf86'),
(579, '2013-06-28', 'Bernardo', 'Posada Vera', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f0fa01ceaaff60646d3c89e88c5508b4'),
(580, '2013-06-28', 'Luis Guillermo', 'VÃ©lez Osorio ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '7fe3881911ed416418d9ea5eea27c894'),
(581, '2013-06-28', 'Horacio Augusto', 'Moreno Correa', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '47d12554838b6f49100ab85bfd7ca5de'),
(582, '2013-06-28', 'Alejandro', 'Alzate GarcÃ©s', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '70ca7e9fb4957c6a6902f717fed33eeb'),
(583, '2013-06-28', 'Javier Ignacio', 'Aguilar GÃ³mez', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '595cd6803384f0ee50d12c97ff629dc3'),
(584, '2013-06-28', 'Adolfo LeÃ³n', 'Correa Silva ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2429b675c59adb8e68b3372c3d52442b'),
(585, '2013-06-28', 'Gustavo HernÃ¡n', 'RodrÃ­guez Vallejo', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e450b68a25ed4564934ff5fe25d38a97'),
(586, '2013-06-28', 'Oscar DarÃ­o', 'GÃ³mez Giraldo', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '4256386fd9f19defdb811e32e3d53b9c'),
(587, '2013-06-28', 'Gonzalo', 'LÃ³pez Gaviria ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b4d524c955c76168f670062747c77abd'),
(588, '2013-06-28', 'HÃ©ctor', 'Manuel Pineda ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '38c201f63db848cef5ebc1bae1b1896e'),
(589, '2013-06-28', 'Luis Alfonso', 'Escobar Trujillo', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'addd843b84064f9e8f7b8e0544c7c9b3'),
(590, '2013-06-28', 'Luis Oliverio', 'CÃ¡rdenas Moreno', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '12a7dd0586f187d8cb204005bd289638'),
(591, '2013-06-28', 'Luis Fernando', 'Castro HernÃ¡ndez', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '7033b9b8adc745362724a17f36a84761'),
(592, '2013-06-28', 'Julio Cesar', 'RodrÃ­guez Monsalve', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1e508a6397f42b8071fac25fa5d4d43a'),
(593, '2013-06-28', 'Ãlvaro de JesÃºs', 'Saldarriaga VÃ¡squez', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '07f68a15a18b7ab47d6d77c248100876'),
(594, '2013-06-28', 'Luis AnÃ­bal', 'SepÃºlveda Villada', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5fb3b804babbcf56104bcd79164c8920'),
(595, '2013-06-28', 'Ãngel Gabriel', 'Arrubla Ortiz', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e34c66ffa447a4a565e353f67f5eddfa'),
(596, '2013-06-28', 'Ãlvaro de JesÃºs', 'Bocanumenth Puerta', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '155d81321d8f27f5634ea32e0c9b4288'),
(597, '2013-06-28', 'Fabio Alexander', 'Florez GarcÃ­a', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '106893d6661eadbc990ef33dde2d586d'),
(598, '2013-06-28', 'HÃ©ctor DarÃ­o', 'BermÃºdez Saldarriaga ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'cad01f3041e366214411907f1a26b636'),
(599, '2013-06-28', 'francisco', 'sandon diaz ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e7bbf488dfdacfbf3b77320de4bea5d9'),
(600, '2013-06-28', 'wilmer jose', 'gomez de avila ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ea8530c51cbd6c18cb8dd1e206c7a006'),
(601, '2013-06-28', 'adalberto', 'berrio ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f2e63b76b9b9467c05010354673268fc'),
(602, '2013-06-28', 'ivan dario', 'rodriguez teheran ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '4fba87ff2fc1d126d2ada8cdebbc8803'),
(603, '2013-06-28', 'edinson', 'arevalo pitalua ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '82bc8a8497201089012d5aa7d5c221ba'),
(604, '2013-06-28', 'victor', 'peinado gomez ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '51f75b030969775fdfa7e5ab65afd6ea'),
(605, '2013-06-28', 'samuel de jesus', 'alvarez gomez ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '80af4aadb5f81f4b597de1bd6e8954c3'),
(606, '2013-06-28', 'francisco', 'bello batista ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '9ff71ba9451dc61f04742abeaf3f75fa'),
(607, '2013-06-28', 'luis alfredo', 'carcamo alvarez ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8fa9b623c552faae3ea9f3e9c5c67e5d'),
(608, '2013-06-28', 'tomas', 'barboza ortega ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'adf6c4f8bc4734861a44fdab15118f91'),
(609, '2013-06-28', 'julian', 'cruz marrugo ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6514f048c6a24bb663258be5b03d57f9'),
(610, '2013-06-28', 'alexander', 'aparicio ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6856e522cd88a0d83fc5cdda8bde3001'),
(611, '2013-06-28', 'jhony de jesus', 'romero barrios ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '948c3c332eccfad4825937949d119ef5'),
(612, '2013-06-28', 'jhonny', 'alvarez martinez ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '76c79ee82df63e3881c94e1f12aa6765'),
(613, '2013-06-28', 'Juan David', 'Lopez Matute ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '566bc34a7d53a9eb9fbec4bbdee90b5e'),
(614, '2013-06-28', 'Jesus David', 'NuÃ±ez Perez ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1610d157ed070f16ef1ec7a44f4870a7'),
(615, '2013-06-28', 'Luis', 'Cardona Perez', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '133a4f73049b9da81bcb211c05f9061d'),
(616, '2013-06-28', 'Jose De Los Reyes', 'Martinez Barrios ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd3d05f47d8be104bf727aa738a8ca0da'),
(617, '2013-06-28', 'Jhon Jairo', 'Perez Perez ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '58ab02b0c96782e3af99f2e9949f7539'),
(618, '2013-06-28', 'Luis', 'Andres ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '4e01e00d72e4b954166bef36ca031424'),
(619, '2013-06-28', 'Juan Camilo', 'Polo Romerin ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '7cd9b4a1912a85d86e76d6862a6f2251'),
(620, '2013-06-28', 'Josep', 'Reyes Torres ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1034623a3e3a1973de334c8b5d15fee6'),
(621, '2013-06-28', 'Jose', 'Marquez Salina ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a746f6798fe0380ec42f4ce20edf6664'),
(622, '2013-06-28', 'Samuel David', 'Mora Alvarez ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ffc4b798222119cb7ce1c9e6861e5352'),
(623, '2013-06-28', 'Juan Bautista', 'Olivera BolaÃ±o ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'bc6c3b6fbaf62718e5961900746818a2'),
(624, '2013-06-28', 'Mario Rafael', 'Merlano Del Real ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '119eefc51fd5217f2860d0039de78802'),
(625, '2013-06-28', 'Orlando Antonio', 'Cuello Perez ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '513567faedad943654ca655d917e496a'),
(626, '2013-06-28', 'Manuel', 'Herrera Ospino ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1bd172b24579f3a633f8e99a50bc13d1'),
(627, '2013-06-28', 'Jesus David', 'Castro Visbal ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8c85072b51e1483d5f82c2610565b093'),
(628, '2013-06-28', 'Andres', 'Viloria Bolivar ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '707dc0afcf544049b8e5c6e2a4221caa'),
(629, '2013-06-28', 'Geraldin', 'Castillo Arias ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ddd425effab948e1aba164f1af22b9ad'),
(630, '2013-06-28', 'Jose Julian', 'Durango Vargas ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '43792ddddf636c2af08cef12acf85370'),
(631, '2013-06-28', 'Efren Antonio', 'Buelvas Cogollo ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'cee03e4997ed0ae95a1366f6f527d727'),
(632, '2013-06-28', 'Francisco Javier', 'Velasquez Giraldo ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '49ebf37c6a1afa80d29993c5317b0bb5'),
(633, '2013-06-28', 'Marciano', 'Moncaris Giraldo ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ee6d67a75a81d439de4d0a73ff6b4035'),
(634, '2013-06-28', 'Duarte', 'Salas', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2776116064eaa4193d3379cc38f6c1fe'),
(635, '2013-06-28', 'Asterio', 'Palacio Cortez ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '80807a9a17db0d31708f237151d9e61b'),
(636, '2013-06-28', 'Julian', 'Fajardo Luna ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c17ac62d55e84d50359caa84ab0ff224'),
(637, '2013-06-28', 'Emilson', 'Villalba Talegua ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '70afddce8926c6b349f11661db78f1fe'),
(638, '2013-06-28', 'Julio', 'Peluffo ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6146902ebc98955b22eb44bdbb1e558c'),
(639, '2013-06-28', 'Ruiz', 'Manjarrez ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '34d504fecc15186f30b5af0bdaecf107'),
(640, '2013-06-28', 'Eliecer', 'Estrada Florez ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c6346b07d2f7a1325013c43d0604683c'),
(641, '2013-06-28', 'Eusebio', 'Marrugo Barrios ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd9b0ca98d9f98ca96da9a646192dbf50'),
(642, '2013-06-28', 'Bleiner', 'Blanqucett', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '717373df02ba76c5df0c33a6a9e559f3'),
(643, '2013-06-28', 'Joaquin', 'Montero', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '7ca3cfe05b9600c9abd319570fb9d7b9'),
(644, '2013-06-28', 'Edwin', 'Caraballo Soza ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '39e3e09039c30dd1dfc67fed524e222f'),
(645, '2013-06-28', 'Keiner Yesid', 'Batista Miranda ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f6e2b4109003830a86c8178171eb0c0e'),
(646, '2013-06-28', 'Jhon Jairo', 'Palacio Mosquera ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '10a209276b16f805181d45fc35146f0f'),
(647, '2013-06-28', 'Rafael', 'Rodriguez Barco ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ba3796f44cb24ec99fa11695356cc0ff'),
(648, '2013-06-28', 'Uber Eduardo', 'ZuÃ±iga Blanco ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'fabadbcb979c54be921ab66b5bc45c80'),
(649, '2013-06-28', 'Tomas', 'Ramos Castillo', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5ba34e29b73862e796bbea8297e4b77b'),
(650, '2013-06-28', 'Crecencio', 'Herrera Gomez ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8fe15c397713a0732ab1ab7139bb24b7'),
(651, '2013-06-28', 'Miguel', 'Lopez Martinez ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '23586bc7db4f738e761f4a3df58415e6'),
(652, '2013-06-28', 'Camilo', 'Ramos Rocha ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'fa592b845a28797ee314c918f327b34c'),
(653, '2013-06-28', 'Camilo', 'Ramirez Navarro ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '217b7d2178b921053e6d4369a7ccd9b1'),
(654, '2013-06-28', 'Eduardo', 'Jimenez Caraballo ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'da50a888756b2dc77a58aa3d9d690d82'),
(655, '2013-06-28', 'Jorge Luis', 'Castro Martinez ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '75bcef163bb965f88610558592614c4d'),
(656, '2013-06-28', 'Eduardo', 'Baron Perez ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '52db9f00485e1d31ab0e467e47299a6d'),
(657, '2013-06-28', 'Eduardo', 'Palacio Serna ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '389aa2e29bbbcc050b743b03ab09dfaa'),
(658, '2013-06-28', 'Jose Ramon', 'Parra Gutierrez ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c9807cf03b58094cc1149ba354a907ff'),
(659, '2013-06-28', 'Luis Antonio', 'Marmol ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd52762dc5c945ce678919d4354aa00fb'),
(660, '2013-06-28', 'Alfredo', 'Marquez Guerra ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '4269dcff632bc0f09564b586bdba67dc'),
(661, '2013-06-28', 'Doiler Enrique', 'De Alba Parra ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e8f5cd5244c1846cccc901eeb11e7853'),
(662, '2013-06-28', 'Juan Carlos', 'Ochoa ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '74e02aba8e22c51193940e342de9a457'),
(663, '2013-06-28', 'Jesus David', 'Madrid Palomino ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ebb649ff4b8ae720e5c1fcdbe5639f98'),
(664, '2013-06-28', 'Oswaldo', 'Padilla Santos ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd7da266431cfe2c5a9cb48f138dc7d50'),
(665, '2013-06-28', 'Jose David', 'Ospina ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'dee0d2c2edae7b53fb2ddfd60335c2b0'),
(666, '2013-06-28', 'Abel Mariano', 'Balseiro Atencio ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a838f07a8d48888da295dbca03693aba'),
(667, '2013-06-28', 'Luis Fernando', 'Lora Julio ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a47c0fad01cae5df32d7e2a889fa29e6'),
(668, '2013-06-28', 'Juan', 'Vargas ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c57541e193333a4072a7b7417d055a72'),
(669, '2013-06-28', 'Rafael Arturo', 'Acosta Molina ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '87478f712a40fb0b1d40d0157794624b'),
(670, '2013-06-28', 'Edilson', 'Porto Vasquez ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '201565399925efe52d45faa12e3c3db6'),
(671, '2013-06-28', 'Andres', 'Palomino Alfaro ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '12068298cbfc21107f1f88c4439a9ef3'),
(672, '2013-06-28', 'Daniel', 'Madrid Correa ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a5f2e97f37c90e51f3a9b23bf7dfbb27'),
(673, '2013-06-28', 'Cristo', 'Miranda Aleman ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8e81d847f488c5099dbb4548b59fc827'),
(674, '2013-06-28', 'Daniel', 'Madrid Coneo', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '4ab980acef41edbce7c8ea5b430eb158'),
(675, '2013-06-28', 'Marcial', 'Galan', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'abdf245a8a1981b819de3c0a306f50ac'),
(676, '2013-06-28', 'Dario A.', 'Ovalle Castrillon', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ef33b70ba716864968d8cf203fc069f9'),
(677, '2013-06-28', 'Hector M.', 'Lopez Ricardo', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5f9808650c5a7895775cd574ff8873c5'),
(678, '2013-06-28', 'Fredys', 'Hidalgo', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '3223a35fdefd4f1b05f238d94119043c'),
(679, '2013-06-28', 'Humberto', 'LiÃ±an', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '4569fd0a2ff61da05ea527550ce92951'),
(680, '2013-06-28', 'Leonardo', 'Fabio', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd3fd9d48597a4d0ec8fc3ee5630d3331'),
(681, '2013-06-28', 'Hainer', 'Madera', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2076ffa588258d67f9473a57a2f2a329'),
(682, '2013-06-28', 'Silvio Leon', 'Castillo', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5ad87454cccff72eaa6eb7dac88bbb87'),
(683, '2013-06-28', 'Miguel Angel', 'Lora', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '687f6df585fd4f15ab0ff276037211d7'),
(684, '2013-06-28', 'Prudencio', 'Diaz Fernandez', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '9f63ca31ee0d95342054b8e47bedcc3b'),
(685, '2013-06-28', 'Antonio', 'Marimion Villa', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ae065776305b63e2fe9fd65e01d64430'),
(686, '2013-06-28', 'Angel', 'Blanco', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '20b37d7996eeade004243c552734fb05'),
(687, '2013-06-28', 'Benito Julio', 'Giraldo', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c29d5a775119c1fbbae44742cc971d2a'),
(688, '2013-06-28', 'Eduardo', 'Cervantes', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b93b667532b01fd6d23b41c4d4f32e7d'),
(689, '2013-06-28', 'Carlos A.', 'Anillon', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '3f637c90435f462b8c4f67e18d360f59'),
(690, '2013-06-28', 'Andres', 'Escandon', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6f7bcb12920854a11ed324e480709543'),
(691, '2013-06-28', 'Donaldo', 'Priolo', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '39babb82731cae366bc4b6f28403511c'),
(692, '2013-06-28', 'Atencio', 'Melgarejo', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'dbb8f4ad90456b58fb4131448302c4ce'),
(693, '2013-06-28', 'Pedro', 'Silgado', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '0721b30e691cd33c87ceb0e8ca4f25bf'),
(694, '2013-06-28', 'Antonio', 'Perez', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '362aef7b44792a6694cbe10928f93dfe'),
(695, '2013-06-28', 'Esteban', 'Venecia', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '62387112dcf83cd39b9171695e2e40e9'),
(696, '2013-06-28', 'Luis ', 'Mercado', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'da71a0571081449fdbcb76e247ac3153'),
(697, '2013-06-28', 'Eider', 'Lagares', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'be46765b0c724f7ab57ba8644386401d');
INSERT INTO `venta` (`id`, `fecha`, `nombre`, `apellido`, `pais`, `mail`, `telefono`, `fpago`, `total`, `descripcion`, `confirmacion`, `pass`) VALUES
(698, '2013-06-28', 'David', 'Monsalve', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '03d9f351d41938a75b321957a2d4d352'),
(699, '2013-06-28', 'Hayder', 'Laguna', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'bae9cb46956d4df28d7b9c6264145cbb'),
(700, '2013-06-28', 'David', 'Pinedo', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b5bf2bbe9d42523bd3c92173ec339220'),
(701, '2013-06-28', 'Aurelio', 'Recuero', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f2e77673bd2ed53efeebb2d124b60b6e'),
(702, '2013-06-28', 'Fabi', 'Cordero', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '47e706757f060dac5b96ffc5147192a2'),
(703, '2013-06-28', 'Manuel', 'Maldonado', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '75989e1a452aad05860f385b8d24d909'),
(704, '2013-06-28', 'Luifer', 'Echenique', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd207b3defde231d140d3aecc8500469c'),
(705, '2013-06-28', 'Sergio', 'MuÃ±oz', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '019bea36f45b1b86a812f5674d6f89d2'),
(706, '2013-06-28', 'Rodolfo', 'Valdez', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '56beb4e6de49e215289b2e6d1018d2c5'),
(707, '2013-06-28', 'Luis D.', 'Valiente', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '139beb466cdbfa8408a8170d2ab7fcd9'),
(708, '2013-06-28', 'Dalwis', 'Castro', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '685f64be1c9296d564602342dd6e80e5'),
(709, '2013-06-28', 'Jesus', 'Menco', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '4194dcd3a09d96027dba14f1169265b6'),
(710, '2013-06-28', 'Antonio', 'Tavera', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5ca23110901f18d8068b9902ed05853f'),
(711, '2013-06-28', 'Cipriano', 'Iglesias Fuentes', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a610c6a40c1ffa894db770163b8ce8da'),
(712, '2013-06-28', 'Angel', 'Burgo', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f7a90730b9e113ed91275d5e08bbcae7'),
(713, '2013-06-28', 'Luis', 'Petro', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1743306f847d1e602a1cc4e0fce97de0'),
(714, '2013-06-28', 'Sebastian', 'Vasquez', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f85816614a3b7ef17bc6e06761b47a46'),
(715, '2013-06-28', 'Luis', 'Delanoy', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c38bdc0cfe0a6c83611bf35f31f060e4'),
(716, '2013-06-28', 'Enrique', 'Aguilar', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1e4c2cfd29b2c764708fa83ded03263a'),
(717, '2013-06-28', 'Remberto', 'Rivas', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'eb887209961448d076ecd7be2fdda511'),
(718, '2013-06-28', 'Ricardo', 'Navarro', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8031359afc7d515ff091a3bd8bdd91bb'),
(719, '2013-06-28', 'Cristobal', 'Garcia', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '49c7825e3f4857d0952ba464a0cd8da6'),
(720, '2013-06-28', 'Alberto', 'Vera', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b15f9db662ab18838be364bd0b375199'),
(721, '2013-06-28', 'JesÃºs', 'De La Cruz', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '70a3b8e7ccf7bc95c916eff3b7b26c05'),
(722, '2013-06-28', 'Junior', 'Tarazona', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f0b7460fd6edd1cdc30011a9fa338dad'),
(723, '2013-06-28', 'Giancarlo', 'Vicente', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e28f7a3a369706fa613b62e08e80e29d'),
(724, '2013-06-28', 'Joseph', 'Justiniani', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c76989a9748806b04240203b27138d50'),
(725, '2013-06-28', 'Edgar', 'Huancachoque', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'da9ee17388e9c8473d7fc8a2cd251b2a'),
(726, '2013-06-28', 'RaÃºl', 'Ticona', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c1c0c4e598f27a8fa29f24f6fe806713'),
(727, '2013-06-28', 'Jimmy', 'Atoche', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1d50e765a43f836e8c16f11b0fe0251a'),
(728, '2013-06-28', 'Fernando', 'Sicha', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5ce52010164e0683bd8f852afc32c4d2'),
(729, '2013-06-28', 'Ricardo', 'Barrial', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd6ab0d6edc69a33f3445ae2183806e33'),
(730, '2013-06-28', 'Antonio', 'Carrasco', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '91205e2d65bd5d91d6440d12730d8977'),
(731, '2013-06-28', 'Marco', 'ChÃ¡vez HuamÃ¡n', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6fb9e2c92f451c79593992784ad4d07a'),
(732, '2013-06-28', 'Freddy ', 'Huamanchumo GuzmÃ¡n', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a12e39159d3ebcb3bc9efe915d281c1b'),
(733, '2013-06-28', 'ZÃ³zimo', 'Llallahui Quispe ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f9d147ef1965738254c66662d6592f38'),
(734, '2013-06-28', 'MoisÃ©s Percy', 'MontaÃ±ez OrÃ©', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '55ace6f62518aa3f7d1e5f4207c6f7d3'),
(735, '2013-06-28', 'CÃ©sar MartÃ­n', 'Paredes Torres', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '3f7df460ae6f6fc28d7ddf9f00468452'),
(736, '2013-06-28', 'Jur', 'Boza Capillo', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e0a688b423feb1033688670f9704ff6d'),
(737, '2013-06-28', 'Aquiles EfraÃ­n ', 'FernÃ¡ndez Solar', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6600daf75829b6d0c259d6a3c9ce5490'),
(738, '2013-06-28', 'Juan Luis', 'Vargas HuamÃ¡n', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8e7a626ee0e6ee2760330d1916a17a17'),
(739, '2013-06-28', 'Walter Demetrio', 'PiÃ±as Matos ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ac4aac387c6cbc752eb7c6c0aef33aff'),
(740, '2013-06-28', 'Alexander', 'Ojeda Navarro', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd4456f70f0c00a58fc18dd0f27d17042'),
(741, '2013-06-28', 'RaÃºl', 'Montoya NuÃ±ez', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e3635564031838b0890882596b080b6e'),
(742, '2013-06-28', 'Wilmer Henrry', 'SÃ¡nchez Castro', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1c4201b9e8950d9fb21595d51fca9966'),
(743, '2013-06-28', 'Roly Adan', 'Pariona ComÃºn', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2266111d42fdd9c8f48a3049db8696c7'),
(744, '2013-06-28', 'Miguel Ãngel', 'Arredondo RamÃ³n', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2c96b4e2f8ed69d7c0485471fff40a76'),
(745, '2013-06-28', 'Juan', 'Apaza', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2495ec86ce76d1fe10bff5d4c3d746f4'),
(746, '2013-06-28', 'Luis', 'Incacari', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '35c6f2397504da145097b51e3f3087c5'),
(747, '2013-06-28', 'Carlos', 'Asencio', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f094a8f88d594cb9058a847ebd6ac7be'),
(748, '2013-06-28', 'Sandro', 'Martinez', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ec3e77cd720736a04273e92a3ead14ba'),
(749, '2013-06-28', 'AndrÃ©s', 'Bichara', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f19454ae6967d2f5a7fd2a126be1aa10'),
(750, '2013-06-28', 'Ãngel', 'Giraldo', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '06d45599dd59ac525f913605e4d820bd'),
(751, '2013-06-28', 'Ãngel', 'Giraldo', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b6a46967223f3e3e817190f0909ff189'),
(752, '2013-06-28', 'Custodio', 'Gallego', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5f7ada57834729811253c467bdea5f31'),
(753, '2013-06-28', 'Carlos', 'Garamendi Ventura', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a431317723eec655978706e6374701b7'),
(754, '2013-06-28', 'Jorge', 'Gamonal', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '50b99b2f2655143cebc0e662e2d7c342'),
(755, '2013-06-28', 'Deyvis', 'AlarcÃ³n', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '49244b85a0aed3c39d72589dc54992d6'),
(756, '2013-06-28', 'Juancho', 'Encina', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'dd60024d73eee7b23051e68a766530c8'),
(757, '2013-06-28', 'Rafael', 'Sandoval ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'db5ddb493047046cf8c2d0eaad36d2b9'),
(758, '2013-06-28', 'Leo', 'Quevedo', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ad23cf58aa1890bb67fdcf797b46819d'),
(759, '2013-06-28', 'Guillermo', 'Rojas', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '0f4bdde999a2452d02c53ce3e48d9e82'),
(760, '2013-06-28', 'Alfreth', 'Zayas', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '4c8449a0a49a35cb4f5d6ad8b2900336'),
(761, '2013-06-28', 'Percy', 'Zapata', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '65733cc9b618517d248a055656fde79c'),
(762, '2013-06-28', 'Alexander', 'Vilela', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8d32eaaded977d7d4702af8afb4fc570'),
(763, '2013-06-28', 'Gustavo', 'Olivos ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '62841180d3f6299f4b0510097c6c80e0'),
(764, '2013-06-28', 'Segundo', 'RimarachÃ­n', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ab79444f155a24d48922a8015f71e405'),
(765, '2013-06-28', 'Alexis', 'Ocasal AlegrÃ­as', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '35165c02d834ae5333266a8ec17c7c93'),
(766, '2013-06-28', 'Jorge EliÃ©cer', 'BeltrÃ¡n Osorno', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '4edb615cfc959fef60e4bf52b6a21701'),
(767, '2013-06-28', 'FÃ©lix Amado', 'Ãvalo Villasis', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8890a702703efb6443125d6c1088679f'),
(768, '2013-06-28', 'Fidel Flavio', 'Coila Quispe ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '827e6b3e6f1ab4c667276bf16be41aec'),
(769, '2013-06-28', 'Luis', 'Patsias Mella', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '4dfdd39ae27416ce724c3062a1708059'),
(770, '2013-06-28', 'Bell Orlando ', 'Marchan Lujan', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c2239438e6f9933bbae1c11e5a764a59'),
(771, '2013-06-28', 'Gabriel ', 'Janqui', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '89383b6e36484f5a8368a20160b4d92a'),
(772, '2013-06-28', 'Leonidas', 'Bayona', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'af0677204d4bbe8e02014b5855ccaf60'),
(773, '2013-06-28', 'Rafael ', 'Calle', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'fedc7de9a15226776d86f85bd9c463da'),
(774, '2013-06-28', 'Arnaldo', 'PÃ©rez', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '886da41f320fc3261f1f92ae5165b62b'),
(775, '2013-06-28', 'Manuel', 'Palacios', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f2382fda25643f6d35cbcb83bf94a2de'),
(776, '2013-06-28', 'Fredi', 'Vidal', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '7a4896533b37bbe3d69024c6923def8f'),
(777, '2013-06-28', 'Masias', 'Albujar', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2815f635741a482e622c603770518d94'),
(778, '2013-06-28', 'Villasis', 'Escudero', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'bda6eeea99fb7bf8a74cafa3b8503192'),
(779, '2013-06-28', 'Jorge ', 'Juarez', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '69c7442baa5621c559ffc774be64f6e0'),
(780, '2013-06-28', 'Eyzaguirre', 'Alfreth', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'afe7ef254566d69becddb4a8eeee4858'),
(781, '2013-06-28', 'Luis', 'Casas', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f4a3b8599e30677f811741064e53f0a2'),
(782, '2013-06-28', 'Enrique', 'Mattos', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f0973cc724cb6710a40bfefa0c06020a'),
(783, '2013-06-28', 'Freddy', 'Alejos', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '78b5602304fd7ca2cc1ae14e50726ec3'),
(784, '2013-06-28', 'Vela', 'Mauro', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '03a82f81a2f5424d0c04d929a8470876'),
(785, '2013-06-28', 'Otmar', 'Soto', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a46153570dc472470db80ec8ea7613ef'),
(786, '2013-06-28', 'Gilberto', 'Castro', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6144f531e9d9e0dc2e5e83efc27300fd'),
(787, '2013-06-28', 'Wilberto', 'Rufo', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd639320c95af0afd73d2dfab43760e16'),
(788, '2013-06-28', 'Alberto', 'NuÃ±ez', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '61e73729e6642ed5fa17a420b6b66858'),
(789, '2013-06-28', 'Aldo', 'Smith', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '22e2c98f084564531e912db3607f92d9'),
(790, '2013-06-28', 'Simon', 'Carrillo', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd9491d64de1ced0b1ca46b9bddb22d05'),
(791, '2013-06-28', 'Fran', 'Chumpitaz', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '7a7ab5bd15ad517fbd4b02b1de597d37'),
(792, '2013-06-28', 'Ignacio', 'Terrones', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'dff068b94bac7e5f8783b6a600807516'),
(793, '2013-06-28', 'Abel', 'Marchena', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b268d62f69cb28b7f62924319b3f7b15'),
(794, '2013-06-28', 'Abelardo', 'Laguna', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f6ccb5086739e68daf7089d9e52ed02e'),
(795, '2013-06-28', 'Adolfo', 'Mendoza', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e92cf265e0d1cf202c3f74488599fc93'),
(796, '2013-06-28', 'Adriano', 'Maravi', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '4579c24a846c7666b69623cdb85ac60e'),
(797, '2013-06-28', 'AgustÃ­n', 'Camargo', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ff087ad8e70082c9623a876e32514db0'),
(798, '2013-06-28', 'Alan', 'Ocampo', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '26759925685c3d3b0855f35eb1816548'),
(799, '2013-06-28', 'Alejandro', 'Serrano', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1b26641cdbcfbe406c55844bc6e65264'),
(800, '2013-06-28', 'Alexis', 'Torres', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '9775810d79170aa9a0dd747459ed7c15'),
(801, '2013-06-28', 'Amado', 'Flores ', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '3d90605ed0c2d558d0ff16313c1d1e05'),
(802, '2013-06-28', 'Belisario', 'Quispe', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5f3cc0bea1a89422b3addd777dea3861'),
(803, '2013-06-28', 'Benito', 'Gallegos', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '4dd410a082aea3864f346608beb7e411'),
(804, '2013-06-28', 'Caetano', 'Herrera', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '443e7268357a27ee24ac416412d4218c'),
(805, '2013-06-28', 'DamiÃ¡n', 'Casanova', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '7b143f0f603310fb796b9f7e8d826500'),
(806, '2013-06-28', 'Diego', 'Meza', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '52a8b7532bba1eb7dec7ea8a471ae3d9'),
(807, '2013-06-28', 'Donato', 'Cornejo', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '77e6f1d72cc5d3e7cceacbb09cd3acf6'),
(808, '2013-06-28', 'Edmundo', 'AronÃ­', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '005f099d1bc7104feb2c969fffeceba4'),
(809, '2013-06-28', 'Edwin', 'Quispe', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '660a62e2aeac0572198897f39aeffcd7'),
(810, '2013-06-28', 'Enrique', 'Montenegro', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '3a5e78148ee1daac7f49bbd6b12487f1'),
(811, '2013-06-28', 'Eugenio', 'RodrÃ­guez', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'be8f02c0484c45c86ca8ce3c198fb5fc'),
(812, '2013-06-28', 'FabiÃ¡n', 'Benavides', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8177f7628ff07626930ad49773606908'),
(813, '2013-06-28', 'FermÃ­n', 'LÃ³pez', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2d2b58993d4073359dc4369c806c3115'),
(814, '2013-06-28', 'Gabino', 'Vivanco', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b7363f18bbaa6f9209f6b56b4aaea560'),
(815, '2013-06-28', 'GastÃ³n', 'Tamariz', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'de4bc4106e2949014ee1cefa6fe8fe42'),
(816, '2013-06-28', 'Guido', 'Cuentas', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '7d9209ed4aa0c61c36331466876b36ee'),
(817, '2013-06-28', 'Gustavo', 'Paulino', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd888b7a8e99dc297dfb5abe2e76613c7'),
(818, '2013-06-28', 'HÃ©ctor', 'Romero', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a3f794fecab6c77f25e1d9bdc66b5cf2'),
(819, '2013-06-28', 'Hilario', 'GÃ³mez', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '0b1ef7dc351cbc48eda655a0108d8699'),
(820, '2013-06-28', 'Horacio', 'Alvarado', 'Colombia', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1e8a7f58e8a3bc860ebfccb641fb6368'),
(821, '2013-07-02', 'Abdala Felix', 'Ricardo', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c0daaca6eb6367820a5a87f3241b83e0'),
(822, '2013-07-02', 'Jorge Daniel', 'Albornoz', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '7e793b1103cad1c979966721bc85e882'),
(823, '2013-07-02', 'Alfonso Hugo', 'Florencio', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ba14e3a2ff45428137d31b9b969458b3'),
(824, '2013-07-02', 'Gabriel Oscar', 'Ambrosini', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2d683a3eb7a949182202fef1597a9908'),
(825, '2013-07-02', 'Amico Fernando', 'Francisco', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ec087ffbaf6e6e70b7eb921068038285'),
(826, '2013-07-02', 'Andrade Guillermo', 'Aldo', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f72a1e656b54b38cabef1aa7f076c0e3'),
(827, '2013-07-02', 'Andriuolo Deraldo', 'Guillermo', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '37572f4f8f4abcc33a88a42d9e126dee'),
(828, '2013-07-02', 'Anello', 'Rafael', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1ff851164fcdd550e5c00c6567810d48'),
(829, '2013-07-02', 'Francisco', 'Ansaldo', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '456c0e8457402ca00538777d283537a7'),
(830, '2013-07-02', 'Juan Jose', 'Anzaldo', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e3340c9cd7f9b644f2e086bfc5b49a35'),
(831, '2013-07-02', 'Marcelo Alfredo', 'Apestey', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd9fec1fb439068d3b98a2bf54caac293'),
(832, '2013-07-02', 'Hector Antonio', 'Aranda', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e339b4aabb80912aaf9ebab23921614e'),
(833, '2013-07-02', 'Pedro', 'Peretti ', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '0845043695eb829d7faefde695d7946a'),
(834, '2013-07-02', 'Favio', 'Pirone', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5e968ea2fdabecc8080bb1c9a270f415'),
(835, '2013-07-02', 'Ernesto', 'Stahringer', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b12f752cd18758f3ab89b756b83d10eb'),
(836, '2013-07-02', 'Joris', 'Baecke', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '367ddaf668853e0e36901eb9587cd1bf'),
(837, '2013-07-02', 'Antonis', 'Constantinou', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd7384225e186eca2a1fe253370eb68a1'),
(838, '2013-07-02', 'BegoÃ±a IÃ±arra', 'Pampliega', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd251b8c9aea9070adb2150f08a5236ab'),
(839, '2013-07-02', 'Oscar', 'Bazoberry', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1f7bc333aeb9e482c2c52ff60d98b630'),
(840, '2013-07-02', 'Lorenzo', 'Soliz', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '95ca958751e942a896cf3bc0e3fa399c'),
(841, '2013-07-02', 'Laudemir', 'AndrÃ© MÃ¼ller', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '07ea0726ba13742f2da89f54ff612f1d'),
(842, '2013-07-02', 'Weslei Silva', 'Parentes', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '99f97d69b37f62bd6186d3270c3bc381'),
(843, '2013-07-02', 'Sil', 'Vineth', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '3f9cbc116476b03d4aca83e6848f667e'),
(844, '2013-07-02', 'Emiliano JosÃ©', 'Ortega Riquelme', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '439b1020b0d69e3e8440ea479f2243ea'),
(845, '2013-07-02', 'Salomon Salcedo', 'Baca', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '3241f3d8e592eadd07615d70e63866bc'),
(846, '2013-07-02', 'Rigoberto', 'Turra ', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '4dcd2260a79af183179698eec6c339ce'),
(847, '2013-07-02', 'Zhang', 'Xiaoshan', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '48196bc5c2bc71a1a92787f248f877f2'),
(848, '2013-07-02', 'HÃ©ctor Manuel Lugo Agudelo', 'Lugo Agudelo', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '79213550c8b7a7df21b9d4a185c8330b'),
(849, '2013-07-02', 'Gonzalo Galileo', 'Rivas Platero', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b0ec8e6e9121a2296718e87855f4bc7d'),
(850, '2013-07-02', 'Miguel', 'Altieri', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '64a25b244b911f6fbc2eb08bc31acc1e'),
(851, '2013-07-02', 'Javier Molina', 'Cruz ', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6b773e0e20e5b5572fad17c8771b3a3f'),
(852, '2013-07-02', 'Maximo', 'Torero', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '657eb8934b9a6982bcefb733f2241f93'),
(853, '2013-07-02', 'Graciano', 'Mason', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '95a0709263220d04f1932c99a85ad11a'),
(854, '2013-07-02', 'Eduardo MartÃ­n', 'Azaola', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2824683df6ec6504f6d0ff89b624438d'),
(855, '2013-07-02', 'Jesus Maria', 'Alonso Vallejo', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '9ba5b2bc2733c58c0d5d1bca6c4836f9'),
(856, '2013-07-02', 'Pablo Angulo', 'Barcena', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ee1673f8e9b3193a776b187c20a40e05'),
(857, '2013-07-02', 'IÃ±aki Ansola ', 'Salegi ', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'eee94f9728d7196c88370a84c207899b'),
(858, '2013-07-02', 'Txabi', 'Anuzita ', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '7052d68fa1f257bb6a53121edc7562a1'),
(859, '2013-07-02', 'Juan Luis', 'Arrieta', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e2e934450db21846187b92553b40bc94'),
(860, '2013-07-02', 'Mikel', 'Arteaga ', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b4a3307d6eabf3e632c2ffb93cd38c59'),
(861, '2013-07-02', 'Juan MarÃ­a', 'Atutxa', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5cb01afbc959294e3bed8f22d660e9f6'),
(862, '2013-07-02', 'Jaime Balaguer', 'Lacasta ', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b4bf62d853e0b2b8c5aded546726c10d'),
(863, '2013-07-02', 'Belen', 'Balerdi ', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6d2465d460d9fd8fa0c309d2ad7505e2'),
(864, '2013-07-02', 'Nerea Basterra', 'GarcÃ­a', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '809dca933264b21c816f2ed14792f743'),
(865, '2013-07-02', 'JosÃ© Carlos', 'Bravo Yerro ', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'daa5e1e912cf453ba04234687a075167'),
(866, '2013-07-02', 'IÃ±igo Carmona', 'Cazalla', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'fdf5c3876b1112a2a3a5268e36e11282'),
(867, '2013-07-02', 'JesÃºs', 'Casas ', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e34d2ba3ce3efd2044b5c2860b42098a'),
(868, '2013-07-02', 'JosÃ© Ignacio', 'Cereceda', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ae467c30587e4204220f5bf1248accd2'),
(869, '2013-07-02', 'Adolfo Cires', 'Alonso', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5f6282d3f60dc5cc83ce0ec00c5c4aa2'),
(870, '2013-07-02', 'Josep Maria', 'Coll Rovira', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '66cd0fd01022bf4e6fa489e37f401900'),
(871, '2013-07-02', 'Mikel', 'Comenzana ', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '694d6ad294a0c95bfde61d155ca0c9d2'),
(872, '2013-07-02', 'Eneko', 'Egibar Artola', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '07729335ea8de9679cfa70d5baf998e2'),
(873, '2013-07-02', 'Gonzalo', 'Fanjul ', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c050b91450e5aa8f4966d52342c763aa'),
(874, '2013-07-02', 'Mikel', 'Gantxegi', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '34efdcf7747b36a730042d34663db02c'),
(875, '2013-07-02', 'JosÃ© Luis', 'Garay', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '257d0a58f2c5dea70fb808e809e0eaaf'),
(876, '2013-07-02', 'Jorge', 'Garbisu', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '52fc36266f7c86b60507d2e68b684098'),
(877, '2013-07-02', 'Andoni', 'Garcia', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '26cdab303991c8da44375ee1071b4728'),
(878, '2013-07-02', 'Aurelio', 'Garcia', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8ff14568ff65c6c0958dca0fb2372e15'),
(879, '2013-07-02', 'Jose Alvarez', 'Coque', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b692374fc6469782b379b1c0e296a957'),
(880, '2013-07-02', 'Fco', 'Garro Urruela', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '08c7521618e3fbdb16ede7174e62c91e'),
(881, '2013-07-02', 'Constantino Gil', 'Soto', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '365667ead52a93ab70965ec6b126d10f'),
(882, '2013-07-02', 'Jesus', 'San  Pedro', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '0fc5e21f4c82dd6ae54ab2e7fe519325'),
(883, '2013-07-02', 'Jokin', 'Gorriti GonzÃ¡lez', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '38d685ef0d1dffdf563c9f466a3f27b0'),
(884, '2013-07-02', 'Julio', 'Guinea', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '663c64aa474369d3f05691f7e0b698d6'),
(885, '2013-07-02', 'Juan AndrÃ©s', 'Gutierrez', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '58c2ffa8e9358400078670d6199a9322'),
(886, '2013-07-02', 'Juan JosÃ©', 'Irala', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '71a82cf97c8e8c23d65605ee5e150a3a'),
(887, '2013-07-02', 'Xabier', ' Agirrezabala', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c1bf5962d506653c19302b162be92971'),
(888, '2013-07-02', 'Javier', 'Iriondo ', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '08caf2a6e737cd44bd7c9a5c4f601644'),
(889, '2013-07-02', 'Xarles', 'Iturbe ', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '3f909fdbbddf1ddfae81ac1934420b06'),
(890, '2013-07-02', 'Roberto', 'Ituritza', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c6bd44592d365d78cb87a18202c7928e'),
(891, '2013-07-02', 'Fernando', 'Izaga Kortabarria', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'fe5bc6faebfd511cf096ec32ddf54b95'),
(892, '2013-07-02', 'Juan', 'Jauregui Iztueta', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f83b9bd4b705fcf65de3246972f45c21'),
(893, '2013-07-02', 'Pablo', 'Larrabide', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '54874219ab28168b56eae656520c6285'),
(894, '2013-07-02', 'Andoni', 'LarraÃ±aga Olabarria', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'be7c341bda51c346df99b66d9eb22d27'),
(895, '2013-07-02', 'Juan Luis', 'Laskurain', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '57ecaef238907b1074ef41642959c145'),
(896, '2013-07-02', 'Jesus M.', 'Lete', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '304b479f81709208e7137f26ecaba5fe'),
(897, '2013-07-02', 'Alberto', 'Llona ', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'eaf49a13b80eeeeaf3c2fd3d2403246f'),
(898, '2013-07-02', 'JosÃ© Miguel', 'Mera', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8d8213d202d70309234c6c2ec4baa1d4'),
(899, '2013-07-02', 'Antonio', 'Montero', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '0ac0eec4e2863118e5f1a99072217424'),
(900, '2013-07-02', 'Alfredo', 'Montoya', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '23158ef1609d66573070bf71bc6d73ab'),
(901, '2013-07-02', 'Sean', 'Morrisey', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd8b04d2982fc7d21d160f9257fcc4d25'),
(902, '2013-07-02', 'Juan RamÃ³n', 'Muguriza Aguirre', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd8b78d1f993061061ee86f86ad5b6694'),
(903, '2013-07-02', 'Ibrahima', 'Niang', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '93066f2dffa0ecef86795fd56ce289bf'),
(904, '2013-07-02', 'JosÃ© Antonio', 'Osaba', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c3d0dbfeddac3bb9346bdde777fed3f1'),
(905, '2013-07-02', 'Carlos Oses', 'Irulegui I', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '4e02de0e1fdf5aa09c43dcdcf4c51974'),
(906, '2013-07-02', 'Andreu Peix', 'Massip', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a3fa0c432d06c9f6230b9db979940d14'),
(907, '2013-07-02', 'Jesus', 'Pizarro', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'db02e76414e626a70c65f74680ec7fd8'),
(908, '2013-07-02', 'Lorenzo', 'Ramos Silva ', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '86c5067d7fe338ca604e986f98d51a30'),
(909, '2013-07-02', 'Miguel Rey', 'Cabrera', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '165c178eb94ecda85f6d460d87881ce6'),
(910, '2013-07-02', 'Octavio Romano', 'Vallejo', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c9170fa887aa895fc0595c207374b525'),
(911, '2013-07-02', 'Angel', 'Torre', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '41b28e3342e481ceffc823ded837de4a'),
(912, '2013-07-02', 'Ruiz', 'Quintano', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ad8f659f23afc801af294bbd56fdb2b0'),
(913, '2013-07-02', 'Javier', 'SÃ¡nchez', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c1486b7f3635d9b3cdb3f47b6613a12f'),
(914, '2013-07-02', 'Eduardo Urarte', 'Egurzegi', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '4879643366642fdebd0547a9dbe6d85f'),
(915, '2013-07-02', 'Pedro', 'Uriarte', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e8e71b9c917c431cc0841e7afcb1c11b'),
(916, '2013-07-02', 'Luis', 'SantamarÃ­a', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '830413d2851c0c3f2f1d76d8fc612f1c'),
(917, '2013-07-02', 'Martin Uriarte', 'Zugazabeitia', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '248846da99cd1cd29ad40e857d6cef30'),
(918, '2013-07-02', 'Miguel Vallejo', 'MuÃ±oz', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ba321430ec9d51b7a7739e3809c2ddad'),
(919, '2013-07-02', 'David', 'Ortiz De ArtiÃ±ano', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '9a64e27f7e8674de1cfd5b4790babd73'),
(920, '2013-07-03', 'JosÃ©', 'Zeberio', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '89116fba0bdf63a7504807b53809b1f1'),
(921, '2013-07-03', 'Nekane Zeberio', 'Ganzarain', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5f16107aaf89a97fabb8ca37b65a6dc5'),
(922, '2013-07-03', 'Jexus', 'Letamendia', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e4be2c1767c11d19f9c54f526f532467'),
(923, '2013-07-03', 'Noel De Luna', 'Noel De Luna', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '3f4981a530517bee37f11a5001da610f'),
(924, '2013-07-03', 'Noel', 'De Luna', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8a9d4e9722af2ad895a8a5254c6f29a2'),
(925, '2013-07-03', 'Sixto', 'Donato Macasaet', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a61eae4f23d3fd6cc157de8d4a0a73f9'),
(926, '2013-07-03', 'Christian', 'GouÃ«t', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a1c4c63f894684e3e1eed76131277486'),
(927, '2013-07-03', 'Mickael', 'Poillion', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8da5f8ed6b21ff8b97d4e5c392f90ab8'),
(928, '2013-07-03', 'Thomas', 'Price ', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '726c4488b8047c088a1fd853461583a8'),
(929, '2013-07-03', 'Arturo', 'Angulo', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8025d0f97be3de997b2c117dc0e28ef0'),
(930, '2013-07-03', 'Inazio', 'Galdos', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ce7b02215bdf9a43f83dba796ec71a50');
INSERT INTO `venta` (`id`, `fecha`, `nombre`, `apellido`, `pais`, `mail`, `telefono`, `fpago`, `total`, `descripcion`, `confirmacion`, `pass`) VALUES
(931, '2013-07-03', 'Agusdin', 'Pulungan', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2bd684308d4d964466cb070112c67a81'),
(932, '2013-07-03', 'Robin', 'Bourgeois ', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '0641f69fa4398c57413637f705302be9'),
(933, '2013-07-03', 'Stefano', 'Di Gessa', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e75400261b26198677fd2b51c94ed649'),
(934, '2013-07-03', 'Pablo', 'Eyzaguirre', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd65e86d2d72d8eaacc072c5a303b88f7'),
(935, '2013-07-03', 'Claudio', 'Figueroa ', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd0b4d8e98e839090aef0984499ba6f1a'),
(936, '2013-07-03', 'JÃ³zef', 'Stanislaw Zegar', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '9a743aa7b61c9a4ad17cc3079b5f42ab'),
(937, '2013-07-03', 'Paolo', 'Silveri ', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8edaa3cfb2467d042446b5319f141061'),
(938, '2013-07-03', 'Alfredo', 'AlbÃ­n', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd1f10e04ffb609e04b8e3f24ac4b1cb2'),
(939, '2013-07-03', 'JosÃ©', 'Olascuaga', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'aaf69915dd81da3f25f9e407a32b2951'),
(940, '2013-07-03', 'JosÃ©', 'Alegrett', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '9de519ebca9bced82842a4d5dc2148c9'),
(941, '2013-07-03', 'RaÃºl', 'Ruiz', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '7d4304db657d4a7653ea861e631a9bb6'),
(942, '2013-07-03', 'Aldo', ' Torres', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '3c5082f1267ed734be5367d24a0698a3'),
(943, '2013-07-03', 'JesÃºs', 'LÃ³pez', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8ccf18168b36bfe0816afa1e7b28c86e'),
(944, '2013-07-03', 'Jorge', 'Paulino', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '78620cb29b46fb00ef936226984c4a2b'),
(945, '2013-07-03', 'SimÃ³n', 'Romero', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1bb7a8a28ddbfa84a6d930e1d4ca816f'),
(946, '2013-07-03', 'Carlos', 'GÃ³mez', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a57aadc51cf79535f949134bd5893aa7'),
(947, '2013-07-03', 'Joel', 'Alvarado', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ccc0d0980b11fab84fbeab4c8bf8c8a3'),
(948, '2013-07-03', 'Enrique', 'Casas', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2409560a8d950c89757205f0950fe1bc'),
(949, '2013-07-03', 'Luis', 'Mattos', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e78f6657f6e3e06581a88b5e839910af'),
(950, '2013-07-03', 'Wilson', 'Horna', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5c2aabf9b9033977038e7d0a729d02f3'),
(951, '2013-07-03', 'Juan', 'Vilca', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'dcefed6f8a6a062bfefd584a8cb24bdb'),
(952, '2013-07-03', 'Dionei', 'Montenegro', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '9455cc34d72368096e2473e45ac82533'),
(953, '2013-07-03', 'Christian', 'RodrÃ­guez', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '3ec79ea3fd3c748e51d0065a28d6e495'),
(954, '2013-07-03', 'MartÃ­n', 'Erazo', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2f4413f8b8b2a3b80fab502c41238d8d'),
(955, '2013-07-03', 'Christian', 'Sarmiento', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'dfb506d7a987fad702cdb9dbc5213d0e'),
(956, '2013-07-03', 'Huamantalla', 'Quispe Alfredo', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c4e6370802da966df60fe27813cb536d'),
(957, '2013-07-03', 'Ricardo', 'Iriarte', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '9a08253dd6f1dc0dc55c06a0e2a2804c'),
(958, '2013-07-03', 'Rafael', 'Delgado', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6452236d3fe38db96c86045e458ea3b8'),
(959, '2013-07-03', 'Albino', 'TÃ©llez', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '7e9cf168f183bc75d02777893e7af7f8'),
(960, '2013-07-03', 'Manuel', 'Moreno', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6019f591f0234fddc4b6b235afdc5518'),
(961, '2013-07-03', 'Joel', 'GÃ³mez', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6f41642e81cb173a2ba9e73ce9ef79a4'),
(962, '2013-07-03', 'Carlos', 'Osorio', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '9dd4d5b169c96fe5924f2eeb11539e7e'),
(963, '2013-07-03', 'SimÃ³n', 'Paulino', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '41d0137dd540960d1289dcd8d26c66ad'),
(964, '2013-07-03', 'Jorge', 'Romero', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6134664bd52cc5469c4cf6c02addc08b'),
(965, '2013-07-03', 'Augusto', 'Bautista', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '4070235d29251d3d71f8f9d65828176c'),
(966, '2013-07-03', 'Ricardo', 'Cepeda', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'de3aab7f86ef3702ee2ece73bbe1250c'),
(967, '2013-07-03', 'Amando', 'Siancas', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '74e6b9d73c78db0884e26d395273c10c'),
(968, '2013-07-03', 'Robert', 'Jauregui', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '761ff62bf6db0d5d0b430212e8044296'),
(969, '2013-07-03', 'Alberto', 'Ramos', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'fb0f8b4696ca95f860d8bded689f8e62'),
(970, '2013-07-03', 'Carlos', 'angarita', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5042f3f115347e777ddd5f495e48bd67'),
(971, '2013-07-03', 'David', 'Quiroz', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd302367bc014641410f1d1e79c954c8c'),
(972, '2013-07-03', 'Ricardo', 'BazÃ¡n', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'bfe39e5d7718d0e062c744f8da51a234'),
(973, '2013-07-03', 'Arnaldo', 'Calle', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '4d6c724b85fbbf6ca516a49b19297b08'),
(974, '2013-07-03', 'Rafael', 'PÃ©rez', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'da59a1ad1f63c18d7ed622cdbb4fc4f5'),
(975, '2013-07-03', 'Cesar', 'Terrones', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '021cef6fec09f3981987fee8b0dca2f7'),
(976, '2013-07-03', 'Oscar', 'Mederos Mesa ', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '705d467596aff49df8831150f35e8b1c'),
(977, '2013-07-03', 'Antonio', 'Vega Perez ', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '44265a3cc6e7092d7a7501c9f8eccaac'),
(978, '2013-07-03', 'Juan', 'Alfonso', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e2d785a043bbd9db043dbb5b0ee612fb'),
(979, '2013-07-03', 'Carlos', 'Fraga ', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e2736c500fb04eff33d01986a0074368'),
(980, '2013-07-03', 'Pedro', 'GonzÃ¡lez Rivas', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '322d6880393ca3c1aea20627a4052e5c'),
(981, '2013-07-03', 'VÃ­ctor', 'Cosca DomÃ­nguez', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '3bda6c711cbd29bdb0e0d57dbaeab985'),
(982, '2013-07-03', 'Guillermo', 'LegaÃ±oa MartÃ­nez', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '72a9755c9c67c4a3245241d090f994fc'),
(983, '2013-07-03', 'TomÃ¡s M.', 'Zorrilla', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '393a01a603f30a17388773a096e9079b'),
(984, '2013-07-03', 'Alfredo', 'Jam MassÃ³', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a8ebdaa11f50f7ea629056788dd13ec4'),
(985, '2013-07-03', 'Abel', 'Ponce GonzÃ¡lez', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd4cc67eb26d206c1226471ea97277e18'),
(986, '2013-07-03', 'Alberto', 'RamÃ­rez MartÃ­nez', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6f7d6554bc759e9a470ad2db82d9a5b7'),
(987, '2013-07-03', 'Alejandro', 'Arreola Isla', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e1d78aa288b4526ebcf438b538ecca17'),
(988, '2013-07-03', 'Andres', 'Larios Eusebio', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a5a559741d7c44bca95c2068e2f6aad4'),
(989, '2013-07-03', 'Angel', 'Pineda', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2737537d731ca1b48d6c94cf23cb5bfb'),
(990, '2013-07-03', 'Anibal', 'QuiÃ±onez', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2ef02ea5a700a854cbfd94b9b7418308'),
(991, '2013-07-03', 'Enrique', 'Abarca', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'bfad4e2849818f745986eea0d1a155f2'),
(992, '2013-07-03', 'Antonio', 'Manzano', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'bee46abec0a905103915e06f794a58f1'),
(993, '2013-07-03', 'Alan', 'Delgado', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ed1867142450bce1dabe32aba86ced08'),
(994, '2013-07-03', 'Antonio', 'Astorga', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ef8d12c7b7148dd0e43ad5e8ef4a2d3c'),
(995, '2013-07-03', 'Emmanuel', 'Hinojoza', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '904b3ec57538e80c74d5f9617babfd0d'),
(996, '2013-07-03', 'Apolonio', 'Humada', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '52d64eb633a90c59857ede4ff6de3edf'),
(997, '2013-07-03', 'Arturo', 'GonzÃ¡lez GarcÃ­a', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'cb1ddec2f4549d7abaeaced8e1e7b97f'),
(998, '2013-07-03', 'Bernardo', 'Loza', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f855b0933b081ec94cefe46f2348f834'),
(999, '2013-07-03', 'Moreno', 'Orozco', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '86d70e406f830a37089e3dc7fe071b65'),
(1000, '2013-07-03', 'Carlos', 'Varela Ubal', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '7304eb210b477a5d68370e421004bc4c'),
(1001, '2013-07-03', 'Carlos', 'Renteria', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '0264239b456224c1ac418156dbb5beda'),
(1002, '2013-07-03', 'Alberto ', 'Rivera', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd7c0f2995aea34e68550f01033a1a7d7'),
(1003, '2013-07-03', 'Carlos', 'JÃ¡uregui', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1f6b3d63b98b50a57ef375b5d0f757bf'),
(1004, '2013-07-03', 'Armando', 'Peralta', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '87479a788eb8407861580f200586938a'),
(1005, '2013-07-03', 'Carlos', 'Gonzalez', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8ed4a6d1390e500bcfed23f9c7d1672b'),
(1006, '2013-07-03', 'Enrique', 'Llamas', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b9451523c721d812c6e0561818811b3f'),
(1007, '2013-07-03', 'Fredi', 'Estrada', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c84c357769c0a35fc42639692d74fb8f'),
(1008, '2013-07-03', 'Felipe', 'GutiÃ©rrez', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c225e9160d7858282cbbf042ae89307e'),
(1009, '2013-07-03', 'Cesar', 'Mora', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5ce49d9b568978c9404b98ba1f1f518e'),
(1010, '2013-07-03', 'Alejandro', 'Gutierrez', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '509cc2c7aeb9b98e5b3c0bb7cc2ffdac'),
(1011, '2013-07-03', 'CÃ©sar', 'Trujillo', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '409a3cc5afc4c9247bc2985fd1a44862'),
(1012, '2013-07-03', 'Aurelio', 'MagaÃ±a', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b8edf0e8400bb9269361962b28c1f18a'),
(1013, '2013-07-03', 'Christian', 'Hinojosa Ayala', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a53bd410402fb213c073afdff2280545'),
(1014, '2013-07-03', 'Pabel', 'MuÃ±oz LÃ³pez', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8e3a37d93e5da804f4df1744b7aa1cc8'),
(1015, '2013-07-03', 'Clemente ', 'Lomeli', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f12a591a455f566ada58f54110e09763'),
(1016, '2013-07-03', 'Constantino', 'Salinas', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '34a818c74d2d29a64821fc4f7520c830'),
(1017, '2013-07-03', 'Cristo', 'Arce', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ad12f6faa8d3a2ac294a096bc258b23c'),
(1018, '2013-07-03', 'Cristino', 'Ramirez', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e734cbf4e4ceaf7d3ddf59d85f608fe6'),
(1019, '2013-07-03', 'Orlando', 'Florez', 'Ecuador', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5086691bbe8dd5a18b33efb64df72f88'),
(1020, '2013-07-04', 'Cristopher', 'Anguiano', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '45cf38af7e98b881d853eebafad149d3'),
(1021, '2013-07-04', 'David', 'CÃ¡rdenas', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8fed4141b8a98ded5b7f9f809ca9af4a'),
(1022, '2013-07-04', 'Alonso', 'Ibarra', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ff54d0bd70f3878a1d3d6333d9424256'),
(1023, '2013-07-04', 'Diego', 'GonzÃ¡lez', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b55ca31f5bc0bb610c7b33f2a4c97756'),
(1024, '2013-07-04', 'Guillermo', 'Escobar', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8588a03850fd9859c2d8470772c2df3b'),
(1025, '2013-07-04', 'Edgar', 'Guerrero Centeno', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'cb67fa74dbf6280704de2f89e7b5b93a'),
(1026, '2013-07-04', 'Edgar', 'Aceves', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '9e0282f11a10725f09e41d47c69b6450'),
(1027, '2013-07-04', 'Hilario', 'PeÃ±a', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b264ee44bcd0c4c1dc3d4c2e3e322362'),
(1028, '2013-07-04', 'Eduerdo BOHORQUEZ', 'Bodorquez', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'cec04f6a5798b63c2dfbfc1f0833d622'),
(1029, '2013-07-04', 'Eduardo', 'Bodorquez', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f1d478559d09d0738f2efce058238f53'),
(1030, '2013-07-04', 'Emeterio', 'MuÃ±iz Estrada', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ceeaf2b39c9134eac17cc28d5c096d09'),
(1031, '2013-07-04', 'Eric', 'Flores', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'db5b3decd5ae597447a73bbeaabe8ae0'),
(1032, '2013-07-04', 'Ricardo', 'Gallo', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '36e0e77358d7a66fd0ce34b6db2f455b'),
(1033, '2013-07-04', 'Everardo', 'Contreras Lpez', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '7e7c7e77f1e32a9ab42f3d52d6e49496'),
(1034, '2013-07-04', 'Felipe', 'Casillas Dominguez', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'be3bd3f82c299e48a548a95ed6e2552d'),
(1035, '2013-07-04', 'Francisco', 'Sandoval', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a29431096f623357cfe67adeeff4ea40'),
(1036, '2013-07-04', 'Javier', 'HernÃ¡ndez', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '4fa83f1ba2c0d49110873ca5f86d5cfd'),
(1037, '2013-07-04', 'Javier', 'RamÃ­rez LÃ³pez', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '78baf3361369ac9231b3d0f5a2e7e8b6'),
(1038, '2013-07-04', 'Gabriel', 'Ibarra Felix', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '3767c97a5210bc2e95849cb3bfbe1fc5'),
(1039, '2013-07-04', 'FRANCISCO', 'GONZALEZ PACHECO', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2a019bb5f2bf76ff489015f33283eb6c'),
(1040, '2013-07-04', 'GERARDO', 'GODOY JIMÃ‰NEZ', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '583fc3640ad5dd44b2ee138de362f3e6'),
(1041, '2013-07-04', 'Gerson', 'LÃ³pez Rodas', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '33592c1aebfb12e31d2b4d9df0477ae9'),
(1042, '2013-07-04', 'Gilberto', 'HernÃ¡ndez Guerrero', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f8e4caa58b69a5c4dbbc9c1694a2f351'),
(1043, '2013-07-04', 'Guillermo', 'Perez CedeÃ±o', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '15726a1c8ee3a7aa39ba40d17cd74c5e'),
(1044, '2013-07-04', 'GUILLERMO', 'LARA VARGAS', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '629807c54341d8f2492c21f8ddec92ba'),
(1045, '2013-07-04', 'Guillermo', 'Ibarraran Zuno', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '080eccbc85f28f1567f9d89dcb6c5e80'),
(1046, '2013-07-04', 'Franco', 'MuÃ±oz', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd2286571428cea9238bd7ee02867c497'),
(1047, '2013-07-04', 'Gustavo', 'Lima CezÃ¡rio', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '84539f7b609330f012b301fcfe41f91e'),
(1048, '2013-07-04', 'Hamilton', 'Bernardes Junior', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'dcbf858ec149ff619851dd173cdcd53d'),
(1049, '2013-07-04', 'HECTOR', 'ORTIZ', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f1dd96df14e2e0cdd2b2ad38f161889a'),
(1050, '2013-07-04', 'HUGO', 'CERVANTES', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '51999e357764f797d0767dfe227b78de'),
(1051, '2013-07-04', 'Hector', 'Moreno', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b4df62e056cf8e60d870fb95456c8a79'),
(1052, '2013-07-04', 'Manuel', 'Murguia', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ab5047b9b9a196e5b0a61a59311b952c'),
(1053, '2013-07-04', 'HORACIO', 'PÃ‰REZ PONCE', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '0e89b6985e3546a41c27d8af7a30521a'),
(1054, '2013-07-04', 'HUMBERTO', 'MORONES HERNANDEZ', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '3eeddcb994d4c0e05beca70fcfc8d012'),
(1055, '2013-07-04', 'Irvin', 'Arellano', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c0f0fb02c850189c884539867a73ecd0'),
(1056, '2013-07-04', 'Gerardo', 'RamÃ­rez', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '7d204acd262bdbc670389f5eb91c0e11'),
(1057, '2013-07-04', 'Monroy', 'RamÃ­rez', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'da61855403168c7e2588f28e808dd4c4'),
(1058, '2013-07-04', 'Ismael', 'UrzÃºa Camelo', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'aeb48373abe872f179da8bb8819f7eeb'),
(1059, '2013-07-04', 'ISMAEL', 'LEMUS', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e9fc94b519f7b0740b6e892e9afd89d8'),
(1060, '2013-07-04', 'MANUEL', 'LOPEZ', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '522c8d19fef925440c72d65347de8990'),
(1061, '2013-07-04', 'J. ', 'ARTEAGA RODRIGUEZ', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ead69237d6f412c0075e48132f94d536'),
(1062, '2013-07-04', 'J. Jesus', 'Torres Cruz', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '9604978e8cb587add3e461697f2ed155'),
(1063, '2013-07-04', 'Jacinto', 'RodrÃ­guez MacÃ­as', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '4f132023f987227837104325d712ab4e'),
(1064, '2013-07-04', 'JAIME', 'MORENO SANDOVAL', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd054041641a9dc3eed33748bf56b7c48'),
(1065, '2013-07-04', 'Jairo', 'da Silva', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '3119c3e445d1de112a065cf345bb3a35'),
(1066, '2013-07-04', 'Javier', 'Guevara', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e128e068dd1e58158060810ad675046d'),
(1067, '2013-07-04', 'Antonio', 'LadrÃ³n', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '98401b3df44596db7fa1096bc8d9e814'),
(1068, '2013-07-04', 'Lorenso', 'Herrera', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '552aa9b6c5ed0f059fd5b7271c4c0a94'),
(1069, '2013-07-04', 'JAVIER', 'HURTADO', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '46ff445aef314c3ee716c05fe1e05b82'),
(1070, '2013-07-04', 'JESUS', 'TORRES', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '27a5e5f45c47ffda02b2b62c04d32a3d'),
(1071, '2013-07-04', 'JOSE', 'PEREZ', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ce999cd02f0ea3c7de936dc60086593e'),
(1072, '2013-07-04', 'Mario', 'Esquivel', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '00e44e873ad9e45aa19550c3632882ed'),
(1073, '2013-07-04', 'JESUS', 'SALAS LIZAUR', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5ee1bb1139a714a197433c7fe44ade75'),
(1074, '2013-07-04', 'JESUS', 'LOREDO', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5e4e14eaffb0bc5662d1a147a026b3ad'),
(1075, '2013-07-04', 'ANGEL', 'GOVEA', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '665ac5e6fe88876640660c877eded5b4'),
(1076, '2013-07-04', 'ELIHU', 'SANCHEZ CARREÃ‘O', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2795655a24e3244b35d7a3ca36f4420d'),
(1077, '2013-07-04', 'Fernando', 'Ortiz Zepeda', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b8a40a1a74fca29c77f6b401db4612ad'),
(1078, '2013-07-04', 'JHONNY', 'HERNANDEZ', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '99cfeef9c961508f62f9dc8339218ed5'),
(1079, '2013-07-04', 'CESAR', 'VARGAS', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ca8a2fb8f158ae3f9cbb2446a6956bdc'),
(1080, '2013-07-04', 'JONAS', 'DONIZETTE', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2add4d415009c9a1c1c14ea728802006'),
(1081, '2013-07-04', 'Jorge', 'Gutierrez Reynaga', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e7e8df0b087d3f982f3b1028d2d4160a'),
(1082, '2013-07-04', 'Jorge', 'PÃ©rez Rubio', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'eed3c7138a569399aba3ff7e4eca008f'),
(1083, '2013-07-04', 'JORGE', 'ABUNDIS', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '16bc585285ac3664dd4bb66375ec0ad6'),
(1084, '2013-07-04', 'ALBERTO', 'VAZQUEZ', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a3b52d777237cf5dda512eab16323ddc'),
(1085, '2013-07-04', 'JORGE', 'LEDON', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'af13948c749d32a3f2815a6d179cd5df'),
(1086, '2013-07-04', 'ELIAS', 'HERNANDEZ', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1870e26f077dc09d7c4a1c915553b27c'),
(1087, '2013-07-04', 'Jorge', 'vasquez', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ebe9386d444217d48b4265bcbe430012'),
(1088, '2013-07-04', 'Fernando', 'MARTINEZ', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '828b20e4909cc89a11fd44b24043bee0'),
(1089, '2013-07-04', 'Gregorio', 'Casillas GarcÃ­a', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '760c22a9534ab9e8959ac0a44dd2bf08'),
(1090, '2013-07-04', 'LUIS', 'CUEVAS MIGUEL', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a13838ca11a8fa0d918e66e373b478b4'),
(1091, '2013-07-04', 'Luis', 'Perez Trejo', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '4f36b1cc801b4eaa9e706090c58e65d0'),
(1092, '2013-07-04', 'JULIO', 'SALDIVAR', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ff9cfbf919b3f534bc8b17d1acf31c54'),
(1093, '2013-07-04', 'CEBASTIAN', 'PLASCENCIA', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ee9d528263d8c34203b0f30cf6aeb7b4'),
(1094, '2013-07-04', 'OCTAVIO', 'MARTINEZ REYNOSO', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'fb44b475a4579c00cc086e6535fd3054'),
(1095, '2013-07-04', 'Jose', 'Cortes', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f087c4106a1273c293acb703ec05b04f'),
(1096, '2013-07-04', 'carlos', 'jurado', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f9f845e585041f0a5a1b20c5b51a2eaf'),
(1097, '2013-07-04', 'ALBERTO', 'BRAVO SALDIVAR', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e81760bde96247ba117be82efab6df50'),
(1098, '2013-07-04', 'Alejandro', 'Mata Estrada', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f7625c0617782ef28cdc66e9c2215e30'),
(1099, '2013-07-04', 'daniel', 'ochoa casillas', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '808b827a7a7931f3581e0e6e53e85e2e'),
(1100, '2013-07-04', 'Elio', 'salazar', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6770b49004ccbc935a7c2d262e058b98'),
(1101, '2013-07-04', 'EDUARDO', 'MEJÃŒA SOTO', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '939c92245a36c064292e4a1c204aa653'),
(1102, '2013-07-04', 'FELIX', 'AHUMADA GONZALEZ', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '4f601f28a7aac731b6e804d2d8fa5dd1'),
(1103, '2013-07-04', 'GILBERTO', 'CORTES', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '563dd590ef809d1e9bed04556cb2ee8a'),
(1104, '2013-07-04', 'Guadalupe', 'LÃ³pez Almejo', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6a80cba89b07945f9ad2c05850e3cfdb'),
(1105, '2013-07-04', 'Guadalupe', 'Rocha Esparza', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b7c23da27149d7ba13dc06e46d25a1d4'),
(1106, '2013-07-04', 'Humberto', 'RamÃ­rez Flores', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2d555513f9553cc51e9a8cff1cc86f79'),
(1107, '2013-07-04', 'LUIS', 'IÃ‘IGUEZ GÃMEZ', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1ea57063b6aae16edfb2067de819be87'),
(1108, '2013-07-04', 'AarÃ³n', 'Luna', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '92ae0e95953e97707f091ecac4a2b1d6'),
(1109, '2013-07-04', 'Abel', 'Arellano', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a529663c879812a9ea15d8432623497a'),
(1110, '2013-07-04', 'Abelardo', 'Flores', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '53f0cfdfff0149bd8908cba7253e9c79'),
(1111, '2013-07-04', 'Abraham', 'Curiel', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '9ba916e95809ebb0a085d7a2c88218e2'),
(1112, '2013-07-04', 'AdÃ¡n', 'sotelo ', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '39ac054958a74b044f9ff781b6b7e9d2'),
(1113, '2013-07-04', 'Adolfo', 'islas', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b313cecfc88d8d872ea8135f2bcbf55d'),
(1114, '2013-07-04', 'AdriÃ¡n', 'Ventura', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '32107cae382849703585cc7d823a2449'),
(1115, '2013-07-04', 'Adriano', 'Lomeli', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '7c750dc895d0e18fe7b6ec4a8ceaff2b'),
(1116, '2013-07-04', 'AgustÃ­n', 'Rodriguez', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6876ccd6b5a2b45e2ddeb9a590ac8576'),
(1117, '2013-07-04', 'Josue', 'vÃ¡zquez', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c1064c17d58a94fa5581bc6e37d73341'),
(1118, '2013-07-04', 'Alan', 'cabello', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '347a1a6eb7598a9f20fc8e4cd7bfde29'),
(1119, '2013-07-04', 'Aurelio', 'campos', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e7246fdd4a4625ff9edac952780fea41'),
(1120, '2013-07-04', 'arnoldo', 'herrera', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e2b7dd6466db9aad23755ca19d869921'),
(1121, '2013-07-04', 'aristides', 'LeÃ²n', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'eeaa63227f6d89a45328b8f059bf7f22'),
(1122, '2013-07-04', 'Ariel', 'Rodas', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '49d78db848f81a6fbf99702aca363bbf'),
(1123, '2013-07-04', 'AnÃ­bal', 'Narvaez', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b5f34879eec30a279cb6d5fb453d81aa'),
(1124, '2013-07-04', 'WILSON', 'LOPEZ ALVARADO', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '951e9dbd76446825aa2721d952767ed2'),
(1125, '2013-07-04', 'DIEGO', 'RAMOS URIARTE', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2fe6cf3ba4e4fc444936e9d7192389b7'),
(1126, '2013-07-04', 'MARTIN', 'ACEVES DELGADO', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '9a38d6e172944fb331444b5e64552338'),
(1127, '2013-07-04', 'IGNACIO', 'HERMOSILLO COVARRUBIAS', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ae5a371181ce12aa166b062efb682ace'),
(1128, '2013-07-04', 'Benito', 'Rodriguez Soria', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '59a351b0b312539f3a02ed6a4b551fe4'),
(1129, '2013-07-04', 'CAMILO', 'NAVARRO PATIÃ‘O', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'dbcce9e87713f7163edc6d4da929547d'),
(1130, '2013-07-04', 'CECILIO', 'GUTIERREZ CONTRERAS', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '91c18a6217b2ffd4110c475cb444228d'),
(1131, '2013-07-04', 'RamÃ³n', 'TÃ©llez NuÃ±o', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e221f3d5a565dfff31a314aaf6809854'),
(1132, '2013-07-04', 'JuliÃ¡n', 'Najles', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '560ab84bb3d0e6c7710d5135a35b0798'),
(1133, '2013-07-04', 'Julio', 'Plascencia', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'bea539af38bf49f7533116a47b8401f3'),
(1134, '2013-07-04', 'Cesar', 'Ornelas', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a17d452aa962e3182d8eff0c3d439ec6'),
(1135, '2013-07-04', 'Cesar', 'Delgadillo', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c2c0c4aa5540c6c2d30aab5fb23ba2df'),
(1136, '2013-07-04', 'CIPRIANO', 'ARGUEDAS', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ed4090759e2d45cabe3eeff8aa0eb51a'),
(1137, '2013-07-04', 'CLAUDIO', 'PORRAS', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2ca9c940acd2110938c91cbe8f15b6ac'),
(1138, '2013-07-04', 'FABIO', 'MONTES', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '77328f4c781705b119921572d5d1843a'),
(1139, '2013-07-04', 'CIPRIANO', 'MENDOZA', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '591397ce083aee36a4a530efebf2cf96'),
(1140, '2013-07-04', 'ALBERTO', 'NUÃ‘EZ ZAMORA', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b8e2139a6dff27e601ec0c7e5f0b2b70'),
(1141, '2013-07-04', 'eduardo', 'de la mora', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f42c7ee83dd03bde995832ceff4920a6'),
(1142, '2013-07-04', 'Gerardo', 'Sandoval FernÃ¡ndez', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '49cffb364a93ba72f50525ccb1b4d09a'),
(1143, '2013-07-04', 'CRISTIANO', 'VILLANUEVA', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '9f85cd7d387be9ba387e680ff24ca245'),
(1144, '2013-07-04', 'ALEJANDRO', 'VERDUZCO', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '3131760eb697d92863c6c90ddfe72051'),
(1145, '2013-07-04', 'STIVEN', 'GARCÃA', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '138f17489cc2138ee418f8330ec2efd9'),
(1146, '2013-07-04', 'Daniel', 'Hinojos Madrigal', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f3edf25c86aa7f5b8510a5d20f963b33'),
(1147, '2013-07-04', 'Dante', 'PÃ©rez Santana', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '9d63825f79349bf024df7812c2f04739'),
(1148, '2013-07-04', 'MARCO', 'GUZMAN', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '836fc0ac53a954bf762a0db76c6d410d'),
(1149, '2013-07-04', 'AURELIO', 'CORREZ', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '33ab7a9eb28249d2da634bcb17efb952'),
(1150, '2013-07-04', 'MARTIBNIANO', 'MERCADO TOVAR', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '4c30ab64199b96752681fb04a5cd37e6'),
(1151, '2013-07-04', 'DamiÃ¡n', 'VigÃ³n', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ef1e04672fe51a89153244f72f3f475f'),
(1152, '2013-07-04', 'Daniel', 'PorrÃºa', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ccce8642e4f511f634746be4f843233c'),
(1153, '2013-07-04', 'Dante', 'Benitez', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd554625388e73b45f2dd0d60bbad8f59');
INSERT INTO `venta` (`id`, `fecha`, `nombre`, `apellido`, `pais`, `mail`, `telefono`, `fpago`, `total`, `descripcion`, `confirmacion`, `pass`) VALUES
(1154, '2013-07-04', 'Dario', 'Mendoza', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '716dca8e5f1b8ad04047d802d81a7a27'),
(1155, '2013-07-04', 'David', 'Campo', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ecb1f02f614492542ea0b5d6f7cc9f9f'),
(1156, '2013-07-04', 'Diego', 'Martin', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1cda4c189c7d3ebaf4c5f5ecc965d2f4'),
(1157, '2013-07-04', 'Domingo', 'Benitez', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '87583f7b3d4d262eee0a5f6b3bcde988'),
(1158, '2013-07-04', 'Donato', 'Mendoza', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '7023105fbc88497aea1dd63cd0de5700'),
(1159, '2013-07-04', 'Edgar', 'Mora', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6a180da006af11eab1faa0ed259554ff'),
(1160, '2013-07-04', 'Edgardo', 'Freyre', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f57db9c216d35b7eabdfbd16762a0edb'),
(1161, '2013-07-04', 'Eduardo', 'Rivas', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a46cf0f9f6953958d3be16b85c9ead3c'),
(1162, '2013-07-04', 'Edwin', 'MuÃ±oz', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c73c8dbc6bd8b80e1487d2ee816f27c3'),
(1163, '2013-07-04', 'EfraÃ­n', 'Gomez', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd57ad151953f5c07a0c643a1d05be5d4'),
(1164, '2013-07-04', 'Elian', 'Reyes', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5d45667a5db5a4859d2b2be2c1a18e1f'),
(1165, '2013-07-05', 'FABIAN', 'BUENROSTRO', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '0f5b1d040f34c74421e32bd1e5d908a5'),
(1166, '2013-07-05', 'Eloy', 'VigÃ³n', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '3bf0c8148c91a690676c1838a3120902'),
(1167, '2013-07-05', 'Emanuel', 'PorrÃºa', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f6f81611b4071604d26f625e6c898714'),
(1168, '2013-07-05', 'Emiliano', 'Benitez', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '14de084696611676447599aad304b41c'),
(1169, '2013-07-05', 'Emilio', 'Mendoza', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '7f98867757882299b75fb1ff240c5fe3'),
(1170, '2013-07-05', 'Enrique', 'ramirez', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e7f20b7c660316ef1180be429b140dcd'),
(1171, '2013-07-05', 'Eric', 'bernal', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '35285a20e2d5232bc1fc3b36128529d5'),
(1172, '2013-07-05', 'Ernesto', 'VÃ¡zquez', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '269ea4f602b2cc3c7ccb5058cdeb0e8c'),
(1173, '2013-07-05', 'Esteban', 'Haro', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5fcfd38b1b4e141d064c6fd3cde59dcb'),
(1174, '2013-07-05', 'ESTEFANO', 'LOPEZ', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b6057ac131d628f500b27b84cba477ef'),
(1175, '2013-07-05', 'EUGENIO', 'OCHOA', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6a7d36f34acdc98351127309e0db5412'),
(1176, '2013-07-05', 'EVARISTO', 'RODRÃGUEZ', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a06c5c3836c21698f3d806dcf7d2e8cc'),
(1177, '2013-07-05', 'EZEQUIEL', 'TOSCANO', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1dd4a6e32f305b222def9332aca380a5'),
(1178, '2013-07-05', 'Oscar', 'Cerrillo Cruz', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2f18ee85d08edddb9fdd25e50b3a8a22'),
(1179, '2013-07-05', 'Fabian', 'Michel Esparza', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd8412370b7a951471040b9dc8f6dc8a7'),
(1180, '2013-07-05', 'Fabiano', 'Gasca Brito', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd0aef67e1660e755f0114356d58697d6'),
(1181, '2013-07-05', 'Fabricio', 'RamÃ­rez LomelÃ­', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1c5760cdf70411c9b3d32cbca4bef373'),
(1182, '2013-07-05', 'Facundo', 'Hurtado Vergara', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'cadafdf799733a84c73c5e36007e6177'),
(1183, '2013-07-05', 'Otoniel', 'Varas', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '34de6aa019a188460d18f2d95b213ef3'),
(1184, '2013-07-05', 'Pablo', 'Guzman Torres', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6670234ca823147525c2d8edbbb5870c'),
(1185, '2013-07-05', 'FAUSTO', 'SAENZ CORE', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '79229db94c965bfb2640cab8ca95fd1a'),
(1186, '2013-07-05', 'Federico', 'Salinas Osornio', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c8c3b472d9159f084542ea9477191827'),
(1187, '2013-07-05', 'Feliciano', 'Morelo', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'baccd8ef3be7ab4b31dcd398a68e5b75'),
(1188, '2013-07-05', 'Roberto', 'Ziulkoski', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'fbc545765d3136c08cb84af71afc5eb9'),
(1189, '2013-07-05', 'FELIPE', 'SÃNCHEZ', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6a07625c62fd363227e5980a5e6824cd'),
(1190, '2013-07-05', 'FELIX', 'OROZCO', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6f339345b8969ba28fe40e2cd56dc47b'),
(1191, '2013-07-05', 'FERMIN', 'SANTAMARIA', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b953cbc94c9ebcaea13481f7e4adb104'),
(1192, '2013-07-05', 'FIDEL', 'CONESA', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2a5f46cf25c057d5e910138afe94e44e'),
(1193, '2013-07-05', 'RamÃ³n', 'CamaÃ±o Vargas', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6e1cf89347d9d05a4e90a1c11e3d53bb'),
(1194, '2013-07-05', 'Francisco', 'Nava', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b2181dd6d5d0a0ff9ca1f43cfb4887e0'),
(1195, '2013-07-05', 'Franco', 'AlcalÃ¡', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e34ce0961e457ab68c778775375bd687'),
(1196, '2013-07-05', 'Gustavo', 'Hettich', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8116b8e0b3b2db6f25f8741f5808ed03'),
(1197, '2013-07-05', 'Gabino', 'Mardones', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6e27d8bf69fb8b0ab0346c733ec006ad'),
(1198, '2013-07-05', 'RIGOBERTO', 'SILVA ROBLES', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '33845064fedbf6011b1bbd7865c456de'),
(1199, '2013-07-05', 'GASTON', 'PIÃ‘A', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '469b2b093321654c3723a103b899bb64'),
(1200, '2013-07-05', 'Gerardo', 'Silva', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e495e409922dcfe639a86b17323cd92d'),
(1201, '2013-07-05', 'GermÃ¡n', 'Gutierrez', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '0e9d8882993c657e573f4a05a71acf81'),
(1202, '2013-07-05', 'Gilberto', 'RÃ­os GonzÃ¡lez', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a0e78ee74ad7f32fe6a8a4f19ccb6d72'),
(1203, '2013-07-05', 'Giovanni', 'RodrÃ­guez', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e690ed3a8d237047e607af03cc6ed67b'),
(1204, '2013-07-05', 'Gonzalo', 'Brenes', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2c440fb774f4e91bd04ff2404b6dab3e'),
(1205, '2013-07-05', 'Rolando', 'Simental', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '60ce585a5515656d5a1e7e827e8072f0'),
(1206, '2013-07-05', 'HÃ©ctor', 'Almaguer', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '653e2ba480bfb06b5ddcc42f490e232e'),
(1207, '2013-07-05', 'HernÃ¡n', 'Recinos', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a02062e4ae2abf96681f63f5711a0aa2'),
(1208, '2013-07-05', 'Hernando', 'Rubelio', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '347df047db237db0daacfec01e06ea22'),
(1209, '2013-07-05', 'Rufo', 'Sandoval', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c401d4eb632ed74946b510bfad8bd39e'),
(1210, '2013-07-05', 'Higinio', 'DoÃ±an', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a0ebee0273c8ba02b26935dd482d3454'),
(1211, '2013-07-05', 'Homero', 'MejÃ­a', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '7524556512d2607ab5cafba6ed6ee6ef'),
(1212, '2013-07-05', 'Honorio', 'Padilla', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '894acb4267e44c23f2b427200e4092ca'),
(1213, '2013-07-05', 'HORACIO', 'CASTAÃ‘EDA', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '67dd1584707d4b0b3746d6d0a2563138'),
(1214, '2013-07-05', 'HUGO', 'CUEVAS', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1b8d69e4d56a27ec13a30fa287cff503'),
(1215, '2013-07-05', 'HUMBERTO', 'SUAREZ', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b7616b6eeac4033d8cd3f961e898e93b'),
(1216, '2013-07-05', 'IGNACIO', 'GREEN', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd92ef2f57af94cc8ee62dea1c416ca98'),
(1217, '2013-07-05', 'Ignacio', 'Corea', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1e1d20a7f930c66771a450a784da13ce'),
(1218, '2013-07-05', 'Isaias', 'Recinos', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '3f5bef2c18b1a5a0b2ebe35d889a8066'),
(1219, '2013-07-05', 'Rufo', 'DoÃ±an', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '3d19af196abdf0c0074f44798ce3f903'),
(1220, '2013-07-05', 'Saul', 'Gonzalez Ramirez', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b30358919779986d3883d955bcabce65'),
(1221, '2013-07-05', 'Ivan', 'Legorreta', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '9259525fc90cf5a0704f5e6ace4e954b'),
(1222, '2013-07-05', 'sinohe', 'padilla', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6aeb51c5f7d38606e8b63e30220ff4d2'),
(1223, '2013-07-05', 'fernando', 'pelayo', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '7e3c7db46f2721b8cac126f50bfd2d71'),
(1224, '2013-07-05', 'VICTOR', 'CARRILLO MUÃ‘OZ', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '35d73900e160ee6bdebac43eedf58b40'),
(1225, '2013-07-05', 'Jacinto', 'Galvan', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'bf2d18639f47b6b780bc0f9a989dfeda'),
(1226, '2013-07-05', 'Jacobo', 'Peralta', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd843bfc49a1ef0666c014bc4c420cd9e'),
(1227, '2013-07-05', 'Jael', 'Medina', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '33db6212224eb83eaa40085e0e2d0f88'),
(1228, '2013-07-05', 'Jairo', 'Silva', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '16e2068fbd78b938cf8e05541eaf5777'),
(1229, '2013-07-05', 'Alfonso', 'Florencio', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd221dee6101618bcb039806a9885a9e8'),
(1230, '2013-07-05', 'Gabriel Oscar', 'Ambrosini', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ca617a625256d0d35785b476cdc82402'),
(1231, '2013-07-05', 'Francisco', 'Amico', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'bb953138615e20a8332fa13453879c58'),
(1232, '2013-07-05', 'Guillermo Aldo', 'Andrade ', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a1338160a7d8557858d30f6c702e219a'),
(1233, '2013-07-05', 'Deraldo Guillermo', 'Andriuolo', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '4cfc7d0cf573e4aa49911818416eea74'),
(1234, '2013-07-05', 'Rafael', 'Anello', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '3860acaa64abfbca99f14104fcaa0234'),
(1235, '2013-07-05', 'Francisco', 'Ansaldo', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '38f33a1188bf8f25fc5e8f66ca2967da'),
(1236, '2013-07-05', 'Marcelo Alfredo', 'Apestey', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b831ffbd11599afbcc04fdad9909404f'),
(1237, '2013-07-05', 'Hector Antonio', 'Aranda', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '4eda0f4241bb91f852733692a993c96d'),
(1238, '2013-07-05', 'Miguel Angel', 'Arcuci', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ade98008a857f188e265d05010952ab3'),
(1239, '2013-07-05', 'Eduardo', 'Argiro', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '954d01601a75e2ed361827fa63142d16'),
(1240, '2013-07-05', 'Emilio', 'Arrigorria', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd78011609f3a0c54e3a3c54ae22deab2'),
(1241, '2013-07-05', 'Fabian Andres', 'Avalos', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'fc91572b27c5fb4299ec34f434c51117'),
(1242, '2013-07-05', 'Juan Ernesto', 'Bach', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '9f8055b293d7da60fdb8a5de1e017040'),
(1243, '2013-07-05', 'Agustin Franco', 'Bailetti', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ed50d3b2693372c29a2e1059c80e3b68'),
(1244, '2013-07-05', 'Alejandro', 'Barraza', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e0039a20e5979b63f8a34235e5f578cf'),
(1245, '2013-07-05', 'Javier', 'Barrera', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '56939f93524ebc0712af1b04b9144d92'),
(1246, '2013-07-05', 'Pablo', 'Barrios', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '999bbf33afba59e3ab34639c5f086491'),
(1247, '2013-07-05', 'Norberto', 'Bartolome', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '4df44c5d9461d279387003793b8c3134'),
(1248, '2013-07-05', 'Guillermo Osmar', 'Basualdo', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e024a1b6f5310dbbefdb2e4780481270'),
(1249, '2013-07-05', 'Matthias', 'Bauer', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '37b640dc3a19af88ee8f60bbb7d8966b'),
(1250, '2013-07-05', 'Oscar Fabian', 'Baz', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b9032781334b1e91de1e2ae3361b0921'),
(1251, '2013-07-05', 'Julio', 'Bertomeu', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f158d7da805863335fc0a50b4e2c1a8d'),
(1252, '2013-07-05', 'Jorge', 'Bertora', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b1b1ec60fbe96b59d0a9dc84f7a3c15f'),
(1253, '2013-07-05', 'Jenaro', 'Biffarella', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '4ea595526de6b743019650c5ceb32dca'),
(1254, '2013-07-05', 'Jeremias', 'Bisquert', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6344cb44a3e1d9e89566710bceccc2aa'),
(1255, '2013-07-05', 'Sergio Ariel', 'Bogarin', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '0b419662961727a6b91e90fec54141d1'),
(1256, '2013-07-05', 'Osvaldo', 'Borrone', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '81291a8caa4a54a1742897262c0e2118'),
(1257, '2013-07-05', 'Joaquin', 'Borruto', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd3fd525c85d7016a0d8f6b45417ae8be'),
(1258, '2013-07-05', 'Luis', 'Boschian', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '67de3fbccc599de3284bc5fbcb7b7860'),
(1259, '2013-07-05', 'Diego Damian', 'Boueke', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '496a47ce1b8319ce9d7075d16af70a08'),
(1260, '2013-07-05', 'Anibal', 'Brescia', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '091fc8a59667e1d65207e9316a4ec55f'),
(1261, '2013-07-05', 'Santiago', 'Brescia', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '62569671d72e30e6bcacbff9dd849de0'),
(1262, '2013-07-05', 'Josemaria', 'Bressano', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '22fd16db1b70e0f366c487fdfa11f47e'),
(1263, '2013-07-05', 'Hector Daniel', 'Brizuela', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '78310af96d32d2aaebe5a4ce1a1b2504'),
(1264, '2013-07-05', 'Guillermo', 'Caballero', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6787e241d30f8e9f073280ef00377af0'),
(1265, '2013-07-05', 'Ulises L.', 'Ulises L.', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd0a8e4fb3126f94349bb07fdbc745844'),
(1266, '2013-07-05', 'Haroldo', 'Cabrera', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'deafc0c2382d51e5e4083d6303f404b3'),
(1267, '2013-07-05', 'justino', 'cacheda', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'aa3b8b1dba6b709a14298efde9efbebc'),
(1268, '2013-07-05', 'zamora luiano', 'calderon', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b67f44c8d76fee925ad55d09e9afce5e'),
(1269, '2013-07-05', 'justo', 'campos', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'bd2ecfa1de66127c539dd109232478ad'),
(1270, '2013-07-05', 'semino', 'canessa', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '36b60fb16caf89736bf9ff01c468af7c'),
(1271, '2013-07-05', 'lauro', 'cantero', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b3dac45ee470adb60cafe93ed31f681a'),
(1272, '2013-07-05', 'Jose', 'Maximiliano', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '0f237228dcdfec7fe5dc8946916704b6'),
(1273, '2013-07-05', 'juan B.', 'cardonato', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2a6cd5ed19cc1c70488a88263f8163cd'),
(1274, '2013-07-05', 'leandro', 'carra', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '28edba4b22e345972015434e3fba2ca3'),
(1275, '2013-07-05', 'leopoldo', 'castro', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e98a07897866a93b2f6a1521e16e2648'),
(1276, '2013-07-05', 'leonel', 'Cavalieri', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '60c171c62986484d89b6a185b05560ab'),
(1277, '2013-07-05', 'leon', 'benjamin', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '40291d61984aeab2c76ac2b97f787cbb'),
(1278, '2013-07-05', 'lucas', 'chavez ', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6e6a54040dc4fc201efb6e9237c4a28e'),
(1279, '2013-07-05', 'lorenzo', 'chung', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5e472542732b5d44e3018c56ef528a6e'),
(1280, '2013-07-05', 'leonidas', 'seung', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f3da499064dad6c00d70e80b55e18d75'),
(1281, '2013-07-05', 'Ceferino', 'Cingolani', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c5c5ea435c7233e0f3b22e9f4cdb403d'),
(1282, '2013-07-05', 'Rodolfo Ismael', 'Civitarese', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b283d5e7a202f2a776ab1303cb2956be'),
(1283, '2013-07-05', 'lucio', 'coceres', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6314f7fab6c3d438017fe9a852a4aa2d'),
(1284, '2013-07-05', 'manolo', 'coceres', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1fd39a282a42eeaa7cd796728d0f3c86'),
(1285, '2013-07-05', 'mario', 'coltellini', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5e8f7092076473f94dcb1119cea930aa'),
(1286, '2013-07-05', 'german', 'coniglio', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ee13a7682720eac13ad3c69c33b91783'),
(1287, '2013-07-05', 'manrique', 'cordoba', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a03c578d5bfce5ddbc8d0a9a55a5e61d'),
(1288, '2013-07-05', 'marcelo', 'coscia', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '19e6e9ad6589a28c434c9f430bbac4c0'),
(1289, '2013-07-05', 'marco', 'crovetto', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '9582a68a0f3a19e2a644801522a9ab42'),
(1290, '2013-07-05', 'marcial', 'cruz', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '9cbda0bc0146a3973103205d238bb9e2'),
(1291, '2013-07-05', 'ivan', 'damm', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '39f5eabbae42ac85410042809a697730'),
(1292, '2013-07-05', 'mariano', 'vicenzo', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '555260345e3e5c49a22e1953343b4066'),
(1293, '2013-07-05', 'martino', 'zuÃ±iga', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '9801c8a9409ef024e7cc02f8b363e261'),
(1294, '2013-07-05', 'roque', 'dequelli', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '9553072fe5ae3754441d5108963233a7'),
(1295, '2013-07-05', 'christobal', 'dickinson', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '62a53bdecd62651180db3ea34f2c44fc'),
(1296, '2013-07-05', 'Maximo', 'Diez PeÃ±a', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '58ef67ec281719dfb29e28241dfb43fb'),
(1297, '2013-07-05', 'juan vicente', 'donkin', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '24251bdcd06ec83fdc65f3d3e3d21371'),
(1298, '2013-07-05', 'Modesto', 'Esmoris', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5cd6e93446e30e564c3b2be1be3f1a63'),
(1299, '2013-07-05', 'Mariano', 'Fabeiro', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '53c25733076f2cd1a14396ebdcfce19f'),
(1300, '2013-07-05', 'Antonio', 'Fazio Carreras', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '58b47664234c1b48d8dba01cc3800ce2'),
(1301, '2013-07-05', 'claudio', 'fernandez', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '89fdde90b315bdc0fa39a236a85ed6fc'),
(1302, '2013-07-05', 'Moises Diego', 'Ferrari', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '026616cd48c61460ef47519323518220'),
(1303, '2013-07-05', 'Alberto O.', 'Ferrin', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '7d3d617d43736e4e85fc2237a5403a17'),
(1304, '2013-07-05', 'Mauro Sancet', 'Fondevila ', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'de7c696c6f66069424ae33fa0e308138'),
(1305, '2013-07-05', 'Anselmo', 'Fraticelli', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f7a9005fb72ef27a29cd6a6540530772'),
(1306, '2013-07-05', 'Mateo', 'Frend', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '239fe9456b3b1788325ffe583c17ee90'),
(1307, '2013-07-05', 'Narciso', 'Fuentes', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '9916dc5cdb11824ff8d1579769c652b8'),
(1308, '2013-07-05', 'Nelson', 'Fuertes', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '68ce167264d9917429a7ca8944c1c6bd'),
(1309, '2013-07-05', 'Noel', 'Gamarra', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '513a397cf7603a16bb4ba236ff04408a'),
(1310, '2013-07-05', 'Nicolas', 'Garmendia ', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'fcf4ff4b905cba6d25bc09fb5e0edef1'),
(1311, '2013-07-05', 'Nestor', 'Garro', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b7864640c44c231c4d882715d10e9ee3'),
(1312, '2013-07-05', 'mariano', 'gattas', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '086d184dd474e82b759f1c03dfec59c1'),
(1313, '2013-07-05', 'cesar bartolome', 'gauto', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b8554012feb7c30ae3716071fb3b42ac'),
(1314, '2013-07-05', 'octavio', 'giannone', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '48e98f7d6e8ec3f99c560795c591bf2d'),
(1315, '2013-07-05', 'Enzo', 'Gioffre', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ac0d2222e8d2ac389e8cb35c4a494b23'),
(1316, '2013-07-05', 'Paolo', 'Gioffre', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f5ccf5d1ab83b80279ffe9c288d2faec'),
(1317, '2013-07-05', 'Ruben', 'Gioverrano', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b087d30a935f6a8da1e50dd1cfa05c2b'),
(1318, '2013-07-05', 'Ariel Oliverio', 'Gomez', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e21e0d185e12aaaef4416916637899b4'),
(1319, '2013-07-05', 'orlando plablo', 'gonzalez', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '25819f489fe7504a28e8abde7b47fb0d'),
(1320, '2013-07-05', 'atelo paulo', 'gorostiza', 'Dominica', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '213f2760274e903eab1b0adc9b01579c'),
(1321, '2013-07-09', 'Emiliano', 'Zapata', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'bcd752ad87113deef5eacb597eeef86d'),
(1322, '2013-07-09', 'Francisco', 'Gonzalez ', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a78aff14de6db42ca657d1976c396b96'),
(1323, '2013-07-09', 'Ricardo', 'GÃ³mez', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '530192d1434c3dc63f36215387d45308'),
(1324, '2013-07-09', 'Lorenzo', 'Zambrano', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '7a1cde8417f6364914b3c2cd07f95f0c'),
(1325, '2013-07-09', 'Mario', 'FernÃ¡ndez', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '9fc7170dc1d506df039d25d17e08d4c3'),
(1326, '2013-07-09', 'ANTONIO', 'BALLEN', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '05f3be3c473cbfa89fc204d49c28babf'),
(1327, '2013-07-09', 'MONTES', 'RAFAELA', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '249594152c9f930d6ca7614d0e9c3ece'),
(1328, '2013-07-09', 'CAMILO', 'RONDON', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '9ec08d07cec1760d191411ad55e66ab2'),
(1329, '2013-07-09', 'LUIS A.', 'QUERO R.', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '3d0c981bd29b1c2f66f89d05f113c208'),
(1330, '2013-07-09', 'JUAN BAUTISTA', 'VASQUEZ', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '0ff2bd556ca84271032f58e572e320f5'),
(1331, '2013-07-09', 'Luis Acolito', 'Romero ', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b204c1c646bbf4ea7497d8c5ca997731'),
(1332, '2013-07-09', 'Pedro Ramon', 'Zarramera ', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c80e9b33c477df8308d5181702fd0a64'),
(1333, '2013-07-09', 'Julian', 'Ygnacio Avila ', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '227c865ed35697c259992aace8307df8'),
(1334, '2013-07-09', 'Alfonzo Ramon', 'Brizuela ', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8d979efb975b64b5173ad63659e4c4a7'),
(1335, '2013-07-09', 'Noira Francisca', 'Camacho', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c3bdd375a90ab44c5d374e64e71befad'),
(1336, '2013-07-09', 'Carlos Alexis', 'Olavarria ', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '31b57a6ee7161925c3791a9d8cbda2b0'),
(1337, '2013-07-09', 'Edgar', 'Alvarado ', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '63266d2007e4a0bfd010cb064320ff14'),
(1338, '2013-07-09', 'Teodosio', 'Jaramillo ', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e9ee1b68f833d9e0f8b130755634efd4'),
(1339, '2013-07-09', 'Anibal', 'Coronado ', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '3cc4f70193c593a666d92161e50349d2'),
(1340, '2013-07-09', 'Orlando', 'Ferrer ', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '0661788a4991268ffc8f4c5076247332'),
(1341, '2013-07-09', 'Jose', 'Ceballos ', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8afc3362f4cc28741987c29274e145c9'),
(1342, '2013-07-09', 'Juan Retaco', 'Esqueda ', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'bf46f9c4a112923ec7ab43418779219f'),
(1343, '2013-07-09', 'Hector Rafael', 'Moreno ', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5242fb1c028cd37988dad6fcbc713b85'),
(1344, '2013-07-09', 'Ruben', 'Cazorla ', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'cefcce337c379b3b415e2f18866fb45e'),
(1345, '2013-07-09', 'Luis', 'Loreto ', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '25b36a1ddbf134e4dbfac7e0621f63b4'),
(1346, '2013-07-09', 'Asdrubal', 'Borges ', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '26f7d9ea91c439fd8a240d50f969f842'),
(1347, '2013-07-09', 'Wilfredo', 'Ruiz Rodriguez ', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '83c24f8ab6b3f7da008a9acb80b1675e'),
(1348, '2013-07-09', 'Sierra', 'Calderaro ', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ef2285a9784eaef7dacc2a1471a2a356'),
(1349, '2013-07-09', 'Olegario', 'Capote Guzman ', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b4f7cec1aabe70c64a1d4ef136d48830'),
(1350, '2013-07-09', 'Regorio', 'Matos ', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f43a487fb312f433f9e1ed4966fe6a15'),
(1351, '2013-07-09', 'Gregorio', 'Infante ', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '96c38e50b9f66e18935b5a79001a86d6'),
(1352, '2013-07-09', 'Arturo', 'Cafrunes ', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '0d00b65974769d3d2df0c1c9a8043ce0'),
(1353, '2013-07-09', 'Teofilo', 'Pacheco Tovar ', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'd030f5043544cf0e971ac5a0aa995bb9'),
(1354, '2013-07-09', 'Bautista', 'Torres ', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '7f27e2f3382fdf8817ed53bd60a9229a'),
(1355, '2013-07-09', 'Arquimides', 'Hernandez ', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '99e7cfab1352b99e6ea9fe56eba89321'),
(1356, '2013-07-09', 'Victor', 'Herrera', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b88a157e8d5496d927721b23d18206ba'),
(1357, '2013-07-09', 'Juan', 'Celestino', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2e065f36a00a8f611bc6b9330d023488'),
(1358, '2013-07-09', 'Bernabe', 'Jaspez ', 'Mexico', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a5cb9607e08b7d940ad2bb57cbf20e9a'),
(1359, '2013-07-09', 'Douglas', 'Colon ', 'Peru', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8998a5d0eceade2ed423057861842579'),
(1360, '2013-07-09', 'Florencio', 'Sojo ', 'Peru', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '934f1fb0b66d0c4fa95b74d32d7f1ca6'),
(1361, '2013-07-09', 'Inocencio', 'Pacheco', 'Peru', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '9856cda10a34efe5355cc21b192eb851'),
(1362, '2013-07-10', 'Alexander', 'Loreto ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'fe6a843056816a3be9a386c05287a523'),
(1363, '2013-07-10', 'Enrique', 'Solorzano ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5961f180b258ec19e20f5ee384992578'),
(1364, '2013-07-10', 'Mario', 'Celestino ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'db7768b7d24cce96b31464aee6a31cce'),
(1365, '2013-07-10', 'Adrian', 'Idalgo ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ec624b1fecec3bfc03f8036c5e59e2a4'),
(1366, '2013-07-10', 'Monroy', 'Morocoima', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '77bed7b6eb01b5616521d330c528ab19'),
(1367, '2013-07-10', 'Ruperto', 'Manriquez ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '660e66690cb6bc8bb791abeab0eb5cc9'),
(1368, '2013-07-10', 'Manuel', 'Bolivar', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e73cc00610ce1e1d9690f3c721cc7dee'),
(1369, '2013-07-10', 'Teodoro', 'Colasante ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b9b60799ea1f3527ad96e60df8ddf940'),
(1370, '2013-07-10', 'Miguel', 'Segovia', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2e19dc10494c58be3b95a0d7d2f80570'),
(1371, '2013-07-10', 'Dionisio', 'Suarez Bastardo ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '720b86c0f1422dd2dd87c39200bb23b9'),
(1372, '2013-07-10', 'Rafael', 'Gamarra ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '0316506af20f6acfce63ed4408979ed7'),
(1373, '2013-07-10', 'Baudilio', 'Mota ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2af3726503f6d2778451623fcf454df6'),
(1374, '2013-07-10', 'Rito', 'Zamora ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '1a4203c3e1fba5586ae688afa8b0d406'),
(1375, '2013-07-10', 'Julian', 'Tirzo  ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '05e88fafa8f34bab6fb2b56a31a85f5e'),
(1376, '2013-07-10', 'Juan', 'De Jesus ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '322ebc466b68cc0425b3962ba288805c'),
(1377, '2013-07-10', 'Margarito', 'Torreyes ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b19699536b0dfa78199d32fa0d1f7ffe'),
(1378, '2013-07-10', 'Basilio', 'Cunemo ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '4c3c0dd71fb122f8ff149c6869c303e2'),
(1379, '2013-07-10', 'Yovani', 'Natividad ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '643a33e8a5e1406eb5cea1ecf2a8f8fa'),
(1380, '2013-07-10', 'Caraffa', 'Solorzano', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'c8f4fa5ea7c986b65c165c2ebd511619'),
(1381, '2013-07-10', 'Cipriano', 'Galindo ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'da3bc85613e9a14e5cccdc882301e1c0'),
(1382, '2013-07-10', 'Fernely', 'Castro', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8515fe752761ecd9be8b7190ee33cfa4'),
(1383, '2013-07-10', 'Ascencion', 'PeÃ±a ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '68807fa3ce00c9cffdcf07593d5fff04'),
(1384, '2013-07-10', 'Franklin', 'Barrios', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '601b23492cb77b1f52756ead7a837486'),
(1385, '2013-07-10', 'Castor', 'Perez ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8fda506e192c76ac869e593a76e84adf'),
(1386, '2013-07-10', 'Agapito', 'Yobera', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '58d39df975723b5949ea77b8aaa0a71b');
INSERT INTO `venta` (`id`, `fecha`, `nombre`, `apellido`, `pais`, `mail`, `telefono`, `fpago`, `total`, `descripcion`, `confirmacion`, `pass`) VALUES
(1387, '2013-07-10', 'Rafael', 'Brizuela Blanco ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a3627a073763843d519d3c7778cba7da'),
(1388, '2013-07-10', 'Leonardo', 'Mancini Caiazza ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5255760407f19230a69d54ca271e0d37'),
(1389, '2013-07-10', 'Fermin', 'Rebolledo ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'af3576c2e3f4dc2f1ecd870edcecad8a'),
(1390, '2013-07-10', 'Aquiles', 'Hernandez ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '270b1db6984057c612caf7e25745793f'),
(1391, '2013-07-10', 'Victor', 'Bolivar ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a9a9c9e6a1ffc368bb8d8b1cdff26b11'),
(1392, '2013-07-10', 'Efrain', 'Olivo ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a57db5a4e6785876eb0942afd5fb9acc'),
(1393, '2013-07-10', 'Eduardo', 'Cadenas Ramirez ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '892c3dab2f2d452f38b5fbcd53e4e8e8'),
(1394, '2013-07-10', 'Osbaldo', 'Carrillo ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '44ceecc9ae2783d4b0c35fa561a9aba1'),
(1395, '2013-07-10', 'Ramon', 'Hernandez', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '0ddad2b865b8ff694abec86b23c5bb6b'),
(1396, '2013-07-10', 'Luis Del Nogal', 'Villarreal ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'bb188f8fc6d6a479fe607f961520c017'),
(1397, '2013-07-10', 'Angel', 'Vera ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'af63671473259c1758686bdb6b9c3617'),
(1398, '2013-07-10', 'Arnol', 'Rapalo', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'de8e2f4ea56393589f16489c4cc8579e'),
(1399, '2013-07-10', 'Honny', 'Ramos Lara ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '9fcdb8df787e54e7ecd42c97194fcef7'),
(1400, '2013-07-10', 'Ruben', 'Dario Sanchez ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '59aed69786727deed1fdb43db1823921'),
(1401, '2013-07-10', 'Alexis', 'Blanco ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'dda0eb916177463fc0b2f0af63ba6181'),
(1402, '2013-07-10', 'Guillermo', 'Camacho', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '3cfd271eb49089b1c4670d637323d30b'),
(1403, '2013-07-10', 'poncio', 'bonifacio tovar ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'ad96fe09d19ad224d7afd4cb013387c1'),
(1404, '2013-07-10', 'santos', 'francisco errade ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '5d2b1a0912f4c4d71b7b1f91688489a8'),
(1405, '2013-07-10', 'pablo antonio', 'gonzalez blanca ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'b2af19810054a2cce5c877cc2c4f23a0'),
(1406, '2013-07-10', 'miguel jose', 'gelder villarroel ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '569c9cad4dd9cdace5a157b9dbc82fea'),
(1407, '2013-07-10', 'jose', 'salomon rojas ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '8a09f075628cd2c7bfc1447bb1d9387b'),
(1408, '2013-07-10', 'orlando', 'suarez ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '2d1584eec28f075bd7e11d5112546fb3'),
(1409, '2013-07-10', 'Jaime', 'Hubardo Oropeza ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f5ede9a0ed9abc5a081f0973f81b59b0'),
(1410, '2013-07-10', 'francisco javier', 'pantoja ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '445f90d92dd7e95ee638a117388ea26a'),
(1411, '2013-07-10', 'antonio', 'faria ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '09a5ae233f508b817afc7cb1ae522ffa'),
(1412, '2013-07-10', 'williams', 'asdrubal', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '7b8f345d77054309ec1aecbe0e5c12c1'),
(1413, '2013-07-10', 'islael', 'teran ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'f120f51e83291bdc4227f9f2454abe0e'),
(1414, '2013-07-10', 'miguel', 'ramon lopez ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '3443348b6e05e7e084a93feff414b77b'),
(1415, '2013-07-10', 'henrry', 'pereira ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '6ce59bc0cadddebe0dec7a1770cd3a70'),
(1416, '2013-07-10', 'claudio', 'ruiz ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'e9adcb2050ca67dbf23c3b6abe2c6ba3'),
(1417, '2013-07-10', 'humberto', 'gricert ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, 'a38db0996fd81a67ebdf6febe255c05a'),
(1418, '2013-07-10', 'miguel', 'herdes astudillo ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '18644f720654c595bcec81c2bef14d5f'),
(1419, '2013-07-10', 'silfredo', 'diaz salazar', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '3cedf8cc5488a68207dfe84247227c7c'),
(1420, '2013-07-10', 'saul', 'simosa ', 'Chile', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 2012, '100d8af3f782553b3a244e8c6eb457fc'),
(1421, '2013-07-12', 'andres', 'carros', 'Chile', 'probando1@hotmail.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'f179511e92975d828bed15389b370079'),
(1422, '2013-07-19', 'antonio', 'romeo', 'Austria', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'd0a214d3d4d4c0f2ea91c2fa54bd7996'),
(1423, '2013-07-23', 'orlanso', 'contreras H.', 'Anguilla', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'a03c86f8fdb743a1bb0f89578a90dae9'),
(1424, '2013-07-23', 'Francisco', 'D.', 'Anguilla', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 0, '2adc711bf7956eed1205c45cf65d2719'),
(1425, '2013-07-24', 'dalwis', 'caballero', 'Argentina', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'f1f953e52777140d290fc7830feec1f7'),
(1426, '2013-07-25', 'alfredo capriles', 'caballero', 'Andorra', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 0, '1c3072652a55cce564ab9772ca56ea93'),
(1427, '2013-07-25', 'andres parra', 'caballero', 'Barbados', 'info@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 0, '32cb28d068d2e7bb2839c262c8ffbedc'),
(1428, '2013-07-28', 'alfredo capriles', 'caballero', 'Bangladesh', 'inf@peneperfecto.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'ab8df508a0c09520106c6ec06af9410f'),
(1429, '2013-07-30', 'alfredo capriles', 'caballero', 'Andorra', 'inf@peneperfecto.com', '000 000 00 00', 'Tarjeta de Cr&eacute;dito', 125, 'Manual de ejercicios naturales para agrandar el pene.', 19, 'b8ced2d78bab7a55df0578ba543fbc1a'),
(1430, '2013-08-04', 'hhhhhhhhh', 'hhhhhhh', 'Andorra', 'hhhhhhhhhhhh@live.com', '000 000 00 00', 'Efectivo', 125, 'Manual de ejercicios naturales para agrandar el pene.', 0, 'b3363e19829448640e2e90db5869ea77');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `video`
--
-- Creación: 20-02-2013 a las 03:24:58
-- Última actualización: 17-07-2013 a las 17:33:44
--

DROP TABLE IF EXISTS `video`;
CREATE TABLE IF NOT EXISTS `video` (
  `id` int(11) NOT NULL,
  `link` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `video`
--

INSERT INTO `video` (`id`, `link`) VALUES
(1, '/img/713153500.mp4'),
(2, '/img/62422482.mp4');
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
