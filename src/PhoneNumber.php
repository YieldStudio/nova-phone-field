<?php

namespace YieldStudio\NovaPhoneField;

use Illuminate\Support\Arr;
use Laravel\Nova\Fields\Field;

class PhoneNumber extends Field
{
    public $component = 'nova-phone-field';

    public function withCustomFormats(string|array ...$customFormats): self
    {
        return $this->withMeta([
            'customFormats' => Arr::flatten($customFormats),
        ]);
    }

    public function onlyCountries(string|array ...$countries): self
    {
        return $this->withMeta([
            'onlyCountries' => Arr::flatten($countries),
        ]);
    }

    public function onlyCustomFormats(): self
    {
        return $this->withMeta([
            'onlyCustomFormats' => true,
        ]);
    }

    public function copyable(): self
    {
        return $this->withMeta([
            'copyable' => true,
        ]);
    }
}
