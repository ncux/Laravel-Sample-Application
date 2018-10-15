
<nav class="navbar navbar-expand-md navbar-light navbar-laravel mb-2 mt-0">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Sample_Application</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="ml-auto navbar-nav">
                <li class="nav-item {{Request::is('/') ? 'active' : ''}}"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item {{Request::is('about') ? 'active' : ''}}"><a href="/about" class="nav-link">About</a></li>
                <li class="nav-item {{Request::is('contact') ? 'active' : ''}}"><a href="/contact" class="nav-link">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
