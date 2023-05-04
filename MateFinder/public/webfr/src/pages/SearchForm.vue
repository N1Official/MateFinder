<script setup>

</script>

<template>
    <div class="container">
        <div class="p-5 my-5" style="border: 1px solid white; border-radius: 2rem;">
            <legend class="text-center mb-4" style="font-family: satoshi-bold;">Welcome Mate!</legend>
            <form>
                <div class="row">
                    <div class="col-6 my-auto">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" style="max-width: 24rem;" id="username" aria-describedby="username">
                            <div id="usernameHelp" class="form-text">Let your Mates know who you are.</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                        <label for="goal" class="form-label">What's your goal?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="goal" id="fun" value="fun">
                                <label class="form-check-label" for="fun">
                                    Fun
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="goal" id="hobby" value="hobby">
                                <label class="form-check-label" for="hobby">
                                    Hobby
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="goal" id="competetive" value="competetive">
                                <label class="form-check-label" for="competetive">
                                    Competetive
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <label class="form-label">Choose a server!</label>
                <div class="my-3 servers">
                    <div class="eu mx-5">
                        <label class="text-center">
                            <input type="radio" name="server" value="eu" >
                            <img src="server.png" alt="eu" class="img-fluid" style="max-width: 100px;">
                            <br>EU
                        </label>
                    </div>
                    <div class="usa mx-5">
                        <label class="text-center">
                            <input type="radio" name="server" value="usa">
                            <img src="server.png" alt="usa" class="img-fluid" style="max-width: 100px;">
                            <br>USA
                        </label>
                    </div>
                    <div class="ru mx-5">
                        <label class="text-center">
                            <input type="radio" name="server" value="russia">
                            <img src="server.png" alt="Russia" class="img-fluid" style="max-width: 100px;">
                            <br>Russia
                        </label>
                    </div>
                    <div class="asia mx-5">
                        <label class="text-center">
                            <input type="radio" name="server" value="asia">
                            <img src="server.png" alt="Russia" class="img-fluid" style="max-width: 100px;">
                            <br>Asia
                        </label>
                    </div>
                    <div class="uk mx-5">
                        <label class="text-center">
                            <input type="radio" name="server" value="uk">
                            <img src="server.png" alt="Russia" class="img-fluid" style="max-width: 100px;">
                            <br>UK
                        </label>
                    </div>
                </div>
                <label class="form-label">Choose a game!</label>
                <div class="my-3 games">
                    <div class="csgo mx-3">
                        <label class="text-center">
                            <input type="radio" name="game" value="csgo">
                            <img src="csgo.jpg" alt="csgo" class="img-fluid" style="max-width: 250px;">
                        </label>
                    </div>
                    <div class="lol mx-3">
                        <label class="text-center">
                            <input type="radio" name="game" value="lol" >
                            <img src="lol.jpg" alt="lol" class="img-fluid" style="max-width: 250px;">
                            <br>
                        </label>
                    </div>
                    <div class="forza mx-3">
                        <label class="text-center">
                            <input type="radio" name="game" value="forza" >
                            <img src="forza.jpg" alt="forza" class="img-fluid" style="max-width: 250px;">
                            <br>
                        </label>
                    </div>
                    <div class="apex mx-3">
                        <label class="text-center">
                            <input type="radio" name="game" value="apex">
                            <img src="apex.jpg" alt="apex" class="img-fluid" style="max-width: 250px;">
                            <br>
                        </label>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <button type="submit" class="btn btn-primary" style="font-size: 1.25rem;">Search!</button>
                </div>
            </form>
        </div>
   </div>
</template>