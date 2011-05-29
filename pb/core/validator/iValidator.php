<?php

namespace core\validator;

interface iValidator {
    
    public function execute(array $filters);
}