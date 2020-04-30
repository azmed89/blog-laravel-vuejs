
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Blog</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">


    <div class="container">
        <div class="row">
            <!-- Navigation -->
            <div>
                <b-navbar toggleable="lg" type="dark" fixed="top" variant="info">
                    <b-navbar-brand href="#">Blog Logo</b-navbar-brand>

                    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

                    <b-collapse id="nav-collapse" is-nav>
                        <!-- Right aligned nav items -->
                        <b-navbar-nav class="ml-auto">
                            <b-nav-item href="#">
                                <router-link to="/accueil" class="nav-link">
                                    Accueil
                                </router-link>
                            </b-nav-item>
                            <b-nav-item href="#">
                                <router-link to="/blog" class="nav-link">
                                    Posts
                                </router-link>
                            </b-nav-item>
                            <b-nav-item href="#">
                                <router-link to="/career" class="nav-link">
                                    Carrières
                                </router-link>
                            </b-nav-item>
                        </b-navbar-nav>
                    </b-collapse>
                </b-navbar>
            </div>
        </div>
    </div>

    <div class="content-wrapper" style="margin-top: 6rem;">
        <div class="content">
            <div class="container-fluid">

                <router-view></router-view>

            </div>
        </div>
    </div>

</div>

<script src="{{ mix('js/app.js') }}"></script>
<style>
    .nav-link {
        display: inline-block !important;
    }
</style>
</body>
</html>
