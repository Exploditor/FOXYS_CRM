@include('header')
<link rel="stylesheet" href="{{ URL::asset('css/login.css'); }}" />

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-2"></div>
        <div class="col-lg-6 col-md-8 login-box">
            <div class="col-lg-12 login-key">
                <i class="fa fa-key" aria-hidden="true"></i>
            </div>
            <div class="col-lg-12 login-title">
                FOXYS CRM
            </div>

            <div class="col-lg-12 login-form">
                <div class="col-lg-12 login-form">
                    <form>
                        @csrf
                        <div class="form-group">
                            <label class="form-control-label">USUARIO</label>
                            <input type="text" id="usr" name="user" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">SENHA</label>
                            <input type="password" id="pwd" name="pwd" class="form-control" i>
                        </div>

                        <div class="col-lg-12 loginbttm">
                            <div class="col-lg-6 login-btm login-text">
                                <!-- Error Message -->
                            </div>
                            <div class="col-lg-6 login-btm login-button">
                                <button type="button"  onclick="login()" class="btn btn-outline-primary">LOGIN</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-2"></div>
        </div>
    </div>

<script>
function login()
{

}
</script>