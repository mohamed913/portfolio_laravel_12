// var menubar=document.getElementById('menubar');
// var links=document.getElementById('links');
// var linksul=document.getElementById('linksul');

// menubar.addEventListener('click', () => {
//     // links.classList.remove('links');
//    // links.classList.add('mylink');
//     links.classList.toggle('mylinks');
//     linksul.classList.toggle('mylinksul');
// });

// var modal_add_contact=document.getElementById('modal_add_contact');

// modal_add_contact.addEventListener('click', () => {

// let modal_contact=document.getElementById('modal_contact');
//     modal_contact.style.display = 'block'; // Change text color
// });

// var exit=document.getElementById('exit');
// exit.addEventListener('click', () => {

//     let modal_contact=document.getElementById('modal_contact');
//         modal_contact.style.display = 'none'; // Change text color
//     });
// var btncontactMe=document.getElementsByClassName('btncontact_me');
//  btncontactMe[0].addEventListener('click', () => {

//     let modal_contact=document.getElementById('modal_contact');
//         modal_contact.style.display = 'block'; // Change text color
//     });



var profile_photo = document.getElementById('profile_photo');

profile_photo.addEventListener('click', () => {

    let settings = document.getElementById('mysettings');
    // settings.style.display = 'block'; //settings_toogle
    settings.classList.toggle('toggle_block');
});

var menubar = document.getElementById('menubar');
var sidebar = document.getElementById('sidebar');
menubar.addEventListener('click', () => {

    sidebar.classList.toggle('toggle_block');
});

var mainsidebar_home = document.getElementById('mainsidebar_home');
var subsidebar_home = document.getElementById('subsidebar_home');
mainsidebar_home.addEventListener('click', () => {

    subsidebar_home.classList.toggle('toggle_block');
    // Select the parent element containing the spans
    const mainsidebar = document.querySelector('#mainsidebar_home');

    // Find the second <span> child
    const secondSpan = mainsidebar.querySelectorAll('span')[1];

    // Target the <i> with the class "fa-caret-down" inside the second <span>
    const caretDownIcon = secondSpan.querySelector('.fa-caret-down');
    const caretDRownIcon = secondSpan.querySelector('.fa-caret-right');
    caretDownIcon.classList.toggle('toggle_block');
    caretDRownIcon.classList.toggle('toggle_none');

});

var mainsidebar_contact= document.getElementById('mainsidebar_contact');
var subsidebar_contact = document.getElementById('subsidebar_contact');
mainsidebar_contact.addEventListener('click', () => {

    subsidebar_contact.classList.toggle('toggle_block');
    // Select the parent element containing the spans
    const mainsidebar = document.querySelector('#mainsidebar_contact');

    // Find the second <span> child
    const secondSpan = mainsidebar.querySelectorAll('span')[1];

    // Target the <i> with the class "fa-caret-down" inside the second <span>
    const caretDownIcon = secondSpan.querySelector('.fa-caret-down');
    const caretDRownIcon = secondSpan.querySelector('.fa-caret-right');
    caretDownIcon.classList.toggle('toggle_block');
    caretDRownIcon.classList.toggle('toggle_none');

});
//  var modal_add_contact=document.getElementById('modal_add_contact');


