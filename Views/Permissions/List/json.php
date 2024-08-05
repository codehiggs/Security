<?php

/**
 * █ ---------------------------------------------------------------------------------------------------------------------
 * █ ░FRAMEWORK                                  2024-08-05 10:51:42
 * █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Security\Views\Permissions\List\json.php]
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

//[Uses]----------------------------------------------------------------------------------------------------------------
use App\Libraries\Html\HtmlTag;
use App\Libraries\Authentication;
use Config\Services;

//[Services]-------------------------------------------------------------------------------------------------------------
$request = service('Request');
$bootstrap = service('Bootstrap');
$dates = service('Dates');
$strings = service('strings');
$authentication = service('authentication');
//[Models]---------------------------------------------------------------------------------------------------------------
$model = model('App\Modules\Security\Models\Security_Permissions');
//[Requests]------------------------------------------------------------------------------------------------------------
$columns = $request->getGet("columns");
$offset = $request->getGet("offset");
$search = $request->getGet("search");
$draw = empty($request->getGet("draw")) ? 1 : $request->getGet("draw");
$limit = empty($request->getGet("limit")) ? 10 : $request->getGet("limit");
//[Query]---------------------------------------------------------------------------------------------------------------
$list = $model->get_List($limit, $offset, $search);
$recordsTotal = $model->get_Total($search);
//$sql=$model->getLastQuery()->getQuery();
//[Asignations]---------------------------------------------------------------------------------------------------------
$data = array();
$component = '/security/permissions';
foreach ($list as $item) {
    //[Buttons]---------------------------------------------------------------------------------------------------------
    $viewer = "{$component}/view/{$item["permission"]}";
    $editor = "{$component}/edit/{$item["permission"]}";
    $deleter = "{$component}/delete/{$item["permission"]}";
    $lviewer = $bootstrap::get_Link('view', array('href' => $viewer, 'icon' => ICON_VIEW, 'text' => lang("App.View"), 'class' => 'btn-primary'));
    $leditor = $bootstrap::get_Link('edit', array('href' => $editor, 'icon' => ICON_EDIT, 'text' => lang("App.Edit"), 'class' => 'btn-secondary'));
    $ldeleter = $bootstrap::get_Link('delete', array('href' => $deleter, 'icon' => ICON_DELETE, 'text' => lang("App.Delete"), 'class' => 'btn-danger'));
    $options = $bootstrap::get_BtnGroup('options', array('content' => array($lviewer)));
    //[Fields]----------------------------------------------------------------------------------------------------------
    $row["permission"] = $item["permission"];
    $row["alias"] = $item["alias"];
    $row["module"] = $item["module"];
    $row["description"] = $strings->get_URLDecode($item["description"]);
    $row["created_at"] = $item["created_at"];
    $row["updated_at"] = $item["updated_at"];
    $row["deleted_at"] = $item["deleted_at"];
    $row["options"] = $options;
    //[Push]------------------------------------------------------------------------------------------------------------
    array_push($data, $row);
}
//[Build]---------------------------------------------------------------------------------------------------------------
$json["draw"] = $draw;
$json["columns"] = $columns;
$json["offset"] = $offset;
$json["search"] = $search;
$json["limit"] = $limit;
//$json["sql"] = $sql;
$json["total"] = $recordsTotal;
$json["data"] = $data;
echo(json_encode($json));
?>



