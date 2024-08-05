<?php

/**
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ ░FRAMEWORK                                  2024-08-05 11:19:44
 * █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Security\Views\Users\Creator\deny.php]
 * █ ░█─── █──█ █──█ █▀▀ ░█▀▀█ ▀█▀ █─▀█ █─▀█ ▀▀█ Copyright 2024 - CloudEngine S.A.S., Inc. <admin@cgine.com>
 * █ ░█▄▄█ ▀▀▀▀ ▀▀▀─ ▀▀▀ ░█─░█ ▀▀▀ ▀▀▀▀ ▀▀▀▀ ▀▀▀ Para obtener información completa sobre derechos de autor y licencia,
 * █                                             consulte la LICENCIA archivo que se distribuyó con este código fuente.
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ EL SOFTWARE SE PROPORCIONA -TAL CUAL-, SIN GARANTÍA DE NINGÚN TIPO, EXPRESA O
 * █ IMPLÍCITA, INCLUYENDO PERO NO LIMITADO A LAS GARANTÍAS DE COMERCIABILIDAD,
 * █ APTITUD PARA UN PROPÓSITO PARTICULAR Y NO INFRACCIÓN. EN NINGÚN CASO SERÁ
 * █ LOS AUTORES O TITULARES DE LOS DERECHOS DE AUTOR SERÁN RESPONSABLES DE CUALQUIER
 * █ RECLAMO, DAÑOS U OTROS RESPONSABILIDAD, YA SEA EN UNA ACCIÓN DE CONTRATO,
 * █ AGRAVIO O DE OTRO MODO, QUE SURJA DESDE, FUERA O EN RELACIÓN CON EL SOFTWARE
 * █ O EL USO U OTROS NEGOCIACIONES EN EL SOFTWARE.
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ @Author Jose Alexis Correa Valencia <jalexiscv@gmail.com>
 * █ @Editor Anderson Ospina Lenis <andersonospina798@gmail.com>
 * █ @link https://www.codehiggs.com
 * █ @Version 1.5.0 @since PHP 7, PHP 8
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ Datos recibidos desde el controlador - @ModuleController
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ @authentication, @request, @dates, @parent, @component, @view, @oid, @views, @prefix
 * █ ---------------------------------------------------------------------------------------------------------------------
 **/
$bootstrap = service("bootstrap");
$continue = "/security/roles/list/" . lpk();
if ($authentication->get_LoggedIn()) {
    $card = $bootstrap->get_Card("access-denied", array(
        "class" => "card-danger",
        "title" => lang("App.Access-denied-title"),
        "icon" => "fa-duotone fa-triangle-exclamation", "text-class" => "text-center", "text" => lang("App.Access-denied-message"),
        "permissions" => $permissions,
        "footer-class" => "text-center",
        "footer-login" => true,
        "footer-continue" => $continue,
        "voice" => "security/users-create-denied-message.mp3"
    ));
} else {
    $card = $bootstrap->get_Card("access-denied", array(
        "class" => "card-danger",
        "title" => lang("App.login-required-title"),
        "icon" => "fa-duotone fa-triangle-exclamation",
        "text-class" => "text-center",
        "text" => lang("App.login-required-message"),
        "permissions" => $permissions,
        "footer-class" => "text-center",
        "footer-login" => true,
        "footer-continue" => $continue,
        "voice" => "security/users-create-denied-message.mp3"
    ));
}
echo($card);
?>