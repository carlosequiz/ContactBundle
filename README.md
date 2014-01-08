ContactBundle
=============

Beta !!!

Bundle for Symfony 2.3 with a typical contact form for your website.

Translate to English and Spanish.

Documentation is [here](http://fluzo.info)

## Installation
```Bash
$ composer require fluzo/contact-bundle:dev-master
```

```php
# /app/AppKernel.php
public function registerBundles()
{
  $bundles = array(
    // ...
    new Fluzo\ContactBundle\FluzoContactBundle(),
  
  );
}
```

```yaml
# /app/config/routing.yml
fluzo_contact:
    resource: "@FluzoContactBundle/Resources/config/routing.yml"
    prefix:   /
```

```yaml
# /app/config/config.yml
translator:      { fallback: %locale% }
parameters:
    fluzo_contact_email: your@email
```

```HTML
<!-- /app/Resources/views/base.html.twig -->
<!DOCTYPE html>
{% set locale=app.request.locale %} 
<!-- ... -->
```

```HTML
<!-- In your twig template, link to contact form, 
should extend base.html.twig or another template that extends from this -->
<a href="{{path('fluzo_contact_homepage_'~(locale))}}">{{'Contact'|trans}}</a>
```


