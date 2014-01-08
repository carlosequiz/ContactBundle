ContactBundle
=============

Beta !!!

Bundle for Symfony 2.3 with a typical contact form for your website

## Installation
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
```

```yaml
# /app/config/config.yml
translator:      { fallback: %locale% }
```

```HTML
<!-- /app/Resources/views/base.html.twig -->
<!DOCTYPE html>
{% set locale=app.request.locale %} 
<!-- ... -->
```
