@component('mail::message')
# Payment

You can now fill out our payment form for your reservation. <br>
Just click on the button down below.

@component('mail::button', ['url' => 'http://127.0.0.1:8000/paymentform'])
Go to Payment Page
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
