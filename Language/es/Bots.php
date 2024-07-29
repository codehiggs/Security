<?php

/**
 * █ ---------------------------------------------------------------------------------------------------------------------
<<<<<<< HEAD
 * █ ░FRAMEWORK                                  2024-07-24 09:23:12
=======
 * █ ░FRAMEWORK                                  2024-07-24 01:38:55
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
 * █ ░█▀▀█ █▀▀█ █▀▀▄ █▀▀ ░█─░█ ─▀─ █▀▀▀ █▀▀▀ █▀▀ [App\Modules\Security\Views\Bots\Creator\index.php]
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
return [
    // - Bots fields
    "label_bot" => "Robot",
    "label_reference" => "Referencia",
    "label_name" => "Nombre",
    "label_description" => "Descripción",
    "label_author" => "Autor",
    "label_created_at" => "created_at",
    "label_updated_at" => "updated_at",
    "label_deleted_at" => "deleted_at",
    "placeholder_bot" => "Robot",
    "placeholder_reference" => "Referencia",
    "placeholder_name" => "Nombre",
    "placeholder_description" => "Descripción",
    "placeholder_author" => "Autor",
    "placeholder_created_at" => "created_at",
    "placeholder_updated_at" => "updated_at",
    "placeholder_deleted_at" => "deleted_at",
    "help_bot" => "Robot",
    "help_reference" => "Referencia",
    "help_name" => "Nombre",
    "help_description" => "Descripción",
    "help_author" => "Autor",
    "help_created_at" => "created_at",
    "help_updated_at" => "updated_at",
    "help_deleted_at" => "deleted_at",
    // - Bots creator
<<<<<<< HEAD
    "create-denied-title" => "¡Acceso denegado!",
    "create-denied-message" => "Su rol en la plataforma no posee los privilegios requeridos para crear nuevos robots. Por favor, póngase en contacto con el administrador del sistema o con el personal de soporte técnico para que se le asignen los permisos, según sea el caso. Para continuar, presione la opción correspondiente en la parte inferior de este mensaje.",
=======
    "create-denied-title" => "Acceso denegado!",
    "create-denied-message" => "Su rol en la plataforma no posee los privilegios requeridos para crear nuevos robots. Por favor, póngase en contacto con el administrador del sistema o con el personal de soporte técnico para que estos le sean asignados, según sea el caso. Para continuar, presione la opción correspondiente en la parte inferior de este mensaje.",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    "create-title" => "Crear nuevo robot",
    "create-errors-title" => "¡Advertencia!",
<<<<<<< HEAD
    "create-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifíquelos e inténtelo nuevamente.",
=======
    "create-errors-message" => "Los datos proporcionados son incorrectos o están incompletos, por favor verifique e inténtelo nuevamente.",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    "create-duplicate-title" => "¡Robot existente!",
<<<<<<< HEAD
    "create-duplicate-message" => "Este robot ya se había registrado previamente. Presione continuar en la parte inferior de este mensaje para retornar al listado general de robots..",
=======
    "create-duplicate-message" => "Este robot ya se había registrado previamente, presione continuar en la parte inferior de este mensaje para retornar al listado general de robots.",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    "create-success-title" => "¡Robot registrado exitosamente!",
<<<<<<< HEAD
    "create-success-message" => "El robot se registró exitosamente. Para retornar al listado general de robots, presione continuar en la parte inferior de este mensaje.",
=======
    "create-success-message" => "El robot se registró exitosamente. Para retornar al listado general de robots presione continuar en la parte inferior de este mensaje.",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    // - Bots viewer
    "view-denied-title" => "¡Acceso denegado!",
<<<<<<< HEAD
    "view-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para visualizar robots en esta plataforma. Contacte al departamento de soporte técnico para obtener información adicional o la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
=======
    "view-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para visualizar robots en esta plataforma. Contacte al departamento de soporte técnico para obtener información adicional o para la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    "view-title" => "Vista",
    "view-errors-title" => "¡Advertencia!",
<<<<<<< HEAD
    "view-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifíquelos e inténtelo nuevamente.",
=======
    "view-errors-message" => "Los datos proporcionados son incorrectos o están incompletos, por favor verifique e inténtelo nuevamente.",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    "view-noexist-title" => "¡No existe!",
    "view-noexist-message" => "",
    "view-success-title" => "",
    "view-success-message" => "",
    // - Bots editor
    "edit-denied-title" => "¡Advertencia!",
<<<<<<< HEAD
    "edit-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para actualizar robots en esta plataforma. Contacte al departamento de soporte técnico para obtener información adicional o la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
=======
    "edit-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para actualizar robots en esta plataforma. Contacte al departamento de soporte técnico para obtener información adicional o para la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    "edit-title" => "¡Actualizar robot!",
    "edit-errors-title" => "¡Advertencia!",
<<<<<<< HEAD
    "edit-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifíquelos e inténtelo nuevamente.",
=======
    "edit-errors-message" => "Los datos proporcionados son incorrectos o están incompletos, por favor verifique e inténtelo nuevamente.",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    "edit-noexist-title" => "¡No existe!",
<<<<<<< HEAD
    "edit-noexist-message" => "El elemento que intenta actualizar no existe o fue eliminado previamente. Para retornar al listado general de robots, presione continuar en la parte inferior de este mensaje. ",
    "edit-success-title" => "¡Robot actualizado!",
    "edit-success-message" => "Los datos del robot se <b>actualizaron exitosamente</b>. Para retornar al listado general de robots, presione el botón continuar en la parte inferior del presente mensaje.",
=======
    "edit-noexist-message" => "El elemento que intenta actualizar no existe o se eliminó previamente. Para retornar al listado general de robots, presione continuar en la parte inferior de este mensaje. ",
    "edit-success-title" => "¡Robot actualizada!",
    "edit-success-message" => "Los datos de robot se <b>actualizaron exitosamente</b>. Para retornar al listado general de robots, presione el botón continuar en la parte inferior del presente mensaje.",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    // - Bots deleter
    "delete-denied-title" => "¡Advertencia!",
<<<<<<< HEAD
    "delete-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para eliminar robots en esta plataforma. Contacte al departamento de soporte técnico para obtener información adicional o la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
=======
    "delete-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para eliminar robots en esta plataforma. Contacte al departamento de soporte técnico para obtener información adicional o para la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    "delete-title" => "¡Eliminar robot!",
<<<<<<< HEAD
    "delete-message" => "Para confirmar la eliminación del robot <b>%s</b>, Presione eliminar para proceder con la eliminación. Para retornar al listado general de robots, presione cancelar.",
=======
    "delete-message" => "Para confirmar la eliminación del robot <b>%s</b>, presione eliminar. Para retornar al listado general de robots, presione cancelar.",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    "delete-errors-title" => "¡Advertencia!",
<<<<<<< HEAD
    "delete-errors-message" => "Los datos proporcionados son incorrectos o están incompletos. Por favor, verifíquelos e inténtelo nuevamente.",
=======
    "delete-errors-message" => "Los datos proporcionados son incorrectos o están incompletos, por favor verifique e inténtelo nuevamente.",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    "delete-noexist-title" => "¡No existe!",
<<<<<<< HEAD
    "delete-noexist-message" => "El elemento que intenta eliminar no existe o fue eliminado previamente. Para retornar al listado general de robots, presione continuar en la parte inferior de este mensaje.",
=======
    "delete-noexist-message" => "El elemento que intenta eliminar no existe o se eliminó previamente. Para retornar al listado general de robots, presione continuar en la parte inferior de este mensaje.",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    "delete-success-title" => "¡Robot eliminado exitosamente!",
<<<<<<< HEAD
    "delete-success-message" => "El robot se eliminó exitosamente. Para retornar al listado general de robots, presione el botón continuar en la parte inferior de este mensaje",
=======
    "delete-success-message" => "El robot se elimino exitosamente. Para retornar al listado de general de robots presione el botón continuar en la parte inferior de este mensaje.",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    // - Bots list
    "list-denied-title" => "¡Advertencia!",
<<<<<<< HEAD
    "list-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para acceder al listado general de robots en esta plataforma. Contacte al departamento de soporte técnico para obtener información adicional o la asignación de los permisos necesarios, si es el caso. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje.",
=======
    "list-denied-message" => "Los roles asignados a su perfil no le conceden los privilegios necesarios para acceder al listado general de robots en esta plataforma. Contacte al departamento de soporte técnico para información adicional, o la asignación de los permisos necesarios si es el caso. Para continuar seleccione la opción correspondiente en la parte inferior de este mensaje.",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    "list-title" => "Listado de robots",
];

?>