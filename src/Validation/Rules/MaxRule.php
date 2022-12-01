<?php 

namespace Ikonc\Validation\Rules;

use Ikonc\Validation\Rules\Contract\Rule;

 
class MaxRule implements Rule 
{ 
    protected int $max;

    public function __construct(int $max)
    {
        $this->max = $max;
    }

    public function apply($field, $value, $data=[])
    {
        if(strlen($value) < $this->max){
            return true;
        }
        return false;
        
    }

    public function __toString(): string
    {
        return "%s must be less than {$this->max}";
    }
}