CKEditor
========

CKEditor bundle

Installation
========

```
// debs
[CKEditorBundle]
    git=https://github.com/milos-silni/CKEditorBundle.git
    target=/bundles/MilosSilni/CKEditorBundle
```

``` bash 
$ php bin/vendors install
```

``` php
<?php
// app/autoload.php

$loader->registerNamespaces(array(
    'MilosSilni'       => __DIR__.'/../vendor/bundles',
    // ...
);
```

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    return array(
        new MilosSilni\CKEditorBundle\CKEditorBundle(),
        // ...
    );
}
```

``` bash
$ ./app/console assets:install web --symlink
```