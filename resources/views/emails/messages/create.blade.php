@component('mail::message')
# Hey admin <br>
<ul>
      <li>  {{ $nom }}
      <li>  {{ $email }}
</ul>


@component('mail::panel')
{{ $text }}

@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
