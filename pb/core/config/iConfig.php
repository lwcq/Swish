<?php

namespace core\config;

interface iConfig {
    
    public function getValue($collection, $name);
}