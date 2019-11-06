<?php


namespace Andor9229\Rbac\View;

use Andor9229\Rbac\Crud;
use Illuminate\Support\Str;

class Edit extends Crud
{
    protected $name;
    protected $dir;
    protected $file;

    public function __construct($name)
    {
        $this->name = $name;
        $this->dir = "views/pages/rbac/{$name}";
        $this->file =  "edit.blade.php";
    }

    public function setTemplate()
    {
        $this->template = str_replace(
            [
                '{{modelName}}',
                '{{modelNameLowerCase}}',
            ],
            [
                $this->name,
                Str::lower($this->name),
            ],
            $this->getStub("{$this->name}/edit")
        );
    }

}
