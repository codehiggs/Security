<?php

return [
    "list-title" => "Listado de roles",
    "label_rol" => "Código del Rol",
    "label_name" => "Nombre legible",
    "label_description" => "Descripción detallada",
    "label_author" => "Autor",
    "label_created_at" => "created_at",
    "label_updated_at" => "updated_at",
    "label_deleted_at" => "deleted_at",
    "placeholder_rol" => "Rol",
    "placeholder_name" => "Ej: Gerente",
<<<<<<< HEAD
    "placeholder_description" => "Ej: Un administrador es la persona encargada de llevar a cabo tareas administrativas mediante la planificación, organización, dirección y control de todas las actividades dentro de un grupo social o una organización. Su objetivo es alcanzar metas utilizando los recursos de manera eficiente.",
    "placeholder_author" => "Autor",
=======
    "placeholder_description" => "Ej: Un administrador es la persona encargada de realizar tareas administrativas mediante la planificación, organización, dirección y control de todas las actividades dentro de un grupo social o una organización. Su objetivo es lograr metas específicas a través del uso eficiente de los recursos disponibles.",
    "placeholder_author" => "author",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    "placeholder_created_at" => "created_at",
    "placeholder_updated_at" => "updated_at",
    "placeholder_deleted_at" => "deleted_at",
    "help_rol" => "Código automático (Requerido)",
    "help_name" => "Valor alfanumérico (Requerido) ",
    "help_description" => "Descripción del rol y a quienes corresponde su uso u asignación (Requerido)",
    "help_author" => "Autor",
    "help_created_at" => "created_at",
    "help_updated_at" => "updated_at",
    "help_deleted_at" => "deleted_at",
    // - Roles creator
    "create-denied-title" => "",
    "create-denied-message" => "",
    "create-title" => "",
    "create-errors-title" => "Advertencia",
<<<<<<< HEAD
    "create-errors-message" => "No fue posible crear el nuevo rol debido a que los datos proporcionados son incorrectos o faltan datos requeridos para realizar este procedimiento. Por favor, verifique e inténtelo nuevamente. ",
=======
    "create-errors-message" => "No fue posible crear el nuevo rol debido a que los datos proporcionados son incorrectos o faltan datos necesarios para realizar este procedimiento. Por favor, verifique la información e inténtelo nuevamente. ",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    "create-duplicate-title" => "¡Información existente!",
<<<<<<< HEAD
    "create-duplicate-message" => "Se ha detectado que la información que intenta ingresar ya se había procesado previamente. Para verificar si los datos ingresados se registraron correctamente, utilice las opciones en la parte inferior de este mensaje. ",
=======
    "create-duplicate-message" => "Se ha detectado que la información que intenta ingresar ya ha sido procesada previamente. Para verificar si los datos ingresados se registraron correctamente, utilice las opciones en la parte inferior de este mensaje. ",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    "create-success-title" => "¡Se ha creado el nuevo rol!",
<<<<<<< HEAD
    "create-success-message" => "El rol <b>%s</b>, se creo exitosamente. Para continuar, presione el botón en la parte inferior de este mensaje.",
=======
    "create-success-message" => "El rol <b>%s</b> se creó exitosamente. Para continuar, presione el botón en la parte inferior de este mensaje..",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    // - Roles viewer
    "view-denied-title" => "",
    "view-denied-message" => "",
    "view-title" => "",
    "view-errors-title" => "",
    "view-errors-message" => "",
    "view-noexist-title" => "",
    "view-noexist-message" => "",
    "view-success-title" => "",
    "view-success-message" => "",
    // - Roles editor
    "edit-denied-title" => "Acceso denegado a la edición de roles",
<<<<<<< HEAD
    "edit-denied-message" => "Su rol en la plataforma <b>no posee los privilegios necesarios para acceder a este componente</b>.Para hacer uso del mismo, al menos uno de sus roles en la plataforma deberá disponer del permiso <code>SECURITY-EDIT</code> o <code>SECURITY-EDIT-ALL</code>. Solo un administrador del sistema podrá concederle tal nivel de acceso. Por favor, contacte al soporte técnico para solicitar que a su rol le sean asignados los privilegios requeridos, si es el caso, o presione continuar para retornar al listado de usuarios. ",
=======
    "edit-denied-message" => "Su rol en la plataforma <b>no posee los privilegios necesarios para acceder a este componente</b>. Para hacer uso del mismo, al menos uno de sus roles en la plataforma deberá disponer del permiso <code>SECURITY-EDIT</code> o <code>SECURITY-EDIT-ALL</code>. Solo un administrador del sistema podrá concederle tal nivel de acceso. Por favor, contacte al soporte técnico para solicitar que se le asignen los privilegios requeridos a su rol, si es el caso. Alternativamente, presione continuar para retornar al listado de usuarios. ",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    "edit-title" => "Editar el rol %s",
    "edit-errors-title" => "Datos incorrectos o faltantes",
<<<<<<< HEAD
    "edit-errors-message" => "No fue posible editar el rol debido a que los datos proporcionados son incorrectos o faltan datos requeridos para realizar este procedimiento. Por favor, verifique e inténtelo nuevamente. ",
=======
    "edit-errors-message" => "No fue posible editar el rol debido a que los datos proporcionados son incorrectos o faltan datos necesarios para realizar este procedimiento. Por favor, verifique la información e inténtelo nuevamente. ",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    "edit-noexist-title" => "",
    "edit-noexist-message" => "",
    "edit-success-title" => "¡Rol actualizado correctamente!",
    "edit-success-message" => "Los datos del rol <b>%s</b> se actualizaron correctamente. Presione continuar en la parte inferior de este mensaje para retornar al listado de roles.",
    "editor-title" => "Editando el rol %s",
    // - Roles deleter
    "delete-denied-title" => "",
    "delete-denied-message" => "",
<<<<<<< HEAD
    "delete-title" => "Confirmación: ¿Realmente desea eliminar este rol?",
    "delete-message" => "Se dispone a eliminar el rol denominado <b>%s</b>. Para confirmar, presione eliminar; para regresar al listado de roles, presione cancelar.",
=======
    "delete-title" => "Confirmación, ¿Realmente desea eliminar este rol?",
    "delete-message" => "Se dispone a eliminar el rol denominado <b>%s</b>. Para confirmar, presione eliminar. Para regresar al listado de roles, presione cancelar.",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    "delete-errors-title" => "",
    "delete-errors-message" => "",
    "delete-noexist-title" => "",
    "delete-noexist-message" => "",
    "delete-success-title" => "¡Rol eliminado correctamente!",
    "delete-success-message" => "El rol seleccionado se eliminó satisfactoriamente. Para continuar, presione el botón en la parte inferior de este mensaje.",
    "list" => "Listado general de roles",
    "create-title" => "Crear nuevo rol",
    "create-duplicate-title" => "¡Información existente!",
<<<<<<< HEAD
    "create-duplicate-content" => "Se ha detectado que la información que intenta ingresar ya se había procesado previamente. Para verificar si los datos ingresados se registraron correctamente, utilice las opciones en la parte inferior de este mensaje. ",
=======
    "create-duplicate-content" => "Se ha detectado que la información que intenta ingresar ya ha sido procesada previamente. Para verificar si los datos ingresados se registraron correctamente, utilice las opciones en la parte inferior de este mensaje. ",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    "view-title" => "Perfil del rol: <b>%s</b>",
    "label-rol" => "Código del rol",
    "label-name" => "Nombre Legible",
    "label-description" => "Descripción del rol",
    "help-rol" => "Código automático",
    "help-name" => "Nombre visible (Obligatorio)",
<<<<<<< HEAD
    "help-description" => "Descripción detallada de quien desempeña este rol (Obligatorio)",
    "placeholder-name" => "Ejemplo: Gerente",
    "placeholder-description" => "Describa de manera detallada quiénes desempeñarán este rol. Esta descripción es obligatoria.  ",
=======
    "help-description" => "Descripción detallada de quien desempeña este rol (Obligatoria)",
    "placeholder-name" => "Ejemplo, Gerente",
    "placeholder-description" => "Describa de manera detallada quiénes desempeñarán este rol. Esta descripción es obligatoria..  ",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    //[info]------------------------------------------------------------------------------------------------------------
    "roles-info" => "Un rol se define como un conjunto de permisos, responsabilidades y capacidades asignadas a un usuario o grupo de usuarios dentro de un sistema o contexto específico. Los roles son una forma de agrupar usuarios con características similares. Por ejemplo, un rol puede ser <b>Administrador</b>, <b>Gerente</b>, <b>Supervisor</b>, <b>Empleado</b>, etc. ",
];
?>