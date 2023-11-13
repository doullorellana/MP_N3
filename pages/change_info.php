<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- FONT NOTO SANS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="../styles/change_info.css">

    <title>DevChallenges | Doull Orellana</title>
</head>

<body>
    <section class="vh-100">
        <div class="mask d-flex align-items-center h-100">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="footer_ChangeInfo">
                        <div>
                            <img src="../assets/devchallenges.svg"><p class="content_ChangeInfo2"></p>
                        </div>
                        <div>
                            <h6>Menu</h6>
                        </div>
                    </div>

                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="backLink">
                            <a href="./personal_info.php" class="back_personal_info"><img src="../assets/back.svg"> Back</a>
                        </div>
                        <div class="card">
                            <div class="card-body p-5">
                                <h2 class="text-left mb-1">Change Info</h2>
                                <p class="content_ChangeInfo3">Changes will be reflected to every services</p>

                                <form>
                                    <div class="form_img_ChangeInfo">
                                        <div class="form_img_ChangeInfo_Icon">
                                            <img class="img_ChangeInfo" src="../assets/user_avatar.svg">
                                            <button class="btn_Change_Img"><img src="../assets/camera_update.svg"></button>
                                        </div>
                                        <div>
                                            <p class="content_ChangeInfo2">CHANGE PHOTO</p>
                                        </div>
                                    </div>

                                    <div class="form-outline mb-2">
                                        <label class="form-label content_ChangeInfo">Name</label>
                                        <input type="text" id="formInputName" class="form-control form-control-lg content_ChangeInfo" placeholder="Enter your name..." />
                                    </div>

                                    <div class="form-outline mb-2">
                                        <label class="form-label content_ChangeInfo">Bio</label>
                                        <textarea rows="2" id="formInputBio" class="form-control form-control-lg content_ChangeInfo" placeholder="Enter your bio..."></textarea>
                                    </div>

                                    <div class="form-outline mb-2">
                                        <label class="form-label content_ChangeInfo">Phone</label>
                                        <input type="tel" id="formInputPhone" class="form-control form-control-lg content_ChangeInfo" placeholder="Enter your phone..." />
                                    </div>

                                    <div class="form-outline mb-2">
                                        <label class="form-label content_ChangeInfo">Email</label>
                                        <input type="email" id="formInputEmail" class="form-control form-control-lg content_ChangeInfo" placeholder="Enter your email..." />
                                    </div>

                                    <div class="form-outline mb-3">
                                        <label class="form-label content_ChangeInfo">Password</label>
                                        <input type="password" id="formInputPassword" class="form-control form-control-lg content_ChangeInfo" placeholder="Enter your new password" />
                                    </div>

                                    <div class="d-flex justify-content-left">
                                        <button type="submit" class="btn btn-primary btn-block btn-lg button_Save_ChangeInfo">Save</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="footer_ChangeInfo">
                            <div>
                                <h5 class="content_ChangeInfo">created by <strong>Doull Orellana</strong></h5>
                            </div>
                            <div>
                                <h5 class="content_ChangeInfo">devChallenges.io</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>