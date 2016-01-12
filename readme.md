PHP Country list array

Composer:
"tpweb/countrylist": "0.1"


Laravel: config/app.php
'providers' => [
TPWeb\CountryList\CountryListServiceProvider::class,
],


'aliases' => [
'CountryList' => TPWeb\VestaCP\CountryListFacade::class,
]