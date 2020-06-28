# host-per-locale-sf51

Objective : be able to handle such urls for a website in 4 languages (fr_BE, nl_BE, de, en):
- www.website.de/kontak
- www.website.com/contact
- www.website.be/fr/nous-contacter
- www.website.be/nl/contacteer-ons

This is currenlty possible using my package [remmel/i18n-routing-bundle](https://packagist.org/packages/remmel/i18n-routing-bundle) (check [demo](https://github.com/remmel/i18n-routing-demo)). But here, we will use the new symfony features :
 - [Symfony 4.1: Internationalized routing](https://symfony.com/blog/new-in-symfony-4-1-internationalized-routing) (url prefix + translation)
 - [Symfony 5.1: Different hosts per locale](https://symfony.com/blog/new-in-symfony-5-1-different-hosts-per-locale)

 However, some optinal functionalities are still missing from Symfony (but present in my [remmel/i18n-routing-bundle](https://packagist.org/packages/remmel/i18n-routing-bundle) ) :
 - Externalize url translation in `translations/routes.de.yaml`
 - Merge prefix + host to shorten the configuration

 Currently `annotations.yaml`
 ```
 controllers:
    resource: ../../src/Controller/
    type: annotation
    host:
        fr_BE: www.website.be
        nl_BE: www.website.be
        en: www.website.com
        de: www.website.de
    prefix:
        fr_BE: '/fr'
        nl_BE: '/nl'
        en: ''
        de: ''
```

It would be great to have something like :
 ```
 controllers:
    resource: ../../src/Controller/
    type: annotation
    locales:
        fr_BE: www.website.be/fr/
        nl_BE: www.website.be/bl/
        en: www.website.com
        de: www.website.de
```



Generated routes of that project: `bin/console debug:router`
```
 -------------------------- -------- -------- ----------------- ----------------------------------- 
  Name                       Method   Scheme   Host              Path                               
 -------------------------- -------- -------- ----------------- ----------------------------------- 
  home.fr_BE                 ANY      ANY      www.website.be    /fr/                               
  home.nl_BE                 ANY      ANY      www.website.be    /nl/                               
  home.en                    ANY      ANY      www.website.com   /                                  
  home.de                    ANY      ANY      www.website.de    /                                  
  contact.en                 ANY      ANY      www.website.com   /contact                           
  contact.de                 ANY      ANY      www.website.de    /kontakt                           
  contact.fr_BE              ANY      ANY      www.website.be    /fr/nous-contacter                 
  contact.nl_BE              ANY      ANY      www.website.be    /nl/contacteer-ons                 
 -------------------------- -------- -------- ----------------- ----------------------------------- 
```
