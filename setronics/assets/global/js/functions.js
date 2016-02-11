/* 
 * @author Brayan Acebo ft Rigo Castro
 * @company Imaginamos S.A.S
 * @Description Funciones generales 
 */

function count_characters(input,num_carat) {
    if (input.value.length >= num_carat) {
        input.value = input.value.substring(0,num_carat);
    }
    //alamacenamos el resto
    var resto = num_carat - input.value.length;
 
    //imprimimos los caracteres restantes en el span
    var finalT=document.getElementById('letras');
    finalT.innerHTML=resto+"/"+num_carat+" caracteres";
 
}
