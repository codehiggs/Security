<?php
/*
* -----------------------------------------------------------------------------
*  ╔═╗╔╗╔╔═╗╔═╗╦╔╗ ╦  ╔═╗
*  ╠═╣║║║╚═╗╚═╗║╠╩╗║  ║╣  [FRAMEWORK][App\Modules\Security\Views\Roles\List\json.php]
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

//[Uses]-----------------------------------------------------------------------------
use App\Libraries\Html\HtmlTag;
use App\Libraries\Authentication;
use Config\Services;

//[Services]-----------------------------------------------------------------------------
$request = service('Request');
$bootstrap = service('Bootstrap');
$dates = service('Dates');
$strings = service('strings');
$authentication = service('authentication');
//[Request]-----------------------------------------------------------------------------
$columns = $request->getGet("columns");
$offset = $request->getGet("offset");
$search = $request->getGet("search");
//[Query]-----------------------------------------------------------------------------
$draw = empty($request->getGet("draw")) ? 1 : $request->getGet("draw");
$limit = empty($request->getGet("limit")) ? 10 : $request->getGet("limit");
$model = model('App\Modules\Security\Models\Security_Roles');
$list = $model
    ->where("deleted_at", NULL)
    ->groupStart()
    ->like("rol", "%{$search}%")
    ->orLike("name", "%{$search}%")
    ->groupEnd()
    ->orderBy("created_at", "DESC")
    ->findAll($limit, $offset);
if (!empty($search)) {
    $recordsTotal = $model
        ->where("deleted_at", NULL)
        ->groupStart()
        ->like("rol", "%{$search}%")
        ->orLike("name", "%{$search}%")
        ->groupEnd()
        ->countAllResults();
} else {
    $recordsTotal = $model
        ->where("deleted_at", NULL)
        ->countAllResults();
}
//$sql=$model->getLastQuery()->getQuery();
//[Asignations]-----------------------------------------------------------------------------
$data = array();
$component = '/security/roles';
foreach ($list as $item) {
    //[Buttons]-----------------------------------------------------------------------------
    $viewer = "{$component}/view/{$item["rol"]}";
    $editor = "{$component}/edit/{$item["rol"]}";
    $deleter = "{$component}/delete/{$item["rol"]}";
    $policies = "/security/policies/edit/{$item["rol"]}";
    $lviewer = $bootstrap::get_Link('view', array('href' => $viewer, 'icon' => ICON_VIEW, 'text' => lang("App.View"), 'class' => 'btn-primary'));
    $leditor = $bootstrap::get_Link('edit', array('href' => $editor, 'icon' => ICON_EDIT, 'text' => lang("App.Edit"), 'class' => 'btn-secondary'));
    $ldeleter = $bootstrap::get_Link('delete', array('href' => $deleter, 'icon' => ICON_DELETE, 'text' => lang("App.Delete"), 'class' => 'btn-danger'));
    $lpolicies = $bootstrap::get_Link('policies', array('href' => $policies, 'icon' => ICON_KEY, 'text' => lang("App.Policies"), 'class' => 'btn-warning'));
    $options = $bootstrap::get_BtnGroup('options', array('content' => array($lviewer, $leditor, $ldeleter, $lpolicies)));
    //[Fields]-----------------------------------------------------------------------------
    $row["rol"] = $item["rol"];
    $row["name"] = $item["name"];
    $row["description"] = $strings->get_URLDecode($item["description"]);
    $row["author"] = $item["author"];
    $row["created_at"] = $item["created_at"];
    $row["updated_at"] = $item["updated_at"];
    $row["deleted_at"] = $item["deleted_at"];
    $row["options"] = $options;
    //[Push]-----------------------------------------------------------------------------
    array_push($data, $row);
}
//[Build]-----------------------------------------------------------------------------
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