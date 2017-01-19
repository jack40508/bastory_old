<template lang="html">
    <span>
        <ul class="nav navbar-nav navbar-right">
            <li @click="popupModal()"><a href="#">登入</a></li>
        </ul>
        <!--  Modal  -->
        <div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="card card-container">
                    <img class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
                    <p class="profile-name-card"></p>
                    <form class="form-signin" role="form" method="POST" action="/login">
                        <input type="hidden" name="_token" v-model="token">
                        <span class="reauth-email"></span>
                        <input name="email" type="email" class="input form-control" placeholder="Email address" required autofocus>
                        <input name="password" type="password" class="input form-control" placeholder="Password" required>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="remember-me"> 記住我
                            </label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">登入</button>
                        <a href="/register" class="btn btn-lg btn-primary btn-block btn-register" type="button">註冊</a>
                    </form>
                </div>
            </div>
        </div>
        <!--  Modal  -->
    </span>
</template>

<script>
export default {
    props:['token'],
    methods:{
        popupModal(){
            $('#login_modal').modal();
        },
    },
    mounted(){
        console.log('login component done');
    }
}
</script>

<style lang="css">
</style>
