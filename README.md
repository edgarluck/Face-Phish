# Face-Phish
Social for Phishing Facebook [ version free ]

* Herramienta Phishing para Facebook.

# Screenshots
<p align="center">
 <img src="https://user-images.githubusercontent.com/76820660/156854597-6e4dd11b-972d-4e59-8b3b-5870e1c0bca9.png"></img>
 </p>

# Requisitos 

* `NGROK`  <a target="_blank" rel="noopener noreferrer" href="https://github.com/edgarluck/NgrokTunnel.git">Instalar ngrok</a>
* `php`
* `openssh`
* `git`
* `proot`
* `resolv-conf` [ solo en Termux ]
* `cloudflared`  <a target="_blank" rel="noopener noreferrer" href="https://github.com/edgarluck/Install_Cloudflared.git">Instalar cloudflared</a>
* `LocalXpose`  <a target="_blank" rel="noopener noreferrer" href="https://github.com/edgarluck/Install_LocalXpose.git">Instalar localxpose</a>

# Probado en:

* `Kali Linux`
* `Paroot OS`
* `Linux Mint`
* `Termux` (Android)

# Tunnel

### Cuenta con cuatro tuneles :

* `NGROK`
* `SSH.LOCALHOST.RUN`
* `CLOUDFLARED`
* `LOCALXPOSE`

# Cuenta con el enlace acortado.

# 🔰Pasos para usar el servidor ssh.localhost.run en Face-Phish (Configuración del servidor localhost.run)🔰

Para empezar a usar el servidor ssh.localhost.run , que esta incluido en la herramienta Face-Phish V1.4

Es necesario configurar y seguir estos pasos:

* ejecutar :

$ `pkg install openssh -y`

$ `ssh-keygen -t rsa`

* Una vez ejecutado ssh-keygen -t rsa , solo seguiremos presionando enter hasta que termine.

* Siguiente es en usar el servidor manualmente

$ `ssh -R 80:localhost:8080 nokey@localhost.run`

* Una vez ejecutado nos va a realizar una pregunta y le responderemos añadiendo : yes

Por lo cual empezará a iniciar el servidor ,  ahora debemos presionar : CTRL + c 
Para salir del servidor que se esta ejecutando .

Una vez hecho y realizado correctamente esos pasos ya esta listo para poder usar la Herramienta Face-Phish con el servidor ssh.localhost.run.

# Instalacion en Linux

$ sudo apt-get update

$ sudo apt-get upgrade -y

$ sudo apt-get install php git -y 

$ sudo apt-get install wget -y

$ sudo apt-get install proot -y

$ sudo apt-get install ssh -y

$ cd $HOME

$ git clone https://github.com/edgarluck/Face-Phish.git

$ cd Face-Phish

$ bash face-phish.sh

# Instalacion en Termux

$ apt update && apt upgrade -y

$ pkg install proot resolv-conf -y

$ pkg install php -y

$ pkg install wget -y 

$ pkg install git -y

$ pkg install openssh -y

$ cd $HOME

$ git clone https://github.com/edgarluck/Face-Phish.git

$ cd Face-Phish

$ chmod +x face-phish.sh

$ bash face-phish.sh

### Telegram --> https://t.me/Linux_Informatic

# USO

Para ver los comandos disponibles se ejecuta :

`help`

------------------------------------------

Para agregar una imagen al enlace :

`set add_foto url ENLACE`

En `ENLACE` reemplazar por la url de la imagen que terminen en    .png 

------------------------------------------

Para ver los servidores disponibles, ejecuta :

`show tunnel`

------------------------------------------

Para elegir el servidor ngrok :

`set ltunnel ngrok`

Para iniciar el phishing : 01

------------------------------------------

Para elegir el servidor localhost.run:

`set ltunnel ssh.localhost.run`

Para iniciar el phishing : 01

-------------------------------------------

Para elegir el servidor cloudflared :

`set ltunnel cloudflared`

Inicia phishing : 01 

-------------------------------------------

Para elegir el servidor localxpose :

`set ltunnel localxpose`

Inicia phishing : 01 

-------------------------------------------

# Funciones de las nuevas versiones publicadas

* En la versión 1.8 :
  * Se agregaron nuevos comandos.
  * Se agrego una nueva plantilla de facebook para android.

* En la versión 1.7 , se agrego un nuevo servidor como :
  
  * LocalXpose
  * Se soluciono la url de salida , tras un cambio en la url del servidor ssh.localhost.run

* En la version 1.6 , se agrego una nueva funcion 
  
  Esta nueva función trata de agregar una imagen pero la imagen debe contener una URL , que terminen en .png
  
  Asi poder agregar una imagen a nuestro enlace (Phishing)
  
  URL de referencia : `https://www.facebook.com/images/fb_icon_325x325.png`

  Si usted quiere agregar una imagen desde el almacenamiento interno (local) tendra que adquirir la version premiun 
  para evitar varias limitaciones , y con buenas ventajas.
   
* En la version 1.5 , se agrego un nuevo servidor cloudflared.


### La version Premiun incluye soporte , mas personalización y ayuda en los errores que presentas.
 
* Agregar una imagen al enlace.
  
  `La imagen es visible en las siguientes redes sociales ( Chat ): WhatsApp , Facebook , Telegram.`
* Agregar un Titulo.
* Agregar una descripción.
* Agregar un dominio.
* Agregar un redireccionamiento de pagina.
* Personalizar el enlace.

### Selecciona cada una de las imagenes, para visualizar la Herramienta Premium:

<p>
 * <a target="_blank" rel="noopener noreferrer" href="https://user-images.githubusercontent.com/76820660/170791879-45921389-ce42-47df-a5a4-c9ec6ccd61d6.png">Ver imagen 1</a><br>
 * <a target="_blank" rel="noopener noreferrer" href="https://user-images.githubusercontent.com/76820660/170791883-5c04cd76-fe96-4bcd-ae19-256d71fdfb25.png">Ver imagen 2</a>
</p>

### O Puedes solicitar tu propia herramienta personalizada.

### Contactame si desea adquirirlo a un precio accesible: 
* https://t.me/edgarluck
* `+51 938454671`
