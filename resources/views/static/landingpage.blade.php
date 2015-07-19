@extends ('layouts.landingpage')

@section('body-class')body--landingpage @stop

@section('content')

    <header class="white bg-orange">
        <nav class="clearfix white">
            <div class="container">
                <div class="sm-col">
                    <a href="/" class="btn py2">screeenly</a>
                    <a class="btn py2 m0 {!! setActive('try') !!}" href="/try">Try it</a>
                    <a href="/login" class="md-hide btn py2 regular">Sign In</a>
                </div>
                <div class="sm-col-right md-show">
                    <a href="/login" class="btn py2 regular">Sign In</a>
                </div>

            </div>
        </nav>
        <div class="center px2 py4">
            <h1 class="h1 h0-responsive mt4 mb0 regular">Screenshot as a Service</h1>
            <p class="h3">Create website screenshots through a simple API. Try it. It's free!</p>
            <a href="/login" class="btn bg-black rounded mt2 mb4 px2 h3"><i class="fa fa-github"></i> Sign up with Github</a>
            <p class="center caps">Generated screenshots so far: <span class="bold">{{ number_format($screenshots) }}</span></p>
        </div>
    </header>


    <section class="container px2 py3">
        <div class="clearfix mxn2">
            <div class="sm-col sm-col-4 px2">
                <h2 class="h1 mb2"><i class="fa fa-circle-o-notch"></i> Simple</h2>
                <p>Our API is quite simple. You just send your API key and the URL of the website. Then we do some magic and send you a fresh screenshot back. No refresh tokens. No OAuth hassle.</p>
            </div>
            <div class="sm-col sm-col-4 px2">
                <h2 class="h1 mb2"><i class="fa fa-code-fork"></i> Open Source</h2>
                <p>The whole platform is Open Source. You can checkout the source code on <a href="https://github.com/stefanzweifel/screeenly">Github</a>.</p>
                <p>We currently write some docs, so you can easily boot up your own version of Screeenly.</p>
            </div>
            <div class="sm-col sm-col-4 px2">
                <h2 class="h1 mb2"><i class="fa fa-smile-o"></i> Free</h2>
                <p>Screeenly is free to use. If you like the project you can <a href="/donate">donate</a> some money, so we can keep the servers up running.</p>
            </div>
        </div>
    </section>

    <section class="container px2 py3">

        <h2 class="h1 mbo center">Features</h2>

        <div class="clearfix mxn2">
            <div class="sm-col sm-col-4 px2">
                <h2 class="mb1"><i class="fa fa-qrcode"></i> BASE64 Encoded / Filepath</h2>
                <p>You receive your screenshot either as a file path or as base64 encoded string. <b>Keep in mind, your generated screenshot will be deleted from our servers 1 hour after it's creation.</b></p>
            </div>
            <div class="sm-col sm-col-4 px2">
                <h2 class="mb1"><i class="fa fa-key"></i> Multiple API Keys</h2>
                <p>You like your stuff organized? Create up to 25 personal API keys.</p>
            </div>
            <div class="sm-col sm-col-4 px2">
                <h2 class="mb1"><i class="fa fa-retweet"></i> Webhooks (planned)</h2>
                <p>Don't have the time to wait till your screenshot is ready? Setup webhooks and we will send you a request with your screenshot.</p>
            </div>
        </div>
    </section>

@stop