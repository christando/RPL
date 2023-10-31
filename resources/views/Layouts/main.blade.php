<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
                <div
                    class="col-md-12 py-2" style="padding-right: 30px; padding-top: 10px; padding-bottom: 10px; left: 0px; top: 0px; position: absolute; background: #55A630; justify-content: flex-start; align-items: center; gap: 10px; display: inline-flex">
                    <div
                        style="flex: 1 1 0; color: black; font-size: 36px; font-family: Poppins; font-weight: 600; word-wrap: break-word">
                        LUNA</div>

                        <div
                        style="padding-left: 20px; padding-right: 20px; padding-top: 10px; padding-bottom: 10px; border-radius: 8px; border: 1px black solid; justify-content: center; align-items: center; gap: 10px; display: flex">
                        <div
                            style="color: black; font-size: 24px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                            Sign up</div>
                    </div>
                    <div
                        style="padding-left: 20px; padding-right: 20px; padding-top: 10px; padding-bottom: 10px; background: white; border-radius: 8px; justify-content: center; align-items: center; gap: 10px; display: flex">
                        <div
                            style="color: black; font-size: 24px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                            Login</div>
                    </div>
                </div>
                <div
                    style="width: 276px; height: 57px; left: 156px; top: 483px; position: absolute; color: black; font-size: 36px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                    Save our earth</div>

        </div>
    </div>
    </div>
    @yield('content')
</body>

</html>
