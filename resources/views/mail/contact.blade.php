
Nom : {{ $data['name'] }}
Email :{{ $data['mail'] }}
@if(isset($data['telephone']))
Téléphone :{{ $data['telephone'] }}
@endif
Sujet : {{ $data['subject'] }}.
<p>{{ $data['message'] }}</p>

