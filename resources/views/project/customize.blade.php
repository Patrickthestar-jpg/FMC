@extends('layouts.sched')
@section('title')
Customize Package
@endsection

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="/css/customize.css">
</head>
@section('content')
<div class="row justify-content-center  bgbody" style="background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.959), rgba(119, 119, 119, 0.945)), url('/img/4.jpg'); background-repeat: no-repeat; background-size: cover;">
    <div class="col-md-8 ">
        <form action="{{ route('customize.package.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="card cardred mt-5">
                <div class="card-header bg-transparent border-bottom-0 text-center mt-5 ">
                    <h4 class="text-white ">Customize Package</h4>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <!-- LEft side -->
                            <div class="col-md-6">
                                <div class="form-group m-3">
                                    <label for="exampleInputEmail1" class="text-white">Full Name: *</label>
                                    <input type="text" class="form-control" name="full_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Firstname Middlename Lastname" required>
                                </div>
                                <div class="form-group m-3">
                                    <label for="exampleInputEmail1" class="text-white">Contact Number: *</label>
                                    <input type="text" class="form-control" name="contact" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="09XXXXXXXXX" required>
                                </div>
                                <div class="form-group m-3">
                                    <label for="exampleInputEmail1" class="text-white">Email Address: *</label>
                                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Here" required>
                                    <small id="emailHelp" class="form-text text-white">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group m-3">
                                    <label for="exampleInputEmail1" class="text-white">Type of Event: *</label>
                                    <input type="text" class="form-control" name="event_type" value="Wedding/Debut" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Wedding" required>
                                </div>
                                <div class="form-group m-3">
                                    <label for="exampleInputEmail1" class="text-white">Event Date: *</label>
                                    <input type="date" class="form-control" name="event_date" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="January 01, 2021" required>
                                </div>
                                <div class="form-group m-3">
                                    <label for="exampleInputEmail1" class="text-white">Number of Persons: *</label>
                                    <input type="number" class="form-control" name="persons" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="50" required>
                                    <small id="emailHelp" class="small" class="form-text text-muted">Minimun of 50 persons. (50, 75, 100, 125, 150)</small>
                                </div>
                                <div class="form-group m-3">
                                    <label for="exampleInputEmail1" class="text-white">Package you want to customize: *</label>
                                    <input type="text" class="form-control" name="message" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Package 1" required>
                                    <small id="emailHelp" class="form-text text-white">Pckage 1, Package 2, Package 3, Package 4, Package 5, Package 6, Package 7 </small>
                                </div>
                            </div>

                            <!-- Right side -->
                            <div class="col-md-6">
                                <div class="form-group m-3">
                                    <label for="pork" class="text-white">Pork</label>
                                    <select class="form-control" id="pork" name="pork">
                                        <option selected>Select Item</option>
                                        <option value="pastel">Pastel</option>
                                        <option value="stuffed pork roll">Stuffed Pork Roll</option>
                                        <option value="pork asado">Pork Asado</option>
                                        <option value="lomo with broccoli">Lomo with Broccoli</option>
                                        <option value="embotido">Embotido</option>
                                        <option value="sinantomas">Sinantomas</option>
                                        <option value="stir fry spareribs with garlic">Stir Fry Spareribs with Garlic</option>
                                        <option value="spareribs with black beans">Spareribs with Black Beans</option>
                                        <option value="lengua estofado with creamy mushroom sauce">Lengua Estofado with Creamy Mushroom Sauce</option>
                                        <option value="rib eye steak">Rib Eye Steak</option>
                                        <option value="special pork sisig">Special Pork Sisig</option>
                                        <option value="lumpiang shanghai">Lumpiang Shanghai</option>
                                        <option value="spicy spare ribs">Spicy Spare Ribs</option>
                                        <option value="afritada">Afritada</option>
                                        <option value="menudo">Menudo</option>
                                        <option value="patatim">Patatim</option>
                                        <option value="hamonado">Hamonado</option>
                                        <option value="pork grilled asado">Pork Grilled Asado</option>
                                        <option value="special pineapple honey glazed hamon">Special Pineapple Honey Glazed Hamon</option>
                                    </select>
                                </div>
                                <div class="form-group m-3">
                                    <label for="chiken" class="text-white">Chicken</label>
                                    <select class="form-control" id="chiken" name="chiken">
                                        <option selected>Select Item</option>
                                        <option value="chicken gordon blue">Chicken Gordon Bleu</option>
                                        <option value="chicen fillet sweet and sour">Chicen Fillet (Sweet and Sour)</option>
                                        <option value="crispy fried chicken">Crispy Fried Chicken</option>
                                        <option value="spicy chicken">Spicy Chicken</option>
                                        <option value="chicken asado">Chicken Asado</option>
                                        <option value="fried buttered chicken">Fried Buttered Chicken</option>
                                        <option value="chicken afritada">Chicken Afritada</option>
                                        <option value="buttered chicken with garlic">Buttered Chicken with Garlic</option>
                                        <option value="chicken fille lemon sauce">Chicken Fille (Lemon Sauce)</option>
                                        <option value="chicken bourbon">Chicken Bourbon</option>
                                        <option value="creamy chicken with spinach">Creamy Chicken with Spinach</option>
                                    </select>
                                </div>
                                <div class="form-group m-3">
                                    <label for="vegitable" class="text-white">Vegetable</label>
                                    <select class="form-control" id="vegitable" name="vegitable">
                                        <option selected>Select Item</option>
                                        <option value="kare-kare">Kare-Kare</option>
                                        <option value="carrots green peas singkamas with butter">Carrots, Green Peas, Singkamas with Butter</option>
                                        <option value="fresh lumpiang ubod">Fresh Lumpiang Ubod</option>
                                        <option value="assorted mixed vegetable in oyster sauce">Assorted Mixed Vegetable in Oyster Sauce</option>
                                        <option value="steam asorted vegitable">Steam Asorted Vegetable</option>
                                        <option value="buttered garlic mushroom">Buttered Garlic Mushroom</option>
                                    </select>
                                </div>
                                <div class="form-group m-3">
                                    <label for="beef" class="text-white">Beef</label>
                                    <select class="form-control" id="beef" name="beef">
                                        <option selected>Select Item</option>
                                        <option value="beef with broccoli">Beef with Broccoli</option>
                                        <option value="beef with young corn and mushroom">Beef with Young Corn and Mushroom</option>
                                        <option value="beef with asparagus">Beef with Asparagus</option>
                                        <option value="beef with mushroom in oyster sauce">Beef with Mushroom in Oyster Sauce</option>
                                        <option value="beef salpicao">Beef Salpicao</option>
                                    </select>
                                </div>
                                <div class="form-group m-3">
                                    <label for="sea_food" class="text-white">Sea Foods</label>
                                    <select class="form-control" id="sea_food" name="sea_food">
                                        <option selected>Select Item</option>
                                        <option value="rellenong pusit">Rellenong Pusit</option>
                                        <option value="rellenong bangus">Rellenong Bangus</option>
                                        <option value="sweet and sour fish fillet">Sweet and Sour Fish Fillet</option>
                                        <option value="fish fillet in white sauce">Fish Fillet in White Sauce</option>
                                        <option value="fish fillet in lemon sauce">Fish Fillet in Lemon Sauce</option>
                                        <option value="fish fillet in black beans">Fish Fillet in Black Beans</option>
                                        <option value="assorted seafoods with vegetable">Assorted Seafoods with Vegetable</option>
                                        <option value="fish fillet with tartar sauce">Fish Fillet with Tartar Sauce</option>
                                        <option value="fish fillet with tausi and japanese sauce">Fish Fillet with Tausi and Japanese Sauce</option>
                                        <option value="kare kare seafoods">Kar-Kare Seafoods</option>
                                    </select>
                                </div>
                                <div class="form-group m-3">
                                    <label for="deserts" class="text-white">Desserts</label>
                                    <select class="form-control" id="deserts" name="diserts">
                                        <option selected>Select Item</option>
                                        <option value="fruit salad">Fruit Salad</option>
                                        <option value="buko salad">Buko Salad</option>
                                        <option value="buko pandan">Buko Pandan</option>
                                        <option value="assorted fresh fruit">Assorted Fresh Fruits</option>
                                        <option value="plain sweet gelatin">Plain Sweet Gelatin</option>
                                        <option value="fruit cocktail">Fruit Cocktail</option>
                                        <option value="sweet mango sago">Sweet Mango Sago</option>
                                        <option value="almond jelly with fruit cocktail">Almond Jelly with Fruit Cocktail</option>
                                        <option value="gelatin glaze with fruit cocktail">Gelatin Glaze with Fruit Cocktail</option>
                                    </select>
                                </div>
                                <p><a href="/agreement" class="m-3">FMC Agreement</a></p>
                                <div class="form-check m-3">
                                    <input type="checkbox" required class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label text-white" for="exampleCheck1">I agree to the Terms and Conditions of FMC Catering and Services</label>
                                </div>
                            </div>

                            <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                        <h5 class="tnc" class="modal-title" id="myModalLabel">FMC Catering Services Terms & Conditions</h5>
                        </div>
                        <div class="modal-body">
                            The customer needs to pay 50% of the package price for reservation fee which deductable to the total of payment. The reservation is valid for 3 days and shall be forfeited thus, not confirm within the period of time. This is base on the terms and condition of FMC Catering Services that will be sign by agreement of the customer and the owner. If the customer wishes to cancel the event the payment is not refundable, non consumable and no transferable. Balance to be paid in cash a day before the event. None payment of the full agreed amount reserves the right for the caterer to cancel all its services.
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>

                        </div>

                        <div class="card-footer d-flex justify-content-center container-login100-form-btn">
                            <button type="submit" class=" login100-form-btn">Submit</button>
                        </div>



                    </div>
                </div>


                <hr class="my-3">


        </form>
    </div>

    <!-- Script to use required property -->
    <script>
        $('input[type="checkbox"]').on('change', function(e){
        if(e.target.checked){
        $('#myModal').modal();
         }
        });
    </script>

</div>
</div>
@endsection
