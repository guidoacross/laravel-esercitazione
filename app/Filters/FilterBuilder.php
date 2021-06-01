<?php

namespace App\Filters;

class FilterBuilder {

    protected $query, $filters, $namespace;

    public function __construct($query, $filters, $namespace) {

        $this->query = $query;
        $this->filters = $filters;
        $this->namespace = $namespace;
    }

    public function apply() {

        foreach ($this->filters as $name => $value) {
            //per ciascun filtro in request preleviamo la classe associata
            $normailizedName = ucfirst($name);
            $class = $this->namespace . "\\{$normailizedName}";
            //
            if (!class_exists($class)) {
                continue;
            }

            if (strlen($value)) {
                (new $class($this->query))->handle($value);
            } else {
                (new $class($this->query))->handle();
            }
        }

        return $this->query;
    }
}