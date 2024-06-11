<?php $__env->startSection('title_page'); ?>

    Contact Page

<?php $__env->stopSection(); ?>

<?php $__env->startSection('mycss'); ?>
    <style>
        .main-panel {
            background-color: #1c2331;
        }

        p {
            color: white !important;
        }

        .icon-holder {
            width: 50px;
            height: 50px;
            background-color: #667490;
            border-radius: 50%;
            margin: 0px auto !important;
            padding-top: 13px;
            padding-left: 13px;
        }

        h2 {
            color: white !important;
        }

        .form-control {
            border: none;
            border-bottom: 1px solid #ced4da;
            font-weight: ;
        }
    </style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('body_content'); ?>
    <!-- ADGRESSES-SECTION========================================ADGRESSES-SECTION==================================ADGRESSES-SECTION -->
    <div class="addresses-section" style="padding-top: 5%;">
        <div class="container px-5">
            <div class="row  gx-4">
                <div class="col-lg-3 col-md-6 col-sm-12 mx-auto addresses mt-sm-4 mt-lg-0 mt-md-0">
                    <div class="p-2  ">
                        <div class="icon-holder"><i class="fas fa-map-marker-alt text-center location"
                                                    aria-hidden="true"
                                                    style="visibility: visible;font-size: 25px;color: aliceblue;"></i>
                        </div>
                        <p class="text-center pt-3"><b>Address: </b> 250 Rt 59, Airmont NY 10901
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mx-auto addresses mt-sm-4 mt-lg-0 mt-md-0">
                    <div class="p-2  ">
                        <div class="icon-holder"><i class="fas fa-phone-alt text-center " aria-hidden="true"
                                                    style="visibility: visible;font-size: 25px;color: aliceblue;"></i>
                        </div>
                        <p class="text-center pt-3"><b>Phone: </b>+ 01 234 567 88
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mx-auto addresses mt-lg-0 mt-md-4 mt-sm-4">
                    <div class="p-2  ">
                        <div class="icon-holder"><i class="fas fa-mail-bulk text-center " aria-hidden="true"
                                                    style="visibility: visible;font-size: 25px;color: aliceblue;"></i>
                        </div>
                        <p class="text-center pt-3"><b>Email: </b>info@fanofan.com
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mx-auto addresses mt-lg-0 mt-md-4 mt-sm-4">
                    <div class="p-2  ">
                        <div class="icon-holder"><i class="fas fa-globe-africa text-center location" aria-hidden="true"
                                                    style="visibility: visible;font-size: 25px;color: aliceblue;"></i>
                        </div>
                        <p class="text-center pt-3"><b>Website: </b>fanofan.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ADGRESSES-SECTION========================================ADGRESSES-SECTION==================================ADGRESSES-SECTION -->



    <!-- FEEDBACK-FORM==============================================FEEDBACK-FORM======================================FEEDBACK-FORM -->
    <section class="position-relative py-4 py-xl-5">
        <div class="container position-relative">
            <div class="row">
                <div class="col">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3787796.574527317!2d80.33203124999994!3d22.010541108802162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28dd6ed7ed9f07%3A0x5f58cf9e48d46178!2sAptech%20Learning%20Raipur!5e0!3m2!1svi!2s!4v1687920671411!5m2!1svi!2s"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div>
                        <form class="p-3 p-xl-4" method="post" style="color: white">
                            <h4>Contact us</h4>
                            <div class="mb-3">
                                <label class="form-label" for="name">Name</label
                                ><input
                                    class="form-control"
                                    type="text"
                                    id="name"
                                    name="name"
                                />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="email">Email</label
                                ><input
                                    class="form-control"
                                    type="email"
                                    id="email"
                                    name="email"
                                />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="message">Message</label
                                ><textarea
                                    class="form-control"
                                    id="message"
                                    name="message"
                                    rows="6"
                                ></textarea>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('myscript'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\votan\Desktop\x23\resources\views/user/Contact.blade.php ENDPATH**/ ?>