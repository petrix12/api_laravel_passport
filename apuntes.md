# Crear una API RESTful con Laravel Passport
+ [Documentación Laravel Passport](https://laravel.com/docs/8.x/passport)
+ [Repositorio](https://github.com/petrix12/api_laravel_passport.git)

## Paso a paso:
1. Crear proyecto en la página de [GitHub](https://github.com) con el nombre: **api_laravel_passport**.
    + **Description**: Ejemplo de la creación de una API en Laravel 8 usando Laravel Passport.
    + **Public**.
3. Crear proyecto para la API RESTful:
    + $ laravel new 09api_laravel_passport
2. En la ubicación raíz del proyecto en la terminal de la máquina local:
    + $ git init
    + $ git add .
    + $ git commit -m "Commit 00: Antes de iniciar"
    + $ git branch -M main
    + $ git remote add origin https://github.com/petrix12/api_laravel_passport.git
    + $ git push -u origin main
3. Configurar las siguientes varialbles de entorno en **.env**:
    ```env
    ***
    ```
4. ssss




≡
    ```php
    ***
    ```

6. Commit Video 01:
    + $ git add .
    + $ git commit -m "Actualización X"
    + $ git push -u origin main






## Peticiones http que puede responder el proyecto api.restful:

### Usuarios:

#### Registrar un usuario:
+ Método: POST
+ URL: http://api.codersfree.test/v1/register
+ Body:
    + Form:
        ```
        Field name: name                      | Value: Pedro Bazó
        Field name: email                     | Value: bazo.pedro@gmail.com
        Field name: password                  | Value: 12345678
        Field name: password_confirmation     | Value: 12345678
        ```
+ Headers:
    ```
    Header: Accept  | Value: application/json
    ```

#### Login a un usuario:
+ Método: POST
+ URL: http://api.codersfree.test/v1/login
+ Body:
    + Form:
        ```
        Field name: email       | Value: bazo.pedro@gmail.com
        Field name: password    | Value: 12345678
        ```
+ Headers:
    ```
    Header: Accept  | Value: application/json
    ```


### Permisos de accesos:

#### Obtener token para un usuario:
+ Método: POST
+ URL: http://api.codersfree.test/oauth/token
    + Body:
        + Form:
            ```
            Field name: grant_type      | Value: password
            Field name: client_id       | Value: {Client ID del cliente tipo password}
            Field name: client_secret   | Value: {Client secret del cliente tipo password}
            Field name: username        | Value: {email del usuario a autorizar}
            Field name: password        | Value: {clave del usuario}
            ```
+ Headers:
    ```
    Header: Accept  | Value: application/json
    ```
#### Obtener autorización por cliente tipo password:
+ Headers:
    ```
    Header: Accept          | Value: application/json
    Header: Authorization   | Value: Bearer + (un espacio) + (access_token de la petición anterior sin las comillas dobles)
    ```

### Categorías:

#### Obtener las categorías:
+ Método: GET
+ URL: http://api.codersfree.test/v1/categories
+ Headers:
    ```
    Header: Accept  | Value: application/json
    ```

#### Crear una categoría:
+ Método: POST
+ URL: http://api.codersfree.test/v1/categories
+ Body:
    + Form:
        ```
        Field name: name    | Value: Categoría de prueba
        Field name: slug    | Value: categoria-de-prueba
        ```
+ Headers:
    ```
    Header: Accept  | Value: application/json
    ```

#### Obtener una categoría:
+ Método: GET
+ URL: http://api.codersfree.test/v1/categories/{id}
+ Headers:
    ```
    Header: Accept  | Value: application/json
    ```

#### Actualizar una categoría:
+ Método: PUT
+ URL: http://api.codersfree.test/v1/categories/{id}
+ Body:
    + Form-encode:
        ```
        Field name: name  | Value: Categoría de prueba actualizada
        Field name: slug  | Value: categoria-de-prueba-actualizada
        ```
+ Headers:
    ```
    Header: Accept  | Value: application/json
    ```

#### Eliminar una categoría:
+ Método: DELETE
+ URL: http://api.codersfree.test/v1/categories/{id}
+ Headers:
    ```
    Header: Accept  | Value: application/json
    ```

#### Obtener las categorías y su relación con los posts:
+ Método: GET
+ URL: http://api.codersfree.test/v1/categories?included=posts
+ Headers:
    ```
    Header: Accept  | Value: application/json
    ```

#### Obtener las categorías y su relación con los posts y el autor del post:
+ Método: GET
+ URL: http://api.codersfree.test/v1/categories?included=posts.user
+ Headers:
    ```
    Header: Accept  | Value: application/json
    ```

#### Obtener una categoría y su relación con los posts:
+ Método: GET
+ URL: http://api.codersfree.test/v1/categories/{id}?included=posts
+ Headers:
    ```
    Header: Accept  | Value: application/json
    ```

#### Obtener una categoría y su relación con los posts y el autor del post:
+ Método: GET
+ URL: http://api.codersfree.test/v1/categories/1?included=posts.user
+ Headers:
    ```
    Header: Accept  | Value: application/json
    ```

#### Obtener las categorías filtradas:
+ Método: GET
+ URL: http://api.codersfree.test/v1/categories?filter[{Campo1}]={Valor1}&filter[{Campo2}]={Valor2}
+ Headers:
    ```
    Header: Accept  | Value: application/json
    ```
  
#### Obtener las categorías ordenadas:
+ Método: GET
+ URL: http://api.codersfree.test/v1/categories?sort={Campo1,Campo2}
+ Headers:
    ```
    Header: Accept  | Value: application/json
    ```
+ **Nota**: Las categorías se ordenaran en orden ascendente, si se desea que se ordenen de manera descendente el campo debe ser precedido por el signo menos (-).

#### Obtener las categorías paginadas:
+ Método: GET
+ URL: http://api.codersfree.test/v1/categories?perPage={RegistrosPorPágina}&page={Página}
+ Headers:
    ```
    Header: Accept  | Value: application/json
    ```

### Posts

#### Obtener los posts:
+ Método: GET
+ URL: http://api.codersfree.test/v1/posts
+ Headers:
    ```
    Header: Accept  | Value: application/json
    ```
**Nota**: para relacionar, ordenar, filtrar y paginar es análogo a como se hace para las categorías.

#### Registrar un post:
+ Método: POST
+ URL: http://api.codersfree.test/v1/posts
    + Body:
        + Form:
            ```
            Field name: name        | Value: Título de prueba
            Field name: slug        | Value: titulo-de-prueba
            Field name: extract     | Value: Cualquier cosa
            Field name: body        | Value: Cualquier cosa
            Field name: category_id | Value: 1
            Field name: user_id     | Value: 1
            ```
+ Headers:
    ```
    Header: Accept  | Value: application/json
    ```

## Estandar para la entrega de endpoints en API RESTful

### Acceder a un recurso:
| Acción                            | Método    | Endpoint                              |
| --------------------------------- | --------- | ------------------------------------- |
| Obtener todos los recursos        | GET       | https:\\\\{dominio}\\{recurso}        |
| Obtener el recursoscon id=i       | GET       | https:\\\\{dominio}\\{recurso}\\{i}   |
| Enviar un recurso                 | POST      | https:\\\\{dominio}\\{recurso}        |
| Actualizar el recurso con id=i    | PUT       | https:\\\\{dominio}\\{recurso}\\{i}   |
| Eliminar el recurso con id=i      | DELETE    | https:\\\\{dominio}\\{recurso}\\{i}   |
+ **Nota 1**: El recurso debe escribirse en plurar y preferiblemente en inglés.
+ **Nota 2**: Cuando se intenta actualizar un recurso con el método **PUT**, en caso de no existir, se deberá crear.

### Acceder a los recursos de un recurso:
| Acción                            | Método    | Endpoint                                                                  |
| --------------------------------- | --------- | ------------------------------------------------------------------------- |
| Obtener todos los subrecursos del recurso con id=i    | GET   | https:\\\\{dominio}\\{recurso}\\{i}\\{subrecursos}        |
| Obtener el subrecurso con id=j del recurso con id=i   | GET   | https:\\\\{dominio}\\recurso}\\{i}\\{subrecursos}\\{j}    |

### Usar versonamiento:
https:\\\\{dominio}\\v{n}\\{recurso} 
n: número de versión.

### Uso de QueryString:
+ Para ordenar:
    + https:\\\\{dominio}\\{recurso}?sort={campo}
+ Para filtrar:
    + https:\\\\{dominio}\\{recurso}?filter[{campo}]={valor}
+ Para páginar:
    + https:\\\\{dominio}\\{recurso}?perPage={registros por página}&page={página}

### Header:
+ En la cabecera de la petición http debe viajar:
    + Tokens o credenciales
    + Formato en que se desea recibir las respuestas

### Body:
+ En el cuerpo de la petición http debe viajar:
    + Los datos para crear un registro.
    + Los datos para actualizar un registro.

### Código de estado:
+ 20X: respuesta satisfactoria.
+ 400: solicitud incorrecta.
+ 401: acceso no autorizado.
+ 403: acceso autorizado pero no tiene permisos.
+ 404: recurso no autorizado o no fue encontrado.
+ 500: error interno del servidor.
+ 504: No puede responder a tiempo a la petición.

### Uso de los métodos:
+ GET: Solicitar registros.
+ POST: Crear registro.
+ PUT: Actualizar todos los campos de un registro y si no existe, entonces crearlo.
+ PATH: Actualizar parcialmente un registro.
+ DELETE: eliminar un registro.