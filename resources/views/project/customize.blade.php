@extends('layouts.sched')
@section('title')
    Customize Package
@endsection
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-8 bg-white p-5">
            <form action="{{ route('customize.package.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="card">
                    <div class="card-header bg-transparent border-bottom-0">
                        <h4>Customize Package</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Full Name: *</label>
                            <input type="text" class="form-control" name="full_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Firstname Middlename Lastname" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Contact Number: *</label>
                            <input type="text" class="form-control" name="contact" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="09XXXXXXXXX" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email Address: *</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Here" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Type of Event: *</label>
                            <input type="text" class="form-control" name="event_type" value="Wedding/Debut" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Wedding" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Event Date: *</label>
                            <input type="date" class="form-control" name="event_date" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="January 01, 2021" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Number of Persons: *</label>
                            <input type="number" class="form-control" name="persons" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="123" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Additional Message: *</label>
                            <input type="text" class="form-control" name="message" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Message Here" required>
                        </div>
                        <hr class="my-3">

                        <div class="form-group">
                            <label for="pork">Pork</label>
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
                        <div class="form-group">
                            <label for="chiken">Chicken</label>
                            <select class="form-control" id="chiken" name="chiken">
                                <option selected>Select Item</option>
                                <option value="chicken gordon blue">Chicken Gordon Blue</option>
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
                        <div class="form-group">
                            <label for="vegitable">Vegetable</label>
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
                        <div class="form-group">
                            <label for="beef">Beef</label>
                            <select class="form-control" id="beef" name="beef">
                                <option selected>Select Item</option>
                                <option value="beef with broccoli">Beef with Broccoli</option>
                                <option value="beef with young corn and mushroom">Beef with Young Corn and Mushroom</option>
                                <option value="beef with asparagus">Beef with Asparagus</option>
                                <option value="beef with mushroom in oyster sauce">Beef with Mushroom in Oyster Sauce</option>
                                <option value="beef salpicao">Beef Salpicao</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sea_food">Sea Foods</label>
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
                        <div class="form-group">
                            <label for="deserts">Desserts</label>
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
                        <p><a href="/agreement">FMC Agreement</a></p>
                        <div class="form-check">
                            <input type="checkbox" required  class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">I agree to the Terms and Conditions of FMC Catering and Services</label>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-transparent">
                        <div></div>
                        <button type="submit" class="btn btn-success fbtn">submit</button>
                    </div>
            </form>
        </div>

    </div>
    </div>
@endsection
