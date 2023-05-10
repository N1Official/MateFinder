<script setup>

</script>

<template>
    <div class="container">
        <div class="p-5 my-5" style="border: 1px solid white; border-radius: 2rem;">
            <legend class="text-center mb-4" style="font-family: satoshi-bold;">Welcome Mate!</legend>
            <form>
                <div class="row">
                    <div class="col-6 my-auto row">
                        <div class="mb-3 col-6">
                            <label for="profile-link" class="form-label">Profile link</label>
                            <input type="text" class="form-control" id="profile-link" aria-describedby="profile-link" placeholder="Steam, facebook etc.">
                            <div id="profile-linkHelp" class="form-text">Let your Mates know how they can get in touch with you.</div>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" aria-describedby="username">
                            <div id="usernameHelp" class="form-text">What is your in-game name?</div>
                        </div>
                    </div>
                    <div class="col-6 row">
                        <div class="mb-3 col-6">
                            <label for="gender" class="form-label">What's your gender?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                <label class="form-check-label" for="male">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                <label class="form-check-label" for="female">
                                    Female
                                </label>
                            </div>
                        </div>
                        <div class="mb-3 col-6">
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
                <div class="row">
                    <label class="form-label">Choose a server!</label>
                     <div class="my-2 servers">
                    <div class="col-2 mx-2">
                        <div class="eu">
                            <label class="text-center">
                                <input type="radio" name="server" value="eu" >
                                <img src="server.png" alt="eu" class="img-fluid">
                                <br>EU
                            </label>
                        </div>
                    </div>
                    <div class="col-2 mx-2">
                        <div class="usa">
                            <label class="text-center">
                                <input type="radio" name="server" value="usa">
                                <img src="server.png" alt="usa" class="img-fluid">
                                <br>USA
                            </label>
                        </div>
                    </div>
                    <div class="col-2 mx-2">
                        <div class="ru">
                            <label class="text-center">
                                <input type="radio" name="server" value="russia">
                                <img src="server.png" alt="Russia" class="img-fluid">
                                <br>Russia
                            </label>
                        </div>
                    </div>
                    <div class="col-2 mx-2">
                        <div class="asia">
                            <label class="text-center">
                                <input type="radio" name="server" value="asia">
                                <img src="server.png" alt="Russia" class="img-fluid">
                                <br>Asia
                            </label>
                        </div>
                    </div>
                    <div class="col-2 mx-2">
                        <div class="uk">
                            <label class="text-center">
                                <input type="radio" name="server" value="uk">
                                <img src="server.png" alt="Russia" class="img-fluid">
                                <br>UK
                            </label>
                        </div>
                    </div>
                    <div class="col-2" style="width: 0px;"></div>
                </div>
            </div>
                <div class="row">
                    <label class="form-label">Choose a game!</label>
                    <div class="my-3 games">

                        <div class="csgo col-3 mx-2" >
                            <label class="text-center">
                                <input type="radio" name="game" value="csgo">
                                <img src="csgo.jpg" alt="csgo" class="img-fluid">
                            </label>
                        </div>
                        <div class="lol col-3 mx-2">
                            <label class="text-center">
                                <input type="radio" name="game" value="lol" >
                                <img src="lol.jpg" alt="lol" class="img-fluid" >
                                <br>
                            </label>
                        </div>
                        <div class="forza col-3 mx-2">
                            <label class="text-center">
                                <input type="radio" name="game" value="forza" >
                                <img src="forza.jpg" alt="forza" class="img-fluid">
                                <br>
                            </label>
                        </div>
                        <div class="apex col-3 mx-2">
                            <label class="text-center">
                                <input type="radio" name="game" value="apex">
                                <img src="apex.jpg" alt="apex" class="img-fluid">
                                <br>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label class="form-label">Choose an avatar!</label>
                    <div class="my-4 avatars">

                        <div class="csgo col-3 mx-2" >
                            <label class="text-center">
                                <input type="radio" name="avatar" value="teso1">
                                <img src="teso1.png" alt="teso1" class="img-fluid">
                            </label>
                        </div>
                        <div class="lol col-3 mx-2">
                            <label class="text-center">
                                <input type="radio" name="avatar" value="teso2" >
                                <img src="teso2.png" alt="teso2" class="img-fluid" >
                                <br>
                            </label>
                        </div>
                        <div class="forza col-3 mx-2">
                            <label class="text-center">
                                <input type="radio" name="avatar" value="teso3" >
                                <img src="teso3.png" alt="teso3" class="img-fluid">
                                <br>
                            </label>
                        </div>
                        <div class="apex col-3 mx-2">
                            <label class="text-center">
                                <input type="radio" name="avatar" value="teso4">
                                <img src="teso4.png" alt="teso4" class="img-fluid">
                                <br>
                            </label>
                        </div>
                    </div>
                    <div class="text-center mt-5">
                        <router-link to="/card">
                        <button type="submit" class="btn btn-primary" style="font-size: 1.25rem;">Search!</button>
                        </router-link>
                    </div>
                </div>

            </form>
        </div>
   </div>
</template>
