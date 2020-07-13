<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

**La Ruleta**
<p>Bienvenidos al proyecto "La Ruleta". Un juego de mesa de casino. </p>

**Caracteristicas:**
<p>Esta aplicación se basa en un sistema que apuesta enfocado en la suerte. Para su uso debes registrar un jugador llenado de las siguientes preguntas: un nombre, valor a apostar que por defecto será de $10000, color a apostar y tendrás 3 opciones a escoger en colores Verde, Rojo, Negro y el porcentaje a apostar que será entre 8 y 15% de tu monto de dinero.</p>
<p>Una vez registrado podrás empezar a jugar apostando y probando tu suerte. </p>
<p>Los porcentajes de ganancia predeterminados serán los siguientes: </p>
<p>Verde con una probabilidad del 2% que te salga y ganarás 15 veces lo apostado </p>
<p>Rojo con una probabilidad del 49% que te salga y ganarás 2 veces lo apostado </p>
<p>Negro con una probabilidad del 49% que te salga y ganarás 2 veces lo apostado </p>
<p>Si no sale el color al que apuesta gana la casa.</p>
<p>¡¡Espero que te diviertas!!</p>
 
**Requisitos:**
1. Versión de PHP mayor o igual a la 7.2.5 
Documentación oficial de Laravel: https://laravel.com/docs/7.x 
2. Tener instalado composer en tu equipo: https://getcomposer.org/ 
<p>• En Windows puedes descargar el programa composer desde la página oficial: https://getcomposer.org/Composer-Setup.exe</p>
<p>• Linux</p>
- Debian: sudo get install composer.
- Ubuntu: sudo apt-get install composer.
- Arch Linux: sudo pacman -S composer.
- Fedora: sudo dnf install composer
<p>• En Mac puedes instalar composer con el siguiente comando</p>
- Mac: brew install composer
3. Tener instalado git: https://gitforwindows.org/ 
<p>• En Windows puedes descargar el programa git desde la página oficial: https://git-scm.com/</p>
<p>• Linux:</p>
<p>- Debian: sudo get install git.</p>
<p>- Ubuntu: sudo apt-get install git.</p> 
<p>- Arch Linux: sudo pacman -S git.</p>
<p>- Fedora: sudo yum install git.</p>
<p>• En Mac puedes descargar el programa git desde la página oficial: https://git-scm.com/download/mac</p>
4. Tener instalado un servidor local: 
<p>• XAMPP: https://www.apachefriends.org/es/index.html (Todas plataformas).</p>
<p>• WampServer: https://www.wampserver.com/en/ (Solo Windows).</p>
<p>• Laragon: https://laragon.org/download/index.html (Solo windows).</p>
Listo ya podrás instalar este proyecto. 
**Instalación de proyecto correctamente:**
1. Descarga o clónalo el proyecto: 
<p>• git clone git//:github.com:driosoft-pro/La_Ruleta_Casino.git</p>
2. Ejecuta el comando: 
<p>• composer install</p>
3. para copiar el archivo .env.example y pegarlo con el nombre. env. ejecuta siguiente comando: 
<p>• cp .env.example .env</p>
<p>• copy .env.example .env (Solo windows)</p>
4. Debes crear una nueva llave para proyecto ejecuta el siguiente comando: 
<p>• php artisan key:generate</p>
5. Configura la base de datos modificando el archivo .env 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=la_ruleta
DB_USERNAME=root
DB_PASSWORD=
6. Para efectuar los cambios previamente realizados ejecuta el siguiente comando 
<p>• Crea una base de datos con el siguiente nombre: la_ruleta</p>
<p>• php artisan migrate</p>
7. Añadir dependencias de npm con el siguiente comando 
<p>• composer require laravel/ui</p>
<p>• php artisan ui bootstrap</p>
<p>• npm install && npm run dev</p>
8. Navega desde una consola hasta la carpeta del proyecto (No importa el sistema operativo) y ejecuta el siguiente comando. 
<p>• php artisan serve</p> 
9. ¡¡Listo eso es todo!! 
<p>DIOS te bendiga, espero que este pequeño proyecto te sirve y sea de tu agrado.</p>

