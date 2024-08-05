<?php
/*
* -----------------------------------------------------------------------------
*  ╔═╗╔╗╔╔═╗╔═╗╦╔╗ ╦  ╔═╗
*  ╠═╣║║║╚═╗╚═╗║╠╩╗║  ║╣  [FRAMEWORK][App\Modules\Security\Views\Roles\Editor\processor.php]
*  ╩ ╩╝╚╝╚═╝╚═╝╩╚═╝╩═╝╚═╝
* -----------------------------------------------------------------------------
* Copyright 2024 - Higgs Bigdata S.A.S., Inc. <admin@Higgs.com>
* Este archivo es parte de Higgs Bigdata Framework 7.1
* Para obtener información completa sobre derechos de autor y licencia, consulte
* la LICENCIA archivo que se distribuyó con este código fuente.
* -----------------------------------------------------------------------------
* EL SOFTWARE SE PROPORCIONA -TAL CUAL-, SIN GARANTÍA DE NINGÚN TIPO, EXPRESA O
* IMPLÍCITA, INCLUYENDO PERO NO LIMITADO A LAS GARANTÍAS DE COMERCIABILIDAD,
* APTITUD PARA UN PROPÓSITO PARTICULAR Y NO INFRACCIÓN. EN NINGÚN CASO SERÁ
* LOS AUTORES O TITULARES DE LOS DERECHOS DE AUTOR SERÁN RESPONSABLES DE CUALQUIER
* RECLAMO, DAÑOS U OTROS RESPONSABILIDAD, YA SEA EN UNA ACCIÓN DE CONTRATO,
* AGRAVIO O DE OTRO MODO, QUE SURJA DESDE, FUERA O EN RELACIÓN CON EL SOFTWARE
* O EL USO U OTROS NEGOCIACIONES EN EL SOFTWARE.
* -----------------------------------------------------------------------------
* @Author Jose Alexis Correa Valencia <jalexiscv@gmail.com>
* @Editor Anderson Ospina Lenis <andersonospina798@gmail.com>
* @link https://www.Higgs.com
* @Version 1.5.0
* @since PHP 7, PHP 8
* -----------------------------------------------------------------------------
* Datos recibidos desde el controlador - @ModuleController
* -----------------------------------------------------------------------------
* @Authentication
* @request
* @dates
* @view
* @oid
* @component
* @views
* @prefix
* @parent
* -----------------------------------------------------------------------------
*/
$f = service("forms", array("lang" => "Security_Roles."));
$model = model("App\Modules\Security\Models\Security_Roles");
$d = array(
    "rol" => $f->get_Value("rol"),
    "name" => $f->get_Value("name"),
    "description" => $f->get_Value("description"),
    "author" => $authentication->get_User(),
);
$row = $model->find($d["rol"]);
if (isset($row["rol"])) {
    $edit = $model->update($d);

    $smarty = service("smarty");
    $smarty->set_Mode("bs5x");
    $smarty->assign("title", lang("Security.roles-view-success-title"));
    $smarty->assign("message", sprintf(lang("Security.roles-view-success-message"), $d['rol']));
    $smarty->assign("edit", base_url("/security/roles/edit/{$d['rol']}/" . lpk()));
    $smarty->assign("continue", base_url("/security/roles/view/{$d["rol"]}/" . lpk()));
    $smarty->assign("voice", "security/roles-view-success-message.mp3");
    $c = $smarty->view('alerts/success.tpl');
} else {
    $smarty = service("smarty");
    $smarty->set_Mode("bs5x");
    $smarty->assign("title", lang("Security.roles-view-noexist-title"));
    $smarty->assign("message", lang("Security.roles-view-noexist-message"));
    $smarty->assign("continue", base_url("/security/roles"));
    $smarty->assign("voice", "security/roles-view-noexist-message.mp3");
    $c = $smarty->view('alerts/warning.tpl');
}
echo($c);
?>
