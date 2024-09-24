// Hidden menu

const body = document.querySelector('body')
const hidden = document.querySelector('.hidden')
const burgerMenu = document.querySelector('.nav_burger_menu')
const burgerClose = document.querySelector('#burger_close')

burgerMenu.addEventListener('click', function() {
    burgerMenu.classList.add('hide')
    burgerClose.classList.add('show')
    hidden.classList.add('show')
    body.classList.add('noscroll')
})

burgerClose.addEventListener('click', function() {
    burgerMenu.classList.remove('hide')
    burgerClose.classList.remove('show')
    hidden.classList.remove('show')
    body.classList.remove('noscroll')
})

// Hidden project form
const project = document.querySelector('#offer-1')
const project2 = document.querySelector('#offer-2')
const project3 = document.querySelector('#offer-stamps-1')
const project4 = document.querySelector('#offer-stamps-2')
const webPages = document.querySelector('#web-pages')
const webBubble = document.querySelector('#web-bubble')
const wantTemplate = document.querySelector('#want-template')
const webPagesMobile = document.querySelector('#web-pages-mobile')
const webPagesMobile2 = document.querySelector('#web-pages-mobile-2')
const webPagesMobileTop = document.querySelector('#web-pages-mobile-top')
const openFirstForm = document.querySelectorAll('.open-first-form')
const openForm = document.querySelectorAll('.open-form')
const webPagesBottom = document.querySelector('#web-pages-bottom')
const navProjectBtn = document.querySelector('.nav_btn')
const hiddenProjectBtn = document.querySelector('.hidden_btn')
const stampsFormFirst = document.querySelector('.stamps-form-first')
const stampsFormSecond = document.querySelector('.stamps-form-second')
const projectClose = document.querySelector('#project-close')
const projectClose2 = document.querySelector('#project-close2')
const projectClose3 = document.querySelector('#project-close3')
const projectClose4 = document.querySelector('#project-close4')

if (project) {
    navProjectBtn.addEventListener('click', function() {
        project.classList.add('show')
        body.classList.add('noscroll')
    })
    hiddenProjectBtn.addEventListener('click', function() {
        project.classList.add('show')
        body.classList.add('noscroll')
    })
    projectClose.addEventListener('click', function() {
        project.classList.remove('show')
        if (!hidden.classList.contains('show')) {
            body.classList.remove('noscroll')
        }
    })

    openFirstForm.forEach(button => {
        button.addEventListener('click', function() {
            project.classList.add('show')
            body.classList.add('noscroll')
        })
    })
}

if (project2) {
    if (webPages) {
        webPages.addEventListener('click', function() {
            project2.classList.add('show')
            body.classList.add('noscroll')
        })
    }
    if (webBubble) {
        webBubble.addEventListener('click', function() {
            project2.classList.add('show')
            body.classList.add('noscroll')
        })
    }
    if (wantTemplate) {
        wantTemplate.addEventListener('click', function() {
            project2.classList.add('show')
            body.classList.add('noscroll')
        })
    }
    if (webPagesMobile) {
        webPagesMobile.addEventListener('click', function() {
            project2.classList.add('show')
            body.classList.add('noscroll')
        })
    }
    if (webPagesMobile2) {
        webPagesMobile2.addEventListener('click', function() {
            project2.classList.add('show')
            body.classList.add('noscroll')
        })
    }
    if (webPagesMobileTop) {
        webPagesMobileTop.addEventListener('click', function() {
            project2.classList.add('show')
            body.classList.add('noscroll')
        })
    }
    if (webPagesBottom) {
        webPagesBottom.addEventListener('click', function() {
            project2.classList.add('show')
            body.classList.add('noscroll')
        })
    }
    if (projectClose2) {
        projectClose2.addEventListener('click', function() {
            project2.classList.remove('show')
            if (!hidden.classList.contains('show')) {
                body.classList.remove('noscroll')
            }
        })
    }

    openForm.forEach(button => {
        button.addEventListener('click', function() {
            project2.classList.add('show')
            body.classList.add('noscroll')
        })
    })
}

if (project3) {
    if (document.querySelector('.stamps-form-first') != null){
        $(document).ready(function(){
            $('.stamps-form-first').click(function(){
                project3.classList.add('show')
                body.classList.add('noscroll')
            });
        });
    
        stampsFormSecond.addEventListener('click', function() {
            project4.classList.add('show')
            body.classList.add('noscroll')
        })
        if (projectClose3) {
            projectClose3.addEventListener('click', function() {
                project3.classList.remove('show')
                if (!hidden.classList.contains('show')) {
                    body.classList.remove('noscroll')
                }
            })
        }
        if (projectClose4) {
            projectClose4.addEventListener('click', function() {
                project4.classList.remove('show')
                if (!hidden.classList.contains('show')) {
                    body.classList.remove('noscroll')
                }
            })
        }
    }
}
// Project services choose


const projectServices = document.querySelectorAll('.project_services_item')

if (projectServices) {
    projectServices.forEach(item => {
        item.addEventListener('click', (e) => {
            projectServices.forEach(elem => {
                elem.classList.remove('active')
            })
            item.classList.add('active')
        })
    })
}

// Scroll animation
let stepsPosition = null;
let stepPeriod = 300;
let viewportWidth = 0;
let steps = document.querySelector('.steps_wrap');
let stepsCirle = document.querySelectorAll('.steps_circle');
if (steps != null) {
    let viewportOffset = steps.getBoundingClientRect();
}

$(document).ready(function(){
    if (steps == null) return;
    stepsPosition = $('#steps').position();
    if ($('body').innerWidth() < 760) { 
        $('#circle1active').css('display', 'none');
        $('#circle2active').css('display', 'none');
        $('#circle3active').css('display', 'none');
        $('#circle4active').css('display', 'none');
        $('#circle5active').css('display', 'none');
    }

    let top = $(document).scrollTop();
    if (top > $('.cons-first-line').position().top + $('.cons-first-line').height() - 200){
        $('.cons-first-line').toggleClass('slide-up', true);
    }
    if (top > $('.cons-second-line').position().top + $('.cons-second-line').height()-200){
        $('.cons-second-line').toggleClass('slide-up', true);
    }
    
});


$(document).on('scroll', function(){
    if (steps == null) return;
    let top = $(document).scrollTop();
    let stepsHeight = $('#steps').height();
    if ($('body').innerWidth() > 760 && top > stepsPosition.top && top < stepsPosition.top + stepPeriod * 4) {
        $('#steps').css('margin-top', top - stepsPosition.top);
        setStepCircles(top);
    }
    if ($('body').innerWidth() < 760 && top > stepsPosition.top - 300){
        setStepCircleMobile();
    }
    
    if (top < stepsPosition.top){
        $('#circle1active').css({left: '0', top: '0'});
        $('#circle2active').css({left: '-400px', top: '-400px'});        
        $('#circle3active').css({left: '-400px', top: '-400px'});        
        $('#circle4active').css({left: '-400px', top: '-400px'});        
        $('#circle5active').css({left: '-400px', top: '-400px'});        
    }
    if (top > stepsPosition.top + stepPeriod * 4){
        $('#circle1active').css({left: '-400px', top: '-400px'});
        $('#circle2active').css({left: '-400px', top: '-400px'});        
        $('#circle3active').css({left: '-400px', top: '-400px'});        
        $('#circle4active').css({left: '-400px', top: '-400px'});        
        $('#circle5active').css({left: '0', top: '0'});        
    }
    if (top > $('.cons-first-line').position().top + $('.cons-first-line').height() - 200){
        $('.cons-first-line').toggleClass('slide-up', true);
    }
    if (top > $('.cons-second-line').position().top + $('.cons-second-line').height()-200){
        $('.cons-second-line').toggleClass('slide-up', true);
    }
});



function setStepCircles(top){
    //1-2 drift
    if (top < stepsPosition.top + stepPeriod){
        $('#circle3active').css({left: '-400px', top: '-400px'});        
        $('#circle4active').css({left: '-400px', top: '-400px'});        
        $('#circle5active').css({left: '-400px', top: '-400px'});        
        
        let circle1 = $('#circle1')[0].getBoundingClientRect();
        let circle2 = $('#circle2')[0].getBoundingClientRect();
  
        let c1DistanceX = circle2.left - circle1.left;
        let c1DistanceY = circle2.top - circle1.top;
        let c2DistanceX = circle1.left - circle2.left;
        let c2DistanceY = circle1.top - circle2.top;
        
        let newC1X = (c1DistanceX / stepPeriod * parseInt(top - stepsPosition.top));
        let newC1Y = (c1DistanceY / stepPeriod * parseInt(top - stepsPosition.top));
        let newC2X = (c2DistanceX - c2DistanceX / stepPeriod * parseInt(top - stepsPosition.top));
        let newC2Y = (c2DistanceY - c2DistanceY / stepPeriod * parseInt(top - stepsPosition.top));

        $('#circle1active').css('left', newC1X);
        $('#circle1active').css('top', newC1Y);
        $('#circle2active').css('left', newC2X);
        $('#circle2active').css('top', newC2Y);
    }
    
    //2-3 drift
    if (top > stepsPosition.top + stepPeriod && top < stepsPosition.top + stepPeriod * 2){
        $('#circle1active').css({left: '-400px', top: '-400px'});
        $('#circle4active').css({left: '-400px', top: '-400px'});        
        $('#circle5active').css({left: '-400px', top: '-400px'});        
        
        let circle2 = $('#circle2')[0].getBoundingClientRect();
        let circle3 = $('#circle3')[0].getBoundingClientRect();
  
        let c1DistanceX = circle3.left - circle2.left;
        let c1DistanceY = circle2.top - circle3.top;
        let c2DistanceX = circle3.left - circle2.left;
        let c2DistanceY = circle3.top - circle2.top;
        
        let newC1X = (c1DistanceX / stepPeriod * parseInt(top - stepsPosition.top - stepPeriod));
        let newC1Y = (c1DistanceY - c1DistanceY / stepPeriod * parseInt(top - stepsPosition.top));
        let newC2X = (c2DistanceX / stepPeriod * parseInt(top - stepsPosition.top - stepPeriod * 2));
        let newC2Y = (c2DistanceY / stepPeriod * parseInt(top - stepsPosition.top - stepPeriod * 2));

        $('#circle2active').css('left', newC1X);
        $('#circle2active').css('top', newC1Y);
        $('#circle3active').css('left', newC2X);
        $('#circle3active').css('top', newC2Y);
    }    
    
    //3-4 drift
    if (top > stepsPosition.top + stepPeriod * 2 && top < stepsPosition.top + stepPeriod * 3){
        $('#circle1active').css({left: '-400px', top: '-400px'});
        $('#circle2active').css({left: '-400px', top: '-400px'});        
        $('#circle5active').css({left: '-400px', top: '-400px'});        
        
        let circle3 = $('#circle3')[0].getBoundingClientRect();
        let circle4 = $('#circle4')[0].getBoundingClientRect();
  
        let c1DistanceX = circle4.left - circle3.left;
        let c1DistanceY = circle4.top - circle3.top;
        let c2DistanceX = circle3.left - circle4.left;
        let c2DistanceY = circle3.top - circle4.top;
        
        let newC1X = (c1DistanceX / stepPeriod * parseInt(top - stepsPosition.top - stepPeriod * 2));
        let newC1Y = (c1DistanceY / stepPeriod * parseInt(top - stepsPosition.top - stepPeriod * 2));
        let newC2X = (c2DistanceX - c2DistanceX / stepPeriod * parseInt(top - stepsPosition.top - stepPeriod * 2));
        let newC2Y = (c2DistanceY - c2DistanceY / stepPeriod * parseInt(top - stepsPosition.top - stepPeriod * 2));

        $('#circle3active').css('left', newC1X);
        $('#circle3active').css('top', newC1Y);
        $('#circle4active').css('left', newC2X);
        $('#circle4active').css('top', newC2Y);
    }    
    
    //4-5 drift
    if (top > stepsPosition.top + stepPeriod * 3 && top < stepsPosition.top + stepPeriod * 4){
        $('#circle1active').css({left: '-400px', top: '-400px'});
        $('#circle2active').css({left: '-400px', top: '-400px'});        
        $('#circle3active').css({left: '-400px', top: '-400px'});        
        
        let circle4 = $('#circle4')[0].getBoundingClientRect();
        let circle5 = $('#circle5')[0].getBoundingClientRect();
  
        let c1DistanceX = circle5.left - circle4.left;
        let c1DistanceY = circle4.top - circle5.top;
        let c2DistanceX = circle5.left - circle4.left;
        let c2DistanceY = circle5.top - circle4.top;
        
        let newC1X = (c1DistanceX / stepPeriod * parseInt(top - stepsPosition.top - stepPeriod * 3));
        let newC1Y = (c1DistanceY - c1DistanceY / stepPeriod * parseInt(top - stepsPosition.top - stepPeriod * 2));
        let newC2X = (c2DistanceX / stepPeriod * parseInt(top - stepsPosition.top - stepPeriod * 4));
        let newC2Y = (c2DistanceY / stepPeriod * parseInt(top - stepsPosition.top - stepPeriod * 4));

        $('#circle4active').css('left', newC1X);
        $('#circle4active').css('top', newC1Y);
        $('#circle5active').css('left', newC2X);
        $('#circle5active').css('top', newC2Y);
    }       
}

function setStepCircleMobile(){
    $('#circle1active').css({left: '-400px', top: '-400px'});
    $('#circle2active').css({left: '-400px', top: '-400px'});        
    $('#circle3active').css({left: '-400px', top: '-400px'});        
    $('#circle4active').css({left: '-400px', top: '-400px'});        
    $('#circle5active').css({left: '-400px', top: '-400px'});        
    
    const viewportOffset = steps.getBoundingClientRect();
    viewportOffset.top -= 200;
    
    if (this.innerWidth > 992) {
        if (viewportOffset.top > -200 && viewportOffset.top < viewportOffset.height) {
            stepsCirle.forEach((elem, index) => {
                if (Math.round((viewportOffset.top + 300) / ((viewportOffset.height) / 5)) == 5 - index) {
                    elem.classList.add('active')
                } else {
                    elem.classList.remove('active')
                }
            })
        }
    } else {
        if (viewportOffset.top + viewportOffset.height > 0) {
            stepsCirle.forEach((elem, index) => {
                if (viewportOffset.top + 100 < this.innerHeight - ((viewportOffset.height * (index+1)) / 5)) {
                    elem.classList.add('active')
                } else {
                    elem.classList.remove('active')
                }
            })
        }
    }
}


// Types 
const types = document.querySelectorAll('.types_item')

if (types) {
    types.forEach((item, index) => {
        item.addEventListener('click', (e) => {
            if (item.classList.contains('active')) {
                item.classList.remove('active')
            } else {
                types.forEach(elem => { 
                    elem.classList.remove('active')
                })
                item.classList.add('active')
            }
        })
    })
}


let buttonL = document.querySelector('.button-l')
let buttonS = document.querySelector('.button-s')

if (buttonL) {
    buttonL.addEventListener('mousemove', e => {
        let rect = e.target.getBoundingClientRect();
        let x = e.clientX - rect.left;
        let y = e.clientY - rect.top;
        buttonS.style.left = (x - 20) * 1.5 + 'px'
        buttonS.style.top = (y - 20) * 1.5 + 'px'
    })
}

// Templates IP / OOO

const templatesIp = document.querySelector('.templates_ip')
const templatesOoo = document.querySelector('.templates_ooo')
const catalogIp = document.querySelector('.catalog_ip')
const catalogOoo = document.querySelector('.catalog_ooo')
const catalogBtn = document.querySelector('.catalog_btn')

if (templatesIp) {
    templatesIp.addEventListener('click', () => {
        templatesOoo.classList.remove('active')
        catalogOoo.classList.remove('show')
        templatesIp.classList.add('active')
        catalogIp.classList.add('show')
    })
}

if (templatesOoo) {
    templatesOoo.addEventListener('click', () => {
        templatesOoo.classList.add('active')
        catalogOoo.classList.add('show')
        templatesIp.classList.remove('active')
        catalogIp.classList.remove('show')
    })
}

if (catalogBtn) {
    catalogBtn.addEventListener('click', (e) => {
        e.preventDefault()
        catalogBtn.classList.add('d-none')
        catalogIp.classList.add('full')
        catalogOoo.classList.add('full')
    })
}


// Color select
const colorList = document.querySelectorAll('.color_color')
const colorColop = document.querySelector('.color_item_colop')
const colorMouse = document.querySelector('.color_item_mouse')

if (colorList) {
    colorList.forEach(item => {
        item.addEventListener('click', () => {
            colorList.forEach(x => {
                x.classList.remove('active')
            })
            item.classList.add('active')
            colorColop.innerHTML = `<img src="img/stamps/auto/${item.dataset.id}.jpg" alt="colop"></img>`
            colorMouse.innerHTML = `<img src="img/stamps/mouse/${item.dataset.id}.jpg" alt="colop"></img>`
        })
    })
}


// Catalog items

const catalogItems = document.querySelectorAll('.catalog_item')
const catalogModalStamp = document.querySelector('.catalog-modal_stamp')
const catalogModal = document.querySelector('.catalog-modal')
const catalogModalClose = document.querySelector('.catalog-modal_close')

catalogItems.forEach(item => {
    item.addEventListener('click', () => {
        catalogModalStamp.src = item.children[0].src
        catalogModal.classList.add('show')
    })
})

catalogModalClose.addEventListener('click', () => {
    catalogModal.classList.remove('show')
})



