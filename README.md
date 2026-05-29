# La Ruleta

Bienvenidos al proyecto "La Ruleta", un juego de apuestas basado en la suerte y desarrollado en Laravel.

## Caracteristicas

Esta aplicacion implementa un sistema de apuestas de ruleta casino. Para participar, el usuario debe registrar un jugador proporcionando:
- Nombre del jugador.
- Monto inicial (por defecto establecido en $10000).
- Color de apuesta: Verde (probabilidad del 2%, recompensa de 15 veces lo apostado), Rojo (probabilidad del 49%, recompensa del doble de lo apostado) o Negro (probabilidad del 49%, recompensa del doble de lo apostado).
- Porcentaje del total de sus fondos a apostar en cada ronda (debe ser un valor entero entre el 8% y el 15%).

Una vez registrado, el jugador puede realizar apuestas consecutivas. Si el color resultante no coincide con el color apostado, la casa se queda con la apuesta.

## Requisitos

1. PHP mayor o igual a la version 7.2.5.
2. Composer instalado en el sistema.
3. Git instalado para control de versiones.
4. Un entorno de servidor local (por ejemplo, XAMPP, Laragon, WampServer o Docker).
5. Node.js y npm instalados para la compilacion de los assets frontend.

## Instalacion y Configuracion

Siga estos pasos para configurar el proyecto en su entorno local:

1. Clone el repositorio en su maquina local:
   ```bash
   git clone https://github.com/driosoft-pro/Ruleta_Php.git
   ```

2. Acceda al directorio del proyecto e instale las dependencias de PHP con Composer:
   ```bash
   composer install
   ```

3. Cree el archivo de configuracion local `.env` a partir de la plantilla:
   - En Linux o macOS:
     ```bash
     cp .env.example .env
     ```
   - En Windows:
     ```cmd
     copy .env.example .env
     ```

4. Genere la clave de la aplicacion de Laravel:
   ```bash
   php artisan key:generate
   ```

5. Configure los parametros de la base de datos en su archivo `.env` recien creado:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=la_ruleta
   DB_USERNAME=su_usuario
   DB_PASSWORD=su_contraseña
   ```

6. Cree una base de datos vacia en su servidor local con el nombre especificado en el archivo `.env` (por ejemplo, `la_ruleta`).

7. Ejecute las migraciones para crear la estructura de las tablas en la base de datos:
   ```bash
   php artisan migrate
   ```

8. Instale las dependencias de Node.js y compile los recursos frontend:
   ```bash
   npm install && npm run dev
   ```
   Nota: Si encuentra problemas relacionados con OpenSSL en versiones recientes de Node.js durante la compilacion, ejecute:
   ```bash
   NODE_OPTIONS=--openssl-legacy-provider npm run dev
   ```

9. Inicie el servidor de desarrollo local de Laravel:
   ```bash
   php artisan serve
   ```

10. Acceda a la aplicacion en su navegador a traves de la direccion que le indique la terminal (por defecto, `http://127.0.0.1:8000`).
