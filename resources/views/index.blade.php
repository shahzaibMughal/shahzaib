<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shahzaib Zaheer</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>


<svg id="main_nav_toggler" xmlns="http://www.w3.org/2000/svg" viewBox="-447 249 64 64">
    <path id="drawer_open_icon"
          d="M-443.2 266.6h56.4c.7 0 1.3-.6 1.3-1.3 0-.7-.6-1.3-1.3-1.3h-56.4c-.7 0-1.3.6-1.3 1.3 0 .7.6 1.3 1.3 1.3zM-424.9 282.3h38.1c.7 0 1.3-.6 1.3-1.3 0-.7-.6-1.3-1.3-1.3h-38.1c-.7 0-1.3.6-1.3 1.3.1.7.6 1.3 1.3 1.3zM-412.2 297.9h25.4c.7 0 1.3-.6 1.3-1.3 0-.7-.6-1.3-1.3-1.3h-25.4c-.7 0-1.3.6-1.3 1.3 0 .8.6 1.3 1.3 1.3z"/>
    <path id="drawer_close_icon"
          d="M-416.6 280.8l-15.2 15.2c-.4.4-.4 1.1 0 1.5.2.2.5.3.8.3.3 0 .6-.1.8-.3l15.3-15.3 15.3 15.3c.2.2.5.3.8.3.3 0 .6-.1.8-.3.4-.4.4-1.1 0-1.5l-15.2-15.2 15.2-15.2c.4-.4.4-1.1 0-1.5-.4-.4-1.1-.4-1.5 0l-15.3 15.3-15.3-15.3c-.4-.4-1.1-.4-1.5 0-.4.4-.4 1.1 0 1.5l15 15.2z"/>
</svg>
<nav id="main_sticky_nav" class="">
    <ul>
        <!-- <li><a class="active" href="#home"><span>01.</span>Home</a></li> -->
        <li class=""><a href="#about"><span>01.</span>About</a></li>
        <li class=""><a href="#work"><span>02.</span>Work</a></li>
        <li class=""><a href="#contact"><span>03.</span>Contact</a></li>
        <a class="button">Resume</a>
    </ul>
</nav>

<div class="container">
    <header id="home">
        <p class="heading-supporting-text fadeInUpAnimation">Hi my name is</p>
        <h1 class="main-heading  fadeInUpAnimation">Shahzaib Zaheer.</h1>
        <h2 class="main-sub-heading  fadeInUpAnimation">I build things for the web.</h2>
        <p class="heading-description  fadeInUpAnimation">Consectetur adipisicing elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis
            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <a href="#contact" class="button  fadeInUpAnimation">Contact Me</a>
    </header>

    <section class="about" id="about">
        <!-- data-anim will animate elements on scroll  -->
        <h3 class="sub-heading"><span>01.</span>About me</h3>
        <div class="about-content">
            <div class="picture-container">
                <div class="image">
                    <!-- <img src="resources/images/shahzaib.jpg" alt=""> -->
                    {{-- <img >--}}
                </div>
            </div>
            <div class="content-container">
                <p>Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                    mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing <a href="#">elit</a>, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. </p>
                <div class="skills-list">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit:</p>
                    <div class="list-item-container">
                        <ul>
                            <li>JavaScript</li>
                            <li>JavaScript</li>
                            <li>JavaScript</li>
                            <li>JavaScript</li>
                            <li>JavaScript</li>
                        </ul>
                        <ul>
                            <li>PHP</li>
                            <li>SQL</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="work" id="work">
        <h3 class="sub-heading"><span>02.</span>My Work</h3>
        <div class="project-items-container ">
            <!-- <div class="project-item ltr">
              <div class="project-image">
                <img src="https://picsum.photos/520/320" alt="">
              </div>
              <h3 class="project-title">Project title</h3>
              <div class="project-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </div>
              <ul class="project-technologies">
                <li>React</li>
                <li>Laravel</li>
                <li>Php</li>
                <li>Css</li>
                <li>Sass</li>
              </ul>
              <div class="project-links">
                <a href="#"><svg><use href="#github-icon" /></svg></a>
                <a href="#"><svg><use href="#external-link-icon" /></svg></a>
              </div>
            </div>
            <div class="project-item rtl">
              <div class="project-image">
                <img src="https://picsum.photos/520/320" alt="">
              </div>
              <h3 class="project-title">Project title</h3>
              <div class="project-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </div>
              <ul class="project-technologies">
                <li>React</li>
                <li>Laravel</li>
                <li>Php</li>
                <li>Css</li>
                <li>Sass</li>
              </ul>
              <div class="project-links">
                <a href="#"><svg><use href="#github-icon" /></svg></a>
                <a href="#"><svg><use href="#external-link-icon" /></svg></a>
              </div>
            </div> -->
        </div>
        <button type="button" class="button" id="loadMoreProjects">Load More</button>
        <svg id='loading_icon' class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </section>
    <section class="contact" id="contact">
        <h3 class="sub-heading"><span>03.</span>Contact Me</h3>
        <div class="contact-content">

            <form id="contact_form" class="contact-form">
                <div class="form-item">
                    <input id="contactor_name" type="text" name="" placeholder="Name"  required>
                    <input id="contactor_email" type="email" name="" placeholder="Email" required>
                </div>
                <div class="form-item">
                    <textarea  id="contactor_message" name="Text1" cols="40" rows="5" placeholder="Message" required></textarea>
                </div>
                <input id='contact_submint_btn' type="submit" class="button" value="Send">
            </form>

            <ul class="contact-info">
                <li>
                    <img src="{{asset('resources/images/call_icon.svg')}}" alt="">
                    <p>+92 0305 6302013</p>
                </li>
                <li>
                    <img src="{{asset('resources/images/mail_icon.svg')}}" alt="">
                    <p>shahzaib@gmail.com</p>
                </li>
                <li>
                    <img src="{{asset('resources/images/place_icon.svg')}}" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae in Cum.</p>
                </li>
            </ul>
        </div>
    </section>
</div>


<!-- SVG icons-->
<svg xmlns="http://www.w3.org/2000/svg" style="display:none">
    <symbol id="github-icon" viewBox="-260 61.5 438.5 438.5">
        <path
                d="M149.1 176c-19.6-33.6-46.2-60.2-79.8-79.8S-.9 66.8-40.7 66.8s-76.5 9.8-110.1 29.4-60.2 46.2-79.8 79.8-29.4 70.3-29.4 110.1c0 47.8 13.9 90.7 41.8 128.9s63.9 64.6 108.1 79.2c5.1 1 8.9.3 11.4-2s3.7-5.1 3.7-8.6c0-.6 0-5.7-.1-15.4s-.1-18.2-.1-25.4l-6.6 1.1c-4.2.8-9.5 1.1-15.8 1-6.4-.1-13-.8-19.8-2-6.9-1.2-13.2-4.1-19.1-8.6-5.9-4.5-10.1-10.3-12.6-17.6l-2.9-6.6c-1.9-4.4-4.9-9.2-9-14.6-4.1-5.3-8.2-8.9-12.4-10.8l-2-1.4c-1.3-1-2.6-2.1-3.7-3.4-1.1-1.3-2-2.7-2.6-4s-.1-2.4 1.4-3.3 4.3-1.3 8.3-1.3l5.7.9c3.8.8 8.5 3 14.1 6.9 5.6 3.8 10.2 8.8 13.8 14.8 4.4 7.8 9.7 13.8 15.8 17.8 6.2 4.1 12.4 6.1 18.7 6.1s11.7-.5 16.3-1.4c4.6-1 8.8-2.4 12.8-4.3 1.7-12.8 6.4-22.6 14-29.4-10.8-1.1-20.6-2.9-29.3-5.1-8.7-2.3-17.6-6-26.8-11.1s-16.9-11.5-23-19.1-11.1-17.6-15-30-5.9-26.6-5.9-42.8c0-23 7.5-42.6 22.6-58.8-7-17.3-6.4-36.7 2-58.2 5.5-1.7 13.7-.4 24.6 3.9 10.9 4.3 18.8 8 23.8 11s9.1 5.6 12.1 7.7c17.7-4.9 36-7.4 54.8-7.4s37.1 2.5 54.8 7.4l10.8-6.8c7.4-4.6 16.2-8.8 26.3-12.6s17.8-4.9 23.1-3.1c8.6 21.5 9.3 40.9 2.3 58.2 15 16.2 22.6 35.8 22.6 58.8 0 16.2-2 30.5-5.9 43s-8.9 22.5-15.1 30-13.9 13.9-23.1 19-18.2 8.9-26.8 11.1c-8.7 2.3-18.4 4-29.3 5.1 9.9 8.6 14.8 22.1 14.8 40.5v60.2c0 3.4 1.2 6.3 3.6 8.6 2.4 2.3 6.1 3 11.3 2 44.2-14.7 80.2-41.1 108.1-79.2 27.9-38.2 41.8-81.1 41.8-128.9.1-39.8-9.7-76.5-29.3-110.1z"/>
    </symbol>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" style="display:none">
    <symbol id="external-link-icon" viewBox="-223 25.4 511.6 511.6">
        <path class="st0"
              d="M169.9 317.8h-18.3c-2.7 0-4.9.9-6.6 2.6-1.7 1.7-2.6 3.9-2.6 6.6v91.4c0 12.6-4.5 23.3-13.4 32.3-8.9 8.9-19.7 13.4-32.3 13.4h-237.5c-12.6 0-23.3-4.5-32.3-13.4-8.9-8.9-13.4-19.7-13.4-32.3V180.7c0-12.6 4.5-23.3 13.4-32.3 8.9-8.9 19.7-13.4 32.3-13.4h201c2.7 0 4.9-.9 6.6-2.6 1.7-1.7 2.6-3.9 2.6-6.6v-18.3c0-2.7-.9-4.9-2.6-6.6s-3.9-2.6-6.6-2.6h-201c-22.6 0-42 8-58.1 24.1C-215 138.7-223 158-223 180.7v237.5c0 22.6 8 42 24.1 58.1s35.5 24.1 58.1 24.1H96.8c22.6 0 42-8 58.1-24.1s24.1-35.3 24.1-58v-91.4c0-2.7-.9-4.9-2.6-6.6-1.7-1.7-3.9-2.5-6.5-2.5z"/>
        <path class="st0"
              d="M283.2 67.3c-3.6-3.6-7.9-5.4-12.9-5.4H124.2c-4.9 0-9.2 1.8-12.8 5.4-3.6 3.6-5.4 7.9-5.4 12.8s1.8 9.2 5.4 12.8l50.2 50.2-186.2 186.3c-1.9 1.9-2.9 4.1-2.9 6.6s1 4.7 2.9 6.6L8 375.1c1.9 1.9 4.1 2.9 6.6 2.9s4.7-.9 6.6-2.9L207.3 189l50.3 50.2c3.6 3.6 7.9 5.4 12.8 5.4s9.2-1.8 12.9-5.4c3.6-3.6 5.4-7.9 5.4-12.8V80.2c-.1-5-1.9-9.2-5.5-12.9z"/>
    </symbol>
</svg>


<script type="text/javascript" src="{{ asset('vendor/jquery.min.js') }}"></script>
<script src="{{asset('vendor/waypoints/lib/jquery.waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>
