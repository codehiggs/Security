<?php
/*
* -----------------------------------------------------------------------------
*  ╔═╗╔╗╔╔═╗╔═╗╦╔╗ ╦  ╔═╗
*  ╠═╣║║║╚═╗╚═╗║╠╩╗║  ║╣  [FRAMEWORK][App\Modules\Security\Views\Roles\Creator\form.php]
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
$bootstrap = service("bootstrap");
$f = service("forms", array("lang" => "Roles."));
/*
* -----------------------------------------------------------------------------
* [Requests]
* -----------------------------------------------------------------------------
*/
$r["rol"] = $f->get_Value("rol", pk());
$r["name"] = $f->get_Value("name");
$r["description"] = $f->get_Value("description");
$r["author"] = $f->get_Value("author", $authentication->get_User());
$r["created_at"] = $f->get_Value("created_at");
$r["updated_at"] = $f->get_Value("updated_at");
$r["deleted_at"] = $f->get_Value("deleted_at");
$back = "/security/roles/list/" . lpk();
/*
* -----------------------------------------------------------------------------
* [Fields]
* -----------------------------------------------------------------------------
*/
$f->add_HiddenField("author", $r["author"]);
$f->fields["rol"] = $f->get_FieldText("rol", array("value" => $r["rol"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12", "readonly" => true));
$f->fields["name"] = $f->get_FieldText("name", array("value" => $r["name"], "proportion" => "col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12"));
$f->fields["description"] = $f->get_FieldTextArea("description", array("value" => $r["description"], "proportion" => "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"));
$f->fields["created_at"] = $f->get_FieldText("created_at", array("value" => $r["created_at"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["updated_at"] = $f->get_FieldText("updated_at", array("value" => $r["updated_at"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["deleted_at"] = $f->get_FieldText("deleted_at", array("value" => $r["deleted_at"], "proportion" => "col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12"));
$f->fields["cancel"] = $f->get_Cancel("cancel", array("href" => $back, "text" => lang("App.Cancel"), "type" => "secondary", "proportion" => "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 padding-right"));
$f->fields["submit"] = $f->get_Submit("submit", array("value" => lang("App.Create"), "proportion" => "col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 padding-left"));
/*
* -----------------------------------------------------------------------------
* [Groups]
* -----------------------------------------------------------------------------
*/
$f->groups["g1"] = $f->get_Group(array("legend" => "", "fields" => ($f->fields["rol"] . $f->fields["name"])));
$f->groups["g2"] = $f->get_Group(array("legend" => "", "fields" => ($f->fields["description"])));
/*
* -----------------------------------------------------------------------------
* [Buttons]
* -----------------------------------------------------------------------------
*/
$f->groups["gy"] = $f->get_GroupSeparator();
$f->groups["gz"] = $f->get_Buttons(array("fields" => $f->fields["submit"] . $f->fields["cancel"]));
//[build]---------------------------------------------------------------------------------------------------------------
$card = $bootstrap->get_Card("create", array(
    "title" => lang("Roles.create-title"),
    "content" => $f,
));
echo($card);
?>