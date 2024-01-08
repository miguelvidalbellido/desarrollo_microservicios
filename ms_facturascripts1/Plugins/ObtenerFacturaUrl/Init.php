<?php

namespace FacturaScripts\Plugins\ObtenerFacturaUrl;

use FacturaScripts\Core\Base\InitClass;
use FacturaScripts\Core\Kernel;

class Init extends InitClass
{
    public function init()
    {
        Kernel::addRoute('/api/3/facturaspdf', 'ApiObtenerFacturaUrlController', -1);
    }

    public function update()
    {
        // se ejecuta cada vez que se instala o actualiza el plugin
    }

    public function uninstall()
    {
        // se ejecuta cada vez que se desinstale el plugin. Primero desinstala y luego ejecuta el uninstall.
    }

}