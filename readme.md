# PHP Country list array
[![Total Downloads](https://poser.pugx.org/tpweb/countrylist/d/total.svg)](https://packagist.org/packages/tpweb/countrylist)
[![Latest Stable Version](https://poser.pugx.org/tpweb/countrylist/v/stable.svg)](https://packagist.org/packages/tpweb/countrylist)
[![Latest Unstable Version](https://poser.pugx.org/tpweb/countrylist/v/unstable.svg)](https://packagist.org/packages/tpweb/countrylist)
[![License](https://poser.pugx.org/tpweb/countrylist/license.svg)](https://packagist.org/packages/tpweb/countrylist)

## Composer
`"tpweb/countrylist": "dev-master"`


## Laravel: config/app.php
`
'providers' => [
TPWeb\CountryList\CountryListServiceProvider::class,
],


'aliases' => [
'CountryList' => TPWeb\VestaCP\CountryListFacade::class,
]
`

## Usage:
`
\TPWeb\CountryList\CountryList::countryArray()
\TPWeb\CountryList\CountryList::europeCountryArray()
`