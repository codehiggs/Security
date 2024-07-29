<?php

return [
    "Module" => "Módulo de Seguridad",
    "intro-p1" => "Security IAM (Identity and Access Management) es una solución integral de gestión de identidad y acceso diseñada para garantizar la seguridad y la privacidad de los recursos críticos de una organización. Nuestra plataforma ofrece un enfoque avanzado y robusto para la administración de identidades, permitiendo a las empresas controlar de manera eficiente quién tiene acceso a qué recursos y en qué contexto.",
    "intro-p2" => "Con Security IAM, las organizaciones pueden implementar políticas de seguridad granulares y personalizadas para cada usuario, grupo o rol, asegurando que los privilegios de acceso estén alineados con las necesidades y responsabilidades de cada individuo. Nuestra solución proporciona una autenticación segura y multifactorial, mitigando eficazmente los riesgos de acceso no autorizado.",
<<<<<<< HEAD
    "intro-p3" => "Además, Security IAM ofrece capacidades avanzadas de auditoría y generación de informes, permitiendo a las organizaciones mantener una visibilidad completa sobre las actividades de acceso y uso de recursos en tiempo real. Nuestra plataforma es altamente escalable y compatible con una amplia gama de entornos de infraestructura, ofreciendo una implementación flexible y sin interrupciones en cualquier entorno empresarial.",
    "intro-p4" => "Con Security IAM, las organizaciones pueden fortalecer su postura de seguridad, garantizar el cumplimiento normativo y proteger sus activos críticos contra las amenazas cibernéticas en constante evolución. Nuestra solución es la elección ideal para empresas que buscan una gestión de identidad y acceso sólida, confiable y fácil de usar, para proteger sus recursos digitales más valiosos.",
=======
    "intro-p3" => "Además, Security IAM ofrece capacidades avanzadas de auditoría y generación de informes, permitiendo a las organizaciones mantener una visibilidad completa sobre las actividades de acceso y el uso de recursos en tiempo real. Nuestra plataforma es altamente escalable y compatible con una amplia gama de entornos de infraestructura, ofreciendo una implementación flexible y sin interrupciones en cualquier entorno empresarial.",
    "intro-p4" => "Con Security IAM, las organizaciones pueden fortalecer su postura de seguridad, garantizar el cumplimiento normativo y proteger sus activos críticos contra las amenazas cibernéticas en constante evolución. Nuestra solución es la elección ideal para empresas que buscan una gestión de identidad y acceso sólida, confiable y fácil de usar para proteger sus recursos digitales más valiosos.",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    //Hierarchies
    "hierarchies-roles-list" => "Listado de roles asignados",
    /** Policies **/
    "policies-permissions-list" => "Listado de permisos asociados",
    /* Permissions */
<<<<<<< HEAD
    "permissions-list-denied-message" => "Su rol en la plataforma <b>no posee los privilegios necesarios para acceder a este componente</b>. Para hacer uso del mismo, al menos uno de sus roles en la plataforma deberá disponer del permiso <code>SECURITY-PERMISSIONS-VIEW-ALL</code>. Solo un administrador del sistema podrá concederle tal nivel de acceso. Por favor, contacte al soporte técnico para solicitar que a su rol le sean asignados los privilegios requeridos, si es el caso, o presione continuar para retornar al listado de usuarios. ",
=======
    "permissions-list-denied-message" => "Su rol en la plataforma <b>no posee los privilegios necesarios para acceder a este componente</b>. Para hacer uso del mismo, al menos uno de sus roles en la plataforma deberá disponer del permiso <code>SECURITY-PERMISSIONS-VIEW-ALL</code>. Solo un administrador del sistema podrá concederle este nivel de acceso. Por favor, contacte al soporte técnico para solicitar que se asignen los privilegios requeridos a su rol, si es el caso. Alternativamente, presione continuar para retornar al listado de usuarios. ",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    "permissions-list" => "Listado de Permisos",
    // Etc
    "Logs-list-title" => "Historial de registros de acceso",
    "Access-logs" => "Registros de acceso ",
    "label_notes" => "Notas",
    "label_reference" => "Referencia",
    "Roles-list-title" => "Listado de Roles",
    "Users-list-title" => "Listado general de usuarios",
    "Users-Delete-title" => "¡Confirmar eliminación del usuario <b>%s</b>!",
    "Users-List" => "Listado de Usuarios",
    "Rols-List" => "Listado de Roles",
    "Create-Rol" => "Crear un nuevo rol",
    "label_rol" => "Rol",
    "label_name" => "Nombre",
    "label_description" => "Descripción",
    "help_rol" => "Codigo automático",
    "help_name" => "Nombre legible para los usuarios",
    "help_description" => "Descripción detallada",
    "placeholder_rol" => "",
<<<<<<< HEAD
    "placeholder_name" => "Ejemplos: Gerente, Administrador, Secretaria",
    "placeholder_description" => "Ejemplo, Este rol permite a sus usuarios ...",
=======
    "placeholder_name" => "Ejemplo: Gerente, Administrador, Secretaria",
    "placeholder_description" => "Ejemplo: Este rol permite a sus usuarios ...",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    "lock-rol-create-title" => "No fue posible crear el rol",
<<<<<<< HEAD
    "lock-rol-create-content" => "Los datos ingresados para <b>crear el nuevo rol</b> están <b>incompletos</b> o son <b>incorrectos</b>. Por tal motivo, no se pudo cumplir con la acción solicitada. En la parte inferior de este mensaje encontrará un listado de los datos faltantes o por revisar. Para continuar, por favor verifique los datos proporcionados e <b>inténtelo nuevamente</b>.",
=======
    "lock-rol-create-content" => "Los datos ingresados para <b>crear el nuevo rol</b> están <b>incompletos</b> o son <b>incorrectos</b>, por lo que no se pudo completar la acción solicitada. En la parte inferior de este mensaje encontrará un listado de los datos faltantes o que necesitan revisión. Por favor, verifique los datos proporcionados e <b>inténtelo nuevamente</b>.",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    "label-name" => "Nombre",
    "label-creator" => "Creador",
    "label-description" => "Descripción",
    "label-date" => "Fecha",
<<<<<<< HEAD
    "Authentication-loggedin" => "Ya existe una sesión de usuario activa; por lo tanto, el formulario de inicio de sesión <b>no estará disponible hasta que finalice o cierre la sesión actual</b>. Para continuar, presione el botón en la parte inferior de este mensaje. Para cambiar de usuario, presione finalizar sesión en las opciones adjuntas al ícono de su perfil e inicie sesión con los datos de usuario que desee utilizar. ",
    "Authentication-signout" => "La sesión ha finalizado correctamente. <b>En algunos segundos será redireccionado</b> al inicio de la aplicación. Para continuar, presione el botón en la parte inferior de este mensaje.",
    "Authentication-signout-title" => "¡Autenticación finalizada correctamente!",
    "Authentication-signin-success" => "Ha iniciado sesión correctamente. Por favor, espere unos segundos mientras es redireccionado o presione continuar en la parte inferior de este mensaje. ",
    "Authentication-signin-success-title" => "Sesión iniciada correctamente. ¡Bienvenido! ",
=======
    "Authentication-loggedin" => "Ya existe una sesión de usuario activa, por lo que el formulario de inicio de sesión <b>no estará disponible hasta que finalice o cierre la sesión actual</b>. Para continuar, presione el botón en la parte inferior de este mensaje. Para cambiar de usuario, presione Finalizar sesión en las opciones adjuntas al ícono de su perfil e inicie sesión con los datos de usuario que desee utilizar. ",
    "Authentication-signout" => "La sesión ha finalizado correctamente. <b>En algunos segundos será redireccionado</b> al inicio de la aplicación. Para continuar, presione el botón en la parte inferior de este mensaje.",
    "Authentication-signout-title" => "¡Autenticación finalizada correctamente!",
    "Authentication-signin-success" => "Ha iniciado sesión correctamente. Por favor, espere unos segundos mientras es redireccionado, o presione continuar en la parte inferior de este mensaje. ",
    "Authentication-signin-success-title" => "Sesión iniciada correctamente. Bienvenido! ",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    /* Users */
    "users-create-duplicate-title" => "¡Usuario existente!",
<<<<<<< HEAD
    "users-create-duplicate-message" => "Este usuario ya se había registrado previamente. Esta notificación se debe a que posiblemente haya presionado actualizar y el navegador que está utilizando haya reenviado los datos. Presione continuar en la parte inferior de este mensaje para retornar al listado general de usuarios.",
=======
    "users-create-duplicate-message" => "Este usuario ya se había registrado previamente. Esta notificación puede deberse a que posiblemente haya presionado actualizar y el navegador esté reenviando los datos. Presione continuar en la parte inferior de este mensaje para retornar al listado general de usuarios.",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    "users-profile-view-title" => "Perfil del usuario @%s",
    "users-profile-edit-danger-title" => "Verifique los datos enviados",
<<<<<<< HEAD
    "users-profile-edit-danger-content" => "La información que pretende actualizar en el perfil del usuario seleccionado se encuentra <b><u>incompleta o presenta errores</u></b>. Por favor, verifique los siguientes datos e inténtelo nuevamente. ",
    "users-profile-create-success-title" => "¡Usuario creado exitosamente!",
    "users-profile-create-success-content" => "El usuario <b>%s</b> se creó exitosamente. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje. ",
    "users-lock-info" => "Recuerde que el usuario <b>%s</b> que ha seleccionado, una vez bloqueado, no podrá acceder ni iniciar sesión en la plataforma. ¿Está realmente seguro de bloquear o deshabilitar a este usuario?",
=======
    "users-profile-edit-danger-content" => "La información que pretende actualizar en el perfil del usuario seleccionado se encuentra <b><u>incompleta o presenta errores</u></b>. Por favor, verifique los siguientes datos e inténtelo nuevamente. ",
    "users-profile-create-success-title" => "Usuario creado exitosamente!",
    "users-profile-create-success-content" => "El usuario <b>%s</b> se creo exitosamente. Para continuar seleccione la opción según corresponda en la parte inferior de este mensaje. ",
    "users-lock-info" => "Recuerde que el usuario <b>%s</b> que ha seleccionado, una vez bloqueado, no podrá acceder ni iniciar sesión en la plataforma. ¿Está realmente seguro de bloquear o deshabilitar a este usuario?",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    "users-lock-title" => "Bloquear usuario @%s",
    "users-lock-danger-title" => "Verifique los datos enviados",
    "users-lock-danger-content" => "La información que pretende actualizar en el perfil del usuario seleccionado se encuentra <b><u>incompleta o presenta errores</u></b>. Por favor, verifique los siguientes datos e inténtelo nuevamente. ",
    "users-lock-success-title" => "¡Usuario bloqueado exitosamente!",
<<<<<<< HEAD
    "users-lock-success-content" => "El usuario <b>@%s</b> se bloqueó exitosamente. A partir de este momento, no podrá acceder a la plataforma. Para restaurar este usuario, puede desbloquearlo en el momento que desee utilizando la opción correspondiente desde el listado de usuarios. Para retornar al listado general de usuarios, presione continuar.",
=======
    "users-lock-success-content" => "El usuario <b>@%s</b> se bloqueó exitosamente. A partir de este momento, no podrá acceder a la plataforma. Para restaurar este usuario, puede desbloquearlo en cualquier momento utilizando la opción correspondiente desde el listado de usuarios. Para retornar al listado general de usuarios, presione continuar.",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    "users-unlock-title" => "Desbloquear usuario @%s",
    "users-unlock-info" => "Recuerde que el usuario <b>%s</b> que ha seleccionado, una vez desbloqueado, podrá acceder e iniciar sesión en la plataforma. ¿Está realmente seguro de desbloquear o habilitar a este usuario?",
    "users-unlock-success-title" => "¡Usuario desbloqueado exitosamente!",
<<<<<<< HEAD
    "users-unlock-success-content" => "El usuario <b>@%s</b> se desbloqueó exitosamente. A partir de este momento, podrá acceder a la plataforma. Para limitar el acceso de este usuario, puede bloquearlo nuevamente en el momento que desee utilizando la opción correspondiente desde el listado de usuarios. Para retornar al listado general de usuarios, presione continuar.",
=======
    "users-unlock-success-content" => "El usuario <b>@%s</b> se desbloqueó exitosamente. A partir de este momento, podrá acceder a la plataforma. Para limitar el acceso de este usuario, puede bloquearlo nuevamente en cualquier momento utilizando la opción correspondiente desde el listado de usuarios. Para retornar al listado general de usuarios, presione continuar.",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    "users-access-title" => "Acceder como @%s",
    "users-access-denied-title" => "Acceso denegado al usuario @%s",
<<<<<<< HEAD
    "users-access-denied-content" => "Su rol en la plataforma <b>no posee los privilegios necesarios para acceder a este componente</b>. Para hacer uso del mismo, al menos uno de sus roles en la plataforma deberá disponer del permiso <code>SECURITY-USERS-ACCESS</code>. Solo un administrador del sistema podrá concederle tal nivel de acceso. Por favor, contacte al soporte técnico para solicitar que a su rol le sean asignados los privilegios requeridos, si es el caso. O presione continuar para retornar al listado de usuarios. ",
=======
    "users-access-denied-content" => "Su rol en la plataforma <b>no posee los privilegios necesarios para acceder a este componente</b>. Para hacer uso del mismo, al menos uno de sus roles en la plataforma deberá disponer del permiso <code>SECURITY-USERS-ACCESS</code>. Solo un administrador del sistema podrá concederle este nivel de acceso. Por favor, contacte al soporte técnico para solicitar que se asignen los privilegios requeridos a su rol, si es el caso. Alternativamente, presione continuar para retornar al listado de usuarios. ",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    "users-access-success-title" => "¡Acceso concedido! ",
<<<<<<< HEAD
    "users-access-success-content" => "La identidad ha cambiado. Por favor, presione el botón en la parte inferior de este mensaje para continuar. ",
=======
    "users-access-success-content" => "Si su identidad ha cambiado, por favor presione el botón en la parte inferior de este mensaje para continuar. ",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    /* Others */
    "signin-title" => "¡Inicio de Sesión!",
    "signin-danger-title" => "¡Acceso denegado, datos incorrectos!",
<<<<<<< HEAD
    "signin-danger-content" => "Los datos de acceso proporcionados son incorrectos. Por favor, verifique su nombre de usuario y la contraseña ingresada, e inténtelo nuevamente. Si no recuerda sus datos de acceso, en el caso del nombre de usuario <u>puede utilizar su dirección de correo electrónico</u> como alias, y en caso de <u>haber olvidado la clave de acceso</u> puede utilizar la opción de recuperación para solicitar una nueva clave de acceso. ¿<a href=\"/security/recover/\">Recuperar contraseña</a>?",
=======
    "signin-danger-content" => "Los datos de acceso proporcionados son incorrectos. Por favor, verifique su nombre de usuario y la contraseña ingresada e inténtelo nuevamente. Si no recuerda sus datos de acceso, en el caso del nombre de usuario, <u>podrá utilizar su dirección de correo electrónico</u> como alias. En caso de <u>haber olvidado la clave de acceso</u>, puede utilizar la opción recuperar para solicitar una nueva clave de acceso. ¿<a href=\"/security/recover/\">Recuperar contraseña</a>?",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    "hierarchies-edit-title" => "Editando jerarquía del usuario @%s",
    "hierarchies-edit-success-title" => "¡Jerarquía actualizada exitosamente!",
<<<<<<< HEAD
    "hierarchies-edit-success-content" => "Se han actualizado los <b>roles desempeñados por el usuario</b>. Recuerde que la jerarquía de un usuario, es decir, las funciones que desempeña en la organización, se pueden variar sin que esto afecte la información existente. Sin embargo, dependiendo de dicha <b>jerarquía</b> en las funciones desempeñadas, puede que gane o pierda privilegios de acceso u operación en los diferentes componentes. ",
=======
    "hierarchies-edit-success-content" => "Se han actualizado los <b>roles desempeñados por el usuario</b>. Recuerde que la jerarquía de un usuario, es decir, las funciones que desempeña en la organización, puede variar sin afectar la información existente. Sin embargo, dependiendo de la <b>jerarquía</b> en las funciones desempeñadas, el usuario podría ganar o perder privilegios de acceso u operación en los diferentes componentes. ",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    "policies-edit-title" => "Actualizar políticas del rol %s",
    "policies-danger-title" => "Verifique los datos enviados",
    "policies-danger-content" => "Los datos de acceso proporcionados son incorrectos.",
    "policies-edit-success-title" => "¡Política actualizada!",
<<<<<<< HEAD
    "policies-edit-success-content" => "La política de acceso se <b>actualizó correctamente</b>. Los datos asociados a los diferentes permisos asignados al rol <b>%s</b> se pueden modificar tantas veces como sea necesario hasta generar una política estable o que cumpla con sus requerimientos para este rol.",
=======
    "policies-edit-success-content" => "La política de acceso se <b>actualizó correctamente</b>. Los datos asociados a los diferentes permisos asignados al rol <b>%s</b> se pueden modificar tantas veces como sea necesario hasta generar una política estable o que cumpla con los requisitos para este rol.",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    "signin-label-user" => "Usuario",
    "signin-label-password" => "Contraseña",
    "signin-help-user" => "Usuario / Email",
    "signin-help-password" => "Clave de acceso",
    "signin-placeholder-user" => "usuario@dominio.com",
    "signin-placeholder-password" => "*******",
    "Edit-Rol" => "Editar Rol",
    "Delete-Rol" => "Eliminar Rol",
    "Policies-edit" => "Editar políticas",
    "label_alias" => "Alias",
    "help_alias" => "Introduzca un alias (Obligatorio)",
    "label_password" => "Contraseña",
    "help_password" => "Introduzca una contraseña (Obligatorio)",
    "label_confirm" => "Confirmación",
    "help_confirm" => "Confirme la contraseña (Obligatorio)",
    "label_firstname" => "Nombres",
    "help_firstname" => "Ingrese sus nombres (Obligatorio)",
    "label_lastname" => "Apellidos",
    "help_lastname" => "Ingrese sus apellidos (Obligatorio)",
    "label_address" => "Dirección de residencia",
    "help_address" => "(Obligatorio)",
    "label_email" => "Correo electrónico",
    "help_email" => "(Obligatorio)",
    "label_phone" => "Teléfono",
    "help_phone" => "",
<<<<<<< HEAD
    "label_birthday" => "Fecha de nacimiento",
    "help_birthday" => "Ingrese su Fecha de Nacimiento (Obligatorio)",
=======
    "label_birthday" => "Fecha de nacimiento",
    "help_birthday" => "Ingrese su fecha de nacimiento (Obligatorio)",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    "label_citizenshipcard" => "Número de identificación  ",
    "help_citizenshipcard" => "Cédula, pasaporte (Obligatorio)",
    "label_expedition_date" => "Fecha de expedición",
    "help_expedition_date" => "(Obligatorio)",
    "label_expedition_place" => "Lugar de expedición",
    "help_expedition_place" => "(Obligatorio)",
    "placeholder_confirm" => "**************",
    "placeholder_firstname" => "Ejemplo: John ",
    "placeholder_lastname" => "Ejemplo: Smith ",
    "placeholder_address" => "Ejemplo: Carrera 14 #7-30, Apt  402 ",
    "placeholder_email" => "Ejemplo: usuario@correo.com.co ",
    "placeholder_phone" => "Ejemplo: 314-00-00-000",
    "placeholder_citizenshipcard" => "Ejemplo: 94478998",
    "placeholder_expedition_place" => "Ejemplo: Buga - Valle",
    "Create-User" => "Crear nuevo usuario",
    "lock-user-create-title" => "No fue posible crear el usuario",
<<<<<<< HEAD
    "lock-user-create-content" => "Los datos ingresados para <b>crear el nuevo usuario</b> están <b>incompletos</b> o son <b>incorrectos</b>. Por tal motivo, no se pudo cumplir con la acción solicitada. En la parte inferior de este mensaje encontrará un listado de los datos faltantes o por revisar. Para continuar, por favor verifique los datos proporcionados e <b>inténtelo nuevamente</b>.",
=======
    "lock-user-create-content" => "Los datos ingresados para <b>crear el nuevo usuario</b> están <b>incompletos</b> o son <b>incorrectos</b>, por lo que no se pudo completar la acción solicitada. En la parte inferior de este mensaje encontrará un listado de los datos faltantes o que deben ser revisados. Para continuar, por favor verifique los datos proporcionados e <b>inténtelo nuevamente</b>.",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    "Edit-user" => "Editar usuario <b>@%s</b>",
    "users-update-success-title" => "Usuario actualizado exitosamente!",
    "users-update-success-content" => "El usuario <b>%s</b> se actualizó exitosamente. Para continuar, seleccione la opción correspondiente en la parte inferior de este mensaje. ",
    "Hierarchies-edit" => "Editar jerarquía del usuario <b>@%s</b>",
<<<<<<< HEAD
    "modal-reset-message" => "Ingrese la dirección de correo electrónico asociada a su cuenta de usuario y le enviaremos un enlace para restablecer la contraseña. En caso de que actualmente no disponga de acceso al correo electrónico registrado, contacte a los responsables del sistema para que evalúen soluciones alternativas para verificar su identidad y concederle nuevamente acceso a la plataforma.",
=======
    "modal-reset-message" => "Ingrese la dirección de correo electrónico asociada a su cuenta de usuario y le enviaremos un enlace para restablecer la contraseña. Si actualmente no dispone de acceso al correo electrónico registrado, contacte a los responsables del sistema para que evalúen soluciones alternativas para verificar su identidad y concederle nuevamente acceso a la plataforma.",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    "modal-link-register-now" => "Registrese ahora!",
    "modal-link-sign-now" => "Iniciar sesión!",
    "modal-link-contact-us" => "Contactar a soporte técnico",
    "modal-link-reset" => "Recuperar acceso a mi cuenta",
    "modal-btn-reset" => "Recuperar acceso",
<<<<<<< HEAD
    "modal-reset-success-message" => "El enlace de recuperación se envió exitosamente a su correo electrónico. Verifique en su bandeja de entrada, lea detenidamente las instrucciones y haga clic en el enlace para ingresar a su cuenta de usuario.",
    "modal-signin-message" => "Para acceder a la plataforma, ingrese su usuario y contraseña con los cuales se encuentra registrado. Generalmente, el usuario es su dirección de correo electrónico y está asociado a una contraseña que usted definió libremente al momento de su registro. En caso de no recordar su contraseña o si está iniciando su proceso de registro, utilice los enlaces correspondientes en la parte inferior de este mensaje.",
=======
    "modal-reset-success-message" => "El enlace de recuperación se envió exitosamente a su correo electrónico. Verifique su bandeja de entrada, lea detenidamente las instrucciones y haga clic en el enlace para ingresar a su cuenta de usuario.",
    "modal-signin-message" => "Para acceder a la plataforma, ingrese su usuario y contraseña con los cuales se encuentra registrado. El usuario generalmente es su dirección de correo electrónico y está asociado a una contraseña que usted definió libremente al momento de su registro. En caso de no recordar su contraseña o si es un usuario que inicia su proceso de registro, utilice los enlaces correspondientes en la parte inferior de este mensaje.",
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
    "modal-personal-profile" => "Perfil personal",
    /* Permision */
    "permissions-list-title" => "Listado general de permisos",
    "permissions-list-denied-title" => "¡Acceso denegado!",
    //Moodle
    "users-label_moodle-username" => "Moodle Usuario",
    "users-help_moodle-username" => "Ingrese el nombre de usuario de moodle",
    "users-placeholder_moodle-username" => "Ejemplo: usuario",
    "users-label_moodle-password" => "Moodle Contraseña",
    "users-help_moodle-password" => "Ingrese la contraseña de moodle",
    "users-placeholder_moodle-password" => "Ejemplo: ********",
    //User
    "user-register-title" => "Registro de usuario",
    "user-register-error" => "¡No fue posible crear el usuario!",
<<<<<<< HEAD
    "user-register-message" => "Los datos ingresados para <b>crear el nuevo usuario</b> están <b>incompletos</b> o son <b>incorrectos</b>. Por tal motivo, no se pudo cumplir con la acción solicitada. En la parte inferior de este mensaje encontrará un listado de los datos faltantes o por revisar. Para continuar, por favor verifique los datos proporcionados e <b>inténtelo nuevamente</b>."
=======
    "user-register-message" => "Los datos ingresados para <b>crear el nuevo usuario</b> están <b>incompletos</b> o son <b>incorrectos</b>, por lo que no se pudo completar la acción solicitada. En la parte inferior de este mensaje encontrará un listado de los datos faltantes o que deben ser revisados. Para continuar, por favor verifique los datos proporcionados e <b>inténtelo nuevamente</b>."
>>>>>>> af7ac442714c3eded0b37b9e51c0ead15ce459f7
];
?>
