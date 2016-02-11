{load_presentation_object filename="imprimir_oferta" assign="obj"}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body onload="window.print()">
<table width="100%" border="0" style="border: 1px solid #ddd;">
  <tr>
    <td style="color:#4E4E4E; font-size:32px; line-height:1em; margin:5px 0 15px; text-align: center; font-family:Verdana, Geneva, sans-serif">{$obj->mData.txt_cargo}</td>
  </tr>
  <tr>
    <td style="color:#4E4E4E; font-size:24px; line-height:1em; margin:5px 0 15px; text-align: center; font-family:Verdana, Geneva, sans-serif">{$obj->mData.txt_nom_comercial}</td>
  </tr>
  <tr>
    <td><table width="100%" border="0">
        <tr>
          <td width="25%" align="center" valign="top"><img src="{$obj->mSiteUrl}/cms/files/empresas/emp_{$obj->mData.fil_logo}" width="150" height="150" style="border: 4px solid #ddd; border-radius: 5px;"/></td>
          <td width="75%" valign="top" style="color:#4E4E4E; font-family:Verdana, Geneva, sans-serif; font-size: 14px;"><div style="color:#4E4E4E; font-size:24px; line-height:1em; margin:5px 0 15px; text-align: center; font-family:Verdana, Geneva, sans-serif">Descripci&oacute;n de la Oferta</div>
            <p>{$obj->mData.txt_descripcion}</p>
            <p><span style="color: #F55E2D;">Fecha de publicaci&oacute;n: </span>{$obj->mData.fec_creasi}</p>
            <p><span style="color: #F55E2D;">Departamento: </span>{$obj->mData.dep_ofe}</p>
            <p><span style="color: #F55E2D;">Ciudad / Municipio: </span>{$obj->mData.ciu_ofe}</p>
            <p><span style="color: #F55E2D;">Sector: </span>{$obj->mData.nom_sector}</p>
            <p><span style="color: #F55E2D;">&aacute;rea: </span>{$obj->mData.nom_area}</p>
            <p><span style="color: #F55E2D;">Jerarqu&iacute;a: </span>{$obj->mData.nom_jerarquia}</p>
            <p><span style="color: #F55E2D;">Salario: </span>{$obj->mData.salario}</p>
            <p><span style="color: #F55E2D;">Vacantes: </span>{$obj->mData.num_vacantes}</p>
            <div style="border-top: 1px solid #ccc; height: 2px; margin: 10px 0;"></div>
            <div style="color:#4E4E4E; font-size:24px; line-height:1em; margin:5px 0 15px; text-align: center; font-family:Verdana, Geneva, sans-serif"> Requisitos</div>
            <p>{$obj->mData.txt_requisitos}</p>
            <!--<div style="border-top: 1px solid #ccc; height: 2px; margin: 10px 0;"></div>-->
            <!--<div style="color:#4E4E4E; font-size:24px; line-height:1em; margin:5px 0 15px; text-align: center; font-family:Verdana, Geneva, sans-serif"> Informaci&oacute;n general del aspirante</div>-->
            <p><span style="color: #F55E2D;">Nivel de estudios: </span>{$obj->mData.nom_nivel_estudio}</p>
            <p><span style="color: #F55E2D;">Departamento de residencia del aspirante: </span>{$obj->mData.dep_aspi}</p>
            <p><span style="color: #F55E2D;">Ciudad / Municipio del aspirante: </span>{$obj->mData.ciu_aspi}</p>
            <p><span style="color: #F55E2D;">Edad: </span>{$obj->mData.num_edad_aspi}</p>
            <p><span style="color: #F55E2D;">&aacute;rea: </span>{$obj->mData.nom_area_aspi}</p>
            <p><span style="color: #F55E2D;">Experiencia laboral:</span>{$obj->mData.num_exp_aspi}</p>
            <div style="border-top: 1px solid #ccc; height: 2px; margin: 10px 0;"></div>
            <!--<div style="color:#4E4E4E; font-size:24px; line-height:1em; margin:5px 0 15px; text-align: center; font-family:Verdana, Geneva, sans-serif"> Cargos equivalentes</div>
            <p> {section name=k loop=$obj->mRela}
              {$obj->mRela[k].txt_nombre},
              {/section} </p>
            <div style="border-top: 1px solid #ccc; height: 2px; margin: 10px 0;"></div>--></td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>
