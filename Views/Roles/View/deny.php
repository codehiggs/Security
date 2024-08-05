<?php
/*
* -----------------------------------------------------------------------------
*  ╔═╗╔╗╔╔═╗╔═╗╦╔╗ ╦  ╔═╗
*  ╠═╣║║║╚═╗╚═╗║╠╩╗║  ║╣  [FRAMEWORK][App\Modules\Security\Views\Roles\Editor\deny.php]
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
$smarty = service("smarty");
$smarty->set_Mode("bs5x");
if ($authentication->get_LoggedIn()) {
    $smarty->assign("title", lang("Security.roles-view-denied-title"));
    $smarty->assign("message", lang("Security.roles-view-denied-message"));
    $smarty->assign("permissions", strtoupper($permissions));
    $smarty->assign("continue", "/security/roles");
    $smarty->assign("voice", "security/roles-view-denied-message.mp3");
    echo($smarty->view('alerts/card/danger.tpl'));
} else {
    $smarty->assign("title", lang("App.login-required-title"));
    $smarty->assign("message", lang("App.login-required-message"));
    $smarty->assign("continue", "/social/home/" . lpk());
    $smarty->assign("signin", true);
    $smarty->assign("voice", "app-login-required-message.mp3");
    echo($smarty->view('alerts/card/warning.tpl'));
}
?>