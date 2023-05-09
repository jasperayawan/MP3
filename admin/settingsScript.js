
let general_data, contacts_data;

let general_settings_form = document.getElementById('general_settings_form')
let site_title_inp = document.getElementById('site_title_inp');
let site_about_inp = document.getElementById('site_about_inp');

function get_general()
{
  let site_title = document.getElementById('site_title');
  let site_about = document.getElementById('site_about');


  let shutdown_toggle = document.getElementById('shutdown-toggle');

  let xhr = new XMLHttpRequest();
  xhr.open("POST","ajax/settings_crud.php",true);
  xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

  xhr.onload = function(){
    general_data = JSON.parse(this.responseText);

    site_title.innerText = general_data.site_title;
    site_about.innerText = general_data.site_about;

    site_title_inp.value = general_data.site_title;
    site_about_inp.value = general_data.site_about;

    if(general_data.shutdown == 0){
      shutdown_toggle.checked = false;
      shutdown_toggle.value = 0;
    }else{
      shutdown_toggle.checked = true;
      shutdown_toggle.value = 1;
    }
  }

  xhr.send('get_general');
}

general_settings_form.addEventListener('submit', function(e){
  e.preventDefault();
  update_general(site_title_inp.value,site_about_inp.value);

})

function update_general(site_title_val,site_about_val)
{
  let xhr = new XMLHttpRequest();
  xhr.open("POST","ajax/settings_crud.php",true);
  xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

  xhr.onload = function(){

      var myModal = document.getElementById('general-settings');
      var modal = bootstrap.Modal.getInstance(myModal);

      modal.hide();
      console.log(this.responseText);

      if(this.responseText == 1)
      {
          alert('success','Changes saved');
          get_general();
      }
      else{
        alert('error', 'No changes made')
      }
  }

  xhr.send('site_title='+site_title_val+'&site_about='+site_about_val+'&update_general');
}

function update_shutdown(val)
{
  let xhr = new XMLHttpRequest();
  xhr.open("POST","ajax/settings_crud.php",true);
  xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

  xhr.onload = function(){
      if(this.responseText == 1 && general_data.shutdown == 0)
      {
          alert('success','Bayangan has been shutdown!');
      }
      else{
        alert('success', 'Shutdown mode off')
      }
      get_general();
  }

  xhr.send('update_shutdown='+val);
}

function get_contacts()
{
  let contacts_p_id = ['address','gmap','phone1','phone2','email','facebook','instagram','twitter']
  let iframe = document.getElementById('iframe')

  let xhr = new XMLHttpRequest();
  xhr.open("POST","ajax/settings_crud.php",true);
  xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

  xhr.onload = function(){
    contacts_data = JSON.parse(this.responseText);
    contacts_data = Object.values(contacts_data);

    for(i = 0; i < contacts_p_id.length; i++)
    {
      document.getElementById(contacts_p_id[i]).innerText = contacts_data[i+1];
    }
    iframe.src = contacts_data[9];
    contacts_inp(contacts_data);
  }

  xhr.send('get_contacts');
}

function contacts_inp(data)
{
    let contacts_inp_id = ['address_inp','gmap_inp','phone1_inp','phone2_inp','email_inp','facebook_inp','instagram_inp','twitter_inp','iframe_inp']

    for(i = 0; i < contacts_inp_id.length; i++)
    {
        document.getElementById(contacts_inp_id[i]).value = data[i+1];
    }
}

window.onload = function(){
  get_general();
  get_contacts();
}