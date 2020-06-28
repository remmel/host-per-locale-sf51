# host-per-locale-sf51

Demo project to internationalize urls. Using :
 - [Symfony 4.1: Internationalized routing](https://symfony.com/blog/new-in-symfony-4-1-internationalized-routing) (url prefix + translation)
 - [Symfony 5.1: Different hosts per locale](https://symfony.com/blog/new-in-symfony-5-1-different-hosts-per-locale)

 Missing functionalities which are present in [remmel/i18n-routing-bundle](https://packagist.org/packages/remmel/i18n-routing-bundle) 
 - Externalize url translation in `translations/routes.fr.yaml`
 - Merge prefix + host


Generated routes of that project: `bin/console debug:router`

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

