{{ $address->name }} - {{ $address->phone }}<br>{{ $address->address }}, <span
    class="inline_block">{{ $address->city_name }}</span>, <span class="inline_block">{{ $address->state_name }}</span>,
<span class="inline_block">{{ $address->country_name }}</span>
@if (EcommerceHelper::isZipCodeEnabled())
    ,
    <span class="inline_block">{{ $address->zip_code }}</span>
@endif
