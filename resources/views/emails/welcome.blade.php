@component('mail::message')
# Payment

You can now fill out our payment form for your reservation. <br>
Please pay at least 50% of your package price. <br>
Just click on the button down below. The link will expire after 1 day.

@component('mail::button', ['url' => $link])
Go to Payment Page
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
