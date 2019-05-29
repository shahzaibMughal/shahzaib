$('document').ready(function(){

    //******** Detect Scroll position and hide show nav
    const MAIN_NAV =  $('#main_sticky_nav');
    // const MAIN_NAV =  $('.js--main_nav');
    var position = $(window).scrollTop();
    // should start at 0
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if(scroll > position) {
            // scroll down
            // MAIN_NAV.slideUp();
            MAIN_NAV.removeClass('visible').addClass('hidden');
            NAV_TOGGLER.removeClass('visible').addClass('hidden');

        } else {
            // scroll up
            // MAIN_NAV.slideDown();
            MAIN_NAV.removeClass('hidden').addClass('visible sticky');

        }
        position = scroll;
    });









    // Select all links with hashes
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen

                    //***** highlighting clicked nav link
                    hightlightNavItem(this);

                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top - 50
                    }, 1000);
                }
            }
        });


    


    function hightlightNavItem(navItem){
        //***** highlighting nav link, when click on nav item (<a> inside nav)
        // remove active class from all the nav links
        $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').removeClass('active');
        // add active class to clicked link
        $(navItem).addClass('active');

    }

    function hightlightNavItemById(navItemID){
        // remove active class from all the nav links
        closeNavIfOpen();
        $(' a[href*="#"]').not('[href="#"]').not('[href="#0"]').removeClass('active');
        // add active class to clicked link
        $(' a[href="'+navItemID+'"]').addClass('active');

        if(navItemID == "#home"){
            NAV_TOGGLER.removeClass('hidden').addClass('visible sticky');
        }else{
            NAV_TOGGLER.removeClass('visible').addClass('hidden');
        }

    }










    /************ Load more Projets
     ****************************************************/

    const LOAD_PROJECTS_BTN =  $('#loadMoreProjects');
    const LOADING_iCON = $('#loading_icon').hide();
    const PROJECTS_CONTAINER = $('.project-items-container');
    var currentProjectsCount = 0;
    var totalProjectsCount = -1;
    var projectsData = null;    // we load data only once, this is to store cache.

    loadProjects();  // load 2 projects by default
    LOAD_PROJECTS_BTN.click(function(e){
        // alert('load projects and append in project container');
        showLoading();
        setTimeout(loadProjects,1000); //artificial loading
    });


    function loadProjects(){
        // showLoading();
        // get the projects and append the projects
        // grab the projects, if success then append and hide loading
        // if fails or no more projects are there then disable loadProjects button
        //*******  /resources/scripts/data.json
        if(projectsData == null){
            downloadData();
        }else{
            extractAndAppendProjects();
        }
        // if(currentProjectsCount >= totalProjectsCount){
        //   disableLoadProjectButton();
        //   // hideLoading();
        // }else{
        //
        // }

    }
    function isEven(number){
        // if(number==0) return true;
        return (number%2 == 0) ? true : false;
    }
    function showLoading(){
        LOAD_PROJECTS_BTN.hide();
        LOADING_iCON.show();
    }
    function hideLoading(){
        LOAD_PROJECTS_BTN.show();
        LOADING_iCON.hide();
    }
    function disableLoadProjectButton(){
        LOAD_PROJECTS_BTN.attr('disabled','true');
        LOAD_PROJECTS_BTN.text('There are no more projects');
        hideLoading();
        //or
        // LOAD_PROJECTS_BTN.hide();
    }
    function downloadData(){
        var url = '/api/projects';
        var onSuccess = function (data){
            // console.log(data);
            projectsData = data;
            totalProjectsCount = projectsData.length;
            extractAndAppendProjects();
        }
        var onFailure = function (jqXHR, textStatus, error) {
            disableLoadProjectButton();
            // console.log("Error occur");
        }

        $.ajax({
            type: "GET",
            url: url,
            async: true,
            success: onSuccess,
            error: onFailure
        });
    }
    function appendProjectItem(projectItem, className){
        // console.log(projectItem);
        // return;
        if(projectItem){
            var project_item_html =  '<div class="project-item fadeInUpAnimation '+ className +'">';
            project_item_html += '<div class="project-image">';
            project_item_html += '<img src="/project_images/'+projectItem.imageName+'" alt="">';
            project_item_html += '</div>';
            project_item_html += '<h3 class="project-title">'+projectItem.title+'</h3>';
            project_item_html += '<div class="project-description">';
            project_item_html += projectItem.description;
            project_item_html += '</div>';
            var projectsTechnologies = '';
            for(var i=0; i<projectItem.technames.length; i++){
                projectsTechnologies += "<li>"+projectItem.technames[i].techName+"</li>";
            }
            project_item_html += '<ul class="project-technologies">'+projectsTechnologies+' </ul>';
            project_item_html += '<div class="project-links">';
            project_item_html += '<a target="_blank" href="'+projectItem.githubLink+'"><svg><use href="#github-icon" /></svg></a>';
            project_item_html += '<a target="_blank" href="'+projectItem.liveLink+'"><svg><use href="#external-link-icon" /></svg></a></div></div>';
            PROJECTS_CONTAINER.append(project_item_html);
        }
    }

    function extractAndAppendProjects(){
        // console.log("CurrentCount: "+currentProjectsCount);
        // console.log("TotalCount: "+totalProjectsCount);
        if(currentProjectsCount < totalProjectsCount){
            var loadCount = currentProjectsCount + 2 ;   // we only want to load 2 projects at one request
            var projectItem = '';
            //append projects
            for(currentProjectsCount; currentProjectsCount < loadCount; currentProjectsCount++)
            {
                projectItem = projectsData[currentProjectsCount];

                if(isEven(currentProjectsCount)){
                    // console.log(currentProjectsCount+' is Even');
                    appendProjectItem(projectItem, 'ltr');
                }else{
                    // console.log(currentProjectsCount+' is Odd');
                    appendProjectItem(projectItem, 'rtl');
                }
                // console.log(projectsData[currentProjectsCount]);
            }
            hideLoading();
        }else{
            disableLoadProjectButton();
        }
    }









    /************** Make nav item active on scroll
     *************************************/
    //  calculate the offset of the element and then compare that with the scroll value
    // // for about section
    // new Waypoint({
    //         element: $('#about'),
    //         handler: function(direction) {
    //             hightlightNavItemById('#about');
    //             performAnimation(this.element);
    //             // console.log('scrolled to about');
    //         },
    //         offset: 500
    // });
    //
    //   // for work section
    //   new Waypoint({
    //       element: $('#work'),
    //       handler: function(direction) {
    //           hightlightNavItemById('#work');
    //           performAnimation(this.element);
    //           // console.log('scrolled to work');
    //       },
    //       offset: 500
    //   });

    function init_whenHitTopOfElement(id, offset){
        // this function will invoke, when top of the  element will hit
        // this funciton will animate element when in view and also active nav item accordingly
        new Waypoint({
            element: $(id),
            handler: function(direction) {
                hightlightNavItemById(id);
                performAnimation(this.element);
                // console.log('scrolled to contact');
            },
            offset: offset,
        });
    }
    function init_whenHitBottomOfElement(id){
        // this funciton will active nav item accordingly when bottom of the element will hit
        new Waypoint({
            element: $(id),
            handler: function(direction) {
                hightlightNavItemById(id);
                // console.log('scrolled to contact');
            },
            offset: 'bottom-in-view'
        });
    }

    // for about section
    init_whenHitTopOfElement('#about','40%');
    init_whenHitBottomOfElement('#about');

    // for work section
    init_whenHitTopOfElement('#work','40%');
    init_whenHitBottomOfElement('#work');

    // for contact section
    init_whenHitTopOfElement('#contact','40%');
    init_whenHitBottomOfElement('#contact');



    // // for contact us section
    // new Waypoint({
    //     element: $('#contact'),
    //     handler: function(direction) {
    //         hightlightNavItemById('#contact');
    //         performAnimation(this.element);
    //         // console.log('scrolled to contact');
    //     },
    //     offset: 200,
    // });
    //

    // for home section,
    // to remove highlight from ABOUT nav link when currently user is on home section
    // also to animate nav icon toggler on small screen
    new Waypoint({
        element: $('#home'),
        handler: function(direction) {
            hightlightNavItemById('#home');
            // console.log('scrolled to home');
        }
    });
    //
    //
    function performAnimation(element){
        // console.log("Perform animation "+element.attr('id'));
        if(!element.hasClass('fadeInUpAnimation')){ // we only want to perform animation at once
            element.addClass('fadeInUpAnimation');
        }
    }













    /************ Toggle Nav
     ****************************************************/
    const NAV_TOGGLER = $('#main_nav_toggler');
    const DRAWER_OPEN_ICON = $('#drawer_open_icon');
    const DRAWER_CLOSE_ICON = $('#drawer_close_icon').hide();
    const NAV = $('#main_sticky_nav');

    NAV_TOGGLER.click(toggleNav);



    function toggleNav(){
        // alert("hello");
        NAV.toggleClass('collapse');
        toggleDrawerIcon();


    }

    function isNavOpen(){
        if(DRAWER_CLOSE_ICON.is(":visible")){
            // yes nav is open
            return true;
        }
        return false;
    }

    function toggleDrawerIcon(){
        if(DRAWER_OPEN_ICON.is(":visible")){
            // alert("drawer open is visible.");
            DRAWER_CLOSE_ICON.show();
            DRAWER_OPEN_ICON.hide();
        }else{
            // alert("drawer close is visible.");
            DRAWER_CLOSE_ICON.hide();
            DRAWER_OPEN_ICON.show();
        }
    }

    function closeNavIfOpen(){
        NAV.removeClass('collapse');
        DRAWER_CLOSE_ICON.hide();
        DRAWER_OPEN_ICON.show();
    }
});










/************ Contact Form
 ****************************************************/
const FORM = $('#contact_form');
const SEND_BTN = $('#contact_submit_btn');
const CONTACTOR_NAME = $('#contactor_name');
const CONTACTOR_EMAIL = $('#contactor_email');
const CONTACTOR_MESSAGE = $('#contactor_message');


    function ContactData(){
    }
    FORM.on('submit',function(e){
        e.preventDefault();
        disableSendBtn();

        // grab the data
        var data = new ContactData();
        data.name = CONTACTOR_NAME.val();
        data.email = CONTACTOR_EMAIL.val();
        data.message = CONTACTOR_MESSAGE.val();
        // var data = '{' +
        //     '"name":"'+CONTACTOR_NAME.val()+'",'+
        //     '"email":"'+CONTACTOR_EMAIL.val()+'",'+
        //     '"message":"'+CONTACTOR_MESSAGE.val()+'"'+
        //     '}';


        // var data = {
        //     name : CONTACTOR_NAME.val(),
        //     email: CONTACTOR_EMAIL.val(),
        //     message: CONTACTOR_MESSAGE.val()
        // };

        sendData(data);
        // console.log(data);

    });
    function sendData(data){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: 'contact',
            async: true,
            data: data,
            success: function(data){
                console.log(data);
                if(data === 'success'){
                    // all data is valid now
                    $('.errors_container').remove(); // remove all errors
                    var successHTML = '<span class="success">Your Message Successfully delivered :-)</span>';
                    FORM.prepend(successHTML);

                    // remove all the data
                    CONTACTOR_NAME.val('');
                    CONTACTOR_EMAIL.val('');
                    CONTACTOR_MESSAGE.val('');
                    enableSendBtn();

                    setTimeout(function(){
                        $('.success').remove();
                    },3000);
                }
                else{
                    // show error message
                    console.log(data);
                    console.log("Data is not valid");
                    $('.errors_container').remove(); // remove previous error and create new
                    var errorsHTML = '<div class="errors_container">' +
                        "<span >"+data.name+"</span><br>"+
                        "<span >"+data.email+"</span><br>"+
                        "<span>"+data.message+"</span><br>"+
                        '</div>';
                    FORM.prepend(errorsHTML);
                    enableSendBtn();
                }
            },
            error: function (jqXHR, textStatus, error) {
                console.log(error);
                enableSendBtn();
            }
        });
    }


    function enableSendBtn(){
        SEND_BTN.removeAttr('disabled');
    }
    function disableSendBtn(){
        SEND_BTN.attr('disabled','true');
    }





