@extends('layouts/app')


@section('content')
    <h1>About page</h1>
    <p>
        Linux is an excellent general purpose operating system. There are plenty of distros out there that provide everything you need to do what you want to do without using a terminal. Just about all distros come with a package manager with a GUI frontend so you don't have to download and install apps from the terminal. Debian and RHEL based distros also have downloadable .deb and .rpm packages that allow you to install applications by double clicking them in a file browser.

        There are, however, serious benefits to using the terminal. One such benefit is remote administration. SSH uses very low bandwidth and allows you to work on remote servers without streaming an entire desktop.

        But even today's Linux has some incredible CLI programs that use ncurses, such as MC - which is one of the best file managers ever made. I find myself using the terminal to automate a lot of things, such as renaming images in a folder, where you'd have to right-click the file, hit rename, and type the new name. With bash you can write very terse and powerful one line commands that accomplish potentially hours of work in seconds.

        But to answer your question, yes. You can survive without learning bash. In fact, any time you need to get something in particular done, you can google it and find tutorials for your particular distro. Digital Ocean, Ubuntu Forums, Arch Wiki, and many other resources provide an all encompassing knowledge base for you to tap into if you ever run into trouble.
    </p>
@endsection
