$(document).ready(function(){

    $('section').load('pages/home.html');

    $('#btnHome').click(function(){
        $('section').load('pages/home.html');
    })

    $('#btnAbout').click(function(){
        $('section').load('pages/about.html');
    })

    $('#btnProduct').click(function(){
        $('section').load('pages/produc.html');
    })
  
  });