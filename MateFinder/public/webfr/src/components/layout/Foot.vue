<template>
  <!-- Foot -->
  <div class="foot">
        <!-- Foot Content -->
        <div class="foot-content">
            <!-- Top -->
            <div class="foot-content-top">
                <!-- Foot Content Title -->
                <div class="foot-content-title">
                    <router-link to="/">
                        MateFinder
                    </router-link>
                </div>

                <!-- Foot Content Sbuscribe -->
                <div class="foot-content-subscribe">
                    <div class="foot-content-subscribe-title">
                        Subscribe to our newsletter
                    </div>

                    <form class="foot-content-subscribe-form">
                        <input type="email" name="email" id="email" placeholder="Email address">

                        <input type="submit" value="Submit">
                    </form>
                </div>

                <!-- Foot Content Contact -->
                <div class="foot-content-contact" id="contact">
                    <div class="foot-content-contact-title">
                        Contact
                    </div>

                    <div class="foot-content-contact-contacts">
                        <div class="foot-content-contact-contacts-email">
                            support@matefinder.com
                        </div>
    
                        <div class="foot-content-contact-contacts-phone">
                            +36 70 622 9262
                        </div>
                    </div>
                </div>

                <!-- Foot Content Socials -->
                <div class="foot-content-socials">
                    <div class="foot-content-socials-title">
                        Socials
                    </div>
                    
                    <div class="foot-content-socials-icons">
                        <a href="https://facebook.com/" target="_blank">
                            <img src="../../assets/icons/facebook-f.svg" alt="facebook">
                        </a>

                        <a href="https://twitter.com/" target="_blank">
                            <img src="../../assets/icons/twitter.svg" alt="twitter">
                        </a>

                        <a href="https://www.instagram.com/" target="_blank">
                            <img src="../../assets/icons/instagram.svg" alt="instagram">
                        </a>
                    </div>
                </div>
            </div>

            <!-- Bot -->
            <div class="foot-content-bot">
                <!-- Foot Content Copyright -->
                <div class="foot-content-copyright">
                    MateFinder, {{ currentYear }} All rights reserved
                </div>

                <!-- Foot Content Policies -->
                <div class="foot-content-policies">
                    <a href="#">Privacy Policy</a>

                    <a href="#">Terms and Conditions</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
const currentYear = new Date().getFullYear()
</script>
