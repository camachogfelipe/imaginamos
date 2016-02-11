/*!40101 SET NAMES utf8 */;
/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE IF NOT EXISTS JABALIES_campana;

USE JABALIES_campana;

DROP TABLE IF EXISTS cms_categoria;

CREATE TABLE `cms_categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(20) NOT NULL,
  `subtitulo` varchar(27) NOT NULL,
  `texto` varchar(255) NOT NULL,
  `cms_linea_id` int(11) NOT NULL,
  `cms_media_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_sub_catgoria_linea1_idx` (`cms_linea_id`),
  KEY `fk_cms_catgoria_cms_media1_idx` (`cms_media_id`),
  CONSTRAINT `fk_cms_catgoria_cms_media1` FOREIGN KEY (`cms_media_id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_sub_catgoria_linea1` FOREIGN KEY (`cms_linea_id`) REFERENCES `cms_linea` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

INSERT INTO cms_categoria VALUES("18","láminas","de acero","cold rolled, hot rolled, galvanizada, alfajor, decapada","15","638");
INSERT INTO cms_categoria VALUES("19","Tuberías","de acero","tipo mueble, agua negra, cerramiento, estructural","15","649");
INSERT INTO cms_categoria VALUES("20","vigas","estructurales","ipe, hea, canal, ángulo","15","650");
INSERT INTO cms_categoria VALUES("21","cubiertas y fachadas","metálicas","contamos con los mejores materiales para cerramientos, ","14","854");
INSERT INTO cms_categoria VALUES("22","estructuras","metálicas","tenemos todos los productos estructurales para la elabo","14","855");
INSERT INTO cms_categoria VALUES("23","entrepisos","metálicos","fabricamos productos innovadores para la elaboración de","14","856");
INSERT INTO cms_categoria VALUES("24","perfil ornamentación","metálicos","la mejor opción en precio y calidad para productos orna","14","857");
DROP TABLE IF EXISTS cms_contacto;

CREATE TABLE `cms_contacto` (
  `id` int(11) NOT NULL,
  `email` varchar(21) NOT NULL,
  `direccion` varchar(31) NOT NULL,
  `telefono` varchar(27) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO cms_contacto VALUES("0","hola@lacampana.co","calle 17 no. 22 - 41","57 - 1 - 370 2200");
DROP TABLE IF EXISTS cms_documento;

CREATE TABLE `cms_documento` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'cms_media_id, referecia a imagen del documento\ncms_media_id1, referencia al archivo',
  `titulo_funte1` varchar(7) DEFAULT NULL,
  `titulo_funte2` varchar(15) NOT NULL,
  `texto` varchar(218) NOT NULL,
  `cms_media_id` int(11) NOT NULL,
  `cms_media_id1` int(11) NOT NULL,
  `destacado` enum('1','0') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_documento_cms_media1_idx` (`cms_media_id`),
  KEY `fk_documento_cms_media2_idx` (`cms_media_id1`),
  CONSTRAINT `fk_documento_cms_media1` FOREIGN KEY (`cms_media_id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_documento_cms_media2` FOREIGN KEY (`cms_media_id1`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO cms_documento VALUES("12","pesos y","espesores","te traemos la tabla más completa en espesores y pesos de láminas de acero cold rolled(LAF), Hot Rolled(LAC), Galvanizada(GAL), Alfajor(LAL) y decapada(LAD).","889","890","1");
INSERT INTO cms_documento VALUES("14","láminas","atados","Queremos hacerlos partícipe de una nueva forma de realizar sus pedidos con el ánimo de que \nestos sean entregados en sus instalaciones en el menor tiempo posible.","891","892","1");
DROP TABLE IF EXISTS cms_enterese;

CREATE TABLE `cms_enterese` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(20) NOT NULL,
  `subtitulo` varchar(27) NOT NULL,
  `texto` text NOT NULL,
  `intro_text` varchar(255) NOT NULL,
  `video_id` int(11) DEFAULT NULL,
  `media_id` int(11) NOT NULL,
  `media_id1` int(11) NOT NULL,
  `destacado` enum('1','0') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_cms_enterese_cms_video1_idx` (`video_id`),
  KEY `fk_cms_enterese_cms_media1_idx` (`media_id`),
  KEY `fk_cms_enterese_cms_media2_idx` (`media_id1`),
  CONSTRAINT `fk_cms_enterese_cms_media1` FOREIGN KEY (`media_id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cms_enterese_cms_media2` FOREIGN KEY (`media_id1`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cms_enterese_cms_video1` FOREIGN KEY (`video_id`) REFERENCES `cms_video` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

INSERT INTO cms_enterese VALUES("45","Queja contra ","Colombia ante OMC","El país notificó a la Organización Mundial del Comercio (OMC) que establecía las medidas por la inundación que el mercado colombiano estaría sufriendo por productos siderúrgicos que afectan la industria local.\nEl diario ´O Estado de S. Paulo´ dice en una nota publicada este miércoles desde Ginebra (Suiza), sede la OMC, que Brasil solicitará la apertura de negociaciones con Colombia ante el organismo (Organización Mundial del Comercio), pues  las medidas afectan no solo sus exportaciones de productos siderúrgicos sino también los de Europa y países como Turquía, México y Japón.\n\nEl diario agrega que el problema es que las medidas de protección fueron adoptadas por Colombia para amparar a Acerías Paz del Río y Diaco, empresas controladas, respectivamente, por las brasileñas Votorantim y Gerdau.\n\nSin embargo, el tema de las salvaguardias entró en la agenda de una de las subcomisiones de la Organización.\n\nAunque no se perfila por ahora una disputa legal, la representación de Brasil ante la OMC pedirá una apertura formal de conversaciones con Colombia, con la esperanza de que se reviertan las medidas.\n\nColombia notificó a la OMC que establecía las salvaguardias por la inundación que su mercado estaría sufriendo por productos siderúrgicos que afectan la industria local.\n\nNo obstante, el 80 por ciento de la producción local de acero es de Votorantim y Gerdau.\n\n\"El Gobierno brasileño recurre con frecuencia a barreras para amparar a su sector siderúrgico. Sin embargo, cuando esas mismas empresas piden protección de otros Estados y que afecta a Brasil,  juzga que es ilegal”, dijo al diario brasileño desde Bogotá un diplomático colombiano.\n\n Los países pueden adoptar salvaguardias cada vez que hay una inundación de sus mercados por productos extranjeros, cuando es a través de mecanismos de competencia desleal.\n\nSin embargo, deben justificar la medida y probar que existe daño real a las empresas locales.\n\nBrasil prevé demostrar que sus exportaciones de acero están siendo perjudicadas porque  en los últimos 3 años aumentaron 58 por ciento.\n\nEn total, el aumento de las importaciones de acero en Colombia es de  33 por ciento y estaría provocando una caída del 5 por ciento  del precio del producto y una disminución de participación de mercado del  12 por ciento en los fabricantes locales.\n\nAdemás, Brasil se quejó de la falta de transparencia en el proceso llevado a cabo por Colombia y también quiere enviar sus propias cifras.\n\nDurante una reunión  en la OMC, no sólo se criticó a las productoras de acero brasileñas en Colombia sino que la Unión Europa dijo que estaba \"preocupada\" por el volumen de las investigaciones abiertas en Bogotá en la industria del acero y cuestionó los criterios utilizados en el proceso, incluyendo el cálculo de daño a la producción local.\n\nMéxico y Japón también cuestionaron la salvaguardia y había pedido que sus empresas fueran oídas antes de la adopción final de las barreras arancelarias. Perú y Turquía se unieron a las quejas.\n\nLos representantes colombianos respondieron que transmitirán las quejas, pero  insistieron en que la industria local estaba sufriendo perjuicios.\n\nLAS MEDIDAS\n\nEl primer decreto expedido en días pasados por Colombia tiene que ver con la aplicación de un arancel del 21,29 por ciento al ingreso de seis subpartidas de alambrón, materia prima para el alambre.\n\nEsta medida rige provisionalmente durante 200 días desde el 7 de octubre, y excluye las importaciones desde Argentina, Chile, Ecuador, EE.UU. y Canadá.\n\nTambién decretó salvaguardias para el alambrón corrugado, cuyo arancel es ahora de 21,96 por ciento y excluye solo a Venezuela.\n\nEsta petición fue presentada por Acerías Paz del Río, argumentando que la entrada de este producto se duplicó en menos de dos años, tiempo en el que la participación de la industria local cayó del 64 al 33 por ciento.\n\nEl dumping también ha sido investigado en Colombia (principalmente de productos provenientes de China), lo cual ha obligado a tomar medidas.\n\n Mientras tanto, el Ministerio de Comercio adelanta, por solicitud de las empresas del sector, investigaciones sobre otros productos provenientes del acero.\n\nCon Redacción de Economía y Negocios\n\nFuente: Portafolio.co","El país notificó a la Organización Mundial del Comercio (OMC) que establecía las medidas por la ...","","1143","1142","");
INSERT INTO cms_enterese VALUES("58","Brasil plantea ","guerra del acero ","Brasil plantea guerra del acero por medidas de Colombia\n\nDías después de que Colombia tomó medidas contra importaciones de acero para proteger la industria nacional, Brasil presentó ante la Organización Mundial de Comercio (OMC) una queja.\nEsta puede ser la antesala de un proceso contra el país al que se sumen otras naciones y que lleve a sanciones.\n\nEl diario O Estado de São Paulo reveló ayer en una nota remitida desde Ginebra (Suiza), sede la OMC, que el tema de las salvaguardias entró en la agenda de una de las subcomisiones de ese organismo.\n\nEn su queja, Brasil solicitará la apertura de negociaciones con Colombia ante ese organismo, pues considera que las salvaguardias que impuso nuestro país afectan no solo a sus productoras sino también a Turquía y otros países de Europa, México y Japón.\n\nColombia decidió proteger su industria mediante salvaguardias al ver relación entre un abrupto aumento de las importaciones y perjuicios a la industria.\n\nLa petición fue presentada por Paz del Río, con el argumento de que la entrada del producto se duplicó en menos de dos años, tiempo en que la participación local cayó del 64 al 33 por ciento.\n\nEl primer decreto, por ejemplo, aplica un arancel de 21,29 por ciento a seis subpartidas de alambrón, materia prima del alambre.\n\nLa medida rige por 200 días desde el 7 de octubre, y excluye importaciones de Argentina, Chile, Ecuador, Estados Unidos y Canadá.\n\nSegún fuentes de la industria nacional, un origen importante del aumento de las importaciones es México, cuya industria se ha quedado con excedentes en grandes volúmenes luego de que Estados Unidos les ha impedido la entrada tras comprobar competencia desleal.\n\nAsí mismo, fuentes cercanas a la Dian advierten sobre la entrada de acero en volúmenes y precios sorprendentes por La Guajira.\n\nEntre tanto, consumidores de acero lamentan las salvaguardias, pues elevan los precios. Por su parte, en la industria acerera comentan que esos precios predatorios se mantienen hasta eliminar a la competencia, pero después de tomarse el mercado vuelven a subirlos.\n\nIgualmente, aseguran que, en los costos de la construcción, el alambre, cuya materia prima es la que se ha protegido, solo pesa 0,4 por ciento, según el Dane.\n\nEn la OMC, voceros de la Unión Europea, México y Japón cuestionaron los criterios usados por Colombia para calcular el daño en la producción local, y habrían pedido que sus empresas fueran oídas antes de la adopción final de barreras arancelarias. Perú y Turquía se unieron.\n\nfuente: portafolio.co","Días después de que Colombia tomó medidas contra importaciones de acero para proteger la industria\n","","1139","1138","");
INSERT INTO cms_enterese VALUES("59","Polémica por","salvaguardias ","Polémica por salvaguardias a importaciones de acero\n\nImportadores advierten sustitución de compras de materia prima por productos terminados.\nTres decretos expedidos esta semana por el Gobierno, en los cuales se establecen medidas de salvaguardia ante las importaciones de algunos aceros, se convierten en objeto de polémica.\n\nMientras que los productores nacionales venían pidiendo a gritos esas medidas, los importadores señalan que esto elevará los costos de la construcción.\n\nEsto, en momentos en que, en términos generales, la industria del acero atraviesa por una situación difícil. En el 2012, la producción cayó 4,4 por ciento, y este año sigue en terreno negativo, lo cual crea temores sobre el empleo.\n\nLA CONTROVERSIA\n\nEl primer decreto tiene que ver con la aplicación de un arancel del 21,29 por ciento al ingreso de seis subpartidas de alambrón, materia prima para el alambre.\n\nEsta medida regirá provisionalmente durante 200 días desde el 7 de octubre, y excluye las importaciones desde Argentina, Chile, Ecuador, EE.UU. y Canadá.\n\nEn tanto, también decretó salvaguardias para el alambrón corrugado, cuyo arancel será de 21,96 por ciento y excluye solo a Venezuela.\n\nComo se sabe, el 98 por ciento de las importaciones de este producto proviene de México, Brasil, China, Japón, y Trinidad y Tobago.\n\nEsta petición fue presentada por Acerías Paz del Río, argumentando que la entrada de este producto se duplicó en menos de dos años, tiempo en el que la participación de la industria local cayó del 64 al 33 por ciento.\n\nAhora, la preocupación está por el lado de los trefiladores, quienes convierten el alambrón en alambre, pues hay temores de que haya una sustitución de importaciones de la materia prima por producto terminado. En declaraciones recientes a este diario, Óscar Proaño, director de Proalco (uno de los jugadores del sector), dijo que en el país no se producen cantidades suficientes de alambrón y advirtió que las salvaguardias harán más barato importar el producto terminado que fabricarlo en el país. Por su parte, Óscar Ramírez Acevedo, presidente ejecutivo de la Organización G y J, el mayor importador de acero del país, asegura que las salvaguardias no solucionan el problema estructural del sector. En cambio, afirma que sí pueden encarecer la materia prima para sectores como el de la construcción y el agropecuario, intensivos en el uso de acero y trefilados.\n\nNo obstante, cifras del Dane señalan que el peso del acero en los costos directos de la construcción es del 7,9 por ciento, y sobre el total de la obra es del 5,2 por ciento. En ese sentido, un aumento del 10 por ciento en el acero tendrá un impacto del 0,5 por ciento sobre la obra.\n\nRamírez indicó además que las restricciones impuestas a la importación van en contravía de los compromisos del país en el TLC con México. “Esta es una solución política de corto plazo, que viene a paliar una situación también de corto plazo”, dice.\n\nLa polémica no termina ahí. El principal socio de los importadores de acero es la mexicana DeAcero, la cual –dicen conocedores del sector– ha sido beneficiada por medidas antidumping (protección cuando hay empresas que venden a precios inferiores a los costos de producción), de manera que con su mercado cerrado puede vender en otros países a menores costos. Incluso, EE. UU. adelantó investigaciones de dumping a México, cuyo resultado fue la aplicación de una sobretasa del 21 por ciento a las importaciones desde el país azteca.\n\nEl dumping también ha sido investigado en Colombia (principalmente de productos provenientes de China), lo cual ha obligado a tomar medidas.\n\nMientras tanto, el Ministerio de Comercio,adelanta, por solicitud de las empresas del sector, investigaciones sobre otros productos provenientes del acero.\n\nPREOCUPA EL PANORAMA DE LA PRODUCCIÓN DE ACERO LARGO\n\nMientras que la producción cayó 10% en el semestre, las compras externas aumentaron 23%.\n\nDe hecho, el Comité Colombiano de Productores de Acero de la Andi advierte que, “si la situación continúa, a diciembre próximo la participación de la industria nacional se reducirá al 59 por ciento, seis puntos menos que a comienzos del año y 19 menos que en el 2010”. Aparte de las importaciones, los otros problemas que enfrenta el sector son el contrabando técnico, la sobrefacturación y la subfacturación.\n\nEntre tanto, el Mincomercio también adoptó una salvaguardia temporal por 200 días para la importación de barras de hierro o acero, que consiste en un arancel del 25,6 por ciento. Quedaron excluidas las importaciones desde Venezuela, Ecuador, Cuba y Estados Unidos.","Importadores advierten sustitución de compras de materia prima por productos terminados.\n","","1141","1140","");
INSERT INTO cms_enterese VALUES("60","Problemas ","de acero","Los fabricantes de aceros largos y planos del país, pese a tener salvaguardias, reclaman al Gobierno medidas más contundentes para evitar que el sector se vaya a la quiebra. Según la Andi, las importaciones de estos productos han aumentado 23% en lo corrido de 2013.\n\nEl creciente volumen de las importaciones de acero en los últimos tres años no deja de preocupar a diario a los productores nacionales, que por varios medios y con múltiples peticiones al Gobierno han intentado ponerle freno a un fenómeno que, según los propios industriales, está poniendo en riesgo cerca de 18.000 empleos. Tan sólo entre enero y agosto de 2013, según datos del Departamento Administrativo Nacional de Estadística (DANE), el país ha comprado a otras naciones US$1.624 millones en productos de hierro y acero —entre comunes y laminados—.\nY es que al aumento de las compras que resaltan los industriales se suma la caída en la producción del sector en lo corrido de este año. De acuerdo con estadísticas oficiales, la reducción en la fabricación de productos de hierro y acero fue de 10,5% entre enero y agosto. A este frenazo industrial, se agrega la ‘guerra’ que le planteó Brasil a Colombia ante la Organización Mundial del Comercio (OMC), debido a que el país puso en marcha una serie de decretos que buscan proteger el alambrón de acero y el acero corrugado. Esto significa, según el gobierno brasileño, un perjuicio a los balances de sus grandes factorías siderúrgicas.\nCarlos Hugo Escobar, presidente de Corpacero —firma fabricante de aceros planos desde la década del 50—, ante la coyuntura que vive la industria y que según él tiene a las compañías del sector trabajando a media máquina, considera que el Gobierno debe poner freno del todo a “competencias desleales y además delictuosas como el dumping. En el tema del acero plano, en el que estamos las firmas Corpacero y Acesco, se ha visto un incremento desbordado de las importaciones de China e India a precios que no son de economía de mercado”.\nEl problema, para el empresario, se resume en que la lámina galvanizada que se vende en Colombia está costando cerca de US$1.100 por tonelada y señala que este producto está llegando al país en US$720 de China e India, debido a que los gobiernos de esos países proveen significativos subsidios, a sus industrias, a las que en buena parte controlan. “Las importaciones de lámina lisa galvanizada en 2013 van en 34.366 toneladas, mientras que las tejas de cinc pasaron de 2.911 toneladas en 2011 a 11.879 toneladas este año. Estas empresas fracasarán si no hay medidas urgentes. Pedimos dos tipos: una antidumping para lámina y otra para las tejas que provienen de la India”.\nAunque el Gobierno ya había puesto una barrera para proteger a los aceros planos, cuenta Escobar, esta medida se tomó dando un precio de partida de US$824 por tonelada y no de US$1.100 como debió haberse establecido. “El valor que se requiere acá es mayor. No hemos logrado que se ponga la salvaguardia”. El actual contexto de este bloque de la industria, según el empresario, le hizo perder a Corpacero $40.000 millones tan sólo en 2012. \nEsta medida de protección en mención, que entró en vigencia el pasado 23 de julio, se extenderá hasta el próximo 23 de noviembre. En esa fecha, según los industriales del acero, el Gobierno deberá tomar la decisión de levantar la barrera arancelaria o darle continuidad.\nEn cuanto al panorama de los aceros largos —alambrón, vigas, entre otros— , la situación tampoco deja de ser crítica para los industriales. Según cifras del Comité Colombiano de Productores de Acero, la fabricación de este tipo de productos cayó 10% en el primer semestre de 2013, frente al mismo período del año pasado. En contraste, indica el gremio, las importaciones de estos metales en lo que va de este año han crecido 23%.\n“Si la situación actual continúa, a diciembre próximo la participación de la industria nacional se reducirá al 59%, seis puntos menos que a comienzos del año y 19 menos que en 2010”, manifestó Ana María Fergusson, directora del Comité, quien reclama medidas urgentes para el sector por parte del Estado. Agrega que razones como elevados costos de la energía, contrabando, sobrefacturación y subfacturación no dejan competir a Colombia en igualdad de condiciones.\nMarcel Tangarife, abogado experto en asuntos de comercio internacional, explica que en el caso de los aceros largos existen tres grupos de defensas comerciales: “Se aprobó una salvaguardia al alambrón presentada por Acerías Paz del Río a través de un decreto (el 2213 de 2013). Ésta impone un arancel de 21,29% a las importaciones. También está una medida para blindar a los productos corrugados de acero con un gravamen de 25,6%. Tercero, el decreto 2212 del 8 de octubre de 2013 puso un arancel de 21,9% para defender los alambrones corrugados”.\nEstas salvaguardias, establecidas por el Gobierno a comienzos de este mes para los aceros largos, fueron pactadas por un período de 200 días —terminan en mayo de 2014—. De los resultados que se vean en el lapso mencionado, explica Tangarife, depende que el Estado tome la decisión de poner en marcha una protección permanente durante cuatro años.\n“Los requisitos para que se adopte la salvaguardia están dados. Es claro que el grave daño que está sufriendo la industria nacional radica en un incremento de las importaciones”. Advierte que si el Gobierno no toma en serio los reclamos industriales, los productores siderúrgicos terminarán clausurando sus fábricas y dando paso a la invasión de productos subsidiados provenientes del Oriente.\n\nPor: Héctor Sandoval Duarte\n\nfuente: elespectador.com\n","Los fabricantes de aceros largos y planos del país, pese a tener salvaguardias, reclaman al Gobierno","1158","1157","1156","");
INSERT INTO cms_enterese VALUES("65","las salvaguardia","de acero dividen","La pelea entre importadores y productores de acero en Colombia por la salvaguardia provisional que cobra impuestos al producto traído de otros países, mantiene con profundas divisiones al sector. Mientras los productores nacionales de acero esperan que la investigación del Ministerio de Comercio, Industria y Turismo (que tendrá una duración de 200 días) concluya con el decreto de medidas de salvaguardia permanentes, los importadores esperan que se desmonte pues alegan que restringe la libre competencia.\n\nVicente Noero, presidente de Acerías Paz del Río, aseguró a LR que los aranceles son una herramienta que hace las reglas del juego dentro del sector más justas. El directivo dijo que incluso se propuso que en el caso del alambrón, donde se impusieron aranceles temporales de 21, 29% y 21,96% y los productores nacionales pueden atender solo 64% del mercado, existiera la posibilidad de que 35% de este consumo pueda ser importado sin salvaguardia.\n\nAunque son 1,9 millones de toneladas de aceros largos los que consume el país, 1,3 millones son producidos por empresas locales, lo que significa que 35% del consumo debe ser suplido por importaciones. De acuerdo con información de Paz del Río, si se tiene en cuenta que en 2012 el sector siderúrgico operó a 65%, se concluye que los productores nacionales pueden atender 100% del mercado de aceros largos.\n\nLos productores afirmaron que la industria local ha sufrido recortes de unos 350 empleos desde 2011 y se ha presentado el cierre permanente de una planta de Gerdau Diaco, al punto que las fábricas están trabajando con 70% de su capacidad. Además advirtió que de cancelarse las salvaguardias, no tendrían más opción que cerrar.\n\nEl presidente de Sidoc, Maurice Armitage, señaló que el gran problema es que dos grandes importadores del mercado quieren manejar el negocio en el país, por lo que las firmas locales han tenido que bajar sus precios para competir con los precios bajos que productos extranjeros han traído con “competencia desleal”.\n\nA pesar de ello, Óscar Ramírez, presidente de la Organización G&J, dijo que el crecimiento de las importaciones solo se debe al crecimiento de la construcción que va más rápido que el crecimiento del país. “La Organización G&J requiere 25.000 toneladas mensuales de acero largos y ninguno de los siderúrgicos locales se compromete a entregarlas”. Ramírez agregó que los solicitantes deberían comprometerse a hacer inversiones que garanticen la autosuficiencia siderúrgica a los precios de los países que compiten y permitir las importaciones a precios justos.\n\nFrente a los recortes de personal anunciados por Proalco y Almasa, los productores dijeron que las medidas provisionales tienen el apoyo de 39% de la industria trefiladora y que los productores locales buscan que no generen perjuicio, porque muchas de ellas son clientes de las siderúrgicas.\n\nMaterial representa 5,2% de costo en obras\nFrente a los posibles aumentos de los costos de la vivienda, los productores locales dijeron que no es cierto que los precios aumenten 20% por las medidas provisionales de salvaguardia, como lo han asegurado los importadores. Esto, debido a que según cifras del Dane, el acero representa 5,2% de los costos de una obra. Un aumento del acero en 10% de precio aumenta el de la obra en 0,5%. Así, de acuerdo con el informe de Paz del Río, “el sector construcción no se verá afectado materialmente, ya que el incremento de costos puede ser trasladado en la cadena sin tener un efecto significativo en el consumidor”.\n\n“Si es más barato importar que producir, seremos Panamá”\nVicente Noero, presidente de Acerías Paz del Río, señaló que las medidas buscan igualar las reglas de juego para todos los competidores en el plano local.\n\n¿Cuáles han sido los efectos de las medidas provisionales?\nEn el sector siderúrgico ha habido un ambiente de recuperación y de gran inversión de todo el sector. Con la solicitud, uno se compromete a trabajar y a invertir en la competitividad del sector, que es un plan de ajustes mientras duran las salvaguardias. Son provisionales, nos estamos preparando para las definitivas con el caso legal.\n\nSon 40% de los trefiladores quienes están de acuerdo con estas medidas, porque ellos ven que el hecho de que se acabe la producción nacional de alambrón va a afectar sus intereses porque van a quedar en manos de los productos de los grandes importadores, van a ser ellos quienes manejen el precio de mercado. Lo que los productores nacionales de alambrón no producen, se ha sacado de esas partidas arancelarias y no van a estar en la solicitud de salvaguardia definitiva. Lo que la producción nacional no alcance a suplir, se propone que se establezcan cupos bajo los mecanismos que están hoy en día establecidos.\n\n¿En qué medidas están trabajando durante estos 200 días?\nUno se compromete a disminuir los costos para poder competir ante situaciones de mercado, son planes cuantificables y verificables ante el Gobierno. Lo que queremos es que nos nivelen la cancha.El sector está trabajando con una capacidad de 70%, por eso dicen que no somos autosuficientes, porque no estamos vendiendo todo lo que se consume, pero nos han avasallado con las importaciones y los bajos precios. El mercado nacional creció 9% el año pasado y la producción local bajó 4%, ese mercado lo suplió las importaciones.\n\n¿Por qué son necesarias las medidas?\nCon las reglas no claras del acero importado, nos han llevado a unos precios por debajo de los costos que no podemos aguantar. Ese es el caso de Sidoc, Paz del Río y Sidenal. Estas medidas son tomadas en tanto se demuestra que hay condiciones de competencia desleal en un país. Se demuestra con las reglas establecidas por la OMC ante el Mincomercio. Este es el mecanismo otorgado y aceptado en muchos países para nivelar la cancha del juego, una vez pase eso tenemos que ser competitivos frente a los demás jugadores del mercado. El que no es competitivo en una cancha de juego nivelada, no tiene derecho a jugar en esa cancha.\n\n¿Cuáles son sus expectativas tras los 200 días de las medidas?\nQue salgan las salvaguardias definitivas.\n\n“Las medidas las solicitaron solo dos de las cinco siderúrgicas”\nÓscar Ramírez, presidente de la Organización G&J, el mayor importador en el país, señaló que las salvaguardias son inconvenientes para la industria.\n\n¿Cuáles han sido los efectos de las salvaguardias?\nEl efecto inmediato ha sido un incremento de los precios a los comercializadores y transformadores, que elimina el valor agregado de la cadena y pone en riesgo el empleo que generan los trefiladores y ferreteros del país.\n\n¿En qué medidas están trabajando para mitigar las salvaguardias?\nEstamos evaluando los nuevos costos de producción en el país contra la importación del producto terminado, para determinar los empleos que tendremos que eliminar y sustituir por compras internacionales. Vale la pena recordar que mientras se le da a los locales un arancel para el acero del 20% al 26%, los países vecinos no pagan arancel, lo que además va a propiciar un auge de contrabando de productos que no cumplen las normas Colombianas generando un gran riesgo en la construcción.\n\nEstamos buscando un acuerdo de toda la cadena productiva (productores, transformadores, comercializadores) tal como se lo propusimos al presidente y al nuevo Ministro de Comercio, de manera tal que nadie salga perjudicado y se mantenga el empleo y el valor agregado. Y solicitando a los productores locales el suministro de las toneladas que venimos importando a precios que permitan la transformación y la comercialización sin afectar los 2.200 empleos que generamos.\n\nAdemás, acelerando el proyecto de inversión siderúrgica que tenemos en marcha y que va a sustituir importaciones por empleo y valor agregado nacional.\n\n¿Por qué son innecesarias las medidas de salvaguardia?\nColombia es deficitario en producción de aceros largos, así los siderúrgicos locales insistan en lo contrario. No olvidemos que las materias primas para la producción de acero (mineral de hiero y chatarra) solo permiten la producción de 1.2 millones de toneladas año mientras el consumo es de 2 millones va en aumento por los programas de vivienda e infraestructura al punto que los segundos y terceros importadores son los mismos siderúrgicos.\n\nLas salvaguardias van en contra vía de los TLC y solo benefician a las empresas ineficientes en perjuicio del consumidor, además las salvaguardias las solicitaron solo 2 de las 5 siderúrgicas que producen en Colombia.\n\n¿Cuáles son sus expectativas tras los 200 días de las medidas?\nQue se respete el debido proceso en la investigación que fue lo que no sucedió para tomar las medidas provisionales y que el Gobierno Nacional busque una concertación de toda la cadena productiva que no deje vencedores ni vencidos.\n\nLas opiniones\n\nMaurice Armitage\nPresidente de Sidoc\n“El problema que estamos viviendo es porque son dos grandes importadores los que quieren manejar todo el mercado del país”.\n\nÒscar Proaño\nPresidente de Proalco Bekaert\n“Estamos muy preocupados por las importaciones de productos sustitutos del acero como mallas de plástico para el agro y la ganadería”.\n\nTatiana Arango\ntarango@larepublica.com.co\n\nfuente: larepublica.com.co\n","Las salvaguardias siguen dividiendo a productores e importadores de acero","1161","1160","1159","");
INSERT INTO cms_enterese VALUES("66","¿Salud de acero ","tras el castigo?","Cambio de ciclo. Esas son las palabras que más se repiten al referirse a ArcelorMittal en los últimos días. El pasado jueves la compañía acerera presentó sus cuentas correspondientes a los nueve primeros meses de 2013. ¿Vaso medio lleno o medio vacío? Para la gran mayoría de analistas la primera opción gana enteros. Sin ser resultados excesivamente brillantes, se pone en evidencia un punto de inflexión para la firma, apoyado en un mayor crecimiento de su beneficio bruto de explotación (ebitda) y el incremento de las ventas.\n\nLos números no dejan lugar a dudas. En el tercer trimestre del presente ejercicio la firma con sede en Luxemburgo consiguió batir las expectativas del consenso de mercado al presentar un ebitda de 1.713 millones de dólares (unos 1.270 millones de euros) frente a una estimación de 1.535 millones. La máquina carbura, tal vez no a pleno rendimiento (el beneficio bruto acumulado de todo el año es un 18% menor que el registrado en los nueve primeros meses de 2012), pero consigue dar progresivos síntomas de mejoría mientras que se ha reducido la sangría de pérdidas en un 70% hasta los 193 millones de dólares (143 millones de euros).\n\nEste hecho, unido a unas ventas acumuladas en el tercer trimestre de 19.643 millones de dólares (que han superado o, por lo menos, no han quedado por debajo de los 19.583 millones esperados) han llevado a las distintas casas de análisis a recalcular sus previsiones sobre ArcelorMittal. En concreto, desde el pasado 7 de noviembre, trece de las veinte firmas que han revisado sus estimaciones sobre el valor han elevado su precio objetivo a un año vista. Además, detrás de estas mejores perspectivas hay ocho recomendaciones de compra, cuatro neutrales y dos de venta.\n\n¿A qué responde este cambio de percepción? ¿Son sólo los resultados o es la respuesta al excesivo castigo que ha recibido en los últimos tiempos (es el tercer peor valor del Ibex con una subida del 0,3%)? “En acero, los volúmenes están mejorando y se ha incrementado la expectativa de demanda mundial de acero del 3% al 3,5%. Además se está dando una estabilidad en los precios (hay un incremento de la demanda en China, principal país importador con un 60% del consumo) tras las subidas moderadas de los últimos meses”, apuntan desde Renta 4.\n\nEl incremento del precio del mineral de hierro incide directamente en los márgenes de una compañía en la que parte del negocio está dedicado directamente a la minería y venta de la materia prima. Desde Banco Sabadell, una de las entidades que han venido apostando por la acerera desde principios de año, el analista Francisco José Rodríguez sigue confiando en la compañía. “Las revisiones vienen dadas no tanto por lo que se ha dicho en las últimas cuentas, sino por el hecho de que ha estado muy castigada. Está barata y tiene margen de mejora. Si las cosas siguen mejorando, los márgenes crecerán de forma sólida”, afirma.\n\nLos analistas de Citi también comparten esta percepción y apuntan a que se está entrando en la parte positiva del ciclo del acero. “El ebitda debe experimentar una sólida recuperación a lo largo de 2013 y 2014 gracias al programa de mejoras de gestión y al crecimiento de los volúmenes en el negocio minero y de los envíos de acero”, subrayan. En este sentido, la recuperación del tejido industrial en países como Estados Unidos también se antoja fundamental, ya que “buena parte de las estimaciones se apoyan en un mercado estadounidense más sano”.\n\nNo obstante, el argumento que vincula la recuperación económica con la evolución de la cotización de la compañía no resulta clave para todos los analistas. Desde IG consideran que este factor está totalmente descontado en el mercado. “Está escrito que China crecerá en el entorno del 7% sin dar grandes sorpresas, por lo que no lo consideramos un factor fundamental en el devenir de su evolución en bolsa. Creemos que una subida de sus acciones podría deberse a que ha estado excesivamente castigado pero, a día de hoy, no lo incluiríamos en ninguna de nuestras carteras”, apunta el analista Daniel Pingarrón.\n\nUn potencial de hasta el 40%\n\nLas perspectivas del consenso de mercado no pueden ser más prometedoras. Entre las trece firmas de análisis que han elevado el precio objetivo a la compañía desde el pasado jueves destacan JP Morgan (de 13,5 a 15 euros), Jefferies (de 13,5 a 14,5 euros), Macquire (de 14 a 16 euros), Rabobank (de 12,5 a 15 euros), Deutsche Bank (de 12 a 14,5 euros), RBC (de 9,1 a 11 euros) o HSBC (de 12,2 a 12,4 euros).\n\nCon una horquilla de precios objetivos que va desde los 18 euros en los que la sitúan los analistas de Société Générale a los 9,20 euros de S&P Capital, la valoración del consenso de mercado le concede un potencial alcista de hasta un 40% desde los niveles actuales de 12,81 euros a los que cerró este lunes.\n\nOtro de los aspectos que está cambiando en las fechas es la tendencia mayoritaria de los analistas a recomendar la compra de los títulos de ArcelorMittal. Tras anunciar sus cuentas, las recomendaciones para adquirir los títulos de la compañía ya suponen un 52% de todo el consenso de mercado frente al 29% que aconseja mantenerlos y el 18% que opta por venderlos.\n\nfuente: elconfidencial.com","¿Salud de acero tras el castigo? ArcelorMittal tiene un potencial del 40% tras sus resultados","","1155","1154","1");
DROP TABLE IF EXISTS cms_fmenu_items;

CREATE TABLE `cms_fmenu_items` (
  `id` int(11) NOT NULL,
  `item` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO cms_fmenu_items VALUES("1","equipo de trabajo");
INSERT INTO cms_fmenu_items VALUES("2","lineas");
INSERT INTO cms_fmenu_items VALUES("3","servicios de corte");
INSERT INTO cms_fmenu_items VALUES("4","documentos");
INSERT INTO cms_fmenu_items VALUES("5","enterate");
INSERT INTO cms_fmenu_items VALUES("6","trabaja con nosotros");
DROP TABLE IF EXISTS cms_fmenu_text;

CREATE TABLE `cms_fmenu_text` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(123) DEFAULT NULL,
  `fmenu_items_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_text_menu_cms_items_menu` (`fmenu_items_id`),
  CONSTRAINT `fk_cms_text_menu_cms_items_menu` FOREIGN KEY (`fmenu_items_id`) REFERENCES `cms_fmenu_items` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO cms_fmenu_text VALUES("1","buscamos personas talentosas con ideas frescas y nuevas maneras de hacer las cosas.","6");
INSERT INTO cms_fmenu_text VALUES("3","conoce un poco más sobre las diferentes calidades, normas y usos del acero.","4");
INSERT INTO cms_fmenu_text VALUES("4","bajamos tus costos entregando productos a la medida.","3");
INSERT INTO cms_fmenu_text VALUES("5","contamos con la disponibilidad y variedad de productos de acero.","2");
INSERT INTO cms_fmenu_text VALUES("6","el talento de nuestro equipo significa todo para nosotros.","1");
INSERT INTO cms_fmenu_text VALUES("7","si tu negocio es el acero, te informamos de lo que pasa en Colombia y el mundo.","5");
DROP TABLE IF EXISTS cms_groups;

CREATE TABLE `cms_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO cms_groups VALUES("1","superadmin","Super Administrador");
INSERT INTO cms_groups VALUES("2","admin","Administrador");
INSERT INTO cms_groups VALUES("3","usuarios","Usuarios");
DROP TABLE IF EXISTS cms_linea;

CREATE TABLE `cms_linea` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(20) NOT NULL,
  `subtitulo` varchar(27) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO cms_linea VALUES("14","aceros construcción","para estructuras metálicas");
INSERT INTO cms_linea VALUES("15","aceros industria","para metalmecánica");
DROP TABLE IF EXISTS cms_login_attempts;

CREATE TABLE `cms_login_attempts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS cms_media;

CREATE TABLE `cms_media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(150) NOT NULL,
  `type` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1162 DEFAULT CHARSET=latin1;

INSERT INTO cms_media VALUES("1","assets/img/enterate/peque.jpg","i");
INSERT INTO cms_media VALUES("176","./uploads/641cb44ab4741815d5b254de826d142b.jpg","i");
INSERT INTO cms_media VALUES("177","./uploads/ad08aab1016895da42eee2ecc3cb274a.png","t");
INSERT INTO cms_media VALUES("178","./uploads/6c3ab986c2509d7ada274f8b352521bf.JPG","t");
INSERT INTO cms_media VALUES("179","./uploads/2474d5c4021490f99086c367d987424d.JPG","i");
INSERT INTO cms_media VALUES("180","./uploads/77fe8f674a3bb8e219375ff652ec0acf.jpg","i");
INSERT INTO cms_media VALUES("181","./uploads/641cb44ab4741815d5b254de826d142b.jpg","i");
INSERT INTO cms_media VALUES("183","./uploads/09e91bd7df0ef545683031f04a68033d.png","t");
INSERT INTO cms_media VALUES("184","./uploads/250616c886746eb8c1e4036a3a93f45b.png","t");
INSERT INTO cms_media VALUES("185","./uploads/5335446ab84303248f31d1bd5da2ae25.png","i");
INSERT INTO cms_media VALUES("186","./uploads/09e91bd7df0ef545683031f04a68033d.png","t");
INSERT INTO cms_media VALUES("187","./uploads/250616c886746eb8c1e4036a3a93f45b.png","t");
INSERT INTO cms_media VALUES("188","./uploads/5335446ab84303248f31d1bd5da2ae25.png","i");
INSERT INTO cms_media VALUES("189","./uploads/2f60d0a80a04e49390bff14729c0d2f8.jpg","t");
INSERT INTO cms_media VALUES("190","./uploads/fe291cc3e27833197ea3883be0d5ccfb.JPG","t");
INSERT INTO cms_media VALUES("191","./uploads/607f55ced9e2b3339143cf4ecbf89726.JPG","i");
INSERT INTO cms_media VALUES("192","./uploads/9d31dd26866fce310f236eb6a27aa9c1.png","t");
INSERT INTO cms_media VALUES("193","./uploads/dc4626c27bf5547cfea403af6cb71c6d.png","t");
INSERT INTO cms_media VALUES("194","./uploads/e9ef3d0db18dd67d498102aac3c0ea6f.png","i");
INSERT INTO cms_media VALUES("195","./uploads/702f7b42e2cb7dc2720ea7c1cce73e9b.png","t");
INSERT INTO cms_media VALUES("196","./uploads/57fd83e31e3a8393bd3a39137a8816e5.png","t");
INSERT INTO cms_media VALUES("197","./uploads/dd92cfb0455178c0157cd8d48effb83f.png","i");
INSERT INTO cms_media VALUES("198","./uploads/2f60d0a80a04e49390bff14729c0d2f8.jpg","t");
INSERT INTO cms_media VALUES("199","./uploads/fe291cc3e27833197ea3883be0d5ccfb.JPG","t");
INSERT INTO cms_media VALUES("200","./uploads/607f55ced9e2b3339143cf4ecbf89726.JPG","i");
INSERT INTO cms_media VALUES("201","./uploads/702f7b42e2cb7dc2720ea7c1cce73e9b.png","t");
INSERT INTO cms_media VALUES("202","./uploads/57fd83e31e3a8393bd3a39137a8816e5.png","t");
INSERT INTO cms_media VALUES("203","./uploads/dd92cfb0455178c0157cd8d48effb83f.png","i");
INSERT INTO cms_media VALUES("204","./uploads/2f60d0a80a04e49390bff14729c0d2f8.jpg","t");
INSERT INTO cms_media VALUES("205","./uploads/fe291cc3e27833197ea3883be0d5ccfb.JPG","t");
INSERT INTO cms_media VALUES("206","./uploads/607f55ced9e2b3339143cf4ecbf89726.JPG","i");
INSERT INTO cms_media VALUES("207","./uploads/702f7b42e2cb7dc2720ea7c1cce73e9b.png","t");
INSERT INTO cms_media VALUES("208","./uploads/57fd83e31e3a8393bd3a39137a8816e5.png","t");
INSERT INTO cms_media VALUES("209","./uploads/dd92cfb0455178c0157cd8d48effb83f.png","i");
INSERT INTO cms_media VALUES("210","./uploads/2f60d0a80a04e49390bff14729c0d2f8.jpg","t");
INSERT INTO cms_media VALUES("211","./uploads/fe291cc3e27833197ea3883be0d5ccfb.JPG","t");
INSERT INTO cms_media VALUES("212","./uploads/607f55ced9e2b3339143cf4ecbf89726.JPG","i");
INSERT INTO cms_media VALUES("213","./uploads/9f502e862c0573f059f8318b97fc4045.jpg","t");
INSERT INTO cms_media VALUES("214","./uploads/fe9a52018acb1f90cdfca4f00cce6033.JPG","t");
INSERT INTO cms_media VALUES("215","./uploads/353cd18c5b90908beba58af1a8aa8c10.JPG","i");
INSERT INTO cms_media VALUES("216","./uploads/132c1065d8bef505ffc291cff54e6d12.jpg","t");
INSERT INTO cms_media VALUES("217","./uploads/3143c8d47391b16f05a286b558d17b74.JPG","t");
INSERT INTO cms_media VALUES("218","./uploads/c05c4e48314d7d27453210d82514ee1c.JPG","i");
INSERT INTO cms_media VALUES("219","./uploads/e527051e856403aca132d9b55f1d9030.jpg","t");
INSERT INTO cms_media VALUES("220","./uploads/c5c086437f2d533962800d9b30a82cae.JPG","t");
INSERT INTO cms_media VALUES("221","./uploads/9f11f965f7174e8793b1c5c6a5129903.JPG","i");
INSERT INTO cms_media VALUES("222","./uploads/c020e0cf07f7a30fa58dfe8e014e134c.jpg","t");
INSERT INTO cms_media VALUES("223","./uploads/6e4518bd9e79094027e25d35380ea7e8.JPG","t");
INSERT INTO cms_media VALUES("224","./uploads/44f72d2e0a40ec08ef93a1ab98516e0a.JPG","i");
INSERT INTO cms_media VALUES("225","./uploads/9701fbf31163e00d134ec728b45580b1.png","t");
INSERT INTO cms_media VALUES("226","./uploads/b3418b396de739c1d59fa1d8267fd978.png","t");
INSERT INTO cms_media VALUES("227","./uploads/88622680fb405993b3a2214e01cee8ba.png","i");
INSERT INTO cms_media VALUES("228","./uploads/4c0a70caf5f1d45ece6b5fec82c76754.jpg","t");
INSERT INTO cms_media VALUES("229","./uploads/793f8cac94f244c975d78b3c9c3a00a9.JPG","t");
INSERT INTO cms_media VALUES("230","./uploads/76c17912c5be1dcbc58b49b45a09ea06.JPG","i");
INSERT INTO cms_media VALUES("231","./uploads/393637c9052938d2a8c0917ebaf7b48f.jpg","t");
INSERT INTO cms_media VALUES("232","./uploads/bfa85963785bb609d41602a62e0d3445.JPG","t");
INSERT INTO cms_media VALUES("233","./uploads/821d573afe67ff13bb131225ad1af424.JPG","i");
INSERT INTO cms_media VALUES("234","./uploads/b55e64d190f14b1d9d63856808e57a5a.jpg","t");
INSERT INTO cms_media VALUES("235","./uploads/e587c79a732452d6362198e7b51097ad.JPG","t");
INSERT INTO cms_media VALUES("236","./uploads/ca3a10e3ca139471024a03b501e9e2e5.JPG","i");
INSERT INTO cms_media VALUES("237","./uploads/62111c6a6a6df92b1a3aacad49f598bd.jpg","t");
INSERT INTO cms_media VALUES("238","./uploads/d1a53585f874506a0ac05f3de93fbd87.JPG","t");
INSERT INTO cms_media VALUES("239","./uploads/e2f2b556b7031bc4e7ab12c8ccb48466.JPG","i");
INSERT INTO cms_media VALUES("240","./uploads/6db83f7dc37762c577692c485e1b8ff8.jpg","t");
INSERT INTO cms_media VALUES("241","./uploads/f48909c6a861f6107544d58909d38056.JPG","t");
INSERT INTO cms_media VALUES("242","./uploads/dc9d81600c95589233dec882aafff347.JPG","i");
INSERT INTO cms_media VALUES("243","./uploads/0c9f07d254d2e34f2838f6ad290d6958.jpg","t");
INSERT INTO cms_media VALUES("244","./uploads/583834961c8797aa88804098b39e9ffa.JPG","t");
INSERT INTO cms_media VALUES("245","./uploads/410a06cde1cfcbf2130f7fc0fc7eb7d5.JPG","i");
INSERT INTO cms_media VALUES("246","./uploads/d17a988d7ae040dcc69db6ed2f7e0335.jpg","t");
INSERT INTO cms_media VALUES("247","./uploads/32d99c3266ca5f1b6eb52358c2dc7078.JPG","t");
INSERT INTO cms_media VALUES("248","./uploads/876b51842ba116a88d4dcc34d594e1ad.JPG","i");
INSERT INTO cms_media VALUES("249","./uploads/c4b511fc632653ddbeba9e240fac7f05.jpg","t");
INSERT INTO cms_media VALUES("250","./uploads/e450cec7ff9aef8e5f030b96061780df.JPG","t");
INSERT INTO cms_media VALUES("251","./uploads/12c879825cbb4e69fa3672411fac5d65.JPG","i");
INSERT INTO cms_media VALUES("252","./uploads/7c64419a43221636116cc2e78a2a118f.jpg","t");
INSERT INTO cms_media VALUES("253","./uploads/5301d42488544fc20bf69fd954dd01fd.JPG","t");
INSERT INTO cms_media VALUES("254","./uploads/6cd5b3696eb1cdd51ebe10b7ee2720b7.JPG","i");
INSERT INTO cms_media VALUES("255","./uploads/47255f9616514b9efaa4b28f06a93647.jpg","t");
INSERT INTO cms_media VALUES("256","./uploads/d3e0191a4bc13d1e715b04b2f05cb223.JPG","t");
INSERT INTO cms_media VALUES("257","./uploads/c184eed784639d40741e63f40247082f.JPG","i");
INSERT INTO cms_media VALUES("258","./uploads/4c769b0fb98f8f699231151a1f6d0931.jpg","t");
INSERT INTO cms_media VALUES("259","./uploads/9361b9548eca3671ac96d5e8007ad6ee.JPG","t");
INSERT INTO cms_media VALUES("260","./uploads/5eb5758924c4fd0eef492e34604da5d6.JPG","i");
INSERT INTO cms_media VALUES("261","http://www.youtube.com/watch?v=CwLWzNiUNrQ","v");
INSERT INTO cms_media VALUES("262","./uploads/2ba0de55fd8ad9f34f3e699fe5abf012.png","i");
INSERT INTO cms_media VALUES("263","http://www.youtube.com/watch?v=CwLWzNiUNrQ","v");
INSERT INTO cms_media VALUES("264","./uploads/23d14423682104430584a9519a8cc234.png","i");
INSERT INTO cms_media VALUES("265","./uploads/900cdfa19775b6f42dd098a590d0f53b.pdf","f");
INSERT INTO cms_media VALUES("266","./uploads/21ff2661e657ba39ec5e0028aac9eda3.jpg","i");
INSERT INTO cms_media VALUES("267","./uploads/b4dc0692365020abf27c3527d2d4a8a8.pdf","f");
INSERT INTO cms_media VALUES("268","./uploads/577b7820bb02f6567bb409b4757fac93.jpg","i");
INSERT INTO cms_media VALUES("269","./uploads/012489ba8256970c27e7f80c2893c720.pdf","f");
INSERT INTO cms_media VALUES("270","./uploads/89b618c4f01b0fe9d47e9791e8f5a95e.jpg","t");
INSERT INTO cms_media VALUES("271","./uploads/c4469134ccaaf609b59081cfbc486b0c.png","i");
INSERT INTO cms_media VALUES("272","http://www.youtube.com/watch?v=83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("274","./uploads/425b43ff809bba8964bc28b2ebb8c786.jpg","t");
INSERT INTO cms_media VALUES("275","./uploads/425b43ff809bba8964bc28b2ebb8c786.jpg","t");
INSERT INTO cms_media VALUES("276","http://www.youtube.com/watch?v=m4cgLL8JaVI&feature=player_embedded","v");
INSERT INTO cms_media VALUES("277","./uploads/7100d50fd62d649fce6c08e0f5bce3ac.jpg","i");
INSERT INTO cms_media VALUES("278","http://www.youtube.com/watch?v=m4cgLL8JaVI&feature=player_embedded","v");
INSERT INTO cms_media VALUES("281","./uploads/6158ebba26deccb9088fef467d1b70f4.jpg","t");
INSERT INTO cms_media VALUES("282","http://www.youtube.com/watch?feature=player_embedded&v=m4cgLL8JaVI","v");
INSERT INTO cms_media VALUES("283","./uploads/6158ebba26deccb9088fef467d1b70f4.jpg","t");
INSERT INTO cms_media VALUES("284","./uploads/533f402370d96ec6b7b61cc5ac5c2105.jpg","i");
INSERT INTO cms_media VALUES("285","http://www.youtube.com/watch?feature=player_embedded&v=m4cgLL8JaVI","v");
INSERT INTO cms_media VALUES("286","./uploads/6158ebba26deccb9088fef467d1b70f4.jpg","t");
INSERT INTO cms_media VALUES("287","./uploads/533f402370d96ec6b7b61cc5ac5c2105.jpg","i");
INSERT INTO cms_media VALUES("288","http://www.youtube.com/watch?feature=player_embedded&v=m4cgLL8JaVI","v");
INSERT INTO cms_media VALUES("289","./uploads/6158ebba26deccb9088fef467d1b70f4.jpg","t");
INSERT INTO cms_media VALUES("290","./uploads/533f402370d96ec6b7b61cc5ac5c2105.jpg","i");
INSERT INTO cms_media VALUES("291","http://www.youtube.com/watch?feature=player_embedded&v=m4cgLL8JaVI","v");
INSERT INTO cms_media VALUES("292","./uploads/d0bf91a1201000f45d4388cf63b95cc3.jpg","t");
INSERT INTO cms_media VALUES("293","http://www.youtube.com/watch?v=m4cgLL8JaVI&feature=player_embedded","v");
INSERT INTO cms_media VALUES("294","./uploads/d0bf91a1201000f45d4388cf63b95cc3.jpg","t");
INSERT INTO cms_media VALUES("295","./uploads/9b5b735eb68f544782ef7d0ac429d929.jpg","i");
INSERT INTO cms_media VALUES("296","http://www.youtube.com/watch?v=m4cgLL8JaVI&feature=player_embedded","v");
INSERT INTO cms_media VALUES("297","./uploads/d0bf91a1201000f45d4388cf63b95cc3.jpg","t");
INSERT INTO cms_media VALUES("298","./uploads/9b5b735eb68f544782ef7d0ac429d929.jpg","i");
INSERT INTO cms_media VALUES("299","http://www.youtube.com/watch?v=m4cgLL8JaVI&feature=player_embedded","v");
INSERT INTO cms_media VALUES("300","./uploads/d0bf91a1201000f45d4388cf63b95cc3.jpg","t");
INSERT INTO cms_media VALUES("301","./uploads/9b5b735eb68f544782ef7d0ac429d929.jpg","i");
INSERT INTO cms_media VALUES("302","./uploads/d0bf91a1201000f45d4388cf63b95cc3.jpg","t");
INSERT INTO cms_media VALUES("303","./uploads/9b5b735eb68f544782ef7d0ac429d929.jpg","i");
INSERT INTO cms_media VALUES("304","./uploads/d0bf91a1201000f45d4388cf63b95cc3.jpg","t");
INSERT INTO cms_media VALUES("305","./uploads/9b5b735eb68f544782ef7d0ac429d929.jpg","i");
INSERT INTO cms_media VALUES("306","http://www.youtube.com/watch?v=m4cgLL8JaVI&feature=player_embedded","v");
INSERT INTO cms_media VALUES("307","./uploads/d0bf91a1201000f45d4388cf63b95cc3.jpg","t");
INSERT INTO cms_media VALUES("308","./uploads/9b5b735eb68f544782ef7d0ac429d929.jpg","i");
INSERT INTO cms_media VALUES("309","http://www.youtube.com/watch?v=m4cgLL8JaVI&feature=player_embedded","v");
INSERT INTO cms_media VALUES("310","./uploads/a2a63d966f9b8574bf4b57d51a179677.jpg","t");
INSERT INTO cms_media VALUES("311","http://www.youtube.com/watch?v=m4cgLL8JaVI&feature=player_embedded","v");
INSERT INTO cms_media VALUES("312","./uploads/a2a63d966f9b8574bf4b57d51a179677.jpg","t");
INSERT INTO cms_media VALUES("313","./uploads/265c1dd5ae7374221e048ceef9a0c19e.jpg","i");
INSERT INTO cms_media VALUES("314","http://www.youtube.com/watch?v=m4cgLL8JaVI&feature=player_embedded","v");
INSERT INTO cms_media VALUES("315","./uploads/77fe8f674a3bb8e219375ff652ec0acf.jpg","i");
INSERT INTO cms_media VALUES("316","./uploads/f2faf21905145eda91cc60da13100fe7.jpg","i");
INSERT INTO cms_media VALUES("317","http://youtu.be/CwLWzNiUNrQ","v");
INSERT INTO cms_media VALUES("318","./uploads/2518989b55e6ba2e17f25d90835a15cf.png","i");
INSERT INTO cms_media VALUES("319","./uploads/4cbe6bb8bffbbd8532aead24f546d69f.pdf","f");
INSERT INTO cms_media VALUES("320","http://youtu.be/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("321","//www.youtube.com/embed/CwLWzNiUNrQ","v");
INSERT INTO cms_media VALUES("322","./uploads/","f");
INSERT INTO cms_media VALUES("323","//www.youtube.com/embed/CwLWzNiUNrQ","v");
INSERT INTO cms_media VALUES("324","./uploads/","f");
INSERT INTO cms_media VALUES("325","//www.youtube.com/embed/CwLWzNiUNrQ","v");
INSERT INTO cms_media VALUES("326","./uploads/","f");
INSERT INTO cms_media VALUES("327","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("328","./uploads/","f");
INSERT INTO cms_media VALUES("329","./uploads/23d14423682104430584a9519a8cc234.png","i");
INSERT INTO cms_media VALUES("330","./uploads/900cdfa19775b6f42dd098a590d0f53b.pdf","f");
INSERT INTO cms_media VALUES("331","./uploads/23d14423682104430584a9519a8cc234.png","i");
INSERT INTO cms_media VALUES("332","./uploads/900cdfa19775b6f42dd098a590d0f53b.pdf","f");
INSERT INTO cms_media VALUES("335","./uploads/a2a63d966f9b8574bf4b57d51a179677.jpg","t");
INSERT INTO cms_media VALUES("336","./uploads/265c1dd5ae7374221e048ceef9a0c19e.jpg","i");
INSERT INTO cms_media VALUES("337","http://www.youtube.com/watch?v=m4cgLL8JaVI&feature=player_embedded","v");
INSERT INTO cms_media VALUES("338","./uploads/785d4490b72f31c1b2c1abda4c0a4796.png","i");
INSERT INTO cms_media VALUES("339","./uploads/b2e56c7c3c60b7d9ab698d3fa6bc184c.png","i");
INSERT INTO cms_media VALUES("340","./uploads/19da444fe56676eec614906c53c21b66.png","i");
INSERT INTO cms_media VALUES("341","./uploads/b118c348dcc3b71958bad3613ea5f9b6.png","i");
INSERT INTO cms_media VALUES("350","http://www.youtube.com/watch?v=eUzk3cOKn70","v");
INSERT INTO cms_media VALUES("351","./uploads/e027f88064eb1d8add79d1afa95eb832.pdf","f");
INSERT INTO cms_media VALUES("352","http://youtu.be/eUzk3cOKn70","v");
INSERT INTO cms_media VALUES("353","./uploads/","f");
INSERT INTO cms_media VALUES("354","www.youtube.com/embed/eUzk3cOKn70","v");
INSERT INTO cms_media VALUES("355","./uploads/","f");
INSERT INTO cms_media VALUES("356","//www.youtube.com/embed/eUzk3cOKn70","v");
INSERT INTO cms_media VALUES("357","./uploads/","f");
INSERT INTO cms_media VALUES("358","//www.youtube.com/embed/eUzk3cOKn70","v");
INSERT INTO cms_media VALUES("359","./uploads/934cf22b3b5504b7442efd4f602780ed.pdf","f");
INSERT INTO cms_media VALUES("360","./uploads/23d14423682104430584a9519a8cc234.png","i");
INSERT INTO cms_media VALUES("361","./uploads/900cdfa19775b6f42dd098a590d0f53b.pdf","f");
INSERT INTO cms_media VALUES("362","./uploads/a2a63d966f9b8574bf4b57d51a179677.jpg","t");
INSERT INTO cms_media VALUES("363","./uploads/265c1dd5ae7374221e048ceef9a0c19e.jpg","i");
INSERT INTO cms_media VALUES("364","http://www.youtube.com/watch?v=m4cgLL8JaVI&feature=player_embedded","v");
INSERT INTO cms_media VALUES("365","./uploads/50a7459d3a2590dae701baff9b3b62d3.png","t");
INSERT INTO cms_media VALUES("366","./uploads/219c0d05277562f16ebec52a89bf9c87.jpg","i");
INSERT INTO cms_media VALUES("367","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("368","./uploads/6c3f308ec33997a3aa55094441ef30a5.jpg","t");
INSERT INTO cms_media VALUES("369","./uploads/93520fbb88da113a27a93db754553415.jpg","i");
INSERT INTO cms_media VALUES("370","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("371","./uploads/d36fe92d22f9b1d850b081b8c7adb321.jpg","t");
INSERT INTO cms_media VALUES("372","./uploads/d45358d39c5ae162523f4a1449bca05e.jpg","i");
INSERT INTO cms_media VALUES("373","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("374","./uploads/d36fe92d22f9b1d850b081b8c7adb321.jpg","t");
INSERT INTO cms_media VALUES("375","./uploads/d45358d39c5ae162523f4a1449bca05e.jpg","i");
INSERT INTO cms_media VALUES("376","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("377","./uploads/d36fe92d22f9b1d850b081b8c7adb321.jpg","t");
INSERT INTO cms_media VALUES("378","./uploads/d45358d39c5ae162523f4a1449bca05e.jpg","i");
INSERT INTO cms_media VALUES("379","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("380","./uploads/a6e69090d4335cc8ed508e5aef8459c8.jpg","t");
INSERT INTO cms_media VALUES("381","./uploads/8825b134b262e4b5ab2f3af12ef65e00.jpg","t");
INSERT INTO cms_media VALUES("382","./uploads/d36fe92d22f9b1d850b081b8c7adb321.jpg","t");
INSERT INTO cms_media VALUES("383","./uploads/d45358d39c5ae162523f4a1449bca05e.jpg","i");
INSERT INTO cms_media VALUES("384","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("385","./uploads/a2a63d966f9b8574bf4b57d51a179677.jpg","t");
INSERT INTO cms_media VALUES("386","./uploads/265c1dd5ae7374221e048ceef9a0c19e.jpg","i");
INSERT INTO cms_media VALUES("387","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("388","./uploads/a2a63d966f9b8574bf4b57d51a179677.jpg","t");
INSERT INTO cms_media VALUES("389","./uploads/265c1dd5ae7374221e048ceef9a0c19e.jpg","i");
INSERT INTO cms_media VALUES("390","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("391","./uploads/d36fe92d22f9b1d850b081b8c7adb321.jpg","t");
INSERT INTO cms_media VALUES("392","./uploads/d45358d39c5ae162523f4a1449bca05e.jpg","i");
INSERT INTO cms_media VALUES("393","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("394","./uploads/a2a63d966f9b8574bf4b57d51a179677.jpg","t");
INSERT INTO cms_media VALUES("395","./uploads/265c1dd5ae7374221e048ceef9a0c19e.jpg","i");
INSERT INTO cms_media VALUES("396","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("397","./uploads/a2a63d966f9b8574bf4b57d51a179677.jpg","t");
INSERT INTO cms_media VALUES("398","./uploads/265c1dd5ae7374221e048ceef9a0c19e.jpg","i");
INSERT INTO cms_media VALUES("399","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("400","./uploads/a2a63d966f9b8574bf4b57d51a179677.jpg","t");
INSERT INTO cms_media VALUES("401","./uploads/265c1dd5ae7374221e048ceef9a0c19e.jpg","i");
INSERT INTO cms_media VALUES("402","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("403","./uploads/8825b134b262e4b5ab2f3af12ef65e00.jpg","t");
INSERT INTO cms_media VALUES("404","./uploads/c42b8d2b0beb390151e090cadb7d8390.jpg","t");
INSERT INTO cms_media VALUES("405","./uploads/61baaed82d280b964562b9585da783a3.jpg","t");
INSERT INTO cms_media VALUES("406","./uploads/575869b53d06735f9634f28a5018d830.jpg","t");
INSERT INTO cms_media VALUES("409","./uploads/8825b134b262e4b5ab2f3af12ef65e00.jpg","t");
INSERT INTO cms_media VALUES("410","./uploads/425b43ff809bba8964bc28b2ebb8c786.jpg","t");
INSERT INTO cms_media VALUES("412","./uploads/c42b8d2b0beb390151e090cadb7d8390.jpg","t");
INSERT INTO cms_media VALUES("416","./uploads/cb01f7b07d78e880de5873b917911d6c.jpg","i");
INSERT INTO cms_media VALUES("417","//www.youtube.com/embed/K3lJGzNckjg","v");
INSERT INTO cms_media VALUES("418","./uploads/c4e37aa1bc9419531732c59a561d20d8.pdf","f");
INSERT INTO cms_media VALUES("419","//www.youtube.com/embed/k6ACBbys0RY","v");
INSERT INTO cms_media VALUES("420","./uploads/705743ea0f9f8c8fa31bbbb8aa6698ee.pdf","f");
INSERT INTO cms_media VALUES("421","//www.youtube.com/embed/4kFf696CBvQ","v");
INSERT INTO cms_media VALUES("422","./uploads/0b0166674d43db110dd4e06eadec69f8.pdf","f");
INSERT INTO cms_media VALUES("423","./uploads/d4cdc81173df585c02c39e1947ec7ede.jpg","t");
INSERT INTO cms_media VALUES("424","./uploads/77ddfb754c1c648ec7af2b3ed959c6df.jpg","i");
INSERT INTO cms_media VALUES("425","//www.youtube.com/embed/5rfm_WKTC2M","v");
INSERT INTO cms_media VALUES("426","./uploads/d4cdc81173df585c02c39e1947ec7ede.jpg","t");
INSERT INTO cms_media VALUES("427","./uploads/77ddfb754c1c648ec7af2b3ed959c6df.jpg","i");
INSERT INTO cms_media VALUES("428","//www.youtube.com/embed/5rfm_WKTC2M","v");
INSERT INTO cms_media VALUES("436","./uploads/d36fe92d22f9b1d850b081b8c7adb321.jpg","t");
INSERT INTO cms_media VALUES("437","./uploads/d45358d39c5ae162523f4a1449bca05e.jpg","i");
INSERT INTO cms_media VALUES("438","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("442","./uploads/d36fe92d22f9b1d850b081b8c7adb321.jpg","t");
INSERT INTO cms_media VALUES("443","./uploads/d45358d39c5ae162523f4a1449bca05e.jpg","i");
INSERT INTO cms_media VALUES("444","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("448","./uploads/d4cdc81173df585c02c39e1947ec7ede.jpg","t");
INSERT INTO cms_media VALUES("449","./uploads/77ddfb754c1c648ec7af2b3ed959c6df.jpg","i");
INSERT INTO cms_media VALUES("450","//www.youtube.com/embed/5rfm_WKTC2M","v");
INSERT INTO cms_media VALUES("451","./uploads/160eeeac6be17ed412f9e91e092db5b2.jpg","t");
INSERT INTO cms_media VALUES("452","./uploads/c498be27b12d3653490547ca2096457b.jpg","i");
INSERT INTO cms_media VALUES("453","//www.youtube.com/embed/CwLWzNiUNrQ","v");
INSERT INTO cms_media VALUES("457","./uploads/d4cdc81173df585c02c39e1947ec7ede.jpg","t");
INSERT INTO cms_media VALUES("458","./uploads/77ddfb754c1c648ec7af2b3ed959c6df.jpg","i");
INSERT INTO cms_media VALUES("459","//www.youtube.com/embed/5rfm_WKTC2M","v");
INSERT INTO cms_media VALUES("463","./uploads/a30455e6dceff4684d68d1117ae49549.jpg","t");
INSERT INTO cms_media VALUES("464","./uploads/b5d91930234048c3f4ef7b0137511850.png","i");
INSERT INTO cms_media VALUES("465","./uploads/37aa9baedec61ca8f85124a88d9cab99.jpg","t");
INSERT INTO cms_media VALUES("466","./uploads/d14c9f5e743024d4a4cb5eadf6a821d8.png","i");
INSERT INTO cms_media VALUES("467","./uploads/17c111ad64340c289cab215e286649bc.jpg","t");
INSERT INTO cms_media VALUES("468","./uploads/64ac32d1a3adf166351da9b65ebcdd8a.jpg","i");
INSERT INTO cms_media VALUES("469","./uploads/7dc537ac96069947b58a898a36984fcf.jpg","t");
INSERT INTO cms_media VALUES("470","./uploads/ee3d5f9de9eb9c594b1e89e406eaaf1c.jpg","i");
INSERT INTO cms_media VALUES("474","./uploads/9c2a085bdd475f087fc1fe4baa69e67b.jpg","i");
INSERT INTO cms_media VALUES("475","./uploads/7478f00c6884b93a4c66ba39e66db488.pdf","f");
INSERT INTO cms_media VALUES("476","./uploads/9c2a085bdd475f087fc1fe4baa69e67b.jpg","i");
INSERT INTO cms_media VALUES("477","./uploads/7478f00c6884b93a4c66ba39e66db488.pdf","f");
INSERT INTO cms_media VALUES("480","./uploads/2558e09d5d7e49c119c45db23da74d7c.png","i");
INSERT INTO cms_media VALUES("484","./uploads/2f60d0a80a04e49390bff14729c0d2f8.jpg","t");
INSERT INTO cms_media VALUES("485","./uploads/fe291cc3e27833197ea3883be0d5ccfb.JPG","t");
INSERT INTO cms_media VALUES("486","./uploads/607f55ced9e2b3339143cf4ecbf89726.JPG","i");
INSERT INTO cms_media VALUES("487","./uploads/c020e0cf07f7a30fa58dfe8e014e134c.jpg","t");
INSERT INTO cms_media VALUES("488","./uploads/6e4518bd9e79094027e25d35380ea7e8.JPG","t");
INSERT INTO cms_media VALUES("489","./uploads/44f72d2e0a40ec08ef93a1ab98516e0a.JPG","i");
INSERT INTO cms_media VALUES("490","./uploads/9701fbf31163e00d134ec728b45580b1.png","t");
INSERT INTO cms_media VALUES("491","./uploads/b3418b396de739c1d59fa1d8267fd978.png","t");
INSERT INTO cms_media VALUES("492","./uploads/88622680fb405993b3a2214e01cee8ba.png","i");
INSERT INTO cms_media VALUES("493","./uploads/4c0a70caf5f1d45ece6b5fec82c76754.jpg","t");
INSERT INTO cms_media VALUES("494","./uploads/793f8cac94f244c975d78b3c9c3a00a9.JPG","t");
INSERT INTO cms_media VALUES("495","./uploads/76c17912c5be1dcbc58b49b45a09ea06.JPG","i");
INSERT INTO cms_media VALUES("496","./uploads/b55e64d190f14b1d9d63856808e57a5a.jpg","t");
INSERT INTO cms_media VALUES("497","./uploads/e587c79a732452d6362198e7b51097ad.JPG","t");
INSERT INTO cms_media VALUES("498","./uploads/ca3a10e3ca139471024a03b501e9e2e5.JPG","i");
INSERT INTO cms_media VALUES("501","./uploads/e2f2b556b7031bc4e7ab12c8ccb48466.JPG","i");
INSERT INTO cms_media VALUES("502","./uploads/6db83f7dc37762c577692c485e1b8ff8.jpg","t");
INSERT INTO cms_media VALUES("503","./uploads/f48909c6a861f6107544d58909d38056.JPG","t");
INSERT INTO cms_media VALUES("504","./uploads/dc9d81600c95589233dec882aafff347.JPG","i");
INSERT INTO cms_media VALUES("505","./uploads/0c9f07d254d2e34f2838f6ad290d6958.jpg","t");
INSERT INTO cms_media VALUES("506","./uploads/583834961c8797aa88804098b39e9ffa.JPG","t");
INSERT INTO cms_media VALUES("507","./uploads/410a06cde1cfcbf2130f7fc0fc7eb7d5.JPG","i");
INSERT INTO cms_media VALUES("508","./uploads/d17a988d7ae040dcc69db6ed2f7e0335.jpg","t");
INSERT INTO cms_media VALUES("509","./uploads/32d99c3266ca5f1b6eb52358c2dc7078.JPG","t");
INSERT INTO cms_media VALUES("510","./uploads/876b51842ba116a88d4dcc34d594e1ad.JPG","i");
INSERT INTO cms_media VALUES("511","./uploads/c4b511fc632653ddbeba9e240fac7f05.jpg","t");
INSERT INTO cms_media VALUES("512","./uploads/e450cec7ff9aef8e5f030b96061780df.JPG","t");
INSERT INTO cms_media VALUES("513","./uploads/12c879825cbb4e69fa3672411fac5d65.JPG","i");
INSERT INTO cms_media VALUES("516","./uploads/6cd5b3696eb1cdd51ebe10b7ee2720b7.JPG","i");
INSERT INTO cms_media VALUES("517","./uploads/47255f9616514b9efaa4b28f06a93647.jpg","t");
INSERT INTO cms_media VALUES("518","./uploads/d3e0191a4bc13d1e715b04b2f05cb223.JPG","t");
INSERT INTO cms_media VALUES("519","./uploads/c184eed784639d40741e63f40247082f.JPG","i");
INSERT INTO cms_media VALUES("520","./uploads/4c769b0fb98f8f699231151a1f6d0931.jpg","t");
INSERT INTO cms_media VALUES("521","./uploads/9361b9548eca3671ac96d5e8007ad6ee.JPG","t");
INSERT INTO cms_media VALUES("522","./uploads/5eb5758924c4fd0eef492e34604da5d6.JPG","i");
INSERT INTO cms_media VALUES("523","./uploads/c020e0cf07f7a30fa58dfe8e014e134c.jpg","t");
INSERT INTO cms_media VALUES("524","./uploads/6e4518bd9e79094027e25d35380ea7e8.JPG","t");
INSERT INTO cms_media VALUES("525","./uploads/44f72d2e0a40ec08ef93a1ab98516e0a.JPG","i");
INSERT INTO cms_media VALUES("526","./uploads/2f60d0a80a04e49390bff14729c0d2f8.jpg","t");
INSERT INTO cms_media VALUES("527","./uploads/fe291cc3e27833197ea3883be0d5ccfb.JPG","t");
INSERT INTO cms_media VALUES("528","./uploads/607f55ced9e2b3339143cf4ecbf89726.JPG","i");
INSERT INTO cms_media VALUES("529","./uploads/c020e0cf07f7a30fa58dfe8e014e134c.jpg","t");
INSERT INTO cms_media VALUES("530","./uploads/6e4518bd9e79094027e25d35380ea7e8.JPG","t");
INSERT INTO cms_media VALUES("531","./uploads/44f72d2e0a40ec08ef93a1ab98516e0a.JPG","i");
INSERT INTO cms_media VALUES("532","./uploads/2f60d0a80a04e49390bff14729c0d2f8.jpg","t");
INSERT INTO cms_media VALUES("533","./uploads/fe291cc3e27833197ea3883be0d5ccfb.JPG","t");
INSERT INTO cms_media VALUES("534","./uploads/607f55ced9e2b3339143cf4ecbf89726.JPG","i");
INSERT INTO cms_media VALUES("535","./uploads/fcf5d1035b6a7fafcd9c73acd9ea6f0a.jpg","t");
INSERT INTO cms_media VALUES("536","./uploads/c1fa198e39f90436548316ab0c28c3a3.pdf","f");
INSERT INTO cms_media VALUES("537","//www.youtube.com/embed/CwLWzNiUNrQ","v");
INSERT INTO cms_media VALUES("538","./uploads/c98f5272fb72948010b7dbb18d1878b2.pdf","f");
INSERT INTO cms_media VALUES("544","./uploads/a3574ccc6e054189c119766f84d0b234.jpg","t");
INSERT INTO cms_media VALUES("550","./uploads/2f60d0a80a04e49390bff14729c0d2f8.jpg","t");
INSERT INTO cms_media VALUES("551","./uploads/fe291cc3e27833197ea3883be0d5ccfb.JPG","t");
INSERT INTO cms_media VALUES("552","./uploads/607f55ced9e2b3339143cf4ecbf89726.JPG","i");
INSERT INTO cms_media VALUES("553","./uploads/c020e0cf07f7a30fa58dfe8e014e134c.jpg","t");
INSERT INTO cms_media VALUES("554","./uploads/6e4518bd9e79094027e25d35380ea7e8.JPG","t");
INSERT INTO cms_media VALUES("555","./uploads/44f72d2e0a40ec08ef93a1ab98516e0a.JPG","i");
INSERT INTO cms_media VALUES("556","./uploads/a56f199a554ab5387167fa16f2424f0b.jpg","t");
INSERT INTO cms_media VALUES("557","./uploads/c6a5759ed922b559696e578ffa0e19c2.pdf","f");
INSERT INTO cms_media VALUES("558","./uploads/c020e0cf07f7a30fa58dfe8e014e134c.jpg","t");
INSERT INTO cms_media VALUES("559","./uploads/6e4518bd9e79094027e25d35380ea7e8.JPG","t");
INSERT INTO cms_media VALUES("560","./uploads/44f72d2e0a40ec08ef93a1ab98516e0a.JPG","i");
INSERT INTO cms_media VALUES("561","./uploads/c020e0cf07f7a30fa58dfe8e014e134c.jpg","t");
INSERT INTO cms_media VALUES("562","./uploads/6e4518bd9e79094027e25d35380ea7e8.JPG","t");
INSERT INTO cms_media VALUES("563","./uploads/44f72d2e0a40ec08ef93a1ab98516e0a.JPG","i");
INSERT INTO cms_media VALUES("564","./uploads/2f60d0a80a04e49390bff14729c0d2f8.jpg","t");
INSERT INTO cms_media VALUES("565","./uploads/fe291cc3e27833197ea3883be0d5ccfb.JPG","t");
INSERT INTO cms_media VALUES("566","./uploads/607f55ced9e2b3339143cf4ecbf89726.JPG","i");
INSERT INTO cms_media VALUES("567","./uploads/9701fbf31163e00d134ec728b45580b1.png","t");
INSERT INTO cms_media VALUES("568","./uploads/b3418b396de739c1d59fa1d8267fd978.png","t");
INSERT INTO cms_media VALUES("569","./uploads/88622680fb405993b3a2214e01cee8ba.png","i");
INSERT INTO cms_media VALUES("570","./uploads/4c769b0fb98f8f699231151a1f6d0931.jpg","t");
INSERT INTO cms_media VALUES("571","./uploads/9361b9548eca3671ac96d5e8007ad6ee.JPG","t");
INSERT INTO cms_media VALUES("572","./uploads/5eb5758924c4fd0eef492e34604da5d6.JPG","i");
INSERT INTO cms_media VALUES("573","./uploads/0c9f07d254d2e34f2838f6ad290d6958.jpg","t");
INSERT INTO cms_media VALUES("574","./uploads/583834961c8797aa88804098b39e9ffa.JPG","t");
INSERT INTO cms_media VALUES("575","./uploads/410a06cde1cfcbf2130f7fc0fc7eb7d5.JPG","i");
INSERT INTO cms_media VALUES("576","./uploads/4c0a70caf5f1d45ece6b5fec82c76754.jpg","t");
INSERT INTO cms_media VALUES("577","./uploads/793f8cac94f244c975d78b3c9c3a00a9.JPG","t");
INSERT INTO cms_media VALUES("578","./uploads/76c17912c5be1dcbc58b49b45a09ea06.JPG","i");
INSERT INTO cms_media VALUES("579","./uploads/c4b511fc632653ddbeba9e240fac7f05.jpg","t");
INSERT INTO cms_media VALUES("580","./uploads/e450cec7ff9aef8e5f030b96061780df.JPG","t");
INSERT INTO cms_media VALUES("581","./uploads/12c879825cbb4e69fa3672411fac5d65.JPG","i");
INSERT INTO cms_media VALUES("582","./uploads/47255f9616514b9efaa4b28f06a93647.jpg","t");
INSERT INTO cms_media VALUES("583","./uploads/d3e0191a4bc13d1e715b04b2f05cb223.JPG","t");
INSERT INTO cms_media VALUES("584","./uploads/c184eed784639d40741e63f40247082f.JPG","i");
INSERT INTO cms_media VALUES("587","./uploads/876b51842ba116a88d4dcc34d594e1ad.JPG","i");
INSERT INTO cms_media VALUES("588","./uploads/6db83f7dc37762c577692c485e1b8ff8.jpg","t");
INSERT INTO cms_media VALUES("589","./uploads/f48909c6a861f6107544d58909d38056.JPG","t");
INSERT INTO cms_media VALUES("590","./uploads/dc9d81600c95589233dec882aafff347.JPG","i");
INSERT INTO cms_media VALUES("591","./uploads/b55e64d190f14b1d9d63856808e57a5a.jpg","t");
INSERT INTO cms_media VALUES("592","./uploads/e587c79a732452d6362198e7b51097ad.JPG","t");
INSERT INTO cms_media VALUES("593","./uploads/ca3a10e3ca139471024a03b501e9e2e5.JPG","i");
INSERT INTO cms_media VALUES("594","./uploads/6db83f7dc37762c577692c485e1b8ff8.jpg","t");
INSERT INTO cms_media VALUES("595","./uploads/f48909c6a861f6107544d58909d38056.JPG","t");
INSERT INTO cms_media VALUES("596","./uploads/dc9d81600c95589233dec882aafff347.JPG","i");
INSERT INTO cms_media VALUES("597","./uploads/4c0a70caf5f1d45ece6b5fec82c76754.jpg","t");
INSERT INTO cms_media VALUES("598","./uploads/793f8cac94f244c975d78b3c9c3a00a9.JPG","t");
INSERT INTO cms_media VALUES("599","./uploads/76c17912c5be1dcbc58b49b45a09ea06.JPG","i");
INSERT INTO cms_media VALUES("600","./uploads/9701fbf31163e00d134ec728b45580b1.png","t");
INSERT INTO cms_media VALUES("601","./uploads/b3418b396de739c1d59fa1d8267fd978.png","t");
INSERT INTO cms_media VALUES("602","./uploads/88622680fb405993b3a2214e01cee8ba.png","i");
INSERT INTO cms_media VALUES("603","./uploads/c020e0cf07f7a30fa58dfe8e014e134c.jpg","t");
INSERT INTO cms_media VALUES("604","./uploads/6e4518bd9e79094027e25d35380ea7e8.JPG","t");
INSERT INTO cms_media VALUES("605","./uploads/44f72d2e0a40ec08ef93a1ab98516e0a.JPG","i");
INSERT INTO cms_media VALUES("606","./uploads/4c0a70caf5f1d45ece6b5fec82c76754.jpg","t");
INSERT INTO cms_media VALUES("607","./uploads/793f8cac94f244c975d78b3c9c3a00a9.JPG","t");
INSERT INTO cms_media VALUES("608","./uploads/76c17912c5be1dcbc58b49b45a09ea06.JPG","i");
INSERT INTO cms_media VALUES("609","./uploads/b55e64d190f14b1d9d63856808e57a5a.jpg","t");
INSERT INTO cms_media VALUES("610","./uploads/e587c79a732452d6362198e7b51097ad.JPG","t");
INSERT INTO cms_media VALUES("611","./uploads/ca3a10e3ca139471024a03b501e9e2e5.JPG","i");
INSERT INTO cms_media VALUES("612","./uploads/0c9f07d254d2e34f2838f6ad290d6958.jpg","t");
INSERT INTO cms_media VALUES("613","./uploads/583834961c8797aa88804098b39e9ffa.JPG","t");
INSERT INTO cms_media VALUES("614","./uploads/410a06cde1cfcbf2130f7fc0fc7eb7d5.JPG","i");
INSERT INTO cms_media VALUES("615","./uploads/c4b511fc632653ddbeba9e240fac7f05.jpg","t");
INSERT INTO cms_media VALUES("616","./uploads/e450cec7ff9aef8e5f030b96061780df.JPG","t");
INSERT INTO cms_media VALUES("617","./uploads/12c879825cbb4e69fa3672411fac5d65.JPG","i");
INSERT INTO cms_media VALUES("618","./uploads/3ff3833ea70bb6c4f849cd6ec2212d00.png","i");
INSERT INTO cms_media VALUES("619","./uploads/85fa32b847275ca43e42b3c2d439e74e.png","i");
INSERT INTO cms_media VALUES("620","./uploads/ef01c7dfd7b9905f35d0142cf19c3c1e.png","i");
INSERT INTO cms_media VALUES("621","./uploads/85fa32b847275ca43e42b3c2d439e74e.png","i");
INSERT INTO cms_media VALUES("622","./uploads/3ff3833ea70bb6c4f849cd6ec2212d00.png","i");
INSERT INTO cms_media VALUES("623","./uploads/6b0a12330f0b20c2ef5222e2fcff9282.jpg","t");
INSERT INTO cms_media VALUES("624","./uploads/558e6f751ef454f7d9a05a98f969e1c1.jpg","t");
INSERT INTO cms_media VALUES("625","./uploads/990cf82341b26f99df5a475cdc85e011.jpg","i");
INSERT INTO cms_media VALUES("626","./uploads/6b0a12330f0b20c2ef5222e2fcff9282.jpg","t");
INSERT INTO cms_media VALUES("627","./uploads/558e6f751ef454f7d9a05a98f969e1c1.jpg","t");
INSERT INTO cms_media VALUES("628","./uploads/990cf82341b26f99df5a475cdc85e011.jpg","i");
INSERT INTO cms_media VALUES("629","./uploads/6b0a12330f0b20c2ef5222e2fcff9282.jpg","t");
INSERT INTO cms_media VALUES("630","./uploads/558e6f751ef454f7d9a05a98f969e1c1.jpg","t");
INSERT INTO cms_media VALUES("631","./uploads/990cf82341b26f99df5a475cdc85e011.jpg","i");
INSERT INTO cms_media VALUES("632","./uploads/6b0a12330f0b20c2ef5222e2fcff9282.jpg","t");
INSERT INTO cms_media VALUES("633","./uploads/558e6f751ef454f7d9a05a98f969e1c1.jpg","t");
INSERT INTO cms_media VALUES("634","./uploads/990cf82341b26f99df5a475cdc85e011.jpg","i");
INSERT INTO cms_media VALUES("637","./uploads/990cf82341b26f99df5a475cdc85e011.jpg","i");
INSERT INTO cms_media VALUES("638","./uploads/cb753ca34b7630113aa93fa95e0b980c.jpg","t");
INSERT INTO cms_media VALUES("639","./uploads/fcf5d1035b6a7fafcd9c73acd9ea6f0a.jpg","t");
INSERT INTO cms_media VALUES("640","./uploads/c1fa198e39f90436548316ab0c28c3a3.pdf","f");
INSERT INTO cms_media VALUES("641","./uploads/fcf5d1035b6a7fafcd9c73acd9ea6f0a.jpg","t");
INSERT INTO cms_media VALUES("642","./uploads/c1fa198e39f90436548316ab0c28c3a3.pdf","f");
INSERT INTO cms_media VALUES("643","./uploads/ab65f2f4ca73867c19364a8ff3538ca5.jpg","t");
INSERT INTO cms_media VALUES("644","./uploads/c1fa198e39f90436548316ab0c28c3a3.pdf","f");
INSERT INTO cms_media VALUES("645","./uploads/ab65f2f4ca73867c19364a8ff3538ca5.jpg","t");
INSERT INTO cms_media VALUES("646","./uploads/c1fa198e39f90436548316ab0c28c3a3.pdf","f");
INSERT INTO cms_media VALUES("647","./uploads/6fc5b7ef58c6706a04d2828801b0e5b5.jpg","t");
INSERT INTO cms_media VALUES("648","./uploads/be0c4f45004766c7546f1e384797db80.jpg","t");
INSERT INTO cms_media VALUES("649","./uploads/6fc5b7ef58c6706a04d2828801b0e5b5.jpg","t");
INSERT INTO cms_media VALUES("650","./uploads/be0c4f45004766c7546f1e384797db80.jpg","t");
INSERT INTO cms_media VALUES("653","./uploads/c782e6336e9e3aad3a21de4f8374159f.jpg","t");
INSERT INTO cms_media VALUES("654","./uploads/c11d0621aee6a4c86b14c74992340b87.pdf","f");
INSERT INTO cms_media VALUES("655","./uploads/a56f199a554ab5387167fa16f2424f0b.jpg","t");
INSERT INTO cms_media VALUES("656","./uploads/c6a5759ed922b559696e578ffa0e19c2.pdf","f");
INSERT INTO cms_media VALUES("657","./uploads/a56f199a554ab5387167fa16f2424f0b.jpg","t");
INSERT INTO cms_media VALUES("658","./uploads/c6a5759ed922b559696e578ffa0e19c2.pdf","f");
INSERT INTO cms_media VALUES("659","./uploads/c782e6336e9e3aad3a21de4f8374159f.jpg","t");
INSERT INTO cms_media VALUES("660","./uploads/c11d0621aee6a4c86b14c74992340b87.pdf","f");
INSERT INTO cms_media VALUES("661","./uploads/6c2cc17df5dbf2604c390753cfa143e8.jpg","t");
INSERT INTO cms_media VALUES("662","./uploads/f613b459098e09d7032d27ba9634ddeb.pdf","f");
INSERT INTO cms_media VALUES("663","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("664","./uploads/","f");
INSERT INTO cms_media VALUES("665","//www.youtube.com/embed/nh5rpOab4C8","v");
INSERT INTO cms_media VALUES("666","./uploads/","f");
INSERT INTO cms_media VALUES("667","./uploads/6478806a6cf5b33f3430cb71561b3adf.png","t");
INSERT INTO cms_media VALUES("668","./uploads/0cfe4047c49154c517cbc3e21fd0f574.pdf","f");
INSERT INTO cms_media VALUES("669","./uploads/6478806a6cf5b33f3430cb71561b3adf.png","t");
INSERT INTO cms_media VALUES("670","./uploads/0cfe4047c49154c517cbc3e21fd0f574.pdf","f");
INSERT INTO cms_media VALUES("673","http://www.youtube.com/watch?v=VskCtHewv5w","v");
INSERT INTO cms_media VALUES("674","./uploads/a6cc795fef26712627d6ab8dbda90282.pdf","f");
INSERT INTO cms_media VALUES("675","//www.youtube.com/embed/VskCtHewv5w","v");
INSERT INTO cms_media VALUES("676","./uploads/","f");
INSERT INTO cms_media VALUES("677","//www.youtube.com/embed/VskCtHewv5w","v");
INSERT INTO cms_media VALUES("678","./uploads/13de7edc3f5ee6363de5e57a74245f62.pdf","f");
INSERT INTO cms_media VALUES("679","//www.youtube.com/embed/nh5rpOab4C8","v");
INSERT INTO cms_media VALUES("680","./uploads/ae256fe5af4f1ef4e39e973694bff9de.pdf","f");
INSERT INTO cms_media VALUES("684","./uploads/19da444fe56676eec614906c53c21b66.png","i");
INSERT INTO cms_media VALUES("685","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("686","./uploads/2d6210423bbb98d940cca09c3d1eeef1.jpg","t");
INSERT INTO cms_media VALUES("687","./uploads/f1ed6ebe2b73f1157271cfac2458c38d.jpg","t");
INSERT INTO cms_media VALUES("688","./uploads/9023eb379138e0b1dc65310e70646524.jpg","t");
INSERT INTO cms_media VALUES("689","./uploads/949a6931974ab59283fa30d6ad5634e8.jpg","t");
INSERT INTO cms_media VALUES("690","./uploads/efff4b921f9fe03e77db6382b7e8bfa7.jpg","t");
INSERT INTO cms_media VALUES("691","./uploads/5bc9c645a5eb4e2d32e0c433de026d09.pdf","f");
INSERT INTO cms_media VALUES("692","./uploads/5b848e71b9c09ebd3d9fa5be13a5df6c.jpg","t");
INSERT INTO cms_media VALUES("693","./uploads/2355bf1aebe5f5d1f6b537b2223c24d6.pdf","f");
INSERT INTO cms_media VALUES("694","./uploads/5b848e71b9c09ebd3d9fa5be13a5df6c.jpg","t");
INSERT INTO cms_media VALUES("695","./uploads/2355bf1aebe5f5d1f6b537b2223c24d6.pdf","f");
INSERT INTO cms_media VALUES("696","./uploads/5b848e71b9c09ebd3d9fa5be13a5df6c.jpg","t");
INSERT INTO cms_media VALUES("697","./uploads/11b90bf640a3bba1f7513d41f7bb7772.pdf","f");
INSERT INTO cms_media VALUES("698","./uploads/b8afa0d1607f388a04b527554e997364.jpg","i");
INSERT INTO cms_media VALUES("699","./uploads/4d040b83b44688267a2540cf7bf043ed.jpg","i");
INSERT INTO cms_media VALUES("701","./uploads/19da444fe56676eec614906c53c21b66.png","i");
INSERT INTO cms_media VALUES("702","./uploads/baf9e69fd447feca34361edb24538cc8.jpg","i");
INSERT INTO cms_media VALUES("704","./uploads/889ad62738031621288391012cd0319a.png","i");
INSERT INTO cms_media VALUES("708","./uploads/b455837535d60bf21da4864f78ab7d99.jpg","i");
INSERT INTO cms_media VALUES("711","./uploads/dd45615edae0820cc0ec0cd23c9ef389.png","t");
INSERT INTO cms_media VALUES("712","./uploads/dd45615edae0820cc0ec0cd23c9ef389.png","t");
INSERT INTO cms_media VALUES("716","./uploads/0bfdc267838248a56ca1753a909ffdc7.png","t");
INSERT INTO cms_media VALUES("717","./uploads/99561ebad6ff98a90083cb058d63d3e0.png","i");
INSERT INTO cms_media VALUES("718","//www.youtube.com/embed/Jj792bRQfVw","v");
INSERT INTO cms_media VALUES("722","./uploads/6cdfa78b6bdb8bbbabef7838d1c3f89d.JPG","t");
INSERT INTO cms_media VALUES("723","./uploads/04be5ef1199ccc2b817c1b5251854d10.png","i");
INSERT INTO cms_media VALUES("724","//www.youtube.com/embed/Jj792bRQfVw","v");
INSERT INTO cms_media VALUES("728","./uploads/ff630344edc7288e74edb8875437746d.jpg","t");
INSERT INTO cms_media VALUES("729","./uploads/c5ff476fd0208ca2ff8ceb72cae5d246.jpg","i");
INSERT INTO cms_media VALUES("730","hola mundo","v");
INSERT INTO cms_media VALUES("741","./uploads/f0ed0b3daf6ae226ed57691b91cae1f9.png","t");
INSERT INTO cms_media VALUES("742","./uploads/ffd26c5af914be75ca7699f4fac6adeb.png","t");
INSERT INTO cms_media VALUES("743","./uploads/9f398dfe07d37b66ab04431d99a92dc2.png","i");
INSERT INTO cms_media VALUES("746","./uploads/9f398dfe07d37b66ab04431d99a92dc2.png","i");
INSERT INTO cms_media VALUES("749","./uploads/8ee1f30275d578550899181c57301b20.png","i");
INSERT INTO cms_media VALUES("750","./uploads/ccb3c38a58bdc3a085f9a3967abf6f58.png","i");
INSERT INTO cms_media VALUES("753","./uploads/99a0366493faa15874cb8200226e2457.png","t");
INSERT INTO cms_media VALUES("756","./uploads/0fb97890f6b8092c0c6dd5b32832b654.png","t");
INSERT INTO cms_media VALUES("759","./uploads/42cd93fed4ffa51c5e4a163e606c3b32.png","i");
INSERT INTO cms_media VALUES("760","./uploads/c2751b696f0c594d326eebf7dc30de57.pdf","f");
INSERT INTO cms_media VALUES("761","./uploads/42cd93fed4ffa51c5e4a163e606c3b32.png","i");
INSERT INTO cms_media VALUES("762","./uploads/c2751b696f0c594d326eebf7dc30de57.pdf","f");
INSERT INTO cms_media VALUES("763","./uploads/42cd93fed4ffa51c5e4a163e606c3b32.png","i");
INSERT INTO cms_media VALUES("764","./uploads/c2751b696f0c594d326eebf7dc30de57.pdf","f");
INSERT INTO cms_media VALUES("769","dgfdgdg","v");
INSERT INTO cms_media VALUES("770","./uploads/6b46eece69a97ab6be8002effefd5b2c.pdf","f");
INSERT INTO cms_media VALUES("771","dgfdgdg","v");
INSERT INTO cms_media VALUES("772","./uploads/","f");
INSERT INTO cms_media VALUES("773","dgfdgdg","v");
INSERT INTO cms_media VALUES("774","./uploads/","f");
INSERT INTO cms_media VALUES("775","add desp. editar","v");
INSERT INTO cms_media VALUES("776","./uploads/4467414150a9b3dec36aeb9a1e3e03d1.pdf","f");
INSERT INTO cms_media VALUES("777","hola mundo","v");
INSERT INTO cms_media VALUES("778","./uploads/e352033957cdc5eb5c1e8883f03dac55.jpg","f");
INSERT INTO cms_media VALUES("779","fddfgdfgd","v");
INSERT INTO cms_media VALUES("780","./uploads/8ed043d4f5b313b6b090162ba2a892bb.pdf","f");
INSERT INTO cms_media VALUES("781","sfasdfsadf","v");
INSERT INTO cms_media VALUES("782","./uploads/c51e7e6e03f76fbd6af285d7845a2099.pdf","f");
INSERT INTO cms_media VALUES("783","czxczxczxczx","v");
INSERT INTO cms_media VALUES("784","bcvbcvbcvbvc","v");
INSERT INTO cms_media VALUES("785","./uploads/c571fed08ac604770ec458a73ff896c6.jpg","f");
INSERT INTO cms_media VALUES("786","bcvbcvbcvbvc","v");
INSERT INTO cms_media VALUES("787","./uploads/1c6131f2a37cd3c68e58cc67756aae47.pdf","f");
INSERT INTO cms_media VALUES("788","linkl","v");
INSERT INTO cms_media VALUES("789","./uploads/48764230d5b2de42d007eff968207299.jpg","f");
INSERT INTO cms_media VALUES("790","./uploads/47255f9616514b9efaa4b28f06a93647.jpg","t");
INSERT INTO cms_media VALUES("791","./uploads/d3e0191a4bc13d1e715b04b2f05cb223.JPG","t");
INSERT INTO cms_media VALUES("792","./uploads/c184eed784639d40741e63f40247082f.JPG","i");
INSERT INTO cms_media VALUES("793","./uploads/4c769b0fb98f8f699231151a1f6d0931.jpg","t");
INSERT INTO cms_media VALUES("794","./uploads/9361b9548eca3671ac96d5e8007ad6ee.JPG","t");
INSERT INTO cms_media VALUES("795","./uploads/5eb5758924c4fd0eef492e34604da5d6.JPG","i");
INSERT INTO cms_media VALUES("796","./uploads/ef01c7dfd7b9905f35d0142cf19c3c1e.png","i");
INSERT INTO cms_media VALUES("797","./uploads/989a47626e93f08557b85174a0daa941.jpg","t");
INSERT INTO cms_media VALUES("798","./uploads/c552e9f7505135df7bbe6df28cee6808.pdf","f");
INSERT INTO cms_media VALUES("799","./uploads/ea9b73661ae483b0ccccdeb54b0b9e71.jpg","t");
INSERT INTO cms_media VALUES("800","./uploads/91ec994c2a5830917ca128f881919cf3.pdf","f");
INSERT INTO cms_media VALUES("801","./uploads/a81c5ad18e131d0d113fd85fc3ae7358.jpg","t");
INSERT INTO cms_media VALUES("802","./uploads/eae3caf8a956595c2f1695e7117d1203.pdf","f");
INSERT INTO cms_media VALUES("803","./uploads/42accd391d889d6d8546089bcc626bd6.jpg","t");
INSERT INTO cms_media VALUES("804","./uploads/ab0f2c20a9dec2b628517b0f47002059.pdf","f");
INSERT INTO cms_media VALUES("805","./uploads/e1e7eb1f2c1ab1faba701834203a47b3.jpg","t");
INSERT INTO cms_media VALUES("806","./uploads/fe34099c96709704b905cec72e5983b2.pdf","f");
INSERT INTO cms_media VALUES("807","./uploads/42accd391d889d6d8546089bcc626bd6.jpg","t");
INSERT INTO cms_media VALUES("808","./uploads/ab0f2c20a9dec2b628517b0f47002059.pdf","f");
INSERT INTO cms_media VALUES("809","./uploads/7bc2ab3aeba46b2b2515a224b8bcfc22.jpg","t");
INSERT INTO cms_media VALUES("810","./uploads/2c45f244ccb8b9d451e0aca0f266e60b.pdf","f");
INSERT INTO cms_media VALUES("811","./uploads/839493c26fbe03718dc2ae94f61e60cf.jpg","t");
INSERT INTO cms_media VALUES("812","./uploads/bd4c8b93f3b7fe74deb51d12bf872e37.pdf","f");
INSERT INTO cms_media VALUES("813","./uploads/3edb8aa9b0bbb409c123516b573713ab.jpg","t");
INSERT INTO cms_media VALUES("814","./uploads/0a41c295e3c974f6ebe41c8006af7c66.pdf","f");
INSERT INTO cms_media VALUES("815","./uploads/f54c6499cfae7bba750ed60d3d48ff3a.jpg","t");
INSERT INTO cms_media VALUES("816","./uploads/7432af308ec8550bd5d34cb05e858c4a.pdf","f");
INSERT INTO cms_media VALUES("817","./uploads/ea2bd0ea3a187144434a9109de87746a.jpg","t");
INSERT INTO cms_media VALUES("818","./uploads/c4dcb72e551a6020eab8ef16f76727fc.pdf","f");
INSERT INTO cms_media VALUES("819","./uploads/d3e5c0248fab571539ce5b4011e75feb.jpg","t");
INSERT INTO cms_media VALUES("820","./uploads/9cc23c4318d3caca3da2a68a9247be40.pdf","f");
INSERT INTO cms_media VALUES("821","./uploads/ea2bd0ea3a187144434a9109de87746a.jpg","t");
INSERT INTO cms_media VALUES("822","./uploads/c4dcb72e551a6020eab8ef16f76727fc.pdf","f");
INSERT INTO cms_media VALUES("823","./uploads/d3e5c0248fab571539ce5b4011e75feb.jpg","t");
INSERT INTO cms_media VALUES("824","./uploads/9cc23c4318d3caca3da2a68a9247be40.pdf","f");
INSERT INTO cms_media VALUES("825","./uploads/43c566000f17eba393cebe55812d88ad.jpg","t");
INSERT INTO cms_media VALUES("826","./uploads/a0f0ed3cdf0ad1bf6aface4fe338c655.pdf","f");
INSERT INTO cms_media VALUES("827","./uploads/97a135934f757da13875781594f4f1ce.jpg","t");
INSERT INTO cms_media VALUES("828","./uploads/940767464cdd33d6c96a3979e85c7277.pdf","f");
INSERT INTO cms_media VALUES("829","./uploads/685f5baa63defbd775cf010b95dbf238.jpg","t");
INSERT INTO cms_media VALUES("830","./uploads/10fef63427be4f52e7e0f3fbb87bf149.pdf","f");
INSERT INTO cms_media VALUES("831","./uploads/098a886c3383ead399027f9465780540.jpg","t");
INSERT INTO cms_media VALUES("832","./uploads/7cca8428ce7d987ea622535197d40f88.pdf","f");
INSERT INTO cms_media VALUES("833","./uploads/396e051b3c24535dc631fabab0e0cff4.jpg","t");
INSERT INTO cms_media VALUES("834","./uploads/4b81ce5eb58649ea81431e8e8b0c94d6.pdf","f");
INSERT INTO cms_media VALUES("835","./uploads/89afb20af87e74d5a4aa61850bd9c7f2.jpg","t");
INSERT INTO cms_media VALUES("836","./uploads/e06ffb2f3352c51e09c8fb276f2fb521.pdf","f");
INSERT INTO cms_media VALUES("837","./uploads/09691f3f99d053d320bca908bcf2a4ea.jpg","t");
INSERT INTO cms_media VALUES("838","./uploads/c40aceb7f66f1fe6bb491f9af124e7d1.pdf","f");
INSERT INTO cms_media VALUES("839","./uploads/773e5eeee04710459953a3f6572eeb75.jpg","t");
INSERT INTO cms_media VALUES("840","./uploads/aac4266c115333f259f947886754785a.pdf","f");
INSERT INTO cms_media VALUES("841","./uploads/2e0c4a8538e26c8ccc8a33e5b61fea35.jpg","t");
INSERT INTO cms_media VALUES("842","./uploads/4efa9cb0be830281d7b651ce7b5a0111.pdf","f");
INSERT INTO cms_media VALUES("845","./uploads/1292494e3a000974bd650e515e2e1212.jpg","t");
INSERT INTO cms_media VALUES("846","./uploads/4a60641e7835dcc1774c66d84a7b7e33.pdf","f");
INSERT INTO cms_media VALUES("847","./uploads/223144d4b000171d3cb25050f6c92703.jpg","t");
INSERT INTO cms_media VALUES("848","./uploads/a3014b1277e69dc01e3e7780abb94b64.pdf","f");
INSERT INTO cms_media VALUES("849","./uploads/db6f39e685786a59915068d9d2072051.jpg","t");
INSERT INTO cms_media VALUES("850","./uploads/e34a27139a687668e774960cf15a9fde.pdf","f");
INSERT INTO cms_media VALUES("851","./uploads/1cf6eb964a6303a0bf1f8735cd7bb6e4.png","t");
INSERT INTO cms_media VALUES("852","./uploads/d407c1f7e53b92ca74283cfd8281ef58.png","i");
INSERT INTO cms_media VALUES("853","./uploads/949a6931974ab59283fa30d6ad5634e8.jpg","t");
INSERT INTO cms_media VALUES("854","./uploads/2d6210423bbb98d940cca09c3d1eeef1.jpg","t");
INSERT INTO cms_media VALUES("855","./uploads/f1ed6ebe2b73f1157271cfac2458c38d.jpg","t");
INSERT INTO cms_media VALUES("856","./uploads/9023eb379138e0b1dc65310e70646524.jpg","t");
INSERT INTO cms_media VALUES("857","./uploads/949a6931974ab59283fa30d6ad5634e8.jpg","t");
INSERT INTO cms_media VALUES("858","./uploads/1876d74ea1e3277d3e636b087f489337.png","i");
INSERT INTO cms_media VALUES("859","./uploads/1876d74ea1e3277d3e636b087f489337.png","i");
INSERT INTO cms_media VALUES("863","./uploads/b118c348dcc3b71958bad3613ea5f9b6.png","i");
INSERT INTO cms_media VALUES("866","./uploads/ea9b73661ae483b0ccccdeb54b0b9e71.jpg","t");
INSERT INTO cms_media VALUES("867","./uploads/91ec994c2a5830917ca128f881919cf3.pdf","f");
INSERT INTO cms_media VALUES("868","./uploads/b118c348dcc3b71958bad3613ea5f9b6.png","i");
INSERT INTO cms_media VALUES("869","./uploads/b118c348dcc3b71958bad3613ea5f9b6.png","i");
INSERT INTO cms_media VALUES("871","./uploads/409c8df37a631a20b20b213c2d3bc5fd.png","i");
INSERT INTO cms_media VALUES("872","./uploads/79ff41c8ab3c7d03f0075a872c1bde4b.pdf","f");
INSERT INTO cms_media VALUES("875","./uploads/20390b9b390ad00e3cea53197989787f.png","i");
INSERT INTO cms_media VALUES("876","./uploads/180b4dd83ae27c03f4bbd5a7820ef8f1.pdf","f");
INSERT INTO cms_media VALUES("877","./uploads/409c8df37a631a20b20b213c2d3bc5fd.png","i");
INSERT INTO cms_media VALUES("878","./uploads/79ff41c8ab3c7d03f0075a872c1bde4b.pdf","f");
INSERT INTO cms_media VALUES("879","./uploads/886ec55574203ab04299e59071b7d96c.png","t");
INSERT INTO cms_media VALUES("880","./uploads/60ed3c0b6f478a54e1d5dc2031833f77.png","i");
INSERT INTO cms_media VALUES("881","./uploads/886ec55574203ab04299e59071b7d96c.png","t");
INSERT INTO cms_media VALUES("882","./uploads/257acb5cc6f72727ef5782acb2728faa.jpg","i");
INSERT INTO cms_media VALUES("883","./uploads/886ec55574203ab04299e59071b7d96c.png","t");
INSERT INTO cms_media VALUES("884","./uploads/257acb5cc6f72727ef5782acb2728faa.jpg","i");
INSERT INTO cms_media VALUES("885","./uploads/f31e636b86ca9d1482832fba9c5bc763.png","t");
INSERT INTO cms_media VALUES("886","./uploads/","i");
INSERT INTO cms_media VALUES("887","./uploads/20390b9b390ad00e3cea53197989787f.png","i");
INSERT INTO cms_media VALUES("888","./uploads/180b4dd83ae27c03f4bbd5a7820ef8f1.pdf","f");
INSERT INTO cms_media VALUES("889","./uploads/409c8df37a631a20b20b213c2d3bc5fd.png","i");
INSERT INTO cms_media VALUES("890","./uploads/eccac6a337af37b7a97ccc8c48edee20.pdf","f");
INSERT INTO cms_media VALUES("891","./uploads/20390b9b390ad00e3cea53197989787f.png","i");
INSERT INTO cms_media VALUES("892","./uploads/f21351de721e03ce972701d4172bf7eb.pdf","f");
INSERT INTO cms_media VALUES("893","./uploads/a56f199a554ab5387167fa16f2424f0b.jpg","t");
INSERT INTO cms_media VALUES("894","./uploads/c6a5759ed922b559696e578ffa0e19c2.pdf","f");
INSERT INTO cms_media VALUES("895","./uploads/6c2cc17df5dbf2604c390753cfa143e8.jpg","t");
INSERT INTO cms_media VALUES("896","./uploads/f613b459098e09d7032d27ba9634ddeb.pdf","f");
INSERT INTO cms_media VALUES("897","./uploads/ef01c7dfd7b9905f35d0142cf19c3c1e.png","i");
INSERT INTO cms_media VALUES("898","./uploads/efff4b921f9fe03e77db6382b7e8bfa7.jpg","t");
INSERT INTO cms_media VALUES("899","./uploads/5bc9c645a5eb4e2d32e0c433de026d09.pdf","f");
INSERT INTO cms_media VALUES("900","./uploads/42accd391d889d6d8546089bcc626bd6.jpg","t");
INSERT INTO cms_media VALUES("901","./uploads/ab0f2c20a9dec2b628517b0f47002059.pdf","f");
INSERT INTO cms_media VALUES("902","./uploads/7bc2ab3aeba46b2b2515a224b8bcfc22.jpg","t");
INSERT INTO cms_media VALUES("903","./uploads/2c45f244ccb8b9d451e0aca0f266e60b.pdf","f");
INSERT INTO cms_media VALUES("904","./uploads/989a47626e93f08557b85174a0daa941.jpg","t");
INSERT INTO cms_media VALUES("905","./uploads/c552e9f7505135df7bbe6df28cee6808.pdf","f");
INSERT INTO cms_media VALUES("906","./uploads/ea9b73661ae483b0ccccdeb54b0b9e71.jpg","t");
INSERT INTO cms_media VALUES("907","./uploads/91ec994c2a5830917ca128f881919cf3.pdf","f");
INSERT INTO cms_media VALUES("908","./uploads/989a47626e93f08557b85174a0daa941.jpg","t");
INSERT INTO cms_media VALUES("909","./uploads/c552e9f7505135df7bbe6df28cee6808.pdf","f");
INSERT INTO cms_media VALUES("910","./uploads/a81c5ad18e131d0d113fd85fc3ae7358.jpg","t");
INSERT INTO cms_media VALUES("911","./uploads/eae3caf8a956595c2f1695e7117d1203.pdf","f");
INSERT INTO cms_media VALUES("912","./uploads/e1e7eb1f2c1ab1faba701834203a47b3.jpg","t");
INSERT INTO cms_media VALUES("913","./uploads/fe34099c96709704b905cec72e5983b2.pdf","f");
INSERT INTO cms_media VALUES("914","./uploads/839493c26fbe03718dc2ae94f61e60cf.jpg","t");
INSERT INTO cms_media VALUES("915","./uploads/bd4c8b93f3b7fe74deb51d12bf872e37.pdf","f");
INSERT INTO cms_media VALUES("916","./uploads/3edb8aa9b0bbb409c123516b573713ab.jpg","t");
INSERT INTO cms_media VALUES("917","./uploads/0a41c295e3c974f6ebe41c8006af7c66.pdf","f");
INSERT INTO cms_media VALUES("918","./uploads/f54c6499cfae7bba750ed60d3d48ff3a.jpg","t");
INSERT INTO cms_media VALUES("919","./uploads/7432af308ec8550bd5d34cb05e858c4a.pdf","f");
INSERT INTO cms_media VALUES("920","./uploads/ea2bd0ea3a187144434a9109de87746a.jpg","t");
INSERT INTO cms_media VALUES("921","./uploads/c4dcb72e551a6020eab8ef16f76727fc.pdf","f");
INSERT INTO cms_media VALUES("922","./uploads/d3e5c0248fab571539ce5b4011e75feb.jpg","t");
INSERT INTO cms_media VALUES("923","./uploads/9cc23c4318d3caca3da2a68a9247be40.pdf","f");
INSERT INTO cms_media VALUES("924","./uploads/a56f199a554ab5387167fa16f2424f0b.jpg","t");
INSERT INTO cms_media VALUES("925","./uploads/c6a5759ed922b559696e578ffa0e19c2.pdf","f");
INSERT INTO cms_media VALUES("926","./uploads/6c2cc17df5dbf2604c390753cfa143e8.jpg","t");
INSERT INTO cms_media VALUES("927","./uploads/f613b459098e09d7032d27ba9634ddeb.pdf","f");
INSERT INTO cms_media VALUES("928","./uploads/efff4b921f9fe03e77db6382b7e8bfa7.jpg","t");
INSERT INTO cms_media VALUES("929","./uploads/5bc9c645a5eb4e2d32e0c433de026d09.pdf","f");
INSERT INTO cms_media VALUES("930","./uploads/42accd391d889d6d8546089bcc626bd6.jpg","t");
INSERT INTO cms_media VALUES("931","./uploads/ab0f2c20a9dec2b628517b0f47002059.pdf","f");
INSERT INTO cms_media VALUES("932","./uploads/989a47626e93f08557b85174a0daa941.jpg","t");
INSERT INTO cms_media VALUES("933","./uploads/c552e9f7505135df7bbe6df28cee6808.pdf","f");
INSERT INTO cms_media VALUES("934","./uploads/ea9b73661ae483b0ccccdeb54b0b9e71.jpg","t");
INSERT INTO cms_media VALUES("935","./uploads/91ec994c2a5830917ca128f881919cf3.pdf","f");
INSERT INTO cms_media VALUES("936","./uploads/a81c5ad18e131d0d113fd85fc3ae7358.jpg","t");
INSERT INTO cms_media VALUES("937","./uploads/eae3caf8a956595c2f1695e7117d1203.pdf","f");
INSERT INTO cms_media VALUES("938","./uploads/e1e7eb1f2c1ab1faba701834203a47b3.jpg","t");
INSERT INTO cms_media VALUES("939","./uploads/fe34099c96709704b905cec72e5983b2.pdf","f");
INSERT INTO cms_media VALUES("940","./uploads/e1e7eb1f2c1ab1faba701834203a47b3.jpg","t");
INSERT INTO cms_media VALUES("941","./uploads/fe34099c96709704b905cec72e5983b2.pdf","f");
INSERT INTO cms_media VALUES("942","./uploads/7bc2ab3aeba46b2b2515a224b8bcfc22.jpg","t");
INSERT INTO cms_media VALUES("943","./uploads/2c45f244ccb8b9d451e0aca0f266e60b.pdf","f");
INSERT INTO cms_media VALUES("944","./uploads/839493c26fbe03718dc2ae94f61e60cf.jpg","t");
INSERT INTO cms_media VALUES("945","./uploads/bd4c8b93f3b7fe74deb51d12bf872e37.pdf","f");
INSERT INTO cms_media VALUES("946","./uploads/839493c26fbe03718dc2ae94f61e60cf.jpg","t");
INSERT INTO cms_media VALUES("947","./uploads/bd4c8b93f3b7fe74deb51d12bf872e37.pdf","f");
INSERT INTO cms_media VALUES("948","./uploads/3edb8aa9b0bbb409c123516b573713ab.jpg","t");
INSERT INTO cms_media VALUES("949","./uploads/0a41c295e3c974f6ebe41c8006af7c66.pdf","f");
INSERT INTO cms_media VALUES("950","./uploads/f54c6499cfae7bba750ed60d3d48ff3a.jpg","t");
INSERT INTO cms_media VALUES("951","./uploads/7432af308ec8550bd5d34cb05e858c4a.pdf","f");
INSERT INTO cms_media VALUES("952","./uploads/ea2bd0ea3a187144434a9109de87746a.jpg","t");
INSERT INTO cms_media VALUES("953","./uploads/c4dcb72e551a6020eab8ef16f76727fc.pdf","f");
INSERT INTO cms_media VALUES("954","./uploads/d3e5c0248fab571539ce5b4011e75feb.jpg","t");
INSERT INTO cms_media VALUES("955","./uploads/9cc23c4318d3caca3da2a68a9247be40.pdf","f");
INSERT INTO cms_media VALUES("956","./uploads/43c566000f17eba393cebe55812d88ad.jpg","t");
INSERT INTO cms_media VALUES("957","./uploads/a0f0ed3cdf0ad1bf6aface4fe338c655.pdf","f");
INSERT INTO cms_media VALUES("958","./uploads/97a135934f757da13875781594f4f1ce.jpg","t");
INSERT INTO cms_media VALUES("959","./uploads/940767464cdd33d6c96a3979e85c7277.pdf","f");
INSERT INTO cms_media VALUES("960","./uploads/685f5baa63defbd775cf010b95dbf238.jpg","t");
INSERT INTO cms_media VALUES("961","./uploads/10fef63427be4f52e7e0f3fbb87bf149.pdf","f");
INSERT INTO cms_media VALUES("962","./uploads/098a886c3383ead399027f9465780540.jpg","t");
INSERT INTO cms_media VALUES("963","./uploads/7cca8428ce7d987ea622535197d40f88.pdf","f");
INSERT INTO cms_media VALUES("964","./uploads/396e051b3c24535dc631fabab0e0cff4.jpg","t");
INSERT INTO cms_media VALUES("965","./uploads/4b81ce5eb58649ea81431e8e8b0c94d6.pdf","f");
INSERT INTO cms_media VALUES("966","./uploads/89afb20af87e74d5a4aa61850bd9c7f2.jpg","t");
INSERT INTO cms_media VALUES("967","./uploads/e06ffb2f3352c51e09c8fb276f2fb521.pdf","f");
INSERT INTO cms_media VALUES("968","./uploads/09691f3f99d053d320bca908bcf2a4ea.jpg","t");
INSERT INTO cms_media VALUES("969","./uploads/c40aceb7f66f1fe6bb491f9af124e7d1.pdf","f");
INSERT INTO cms_media VALUES("970","./uploads/773e5eeee04710459953a3f6572eeb75.jpg","t");
INSERT INTO cms_media VALUES("971","./uploads/aac4266c115333f259f947886754785a.pdf","f");
INSERT INTO cms_media VALUES("972","./uploads/2e0c4a8538e26c8ccc8a33e5b61fea35.jpg","t");
INSERT INTO cms_media VALUES("973","./uploads/4efa9cb0be830281d7b651ce7b5a0111.pdf","f");
INSERT INTO cms_media VALUES("974","./uploads/1292494e3a000974bd650e515e2e1212.jpg","t");
INSERT INTO cms_media VALUES("975","./uploads/4a60641e7835dcc1774c66d84a7b7e33.pdf","f");
INSERT INTO cms_media VALUES("976","./uploads/223144d4b000171d3cb25050f6c92703.jpg","t");
INSERT INTO cms_media VALUES("977","./uploads/a3014b1277e69dc01e3e7780abb94b64.pdf","f");
INSERT INTO cms_media VALUES("978","./uploads/db6f39e685786a59915068d9d2072051.jpg","t");
INSERT INTO cms_media VALUES("979","./uploads/e34a27139a687668e774960cf15a9fde.pdf","f");
INSERT INTO cms_media VALUES("980","./uploads/e1e7eb1f2c1ab1faba701834203a47b3.jpg","t");
INSERT INTO cms_media VALUES("981","./uploads/fe34099c96709704b905cec72e5983b2.pdf","f");
INSERT INTO cms_media VALUES("982","./uploads/db6f39e685786a59915068d9d2072051.jpg","t");
INSERT INTO cms_media VALUES("983","./uploads/e34a27139a687668e774960cf15a9fde.pdf","f");
INSERT INTO cms_media VALUES("984","./uploads/1292494e3a000974bd650e515e2e1212.jpg","t");
INSERT INTO cms_media VALUES("985","./uploads/4a60641e7835dcc1774c66d84a7b7e33.pdf","f");
INSERT INTO cms_media VALUES("986","./uploads/1292494e3a000974bd650e515e2e1212.jpg","t");
INSERT INTO cms_media VALUES("987","./uploads/4a60641e7835dcc1774c66d84a7b7e33.pdf","f");
INSERT INTO cms_media VALUES("988","./uploads/223144d4b000171d3cb25050f6c92703.jpg","t");
INSERT INTO cms_media VALUES("989","./uploads/a3014b1277e69dc01e3e7780abb94b64.pdf","f");
INSERT INTO cms_media VALUES("990","./uploads/09691f3f99d053d320bca908bcf2a4ea.jpg","t");
INSERT INTO cms_media VALUES("991","./uploads/c40aceb7f66f1fe6bb491f9af124e7d1.pdf","f");
INSERT INTO cms_media VALUES("992","./uploads/773e5eeee04710459953a3f6572eeb75.jpg","t");
INSERT INTO cms_media VALUES("993","./uploads/aac4266c115333f259f947886754785a.pdf","f");
INSERT INTO cms_media VALUES("994","./uploads/3ff3833ea70bb6c4f849cd6ec2212d00.png","i");
INSERT INTO cms_media VALUES("995","./uploads/85fa32b847275ca43e42b3c2d439e74e.png","i");
INSERT INTO cms_media VALUES("997","./uploads/f0a8dcde15991d53ce0995900db62e61.jpg","i");
INSERT INTO cms_media VALUES("998","./uploads/f0a8dcde15991d53ce0995900db62e61.jpg","i");
INSERT INTO cms_media VALUES("999","./uploads/f0a8dcde15991d53ce0995900db62e61.jpg","i");
INSERT INTO cms_media VALUES("1006","./uploads/5a5ba57ffe49da074b5d12febe1d801e.png","i");
INSERT INTO cms_media VALUES("1007","./uploads/3ff3833ea70bb6c4f849cd6ec2212d00.png","i");
INSERT INTO cms_media VALUES("1008","./uploads/85fa32b847275ca43e42b3c2d439e74e.png","i");
INSERT INTO cms_media VALUES("1009","./uploads/5a5ba57ffe49da074b5d12febe1d801e.png","i");
INSERT INTO cms_media VALUES("1010","./uploads/5a5ba57ffe49da074b5d12febe1d801e.png","i");
INSERT INTO cms_media VALUES("1011","./uploads/5a5ba57ffe49da074b5d12febe1d801e.png","i");
INSERT INTO cms_media VALUES("1013","./uploads/5a5ba57ffe49da074b5d12febe1d801e.png","i");
INSERT INTO cms_media VALUES("1022","./uploads/5a5ba57ffe49da074b5d12febe1d801e.png","i");
INSERT INTO cms_media VALUES("1023","//www.youtube.com/embed/nh5rpOab4C8","v");
INSERT INTO cms_media VALUES("1024","./uploads/27deba872e3e94a10f5c875b7ace4c6f.pdf","f");
INSERT INTO cms_media VALUES("1025","//www.youtube.com/embed/83lKIA3HW4Q","v");
INSERT INTO cms_media VALUES("1026","./uploads/a55c4478b971459508f92a46d310e20f.pdf","f");
INSERT INTO cms_media VALUES("1028","./uploads/fdff8ce2f434333105fd5a3580a3819c.jpg","t");
INSERT INTO cms_media VALUES("1029","./uploads/4ec37e73c11be879d8aa1d5738349a96.jpg","i");
INSERT INTO cms_media VALUES("1030","./uploads/fdff8ce2f434333105fd5a3580a3819c.jpg","t");
INSERT INTO cms_media VALUES("1031","./uploads/4ec37e73c11be879d8aa1d5738349a96.jpg","i");
INSERT INTO cms_media VALUES("1032","./uploads/fdff8ce2f434333105fd5a3580a3819c.jpg","t");
INSERT INTO cms_media VALUES("1033","./uploads/4ec37e73c11be879d8aa1d5738349a96.jpg","i");
INSERT INTO cms_media VALUES("1034","./uploads/fdff8ce2f434333105fd5a3580a3819c.jpg","t");
INSERT INTO cms_media VALUES("1035","./uploads/4ec37e73c11be879d8aa1d5738349a96.jpg","i");
INSERT INTO cms_media VALUES("1036","./uploads/b92001229bcb266706fae023b2f78c20.jpg","t");
INSERT INTO cms_media VALUES("1037","./uploads/19ce8130dd9dc2073acda0ad1561d9ab.jpg","i");
INSERT INTO cms_media VALUES("1038","./uploads/b92001229bcb266706fae023b2f78c20.jpg","t");
INSERT INTO cms_media VALUES("1039","./uploads/dbd6675af1101912a6f94946faeec454.jpg","i");
INSERT INTO cms_media VALUES("1040","./uploads/b92001229bcb266706fae023b2f78c20.jpg","t");
INSERT INTO cms_media VALUES("1041","./uploads/dbd6675af1101912a6f94946faeec454.jpg","i");
INSERT INTO cms_media VALUES("1042","./uploads/39c1fbdda517439665c1e236bea10213.png","t");
INSERT INTO cms_media VALUES("1043","./uploads/6f239fabb986313af6e473058b1944aa.png","i");
INSERT INTO cms_media VALUES("1044","http://holamundo.com","v");
INSERT INTO cms_media VALUES("1051","./uploads/4ff0ab34b20e568079b58e272aef8d5d.jpg","t");
INSERT INTO cms_media VALUES("1052","./uploads/1b262eb6d95c9bfedeba29c6e18558a4.jpg","i");
INSERT INTO cms_media VALUES("1053","./uploads/dd9d9ba92dcf8435c81341efbf1b09ba.jpg","t");
INSERT INTO cms_media VALUES("1054","./uploads/3f5a81e9529377d70c3a1aa3dcaf15de.jpg","i");
INSERT INTO cms_media VALUES("1055","./uploads/dd9d9ba92dcf8435c81341efbf1b09ba.jpg","t");
INSERT INTO cms_media VALUES("1056","./uploads/3f5a81e9529377d70c3a1aa3dcaf15de.jpg","i");
INSERT INTO cms_media VALUES("1057","DFVDFGDF","v");
INSERT INTO cms_media VALUES("1058","./uploads/3918f86fac9cb96cc1de54553e9c78b6.png","t");
INSERT INTO cms_media VALUES("1059","./uploads/c8fe0c8d966236711a4f76b9637faa51.jpg","i");
INSERT INTO cms_media VALUES("1060","./uploads/3918f86fac9cb96cc1de54553e9c78b6.png","t");
INSERT INTO cms_media VALUES("1061","./uploads/c8fe0c8d966236711a4f76b9637faa51.jpg","i");
INSERT INTO cms_media VALUES("1062","./uploads/3918f86fac9cb96cc1de54553e9c78b6.png","t");
INSERT INTO cms_media VALUES("1063","./uploads/c8fe0c8d966236711a4f76b9637faa51.jpg","i");
INSERT INTO cms_media VALUES("1064","./uploads/3918f86fac9cb96cc1de54553e9c78b6.png","t");
INSERT INTO cms_media VALUES("1065","./uploads/c8fe0c8d966236711a4f76b9637faa51.jpg","i");
INSERT INTO cms_media VALUES("1066","./uploads/e09df1c3f7d87341ee5d036262de9d12.png","t");
INSERT INTO cms_media VALUES("1067","./uploads/59bfdf6d4ed86a4b1b93d15723186aa1.jpg","i");
INSERT INTO cms_media VALUES("1068","./uploads/d64eb5d11da390b17bd3262afdb3b2ba.jpg","t");
INSERT INTO cms_media VALUES("1069","./uploads/4699c6bd3254a933ce6b5a9af5ae4894.jpg","i");
INSERT INTO cms_media VALUES("1070","./uploads/d64eb5d11da390b17bd3262afdb3b2ba.jpg","t");
INSERT INTO cms_media VALUES("1071","./uploads/4699c6bd3254a933ce6b5a9af5ae4894.jpg","i");
INSERT INTO cms_media VALUES("1072","./uploads/d64eb5d11da390b17bd3262afdb3b2ba.jpg","t");
INSERT INTO cms_media VALUES("1073","./uploads/4699c6bd3254a933ce6b5a9af5ae4894.jpg","i");
INSERT INTO cms_media VALUES("1074","./uploads/e58d7187a0121cd17e7518069aa0ba6b.jpg","t");
INSERT INTO cms_media VALUES("1075","./uploads/68e2794012b15c1a7f3561b7a8cf3078.jpg","i");
INSERT INTO cms_media VALUES("1078","./uploads/2a8a8afd4c5e145758d79005dd229965.jpg","t");
INSERT INTO cms_media VALUES("1079","./uploads/55a0fa239de7b4b1e01565f0e5df30c7.jpg","i");
INSERT INTO cms_media VALUES("1080","./uploads/295c886fa1914d2a8fc82153a4934399.jpg","t");
INSERT INTO cms_media VALUES("1081","./uploads/822ada4527be1586c1bdfa372464aa01.jpg","i");
INSERT INTO cms_media VALUES("1087","./uploads/dd9d9ba92dcf8435c81341efbf1b09ba.jpg","t");
INSERT INTO cms_media VALUES("1088","./uploads/3f5a81e9529377d70c3a1aa3dcaf15de.jpg","i");
INSERT INTO cms_media VALUES("1089","DFVDFGDF","v");
INSERT INTO cms_media VALUES("1090","./uploads/3a06e4687e78a25448eac5813b8d3e1e.jpg","i");
INSERT INTO cms_media VALUES("1091","./uploads/59c0ab1a4fe670865250d3a99968be69.jpg","t");
INSERT INTO cms_media VALUES("1092","./uploads/3a06e4687e78a25448eac5813b8d3e1e.jpg","i");
INSERT INTO cms_media VALUES("1093","./uploads/8add2ae935d2a2a5c8581b6910948eb7.jpg","t");
INSERT INTO cms_media VALUES("1094","./uploads/bac440344c7927a6be1134643e3162ea.jpg","i");
INSERT INTO cms_media VALUES("1095","./uploads/dd9d9ba92dcf8435c81341efbf1b09ba.jpg","t");
INSERT INTO cms_media VALUES("1096","./uploads/3f5a81e9529377d70c3a1aa3dcaf15de.jpg","i");
INSERT INTO cms_media VALUES("1097","./uploads/dd9d9ba92dcf8435c81341efbf1b09ba.jpg","t");
INSERT INTO cms_media VALUES("1098","./uploads/3f5a81e9529377d70c3a1aa3dcaf15de.jpg","i");
INSERT INTO cms_media VALUES("1099","./uploads/dd9d9ba92dcf8435c81341efbf1b09ba.jpg","t");
INSERT INTO cms_media VALUES("1100","./uploads/3f5a81e9529377d70c3a1aa3dcaf15de.jpg","i");
INSERT INTO cms_media VALUES("1101","./uploads/dd9d9ba92dcf8435c81341efbf1b09ba.jpg","t");
INSERT INTO cms_media VALUES("1102","./uploads/3f5a81e9529377d70c3a1aa3dcaf15de.jpg","i");
INSERT INTO cms_media VALUES("1103","./uploads/752cac029ea6be429a938ac69e8e76fc.jpg","t");
INSERT INTO cms_media VALUES("1104","./uploads/7192292a50a9ed466bd4f36bcd2eecc5.jpg","i");
INSERT INTO cms_media VALUES("1105","./uploads/8add2ae935d2a2a5c8581b6910948eb7.jpg","t");
INSERT INTO cms_media VALUES("1106","./uploads/bac440344c7927a6be1134643e3162ea.jpg","i");
INSERT INTO cms_media VALUES("1107","assets/img/enterate/peque.jpg","v");
INSERT INTO cms_media VALUES("1108","./uploads/dd9d9ba92dcf8435c81341efbf1b09ba.jpg","t");
INSERT INTO cms_media VALUES("1109","./uploads/3f5a81e9529377d70c3a1aa3dcaf15de.jpg","i");
INSERT INTO cms_media VALUES("1110","assets/img/enterate/peque.jpg","v");
INSERT INTO cms_media VALUES("1111","./uploads/59c0ab1a4fe670865250d3a99968be69.jpg","t");
INSERT INTO cms_media VALUES("1112","./uploads/3a06e4687e78a25448eac5813b8d3e1e.jpg","i");
INSERT INTO cms_media VALUES("1113","assets/img/enterate/peque.jpg","v");
INSERT INTO cms_media VALUES("1114","./uploads/dd9d9ba92dcf8435c81341efbf1b09ba.jpg","t");
INSERT INTO cms_media VALUES("1115","./uploads/3f5a81e9529377d70c3a1aa3dcaf15de.jpg","i");
INSERT INTO cms_media VALUES("1116","assets/img/enterate/peque.jpg","v");
INSERT INTO cms_media VALUES("1117","./uploads/8add2ae935d2a2a5c8581b6910948eb7.jpg","t");
INSERT INTO cms_media VALUES("1118","./uploads/bac440344c7927a6be1134643e3162ea.jpg","i");
INSERT INTO cms_media VALUES("1119","assets/img/enterate/peque.jpg","v");
INSERT INTO cms_media VALUES("1126","./uploads/752cac029ea6be429a938ac69e8e76fc.jpg","t");
INSERT INTO cms_media VALUES("1127","./uploads/7192292a50a9ed466bd4f36bcd2eecc5.jpg","i");
INSERT INTO cms_media VALUES("1128","./uploads/59c0ab1a4fe670865250d3a99968be69.jpg","t");
INSERT INTO cms_media VALUES("1129","./uploads/3a06e4687e78a25448eac5813b8d3e1e.jpg","i");
INSERT INTO cms_media VALUES("1130","./uploads/8add2ae935d2a2a5c8581b6910948eb7.jpg","t");
INSERT INTO cms_media VALUES("1131","./uploads/bac440344c7927a6be1134643e3162ea.jpg","i");
INSERT INTO cms_media VALUES("1132","./uploads/752cac029ea6be429a938ac69e8e76fc.jpg","t");
INSERT INTO cms_media VALUES("1133","./uploads/7192292a50a9ed466bd4f36bcd2eecc5.jpg","i");
INSERT INTO cms_media VALUES("1134","./uploads/dd9d9ba92dcf8435c81341efbf1b09ba.jpg","t");
INSERT INTO cms_media VALUES("1135","./uploads/3f5a81e9529377d70c3a1aa3dcaf15de.jpg","i");
INSERT INTO cms_media VALUES("1136","./uploads/8add2ae935d2a2a5c8581b6910948eb7.jpg","t");
INSERT INTO cms_media VALUES("1137","./uploads/bac440344c7927a6be1134643e3162ea.jpg","i");
INSERT INTO cms_media VALUES("1138","./uploads/59c0ab1a4fe670865250d3a99968be69.jpg","t");
INSERT INTO cms_media VALUES("1139","./uploads/3a06e4687e78a25448eac5813b8d3e1e.jpg","i");
INSERT INTO cms_media VALUES("1140","./uploads/8add2ae935d2a2a5c8581b6910948eb7.jpg","t");
INSERT INTO cms_media VALUES("1141","./uploads/bac440344c7927a6be1134643e3162ea.jpg","i");
INSERT INTO cms_media VALUES("1142","./uploads/dd9d9ba92dcf8435c81341efbf1b09ba.jpg","t");
INSERT INTO cms_media VALUES("1143","./uploads/3f5a81e9529377d70c3a1aa3dcaf15de.jpg","i");
INSERT INTO cms_media VALUES("1144","./uploads/4e83943e2338cd7ea86082648ad35ad2.jpg","t");
INSERT INTO cms_media VALUES("1145","./uploads/8699b12ebac912b382c33e9dcfaf6be8.jpg","i");
INSERT INTO cms_media VALUES("1146","./uploads/4e83943e2338cd7ea86082648ad35ad2.jpg","t");
INSERT INTO cms_media VALUES("1147","./uploads/8699b12ebac912b382c33e9dcfaf6be8.jpg","i");
INSERT INTO cms_media VALUES("1148","assets/img/enterate/peque.jpg","v");
INSERT INTO cms_media VALUES("1149","./uploads/4e83943e2338cd7ea86082648ad35ad2.jpg","t");
INSERT INTO cms_media VALUES("1150","./uploads/8699b12ebac912b382c33e9dcfaf6be8.jpg","i");
INSERT INTO cms_media VALUES("1151","assets/img/enterate/peque.jpg","v");
INSERT INTO cms_media VALUES("1152","./uploads/4e83943e2338cd7ea86082648ad35ad2.jpg","t");
INSERT INTO cms_media VALUES("1153","./uploads/8699b12ebac912b382c33e9dcfaf6be8.jpg","i");
INSERT INTO cms_media VALUES("1154","./uploads/dc09ed861558d9cdf47778937438a182.jpg","t");
INSERT INTO cms_media VALUES("1155","./uploads/e2c386b9b3794daab05a4fe117c16857.jpg","i");
INSERT INTO cms_media VALUES("1156","./uploads/752cac029ea6be429a938ac69e8e76fc.jpg","t");
INSERT INTO cms_media VALUES("1157","./uploads/7192292a50a9ed466bd4f36bcd2eecc5.jpg","i");
INSERT INTO cms_media VALUES("1158","assets/img/enterate/peque.jpg","v");
INSERT INTO cms_media VALUES("1159","./uploads/4e83943e2338cd7ea86082648ad35ad2.jpg","t");
INSERT INTO cms_media VALUES("1160","./uploads/8699b12ebac912b382c33e9dcfaf6be8.jpg","i");
INSERT INTO cms_media VALUES("1161","assets/img/enterate/peque.jpg","v");
DROP TABLE IF EXISTS cms_menu;

CREATE TABLE `cms_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `url` text,
  `icon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre_UNIQUE` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO cms_menu VALUES("2","home","cms/home/","administrator");
DROP TABLE IF EXISTS cms_postulado;

CREATE TABLE `cms_postulado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(47) DEFAULT NULL,
  `email` varchar(47) DEFAULT NULL,
  `ciudad` varchar(70) DEFAULT NULL,
  `cv` varchar(200) DEFAULT NULL,
  `cvideo` varchar(200) DEFAULT NULL,
  `telefono` varchar(27) DEFAULT NULL,
  `comentario` varchar(500) DEFAULT NULL,
  `vancante_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_postulado_vancante1_idx` (`vancante_id`),
  CONSTRAINT `fk_postulado_vancante1` FOREIGN KEY (`vancante_id`) REFERENCES `cms_vancante` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS cms_producto;

CREATE TABLE `cms_producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(35) NOT NULL,
  `subtitulo` varchar(50) NOT NULL,
  `texto` text NOT NULL,
  `intro_text` varchar(255) NOT NULL,
  `cms_media_id` int(11) NOT NULL,
  `cms_media_id2` int(11) DEFAULT NULL,
  `cms_sub_categorias_id` int(11) DEFAULT NULL,
  `cms_categoria_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_linea_cms_media1_idx` (`cms_media_id`),
  KEY `fk_linea_cms_media3_idx` (`cms_media_id2`),
  KEY `fk_cms_producto_cms_sub_categorias1_idx` (`cms_sub_categorias_id`),
  CONSTRAINT `fk_linea_cms_media1` FOREIGN KEY (`cms_media_id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_linea_cms_media3` FOREIGN KEY (`cms_media_id2`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

INSERT INTO cms_producto VALUES("3","ángulo","alas iguales","productos metalúrgicos de alas iguales fabricados con acero \nestructural de acuerdo con la norma ASTM A36 y ASTM A572, disponibles en longitudes de 6 metros.\n","productos metalúrgicos de alas iguales con acero...","924","925","0","22");
INSERT INTO cms_producto VALUES("4","lámina galvanizada","lámina con zinc","la lámina galvanizada es una chapa laminada en caliente o frío, revestida en ambas caras con una capa de zinc, por el proceso de inmersión en un baño de metal fundido, para mejorar su resistencia a la corrosión de acuerdo con la norma ASTM A653.","lámina revestida en ambas caras con una capa de zinc...","926","927","0","18");
INSERT INTO cms_producto VALUES("6","perfiplaca","perfil entrepiso","nuestros perfiles metálicos para entrepiso - perfiplaca, son elementos formados en frío, fabricados con acero estructural al carbono de acuerdo con la norma ASTM A1011 y diseñados para cumplir con esfuerzos de fluencia de 36000psi equivalentes a 248Mpa.","nuestros perfiles metálicos para entrepiso - perfiplaca","928","929","0","23");
INSERT INTO cms_producto VALUES("7","viga ipe","estructural","la viga ipe es un producto metalúrgico de forma en I bajo normas ASTM A572 y disponible en longitudes de 6 y 12 metros, en los cuales se apoyan y cargan las vigas o columnas concernientes al esqueleto portante de una estructura.","la viga ipe es un producto metalúrgico de forma en I","930","931","0","22");
INSERT INTO cms_producto VALUES("8","placa colaborante","para planchas","presentamos la única placa colaborante que se puede utilizar por ambas caras. su geometría de avanzada alcanza un metro de ancho, lo cual ahorra al constructor grandes costos en materiales al fundir placas o losas de concreto. Se fabrica en longitudes a la medida.","presentamos la única placa colaborante que se puede...","932","933","0","23");
INSERT INTO cms_producto VALUES("9","cubierta arquitectónica","metálica","nuestras cubiertas arquitectónicas son la solución ideal para cubiertas, fachadas y cerramientos para cualquier tipo de estructuras. las cubiertas son formadas en frío con lamina galvanizada o aluzinc prepintado de color rojo, verde, azul o blanco y en espesores de 0.35mm a 0.55mm y longitudes de 3, 4, 5 y 6 metros.","nuestras cubiertas arquitectónicas son la solución...","934","935","0","21");
INSERT INTO cms_producto VALUES("10","teja de zinc","ondulada","la te ja de zinc, es un producto fabricado en lámina de acero galvanizada y ofrece principalmente las ventajas de ser mas ligera, resistente, impermeable y de rápida instalación respecto a los sistemas similares.","la te ja de zinc, es un producto fabricado en lámina...","936","937","0","21");
INSERT INTO cms_producto VALUES("11","perlin en c","estructural","nuestros perfiles metálicos estructurales son elementos formados en frío, fabricados con acero de bajo contenido de carbono de acuerdo con la norma ASTM A1011, garantizando muy buenas propiedades mecánicas y de soldabilidad, diseñados para cumplir esfuerzos de fluencia mínimos de 42000psi equivalente a 290Mpa.","nuestros perfiles metálicos estructurales son...","980","981","0","22");
INSERT INTO cms_producto VALUES("12","viga hea","estructural","la viga ipe es un producto metalúrgico de forma en H bajo normas ASTM A572 y disponible en longitudes de 6 y 12 metros, en los cuales se apoyan y cargan las vigas o columnas concernientes al esqueleto portante de una estructura.","la viga ipe es un producto metalúrgico de forma en H","942","943","0","22");
INSERT INTO cms_producto VALUES("13","canal","tipo americano","la canal es un producto metalúrgico de forma en u, bajo norma ASTM A36 y en longitudes de 6 metros. estas se utilizan principalmente para la elaboración de estructuras livianas y pesadas , dada su gran resistencia y dimensiones compactas.","la canal es un producto metalúrgico de forma en U","946","947","0","22");
INSERT INTO cms_producto VALUES("14","ángulo","alas iguales","productos metalúrgicos de alas iguales fabricados con acero estructural de acuerdo con la norma ASTM A36 y ASTM A572, disponibles en longitudes de 6 metros.","productos metalúrgicos de alas iguales fabricados...","948","949","0","20");
INSERT INTO cms_producto VALUES("15","fleje cortina","para puertas metálicas","perfiles fabricados en acero cold rolled bajo norma JIS G3141 SPCC (calidad comercial) y en longitudes de 6 metros. los perfiles fabricados son: pasamanos, marco puerta corriente, marco ventana corriente, t ventana corriente, marco puerta tipo aluminio, marco ventana tipo aluminio y fleje cortina.","perfiles fabricados en acero cold rolled bajo norma...","950","951","0","24");
INSERT INTO cms_producto VALUES("16","pasamanos","perfil","perfiles fabricados en acero cold rolled bajo norma JIS G3141 SPCC (calidad comercial) y en longitudes de 6 metros. los perfiles fabricados son: pasamanos, marco puerta corriente,\nmarco ventana corriente, t ventana corriente, marco puerta tipo aluminio, marco ventana tipo aluminio y fleje cortina.","perfiles fabricados en acero cold rolled bajo norma...","952","953","0","24");
INSERT INTO cms_producto VALUES("17","marco ventana","tipo aluminio","perfiles fabricados en acero cold rolled bajo norma JIS G3141 SPCC (calidad comercial) y en longitudes de 6 metros. los perfiles fabricados son: pasamanos, marco puerta corriente,\nmarco ventana corriente, t ventana corriente, marco puerta tipo aluminio, marco ventana tipo aluminio y fleje cortina.","perfiles fabricados en acero cold rolled bajo norma...","954","955","0","24");
INSERT INTO cms_producto VALUES("18","lámina cold rolled","lámina en frío","la lámina en frío o cold rolled es fabricada de acero en caliente, el cual ha sido limpiado químicamente antes de ser enrollado. el proceso de formado en frío reduce el espesor del acero y\nal mismo tiempo cambia sus propiedades.","la lámina en frío o cold rolled es fabricada de acero..","956","957","0","18");
INSERT INTO cms_producto VALUES("19","lámina hot rolled","lámina en caliente","la lámina en caliente, hot rolled o HR viene de un proceso metalúrgico, usado principalmente para\nproducir hojas a partir de planchones, los cuales son deformados entre un set de rodillos hasta\nalcanzar el espesor deseado.","la lámina en caliente, hot rolled o HR viene de un...","958","959","0","18");
INSERT INTO cms_producto VALUES("20","lámina alfajor","lámina antideslizante","la lámina alfajor o antideslizante es ideal para uso industrial en zonas de riesgo y alto trafico donde\nse requiera una opción durable, resistente y verdaderamente antideslizante.","la lámina alfajor o antideslizante es ideal para uso...","960","961","0","18");
INSERT INTO cms_producto VALUES("21","lámina aceitada y decapada","pickled and oiled","la lámina aceitada y decapada es el producto ideal para las aplicaciones en donde la calidad\nsuperficial es un factor importante, ya que se trata de lámina de acero con ácido clorhídrico\npara remover las impurezas y oxido superficial.","la lámina aceitada y decapada es el producto ideal...","962","963","0","18");
INSERT INTO cms_producto VALUES("22","planchas - placas","plates","las planchas, placas o plates son productos de acero, laminados en caliente y cortados a medidas, con un mínimo espesor de 4.50mm y ancho de 1830mm. estas planchas son utilizadas para una gran variedad de productos terminados en los diferentes sectores económicos.","las planchas, placas o plates son productos de acero...","964","965","0","18");
INSERT INTO cms_producto VALUES("23","tubería mueble","cold rolled","tubería fabricada en acero laminado en frió de sección redonda, ovalada, cuadrada y rectangular para la elaboración de estructuras livianas. esta tubería viene con una longitud estándar de 6 metros y en los diferentes espesores.","tubería fabricada en acero laminado en frió de...","966","967","0","19");
INSERT INTO cms_producto VALUES("24","tubería estructural","hot rolled","tubería fabricada en acero laminado en caliente, de acuerdo con la norma ASTM A500 Grado C, la cual viene en secciones redondas, cuadradas y rectangulares. su longitud estándar de 6 metros y viene en espesores de hasta 6mm.","tubería fabricada en acero laminado en caliente...","990","991","0","19");
INSERT INTO cms_producto VALUES("25","tubería negra","hot rolled","tubería fabricada en acero laminado en caliente, con bajo contenido de carbono, de acuerdo con la norma ASTM A1011, garantizando muy buenas propiedades mecánicas y de alta soldabilidad. se elaboran en diferentes espesores y con una longitud estándar de 6 metros.","tubería fabricada en acero laminado en caliente...","992","993","0","19");
INSERT INTO cms_producto VALUES("26","perlin en C","estructural","nuestros perfiles metálicos estructurales son elementos formados en frío, fabricados con acero de bajo contenido de carbono de acuerdo con la norma ASTM A1011, garantizando muy buenas propiedades mecánicas y de soldabilidad, diseñados para cumplir esfuerzos de\nfluencia mínimos de 42000psi equivalente a 290Mpa.","nuestros perfiles metálicos estructurales son...","972","973","0","20");
INSERT INTO cms_producto VALUES("28","canal","tipo americano","la canal es un producto metalúrgico de forma en u, bajo norma ASTM A36 y en longitudes de 6 metros. estas se utilizan principalmente para la elaboración de estructuras livianas y pesadas , dada su gran resistencia y dimensiones compactas.","la canal es un producto metalúrgico de forma en U...","986","987","0","20");
INSERT INTO cms_producto VALUES("29","viga hea","tipo europeo","la viga hea es un producto metalúrgicos de forma en H bajo normas ASTM A572 y disponible en longitudes de 6 y 12 metros, en los cuales se apoyan y cargan las vigas o columnas concerniente al esqueleto portante de una estructura.","la viga hea es un producto metalúrgicos de forma en H ","988","989","0","20");
INSERT INTO cms_producto VALUES("30","viga ipe","tipo europeo","la viga ipe es un producto metalúrgicos de forma en I bajo normas ASTM A572 y disponible en longitudes de 6 y 12 metros, en los cuales se apoyan y cargan las vigas o columnas concerniente al esqueleto portante de una estructura.","la viga ipe es un producto metalúrgicos de forma en I","982","983","0","20");
DROP TABLE IF EXISTS cms_propietario;

CREATE TABLE `cms_propietario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `propietario` varchar(150) DEFAULT NULL,
  `media_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_propietario_cms_media1_idx` (`media_id`),
  CONSTRAINT `fk_cms_propietario_cms_media1` FOREIGN KEY (`media_id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO cms_propietario VALUES("1","Campana","1");
INSERT INTO cms_propietario VALUES("2","Imaginamos","480");
DROP TABLE IF EXISTS cms_redes_sociales;

CREATE TABLE `cms_redes_sociales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `direccion` varchar(200) NOT NULL,
  `type_social_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_redes_sociales_cms_type_social1` (`type_social_id`),
  CONSTRAINT `fk_cms_redes_sociales_cms_type_social1` FOREIGN KEY (`type_social_id`) REFERENCES `cms_type_social` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO cms_redes_sociales VALUES("6","https://twitter.com/lacampana_acero","1");
INSERT INTO cms_redes_sociales VALUES("7","http://www.facebook.com/pages/la-campana/151565408220649","2");
INSERT INTO cms_redes_sociales VALUES("8","http://www.pinterest.com/lacampanaaceros/","3");
INSERT INTO cms_redes_sociales VALUES("9","https://plus.google.com/u/0/112856535283529764048/posts","4");
INSERT INTO cms_redes_sociales VALUES("10","http://www.youtube.com/user/lacampanaaceros","5");
INSERT INTO cms_redes_sociales VALUES("11","http://www.linkedin.com/company/la-campana-servicios-de-acero-s-a-?trk=hb_tab_compy_id_2327778","6");
DROP TABLE IF EXISTS cms_servicio_corte;

CREATE TABLE `cms_servicio_corte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(32) NOT NULL,
  `texto` varchar(211) NOT NULL,
  `cms_media_id` int(11) NOT NULL COMMENT 'cms_media_id, ser refiere al link del video',
  `cms_media_id1` int(11) DEFAULT NULL COMMENT 'cms_media_id1, serefiere al link de especificaciones tecnicas',
  `cms_media_id2` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_servicio_corte_cms_media1_idx` (`cms_media_id`),
  KEY `fk_servicio_corte_cms_media2_idx` (`cms_media_id1`),
  KEY `media_id2` (`cms_media_id2`),
  CONSTRAINT `cms_servicio_corte_ibfk_1` FOREIGN KEY (`cms_media_id2`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_servicio_corte_cms_media1` FOREIGN KEY (`cms_media_id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_servicio_corte_cms_media2` FOREIGN KEY (`cms_media_id1`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO cms_servicio_corte VALUES("6","corte transversal","cortamos a la medida, blancos o estándar, bobinas cold rolled, galvanizada, hot rolled, alfajor, decapada y plancha.","1023","1024","0");
INSERT INTO cms_servicio_corte VALUES("13","corte longitudinal o slitter","cortamos a la medida, flejes o cintas, bobinas cold rolled, galvanizada, decapada y hot rolled.","1025","1026","");
DROP TABLE IF EXISTS cms_sessions;

CREATE TABLE `cms_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO cms_sessions VALUES("0019cb066dc9c30ddc0af40ad09b7c4a","181.255.209.182","Mozilla/5.0 (compatible; MSIE 10.0; Windows Phone 8.0; Trident/6.0; IEMobile/10.0; ARM; Touch; NOKIA; Lumia 520)","1382481592","");
INSERT INTO cms_sessions VALUES("01a534f8d879c702227c9b3f31311fa8","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1383941378","");
INSERT INTO cms_sessions VALUES("0285b146fd8928b90cf85ee75750ca58","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36","1379721005","");
INSERT INTO cms_sessions VALUES("03173a2c14013e8dda4cbde40709f113","66.249.83.10","Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20110814 Firefox/6.0 Google (+https://developers.google.com/+/web/snippet/)","1383076898","");
INSERT INTO cms_sessions VALUES("033dda1b84f0ffdae6f869865b5c4e02","200.118.79.73","Mozilla/5.0 (Linux; Android 4.1.2; GT-I9300 Build/JZO54K) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Mo","1381415541","");
INSERT INTO cms_sessions VALUES("04659489499eb16f0656136bccdebe2b","190.85.81.218","Mozilla/5.0 (Windows NT 5.1; rv:24.0) Gecko/20100101 Firefox/24.0","1383250502","");
INSERT INTO cms_sessions VALUES("06520b1a97182583e1fcddf57872c4dc","200.118.79.73","Mozilla/5.0 (Linux; Android 4.1.2; GT-I9300 Build/JZO54K) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Mo","1381350461","");
INSERT INTO cms_sessions VALUES("06a43625a60f8c7aabe5f1b631bd7e45","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1383844606","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("0798e450b61753f51afb26a8761479f9","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380577400","");
INSERT INTO cms_sessions VALUES("07f7a009c357fa2497da44a7c0031729","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64; rv:23.0) Gecko/20100101 Firefox/23.0","1381424549","");
INSERT INTO cms_sessions VALUES("0afec556b0402f9410f14645f2eab4c5","190.60.239.146","Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0","1383854003","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("0c0236c745be61078c1b806885f9e296","200.93.143.83","Mozilla/5.0 (iPhone; CPU iPhone OS 7_0_2 like Mac OS X) AppleWebKit/537.51.1 (KHTML, like Gecko) Version/7.0 Mobile/11A5","1380323566","");
INSERT INTO cms_sessions VALUES("0c1e4d311de2a56d327727943ad3ffb1","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382024998","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("0c5efd9bd14acff32d59c012c00b2598","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0","1383844874","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("0c9b01a15ba75e8602aa270f0dd705ad","190.60.239.146","Mozilla/5.0 (Linux; Android 4.0.4; HUAWEI U9508 Build/HuaweiU9508) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.15","1382029082","");
INSERT INTO cms_sessions VALUES("0ce1fcfdab99d1077038c0c633cb1bfe","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380807965","");
INSERT INTO cms_sessions VALUES("0db67d9b807f9a765149fe2e3e764e62","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1383940670","");
INSERT INTO cms_sessions VALUES("0dbd350407e6c6c64de76c45420cebfd","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380211614","");
INSERT INTO cms_sessions VALUES("0e19eca4c7b630028faf46447b0f3019","190.60.239.146","Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1383089901","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("0f1d492be1cce336ed5c10b6fd4f0486","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1383842802","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("0fb02250f55661f6620bbd08cde9a066","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36","1381426037","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("100778f9e02212f2f3171d72f39c067e","186.30.182.229","Mozilla/5.0 (Windows NT 6.2; WOW64; rv:24.0) Gecko/20100101 Firefox/24.0","1381872008","");
INSERT INTO cms_sessions VALUES("1051a8f139c11b5724ec72ea72ddc45f","190.60.239.146","Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1384371876","");
INSERT INTO cms_sessions VALUES("118ea1900f1e68183590d637c766c068","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36","1381237481","");
INSERT INTO cms_sessions VALUES("11b815a47d958cd59698e54d7e0c282f","190.60.239.146","Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0","1384352507","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("12757f768b855caabe56b72208a21773","69.171.224.115","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1383071601","");
INSERT INTO cms_sessions VALUES("1347e988fab7b08dd53f97fcf22c5bd4","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1379990321","a:5:{s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("1383ba22cb453262be55fb1842b4b4a2","190.85.81.218","Mozilla/5.0 (iPhone; CPU iPhone OS 7_0_3 like Mac OS X) AppleWebKit/537.51.1 (KHTML, like Gecko) Version/7.0 Mobile/11B5","1384173503","");
INSERT INTO cms_sessions VALUES("15e7622fb1d6ce59f003545a0ceed3e9","186.30.182.229","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36","1381854253","a:5:{s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("15fc951e9fd59dce86cf5749d3598794","200.118.79.73","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1379798034","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("16eb39c9909335056e3246156ed09a2d","186.154.168.209","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1383184125","");
INSERT INTO cms_sessions VALUES("1748bd3a5ef66f8859308331cb44eba8","200.118.79.73","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1383877753","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("17dbc2cc0f240c574f9017761b8e4368","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1382391622","");
INSERT INTO cms_sessions VALUES("182adddb00ec44b9e6dea560ab84a27d","190.60.239.146","Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1383230701","");
INSERT INTO cms_sessions VALUES("188214e5606980919a6be1d3b8d753de","190.60.239.146","Mozilla/5.0 (Windows NT 6.3; WOW64; rv:24.0) Gecko/20100101 Firefox/24.0","1383078076","");
INSERT INTO cms_sessions VALUES("1a0cd66dad10f7172526baa0d85c0043","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382622982","a:6:{s:9:\"user_data\";s:0:\"\";s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("1b67b7771d657ba1af4d381130cac594","69.171.233.119","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1383066811","");
INSERT INTO cms_sessions VALUES("1c1209058070759866b199473ec7d02b","200.118.79.73","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1383319274","a:5:{s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("1cbf8f580d2c89d785ceb541caf8afba","69.171.224.117","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1383087171","");
INSERT INTO cms_sessions VALUES("1d1868ef7891cb79f25b411ff474d0cf","190.60.239.146","Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36","1381869763","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("1d82cda24bf1ee3235029b0727c9c2d1","190.60.239.146","Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382134938","");
INSERT INTO cms_sessions VALUES("1e1f7c302de3397f89ec0ff0ea6a4249","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1383053284","a:6:{s:9:\"user_data\";s:0:\"\";s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("1e2e7e60cb82fef4da9a5926637d60eb","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36 OPR/17.0.12","1381783135","");
INSERT INTO cms_sessions VALUES("1e4deb30ce903d34b16296eaf2baa29b","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36","1381424020","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("1e8f86c6db1c25842aa7e9477d04b76a","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1379713686","");
INSERT INTO cms_sessions VALUES("20082dd0e516466a29cfa13dbd6c270f","200.118.79.73","Mozilla/5.0 (Linux; Android 4.1.2; GT-I9300 Build/JZO54K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.82 Mob","1382524382","");
INSERT INTO cms_sessions VALUES("200d27142483d290cd980b679ea8c24d","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0","1383670844","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("216fd2b471c0faee2ae425fe3dad322e","69.171.245.7","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1382393670","");
INSERT INTO cms_sessions VALUES("2225f811340b6f47475b2e5974b29355","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/534.57.2 (KHTML, like Gecko) Version/5.1.7 Safari/534.57.2","1381498225","");
INSERT INTO cms_sessions VALUES("224adb9031a7f391056df55cb863eceb","69.171.224.113","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1383072262","");
INSERT INTO cms_sessions VALUES("22d95aeba658912442ebe5c9631c4a72","127.0.0.1","Mozilla/5.0 (Windows NT 6.2; WOW64; rv:24.0) Gecko/20100101 Firefox/24.0","1380916278","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("2382231c358d565edbcaaf9d670ca6f5","127.0.0.1","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.66 Safari/537.36","1380916694","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("23db02bd396615b4fb5f453328e16d12","190.60.239.146","Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0","1384376653","");
INSERT INTO cms_sessions VALUES("251547199f84cd5701f300948a3835e2","190.60.239.146","Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1379711219","a:6:{s:9:\"user_data\";s:0:\"\";s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("2a67f57436d8d181e3bb80a17052e4e8","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380322617","a:5:{s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("2b9a6b2f3b2547c6f3f8b196482a1929","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1381867439","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("2bae2eca0cf055d1409cbecddd6019e3","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1383917825","");
INSERT INTO cms_sessions VALUES("2c4640eec81e7b298b670a569ff3c843","190.60.239.146","Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382979145","");
INSERT INTO cms_sessions VALUES("2cb67fdb6c44d81f6b16e9aaf30284f4","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1379947802","");
INSERT INTO cms_sessions VALUES("2d0667fd22796ee9251d9f90c2e34f8f","200.93.143.83","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380059427","");
INSERT INTO cms_sessions VALUES("2d501ead78d00e9022f59d9934d6c2ef","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1379766908","");
INSERT INTO cms_sessions VALUES("306c75115645f30388e3e90a69da872c","186.86.65.54","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382625478","");
INSERT INTO cms_sessions VALUES("313d3244edef5fa8414049736a380d44","190.85.81.218","Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1383224633","");
INSERT INTO cms_sessions VALUES("315513bceea7b81835cc163739ce39c0","200.118.79.73","Mozilla/5.0 (Linux; Android 4.1.2; GT-I9300 Build/JZO54K) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Mo","1381350461","");
INSERT INTO cms_sessions VALUES("316b93b0c56548b4fe1da43d24aaee33","190.60.239.146","Mozilla/5.0 (Linux; U; Android 4.0.4; es-us; HUAWEI U9508 Build/HuaweiU9508) AppleWebKit/534.30 (KHTML, like Gecko) Vers","1381274704","");
INSERT INTO cms_sessions VALUES("32112a8b88829e3cc9f5156b21072b52","190.85.81.218","Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1384778158","");
INSERT INTO cms_sessions VALUES("343419264f15077a1cae52d907297cd6","200.93.143.83","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380136732","");
INSERT INTO cms_sessions VALUES("3560851370f7fb4b5c67b18cd511aa24","190.85.81.218","Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1383401455","");
INSERT INTO cms_sessions VALUES("356578225cb9877cefbe7e5378f1f801","69.171.224.113","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1383072274","");
INSERT INTO cms_sessions VALUES("357d9e88d03fc4916d6cda89308a5ef8","216.52.242.14","LinkedInBot/1.0 (compatible; Mozilla/5.0; Jakarta Commons-HttpClient/3.1 +http://www.linkedin.com)","1383163671","");
INSERT INTO cms_sessions VALUES("35f04f57335e5f60482c6bcf30664c73","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1379777506","");
INSERT INTO cms_sessions VALUES("363321fbcb9dceed0b6e07230fa79371","190.60.239.146","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1379798034","a:6:{s:9:\"user_data\";s:0:\"\";s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("3639377ac92b437d3b3d22e8d6809116","200.118.79.73","Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:24.0) Gecko/20100101 Firefox/24.0","1381350764","");
INSERT INTO cms_sessions VALUES("38e2787337f40bc501ffa8f54acc140c","66.249.83.10","Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20110814 Firefox/6.0 Google (+https://developers.google.com/+/web/snippet/)","1383076898","");
INSERT INTO cms_sessions VALUES("3a7e4437a3a6dd93f3c09a35d09249a9","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1383844578","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("3c2ca361f7688b89478766daa845ddbe","186.181.17.72","Mozilla/5.0 (Linux; Android 4.0.4; HUAWEI U9508 Build/HuaweiU9508) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.15","1379725548","");
INSERT INTO cms_sessions VALUES("3c5112c96d74414ed275dced84563fa7","216.52.242.14","LinkedInBot/1.0 (compatible; Mozilla/5.0; Jakarta Commons-HttpClient/3.1 +http://www.linkedin.com)","1383057582","");
INSERT INTO cms_sessions VALUES("3d2549628442db37da843033b03b63db","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382730355","");
INSERT INTO cms_sessions VALUES("3d60b12dbf6ea684d01aef1ccafab098","186.180.79.73","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1383940794","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("3fde378222e05874f3b4f5a296317ea2","190.60.239.146","Mozilla/5.0 (Linux; Android 4.0.4; HUAWEI U9508 Build/HuaweiU9508) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.15","1383867572","");
INSERT INTO cms_sessions VALUES("3ffd00410ada1120c20c15a16b71b3fa","190.60.239.146","Mozilla/5.0 (compatible; MSIE 10.0; Windows Phone 8.0; Trident/6.0; IEMobile/10.0; ARM; Touch; NOKIA; Lumia 520)","1383254358","");
INSERT INTO cms_sessions VALUES("409dea03bd332caf2ec287e1ca679e24","186.30.182.229","Mozilla/5.0 (Windows NT 6.2; WOW64; rv:24.0) Gecko/20100101 Firefox/24.0","1381461492","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("41dc2b0b7b2dcc77e1f630ddcca47f03","186.28.254.35","Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380287778","");
INSERT INTO cms_sessions VALUES("43c568329aad829c01d96efd80012c1d","69.171.237.9","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1380240245","");
INSERT INTO cms_sessions VALUES("446c3ca190c2cab63c7040939b0bd903","173.252.73.113","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1381929583","");
INSERT INTO cms_sessions VALUES("474daa182e8bd72087b3570e9546d5c7","66.249.83.10","Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20110814 Firefox/6.0 Google (+https://developers.google.com/+/web/snippet/)","1380226362","");
INSERT INTO cms_sessions VALUES("482a82b5d8eab75b1c1645ea570d4b8c","190.60.239.146","Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1383685880","");
INSERT INTO cms_sessions VALUES("483a8875d5df339ed5313aa98e796302","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1379777506","");
INSERT INTO cms_sessions VALUES("48722381c72a5ccd88b74217c341381b","186.28.193.76","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1379990932","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("49455e226a13c03ecb30eb0bc9c0c7f3","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380313673","");
INSERT INTO cms_sessions VALUES("4e97a76fcfab87230d376b1c8931a98a","186.28.193.42","Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .N","1383266888","");
INSERT INTO cms_sessions VALUES("4e9d76d50e4ed5fc12e1ad8be99e3850","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1383841343","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("4f7d71e543f6ad39fe331a884fb44de9","173.252.112.115","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1382393669","");
INSERT INTO cms_sessions VALUES("521bb391c5d6adcb2632f218fd39a245","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1379713686","");
INSERT INTO cms_sessions VALUES("53633d69f72283146ec5114d9249f3e4","69.171.235.117","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1383066896","");
INSERT INTO cms_sessions VALUES("545f9e4224d75776d3e841e24b4369fb","190.60.239.146","Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1383088976","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("54928a1ac0d1c348afc2a13b1d656b8c","190.60.239.146","Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382646048","");
INSERT INTO cms_sessions VALUES("57948934f3144dc765849a1bda3f07a0","190.85.81.218","Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1383245984","");
INSERT INTO cms_sessions VALUES("58bfa5912b854d1b4c17fe33ae779f39","190.60.239.146","Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20100101 Firefox/24.0","1380303639","");
INSERT INTO cms_sessions VALUES("5bce9d87123ddcfb9f26bdd8d7c447d8","190.60.239.146","Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1384376024","");
INSERT INTO cms_sessions VALUES("5c66ddb1b7e6e53bb201370b0fa91b8c","186.28.254.35","Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; BTRS102065; SLCC2; .NET CLR 2.0.50727; .NET CLR 3","1384009038","");
INSERT INTO cms_sessions VALUES("5d97db384cdb895e0b63caa3ce0d222d","186.28.254.35","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382201970","");
INSERT INTO cms_sessions VALUES("5e2b8e2d14f30e1777e12094b0112f52","66.249.83.10","Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20110814 Firefox/6.0 Google (+https://developers.google.com/+/web/snippet/)","1380226361","");
INSERT INTO cms_sessions VALUES("5ece7799943f5c7d3ba0e8215ecd3a41","200.93.143.83","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36","1381519127","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("608f741d2790543389c87e690c35318d","69.171.224.119","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1383066895","");
INSERT INTO cms_sessions VALUES("62bf05bdfbce59ca624be9c55e458502","190.60.239.146","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380317340","a:5:{s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("631645043fd5e498ce1a89fb5785a407","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.66 Safari/537.36","1380921288","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("634f0fc7ebca72626ec43b27f9c1ca97","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36","1381935163","");
INSERT INTO cms_sessions VALUES("639a7ef6c2f04e787982c74199f91c4b","190.60.239.146","Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382393712","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("6455c4784055f8af46499c09461f4276","181.251.145.12","Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0; EIE10;ENUSWOL)","1383168395","");
INSERT INTO cms_sessions VALUES("64ee1ae7683310ec5b3c9c7f10b2217b","200.93.143.83","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380296793","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("658f4bed1e0fdf93dee5b1e967d14741","69.171.237.11","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1380240241","");
INSERT INTO cms_sessions VALUES("691ce9cf7f5d57b791616ac74e1d0955","69.171.224.114","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1383084786","");
INSERT INTO cms_sessions VALUES("69d60970b0899208f492c24e2ba1893e","190.85.81.218","Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1383167668","");
INSERT INTO cms_sessions VALUES("6a5efb2dcdf31585adf7f990d61e42cb","200.118.79.73","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1379798034","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("6a73fb18057ad400ba372fdd9246d4b9","69.171.233.114","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1381929584","");
INSERT INTO cms_sessions VALUES("6cf11841ee0930376c08d4555a2d2d2c","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380313672","");
INSERT INTO cms_sessions VALUES("6ddc005fa3c5f20bb6e2ee11942d3f2b","190.85.81.218","Mozilla/5.0 (Windows NT 5.1; rv:24.0) Gecko/20100101 Firefox/24.0","1383250501","");
INSERT INTO cms_sessions VALUES("6e892dacbfdc222639a67790a991243c","54.221.198.105","Mozilla/5.0 (compatible; Embedly/0.2; snap; +http://support.embed.ly/)","1383164067","");
INSERT INTO cms_sessions VALUES("6ecd627f26042b227643b27f88a7b874","190.60.239.146","Mozilla/5.0 (Linux; U; Android 4.0.4; es-us; HUAWEI U9508 Build/HuaweiU9508) AppleWebKit/534.30 (KHTML, like Gecko) Vers","1381274835","");
INSERT INTO cms_sessions VALUES("6f484978df18a40c7232d58978cd8c39","69.171.235.118","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1380240247","");
INSERT INTO cms_sessions VALUES("6f59cc7cc7a6f781b5f0b0f3fd431841","200.119.17.82","Mozilla/5.0 (Windows NT 5.1; rv:24.0) Gecko/20100101 Firefox/24.0","1383164792","");
INSERT INTO cms_sessions VALUES("70a41c54ae634ec2a4a5641ff75123d2","200.93.143.83","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380131377","");
INSERT INTO cms_sessions VALUES("719fd33b00e9f8b29498988e9b2870aa","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382971873","");
INSERT INTO cms_sessions VALUES("722789009aa7976b87af8c4a8f3958ab","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382029826","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("738b25933b87f8bca169038fbdb4a92a","200.119.12.230","Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)","1383250104","");
INSERT INTO cms_sessions VALUES("73a34bc660783e1438240cd26ad55546","190.85.81.218","Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382446913","");
INSERT INTO cms_sessions VALUES("746ace6613fd67dd2e8dd206611679e2","69.171.224.113","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1383087192","");
INSERT INTO cms_sessions VALUES("754480792786f658be6e2d373ff64e8c","190.84.222.147","Mozilla/5.0 (Windows NT 6.2; WOW64; rv:24.0) Gecko/20100101 Firefox/24.0","1382970111","");
INSERT INTO cms_sessions VALUES("77508abda1676beea2aeaf6f53722f63","200.118.79.73","Mozilla/5.0 (Linux; Android 4.1.2; GT-I9300 Build/JZO54K) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Mo","1381350462","");
INSERT INTO cms_sessions VALUES("77604d82d92feab2e8fb0fe5b4755524","200.118.79.73","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36","1381870259","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("77eec8d715ee7d5c1d9fd042d162ac4c","69.171.224.117","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1383066891","");
INSERT INTO cms_sessions VALUES("77f5cc5b62f82e0827381578bccb3cf1","66.249.83.10","Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20110814 Firefox/6.0 Google (+https://developers.google.com/+/web/snippet/)","1383073533","");
INSERT INTO cms_sessions VALUES("796727d3b9b0bf1619701362095cd524","190.85.81.218","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/534.57.2 (KHTML, like Gecko) Version/5.1.7 Safari/534.57.2","1383843186","");
INSERT INTO cms_sessions VALUES("79a999e51912648613f8118697a2d59e","190.60.239.146","Mozilla/5.0 (Android; Mobile; rv:25.0) Gecko/25.0 Firefox/25.0","1383236014","");
INSERT INTO cms_sessions VALUES("79ba988244f482a4c3917864dce1d82e","190.85.48.170","Mozilla/5.0 (Windows NT 5.1; rv:24.0) Gecko/20100101 Firefox/24.0","1383165559","");
INSERT INTO cms_sessions VALUES("79c3feb4b03407ebc465a0faa17fb501","66.249.83.10","Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20110814 Firefox/6.0 Google (+https://developers.google.com/+/web/snippet/)","1383071606","");
INSERT INTO cms_sessions VALUES("79cce977800d9928adffe1ea530283c6","190.85.81.218","Mozilla/5.0 (Windows NT 5.1; rv:25.0) Gecko/20100101 Firefox/25.0","1383167559","");
INSERT INTO cms_sessions VALUES("7c368a0a55d52eaaaf6e19d222592f7e","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1384784709","a:6:{s:9:\"user_data\";s:0:\"\";s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("7cca239280b8d5e35e4cea42fd488cf0","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1381331702","");
INSERT INTO cms_sessions VALUES("7dcb3966c567618cda5a481661779020","186.28.254.35","Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; BTRS102065; SLCC2; .NET CLR 2.0.50727; .NET CLR 3","1383771744","");
INSERT INTO cms_sessions VALUES("7e7c07de1ce87375d44af8eced8c2583","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; rv:25.0) Gecko/20100101 Firefox/25.0","1383170299","");
INSERT INTO cms_sessions VALUES("7f4ed74daef9700902d137bb19b1a41e","186.28.254.35","Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; BTRS102065; SLCC2; .NET CLR 2.0.50727; .NET CLR 3","1383771870","");
INSERT INTO cms_sessions VALUES("7f74d850f23c93ba3662a0e097c34cad","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382189222","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("7f7559ce7bea4f65e47e1ed799360840","200.93.143.83","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36","1381529313","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("7f9df1211e3a6a7e081e6ae0e4fb0d8a","200.118.79.73","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36","1381352406","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("7faa6de7d129b477248e93633534e4f0","186.28.254.35","Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1379710474","");
INSERT INTO cms_sessions VALUES("80a75b55375ce97d0f43ea978f5e7619","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380322491","");
INSERT INTO cms_sessions VALUES("80be9af7b4aaf7d6725449e938794022","190.60.239.146","Mozilla/5.0 (Linux; Android 4.1.2; GT-I9300 Build/JZO54K) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Mo","1381276968","");
INSERT INTO cms_sessions VALUES("82d0bbaf3788a5256616c52657fe1595","173.252.100.113","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1382632869","");
INSERT INTO cms_sessions VALUES("834c4e6c17f35f2a57174d8d4f0ec1b8","200.93.143.83","Mozilla/5.0 (iPhone; CPU iPhone OS 7_0 like Mac OS X) AppleWebKit/537.51.1 (KHTML, like Gecko) Version/7.0 Mobile/11A465","1380285427","");
INSERT INTO cms_sessions VALUES("83a04b5197258e4d8808a94d64c24898","190.60.239.146","Mozilla/5.0 (Linux; Android 4.0.4; HUAWEI U9508 Build/HuaweiU9508) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.15","1383347376","");
INSERT INTO cms_sessions VALUES("84556e655b1a476e21104ff006bf8e13","69.171.224.118","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1383087111","");
INSERT INTO cms_sessions VALUES("84bf4a0ec9e8ca3d9f94488c31ec0326","190.60.239.146","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36","1381251640","a:3:{s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("89487d415c6d0318fc290a3eef4347a7","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36","1381262687","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("89fd6ba83a6ab0417bf4242f8204deb4","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64; rv:24.0) Gecko/20100101 Firefox/24.0","1381461491","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("8c503926a2ffa3b3839963a6048436b6","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36","1381861012","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("8e43ac706c760250af0b353e479406a0","69.171.247.114","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1383144744","");
INSERT INTO cms_sessions VALUES("8f21fa64969866d6228c3e8fad33e4cf","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0","1383670822","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("8f2c31f90d8feac47ed8d910766fd9ea","69.171.224.118","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1383066804","");
INSERT INTO cms_sessions VALUES("9014e62dcef823bc9f8112db4a386377","69.171.224.114","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1383066807","");
INSERT INTO cms_sessions VALUES("90dafb5aeebcff0c44ae455218badaa5","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380210743","");
INSERT INTO cms_sessions VALUES("918dfc96f67b2b5adce1dd6f4e7ef338","200.93.143.83","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380721994","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("91a04117ba6ec6a775f173c42bd82d76","186.28.254.35","Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380210732","");
INSERT INTO cms_sessions VALUES("92513ace33ae6d369ec5d5b5891341e6","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1381931423","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("92c08b5a2ef42fb17f686b3464ba9fa3","173.252.100.114","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1382632865","");
INSERT INTO cms_sessions VALUES("92c280b02837bba5afec834bb40a09a9","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382030442","a:6:{s:9:\"user_data\";s:0:\"\";s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("939ad2a7faf1193f40187188e97acfb6","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0","1383841729","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("97e38fe5ab163d1ae075534d36080069","190.85.81.218","Mozilla/5.0 (Linux; U; Android 4.1.2; es-us; GT-I9300 Build/JZO54K) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 M","1383413654","");
INSERT INTO cms_sessions VALUES("97ef406fdefd9c279212ee4e15be6dc1","69.171.248.5","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1383144749","");
INSERT INTO cms_sessions VALUES("9834bb4bcaf175ed2eaa2e3f3fe6ef61","186.28.254.35","Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1379777483","");
INSERT INTO cms_sessions VALUES("98eecb3fef02159b5583d9460f84bf3e","200.118.79.73","Mozilla/5.0 (Linux; Android 4.1.2; GT-I9300 Build/JZO54K) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Mo","1381350462","");
INSERT INTO cms_sessions VALUES("998e5aa79b86b5d548a0242d33878a11","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64; rv:23.0) Gecko/20100101 Firefox/23.0","1381954914","a:6:{s:9:\"user_data\";s:0:\"\";s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("99cbe4f16b1faee7e1054898a96c5b69","173.252.73.118","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1381929578","");
INSERT INTO cms_sessions VALUES("99ee379487b84b801a5db5e8fe914ec2","186.28.254.35","Mozilla/5.0 (Windows NT 6.1; WOW64; rv:24.0) Gecko/20100101 Firefox/24.0","1383229231","");
INSERT INTO cms_sessions VALUES("99f41d3ad45637e16c147c6754030577","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1381496741","");
INSERT INTO cms_sessions VALUES("9a53affb63ac0a30c2fbee3a250ae2dd","186.28.254.35","Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380211607","");
INSERT INTO cms_sessions VALUES("9a79b2ad775daa5f511d7ca558f43ea9","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1379713686","");
INSERT INTO cms_sessions VALUES("9b8c27ebacac987a157aba61e7da3d54","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1381938132","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("9c01e6cf18a5d054b65736febaf732c7","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0","1383661314","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("9d1cb68b4591f9b4ddd83ddda70355b0","190.60.239.146","Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Win64; x64; Trident/6.0)","1381424521","");
INSERT INTO cms_sessions VALUES("9d4ec0582392d09f77aa60838af75a5e","66.249.83.10","Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20110814 Firefox/6.0 Google (+https://developers.google.com/+/web/snippet/)","1383071597","");
INSERT INTO cms_sessions VALUES("9dda7e631a9e6299c314a00109f4ca71","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1381498675","");
INSERT INTO cms_sessions VALUES("9e684aebb1083324591594e71a5b7fff","69.171.224.119","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1383072091","");
INSERT INTO cms_sessions VALUES("9fcc6e495b5f31d390bfab1760fdb92e","200.93.143.83","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380664968","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("9fd4aa607bcfd680fb24539b3c819340","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1383844005","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("a35eaccfc9808a82db75ea8789438988","190.60.239.146","Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1383856120","");
INSERT INTO cms_sessions VALUES("a3792c0832f481314ade8b9d966015b3","186.28.254.35","Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380036829","");
INSERT INTO cms_sessions VALUES("a3a5ac35203fc50637374f668d35e243","190.85.81.218","Mozilla/5.0 (Linux; Android 4.2.2; GT-I9500 Build/JDQ39) AppleWebKit/537.22 (KHTML, like Gecko) Chrome/25.0.1364.169 Mob","1382446249","");
INSERT INTO cms_sessions VALUES("a43b4ab6fc31e9a9de05f42f47724b5e","186.82.189.141","Mozilla/5.0 (Linux; Android 4.0.4; HUAWEI U9508 Build/HuaweiU9508) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.15","1381498917","");
INSERT INTO cms_sessions VALUES("a5fefb7cb25bd3d5864fa19ae0bdf264","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1381874316","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("a65e8aa63d4a95ef10b8aa02dd3e9d12","190.60.239.146","Mozilla/5.0 (Linux; Android 4.0.4; HUAWEI U9508 Build/HuaweiU9508) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.15","1382735761","");
INSERT INTO cms_sessions VALUES("a7a404d8c523a77158c42dace6cb28e0","69.171.224.113","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1383084601","");
INSERT INTO cms_sessions VALUES("a8d8e22fc16439feef4af5be28f0cb0f","216.52.242.14","LinkedInBot/1.0 (compatible; Mozilla/5.0; Jakarta Commons-HttpClient/3.1 +http://www.linkedin.com)","1380225891","");
INSERT INTO cms_sessions VALUES("a8ddddecde275d83f33d6fed3a80cdab","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1381496180","");
INSERT INTO cms_sessions VALUES("a91a66275ee0656a36f9475e6db42ca6","190.60.239.146","Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0","1384377268","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("a94c418ef852a53208a54000de638c75","190.60.239.146","Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0","1383853957","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("a9a91ab112ddab2253a3aba863556a6f","190.85.81.218","Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1383225099","");
INSERT INTO cms_sessions VALUES("aa00c9248ef058ee5beefabf7f262f88","66.249.83.10","Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20110814 Firefox/6.0 Google (+https://developers.google.com/+/web/snippet/)","1383076895","");
INSERT INTO cms_sessions VALUES("aa46968c9058a6abfad557421f196dff","200.118.79.73","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36","1381423004","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("aa6792a8c6870f76e17031a5b2c2f6ae","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1383755876","a:5:{s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("aade847e0f8006ff1031a1ca316939cb","69.171.224.119","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1383084604","");
INSERT INTO cms_sessions VALUES("ab51157eb15c9b7538d12f6f6b8d756c","66.249.83.10","Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20110814 Firefox/6.0 Google (+https://developers.google.com/+/web/snippet/)","1383073535","");
INSERT INTO cms_sessions VALUES("aba95e0d50bcd2dd9d390f0d60a6fdde","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1379713687","");
INSERT INTO cms_sessions VALUES("abc655836317e74b5ee2221494808560","190.85.81.218","Mozilla/5.0 (Windows NT 5.1; rv:24.0) Gecko/20100101 Firefox/24.0","1383250501","");
INSERT INTO cms_sessions VALUES("ac1d9d5d7b354b6cdfae5c90b57106d3","69.171.242.117","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1380226078","");
INSERT INTO cms_sessions VALUES("ac3cbcbd54cc7aee868f73a9f1a5014b","186.30.182.229","Mozilla/5.0 (Linux; Android 4.1.2; GT-I8190L Build/JZO54K) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 M","1381498881","");
INSERT INTO cms_sessions VALUES("af8c1163a483f0cf2a983c7a8d8ad0d9","69.171.224.115","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1383070626","");
INSERT INTO cms_sessions VALUES("afd63f25f640e46555552204d77c3324","190.60.239.146","Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20100101 Firefox/24.0","1381865594","a:5:{s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("b0a5ec97cd0d4c5db79ad16a725622e9","69.171.247.118","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1383144743","");
INSERT INTO cms_sessions VALUES("b167dabba1de438cf45aaeca98791339","190.60.239.146","Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1383088976","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("b198407a57766fbcbe35d50dc9daeb63","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382033963","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("b1a1babeeaf1dc0eb0b815e1d579b213","190.84.222.147","Mozilla/5.0 (Windows NT 6.2; WOW64; rv:24.0) Gecko/20100101 Firefox/24.0","1382739158","");
INSERT INTO cms_sessions VALUES("b30c7b63d75eb42db33b83d1d7387556","190.84.222.147","Mozilla/5.0 (Windows NT 6.2; WOW64; rv:24.0) Gecko/20100101 Firefox/24.0","1382739158","");
INSERT INTO cms_sessions VALUES("b3469cc57d2405a0bd0ec646cf85fa18","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1381424563","");
INSERT INTO cms_sessions VALUES("b3ef91a26f33330b17c980a01102b60b","190.60.239.146","Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20100101 Firefox/24.0","1383087459","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("b4b2d077a5a26cba9d7a0b1b91e8d965","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1379777506","");
INSERT INTO cms_sessions VALUES("b5268234336eb50732180820aba22e31","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1383254088","");
INSERT INTO cms_sessions VALUES("b6fdd0f3d820fe4c5d2d73a47d5fbe60","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380810763","");
INSERT INTO cms_sessions VALUES("b7096c10dc2d8c646371326d2aac2028","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382560762","a:6:{s:9:\"user_data\";s:0:\"\";s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("b809b5c32fc26a28880fd94017e25ecc","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1381867980","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("b857588e3ed65e5b12c79870c3a3ad19","69.171.248.4","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1382632870","");
INSERT INTO cms_sessions VALUES("ba7aef70de1e6c85baa83904adc59105","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380313672","");
INSERT INTO cms_sessions VALUES("bb0f502fd4c3515918e6304eb55c45ec","186.28.254.35","Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; WOW64; Trident/6.0)","1383770103","");
INSERT INTO cms_sessions VALUES("bb664526ee8d73fcae91b2673e113fef","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1383932600","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("bb74957b61f2c7d84b2d133828db0c34","190.60.239.146","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1383854596","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("bce71e0b11c339c2a7ca29ac0c82a36a","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0","1383845029","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("beb366f84feef5355996fc5351d731ab","190.60.239.146","Mozilla/5.0 (Linux; Android 4.1.2; GT-I9300 Build/JZO54K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.92 Mob","1383258772","");
INSERT INTO cms_sessions VALUES("befbe2722a7fd35cdb7598f2277f5312","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380040862","");
INSERT INTO cms_sessions VALUES("bf32cdcf488d9b67e27c1bf9d6877c1f","186.28.254.35","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382460218","");
INSERT INTO cms_sessions VALUES("c00b56e0ac8324c680b3deed4f943385","69.171.224.114","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1383071086","");
INSERT INTO cms_sessions VALUES("c22dac36b3468f99d4640e837abde250","190.60.239.146","Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36","1381941890","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("c29ea90b023ac2acdb23753df51d42bc","69.171.224.118","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1383075067","");
INSERT INTO cms_sessions VALUES("c2a6361d1523c096c26d33248dea2b51","186.28.254.35","Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1379766736","");
INSERT INTO cms_sessions VALUES("c391e967dd71e9f487c5853f13c570df","66.249.83.10","Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20110814 Firefox/6.0 Google (+https://developers.google.com/+/web/snippet/)","1383073532","");
INSERT INTO cms_sessions VALUES("c41047ec13d87911d2a64e0638c11772","200.118.79.73","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36","1380995592","");
INSERT INTO cms_sessions VALUES("c41e3e12f8581f29f06359da0fc4c00e","200.93.143.83","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380295512","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("c4e3ef9cca96821bc5191d7b6d360303","190.60.239.146","Mozilla/5.0 (compatible; MSIE 10.0; Windows Phone 8.0; Trident/6.0; IEMobile/10.0; ARM; Touch; NOKIA; Lumia 520)","1383662581","");
INSERT INTO cms_sessions VALUES("c71cad37b58de31877cc79ae4d151782","190.60.239.146","Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382140214","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("c7df8a0caec86416e995b9c4767090a3","190.60.239.146","Mozilla/5.0 (Windows NT 6.3; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0","1383854003","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("c82cc950e1e31ca95f37b62344a27464","186.30.182.229","Mozilla/5.0 (Windows NT 6.2; WOW64; rv:24.0) Gecko/20100101 Firefox/24.0","1381461491","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("c875d00367317cab870b9b1e14ed8595","69.171.237.11","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1383078763","");
INSERT INTO cms_sessions VALUES("c9a0972aa4720f520a235d0e053ddd5e","200.118.79.73","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1383877726","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("ccde4cc269c64db78c4b13a24f62ab05","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1379777506","");
INSERT INTO cms_sessions VALUES("cd04d9d0baef3b3fb6ba5dce2f7c9a78","186.28.193.76","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1379990322","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("cd79009ff0089480ee66031363b357aa","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36","1379708193","");
INSERT INTO cms_sessions VALUES("cd90743a133c5a0816770163fcaa76d7","186.82.189.141","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36","1379791892","");
INSERT INTO cms_sessions VALUES("ce464e19ef0009d6a9671d75d2612140","69.171.224.119","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1383087169","");
INSERT INTO cms_sessions VALUES("cfdc539f1de36ce6e48338c181e0ee64","190.60.239.146","Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1383949709","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("cfe963520fa5c7e1173691bb14be9768","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64; rv:24.0) Gecko/20100101 Firefox/24.0","1381497075","");
INSERT INTO cms_sessions VALUES("d2ceb6f954b06ab2b53a881279af4bd8","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0","1383670887","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("d2d569e69f9b2bc43f872427a414a865","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20100101 Firefox/24.0","1383165834","");
INSERT INTO cms_sessions VALUES("d3274b7e7403e01ca81e2e6150afbe94","69.171.224.119","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1383087107","");
INSERT INTO cms_sessions VALUES("d35c4e888738c466fd38c6f8872a26ae","69.171.224.119","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1383084788","");
INSERT INTO cms_sessions VALUES("d393a68275dbdec5606f16db1cde991d","190.60.239.146","Mozilla/5.0 (Linux; U; Android 4.0.4; es-us; HUAWEI U9508 Build/HuaweiU9508) AppleWebKit/534.30 (KHTML, like Gecko) Vers","1382646668","");
INSERT INTO cms_sessions VALUES("d3d2085cbbab1a2e13aeed402077a22c","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0","1383671876","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("d3fcc4d91cbc50c7a1fcd6509130cb99","190.60.239.146","Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0)","1381424510","");
INSERT INTO cms_sessions VALUES("d4c8a6aba5c8dd95f30202c8110e92ca","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36","1379708193","");
INSERT INTO cms_sessions VALUES("d4ef569ba3a3754d5c2ccd03e8af2434","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382024675","a:6:{s:9:\"user_data\";s:0:\"\";s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("d5bdfc71335108110b87fa6ef5804ea1","186.28.254.35","Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380555206","");
INSERT INTO cms_sessions VALUES("d5d38003d5820058475ee1a8422bb29d","69.171.233.118","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1383078764","");
INSERT INTO cms_sessions VALUES("d6251d478eb79ee3a35e168353f96426","200.93.143.83","Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.69 Safari/537.36","1382012231","");
INSERT INTO cms_sessions VALUES("d65a0f149bf4e9d17049a926f3bee620","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1384454324","");
INSERT INTO cms_sessions VALUES("d686ab48bc13ebbff10f10ac68379c06","69.171.224.113","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1383075066","");
INSERT INTO cms_sessions VALUES("d74c36028796002e660eea407aae9b05","190.60.239.146","Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20100101 Firefox/24.0","1380238977","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("d8130bd555a189481a0cbc70d153064a","69.171.224.115","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1383071693","");
INSERT INTO cms_sessions VALUES("d83b5ec22def084300f80e5c19be7d41","186.28.254.35","Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; WOW64; Trident/6.0)","1379709461","");
INSERT INTO cms_sessions VALUES("d857df6b74d3f6f19bcdb59415e91b65","190.60.239.146","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.48 Safari/537.36","1384355183","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("dacbd554c8add94659fde25ac8b2046c","186.28.254.35","Mozilla/5.0 (Windows NT 6.1; WOW64; rv:24.0) Gecko/20100101 Firefox/24.0","1383238645","");
INSERT INTO cms_sessions VALUES("dadc2b92b9b1ee5a96640ab516d42afa","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1382370601","");
INSERT INTO cms_sessions VALUES("dd158ed3b2383cc9a5bd6994c5380fc8","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0","1383844145","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("dd3901695efe52b3a3f3a263186d7e51","69.171.224.118","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1383084165","");
INSERT INTO cms_sessions VALUES("dd6c0f2c5cd0cd4dcd4905cd200a467c","69.171.242.116","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1380226074","");
INSERT INTO cms_sessions VALUES("ddcdfefc7abc0506a2746a93e1f0b26b","69.171.237.15","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1383078759","");
INSERT INTO cms_sessions VALUES("ddf013fb0fd69a3668237ccbee8202ec","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36","1379708193","");
INSERT INTO cms_sessions VALUES("de4bf977ee54c2a320ba0accb2609d6e","190.60.239.146","Mozilla/5.0 (Windows NT 6.1; WOW64; rv:24.0) Gecko/20100101 Firefox/24.0","1383315597","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("de4d71359296bc81689cdab6ce189672","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382798394","");
INSERT INTO cms_sessions VALUES("deb0d2327510e0fb24f43eef6c862a97","200.93.143.83","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380724002","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("df3c589154aed02428c16021bf889385","181.252.25.253","Mozilla/5.0 (Linux; Android 4.2.2; GT-I9500 Build/JDQ39) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.92 Mobi","1384060142","");
INSERT INTO cms_sessions VALUES("dfe59a45f8048d41c56f70531c224a28","69.171.224.119","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1383087194","");
INSERT INTO cms_sessions VALUES("e003dba09c1e5113bce7d81611dc6d8c","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36","1381274659","");
INSERT INTO cms_sessions VALUES("e19687e3c68c35bbbdedc4fb8f29050f","173.252.112.115","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1382393665","");
INSERT INTO cms_sessions VALUES("e2f707ad273afff08fcc9568df30b143","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/534.57.2 (KHTML, like Gecko) Version/5.1.7 Safari/534.57.2","1381186731","");
INSERT INTO cms_sessions VALUES("e4deb66ad6a5342c68ce408b64094a94","181.54.96.16","Mozilla/5.0 (Windows NT 6.1; rv:25.0) Gecko/20100101 Firefox/25.0","1384285458","");
INSERT INTO cms_sessions VALUES("e5788a2962ee54f8bcae8877994ee4b9","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0","1383749678","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("e7cf820706bc0b445c1d29fcde35bdda","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.66 Safari/537.36","1380925043","");
INSERT INTO cms_sessions VALUES("e839f3b854b375bd3c630b0ef1f4a852","69.171.245.0","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1380226079","");
INSERT INTO cms_sessions VALUES("e84aef4674938f0cdf21ab986e8415f8","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382024095","a:6:{s:9:\"user_data\";s:0:\"\";s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("e875540c43bb98bae69352d5ebf911aa","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380141416","");
INSERT INTO cms_sessions VALUES("e933fbc369be442f01e20ddb14c734f6","54.221.199.147","Mozilla/5.0 (compatible; Embedly/0.2; +http://support.embed.ly/)","1383164066","");
INSERT INTO cms_sessions VALUES("ea26cbf3bc1ab0d50aa018c08f6dd2b3","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0","1383747416","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("ea4161811e8c96f442618e5223cc7d68","190.60.239.146","Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20100101 Firefox/24.0","1383068506","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("ea871fb2f5f00802902a2e4871dfec26","190.60.239.146","Mozilla/5.0 (Linux; Android 4.0.3; PAD703 Build/IML74K) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Mobi","1383227411","");
INSERT INTO cms_sessions VALUES("eb9e44f1394ef31b9b27fbfe453b7269","54.224.110.235","Mozilla/5.0 (compatible; Embedly/0.2; snap; +http://support.embed.ly/)","1383164067","");
INSERT INTO cms_sessions VALUES("ec05057bf8130c874f58d6db5c126c07","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1383841540","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("ef0df008ee135b0961ec6c938dea41cc","69.171.224.114","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1383072215","");
INSERT INTO cms_sessions VALUES("ef9dc475040fc072841d0a4b242be18d","69.171.224.115","facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)","1383070737","");
INSERT INTO cms_sessions VALUES("efa41d9181288c6998d46f845d903103","190.60.239.146","Mozilla/5.0 (Linux; Android 4.1.2; GT-I9300 Build/JZO54K) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Mo","1381350461","");
INSERT INTO cms_sessions VALUES("effe071013f533c992bf3894e97275c5","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382652938","");
INSERT INTO cms_sessions VALUES("f0a5c3b227d42560376296ee917b3ebd","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20100101 Firefox/24.0","1383169991","");
INSERT INTO cms_sessions VALUES("f102ee90b4c5abcfd98a86e482440fee","190.60.239.146","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382025805","a:6:{s:9:\"user_data\";s:0:\"\";s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("f1314fe97f569ccbfc3bd8952c9accc1","190.85.81.218","Mozilla/5.0 (Windows NT 5.1; rv:24.0) Gecko/20100101 Firefox/24.0","1383165942","");
INSERT INTO cms_sessions VALUES("f13e9c726e68d0ba182dad62140002e8","190.60.239.146","Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1384376467","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("f1e8310bf3da89d673dcc6e7a63e320d","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1382021892","");
INSERT INTO cms_sessions VALUES("f6f19f1635e14a979ef5151c01c0738c","186.28.254.35","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380313673","");
INSERT INTO cms_sessions VALUES("f77ceefefc8d7832f7e9ff8dd0d5d0ac","190.85.81.218","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1381954123","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("f7d65c6277ca953c37c0eb83f211f8c4","200.118.79.73","Mozilla/5.0 (Linux; Android 4.1.2; GT-I9300 Build/JZO54K) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Mo","1381350462","");
INSERT INTO cms_sessions VALUES("f9650e11aa8113fcf8f2508b8ce960b2","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1383763255","");
INSERT INTO cms_sessions VALUES("f96de199e01975f73891f0fa3e4c2ddd","190.60.239.146","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1383866959","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("fa4a6be0db822501a3ca014a59245dd2","186.28.254.35","Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; GTB7.5; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.3","1380141396","");
INSERT INTO cms_sessions VALUES("fc8555e7812ccd7b41554e04255cc7c2","200.93.143.83","Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380292212","a:5:{s:8:\"identity\";s:18:\"cms@imaginamos.com\";s:8:\"username\";s:13:\"administrator\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:7:\"user_id\";s:1:\"5\";s:14:\"old_last_login\";s:4:\"2013\";}");
INSERT INTO cms_sessions VALUES("fcc372e344b01647064a6a981993a2a8","190.65.207.186","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.76 Safari/537.36","1380293606","");
INSERT INTO cms_sessions VALUES("fdcfdfacb5b24ec2ccfe30f4da3aaa52","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1383844749","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("fe4dca7da8d7f9ab49b92fdfc96c717c","190.85.81.218","Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36","1383337223","");
INSERT INTO cms_sessions VALUES("feb99aa3c5f3e1d4293e39633760ed02","190.60.239.146","Mozilla/5.0 (Windows NT 6.2; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0","1383684028","a:4:{s:9:\"user_data\";s:0:\"\";s:5:\"email\";s:18:\"cms@imaginamos.com\";s:2:\"id\";s:1:\"5\";s:7:\"user_id\";s:1:\"5\";}");
INSERT INTO cms_sessions VALUES("ff7415408b4cda3c68c50eeadbe0d92e","66.249.83.10","Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20110814 Firefox/6.0 Google (+https://developers.google.com/+/web/snippet/)","1380226362","");
DROP TABLE IF EXISTS cms_sub_categorias;

CREATE TABLE `cms_sub_categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(35) NOT NULL,
  `subtitulo` varchar(50) NOT NULL,
  `texto` varchar(255) NOT NULL,
  `cms_categoria_id` int(11) NOT NULL,
  `cms_media_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_sub_categorias_cms_catgoria1_idx` (`cms_categoria_id`),
  KEY `fk_cms_sub_categorias_cms_media1_idx` (`cms_media_id`),
  CONSTRAINT `fk_cms_sub_categorias_cms_catgoria1` FOREIGN KEY (`cms_categoria_id`) REFERENCES `cms_categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cms_sub_categorias_cms_media1` FOREIGN KEY (`cms_media_id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS cms_trabajador;

CREATE TABLE `cms_trabajador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(47) NOT NULL,
  `cargo` varchar(74) NOT NULL,
  `comentario` text,
  `media_id` int(11) NOT NULL,
  `media_id1` int(11) NOT NULL,
  `media_id2` int(11) NOT NULL,
  `orden` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_trabajador_cms_media1_idx` (`media_id`),
  KEY `fk_trabajador_cms_media2_idx` (`media_id1`),
  KEY `media_id2` (`media_id2`),
  CONSTRAINT `cms_trabajador_ibfk_1` FOREIGN KEY (`media_id2`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_trabajador_cms_media1` FOREIGN KEY (`media_id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_trabajador_cms_media2` FOREIGN KEY (`media_id1`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

INSERT INTO cms_trabajador VALUES("4","ana rojas","aliada comercial","nací hace 25 años, soy una persona con carácter un poco fuerte, me gusta ser amable, respetuosa y tolerante. adoro la naturaleza, ver cine y estar con mi familia. Le tengo demasiado miedo a las arañas y ranas.\n\ndisfruto estar en mi casa, no recuerdo haber estado sola en mi vida. tengo muchísimos conocidos que cualquiera los agruparía como amigos, en mi caso soy muy selecta; la amistad es un tesoro muy valioso. amigos son aquellos personas que acuden a ti sin llamarlos, con solo mirarte saben lo que te pasa. de esos no tengo muchos, sin embargo me siento afortunada porque los tengo.\n\nsufro muchísimo cuando me equivoco y he aprendido a pedir perdón y me hace sentir bien, como decirle a todos los que quiero, que los quiero.\n\nel gusto y el amor son el toque secreto para convertir un trabajo en un estilo de vida, hace que tu trabajo sea tu mayor distracción, y así lo siento yo.\n\nme gustan las ventas y mi mayor satisfacción, lograr la satisfacción en mis clientes.\n","565","564","566","1");
INSERT INTO cms_trabajador VALUES("5","marisol sanchez","aliada comercial","“me encanta este trabajo “dice marisol. y aunque incursiono al mundo de las ventas desde hace más de 10 años en otro ramo diferente, el tema de la construcción la apasiona y la posibilidad de conocer gente nueva todos los días es su motivación.\n\nentablar amistades y el saber relacionarse con sus clientes siempre le sale de forma espontánea. “hoy gracias a mi experiencia como asesora, mis clientes se sienten satisfechos con la calidad del servicio que les prestó” comenta.\n\nno es casualidad que esta ibaguereña haya dedicado su vida a las ventas, desde muy joven sintió inclinación por el gusto a interacción con otras personas y gracias a su empeño y dedicación se consolida como una de las mejores asesoras actuales de la campana.\n\n“me gusta reírme y hablar de todo un poco, cuando logro cerrar un negocio hago que mis clientes se sientan en confianza y desde el inicio de la relación comercial me convierto en su amiga y colaboradora”. para ella el plan de trabajo y el seguimiento continuo es el éxito de sus negocios.\n","604","603","605","3");
INSERT INTO cms_trabajador VALUES("6","alexander molano","aliado comrecial","no hay certeza de nada, el mundo siempre admite cambios…\nlos únicos límites, son los que uno se fija…\n\nnacido en bogotá, siempre crecí con la idea de plasmar mis ideas en el mundo sin dejar pasar la vida en frente mío sin hacer nada. me encanta el futbol y la adrenalina del automovilismo,  además siempre ver en el deporte como un escape a la rutina, me  gusta la sensación de sentir la tranquilidad y de perderse por un momento del mundo de hoy con la letra de una canción o con la brisa de un lugar tranquilo. un buen libro y la sensación de vivir cada letra es mi motivación, vivir una historia literaria en la mente siempre ha sido algo alucinante para mí.\n\nme gusta aprender moderadamente, aunque más comprender lo que aprendo. soy del tipo de personas que piensa que la disciplina y el “querer interno” cambian el mundo y refleja resultados en la vida de una persona perseverante. el avance, la innovación y la sed de más cada día es lo que hace respirar el mundo; las nuevas ideas por locas que sean y ver más allá de la realidad y de la materialidad siempre ha sido mi motivación.\n\ncreyente de ser parte de una nueva generación tecnológica, eficiente, con soluciones inmediatas y conscientes de la necesidad de innovar. me apasiona la tecnología y las nuevas ideas por explorar, una nueva aplicación para android, un tweet con sensaciones de momento, compartir sitios con amigos en facebook  o un acontecimiento importante en linkedin hace parte de mi realidad cada día.\n\nsiempre he creído y lo sigo reafirmando; los mejores logros de la vida se logran con estrategia y con tiempo, siendo este el mejor consejero para avanzar en cada proyecto que trazo en mi vida.\n","601","600","602","2");
INSERT INTO cms_trabajador VALUES("7","rocio hernandez","aliada comercial","nací en bogotá en 1960, tengo 4 hermanos y  todos crecimos al lado de una hermosa mujer que nos ha enseñado siempre hacer fuertes y echados “pa’ delante”.\n\ntengo 3 hermosos hijos de los cuales me siento orgullosa, son personas respetuosas y responsables.\nempecé a trabajar en la campana responsablemente  en un punto de venta.\n\nen este momento de mi vida me gusta compartir con mis nietos y mi familia y espero cumplir el sueño de viajar y conocer el mundo. \n","607","606","608","5");
INSERT INTO cms_trabajador VALUES("8","rodrigo hoyos","aliado comercial","considero que soy una persona muy alegre la cual siempre ve el lado positivo por muy pequeño que sea. trato siempre de crear relaciones con la gente, pues de esa manera tengo la oportunidad de aprender de  sus conocimientos y experiencias.\n\n tengo muchos sueños los cuales siempre trato de cumplir. disfruto la vida y me gusta que las personas que me rodean también lo hagan. \nla campana ha sido una gran oportunidad que me ha permitido lograr metas. Soy apasionado por lo que hago, realizo cada una de mis tareas con responsabilidad y compromiso esperando poder brindar el mejor servicio posible. \n\nel placer más grande es sentir al final de un  largo día de trabajo que mis clientes están satisfechos con mi labor. \n","610","609","611","6");
INSERT INTO cms_trabajador VALUES("10","ivan ibañez","director comercial","siempre ando en la búsqueda de nuevas formas e ideas que causen impacto en como mostramos nuestros servicios y productos. creo que la empatia lo es todo para llevar una empresa al éxito; el conocer a fondo las necesidades de nuestros clientes y brindar soluciones precisas y rápidas, nos hace ganar confianza, seguridad y fidelidad. Me apasionan las ventas, la publicidad, el mercadeo y el diseño gráfico\n.\nsoy de Bogotá, y administrador de empresas graduado de la universidad internacional de la florida. he trabajado en el área de ventas por mas de 12 años.  me gusta montar en moto y conocer los diferentes paisajes que tenemos en Colombia. \n\nen la campana he trabajado por mas de 6 años; aprendiendo de cada uno de nuestro equipo de trabajo y puedo decir: ¡que somos una gran familia!.\n","595","594","596","4");
INSERT INTO cms_trabajador VALUES("11","lila ruiz","aliada comercial","me gusta trabajar en ventas e interactuar con mis clientes. me gusta conocer a cada una de las empresas que les vendo para brindarle un mejor servicio. me encanta viajar conocer nuevas culturas y los buenos restaurantes. \n\nno me rindo tan fácil. soy proactiva y mi motivación es ponerme retos difíciles pero no imposibles. me relaja ir de compras sin cohibirme de obtener lo que me gusta; es gratificante porque es el triunfo, después de una jornada interesante de trabajo.\n\nme gusta estar tranquila y compartir con mi familia. sentirme a gusto con cada cosa que hago siendo sincera, comprometida, y el toque secreto, mucho amor.\n","613","612","614","7");
INSERT INTO cms_trabajador VALUES("13","julian gomez","aliado comercial","nací y crecí en manzanares caldas, un pequeño municipio en el eje cafetero, donde siempre disfrute de la tranquilidad del campo, montar en bicicleta, nadar y jugar futbol en compañía de mis primos y amigos, además de tener una excelente familia, donde me inculcaron valores éticos y morales, me estructuraron siempre para que lograra  superarme y alcanzar mis metas. en 2003 me traslade a bogotá, buscando el sueño de ser profesional, estudiar siempre  ha sido mi principal pasión, y gracias a dios estoy a punto de culminar mi carrera de administración de empresas en la pontificia universidad javeriana.\n\nme considero un ser humano creativo, polifacético, sociable, atento, respetuoso, de un humor inigualable, futbolista aficionado e hincha del once caldas y el Barcelona de España. me fascinan los medios electrónicos y estar siempre a la vanguardia en temas tecnológicos. funde hace 10 años un blog de opinión para mi municipio: www.tribumanzanares.blogspot.com; otra faceta importante que me apasiona es la filantropía, servirle a la comunidad es una virtud que considero debemos tener todos los seres humanos, por ello he liderado proyectos de impacto social en zonas vulnerables de la capital y mi departamento.\n\ndesde hace 8 años estoy vinculado al sector constructor y de industria ofertando productos derivados del hierro y el acero; usando mi perspicacia técnica y de negocios me motiva obtener muchos más conocimientos, para asesorar, resolver inquietudes, gestionar negocios y contestar requerimientos de mis clientes, desde esta gran empresa como lo es la campana.\n","616","615","617","8");
INSERT INTO cms_trabajador VALUES("15","edgar elguedo","aliado comercial","Dinámico, diligente, emprendedor.  Ex integrante  por muchos años del legado cultural de mi familia al Carnaval de Barranquilla, patrimonio de la humanidad, La Danza El Torito Ribeño. Soy una persona responsable, amable, comprometido con las personas  y que con la iniciativa que me caracteriza, dispuesto  a aprender y adquirir conocimientos para aplicarlos a mi vida diaria y profesional. Me gusta el deporte, la música, considero que la familia es un tesoro y que un libro es un buen compañero. \n\nOrgulloso de mi tierra, me satisface dar lo mejor de mí para lograr metas y brindar apoyo a muchas personas.","791","790","792","9");
INSERT INTO cms_trabajador VALUES("16","maira perez","aliada comercial","las experiencias y aprendizajes del día a día…\n\nsoy una joven alegre, soñadora, dedicada y comprometida, así se describe maira pérez, publicista del área andina y asesora comercial de la campana.\n\ndesde temprana edad siento gusto por el arte; me desempeño en actividades como la pintura, el diseño, la fotografía y el baile entre otras actividades artísticas. la vida me ha llevado a conocer y aprender cosas nuevas, tales como el mercadeo, no es mi fuerte pero si algo, que actualmente me ha gustado y en lo cual deseo fortalecerme.\n\nconsidero que en el mundo, todos debemos estar atentos a conocer cosas nuevas, esto mismo hace crecer al ser humano como persona, profesionalmente y en su entorno social. por eso soy proactiva en mis actividades diarias, exigiéndome cada vez más y con ganas de conocer cada día cosas nuevas.\n\nhace algunos años me imaginaba trabajando en el medio publicitario, pero la vida me ha enfocado al mercadeo y el área comercial, es como si el área comercial me conquistara desde el primer instante. hoy en día considero, que es un medio del cual no quiero salir, quiero enfocarme  y cada día mejorar.\nhace algunos meses se me presentó la gran oportunidad de entrar a la campana, no creía entrar allí porque es una empresa muy buena y exigente, pero cuando me arriesgue me llamaron. ha sido una gran experiencia, no sólo un trabajo sino una escuela, donde cada día agradezco inmensamente las exigencias de mi jefe y el excelente calor humano, me encanta exigirme conmigo misma y ver los resultados ejecutados y que a otras personas también les genera beneficio.\n\nactualmente soy asesora comercial de mostrador, y me siento afortunada de atender a los clientes, el ambiente en el que me encuentro es el mejor y espero seguir creciendo y mejorando cada día.\n","794","793","795","10");
DROP TABLE IF EXISTS cms_trabaje_nosotros;

CREATE TABLE `cms_trabaje_nosotros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cms_media_id` int(11) NOT NULL,
  `subtitulo` varchar(112) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_trabaje_nosotros_cms_media1_idx` (`cms_media_id`),
  CONSTRAINT `fk_trabaje_nosotros_cms_media1` FOREIGN KEY (`cms_media_id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO cms_trabaje_nosotros VALUES("1","416","");
DROP TABLE IF EXISTS cms_type_social;

CREATE TABLE `cms_type_social` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO cms_type_social VALUES("1","Twitter");
INSERT INTO cms_type_social VALUES("2","Facebook");
INSERT INTO cms_type_social VALUES("3","Pinterest");
INSERT INTO cms_type_social VALUES("4","Google +");
INSERT INTO cms_type_social VALUES("5","Youtube ");
INSERT INTO cms_type_social VALUES("6","Linkedin");
DROP TABLE IF EXISTS cms_users;

CREATE TABLE `cms_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO cms_users VALUES("5","\0\0","administrator","092e624ccaf41c1b9c0dd32a1041043a82507bc7","e0efe63787","cms@imaginamos.com","","","0","1218e83c71363e71c292b071dace76d3f56b47af","1343253917","2013","1","","","","");
DROP TABLE IF EXISTS cms_users_groups;

CREATE TABLE `cms_users_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_users_groups` (`user_id`),
  KEY `fk_cms_users_groups_cms_groups1_idx` (`group_id`),
  CONSTRAINT `fk_cms_users_groups_cms_groups1` FOREIGN KEY (`group_id`) REFERENCES `cms_groups` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `user_users_groups` FOREIGN KEY (`user_id`) REFERENCES `cms_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO cms_users_groups VALUES("5","5","1");
DROP TABLE IF EXISTS cms_vancante;

CREATE TABLE `cms_vancante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(42) NOT NULL,
  `subtitulo` varchar(70) NOT NULL,
  `detalle` text NOT NULL,
  `intro_detalle` varchar(65) NOT NULL,
  `media_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_vancante_cms_media1_idx` (`media_id`),
  CONSTRAINT `fk_vancante_cms_media1` FOREIGN KEY (`media_id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

INSERT INTO cms_vancante VALUES("14","administrador de empresas","comercial","<div align=\"justify\">perfil administrador de empresas&nbsp;\n</div><div align=\"justify\">objetivo del cargo:&nbsp;</div><div align=\"justify\">administración y manejo de punto de venta logrando metas establecidas en el presupuesto de ventas de la empresa, manteniendo de forma activa las relaciones con el cliente, logrando una fidelización permanente del mismo.&nbsp;</div><div align=\"justify\"><br></div><div align=\"justify\">&nbsp;funciones claves:\n<br>•	conocer acertadamente los productos y servicios de la organización.\n<br>•	asesorar de manera real y objetiva a los clientes y sus necesidades.\n<br>•	orientar, ayudar y manejar el grupo de asesores del punto de venta.\n<br>•	administrar coherentemente su agenda de trabajo.\n<br>•	mantener una búsqueda constante de nuevos clientes y mercados.\n<br>•	realizar investigaciones constantes acerca del mercado y sus precios.\n<br>•	responsabilizarse del recaudo de cartera de los clientes.\n<br>•	ofrecer un excelente servicio post venta.<br>•	diligenciar y reportar al coordinador de calidad las oportunidades de mejoramiento expresadas por el cliente.<br>•	cumplir con las metas establecidas para el presupuesto.\n<br>•	confirmar con el cliente el recibo de la mercancía, la calidad del material el servicio prestado y resolver cualquier inquietud que pueda tener. <br><br>responsabilidades:\n<br>•	consolidar la imagen corporativa de la organización.\n<br>•	mejorar continuamente nuestro desempeño hacia el cliente.\n\n<br><br>condiciones de trabajo:&nbsp;</div><div align=\"justify\">salario: básico + comisiones por ventas del punto de venta.&nbsp;</div><div align=\"justify\"><br></div><div align=\"justify\">horario:&nbsp;</div><div align=\"justify\">lunes a viernes de 7:00am a 5:30pm.&nbsp;</div><div align=\"justify\">sábados de 8:00am a 12:00m&nbsp;\n</div><div align=\"justify\"><br></div><div align=\"justify\">relación con otras areas:&nbsp;</div><div align=\"justify\">el cargo se relaciona con las siguientes áreas para realizar su gestión: gerencia general, dirección comercial, departamento de cartera, departamento operativo.</div><div align=\"justify\"><br></div><div align=\"justify\">resultados esperados:\n<br>•	exceder las expectativas del cliente en cuanto a los productos y servicios brindados por el asesor comercial.\n<br>•	proactividad en el mejoramiento continúo de su desempeño.\n<br>•	compromiso con los objetivos y metas establecidas por la organización.\n \nsituaciones críticas del cargo:\n<br>•	gerenciamiento de clientes (actualización permanente de datos).\n<br>•	recaudos de cartera.\n \nindicadores de gestión:\n<br>•	(ingreso periodo actual – ingreso periodo anterior)/Ingresos periodo actual.<br>•	venta efectiva/visita realizada.<br>•	productos clientes/ total productos La Campana S.A.\n<br>•	clientes nuevos / total clientes por asesor.\n<br>•	clientes reactivados/total clientes inactivos.\n<br><br>formación académica:&nbsp;</div><div align=\"justify\">universitario (administración de empresas, mercadeo y publicidad, comunicación, ingenierías)&nbsp;\n</div><div align=\"justify\"><br></div><div align=\"justify\">experiencia laboral:&nbsp;</div><div align=\"justify\">mínimo 5 años de experiencia en ventas de materiales para la construcción y/o industria metalmecánica.&nbsp;\n</div><div align=\"justify\"><br></div><div align=\"justify\">conocimientos técnicos/específicos:&nbsp;</div><div align=\"justify\">conversiones de unidades de pesos, espesores y longitudes.&nbsp;</div><div align=\"justify\"><br></div><div align=\"justify\">salud y condiciones físicas:</div><div align=\"justify\">buen estado físico.&nbsp;</div><div align=\"justify\"><br></div><div align=\"justify\">&nbsp;competencias claves del cargo:\n<br>•	trabajar bajo presión.\n<br>•	tenacidad.\n<br>•	constancia.\n<br>•	comunicación oral.\n<br>•	presentación personal.\n<br>•	orientación al logro.\n<br>•	proactivo.\n<br>•	emprendedor.\n<br>•	creatividad en la solución de problemas.\n<br>•	persuasión.\n<br>•	atención al Cliente.\n</div>","administración y manejo de punto de venta.","1007");
INSERT INTO cms_vancante VALUES("15","aliado comercial","comercial","<div align=\"justify\">perfil administrador de empresas&nbsp;\n</div><div align=\"justify\">objetivo del cargo:&nbsp;</div><div align=\"justify\">administración y manejo de punto de venta logrando metas establecidas en el presupuesto de ventas de la empresa, manteniendo de forma activa las relaciones con el cliente, logrando una fidelización permanente del mismo.&nbsp;</div><div align=\"justify\"><br></div><div align=\"justify\">funciones claves:\n<br>•	conocer acertadamente los productos y servicios de la organización.\n<br>•	asesorar de manera real y objetiva a los clientes y sus necesidades.\n<br>•	orientar, ayudar y manejar el grupo de asesores del punto de venta.\n<br>•	administrar coherentemente su agenda de trabajo.\n<br>•	mantener una búsqueda constante de nuevos clientes y mercados.\n<br>•	realizar investigaciones constantes acerca del mercado y sus precios.\n<br>•	responsabilizarse del recaudo de cartera de los clientes.\n<br>•	ofrecer un excelente servicio post venta.<br>•	diligenciar y reportar al coordinador de calidad las oportunidades de mejoramiento expresadas por el cliente.<br>•	cumplir con las metas establecidas para el presupuesto.\n<br>•	confirmar con el cliente el recibo de la mercancía, la calidad del material el servicio prestado y resolver cualquier inquietud que pueda tener. <br><br>responsabilidades:\n<br>•	consolidar la imagen corporativa de la organización.\n<br>•	mejorar continuamente nuestro desempeño hacia el cliente.\n\n<br><br>condiciones de trabajo:&nbsp;</div><div align=\"justify\">salario: básico + comisiones por ventas del punto de venta.&nbsp;</div><div align=\"justify\"><br></div><div align=\"justify\">horario:&nbsp;</div><div align=\"justify\">lunes a viernes de 7:00am a 5:30pm.&nbsp;</div><div align=\"justify\">sábados de 8:00am a 12:00m&nbsp;\n</div><div align=\"justify\"><br></div><div align=\"justify\">relación con otras areas:&nbsp;</div><div align=\"justify\">el cargo se relaciona con las siguientes áreas para realizar su gestión: gerencia general, dirección comercial, departamento de cartera, departamento operativo.</div><div align=\"justify\"><br></div><div align=\"justify\">resultados esperados:\n<br>•	exceder las expectativas del cliente en cuanto a los productos y servicios brindados por el asesor comercial.\n<br>•	proactividad en el mejoramiento continúo de su desempeño.\n<br>•	compromiso con los objetivos y metas establecidas por la organización.\n \nsituaciones críticas del cargo:\n<br>•	gerenciamiento de clientes (actualización permanente de datos).\n<br>•	recaudos de cartera.\n \nindicadores de gestión:\n<br>•	(ingreso periodo actual – ingreso periodo anterior)/Ingresos periodo actual.<br>•	venta efectiva/visita realizada.<br>•	productos clientes/ total productos La Campana S.A.\n<br>•	clientes nuevos / total clientes por asesor.\n<br>•	clientes reactivados/total clientes inactivos.\n<br><br>formación académica:&nbsp;</div><div align=\"justify\">universitario (administración de empresas, mercadeo y publicidad, comunicación, ingenierías)&nbsp;\n</div><div align=\"justify\"><br></div><div align=\"justify\">experiencia laboral:&nbsp;</div><div align=\"justify\">mínimo 5 años de experiencia en ventas de materiales para la construcción y/o industria metalmecánica.&nbsp;\n</div><div align=\"justify\"><br></div><div align=\"justify\">conocimientos técnicos/específicos:&nbsp;</div><div align=\"justify\">conversiones de unidades de pesos, espesores y longitudes.&nbsp;</div><div align=\"justify\"><br></div><div align=\"justify\">salud y condiciones físicas:</div><div align=\"justify\">buen estado físico.&nbsp;</div><div align=\"justify\"><br></div><div align=\"justify\">&nbsp;competencias claves del cargo:\n<br>•	trabajar bajo presión.\n<br>•	tenacidad.\n<br>•	constancia.\n<br>•	comunicación oral.\n<br>•	presentación personal.\n<br>•	orientación al logro.\n<br>•	proactivo.\n<br>•	emprendedor.\n<br>•	creatividad en la solución de problemas.\n<br>•	persuasión.\n<br>•	atención al Cliente.\n</div>","lograr metas establecidas en el presupuesto de ventas","1008");
INSERT INTO cms_vancante VALUES("30","conductor camión","logística","<p class=\"p1\">funciones claves:</p><p class=\"p2\"><ul><li><span style=\"font-size: 10pt;\">entrega de productos de acero al cliente.</span></li><li><span style=\"font-size: 10pt;\">cuidado y conocimientos sobre mantenimiento de camiones.</span></li><li><span style=\"font-size: 10pt;\">brindar excelente&nbsp;atención&nbsp;al cliente en la entrega.</span></li><li><span style=\"font-size: 10pt;\">cumplimiento de entregas.</span></li><li><span style=\"font-size: 10pt;\">cargue de camiones en centro de servicios y puntos de venta.</span></li></ul></p><p class=\"p1\">experiencia:</p><p class=\"p1\"><ul><li><span style=\"font-size: 10pt;\">mínima de 3 años, en manejo de camiones con capacidad de hasta 14 toneladas. &nbsp;</span></li><li><span style=\"font-size: 10pt;\">preferiblemente con experiencia en el sector metalúrgico.&nbsp;</span></li><li><span style=\"font-size: 10pt;\">conocimientos básicos sobre el mantenimiento de los vehículos.&nbsp;</span></li></ul></p><p class=\"p1\">requerimientos:</p><p class=\"p1\"><ul><li><span style=\"font-size: 10pt;\">tener y mantener todos los documentos al día.</span></li></ul></p><p class=\"p1\">condiciones de trabajo:</p><p class=\"p1\">salario:</p><p class=\"p1\"><ul><li><span style=\"font-size: 10pt;\">por convenir.</span></li></ul></p><p class=\"p1\">horario:</p><p class=\"p2\"><ul><li><span style=\"font-size: 10pt;\">lunes a viernes de 7:45am - 5:30am</span></li><li><span style=\"font-size: 10pt;\">sabados de 8:00am a 12:00 del mediodía.</span></li></ul></p><p></p>","entrega, cuidado y manejo de productos de acero en Bogotá.","1022");
DROP TABLE IF EXISTS cms_video;

CREATE TABLE `cms_video` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `propietario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_video_cms_propietario1_idx` (`propietario_id`),
  CONSTRAINT `fk_cms_video_cms_propietario1` FOREIGN KEY (`propietario_id`) REFERENCES `cms_propietario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_video_cms_media1` FOREIGN KEY (`id`) REFERENCES `cms_media` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO cms_video VALUES("311","Video 1","lorem ipsum dolor sit amet, consectetuer adipiscing elit. aenean commodo ligula eget dolor. aenean massa. cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. nulla consequat massa quis enim. donec pede justo, fringilla vel, aliquet","1");
INSERT INTO cms_video VALUES("314","Video 1","lorem ipsum dolor sit amet, consectetuer adipiscing elit. aenean commodo ligula eget dolor. aenean massa. cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. nulla consequat massa quis enim. donec pede justo, fringilla vel, aliquet","1");
INSERT INTO cms_video VALUES("337","Video 1","lorem ipsum dolor sit amet, consectetuer adipiscing elit. aenean commodo ligula eget dolor. aenean massa. cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.","1");
INSERT INTO cms_video VALUES("364","Video 1","lorem ipsum dolor sit amet, consectetuer adipiscing elit. aenean commodo ligula eget dolor. aenean massa. cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.","1");
INSERT INTO cms_video VALUES("367","Prueba de video enterate","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sodales dui odio, ac accumsan felis luctus nec. Nulla nec fringilla orci, ac elementum quam. Quisque tempus dui quam, sed interdum sapien accumsan non. Maecenas in nulla vitae orci tincidunt malesuada. Donec varius dolor eu ipsum varius, ut porttitor lacus varius. Nulla dapibus suscipit viverra. Quisque sed congue enim. Nam molestie dolor sit amet fermentum condimentum. Curabitur hendrerit feugiat diam gravida tempor. Fusce semper ","1");
INSERT INTO cms_video VALUES("370","Prueba de video enterate","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sodales dui odio, ac accumsan felis luctus nec. Nulla nec fringilla orci, ac elementum quam. Quisque tempus dui quam, sed interdum sapien accumsan non. Maecenas in nulla vitae orci tincidunt malesuada. Donec varius dolor eu ipsum varius, ut porttitor lacus varius. Nulla dapibus suscipit viverra. Quisque sed congue enim. Nam molestie dolor sit amet fermentum condimentum. Curabitur hendrerit feugiat diam gravida tempor. Fusce semper ","1");
INSERT INTO cms_video VALUES("373","Prueba de video enterate","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sodales dui odio, ac accumsan felis luctus nec. Nulla nec fringilla orci, ac elementum quam. Quisque tempus dui quam, sed interdum sapien accumsan non. Maecenas in nulla vitae orci tincidunt malesuada. Donec varius dolor eu ipsum varius, ut porttitor lacus varius. Nulla dapibus suscipit viverra. Quisque sed congue enim. Nam molestie dolor sit amet fermentum condimentum. Curabitur hendrerit feugiat diam gravida tempor. Fusce semper ","1");
INSERT INTO cms_video VALUES("376","Prueba de video enterate","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sodales dui odio, ac accumsan felis luctus nec. Nulla nec fringilla orci, ac elementum quam. Quisque tempus dui quam, sed interdum sapien accumsan non. Maecenas in nulla vitae orci tincidunt malesuada. Donec varius dolor eu ipsum varius, ut porttitor lacus varius. Nulla dapibus suscipit viverra. Quisque sed congue enim. Nam molestie dolor sit amet fermentum condimentum. Curabitur hendrerit feugiat diam gravida tempor. Fusce semper ","1");
INSERT INTO cms_video VALUES("379","Prueba de video enterate","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sodales dui odio, ac accumsan felis luctus nec. Nulla nec fringilla orci, ac elementum quam. Quisque tempus dui quam, sed interdum sapien accumsan non. Maecenas in nulla vitae orci tincidunt malesuada. Donec varius dolor eu ipsum varius, ut porttitor lacus varius. Nulla dapibus suscipit viverra. Quisque sed congue enim. Nam molestie dolor sit amet fermentum condimentum. Curabitur hendrerit feugiat diam gravida tempor. Fusce semper ","1");
INSERT INTO cms_video VALUES("384","Prueba de video enterate","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sodales dui odio, ac accumsan felis luctus nec. Nulla nec fringilla orci, ac elementum quam. Quisque tempus dui quam, sed interdum sapien accumsan non. Maecenas in nulla vitae orci tincidunt malesuada. Donec varius dolor eu ipsum varius, ut porttitor lacus varius. Nulla dapibus suscipit viverra. Quisque sed congue enim. Nam molestie dolor sit amet fermentum condimentum. Curabitur hendrerit feugiat diam gravida tempor. Fusce semper ","1");
INSERT INTO cms_video VALUES("387","Video 1","lorem ipsum dolor sit amet, consectetuer adipiscing elit. aenean commodo ligula eget dolor. aenean massa. cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.","1");
INSERT INTO cms_video VALUES("390","Video 1","lorem ipsum dolor sit amet, consectetuer adipiscing elit. aenean commodo ligula eget dolor. aenean massa. cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.","1");
INSERT INTO cms_video VALUES("393","Prueba de video enterate","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sodales dui odio, ac accumsan felis luctus nec. Nulla nec fringilla orci, ac elementum quam. Quisque tempus dui quam, sed interdum sapien accumsan non. Maecenas in nulla vitae orci tincidunt malesuada. Donec varius dolor eu ipsum varius, ut porttitor lacus varius. Nulla dapibus suscipit viverra. Quisque sed congue enim. Nam molestie dolor sit amet fermentum condimentum. Curabitur hendrerit feugiat diam gravida tempor. Fusce semper ","1");
INSERT INTO cms_video VALUES("396","Video 1","lorem ipsum dolor sit amet, consectetuer adipiscing elit. aenean commodo ligula eget dolor. aenean massa. cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.","1");
INSERT INTO cms_video VALUES("399","Video 1","lorem ipsum dolor sit amet, consectetuer adipiscing elit. aenean commodo ligula eget dolor. aenean massa. cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.","1");
INSERT INTO cms_video VALUES("402","Video 1","lorem ipsum dolor sit amet, consectetuer adipiscing elit. aenean commodo ligula eget dolor. aenean massa. cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.","1");
INSERT INTO cms_video VALUES("425","Video de prueba","carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos .","1");
INSERT INTO cms_video VALUES("428","prueba imaginamos","iaginamos s.a.s iaginamos s.a.s iaginamos s.a.s iaginamos s.a.s iaginamos s.a.s iaginamos s.a.s ","1");
INSERT INTO cms_video VALUES("438","Prueba de video enterate","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sodales dui odio, ac accumsan felis luctus nec. Nulla nec fringilla orci, ac elementum quam. Quisque tempus dui quam, sed interdum sapien accumsan non. Maecenas in nulla vitae orci tincidunt malesuada. Donec varius dolor eu ipsum varius, ut porttitor lacus varius. Nulla dapibus suscipit viverra. Quisque sed congue enim. Nam molestie dolor sit amet fermentum condimentum. Curabitur hendrerit feugiat diam gravida tempor. Fusce semper ","1");
INSERT INTO cms_video VALUES("444","Prueba de video enterate","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sodales dui odio, ac accumsan felis luctus nec. Nulla nec fringilla orci, ac elementum quam. Quisque tempus dui quam, sed interdum sapien accumsan non. Maecenas in nulla vitae orci tincidunt malesuada. Donec varius dolor eu ipsum varius, ut porttitor lacus varius. Nulla dapibus suscipit viverra. Quisque sed congue enim. Nam molestie dolor sit amet fermentum condimentum. Curabitur hendrerit feugiat diam gravida tempor. Fusce semper ","1");
INSERT INTO cms_video VALUES("450","Video de prueba","carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos .","1");
INSERT INTO cms_video VALUES("453","Telecampana","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras at elit diam. Vestibulum aliquet metus eget tortor blandit, sit amet egestas mauris elementum. Suspendisse ut nibh risus. Aenean fringilla enim vitae consectetur convallis. Fusce ut consectetur lacus, et cursus mauris. In pretium in est vitae adipiscing. Phasellus dictum metus ut egestas suscipit. Vestibulum ornare velit eu vulputate ullamcorper. Nullam et volutpat nisi. Nulla commodo urna nec dolor tempus eleifend. Nulla quis justo t","1");
INSERT INTO cms_video VALUES("459","Video de prueba","carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos carlos imaginamos .","1");
INSERT INTO cms_video VALUES("718","//www.youtube.com/embed/Jj792bRQfVw","//www.youtube.com/embed/Jj792bRQfVw","2");
INSERT INTO cms_video VALUES("724","//www.youtube.com/embed/Jj792bRQfVw","//www.youtube.com/embed/Jj792bRQfVw","2");
INSERT INTO cms_video VALUES("730","hola mundo","hola mundo","1");
INSERT INTO cms_video VALUES("1044","hola mundo","hola mundo","2");
INSERT INTO cms_video VALUES("1057","DFGFDGFDG","DFGFDGFDG","2");
INSERT INTO cms_video VALUES("1089","DFGFDGFDG","DFGFDGFDG","2");
INSERT INTO cms_video VALUES("1107","Video 1","lorem ipsum dolor sit amet, consectetuer adipiscing elit. aenean commodo ligula eget dolor. aenean massa. cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. nulla consequat massa quis enim. donec pede justo, fringilla vel, aliquet","1");
INSERT INTO cms_video VALUES("1110","Video 1","lorem ipsum dolor sit amet, consectetuer adipiscing elit. aenean commodo ligula eget dolor. aenean massa. cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. nulla consequat massa quis enim. donec pede justo, fringilla vel, aliquet","1");
INSERT INTO cms_video VALUES("1113","Video 1","lorem ipsum dolor sit amet, consectetuer adipiscing elit. aenean commodo ligula eget dolor. aenean massa. cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. nulla consequat massa quis enim. donec pede justo, fringilla vel, aliquet","1");
INSERT INTO cms_video VALUES("1116","Video 1","lorem ipsum dolor sit amet, consectetuer adipiscing elit. aenean commodo ligula eget dolor. aenean massa. cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. nulla consequat massa quis enim. donec pede justo, fringilla vel, aliquet","1");
INSERT INTO cms_video VALUES("1119","Video 1","lorem ipsum dolor sit amet, consectetuer adipiscing elit. aenean commodo ligula eget dolor. aenean massa. cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. nulla consequat massa quis enim. donec pede justo, fringilla vel, aliquet","1");
INSERT INTO cms_video VALUES("1148","Video 1","lorem ipsum dolor sit amet, consectetuer adipiscing elit. aenean commodo ligula eget dolor. aenean massa. cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. nulla consequat massa quis enim. donec pede justo, fringilla vel, aliquet","1");
INSERT INTO cms_video VALUES("1151","Video 1","lorem ipsum dolor sit amet, consectetuer adipiscing elit. aenean commodo ligula eget dolor. aenean massa. cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. nulla consequat massa quis enim. donec pede justo, fringilla vel, aliquet","1");
INSERT INTO cms_video VALUES("1158","Video 1","lorem ipsum dolor sit amet, consectetuer adipiscing elit. aenean commodo ligula eget dolor. aenean massa. cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. nulla consequat massa quis enim. donec pede justo, fringilla vel, aliquet","1");
INSERT INTO cms_video VALUES("1161","Video 1","lorem ipsum dolor sit amet, consectetuer adipiscing elit. aenean commodo ligula eget dolor. aenean massa. cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. nulla consequat massa quis enim. donec pede justo, fringilla vel, aliquet","1");


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
