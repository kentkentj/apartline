<?php include 'templates/header.php' ?>
<?php include 'templates/top-nav.php' ?>
<?php include 'templates/sub-nav.php' ?>
<!--Content Here-->
<div class="container my-5">
   <div class="container-fluid">
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6">
                        <iframe width="100%" height="500px" allowFullScreen="true" allow="accelerometer; magnetometer; gyroscope" style="display:block; margin:20px auto; border:0 none; max-width:880px;border-radius:8px; box-shadow: 0 1px 1px rgba(0,0,0,0.11),0 2px 2px rgba(0,0,0,0.11),0 4px 4px rgba(0,0,0,0.11),0 6px 8px rgba(0,0,0,0.11),0 8px 16px rgba(0,0,0,0.11);" src="https://panoraven.com/en/embed/n5bi39veSZ"></iframe>
                    </div>
                    <div class="col-md-6">
                        <h1 class="display-5 fw-bolder">Apartment Name</h1>
                        <div class="fs-5 mb-5">
                            <span>Hosted By Owner Name</span>
                            <div class="small">Address</div>
                        </div>

                        <p class="lead">P1,000 night <small>5.0 00 Reviews</small></p>

                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <div class="form-outline">
                                    <input type="date" id="checkin" class="form-control" />
                                    <label class="form-label" for="checkin">Check in</label>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-outline">
                                    <input type="date" id="checkout" class="form-control" />
                                    <label class="form-label" for="checkout">Check out</label>
                                </div>
                            </div>
                        </div>
                        <!-- Requires Bootstrap, Datepicker, Fontawesome and Jquery -->
                        <div class="d-flex mb-3">
                            <span>Room</span>
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-lg btn-green" type="button">BOOK NOW</button>
                        </div>
                    </div>
                </div>

                <div class="container  my-5">
                            <h1>DESCRIPTION</h1>
                            <div class="container">
                                <iframe style="width:100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3826.886591602455!2d120.6051698153459!3d16.43058513401535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3391a3e540b11d03%3A0x752ceb97fb2d1ae7!2sApartment%20Room%20Bedspace!5e0!3m2!1sen!2sph!4v1669661313361!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                <p class="lead">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tempus sem nec dignissim consectetur. Donec quis odio non leo tincidunt efficitur id in urna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam dignissim mi quis lacinia semper. Suspendisse vestibulum malesuada dolor, ac mollis augue suscipit ac. Etiam molestie, nulla consectetur ullamcorper pellentesque, orci lectus fringilla purus, et sodales risus dui id libero. Suspendisse bibendum libero mi, in dapibus elit ultricies tincidunt. Nullam venenatis vehicula arcu, ut pharetra purus. Aliquam fringilla suscipit ex. Aliquam condimentum eleifend magna. Praesent eu sem ut eros vehicula convallis. Cras non posuere magna, non tincidunt purus. Donec ac orci nunc. Mauris vestibulum, eros at facilisis dapibus, erat eros sollicitudin turpis, et consectetur risus nisl at mi. In pulvinar dapibus augue eget lacinia.

                                    Aenean sit amet ullamcorper libero. Vivamus tincidunt consectetur leo et mattis. Mauris varius feugiat diam, id interdum lectus dictum id. Donec non finibus sem, non placerat libero. Nam id nibh quis turpis maximus hendrerit. Aliquam nec metus sit amet risus vestibulum eleifend a vitae arcu. Cras convallis tincidunt lacus, eu pretium purus posuere sed. Proin augue odio, venenatis eu ultricies in, luctus nec tellus. Sed porttitor, ipsum eget rutrum vestibulum, magna orci suscipit turpis, semper condimentum nibh ipsum nec libero. Etiam mauris justo, porta eget diam nec, tristique hendrerit ligula. Ut eget lorem felis. Cras viverra molestie elit sit amet suscipit. Donec quis dui sed metus auctor vehicula.

                                    Quisque turpis ipsum, semper eget sem id, maximus consectetur lorem. Sed volutpat ex ut massa vulputate, finibus dignissim turpis tincidunt. Ut tincidunt, tellus a euismod eleifend, velit turpis condimentum sapien, eu eleifend lorem augue vitae arcu. Suspendisse elementum mauris quis nisl rhoncus, quis varius velit lacinia. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed ultrices sed ante eget tincidunt. Nam gravida aliquet nisi, vitae dictum nisi tincidunt in. Praesent ut dui leo. Aliquam imperdiet eu enim a volutpat. Proin suscipit ornare lacus sit amet laoreet. Sed vitae nisl nec velit facilisis malesuada vel non ante. Praesent porta posuere ante ut imperdiet. In hac habitasse platea dictumst. Fusce fermentum fringilla massa, vel egestas lectus mollis non.
                                </p>
                            </div>
                        </div>
                        
                        <div class="container">
                            <h1>THINGS TO OFFER</h1>
                        </div>
            </div>
        </section>
   </div>
</div>
<!--Content Here-->
<?php include 'templates/footer.php' ?>