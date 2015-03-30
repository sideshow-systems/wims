# WIMS
WIMS (What Is My Setup)

## What is WIMS?
With WIMS you could easily see your current browser and operating system setup. Have you ever asked someone: "What browser do you use?" and got the answer: "I do not know!". These times are over! Just send out the link to your WIMS page and you'll get all the data you'll need!

## Installation
WIMS is fully [Vagrant](https://www.vagrantup.com) powered! Just clone this repository and run the following command on your shell:

```bash
vagrant up
```

Also WIMS is a multi-language project. You have to use a software like [poedit](https://poedit.net) to make .mo files out of the .po files from the language directory.

## Technologies
The following technologies are used in this project:

  * [Vagrant](https://www.vagrantup.com)
  * [Composer](https://getcomposer.org)
    * [zendframework/zendframework1](https://packagist.org/packages/zendframework/zendframework1)
    * [cbschuld/browser.php](https://packagist.org/packages/cbschuld/browser.php)
  * [poedit](https://poedit.net)
