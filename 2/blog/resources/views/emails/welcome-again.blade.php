@component('mail::message')
# Introduction

Thanks for registering.

@component('mail::button', ['url' => 'https://laracasts.com'])
Start Browsing
@endcomponent

@component('mail::panel', ['url' => ''])
Lorem ipsum dolor sit amet.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
