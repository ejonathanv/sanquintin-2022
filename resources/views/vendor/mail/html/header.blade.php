<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ asset('/img/LOGO_SAN_QUINTIN_ORIGINAL_SM.png') }}" class="logo" alt="San Quintin Mantenimiento Industrial">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
