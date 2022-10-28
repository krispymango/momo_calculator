//Menu bar functionalities
  function MenuBar()
  {
    $(document).ready(function() {
  $('.settings_modal').hide();
  $('.menu_bar_wrapper').show();
  $('.menu_bar').show('slide', {direction: 'left'}, 0);
    });
  }

  function HideMenuBar()
  {
    $(document).ready(function() {
  $('.menu_bar').hide('slide', {direction: 'left'}, 1000,function()
   {
  $('.menu_bar_wrapper').hide();
  });
  });
  }


  function CloseDetailButton()
  {
    $(document).ready(function() {
  $('.calc_container').hide();
    });
  }


  function onlyNumberKey(evt)
        {
             // Only ASCII character in that range allowed
             var ASCIICode = (evt.which) ? evt.which : evt.keyCode
             if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                 return false;
             return true;
         }
//Menu bar functionalities





//Settings functionalities
  function SettingsBar()
  {
    $(document).ready(function() {
  $('.settings_bar_wrapper').show();
  });
  }

  function HideSettingsBar()
  {
    $(document).ready(function() {
  $('.settings_bar_wrapper').hide();
  });
  }
//Settings functionalities




//Music functionalities

var popSound = new Audio('https://apps.kriolay.com/momo_calculator/assets/sound/click.wav');
popSound.volume = 0.4;
let sfxStopped = true;



function PlayPopSound()
{
  if (sfxStopped == false)
  {
    document.getElementById('muteSfx').style.display = "none";
    document.getElementById('unmuteSfx').style.display = "block";
    popSound.play();
    if(!popSound.paused)
    {
    popSound.currentTime = 0;
  }
  sfxStopped = true;
  }
  else if(sfxStopped == true)
  {
    document.getElementById('muteSfx').style.display = "block";
    document.getElementById('unmuteSfx').style.display = "none";
    popSound.pause();
    sfxStopped = false;
  }
}

function Playsfx()
{
  if (sfxStopped == true)
  {
    popSound.play();
    if(!popSound.paused)
    {
    popSound.currentTime = 0;
  }
  }
}



//Music functionalities
