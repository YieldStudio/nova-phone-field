<?php

declare(strict_types=1);

namespace YieldStudio\NovaPhoneField;

use Illuminate\Support\Arr;
use Laravel\Nova\Fields\Field;
use Laravel\Nova\Fields\SupportsDependentFields;

class PhoneNumber extends Field
{
    use SupportsDependentFields;

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
