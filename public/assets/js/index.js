var menubar=document.getElementById('menubar');
var links=document.getElementById('links');
var linksul=document.getElementById('linksul');

menubar.addEventListener('click', () => {
    // links.classList.remove('links');
   // links.classList.add('mylink');
    links.classList.toggle('mylinks');
    linksul.classList.toggle('mylinksul');
});

var modal_add_contact=document.getElementById('modal_add_contact');

modal_add_contact.addEventListener('click', () => {
   
let modal_contact=document.getElementById('modal_contact');
    modal_contact.style.display = 'block'; // Change text color
});

// var exit=document.getElementById('exit');
// exit.addEventListener('click', () => {
   
//     let modal_contact=document.getElementById('modal_contact');
//         modal_contact.style.display = 'none'; // Change text color
//     });
var btncontactMe=document.getElementsByClassName('btncontact_me');
 btncontactMe[0].addEventListener('click', () => {
   
    let modal_contact=document.getElementById('modal_contact');
        modal_contact.style.display = 'block'; // Change text color
    });

//     var profile_photo=document.getElementById('profile_photo');

//     profile_photo.addEventListener('click', () => {
   
//         let settings=document.getElementById('mysettings');
//         settings.style.display = 'block'; // Change text color
// });


var mylang = document.getElementById('mylang');

mylang.addEventListener('click', () => {

    let mylangitems = document.getElementById('mylangitems');
    // settings.style.display = 'block'; //settings_toogle
    mylangitems.classList.toggle('toggle_block');
});



//  var modal_add_contact=document.getElementById('modal_add_contact');
