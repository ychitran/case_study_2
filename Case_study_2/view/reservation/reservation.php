<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Jack Restaurant & Bar</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="assets/reservation/fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="assets/reservation/css/style.css">
</head>

<body>
    <div class="main">
        <div class="container">
            <div class="booking-content">
                <div class="booking-image">
                    <img class="booking-img" src="assets/images/form-img.jpg" alt="Booking Image">
                </div>
                <div class="booking-form">
                    <form id="booking-form" method="POST">
                        <a href="home"><img src="assets/images/logo/jack_logo_white.svg" alt="logo"></a>
                        <h2>Booking Table!</h2>

                        <div class="form-group form-input">
                            <input type="text" name="name" id="name" value="" required />
                            <label for="name" class="form-label">Your full name</label>
                        </div>
                        <div class="form-group form-input">
                            <input type="number" name="phone" id="phone" value="" required />
                            <label for="phone" class="form-label">Your phone number</label>
                        </div>
                        <div class="form-group">
                            <div class="select-list">
                                <select name="time" id="time" required>
                                    <option value="">Time</option>
                                    <option value="5pm">5:00 PM</option>
                                    <option value="5:30pm">5:30 PM</option>
                                    <option value="6pm">6:00 PM</option>
                                    <option value="6:30pm">6:30 PM</option>
                                    <option value="7pm">7:00 PM</option>
                                    <option value="7:30pm">7:30 PM</option>
                                    <option value="8pm">8:00 PM</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-date">
                            <div class="form-group form-input">
                                <input type="date" name="date" id="date" value="2021-02-23" required />
                                <label for=" date" class="form-label"></label>
                            </div>
                        </div>
                        <div class="form-radio">
                            <label class="label-radio"> Select Your Dining Space</label>
                            <div class="radio-item-list">
                                <span class="radio-item">
                                    <input type="radio" name="number_people" value="2" id="number_people_2" />
                                    <label for="number_people_2">2</label>
                                </span>
                                <span class="radio-item active">
                                    <input type="radio" name="number_people" value="4" id="number_people_4" checked="checked" />
                                    <label for="number_people_4">4</label>
                                </span>
                                <span class="radio-item">
                                    <input type="radio" name="number_people" value="6" id="number_people_6" />
                                    <label for="number_people_6">6</label>
                                </span>
                                <span class="radio-item">
                                    <input type="radio" name="number_people" value="8" id="number_people_8" />
                                    <label for="number_people_8">8</label>
                                </span>
                                <span class="radio-item">
                                    <input type="radio" name="number_people" value="10" id="number_people_10" />
                                    <label for="number_people_10">10</label>
                                </span>
                            </div>
                        </div>


                        <div class="form-submit">
                            <input type="submit" value="Book now" class="submit" id="submit" name="submit" />
                            <a href="#" class="vertify-booking">Verify your booking info from your phone</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>




    <!-- JS -->
    <script src="assets/reservation/vendor/jquery/jquery.min.js"></script>
    <script src="assets/reservation/js/main.js"></script>
</body>

</html>