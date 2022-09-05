@extends('layouts.sched')

@section('title')
Agreement
@endsection

@section('content')

<html>

<head>
    <title>Agreement</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('project/css/agreement.css') }}">
</head>

<body>

    <section>

        <div style="margin-top:100px;">
            <div class="container">
                <div class="card p-5 d-flex justify-content-center flex-row position-relative">
                    <div class="circle-top">

                    </div>
                    <div class="text-cont m-4">
                        <h1 class="mb-5">Terms & Conditions | FMC Catering Services</h1>
                        <p>The customer needs to pay 50% of the package price for reservation fee which deductable to the total of payment. The reservation is valid for 3 days and shall be forfeited thus, not confirm within the period of time. This is base on the terms and condition of FMC Catering Services that will be sign by agreement of the customer and the owner. If the customer wishes to cancel the event the payment is not refundable, non consumable and no transferable. Balance to be paid in cash a day before the event. None payment of the full agreed amount reserves the right for the caterer to cancel all its services.</p>
                    </div>

                </div>

            </div>
        </div>

        <!--privacy policy-->
        <div style="margin-top:100px; margin-bottom:5%;">
            <div class="container">
                <div class="card p-5 d-flex justify-content-center flex-row position-relative">

                    <div class="text-cont m-4">
                        <h1 class="mb-5">Pivacy Policy</h1>
                        <p>This privacy policy sets out the basis on which any information (which may include personal data, as defined in data protection law) we collect from you, or that you provide to us, through this website, application or service (the “Site”) will be processed by us. Please read the following carefully to understand our practices regarding your information and how we will treat it.</p>

                        <h1 class="mb-5">Information We May Collect From You</h1>
                        <p>When ordering or registering on our site, as appropriate, you may be asked to enter your name, email address, phone number, or other details to help you with your experience.</p>

                        <h1 class="mb-5">How Do We Use Your Information?</h1>
                        <p>We may use the information we collect from you when you make a reservation, respond to a survey or marketing communication, surf the website, or use certain other site features in the following ways:</p>
                        <p>To personalize user's experience and to allow us to deliver the type of content and product offerings in which you are most interested.</p>
                        <ul>
                            <li>To improve our website in order to better serve you.</li>
                            <li>To allow us to better service you in responding to your customer service requests.</li>
                            <li>To comply with legal and regulatory requirements.</li>
                            <li>To administer a contest, promotion, survey or other site feature.</li>
                            <li>To quickly process your transactions.</li>
                            <li>To send periodic emails regarding your order or other products and services.</li>
                          </ul>

                          <h1 class="mb-5">How Do We Protect Visitor Information?</h1>
                          <p>Our website is scanned on a regular basis for security holes and known vulnerabilities in order to make your visit to our site as safe as possible.</p>
                          <p>Your personal information is contained behind secured networks and is only accessible by a limited number of persons who have special access rights to such systems, and are required to keep the information confidential. In addition, all sensitive/credit information you supply is encrypted via Secure Socket Layer (SSL) technology.</p>
                          <p>We implement a variety of security measures when a user places an order enters, submits, or accesses their information to maintain the safety of your personal information.</p>
                          <p>All transactions are processed through a gateway provider and are not stored or processed on our servers.</p>

                        <h1 class="mb-5">Third Party Disclosure</h1>
                        <p>We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information unless we provide you with advance notice. This does not include website hosting partners and other parties who assist us in operating our website, conducting our business, or servicing you, so long as those parties agree to keep this information confidential. We may also release your information when we believe release is appropriate to comply with the law, enforce our site policies, or protect ours or others' rights, property, or safety. However, non-personally identifiable visitor information may be provided to other parties for marketing, advertising, or other uses.</p>

                    </div>


                </div>

            </div>
        </div>

    </section>


</body>

</html>

@endsection

@section('scripts')

@endsection
